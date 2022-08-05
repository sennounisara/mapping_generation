<?php


/**
 * Base class that represents a row from the 'profil_agent' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseProfilAgent extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ProfilAgentPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ProfilAgentPeer
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
     * The value for the libelle_profil_agent field.
     * @var        string
     */
    protected $libelle_profil_agent;

    /**
     * The value for the id_profil field.
     * @var        int
     */
    protected $id_profil;

    /**
     * The value for the id_organisme field.
     * @var        int
     */
    protected $id_organisme;

    /**
     * The value for the menu_mon_compte field.
     * @var        string
     */
    protected $menu_mon_compte;

    /**
     * The value for the menu_demande_nouvelles field.
     * @var        string
     */
    protected $menu_demande_nouvelles;

    /**
     * The value for the menu_demande_recherche field.
     * @var        string
     */
    protected $menu_demande_recherche;

    /**
     * The value for the menu_admin field.
     * @var        string
     */
    protected $menu_admin;

    /**
     * The value for the menu_admin_services field.
     * @var        string
     */
    protected $menu_admin_services;

    /**
     * The value for the menu_admin_utilisateurs field.
     * @var        string
     */
    protected $menu_admin_utilisateurs;

    /**
     * The value for the menu_rapport field.
     * @var        string
     */
    protected $menu_rapport;

    /**
     * The value for the menu_rapport_mensuel field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $menu_rapport_mensuel;

    /**
     * The value for the menu_rapport_global field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $menu_rapport_global;

    /**
     * The value for the menu_rapport_personnalise field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $menu_rapport_personnalise;

    /**
     * The value for the menu_admin_entite_demandeur field.
     * @var        string
     */
    protected $menu_admin_entite_demandeur;

    /**
     * The value for the menu_admin_demandeurs field.
     * @var        string
     */
    protected $menu_admin_demandeurs;

    /**
     * The value for the historique field.
     * @var        string
     */
    protected $historique;

    /**
     * The value for the menu_demande_affectees_entite field.
     * @var        string
     */
    protected $menu_demande_affectees_entite;

    /**
     * The value for the menu_admin_entite field.
     * @var        string
     */
    protected $menu_admin_entite;

    /**
     * The value for the menu_admin_theme field.
     * @var        string
     */
    protected $menu_admin_theme;

    /**
     * The value for the etat_profil field.
     * @var        string
     */
    protected $etat_profil;

    /**
     * The value for the action_affecter_entite field.
     * @var        string
     */
    protected $action_affecter_entite;

    /**
     * The value for the action_affecter_agent field.
     * @var        string
     */
    protected $action_affecter_agent;

    /**
     * The value for the supprimer_modifiier_demande_entite field.
     * @var        string
     */
    protected $supprimer_modifiier_demande_entite;

    /**
     * The value for the supprimer_modifiier_all_demande field.
     * @var        string
     */
    protected $supprimer_modifiier_all_demande;

    /**
     * The value for the traiter_toute_demande field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $traiter_toute_demande;

    /**
     * The value for the date_indicative_reponse field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $date_indicative_reponse;

    /**
     * The value for the modifier_theme field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $modifier_theme;

    /**
     * The value for the action_retourner_precedent field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $action_retourner_precedent;

    /**
     * The value for the action_classer_erronee field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $action_classer_erronee;

    /**
     * The value for the action_classer_ha field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $action_classer_ha;

    /**
     * The value for the action_soumettre_reponse_circuit field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $action_soumettre_reponse_circuit;

    /**
     * The value for the action_transmettre_reponse_req field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $action_transmettre_reponse_req;

    /**
     * The value for the action_cloturer field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $action_cloturer;

    /**
     * The value for the suivre_demande field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $suivre_demande;

    /**
     * The value for the menu_en_proposition field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $menu_en_proposition;

    /**
     * The value for the libelle_profil_agent_ar field.
     * @var        string
     */
    protected $libelle_profil_agent_ar;

    /**
     * The value for the action_partager_demande field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $action_partager_demande;

    /**
     * The value for the menu_demande_partagees_entite field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $menu_demande_partagees_entite;

    /**
     * The value for the habilitation_gestion_tache field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $habilitation_gestion_tache;

    /**
     * The value for the action_affecter_demande_cloture field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $action_affecter_demande_cloture;

    /**
     * The value for the visibilite_demande_recu field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $visibilite_demande_recu;

    /**
     * The value for the menu_ministeres field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $menu_ministeres;

    /**
     * The value for the demandes_a_suivre field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $demandes_a_suivre;

    /**
     * The value for the gestion_interim field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gestion_interim;

    /**
     * The value for the affichage_simplifie field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $affichage_simplifie;

    /**
     * The value for the supprimer_tous field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $supprimer_tous;

    /**
     * The value for the ajout_demande field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $ajout_demande;

    /**
     * The value for the type_ajout_demande field.
     * @var        string
     */
    protected $type_ajout_demande;

    /**
     * The value for the ajout_demande_entrante field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $ajout_demande_entrante;

    /**
     * The value for the ajout_demande_sortante field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $ajout_demande_sortante;

    /**
     * The value for the ajout_demande_sortant field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $ajout_demande_sortant;

    /**
     * The value for the ajout_demande_interne field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $ajout_demande_interne;

    /**
     * The value for the ajout_demande_intragroupe field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $ajout_demande_intragroupe;

    /**
     * The value for the modification_circuit_validation_demande field.
     * @var        string
     */
    protected $modification_circuit_validation_demande;

    /**
     * The value for the transfert_demande field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $transfert_demande;

    /**
     * The value for the visualiser_echange field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $visualiser_echange;

    /**
     * The value for the cloture_transverse field.
     * @var        string
     */
    protected $cloture_transverse;

    /**
     * The value for the echange_hors_sys field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $echange_hors_sys;

    /**
     * The value for the echange_requerant field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $echange_requerant;

    /**
     * The value for the affichage_reponse_final field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $affichage_reponse_final;

    /**
     * The value for the retirer_affectation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $retirer_affectation;

    /**
     * The value for the affectation_externe field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $affectation_externe;

    /**
     * The value for the complement_demande field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $complement_demande;

    /**
     * The value for the encopie_demande field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $encopie_demande;

    /**
     * The value for the modifier_demande field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $modifier_demande;

    /**
     * The value for the supprimer_demande field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $supprimer_demande;

    /**
     * The value for the visibilite_mail_tel_bo field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $visibilite_mail_tel_bo;

    /**
     * The value for the acces_audio_ca field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $acces_audio_ca;

    /**
     * The value for the prolonger_duree_traitement field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $prolonger_duree_traitement;

    /**
     * The value for the modif_demande_affecte field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $modif_demande_affecte;

    /**
     * The value for the tableau_bord_supervision field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $tableau_bord_supervision;

    /**
     * The value for the statistique_supervision field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $statistique_supervision;

    /**
     * The value for the suivi_supervision field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $suivi_supervision;

    /**
     * The value for the force_cloture field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $force_cloture;

    /**
     * The value for the affecter_groupe field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $affecter_groupe;

    /**
     * The value for the historique_consultation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $historique_consultation;

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
        $this->menu_rapport_mensuel = '0';
        $this->menu_rapport_global = '0';
        $this->menu_rapport_personnalise = '0';
        $this->traiter_toute_demande = '0';
        $this->date_indicative_reponse = '0';
        $this->modifier_theme = '0';
        $this->action_retourner_precedent = '0';
        $this->action_classer_erronee = '0';
        $this->action_classer_ha = '0';
        $this->action_soumettre_reponse_circuit = '0';
        $this->action_transmettre_reponse_req = '0';
        $this->action_cloturer = '0';
        $this->suivre_demande = '0';
        $this->menu_en_proposition = '0';
        $this->action_partager_demande = '0';
        $this->menu_demande_partagees_entite = '0';
        $this->habilitation_gestion_tache = '0';
        $this->action_affecter_demande_cloture = '0';
        $this->visibilite_demande_recu = '0';
        $this->menu_ministeres = '0';
        $this->demandes_a_suivre = '0';
        $this->gestion_interim = '0';
        $this->affichage_simplifie = '0';
        $this->supprimer_tous = '0';
        $this->ajout_demande = '1';
        $this->ajout_demande_entrante = '0';
        $this->ajout_demande_sortante = '0';
        $this->ajout_demande_sortant = '0';
        $this->ajout_demande_interne = '0';
        $this->ajout_demande_intragroupe = '0';
        $this->transfert_demande = '0';
        $this->visualiser_echange = '0';
        $this->echange_hors_sys = '1';
        $this->echange_requerant = '1';
        $this->affichage_reponse_final = '1';
        $this->retirer_affectation = '0';
        $this->affectation_externe = '0';
        $this->complement_demande = '0';
        $this->encopie_demande = '0';
        $this->modifier_demande = '0';
        $this->supprimer_demande = '0';
        $this->visibilite_mail_tel_bo = '1';
        $this->acces_audio_ca = '0';
        $this->prolonger_duree_traitement = '0';
        $this->modif_demande_affecte = '0';
        $this->tableau_bord_supervision = '0';
        $this->statistique_supervision = '0';
        $this->suivi_supervision = '0';
        $this->force_cloture = '0';
        $this->affecter_groupe = '0';
        $this->historique_consultation = '0';
    }

    /**
     * Initializes internal state of BaseProfilAgent object.
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
     * Get the [libelle_profil_agent] column value.
     * 
     * @return string
     */
    public function getLibelleProfilAgent()
    {

        return $this->libelle_profil_agent;
    }

    /**
     * Get the [id_profil] column value.
     * 
     * @return int
     */
    public function getIdProfil()
    {

        return $this->id_profil;
    }

    /**
     * Get the [id_organisme] column value.
     * 
     * @return int
     */
    public function getIdOrganisme()
    {

        return $this->id_organisme;
    }

    /**
     * Get the [menu_mon_compte] column value.
     * 
     * @return string
     */
    public function getMenuMonCompte()
    {

        return $this->menu_mon_compte;
    }

    /**
     * Get the [menu_demande_nouvelles] column value.
     * 
     * @return string
     */
    public function getMenuDemandeNouvelles()
    {

        return $this->menu_demande_nouvelles;
    }

    /**
     * Get the [menu_demande_recherche] column value.
     * 
     * @return string
     */
    public function getMenuDemandeRecherche()
    {

        return $this->menu_demande_recherche;
    }

    /**
     * Get the [menu_admin] column value.
     * 
     * @return string
     */
    public function getMenuAdmin()
    {

        return $this->menu_admin;
    }

    /**
     * Get the [menu_admin_services] column value.
     * 
     * @return string
     */
    public function getMenuAdminServices()
    {

        return $this->menu_admin_services;
    }

    /**
     * Get the [menu_admin_utilisateurs] column value.
     * 
     * @return string
     */
    public function getMenuAdminUtilisateurs()
    {

        return $this->menu_admin_utilisateurs;
    }

    /**
     * Get the [menu_rapport] column value.
     * 
     * @return string
     */
    public function getMenuRapport()
    {

        return $this->menu_rapport;
    }

    /**
     * Get the [menu_rapport_mensuel] column value.
     * 
     * @return string
     */
    public function getMenuRapportMensuel()
    {

        return $this->menu_rapport_mensuel;
    }

    /**
     * Get the [menu_rapport_global] column value.
     * 
     * @return string
     */
    public function getMenuRapportGlobal()
    {

        return $this->menu_rapport_global;
    }

    /**
     * Get the [menu_rapport_personnalise] column value.
     * 
     * @return string
     */
    public function getMenuRapportPersonnalise()
    {

        return $this->menu_rapport_personnalise;
    }

    /**
     * Get the [menu_admin_entite_demandeur] column value.
     * 
     * @return string
     */
    public function getMenuAdminEntiteDemandeur()
    {

        return $this->menu_admin_entite_demandeur;
    }

    /**
     * Get the [menu_admin_demandeurs] column value.
     * 
     * @return string
     */
    public function getMenuAdminDemandeurs()
    {

        return $this->menu_admin_demandeurs;
    }

    /**
     * Get the [historique] column value.
     * 
     * @return string
     */
    public function getHistorique()
    {

        return $this->historique;
    }

    /**
     * Get the [menu_demande_affectees_entite] column value.
     * 
     * @return string
     */
    public function getMenuDemandeAffecteesEntite()
    {

        return $this->menu_demande_affectees_entite;
    }

    /**
     * Get the [menu_admin_entite] column value.
     * 
     * @return string
     */
    public function getMenuAdminEntite()
    {

        return $this->menu_admin_entite;
    }

    /**
     * Get the [menu_admin_theme] column value.
     * 
     * @return string
     */
    public function getMenuAdminTheme()
    {

        return $this->menu_admin_theme;
    }

    /**
     * Get the [etat_profil] column value.
     * 
     * @return string
     */
    public function getEtatProfil()
    {

        return $this->etat_profil;
    }

    /**
     * Get the [action_affecter_entite] column value.
     * 
     * @return string
     */
    public function getActionAffecterEntite()
    {

        return $this->action_affecter_entite;
    }

    /**
     * Get the [action_affecter_agent] column value.
     * 
     * @return string
     */
    public function getActionAffecterAgent()
    {

        return $this->action_affecter_agent;
    }

    /**
     * Get the [supprimer_modifiier_demande_entite] column value.
     * 
     * @return string
     */
    public function getSupprimerModifiierDemandeEntite()
    {

        return $this->supprimer_modifiier_demande_entite;
    }

    /**
     * Get the [supprimer_modifiier_all_demande] column value.
     * 
     * @return string
     */
    public function getSupprimerModifiierAllDemande()
    {

        return $this->supprimer_modifiier_all_demande;
    }

    /**
     * Get the [traiter_toute_demande] column value.
     * 
     * @return string
     */
    public function getTraiterTouteDemande()
    {

        return $this->traiter_toute_demande;
    }

    /**
     * Get the [date_indicative_reponse] column value.
     * 
     * @return string
     */
    public function getDateIndicativeReponse()
    {

        return $this->date_indicative_reponse;
    }

    /**
     * Get the [modifier_theme] column value.
     * 
     * @return string
     */
    public function getModifierTheme()
    {

        return $this->modifier_theme;
    }

    /**
     * Get the [action_retourner_precedent] column value.
     * 
     * @return string
     */
    public function getActionRetournerPrecedent()
    {

        return $this->action_retourner_precedent;
    }

    /**
     * Get the [action_classer_erronee] column value.
     * 
     * @return string
     */
    public function getActionClasserErronee()
    {

        return $this->action_classer_erronee;
    }

    /**
     * Get the [action_classer_ha] column value.
     * 
     * @return string
     */
    public function getActionClasserHa()
    {

        return $this->action_classer_ha;
    }

    /**
     * Get the [action_soumettre_reponse_circuit] column value.
     * 
     * @return string
     */
    public function getActionSoumettreReponseCircuit()
    {

        return $this->action_soumettre_reponse_circuit;
    }

    /**
     * Get the [action_transmettre_reponse_req] column value.
     * 
     * @return string
     */
    public function getActionTransmettreReponseReq()
    {

        return $this->action_transmettre_reponse_req;
    }

    /**
     * Get the [action_cloturer] column value.
     * 
     * @return string
     */
    public function getActionCloturer()
    {

        return $this->action_cloturer;
    }

    /**
     * Get the [suivre_demande] column value.
     * 
     * @return string
     */
    public function getSuivreDemande()
    {

        return $this->suivre_demande;
    }

    /**
     * Get the [menu_en_proposition] column value.
     * 
     * @return string
     */
    public function getMenuEnProposition()
    {

        return $this->menu_en_proposition;
    }

    /**
     * Get the [libelle_profil_agent_ar] column value.
     * 
     * @return string
     */
    public function getLibelleProfilAgentAr()
    {

        return $this->libelle_profil_agent_ar;
    }

    /**
     * Get the [action_partager_demande] column value.
     * 
     * @return string
     */
    public function getActionPartagerDemande()
    {

        return $this->action_partager_demande;
    }

    /**
     * Get the [menu_demande_partagees_entite] column value.
     * 
     * @return string
     */
    public function getMenuDemandePartageesEntite()
    {

        return $this->menu_demande_partagees_entite;
    }

    /**
     * Get the [habilitation_gestion_tache] column value.
     * 
     * @return string
     */
    public function getHabilitationGestionTache()
    {

        return $this->habilitation_gestion_tache;
    }

    /**
     * Get the [action_affecter_demande_cloture] column value.
     * 
     * @return string
     */
    public function getActionAffecterDemandeCloture()
    {

        return $this->action_affecter_demande_cloture;
    }

    /**
     * Get the [visibilite_demande_recu] column value.
     * 
     * @return string
     */
    public function getVisibiliteDemandeRecu()
    {

        return $this->visibilite_demande_recu;
    }

    /**
     * Get the [menu_ministeres] column value.
     * 
     * @return string
     */
    public function getMenuMinisteres()
    {

        return $this->menu_ministeres;
    }

    /**
     * Get the [demandes_a_suivre] column value.
     * 
     * @return string
     */
    public function getDemandesASuivre()
    {

        return $this->demandes_a_suivre;
    }

    /**
     * Get the [gestion_interim] column value.
     * 
     * @return string
     */
    public function getGestionInterim()
    {

        return $this->gestion_interim;
    }

    /**
     * Get the [affichage_simplifie] column value.
     * 
     * @return string
     */
    public function getAffichageSimplifie()
    {

        return $this->affichage_simplifie;
    }

    /**
     * Get the [supprimer_tous] column value.
     * 
     * @return string
     */
    public function getSupprimerTous()
    {

        return $this->supprimer_tous;
    }

    /**
     * Get the [ajout_demande] column value.
     * 
     * @return string
     */
    public function getAjoutDemande()
    {

        return $this->ajout_demande;
    }

    /**
     * Get the [type_ajout_demande] column value.
     * 
     * @return string
     */
    public function getTypeAjoutDemande()
    {

        return $this->type_ajout_demande;
    }

    /**
     * Get the [ajout_demande_entrante] column value.
     * 
     * @return string
     */
    public function getAjoutDemandeEntrante()
    {

        return $this->ajout_demande_entrante;
    }

    /**
     * Get the [ajout_demande_sortante] column value.
     * 
     * @return string
     */
    public function getAjoutDemandeSortante()
    {

        return $this->ajout_demande_sortante;
    }

    /**
     * Get the [ajout_demande_sortant] column value.
     * 
     * @return string
     */
    public function getAjoutDemandeSortant()
    {

        return $this->ajout_demande_sortant;
    }

    /**
     * Get the [ajout_demande_interne] column value.
     * 
     * @return string
     */
    public function getAjoutDemandeInterne()
    {

        return $this->ajout_demande_interne;
    }

    /**
     * Get the [ajout_demande_intragroupe] column value.
     * 
     * @return string
     */
    public function getAjoutDemandeIntragroupe()
    {

        return $this->ajout_demande_intragroupe;
    }

    /**
     * Get the [modification_circuit_validation_demande] column value.
     * 
     * @return string
     */
    public function getModificationCircuitValidationDemande()
    {

        return $this->modification_circuit_validation_demande;
    }

    /**
     * Get the [transfert_demande] column value.
     * 
     * @return string
     */
    public function getTransfertDemande()
    {

        return $this->transfert_demande;
    }

    /**
     * Get the [visualiser_echange] column value.
     * 
     * @return string
     */
    public function getVisualiserEchange()
    {

        return $this->visualiser_echange;
    }

    /**
     * Get the [cloture_transverse] column value.
     * 
     * @return string
     */
    public function getClotureTransverse()
    {

        return $this->cloture_transverse;
    }

    /**
     * Get the [echange_hors_sys] column value.
     * 
     * @return string
     */
    public function getEchangeHorsSys()
    {

        return $this->echange_hors_sys;
    }

    /**
     * Get the [echange_requerant] column value.
     * 
     * @return string
     */
    public function getEchangeRequerant()
    {

        return $this->echange_requerant;
    }

    /**
     * Get the [affichage_reponse_final] column value.
     * 
     * @return string
     */
    public function getAffichageReponseFinal()
    {

        return $this->affichage_reponse_final;
    }

    /**
     * Get the [retirer_affectation] column value.
     * 
     * @return string
     */
    public function getRetirerAffectation()
    {

        return $this->retirer_affectation;
    }

    /**
     * Get the [affectation_externe] column value.
     * 
     * @return string
     */
    public function getAffectationExterne()
    {

        return $this->affectation_externe;
    }

    /**
     * Get the [complement_demande] column value.
     * 
     * @return string
     */
    public function getComplementDemande()
    {

        return $this->complement_demande;
    }

    /**
     * Get the [encopie_demande] column value.
     * 
     * @return string
     */
    public function getEncopieDemande()
    {

        return $this->encopie_demande;
    }

    /**
     * Get the [modifier_demande] column value.
     * 
     * @return string
     */
    public function getModifierDemande()
    {

        return $this->modifier_demande;
    }

    /**
     * Get the [supprimer_demande] column value.
     * 
     * @return string
     */
    public function getSupprimerDemande()
    {

        return $this->supprimer_demande;
    }

    /**
     * Get the [visibilite_mail_tel_bo] column value.
     * 
     * @return string
     */
    public function getVisibiliteMailTelBo()
    {

        return $this->visibilite_mail_tel_bo;
    }

    /**
     * Get the [acces_audio_ca] column value.
     * 
     * @return string
     */
    public function getAccesAudioCa()
    {

        return $this->acces_audio_ca;
    }

    /**
     * Get the [prolonger_duree_traitement] column value.
     * 
     * @return string
     */
    public function getProlongerDureeTraitement()
    {

        return $this->prolonger_duree_traitement;
    }

    /**
     * Get the [modif_demande_affecte] column value.
     * 
     * @return string
     */
    public function getModifDemandeAffecte()
    {

        return $this->modif_demande_affecte;
    }

    /**
     * Get the [tableau_bord_supervision] column value.
     * 
     * @return string
     */
    public function getTableauBordSupervision()
    {

        return $this->tableau_bord_supervision;
    }

    /**
     * Get the [statistique_supervision] column value.
     * 
     * @return string
     */
    public function getStatistiqueSupervision()
    {

        return $this->statistique_supervision;
    }

    /**
     * Get the [suivi_supervision] column value.
     * 
     * @return string
     */
    public function getSuiviSupervision()
    {

        return $this->suivi_supervision;
    }

    /**
     * Get the [force_cloture] column value.
     * 
     * @return string
     */
    public function getForceCloture()
    {

        return $this->force_cloture;
    }

    /**
     * Get the [affecter_groupe] column value.
     * 
     * @return string
     */
    public function getAffecterGroupe()
    {

        return $this->affecter_groupe;
    }

    /**
     * Get the [historique_consultation] column value.
     * 
     * @return string
     */
    public function getHistoriqueConsultation()
    {

        return $this->historique_consultation;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [libelle_profil_agent] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setLibelleProfilAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_profil_agent !== $v) {
            $this->libelle_profil_agent = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::LIBELLE_PROFIL_AGENT;
        }


        return $this;
    } // setLibelleProfilAgent()

    /**
     * Set the value of [id_profil] column.
     * 
     * @param int $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setIdProfil($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_profil !== $v) {
            $this->id_profil = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::ID_PROFIL;
        }


        return $this;
    } // setIdProfil()

    /**
     * Set the value of [id_organisme] column.
     * 
     * @param int $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setIdOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_organisme !== $v) {
            $this->id_organisme = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::ID_ORGANISME;
        }


        return $this;
    } // setIdOrganisme()

    /**
     * Set the value of [menu_mon_compte] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setMenuMonCompte($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->menu_mon_compte !== $v) {
            $this->menu_mon_compte = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::MENU_MON_COMPTE;
        }


        return $this;
    } // setMenuMonCompte()

    /**
     * Set the value of [menu_demande_nouvelles] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setMenuDemandeNouvelles($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->menu_demande_nouvelles !== $v) {
            $this->menu_demande_nouvelles = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::MENU_DEMANDE_NOUVELLES;
        }


        return $this;
    } // setMenuDemandeNouvelles()

    /**
     * Set the value of [menu_demande_recherche] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setMenuDemandeRecherche($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->menu_demande_recherche !== $v) {
            $this->menu_demande_recherche = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::MENU_DEMANDE_RECHERCHE;
        }


        return $this;
    } // setMenuDemandeRecherche()

    /**
     * Set the value of [menu_admin] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setMenuAdmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->menu_admin !== $v) {
            $this->menu_admin = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::MENU_ADMIN;
        }


        return $this;
    } // setMenuAdmin()

    /**
     * Set the value of [menu_admin_services] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setMenuAdminServices($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->menu_admin_services !== $v) {
            $this->menu_admin_services = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::MENU_ADMIN_SERVICES;
        }


        return $this;
    } // setMenuAdminServices()

    /**
     * Set the value of [menu_admin_utilisateurs] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setMenuAdminUtilisateurs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->menu_admin_utilisateurs !== $v) {
            $this->menu_admin_utilisateurs = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::MENU_ADMIN_UTILISATEURS;
        }


        return $this;
    } // setMenuAdminUtilisateurs()

    /**
     * Set the value of [menu_rapport] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setMenuRapport($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->menu_rapport !== $v) {
            $this->menu_rapport = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::MENU_RAPPORT;
        }


        return $this;
    } // setMenuRapport()

    /**
     * Set the value of [menu_rapport_mensuel] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setMenuRapportMensuel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->menu_rapport_mensuel !== $v) {
            $this->menu_rapport_mensuel = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::MENU_RAPPORT_MENSUEL;
        }


        return $this;
    } // setMenuRapportMensuel()

    /**
     * Set the value of [menu_rapport_global] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setMenuRapportGlobal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->menu_rapport_global !== $v) {
            $this->menu_rapport_global = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::MENU_RAPPORT_GLOBAL;
        }


        return $this;
    } // setMenuRapportGlobal()

    /**
     * Set the value of [menu_rapport_personnalise] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setMenuRapportPersonnalise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->menu_rapport_personnalise !== $v) {
            $this->menu_rapport_personnalise = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::MENU_RAPPORT_PERSONNALISE;
        }


        return $this;
    } // setMenuRapportPersonnalise()

    /**
     * Set the value of [menu_admin_entite_demandeur] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setMenuAdminEntiteDemandeur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->menu_admin_entite_demandeur !== $v) {
            $this->menu_admin_entite_demandeur = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::MENU_ADMIN_ENTITE_DEMANDEUR;
        }


        return $this;
    } // setMenuAdminEntiteDemandeur()

    /**
     * Set the value of [menu_admin_demandeurs] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setMenuAdminDemandeurs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->menu_admin_demandeurs !== $v) {
            $this->menu_admin_demandeurs = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::MENU_ADMIN_DEMANDEURS;
        }


        return $this;
    } // setMenuAdminDemandeurs()

    /**
     * Set the value of [historique] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setHistorique($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->historique !== $v) {
            $this->historique = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::HISTORIQUE;
        }


        return $this;
    } // setHistorique()

    /**
     * Set the value of [menu_demande_affectees_entite] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setMenuDemandeAffecteesEntite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->menu_demande_affectees_entite !== $v) {
            $this->menu_demande_affectees_entite = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::MENU_DEMANDE_AFFECTEES_ENTITE;
        }


        return $this;
    } // setMenuDemandeAffecteesEntite()

    /**
     * Set the value of [menu_admin_entite] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setMenuAdminEntite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->menu_admin_entite !== $v) {
            $this->menu_admin_entite = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::MENU_ADMIN_ENTITE;
        }


        return $this;
    } // setMenuAdminEntite()

    /**
     * Set the value of [menu_admin_theme] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setMenuAdminTheme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->menu_admin_theme !== $v) {
            $this->menu_admin_theme = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::MENU_ADMIN_THEME;
        }


        return $this;
    } // setMenuAdminTheme()

    /**
     * Set the value of [etat_profil] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setEtatProfil($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->etat_profil !== $v) {
            $this->etat_profil = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::ETAT_PROFIL;
        }


        return $this;
    } // setEtatProfil()

    /**
     * Set the value of [action_affecter_entite] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setActionAffecterEntite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->action_affecter_entite !== $v) {
            $this->action_affecter_entite = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::ACTION_AFFECTER_ENTITE;
        }


        return $this;
    } // setActionAffecterEntite()

    /**
     * Set the value of [action_affecter_agent] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setActionAffecterAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->action_affecter_agent !== $v) {
            $this->action_affecter_agent = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::ACTION_AFFECTER_AGENT;
        }


        return $this;
    } // setActionAffecterAgent()

    /**
     * Set the value of [supprimer_modifiier_demande_entite] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setSupprimerModifiierDemandeEntite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->supprimer_modifiier_demande_entite !== $v) {
            $this->supprimer_modifiier_demande_entite = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::SUPPRIMER_MODIFIIER_DEMANDE_ENTITE;
        }


        return $this;
    } // setSupprimerModifiierDemandeEntite()

    /**
     * Set the value of [supprimer_modifiier_all_demande] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setSupprimerModifiierAllDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->supprimer_modifiier_all_demande !== $v) {
            $this->supprimer_modifiier_all_demande = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::SUPPRIMER_MODIFIIER_ALL_DEMANDE;
        }


        return $this;
    } // setSupprimerModifiierAllDemande()

    /**
     * Set the value of [traiter_toute_demande] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setTraiterTouteDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->traiter_toute_demande !== $v) {
            $this->traiter_toute_demande = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::TRAITER_TOUTE_DEMANDE;
        }


        return $this;
    } // setTraiterTouteDemande()

    /**
     * Set the value of [date_indicative_reponse] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setDateIndicativeReponse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_indicative_reponse !== $v) {
            $this->date_indicative_reponse = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::DATE_INDICATIVE_REPONSE;
        }


        return $this;
    } // setDateIndicativeReponse()

    /**
     * Set the value of [modifier_theme] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setModifierTheme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->modifier_theme !== $v) {
            $this->modifier_theme = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::MODIFIER_THEME;
        }


        return $this;
    } // setModifierTheme()

    /**
     * Set the value of [action_retourner_precedent] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setActionRetournerPrecedent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->action_retourner_precedent !== $v) {
            $this->action_retourner_precedent = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::ACTION_RETOURNER_PRECEDENT;
        }


        return $this;
    } // setActionRetournerPrecedent()

    /**
     * Set the value of [action_classer_erronee] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setActionClasserErronee($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->action_classer_erronee !== $v) {
            $this->action_classer_erronee = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::ACTION_CLASSER_ERRONEE;
        }


        return $this;
    } // setActionClasserErronee()

    /**
     * Set the value of [action_classer_ha] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setActionClasserHa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->action_classer_ha !== $v) {
            $this->action_classer_ha = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::ACTION_CLASSER_HA;
        }


        return $this;
    } // setActionClasserHa()

    /**
     * Set the value of [action_soumettre_reponse_circuit] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setActionSoumettreReponseCircuit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->action_soumettre_reponse_circuit !== $v) {
            $this->action_soumettre_reponse_circuit = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::ACTION_SOUMETTRE_REPONSE_CIRCUIT;
        }


        return $this;
    } // setActionSoumettreReponseCircuit()

    /**
     * Set the value of [action_transmettre_reponse_req] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setActionTransmettreReponseReq($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->action_transmettre_reponse_req !== $v) {
            $this->action_transmettre_reponse_req = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::ACTION_TRANSMETTRE_REPONSE_REQ;
        }


        return $this;
    } // setActionTransmettreReponseReq()

    /**
     * Set the value of [action_cloturer] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setActionCloturer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->action_cloturer !== $v) {
            $this->action_cloturer = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::ACTION_CLOTURER;
        }


        return $this;
    } // setActionCloturer()

    /**
     * Set the value of [suivre_demande] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setSuivreDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->suivre_demande !== $v) {
            $this->suivre_demande = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::SUIVRE_DEMANDE;
        }


        return $this;
    } // setSuivreDemande()

    /**
     * Set the value of [menu_en_proposition] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setMenuEnProposition($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->menu_en_proposition !== $v) {
            $this->menu_en_proposition = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::MENU_EN_PROPOSITION;
        }


        return $this;
    } // setMenuEnProposition()

    /**
     * Set the value of [libelle_profil_agent_ar] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setLibelleProfilAgentAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_profil_agent_ar !== $v) {
            $this->libelle_profil_agent_ar = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::LIBELLE_PROFIL_AGENT_AR;
        }


        return $this;
    } // setLibelleProfilAgentAr()

    /**
     * Set the value of [action_partager_demande] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setActionPartagerDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->action_partager_demande !== $v) {
            $this->action_partager_demande = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::ACTION_PARTAGER_DEMANDE;
        }


        return $this;
    } // setActionPartagerDemande()

    /**
     * Set the value of [menu_demande_partagees_entite] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setMenuDemandePartageesEntite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->menu_demande_partagees_entite !== $v) {
            $this->menu_demande_partagees_entite = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::MENU_DEMANDE_PARTAGEES_ENTITE;
        }


        return $this;
    } // setMenuDemandePartageesEntite()

    /**
     * Set the value of [habilitation_gestion_tache] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setHabilitationGestionTache($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->habilitation_gestion_tache !== $v) {
            $this->habilitation_gestion_tache = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::HABILITATION_GESTION_TACHE;
        }


        return $this;
    } // setHabilitationGestionTache()

    /**
     * Set the value of [action_affecter_demande_cloture] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setActionAffecterDemandeCloture($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->action_affecter_demande_cloture !== $v) {
            $this->action_affecter_demande_cloture = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::ACTION_AFFECTER_DEMANDE_CLOTURE;
        }


        return $this;
    } // setActionAffecterDemandeCloture()

    /**
     * Set the value of [visibilite_demande_recu] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setVisibiliteDemandeRecu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->visibilite_demande_recu !== $v) {
            $this->visibilite_demande_recu = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::VISIBILITE_DEMANDE_RECU;
        }


        return $this;
    } // setVisibiliteDemandeRecu()

    /**
     * Set the value of [menu_ministeres] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setMenuMinisteres($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->menu_ministeres !== $v) {
            $this->menu_ministeres = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::MENU_MINISTERES;
        }


        return $this;
    } // setMenuMinisteres()

    /**
     * Set the value of [demandes_a_suivre] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setDemandesASuivre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->demandes_a_suivre !== $v) {
            $this->demandes_a_suivre = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::DEMANDES_A_SUIVRE;
        }


        return $this;
    } // setDemandesASuivre()

    /**
     * Set the value of [gestion_interim] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setGestionInterim($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gestion_interim !== $v) {
            $this->gestion_interim = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::GESTION_INTERIM;
        }


        return $this;
    } // setGestionInterim()

    /**
     * Set the value of [affichage_simplifie] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setAffichageSimplifie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->affichage_simplifie !== $v) {
            $this->affichage_simplifie = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::AFFICHAGE_SIMPLIFIE;
        }


        return $this;
    } // setAffichageSimplifie()

    /**
     * Set the value of [supprimer_tous] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setSupprimerTous($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->supprimer_tous !== $v) {
            $this->supprimer_tous = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::SUPPRIMER_TOUS;
        }


        return $this;
    } // setSupprimerTous()

    /**
     * Set the value of [ajout_demande] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setAjoutDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ajout_demande !== $v) {
            $this->ajout_demande = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::AJOUT_DEMANDE;
        }


        return $this;
    } // setAjoutDemande()

    /**
     * Set the value of [type_ajout_demande] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setTypeAjoutDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_ajout_demande !== $v) {
            $this->type_ajout_demande = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::TYPE_AJOUT_DEMANDE;
        }


        return $this;
    } // setTypeAjoutDemande()

    /**
     * Set the value of [ajout_demande_entrante] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setAjoutDemandeEntrante($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ajout_demande_entrante !== $v) {
            $this->ajout_demande_entrante = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::AJOUT_DEMANDE_ENTRANTE;
        }


        return $this;
    } // setAjoutDemandeEntrante()

    /**
     * Set the value of [ajout_demande_sortante] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setAjoutDemandeSortante($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ajout_demande_sortante !== $v) {
            $this->ajout_demande_sortante = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::AJOUT_DEMANDE_SORTANTE;
        }


        return $this;
    } // setAjoutDemandeSortante()

    /**
     * Set the value of [ajout_demande_sortant] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setAjoutDemandeSortant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ajout_demande_sortant !== $v) {
            $this->ajout_demande_sortant = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::AJOUT_DEMANDE_SORTANT;
        }


        return $this;
    } // setAjoutDemandeSortant()

    /**
     * Set the value of [ajout_demande_interne] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setAjoutDemandeInterne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ajout_demande_interne !== $v) {
            $this->ajout_demande_interne = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::AJOUT_DEMANDE_INTERNE;
        }


        return $this;
    } // setAjoutDemandeInterne()

    /**
     * Set the value of [ajout_demande_intragroupe] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setAjoutDemandeIntragroupe($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ajout_demande_intragroupe !== $v) {
            $this->ajout_demande_intragroupe = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::AJOUT_DEMANDE_INTRAGROUPE;
        }


        return $this;
    } // setAjoutDemandeIntragroupe()

    /**
     * Set the value of [modification_circuit_validation_demande] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setModificationCircuitValidationDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->modification_circuit_validation_demande !== $v) {
            $this->modification_circuit_validation_demande = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::MODIFICATION_CIRCUIT_VALIDATION_DEMANDE;
        }


        return $this;
    } // setModificationCircuitValidationDemande()

    /**
     * Set the value of [transfert_demande] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setTransfertDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->transfert_demande !== $v) {
            $this->transfert_demande = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::TRANSFERT_DEMANDE;
        }


        return $this;
    } // setTransfertDemande()

    /**
     * Set the value of [visualiser_echange] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setVisualiserEchange($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->visualiser_echange !== $v) {
            $this->visualiser_echange = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::VISUALISER_ECHANGE;
        }


        return $this;
    } // setVisualiserEchange()

    /**
     * Set the value of [cloture_transverse] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setClotureTransverse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cloture_transverse !== $v) {
            $this->cloture_transverse = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::CLOTURE_TRANSVERSE;
        }


        return $this;
    } // setClotureTransverse()

    /**
     * Set the value of [echange_hors_sys] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setEchangeHorsSys($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->echange_hors_sys !== $v) {
            $this->echange_hors_sys = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::ECHANGE_HORS_SYS;
        }


        return $this;
    } // setEchangeHorsSys()

    /**
     * Set the value of [echange_requerant] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setEchangeRequerant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->echange_requerant !== $v) {
            $this->echange_requerant = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::ECHANGE_REQUERANT;
        }


        return $this;
    } // setEchangeRequerant()

    /**
     * Set the value of [affichage_reponse_final] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setAffichageReponseFinal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->affichage_reponse_final !== $v) {
            $this->affichage_reponse_final = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::AFFICHAGE_REPONSE_FINAL;
        }


        return $this;
    } // setAffichageReponseFinal()

    /**
     * Set the value of [retirer_affectation] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setRetirerAffectation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->retirer_affectation !== $v) {
            $this->retirer_affectation = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::RETIRER_AFFECTATION;
        }


        return $this;
    } // setRetirerAffectation()

    /**
     * Set the value of [affectation_externe] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setAffectationExterne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->affectation_externe !== $v) {
            $this->affectation_externe = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::AFFECTATION_EXTERNE;
        }


        return $this;
    } // setAffectationExterne()

    /**
     * Set the value of [complement_demande] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setComplementDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->complement_demande !== $v) {
            $this->complement_demande = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::COMPLEMENT_DEMANDE;
        }


        return $this;
    } // setComplementDemande()

    /**
     * Set the value of [encopie_demande] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setEncopieDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->encopie_demande !== $v) {
            $this->encopie_demande = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::ENCOPIE_DEMANDE;
        }


        return $this;
    } // setEncopieDemande()

    /**
     * Set the value of [modifier_demande] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setModifierDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->modifier_demande !== $v) {
            $this->modifier_demande = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::MODIFIER_DEMANDE;
        }


        return $this;
    } // setModifierDemande()

    /**
     * Set the value of [supprimer_demande] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setSupprimerDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->supprimer_demande !== $v) {
            $this->supprimer_demande = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::SUPPRIMER_DEMANDE;
        }


        return $this;
    } // setSupprimerDemande()

    /**
     * Set the value of [visibilite_mail_tel_bo] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setVisibiliteMailTelBo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->visibilite_mail_tel_bo !== $v) {
            $this->visibilite_mail_tel_bo = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::VISIBILITE_MAIL_TEL_BO;
        }


        return $this;
    } // setVisibiliteMailTelBo()

    /**
     * Set the value of [acces_audio_ca] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setAccesAudioCa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->acces_audio_ca !== $v) {
            $this->acces_audio_ca = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::ACCES_AUDIO_CA;
        }


        return $this;
    } // setAccesAudioCa()

    /**
     * Set the value of [prolonger_duree_traitement] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setProlongerDureeTraitement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prolonger_duree_traitement !== $v) {
            $this->prolonger_duree_traitement = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::PROLONGER_DUREE_TRAITEMENT;
        }


        return $this;
    } // setProlongerDureeTraitement()

    /**
     * Set the value of [modif_demande_affecte] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setModifDemandeAffecte($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->modif_demande_affecte !== $v) {
            $this->modif_demande_affecte = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::MODIF_DEMANDE_AFFECTE;
        }


        return $this;
    } // setModifDemandeAffecte()

    /**
     * Set the value of [tableau_bord_supervision] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setTableauBordSupervision($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tableau_bord_supervision !== $v) {
            $this->tableau_bord_supervision = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::TABLEAU_BORD_SUPERVISION;
        }


        return $this;
    } // setTableauBordSupervision()

    /**
     * Set the value of [statistique_supervision] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setStatistiqueSupervision($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->statistique_supervision !== $v) {
            $this->statistique_supervision = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::STATISTIQUE_SUPERVISION;
        }


        return $this;
    } // setStatistiqueSupervision()

    /**
     * Set the value of [suivi_supervision] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setSuiviSupervision($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->suivi_supervision !== $v) {
            $this->suivi_supervision = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::SUIVI_SUPERVISION;
        }


        return $this;
    } // setSuiviSupervision()

    /**
     * Set the value of [force_cloture] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setForceCloture($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->force_cloture !== $v) {
            $this->force_cloture = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::FORCE_CLOTURE;
        }


        return $this;
    } // setForceCloture()

    /**
     * Set the value of [affecter_groupe] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setAffecterGroupe($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->affecter_groupe !== $v) {
            $this->affecter_groupe = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::AFFECTER_GROUPE;
        }


        return $this;
    } // setAffecterGroupe()

    /**
     * Set the value of [historique_consultation] column.
     * 
     * @param string $v new value
     * @return ProfilAgent The current object (for fluent API support)
     */
    public function setHistoriqueConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->historique_consultation !== $v) {
            $this->historique_consultation = $v;
            $this->modifiedColumns[] = ProfilAgentPeer::HISTORIQUE_CONSULTATION;
        }


        return $this;
    } // setHistoriqueConsultation()

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
            if ($this->menu_rapport_mensuel !== '0') {
                return false;
            }

            if ($this->menu_rapport_global !== '0') {
                return false;
            }

            if ($this->menu_rapport_personnalise !== '0') {
                return false;
            }

            if ($this->traiter_toute_demande !== '0') {
                return false;
            }

            if ($this->date_indicative_reponse !== '0') {
                return false;
            }

            if ($this->modifier_theme !== '0') {
                return false;
            }

            if ($this->action_retourner_precedent !== '0') {
                return false;
            }

            if ($this->action_classer_erronee !== '0') {
                return false;
            }

            if ($this->action_classer_ha !== '0') {
                return false;
            }

            if ($this->action_soumettre_reponse_circuit !== '0') {
                return false;
            }

            if ($this->action_transmettre_reponse_req !== '0') {
                return false;
            }

            if ($this->action_cloturer !== '0') {
                return false;
            }

            if ($this->suivre_demande !== '0') {
                return false;
            }

            if ($this->menu_en_proposition !== '0') {
                return false;
            }

            if ($this->action_partager_demande !== '0') {
                return false;
            }

            if ($this->menu_demande_partagees_entite !== '0') {
                return false;
            }

            if ($this->habilitation_gestion_tache !== '0') {
                return false;
            }

            if ($this->action_affecter_demande_cloture !== '0') {
                return false;
            }

            if ($this->visibilite_demande_recu !== '0') {
                return false;
            }

            if ($this->menu_ministeres !== '0') {
                return false;
            }

            if ($this->demandes_a_suivre !== '0') {
                return false;
            }

            if ($this->gestion_interim !== '0') {
                return false;
            }

            if ($this->affichage_simplifie !== '0') {
                return false;
            }

            if ($this->supprimer_tous !== '0') {
                return false;
            }

            if ($this->ajout_demande !== '1') {
                return false;
            }

            if ($this->ajout_demande_entrante !== '0') {
                return false;
            }

            if ($this->ajout_demande_sortante !== '0') {
                return false;
            }

            if ($this->ajout_demande_sortant !== '0') {
                return false;
            }

            if ($this->ajout_demande_interne !== '0') {
                return false;
            }

            if ($this->ajout_demande_intragroupe !== '0') {
                return false;
            }

            if ($this->transfert_demande !== '0') {
                return false;
            }

            if ($this->visualiser_echange !== '0') {
                return false;
            }

            if ($this->echange_hors_sys !== '1') {
                return false;
            }

            if ($this->echange_requerant !== '1') {
                return false;
            }

            if ($this->affichage_reponse_final !== '1') {
                return false;
            }

            if ($this->retirer_affectation !== '0') {
                return false;
            }

            if ($this->affectation_externe !== '0') {
                return false;
            }

            if ($this->complement_demande !== '0') {
                return false;
            }

            if ($this->encopie_demande !== '0') {
                return false;
            }

            if ($this->modifier_demande !== '0') {
                return false;
            }

            if ($this->supprimer_demande !== '0') {
                return false;
            }

            if ($this->visibilite_mail_tel_bo !== '1') {
                return false;
            }

            if ($this->acces_audio_ca !== '0') {
                return false;
            }

            if ($this->prolonger_duree_traitement !== '0') {
                return false;
            }

            if ($this->modif_demande_affecte !== '0') {
                return false;
            }

            if ($this->tableau_bord_supervision !== '0') {
                return false;
            }

            if ($this->statistique_supervision !== '0') {
                return false;
            }

            if ($this->suivi_supervision !== '0') {
                return false;
            }

            if ($this->force_cloture !== '0') {
                return false;
            }

            if ($this->affecter_groupe !== '0') {
                return false;
            }

            if ($this->historique_consultation !== '0') {
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
            $this->libelle_profil_agent = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->id_profil = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->id_organisme = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->menu_mon_compte = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->menu_demande_nouvelles = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->menu_demande_recherche = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->menu_admin = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->menu_admin_services = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->menu_admin_utilisateurs = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->menu_rapport = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->menu_rapport_mensuel = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->menu_rapport_global = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->menu_rapport_personnalise = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->menu_admin_entite_demandeur = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->menu_admin_demandeurs = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->historique = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->menu_demande_affectees_entite = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->menu_admin_entite = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->menu_admin_theme = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->etat_profil = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->action_affecter_entite = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->action_affecter_agent = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->supprimer_modifiier_demande_entite = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->supprimer_modifiier_all_demande = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->traiter_toute_demande = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->date_indicative_reponse = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->modifier_theme = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->action_retourner_precedent = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->action_classer_erronee = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->action_classer_ha = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->action_soumettre_reponse_circuit = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->action_transmettre_reponse_req = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->action_cloturer = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->suivre_demande = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->menu_en_proposition = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->libelle_profil_agent_ar = ($row[$startcol + 36] !== null) ? (string) $row[$startcol + 36] : null;
            $this->action_partager_demande = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->menu_demande_partagees_entite = ($row[$startcol + 38] !== null) ? (string) $row[$startcol + 38] : null;
            $this->habilitation_gestion_tache = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->action_affecter_demande_cloture = ($row[$startcol + 40] !== null) ? (string) $row[$startcol + 40] : null;
            $this->visibilite_demande_recu = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->menu_ministeres = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
            $this->demandes_a_suivre = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
            $this->gestion_interim = ($row[$startcol + 44] !== null) ? (string) $row[$startcol + 44] : null;
            $this->affichage_simplifie = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
            $this->supprimer_tous = ($row[$startcol + 46] !== null) ? (string) $row[$startcol + 46] : null;
            $this->ajout_demande = ($row[$startcol + 47] !== null) ? (string) $row[$startcol + 47] : null;
            $this->type_ajout_demande = ($row[$startcol + 48] !== null) ? (string) $row[$startcol + 48] : null;
            $this->ajout_demande_entrante = ($row[$startcol + 49] !== null) ? (string) $row[$startcol + 49] : null;
            $this->ajout_demande_sortante = ($row[$startcol + 50] !== null) ? (string) $row[$startcol + 50] : null;
            $this->ajout_demande_sortant = ($row[$startcol + 51] !== null) ? (string) $row[$startcol + 51] : null;
            $this->ajout_demande_interne = ($row[$startcol + 52] !== null) ? (string) $row[$startcol + 52] : null;
            $this->ajout_demande_intragroupe = ($row[$startcol + 53] !== null) ? (string) $row[$startcol + 53] : null;
            $this->modification_circuit_validation_demande = ($row[$startcol + 54] !== null) ? (string) $row[$startcol + 54] : null;
            $this->transfert_demande = ($row[$startcol + 55] !== null) ? (string) $row[$startcol + 55] : null;
            $this->visualiser_echange = ($row[$startcol + 56] !== null) ? (string) $row[$startcol + 56] : null;
            $this->cloture_transverse = ($row[$startcol + 57] !== null) ? (string) $row[$startcol + 57] : null;
            $this->echange_hors_sys = ($row[$startcol + 58] !== null) ? (string) $row[$startcol + 58] : null;
            $this->echange_requerant = ($row[$startcol + 59] !== null) ? (string) $row[$startcol + 59] : null;
            $this->affichage_reponse_final = ($row[$startcol + 60] !== null) ? (string) $row[$startcol + 60] : null;
            $this->retirer_affectation = ($row[$startcol + 61] !== null) ? (string) $row[$startcol + 61] : null;
            $this->affectation_externe = ($row[$startcol + 62] !== null) ? (string) $row[$startcol + 62] : null;
            $this->complement_demande = ($row[$startcol + 63] !== null) ? (string) $row[$startcol + 63] : null;
            $this->encopie_demande = ($row[$startcol + 64] !== null) ? (string) $row[$startcol + 64] : null;
            $this->modifier_demande = ($row[$startcol + 65] !== null) ? (string) $row[$startcol + 65] : null;
            $this->supprimer_demande = ($row[$startcol + 66] !== null) ? (string) $row[$startcol + 66] : null;
            $this->visibilite_mail_tel_bo = ($row[$startcol + 67] !== null) ? (string) $row[$startcol + 67] : null;
            $this->acces_audio_ca = ($row[$startcol + 68] !== null) ? (string) $row[$startcol + 68] : null;
            $this->prolonger_duree_traitement = ($row[$startcol + 69] !== null) ? (string) $row[$startcol + 69] : null;
            $this->modif_demande_affecte = ($row[$startcol + 70] !== null) ? (string) $row[$startcol + 70] : null;
            $this->tableau_bord_supervision = ($row[$startcol + 71] !== null) ? (string) $row[$startcol + 71] : null;
            $this->statistique_supervision = ($row[$startcol + 72] !== null) ? (string) $row[$startcol + 72] : null;
            $this->suivi_supervision = ($row[$startcol + 73] !== null) ? (string) $row[$startcol + 73] : null;
            $this->force_cloture = ($row[$startcol + 74] !== null) ? (string) $row[$startcol + 74] : null;
            $this->affecter_groupe = ($row[$startcol + 75] !== null) ? (string) $row[$startcol + 75] : null;
            $this->historique_consultation = ($row[$startcol + 76] !== null) ? (string) $row[$startcol + 76] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 77; // 77 = ProfilAgentPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating ProfilAgent object", $e);
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
            $con = Propel::getConnection(ProfilAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ProfilAgentPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(ProfilAgentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ProfilAgentQuery::create()
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
            $con = Propel::getConnection(ProfilAgentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ProfilAgentPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = ProfilAgentPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ProfilAgentPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ProfilAgentPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`ID`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::LIBELLE_PROFIL_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`LIBELLE_PROFIL_AGENT`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::ID_PROFIL)) {
            $modifiedColumns[':p' . $index++]  = '`ID_PROFIL`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::ID_ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ORGANISME`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::MENU_MON_COMPTE)) {
            $modifiedColumns[':p' . $index++]  = '`MENU_MON_COMPTE`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::MENU_DEMANDE_NOUVELLES)) {
            $modifiedColumns[':p' . $index++]  = '`MENU_DEMANDE_NOUVELLES`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::MENU_DEMANDE_RECHERCHE)) {
            $modifiedColumns[':p' . $index++]  = '`MENU_DEMANDE_RECHERCHE`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::MENU_ADMIN)) {
            $modifiedColumns[':p' . $index++]  = '`MENU_ADMIN`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::MENU_ADMIN_SERVICES)) {
            $modifiedColumns[':p' . $index++]  = '`MENU_ADMIN_SERVICES`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::MENU_ADMIN_UTILISATEURS)) {
            $modifiedColumns[':p' . $index++]  = '`MENU_ADMIN_UTILISATEURS`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::MENU_RAPPORT)) {
            $modifiedColumns[':p' . $index++]  = '`MENU_RAPPORT`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::MENU_RAPPORT_MENSUEL)) {
            $modifiedColumns[':p' . $index++]  = '`MENU_RAPPORT_MENSUEL`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::MENU_RAPPORT_GLOBAL)) {
            $modifiedColumns[':p' . $index++]  = '`MENU_RAPPORT_GLOBAL`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::MENU_RAPPORT_PERSONNALISE)) {
            $modifiedColumns[':p' . $index++]  = '`MENU_RAPPORT_PERSONNALISE`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::MENU_ADMIN_ENTITE_DEMANDEUR)) {
            $modifiedColumns[':p' . $index++]  = '`MENU_ADMIN_ENTITE_DEMANDEUR`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::MENU_ADMIN_DEMANDEURS)) {
            $modifiedColumns[':p' . $index++]  = '`MENU_ADMIN_DEMANDEURS`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::HISTORIQUE)) {
            $modifiedColumns[':p' . $index++]  = '`HISTORIQUE`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::MENU_DEMANDE_AFFECTEES_ENTITE)) {
            $modifiedColumns[':p' . $index++]  = '`MENU_DEMANDE_AFFECTEES_ENTITE`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::MENU_ADMIN_ENTITE)) {
            $modifiedColumns[':p' . $index++]  = '`MENU_ADMIN_ENTITE`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::MENU_ADMIN_THEME)) {
            $modifiedColumns[':p' . $index++]  = '`MENU_ADMIN_THEME`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::ETAT_PROFIL)) {
            $modifiedColumns[':p' . $index++]  = '`ETAT_PROFIL`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::ACTION_AFFECTER_ENTITE)) {
            $modifiedColumns[':p' . $index++]  = '`ACTION_AFFECTER_ENTITE`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::ACTION_AFFECTER_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`ACTION_AFFECTER_AGENT`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::SUPPRIMER_MODIFIIER_DEMANDE_ENTITE)) {
            $modifiedColumns[':p' . $index++]  = '`SUPPRIMER_MODIFIIER_DEMANDE_ENTITE`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::SUPPRIMER_MODIFIIER_ALL_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`SUPPRIMER_MODIFIIER_ALL_DEMANDE`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::TRAITER_TOUTE_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`TRAITER_TOUTE_DEMANDE`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::DATE_INDICATIVE_REPONSE)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_INDICATIVE_REPONSE`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::MODIFIER_THEME)) {
            $modifiedColumns[':p' . $index++]  = '`MODIFIER_THEME`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::ACTION_RETOURNER_PRECEDENT)) {
            $modifiedColumns[':p' . $index++]  = '`ACTION_RETOURNER_PRECEDENT`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::ACTION_CLASSER_ERRONEE)) {
            $modifiedColumns[':p' . $index++]  = '`ACTION_CLASSER_ERRONEE`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::ACTION_CLASSER_HA)) {
            $modifiedColumns[':p' . $index++]  = '`ACTION_CLASSER_HA`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::ACTION_SOUMETTRE_REPONSE_CIRCUIT)) {
            $modifiedColumns[':p' . $index++]  = '`ACTION_SOUMETTRE_REPONSE_CIRCUIT`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::ACTION_TRANSMETTRE_REPONSE_REQ)) {
            $modifiedColumns[':p' . $index++]  = '`ACTION_TRANSMETTRE_REPONSE_REQ`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::ACTION_CLOTURER)) {
            $modifiedColumns[':p' . $index++]  = '`ACTION_CLOTURER`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::SUIVRE_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`SUIVRE_DEMANDE`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::MENU_EN_PROPOSITION)) {
            $modifiedColumns[':p' . $index++]  = '`MENU_EN_PROPOSITION`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::LIBELLE_PROFIL_AGENT_AR)) {
            $modifiedColumns[':p' . $index++]  = '`LIBELLE_PROFIL_AGENT_AR`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::ACTION_PARTAGER_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`ACTION_PARTAGER_DEMANDE`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::MENU_DEMANDE_PARTAGEES_ENTITE)) {
            $modifiedColumns[':p' . $index++]  = '`MENU_DEMANDE_PARTAGEES_ENTITE`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::HABILITATION_GESTION_TACHE)) {
            $modifiedColumns[':p' . $index++]  = '`HABILITATION_GESTION_TACHE`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::ACTION_AFFECTER_DEMANDE_CLOTURE)) {
            $modifiedColumns[':p' . $index++]  = '`ACTION_AFFECTER_DEMANDE_CLOTURE`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::VISIBILITE_DEMANDE_RECU)) {
            $modifiedColumns[':p' . $index++]  = '`VISIBILITE_DEMANDE_RECU`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::MENU_MINISTERES)) {
            $modifiedColumns[':p' . $index++]  = '`MENU_MINISTERES`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::DEMANDES_A_SUIVRE)) {
            $modifiedColumns[':p' . $index++]  = '`DEMANDES_A_SUIVRE`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::GESTION_INTERIM)) {
            $modifiedColumns[':p' . $index++]  = '`GESTION_INTERIM`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::AFFICHAGE_SIMPLIFIE)) {
            $modifiedColumns[':p' . $index++]  = '`AFFICHAGE_SIMPLIFIE`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::SUPPRIMER_TOUS)) {
            $modifiedColumns[':p' . $index++]  = '`SUPPRIMER_TOUS`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::AJOUT_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`AJOUT_DEMANDE`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::TYPE_AJOUT_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`TYPE_AJOUT_DEMANDE`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::AJOUT_DEMANDE_ENTRANTE)) {
            $modifiedColumns[':p' . $index++]  = '`AJOUT_DEMANDE_ENTRANTE`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::AJOUT_DEMANDE_SORTANTE)) {
            $modifiedColumns[':p' . $index++]  = '`AJOUT_DEMANDE_SORTANTE`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::AJOUT_DEMANDE_SORTANT)) {
            $modifiedColumns[':p' . $index++]  = '`AJOUT_DEMANDE_SORTANT`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::AJOUT_DEMANDE_INTERNE)) {
            $modifiedColumns[':p' . $index++]  = '`AJOUT_DEMANDE_INTERNE`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::AJOUT_DEMANDE_INTRAGROUPE)) {
            $modifiedColumns[':p' . $index++]  = '`AJOUT_DEMANDE_INTRAGROUPE`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::MODIFICATION_CIRCUIT_VALIDATION_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`MODIFICATION_CIRCUIT_VALIDATION_DEMANDE`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::TRANSFERT_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`TRANSFERT_DEMANDE`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::VISUALISER_ECHANGE)) {
            $modifiedColumns[':p' . $index++]  = '`VISUALISER_ECHANGE`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::CLOTURE_TRANSVERSE)) {
            $modifiedColumns[':p' . $index++]  = '`CLOTURE_TRANSVERSE`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::ECHANGE_HORS_SYS)) {
            $modifiedColumns[':p' . $index++]  = '`ECHANGE_HORS_SYS`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::ECHANGE_REQUERANT)) {
            $modifiedColumns[':p' . $index++]  = '`ECHANGE_REQUERANT`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::AFFICHAGE_REPONSE_FINAL)) {
            $modifiedColumns[':p' . $index++]  = '`AFFICHAGE_REPONSE_FINAL`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::RETIRER_AFFECTATION)) {
            $modifiedColumns[':p' . $index++]  = '`RETIRER_AFFECTATION`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::AFFECTATION_EXTERNE)) {
            $modifiedColumns[':p' . $index++]  = '`AFFECTATION_EXTERNE`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::COMPLEMENT_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`COMPLEMENT_DEMANDE`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::ENCOPIE_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`ENCOPIE_DEMANDE`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::MODIFIER_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`MODIFIER_DEMANDE`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::SUPPRIMER_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`SUPPRIMER_DEMANDE`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::VISIBILITE_MAIL_TEL_BO)) {
            $modifiedColumns[':p' . $index++]  = '`VISIBILITE_MAIL_TEL_BO`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::ACCES_AUDIO_CA)) {
            $modifiedColumns[':p' . $index++]  = '`ACCES_AUDIO_CA`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::PROLONGER_DUREE_TRAITEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`PROLONGER_DUREE_TRAITEMENT`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::MODIF_DEMANDE_AFFECTE)) {
            $modifiedColumns[':p' . $index++]  = '`MODIF_DEMANDE_AFFECTE`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::TABLEAU_BORD_SUPERVISION)) {
            $modifiedColumns[':p' . $index++]  = '`TABLEAU_BORD_SUPERVISION`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::STATISTIQUE_SUPERVISION)) {
            $modifiedColumns[':p' . $index++]  = '`STATISTIQUE_SUPERVISION`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::SUIVI_SUPERVISION)) {
            $modifiedColumns[':p' . $index++]  = '`SUIVI_SUPERVISION`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::FORCE_CLOTURE)) {
            $modifiedColumns[':p' . $index++]  = '`FORCE_CLOTURE`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::AFFECTER_GROUPE)) {
            $modifiedColumns[':p' . $index++]  = '`AFFECTER_GROUPE`';
        }
        if ($this->isColumnModified(ProfilAgentPeer::HISTORIQUE_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`HISTORIQUE_CONSULTATION`';
        }

        $sql = sprintf(
            'INSERT INTO `profil_agent` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID`':						
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case '`LIBELLE_PROFIL_AGENT`':						
                        $stmt->bindValue($identifier, $this->libelle_profil_agent, PDO::PARAM_STR);
                        break;
                    case '`ID_PROFIL`':						
                        $stmt->bindValue($identifier, $this->id_profil, PDO::PARAM_INT);
                        break;
                    case '`ID_ORGANISME`':						
                        $stmt->bindValue($identifier, $this->id_organisme, PDO::PARAM_INT);
                        break;
                    case '`MENU_MON_COMPTE`':						
                        $stmt->bindValue($identifier, $this->menu_mon_compte, PDO::PARAM_STR);
                        break;
                    case '`MENU_DEMANDE_NOUVELLES`':						
                        $stmt->bindValue($identifier, $this->menu_demande_nouvelles, PDO::PARAM_STR);
                        break;
                    case '`MENU_DEMANDE_RECHERCHE`':						
                        $stmt->bindValue($identifier, $this->menu_demande_recherche, PDO::PARAM_STR);
                        break;
                    case '`MENU_ADMIN`':						
                        $stmt->bindValue($identifier, $this->menu_admin, PDO::PARAM_STR);
                        break;
                    case '`MENU_ADMIN_SERVICES`':						
                        $stmt->bindValue($identifier, $this->menu_admin_services, PDO::PARAM_STR);
                        break;
                    case '`MENU_ADMIN_UTILISATEURS`':						
                        $stmt->bindValue($identifier, $this->menu_admin_utilisateurs, PDO::PARAM_STR);
                        break;
                    case '`MENU_RAPPORT`':						
                        $stmt->bindValue($identifier, $this->menu_rapport, PDO::PARAM_STR);
                        break;
                    case '`MENU_RAPPORT_MENSUEL`':						
                        $stmt->bindValue($identifier, $this->menu_rapport_mensuel, PDO::PARAM_STR);
                        break;
                    case '`MENU_RAPPORT_GLOBAL`':						
                        $stmt->bindValue($identifier, $this->menu_rapport_global, PDO::PARAM_STR);
                        break;
                    case '`MENU_RAPPORT_PERSONNALISE`':						
                        $stmt->bindValue($identifier, $this->menu_rapport_personnalise, PDO::PARAM_STR);
                        break;
                    case '`MENU_ADMIN_ENTITE_DEMANDEUR`':						
                        $stmt->bindValue($identifier, $this->menu_admin_entite_demandeur, PDO::PARAM_STR);
                        break;
                    case '`MENU_ADMIN_DEMANDEURS`':						
                        $stmt->bindValue($identifier, $this->menu_admin_demandeurs, PDO::PARAM_STR);
                        break;
                    case '`HISTORIQUE`':						
                        $stmt->bindValue($identifier, $this->historique, PDO::PARAM_STR);
                        break;
                    case '`MENU_DEMANDE_AFFECTEES_ENTITE`':						
                        $stmt->bindValue($identifier, $this->menu_demande_affectees_entite, PDO::PARAM_STR);
                        break;
                    case '`MENU_ADMIN_ENTITE`':						
                        $stmt->bindValue($identifier, $this->menu_admin_entite, PDO::PARAM_STR);
                        break;
                    case '`MENU_ADMIN_THEME`':						
                        $stmt->bindValue($identifier, $this->menu_admin_theme, PDO::PARAM_STR);
                        break;
                    case '`ETAT_PROFIL`':						
                        $stmt->bindValue($identifier, $this->etat_profil, PDO::PARAM_STR);
                        break;
                    case '`ACTION_AFFECTER_ENTITE`':						
                        $stmt->bindValue($identifier, $this->action_affecter_entite, PDO::PARAM_STR);
                        break;
                    case '`ACTION_AFFECTER_AGENT`':						
                        $stmt->bindValue($identifier, $this->action_affecter_agent, PDO::PARAM_STR);
                        break;
                    case '`SUPPRIMER_MODIFIIER_DEMANDE_ENTITE`':						
                        $stmt->bindValue($identifier, $this->supprimer_modifiier_demande_entite, PDO::PARAM_STR);
                        break;
                    case '`SUPPRIMER_MODIFIIER_ALL_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->supprimer_modifiier_all_demande, PDO::PARAM_STR);
                        break;
                    case '`TRAITER_TOUTE_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->traiter_toute_demande, PDO::PARAM_STR);
                        break;
                    case '`DATE_INDICATIVE_REPONSE`':						
                        $stmt->bindValue($identifier, $this->date_indicative_reponse, PDO::PARAM_STR);
                        break;
                    case '`MODIFIER_THEME`':						
                        $stmt->bindValue($identifier, $this->modifier_theme, PDO::PARAM_STR);
                        break;
                    case '`ACTION_RETOURNER_PRECEDENT`':						
                        $stmt->bindValue($identifier, $this->action_retourner_precedent, PDO::PARAM_STR);
                        break;
                    case '`ACTION_CLASSER_ERRONEE`':						
                        $stmt->bindValue($identifier, $this->action_classer_erronee, PDO::PARAM_STR);
                        break;
                    case '`ACTION_CLASSER_HA`':						
                        $stmt->bindValue($identifier, $this->action_classer_ha, PDO::PARAM_STR);
                        break;
                    case '`ACTION_SOUMETTRE_REPONSE_CIRCUIT`':						
                        $stmt->bindValue($identifier, $this->action_soumettre_reponse_circuit, PDO::PARAM_STR);
                        break;
                    case '`ACTION_TRANSMETTRE_REPONSE_REQ`':						
                        $stmt->bindValue($identifier, $this->action_transmettre_reponse_req, PDO::PARAM_STR);
                        break;
                    case '`ACTION_CLOTURER`':						
                        $stmt->bindValue($identifier, $this->action_cloturer, PDO::PARAM_STR);
                        break;
                    case '`SUIVRE_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->suivre_demande, PDO::PARAM_STR);
                        break;
                    case '`MENU_EN_PROPOSITION`':						
                        $stmt->bindValue($identifier, $this->menu_en_proposition, PDO::PARAM_STR);
                        break;
                    case '`LIBELLE_PROFIL_AGENT_AR`':						
                        $stmt->bindValue($identifier, $this->libelle_profil_agent_ar, PDO::PARAM_STR);
                        break;
                    case '`ACTION_PARTAGER_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->action_partager_demande, PDO::PARAM_STR);
                        break;
                    case '`MENU_DEMANDE_PARTAGEES_ENTITE`':						
                        $stmt->bindValue($identifier, $this->menu_demande_partagees_entite, PDO::PARAM_STR);
                        break;
                    case '`HABILITATION_GESTION_TACHE`':						
                        $stmt->bindValue($identifier, $this->habilitation_gestion_tache, PDO::PARAM_STR);
                        break;
                    case '`ACTION_AFFECTER_DEMANDE_CLOTURE`':						
                        $stmt->bindValue($identifier, $this->action_affecter_demande_cloture, PDO::PARAM_STR);
                        break;
                    case '`VISIBILITE_DEMANDE_RECU`':						
                        $stmt->bindValue($identifier, $this->visibilite_demande_recu, PDO::PARAM_STR);
                        break;
                    case '`MENU_MINISTERES`':						
                        $stmt->bindValue($identifier, $this->menu_ministeres, PDO::PARAM_STR);
                        break;
                    case '`DEMANDES_A_SUIVRE`':						
                        $stmt->bindValue($identifier, $this->demandes_a_suivre, PDO::PARAM_STR);
                        break;
                    case '`GESTION_INTERIM`':						
                        $stmt->bindValue($identifier, $this->gestion_interim, PDO::PARAM_STR);
                        break;
                    case '`AFFICHAGE_SIMPLIFIE`':						
                        $stmt->bindValue($identifier, $this->affichage_simplifie, PDO::PARAM_STR);
                        break;
                    case '`SUPPRIMER_TOUS`':						
                        $stmt->bindValue($identifier, $this->supprimer_tous, PDO::PARAM_STR);
                        break;
                    case '`AJOUT_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->ajout_demande, PDO::PARAM_STR);
                        break;
                    case '`TYPE_AJOUT_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->type_ajout_demande, PDO::PARAM_STR);
                        break;
                    case '`AJOUT_DEMANDE_ENTRANTE`':						
                        $stmt->bindValue($identifier, $this->ajout_demande_entrante, PDO::PARAM_STR);
                        break;
                    case '`AJOUT_DEMANDE_SORTANTE`':						
                        $stmt->bindValue($identifier, $this->ajout_demande_sortante, PDO::PARAM_STR);
                        break;
                    case '`AJOUT_DEMANDE_SORTANT`':						
                        $stmt->bindValue($identifier, $this->ajout_demande_sortant, PDO::PARAM_STR);
                        break;
                    case '`AJOUT_DEMANDE_INTERNE`':						
                        $stmt->bindValue($identifier, $this->ajout_demande_interne, PDO::PARAM_STR);
                        break;
                    case '`AJOUT_DEMANDE_INTRAGROUPE`':						
                        $stmt->bindValue($identifier, $this->ajout_demande_intragroupe, PDO::PARAM_STR);
                        break;
                    case '`MODIFICATION_CIRCUIT_VALIDATION_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->modification_circuit_validation_demande, PDO::PARAM_STR);
                        break;
                    case '`TRANSFERT_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->transfert_demande, PDO::PARAM_STR);
                        break;
                    case '`VISUALISER_ECHANGE`':						
                        $stmt->bindValue($identifier, $this->visualiser_echange, PDO::PARAM_STR);
                        break;
                    case '`CLOTURE_TRANSVERSE`':						
                        $stmt->bindValue($identifier, $this->cloture_transverse, PDO::PARAM_STR);
                        break;
                    case '`ECHANGE_HORS_SYS`':						
                        $stmt->bindValue($identifier, $this->echange_hors_sys, PDO::PARAM_STR);
                        break;
                    case '`ECHANGE_REQUERANT`':						
                        $stmt->bindValue($identifier, $this->echange_requerant, PDO::PARAM_STR);
                        break;
                    case '`AFFICHAGE_REPONSE_FINAL`':						
                        $stmt->bindValue($identifier, $this->affichage_reponse_final, PDO::PARAM_STR);
                        break;
                    case '`RETIRER_AFFECTATION`':						
                        $stmt->bindValue($identifier, $this->retirer_affectation, PDO::PARAM_STR);
                        break;
                    case '`AFFECTATION_EXTERNE`':						
                        $stmt->bindValue($identifier, $this->affectation_externe, PDO::PARAM_STR);
                        break;
                    case '`COMPLEMENT_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->complement_demande, PDO::PARAM_STR);
                        break;
                    case '`ENCOPIE_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->encopie_demande, PDO::PARAM_STR);
                        break;
                    case '`MODIFIER_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->modifier_demande, PDO::PARAM_STR);
                        break;
                    case '`SUPPRIMER_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->supprimer_demande, PDO::PARAM_STR);
                        break;
                    case '`VISIBILITE_MAIL_TEL_BO`':						
                        $stmt->bindValue($identifier, $this->visibilite_mail_tel_bo, PDO::PARAM_STR);
                        break;
                    case '`ACCES_AUDIO_CA`':						
                        $stmt->bindValue($identifier, $this->acces_audio_ca, PDO::PARAM_STR);
                        break;
                    case '`PROLONGER_DUREE_TRAITEMENT`':						
                        $stmt->bindValue($identifier, $this->prolonger_duree_traitement, PDO::PARAM_STR);
                        break;
                    case '`MODIF_DEMANDE_AFFECTE`':						
                        $stmt->bindValue($identifier, $this->modif_demande_affecte, PDO::PARAM_STR);
                        break;
                    case '`TABLEAU_BORD_SUPERVISION`':						
                        $stmt->bindValue($identifier, $this->tableau_bord_supervision, PDO::PARAM_STR);
                        break;
                    case '`STATISTIQUE_SUPERVISION`':						
                        $stmt->bindValue($identifier, $this->statistique_supervision, PDO::PARAM_STR);
                        break;
                    case '`SUIVI_SUPERVISION`':						
                        $stmt->bindValue($identifier, $this->suivi_supervision, PDO::PARAM_STR);
                        break;
                    case '`FORCE_CLOTURE`':						
                        $stmt->bindValue($identifier, $this->force_cloture, PDO::PARAM_STR);
                        break;
                    case '`AFFECTER_GROUPE`':						
                        $stmt->bindValue($identifier, $this->affecter_groupe, PDO::PARAM_STR);
                        break;
                    case '`HISTORIQUE_CONSULTATION`':						
                        $stmt->bindValue($identifier, $this->historique_consultation, PDO::PARAM_STR);
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


            if (($retval = ProfilAgentPeer::doValidate($this, $columns)) !== true) {
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
        $pos = ProfilAgentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getLibelleProfilAgent();
                break;
            case 2:
                return $this->getIdProfil();
                break;
            case 3:
                return $this->getIdOrganisme();
                break;
            case 4:
                return $this->getMenuMonCompte();
                break;
            case 5:
                return $this->getMenuDemandeNouvelles();
                break;
            case 6:
                return $this->getMenuDemandeRecherche();
                break;
            case 7:
                return $this->getMenuAdmin();
                break;
            case 8:
                return $this->getMenuAdminServices();
                break;
            case 9:
                return $this->getMenuAdminUtilisateurs();
                break;
            case 10:
                return $this->getMenuRapport();
                break;
            case 11:
                return $this->getMenuRapportMensuel();
                break;
            case 12:
                return $this->getMenuRapportGlobal();
                break;
            case 13:
                return $this->getMenuRapportPersonnalise();
                break;
            case 14:
                return $this->getMenuAdminEntiteDemandeur();
                break;
            case 15:
                return $this->getMenuAdminDemandeurs();
                break;
            case 16:
                return $this->getHistorique();
                break;
            case 17:
                return $this->getMenuDemandeAffecteesEntite();
                break;
            case 18:
                return $this->getMenuAdminEntite();
                break;
            case 19:
                return $this->getMenuAdminTheme();
                break;
            case 20:
                return $this->getEtatProfil();
                break;
            case 21:
                return $this->getActionAffecterEntite();
                break;
            case 22:
                return $this->getActionAffecterAgent();
                break;
            case 23:
                return $this->getSupprimerModifiierDemandeEntite();
                break;
            case 24:
                return $this->getSupprimerModifiierAllDemande();
                break;
            case 25:
                return $this->getTraiterTouteDemande();
                break;
            case 26:
                return $this->getDateIndicativeReponse();
                break;
            case 27:
                return $this->getModifierTheme();
                break;
            case 28:
                return $this->getActionRetournerPrecedent();
                break;
            case 29:
                return $this->getActionClasserErronee();
                break;
            case 30:
                return $this->getActionClasserHa();
                break;
            case 31:
                return $this->getActionSoumettreReponseCircuit();
                break;
            case 32:
                return $this->getActionTransmettreReponseReq();
                break;
            case 33:
                return $this->getActionCloturer();
                break;
            case 34:
                return $this->getSuivreDemande();
                break;
            case 35:
                return $this->getMenuEnProposition();
                break;
            case 36:
                return $this->getLibelleProfilAgentAr();
                break;
            case 37:
                return $this->getActionPartagerDemande();
                break;
            case 38:
                return $this->getMenuDemandePartageesEntite();
                break;
            case 39:
                return $this->getHabilitationGestionTache();
                break;
            case 40:
                return $this->getActionAffecterDemandeCloture();
                break;
            case 41:
                return $this->getVisibiliteDemandeRecu();
                break;
            case 42:
                return $this->getMenuMinisteres();
                break;
            case 43:
                return $this->getDemandesASuivre();
                break;
            case 44:
                return $this->getGestionInterim();
                break;
            case 45:
                return $this->getAffichageSimplifie();
                break;
            case 46:
                return $this->getSupprimerTous();
                break;
            case 47:
                return $this->getAjoutDemande();
                break;
            case 48:
                return $this->getTypeAjoutDemande();
                break;
            case 49:
                return $this->getAjoutDemandeEntrante();
                break;
            case 50:
                return $this->getAjoutDemandeSortante();
                break;
            case 51:
                return $this->getAjoutDemandeSortant();
                break;
            case 52:
                return $this->getAjoutDemandeInterne();
                break;
            case 53:
                return $this->getAjoutDemandeIntragroupe();
                break;
            case 54:
                return $this->getModificationCircuitValidationDemande();
                break;
            case 55:
                return $this->getTransfertDemande();
                break;
            case 56:
                return $this->getVisualiserEchange();
                break;
            case 57:
                return $this->getClotureTransverse();
                break;
            case 58:
                return $this->getEchangeHorsSys();
                break;
            case 59:
                return $this->getEchangeRequerant();
                break;
            case 60:
                return $this->getAffichageReponseFinal();
                break;
            case 61:
                return $this->getRetirerAffectation();
                break;
            case 62:
                return $this->getAffectationExterne();
                break;
            case 63:
                return $this->getComplementDemande();
                break;
            case 64:
                return $this->getEncopieDemande();
                break;
            case 65:
                return $this->getModifierDemande();
                break;
            case 66:
                return $this->getSupprimerDemande();
                break;
            case 67:
                return $this->getVisibiliteMailTelBo();
                break;
            case 68:
                return $this->getAccesAudioCa();
                break;
            case 69:
                return $this->getProlongerDureeTraitement();
                break;
            case 70:
                return $this->getModifDemandeAffecte();
                break;
            case 71:
                return $this->getTableauBordSupervision();
                break;
            case 72:
                return $this->getStatistiqueSupervision();
                break;
            case 73:
                return $this->getSuiviSupervision();
                break;
            case 74:
                return $this->getForceCloture();
                break;
            case 75:
                return $this->getAffecterGroupe();
                break;
            case 76:
                return $this->getHistoriqueConsultation();
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
        if (isset($alreadyDumpedObjects['ProfilAgent'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ProfilAgent'][$this->getPrimaryKey()] = true;
        $keys = ProfilAgentPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getLibelleProfilAgent(),
            $keys[2] => $this->getIdProfil(),
            $keys[3] => $this->getIdOrganisme(),
            $keys[4] => $this->getMenuMonCompte(),
            $keys[5] => $this->getMenuDemandeNouvelles(),
            $keys[6] => $this->getMenuDemandeRecherche(),
            $keys[7] => $this->getMenuAdmin(),
            $keys[8] => $this->getMenuAdminServices(),
            $keys[9] => $this->getMenuAdminUtilisateurs(),
            $keys[10] => $this->getMenuRapport(),
            $keys[11] => $this->getMenuRapportMensuel(),
            $keys[12] => $this->getMenuRapportGlobal(),
            $keys[13] => $this->getMenuRapportPersonnalise(),
            $keys[14] => $this->getMenuAdminEntiteDemandeur(),
            $keys[15] => $this->getMenuAdminDemandeurs(),
            $keys[16] => $this->getHistorique(),
            $keys[17] => $this->getMenuDemandeAffecteesEntite(),
            $keys[18] => $this->getMenuAdminEntite(),
            $keys[19] => $this->getMenuAdminTheme(),
            $keys[20] => $this->getEtatProfil(),
            $keys[21] => $this->getActionAffecterEntite(),
            $keys[22] => $this->getActionAffecterAgent(),
            $keys[23] => $this->getSupprimerModifiierDemandeEntite(),
            $keys[24] => $this->getSupprimerModifiierAllDemande(),
            $keys[25] => $this->getTraiterTouteDemande(),
            $keys[26] => $this->getDateIndicativeReponse(),
            $keys[27] => $this->getModifierTheme(),
            $keys[28] => $this->getActionRetournerPrecedent(),
            $keys[29] => $this->getActionClasserErronee(),
            $keys[30] => $this->getActionClasserHa(),
            $keys[31] => $this->getActionSoumettreReponseCircuit(),
            $keys[32] => $this->getActionTransmettreReponseReq(),
            $keys[33] => $this->getActionCloturer(),
            $keys[34] => $this->getSuivreDemande(),
            $keys[35] => $this->getMenuEnProposition(),
            $keys[36] => $this->getLibelleProfilAgentAr(),
            $keys[37] => $this->getActionPartagerDemande(),
            $keys[38] => $this->getMenuDemandePartageesEntite(),
            $keys[39] => $this->getHabilitationGestionTache(),
            $keys[40] => $this->getActionAffecterDemandeCloture(),
            $keys[41] => $this->getVisibiliteDemandeRecu(),
            $keys[42] => $this->getMenuMinisteres(),
            $keys[43] => $this->getDemandesASuivre(),
            $keys[44] => $this->getGestionInterim(),
            $keys[45] => $this->getAffichageSimplifie(),
            $keys[46] => $this->getSupprimerTous(),
            $keys[47] => $this->getAjoutDemande(),
            $keys[48] => $this->getTypeAjoutDemande(),
            $keys[49] => $this->getAjoutDemandeEntrante(),
            $keys[50] => $this->getAjoutDemandeSortante(),
            $keys[51] => $this->getAjoutDemandeSortant(),
            $keys[52] => $this->getAjoutDemandeInterne(),
            $keys[53] => $this->getAjoutDemandeIntragroupe(),
            $keys[54] => $this->getModificationCircuitValidationDemande(),
            $keys[55] => $this->getTransfertDemande(),
            $keys[56] => $this->getVisualiserEchange(),
            $keys[57] => $this->getClotureTransverse(),
            $keys[58] => $this->getEchangeHorsSys(),
            $keys[59] => $this->getEchangeRequerant(),
            $keys[60] => $this->getAffichageReponseFinal(),
            $keys[61] => $this->getRetirerAffectation(),
            $keys[62] => $this->getAffectationExterne(),
            $keys[63] => $this->getComplementDemande(),
            $keys[64] => $this->getEncopieDemande(),
            $keys[65] => $this->getModifierDemande(),
            $keys[66] => $this->getSupprimerDemande(),
            $keys[67] => $this->getVisibiliteMailTelBo(),
            $keys[68] => $this->getAccesAudioCa(),
            $keys[69] => $this->getProlongerDureeTraitement(),
            $keys[70] => $this->getModifDemandeAffecte(),
            $keys[71] => $this->getTableauBordSupervision(),
            $keys[72] => $this->getStatistiqueSupervision(),
            $keys[73] => $this->getSuiviSupervision(),
            $keys[74] => $this->getForceCloture(),
            $keys[75] => $this->getAffecterGroupe(),
            $keys[76] => $this->getHistoriqueConsultation(),
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
        $pos = ProfilAgentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setLibelleProfilAgent($value);
                break;
            case 2:
                $this->setIdProfil($value);
                break;
            case 3:
                $this->setIdOrganisme($value);
                break;
            case 4:
                $this->setMenuMonCompte($value);
                break;
            case 5:
                $this->setMenuDemandeNouvelles($value);
                break;
            case 6:
                $this->setMenuDemandeRecherche($value);
                break;
            case 7:
                $this->setMenuAdmin($value);
                break;
            case 8:
                $this->setMenuAdminServices($value);
                break;
            case 9:
                $this->setMenuAdminUtilisateurs($value);
                break;
            case 10:
                $this->setMenuRapport($value);
                break;
            case 11:
                $this->setMenuRapportMensuel($value);
                break;
            case 12:
                $this->setMenuRapportGlobal($value);
                break;
            case 13:
                $this->setMenuRapportPersonnalise($value);
                break;
            case 14:
                $this->setMenuAdminEntiteDemandeur($value);
                break;
            case 15:
                $this->setMenuAdminDemandeurs($value);
                break;
            case 16:
                $this->setHistorique($value);
                break;
            case 17:
                $this->setMenuDemandeAffecteesEntite($value);
                break;
            case 18:
                $this->setMenuAdminEntite($value);
                break;
            case 19:
                $this->setMenuAdminTheme($value);
                break;
            case 20:
                $this->setEtatProfil($value);
                break;
            case 21:
                $this->setActionAffecterEntite($value);
                break;
            case 22:
                $this->setActionAffecterAgent($value);
                break;
            case 23:
                $this->setSupprimerModifiierDemandeEntite($value);
                break;
            case 24:
                $this->setSupprimerModifiierAllDemande($value);
                break;
            case 25:
                $this->setTraiterTouteDemande($value);
                break;
            case 26:
                $this->setDateIndicativeReponse($value);
                break;
            case 27:
                $this->setModifierTheme($value);
                break;
            case 28:
                $this->setActionRetournerPrecedent($value);
                break;
            case 29:
                $this->setActionClasserErronee($value);
                break;
            case 30:
                $this->setActionClasserHa($value);
                break;
            case 31:
                $this->setActionSoumettreReponseCircuit($value);
                break;
            case 32:
                $this->setActionTransmettreReponseReq($value);
                break;
            case 33:
                $this->setActionCloturer($value);
                break;
            case 34:
                $this->setSuivreDemande($value);
                break;
            case 35:
                $this->setMenuEnProposition($value);
                break;
            case 36:
                $this->setLibelleProfilAgentAr($value);
                break;
            case 37:
                $this->setActionPartagerDemande($value);
                break;
            case 38:
                $this->setMenuDemandePartageesEntite($value);
                break;
            case 39:
                $this->setHabilitationGestionTache($value);
                break;
            case 40:
                $this->setActionAffecterDemandeCloture($value);
                break;
            case 41:
                $this->setVisibiliteDemandeRecu($value);
                break;
            case 42:
                $this->setMenuMinisteres($value);
                break;
            case 43:
                $this->setDemandesASuivre($value);
                break;
            case 44:
                $this->setGestionInterim($value);
                break;
            case 45:
                $this->setAffichageSimplifie($value);
                break;
            case 46:
                $this->setSupprimerTous($value);
                break;
            case 47:
                $this->setAjoutDemande($value);
                break;
            case 48:
                $this->setTypeAjoutDemande($value);
                break;
            case 49:
                $this->setAjoutDemandeEntrante($value);
                break;
            case 50:
                $this->setAjoutDemandeSortante($value);
                break;
            case 51:
                $this->setAjoutDemandeSortant($value);
                break;
            case 52:
                $this->setAjoutDemandeInterne($value);
                break;
            case 53:
                $this->setAjoutDemandeIntragroupe($value);
                break;
            case 54:
                $this->setModificationCircuitValidationDemande($value);
                break;
            case 55:
                $this->setTransfertDemande($value);
                break;
            case 56:
                $this->setVisualiserEchange($value);
                break;
            case 57:
                $this->setClotureTransverse($value);
                break;
            case 58:
                $this->setEchangeHorsSys($value);
                break;
            case 59:
                $this->setEchangeRequerant($value);
                break;
            case 60:
                $this->setAffichageReponseFinal($value);
                break;
            case 61:
                $this->setRetirerAffectation($value);
                break;
            case 62:
                $this->setAffectationExterne($value);
                break;
            case 63:
                $this->setComplementDemande($value);
                break;
            case 64:
                $this->setEncopieDemande($value);
                break;
            case 65:
                $this->setModifierDemande($value);
                break;
            case 66:
                $this->setSupprimerDemande($value);
                break;
            case 67:
                $this->setVisibiliteMailTelBo($value);
                break;
            case 68:
                $this->setAccesAudioCa($value);
                break;
            case 69:
                $this->setProlongerDureeTraitement($value);
                break;
            case 70:
                $this->setModifDemandeAffecte($value);
                break;
            case 71:
                $this->setTableauBordSupervision($value);
                break;
            case 72:
                $this->setStatistiqueSupervision($value);
                break;
            case 73:
                $this->setSuiviSupervision($value);
                break;
            case 74:
                $this->setForceCloture($value);
                break;
            case 75:
                $this->setAffecterGroupe($value);
                break;
            case 76:
                $this->setHistoriqueConsultation($value);
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
        $keys = ProfilAgentPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setLibelleProfilAgent($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdProfil($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdOrganisme($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setMenuMonCompte($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setMenuDemandeNouvelles($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setMenuDemandeRecherche($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setMenuAdmin($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setMenuAdminServices($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setMenuAdminUtilisateurs($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setMenuRapport($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setMenuRapportMensuel($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setMenuRapportGlobal($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setMenuRapportPersonnalise($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setMenuAdminEntiteDemandeur($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setMenuAdminDemandeurs($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setHistorique($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setMenuDemandeAffecteesEntite($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setMenuAdminEntite($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setMenuAdminTheme($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setEtatProfil($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setActionAffecterEntite($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setActionAffecterAgent($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setSupprimerModifiierDemandeEntite($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setSupprimerModifiierAllDemande($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setTraiterTouteDemande($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setDateIndicativeReponse($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setModifierTheme($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setActionRetournerPrecedent($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setActionClasserErronee($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setActionClasserHa($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setActionSoumettreReponseCircuit($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setActionTransmettreReponseReq($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setActionCloturer($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setSuivreDemande($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setMenuEnProposition($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setLibelleProfilAgentAr($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setActionPartagerDemande($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setMenuDemandePartageesEntite($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setHabilitationGestionTache($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setActionAffecterDemandeCloture($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setVisibiliteDemandeRecu($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setMenuMinisteres($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setDemandesASuivre($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setGestionInterim($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setAffichageSimplifie($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setSupprimerTous($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setAjoutDemande($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setTypeAjoutDemande($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setAjoutDemandeEntrante($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setAjoutDemandeSortante($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setAjoutDemandeSortant($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setAjoutDemandeInterne($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setAjoutDemandeIntragroupe($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setModificationCircuitValidationDemande($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setTransfertDemande($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setVisualiserEchange($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setClotureTransverse($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setEchangeHorsSys($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setEchangeRequerant($arr[$keys[59]]);
        if (array_key_exists($keys[60], $arr)) $this->setAffichageReponseFinal($arr[$keys[60]]);
        if (array_key_exists($keys[61], $arr)) $this->setRetirerAffectation($arr[$keys[61]]);
        if (array_key_exists($keys[62], $arr)) $this->setAffectationExterne($arr[$keys[62]]);
        if (array_key_exists($keys[63], $arr)) $this->setComplementDemande($arr[$keys[63]]);
        if (array_key_exists($keys[64], $arr)) $this->setEncopieDemande($arr[$keys[64]]);
        if (array_key_exists($keys[65], $arr)) $this->setModifierDemande($arr[$keys[65]]);
        if (array_key_exists($keys[66], $arr)) $this->setSupprimerDemande($arr[$keys[66]]);
        if (array_key_exists($keys[67], $arr)) $this->setVisibiliteMailTelBo($arr[$keys[67]]);
        if (array_key_exists($keys[68], $arr)) $this->setAccesAudioCa($arr[$keys[68]]);
        if (array_key_exists($keys[69], $arr)) $this->setProlongerDureeTraitement($arr[$keys[69]]);
        if (array_key_exists($keys[70], $arr)) $this->setModifDemandeAffecte($arr[$keys[70]]);
        if (array_key_exists($keys[71], $arr)) $this->setTableauBordSupervision($arr[$keys[71]]);
        if (array_key_exists($keys[72], $arr)) $this->setStatistiqueSupervision($arr[$keys[72]]);
        if (array_key_exists($keys[73], $arr)) $this->setSuiviSupervision($arr[$keys[73]]);
        if (array_key_exists($keys[74], $arr)) $this->setForceCloture($arr[$keys[74]]);
        if (array_key_exists($keys[75], $arr)) $this->setAffecterGroupe($arr[$keys[75]]);
        if (array_key_exists($keys[76], $arr)) $this->setHistoriqueConsultation($arr[$keys[76]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ProfilAgentPeer::DATABASE_NAME);

        if ($this->isColumnModified(ProfilAgentPeer::ID)) $criteria->add(ProfilAgentPeer::ID, $this->id);
        if ($this->isColumnModified(ProfilAgentPeer::LIBELLE_PROFIL_AGENT)) $criteria->add(ProfilAgentPeer::LIBELLE_PROFIL_AGENT, $this->libelle_profil_agent);
        if ($this->isColumnModified(ProfilAgentPeer::ID_PROFIL)) $criteria->add(ProfilAgentPeer::ID_PROFIL, $this->id_profil);
        if ($this->isColumnModified(ProfilAgentPeer::ID_ORGANISME)) $criteria->add(ProfilAgentPeer::ID_ORGANISME, $this->id_organisme);
        if ($this->isColumnModified(ProfilAgentPeer::MENU_MON_COMPTE)) $criteria->add(ProfilAgentPeer::MENU_MON_COMPTE, $this->menu_mon_compte);
        if ($this->isColumnModified(ProfilAgentPeer::MENU_DEMANDE_NOUVELLES)) $criteria->add(ProfilAgentPeer::MENU_DEMANDE_NOUVELLES, $this->menu_demande_nouvelles);
        if ($this->isColumnModified(ProfilAgentPeer::MENU_DEMANDE_RECHERCHE)) $criteria->add(ProfilAgentPeer::MENU_DEMANDE_RECHERCHE, $this->menu_demande_recherche);
        if ($this->isColumnModified(ProfilAgentPeer::MENU_ADMIN)) $criteria->add(ProfilAgentPeer::MENU_ADMIN, $this->menu_admin);
        if ($this->isColumnModified(ProfilAgentPeer::MENU_ADMIN_SERVICES)) $criteria->add(ProfilAgentPeer::MENU_ADMIN_SERVICES, $this->menu_admin_services);
        if ($this->isColumnModified(ProfilAgentPeer::MENU_ADMIN_UTILISATEURS)) $criteria->add(ProfilAgentPeer::MENU_ADMIN_UTILISATEURS, $this->menu_admin_utilisateurs);
        if ($this->isColumnModified(ProfilAgentPeer::MENU_RAPPORT)) $criteria->add(ProfilAgentPeer::MENU_RAPPORT, $this->menu_rapport);
        if ($this->isColumnModified(ProfilAgentPeer::MENU_RAPPORT_MENSUEL)) $criteria->add(ProfilAgentPeer::MENU_RAPPORT_MENSUEL, $this->menu_rapport_mensuel);
        if ($this->isColumnModified(ProfilAgentPeer::MENU_RAPPORT_GLOBAL)) $criteria->add(ProfilAgentPeer::MENU_RAPPORT_GLOBAL, $this->menu_rapport_global);
        if ($this->isColumnModified(ProfilAgentPeer::MENU_RAPPORT_PERSONNALISE)) $criteria->add(ProfilAgentPeer::MENU_RAPPORT_PERSONNALISE, $this->menu_rapport_personnalise);
        if ($this->isColumnModified(ProfilAgentPeer::MENU_ADMIN_ENTITE_DEMANDEUR)) $criteria->add(ProfilAgentPeer::MENU_ADMIN_ENTITE_DEMANDEUR, $this->menu_admin_entite_demandeur);
        if ($this->isColumnModified(ProfilAgentPeer::MENU_ADMIN_DEMANDEURS)) $criteria->add(ProfilAgentPeer::MENU_ADMIN_DEMANDEURS, $this->menu_admin_demandeurs);
        if ($this->isColumnModified(ProfilAgentPeer::HISTORIQUE)) $criteria->add(ProfilAgentPeer::HISTORIQUE, $this->historique);
        if ($this->isColumnModified(ProfilAgentPeer::MENU_DEMANDE_AFFECTEES_ENTITE)) $criteria->add(ProfilAgentPeer::MENU_DEMANDE_AFFECTEES_ENTITE, $this->menu_demande_affectees_entite);
        if ($this->isColumnModified(ProfilAgentPeer::MENU_ADMIN_ENTITE)) $criteria->add(ProfilAgentPeer::MENU_ADMIN_ENTITE, $this->menu_admin_entite);
        if ($this->isColumnModified(ProfilAgentPeer::MENU_ADMIN_THEME)) $criteria->add(ProfilAgentPeer::MENU_ADMIN_THEME, $this->menu_admin_theme);
        if ($this->isColumnModified(ProfilAgentPeer::ETAT_PROFIL)) $criteria->add(ProfilAgentPeer::ETAT_PROFIL, $this->etat_profil);
        if ($this->isColumnModified(ProfilAgentPeer::ACTION_AFFECTER_ENTITE)) $criteria->add(ProfilAgentPeer::ACTION_AFFECTER_ENTITE, $this->action_affecter_entite);
        if ($this->isColumnModified(ProfilAgentPeer::ACTION_AFFECTER_AGENT)) $criteria->add(ProfilAgentPeer::ACTION_AFFECTER_AGENT, $this->action_affecter_agent);
        if ($this->isColumnModified(ProfilAgentPeer::SUPPRIMER_MODIFIIER_DEMANDE_ENTITE)) $criteria->add(ProfilAgentPeer::SUPPRIMER_MODIFIIER_DEMANDE_ENTITE, $this->supprimer_modifiier_demande_entite);
        if ($this->isColumnModified(ProfilAgentPeer::SUPPRIMER_MODIFIIER_ALL_DEMANDE)) $criteria->add(ProfilAgentPeer::SUPPRIMER_MODIFIIER_ALL_DEMANDE, $this->supprimer_modifiier_all_demande);
        if ($this->isColumnModified(ProfilAgentPeer::TRAITER_TOUTE_DEMANDE)) $criteria->add(ProfilAgentPeer::TRAITER_TOUTE_DEMANDE, $this->traiter_toute_demande);
        if ($this->isColumnModified(ProfilAgentPeer::DATE_INDICATIVE_REPONSE)) $criteria->add(ProfilAgentPeer::DATE_INDICATIVE_REPONSE, $this->date_indicative_reponse);
        if ($this->isColumnModified(ProfilAgentPeer::MODIFIER_THEME)) $criteria->add(ProfilAgentPeer::MODIFIER_THEME, $this->modifier_theme);
        if ($this->isColumnModified(ProfilAgentPeer::ACTION_RETOURNER_PRECEDENT)) $criteria->add(ProfilAgentPeer::ACTION_RETOURNER_PRECEDENT, $this->action_retourner_precedent);
        if ($this->isColumnModified(ProfilAgentPeer::ACTION_CLASSER_ERRONEE)) $criteria->add(ProfilAgentPeer::ACTION_CLASSER_ERRONEE, $this->action_classer_erronee);
        if ($this->isColumnModified(ProfilAgentPeer::ACTION_CLASSER_HA)) $criteria->add(ProfilAgentPeer::ACTION_CLASSER_HA, $this->action_classer_ha);
        if ($this->isColumnModified(ProfilAgentPeer::ACTION_SOUMETTRE_REPONSE_CIRCUIT)) $criteria->add(ProfilAgentPeer::ACTION_SOUMETTRE_REPONSE_CIRCUIT, $this->action_soumettre_reponse_circuit);
        if ($this->isColumnModified(ProfilAgentPeer::ACTION_TRANSMETTRE_REPONSE_REQ)) $criteria->add(ProfilAgentPeer::ACTION_TRANSMETTRE_REPONSE_REQ, $this->action_transmettre_reponse_req);
        if ($this->isColumnModified(ProfilAgentPeer::ACTION_CLOTURER)) $criteria->add(ProfilAgentPeer::ACTION_CLOTURER, $this->action_cloturer);
        if ($this->isColumnModified(ProfilAgentPeer::SUIVRE_DEMANDE)) $criteria->add(ProfilAgentPeer::SUIVRE_DEMANDE, $this->suivre_demande);
        if ($this->isColumnModified(ProfilAgentPeer::MENU_EN_PROPOSITION)) $criteria->add(ProfilAgentPeer::MENU_EN_PROPOSITION, $this->menu_en_proposition);
        if ($this->isColumnModified(ProfilAgentPeer::LIBELLE_PROFIL_AGENT_AR)) $criteria->add(ProfilAgentPeer::LIBELLE_PROFIL_AGENT_AR, $this->libelle_profil_agent_ar);
        if ($this->isColumnModified(ProfilAgentPeer::ACTION_PARTAGER_DEMANDE)) $criteria->add(ProfilAgentPeer::ACTION_PARTAGER_DEMANDE, $this->action_partager_demande);
        if ($this->isColumnModified(ProfilAgentPeer::MENU_DEMANDE_PARTAGEES_ENTITE)) $criteria->add(ProfilAgentPeer::MENU_DEMANDE_PARTAGEES_ENTITE, $this->menu_demande_partagees_entite);
        if ($this->isColumnModified(ProfilAgentPeer::HABILITATION_GESTION_TACHE)) $criteria->add(ProfilAgentPeer::HABILITATION_GESTION_TACHE, $this->habilitation_gestion_tache);
        if ($this->isColumnModified(ProfilAgentPeer::ACTION_AFFECTER_DEMANDE_CLOTURE)) $criteria->add(ProfilAgentPeer::ACTION_AFFECTER_DEMANDE_CLOTURE, $this->action_affecter_demande_cloture);
        if ($this->isColumnModified(ProfilAgentPeer::VISIBILITE_DEMANDE_RECU)) $criteria->add(ProfilAgentPeer::VISIBILITE_DEMANDE_RECU, $this->visibilite_demande_recu);
        if ($this->isColumnModified(ProfilAgentPeer::MENU_MINISTERES)) $criteria->add(ProfilAgentPeer::MENU_MINISTERES, $this->menu_ministeres);
        if ($this->isColumnModified(ProfilAgentPeer::DEMANDES_A_SUIVRE)) $criteria->add(ProfilAgentPeer::DEMANDES_A_SUIVRE, $this->demandes_a_suivre);
        if ($this->isColumnModified(ProfilAgentPeer::GESTION_INTERIM)) $criteria->add(ProfilAgentPeer::GESTION_INTERIM, $this->gestion_interim);
        if ($this->isColumnModified(ProfilAgentPeer::AFFICHAGE_SIMPLIFIE)) $criteria->add(ProfilAgentPeer::AFFICHAGE_SIMPLIFIE, $this->affichage_simplifie);
        if ($this->isColumnModified(ProfilAgentPeer::SUPPRIMER_TOUS)) $criteria->add(ProfilAgentPeer::SUPPRIMER_TOUS, $this->supprimer_tous);
        if ($this->isColumnModified(ProfilAgentPeer::AJOUT_DEMANDE)) $criteria->add(ProfilAgentPeer::AJOUT_DEMANDE, $this->ajout_demande);
        if ($this->isColumnModified(ProfilAgentPeer::TYPE_AJOUT_DEMANDE)) $criteria->add(ProfilAgentPeer::TYPE_AJOUT_DEMANDE, $this->type_ajout_demande);
        if ($this->isColumnModified(ProfilAgentPeer::AJOUT_DEMANDE_ENTRANTE)) $criteria->add(ProfilAgentPeer::AJOUT_DEMANDE_ENTRANTE, $this->ajout_demande_entrante);
        if ($this->isColumnModified(ProfilAgentPeer::AJOUT_DEMANDE_SORTANTE)) $criteria->add(ProfilAgentPeer::AJOUT_DEMANDE_SORTANTE, $this->ajout_demande_sortante);
        if ($this->isColumnModified(ProfilAgentPeer::AJOUT_DEMANDE_SORTANT)) $criteria->add(ProfilAgentPeer::AJOUT_DEMANDE_SORTANT, $this->ajout_demande_sortant);
        if ($this->isColumnModified(ProfilAgentPeer::AJOUT_DEMANDE_INTERNE)) $criteria->add(ProfilAgentPeer::AJOUT_DEMANDE_INTERNE, $this->ajout_demande_interne);
        if ($this->isColumnModified(ProfilAgentPeer::AJOUT_DEMANDE_INTRAGROUPE)) $criteria->add(ProfilAgentPeer::AJOUT_DEMANDE_INTRAGROUPE, $this->ajout_demande_intragroupe);
        if ($this->isColumnModified(ProfilAgentPeer::MODIFICATION_CIRCUIT_VALIDATION_DEMANDE)) $criteria->add(ProfilAgentPeer::MODIFICATION_CIRCUIT_VALIDATION_DEMANDE, $this->modification_circuit_validation_demande);
        if ($this->isColumnModified(ProfilAgentPeer::TRANSFERT_DEMANDE)) $criteria->add(ProfilAgentPeer::TRANSFERT_DEMANDE, $this->transfert_demande);
        if ($this->isColumnModified(ProfilAgentPeer::VISUALISER_ECHANGE)) $criteria->add(ProfilAgentPeer::VISUALISER_ECHANGE, $this->visualiser_echange);
        if ($this->isColumnModified(ProfilAgentPeer::CLOTURE_TRANSVERSE)) $criteria->add(ProfilAgentPeer::CLOTURE_TRANSVERSE, $this->cloture_transverse);
        if ($this->isColumnModified(ProfilAgentPeer::ECHANGE_HORS_SYS)) $criteria->add(ProfilAgentPeer::ECHANGE_HORS_SYS, $this->echange_hors_sys);
        if ($this->isColumnModified(ProfilAgentPeer::ECHANGE_REQUERANT)) $criteria->add(ProfilAgentPeer::ECHANGE_REQUERANT, $this->echange_requerant);
        if ($this->isColumnModified(ProfilAgentPeer::AFFICHAGE_REPONSE_FINAL)) $criteria->add(ProfilAgentPeer::AFFICHAGE_REPONSE_FINAL, $this->affichage_reponse_final);
        if ($this->isColumnModified(ProfilAgentPeer::RETIRER_AFFECTATION)) $criteria->add(ProfilAgentPeer::RETIRER_AFFECTATION, $this->retirer_affectation);
        if ($this->isColumnModified(ProfilAgentPeer::AFFECTATION_EXTERNE)) $criteria->add(ProfilAgentPeer::AFFECTATION_EXTERNE, $this->affectation_externe);
        if ($this->isColumnModified(ProfilAgentPeer::COMPLEMENT_DEMANDE)) $criteria->add(ProfilAgentPeer::COMPLEMENT_DEMANDE, $this->complement_demande);
        if ($this->isColumnModified(ProfilAgentPeer::ENCOPIE_DEMANDE)) $criteria->add(ProfilAgentPeer::ENCOPIE_DEMANDE, $this->encopie_demande);
        if ($this->isColumnModified(ProfilAgentPeer::MODIFIER_DEMANDE)) $criteria->add(ProfilAgentPeer::MODIFIER_DEMANDE, $this->modifier_demande);
        if ($this->isColumnModified(ProfilAgentPeer::SUPPRIMER_DEMANDE)) $criteria->add(ProfilAgentPeer::SUPPRIMER_DEMANDE, $this->supprimer_demande);
        if ($this->isColumnModified(ProfilAgentPeer::VISIBILITE_MAIL_TEL_BO)) $criteria->add(ProfilAgentPeer::VISIBILITE_MAIL_TEL_BO, $this->visibilite_mail_tel_bo);
        if ($this->isColumnModified(ProfilAgentPeer::ACCES_AUDIO_CA)) $criteria->add(ProfilAgentPeer::ACCES_AUDIO_CA, $this->acces_audio_ca);
        if ($this->isColumnModified(ProfilAgentPeer::PROLONGER_DUREE_TRAITEMENT)) $criteria->add(ProfilAgentPeer::PROLONGER_DUREE_TRAITEMENT, $this->prolonger_duree_traitement);
        if ($this->isColumnModified(ProfilAgentPeer::MODIF_DEMANDE_AFFECTE)) $criteria->add(ProfilAgentPeer::MODIF_DEMANDE_AFFECTE, $this->modif_demande_affecte);
        if ($this->isColumnModified(ProfilAgentPeer::TABLEAU_BORD_SUPERVISION)) $criteria->add(ProfilAgentPeer::TABLEAU_BORD_SUPERVISION, $this->tableau_bord_supervision);
        if ($this->isColumnModified(ProfilAgentPeer::STATISTIQUE_SUPERVISION)) $criteria->add(ProfilAgentPeer::STATISTIQUE_SUPERVISION, $this->statistique_supervision);
        if ($this->isColumnModified(ProfilAgentPeer::SUIVI_SUPERVISION)) $criteria->add(ProfilAgentPeer::SUIVI_SUPERVISION, $this->suivi_supervision);
        if ($this->isColumnModified(ProfilAgentPeer::FORCE_CLOTURE)) $criteria->add(ProfilAgentPeer::FORCE_CLOTURE, $this->force_cloture);
        if ($this->isColumnModified(ProfilAgentPeer::AFFECTER_GROUPE)) $criteria->add(ProfilAgentPeer::AFFECTER_GROUPE, $this->affecter_groupe);
        if ($this->isColumnModified(ProfilAgentPeer::HISTORIQUE_CONSULTATION)) $criteria->add(ProfilAgentPeer::HISTORIQUE_CONSULTATION, $this->historique_consultation);

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
        $criteria = new Criteria(ProfilAgentPeer::DATABASE_NAME);
        $criteria->add(ProfilAgentPeer::ID, $this->id);

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
     * @param object $copyObj An object of ProfilAgent (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setLibelleProfilAgent($this->getLibelleProfilAgent());
        $copyObj->setIdProfil($this->getIdProfil());
        $copyObj->setIdOrganisme($this->getIdOrganisme());
        $copyObj->setMenuMonCompte($this->getMenuMonCompte());
        $copyObj->setMenuDemandeNouvelles($this->getMenuDemandeNouvelles());
        $copyObj->setMenuDemandeRecherche($this->getMenuDemandeRecherche());
        $copyObj->setMenuAdmin($this->getMenuAdmin());
        $copyObj->setMenuAdminServices($this->getMenuAdminServices());
        $copyObj->setMenuAdminUtilisateurs($this->getMenuAdminUtilisateurs());
        $copyObj->setMenuRapport($this->getMenuRapport());
        $copyObj->setMenuRapportMensuel($this->getMenuRapportMensuel());
        $copyObj->setMenuRapportGlobal($this->getMenuRapportGlobal());
        $copyObj->setMenuRapportPersonnalise($this->getMenuRapportPersonnalise());
        $copyObj->setMenuAdminEntiteDemandeur($this->getMenuAdminEntiteDemandeur());
        $copyObj->setMenuAdminDemandeurs($this->getMenuAdminDemandeurs());
        $copyObj->setHistorique($this->getHistorique());
        $copyObj->setMenuDemandeAffecteesEntite($this->getMenuDemandeAffecteesEntite());
        $copyObj->setMenuAdminEntite($this->getMenuAdminEntite());
        $copyObj->setMenuAdminTheme($this->getMenuAdminTheme());
        $copyObj->setEtatProfil($this->getEtatProfil());
        $copyObj->setActionAffecterEntite($this->getActionAffecterEntite());
        $copyObj->setActionAffecterAgent($this->getActionAffecterAgent());
        $copyObj->setSupprimerModifiierDemandeEntite($this->getSupprimerModifiierDemandeEntite());
        $copyObj->setSupprimerModifiierAllDemande($this->getSupprimerModifiierAllDemande());
        $copyObj->setTraiterTouteDemande($this->getTraiterTouteDemande());
        $copyObj->setDateIndicativeReponse($this->getDateIndicativeReponse());
        $copyObj->setModifierTheme($this->getModifierTheme());
        $copyObj->setActionRetournerPrecedent($this->getActionRetournerPrecedent());
        $copyObj->setActionClasserErronee($this->getActionClasserErronee());
        $copyObj->setActionClasserHa($this->getActionClasserHa());
        $copyObj->setActionSoumettreReponseCircuit($this->getActionSoumettreReponseCircuit());
        $copyObj->setActionTransmettreReponseReq($this->getActionTransmettreReponseReq());
        $copyObj->setActionCloturer($this->getActionCloturer());
        $copyObj->setSuivreDemande($this->getSuivreDemande());
        $copyObj->setMenuEnProposition($this->getMenuEnProposition());
        $copyObj->setLibelleProfilAgentAr($this->getLibelleProfilAgentAr());
        $copyObj->setActionPartagerDemande($this->getActionPartagerDemande());
        $copyObj->setMenuDemandePartageesEntite($this->getMenuDemandePartageesEntite());
        $copyObj->setHabilitationGestionTache($this->getHabilitationGestionTache());
        $copyObj->setActionAffecterDemandeCloture($this->getActionAffecterDemandeCloture());
        $copyObj->setVisibiliteDemandeRecu($this->getVisibiliteDemandeRecu());
        $copyObj->setMenuMinisteres($this->getMenuMinisteres());
        $copyObj->setDemandesASuivre($this->getDemandesASuivre());
        $copyObj->setGestionInterim($this->getGestionInterim());
        $copyObj->setAffichageSimplifie($this->getAffichageSimplifie());
        $copyObj->setSupprimerTous($this->getSupprimerTous());
        $copyObj->setAjoutDemande($this->getAjoutDemande());
        $copyObj->setTypeAjoutDemande($this->getTypeAjoutDemande());
        $copyObj->setAjoutDemandeEntrante($this->getAjoutDemandeEntrante());
        $copyObj->setAjoutDemandeSortante($this->getAjoutDemandeSortante());
        $copyObj->setAjoutDemandeSortant($this->getAjoutDemandeSortant());
        $copyObj->setAjoutDemandeInterne($this->getAjoutDemandeInterne());
        $copyObj->setAjoutDemandeIntragroupe($this->getAjoutDemandeIntragroupe());
        $copyObj->setModificationCircuitValidationDemande($this->getModificationCircuitValidationDemande());
        $copyObj->setTransfertDemande($this->getTransfertDemande());
        $copyObj->setVisualiserEchange($this->getVisualiserEchange());
        $copyObj->setClotureTransverse($this->getClotureTransverse());
        $copyObj->setEchangeHorsSys($this->getEchangeHorsSys());
        $copyObj->setEchangeRequerant($this->getEchangeRequerant());
        $copyObj->setAffichageReponseFinal($this->getAffichageReponseFinal());
        $copyObj->setRetirerAffectation($this->getRetirerAffectation());
        $copyObj->setAffectationExterne($this->getAffectationExterne());
        $copyObj->setComplementDemande($this->getComplementDemande());
        $copyObj->setEncopieDemande($this->getEncopieDemande());
        $copyObj->setModifierDemande($this->getModifierDemande());
        $copyObj->setSupprimerDemande($this->getSupprimerDemande());
        $copyObj->setVisibiliteMailTelBo($this->getVisibiliteMailTelBo());
        $copyObj->setAccesAudioCa($this->getAccesAudioCa());
        $copyObj->setProlongerDureeTraitement($this->getProlongerDureeTraitement());
        $copyObj->setModifDemandeAffecte($this->getModifDemandeAffecte());
        $copyObj->setTableauBordSupervision($this->getTableauBordSupervision());
        $copyObj->setStatistiqueSupervision($this->getStatistiqueSupervision());
        $copyObj->setSuiviSupervision($this->getSuiviSupervision());
        $copyObj->setForceCloture($this->getForceCloture());
        $copyObj->setAffecterGroupe($this->getAffecterGroupe());
        $copyObj->setHistoriqueConsultation($this->getHistoriqueConsultation());
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
     * @return ProfilAgent Clone of current object.
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
     * @return ProfilAgentPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ProfilAgentPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->libelle_profil_agent = null;
        $this->id_profil = null;
        $this->id_organisme = null;
        $this->menu_mon_compte = null;
        $this->menu_demande_nouvelles = null;
        $this->menu_demande_recherche = null;
        $this->menu_admin = null;
        $this->menu_admin_services = null;
        $this->menu_admin_utilisateurs = null;
        $this->menu_rapport = null;
        $this->menu_rapport_mensuel = null;
        $this->menu_rapport_global = null;
        $this->menu_rapport_personnalise = null;
        $this->menu_admin_entite_demandeur = null;
        $this->menu_admin_demandeurs = null;
        $this->historique = null;
        $this->menu_demande_affectees_entite = null;
        $this->menu_admin_entite = null;
        $this->menu_admin_theme = null;
        $this->etat_profil = null;
        $this->action_affecter_entite = null;
        $this->action_affecter_agent = null;
        $this->supprimer_modifiier_demande_entite = null;
        $this->supprimer_modifiier_all_demande = null;
        $this->traiter_toute_demande = null;
        $this->date_indicative_reponse = null;
        $this->modifier_theme = null;
        $this->action_retourner_precedent = null;
        $this->action_classer_erronee = null;
        $this->action_classer_ha = null;
        $this->action_soumettre_reponse_circuit = null;
        $this->action_transmettre_reponse_req = null;
        $this->action_cloturer = null;
        $this->suivre_demande = null;
        $this->menu_en_proposition = null;
        $this->libelle_profil_agent_ar = null;
        $this->action_partager_demande = null;
        $this->menu_demande_partagees_entite = null;
        $this->habilitation_gestion_tache = null;
        $this->action_affecter_demande_cloture = null;
        $this->visibilite_demande_recu = null;
        $this->menu_ministeres = null;
        $this->demandes_a_suivre = null;
        $this->gestion_interim = null;
        $this->affichage_simplifie = null;
        $this->supprimer_tous = null;
        $this->ajout_demande = null;
        $this->type_ajout_demande = null;
        $this->ajout_demande_entrante = null;
        $this->ajout_demande_sortante = null;
        $this->ajout_demande_sortant = null;
        $this->ajout_demande_interne = null;
        $this->ajout_demande_intragroupe = null;
        $this->modification_circuit_validation_demande = null;
        $this->transfert_demande = null;
        $this->visualiser_echange = null;
        $this->cloture_transverse = null;
        $this->echange_hors_sys = null;
        $this->echange_requerant = null;
        $this->affichage_reponse_final = null;
        $this->retirer_affectation = null;
        $this->affectation_externe = null;
        $this->complement_demande = null;
        $this->encopie_demande = null;
        $this->modifier_demande = null;
        $this->supprimer_demande = null;
        $this->visibilite_mail_tel_bo = null;
        $this->acces_audio_ca = null;
        $this->prolonger_duree_traitement = null;
        $this->modif_demande_affecte = null;
        $this->tableau_bord_supervision = null;
        $this->statistique_supervision = null;
        $this->suivi_supervision = null;
        $this->force_cloture = null;
        $this->affecter_groupe = null;
        $this->historique_consultation = null;
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
        return (string) $this->exportTo(ProfilAgentPeer::DEFAULT_STRING_FORMAT);
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
