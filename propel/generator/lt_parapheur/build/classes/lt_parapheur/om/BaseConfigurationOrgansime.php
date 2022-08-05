<?php


/**
 * Base class that represents a row from the 'configuration_organsime' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseConfigurationOrgansime extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ConfigurationOrgansimePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ConfigurationOrgansimePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id field.
     * @var        int
     */
    protected $id;

    /**
     * The value for the niveau_lieu field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $niveau_lieu;

    /**
     * The value for the valeur_defaut_pays field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $valeur_defaut_pays;

    /**
     * The value for the valeur_defaut_region field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $valeur_defaut_region;

    /**
     * The value for the valeur_defaut_province field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $valeur_defaut_province;

    /**
     * The value for the valeur_par_defaut_commune field.
     * @var        int
     */
    protected $valeur_par_defaut_commune;

    /**
     * The value for the mode_affectation_demande field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $mode_affectation_demande;

    /**
     * The value for the module_entite_lie_lieu field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $module_entite_lie_lieu;

    /**
     * The value for the nbr_jour_delai_traitement field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $nbr_jour_delai_traitement;

    /**
     * The value for the obligation_lieu_demande field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $obligation_lieu_demande;

    /**
     * The value for the module_google_maps field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $module_google_maps;

    /**
     * The value for the visibilite_champ_localisation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $visibilite_champ_localisation;

    /**
     * The value for the echange_web_service field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $echange_web_service;

    /**
     * The value for the id_entite field.
     * Note: this column has a database default value of: 1
     * @var        int
     */
    protected $id_entite;

    /**
     * The value for the obligation_nom_prenom_requerant field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $obligation_nom_prenom_requerant;

    /**
     * The value for the obligation_nom_organisme_requerant field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $obligation_nom_organisme_requerant;

    /**
     * The value for the obligation_registre_commerce_requerant field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $obligation_registre_commerce_requerant;

    /**
     * The value for the obligation_telephone_requerant field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $obligation_telephone_requerant;

    /**
     * The value for the visibilite_registre_commerce_requerant field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $visibilite_registre_commerce_requerant;

    /**
     * The value for the visibilite_identifiant_fiscal field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $visibilite_identifiant_fiscal;

    /**
     * The value for the obligation_identifiant_fiscal field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $obligation_identifiant_fiscal;

    /**
     * The value for the delai_cloture_demande field.
     * Note: this column has a database default value of: 7
     * @var        int
     */
    protected $delai_cloture_demande;

    /**
     * The value for the notification_avant_date_reponse field.
     * Note: this column has a database default value of: 7
     * @var        int
     */
    protected $notification_avant_date_reponse;

    /**
     * The value for the borne_traitement_demande field.
     * Note: this column has a database default value of: 7
     * @var        int
     */
    protected $borne_traitement_demande;

    /**
     * The value for the regle_numero_demande_entrant field.
     * Note: this column has a database default value of: '{ALEA}'
     * @var        string
     */
    protected $regle_numero_demande_entrant;

    /**
     * The value for the regle_numero_demande_sortant field.
     * Note: this column has a database default value of: '{ALEA}'
     * @var        string
     */
    protected $regle_numero_demande_sortant;

    /**
     * The value for the regle_numero_demande_interne field.
     * Note: this column has a database default value of: '{ALEA}'
     * @var        string
     */
    protected $regle_numero_demande_interne;

    /**
     * The value for the visibilite_bloc_reponse_obligatoire field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $visibilite_bloc_reponse_obligatoire;

    /**
     * The value for the visibilite_bloc_lieu_concerne field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $visibilite_bloc_lieu_concerne;

    /**
     * The value for the obligation_message_demande field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $obligation_message_demande;

    /**
     * The value for the obligation_email_demandeur field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $obligation_email_demandeur;

    /**
     * The value for the obligation_sous_theme field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $obligation_sous_theme;

    /**
     * The value for the visiblitie_condition_utilisation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $visiblitie_condition_utilisation;

    /**
     * The value for the condition_utilisation_ar field.
     * @var        string
     */
    protected $condition_utilisation_ar;

    /**
     * The value for the condition_utilisation_fr field.
     * @var        string
     */
    protected $condition_utilisation_fr;

    /**
     * The value for the gestion_demandeur_par_entite field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gestion_demandeur_par_entite;

    /**
     * The value for the valeur_defaut_type_demande field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $valeur_defaut_type_demande;

    /**
     * The value for the valeur_defaut_reponse_obligatoire field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $valeur_defaut_reponse_obligatoire;

    /**
     * The value for the acces_extranet field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $acces_extranet;

    /**
     * The value for the langue_par_defaut_extranet field.
     * Note: this column has a database default value of: 'ar'
     * @var        string
     */
    protected $langue_par_defaut_extranet;

    /**
     * The value for the google_analytics field.
     * @var        string
     */
    protected $google_analytics;

    /**
     * The value for the chiffrement field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $chiffrement;

    /**
     * The value for the id_entite_centrale field.
     * @var        int
     */
    protected $id_entite_centrale;

    /**
     * The value for the service_notification_sms field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $service_notification_sms;

    /**
     * The value for the login_service_sms field.
     * @var        string
     */
    protected $login_service_sms;

    /**
     * The value for the pass_service_sms field.
     * @var        string
     */
    protected $pass_service_sms;

    /**
     * The value for the code_envoi_sms field.
     * @var        string
     */
    protected $code_envoi_sms;

    /**
     * The value for the url_service_sms field.
     * @var        string
     */
    protected $url_service_sms;

    /**
     * The value for the circuit_validation field.
     * @var        string
     */
    protected $circuit_validation;

    /**
     * The value for the visibilite_message_demande field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $visibilite_message_demande;

    /**
     * The value for the code_signataire_certificat field.
     * Note: this column has a database default value of: 'CN'
     * @var        string
     */
    protected $code_signataire_certificat;

    /**
     * The value for the acces_statistiques field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $acces_statistiques;

    /**
     * The value for the webservice_demande field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $webservice_demande;

    /**
     * The value for the url_webservice_demande field.
     * @var        string
     */
    protected $url_webservice_demande;

    /**
     * The value for the jeton_webservice field.
     * @var        string
     */
    protected $jeton_webservice;

    /**
     * The value for the identifiant_entite_reception field.
     * @var        int
     */
    protected $identifiant_entite_reception;

    /**
     * The value for the identifiant_sous_theme field.
     * @var        int
     */
    protected $identifiant_sous_theme;

    /**
     * The value for the scanner field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $scanner;

    /**
     * The value for the activation_auth_socle field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $activation_auth_socle;

    /**
     * The value for the affichage_enregistrer_generer_numero field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $affichage_enregistrer_generer_numero;

    /**
     * The value for the jeton_org_service field.
     * @var        string
     */
    protected $jeton_org_service;

    /**
     * The value for the onglet_depuis_1 field.
     * @var        int
     */
    protected $onglet_depuis_1;

    /**
     * The value for the onglet_depuis_2 field.
     * @var        int
     */
    protected $onglet_depuis_2;

    /**
     * The value for the nombre_reouverture field.
     * Note: this column has a database default value of: 3
     * @var        int
     */
    protected $nombre_reouverture;

    /**
     * The value for the centre_appel field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $centre_appel;

    /**
     * The value for the url_ws_ca field.
     * @var        string
     */
    protected $url_ws_ca;

    /**
     * The value for the authentification_ldap field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $authentification_ldap;

    /**
     * The value for the ip_ldap field.
     * @var        string
     */
    protected $ip_ldap;

    /**
     * The value for the base_dn_ldap field.
     * @var        string
     */
    protected $base_dn_ldap;

    /**
     * The value for the user_ldap field.
     * @var        string
     */
    protected $user_ldap;

    /**
     * The value for the password_ldap field.
     * @var        string
     */
    protected $password_ldap;

    /**
     * The value for the schema_ldap field.
     * @var        string
     */
    protected $schema_ldap;

    /**
     * The value for the port_ldap field.
     * @var        int
     */
    protected $port_ldap;

    /**
     * The value for the prolongation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $prolongation;

    /**
     * The value for the duree_prolongation field.
     * @var        int
     */
    protected $duree_prolongation;

    /**
     * The value for the organisme_parametrage field.
     * @var        int
     */
    protected $organisme_parametrage;

    /**
     * The value for the organisme_gestion_utilisateurs field.
     * @var        int
     */
    protected $organisme_gestion_utilisateurs;

    /**
     * The value for the type_gestion_utilisateur field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $type_gestion_utilisateur;

    /**
     * The value for the multi_affectation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $multi_affectation;

    /**
     * The value for the taux_echeance field.
     * Note: this column has a database default value of: 0.7
     * @var        double
     */
    protected $taux_echeance;

    /**
     * The value for the reponse_affectation_externe field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $reponse_affectation_externe;

    /**
     * The value for the increment_confidentiel field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $increment_confidentiel;

    /**
     * The value for the obligation_emetteur_courrier_entrant field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $obligation_emetteur_courrier_entrant;

    /**
     * The value for the obligation_emetteur_courrier_interne field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $obligation_emetteur_courrier_interne;

    /**
     * The value for the obligation_destinataire_courrier_sortant field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $obligation_destinataire_courrier_sortant;

    /**
     * The value for the obligation_destinataire_mentionne_courrier_entrant field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $obligation_destinataire_mentionne_courrier_entrant;

    /**
     * The value for the obligation_destinataire_courrier_interne field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $obligation_destinataire_courrier_interne;

    /**
     * The value for the obligation_objet field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $obligation_objet;

    /**
     * The value for the obligation_signataire field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $obligation_signataire;

    /**
     * The value for the gestion_demandeurs field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gestion_demandeurs;

    /**
     * The value for the numero_fournisseur field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $numero_fournisseur;

    /**
     * The value for the type_delai field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $type_delai;

    /**
     * The value for the num_provisoire field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $num_provisoire;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->niveau_lieu = 0;
        $this->valeur_defaut_pays = 0;
        $this->valeur_defaut_region = 0;
        $this->valeur_defaut_province = 0;
        $this->mode_affectation_demande = '1';
        $this->module_entite_lie_lieu = '0';
        $this->nbr_jour_delai_traitement = 0;
        $this->obligation_lieu_demande = '0';
        $this->module_google_maps = '1';
        $this->visibilite_champ_localisation = '0';
        $this->echange_web_service = '0';
        $this->id_entite = 1;
        $this->obligation_nom_prenom_requerant = '0';
        $this->obligation_nom_organisme_requerant = '0';
        $this->obligation_registre_commerce_requerant = '0';
        $this->obligation_telephone_requerant = '0';
        $this->visibilite_registre_commerce_requerant = '0';
        $this->visibilite_identifiant_fiscal = '0';
        $this->obligation_identifiant_fiscal = '0';
        $this->delai_cloture_demande = 7;
        $this->notification_avant_date_reponse = 7;
        $this->borne_traitement_demande = 7;
        $this->regle_numero_demande_entrant = '{ALEA}';
        $this->regle_numero_demande_sortant = '{ALEA}';
        $this->regle_numero_demande_interne = '{ALEA}';
        $this->visibilite_bloc_reponse_obligatoire = '0';
        $this->visibilite_bloc_lieu_concerne = '0';
        $this->obligation_message_demande = '0';
        $this->obligation_email_demandeur = '1';
        $this->obligation_sous_theme = '1';
        $this->visiblitie_condition_utilisation = '0';
        $this->gestion_demandeur_par_entite = '0';
        $this->valeur_defaut_type_demande = 0;
        $this->valeur_defaut_reponse_obligatoire = '1';
        $this->acces_extranet = '0';
        $this->langue_par_defaut_extranet = 'ar';
        $this->chiffrement = '0';
        $this->service_notification_sms = '0';
        $this->visibilite_message_demande = '1';
        $this->code_signataire_certificat = 'CN';
        $this->acces_statistiques = '0';
        $this->webservice_demande = '0';
        $this->scanner = '0';
        $this->activation_auth_socle = '0';
        $this->affichage_enregistrer_generer_numero = '0';
        $this->nombre_reouverture = 3;
        $this->centre_appel = '0';
        $this->authentification_ldap = '0';
        $this->prolongation = '0';
        $this->type_gestion_utilisateur = '1';
        $this->multi_affectation = '0';
        $this->taux_echeance = 0.7;
        $this->reponse_affectation_externe = '1';
        $this->increment_confidentiel = '0';
        $this->obligation_emetteur_courrier_entrant = '1';
        $this->obligation_emetteur_courrier_interne = '0';
        $this->obligation_destinataire_courrier_sortant = '0';
        $this->obligation_destinataire_mentionne_courrier_entrant = '0';
        $this->obligation_destinataire_courrier_interne = '0';
        $this->obligation_objet = '1';
        $this->obligation_signataire = '0';
        $this->gestion_demandeurs = '0';
        $this->numero_fournisseur = '0';
        $this->type_delai = '1';
        $this->num_provisoire = '0';
    }

    /**
     * Initializes internal state of BaseConfigurationOrgansime object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id] column value.
     * 
     * @return int
     */
    public function getId()
    {

        return $this->id;
    }

    /**
     * Get the [niveau_lieu] column value.
     * 
     * @return int
     */
    public function getNiveauLieu()
    {

        return $this->niveau_lieu;
    }

    /**
     * Get the [valeur_defaut_pays] column value.
     * 
     * @return int
     */
    public function getValeurDefautPays()
    {

        return $this->valeur_defaut_pays;
    }

    /**
     * Get the [valeur_defaut_region] column value.
     * 
     * @return int
     */
    public function getValeurDefautRegion()
    {

        return $this->valeur_defaut_region;
    }

    /**
     * Get the [valeur_defaut_province] column value.
     * 
     * @return int
     */
    public function getValeurDefautProvince()
    {

        return $this->valeur_defaut_province;
    }

    /**
     * Get the [valeur_par_defaut_commune] column value.
     * 
     * @return int
     */
    public function getValeurParDefautCommune()
    {

        return $this->valeur_par_defaut_commune;
    }

    /**
     * Get the [mode_affectation_demande] column value.
     * 
     * @return string
     */
    public function getModeAffectationDemande()
    {

        return $this->mode_affectation_demande;
    }

    /**
     * Get the [module_entite_lie_lieu] column value.
     * 
     * @return string
     */
    public function getModuleEntiteLieLieu()
    {

        return $this->module_entite_lie_lieu;
    }

    /**
     * Get the [nbr_jour_delai_traitement] column value.
     * 
     * @return int
     */
    public function getNbrJourDelaiTraitement()
    {

        return $this->nbr_jour_delai_traitement;
    }

    /**
     * Get the [obligation_lieu_demande] column value.
     * 
     * @return string
     */
    public function getObligationLieuDemande()
    {

        return $this->obligation_lieu_demande;
    }

    /**
     * Get the [module_google_maps] column value.
     * 
     * @return string
     */
    public function getModuleGoogleMaps()
    {

        return $this->module_google_maps;
    }

    /**
     * Get the [visibilite_champ_localisation] column value.
     * 
     * @return string
     */
    public function getVisibiliteChampLocalisation()
    {

        return $this->visibilite_champ_localisation;
    }

    /**
     * Get the [echange_web_service] column value.
     * 
     * @return string
     */
    public function getEchangeWebService()
    {

        return $this->echange_web_service;
    }

    /**
     * Get the [id_entite] column value.
     * 
     * @return int
     */
    public function getIdEntite()
    {

        return $this->id_entite;
    }

    /**
     * Get the [obligation_nom_prenom_requerant] column value.
     * 
     * @return string
     */
    public function getObligationNomPrenomRequerant()
    {

        return $this->obligation_nom_prenom_requerant;
    }

    /**
     * Get the [obligation_nom_organisme_requerant] column value.
     * 
     * @return string
     */
    public function getObligationNomOrganismeRequerant()
    {

        return $this->obligation_nom_organisme_requerant;
    }

    /**
     * Get the [obligation_registre_commerce_requerant] column value.
     * 
     * @return string
     */
    public function getObligationRegistreCommerceRequerant()
    {

        return $this->obligation_registre_commerce_requerant;
    }

    /**
     * Get the [obligation_telephone_requerant] column value.
     * 
     * @return string
     */
    public function getObligationTelephoneRequerant()
    {

        return $this->obligation_telephone_requerant;
    }

    /**
     * Get the [visibilite_registre_commerce_requerant] column value.
     * 
     * @return string
     */
    public function getVisibiliteRegistreCommerceRequerant()
    {

        return $this->visibilite_registre_commerce_requerant;
    }

    /**
     * Get the [visibilite_identifiant_fiscal] column value.
     * 
     * @return string
     */
    public function getVisibiliteIdentifiantFiscal()
    {

        return $this->visibilite_identifiant_fiscal;
    }

    /**
     * Get the [obligation_identifiant_fiscal] column value.
     * 
     * @return string
     */
    public function getObligationIdentifiantFiscal()
    {

        return $this->obligation_identifiant_fiscal;
    }

    /**
     * Get the [delai_cloture_demande] column value.
     * 
     * @return int
     */
    public function getDelaiClotureDemande()
    {

        return $this->delai_cloture_demande;
    }

    /**
     * Get the [notification_avant_date_reponse] column value.
     * 
     * @return int
     */
    public function getNotificationAvantDateReponse()
    {

        return $this->notification_avant_date_reponse;
    }

    /**
     * Get the [borne_traitement_demande] column value.
     * 
     * @return int
     */
    public function getBorneTraitementDemande()
    {

        return $this->borne_traitement_demande;
    }

    /**
     * Get the [regle_numero_demande_entrant] column value.
     * 
     * @return string
     */
    public function getRegleNumeroDemandeEntrant()
    {

        return $this->regle_numero_demande_entrant;
    }

    /**
     * Get the [regle_numero_demande_sortant] column value.
     * 
     * @return string
     */
    public function getRegleNumeroDemandeSortant()
    {

        return $this->regle_numero_demande_sortant;
    }

    /**
     * Get the [regle_numero_demande_interne] column value.
     * 
     * @return string
     */
    public function getRegleNumeroDemandeInterne()
    {

        return $this->regle_numero_demande_interne;
    }

    /**
     * Get the [visibilite_bloc_reponse_obligatoire] column value.
     * 
     * @return string
     */
    public function getVisibiliteBlocReponseObligatoire()
    {

        return $this->visibilite_bloc_reponse_obligatoire;
    }

    /**
     * Get the [visibilite_bloc_lieu_concerne] column value.
     * 
     * @return string
     */
    public function getVisibiliteBlocLieuConcerne()
    {

        return $this->visibilite_bloc_lieu_concerne;
    }

    /**
     * Get the [obligation_message_demande] column value.
     * 
     * @return string
     */
    public function getObligationMessageDemande()
    {

        return $this->obligation_message_demande;
    }

    /**
     * Get the [obligation_email_demandeur] column value.
     * 
     * @return string
     */
    public function getObligationEmailDemandeur()
    {

        return $this->obligation_email_demandeur;
    }

    /**
     * Get the [obligation_sous_theme] column value.
     * 
     * @return string
     */
    public function getObligationSousTheme()
    {

        return $this->obligation_sous_theme;
    }

    /**
     * Get the [visiblitie_condition_utilisation] column value.
     * 
     * @return string
     */
    public function getVisiblitieConditionUtilisation()
    {

        return $this->visiblitie_condition_utilisation;
    }

    /**
     * Get the [condition_utilisation_ar] column value.
     * 
     * @return string
     */
    public function getConditionUtilisationAr()
    {

        return $this->condition_utilisation_ar;
    }

    /**
     * Get the [condition_utilisation_fr] column value.
     * 
     * @return string
     */
    public function getConditionUtilisationFr()
    {

        return $this->condition_utilisation_fr;
    }

    /**
     * Get the [gestion_demandeur_par_entite] column value.
     * 
     * @return string
     */
    public function getGestionDemandeurParEntite()
    {

        return $this->gestion_demandeur_par_entite;
    }

    /**
     * Get the [valeur_defaut_type_demande] column value.
     * 
     * @return int
     */
    public function getValeurDefautTypeDemande()
    {

        return $this->valeur_defaut_type_demande;
    }

    /**
     * Get the [valeur_defaut_reponse_obligatoire] column value.
     * 
     * @return string
     */
    public function getValeurDefautReponseObligatoire()
    {

        return $this->valeur_defaut_reponse_obligatoire;
    }

    /**
     * Get the [acces_extranet] column value.
     * 
     * @return string
     */
    public function getAccesExtranet()
    {

        return $this->acces_extranet;
    }

    /**
     * Get the [langue_par_defaut_extranet] column value.
     * 
     * @return string
     */
    public function getLangueParDefautExtranet()
    {

        return $this->langue_par_defaut_extranet;
    }

    /**
     * Get the [google_analytics] column value.
     * 
     * @return string
     */
    public function getGoogleAnalytics()
    {

        return $this->google_analytics;
    }

    /**
     * Get the [chiffrement] column value.
     * 
     * @return string
     */
    public function getChiffrement()
    {

        return $this->chiffrement;
    }

    /**
     * Get the [id_entite_centrale] column value.
     * 
     * @return int
     */
    public function getIdEntiteCentrale()
    {

        return $this->id_entite_centrale;
    }

    /**
     * Get the [service_notification_sms] column value.
     * 
     * @return string
     */
    public function getServiceNotificationSms()
    {

        return $this->service_notification_sms;
    }

    /**
     * Get the [login_service_sms] column value.
     * 
     * @return string
     */
    public function getLoginServiceSms()
    {

        return $this->login_service_sms;
    }

    /**
     * Get the [pass_service_sms] column value.
     * 
     * @return string
     */
    public function getPassServiceSms()
    {

        return $this->pass_service_sms;
    }

    /**
     * Get the [code_envoi_sms] column value.
     * 
     * @return string
     */
    public function getCodeEnvoiSms()
    {

        return $this->code_envoi_sms;
    }

    /**
     * Get the [url_service_sms] column value.
     * 
     * @return string
     */
    public function getUrlServiceSms()
    {

        return $this->url_service_sms;
    }

    /**
     * Get the [circuit_validation] column value.
     * 
     * @return string
     */
    public function getCircuitValidation()
    {

        return $this->circuit_validation;
    }

    /**
     * Get the [visibilite_message_demande] column value.
     * 
     * @return string
     */
    public function getVisibiliteMessageDemande()
    {

        return $this->visibilite_message_demande;
    }

    /**
     * Get the [code_signataire_certificat] column value.
     * 
     * @return string
     */
    public function getCodeSignataireCertificat()
    {

        return $this->code_signataire_certificat;
    }

    /**
     * Get the [acces_statistiques] column value.
     * 
     * @return string
     */
    public function getAccesStatistiques()
    {

        return $this->acces_statistiques;
    }

    /**
     * Get the [webservice_demande] column value.
     * 
     * @return string
     */
    public function getWebserviceDemande()
    {

        return $this->webservice_demande;
    }

    /**
     * Get the [url_webservice_demande] column value.
     * 
     * @return string
     */
    public function getUrlWebserviceDemande()
    {

        return $this->url_webservice_demande;
    }

    /**
     * Get the [jeton_webservice] column value.
     * 
     * @return string
     */
    public function getJetonWebservice()
    {

        return $this->jeton_webservice;
    }

    /**
     * Get the [identifiant_entite_reception] column value.
     * 
     * @return int
     */
    public function getIdentifiantEntiteReception()
    {

        return $this->identifiant_entite_reception;
    }

    /**
     * Get the [identifiant_sous_theme] column value.
     * 
     * @return int
     */
    public function getIdentifiantSousTheme()
    {

        return $this->identifiant_sous_theme;
    }

    /**
     * Get the [scanner] column value.
     * 
     * @return string
     */
    public function getScanner()
    {

        return $this->scanner;
    }

    /**
     * Get the [activation_auth_socle] column value.
     * 
     * @return string
     */
    public function getActivationAuthSocle()
    {

        return $this->activation_auth_socle;
    }

    /**
     * Get the [affichage_enregistrer_generer_numero] column value.
     * 
     * @return string
     */
    public function getAffichageEnregistrerGenererNumero()
    {

        return $this->affichage_enregistrer_generer_numero;
    }

    /**
     * Get the [jeton_org_service] column value.
     * 
     * @return string
     */
    public function getJetonOrgService()
    {

        return $this->jeton_org_service;
    }

    /**
     * Get the [onglet_depuis_1] column value.
     * 
     * @return int
     */
    public function getOngletDepuis1()
    {

        return $this->onglet_depuis_1;
    }

    /**
     * Get the [onglet_depuis_2] column value.
     * 
     * @return int
     */
    public function getOngletDepuis2()
    {

        return $this->onglet_depuis_2;
    }

    /**
     * Get the [nombre_reouverture] column value.
     * 
     * @return int
     */
    public function getNombreReouverture()
    {

        return $this->nombre_reouverture;
    }

    /**
     * Get the [centre_appel] column value.
     * 
     * @return string
     */
    public function getCentreAppel()
    {

        return $this->centre_appel;
    }

    /**
     * Get the [url_ws_ca] column value.
     * 
     * @return string
     */
    public function getUrlWsCa()
    {

        return $this->url_ws_ca;
    }

    /**
     * Get the [authentification_ldap] column value.
     * 
     * @return string
     */
    public function getAuthentificationLdap()
    {

        return $this->authentification_ldap;
    }

    /**
     * Get the [ip_ldap] column value.
     * 
     * @return string
     */
    public function getIpLdap()
    {

        return $this->ip_ldap;
    }

    /**
     * Get the [base_dn_ldap] column value.
     * 
     * @return string
     */
    public function getBaseDnLdap()
    {

        return $this->base_dn_ldap;
    }

    /**
     * Get the [user_ldap] column value.
     * 
     * @return string
     */
    public function getUserLdap()
    {

        return $this->user_ldap;
    }

    /**
     * Get the [password_ldap] column value.
     * 
     * @return string
     */
    public function getPasswordLdap()
    {

        return $this->password_ldap;
    }

    /**
     * Get the [schema_ldap] column value.
     * 
     * @return string
     */
    public function getSchemaLdap()
    {

        return $this->schema_ldap;
    }

    /**
     * Get the [port_ldap] column value.
     * 
     * @return int
     */
    public function getPortLdap()
    {

        return $this->port_ldap;
    }

    /**
     * Get the [prolongation] column value.
     * 
     * @return string
     */
    public function getProlongation()
    {

        return $this->prolongation;
    }

    /**
     * Get the [duree_prolongation] column value.
     * 
     * @return int
     */
    public function getDureeProlongation()
    {

        return $this->duree_prolongation;
    }

    /**
     * Get the [organisme_parametrage] column value.
     * 
     * @return int
     */
    public function getOrganismeParametrage()
    {

        return $this->organisme_parametrage;
    }

    /**
     * Get the [organisme_gestion_utilisateurs] column value.
     * 
     * @return int
     */
    public function getOrganismeGestionUtilisateurs()
    {

        return $this->organisme_gestion_utilisateurs;
    }

    /**
     * Get the [type_gestion_utilisateur] column value.
     * 
     * @return string
     */
    public function getTypeGestionUtilisateur()
    {

        return $this->type_gestion_utilisateur;
    }

    /**
     * Get the [multi_affectation] column value.
     * 
     * @return string
     */
    public function getMultiAffectation()
    {

        return $this->multi_affectation;
    }

    /**
     * Get the [taux_echeance] column value.
     * 
     * @return double
     */
    public function getTauxEcheance()
    {

        return $this->taux_echeance;
    }

    /**
     * Get the [reponse_affectation_externe] column value.
     * 
     * @return string
     */
    public function getReponseAffectationExterne()
    {

        return $this->reponse_affectation_externe;
    }

    /**
     * Get the [increment_confidentiel] column value.
     * 
     * @return string
     */
    public function getIncrementConfidentiel()
    {

        return $this->increment_confidentiel;
    }

    /**
     * Get the [obligation_emetteur_courrier_entrant] column value.
     * 
     * @return string
     */
    public function getObligationEmetteurCourrierEntrant()
    {

        return $this->obligation_emetteur_courrier_entrant;
    }

    /**
     * Get the [obligation_emetteur_courrier_interne] column value.
     * 
     * @return string
     */
    public function getObligationEmetteurCourrierInterne()
    {

        return $this->obligation_emetteur_courrier_interne;
    }

    /**
     * Get the [obligation_destinataire_courrier_sortant] column value.
     * 
     * @return string
     */
    public function getObligationDestinataireCourrierSortant()
    {

        return $this->obligation_destinataire_courrier_sortant;
    }

    /**
     * Get the [obligation_destinataire_mentionne_courrier_entrant] column value.
     * 
     * @return string
     */
    public function getObligationDestinataireMentionneCourrierEntrant()
    {

        return $this->obligation_destinataire_mentionne_courrier_entrant;
    }

    /**
     * Get the [obligation_destinataire_courrier_interne] column value.
     * 
     * @return string
     */
    public function getObligationDestinataireCourrierInterne()
    {

        return $this->obligation_destinataire_courrier_interne;
    }

    /**
     * Get the [obligation_objet] column value.
     * 
     * @return string
     */
    public function getObligationObjet()
    {

        return $this->obligation_objet;
    }

    /**
     * Get the [obligation_signataire] column value.
     * 
     * @return string
     */
    public function getObligationSignataire()
    {

        return $this->obligation_signataire;
    }

    /**
     * Get the [gestion_demandeurs] column value.
     * 
     * @return string
     */
    public function getGestionDemandeurs()
    {

        return $this->gestion_demandeurs;
    }

    /**
     * Get the [numero_fournisseur] column value.
     * 
     * @return string
     */
    public function getNumeroFournisseur()
    {

        return $this->numero_fournisseur;
    }

    /**
     * Get the [type_delai] column value.
     * 
     * @return string
     */
    public function getTypeDelai()
    {

        return $this->type_delai;
    }

    /**
     * Get the [num_provisoire] column value.
     * 
     * @return string
     */
    public function getNumProvisoire()
    {

        return $this->num_provisoire;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [niveau_lieu] column.
     * 
     * @param int $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setNiveauLieu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->niveau_lieu !== $v) {
            $this->niveau_lieu = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::NIVEAU_LIEU;
        }


        return $this;
    } // setNiveauLieu()

    /**
     * Set the value of [valeur_defaut_pays] column.
     * 
     * @param int $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setValeurDefautPays($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->valeur_defaut_pays !== $v) {
            $this->valeur_defaut_pays = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::VALEUR_DEFAUT_PAYS;
        }


        return $this;
    } // setValeurDefautPays()

    /**
     * Set the value of [valeur_defaut_region] column.
     * 
     * @param int $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setValeurDefautRegion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->valeur_defaut_region !== $v) {
            $this->valeur_defaut_region = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::VALEUR_DEFAUT_REGION;
        }


        return $this;
    } // setValeurDefautRegion()

    /**
     * Set the value of [valeur_defaut_province] column.
     * 
     * @param int $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setValeurDefautProvince($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->valeur_defaut_province !== $v) {
            $this->valeur_defaut_province = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::VALEUR_DEFAUT_PROVINCE;
        }


        return $this;
    } // setValeurDefautProvince()

    /**
     * Set the value of [valeur_par_defaut_commune] column.
     * 
     * @param int $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setValeurParDefautCommune($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->valeur_par_defaut_commune !== $v) {
            $this->valeur_par_defaut_commune = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::VALEUR_PAR_DEFAUT_COMMUNE;
        }


        return $this;
    } // setValeurParDefautCommune()

    /**
     * Set the value of [mode_affectation_demande] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setModeAffectationDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mode_affectation_demande !== $v) {
            $this->mode_affectation_demande = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::MODE_AFFECTATION_DEMANDE;
        }


        return $this;
    } // setModeAffectationDemande()

    /**
     * Set the value of [module_entite_lie_lieu] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setModuleEntiteLieLieu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->module_entite_lie_lieu !== $v) {
            $this->module_entite_lie_lieu = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::MODULE_ENTITE_LIE_LIEU;
        }


        return $this;
    } // setModuleEntiteLieLieu()

    /**
     * Set the value of [nbr_jour_delai_traitement] column.
     * 
     * @param int $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setNbrJourDelaiTraitement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->nbr_jour_delai_traitement !== $v) {
            $this->nbr_jour_delai_traitement = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::NBR_JOUR_DELAI_TRAITEMENT;
        }


        return $this;
    } // setNbrJourDelaiTraitement()

    /**
     * Set the value of [obligation_lieu_demande] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setObligationLieuDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->obligation_lieu_demande !== $v) {
            $this->obligation_lieu_demande = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::OBLIGATION_LIEU_DEMANDE;
        }


        return $this;
    } // setObligationLieuDemande()

    /**
     * Set the value of [module_google_maps] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setModuleGoogleMaps($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->module_google_maps !== $v) {
            $this->module_google_maps = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::MODULE_GOOGLE_MAPS;
        }


        return $this;
    } // setModuleGoogleMaps()

    /**
     * Set the value of [visibilite_champ_localisation] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setVisibiliteChampLocalisation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->visibilite_champ_localisation !== $v) {
            $this->visibilite_champ_localisation = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::VISIBILITE_CHAMP_LOCALISATION;
        }


        return $this;
    } // setVisibiliteChampLocalisation()

    /**
     * Set the value of [echange_web_service] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setEchangeWebService($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->echange_web_service !== $v) {
            $this->echange_web_service = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::ECHANGE_WEB_SERVICE;
        }


        return $this;
    } // setEchangeWebService()

    /**
     * Set the value of [id_entite] column.
     * 
     * @param int $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setIdEntite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entite !== $v) {
            $this->id_entite = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::ID_ENTITE;
        }


        return $this;
    } // setIdEntite()

    /**
     * Set the value of [obligation_nom_prenom_requerant] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setObligationNomPrenomRequerant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->obligation_nom_prenom_requerant !== $v) {
            $this->obligation_nom_prenom_requerant = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::OBLIGATION_NOM_PRENOM_REQUERANT;
        }


        return $this;
    } // setObligationNomPrenomRequerant()

    /**
     * Set the value of [obligation_nom_organisme_requerant] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setObligationNomOrganismeRequerant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->obligation_nom_organisme_requerant !== $v) {
            $this->obligation_nom_organisme_requerant = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::OBLIGATION_NOM_ORGANISME_REQUERANT;
        }


        return $this;
    } // setObligationNomOrganismeRequerant()

    /**
     * Set the value of [obligation_registre_commerce_requerant] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setObligationRegistreCommerceRequerant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->obligation_registre_commerce_requerant !== $v) {
            $this->obligation_registre_commerce_requerant = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::OBLIGATION_REGISTRE_COMMERCE_REQUERANT;
        }


        return $this;
    } // setObligationRegistreCommerceRequerant()

    /**
     * Set the value of [obligation_telephone_requerant] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setObligationTelephoneRequerant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->obligation_telephone_requerant !== $v) {
            $this->obligation_telephone_requerant = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::OBLIGATION_TELEPHONE_REQUERANT;
        }


        return $this;
    } // setObligationTelephoneRequerant()

    /**
     * Set the value of [visibilite_registre_commerce_requerant] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setVisibiliteRegistreCommerceRequerant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->visibilite_registre_commerce_requerant !== $v) {
            $this->visibilite_registre_commerce_requerant = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::VISIBILITE_REGISTRE_COMMERCE_REQUERANT;
        }


        return $this;
    } // setVisibiliteRegistreCommerceRequerant()

    /**
     * Set the value of [visibilite_identifiant_fiscal] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setVisibiliteIdentifiantFiscal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->visibilite_identifiant_fiscal !== $v) {
            $this->visibilite_identifiant_fiscal = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::VISIBILITE_IDENTIFIANT_FISCAL;
        }


        return $this;
    } // setVisibiliteIdentifiantFiscal()

    /**
     * Set the value of [obligation_identifiant_fiscal] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setObligationIdentifiantFiscal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->obligation_identifiant_fiscal !== $v) {
            $this->obligation_identifiant_fiscal = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::OBLIGATION_IDENTIFIANT_FISCAL;
        }


        return $this;
    } // setObligationIdentifiantFiscal()

    /**
     * Set the value of [delai_cloture_demande] column.
     * 
     * @param int $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setDelaiClotureDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->delai_cloture_demande !== $v) {
            $this->delai_cloture_demande = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::DELAI_CLOTURE_DEMANDE;
        }


        return $this;
    } // setDelaiClotureDemande()

    /**
     * Set the value of [notification_avant_date_reponse] column.
     * 
     * @param int $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setNotificationAvantDateReponse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->notification_avant_date_reponse !== $v) {
            $this->notification_avant_date_reponse = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::NOTIFICATION_AVANT_DATE_REPONSE;
        }


        return $this;
    } // setNotificationAvantDateReponse()

    /**
     * Set the value of [borne_traitement_demande] column.
     * 
     * @param int $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setBorneTraitementDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->borne_traitement_demande !== $v) {
            $this->borne_traitement_demande = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::BORNE_TRAITEMENT_DEMANDE;
        }


        return $this;
    } // setBorneTraitementDemande()

    /**
     * Set the value of [regle_numero_demande_entrant] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setRegleNumeroDemandeEntrant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->regle_numero_demande_entrant !== $v) {
            $this->regle_numero_demande_entrant = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::REGLE_NUMERO_DEMANDE_ENTRANT;
        }


        return $this;
    } // setRegleNumeroDemandeEntrant()

    /**
     * Set the value of [regle_numero_demande_sortant] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setRegleNumeroDemandeSortant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->regle_numero_demande_sortant !== $v) {
            $this->regle_numero_demande_sortant = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::REGLE_NUMERO_DEMANDE_SORTANT;
        }


        return $this;
    } // setRegleNumeroDemandeSortant()

    /**
     * Set the value of [regle_numero_demande_interne] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setRegleNumeroDemandeInterne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->regle_numero_demande_interne !== $v) {
            $this->regle_numero_demande_interne = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::REGLE_NUMERO_DEMANDE_INTERNE;
        }


        return $this;
    } // setRegleNumeroDemandeInterne()

    /**
     * Set the value of [visibilite_bloc_reponse_obligatoire] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setVisibiliteBlocReponseObligatoire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->visibilite_bloc_reponse_obligatoire !== $v) {
            $this->visibilite_bloc_reponse_obligatoire = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::VISIBILITE_BLOC_REPONSE_OBLIGATOIRE;
        }


        return $this;
    } // setVisibiliteBlocReponseObligatoire()

    /**
     * Set the value of [visibilite_bloc_lieu_concerne] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setVisibiliteBlocLieuConcerne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->visibilite_bloc_lieu_concerne !== $v) {
            $this->visibilite_bloc_lieu_concerne = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::VISIBILITE_BLOC_LIEU_CONCERNE;
        }


        return $this;
    } // setVisibiliteBlocLieuConcerne()

    /**
     * Set the value of [obligation_message_demande] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setObligationMessageDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->obligation_message_demande !== $v) {
            $this->obligation_message_demande = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::OBLIGATION_MESSAGE_DEMANDE;
        }


        return $this;
    } // setObligationMessageDemande()

    /**
     * Set the value of [obligation_email_demandeur] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setObligationEmailDemandeur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->obligation_email_demandeur !== $v) {
            $this->obligation_email_demandeur = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::OBLIGATION_EMAIL_DEMANDEUR;
        }


        return $this;
    } // setObligationEmailDemandeur()

    /**
     * Set the value of [obligation_sous_theme] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setObligationSousTheme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->obligation_sous_theme !== $v) {
            $this->obligation_sous_theme = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::OBLIGATION_SOUS_THEME;
        }


        return $this;
    } // setObligationSousTheme()

    /**
     * Set the value of [visiblitie_condition_utilisation] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setVisiblitieConditionUtilisation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->visiblitie_condition_utilisation !== $v) {
            $this->visiblitie_condition_utilisation = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::VISIBLITIE_CONDITION_UTILISATION;
        }


        return $this;
    } // setVisiblitieConditionUtilisation()

    /**
     * Set the value of [condition_utilisation_ar] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setConditionUtilisationAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->condition_utilisation_ar !== $v) {
            $this->condition_utilisation_ar = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::CONDITION_UTILISATION_AR;
        }


        return $this;
    } // setConditionUtilisationAr()

    /**
     * Set the value of [condition_utilisation_fr] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setConditionUtilisationFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->condition_utilisation_fr !== $v) {
            $this->condition_utilisation_fr = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::CONDITION_UTILISATION_FR;
        }


        return $this;
    } // setConditionUtilisationFr()

    /**
     * Set the value of [gestion_demandeur_par_entite] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setGestionDemandeurParEntite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gestion_demandeur_par_entite !== $v) {
            $this->gestion_demandeur_par_entite = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::GESTION_DEMANDEUR_PAR_ENTITE;
        }


        return $this;
    } // setGestionDemandeurParEntite()

    /**
     * Set the value of [valeur_defaut_type_demande] column.
     * 
     * @param int $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setValeurDefautTypeDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->valeur_defaut_type_demande !== $v) {
            $this->valeur_defaut_type_demande = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::VALEUR_DEFAUT_TYPE_DEMANDE;
        }


        return $this;
    } // setValeurDefautTypeDemande()

    /**
     * Set the value of [valeur_defaut_reponse_obligatoire] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setValeurDefautReponseObligatoire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->valeur_defaut_reponse_obligatoire !== $v) {
            $this->valeur_defaut_reponse_obligatoire = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::VALEUR_DEFAUT_REPONSE_OBLIGATOIRE;
        }


        return $this;
    } // setValeurDefautReponseObligatoire()

    /**
     * Set the value of [acces_extranet] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setAccesExtranet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->acces_extranet !== $v) {
            $this->acces_extranet = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::ACCES_EXTRANET;
        }


        return $this;
    } // setAccesExtranet()

    /**
     * Set the value of [langue_par_defaut_extranet] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setLangueParDefautExtranet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->langue_par_defaut_extranet !== $v) {
            $this->langue_par_defaut_extranet = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::LANGUE_PAR_DEFAUT_EXTRANET;
        }


        return $this;
    } // setLangueParDefautExtranet()

    /**
     * Set the value of [google_analytics] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setGoogleAnalytics($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->google_analytics !== $v) {
            $this->google_analytics = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::GOOGLE_ANALYTICS;
        }


        return $this;
    } // setGoogleAnalytics()

    /**
     * Set the value of [chiffrement] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setChiffrement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->chiffrement !== $v) {
            $this->chiffrement = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::CHIFFREMENT;
        }


        return $this;
    } // setChiffrement()

    /**
     * Set the value of [id_entite_centrale] column.
     * 
     * @param int $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setIdEntiteCentrale($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entite_centrale !== $v) {
            $this->id_entite_centrale = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::ID_ENTITE_CENTRALE;
        }


        return $this;
    } // setIdEntiteCentrale()

    /**
     * Set the value of [service_notification_sms] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setServiceNotificationSms($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->service_notification_sms !== $v) {
            $this->service_notification_sms = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::SERVICE_NOTIFICATION_SMS;
        }


        return $this;
    } // setServiceNotificationSms()

    /**
     * Set the value of [login_service_sms] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setLoginServiceSms($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->login_service_sms !== $v) {
            $this->login_service_sms = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::LOGIN_SERVICE_SMS;
        }


        return $this;
    } // setLoginServiceSms()

    /**
     * Set the value of [pass_service_sms] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setPassServiceSms($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pass_service_sms !== $v) {
            $this->pass_service_sms = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::PASS_SERVICE_SMS;
        }


        return $this;
    } // setPassServiceSms()

    /**
     * Set the value of [code_envoi_sms] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setCodeEnvoiSms($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_envoi_sms !== $v) {
            $this->code_envoi_sms = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::CODE_ENVOI_SMS;
        }


        return $this;
    } // setCodeEnvoiSms()

    /**
     * Set the value of [url_service_sms] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setUrlServiceSms($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->url_service_sms !== $v) {
            $this->url_service_sms = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::URL_SERVICE_SMS;
        }


        return $this;
    } // setUrlServiceSms()

    /**
     * Set the value of [circuit_validation] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setCircuitValidation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->circuit_validation !== $v) {
            $this->circuit_validation = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::CIRCUIT_VALIDATION;
        }


        return $this;
    } // setCircuitValidation()

    /**
     * Set the value of [visibilite_message_demande] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setVisibiliteMessageDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->visibilite_message_demande !== $v) {
            $this->visibilite_message_demande = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::VISIBILITE_MESSAGE_DEMANDE;
        }


        return $this;
    } // setVisibiliteMessageDemande()

    /**
     * Set the value of [code_signataire_certificat] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setCodeSignataireCertificat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_signataire_certificat !== $v) {
            $this->code_signataire_certificat = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::CODE_SIGNATAIRE_CERTIFICAT;
        }


        return $this;
    } // setCodeSignataireCertificat()

    /**
     * Set the value of [acces_statistiques] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setAccesStatistiques($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->acces_statistiques !== $v) {
            $this->acces_statistiques = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::ACCES_STATISTIQUES;
        }


        return $this;
    } // setAccesStatistiques()

    /**
     * Set the value of [webservice_demande] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setWebserviceDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->webservice_demande !== $v) {
            $this->webservice_demande = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::WEBSERVICE_DEMANDE;
        }


        return $this;
    } // setWebserviceDemande()

    /**
     * Set the value of [url_webservice_demande] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setUrlWebserviceDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->url_webservice_demande !== $v) {
            $this->url_webservice_demande = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::URL_WEBSERVICE_DEMANDE;
        }


        return $this;
    } // setUrlWebserviceDemande()

    /**
     * Set the value of [jeton_webservice] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setJetonWebservice($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->jeton_webservice !== $v) {
            $this->jeton_webservice = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::JETON_WEBSERVICE;
        }


        return $this;
    } // setJetonWebservice()

    /**
     * Set the value of [identifiant_entite_reception] column.
     * 
     * @param int $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setIdentifiantEntiteReception($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->identifiant_entite_reception !== $v) {
            $this->identifiant_entite_reception = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::IDENTIFIANT_ENTITE_RECEPTION;
        }


        return $this;
    } // setIdentifiantEntiteReception()

    /**
     * Set the value of [identifiant_sous_theme] column.
     * 
     * @param int $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setIdentifiantSousTheme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->identifiant_sous_theme !== $v) {
            $this->identifiant_sous_theme = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::IDENTIFIANT_SOUS_THEME;
        }


        return $this;
    } // setIdentifiantSousTheme()

    /**
     * Set the value of [scanner] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setScanner($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->scanner !== $v) {
            $this->scanner = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::SCANNER;
        }


        return $this;
    } // setScanner()

    /**
     * Set the value of [activation_auth_socle] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setActivationAuthSocle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->activation_auth_socle !== $v) {
            $this->activation_auth_socle = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::ACTIVATION_AUTH_SOCLE;
        }


        return $this;
    } // setActivationAuthSocle()

    /**
     * Set the value of [affichage_enregistrer_generer_numero] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setAffichageEnregistrerGenererNumero($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->affichage_enregistrer_generer_numero !== $v) {
            $this->affichage_enregistrer_generer_numero = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::AFFICHAGE_ENREGISTRER_GENERER_NUMERO;
        }


        return $this;
    } // setAffichageEnregistrerGenererNumero()

    /**
     * Set the value of [jeton_org_service] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setJetonOrgService($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->jeton_org_service !== $v) {
            $this->jeton_org_service = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::JETON_ORG_SERVICE;
        }


        return $this;
    } // setJetonOrgService()

    /**
     * Set the value of [onglet_depuis_1] column.
     * 
     * @param int $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setOngletDepuis1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->onglet_depuis_1 !== $v) {
            $this->onglet_depuis_1 = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::ONGLET_DEPUIS_1;
        }


        return $this;
    } // setOngletDepuis1()

    /**
     * Set the value of [onglet_depuis_2] column.
     * 
     * @param int $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setOngletDepuis2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->onglet_depuis_2 !== $v) {
            $this->onglet_depuis_2 = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::ONGLET_DEPUIS_2;
        }


        return $this;
    } // setOngletDepuis2()

    /**
     * Set the value of [nombre_reouverture] column.
     * 
     * @param int $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setNombreReouverture($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->nombre_reouverture !== $v) {
            $this->nombre_reouverture = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::NOMBRE_REOUVERTURE;
        }


        return $this;
    } // setNombreReouverture()

    /**
     * Set the value of [centre_appel] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setCentreAppel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->centre_appel !== $v) {
            $this->centre_appel = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::CENTRE_APPEL;
        }


        return $this;
    } // setCentreAppel()

    /**
     * Set the value of [url_ws_ca] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setUrlWsCa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->url_ws_ca !== $v) {
            $this->url_ws_ca = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::URL_WS_CA;
        }


        return $this;
    } // setUrlWsCa()

    /**
     * Set the value of [authentification_ldap] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setAuthentificationLdap($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->authentification_ldap !== $v) {
            $this->authentification_ldap = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::AUTHENTIFICATION_LDAP;
        }


        return $this;
    } // setAuthentificationLdap()

    /**
     * Set the value of [ip_ldap] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setIpLdap($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ip_ldap !== $v) {
            $this->ip_ldap = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::IP_LDAP;
        }


        return $this;
    } // setIpLdap()

    /**
     * Set the value of [base_dn_ldap] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setBaseDnLdap($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_dn_ldap !== $v) {
            $this->base_dn_ldap = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::BASE_DN_LDAP;
        }


        return $this;
    } // setBaseDnLdap()

    /**
     * Set the value of [user_ldap] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setUserLdap($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->user_ldap !== $v) {
            $this->user_ldap = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::USER_LDAP;
        }


        return $this;
    } // setUserLdap()

    /**
     * Set the value of [password_ldap] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setPasswordLdap($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->password_ldap !== $v) {
            $this->password_ldap = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::PASSWORD_LDAP;
        }


        return $this;
    } // setPasswordLdap()

    /**
     * Set the value of [schema_ldap] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setSchemaLdap($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->schema_ldap !== $v) {
            $this->schema_ldap = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::SCHEMA_LDAP;
        }


        return $this;
    } // setSchemaLdap()

    /**
     * Set the value of [port_ldap] column.
     * 
     * @param int $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setPortLdap($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->port_ldap !== $v) {
            $this->port_ldap = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::PORT_LDAP;
        }


        return $this;
    } // setPortLdap()

    /**
     * Set the value of [prolongation] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setProlongation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prolongation !== $v) {
            $this->prolongation = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::PROLONGATION;
        }


        return $this;
    } // setProlongation()

    /**
     * Set the value of [duree_prolongation] column.
     * 
     * @param int $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setDureeProlongation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->duree_prolongation !== $v) {
            $this->duree_prolongation = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::DUREE_PROLONGATION;
        }


        return $this;
    } // setDureeProlongation()

    /**
     * Set the value of [organisme_parametrage] column.
     * 
     * @param int $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setOrganismeParametrage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->organisme_parametrage !== $v) {
            $this->organisme_parametrage = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::ORGANISME_PARAMETRAGE;
        }


        return $this;
    } // setOrganismeParametrage()

    /**
     * Set the value of [organisme_gestion_utilisateurs] column.
     * 
     * @param int $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setOrganismeGestionUtilisateurs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->organisme_gestion_utilisateurs !== $v) {
            $this->organisme_gestion_utilisateurs = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::ORGANISME_GESTION_UTILISATEURS;
        }


        return $this;
    } // setOrganismeGestionUtilisateurs()

    /**
     * Set the value of [type_gestion_utilisateur] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setTypeGestionUtilisateur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_gestion_utilisateur !== $v) {
            $this->type_gestion_utilisateur = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::TYPE_GESTION_UTILISATEUR;
        }


        return $this;
    } // setTypeGestionUtilisateur()

    /**
     * Set the value of [multi_affectation] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setMultiAffectation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->multi_affectation !== $v) {
            $this->multi_affectation = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::MULTI_AFFECTATION;
        }


        return $this;
    } // setMultiAffectation()

    /**
     * Set the value of [taux_echeance] column.
     * 
     * @param double $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setTauxEcheance($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->taux_echeance !== $v) {
            $this->taux_echeance = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::TAUX_ECHEANCE;
        }


        return $this;
    } // setTauxEcheance()

    /**
     * Set the value of [reponse_affectation_externe] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setReponseAffectationExterne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->reponse_affectation_externe !== $v) {
            $this->reponse_affectation_externe = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::REPONSE_AFFECTATION_EXTERNE;
        }


        return $this;
    } // setReponseAffectationExterne()

    /**
     * Set the value of [increment_confidentiel] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setIncrementConfidentiel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->increment_confidentiel !== $v) {
            $this->increment_confidentiel = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::INCREMENT_CONFIDENTIEL;
        }


        return $this;
    } // setIncrementConfidentiel()

    /**
     * Set the value of [obligation_emetteur_courrier_entrant] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setObligationEmetteurCourrierEntrant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->obligation_emetteur_courrier_entrant !== $v) {
            $this->obligation_emetteur_courrier_entrant = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::OBLIGATION_EMETTEUR_COURRIER_ENTRANT;
        }


        return $this;
    } // setObligationEmetteurCourrierEntrant()

    /**
     * Set the value of [obligation_emetteur_courrier_interne] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setObligationEmetteurCourrierInterne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->obligation_emetteur_courrier_interne !== $v) {
            $this->obligation_emetteur_courrier_interne = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::OBLIGATION_EMETTEUR_COURRIER_INTERNE;
        }


        return $this;
    } // setObligationEmetteurCourrierInterne()

    /**
     * Set the value of [obligation_destinataire_courrier_sortant] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setObligationDestinataireCourrierSortant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->obligation_destinataire_courrier_sortant !== $v) {
            $this->obligation_destinataire_courrier_sortant = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::OBLIGATION_DESTINATAIRE_COURRIER_SORTANT;
        }


        return $this;
    } // setObligationDestinataireCourrierSortant()

    /**
     * Set the value of [obligation_destinataire_mentionne_courrier_entrant] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setObligationDestinataireMentionneCourrierEntrant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->obligation_destinataire_mentionne_courrier_entrant !== $v) {
            $this->obligation_destinataire_mentionne_courrier_entrant = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::OBLIGATION_DESTINATAIRE_MENTIONNE_COURRIER_ENTRANT;
        }


        return $this;
    } // setObligationDestinataireMentionneCourrierEntrant()

    /**
     * Set the value of [obligation_destinataire_courrier_interne] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setObligationDestinataireCourrierInterne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->obligation_destinataire_courrier_interne !== $v) {
            $this->obligation_destinataire_courrier_interne = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::OBLIGATION_DESTINATAIRE_COURRIER_INTERNE;
        }


        return $this;
    } // setObligationDestinataireCourrierInterne()

    /**
     * Set the value of [obligation_objet] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setObligationObjet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->obligation_objet !== $v) {
            $this->obligation_objet = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::OBLIGATION_OBJET;
        }


        return $this;
    } // setObligationObjet()

    /**
     * Set the value of [obligation_signataire] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setObligationSignataire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->obligation_signataire !== $v) {
            $this->obligation_signataire = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::OBLIGATION_SIGNATAIRE;
        }


        return $this;
    } // setObligationSignataire()

    /**
     * Set the value of [gestion_demandeurs] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setGestionDemandeurs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gestion_demandeurs !== $v) {
            $this->gestion_demandeurs = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::GESTION_DEMANDEURS;
        }


        return $this;
    } // setGestionDemandeurs()

    /**
     * Set the value of [numero_fournisseur] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setNumeroFournisseur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->numero_fournisseur !== $v) {
            $this->numero_fournisseur = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::NUMERO_FOURNISSEUR;
        }


        return $this;
    } // setNumeroFournisseur()

    /**
     * Set the value of [type_delai] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setTypeDelai($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_delai !== $v) {
            $this->type_delai = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::TYPE_DELAI;
        }


        return $this;
    } // setTypeDelai()

    /**
     * Set the value of [num_provisoire] column.
     * 
     * @param string $v new value
     * @return ConfigurationOrgansime The current object (for fluent API support)
     */
    public function setNumProvisoire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->num_provisoire !== $v) {
            $this->num_provisoire = $v;
            $this->modifiedColumns[] = ConfigurationOrgansimePeer::NUM_PROVISOIRE;
        }


        return $this;
    } // setNumProvisoire()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
            if ($this->niveau_lieu !== 0) {
                return false;
            }

            if ($this->valeur_defaut_pays !== 0) {
                return false;
            }

            if ($this->valeur_defaut_region !== 0) {
                return false;
            }

            if ($this->valeur_defaut_province !== 0) {
                return false;
            }

            if ($this->mode_affectation_demande !== '1') {
                return false;
            }

            if ($this->module_entite_lie_lieu !== '0') {
                return false;
            }

            if ($this->nbr_jour_delai_traitement !== 0) {
                return false;
            }

            if ($this->obligation_lieu_demande !== '0') {
                return false;
            }

            if ($this->module_google_maps !== '1') {
                return false;
            }

            if ($this->visibilite_champ_localisation !== '0') {
                return false;
            }

            if ($this->echange_web_service !== '0') {
                return false;
            }

            if ($this->id_entite !== 1) {
                return false;
            }

            if ($this->obligation_nom_prenom_requerant !== '0') {
                return false;
            }

            if ($this->obligation_nom_organisme_requerant !== '0') {
                return false;
            }

            if ($this->obligation_registre_commerce_requerant !== '0') {
                return false;
            }

            if ($this->obligation_telephone_requerant !== '0') {
                return false;
            }

            if ($this->visibilite_registre_commerce_requerant !== '0') {
                return false;
            }

            if ($this->visibilite_identifiant_fiscal !== '0') {
                return false;
            }

            if ($this->obligation_identifiant_fiscal !== '0') {
                return false;
            }

            if ($this->delai_cloture_demande !== 7) {
                return false;
            }

            if ($this->notification_avant_date_reponse !== 7) {
                return false;
            }

            if ($this->borne_traitement_demande !== 7) {
                return false;
            }

            if ($this->regle_numero_demande_entrant !== '{ALEA}') {
                return false;
            }

            if ($this->regle_numero_demande_sortant !== '{ALEA}') {
                return false;
            }

            if ($this->regle_numero_demande_interne !== '{ALEA}') {
                return false;
            }

            if ($this->visibilite_bloc_reponse_obligatoire !== '0') {
                return false;
            }

            if ($this->visibilite_bloc_lieu_concerne !== '0') {
                return false;
            }

            if ($this->obligation_message_demande !== '0') {
                return false;
            }

            if ($this->obligation_email_demandeur !== '1') {
                return false;
            }

            if ($this->obligation_sous_theme !== '1') {
                return false;
            }

            if ($this->visiblitie_condition_utilisation !== '0') {
                return false;
            }

            if ($this->gestion_demandeur_par_entite !== '0') {
                return false;
            }

            if ($this->valeur_defaut_type_demande !== 0) {
                return false;
            }

            if ($this->valeur_defaut_reponse_obligatoire !== '1') {
                return false;
            }

            if ($this->acces_extranet !== '0') {
                return false;
            }

            if ($this->langue_par_defaut_extranet !== 'ar') {
                return false;
            }

            if ($this->chiffrement !== '0') {
                return false;
            }

            if ($this->service_notification_sms !== '0') {
                return false;
            }

            if ($this->visibilite_message_demande !== '1') {
                return false;
            }

            if ($this->code_signataire_certificat !== 'CN') {
                return false;
            }

            if ($this->acces_statistiques !== '0') {
                return false;
            }

            if ($this->webservice_demande !== '0') {
                return false;
            }

            if ($this->scanner !== '0') {
                return false;
            }

            if ($this->activation_auth_socle !== '0') {
                return false;
            }

            if ($this->affichage_enregistrer_generer_numero !== '0') {
                return false;
            }

            if ($this->nombre_reouverture !== 3) {
                return false;
            }

            if ($this->centre_appel !== '0') {
                return false;
            }

            if ($this->authentification_ldap !== '0') {
                return false;
            }

            if ($this->prolongation !== '0') {
                return false;
            }

            if ($this->type_gestion_utilisateur !== '1') {
                return false;
            }

            if ($this->multi_affectation !== '0') {
                return false;
            }

            if ($this->taux_echeance !== 0.7) {
                return false;
            }

            if ($this->reponse_affectation_externe !== '1') {
                return false;
            }

            if ($this->increment_confidentiel !== '0') {
                return false;
            }

            if ($this->obligation_emetteur_courrier_entrant !== '1') {
                return false;
            }

            if ($this->obligation_emetteur_courrier_interne !== '0') {
                return false;
            }

            if ($this->obligation_destinataire_courrier_sortant !== '0') {
                return false;
            }

            if ($this->obligation_destinataire_mentionne_courrier_entrant !== '0') {
                return false;
            }

            if ($this->obligation_destinataire_courrier_interne !== '0') {
                return false;
            }

            if ($this->obligation_objet !== '1') {
                return false;
            }

            if ($this->obligation_signataire !== '0') {
                return false;
            }

            if ($this->gestion_demandeurs !== '0') {
                return false;
            }

            if ($this->numero_fournisseur !== '0') {
                return false;
            }

            if ($this->type_delai !== '1') {
                return false;
            }

            if ($this->num_provisoire !== '0') {
                return false;
            }

        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->niveau_lieu = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->valeur_defaut_pays = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->valeur_defaut_region = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->valeur_defaut_province = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->valeur_par_defaut_commune = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->mode_affectation_demande = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->module_entite_lie_lieu = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->nbr_jour_delai_traitement = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->obligation_lieu_demande = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->module_google_maps = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->visibilite_champ_localisation = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->echange_web_service = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->id_entite = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->obligation_nom_prenom_requerant = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->obligation_nom_organisme_requerant = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->obligation_registre_commerce_requerant = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->obligation_telephone_requerant = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->visibilite_registre_commerce_requerant = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->visibilite_identifiant_fiscal = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->obligation_identifiant_fiscal = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->delai_cloture_demande = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->notification_avant_date_reponse = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->borne_traitement_demande = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
            $this->regle_numero_demande_entrant = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->regle_numero_demande_sortant = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->regle_numero_demande_interne = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->visibilite_bloc_reponse_obligatoire = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->visibilite_bloc_lieu_concerne = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->obligation_message_demande = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->obligation_email_demandeur = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->obligation_sous_theme = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->visiblitie_condition_utilisation = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->condition_utilisation_ar = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->condition_utilisation_fr = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->gestion_demandeur_par_entite = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->valeur_defaut_type_demande = ($row[$startcol + 36] !== null) ? (int) $row[$startcol + 36] : null;
            $this->valeur_defaut_reponse_obligatoire = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->acces_extranet = ($row[$startcol + 38] !== null) ? (string) $row[$startcol + 38] : null;
            $this->langue_par_defaut_extranet = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->google_analytics = ($row[$startcol + 40] !== null) ? (string) $row[$startcol + 40] : null;
            $this->chiffrement = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->id_entite_centrale = ($row[$startcol + 42] !== null) ? (int) $row[$startcol + 42] : null;
            $this->service_notification_sms = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
            $this->login_service_sms = ($row[$startcol + 44] !== null) ? (string) $row[$startcol + 44] : null;
            $this->pass_service_sms = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
            $this->code_envoi_sms = ($row[$startcol + 46] !== null) ? (string) $row[$startcol + 46] : null;
            $this->url_service_sms = ($row[$startcol + 47] !== null) ? (string) $row[$startcol + 47] : null;
            $this->circuit_validation = ($row[$startcol + 48] !== null) ? (string) $row[$startcol + 48] : null;
            $this->visibilite_message_demande = ($row[$startcol + 49] !== null) ? (string) $row[$startcol + 49] : null;
            $this->code_signataire_certificat = ($row[$startcol + 50] !== null) ? (string) $row[$startcol + 50] : null;
            $this->acces_statistiques = ($row[$startcol + 51] !== null) ? (string) $row[$startcol + 51] : null;
            $this->webservice_demande = ($row[$startcol + 52] !== null) ? (string) $row[$startcol + 52] : null;
            $this->url_webservice_demande = ($row[$startcol + 53] !== null) ? (string) $row[$startcol + 53] : null;
            $this->jeton_webservice = ($row[$startcol + 54] !== null) ? (string) $row[$startcol + 54] : null;
            $this->identifiant_entite_reception = ($row[$startcol + 55] !== null) ? (int) $row[$startcol + 55] : null;
            $this->identifiant_sous_theme = ($row[$startcol + 56] !== null) ? (int) $row[$startcol + 56] : null;
            $this->scanner = ($row[$startcol + 57] !== null) ? (string) $row[$startcol + 57] : null;
            $this->activation_auth_socle = ($row[$startcol + 58] !== null) ? (string) $row[$startcol + 58] : null;
            $this->affichage_enregistrer_generer_numero = ($row[$startcol + 59] !== null) ? (string) $row[$startcol + 59] : null;
            $this->jeton_org_service = ($row[$startcol + 60] !== null) ? (string) $row[$startcol + 60] : null;
            $this->onglet_depuis_1 = ($row[$startcol + 61] !== null) ? (int) $row[$startcol + 61] : null;
            $this->onglet_depuis_2 = ($row[$startcol + 62] !== null) ? (int) $row[$startcol + 62] : null;
            $this->nombre_reouverture = ($row[$startcol + 63] !== null) ? (int) $row[$startcol + 63] : null;
            $this->centre_appel = ($row[$startcol + 64] !== null) ? (string) $row[$startcol + 64] : null;
            $this->url_ws_ca = ($row[$startcol + 65] !== null) ? (string) $row[$startcol + 65] : null;
            $this->authentification_ldap = ($row[$startcol + 66] !== null) ? (string) $row[$startcol + 66] : null;
            $this->ip_ldap = ($row[$startcol + 67] !== null) ? (string) $row[$startcol + 67] : null;
            $this->base_dn_ldap = ($row[$startcol + 68] !== null) ? (string) $row[$startcol + 68] : null;
            $this->user_ldap = ($row[$startcol + 69] !== null) ? (string) $row[$startcol + 69] : null;
            $this->password_ldap = ($row[$startcol + 70] !== null) ? (string) $row[$startcol + 70] : null;
            $this->schema_ldap = ($row[$startcol + 71] !== null) ? (string) $row[$startcol + 71] : null;
            $this->port_ldap = ($row[$startcol + 72] !== null) ? (int) $row[$startcol + 72] : null;
            $this->prolongation = ($row[$startcol + 73] !== null) ? (string) $row[$startcol + 73] : null;
            $this->duree_prolongation = ($row[$startcol + 74] !== null) ? (int) $row[$startcol + 74] : null;
            $this->organisme_parametrage = ($row[$startcol + 75] !== null) ? (int) $row[$startcol + 75] : null;
            $this->organisme_gestion_utilisateurs = ($row[$startcol + 76] !== null) ? (int) $row[$startcol + 76] : null;
            $this->type_gestion_utilisateur = ($row[$startcol + 77] !== null) ? (string) $row[$startcol + 77] : null;
            $this->multi_affectation = ($row[$startcol + 78] !== null) ? (string) $row[$startcol + 78] : null;
            $this->taux_echeance = ($row[$startcol + 79] !== null) ? (double) $row[$startcol + 79] : null;
            $this->reponse_affectation_externe = ($row[$startcol + 80] !== null) ? (string) $row[$startcol + 80] : null;
            $this->increment_confidentiel = ($row[$startcol + 81] !== null) ? (string) $row[$startcol + 81] : null;
            $this->obligation_emetteur_courrier_entrant = ($row[$startcol + 82] !== null) ? (string) $row[$startcol + 82] : null;
            $this->obligation_emetteur_courrier_interne = ($row[$startcol + 83] !== null) ? (string) $row[$startcol + 83] : null;
            $this->obligation_destinataire_courrier_sortant = ($row[$startcol + 84] !== null) ? (string) $row[$startcol + 84] : null;
            $this->obligation_destinataire_mentionne_courrier_entrant = ($row[$startcol + 85] !== null) ? (string) $row[$startcol + 85] : null;
            $this->obligation_destinataire_courrier_interne = ($row[$startcol + 86] !== null) ? (string) $row[$startcol + 86] : null;
            $this->obligation_objet = ($row[$startcol + 87] !== null) ? (string) $row[$startcol + 87] : null;
            $this->obligation_signataire = ($row[$startcol + 88] !== null) ? (string) $row[$startcol + 88] : null;
            $this->gestion_demandeurs = ($row[$startcol + 89] !== null) ? (string) $row[$startcol + 89] : null;
            $this->numero_fournisseur = ($row[$startcol + 90] !== null) ? (string) $row[$startcol + 90] : null;
            $this->type_delai = ($row[$startcol + 91] !== null) ? (string) $row[$startcol + 91] : null;
            $this->num_provisoire = ($row[$startcol + 92] !== null) ? (string) $row[$startcol + 92] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 93; // 93 = ConfigurationOrgansimePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating ConfigurationOrgansime object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(ConfigurationOrgansimePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ConfigurationOrgansimePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(ConfigurationOrgansimePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ConfigurationOrgansimeQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(ConfigurationOrgansimePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                ConfigurationOrgansimePeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = ConfigurationOrgansimePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ConfigurationOrgansimePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ConfigurationOrgansimePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::NIVEAU_LIEU)) {
            $modifiedColumns[':p' . $index++]  = '`niveau_lieu`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::VALEUR_DEFAUT_PAYS)) {
            $modifiedColumns[':p' . $index++]  = '`valeur_defaut_pays`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::VALEUR_DEFAUT_REGION)) {
            $modifiedColumns[':p' . $index++]  = '`valeur_defaut_region`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::VALEUR_DEFAUT_PROVINCE)) {
            $modifiedColumns[':p' . $index++]  = '`valeur_defaut_province`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::VALEUR_PAR_DEFAUT_COMMUNE)) {
            $modifiedColumns[':p' . $index++]  = '`valeur_par_defaut_commune`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::MODE_AFFECTATION_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`mode_affectation_demande`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::MODULE_ENTITE_LIE_LIEU)) {
            $modifiedColumns[':p' . $index++]  = '`module_entite_lie_lieu`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::NBR_JOUR_DELAI_TRAITEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`NBR_JOUR_DELAI_TRAITEMENT`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::OBLIGATION_LIEU_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`OBLIGATION_LIEU_DEMANDE`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::MODULE_GOOGLE_MAPS)) {
            $modifiedColumns[':p' . $index++]  = '`MODULE_GOOGLE_MAPS`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::VISIBILITE_CHAMP_LOCALISATION)) {
            $modifiedColumns[':p' . $index++]  = '`VISIBILITE_CHAMP_LOCALISATION`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::ECHANGE_WEB_SERVICE)) {
            $modifiedColumns[':p' . $index++]  = '`ECHANGE_WEB_SERVICE`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::ID_ENTITE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ENTITE`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::OBLIGATION_NOM_PRENOM_REQUERANT)) {
            $modifiedColumns[':p' . $index++]  = '`OBLIGATION_NOM_PRENOM_REQUERANT`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::OBLIGATION_NOM_ORGANISME_REQUERANT)) {
            $modifiedColumns[':p' . $index++]  = '`OBLIGATION_NOM_ORGANISME_REQUERANT`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::OBLIGATION_REGISTRE_COMMERCE_REQUERANT)) {
            $modifiedColumns[':p' . $index++]  = '`OBLIGATION_REGISTRE_COMMERCE_REQUERANT`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::OBLIGATION_TELEPHONE_REQUERANT)) {
            $modifiedColumns[':p' . $index++]  = '`OBLIGATION_TELEPHONE_REQUERANT`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::VISIBILITE_REGISTRE_COMMERCE_REQUERANT)) {
            $modifiedColumns[':p' . $index++]  = '`VISIBILITE_REGISTRE_COMMERCE_REQUERANT`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::VISIBILITE_IDENTIFIANT_FISCAL)) {
            $modifiedColumns[':p' . $index++]  = '`VISIBILITE_IDENTIFIANT_FISCAL`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::OBLIGATION_IDENTIFIANT_FISCAL)) {
            $modifiedColumns[':p' . $index++]  = '`OBLIGATION_IDENTIFIANT_FISCAL`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::DELAI_CLOTURE_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`DELAI_CLOTURE_DEMANDE`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::NOTIFICATION_AVANT_DATE_REPONSE)) {
            $modifiedColumns[':p' . $index++]  = '`NOTIFICATION_AVANT_DATE_REPONSE`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::BORNE_TRAITEMENT_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`BORNE_TRAITEMENT_DEMANDE`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::REGLE_NUMERO_DEMANDE_ENTRANT)) {
            $modifiedColumns[':p' . $index++]  = '`REGLE_NUMERO_DEMANDE_ENTRANT`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::REGLE_NUMERO_DEMANDE_SORTANT)) {
            $modifiedColumns[':p' . $index++]  = '`REGLE_NUMERO_DEMANDE_SORTANT`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::REGLE_NUMERO_DEMANDE_INTERNE)) {
            $modifiedColumns[':p' . $index++]  = '`REGLE_NUMERO_DEMANDE_INTERNE`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::VISIBILITE_BLOC_REPONSE_OBLIGATOIRE)) {
            $modifiedColumns[':p' . $index++]  = '`VISIBILITE_BLOC_REPONSE_OBLIGATOIRE`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::VISIBILITE_BLOC_LIEU_CONCERNE)) {
            $modifiedColumns[':p' . $index++]  = '`VISIBILITE_BLOC_LIEU_CONCERNE`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::OBLIGATION_MESSAGE_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`OBLIGATION_MESSAGE_DEMANDE`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::OBLIGATION_EMAIL_DEMANDEUR)) {
            $modifiedColumns[':p' . $index++]  = '`OBLIGATION_EMAIL_DEMANDEUR`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::OBLIGATION_SOUS_THEME)) {
            $modifiedColumns[':p' . $index++]  = '`OBLIGATION_SOUS_THEME`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::VISIBLITIE_CONDITION_UTILISATION)) {
            $modifiedColumns[':p' . $index++]  = '`VISIBLITIE_CONDITION_UTILISATION`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::CONDITION_UTILISATION_AR)) {
            $modifiedColumns[':p' . $index++]  = '`CONDITION_UTILISATION_AR`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::CONDITION_UTILISATION_FR)) {
            $modifiedColumns[':p' . $index++]  = '`CONDITION_UTILISATION_FR`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::GESTION_DEMANDEUR_PAR_ENTITE)) {
            $modifiedColumns[':p' . $index++]  = '`GESTION_DEMANDEUR_PAR_ENTITE`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::VALEUR_DEFAUT_TYPE_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`VALEUR_DEFAUT_TYPE_DEMANDE`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::VALEUR_DEFAUT_REPONSE_OBLIGATOIRE)) {
            $modifiedColumns[':p' . $index++]  = '`VALEUR_DEFAUT_REPONSE_OBLIGATOIRE`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::ACCES_EXTRANET)) {
            $modifiedColumns[':p' . $index++]  = '`ACCES_EXTRANET`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::LANGUE_PAR_DEFAUT_EXTRANET)) {
            $modifiedColumns[':p' . $index++]  = '`LANGUE_PAR_DEFAUT_EXTRANET`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::GOOGLE_ANALYTICS)) {
            $modifiedColumns[':p' . $index++]  = '`GOOGLE_ANALYTICS`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::CHIFFREMENT)) {
            $modifiedColumns[':p' . $index++]  = '`CHIFFREMENT`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::ID_ENTITE_CENTRALE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ENTITE_CENTRALE`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::SERVICE_NOTIFICATION_SMS)) {
            $modifiedColumns[':p' . $index++]  = '`SERVICE_NOTIFICATION_SMS`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::LOGIN_SERVICE_SMS)) {
            $modifiedColumns[':p' . $index++]  = '`LOGIN_SERVICE_SMS`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::PASS_SERVICE_SMS)) {
            $modifiedColumns[':p' . $index++]  = '`PASS_SERVICE_SMS`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::CODE_ENVOI_SMS)) {
            $modifiedColumns[':p' . $index++]  = '`CODE_ENVOI_SMS`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::URL_SERVICE_SMS)) {
            $modifiedColumns[':p' . $index++]  = '`URL_SERVICE_SMS`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::CIRCUIT_VALIDATION)) {
            $modifiedColumns[':p' . $index++]  = '`CIRCUIT_VALIDATION`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::VISIBILITE_MESSAGE_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`VISIBILITE_MESSAGE_DEMANDE`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::CODE_SIGNATAIRE_CERTIFICAT)) {
            $modifiedColumns[':p' . $index++]  = '`CODE_SIGNATAIRE_CERTIFICAT`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::ACCES_STATISTIQUES)) {
            $modifiedColumns[':p' . $index++]  = '`ACCES_STATISTIQUES`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::WEBSERVICE_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`WEBSERVICE_DEMANDE`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::URL_WEBSERVICE_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`URL_WEBSERVICE_DEMANDE`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::JETON_WEBSERVICE)) {
            $modifiedColumns[':p' . $index++]  = '`JETON_WEBSERVICE`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::IDENTIFIANT_ENTITE_RECEPTION)) {
            $modifiedColumns[':p' . $index++]  = '`IDENTIFIANT_ENTITE_RECEPTION`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::IDENTIFIANT_SOUS_THEME)) {
            $modifiedColumns[':p' . $index++]  = '`IDENTIFIANT_SOUS_THEME`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::SCANNER)) {
            $modifiedColumns[':p' . $index++]  = '`SCANNER`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::ACTIVATION_AUTH_SOCLE)) {
            $modifiedColumns[':p' . $index++]  = '`ACTIVATION_AUTH_SOCLE`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::AFFICHAGE_ENREGISTRER_GENERER_NUMERO)) {
            $modifiedColumns[':p' . $index++]  = '`AFFICHAGE_ENREGISTRER_GENERER_NUMERO`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::JETON_ORG_SERVICE)) {
            $modifiedColumns[':p' . $index++]  = '`JETON_ORG_SERVICE`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::ONGLET_DEPUIS_1)) {
            $modifiedColumns[':p' . $index++]  = '`ONGLET_DEPUIS_1`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::ONGLET_DEPUIS_2)) {
            $modifiedColumns[':p' . $index++]  = '`ONGLET_DEPUIS_2`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::NOMBRE_REOUVERTURE)) {
            $modifiedColumns[':p' . $index++]  = '`NOMBRE_REOUVERTURE`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::CENTRE_APPEL)) {
            $modifiedColumns[':p' . $index++]  = '`CENTRE_APPEL`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::URL_WS_CA)) {
            $modifiedColumns[':p' . $index++]  = '`URL_WS_CA`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::AUTHENTIFICATION_LDAP)) {
            $modifiedColumns[':p' . $index++]  = '`AUTHENTIFICATION_LDAP`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::IP_LDAP)) {
            $modifiedColumns[':p' . $index++]  = '`IP_LDAP`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::BASE_DN_LDAP)) {
            $modifiedColumns[':p' . $index++]  = '`BASE_DN_LDAP`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::USER_LDAP)) {
            $modifiedColumns[':p' . $index++]  = '`USER_LDAP`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::PASSWORD_LDAP)) {
            $modifiedColumns[':p' . $index++]  = '`PASSWORD_LDAP`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::SCHEMA_LDAP)) {
            $modifiedColumns[':p' . $index++]  = '`SCHEMA_LDAP`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::PORT_LDAP)) {
            $modifiedColumns[':p' . $index++]  = '`PORT_LDAP`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::PROLONGATION)) {
            $modifiedColumns[':p' . $index++]  = '`PROLONGATION`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::DUREE_PROLONGATION)) {
            $modifiedColumns[':p' . $index++]  = '`DUREE_PROLONGATION`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::ORGANISME_PARAMETRAGE)) {
            $modifiedColumns[':p' . $index++]  = '`ORGANISME_PARAMETRAGE`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::ORGANISME_GESTION_UTILISATEURS)) {
            $modifiedColumns[':p' . $index++]  = '`ORGANISME_GESTION_UTILISATEURS`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::TYPE_GESTION_UTILISATEUR)) {
            $modifiedColumns[':p' . $index++]  = '`TYPE_GESTION_UTILISATEUR`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::MULTI_AFFECTATION)) {
            $modifiedColumns[':p' . $index++]  = '`MULTI_AFFECTATION`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::TAUX_ECHEANCE)) {
            $modifiedColumns[':p' . $index++]  = '`TAUX_ECHEANCE`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::REPONSE_AFFECTATION_EXTERNE)) {
            $modifiedColumns[':p' . $index++]  = '`REPONSE_AFFECTATION_EXTERNE`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::INCREMENT_CONFIDENTIEL)) {
            $modifiedColumns[':p' . $index++]  = '`INCREMENT_CONFIDENTIEL`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::OBLIGATION_EMETTEUR_COURRIER_ENTRANT)) {
            $modifiedColumns[':p' . $index++]  = '`OBLIGATION_EMETTEUR_COURRIER_ENTRANT`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::OBLIGATION_EMETTEUR_COURRIER_INTERNE)) {
            $modifiedColumns[':p' . $index++]  = '`OBLIGATION_EMETTEUR_COURRIER_INTERNE`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::OBLIGATION_DESTINATAIRE_COURRIER_SORTANT)) {
            $modifiedColumns[':p' . $index++]  = '`OBLIGATION_DESTINATAIRE_COURRIER_SORTANT`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::OBLIGATION_DESTINATAIRE_MENTIONNE_COURRIER_ENTRANT)) {
            $modifiedColumns[':p' . $index++]  = '`OBLIGATION_DESTINATAIRE_MENTIONNE_COURRIER_ENTRANT`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::OBLIGATION_DESTINATAIRE_COURRIER_INTERNE)) {
            $modifiedColumns[':p' . $index++]  = '`OBLIGATION_DESTINATAIRE_COURRIER_INTERNE`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::OBLIGATION_OBJET)) {
            $modifiedColumns[':p' . $index++]  = '`OBLIGATION_OBJET`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::OBLIGATION_SIGNATAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`OBLIGATION_SIGNATAIRE`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::GESTION_DEMANDEURS)) {
            $modifiedColumns[':p' . $index++]  = '`GESTION_DEMANDEURS`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::NUMERO_FOURNISSEUR)) {
            $modifiedColumns[':p' . $index++]  = '`NUMERO_FOURNISSEUR`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::TYPE_DELAI)) {
            $modifiedColumns[':p' . $index++]  = '`TYPE_DELAI`';
        }
        if ($this->isColumnModified(ConfigurationOrgansimePeer::NUM_PROVISOIRE)) {
            $modifiedColumns[':p' . $index++]  = '`NUM_PROVISOIRE`';
        }

        $sql = sprintf(
            'INSERT INTO `configuration_organsime` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id`':						
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case '`niveau_lieu`':						
                        $stmt->bindValue($identifier, $this->niveau_lieu, PDO::PARAM_INT);
                        break;
                    case '`valeur_defaut_pays`':						
                        $stmt->bindValue($identifier, $this->valeur_defaut_pays, PDO::PARAM_INT);
                        break;
                    case '`valeur_defaut_region`':						
                        $stmt->bindValue($identifier, $this->valeur_defaut_region, PDO::PARAM_INT);
                        break;
                    case '`valeur_defaut_province`':						
                        $stmt->bindValue($identifier, $this->valeur_defaut_province, PDO::PARAM_INT);
                        break;
                    case '`valeur_par_defaut_commune`':						
                        $stmt->bindValue($identifier, $this->valeur_par_defaut_commune, PDO::PARAM_INT);
                        break;
                    case '`mode_affectation_demande`':						
                        $stmt->bindValue($identifier, $this->mode_affectation_demande, PDO::PARAM_STR);
                        break;
                    case '`module_entite_lie_lieu`':						
                        $stmt->bindValue($identifier, $this->module_entite_lie_lieu, PDO::PARAM_STR);
                        break;
                    case '`NBR_JOUR_DELAI_TRAITEMENT`':						
                        $stmt->bindValue($identifier, $this->nbr_jour_delai_traitement, PDO::PARAM_INT);
                        break;
                    case '`OBLIGATION_LIEU_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->obligation_lieu_demande, PDO::PARAM_STR);
                        break;
                    case '`MODULE_GOOGLE_MAPS`':						
                        $stmt->bindValue($identifier, $this->module_google_maps, PDO::PARAM_STR);
                        break;
                    case '`VISIBILITE_CHAMP_LOCALISATION`':						
                        $stmt->bindValue($identifier, $this->visibilite_champ_localisation, PDO::PARAM_STR);
                        break;
                    case '`ECHANGE_WEB_SERVICE`':						
                        $stmt->bindValue($identifier, $this->echange_web_service, PDO::PARAM_STR);
                        break;
                    case '`ID_ENTITE`':						
                        $stmt->bindValue($identifier, $this->id_entite, PDO::PARAM_INT);
                        break;
                    case '`OBLIGATION_NOM_PRENOM_REQUERANT`':						
                        $stmt->bindValue($identifier, $this->obligation_nom_prenom_requerant, PDO::PARAM_STR);
                        break;
                    case '`OBLIGATION_NOM_ORGANISME_REQUERANT`':						
                        $stmt->bindValue($identifier, $this->obligation_nom_organisme_requerant, PDO::PARAM_STR);
                        break;
                    case '`OBLIGATION_REGISTRE_COMMERCE_REQUERANT`':						
                        $stmt->bindValue($identifier, $this->obligation_registre_commerce_requerant, PDO::PARAM_STR);
                        break;
                    case '`OBLIGATION_TELEPHONE_REQUERANT`':						
                        $stmt->bindValue($identifier, $this->obligation_telephone_requerant, PDO::PARAM_STR);
                        break;
                    case '`VISIBILITE_REGISTRE_COMMERCE_REQUERANT`':						
                        $stmt->bindValue($identifier, $this->visibilite_registre_commerce_requerant, PDO::PARAM_STR);
                        break;
                    case '`VISIBILITE_IDENTIFIANT_FISCAL`':						
                        $stmt->bindValue($identifier, $this->visibilite_identifiant_fiscal, PDO::PARAM_STR);
                        break;
                    case '`OBLIGATION_IDENTIFIANT_FISCAL`':						
                        $stmt->bindValue($identifier, $this->obligation_identifiant_fiscal, PDO::PARAM_STR);
                        break;
                    case '`DELAI_CLOTURE_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->delai_cloture_demande, PDO::PARAM_INT);
                        break;
                    case '`NOTIFICATION_AVANT_DATE_REPONSE`':						
                        $stmt->bindValue($identifier, $this->notification_avant_date_reponse, PDO::PARAM_INT);
                        break;
                    case '`BORNE_TRAITEMENT_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->borne_traitement_demande, PDO::PARAM_INT);
                        break;
                    case '`REGLE_NUMERO_DEMANDE_ENTRANT`':						
                        $stmt->bindValue($identifier, $this->regle_numero_demande_entrant, PDO::PARAM_STR);
                        break;
                    case '`REGLE_NUMERO_DEMANDE_SORTANT`':						
                        $stmt->bindValue($identifier, $this->regle_numero_demande_sortant, PDO::PARAM_STR);
                        break;
                    case '`REGLE_NUMERO_DEMANDE_INTERNE`':						
                        $stmt->bindValue($identifier, $this->regle_numero_demande_interne, PDO::PARAM_STR);
                        break;
                    case '`VISIBILITE_BLOC_REPONSE_OBLIGATOIRE`':						
                        $stmt->bindValue($identifier, $this->visibilite_bloc_reponse_obligatoire, PDO::PARAM_STR);
                        break;
                    case '`VISIBILITE_BLOC_LIEU_CONCERNE`':						
                        $stmt->bindValue($identifier, $this->visibilite_bloc_lieu_concerne, PDO::PARAM_STR);
                        break;
                    case '`OBLIGATION_MESSAGE_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->obligation_message_demande, PDO::PARAM_STR);
                        break;
                    case '`OBLIGATION_EMAIL_DEMANDEUR`':						
                        $stmt->bindValue($identifier, $this->obligation_email_demandeur, PDO::PARAM_STR);
                        break;
                    case '`OBLIGATION_SOUS_THEME`':						
                        $stmt->bindValue($identifier, $this->obligation_sous_theme, PDO::PARAM_STR);
                        break;
                    case '`VISIBLITIE_CONDITION_UTILISATION`':						
                        $stmt->bindValue($identifier, $this->visiblitie_condition_utilisation, PDO::PARAM_STR);
                        break;
                    case '`CONDITION_UTILISATION_AR`':						
                        $stmt->bindValue($identifier, $this->condition_utilisation_ar, PDO::PARAM_STR);
                        break;
                    case '`CONDITION_UTILISATION_FR`':						
                        $stmt->bindValue($identifier, $this->condition_utilisation_fr, PDO::PARAM_STR);
                        break;
                    case '`GESTION_DEMANDEUR_PAR_ENTITE`':						
                        $stmt->bindValue($identifier, $this->gestion_demandeur_par_entite, PDO::PARAM_STR);
                        break;
                    case '`VALEUR_DEFAUT_TYPE_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->valeur_defaut_type_demande, PDO::PARAM_INT);
                        break;
                    case '`VALEUR_DEFAUT_REPONSE_OBLIGATOIRE`':						
                        $stmt->bindValue($identifier, $this->valeur_defaut_reponse_obligatoire, PDO::PARAM_STR);
                        break;
                    case '`ACCES_EXTRANET`':						
                        $stmt->bindValue($identifier, $this->acces_extranet, PDO::PARAM_STR);
                        break;
                    case '`LANGUE_PAR_DEFAUT_EXTRANET`':						
                        $stmt->bindValue($identifier, $this->langue_par_defaut_extranet, PDO::PARAM_STR);
                        break;
                    case '`GOOGLE_ANALYTICS`':						
                        $stmt->bindValue($identifier, $this->google_analytics, PDO::PARAM_STR);
                        break;
                    case '`CHIFFREMENT`':						
                        $stmt->bindValue($identifier, $this->chiffrement, PDO::PARAM_STR);
                        break;
                    case '`ID_ENTITE_CENTRALE`':						
                        $stmt->bindValue($identifier, $this->id_entite_centrale, PDO::PARAM_INT);
                        break;
                    case '`SERVICE_NOTIFICATION_SMS`':						
                        $stmt->bindValue($identifier, $this->service_notification_sms, PDO::PARAM_STR);
                        break;
                    case '`LOGIN_SERVICE_SMS`':						
                        $stmt->bindValue($identifier, $this->login_service_sms, PDO::PARAM_STR);
                        break;
                    case '`PASS_SERVICE_SMS`':						
                        $stmt->bindValue($identifier, $this->pass_service_sms, PDO::PARAM_STR);
                        break;
                    case '`CODE_ENVOI_SMS`':						
                        $stmt->bindValue($identifier, $this->code_envoi_sms, PDO::PARAM_STR);
                        break;
                    case '`URL_SERVICE_SMS`':						
                        $stmt->bindValue($identifier, $this->url_service_sms, PDO::PARAM_STR);
                        break;
                    case '`CIRCUIT_VALIDATION`':						
                        $stmt->bindValue($identifier, $this->circuit_validation, PDO::PARAM_STR);
                        break;
                    case '`VISIBILITE_MESSAGE_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->visibilite_message_demande, PDO::PARAM_STR);
                        break;
                    case '`CODE_SIGNATAIRE_CERTIFICAT`':						
                        $stmt->bindValue($identifier, $this->code_signataire_certificat, PDO::PARAM_STR);
                        break;
                    case '`ACCES_STATISTIQUES`':						
                        $stmt->bindValue($identifier, $this->acces_statistiques, PDO::PARAM_STR);
                        break;
                    case '`WEBSERVICE_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->webservice_demande, PDO::PARAM_STR);
                        break;
                    case '`URL_WEBSERVICE_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->url_webservice_demande, PDO::PARAM_STR);
                        break;
                    case '`JETON_WEBSERVICE`':						
                        $stmt->bindValue($identifier, $this->jeton_webservice, PDO::PARAM_STR);
                        break;
                    case '`IDENTIFIANT_ENTITE_RECEPTION`':						
                        $stmt->bindValue($identifier, $this->identifiant_entite_reception, PDO::PARAM_INT);
                        break;
                    case '`IDENTIFIANT_SOUS_THEME`':						
                        $stmt->bindValue($identifier, $this->identifiant_sous_theme, PDO::PARAM_INT);
                        break;
                    case '`SCANNER`':						
                        $stmt->bindValue($identifier, $this->scanner, PDO::PARAM_STR);
                        break;
                    case '`ACTIVATION_AUTH_SOCLE`':						
                        $stmt->bindValue($identifier, $this->activation_auth_socle, PDO::PARAM_STR);
                        break;
                    case '`AFFICHAGE_ENREGISTRER_GENERER_NUMERO`':						
                        $stmt->bindValue($identifier, $this->affichage_enregistrer_generer_numero, PDO::PARAM_STR);
                        break;
                    case '`JETON_ORG_SERVICE`':						
                        $stmt->bindValue($identifier, $this->jeton_org_service, PDO::PARAM_STR);
                        break;
                    case '`ONGLET_DEPUIS_1`':						
                        $stmt->bindValue($identifier, $this->onglet_depuis_1, PDO::PARAM_INT);
                        break;
                    case '`ONGLET_DEPUIS_2`':						
                        $stmt->bindValue($identifier, $this->onglet_depuis_2, PDO::PARAM_INT);
                        break;
                    case '`NOMBRE_REOUVERTURE`':						
                        $stmt->bindValue($identifier, $this->nombre_reouverture, PDO::PARAM_INT);
                        break;
                    case '`CENTRE_APPEL`':						
                        $stmt->bindValue($identifier, $this->centre_appel, PDO::PARAM_STR);
                        break;
                    case '`URL_WS_CA`':						
                        $stmt->bindValue($identifier, $this->url_ws_ca, PDO::PARAM_STR);
                        break;
                    case '`AUTHENTIFICATION_LDAP`':						
                        $stmt->bindValue($identifier, $this->authentification_ldap, PDO::PARAM_STR);
                        break;
                    case '`IP_LDAP`':						
                        $stmt->bindValue($identifier, $this->ip_ldap, PDO::PARAM_STR);
                        break;
                    case '`BASE_DN_LDAP`':						
                        $stmt->bindValue($identifier, $this->base_dn_ldap, PDO::PARAM_STR);
                        break;
                    case '`USER_LDAP`':						
                        $stmt->bindValue($identifier, $this->user_ldap, PDO::PARAM_STR);
                        break;
                    case '`PASSWORD_LDAP`':						
                        $stmt->bindValue($identifier, $this->password_ldap, PDO::PARAM_STR);
                        break;
                    case '`SCHEMA_LDAP`':						
                        $stmt->bindValue($identifier, $this->schema_ldap, PDO::PARAM_STR);
                        break;
                    case '`PORT_LDAP`':						
                        $stmt->bindValue($identifier, $this->port_ldap, PDO::PARAM_INT);
                        break;
                    case '`PROLONGATION`':						
                        $stmt->bindValue($identifier, $this->prolongation, PDO::PARAM_STR);
                        break;
                    case '`DUREE_PROLONGATION`':						
                        $stmt->bindValue($identifier, $this->duree_prolongation, PDO::PARAM_INT);
                        break;
                    case '`ORGANISME_PARAMETRAGE`':						
                        $stmt->bindValue($identifier, $this->organisme_parametrage, PDO::PARAM_INT);
                        break;
                    case '`ORGANISME_GESTION_UTILISATEURS`':						
                        $stmt->bindValue($identifier, $this->organisme_gestion_utilisateurs, PDO::PARAM_INT);
                        break;
                    case '`TYPE_GESTION_UTILISATEUR`':						
                        $stmt->bindValue($identifier, $this->type_gestion_utilisateur, PDO::PARAM_STR);
                        break;
                    case '`MULTI_AFFECTATION`':						
                        $stmt->bindValue($identifier, $this->multi_affectation, PDO::PARAM_STR);
                        break;
                    case '`TAUX_ECHEANCE`':						
                        $stmt->bindValue($identifier, $this->taux_echeance, PDO::PARAM_STR);
                        break;
                    case '`REPONSE_AFFECTATION_EXTERNE`':						
                        $stmt->bindValue($identifier, $this->reponse_affectation_externe, PDO::PARAM_STR);
                        break;
                    case '`INCREMENT_CONFIDENTIEL`':						
                        $stmt->bindValue($identifier, $this->increment_confidentiel, PDO::PARAM_STR);
                        break;
                    case '`OBLIGATION_EMETTEUR_COURRIER_ENTRANT`':						
                        $stmt->bindValue($identifier, $this->obligation_emetteur_courrier_entrant, PDO::PARAM_STR);
                        break;
                    case '`OBLIGATION_EMETTEUR_COURRIER_INTERNE`':						
                        $stmt->bindValue($identifier, $this->obligation_emetteur_courrier_interne, PDO::PARAM_STR);
                        break;
                    case '`OBLIGATION_DESTINATAIRE_COURRIER_SORTANT`':						
                        $stmt->bindValue($identifier, $this->obligation_destinataire_courrier_sortant, PDO::PARAM_STR);
                        break;
                    case '`OBLIGATION_DESTINATAIRE_MENTIONNE_COURRIER_ENTRANT`':						
                        $stmt->bindValue($identifier, $this->obligation_destinataire_mentionne_courrier_entrant, PDO::PARAM_STR);
                        break;
                    case '`OBLIGATION_DESTINATAIRE_COURRIER_INTERNE`':						
                        $stmt->bindValue($identifier, $this->obligation_destinataire_courrier_interne, PDO::PARAM_STR);
                        break;
                    case '`OBLIGATION_OBJET`':						
                        $stmt->bindValue($identifier, $this->obligation_objet, PDO::PARAM_STR);
                        break;
                    case '`OBLIGATION_SIGNATAIRE`':						
                        $stmt->bindValue($identifier, $this->obligation_signataire, PDO::PARAM_STR);
                        break;
                    case '`GESTION_DEMANDEURS`':						
                        $stmt->bindValue($identifier, $this->gestion_demandeurs, PDO::PARAM_STR);
                        break;
                    case '`NUMERO_FOURNISSEUR`':						
                        $stmt->bindValue($identifier, $this->numero_fournisseur, PDO::PARAM_STR);
                        break;
                    case '`TYPE_DELAI`':						
                        $stmt->bindValue($identifier, $this->type_delai, PDO::PARAM_STR);
                        break;
                    case '`NUM_PROVISOIRE`':						
                        $stmt->bindValue($identifier, $this->num_provisoire, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setId($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggregated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            if (($retval = ConfigurationOrgansimePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }



            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = ConfigurationOrgansimePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getId();
                break;
            case 1:
                return $this->getNiveauLieu();
                break;
            case 2:
                return $this->getValeurDefautPays();
                break;
            case 3:
                return $this->getValeurDefautRegion();
                break;
            case 4:
                return $this->getValeurDefautProvince();
                break;
            case 5:
                return $this->getValeurParDefautCommune();
                break;
            case 6:
                return $this->getModeAffectationDemande();
                break;
            case 7:
                return $this->getModuleEntiteLieLieu();
                break;
            case 8:
                return $this->getNbrJourDelaiTraitement();
                break;
            case 9:
                return $this->getObligationLieuDemande();
                break;
            case 10:
                return $this->getModuleGoogleMaps();
                break;
            case 11:
                return $this->getVisibiliteChampLocalisation();
                break;
            case 12:
                return $this->getEchangeWebService();
                break;
            case 13:
                return $this->getIdEntite();
                break;
            case 14:
                return $this->getObligationNomPrenomRequerant();
                break;
            case 15:
                return $this->getObligationNomOrganismeRequerant();
                break;
            case 16:
                return $this->getObligationRegistreCommerceRequerant();
                break;
            case 17:
                return $this->getObligationTelephoneRequerant();
                break;
            case 18:
                return $this->getVisibiliteRegistreCommerceRequerant();
                break;
            case 19:
                return $this->getVisibiliteIdentifiantFiscal();
                break;
            case 20:
                return $this->getObligationIdentifiantFiscal();
                break;
            case 21:
                return $this->getDelaiClotureDemande();
                break;
            case 22:
                return $this->getNotificationAvantDateReponse();
                break;
            case 23:
                return $this->getBorneTraitementDemande();
                break;
            case 24:
                return $this->getRegleNumeroDemandeEntrant();
                break;
            case 25:
                return $this->getRegleNumeroDemandeSortant();
                break;
            case 26:
                return $this->getRegleNumeroDemandeInterne();
                break;
            case 27:
                return $this->getVisibiliteBlocReponseObligatoire();
                break;
            case 28:
                return $this->getVisibiliteBlocLieuConcerne();
                break;
            case 29:
                return $this->getObligationMessageDemande();
                break;
            case 30:
                return $this->getObligationEmailDemandeur();
                break;
            case 31:
                return $this->getObligationSousTheme();
                break;
            case 32:
                return $this->getVisiblitieConditionUtilisation();
                break;
            case 33:
                return $this->getConditionUtilisationAr();
                break;
            case 34:
                return $this->getConditionUtilisationFr();
                break;
            case 35:
                return $this->getGestionDemandeurParEntite();
                break;
            case 36:
                return $this->getValeurDefautTypeDemande();
                break;
            case 37:
                return $this->getValeurDefautReponseObligatoire();
                break;
            case 38:
                return $this->getAccesExtranet();
                break;
            case 39:
                return $this->getLangueParDefautExtranet();
                break;
            case 40:
                return $this->getGoogleAnalytics();
                break;
            case 41:
                return $this->getChiffrement();
                break;
            case 42:
                return $this->getIdEntiteCentrale();
                break;
            case 43:
                return $this->getServiceNotificationSms();
                break;
            case 44:
                return $this->getLoginServiceSms();
                break;
            case 45:
                return $this->getPassServiceSms();
                break;
            case 46:
                return $this->getCodeEnvoiSms();
                break;
            case 47:
                return $this->getUrlServiceSms();
                break;
            case 48:
                return $this->getCircuitValidation();
                break;
            case 49:
                return $this->getVisibiliteMessageDemande();
                break;
            case 50:
                return $this->getCodeSignataireCertificat();
                break;
            case 51:
                return $this->getAccesStatistiques();
                break;
            case 52:
                return $this->getWebserviceDemande();
                break;
            case 53:
                return $this->getUrlWebserviceDemande();
                break;
            case 54:
                return $this->getJetonWebservice();
                break;
            case 55:
                return $this->getIdentifiantEntiteReception();
                break;
            case 56:
                return $this->getIdentifiantSousTheme();
                break;
            case 57:
                return $this->getScanner();
                break;
            case 58:
                return $this->getActivationAuthSocle();
                break;
            case 59:
                return $this->getAffichageEnregistrerGenererNumero();
                break;
            case 60:
                return $this->getJetonOrgService();
                break;
            case 61:
                return $this->getOngletDepuis1();
                break;
            case 62:
                return $this->getOngletDepuis2();
                break;
            case 63:
                return $this->getNombreReouverture();
                break;
            case 64:
                return $this->getCentreAppel();
                break;
            case 65:
                return $this->getUrlWsCa();
                break;
            case 66:
                return $this->getAuthentificationLdap();
                break;
            case 67:
                return $this->getIpLdap();
                break;
            case 68:
                return $this->getBaseDnLdap();
                break;
            case 69:
                return $this->getUserLdap();
                break;
            case 70:
                return $this->getPasswordLdap();
                break;
            case 71:
                return $this->getSchemaLdap();
                break;
            case 72:
                return $this->getPortLdap();
                break;
            case 73:
                return $this->getProlongation();
                break;
            case 74:
                return $this->getDureeProlongation();
                break;
            case 75:
                return $this->getOrganismeParametrage();
                break;
            case 76:
                return $this->getOrganismeGestionUtilisateurs();
                break;
            case 77:
                return $this->getTypeGestionUtilisateur();
                break;
            case 78:
                return $this->getMultiAffectation();
                break;
            case 79:
                return $this->getTauxEcheance();
                break;
            case 80:
                return $this->getReponseAffectationExterne();
                break;
            case 81:
                return $this->getIncrementConfidentiel();
                break;
            case 82:
                return $this->getObligationEmetteurCourrierEntrant();
                break;
            case 83:
                return $this->getObligationEmetteurCourrierInterne();
                break;
            case 84:
                return $this->getObligationDestinataireCourrierSortant();
                break;
            case 85:
                return $this->getObligationDestinataireMentionneCourrierEntrant();
                break;
            case 86:
                return $this->getObligationDestinataireCourrierInterne();
                break;
            case 87:
                return $this->getObligationObjet();
                break;
            case 88:
                return $this->getObligationSignataire();
                break;
            case 89:
                return $this->getGestionDemandeurs();
                break;
            case 90:
                return $this->getNumeroFournisseur();
                break;
            case 91:
                return $this->getTypeDelai();
                break;
            case 92:
                return $this->getNumProvisoire();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
    {
        if (isset($alreadyDumpedObjects['ConfigurationOrgansime'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ConfigurationOrgansime'][$this->getPrimaryKey()] = true;
        $keys = ConfigurationOrgansimePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getNiveauLieu(),
            $keys[2] => $this->getValeurDefautPays(),
            $keys[3] => $this->getValeurDefautRegion(),
            $keys[4] => $this->getValeurDefautProvince(),
            $keys[5] => $this->getValeurParDefautCommune(),
            $keys[6] => $this->getModeAffectationDemande(),
            $keys[7] => $this->getModuleEntiteLieLieu(),
            $keys[8] => $this->getNbrJourDelaiTraitement(),
            $keys[9] => $this->getObligationLieuDemande(),
            $keys[10] => $this->getModuleGoogleMaps(),
            $keys[11] => $this->getVisibiliteChampLocalisation(),
            $keys[12] => $this->getEchangeWebService(),
            $keys[13] => $this->getIdEntite(),
            $keys[14] => $this->getObligationNomPrenomRequerant(),
            $keys[15] => $this->getObligationNomOrganismeRequerant(),
            $keys[16] => $this->getObligationRegistreCommerceRequerant(),
            $keys[17] => $this->getObligationTelephoneRequerant(),
            $keys[18] => $this->getVisibiliteRegistreCommerceRequerant(),
            $keys[19] => $this->getVisibiliteIdentifiantFiscal(),
            $keys[20] => $this->getObligationIdentifiantFiscal(),
            $keys[21] => $this->getDelaiClotureDemande(),
            $keys[22] => $this->getNotificationAvantDateReponse(),
            $keys[23] => $this->getBorneTraitementDemande(),
            $keys[24] => $this->getRegleNumeroDemandeEntrant(),
            $keys[25] => $this->getRegleNumeroDemandeSortant(),
            $keys[26] => $this->getRegleNumeroDemandeInterne(),
            $keys[27] => $this->getVisibiliteBlocReponseObligatoire(),
            $keys[28] => $this->getVisibiliteBlocLieuConcerne(),
            $keys[29] => $this->getObligationMessageDemande(),
            $keys[30] => $this->getObligationEmailDemandeur(),
            $keys[31] => $this->getObligationSousTheme(),
            $keys[32] => $this->getVisiblitieConditionUtilisation(),
            $keys[33] => $this->getConditionUtilisationAr(),
            $keys[34] => $this->getConditionUtilisationFr(),
            $keys[35] => $this->getGestionDemandeurParEntite(),
            $keys[36] => $this->getValeurDefautTypeDemande(),
            $keys[37] => $this->getValeurDefautReponseObligatoire(),
            $keys[38] => $this->getAccesExtranet(),
            $keys[39] => $this->getLangueParDefautExtranet(),
            $keys[40] => $this->getGoogleAnalytics(),
            $keys[41] => $this->getChiffrement(),
            $keys[42] => $this->getIdEntiteCentrale(),
            $keys[43] => $this->getServiceNotificationSms(),
            $keys[44] => $this->getLoginServiceSms(),
            $keys[45] => $this->getPassServiceSms(),
            $keys[46] => $this->getCodeEnvoiSms(),
            $keys[47] => $this->getUrlServiceSms(),
            $keys[48] => $this->getCircuitValidation(),
            $keys[49] => $this->getVisibiliteMessageDemande(),
            $keys[50] => $this->getCodeSignataireCertificat(),
            $keys[51] => $this->getAccesStatistiques(),
            $keys[52] => $this->getWebserviceDemande(),
            $keys[53] => $this->getUrlWebserviceDemande(),
            $keys[54] => $this->getJetonWebservice(),
            $keys[55] => $this->getIdentifiantEntiteReception(),
            $keys[56] => $this->getIdentifiantSousTheme(),
            $keys[57] => $this->getScanner(),
            $keys[58] => $this->getActivationAuthSocle(),
            $keys[59] => $this->getAffichageEnregistrerGenererNumero(),
            $keys[60] => $this->getJetonOrgService(),
            $keys[61] => $this->getOngletDepuis1(),
            $keys[62] => $this->getOngletDepuis2(),
            $keys[63] => $this->getNombreReouverture(),
            $keys[64] => $this->getCentreAppel(),
            $keys[65] => $this->getUrlWsCa(),
            $keys[66] => $this->getAuthentificationLdap(),
            $keys[67] => $this->getIpLdap(),
            $keys[68] => $this->getBaseDnLdap(),
            $keys[69] => $this->getUserLdap(),
            $keys[70] => $this->getPasswordLdap(),
            $keys[71] => $this->getSchemaLdap(),
            $keys[72] => $this->getPortLdap(),
            $keys[73] => $this->getProlongation(),
            $keys[74] => $this->getDureeProlongation(),
            $keys[75] => $this->getOrganismeParametrage(),
            $keys[76] => $this->getOrganismeGestionUtilisateurs(),
            $keys[77] => $this->getTypeGestionUtilisateur(),
            $keys[78] => $this->getMultiAffectation(),
            $keys[79] => $this->getTauxEcheance(),
            $keys[80] => $this->getReponseAffectationExterne(),
            $keys[81] => $this->getIncrementConfidentiel(),
            $keys[82] => $this->getObligationEmetteurCourrierEntrant(),
            $keys[83] => $this->getObligationEmetteurCourrierInterne(),
            $keys[84] => $this->getObligationDestinataireCourrierSortant(),
            $keys[85] => $this->getObligationDestinataireMentionneCourrierEntrant(),
            $keys[86] => $this->getObligationDestinataireCourrierInterne(),
            $keys[87] => $this->getObligationObjet(),
            $keys[88] => $this->getObligationSignataire(),
            $keys[89] => $this->getGestionDemandeurs(),
            $keys[90] => $this->getNumeroFournisseur(),
            $keys[91] => $this->getTypeDelai(),
            $keys[92] => $this->getNumProvisoire(),
        );

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = ConfigurationOrgansimePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setId($value);
                break;
            case 1:
                $this->setNiveauLieu($value);
                break;
            case 2:
                $this->setValeurDefautPays($value);
                break;
            case 3:
                $this->setValeurDefautRegion($value);
                break;
            case 4:
                $this->setValeurDefautProvince($value);
                break;
            case 5:
                $this->setValeurParDefautCommune($value);
                break;
            case 6:
                $this->setModeAffectationDemande($value);
                break;
            case 7:
                $this->setModuleEntiteLieLieu($value);
                break;
            case 8:
                $this->setNbrJourDelaiTraitement($value);
                break;
            case 9:
                $this->setObligationLieuDemande($value);
                break;
            case 10:
                $this->setModuleGoogleMaps($value);
                break;
            case 11:
                $this->setVisibiliteChampLocalisation($value);
                break;
            case 12:
                $this->setEchangeWebService($value);
                break;
            case 13:
                $this->setIdEntite($value);
                break;
            case 14:
                $this->setObligationNomPrenomRequerant($value);
                break;
            case 15:
                $this->setObligationNomOrganismeRequerant($value);
                break;
            case 16:
                $this->setObligationRegistreCommerceRequerant($value);
                break;
            case 17:
                $this->setObligationTelephoneRequerant($value);
                break;
            case 18:
                $this->setVisibiliteRegistreCommerceRequerant($value);
                break;
            case 19:
                $this->setVisibiliteIdentifiantFiscal($value);
                break;
            case 20:
                $this->setObligationIdentifiantFiscal($value);
                break;
            case 21:
                $this->setDelaiClotureDemande($value);
                break;
            case 22:
                $this->setNotificationAvantDateReponse($value);
                break;
            case 23:
                $this->setBorneTraitementDemande($value);
                break;
            case 24:
                $this->setRegleNumeroDemandeEntrant($value);
                break;
            case 25:
                $this->setRegleNumeroDemandeSortant($value);
                break;
            case 26:
                $this->setRegleNumeroDemandeInterne($value);
                break;
            case 27:
                $this->setVisibiliteBlocReponseObligatoire($value);
                break;
            case 28:
                $this->setVisibiliteBlocLieuConcerne($value);
                break;
            case 29:
                $this->setObligationMessageDemande($value);
                break;
            case 30:
                $this->setObligationEmailDemandeur($value);
                break;
            case 31:
                $this->setObligationSousTheme($value);
                break;
            case 32:
                $this->setVisiblitieConditionUtilisation($value);
                break;
            case 33:
                $this->setConditionUtilisationAr($value);
                break;
            case 34:
                $this->setConditionUtilisationFr($value);
                break;
            case 35:
                $this->setGestionDemandeurParEntite($value);
                break;
            case 36:
                $this->setValeurDefautTypeDemande($value);
                break;
            case 37:
                $this->setValeurDefautReponseObligatoire($value);
                break;
            case 38:
                $this->setAccesExtranet($value);
                break;
            case 39:
                $this->setLangueParDefautExtranet($value);
                break;
            case 40:
                $this->setGoogleAnalytics($value);
                break;
            case 41:
                $this->setChiffrement($value);
                break;
            case 42:
                $this->setIdEntiteCentrale($value);
                break;
            case 43:
                $this->setServiceNotificationSms($value);
                break;
            case 44:
                $this->setLoginServiceSms($value);
                break;
            case 45:
                $this->setPassServiceSms($value);
                break;
            case 46:
                $this->setCodeEnvoiSms($value);
                break;
            case 47:
                $this->setUrlServiceSms($value);
                break;
            case 48:
                $this->setCircuitValidation($value);
                break;
            case 49:
                $this->setVisibiliteMessageDemande($value);
                break;
            case 50:
                $this->setCodeSignataireCertificat($value);
                break;
            case 51:
                $this->setAccesStatistiques($value);
                break;
            case 52:
                $this->setWebserviceDemande($value);
                break;
            case 53:
                $this->setUrlWebserviceDemande($value);
                break;
            case 54:
                $this->setJetonWebservice($value);
                break;
            case 55:
                $this->setIdentifiantEntiteReception($value);
                break;
            case 56:
                $this->setIdentifiantSousTheme($value);
                break;
            case 57:
                $this->setScanner($value);
                break;
            case 58:
                $this->setActivationAuthSocle($value);
                break;
            case 59:
                $this->setAffichageEnregistrerGenererNumero($value);
                break;
            case 60:
                $this->setJetonOrgService($value);
                break;
            case 61:
                $this->setOngletDepuis1($value);
                break;
            case 62:
                $this->setOngletDepuis2($value);
                break;
            case 63:
                $this->setNombreReouverture($value);
                break;
            case 64:
                $this->setCentreAppel($value);
                break;
            case 65:
                $this->setUrlWsCa($value);
                break;
            case 66:
                $this->setAuthentificationLdap($value);
                break;
            case 67:
                $this->setIpLdap($value);
                break;
            case 68:
                $this->setBaseDnLdap($value);
                break;
            case 69:
                $this->setUserLdap($value);
                break;
            case 70:
                $this->setPasswordLdap($value);
                break;
            case 71:
                $this->setSchemaLdap($value);
                break;
            case 72:
                $this->setPortLdap($value);
                break;
            case 73:
                $this->setProlongation($value);
                break;
            case 74:
                $this->setDureeProlongation($value);
                break;
            case 75:
                $this->setOrganismeParametrage($value);
                break;
            case 76:
                $this->setOrganismeGestionUtilisateurs($value);
                break;
            case 77:
                $this->setTypeGestionUtilisateur($value);
                break;
            case 78:
                $this->setMultiAffectation($value);
                break;
            case 79:
                $this->setTauxEcheance($value);
                break;
            case 80:
                $this->setReponseAffectationExterne($value);
                break;
            case 81:
                $this->setIncrementConfidentiel($value);
                break;
            case 82:
                $this->setObligationEmetteurCourrierEntrant($value);
                break;
            case 83:
                $this->setObligationEmetteurCourrierInterne($value);
                break;
            case 84:
                $this->setObligationDestinataireCourrierSortant($value);
                break;
            case 85:
                $this->setObligationDestinataireMentionneCourrierEntrant($value);
                break;
            case 86:
                $this->setObligationDestinataireCourrierInterne($value);
                break;
            case 87:
                $this->setObligationObjet($value);
                break;
            case 88:
                $this->setObligationSignataire($value);
                break;
            case 89:
                $this->setGestionDemandeurs($value);
                break;
            case 90:
                $this->setNumeroFournisseur($value);
                break;
            case 91:
                $this->setTypeDelai($value);
                break;
            case 92:
                $this->setNumProvisoire($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = ConfigurationOrgansimePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setNiveauLieu($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setValeurDefautPays($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setValeurDefautRegion($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setValeurDefautProvince($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setValeurParDefautCommune($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setModeAffectationDemande($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setModuleEntiteLieLieu($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setNbrJourDelaiTraitement($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setObligationLieuDemande($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setModuleGoogleMaps($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setVisibiliteChampLocalisation($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setEchangeWebService($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setIdEntite($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setObligationNomPrenomRequerant($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setObligationNomOrganismeRequerant($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setObligationRegistreCommerceRequerant($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setObligationTelephoneRequerant($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setVisibiliteRegistreCommerceRequerant($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setVisibiliteIdentifiantFiscal($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setObligationIdentifiantFiscal($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setDelaiClotureDemande($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setNotificationAvantDateReponse($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setBorneTraitementDemande($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setRegleNumeroDemandeEntrant($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setRegleNumeroDemandeSortant($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setRegleNumeroDemandeInterne($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setVisibiliteBlocReponseObligatoire($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setVisibiliteBlocLieuConcerne($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setObligationMessageDemande($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setObligationEmailDemandeur($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setObligationSousTheme($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setVisiblitieConditionUtilisation($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setConditionUtilisationAr($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setConditionUtilisationFr($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setGestionDemandeurParEntite($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setValeurDefautTypeDemande($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setValeurDefautReponseObligatoire($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setAccesExtranet($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setLangueParDefautExtranet($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setGoogleAnalytics($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setChiffrement($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setIdEntiteCentrale($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setServiceNotificationSms($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setLoginServiceSms($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setPassServiceSms($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setCodeEnvoiSms($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setUrlServiceSms($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setCircuitValidation($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setVisibiliteMessageDemande($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setCodeSignataireCertificat($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setAccesStatistiques($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setWebserviceDemande($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setUrlWebserviceDemande($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setJetonWebservice($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setIdentifiantEntiteReception($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setIdentifiantSousTheme($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setScanner($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setActivationAuthSocle($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setAffichageEnregistrerGenererNumero($arr[$keys[59]]);
        if (array_key_exists($keys[60], $arr)) $this->setJetonOrgService($arr[$keys[60]]);
        if (array_key_exists($keys[61], $arr)) $this->setOngletDepuis1($arr[$keys[61]]);
        if (array_key_exists($keys[62], $arr)) $this->setOngletDepuis2($arr[$keys[62]]);
        if (array_key_exists($keys[63], $arr)) $this->setNombreReouverture($arr[$keys[63]]);
        if (array_key_exists($keys[64], $arr)) $this->setCentreAppel($arr[$keys[64]]);
        if (array_key_exists($keys[65], $arr)) $this->setUrlWsCa($arr[$keys[65]]);
        if (array_key_exists($keys[66], $arr)) $this->setAuthentificationLdap($arr[$keys[66]]);
        if (array_key_exists($keys[67], $arr)) $this->setIpLdap($arr[$keys[67]]);
        if (array_key_exists($keys[68], $arr)) $this->setBaseDnLdap($arr[$keys[68]]);
        if (array_key_exists($keys[69], $arr)) $this->setUserLdap($arr[$keys[69]]);
        if (array_key_exists($keys[70], $arr)) $this->setPasswordLdap($arr[$keys[70]]);
        if (array_key_exists($keys[71], $arr)) $this->setSchemaLdap($arr[$keys[71]]);
        if (array_key_exists($keys[72], $arr)) $this->setPortLdap($arr[$keys[72]]);
        if (array_key_exists($keys[73], $arr)) $this->setProlongation($arr[$keys[73]]);
        if (array_key_exists($keys[74], $arr)) $this->setDureeProlongation($arr[$keys[74]]);
        if (array_key_exists($keys[75], $arr)) $this->setOrganismeParametrage($arr[$keys[75]]);
        if (array_key_exists($keys[76], $arr)) $this->setOrganismeGestionUtilisateurs($arr[$keys[76]]);
        if (array_key_exists($keys[77], $arr)) $this->setTypeGestionUtilisateur($arr[$keys[77]]);
        if (array_key_exists($keys[78], $arr)) $this->setMultiAffectation($arr[$keys[78]]);
        if (array_key_exists($keys[79], $arr)) $this->setTauxEcheance($arr[$keys[79]]);
        if (array_key_exists($keys[80], $arr)) $this->setReponseAffectationExterne($arr[$keys[80]]);
        if (array_key_exists($keys[81], $arr)) $this->setIncrementConfidentiel($arr[$keys[81]]);
        if (array_key_exists($keys[82], $arr)) $this->setObligationEmetteurCourrierEntrant($arr[$keys[82]]);
        if (array_key_exists($keys[83], $arr)) $this->setObligationEmetteurCourrierInterne($arr[$keys[83]]);
        if (array_key_exists($keys[84], $arr)) $this->setObligationDestinataireCourrierSortant($arr[$keys[84]]);
        if (array_key_exists($keys[85], $arr)) $this->setObligationDestinataireMentionneCourrierEntrant($arr[$keys[85]]);
        if (array_key_exists($keys[86], $arr)) $this->setObligationDestinataireCourrierInterne($arr[$keys[86]]);
        if (array_key_exists($keys[87], $arr)) $this->setObligationObjet($arr[$keys[87]]);
        if (array_key_exists($keys[88], $arr)) $this->setObligationSignataire($arr[$keys[88]]);
        if (array_key_exists($keys[89], $arr)) $this->setGestionDemandeurs($arr[$keys[89]]);
        if (array_key_exists($keys[90], $arr)) $this->setNumeroFournisseur($arr[$keys[90]]);
        if (array_key_exists($keys[91], $arr)) $this->setTypeDelai($arr[$keys[91]]);
        if (array_key_exists($keys[92], $arr)) $this->setNumProvisoire($arr[$keys[92]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ConfigurationOrgansimePeer::DATABASE_NAME);

        if ($this->isColumnModified(ConfigurationOrgansimePeer::ID)) $criteria->add(ConfigurationOrgansimePeer::ID, $this->id);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::NIVEAU_LIEU)) $criteria->add(ConfigurationOrgansimePeer::NIVEAU_LIEU, $this->niveau_lieu);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::VALEUR_DEFAUT_PAYS)) $criteria->add(ConfigurationOrgansimePeer::VALEUR_DEFAUT_PAYS, $this->valeur_defaut_pays);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::VALEUR_DEFAUT_REGION)) $criteria->add(ConfigurationOrgansimePeer::VALEUR_DEFAUT_REGION, $this->valeur_defaut_region);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::VALEUR_DEFAUT_PROVINCE)) $criteria->add(ConfigurationOrgansimePeer::VALEUR_DEFAUT_PROVINCE, $this->valeur_defaut_province);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::VALEUR_PAR_DEFAUT_COMMUNE)) $criteria->add(ConfigurationOrgansimePeer::VALEUR_PAR_DEFAUT_COMMUNE, $this->valeur_par_defaut_commune);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::MODE_AFFECTATION_DEMANDE)) $criteria->add(ConfigurationOrgansimePeer::MODE_AFFECTATION_DEMANDE, $this->mode_affectation_demande);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::MODULE_ENTITE_LIE_LIEU)) $criteria->add(ConfigurationOrgansimePeer::MODULE_ENTITE_LIE_LIEU, $this->module_entite_lie_lieu);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::NBR_JOUR_DELAI_TRAITEMENT)) $criteria->add(ConfigurationOrgansimePeer::NBR_JOUR_DELAI_TRAITEMENT, $this->nbr_jour_delai_traitement);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::OBLIGATION_LIEU_DEMANDE)) $criteria->add(ConfigurationOrgansimePeer::OBLIGATION_LIEU_DEMANDE, $this->obligation_lieu_demande);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::MODULE_GOOGLE_MAPS)) $criteria->add(ConfigurationOrgansimePeer::MODULE_GOOGLE_MAPS, $this->module_google_maps);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::VISIBILITE_CHAMP_LOCALISATION)) $criteria->add(ConfigurationOrgansimePeer::VISIBILITE_CHAMP_LOCALISATION, $this->visibilite_champ_localisation);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::ECHANGE_WEB_SERVICE)) $criteria->add(ConfigurationOrgansimePeer::ECHANGE_WEB_SERVICE, $this->echange_web_service);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::ID_ENTITE)) $criteria->add(ConfigurationOrgansimePeer::ID_ENTITE, $this->id_entite);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::OBLIGATION_NOM_PRENOM_REQUERANT)) $criteria->add(ConfigurationOrgansimePeer::OBLIGATION_NOM_PRENOM_REQUERANT, $this->obligation_nom_prenom_requerant);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::OBLIGATION_NOM_ORGANISME_REQUERANT)) $criteria->add(ConfigurationOrgansimePeer::OBLIGATION_NOM_ORGANISME_REQUERANT, $this->obligation_nom_organisme_requerant);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::OBLIGATION_REGISTRE_COMMERCE_REQUERANT)) $criteria->add(ConfigurationOrgansimePeer::OBLIGATION_REGISTRE_COMMERCE_REQUERANT, $this->obligation_registre_commerce_requerant);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::OBLIGATION_TELEPHONE_REQUERANT)) $criteria->add(ConfigurationOrgansimePeer::OBLIGATION_TELEPHONE_REQUERANT, $this->obligation_telephone_requerant);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::VISIBILITE_REGISTRE_COMMERCE_REQUERANT)) $criteria->add(ConfigurationOrgansimePeer::VISIBILITE_REGISTRE_COMMERCE_REQUERANT, $this->visibilite_registre_commerce_requerant);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::VISIBILITE_IDENTIFIANT_FISCAL)) $criteria->add(ConfigurationOrgansimePeer::VISIBILITE_IDENTIFIANT_FISCAL, $this->visibilite_identifiant_fiscal);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::OBLIGATION_IDENTIFIANT_FISCAL)) $criteria->add(ConfigurationOrgansimePeer::OBLIGATION_IDENTIFIANT_FISCAL, $this->obligation_identifiant_fiscal);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::DELAI_CLOTURE_DEMANDE)) $criteria->add(ConfigurationOrgansimePeer::DELAI_CLOTURE_DEMANDE, $this->delai_cloture_demande);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::NOTIFICATION_AVANT_DATE_REPONSE)) $criteria->add(ConfigurationOrgansimePeer::NOTIFICATION_AVANT_DATE_REPONSE, $this->notification_avant_date_reponse);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::BORNE_TRAITEMENT_DEMANDE)) $criteria->add(ConfigurationOrgansimePeer::BORNE_TRAITEMENT_DEMANDE, $this->borne_traitement_demande);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::REGLE_NUMERO_DEMANDE_ENTRANT)) $criteria->add(ConfigurationOrgansimePeer::REGLE_NUMERO_DEMANDE_ENTRANT, $this->regle_numero_demande_entrant);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::REGLE_NUMERO_DEMANDE_SORTANT)) $criteria->add(ConfigurationOrgansimePeer::REGLE_NUMERO_DEMANDE_SORTANT, $this->regle_numero_demande_sortant);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::REGLE_NUMERO_DEMANDE_INTERNE)) $criteria->add(ConfigurationOrgansimePeer::REGLE_NUMERO_DEMANDE_INTERNE, $this->regle_numero_demande_interne);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::VISIBILITE_BLOC_REPONSE_OBLIGATOIRE)) $criteria->add(ConfigurationOrgansimePeer::VISIBILITE_BLOC_REPONSE_OBLIGATOIRE, $this->visibilite_bloc_reponse_obligatoire);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::VISIBILITE_BLOC_LIEU_CONCERNE)) $criteria->add(ConfigurationOrgansimePeer::VISIBILITE_BLOC_LIEU_CONCERNE, $this->visibilite_bloc_lieu_concerne);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::OBLIGATION_MESSAGE_DEMANDE)) $criteria->add(ConfigurationOrgansimePeer::OBLIGATION_MESSAGE_DEMANDE, $this->obligation_message_demande);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::OBLIGATION_EMAIL_DEMANDEUR)) $criteria->add(ConfigurationOrgansimePeer::OBLIGATION_EMAIL_DEMANDEUR, $this->obligation_email_demandeur);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::OBLIGATION_SOUS_THEME)) $criteria->add(ConfigurationOrgansimePeer::OBLIGATION_SOUS_THEME, $this->obligation_sous_theme);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::VISIBLITIE_CONDITION_UTILISATION)) $criteria->add(ConfigurationOrgansimePeer::VISIBLITIE_CONDITION_UTILISATION, $this->visiblitie_condition_utilisation);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::CONDITION_UTILISATION_AR)) $criteria->add(ConfigurationOrgansimePeer::CONDITION_UTILISATION_AR, $this->condition_utilisation_ar);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::CONDITION_UTILISATION_FR)) $criteria->add(ConfigurationOrgansimePeer::CONDITION_UTILISATION_FR, $this->condition_utilisation_fr);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::GESTION_DEMANDEUR_PAR_ENTITE)) $criteria->add(ConfigurationOrgansimePeer::GESTION_DEMANDEUR_PAR_ENTITE, $this->gestion_demandeur_par_entite);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::VALEUR_DEFAUT_TYPE_DEMANDE)) $criteria->add(ConfigurationOrgansimePeer::VALEUR_DEFAUT_TYPE_DEMANDE, $this->valeur_defaut_type_demande);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::VALEUR_DEFAUT_REPONSE_OBLIGATOIRE)) $criteria->add(ConfigurationOrgansimePeer::VALEUR_DEFAUT_REPONSE_OBLIGATOIRE, $this->valeur_defaut_reponse_obligatoire);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::ACCES_EXTRANET)) $criteria->add(ConfigurationOrgansimePeer::ACCES_EXTRANET, $this->acces_extranet);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::LANGUE_PAR_DEFAUT_EXTRANET)) $criteria->add(ConfigurationOrgansimePeer::LANGUE_PAR_DEFAUT_EXTRANET, $this->langue_par_defaut_extranet);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::GOOGLE_ANALYTICS)) $criteria->add(ConfigurationOrgansimePeer::GOOGLE_ANALYTICS, $this->google_analytics);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::CHIFFREMENT)) $criteria->add(ConfigurationOrgansimePeer::CHIFFREMENT, $this->chiffrement);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::ID_ENTITE_CENTRALE)) $criteria->add(ConfigurationOrgansimePeer::ID_ENTITE_CENTRALE, $this->id_entite_centrale);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::SERVICE_NOTIFICATION_SMS)) $criteria->add(ConfigurationOrgansimePeer::SERVICE_NOTIFICATION_SMS, $this->service_notification_sms);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::LOGIN_SERVICE_SMS)) $criteria->add(ConfigurationOrgansimePeer::LOGIN_SERVICE_SMS, $this->login_service_sms);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::PASS_SERVICE_SMS)) $criteria->add(ConfigurationOrgansimePeer::PASS_SERVICE_SMS, $this->pass_service_sms);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::CODE_ENVOI_SMS)) $criteria->add(ConfigurationOrgansimePeer::CODE_ENVOI_SMS, $this->code_envoi_sms);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::URL_SERVICE_SMS)) $criteria->add(ConfigurationOrgansimePeer::URL_SERVICE_SMS, $this->url_service_sms);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::CIRCUIT_VALIDATION)) $criteria->add(ConfigurationOrgansimePeer::CIRCUIT_VALIDATION, $this->circuit_validation);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::VISIBILITE_MESSAGE_DEMANDE)) $criteria->add(ConfigurationOrgansimePeer::VISIBILITE_MESSAGE_DEMANDE, $this->visibilite_message_demande);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::CODE_SIGNATAIRE_CERTIFICAT)) $criteria->add(ConfigurationOrgansimePeer::CODE_SIGNATAIRE_CERTIFICAT, $this->code_signataire_certificat);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::ACCES_STATISTIQUES)) $criteria->add(ConfigurationOrgansimePeer::ACCES_STATISTIQUES, $this->acces_statistiques);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::WEBSERVICE_DEMANDE)) $criteria->add(ConfigurationOrgansimePeer::WEBSERVICE_DEMANDE, $this->webservice_demande);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::URL_WEBSERVICE_DEMANDE)) $criteria->add(ConfigurationOrgansimePeer::URL_WEBSERVICE_DEMANDE, $this->url_webservice_demande);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::JETON_WEBSERVICE)) $criteria->add(ConfigurationOrgansimePeer::JETON_WEBSERVICE, $this->jeton_webservice);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::IDENTIFIANT_ENTITE_RECEPTION)) $criteria->add(ConfigurationOrgansimePeer::IDENTIFIANT_ENTITE_RECEPTION, $this->identifiant_entite_reception);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::IDENTIFIANT_SOUS_THEME)) $criteria->add(ConfigurationOrgansimePeer::IDENTIFIANT_SOUS_THEME, $this->identifiant_sous_theme);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::SCANNER)) $criteria->add(ConfigurationOrgansimePeer::SCANNER, $this->scanner);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::ACTIVATION_AUTH_SOCLE)) $criteria->add(ConfigurationOrgansimePeer::ACTIVATION_AUTH_SOCLE, $this->activation_auth_socle);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::AFFICHAGE_ENREGISTRER_GENERER_NUMERO)) $criteria->add(ConfigurationOrgansimePeer::AFFICHAGE_ENREGISTRER_GENERER_NUMERO, $this->affichage_enregistrer_generer_numero);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::JETON_ORG_SERVICE)) $criteria->add(ConfigurationOrgansimePeer::JETON_ORG_SERVICE, $this->jeton_org_service);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::ONGLET_DEPUIS_1)) $criteria->add(ConfigurationOrgansimePeer::ONGLET_DEPUIS_1, $this->onglet_depuis_1);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::ONGLET_DEPUIS_2)) $criteria->add(ConfigurationOrgansimePeer::ONGLET_DEPUIS_2, $this->onglet_depuis_2);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::NOMBRE_REOUVERTURE)) $criteria->add(ConfigurationOrgansimePeer::NOMBRE_REOUVERTURE, $this->nombre_reouverture);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::CENTRE_APPEL)) $criteria->add(ConfigurationOrgansimePeer::CENTRE_APPEL, $this->centre_appel);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::URL_WS_CA)) $criteria->add(ConfigurationOrgansimePeer::URL_WS_CA, $this->url_ws_ca);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::AUTHENTIFICATION_LDAP)) $criteria->add(ConfigurationOrgansimePeer::AUTHENTIFICATION_LDAP, $this->authentification_ldap);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::IP_LDAP)) $criteria->add(ConfigurationOrgansimePeer::IP_LDAP, $this->ip_ldap);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::BASE_DN_LDAP)) $criteria->add(ConfigurationOrgansimePeer::BASE_DN_LDAP, $this->base_dn_ldap);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::USER_LDAP)) $criteria->add(ConfigurationOrgansimePeer::USER_LDAP, $this->user_ldap);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::PASSWORD_LDAP)) $criteria->add(ConfigurationOrgansimePeer::PASSWORD_LDAP, $this->password_ldap);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::SCHEMA_LDAP)) $criteria->add(ConfigurationOrgansimePeer::SCHEMA_LDAP, $this->schema_ldap);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::PORT_LDAP)) $criteria->add(ConfigurationOrgansimePeer::PORT_LDAP, $this->port_ldap);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::PROLONGATION)) $criteria->add(ConfigurationOrgansimePeer::PROLONGATION, $this->prolongation);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::DUREE_PROLONGATION)) $criteria->add(ConfigurationOrgansimePeer::DUREE_PROLONGATION, $this->duree_prolongation);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::ORGANISME_PARAMETRAGE)) $criteria->add(ConfigurationOrgansimePeer::ORGANISME_PARAMETRAGE, $this->organisme_parametrage);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::ORGANISME_GESTION_UTILISATEURS)) $criteria->add(ConfigurationOrgansimePeer::ORGANISME_GESTION_UTILISATEURS, $this->organisme_gestion_utilisateurs);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::TYPE_GESTION_UTILISATEUR)) $criteria->add(ConfigurationOrgansimePeer::TYPE_GESTION_UTILISATEUR, $this->type_gestion_utilisateur);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::MULTI_AFFECTATION)) $criteria->add(ConfigurationOrgansimePeer::MULTI_AFFECTATION, $this->multi_affectation);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::TAUX_ECHEANCE)) $criteria->add(ConfigurationOrgansimePeer::TAUX_ECHEANCE, $this->taux_echeance);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::REPONSE_AFFECTATION_EXTERNE)) $criteria->add(ConfigurationOrgansimePeer::REPONSE_AFFECTATION_EXTERNE, $this->reponse_affectation_externe);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::INCREMENT_CONFIDENTIEL)) $criteria->add(ConfigurationOrgansimePeer::INCREMENT_CONFIDENTIEL, $this->increment_confidentiel);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::OBLIGATION_EMETTEUR_COURRIER_ENTRANT)) $criteria->add(ConfigurationOrgansimePeer::OBLIGATION_EMETTEUR_COURRIER_ENTRANT, $this->obligation_emetteur_courrier_entrant);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::OBLIGATION_EMETTEUR_COURRIER_INTERNE)) $criteria->add(ConfigurationOrgansimePeer::OBLIGATION_EMETTEUR_COURRIER_INTERNE, $this->obligation_emetteur_courrier_interne);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::OBLIGATION_DESTINATAIRE_COURRIER_SORTANT)) $criteria->add(ConfigurationOrgansimePeer::OBLIGATION_DESTINATAIRE_COURRIER_SORTANT, $this->obligation_destinataire_courrier_sortant);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::OBLIGATION_DESTINATAIRE_MENTIONNE_COURRIER_ENTRANT)) $criteria->add(ConfigurationOrgansimePeer::OBLIGATION_DESTINATAIRE_MENTIONNE_COURRIER_ENTRANT, $this->obligation_destinataire_mentionne_courrier_entrant);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::OBLIGATION_DESTINATAIRE_COURRIER_INTERNE)) $criteria->add(ConfigurationOrgansimePeer::OBLIGATION_DESTINATAIRE_COURRIER_INTERNE, $this->obligation_destinataire_courrier_interne);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::OBLIGATION_OBJET)) $criteria->add(ConfigurationOrgansimePeer::OBLIGATION_OBJET, $this->obligation_objet);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::OBLIGATION_SIGNATAIRE)) $criteria->add(ConfigurationOrgansimePeer::OBLIGATION_SIGNATAIRE, $this->obligation_signataire);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::GESTION_DEMANDEURS)) $criteria->add(ConfigurationOrgansimePeer::GESTION_DEMANDEURS, $this->gestion_demandeurs);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::NUMERO_FOURNISSEUR)) $criteria->add(ConfigurationOrgansimePeer::NUMERO_FOURNISSEUR, $this->numero_fournisseur);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::TYPE_DELAI)) $criteria->add(ConfigurationOrgansimePeer::TYPE_DELAI, $this->type_delai);
        if ($this->isColumnModified(ConfigurationOrgansimePeer::NUM_PROVISOIRE)) $criteria->add(ConfigurationOrgansimePeer::NUM_PROVISOIRE, $this->num_provisoire);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(ConfigurationOrgansimePeer::DATABASE_NAME);
        $criteria->add(ConfigurationOrgansimePeer::ID, $this->id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of ConfigurationOrgansime (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setNiveauLieu($this->getNiveauLieu());
        $copyObj->setValeurDefautPays($this->getValeurDefautPays());
        $copyObj->setValeurDefautRegion($this->getValeurDefautRegion());
        $copyObj->setValeurDefautProvince($this->getValeurDefautProvince());
        $copyObj->setValeurParDefautCommune($this->getValeurParDefautCommune());
        $copyObj->setModeAffectationDemande($this->getModeAffectationDemande());
        $copyObj->setModuleEntiteLieLieu($this->getModuleEntiteLieLieu());
        $copyObj->setNbrJourDelaiTraitement($this->getNbrJourDelaiTraitement());
        $copyObj->setObligationLieuDemande($this->getObligationLieuDemande());
        $copyObj->setModuleGoogleMaps($this->getModuleGoogleMaps());
        $copyObj->setVisibiliteChampLocalisation($this->getVisibiliteChampLocalisation());
        $copyObj->setEchangeWebService($this->getEchangeWebService());
        $copyObj->setIdEntite($this->getIdEntite());
        $copyObj->setObligationNomPrenomRequerant($this->getObligationNomPrenomRequerant());
        $copyObj->setObligationNomOrganismeRequerant($this->getObligationNomOrganismeRequerant());
        $copyObj->setObligationRegistreCommerceRequerant($this->getObligationRegistreCommerceRequerant());
        $copyObj->setObligationTelephoneRequerant($this->getObligationTelephoneRequerant());
        $copyObj->setVisibiliteRegistreCommerceRequerant($this->getVisibiliteRegistreCommerceRequerant());
        $copyObj->setVisibiliteIdentifiantFiscal($this->getVisibiliteIdentifiantFiscal());
        $copyObj->setObligationIdentifiantFiscal($this->getObligationIdentifiantFiscal());
        $copyObj->setDelaiClotureDemande($this->getDelaiClotureDemande());
        $copyObj->setNotificationAvantDateReponse($this->getNotificationAvantDateReponse());
        $copyObj->setBorneTraitementDemande($this->getBorneTraitementDemande());
        $copyObj->setRegleNumeroDemandeEntrant($this->getRegleNumeroDemandeEntrant());
        $copyObj->setRegleNumeroDemandeSortant($this->getRegleNumeroDemandeSortant());
        $copyObj->setRegleNumeroDemandeInterne($this->getRegleNumeroDemandeInterne());
        $copyObj->setVisibiliteBlocReponseObligatoire($this->getVisibiliteBlocReponseObligatoire());
        $copyObj->setVisibiliteBlocLieuConcerne($this->getVisibiliteBlocLieuConcerne());
        $copyObj->setObligationMessageDemande($this->getObligationMessageDemande());
        $copyObj->setObligationEmailDemandeur($this->getObligationEmailDemandeur());
        $copyObj->setObligationSousTheme($this->getObligationSousTheme());
        $copyObj->setVisiblitieConditionUtilisation($this->getVisiblitieConditionUtilisation());
        $copyObj->setConditionUtilisationAr($this->getConditionUtilisationAr());
        $copyObj->setConditionUtilisationFr($this->getConditionUtilisationFr());
        $copyObj->setGestionDemandeurParEntite($this->getGestionDemandeurParEntite());
        $copyObj->setValeurDefautTypeDemande($this->getValeurDefautTypeDemande());
        $copyObj->setValeurDefautReponseObligatoire($this->getValeurDefautReponseObligatoire());
        $copyObj->setAccesExtranet($this->getAccesExtranet());
        $copyObj->setLangueParDefautExtranet($this->getLangueParDefautExtranet());
        $copyObj->setGoogleAnalytics($this->getGoogleAnalytics());
        $copyObj->setChiffrement($this->getChiffrement());
        $copyObj->setIdEntiteCentrale($this->getIdEntiteCentrale());
        $copyObj->setServiceNotificationSms($this->getServiceNotificationSms());
        $copyObj->setLoginServiceSms($this->getLoginServiceSms());
        $copyObj->setPassServiceSms($this->getPassServiceSms());
        $copyObj->setCodeEnvoiSms($this->getCodeEnvoiSms());
        $copyObj->setUrlServiceSms($this->getUrlServiceSms());
        $copyObj->setCircuitValidation($this->getCircuitValidation());
        $copyObj->setVisibiliteMessageDemande($this->getVisibiliteMessageDemande());
        $copyObj->setCodeSignataireCertificat($this->getCodeSignataireCertificat());
        $copyObj->setAccesStatistiques($this->getAccesStatistiques());
        $copyObj->setWebserviceDemande($this->getWebserviceDemande());
        $copyObj->setUrlWebserviceDemande($this->getUrlWebserviceDemande());
        $copyObj->setJetonWebservice($this->getJetonWebservice());
        $copyObj->setIdentifiantEntiteReception($this->getIdentifiantEntiteReception());
        $copyObj->setIdentifiantSousTheme($this->getIdentifiantSousTheme());
        $copyObj->setScanner($this->getScanner());
        $copyObj->setActivationAuthSocle($this->getActivationAuthSocle());
        $copyObj->setAffichageEnregistrerGenererNumero($this->getAffichageEnregistrerGenererNumero());
        $copyObj->setJetonOrgService($this->getJetonOrgService());
        $copyObj->setOngletDepuis1($this->getOngletDepuis1());
        $copyObj->setOngletDepuis2($this->getOngletDepuis2());
        $copyObj->setNombreReouverture($this->getNombreReouverture());
        $copyObj->setCentreAppel($this->getCentreAppel());
        $copyObj->setUrlWsCa($this->getUrlWsCa());
        $copyObj->setAuthentificationLdap($this->getAuthentificationLdap());
        $copyObj->setIpLdap($this->getIpLdap());
        $copyObj->setBaseDnLdap($this->getBaseDnLdap());
        $copyObj->setUserLdap($this->getUserLdap());
        $copyObj->setPasswordLdap($this->getPasswordLdap());
        $copyObj->setSchemaLdap($this->getSchemaLdap());
        $copyObj->setPortLdap($this->getPortLdap());
        $copyObj->setProlongation($this->getProlongation());
        $copyObj->setDureeProlongation($this->getDureeProlongation());
        $copyObj->setOrganismeParametrage($this->getOrganismeParametrage());
        $copyObj->setOrganismeGestionUtilisateurs($this->getOrganismeGestionUtilisateurs());
        $copyObj->setTypeGestionUtilisateur($this->getTypeGestionUtilisateur());
        $copyObj->setMultiAffectation($this->getMultiAffectation());
        $copyObj->setTauxEcheance($this->getTauxEcheance());
        $copyObj->setReponseAffectationExterne($this->getReponseAffectationExterne());
        $copyObj->setIncrementConfidentiel($this->getIncrementConfidentiel());
        $copyObj->setObligationEmetteurCourrierEntrant($this->getObligationEmetteurCourrierEntrant());
        $copyObj->setObligationEmetteurCourrierInterne($this->getObligationEmetteurCourrierInterne());
        $copyObj->setObligationDestinataireCourrierSortant($this->getObligationDestinataireCourrierSortant());
        $copyObj->setObligationDestinataireMentionneCourrierEntrant($this->getObligationDestinataireMentionneCourrierEntrant());
        $copyObj->setObligationDestinataireCourrierInterne($this->getObligationDestinataireCourrierInterne());
        $copyObj->setObligationObjet($this->getObligationObjet());
        $copyObj->setObligationSignataire($this->getObligationSignataire());
        $copyObj->setGestionDemandeurs($this->getGestionDemandeurs());
        $copyObj->setNumeroFournisseur($this->getNumeroFournisseur());
        $copyObj->setTypeDelai($this->getTypeDelai());
        $copyObj->setNumProvisoire($this->getNumProvisoire());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return ConfigurationOrgansime Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return ConfigurationOrgansimePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ConfigurationOrgansimePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->niveau_lieu = null;
        $this->valeur_defaut_pays = null;
        $this->valeur_defaut_region = null;
        $this->valeur_defaut_province = null;
        $this->valeur_par_defaut_commune = null;
        $this->mode_affectation_demande = null;
        $this->module_entite_lie_lieu = null;
        $this->nbr_jour_delai_traitement = null;
        $this->obligation_lieu_demande = null;
        $this->module_google_maps = null;
        $this->visibilite_champ_localisation = null;
        $this->echange_web_service = null;
        $this->id_entite = null;
        $this->obligation_nom_prenom_requerant = null;
        $this->obligation_nom_organisme_requerant = null;
        $this->obligation_registre_commerce_requerant = null;
        $this->obligation_telephone_requerant = null;
        $this->visibilite_registre_commerce_requerant = null;
        $this->visibilite_identifiant_fiscal = null;
        $this->obligation_identifiant_fiscal = null;
        $this->delai_cloture_demande = null;
        $this->notification_avant_date_reponse = null;
        $this->borne_traitement_demande = null;
        $this->regle_numero_demande_entrant = null;
        $this->regle_numero_demande_sortant = null;
        $this->regle_numero_demande_interne = null;
        $this->visibilite_bloc_reponse_obligatoire = null;
        $this->visibilite_bloc_lieu_concerne = null;
        $this->obligation_message_demande = null;
        $this->obligation_email_demandeur = null;
        $this->obligation_sous_theme = null;
        $this->visiblitie_condition_utilisation = null;
        $this->condition_utilisation_ar = null;
        $this->condition_utilisation_fr = null;
        $this->gestion_demandeur_par_entite = null;
        $this->valeur_defaut_type_demande = null;
        $this->valeur_defaut_reponse_obligatoire = null;
        $this->acces_extranet = null;
        $this->langue_par_defaut_extranet = null;
        $this->google_analytics = null;
        $this->chiffrement = null;
        $this->id_entite_centrale = null;
        $this->service_notification_sms = null;
        $this->login_service_sms = null;
        $this->pass_service_sms = null;
        $this->code_envoi_sms = null;
        $this->url_service_sms = null;
        $this->circuit_validation = null;
        $this->visibilite_message_demande = null;
        $this->code_signataire_certificat = null;
        $this->acces_statistiques = null;
        $this->webservice_demande = null;
        $this->url_webservice_demande = null;
        $this->jeton_webservice = null;
        $this->identifiant_entite_reception = null;
        $this->identifiant_sous_theme = null;
        $this->scanner = null;
        $this->activation_auth_socle = null;
        $this->affichage_enregistrer_generer_numero = null;
        $this->jeton_org_service = null;
        $this->onglet_depuis_1 = null;
        $this->onglet_depuis_2 = null;
        $this->nombre_reouverture = null;
        $this->centre_appel = null;
        $this->url_ws_ca = null;
        $this->authentification_ldap = null;
        $this->ip_ldap = null;
        $this->base_dn_ldap = null;
        $this->user_ldap = null;
        $this->password_ldap = null;
        $this->schema_ldap = null;
        $this->port_ldap = null;
        $this->prolongation = null;
        $this->duree_prolongation = null;
        $this->organisme_parametrage = null;
        $this->organisme_gestion_utilisateurs = null;
        $this->type_gestion_utilisateur = null;
        $this->multi_affectation = null;
        $this->taux_echeance = null;
        $this->reponse_affectation_externe = null;
        $this->increment_confidentiel = null;
        $this->obligation_emetteur_courrier_entrant = null;
        $this->obligation_emetteur_courrier_interne = null;
        $this->obligation_destinataire_courrier_sortant = null;
        $this->obligation_destinataire_mentionne_courrier_entrant = null;
        $this->obligation_destinataire_courrier_interne = null;
        $this->obligation_objet = null;
        $this->obligation_signataire = null;
        $this->gestion_demandeurs = null;
        $this->numero_fournisseur = null;
        $this->type_delai = null;
        $this->num_provisoire = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ConfigurationOrgansimePeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
