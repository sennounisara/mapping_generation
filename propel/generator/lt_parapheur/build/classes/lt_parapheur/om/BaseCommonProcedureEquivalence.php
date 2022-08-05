<?php


/**
 * Base class that represents a row from the 'ProcedureEquivalence' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonProcedureEquivalence extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonProcedureEquivalencePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonProcedureEquivalencePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_type_procedure field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_type_procedure;

    /**
     * The value for the organisme field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the elec_resp field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $elec_resp;

    /**
     * The value for the no_elec_resp field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $no_elec_resp;

    /**
     * The value for the cipher_enabled field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $cipher_enabled;

    /**
     * The value for the cipher_disabled field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $cipher_disabled;

    /**
     * The value for the signature_enabled field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $signature_enabled;

    /**
     * The value for the signature_disabled field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $signature_disabled;

    /**
     * The value for the env_candidature field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $env_candidature;

    /**
     * The value for the env_offre field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $env_offre;

    /**
     * The value for the env_anonymat field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $env_anonymat;

    /**
     * The value for the envoi_complet field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $envoi_complet;

    /**
     * The value for the envoi_differe field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $envoi_differe;

    /**
     * The value for the procedure_publicite field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $procedure_publicite;

    /**
     * The value for the procedure_restreinte_candidature field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $procedure_restreinte_candidature;

    /**
     * The value for the procedure_restreinte_offre field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $procedure_restreinte_offre;

    /**
     * The value for the envoi_mail_par_mpe field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $envoi_mail_par_mpe;

    /**
     * The value for the no_envoi_mail_par_mpe field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $no_envoi_mail_par_mpe;

    /**
     * The value for the mise_en_ligne1 field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $mise_en_ligne1;

    /**
     * The value for the mise_en_ligne2 field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $mise_en_ligne2;

    /**
     * The value for the mise_en_ligne3 field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $mise_en_ligne3;

    /**
     * The value for the mise_en_ligne4 field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $mise_en_ligne4;

    /**
     * The value for the env_offre_type_unique field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $env_offre_type_unique;

    /**
     * The value for the env_offre_type_multiple field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $env_offre_type_multiple;

    /**
     * The value for the no_fichier_annonce field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $no_fichier_annonce;

    /**
     * The value for the fichier_importe field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $fichier_importe;

    /**
     * The value for the fichier_boamp field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $fichier_boamp;

    /**
     * The value for the reglement_cons field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $reglement_cons;

    /**
     * The value for the dossier_dce field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $dossier_dce;

    /**
     * The value for the partial_dce_download field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $partial_dce_download;

    /**
     * The value for the service field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $service;

    /**
     * The value for the constitution_dossier_reponse field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $constitution_dossier_reponse;

    /**
     * The value for the env_offre_type_unique2 field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $env_offre_type_unique2;

    /**
     * The value for the env_offre_type_multiple2 field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $env_offre_type_multiple2;

    /**
     * The value for the gestion_envois_postaux field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gestion_envois_postaux;

    /**
     * The value for the tireur_plan_non field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $tireur_plan_non;

    /**
     * The value for the tireur_plan_oui field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $tireur_plan_oui;

    /**
     * The value for the tireur_plan_papier field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $tireur_plan_papier;

    /**
     * The value for the tireur_plan_cdrom field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $tireur_plan_cdrom;

    /**
     * The value for the tireur_plan_nom field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $tireur_plan_nom;

    /**
     * The value for the tirage_descriptif field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $tirage_descriptif;

    /**
     * The value for the delai_date_limite_remise_pli field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $delai_date_limite_remise_pli;

    /**
     * The value for the signature_propre field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $signature_propre;

    /**
     * The value for the procedure_restreinte field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $procedure_restreinte;

    /**
     * The value for the ouverture_simultanee field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $ouverture_simultanee;

    /**
     * The value for the type_decision_a_renseigner field.
     * Note: this column has a database default value of: '-0'
     * @var        string
     */
    protected $type_decision_a_renseigner;

    /**
     * The value for the type_decision_attribution_marche field.
     * Note: this column has a database default value of: '-0'
     * @var        string
     */
    protected $type_decision_attribution_marche;

    /**
     * The value for the type_decision_declaration_sans_suite field.
     * Note: this column has a database default value of: '-0'
     * @var        string
     */
    protected $type_decision_declaration_sans_suite;

    /**
     * The value for the type_decision_declaration_infructueux field.
     * Note: this column has a database default value of: '-0'
     * @var        string
     */
    protected $type_decision_declaration_infructueux;

    /**
     * The value for the type_decision_selection_entreprise field.
     * Note: this column has a database default value of: '-0'
     * @var        string
     */
    protected $type_decision_selection_entreprise;

    /**
     * The value for the type_decision_attribution_accord_cadre field.
     * Note: this column has a database default value of: '-0'
     * @var        string
     */
    protected $type_decision_attribution_accord_cadre;

    /**
     * The value for the type_decision_admission_sad field.
     * Note: this column has a database default value of: '-0'
     * @var        string
     */
    protected $type_decision_admission_sad;

    /**
     * The value for the type_decision_autre field.
     * Note: this column has a database default value of: '-0'
     * @var        string
     */
    protected $type_decision_autre;

    /**
     * The value for the env_offre_technique field.
     * Note: this column has a database default value of: '-0'
     * @var        string
     */
    protected $env_offre_technique;

    /**
     * The value for the env_offre_technique_type_unique field.
     * Note: this column has a database default value of: '-0'
     * @var        string
     */
    protected $env_offre_technique_type_unique;

    /**
     * The value for the env_offre_technique_type_multiple field.
     * Note: this column has a database default value of: '-0'
     * @var        string
     */
    protected $env_offre_technique_type_multiple;

    /**
     * The value for the rep_obligatoire field.
     * Note: this column has a database default value of: '+0'
     * @var        string
     */
    protected $rep_obligatoire;

    /**
     * The value for the no_rep_obligatoire field.
     * Note: this column has a database default value of: '+0'
     * @var        string
     */
    protected $no_rep_obligatoire;

    /**
     * The value for the autre_piece_cons field.
     * Note: this column has a database default value of: '+0'
     * @var        string
     */
    protected $autre_piece_cons;

    /**
     * The value for the resp_elec_autre_plateforme field.
     * Note: this column has a database default value of: '-0'
     * @var        string
     */
    protected $resp_elec_autre_plateforme;

    /**
     * The value for the mise_en_ligne_entite_coordinatrice field.
     * Note: this column has a database default value of: '-0'
     * @var        string
     */
    protected $mise_en_ligne_entite_coordinatrice;

    /**
     * The value for the autoriser_publicite field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $autoriser_publicite;

    /**
     * The value for the poursuite_date_limite_remise_pli field.
     * @var        string
     */
    protected $poursuite_date_limite_remise_pli;

    /**
     * The value for the delai_poursuite_affichage field.
     * @var        string
     */
    protected $delai_poursuite_affichage;

    /**
     * The value for the mode_ouverture_dossier field.
     * Note: this column has a database default value of: '+1'
     * @var        string
     */
    protected $mode_ouverture_dossier;

    /**
     * The value for the mode_ouverture_reponse field.
     * Note: this column has a database default value of: '+0'
     * @var        string
     */
    protected $mode_ouverture_reponse;

    /**
     * The value for the marche_public_simplifie field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $marche_public_simplifie;

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
        $this->id_type_procedure = 0;
        $this->organisme = '';
        $this->elec_resp = '';
        $this->no_elec_resp = '';
        $this->cipher_enabled = '';
        $this->cipher_disabled = '';
        $this->signature_enabled = '';
        $this->signature_disabled = '';
        $this->env_candidature = '';
        $this->env_offre = '';
        $this->env_anonymat = '';
        $this->envoi_complet = '';
        $this->envoi_differe = '';
        $this->procedure_publicite = '';
        $this->procedure_restreinte_candidature = '';
        $this->procedure_restreinte_offre = '';
        $this->envoi_mail_par_mpe = '0';
        $this->no_envoi_mail_par_mpe = '0';
        $this->mise_en_ligne1 = '';
        $this->mise_en_ligne2 = '';
        $this->mise_en_ligne3 = '';
        $this->mise_en_ligne4 = '';
        $this->env_offre_type_unique = '';
        $this->env_offre_type_multiple = '';
        $this->no_fichier_annonce = '';
        $this->fichier_importe = '';
        $this->fichier_boamp = '';
        $this->reglement_cons = '';
        $this->dossier_dce = '';
        $this->partial_dce_download = '';
        $this->service = '';
        $this->constitution_dossier_reponse = '';
        $this->env_offre_type_unique2 = '';
        $this->env_offre_type_multiple2 = '';
        $this->gestion_envois_postaux = '';
        $this->tireur_plan_non = '';
        $this->tireur_plan_oui = '';
        $this->tireur_plan_papier = '';
        $this->tireur_plan_cdrom = '';
        $this->tireur_plan_nom = '';
        $this->tirage_descriptif = '';
        $this->delai_date_limite_remise_pli = '';
        $this->signature_propre = '';
        $this->procedure_restreinte = '';
        $this->ouverture_simultanee = '';
        $this->type_decision_a_renseigner = '-0';
        $this->type_decision_attribution_marche = '-0';
        $this->type_decision_declaration_sans_suite = '-0';
        $this->type_decision_declaration_infructueux = '-0';
        $this->type_decision_selection_entreprise = '-0';
        $this->type_decision_attribution_accord_cadre = '-0';
        $this->type_decision_admission_sad = '-0';
        $this->type_decision_autre = '-0';
        $this->env_offre_technique = '-0';
        $this->env_offre_technique_type_unique = '-0';
        $this->env_offre_technique_type_multiple = '-0';
        $this->rep_obligatoire = '+0';
        $this->no_rep_obligatoire = '+0';
        $this->autre_piece_cons = '+0';
        $this->resp_elec_autre_plateforme = '-0';
        $this->mise_en_ligne_entite_coordinatrice = '-0';
        $this->autoriser_publicite = '1';
        $this->mode_ouverture_dossier = '+1';
        $this->mode_ouverture_reponse = '+0';
        $this->marche_public_simplifie = '0';
    }

    /**
     * Initializes internal state of BaseCommonProcedureEquivalence object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_type_procedure] column value.
     * 
     * @return int
     */
    public function getIdTypeProcedure()
    {

        return $this->id_type_procedure;
    }

    /**
     * Get the [organisme] column value.
     * 
     * @return string
     */
    public function getOrganisme()
    {

        return $this->organisme;
    }

    /**
     * Get the [elec_resp] column value.
     * 
     * @return string
     */
    public function getElecResp()
    {

        return $this->elec_resp;
    }

    /**
     * Get the [no_elec_resp] column value.
     * 
     * @return string
     */
    public function getNoElecResp()
    {

        return $this->no_elec_resp;
    }

    /**
     * Get the [cipher_enabled] column value.
     * 
     * @return string
     */
    public function getCipherEnabled()
    {

        return $this->cipher_enabled;
    }

    /**
     * Get the [cipher_disabled] column value.
     * 
     * @return string
     */
    public function getCipherDisabled()
    {

        return $this->cipher_disabled;
    }

    /**
     * Get the [signature_enabled] column value.
     * 
     * @return string
     */
    public function getSignatureEnabled()
    {

        return $this->signature_enabled;
    }

    /**
     * Get the [signature_disabled] column value.
     * 
     * @return string
     */
    public function getSignatureDisabled()
    {

        return $this->signature_disabled;
    }

    /**
     * Get the [env_candidature] column value.
     * 
     * @return string
     */
    public function getEnvCandidature()
    {

        return $this->env_candidature;
    }

    /**
     * Get the [env_offre] column value.
     * 
     * @return string
     */
    public function getEnvOffre()
    {

        return $this->env_offre;
    }

    /**
     * Get the [env_anonymat] column value.
     * 
     * @return string
     */
    public function getEnvAnonymat()
    {

        return $this->env_anonymat;
    }

    /**
     * Get the [envoi_complet] column value.
     * 
     * @return string
     */
    public function getEnvoiComplet()
    {

        return $this->envoi_complet;
    }

    /**
     * Get the [envoi_differe] column value.
     * 
     * @return string
     */
    public function getEnvoiDiffere()
    {

        return $this->envoi_differe;
    }

    /**
     * Get the [procedure_publicite] column value.
     * 
     * @return string
     */
    public function getProcedurePublicite()
    {

        return $this->procedure_publicite;
    }

    /**
     * Get the [procedure_restreinte_candidature] column value.
     * 
     * @return string
     */
    public function getProcedureRestreinteCandidature()
    {

        return $this->procedure_restreinte_candidature;
    }

    /**
     * Get the [procedure_restreinte_offre] column value.
     * 
     * @return string
     */
    public function getProcedureRestreinteOffre()
    {

        return $this->procedure_restreinte_offre;
    }

    /**
     * Get the [envoi_mail_par_mpe] column value.
     * 
     * @return string
     */
    public function getEnvoiMailParMpe()
    {

        return $this->envoi_mail_par_mpe;
    }

    /**
     * Get the [no_envoi_mail_par_mpe] column value.
     * 
     * @return string
     */
    public function getNoEnvoiMailParMpe()
    {

        return $this->no_envoi_mail_par_mpe;
    }

    /**
     * Get the [mise_en_ligne1] column value.
     * 
     * @return string
     */
    public function getMiseEnLigne1()
    {

        return $this->mise_en_ligne1;
    }

    /**
     * Get the [mise_en_ligne2] column value.
     * 
     * @return string
     */
    public function getMiseEnLigne2()
    {

        return $this->mise_en_ligne2;
    }

    /**
     * Get the [mise_en_ligne3] column value.
     * 
     * @return string
     */
    public function getMiseEnLigne3()
    {

        return $this->mise_en_ligne3;
    }

    /**
     * Get the [mise_en_ligne4] column value.
     * 
     * @return string
     */
    public function getMiseEnLigne4()
    {

        return $this->mise_en_ligne4;
    }

    /**
     * Get the [env_offre_type_unique] column value.
     * 
     * @return string
     */
    public function getEnvOffreTypeUnique()
    {

        return $this->env_offre_type_unique;
    }

    /**
     * Get the [env_offre_type_multiple] column value.
     * 
     * @return string
     */
    public function getEnvOffreTypeMultiple()
    {

        return $this->env_offre_type_multiple;
    }

    /**
     * Get the [no_fichier_annonce] column value.
     * 
     * @return string
     */
    public function getNoFichierAnnonce()
    {

        return $this->no_fichier_annonce;
    }

    /**
     * Get the [fichier_importe] column value.
     * 
     * @return string
     */
    public function getFichierImporte()
    {

        return $this->fichier_importe;
    }

    /**
     * Get the [fichier_boamp] column value.
     * 
     * @return string
     */
    public function getFichierBoamp()
    {

        return $this->fichier_boamp;
    }

    /**
     * Get the [reglement_cons] column value.
     * 
     * @return string
     */
    public function getReglementCons()
    {

        return $this->reglement_cons;
    }

    /**
     * Get the [dossier_dce] column value.
     * 
     * @return string
     */
    public function getDossierDce()
    {

        return $this->dossier_dce;
    }

    /**
     * Get the [partial_dce_download] column value.
     * 
     * @return string
     */
    public function getPartialDceDownload()
    {

        return $this->partial_dce_download;
    }

    /**
     * Get the [service] column value.
     * 
     * @return string
     */
    public function getService()
    {

        return $this->service;
    }

    /**
     * Get the [constitution_dossier_reponse] column value.
     * 
     * @return string
     */
    public function getConstitutionDossierReponse()
    {

        return $this->constitution_dossier_reponse;
    }

    /**
     * Get the [env_offre_type_unique2] column value.
     * 
     * @return string
     */
    public function getEnvOffreTypeUnique2()
    {

        return $this->env_offre_type_unique2;
    }

    /**
     * Get the [env_offre_type_multiple2] column value.
     * 
     * @return string
     */
    public function getEnvOffreTypeMultiple2()
    {

        return $this->env_offre_type_multiple2;
    }

    /**
     * Get the [gestion_envois_postaux] column value.
     * 
     * @return string
     */
    public function getGestionEnvoisPostaux()
    {

        return $this->gestion_envois_postaux;
    }

    /**
     * Get the [tireur_plan_non] column value.
     * 
     * @return string
     */
    public function getTireurPlanNon()
    {

        return $this->tireur_plan_non;
    }

    /**
     * Get the [tireur_plan_oui] column value.
     * 
     * @return string
     */
    public function getTireurPlanOui()
    {

        return $this->tireur_plan_oui;
    }

    /**
     * Get the [tireur_plan_papier] column value.
     * 
     * @return string
     */
    public function getTireurPlanPapier()
    {

        return $this->tireur_plan_papier;
    }

    /**
     * Get the [tireur_plan_cdrom] column value.
     * 
     * @return string
     */
    public function getTireurPlanCdrom()
    {

        return $this->tireur_plan_cdrom;
    }

    /**
     * Get the [tireur_plan_nom] column value.
     * 
     * @return string
     */
    public function getTireurPlanNom()
    {

        return $this->tireur_plan_nom;
    }

    /**
     * Get the [tirage_descriptif] column value.
     * 
     * @return string
     */
    public function getTirageDescriptif()
    {

        return $this->tirage_descriptif;
    }

    /**
     * Get the [delai_date_limite_remise_pli] column value.
     * 
     * @return string
     */
    public function getDelaiDateLimiteRemisePli()
    {

        return $this->delai_date_limite_remise_pli;
    }

    /**
     * Get the [signature_propre] column value.
     * 
     * @return string
     */
    public function getSignaturePropre()
    {

        return $this->signature_propre;
    }

    /**
     * Get the [procedure_restreinte] column value.
     * 
     * @return string
     */
    public function getProcedureRestreinte()
    {

        return $this->procedure_restreinte;
    }

    /**
     * Get the [ouverture_simultanee] column value.
     * 
     * @return string
     */
    public function getOuvertureSimultanee()
    {

        return $this->ouverture_simultanee;
    }

    /**
     * Get the [type_decision_a_renseigner] column value.
     * 
     * @return string
     */
    public function getTypeDecisionARenseigner()
    {

        return $this->type_decision_a_renseigner;
    }

    /**
     * Get the [type_decision_attribution_marche] column value.
     * 
     * @return string
     */
    public function getTypeDecisionAttributionMarche()
    {

        return $this->type_decision_attribution_marche;
    }

    /**
     * Get the [type_decision_declaration_sans_suite] column value.
     * 
     * @return string
     */
    public function getTypeDecisionDeclarationSansSuite()
    {

        return $this->type_decision_declaration_sans_suite;
    }

    /**
     * Get the [type_decision_declaration_infructueux] column value.
     * 
     * @return string
     */
    public function getTypeDecisionDeclarationInfructueux()
    {

        return $this->type_decision_declaration_infructueux;
    }

    /**
     * Get the [type_decision_selection_entreprise] column value.
     * 
     * @return string
     */
    public function getTypeDecisionSelectionEntreprise()
    {

        return $this->type_decision_selection_entreprise;
    }

    /**
     * Get the [type_decision_attribution_accord_cadre] column value.
     * 
     * @return string
     */
    public function getTypeDecisionAttributionAccordCadre()
    {

        return $this->type_decision_attribution_accord_cadre;
    }

    /**
     * Get the [type_decision_admission_sad] column value.
     * 
     * @return string
     */
    public function getTypeDecisionAdmissionSad()
    {

        return $this->type_decision_admission_sad;
    }

    /**
     * Get the [type_decision_autre] column value.
     * 
     * @return string
     */
    public function getTypeDecisionAutre()
    {

        return $this->type_decision_autre;
    }

    /**
     * Get the [env_offre_technique] column value.
     * 
     * @return string
     */
    public function getEnvOffreTechnique()
    {

        return $this->env_offre_technique;
    }

    /**
     * Get the [env_offre_technique_type_unique] column value.
     * 
     * @return string
     */
    public function getEnvOffreTechniqueTypeUnique()
    {

        return $this->env_offre_technique_type_unique;
    }

    /**
     * Get the [env_offre_technique_type_multiple] column value.
     * 
     * @return string
     */
    public function getEnvOffreTechniqueTypeMultiple()
    {

        return $this->env_offre_technique_type_multiple;
    }

    /**
     * Get the [rep_obligatoire] column value.
     * 
     * @return string
     */
    public function getRepObligatoire()
    {

        return $this->rep_obligatoire;
    }

    /**
     * Get the [no_rep_obligatoire] column value.
     * 
     * @return string
     */
    public function getNoRepObligatoire()
    {

        return $this->no_rep_obligatoire;
    }

    /**
     * Get the [autre_piece_cons] column value.
     * 
     * @return string
     */
    public function getAutrePieceCons()
    {

        return $this->autre_piece_cons;
    }

    /**
     * Get the [resp_elec_autre_plateforme] column value.
     * 
     * @return string
     */
    public function getRespElecAutrePlateforme()
    {

        return $this->resp_elec_autre_plateforme;
    }

    /**
     * Get the [mise_en_ligne_entite_coordinatrice] column value.
     * 
     * @return string
     */
    public function getMiseEnLigneEntiteCoordinatrice()
    {

        return $this->mise_en_ligne_entite_coordinatrice;
    }

    /**
     * Get the [autoriser_publicite] column value.
     * 
     * @return string
     */
    public function getAutoriserPublicite()
    {

        return $this->autoriser_publicite;
    }

    /**
     * Get the [poursuite_date_limite_remise_pli] column value.
     * 
     * @return string
     */
    public function getPoursuiteDateLimiteRemisePli()
    {

        return $this->poursuite_date_limite_remise_pli;
    }

    /**
     * Get the [delai_poursuite_affichage] column value.
     * 
     * @return string
     */
    public function getDelaiPoursuiteAffichage()
    {

        return $this->delai_poursuite_affichage;
    }

    /**
     * Get the [mode_ouverture_dossier] column value.
     * 
     * @return string
     */
    public function getModeOuvertureDossier()
    {

        return $this->mode_ouverture_dossier;
    }

    /**
     * Get the [mode_ouverture_reponse] column value.
     * 
     * @return string
     */
    public function getModeOuvertureReponse()
    {

        return $this->mode_ouverture_reponse;
    }

    /**
     * Get the [marche_public_simplifie] column value.
     * 
     * @return string
     */
    public function getMarchePublicSimplifie()
    {

        return $this->marche_public_simplifie;
    }

    /**
     * Set the value of [id_type_procedure] column.
     * 
     * @param int $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setIdTypeProcedure($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_type_procedure !== $v) {
            $this->id_type_procedure = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::ID_TYPE_PROCEDURE;
        }


        return $this;
    } // setIdTypeProcedure()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [elec_resp] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setElecResp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->elec_resp !== $v) {
            $this->elec_resp = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::ELEC_RESP;
        }


        return $this;
    } // setElecResp()

    /**
     * Set the value of [no_elec_resp] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setNoElecResp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->no_elec_resp !== $v) {
            $this->no_elec_resp = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::NO_ELEC_RESP;
        }


        return $this;
    } // setNoElecResp()

    /**
     * Set the value of [cipher_enabled] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setCipherEnabled($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cipher_enabled !== $v) {
            $this->cipher_enabled = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::CIPHER_ENABLED;
        }


        return $this;
    } // setCipherEnabled()

    /**
     * Set the value of [cipher_disabled] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setCipherDisabled($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cipher_disabled !== $v) {
            $this->cipher_disabled = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::CIPHER_DISABLED;
        }


        return $this;
    } // setCipherDisabled()

    /**
     * Set the value of [signature_enabled] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setSignatureEnabled($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->signature_enabled !== $v) {
            $this->signature_enabled = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::SIGNATURE_ENABLED;
        }


        return $this;
    } // setSignatureEnabled()

    /**
     * Set the value of [signature_disabled] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setSignatureDisabled($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->signature_disabled !== $v) {
            $this->signature_disabled = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::SIGNATURE_DISABLED;
        }


        return $this;
    } // setSignatureDisabled()

    /**
     * Set the value of [env_candidature] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setEnvCandidature($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->env_candidature !== $v) {
            $this->env_candidature = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::ENV_CANDIDATURE;
        }


        return $this;
    } // setEnvCandidature()

    /**
     * Set the value of [env_offre] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setEnvOffre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->env_offre !== $v) {
            $this->env_offre = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::ENV_OFFRE;
        }


        return $this;
    } // setEnvOffre()

    /**
     * Set the value of [env_anonymat] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setEnvAnonymat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->env_anonymat !== $v) {
            $this->env_anonymat = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::ENV_ANONYMAT;
        }


        return $this;
    } // setEnvAnonymat()

    /**
     * Set the value of [envoi_complet] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setEnvoiComplet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->envoi_complet !== $v) {
            $this->envoi_complet = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::ENVOI_COMPLET;
        }


        return $this;
    } // setEnvoiComplet()

    /**
     * Set the value of [envoi_differe] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setEnvoiDiffere($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->envoi_differe !== $v) {
            $this->envoi_differe = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::ENVOI_DIFFERE;
        }


        return $this;
    } // setEnvoiDiffere()

    /**
     * Set the value of [procedure_publicite] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setProcedurePublicite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->procedure_publicite !== $v) {
            $this->procedure_publicite = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::PROCEDURE_PUBLICITE;
        }


        return $this;
    } // setProcedurePublicite()

    /**
     * Set the value of [procedure_restreinte_candidature] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setProcedureRestreinteCandidature($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->procedure_restreinte_candidature !== $v) {
            $this->procedure_restreinte_candidature = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::PROCEDURE_RESTREINTE_CANDIDATURE;
        }


        return $this;
    } // setProcedureRestreinteCandidature()

    /**
     * Set the value of [procedure_restreinte_offre] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setProcedureRestreinteOffre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->procedure_restreinte_offre !== $v) {
            $this->procedure_restreinte_offre = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::PROCEDURE_RESTREINTE_OFFRE;
        }


        return $this;
    } // setProcedureRestreinteOffre()

    /**
     * Set the value of [envoi_mail_par_mpe] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setEnvoiMailParMpe($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->envoi_mail_par_mpe !== $v) {
            $this->envoi_mail_par_mpe = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::ENVOI_MAIL_PAR_MPE;
        }


        return $this;
    } // setEnvoiMailParMpe()

    /**
     * Set the value of [no_envoi_mail_par_mpe] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setNoEnvoiMailParMpe($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->no_envoi_mail_par_mpe !== $v) {
            $this->no_envoi_mail_par_mpe = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::NO_ENVOI_MAIL_PAR_MPE;
        }


        return $this;
    } // setNoEnvoiMailParMpe()

    /**
     * Set the value of [mise_en_ligne1] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setMiseEnLigne1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mise_en_ligne1 !== $v) {
            $this->mise_en_ligne1 = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::MISE_EN_LIGNE1;
        }


        return $this;
    } // setMiseEnLigne1()

    /**
     * Set the value of [mise_en_ligne2] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setMiseEnLigne2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mise_en_ligne2 !== $v) {
            $this->mise_en_ligne2 = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::MISE_EN_LIGNE2;
        }


        return $this;
    } // setMiseEnLigne2()

    /**
     * Set the value of [mise_en_ligne3] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setMiseEnLigne3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mise_en_ligne3 !== $v) {
            $this->mise_en_ligne3 = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::MISE_EN_LIGNE3;
        }


        return $this;
    } // setMiseEnLigne3()

    /**
     * Set the value of [mise_en_ligne4] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setMiseEnLigne4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mise_en_ligne4 !== $v) {
            $this->mise_en_ligne4 = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::MISE_EN_LIGNE4;
        }


        return $this;
    } // setMiseEnLigne4()

    /**
     * Set the value of [env_offre_type_unique] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setEnvOffreTypeUnique($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->env_offre_type_unique !== $v) {
            $this->env_offre_type_unique = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::ENV_OFFRE_TYPE_UNIQUE;
        }


        return $this;
    } // setEnvOffreTypeUnique()

    /**
     * Set the value of [env_offre_type_multiple] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setEnvOffreTypeMultiple($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->env_offre_type_multiple !== $v) {
            $this->env_offre_type_multiple = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::ENV_OFFRE_TYPE_MULTIPLE;
        }


        return $this;
    } // setEnvOffreTypeMultiple()

    /**
     * Set the value of [no_fichier_annonce] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setNoFichierAnnonce($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->no_fichier_annonce !== $v) {
            $this->no_fichier_annonce = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::NO_FICHIER_ANNONCE;
        }


        return $this;
    } // setNoFichierAnnonce()

    /**
     * Set the value of [fichier_importe] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setFichierImporte($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fichier_importe !== $v) {
            $this->fichier_importe = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::FICHIER_IMPORTE;
        }


        return $this;
    } // setFichierImporte()

    /**
     * Set the value of [fichier_boamp] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setFichierBoamp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fichier_boamp !== $v) {
            $this->fichier_boamp = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::FICHIER_BOAMP;
        }


        return $this;
    } // setFichierBoamp()

    /**
     * Set the value of [reglement_cons] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setReglementCons($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->reglement_cons !== $v) {
            $this->reglement_cons = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::REGLEMENT_CONS;
        }


        return $this;
    } // setReglementCons()

    /**
     * Set the value of [dossier_dce] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setDossierDce($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->dossier_dce !== $v) {
            $this->dossier_dce = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::DOSSIER_DCE;
        }


        return $this;
    } // setDossierDce()

    /**
     * Set the value of [partial_dce_download] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setPartialDceDownload($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->partial_dce_download !== $v) {
            $this->partial_dce_download = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::PARTIAL_DCE_DOWNLOAD;
        }


        return $this;
    } // setPartialDceDownload()

    /**
     * Set the value of [service] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setService($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->service !== $v) {
            $this->service = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::SERVICE;
        }


        return $this;
    } // setService()

    /**
     * Set the value of [constitution_dossier_reponse] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setConstitutionDossierReponse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->constitution_dossier_reponse !== $v) {
            $this->constitution_dossier_reponse = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::CONSTITUTION_DOSSIER_REPONSE;
        }


        return $this;
    } // setConstitutionDossierReponse()

    /**
     * Set the value of [env_offre_type_unique2] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setEnvOffreTypeUnique2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->env_offre_type_unique2 !== $v) {
            $this->env_offre_type_unique2 = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::ENV_OFFRE_TYPE_UNIQUE2;
        }


        return $this;
    } // setEnvOffreTypeUnique2()

    /**
     * Set the value of [env_offre_type_multiple2] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setEnvOffreTypeMultiple2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->env_offre_type_multiple2 !== $v) {
            $this->env_offre_type_multiple2 = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::ENV_OFFRE_TYPE_MULTIPLE2;
        }


        return $this;
    } // setEnvOffreTypeMultiple2()

    /**
     * Set the value of [gestion_envois_postaux] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setGestionEnvoisPostaux($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gestion_envois_postaux !== $v) {
            $this->gestion_envois_postaux = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::GESTION_ENVOIS_POSTAUX;
        }


        return $this;
    } // setGestionEnvoisPostaux()

    /**
     * Set the value of [tireur_plan_non] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setTireurPlanNon($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tireur_plan_non !== $v) {
            $this->tireur_plan_non = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::TIREUR_PLAN_NON;
        }


        return $this;
    } // setTireurPlanNon()

    /**
     * Set the value of [tireur_plan_oui] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setTireurPlanOui($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tireur_plan_oui !== $v) {
            $this->tireur_plan_oui = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::TIREUR_PLAN_OUI;
        }


        return $this;
    } // setTireurPlanOui()

    /**
     * Set the value of [tireur_plan_papier] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setTireurPlanPapier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tireur_plan_papier !== $v) {
            $this->tireur_plan_papier = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::TIREUR_PLAN_PAPIER;
        }


        return $this;
    } // setTireurPlanPapier()

    /**
     * Set the value of [tireur_plan_cdrom] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setTireurPlanCdrom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tireur_plan_cdrom !== $v) {
            $this->tireur_plan_cdrom = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::TIREUR_PLAN_CDROM;
        }


        return $this;
    } // setTireurPlanCdrom()

    /**
     * Set the value of [tireur_plan_nom] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setTireurPlanNom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tireur_plan_nom !== $v) {
            $this->tireur_plan_nom = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::TIREUR_PLAN_NOM;
        }


        return $this;
    } // setTireurPlanNom()

    /**
     * Set the value of [tirage_descriptif] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setTirageDescriptif($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tirage_descriptif !== $v) {
            $this->tirage_descriptif = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::TIRAGE_DESCRIPTIF;
        }


        return $this;
    } // setTirageDescriptif()

    /**
     * Set the value of [delai_date_limite_remise_pli] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setDelaiDateLimiteRemisePli($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->delai_date_limite_remise_pli !== $v) {
            $this->delai_date_limite_remise_pli = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::DELAI_DATE_LIMITE_REMISE_PLI;
        }


        return $this;
    } // setDelaiDateLimiteRemisePli()

    /**
     * Set the value of [signature_propre] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setSignaturePropre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->signature_propre !== $v) {
            $this->signature_propre = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::SIGNATURE_PROPRE;
        }


        return $this;
    } // setSignaturePropre()

    /**
     * Set the value of [procedure_restreinte] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setProcedureRestreinte($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->procedure_restreinte !== $v) {
            $this->procedure_restreinte = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::PROCEDURE_RESTREINTE;
        }


        return $this;
    } // setProcedureRestreinte()

    /**
     * Set the value of [ouverture_simultanee] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setOuvertureSimultanee($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ouverture_simultanee !== $v) {
            $this->ouverture_simultanee = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::OUVERTURE_SIMULTANEE;
        }


        return $this;
    } // setOuvertureSimultanee()

    /**
     * Set the value of [type_decision_a_renseigner] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setTypeDecisionARenseigner($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_decision_a_renseigner !== $v) {
            $this->type_decision_a_renseigner = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::TYPE_DECISION_A_RENSEIGNER;
        }


        return $this;
    } // setTypeDecisionARenseigner()

    /**
     * Set the value of [type_decision_attribution_marche] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setTypeDecisionAttributionMarche($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_decision_attribution_marche !== $v) {
            $this->type_decision_attribution_marche = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::TYPE_DECISION_ATTRIBUTION_MARCHE;
        }


        return $this;
    } // setTypeDecisionAttributionMarche()

    /**
     * Set the value of [type_decision_declaration_sans_suite] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setTypeDecisionDeclarationSansSuite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_decision_declaration_sans_suite !== $v) {
            $this->type_decision_declaration_sans_suite = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::TYPE_DECISION_DECLARATION_SANS_SUITE;
        }


        return $this;
    } // setTypeDecisionDeclarationSansSuite()

    /**
     * Set the value of [type_decision_declaration_infructueux] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setTypeDecisionDeclarationInfructueux($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_decision_declaration_infructueux !== $v) {
            $this->type_decision_declaration_infructueux = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::TYPE_DECISION_DECLARATION_INFRUCTUEUX;
        }


        return $this;
    } // setTypeDecisionDeclarationInfructueux()

    /**
     * Set the value of [type_decision_selection_entreprise] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setTypeDecisionSelectionEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_decision_selection_entreprise !== $v) {
            $this->type_decision_selection_entreprise = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::TYPE_DECISION_SELECTION_ENTREPRISE;
        }


        return $this;
    } // setTypeDecisionSelectionEntreprise()

    /**
     * Set the value of [type_decision_attribution_accord_cadre] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setTypeDecisionAttributionAccordCadre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_decision_attribution_accord_cadre !== $v) {
            $this->type_decision_attribution_accord_cadre = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::TYPE_DECISION_ATTRIBUTION_ACCORD_CADRE;
        }


        return $this;
    } // setTypeDecisionAttributionAccordCadre()

    /**
     * Set the value of [type_decision_admission_sad] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setTypeDecisionAdmissionSad($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_decision_admission_sad !== $v) {
            $this->type_decision_admission_sad = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::TYPE_DECISION_ADMISSION_SAD;
        }


        return $this;
    } // setTypeDecisionAdmissionSad()

    /**
     * Set the value of [type_decision_autre] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setTypeDecisionAutre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_decision_autre !== $v) {
            $this->type_decision_autre = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::TYPE_DECISION_AUTRE;
        }


        return $this;
    } // setTypeDecisionAutre()

    /**
     * Set the value of [env_offre_technique] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setEnvOffreTechnique($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->env_offre_technique !== $v) {
            $this->env_offre_technique = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::ENV_OFFRE_TECHNIQUE;
        }


        return $this;
    } // setEnvOffreTechnique()

    /**
     * Set the value of [env_offre_technique_type_unique] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setEnvOffreTechniqueTypeUnique($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->env_offre_technique_type_unique !== $v) {
            $this->env_offre_technique_type_unique = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::ENV_OFFRE_TECHNIQUE_TYPE_UNIQUE;
        }


        return $this;
    } // setEnvOffreTechniqueTypeUnique()

    /**
     * Set the value of [env_offre_technique_type_multiple] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setEnvOffreTechniqueTypeMultiple($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->env_offre_technique_type_multiple !== $v) {
            $this->env_offre_technique_type_multiple = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::ENV_OFFRE_TECHNIQUE_TYPE_MULTIPLE;
        }


        return $this;
    } // setEnvOffreTechniqueTypeMultiple()

    /**
     * Set the value of [rep_obligatoire] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setRepObligatoire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->rep_obligatoire !== $v) {
            $this->rep_obligatoire = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::REP_OBLIGATOIRE;
        }


        return $this;
    } // setRepObligatoire()

    /**
     * Set the value of [no_rep_obligatoire] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setNoRepObligatoire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->no_rep_obligatoire !== $v) {
            $this->no_rep_obligatoire = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::NO_REP_OBLIGATOIRE;
        }


        return $this;
    } // setNoRepObligatoire()

    /**
     * Set the value of [autre_piece_cons] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setAutrePieceCons($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->autre_piece_cons !== $v) {
            $this->autre_piece_cons = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::AUTRE_PIECE_CONS;
        }


        return $this;
    } // setAutrePieceCons()

    /**
     * Set the value of [resp_elec_autre_plateforme] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setRespElecAutrePlateforme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->resp_elec_autre_plateforme !== $v) {
            $this->resp_elec_autre_plateforme = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::RESP_ELEC_AUTRE_PLATEFORME;
        }


        return $this;
    } // setRespElecAutrePlateforme()

    /**
     * Set the value of [mise_en_ligne_entite_coordinatrice] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setMiseEnLigneEntiteCoordinatrice($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mise_en_ligne_entite_coordinatrice !== $v) {
            $this->mise_en_ligne_entite_coordinatrice = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::MISE_EN_LIGNE_ENTITE_COORDINATRICE;
        }


        return $this;
    } // setMiseEnLigneEntiteCoordinatrice()

    /**
     * Set the value of [autoriser_publicite] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setAutoriserPublicite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->autoriser_publicite !== $v) {
            $this->autoriser_publicite = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::AUTORISER_PUBLICITE;
        }


        return $this;
    } // setAutoriserPublicite()

    /**
     * Set the value of [poursuite_date_limite_remise_pli] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setPoursuiteDateLimiteRemisePli($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->poursuite_date_limite_remise_pli !== $v) {
            $this->poursuite_date_limite_remise_pli = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::POURSUITE_DATE_LIMITE_REMISE_PLI;
        }


        return $this;
    } // setPoursuiteDateLimiteRemisePli()

    /**
     * Set the value of [delai_poursuite_affichage] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setDelaiPoursuiteAffichage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->delai_poursuite_affichage !== $v) {
            $this->delai_poursuite_affichage = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::DELAI_POURSUITE_AFFICHAGE;
        }


        return $this;
    } // setDelaiPoursuiteAffichage()

    /**
     * Set the value of [mode_ouverture_dossier] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setModeOuvertureDossier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mode_ouverture_dossier !== $v) {
            $this->mode_ouverture_dossier = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::MODE_OUVERTURE_DOSSIER;
        }


        return $this;
    } // setModeOuvertureDossier()

    /**
     * Set the value of [mode_ouverture_reponse] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setModeOuvertureReponse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mode_ouverture_reponse !== $v) {
            $this->mode_ouverture_reponse = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::MODE_OUVERTURE_REPONSE;
        }


        return $this;
    } // setModeOuvertureReponse()

    /**
     * Set the value of [marche_public_simplifie] column.
     * 
     * @param string $v new value
     * @return CommonProcedureEquivalence The current object (for fluent API support)
     */
    public function setMarchePublicSimplifie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->marche_public_simplifie !== $v) {
            $this->marche_public_simplifie = $v;
            $this->modifiedColumns[] = CommonProcedureEquivalencePeer::MARCHE_PUBLIC_SIMPLIFIE;
        }


        return $this;
    } // setMarchePublicSimplifie()

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
            if ($this->id_type_procedure !== 0) {
                return false;
            }

            if ($this->organisme !== '') {
                return false;
            }

            if ($this->elec_resp !== '') {
                return false;
            }

            if ($this->no_elec_resp !== '') {
                return false;
            }

            if ($this->cipher_enabled !== '') {
                return false;
            }

            if ($this->cipher_disabled !== '') {
                return false;
            }

            if ($this->signature_enabled !== '') {
                return false;
            }

            if ($this->signature_disabled !== '') {
                return false;
            }

            if ($this->env_candidature !== '') {
                return false;
            }

            if ($this->env_offre !== '') {
                return false;
            }

            if ($this->env_anonymat !== '') {
                return false;
            }

            if ($this->envoi_complet !== '') {
                return false;
            }

            if ($this->envoi_differe !== '') {
                return false;
            }

            if ($this->procedure_publicite !== '') {
                return false;
            }

            if ($this->procedure_restreinte_candidature !== '') {
                return false;
            }

            if ($this->procedure_restreinte_offre !== '') {
                return false;
            }

            if ($this->envoi_mail_par_mpe !== '0') {
                return false;
            }

            if ($this->no_envoi_mail_par_mpe !== '0') {
                return false;
            }

            if ($this->mise_en_ligne1 !== '') {
                return false;
            }

            if ($this->mise_en_ligne2 !== '') {
                return false;
            }

            if ($this->mise_en_ligne3 !== '') {
                return false;
            }

            if ($this->mise_en_ligne4 !== '') {
                return false;
            }

            if ($this->env_offre_type_unique !== '') {
                return false;
            }

            if ($this->env_offre_type_multiple !== '') {
                return false;
            }

            if ($this->no_fichier_annonce !== '') {
                return false;
            }

            if ($this->fichier_importe !== '') {
                return false;
            }

            if ($this->fichier_boamp !== '') {
                return false;
            }

            if ($this->reglement_cons !== '') {
                return false;
            }

            if ($this->dossier_dce !== '') {
                return false;
            }

            if ($this->partial_dce_download !== '') {
                return false;
            }

            if ($this->service !== '') {
                return false;
            }

            if ($this->constitution_dossier_reponse !== '') {
                return false;
            }

            if ($this->env_offre_type_unique2 !== '') {
                return false;
            }

            if ($this->env_offre_type_multiple2 !== '') {
                return false;
            }

            if ($this->gestion_envois_postaux !== '') {
                return false;
            }

            if ($this->tireur_plan_non !== '') {
                return false;
            }

            if ($this->tireur_plan_oui !== '') {
                return false;
            }

            if ($this->tireur_plan_papier !== '') {
                return false;
            }

            if ($this->tireur_plan_cdrom !== '') {
                return false;
            }

            if ($this->tireur_plan_nom !== '') {
                return false;
            }

            if ($this->tirage_descriptif !== '') {
                return false;
            }

            if ($this->delai_date_limite_remise_pli !== '') {
                return false;
            }

            if ($this->signature_propre !== '') {
                return false;
            }

            if ($this->procedure_restreinte !== '') {
                return false;
            }

            if ($this->ouverture_simultanee !== '') {
                return false;
            }

            if ($this->type_decision_a_renseigner !== '-0') {
                return false;
            }

            if ($this->type_decision_attribution_marche !== '-0') {
                return false;
            }

            if ($this->type_decision_declaration_sans_suite !== '-0') {
                return false;
            }

            if ($this->type_decision_declaration_infructueux !== '-0') {
                return false;
            }

            if ($this->type_decision_selection_entreprise !== '-0') {
                return false;
            }

            if ($this->type_decision_attribution_accord_cadre !== '-0') {
                return false;
            }

            if ($this->type_decision_admission_sad !== '-0') {
                return false;
            }

            if ($this->type_decision_autre !== '-0') {
                return false;
            }

            if ($this->env_offre_technique !== '-0') {
                return false;
            }

            if ($this->env_offre_technique_type_unique !== '-0') {
                return false;
            }

            if ($this->env_offre_technique_type_multiple !== '-0') {
                return false;
            }

            if ($this->rep_obligatoire !== '+0') {
                return false;
            }

            if ($this->no_rep_obligatoire !== '+0') {
                return false;
            }

            if ($this->autre_piece_cons !== '+0') {
                return false;
            }

            if ($this->resp_elec_autre_plateforme !== '-0') {
                return false;
            }

            if ($this->mise_en_ligne_entite_coordinatrice !== '-0') {
                return false;
            }

            if ($this->autoriser_publicite !== '1') {
                return false;
            }

            if ($this->mode_ouverture_dossier !== '+1') {
                return false;
            }

            if ($this->mode_ouverture_reponse !== '+0') {
                return false;
            }

            if ($this->marche_public_simplifie !== '0') {
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

            $this->id_type_procedure = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->organisme = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->elec_resp = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->no_elec_resp = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->cipher_enabled = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->cipher_disabled = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->signature_enabled = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->signature_disabled = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->env_candidature = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->env_offre = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->env_anonymat = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->envoi_complet = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->envoi_differe = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->procedure_publicite = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->procedure_restreinte_candidature = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->procedure_restreinte_offre = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->envoi_mail_par_mpe = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->no_envoi_mail_par_mpe = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->mise_en_ligne1 = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->mise_en_ligne2 = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->mise_en_ligne3 = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->mise_en_ligne4 = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->env_offre_type_unique = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->env_offre_type_multiple = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->no_fichier_annonce = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->fichier_importe = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->fichier_boamp = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->reglement_cons = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->dossier_dce = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->partial_dce_download = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->service = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->constitution_dossier_reponse = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->env_offre_type_unique2 = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->env_offre_type_multiple2 = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->gestion_envois_postaux = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->tireur_plan_non = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->tireur_plan_oui = ($row[$startcol + 36] !== null) ? (string) $row[$startcol + 36] : null;
            $this->tireur_plan_papier = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->tireur_plan_cdrom = ($row[$startcol + 38] !== null) ? (string) $row[$startcol + 38] : null;
            $this->tireur_plan_nom = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->tirage_descriptif = ($row[$startcol + 40] !== null) ? (string) $row[$startcol + 40] : null;
            $this->delai_date_limite_remise_pli = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->signature_propre = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
            $this->procedure_restreinte = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
            $this->ouverture_simultanee = ($row[$startcol + 44] !== null) ? (string) $row[$startcol + 44] : null;
            $this->type_decision_a_renseigner = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
            $this->type_decision_attribution_marche = ($row[$startcol + 46] !== null) ? (string) $row[$startcol + 46] : null;
            $this->type_decision_declaration_sans_suite = ($row[$startcol + 47] !== null) ? (string) $row[$startcol + 47] : null;
            $this->type_decision_declaration_infructueux = ($row[$startcol + 48] !== null) ? (string) $row[$startcol + 48] : null;
            $this->type_decision_selection_entreprise = ($row[$startcol + 49] !== null) ? (string) $row[$startcol + 49] : null;
            $this->type_decision_attribution_accord_cadre = ($row[$startcol + 50] !== null) ? (string) $row[$startcol + 50] : null;
            $this->type_decision_admission_sad = ($row[$startcol + 51] !== null) ? (string) $row[$startcol + 51] : null;
            $this->type_decision_autre = ($row[$startcol + 52] !== null) ? (string) $row[$startcol + 52] : null;
            $this->env_offre_technique = ($row[$startcol + 53] !== null) ? (string) $row[$startcol + 53] : null;
            $this->env_offre_technique_type_unique = ($row[$startcol + 54] !== null) ? (string) $row[$startcol + 54] : null;
            $this->env_offre_technique_type_multiple = ($row[$startcol + 55] !== null) ? (string) $row[$startcol + 55] : null;
            $this->rep_obligatoire = ($row[$startcol + 56] !== null) ? (string) $row[$startcol + 56] : null;
            $this->no_rep_obligatoire = ($row[$startcol + 57] !== null) ? (string) $row[$startcol + 57] : null;
            $this->autre_piece_cons = ($row[$startcol + 58] !== null) ? (string) $row[$startcol + 58] : null;
            $this->resp_elec_autre_plateforme = ($row[$startcol + 59] !== null) ? (string) $row[$startcol + 59] : null;
            $this->mise_en_ligne_entite_coordinatrice = ($row[$startcol + 60] !== null) ? (string) $row[$startcol + 60] : null;
            $this->autoriser_publicite = ($row[$startcol + 61] !== null) ? (string) $row[$startcol + 61] : null;
            $this->poursuite_date_limite_remise_pli = ($row[$startcol + 62] !== null) ? (string) $row[$startcol + 62] : null;
            $this->delai_poursuite_affichage = ($row[$startcol + 63] !== null) ? (string) $row[$startcol + 63] : null;
            $this->mode_ouverture_dossier = ($row[$startcol + 64] !== null) ? (string) $row[$startcol + 64] : null;
            $this->mode_ouverture_reponse = ($row[$startcol + 65] !== null) ? (string) $row[$startcol + 65] : null;
            $this->marche_public_simplifie = ($row[$startcol + 66] !== null) ? (string) $row[$startcol + 66] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 67; // 67 = CommonProcedureEquivalencePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonProcedureEquivalence object", $e);
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
            $con = Propel::getConnection(CommonProcedureEquivalencePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonProcedureEquivalencePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonProcedureEquivalencePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonProcedureEquivalenceQuery::create()
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
            $con = Propel::getConnection(CommonProcedureEquivalencePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonProcedureEquivalencePeer::addInstanceToPool($this);
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


         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::ID_TYPE_PROCEDURE)) {
            $modifiedColumns[':p' . $index++]  = '`id_type_procedure`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::ELEC_RESP)) {
            $modifiedColumns[':p' . $index++]  = '`elec_resp`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::NO_ELEC_RESP)) {
            $modifiedColumns[':p' . $index++]  = '`no_elec_resp`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::CIPHER_ENABLED)) {
            $modifiedColumns[':p' . $index++]  = '`cipher_enabled`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::CIPHER_DISABLED)) {
            $modifiedColumns[':p' . $index++]  = '`cipher_disabled`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::SIGNATURE_ENABLED)) {
            $modifiedColumns[':p' . $index++]  = '`signature_enabled`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::SIGNATURE_DISABLED)) {
            $modifiedColumns[':p' . $index++]  = '`signature_disabled`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::ENV_CANDIDATURE)) {
            $modifiedColumns[':p' . $index++]  = '`env_candidature`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::ENV_OFFRE)) {
            $modifiedColumns[':p' . $index++]  = '`env_offre`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::ENV_ANONYMAT)) {
            $modifiedColumns[':p' . $index++]  = '`env_anonymat`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::ENVOI_COMPLET)) {
            $modifiedColumns[':p' . $index++]  = '`envoi_complet`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::ENVOI_DIFFERE)) {
            $modifiedColumns[':p' . $index++]  = '`envoi_differe`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::PROCEDURE_PUBLICITE)) {
            $modifiedColumns[':p' . $index++]  = '`procedure_publicite`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::PROCEDURE_RESTREINTE_CANDIDATURE)) {
            $modifiedColumns[':p' . $index++]  = '`procedure_restreinte_candidature`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::PROCEDURE_RESTREINTE_OFFRE)) {
            $modifiedColumns[':p' . $index++]  = '`procedure_restreinte_offre`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::ENVOI_MAIL_PAR_MPE)) {
            $modifiedColumns[':p' . $index++]  = '`envoi_mail_par_mpe`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::NO_ENVOI_MAIL_PAR_MPE)) {
            $modifiedColumns[':p' . $index++]  = '`no_envoi_mail_par_mpe`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::MISE_EN_LIGNE1)) {
            $modifiedColumns[':p' . $index++]  = '`mise_en_ligne1`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::MISE_EN_LIGNE2)) {
            $modifiedColumns[':p' . $index++]  = '`mise_en_ligne2`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::MISE_EN_LIGNE3)) {
            $modifiedColumns[':p' . $index++]  = '`mise_en_ligne3`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::MISE_EN_LIGNE4)) {
            $modifiedColumns[':p' . $index++]  = '`mise_en_ligne4`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::ENV_OFFRE_TYPE_UNIQUE)) {
            $modifiedColumns[':p' . $index++]  = '`env_offre_type_unique`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::ENV_OFFRE_TYPE_MULTIPLE)) {
            $modifiedColumns[':p' . $index++]  = '`env_offre_type_multiple`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::NO_FICHIER_ANNONCE)) {
            $modifiedColumns[':p' . $index++]  = '`no_fichier_annonce`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::FICHIER_IMPORTE)) {
            $modifiedColumns[':p' . $index++]  = '`fichier_importe`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::FICHIER_BOAMP)) {
            $modifiedColumns[':p' . $index++]  = '`fichier_boamp`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::REGLEMENT_CONS)) {
            $modifiedColumns[':p' . $index++]  = '`reglement_cons`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::DOSSIER_DCE)) {
            $modifiedColumns[':p' . $index++]  = '`dossier_dce`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::PARTIAL_DCE_DOWNLOAD)) {
            $modifiedColumns[':p' . $index++]  = '`partial_dce_download`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::SERVICE)) {
            $modifiedColumns[':p' . $index++]  = '`service`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::CONSTITUTION_DOSSIER_REPONSE)) {
            $modifiedColumns[':p' . $index++]  = '`constitution_dossier_reponse`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::ENV_OFFRE_TYPE_UNIQUE2)) {
            $modifiedColumns[':p' . $index++]  = '`env_offre_type_unique2`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::ENV_OFFRE_TYPE_MULTIPLE2)) {
            $modifiedColumns[':p' . $index++]  = '`env_offre_type_multiple2`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::GESTION_ENVOIS_POSTAUX)) {
            $modifiedColumns[':p' . $index++]  = '`gestion_envois_postaux`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::TIREUR_PLAN_NON)) {
            $modifiedColumns[':p' . $index++]  = '`tireur_plan_non`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::TIREUR_PLAN_OUI)) {
            $modifiedColumns[':p' . $index++]  = '`tireur_plan_oui`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::TIREUR_PLAN_PAPIER)) {
            $modifiedColumns[':p' . $index++]  = '`tireur_plan_papier`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::TIREUR_PLAN_CDROM)) {
            $modifiedColumns[':p' . $index++]  = '`tireur_plan_cdrom`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::TIREUR_PLAN_NOM)) {
            $modifiedColumns[':p' . $index++]  = '`tireur_plan_nom`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::TIRAGE_DESCRIPTIF)) {
            $modifiedColumns[':p' . $index++]  = '`tirage_descriptif`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::DELAI_DATE_LIMITE_REMISE_PLI)) {
            $modifiedColumns[':p' . $index++]  = '`delai_date_limite_remise_pli`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::SIGNATURE_PROPRE)) {
            $modifiedColumns[':p' . $index++]  = '`signature_propre`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::PROCEDURE_RESTREINTE)) {
            $modifiedColumns[':p' . $index++]  = '`procedure_restreinte`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::OUVERTURE_SIMULTANEE)) {
            $modifiedColumns[':p' . $index++]  = '`ouverture_simultanee`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::TYPE_DECISION_A_RENSEIGNER)) {
            $modifiedColumns[':p' . $index++]  = '`type_decision_a_renseigner`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::TYPE_DECISION_ATTRIBUTION_MARCHE)) {
            $modifiedColumns[':p' . $index++]  = '`type_decision_attribution_marche`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::TYPE_DECISION_DECLARATION_SANS_SUITE)) {
            $modifiedColumns[':p' . $index++]  = '`type_decision_declaration_sans_suite`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::TYPE_DECISION_DECLARATION_INFRUCTUEUX)) {
            $modifiedColumns[':p' . $index++]  = '`type_decision_declaration_infructueux`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::TYPE_DECISION_SELECTION_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`type_decision_selection_entreprise`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::TYPE_DECISION_ATTRIBUTION_ACCORD_CADRE)) {
            $modifiedColumns[':p' . $index++]  = '`type_decision_attribution_accord_cadre`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::TYPE_DECISION_ADMISSION_SAD)) {
            $modifiedColumns[':p' . $index++]  = '`type_decision_admission_sad`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::TYPE_DECISION_AUTRE)) {
            $modifiedColumns[':p' . $index++]  = '`type_decision_autre`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::ENV_OFFRE_TECHNIQUE)) {
            $modifiedColumns[':p' . $index++]  = '`env_offre_technique`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::ENV_OFFRE_TECHNIQUE_TYPE_UNIQUE)) {
            $modifiedColumns[':p' . $index++]  = '`env_offre_technique_type_unique`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::ENV_OFFRE_TECHNIQUE_TYPE_MULTIPLE)) {
            $modifiedColumns[':p' . $index++]  = '`env_offre_technique_type_multiple`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::REP_OBLIGATOIRE)) {
            $modifiedColumns[':p' . $index++]  = '`rep_obligatoire`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::NO_REP_OBLIGATOIRE)) {
            $modifiedColumns[':p' . $index++]  = '`no_rep_obligatoire`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::AUTRE_PIECE_CONS)) {
            $modifiedColumns[':p' . $index++]  = '`autre_piece_cons`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::RESP_ELEC_AUTRE_PLATEFORME)) {
            $modifiedColumns[':p' . $index++]  = '`resp_elec_autre_plateforme`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::MISE_EN_LIGNE_ENTITE_COORDINATRICE)) {
            $modifiedColumns[':p' . $index++]  = '`mise_en_ligne_entite_coordinatrice`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::AUTORISER_PUBLICITE)) {
            $modifiedColumns[':p' . $index++]  = '`autoriser_publicite`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::POURSUITE_DATE_LIMITE_REMISE_PLI)) {
            $modifiedColumns[':p' . $index++]  = '`poursuite_date_limite_remise_pli`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::DELAI_POURSUITE_AFFICHAGE)) {
            $modifiedColumns[':p' . $index++]  = '`delai_poursuite_affichage`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::MODE_OUVERTURE_DOSSIER)) {
            $modifiedColumns[':p' . $index++]  = '`mode_ouverture_dossier`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::MODE_OUVERTURE_REPONSE)) {
            $modifiedColumns[':p' . $index++]  = '`mode_ouverture_reponse`';
        }
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::MARCHE_PUBLIC_SIMPLIFIE)) {
            $modifiedColumns[':p' . $index++]  = '`marche_public_simplifie`';
        }

        $sql = sprintf(
            'INSERT INTO `ProcedureEquivalence` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_type_procedure`':						
                        $stmt->bindValue($identifier, $this->id_type_procedure, PDO::PARAM_INT);
                        break;
                    case '`organisme`':						
                        $stmt->bindValue($identifier, $this->organisme, PDO::PARAM_STR);
                        break;
                    case '`elec_resp`':						
                        $stmt->bindValue($identifier, $this->elec_resp, PDO::PARAM_STR);
                        break;
                    case '`no_elec_resp`':						
                        $stmt->bindValue($identifier, $this->no_elec_resp, PDO::PARAM_STR);
                        break;
                    case '`cipher_enabled`':						
                        $stmt->bindValue($identifier, $this->cipher_enabled, PDO::PARAM_STR);
                        break;
                    case '`cipher_disabled`':						
                        $stmt->bindValue($identifier, $this->cipher_disabled, PDO::PARAM_STR);
                        break;
                    case '`signature_enabled`':						
                        $stmt->bindValue($identifier, $this->signature_enabled, PDO::PARAM_STR);
                        break;
                    case '`signature_disabled`':						
                        $stmt->bindValue($identifier, $this->signature_disabled, PDO::PARAM_STR);
                        break;
                    case '`env_candidature`':						
                        $stmt->bindValue($identifier, $this->env_candidature, PDO::PARAM_STR);
                        break;
                    case '`env_offre`':						
                        $stmt->bindValue($identifier, $this->env_offre, PDO::PARAM_STR);
                        break;
                    case '`env_anonymat`':						
                        $stmt->bindValue($identifier, $this->env_anonymat, PDO::PARAM_STR);
                        break;
                    case '`envoi_complet`':						
                        $stmt->bindValue($identifier, $this->envoi_complet, PDO::PARAM_STR);
                        break;
                    case '`envoi_differe`':						
                        $stmt->bindValue($identifier, $this->envoi_differe, PDO::PARAM_STR);
                        break;
                    case '`procedure_publicite`':						
                        $stmt->bindValue($identifier, $this->procedure_publicite, PDO::PARAM_STR);
                        break;
                    case '`procedure_restreinte_candidature`':						
                        $stmt->bindValue($identifier, $this->procedure_restreinte_candidature, PDO::PARAM_STR);
                        break;
                    case '`procedure_restreinte_offre`':						
                        $stmt->bindValue($identifier, $this->procedure_restreinte_offre, PDO::PARAM_STR);
                        break;
                    case '`envoi_mail_par_mpe`':						
                        $stmt->bindValue($identifier, $this->envoi_mail_par_mpe, PDO::PARAM_STR);
                        break;
                    case '`no_envoi_mail_par_mpe`':						
                        $stmt->bindValue($identifier, $this->no_envoi_mail_par_mpe, PDO::PARAM_STR);
                        break;
                    case '`mise_en_ligne1`':						
                        $stmt->bindValue($identifier, $this->mise_en_ligne1, PDO::PARAM_STR);
                        break;
                    case '`mise_en_ligne2`':						
                        $stmt->bindValue($identifier, $this->mise_en_ligne2, PDO::PARAM_STR);
                        break;
                    case '`mise_en_ligne3`':						
                        $stmt->bindValue($identifier, $this->mise_en_ligne3, PDO::PARAM_STR);
                        break;
                    case '`mise_en_ligne4`':						
                        $stmt->bindValue($identifier, $this->mise_en_ligne4, PDO::PARAM_STR);
                        break;
                    case '`env_offre_type_unique`':						
                        $stmt->bindValue($identifier, $this->env_offre_type_unique, PDO::PARAM_STR);
                        break;
                    case '`env_offre_type_multiple`':						
                        $stmt->bindValue($identifier, $this->env_offre_type_multiple, PDO::PARAM_STR);
                        break;
                    case '`no_fichier_annonce`':						
                        $stmt->bindValue($identifier, $this->no_fichier_annonce, PDO::PARAM_STR);
                        break;
                    case '`fichier_importe`':						
                        $stmt->bindValue($identifier, $this->fichier_importe, PDO::PARAM_STR);
                        break;
                    case '`fichier_boamp`':						
                        $stmt->bindValue($identifier, $this->fichier_boamp, PDO::PARAM_STR);
                        break;
                    case '`reglement_cons`':						
                        $stmt->bindValue($identifier, $this->reglement_cons, PDO::PARAM_STR);
                        break;
                    case '`dossier_dce`':						
                        $stmt->bindValue($identifier, $this->dossier_dce, PDO::PARAM_STR);
                        break;
                    case '`partial_dce_download`':						
                        $stmt->bindValue($identifier, $this->partial_dce_download, PDO::PARAM_STR);
                        break;
                    case '`service`':						
                        $stmt->bindValue($identifier, $this->service, PDO::PARAM_STR);
                        break;
                    case '`constitution_dossier_reponse`':						
                        $stmt->bindValue($identifier, $this->constitution_dossier_reponse, PDO::PARAM_STR);
                        break;
                    case '`env_offre_type_unique2`':						
                        $stmt->bindValue($identifier, $this->env_offre_type_unique2, PDO::PARAM_STR);
                        break;
                    case '`env_offre_type_multiple2`':						
                        $stmt->bindValue($identifier, $this->env_offre_type_multiple2, PDO::PARAM_STR);
                        break;
                    case '`gestion_envois_postaux`':						
                        $stmt->bindValue($identifier, $this->gestion_envois_postaux, PDO::PARAM_STR);
                        break;
                    case '`tireur_plan_non`':						
                        $stmt->bindValue($identifier, $this->tireur_plan_non, PDO::PARAM_STR);
                        break;
                    case '`tireur_plan_oui`':						
                        $stmt->bindValue($identifier, $this->tireur_plan_oui, PDO::PARAM_STR);
                        break;
                    case '`tireur_plan_papier`':						
                        $stmt->bindValue($identifier, $this->tireur_plan_papier, PDO::PARAM_STR);
                        break;
                    case '`tireur_plan_cdrom`':						
                        $stmt->bindValue($identifier, $this->tireur_plan_cdrom, PDO::PARAM_STR);
                        break;
                    case '`tireur_plan_nom`':						
                        $stmt->bindValue($identifier, $this->tireur_plan_nom, PDO::PARAM_STR);
                        break;
                    case '`tirage_descriptif`':						
                        $stmt->bindValue($identifier, $this->tirage_descriptif, PDO::PARAM_STR);
                        break;
                    case '`delai_date_limite_remise_pli`':						
                        $stmt->bindValue($identifier, $this->delai_date_limite_remise_pli, PDO::PARAM_STR);
                        break;
                    case '`signature_propre`':						
                        $stmt->bindValue($identifier, $this->signature_propre, PDO::PARAM_STR);
                        break;
                    case '`procedure_restreinte`':						
                        $stmt->bindValue($identifier, $this->procedure_restreinte, PDO::PARAM_STR);
                        break;
                    case '`ouverture_simultanee`':						
                        $stmt->bindValue($identifier, $this->ouverture_simultanee, PDO::PARAM_STR);
                        break;
                    case '`type_decision_a_renseigner`':						
                        $stmt->bindValue($identifier, $this->type_decision_a_renseigner, PDO::PARAM_STR);
                        break;
                    case '`type_decision_attribution_marche`':						
                        $stmt->bindValue($identifier, $this->type_decision_attribution_marche, PDO::PARAM_STR);
                        break;
                    case '`type_decision_declaration_sans_suite`':						
                        $stmt->bindValue($identifier, $this->type_decision_declaration_sans_suite, PDO::PARAM_STR);
                        break;
                    case '`type_decision_declaration_infructueux`':						
                        $stmt->bindValue($identifier, $this->type_decision_declaration_infructueux, PDO::PARAM_STR);
                        break;
                    case '`type_decision_selection_entreprise`':						
                        $stmt->bindValue($identifier, $this->type_decision_selection_entreprise, PDO::PARAM_STR);
                        break;
                    case '`type_decision_attribution_accord_cadre`':						
                        $stmt->bindValue($identifier, $this->type_decision_attribution_accord_cadre, PDO::PARAM_STR);
                        break;
                    case '`type_decision_admission_sad`':						
                        $stmt->bindValue($identifier, $this->type_decision_admission_sad, PDO::PARAM_STR);
                        break;
                    case '`type_decision_autre`':						
                        $stmt->bindValue($identifier, $this->type_decision_autre, PDO::PARAM_STR);
                        break;
                    case '`env_offre_technique`':						
                        $stmt->bindValue($identifier, $this->env_offre_technique, PDO::PARAM_STR);
                        break;
                    case '`env_offre_technique_type_unique`':						
                        $stmt->bindValue($identifier, $this->env_offre_technique_type_unique, PDO::PARAM_STR);
                        break;
                    case '`env_offre_technique_type_multiple`':						
                        $stmt->bindValue($identifier, $this->env_offre_technique_type_multiple, PDO::PARAM_STR);
                        break;
                    case '`rep_obligatoire`':						
                        $stmt->bindValue($identifier, $this->rep_obligatoire, PDO::PARAM_STR);
                        break;
                    case '`no_rep_obligatoire`':						
                        $stmt->bindValue($identifier, $this->no_rep_obligatoire, PDO::PARAM_STR);
                        break;
                    case '`autre_piece_cons`':						
                        $stmt->bindValue($identifier, $this->autre_piece_cons, PDO::PARAM_STR);
                        break;
                    case '`resp_elec_autre_plateforme`':						
                        $stmt->bindValue($identifier, $this->resp_elec_autre_plateforme, PDO::PARAM_STR);
                        break;
                    case '`mise_en_ligne_entite_coordinatrice`':						
                        $stmt->bindValue($identifier, $this->mise_en_ligne_entite_coordinatrice, PDO::PARAM_STR);
                        break;
                    case '`autoriser_publicite`':						
                        $stmt->bindValue($identifier, $this->autoriser_publicite, PDO::PARAM_STR);
                        break;
                    case '`poursuite_date_limite_remise_pli`':						
                        $stmt->bindValue($identifier, $this->poursuite_date_limite_remise_pli, PDO::PARAM_STR);
                        break;
                    case '`delai_poursuite_affichage`':						
                        $stmt->bindValue($identifier, $this->delai_poursuite_affichage, PDO::PARAM_STR);
                        break;
                    case '`mode_ouverture_dossier`':						
                        $stmt->bindValue($identifier, $this->mode_ouverture_dossier, PDO::PARAM_STR);
                        break;
                    case '`mode_ouverture_reponse`':						
                        $stmt->bindValue($identifier, $this->mode_ouverture_reponse, PDO::PARAM_STR);
                        break;
                    case '`marche_public_simplifie`':						
                        $stmt->bindValue($identifier, $this->marche_public_simplifie, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

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


            if (($retval = CommonProcedureEquivalencePeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonProcedureEquivalencePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdTypeProcedure();
                break;
            case 1:
                return $this->getOrganisme();
                break;
            case 2:
                return $this->getElecResp();
                break;
            case 3:
                return $this->getNoElecResp();
                break;
            case 4:
                return $this->getCipherEnabled();
                break;
            case 5:
                return $this->getCipherDisabled();
                break;
            case 6:
                return $this->getSignatureEnabled();
                break;
            case 7:
                return $this->getSignatureDisabled();
                break;
            case 8:
                return $this->getEnvCandidature();
                break;
            case 9:
                return $this->getEnvOffre();
                break;
            case 10:
                return $this->getEnvAnonymat();
                break;
            case 11:
                return $this->getEnvoiComplet();
                break;
            case 12:
                return $this->getEnvoiDiffere();
                break;
            case 13:
                return $this->getProcedurePublicite();
                break;
            case 14:
                return $this->getProcedureRestreinteCandidature();
                break;
            case 15:
                return $this->getProcedureRestreinteOffre();
                break;
            case 16:
                return $this->getEnvoiMailParMpe();
                break;
            case 17:
                return $this->getNoEnvoiMailParMpe();
                break;
            case 18:
                return $this->getMiseEnLigne1();
                break;
            case 19:
                return $this->getMiseEnLigne2();
                break;
            case 20:
                return $this->getMiseEnLigne3();
                break;
            case 21:
                return $this->getMiseEnLigne4();
                break;
            case 22:
                return $this->getEnvOffreTypeUnique();
                break;
            case 23:
                return $this->getEnvOffreTypeMultiple();
                break;
            case 24:
                return $this->getNoFichierAnnonce();
                break;
            case 25:
                return $this->getFichierImporte();
                break;
            case 26:
                return $this->getFichierBoamp();
                break;
            case 27:
                return $this->getReglementCons();
                break;
            case 28:
                return $this->getDossierDce();
                break;
            case 29:
                return $this->getPartialDceDownload();
                break;
            case 30:
                return $this->getService();
                break;
            case 31:
                return $this->getConstitutionDossierReponse();
                break;
            case 32:
                return $this->getEnvOffreTypeUnique2();
                break;
            case 33:
                return $this->getEnvOffreTypeMultiple2();
                break;
            case 34:
                return $this->getGestionEnvoisPostaux();
                break;
            case 35:
                return $this->getTireurPlanNon();
                break;
            case 36:
                return $this->getTireurPlanOui();
                break;
            case 37:
                return $this->getTireurPlanPapier();
                break;
            case 38:
                return $this->getTireurPlanCdrom();
                break;
            case 39:
                return $this->getTireurPlanNom();
                break;
            case 40:
                return $this->getTirageDescriptif();
                break;
            case 41:
                return $this->getDelaiDateLimiteRemisePli();
                break;
            case 42:
                return $this->getSignaturePropre();
                break;
            case 43:
                return $this->getProcedureRestreinte();
                break;
            case 44:
                return $this->getOuvertureSimultanee();
                break;
            case 45:
                return $this->getTypeDecisionARenseigner();
                break;
            case 46:
                return $this->getTypeDecisionAttributionMarche();
                break;
            case 47:
                return $this->getTypeDecisionDeclarationSansSuite();
                break;
            case 48:
                return $this->getTypeDecisionDeclarationInfructueux();
                break;
            case 49:
                return $this->getTypeDecisionSelectionEntreprise();
                break;
            case 50:
                return $this->getTypeDecisionAttributionAccordCadre();
                break;
            case 51:
                return $this->getTypeDecisionAdmissionSad();
                break;
            case 52:
                return $this->getTypeDecisionAutre();
                break;
            case 53:
                return $this->getEnvOffreTechnique();
                break;
            case 54:
                return $this->getEnvOffreTechniqueTypeUnique();
                break;
            case 55:
                return $this->getEnvOffreTechniqueTypeMultiple();
                break;
            case 56:
                return $this->getRepObligatoire();
                break;
            case 57:
                return $this->getNoRepObligatoire();
                break;
            case 58:
                return $this->getAutrePieceCons();
                break;
            case 59:
                return $this->getRespElecAutrePlateforme();
                break;
            case 60:
                return $this->getMiseEnLigneEntiteCoordinatrice();
                break;
            case 61:
                return $this->getAutoriserPublicite();
                break;
            case 62:
                return $this->getPoursuiteDateLimiteRemisePli();
                break;
            case 63:
                return $this->getDelaiPoursuiteAffichage();
                break;
            case 64:
                return $this->getModeOuvertureDossier();
                break;
            case 65:
                return $this->getModeOuvertureReponse();
                break;
            case 66:
                return $this->getMarchePublicSimplifie();
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
        if (isset($alreadyDumpedObjects['CommonProcedureEquivalence'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonProcedureEquivalence'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonProcedureEquivalencePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdTypeProcedure(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getElecResp(),
            $keys[3] => $this->getNoElecResp(),
            $keys[4] => $this->getCipherEnabled(),
            $keys[5] => $this->getCipherDisabled(),
            $keys[6] => $this->getSignatureEnabled(),
            $keys[7] => $this->getSignatureDisabled(),
            $keys[8] => $this->getEnvCandidature(),
            $keys[9] => $this->getEnvOffre(),
            $keys[10] => $this->getEnvAnonymat(),
            $keys[11] => $this->getEnvoiComplet(),
            $keys[12] => $this->getEnvoiDiffere(),
            $keys[13] => $this->getProcedurePublicite(),
            $keys[14] => $this->getProcedureRestreinteCandidature(),
            $keys[15] => $this->getProcedureRestreinteOffre(),
            $keys[16] => $this->getEnvoiMailParMpe(),
            $keys[17] => $this->getNoEnvoiMailParMpe(),
            $keys[18] => $this->getMiseEnLigne1(),
            $keys[19] => $this->getMiseEnLigne2(),
            $keys[20] => $this->getMiseEnLigne3(),
            $keys[21] => $this->getMiseEnLigne4(),
            $keys[22] => $this->getEnvOffreTypeUnique(),
            $keys[23] => $this->getEnvOffreTypeMultiple(),
            $keys[24] => $this->getNoFichierAnnonce(),
            $keys[25] => $this->getFichierImporte(),
            $keys[26] => $this->getFichierBoamp(),
            $keys[27] => $this->getReglementCons(),
            $keys[28] => $this->getDossierDce(),
            $keys[29] => $this->getPartialDceDownload(),
            $keys[30] => $this->getService(),
            $keys[31] => $this->getConstitutionDossierReponse(),
            $keys[32] => $this->getEnvOffreTypeUnique2(),
            $keys[33] => $this->getEnvOffreTypeMultiple2(),
            $keys[34] => $this->getGestionEnvoisPostaux(),
            $keys[35] => $this->getTireurPlanNon(),
            $keys[36] => $this->getTireurPlanOui(),
            $keys[37] => $this->getTireurPlanPapier(),
            $keys[38] => $this->getTireurPlanCdrom(),
            $keys[39] => $this->getTireurPlanNom(),
            $keys[40] => $this->getTirageDescriptif(),
            $keys[41] => $this->getDelaiDateLimiteRemisePli(),
            $keys[42] => $this->getSignaturePropre(),
            $keys[43] => $this->getProcedureRestreinte(),
            $keys[44] => $this->getOuvertureSimultanee(),
            $keys[45] => $this->getTypeDecisionARenseigner(),
            $keys[46] => $this->getTypeDecisionAttributionMarche(),
            $keys[47] => $this->getTypeDecisionDeclarationSansSuite(),
            $keys[48] => $this->getTypeDecisionDeclarationInfructueux(),
            $keys[49] => $this->getTypeDecisionSelectionEntreprise(),
            $keys[50] => $this->getTypeDecisionAttributionAccordCadre(),
            $keys[51] => $this->getTypeDecisionAdmissionSad(),
            $keys[52] => $this->getTypeDecisionAutre(),
            $keys[53] => $this->getEnvOffreTechnique(),
            $keys[54] => $this->getEnvOffreTechniqueTypeUnique(),
            $keys[55] => $this->getEnvOffreTechniqueTypeMultiple(),
            $keys[56] => $this->getRepObligatoire(),
            $keys[57] => $this->getNoRepObligatoire(),
            $keys[58] => $this->getAutrePieceCons(),
            $keys[59] => $this->getRespElecAutrePlateforme(),
            $keys[60] => $this->getMiseEnLigneEntiteCoordinatrice(),
            $keys[61] => $this->getAutoriserPublicite(),
            $keys[62] => $this->getPoursuiteDateLimiteRemisePli(),
            $keys[63] => $this->getDelaiPoursuiteAffichage(),
            $keys[64] => $this->getModeOuvertureDossier(),
            $keys[65] => $this->getModeOuvertureReponse(),
            $keys[66] => $this->getMarchePublicSimplifie(),
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
        $pos = CommonProcedureEquivalencePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdTypeProcedure($value);
                break;
            case 1:
                $this->setOrganisme($value);
                break;
            case 2:
                $this->setElecResp($value);
                break;
            case 3:
                $this->setNoElecResp($value);
                break;
            case 4:
                $this->setCipherEnabled($value);
                break;
            case 5:
                $this->setCipherDisabled($value);
                break;
            case 6:
                $this->setSignatureEnabled($value);
                break;
            case 7:
                $this->setSignatureDisabled($value);
                break;
            case 8:
                $this->setEnvCandidature($value);
                break;
            case 9:
                $this->setEnvOffre($value);
                break;
            case 10:
                $this->setEnvAnonymat($value);
                break;
            case 11:
                $this->setEnvoiComplet($value);
                break;
            case 12:
                $this->setEnvoiDiffere($value);
                break;
            case 13:
                $this->setProcedurePublicite($value);
                break;
            case 14:
                $this->setProcedureRestreinteCandidature($value);
                break;
            case 15:
                $this->setProcedureRestreinteOffre($value);
                break;
            case 16:
                $this->setEnvoiMailParMpe($value);
                break;
            case 17:
                $this->setNoEnvoiMailParMpe($value);
                break;
            case 18:
                $this->setMiseEnLigne1($value);
                break;
            case 19:
                $this->setMiseEnLigne2($value);
                break;
            case 20:
                $this->setMiseEnLigne3($value);
                break;
            case 21:
                $this->setMiseEnLigne4($value);
                break;
            case 22:
                $this->setEnvOffreTypeUnique($value);
                break;
            case 23:
                $this->setEnvOffreTypeMultiple($value);
                break;
            case 24:
                $this->setNoFichierAnnonce($value);
                break;
            case 25:
                $this->setFichierImporte($value);
                break;
            case 26:
                $this->setFichierBoamp($value);
                break;
            case 27:
                $this->setReglementCons($value);
                break;
            case 28:
                $this->setDossierDce($value);
                break;
            case 29:
                $this->setPartialDceDownload($value);
                break;
            case 30:
                $this->setService($value);
                break;
            case 31:
                $this->setConstitutionDossierReponse($value);
                break;
            case 32:
                $this->setEnvOffreTypeUnique2($value);
                break;
            case 33:
                $this->setEnvOffreTypeMultiple2($value);
                break;
            case 34:
                $this->setGestionEnvoisPostaux($value);
                break;
            case 35:
                $this->setTireurPlanNon($value);
                break;
            case 36:
                $this->setTireurPlanOui($value);
                break;
            case 37:
                $this->setTireurPlanPapier($value);
                break;
            case 38:
                $this->setTireurPlanCdrom($value);
                break;
            case 39:
                $this->setTireurPlanNom($value);
                break;
            case 40:
                $this->setTirageDescriptif($value);
                break;
            case 41:
                $this->setDelaiDateLimiteRemisePli($value);
                break;
            case 42:
                $this->setSignaturePropre($value);
                break;
            case 43:
                $this->setProcedureRestreinte($value);
                break;
            case 44:
                $this->setOuvertureSimultanee($value);
                break;
            case 45:
                $this->setTypeDecisionARenseigner($value);
                break;
            case 46:
                $this->setTypeDecisionAttributionMarche($value);
                break;
            case 47:
                $this->setTypeDecisionDeclarationSansSuite($value);
                break;
            case 48:
                $this->setTypeDecisionDeclarationInfructueux($value);
                break;
            case 49:
                $this->setTypeDecisionSelectionEntreprise($value);
                break;
            case 50:
                $this->setTypeDecisionAttributionAccordCadre($value);
                break;
            case 51:
                $this->setTypeDecisionAdmissionSad($value);
                break;
            case 52:
                $this->setTypeDecisionAutre($value);
                break;
            case 53:
                $this->setEnvOffreTechnique($value);
                break;
            case 54:
                $this->setEnvOffreTechniqueTypeUnique($value);
                break;
            case 55:
                $this->setEnvOffreTechniqueTypeMultiple($value);
                break;
            case 56:
                $this->setRepObligatoire($value);
                break;
            case 57:
                $this->setNoRepObligatoire($value);
                break;
            case 58:
                $this->setAutrePieceCons($value);
                break;
            case 59:
                $this->setRespElecAutrePlateforme($value);
                break;
            case 60:
                $this->setMiseEnLigneEntiteCoordinatrice($value);
                break;
            case 61:
                $this->setAutoriserPublicite($value);
                break;
            case 62:
                $this->setPoursuiteDateLimiteRemisePli($value);
                break;
            case 63:
                $this->setDelaiPoursuiteAffichage($value);
                break;
            case 64:
                $this->setModeOuvertureDossier($value);
                break;
            case 65:
                $this->setModeOuvertureReponse($value);
                break;
            case 66:
                $this->setMarchePublicSimplifie($value);
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
        $keys = CommonProcedureEquivalencePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdTypeProcedure($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setElecResp($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setNoElecResp($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCipherEnabled($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setCipherDisabled($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setSignatureEnabled($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setSignatureDisabled($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setEnvCandidature($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setEnvOffre($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setEnvAnonymat($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setEnvoiComplet($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setEnvoiDiffere($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setProcedurePublicite($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setProcedureRestreinteCandidature($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setProcedureRestreinteOffre($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setEnvoiMailParMpe($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setNoEnvoiMailParMpe($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setMiseEnLigne1($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setMiseEnLigne2($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setMiseEnLigne3($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setMiseEnLigne4($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setEnvOffreTypeUnique($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setEnvOffreTypeMultiple($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setNoFichierAnnonce($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setFichierImporte($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setFichierBoamp($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setReglementCons($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setDossierDce($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setPartialDceDownload($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setService($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setConstitutionDossierReponse($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setEnvOffreTypeUnique2($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setEnvOffreTypeMultiple2($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setGestionEnvoisPostaux($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setTireurPlanNon($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setTireurPlanOui($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setTireurPlanPapier($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setTireurPlanCdrom($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setTireurPlanNom($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setTirageDescriptif($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setDelaiDateLimiteRemisePli($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setSignaturePropre($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setProcedureRestreinte($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setOuvertureSimultanee($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setTypeDecisionARenseigner($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setTypeDecisionAttributionMarche($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setTypeDecisionDeclarationSansSuite($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setTypeDecisionDeclarationInfructueux($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setTypeDecisionSelectionEntreprise($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setTypeDecisionAttributionAccordCadre($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setTypeDecisionAdmissionSad($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setTypeDecisionAutre($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setEnvOffreTechnique($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setEnvOffreTechniqueTypeUnique($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setEnvOffreTechniqueTypeMultiple($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setRepObligatoire($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setNoRepObligatoire($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setAutrePieceCons($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setRespElecAutrePlateforme($arr[$keys[59]]);
        if (array_key_exists($keys[60], $arr)) $this->setMiseEnLigneEntiteCoordinatrice($arr[$keys[60]]);
        if (array_key_exists($keys[61], $arr)) $this->setAutoriserPublicite($arr[$keys[61]]);
        if (array_key_exists($keys[62], $arr)) $this->setPoursuiteDateLimiteRemisePli($arr[$keys[62]]);
        if (array_key_exists($keys[63], $arr)) $this->setDelaiPoursuiteAffichage($arr[$keys[63]]);
        if (array_key_exists($keys[64], $arr)) $this->setModeOuvertureDossier($arr[$keys[64]]);
        if (array_key_exists($keys[65], $arr)) $this->setModeOuvertureReponse($arr[$keys[65]]);
        if (array_key_exists($keys[66], $arr)) $this->setMarchePublicSimplifie($arr[$keys[66]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonProcedureEquivalencePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonProcedureEquivalencePeer::ID_TYPE_PROCEDURE)) $criteria->add(CommonProcedureEquivalencePeer::ID_TYPE_PROCEDURE, $this->id_type_procedure);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::ORGANISME)) $criteria->add(CommonProcedureEquivalencePeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::ELEC_RESP)) $criteria->add(CommonProcedureEquivalencePeer::ELEC_RESP, $this->elec_resp);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::NO_ELEC_RESP)) $criteria->add(CommonProcedureEquivalencePeer::NO_ELEC_RESP, $this->no_elec_resp);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::CIPHER_ENABLED)) $criteria->add(CommonProcedureEquivalencePeer::CIPHER_ENABLED, $this->cipher_enabled);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::CIPHER_DISABLED)) $criteria->add(CommonProcedureEquivalencePeer::CIPHER_DISABLED, $this->cipher_disabled);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::SIGNATURE_ENABLED)) $criteria->add(CommonProcedureEquivalencePeer::SIGNATURE_ENABLED, $this->signature_enabled);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::SIGNATURE_DISABLED)) $criteria->add(CommonProcedureEquivalencePeer::SIGNATURE_DISABLED, $this->signature_disabled);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::ENV_CANDIDATURE)) $criteria->add(CommonProcedureEquivalencePeer::ENV_CANDIDATURE, $this->env_candidature);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::ENV_OFFRE)) $criteria->add(CommonProcedureEquivalencePeer::ENV_OFFRE, $this->env_offre);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::ENV_ANONYMAT)) $criteria->add(CommonProcedureEquivalencePeer::ENV_ANONYMAT, $this->env_anonymat);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::ENVOI_COMPLET)) $criteria->add(CommonProcedureEquivalencePeer::ENVOI_COMPLET, $this->envoi_complet);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::ENVOI_DIFFERE)) $criteria->add(CommonProcedureEquivalencePeer::ENVOI_DIFFERE, $this->envoi_differe);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::PROCEDURE_PUBLICITE)) $criteria->add(CommonProcedureEquivalencePeer::PROCEDURE_PUBLICITE, $this->procedure_publicite);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::PROCEDURE_RESTREINTE_CANDIDATURE)) $criteria->add(CommonProcedureEquivalencePeer::PROCEDURE_RESTREINTE_CANDIDATURE, $this->procedure_restreinte_candidature);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::PROCEDURE_RESTREINTE_OFFRE)) $criteria->add(CommonProcedureEquivalencePeer::PROCEDURE_RESTREINTE_OFFRE, $this->procedure_restreinte_offre);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::ENVOI_MAIL_PAR_MPE)) $criteria->add(CommonProcedureEquivalencePeer::ENVOI_MAIL_PAR_MPE, $this->envoi_mail_par_mpe);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::NO_ENVOI_MAIL_PAR_MPE)) $criteria->add(CommonProcedureEquivalencePeer::NO_ENVOI_MAIL_PAR_MPE, $this->no_envoi_mail_par_mpe);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::MISE_EN_LIGNE1)) $criteria->add(CommonProcedureEquivalencePeer::MISE_EN_LIGNE1, $this->mise_en_ligne1);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::MISE_EN_LIGNE2)) $criteria->add(CommonProcedureEquivalencePeer::MISE_EN_LIGNE2, $this->mise_en_ligne2);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::MISE_EN_LIGNE3)) $criteria->add(CommonProcedureEquivalencePeer::MISE_EN_LIGNE3, $this->mise_en_ligne3);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::MISE_EN_LIGNE4)) $criteria->add(CommonProcedureEquivalencePeer::MISE_EN_LIGNE4, $this->mise_en_ligne4);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::ENV_OFFRE_TYPE_UNIQUE)) $criteria->add(CommonProcedureEquivalencePeer::ENV_OFFRE_TYPE_UNIQUE, $this->env_offre_type_unique);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::ENV_OFFRE_TYPE_MULTIPLE)) $criteria->add(CommonProcedureEquivalencePeer::ENV_OFFRE_TYPE_MULTIPLE, $this->env_offre_type_multiple);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::NO_FICHIER_ANNONCE)) $criteria->add(CommonProcedureEquivalencePeer::NO_FICHIER_ANNONCE, $this->no_fichier_annonce);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::FICHIER_IMPORTE)) $criteria->add(CommonProcedureEquivalencePeer::FICHIER_IMPORTE, $this->fichier_importe);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::FICHIER_BOAMP)) $criteria->add(CommonProcedureEquivalencePeer::FICHIER_BOAMP, $this->fichier_boamp);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::REGLEMENT_CONS)) $criteria->add(CommonProcedureEquivalencePeer::REGLEMENT_CONS, $this->reglement_cons);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::DOSSIER_DCE)) $criteria->add(CommonProcedureEquivalencePeer::DOSSIER_DCE, $this->dossier_dce);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::PARTIAL_DCE_DOWNLOAD)) $criteria->add(CommonProcedureEquivalencePeer::PARTIAL_DCE_DOWNLOAD, $this->partial_dce_download);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::SERVICE)) $criteria->add(CommonProcedureEquivalencePeer::SERVICE, $this->service);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::CONSTITUTION_DOSSIER_REPONSE)) $criteria->add(CommonProcedureEquivalencePeer::CONSTITUTION_DOSSIER_REPONSE, $this->constitution_dossier_reponse);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::ENV_OFFRE_TYPE_UNIQUE2)) $criteria->add(CommonProcedureEquivalencePeer::ENV_OFFRE_TYPE_UNIQUE2, $this->env_offre_type_unique2);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::ENV_OFFRE_TYPE_MULTIPLE2)) $criteria->add(CommonProcedureEquivalencePeer::ENV_OFFRE_TYPE_MULTIPLE2, $this->env_offre_type_multiple2);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::GESTION_ENVOIS_POSTAUX)) $criteria->add(CommonProcedureEquivalencePeer::GESTION_ENVOIS_POSTAUX, $this->gestion_envois_postaux);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::TIREUR_PLAN_NON)) $criteria->add(CommonProcedureEquivalencePeer::TIREUR_PLAN_NON, $this->tireur_plan_non);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::TIREUR_PLAN_OUI)) $criteria->add(CommonProcedureEquivalencePeer::TIREUR_PLAN_OUI, $this->tireur_plan_oui);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::TIREUR_PLAN_PAPIER)) $criteria->add(CommonProcedureEquivalencePeer::TIREUR_PLAN_PAPIER, $this->tireur_plan_papier);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::TIREUR_PLAN_CDROM)) $criteria->add(CommonProcedureEquivalencePeer::TIREUR_PLAN_CDROM, $this->tireur_plan_cdrom);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::TIREUR_PLAN_NOM)) $criteria->add(CommonProcedureEquivalencePeer::TIREUR_PLAN_NOM, $this->tireur_plan_nom);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::TIRAGE_DESCRIPTIF)) $criteria->add(CommonProcedureEquivalencePeer::TIRAGE_DESCRIPTIF, $this->tirage_descriptif);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::DELAI_DATE_LIMITE_REMISE_PLI)) $criteria->add(CommonProcedureEquivalencePeer::DELAI_DATE_LIMITE_REMISE_PLI, $this->delai_date_limite_remise_pli);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::SIGNATURE_PROPRE)) $criteria->add(CommonProcedureEquivalencePeer::SIGNATURE_PROPRE, $this->signature_propre);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::PROCEDURE_RESTREINTE)) $criteria->add(CommonProcedureEquivalencePeer::PROCEDURE_RESTREINTE, $this->procedure_restreinte);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::OUVERTURE_SIMULTANEE)) $criteria->add(CommonProcedureEquivalencePeer::OUVERTURE_SIMULTANEE, $this->ouverture_simultanee);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::TYPE_DECISION_A_RENSEIGNER)) $criteria->add(CommonProcedureEquivalencePeer::TYPE_DECISION_A_RENSEIGNER, $this->type_decision_a_renseigner);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::TYPE_DECISION_ATTRIBUTION_MARCHE)) $criteria->add(CommonProcedureEquivalencePeer::TYPE_DECISION_ATTRIBUTION_MARCHE, $this->type_decision_attribution_marche);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::TYPE_DECISION_DECLARATION_SANS_SUITE)) $criteria->add(CommonProcedureEquivalencePeer::TYPE_DECISION_DECLARATION_SANS_SUITE, $this->type_decision_declaration_sans_suite);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::TYPE_DECISION_DECLARATION_INFRUCTUEUX)) $criteria->add(CommonProcedureEquivalencePeer::TYPE_DECISION_DECLARATION_INFRUCTUEUX, $this->type_decision_declaration_infructueux);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::TYPE_DECISION_SELECTION_ENTREPRISE)) $criteria->add(CommonProcedureEquivalencePeer::TYPE_DECISION_SELECTION_ENTREPRISE, $this->type_decision_selection_entreprise);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::TYPE_DECISION_ATTRIBUTION_ACCORD_CADRE)) $criteria->add(CommonProcedureEquivalencePeer::TYPE_DECISION_ATTRIBUTION_ACCORD_CADRE, $this->type_decision_attribution_accord_cadre);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::TYPE_DECISION_ADMISSION_SAD)) $criteria->add(CommonProcedureEquivalencePeer::TYPE_DECISION_ADMISSION_SAD, $this->type_decision_admission_sad);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::TYPE_DECISION_AUTRE)) $criteria->add(CommonProcedureEquivalencePeer::TYPE_DECISION_AUTRE, $this->type_decision_autre);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::ENV_OFFRE_TECHNIQUE)) $criteria->add(CommonProcedureEquivalencePeer::ENV_OFFRE_TECHNIQUE, $this->env_offre_technique);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::ENV_OFFRE_TECHNIQUE_TYPE_UNIQUE)) $criteria->add(CommonProcedureEquivalencePeer::ENV_OFFRE_TECHNIQUE_TYPE_UNIQUE, $this->env_offre_technique_type_unique);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::ENV_OFFRE_TECHNIQUE_TYPE_MULTIPLE)) $criteria->add(CommonProcedureEquivalencePeer::ENV_OFFRE_TECHNIQUE_TYPE_MULTIPLE, $this->env_offre_technique_type_multiple);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::REP_OBLIGATOIRE)) $criteria->add(CommonProcedureEquivalencePeer::REP_OBLIGATOIRE, $this->rep_obligatoire);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::NO_REP_OBLIGATOIRE)) $criteria->add(CommonProcedureEquivalencePeer::NO_REP_OBLIGATOIRE, $this->no_rep_obligatoire);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::AUTRE_PIECE_CONS)) $criteria->add(CommonProcedureEquivalencePeer::AUTRE_PIECE_CONS, $this->autre_piece_cons);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::RESP_ELEC_AUTRE_PLATEFORME)) $criteria->add(CommonProcedureEquivalencePeer::RESP_ELEC_AUTRE_PLATEFORME, $this->resp_elec_autre_plateforme);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::MISE_EN_LIGNE_ENTITE_COORDINATRICE)) $criteria->add(CommonProcedureEquivalencePeer::MISE_EN_LIGNE_ENTITE_COORDINATRICE, $this->mise_en_ligne_entite_coordinatrice);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::AUTORISER_PUBLICITE)) $criteria->add(CommonProcedureEquivalencePeer::AUTORISER_PUBLICITE, $this->autoriser_publicite);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::POURSUITE_DATE_LIMITE_REMISE_PLI)) $criteria->add(CommonProcedureEquivalencePeer::POURSUITE_DATE_LIMITE_REMISE_PLI, $this->poursuite_date_limite_remise_pli);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::DELAI_POURSUITE_AFFICHAGE)) $criteria->add(CommonProcedureEquivalencePeer::DELAI_POURSUITE_AFFICHAGE, $this->delai_poursuite_affichage);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::MODE_OUVERTURE_DOSSIER)) $criteria->add(CommonProcedureEquivalencePeer::MODE_OUVERTURE_DOSSIER, $this->mode_ouverture_dossier);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::MODE_OUVERTURE_REPONSE)) $criteria->add(CommonProcedureEquivalencePeer::MODE_OUVERTURE_REPONSE, $this->mode_ouverture_reponse);
        if ($this->isColumnModified(CommonProcedureEquivalencePeer::MARCHE_PUBLIC_SIMPLIFIE)) $criteria->add(CommonProcedureEquivalencePeer::MARCHE_PUBLIC_SIMPLIFIE, $this->marche_public_simplifie);

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
        $criteria = new Criteria(CommonProcedureEquivalencePeer::DATABASE_NAME);
        $criteria->add(CommonProcedureEquivalencePeer::ID_TYPE_PROCEDURE, $this->id_type_procedure);
        $criteria->add(CommonProcedureEquivalencePeer::ORGANISME, $this->organisme);

        return $criteria;
    }

    /**
     * Returns the composite primary key for this object.
     * The array elements will be in same order as specified in XML.
     * @return array
     */
    public function getPrimaryKey()
    {
        $pks = array();
        $pks[0] = $this->getIdTypeProcedure();
        $pks[1] = $this->getOrganisme();

        return $pks;
    }

    /**
     * Set the [composite] primary key.
     *
     * @param array $keys The elements of the composite key (order must match the order in XML file).
     * @return void
     */
    public function setPrimaryKey($keys)
    {
        $this->setIdTypeProcedure($keys[0]);
        $this->setOrganisme($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getIdTypeProcedure()) && (null === $this->getOrganisme());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonProcedureEquivalence (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdTypeProcedure($this->getIdTypeProcedure());
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setElecResp($this->getElecResp());
        $copyObj->setNoElecResp($this->getNoElecResp());
        $copyObj->setCipherEnabled($this->getCipherEnabled());
        $copyObj->setCipherDisabled($this->getCipherDisabled());
        $copyObj->setSignatureEnabled($this->getSignatureEnabled());
        $copyObj->setSignatureDisabled($this->getSignatureDisabled());
        $copyObj->setEnvCandidature($this->getEnvCandidature());
        $copyObj->setEnvOffre($this->getEnvOffre());
        $copyObj->setEnvAnonymat($this->getEnvAnonymat());
        $copyObj->setEnvoiComplet($this->getEnvoiComplet());
        $copyObj->setEnvoiDiffere($this->getEnvoiDiffere());
        $copyObj->setProcedurePublicite($this->getProcedurePublicite());
        $copyObj->setProcedureRestreinteCandidature($this->getProcedureRestreinteCandidature());
        $copyObj->setProcedureRestreinteOffre($this->getProcedureRestreinteOffre());
        $copyObj->setEnvoiMailParMpe($this->getEnvoiMailParMpe());
        $copyObj->setNoEnvoiMailParMpe($this->getNoEnvoiMailParMpe());
        $copyObj->setMiseEnLigne1($this->getMiseEnLigne1());
        $copyObj->setMiseEnLigne2($this->getMiseEnLigne2());
        $copyObj->setMiseEnLigne3($this->getMiseEnLigne3());
        $copyObj->setMiseEnLigne4($this->getMiseEnLigne4());
        $copyObj->setEnvOffreTypeUnique($this->getEnvOffreTypeUnique());
        $copyObj->setEnvOffreTypeMultiple($this->getEnvOffreTypeMultiple());
        $copyObj->setNoFichierAnnonce($this->getNoFichierAnnonce());
        $copyObj->setFichierImporte($this->getFichierImporte());
        $copyObj->setFichierBoamp($this->getFichierBoamp());
        $copyObj->setReglementCons($this->getReglementCons());
        $copyObj->setDossierDce($this->getDossierDce());
        $copyObj->setPartialDceDownload($this->getPartialDceDownload());
        $copyObj->setService($this->getService());
        $copyObj->setConstitutionDossierReponse($this->getConstitutionDossierReponse());
        $copyObj->setEnvOffreTypeUnique2($this->getEnvOffreTypeUnique2());
        $copyObj->setEnvOffreTypeMultiple2($this->getEnvOffreTypeMultiple2());
        $copyObj->setGestionEnvoisPostaux($this->getGestionEnvoisPostaux());
        $copyObj->setTireurPlanNon($this->getTireurPlanNon());
        $copyObj->setTireurPlanOui($this->getTireurPlanOui());
        $copyObj->setTireurPlanPapier($this->getTireurPlanPapier());
        $copyObj->setTireurPlanCdrom($this->getTireurPlanCdrom());
        $copyObj->setTireurPlanNom($this->getTireurPlanNom());
        $copyObj->setTirageDescriptif($this->getTirageDescriptif());
        $copyObj->setDelaiDateLimiteRemisePli($this->getDelaiDateLimiteRemisePli());
        $copyObj->setSignaturePropre($this->getSignaturePropre());
        $copyObj->setProcedureRestreinte($this->getProcedureRestreinte());
        $copyObj->setOuvertureSimultanee($this->getOuvertureSimultanee());
        $copyObj->setTypeDecisionARenseigner($this->getTypeDecisionARenseigner());
        $copyObj->setTypeDecisionAttributionMarche($this->getTypeDecisionAttributionMarche());
        $copyObj->setTypeDecisionDeclarationSansSuite($this->getTypeDecisionDeclarationSansSuite());
        $copyObj->setTypeDecisionDeclarationInfructueux($this->getTypeDecisionDeclarationInfructueux());
        $copyObj->setTypeDecisionSelectionEntreprise($this->getTypeDecisionSelectionEntreprise());
        $copyObj->setTypeDecisionAttributionAccordCadre($this->getTypeDecisionAttributionAccordCadre());
        $copyObj->setTypeDecisionAdmissionSad($this->getTypeDecisionAdmissionSad());
        $copyObj->setTypeDecisionAutre($this->getTypeDecisionAutre());
        $copyObj->setEnvOffreTechnique($this->getEnvOffreTechnique());
        $copyObj->setEnvOffreTechniqueTypeUnique($this->getEnvOffreTechniqueTypeUnique());
        $copyObj->setEnvOffreTechniqueTypeMultiple($this->getEnvOffreTechniqueTypeMultiple());
        $copyObj->setRepObligatoire($this->getRepObligatoire());
        $copyObj->setNoRepObligatoire($this->getNoRepObligatoire());
        $copyObj->setAutrePieceCons($this->getAutrePieceCons());
        $copyObj->setRespElecAutrePlateforme($this->getRespElecAutrePlateforme());
        $copyObj->setMiseEnLigneEntiteCoordinatrice($this->getMiseEnLigneEntiteCoordinatrice());
        $copyObj->setAutoriserPublicite($this->getAutoriserPublicite());
        $copyObj->setPoursuiteDateLimiteRemisePli($this->getPoursuiteDateLimiteRemisePli());
        $copyObj->setDelaiPoursuiteAffichage($this->getDelaiPoursuiteAffichage());
        $copyObj->setModeOuvertureDossier($this->getModeOuvertureDossier());
        $copyObj->setModeOuvertureReponse($this->getModeOuvertureReponse());
        $copyObj->setMarchePublicSimplifie($this->getMarchePublicSimplifie());
        if ($makeNew) {
            $copyObj->setNew(true);
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
     * @return CommonProcedureEquivalence Clone of current object.
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
     * @return CommonProcedureEquivalencePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonProcedureEquivalencePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_type_procedure = null;
        $this->organisme = null;
        $this->elec_resp = null;
        $this->no_elec_resp = null;
        $this->cipher_enabled = null;
        $this->cipher_disabled = null;
        $this->signature_enabled = null;
        $this->signature_disabled = null;
        $this->env_candidature = null;
        $this->env_offre = null;
        $this->env_anonymat = null;
        $this->envoi_complet = null;
        $this->envoi_differe = null;
        $this->procedure_publicite = null;
        $this->procedure_restreinte_candidature = null;
        $this->procedure_restreinte_offre = null;
        $this->envoi_mail_par_mpe = null;
        $this->no_envoi_mail_par_mpe = null;
        $this->mise_en_ligne1 = null;
        $this->mise_en_ligne2 = null;
        $this->mise_en_ligne3 = null;
        $this->mise_en_ligne4 = null;
        $this->env_offre_type_unique = null;
        $this->env_offre_type_multiple = null;
        $this->no_fichier_annonce = null;
        $this->fichier_importe = null;
        $this->fichier_boamp = null;
        $this->reglement_cons = null;
        $this->dossier_dce = null;
        $this->partial_dce_download = null;
        $this->service = null;
        $this->constitution_dossier_reponse = null;
        $this->env_offre_type_unique2 = null;
        $this->env_offre_type_multiple2 = null;
        $this->gestion_envois_postaux = null;
        $this->tireur_plan_non = null;
        $this->tireur_plan_oui = null;
        $this->tireur_plan_papier = null;
        $this->tireur_plan_cdrom = null;
        $this->tireur_plan_nom = null;
        $this->tirage_descriptif = null;
        $this->delai_date_limite_remise_pli = null;
        $this->signature_propre = null;
        $this->procedure_restreinte = null;
        $this->ouverture_simultanee = null;
        $this->type_decision_a_renseigner = null;
        $this->type_decision_attribution_marche = null;
        $this->type_decision_declaration_sans_suite = null;
        $this->type_decision_declaration_infructueux = null;
        $this->type_decision_selection_entreprise = null;
        $this->type_decision_attribution_accord_cadre = null;
        $this->type_decision_admission_sad = null;
        $this->type_decision_autre = null;
        $this->env_offre_technique = null;
        $this->env_offre_technique_type_unique = null;
        $this->env_offre_technique_type_multiple = null;
        $this->rep_obligatoire = null;
        $this->no_rep_obligatoire = null;
        $this->autre_piece_cons = null;
        $this->resp_elec_autre_plateforme = null;
        $this->mise_en_ligne_entite_coordinatrice = null;
        $this->autoriser_publicite = null;
        $this->poursuite_date_limite_remise_pli = null;
        $this->delai_poursuite_affichage = null;
        $this->mode_ouverture_dossier = null;
        $this->mode_ouverture_reponse = null;
        $this->marche_public_simplifie = null;
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
        return (string) $this->exportTo(CommonProcedureEquivalencePeer::DEFAULT_STRING_FORMAT);
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
