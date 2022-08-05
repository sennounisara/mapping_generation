<?php


/**
 * Base class that represents a row from the 'configuration_organisme' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonConfigurationOrganisme extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonConfigurationOrganismePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonConfigurationOrganismePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the organisme field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the encheres field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $encheres;

    /**
     * The value for the consultation_pj_autres_pieces_telechargeables field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $consultation_pj_autres_pieces_telechargeables;

    /**
     * The value for the no_activex field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $no_activex;

    /**
     * The value for the gestion_mapa field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $gestion_mapa;

    /**
     * The value for the article_133_upload_fichier field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $article_133_upload_fichier;

    /**
     * The value for the centrale_publication field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $centrale_publication;

    /**
     * The value for the organisation_centralisee field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $organisation_centralisee;

    /**
     * The value for the presence_elu field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $presence_elu;

    /**
     * The value for the traduire_consultation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $traduire_consultation;

    /**
     * The value for the suivi_passation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $suivi_passation;

    /**
     * The value for the numerotation_ref_cons field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $numerotation_ref_cons;

    /**
     * The value for the pmi_lien_portail_defense_agent field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $pmi_lien_portail_defense_agent;

    /**
     * The value for the interface_archive_arcade_pmi field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $interface_archive_arcade_pmi;

    /**
     * The value for the desarchivage_consultation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $desarchivage_consultation;

    /**
     * The value for the alimentation_automatique_liste_invites field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $alimentation_automatique_liste_invites;

    /**
     * The value for the interface_chorus_pmi field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $interface_chorus_pmi;

    /**
     * The value for the archivage_consultation_sur_pf field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $archivage_consultation_sur_pf;

    /**
     * The value for the autoriser_modification_apres_phase_consultation field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $autoriser_modification_apres_phase_consultation;

    /**
     * The value for the importer_enveloppe field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $importer_enveloppe;

    /**
     * The value for the export_marches_notifies field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $export_marches_notifies;

    /**
     * The value for the acces_agents_cfe_bd_fournisseur field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $acces_agents_cfe_bd_fournisseur;

    /**
     * The value for the acces_agents_cfe_ouverture_analyse field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $acces_agents_cfe_ouverture_analyse;

    /**
     * The value for the utiliser_parametrage_encheres field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $utiliser_parametrage_encheres;

    /**
     * The value for the gestion_mandataire field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gestion_mandataire;

    /**
     * The value for the verifier_compte_boamp field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $verifier_compte_boamp;

    /**
     * The value for the four_eyes field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $four_eyes;

    /**
     * The value for the interface_module_rsem field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $interface_module_rsem;

    /**
     * The value for the archivage_consultation_sae_externe_envoi_archive field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $archivage_consultation_sae_externe_envoi_archive;

    /**
     * The value for the archivage_consultation_sae_externe_telechargement_archive field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $archivage_consultation_sae_externe_telechargement_archive;

    /**
     * The value for the agent_verification_certificat_peppol field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $agent_verification_certificat_peppol;

    /**
     * The value for the fuseau_horaire field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $fuseau_horaire;

    /**
     * The value for the fiche_weka field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $fiche_weka;

    /**
     * The value for the mise_disposition_pieces_marche field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $mise_disposition_pieces_marche;

    /**
     * The value for the base_dce field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $base_dce;

    /**
     * The value for the avis_membres_commision field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $avis_membres_commision;

    /**
     * The value for the donnees_redac field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $donnees_redac;

    /**
     * The value for the personnaliser_affichage_theme_et_illustration field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $personnaliser_affichage_theme_et_illustration;

    /**
     * The value for the type_contrat field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $type_contrat;

    /**
     * The value for the entite_adjudicatrice field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $entite_adjudicatrice;

    /**
     * The value for the gestion_operations field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gestion_operations;

    /**
     * The value for the calendrier_de_la_consultation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $calendrier_de_la_consultation;

    /**
     * The value for the donnees_complementaires field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $donnees_complementaires;

    /**
     * The value for the espace_collaboratif field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $espace_collaboratif;

    /**
     * The value for the historique_navigation_inscrits field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $historique_navigation_inscrits;

    /**
     * The value for the identification_contrat field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $identification_contrat;

    /**
     * The value for the extraction_accords_cadres field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $extraction_accords_cadres;

    /**
     * The value for the extraction_siret_acheteur field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $extraction_siret_acheteur;

    /**
     * The value for the marche_public_simplifie field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $marche_public_simplifie;

    /**
     * The value for the consultation_demande_achat field.
     * @var        string
     */
    protected $consultation_demande_achat;

    /**
     * The value for the authenticate_agent_by_ldap field.
     * @var        string
     */
    protected $authenticate_agent_by_ldap;

    /**
     * The value for the consultation_via_import field.
     * @var        string
     */
    protected $consultation_via_import;

    /**
     * The value for the expression_reg_reference field.
     * @var        string
     */
    protected $expression_reg_reference;

    /**
     * The value for the visioconference_cao field.
     * @var        string
     */
    protected $visioconference_cao;

    /**
     * The value for the estimation_confidentiel field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $estimation_confidentiel;

    /**
     * The value for the qualification_registre_depot field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $qualification_registre_depot;

    /**
     * The value for the gestion_cao field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gestion_cao;

    /**
     * The value for the referentiel_contact field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $referentiel_contact;

    /**
     * The value for the gestion_montant_devise field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gestion_montant_devise;

    /**
     * The value for the gestion_rabais field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gestion_rabais;

    /**
     * The value for the gestion_caution_provisoire field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gestion_caution_provisoire;

    /**
     * The value for the gestion_travaux_cao field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gestion_travaux_cao;

    /**
     * The value for the filtre_bdf_entreprise_valide field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $filtre_bdf_entreprise_valide;

    /**
     * The value for the gestion_statistiques_pme field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gestion_statistiques_pme;

    /**
     * The value for the gestion_demandes_achats field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gestion_demandes_achats;

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
        $this->organisme = '';
        $this->encheres = '0';
        $this->consultation_pj_autres_pieces_telechargeables = '1';
        $this->no_activex = '0';
        $this->gestion_mapa = '1';
        $this->article_133_upload_fichier = '1';
        $this->centrale_publication = '0';
        $this->organisation_centralisee = '1';
        $this->presence_elu = '0';
        $this->traduire_consultation = '0';
        $this->suivi_passation = '0';
        $this->numerotation_ref_cons = '0';
        $this->pmi_lien_portail_defense_agent = '0';
        $this->interface_archive_arcade_pmi = '0';
        $this->desarchivage_consultation = '0';
        $this->alimentation_automatique_liste_invites = '0';
        $this->interface_chorus_pmi = '0';
        $this->archivage_consultation_sur_pf = '0';
        $this->autoriser_modification_apres_phase_consultation = '1';
        $this->importer_enveloppe = '1';
        $this->export_marches_notifies = '0';
        $this->acces_agents_cfe_bd_fournisseur = '0';
        $this->acces_agents_cfe_ouverture_analyse = '1';
        $this->utiliser_parametrage_encheres = '0';
        $this->gestion_mandataire = '0';
        $this->verifier_compte_boamp = '0';
        $this->four_eyes = '0';
        $this->interface_module_rsem = '0';
        $this->archivage_consultation_sae_externe_envoi_archive = '0';
        $this->archivage_consultation_sae_externe_telechargement_archive = '0';
        $this->agent_verification_certificat_peppol = '0';
        $this->fuseau_horaire = '0';
        $this->fiche_weka = '0';
        $this->mise_disposition_pieces_marche = '0';
        $this->base_dce = '0';
        $this->avis_membres_commision = '0';
        $this->donnees_redac = '0';
        $this->personnaliser_affichage_theme_et_illustration = '0';
        $this->type_contrat = '0';
        $this->entite_adjudicatrice = '0';
        $this->gestion_operations = '0';
        $this->calendrier_de_la_consultation = '0';
        $this->donnees_complementaires = '0';
        $this->espace_collaboratif = '0';
        $this->historique_navigation_inscrits = '1';
        $this->identification_contrat = '0';
        $this->extraction_accords_cadres = '0';
        $this->extraction_siret_acheteur = '0';
        $this->marche_public_simplifie = '0';
        $this->estimation_confidentiel = '0';
        $this->qualification_registre_depot = '0';
        $this->gestion_cao = '0';
        $this->referentiel_contact = '0';
        $this->gestion_montant_devise = '0';
        $this->gestion_rabais = '0';
        $this->gestion_caution_provisoire = '0';
        $this->gestion_travaux_cao = '0';
        $this->filtre_bdf_entreprise_valide = '0';
        $this->gestion_statistiques_pme = '0';
        $this->gestion_demandes_achats = '0';
    }

    /**
     * Initializes internal state of BaseCommonConfigurationOrganisme object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
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
     * Get the [encheres] column value.
     * 
     * @return string
     */
    public function getEncheres()
    {

        return $this->encheres;
    }

    /**
     * Get the [consultation_pj_autres_pieces_telechargeables] column value.
     * 
     * @return string
     */
    public function getConsultationPjAutresPiecesTelechargeables()
    {

        return $this->consultation_pj_autres_pieces_telechargeables;
    }

    /**
     * Get the [no_activex] column value.
     * 
     * @return string
     */
    public function getNoActivex()
    {

        return $this->no_activex;
    }

    /**
     * Get the [gestion_mapa] column value.
     * 
     * @return string
     */
    public function getGestionMapa()
    {

        return $this->gestion_mapa;
    }

    /**
     * Get the [article_133_upload_fichier] column value.
     * 
     * @return string
     */
    public function getArticle133UploadFichier()
    {

        return $this->article_133_upload_fichier;
    }

    /**
     * Get the [centrale_publication] column value.
     * 
     * @return string
     */
    public function getCentralePublication()
    {

        return $this->centrale_publication;
    }

    /**
     * Get the [organisation_centralisee] column value.
     * 
     * @return string
     */
    public function getOrganisationCentralisee()
    {

        return $this->organisation_centralisee;
    }

    /**
     * Get the [presence_elu] column value.
     * 
     * @return string
     */
    public function getPresenceElu()
    {

        return $this->presence_elu;
    }

    /**
     * Get the [traduire_consultation] column value.
     * 
     * @return string
     */
    public function getTraduireConsultation()
    {

        return $this->traduire_consultation;
    }

    /**
     * Get the [suivi_passation] column value.
     * 
     * @return string
     */
    public function getSuiviPassation()
    {

        return $this->suivi_passation;
    }

    /**
     * Get the [numerotation_ref_cons] column value.
     * 
     * @return string
     */
    public function getNumerotationRefCons()
    {

        return $this->numerotation_ref_cons;
    }

    /**
     * Get the [pmi_lien_portail_defense_agent] column value.
     * 
     * @return string
     */
    public function getPmiLienPortailDefenseAgent()
    {

        return $this->pmi_lien_portail_defense_agent;
    }

    /**
     * Get the [interface_archive_arcade_pmi] column value.
     * 
     * @return string
     */
    public function getInterfaceArchiveArcadePmi()
    {

        return $this->interface_archive_arcade_pmi;
    }

    /**
     * Get the [desarchivage_consultation] column value.
     * 
     * @return string
     */
    public function getDesarchivageConsultation()
    {

        return $this->desarchivage_consultation;
    }

    /**
     * Get the [alimentation_automatique_liste_invites] column value.
     * 
     * @return string
     */
    public function getAlimentationAutomatiqueListeInvites()
    {

        return $this->alimentation_automatique_liste_invites;
    }

    /**
     * Get the [interface_chorus_pmi] column value.
     * 
     * @return string
     */
    public function getInterfaceChorusPmi()
    {

        return $this->interface_chorus_pmi;
    }

    /**
     * Get the [archivage_consultation_sur_pf] column value.
     * 
     * @return string
     */
    public function getArchivageConsultationSurPf()
    {

        return $this->archivage_consultation_sur_pf;
    }

    /**
     * Get the [autoriser_modification_apres_phase_consultation] column value.
     * 
     * @return string
     */
    public function getAutoriserModificationApresPhaseConsultation()
    {

        return $this->autoriser_modification_apres_phase_consultation;
    }

    /**
     * Get the [importer_enveloppe] column value.
     * 
     * @return string
     */
    public function getImporterEnveloppe()
    {

        return $this->importer_enveloppe;
    }

    /**
     * Get the [export_marches_notifies] column value.
     * 
     * @return string
     */
    public function getExportMarchesNotifies()
    {

        return $this->export_marches_notifies;
    }

    /**
     * Get the [acces_agents_cfe_bd_fournisseur] column value.
     * 
     * @return string
     */
    public function getAccesAgentsCfeBdFournisseur()
    {

        return $this->acces_agents_cfe_bd_fournisseur;
    }

    /**
     * Get the [acces_agents_cfe_ouverture_analyse] column value.
     * 
     * @return string
     */
    public function getAccesAgentsCfeOuvertureAnalyse()
    {

        return $this->acces_agents_cfe_ouverture_analyse;
    }

    /**
     * Get the [utiliser_parametrage_encheres] column value.
     * 
     * @return string
     */
    public function getUtiliserParametrageEncheres()
    {

        return $this->utiliser_parametrage_encheres;
    }

    /**
     * Get the [gestion_mandataire] column value.
     * 
     * @return string
     */
    public function getGestionMandataire()
    {

        return $this->gestion_mandataire;
    }

    /**
     * Get the [verifier_compte_boamp] column value.
     * 
     * @return string
     */
    public function getVerifierCompteBoamp()
    {

        return $this->verifier_compte_boamp;
    }

    /**
     * Get the [four_eyes] column value.
     * 
     * @return string
     */
    public function getFourEyes()
    {

        return $this->four_eyes;
    }

    /**
     * Get the [interface_module_rsem] column value.
     * 
     * @return string
     */
    public function getInterfaceModuleRsem()
    {

        return $this->interface_module_rsem;
    }

    /**
     * Get the [archivage_consultation_sae_externe_envoi_archive] column value.
     * 
     * @return string
     */
    public function getArchivageConsultationSaeExterneEnvoiArchive()
    {

        return $this->archivage_consultation_sae_externe_envoi_archive;
    }

    /**
     * Get the [archivage_consultation_sae_externe_telechargement_archive] column value.
     * 
     * @return string
     */
    public function getArchivageConsultationSaeExterneTelechargementArchive()
    {

        return $this->archivage_consultation_sae_externe_telechargement_archive;
    }

    /**
     * Get the [agent_verification_certificat_peppol] column value.
     * 
     * @return string
     */
    public function getAgentVerificationCertificatPeppol()
    {

        return $this->agent_verification_certificat_peppol;
    }

    /**
     * Get the [fuseau_horaire] column value.
     * 
     * @return string
     */
    public function getFuseauHoraire()
    {

        return $this->fuseau_horaire;
    }

    /**
     * Get the [fiche_weka] column value.
     * 
     * @return string
     */
    public function getFicheWeka()
    {

        return $this->fiche_weka;
    }

    /**
     * Get the [mise_disposition_pieces_marche] column value.
     * 
     * @return string
     */
    public function getMiseDispositionPiecesMarche()
    {

        return $this->mise_disposition_pieces_marche;
    }

    /**
     * Get the [base_dce] column value.
     * 
     * @return string
     */
    public function getBaseDce()
    {

        return $this->base_dce;
    }

    /**
     * Get the [avis_membres_commision] column value.
     * 
     * @return string
     */
    public function getAvisMembresCommision()
    {

        return $this->avis_membres_commision;
    }

    /**
     * Get the [donnees_redac] column value.
     * 
     * @return string
     */
    public function getDonneesRedac()
    {

        return $this->donnees_redac;
    }

    /**
     * Get the [personnaliser_affichage_theme_et_illustration] column value.
     * 
     * @return string
     */
    public function getPersonnaliserAffichageThemeEtIllustration()
    {

        return $this->personnaliser_affichage_theme_et_illustration;
    }

    /**
     * Get the [type_contrat] column value.
     * 
     * @return string
     */
    public function getTypeContrat()
    {

        return $this->type_contrat;
    }

    /**
     * Get the [entite_adjudicatrice] column value.
     * 
     * @return string
     */
    public function getEntiteAdjudicatrice()
    {

        return $this->entite_adjudicatrice;
    }

    /**
     * Get the [gestion_operations] column value.
     * 
     * @return string
     */
    public function getGestionOperations()
    {

        return $this->gestion_operations;
    }

    /**
     * Get the [calendrier_de_la_consultation] column value.
     * 
     * @return string
     */
    public function getCalendrierDeLaConsultation()
    {

        return $this->calendrier_de_la_consultation;
    }

    /**
     * Get the [donnees_complementaires] column value.
     * 
     * @return string
     */
    public function getDonneesComplementaires()
    {

        return $this->donnees_complementaires;
    }

    /**
     * Get the [espace_collaboratif] column value.
     * 
     * @return string
     */
    public function getEspaceCollaboratif()
    {

        return $this->espace_collaboratif;
    }

    /**
     * Get the [historique_navigation_inscrits] column value.
     * 
     * @return string
     */
    public function getHistoriqueNavigationInscrits()
    {

        return $this->historique_navigation_inscrits;
    }

    /**
     * Get the [identification_contrat] column value.
     * 
     * @return string
     */
    public function getIdentificationContrat()
    {

        return $this->identification_contrat;
    }

    /**
     * Get the [extraction_accords_cadres] column value.
     * 
     * @return string
     */
    public function getExtractionAccordsCadres()
    {

        return $this->extraction_accords_cadres;
    }

    /**
     * Get the [extraction_siret_acheteur] column value.
     * 
     * @return string
     */
    public function getExtractionSiretAcheteur()
    {

        return $this->extraction_siret_acheteur;
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
     * Get the [consultation_demande_achat] column value.
     * 
     * @return string
     */
    public function getConsultationDemandeAchat()
    {

        return $this->consultation_demande_achat;
    }

    /**
     * Get the [authenticate_agent_by_ldap] column value.
     * 
     * @return string
     */
    public function getAuthenticateAgentByLdap()
    {

        return $this->authenticate_agent_by_ldap;
    }

    /**
     * Get the [consultation_via_import] column value.
     * 
     * @return string
     */
    public function getConsultationViaImport()
    {

        return $this->consultation_via_import;
    }

    /**
     * Get the [expression_reg_reference] column value.
     * 
     * @return string
     */
    public function getExpressionRegReference()
    {

        return $this->expression_reg_reference;
    }

    /**
     * Get the [visioconference_cao] column value.
     * 
     * @return string
     */
    public function getVisioconferenceCao()
    {

        return $this->visioconference_cao;
    }

    /**
     * Get the [estimation_confidentiel] column value.
     * 
     * @return string
     */
    public function getEstimationConfidentiel()
    {

        return $this->estimation_confidentiel;
    }

    /**
     * Get the [qualification_registre_depot] column value.
     * 
     * @return string
     */
    public function getQualificationRegistreDepot()
    {

        return $this->qualification_registre_depot;
    }

    /**
     * Get the [gestion_cao] column value.
     * 
     * @return string
     */
    public function getGestionCao()
    {

        return $this->gestion_cao;
    }

    /**
     * Get the [referentiel_contact] column value.
     * 
     * @return string
     */
    public function getReferentielContact()
    {

        return $this->referentiel_contact;
    }

    /**
     * Get the [gestion_montant_devise] column value.
     * 
     * @return string
     */
    public function getGestionMontantDevise()
    {

        return $this->gestion_montant_devise;
    }

    /**
     * Get the [gestion_rabais] column value.
     * 
     * @return string
     */
    public function getGestionRabais()
    {

        return $this->gestion_rabais;
    }

    /**
     * Get the [gestion_caution_provisoire] column value.
     * 
     * @return string
     */
    public function getGestionCautionProvisoire()
    {

        return $this->gestion_caution_provisoire;
    }

    /**
     * Get the [gestion_travaux_cao] column value.
     * 
     * @return string
     */
    public function getGestionTravauxCao()
    {

        return $this->gestion_travaux_cao;
    }

    /**
     * Get the [filtre_bdf_entreprise_valide] column value.
     * 
     * @return string
     */
    public function getFiltreBdfEntrepriseValide()
    {

        return $this->filtre_bdf_entreprise_valide;
    }

    /**
     * Get the [gestion_statistiques_pme] column value.
     * 
     * @return string
     */
    public function getGestionStatistiquesPme()
    {

        return $this->gestion_statistiques_pme;
    }

    /**
     * Get the [gestion_demandes_achats] column value.
     * 
     * @return string
     */
    public function getGestionDemandesAchats()
    {

        return $this->gestion_demandes_achats;
    }

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [encheres] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setEncheres($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->encheres !== $v) {
            $this->encheres = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::ENCHERES;
        }


        return $this;
    } // setEncheres()

    /**
     * Set the value of [consultation_pj_autres_pieces_telechargeables] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setConsultationPjAutresPiecesTelechargeables($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->consultation_pj_autres_pieces_telechargeables !== $v) {
            $this->consultation_pj_autres_pieces_telechargeables = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::CONSULTATION_PJ_AUTRES_PIECES_TELECHARGEABLES;
        }


        return $this;
    } // setConsultationPjAutresPiecesTelechargeables()

    /**
     * Set the value of [no_activex] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setNoActivex($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->no_activex !== $v) {
            $this->no_activex = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::NO_ACTIVEX;
        }


        return $this;
    } // setNoActivex()

    /**
     * Set the value of [gestion_mapa] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setGestionMapa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gestion_mapa !== $v) {
            $this->gestion_mapa = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::GESTION_MAPA;
        }


        return $this;
    } // setGestionMapa()

    /**
     * Set the value of [article_133_upload_fichier] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setArticle133UploadFichier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->article_133_upload_fichier !== $v) {
            $this->article_133_upload_fichier = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::ARTICLE_133_UPLOAD_FICHIER;
        }


        return $this;
    } // setArticle133UploadFichier()

    /**
     * Set the value of [centrale_publication] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setCentralePublication($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->centrale_publication !== $v) {
            $this->centrale_publication = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::CENTRALE_PUBLICATION;
        }


        return $this;
    } // setCentralePublication()

    /**
     * Set the value of [organisation_centralisee] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setOrganisationCentralisee($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisation_centralisee !== $v) {
            $this->organisation_centralisee = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::ORGANISATION_CENTRALISEE;
        }


        return $this;
    } // setOrganisationCentralisee()

    /**
     * Set the value of [presence_elu] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setPresenceElu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->presence_elu !== $v) {
            $this->presence_elu = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::PRESENCE_ELU;
        }


        return $this;
    } // setPresenceElu()

    /**
     * Set the value of [traduire_consultation] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setTraduireConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->traduire_consultation !== $v) {
            $this->traduire_consultation = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::TRADUIRE_CONSULTATION;
        }


        return $this;
    } // setTraduireConsultation()

    /**
     * Set the value of [suivi_passation] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setSuiviPassation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->suivi_passation !== $v) {
            $this->suivi_passation = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::SUIVI_PASSATION;
        }


        return $this;
    } // setSuiviPassation()

    /**
     * Set the value of [numerotation_ref_cons] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setNumerotationRefCons($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->numerotation_ref_cons !== $v) {
            $this->numerotation_ref_cons = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::NUMEROTATION_REF_CONS;
        }


        return $this;
    } // setNumerotationRefCons()

    /**
     * Set the value of [pmi_lien_portail_defense_agent] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setPmiLienPortailDefenseAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pmi_lien_portail_defense_agent !== $v) {
            $this->pmi_lien_portail_defense_agent = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::PMI_LIEN_PORTAIL_DEFENSE_AGENT;
        }


        return $this;
    } // setPmiLienPortailDefenseAgent()

    /**
     * Set the value of [interface_archive_arcade_pmi] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setInterfaceArchiveArcadePmi($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->interface_archive_arcade_pmi !== $v) {
            $this->interface_archive_arcade_pmi = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::INTERFACE_ARCHIVE_ARCADE_PMI;
        }


        return $this;
    } // setInterfaceArchiveArcadePmi()

    /**
     * Set the value of [desarchivage_consultation] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setDesarchivageConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->desarchivage_consultation !== $v) {
            $this->desarchivage_consultation = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::DESARCHIVAGE_CONSULTATION;
        }


        return $this;
    } // setDesarchivageConsultation()

    /**
     * Set the value of [alimentation_automatique_liste_invites] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setAlimentationAutomatiqueListeInvites($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->alimentation_automatique_liste_invites !== $v) {
            $this->alimentation_automatique_liste_invites = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::ALIMENTATION_AUTOMATIQUE_LISTE_INVITES;
        }


        return $this;
    } // setAlimentationAutomatiqueListeInvites()

    /**
     * Set the value of [interface_chorus_pmi] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setInterfaceChorusPmi($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->interface_chorus_pmi !== $v) {
            $this->interface_chorus_pmi = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::INTERFACE_CHORUS_PMI;
        }


        return $this;
    } // setInterfaceChorusPmi()

    /**
     * Set the value of [archivage_consultation_sur_pf] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setArchivageConsultationSurPf($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->archivage_consultation_sur_pf !== $v) {
            $this->archivage_consultation_sur_pf = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::ARCHIVAGE_CONSULTATION_SUR_PF;
        }


        return $this;
    } // setArchivageConsultationSurPf()

    /**
     * Set the value of [autoriser_modification_apres_phase_consultation] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setAutoriserModificationApresPhaseConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->autoriser_modification_apres_phase_consultation !== $v) {
            $this->autoriser_modification_apres_phase_consultation = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::AUTORISER_MODIFICATION_APRES_PHASE_CONSULTATION;
        }


        return $this;
    } // setAutoriserModificationApresPhaseConsultation()

    /**
     * Set the value of [importer_enveloppe] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setImporterEnveloppe($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->importer_enveloppe !== $v) {
            $this->importer_enveloppe = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::IMPORTER_ENVELOPPE;
        }


        return $this;
    } // setImporterEnveloppe()

    /**
     * Set the value of [export_marches_notifies] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setExportMarchesNotifies($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->export_marches_notifies !== $v) {
            $this->export_marches_notifies = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::EXPORT_MARCHES_NOTIFIES;
        }


        return $this;
    } // setExportMarchesNotifies()

    /**
     * Set the value of [acces_agents_cfe_bd_fournisseur] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setAccesAgentsCfeBdFournisseur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->acces_agents_cfe_bd_fournisseur !== $v) {
            $this->acces_agents_cfe_bd_fournisseur = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::ACCES_AGENTS_CFE_BD_FOURNISSEUR;
        }


        return $this;
    } // setAccesAgentsCfeBdFournisseur()

    /**
     * Set the value of [acces_agents_cfe_ouverture_analyse] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setAccesAgentsCfeOuvertureAnalyse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->acces_agents_cfe_ouverture_analyse !== $v) {
            $this->acces_agents_cfe_ouverture_analyse = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::ACCES_AGENTS_CFE_OUVERTURE_ANALYSE;
        }


        return $this;
    } // setAccesAgentsCfeOuvertureAnalyse()

    /**
     * Set the value of [utiliser_parametrage_encheres] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setUtiliserParametrageEncheres($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->utiliser_parametrage_encheres !== $v) {
            $this->utiliser_parametrage_encheres = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::UTILISER_PARAMETRAGE_ENCHERES;
        }


        return $this;
    } // setUtiliserParametrageEncheres()

    /**
     * Set the value of [gestion_mandataire] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setGestionMandataire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gestion_mandataire !== $v) {
            $this->gestion_mandataire = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::GESTION_MANDATAIRE;
        }


        return $this;
    } // setGestionMandataire()

    /**
     * Set the value of [verifier_compte_boamp] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setVerifierCompteBoamp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->verifier_compte_boamp !== $v) {
            $this->verifier_compte_boamp = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::VERIFIER_COMPTE_BOAMP;
        }


        return $this;
    } // setVerifierCompteBoamp()

    /**
     * Set the value of [four_eyes] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setFourEyes($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->four_eyes !== $v) {
            $this->four_eyes = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::FOUR_EYES;
        }


        return $this;
    } // setFourEyes()

    /**
     * Set the value of [interface_module_rsem] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setInterfaceModuleRsem($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->interface_module_rsem !== $v) {
            $this->interface_module_rsem = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::INTERFACE_MODULE_RSEM;
        }


        return $this;
    } // setInterfaceModuleRsem()

    /**
     * Set the value of [archivage_consultation_sae_externe_envoi_archive] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setArchivageConsultationSaeExterneEnvoiArchive($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->archivage_consultation_sae_externe_envoi_archive !== $v) {
            $this->archivage_consultation_sae_externe_envoi_archive = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::ARCHIVAGE_CONSULTATION_SAE_EXTERNE_ENVOI_ARCHIVE;
        }


        return $this;
    } // setArchivageConsultationSaeExterneEnvoiArchive()

    /**
     * Set the value of [archivage_consultation_sae_externe_telechargement_archive] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setArchivageConsultationSaeExterneTelechargementArchive($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->archivage_consultation_sae_externe_telechargement_archive !== $v) {
            $this->archivage_consultation_sae_externe_telechargement_archive = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::ARCHIVAGE_CONSULTATION_SAE_EXTERNE_TELECHARGEMENT_ARCHIVE;
        }


        return $this;
    } // setArchivageConsultationSaeExterneTelechargementArchive()

    /**
     * Set the value of [agent_verification_certificat_peppol] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setAgentVerificationCertificatPeppol($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->agent_verification_certificat_peppol !== $v) {
            $this->agent_verification_certificat_peppol = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::AGENT_VERIFICATION_CERTIFICAT_PEPPOL;
        }


        return $this;
    } // setAgentVerificationCertificatPeppol()

    /**
     * Set the value of [fuseau_horaire] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setFuseauHoraire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fuseau_horaire !== $v) {
            $this->fuseau_horaire = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::FUSEAU_HORAIRE;
        }


        return $this;
    } // setFuseauHoraire()

    /**
     * Set the value of [fiche_weka] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setFicheWeka($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fiche_weka !== $v) {
            $this->fiche_weka = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::FICHE_WEKA;
        }


        return $this;
    } // setFicheWeka()

    /**
     * Set the value of [mise_disposition_pieces_marche] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setMiseDispositionPiecesMarche($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mise_disposition_pieces_marche !== $v) {
            $this->mise_disposition_pieces_marche = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::MISE_DISPOSITION_PIECES_MARCHE;
        }


        return $this;
    } // setMiseDispositionPiecesMarche()

    /**
     * Set the value of [base_dce] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setBaseDce($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_dce !== $v) {
            $this->base_dce = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::BASE_DCE;
        }


        return $this;
    } // setBaseDce()

    /**
     * Set the value of [avis_membres_commision] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setAvisMembresCommision($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->avis_membres_commision !== $v) {
            $this->avis_membres_commision = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::AVIS_MEMBRES_COMMISION;
        }


        return $this;
    } // setAvisMembresCommision()

    /**
     * Set the value of [donnees_redac] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setDonneesRedac($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->donnees_redac !== $v) {
            $this->donnees_redac = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::DONNEES_REDAC;
        }


        return $this;
    } // setDonneesRedac()

    /**
     * Set the value of [personnaliser_affichage_theme_et_illustration] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setPersonnaliserAffichageThemeEtIllustration($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->personnaliser_affichage_theme_et_illustration !== $v) {
            $this->personnaliser_affichage_theme_et_illustration = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::PERSONNALISER_AFFICHAGE_THEME_ET_ILLUSTRATION;
        }


        return $this;
    } // setPersonnaliserAffichageThemeEtIllustration()

    /**
     * Set the value of [type_contrat] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setTypeContrat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_contrat !== $v) {
            $this->type_contrat = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::TYPE_CONTRAT;
        }


        return $this;
    } // setTypeContrat()

    /**
     * Set the value of [entite_adjudicatrice] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setEntiteAdjudicatrice($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->entite_adjudicatrice !== $v) {
            $this->entite_adjudicatrice = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::ENTITE_ADJUDICATRICE;
        }


        return $this;
    } // setEntiteAdjudicatrice()

    /**
     * Set the value of [gestion_operations] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setGestionOperations($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gestion_operations !== $v) {
            $this->gestion_operations = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::GESTION_OPERATIONS;
        }


        return $this;
    } // setGestionOperations()

    /**
     * Set the value of [calendrier_de_la_consultation] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setCalendrierDeLaConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->calendrier_de_la_consultation !== $v) {
            $this->calendrier_de_la_consultation = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::CALENDRIER_DE_LA_CONSULTATION;
        }


        return $this;
    } // setCalendrierDeLaConsultation()

    /**
     * Set the value of [donnees_complementaires] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setDonneesComplementaires($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->donnees_complementaires !== $v) {
            $this->donnees_complementaires = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::DONNEES_COMPLEMENTAIRES;
        }


        return $this;
    } // setDonneesComplementaires()

    /**
     * Set the value of [espace_collaboratif] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setEspaceCollaboratif($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->espace_collaboratif !== $v) {
            $this->espace_collaboratif = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::ESPACE_COLLABORATIF;
        }


        return $this;
    } // setEspaceCollaboratif()

    /**
     * Set the value of [historique_navigation_inscrits] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setHistoriqueNavigationInscrits($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->historique_navigation_inscrits !== $v) {
            $this->historique_navigation_inscrits = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::HISTORIQUE_NAVIGATION_INSCRITS;
        }


        return $this;
    } // setHistoriqueNavigationInscrits()

    /**
     * Set the value of [identification_contrat] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setIdentificationContrat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->identification_contrat !== $v) {
            $this->identification_contrat = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::IDENTIFICATION_CONTRAT;
        }


        return $this;
    } // setIdentificationContrat()

    /**
     * Set the value of [extraction_accords_cadres] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setExtractionAccordsCadres($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->extraction_accords_cadres !== $v) {
            $this->extraction_accords_cadres = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::EXTRACTION_ACCORDS_CADRES;
        }


        return $this;
    } // setExtractionAccordsCadres()

    /**
     * Set the value of [extraction_siret_acheteur] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setExtractionSiretAcheteur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->extraction_siret_acheteur !== $v) {
            $this->extraction_siret_acheteur = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::EXTRACTION_SIRET_ACHETEUR;
        }


        return $this;
    } // setExtractionSiretAcheteur()

    /**
     * Set the value of [marche_public_simplifie] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setMarchePublicSimplifie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->marche_public_simplifie !== $v) {
            $this->marche_public_simplifie = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::MARCHE_PUBLIC_SIMPLIFIE;
        }


        return $this;
    } // setMarchePublicSimplifie()

    /**
     * Set the value of [consultation_demande_achat] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setConsultationDemandeAchat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->consultation_demande_achat !== $v) {
            $this->consultation_demande_achat = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::CONSULTATION_DEMANDE_ACHAT;
        }


        return $this;
    } // setConsultationDemandeAchat()

    /**
     * Set the value of [authenticate_agent_by_ldap] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setAuthenticateAgentByLdap($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->authenticate_agent_by_ldap !== $v) {
            $this->authenticate_agent_by_ldap = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::AUTHENTICATE_AGENT_BY_LDAP;
        }


        return $this;
    } // setAuthenticateAgentByLdap()

    /**
     * Set the value of [consultation_via_import] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setConsultationViaImport($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->consultation_via_import !== $v) {
            $this->consultation_via_import = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::CONSULTATION_VIA_IMPORT;
        }


        return $this;
    } // setConsultationViaImport()

    /**
     * Set the value of [expression_reg_reference] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setExpressionRegReference($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->expression_reg_reference !== $v) {
            $this->expression_reg_reference = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::EXPRESSION_REG_REFERENCE;
        }


        return $this;
    } // setExpressionRegReference()

    /**
     * Set the value of [visioconference_cao] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setVisioconferenceCao($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->visioconference_cao !== $v) {
            $this->visioconference_cao = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::VISIOCONFERENCE_CAO;
        }


        return $this;
    } // setVisioconferenceCao()

    /**
     * Set the value of [estimation_confidentiel] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setEstimationConfidentiel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->estimation_confidentiel !== $v) {
            $this->estimation_confidentiel = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::ESTIMATION_CONFIDENTIEL;
        }


        return $this;
    } // setEstimationConfidentiel()

    /**
     * Set the value of [qualification_registre_depot] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setQualificationRegistreDepot($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->qualification_registre_depot !== $v) {
            $this->qualification_registre_depot = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::QUALIFICATION_REGISTRE_DEPOT;
        }


        return $this;
    } // setQualificationRegistreDepot()

    /**
     * Set the value of [gestion_cao] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setGestionCao($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gestion_cao !== $v) {
            $this->gestion_cao = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::GESTION_CAO;
        }


        return $this;
    } // setGestionCao()

    /**
     * Set the value of [referentiel_contact] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setReferentielContact($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->referentiel_contact !== $v) {
            $this->referentiel_contact = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::REFERENTIEL_CONTACT;
        }


        return $this;
    } // setReferentielContact()

    /**
     * Set the value of [gestion_montant_devise] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setGestionMontantDevise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gestion_montant_devise !== $v) {
            $this->gestion_montant_devise = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::GESTION_MONTANT_DEVISE;
        }


        return $this;
    } // setGestionMontantDevise()

    /**
     * Set the value of [gestion_rabais] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setGestionRabais($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gestion_rabais !== $v) {
            $this->gestion_rabais = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::GESTION_RABAIS;
        }


        return $this;
    } // setGestionRabais()

    /**
     * Set the value of [gestion_caution_provisoire] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setGestionCautionProvisoire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gestion_caution_provisoire !== $v) {
            $this->gestion_caution_provisoire = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::GESTION_CAUTION_PROVISOIRE;
        }


        return $this;
    } // setGestionCautionProvisoire()

    /**
     * Set the value of [gestion_travaux_cao] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setGestionTravauxCao($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gestion_travaux_cao !== $v) {
            $this->gestion_travaux_cao = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::GESTION_TRAVAUX_CAO;
        }


        return $this;
    } // setGestionTravauxCao()

    /**
     * Set the value of [filtre_bdf_entreprise_valide] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setFiltreBdfEntrepriseValide($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->filtre_bdf_entreprise_valide !== $v) {
            $this->filtre_bdf_entreprise_valide = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::FILTRE_BDF_ENTREPRISE_VALIDE;
        }


        return $this;
    } // setFiltreBdfEntrepriseValide()

    /**
     * Set the value of [gestion_statistiques_pme] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setGestionStatistiquesPme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gestion_statistiques_pme !== $v) {
            $this->gestion_statistiques_pme = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::GESTION_STATISTIQUES_PME;
        }


        return $this;
    } // setGestionStatistiquesPme()

    /**
     * Set the value of [gestion_demandes_achats] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationOrganisme The current object (for fluent API support)
     */
    public function setGestionDemandesAchats($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gestion_demandes_achats !== $v) {
            $this->gestion_demandes_achats = $v;
            $this->modifiedColumns[] = CommonConfigurationOrganismePeer::GESTION_DEMANDES_ACHATS;
        }


        return $this;
    } // setGestionDemandesAchats()

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
            if ($this->organisme !== '') {
                return false;
            }

            if ($this->encheres !== '0') {
                return false;
            }

            if ($this->consultation_pj_autres_pieces_telechargeables !== '1') {
                return false;
            }

            if ($this->no_activex !== '0') {
                return false;
            }

            if ($this->gestion_mapa !== '1') {
                return false;
            }

            if ($this->article_133_upload_fichier !== '1') {
                return false;
            }

            if ($this->centrale_publication !== '0') {
                return false;
            }

            if ($this->organisation_centralisee !== '1') {
                return false;
            }

            if ($this->presence_elu !== '0') {
                return false;
            }

            if ($this->traduire_consultation !== '0') {
                return false;
            }

            if ($this->suivi_passation !== '0') {
                return false;
            }

            if ($this->numerotation_ref_cons !== '0') {
                return false;
            }

            if ($this->pmi_lien_portail_defense_agent !== '0') {
                return false;
            }

            if ($this->interface_archive_arcade_pmi !== '0') {
                return false;
            }

            if ($this->desarchivage_consultation !== '0') {
                return false;
            }

            if ($this->alimentation_automatique_liste_invites !== '0') {
                return false;
            }

            if ($this->interface_chorus_pmi !== '0') {
                return false;
            }

            if ($this->archivage_consultation_sur_pf !== '0') {
                return false;
            }

            if ($this->autoriser_modification_apres_phase_consultation !== '1') {
                return false;
            }

            if ($this->importer_enveloppe !== '1') {
                return false;
            }

            if ($this->export_marches_notifies !== '0') {
                return false;
            }

            if ($this->acces_agents_cfe_bd_fournisseur !== '0') {
                return false;
            }

            if ($this->acces_agents_cfe_ouverture_analyse !== '1') {
                return false;
            }

            if ($this->utiliser_parametrage_encheres !== '0') {
                return false;
            }

            if ($this->gestion_mandataire !== '0') {
                return false;
            }

            if ($this->verifier_compte_boamp !== '0') {
                return false;
            }

            if ($this->four_eyes !== '0') {
                return false;
            }

            if ($this->interface_module_rsem !== '0') {
                return false;
            }

            if ($this->archivage_consultation_sae_externe_envoi_archive !== '0') {
                return false;
            }

            if ($this->archivage_consultation_sae_externe_telechargement_archive !== '0') {
                return false;
            }

            if ($this->agent_verification_certificat_peppol !== '0') {
                return false;
            }

            if ($this->fuseau_horaire !== '0') {
                return false;
            }

            if ($this->fiche_weka !== '0') {
                return false;
            }

            if ($this->mise_disposition_pieces_marche !== '0') {
                return false;
            }

            if ($this->base_dce !== '0') {
                return false;
            }

            if ($this->avis_membres_commision !== '0') {
                return false;
            }

            if ($this->donnees_redac !== '0') {
                return false;
            }

            if ($this->personnaliser_affichage_theme_et_illustration !== '0') {
                return false;
            }

            if ($this->type_contrat !== '0') {
                return false;
            }

            if ($this->entite_adjudicatrice !== '0') {
                return false;
            }

            if ($this->gestion_operations !== '0') {
                return false;
            }

            if ($this->calendrier_de_la_consultation !== '0') {
                return false;
            }

            if ($this->donnees_complementaires !== '0') {
                return false;
            }

            if ($this->espace_collaboratif !== '0') {
                return false;
            }

            if ($this->historique_navigation_inscrits !== '1') {
                return false;
            }

            if ($this->identification_contrat !== '0') {
                return false;
            }

            if ($this->extraction_accords_cadres !== '0') {
                return false;
            }

            if ($this->extraction_siret_acheteur !== '0') {
                return false;
            }

            if ($this->marche_public_simplifie !== '0') {
                return false;
            }

            if ($this->estimation_confidentiel !== '0') {
                return false;
            }

            if ($this->qualification_registre_depot !== '0') {
                return false;
            }

            if ($this->gestion_cao !== '0') {
                return false;
            }

            if ($this->referentiel_contact !== '0') {
                return false;
            }

            if ($this->gestion_montant_devise !== '0') {
                return false;
            }

            if ($this->gestion_rabais !== '0') {
                return false;
            }

            if ($this->gestion_caution_provisoire !== '0') {
                return false;
            }

            if ($this->gestion_travaux_cao !== '0') {
                return false;
            }

            if ($this->filtre_bdf_entreprise_valide !== '0') {
                return false;
            }

            if ($this->gestion_statistiques_pme !== '0') {
                return false;
            }

            if ($this->gestion_demandes_achats !== '0') {
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

            $this->organisme = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
            $this->encheres = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->consultation_pj_autres_pieces_telechargeables = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->no_activex = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->gestion_mapa = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->article_133_upload_fichier = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->centrale_publication = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->organisation_centralisee = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->presence_elu = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->traduire_consultation = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->suivi_passation = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->numerotation_ref_cons = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->pmi_lien_portail_defense_agent = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->interface_archive_arcade_pmi = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->desarchivage_consultation = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->alimentation_automatique_liste_invites = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->interface_chorus_pmi = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->archivage_consultation_sur_pf = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->autoriser_modification_apres_phase_consultation = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->importer_enveloppe = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->export_marches_notifies = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->acces_agents_cfe_bd_fournisseur = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->acces_agents_cfe_ouverture_analyse = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->utiliser_parametrage_encheres = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->gestion_mandataire = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->verifier_compte_boamp = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->four_eyes = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->interface_module_rsem = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->archivage_consultation_sae_externe_envoi_archive = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->archivage_consultation_sae_externe_telechargement_archive = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->agent_verification_certificat_peppol = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->fuseau_horaire = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->fiche_weka = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->mise_disposition_pieces_marche = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->base_dce = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->avis_membres_commision = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->donnees_redac = ($row[$startcol + 36] !== null) ? (string) $row[$startcol + 36] : null;
            $this->personnaliser_affichage_theme_et_illustration = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->type_contrat = ($row[$startcol + 38] !== null) ? (string) $row[$startcol + 38] : null;
            $this->entite_adjudicatrice = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->gestion_operations = ($row[$startcol + 40] !== null) ? (string) $row[$startcol + 40] : null;
            $this->calendrier_de_la_consultation = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->donnees_complementaires = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
            $this->espace_collaboratif = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
            $this->historique_navigation_inscrits = ($row[$startcol + 44] !== null) ? (string) $row[$startcol + 44] : null;
            $this->identification_contrat = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
            $this->extraction_accords_cadres = ($row[$startcol + 46] !== null) ? (string) $row[$startcol + 46] : null;
            $this->extraction_siret_acheteur = ($row[$startcol + 47] !== null) ? (string) $row[$startcol + 47] : null;
            $this->marche_public_simplifie = ($row[$startcol + 48] !== null) ? (string) $row[$startcol + 48] : null;
            $this->consultation_demande_achat = ($row[$startcol + 49] !== null) ? (string) $row[$startcol + 49] : null;
            $this->authenticate_agent_by_ldap = ($row[$startcol + 50] !== null) ? (string) $row[$startcol + 50] : null;
            $this->consultation_via_import = ($row[$startcol + 51] !== null) ? (string) $row[$startcol + 51] : null;
            $this->expression_reg_reference = ($row[$startcol + 52] !== null) ? (string) $row[$startcol + 52] : null;
            $this->visioconference_cao = ($row[$startcol + 53] !== null) ? (string) $row[$startcol + 53] : null;
            $this->estimation_confidentiel = ($row[$startcol + 54] !== null) ? (string) $row[$startcol + 54] : null;
            $this->qualification_registre_depot = ($row[$startcol + 55] !== null) ? (string) $row[$startcol + 55] : null;
            $this->gestion_cao = ($row[$startcol + 56] !== null) ? (string) $row[$startcol + 56] : null;
            $this->referentiel_contact = ($row[$startcol + 57] !== null) ? (string) $row[$startcol + 57] : null;
            $this->gestion_montant_devise = ($row[$startcol + 58] !== null) ? (string) $row[$startcol + 58] : null;
            $this->gestion_rabais = ($row[$startcol + 59] !== null) ? (string) $row[$startcol + 59] : null;
            $this->gestion_caution_provisoire = ($row[$startcol + 60] !== null) ? (string) $row[$startcol + 60] : null;
            $this->gestion_travaux_cao = ($row[$startcol + 61] !== null) ? (string) $row[$startcol + 61] : null;
            $this->filtre_bdf_entreprise_valide = ($row[$startcol + 62] !== null) ? (string) $row[$startcol + 62] : null;
            $this->gestion_statistiques_pme = ($row[$startcol + 63] !== null) ? (string) $row[$startcol + 63] : null;
            $this->gestion_demandes_achats = ($row[$startcol + 64] !== null) ? (string) $row[$startcol + 64] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 65; // 65 = CommonConfigurationOrganismePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonConfigurationOrganisme object", $e);
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
            $con = Propel::getConnection(CommonConfigurationOrganismePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonConfigurationOrganismePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonConfigurationOrganismePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonConfigurationOrganismeQuery::create()
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
            $con = Propel::getConnection(CommonConfigurationOrganismePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonConfigurationOrganismePeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::ENCHERES)) {
            $modifiedColumns[':p' . $index++]  = '`encheres`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::CONSULTATION_PJ_AUTRES_PIECES_TELECHARGEABLES)) {
            $modifiedColumns[':p' . $index++]  = '`consultation_pj_autres_pieces_telechargeables`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::NO_ACTIVEX)) {
            $modifiedColumns[':p' . $index++]  = '`no_activex`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::GESTION_MAPA)) {
            $modifiedColumns[':p' . $index++]  = '`gestion_mapa`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::ARTICLE_133_UPLOAD_FICHIER)) {
            $modifiedColumns[':p' . $index++]  = '`article_133_upload_fichier`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::CENTRALE_PUBLICATION)) {
            $modifiedColumns[':p' . $index++]  = '`centrale_publication`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::ORGANISATION_CENTRALISEE)) {
            $modifiedColumns[':p' . $index++]  = '`organisation_centralisee`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::PRESENCE_ELU)) {
            $modifiedColumns[':p' . $index++]  = '`presence_elu`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::TRADUIRE_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`traduire_consultation`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::SUIVI_PASSATION)) {
            $modifiedColumns[':p' . $index++]  = '`suivi_passation`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::NUMEROTATION_REF_CONS)) {
            $modifiedColumns[':p' . $index++]  = '`numerotation_ref_cons`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::PMI_LIEN_PORTAIL_DEFENSE_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`pmi_lien_portail_defense_agent`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::INTERFACE_ARCHIVE_ARCADE_PMI)) {
            $modifiedColumns[':p' . $index++]  = '`interface_archive_arcade_pmi`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::DESARCHIVAGE_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`desarchivage_consultation`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::ALIMENTATION_AUTOMATIQUE_LISTE_INVITES)) {
            $modifiedColumns[':p' . $index++]  = '`alimentation_automatique_liste_invites`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::INTERFACE_CHORUS_PMI)) {
            $modifiedColumns[':p' . $index++]  = '`interface_chorus_pmi`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::ARCHIVAGE_CONSULTATION_SUR_PF)) {
            $modifiedColumns[':p' . $index++]  = '`archivage_consultation_sur_pf`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::AUTORISER_MODIFICATION_APRES_PHASE_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`autoriser_modification_apres_phase_consultation`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::IMPORTER_ENVELOPPE)) {
            $modifiedColumns[':p' . $index++]  = '`importer_enveloppe`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::EXPORT_MARCHES_NOTIFIES)) {
            $modifiedColumns[':p' . $index++]  = '`export_marches_notifies`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::ACCES_AGENTS_CFE_BD_FOURNISSEUR)) {
            $modifiedColumns[':p' . $index++]  = '`acces_agents_cfe_bd_fournisseur`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::ACCES_AGENTS_CFE_OUVERTURE_ANALYSE)) {
            $modifiedColumns[':p' . $index++]  = '`acces_agents_cfe_ouverture_analyse`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::UTILISER_PARAMETRAGE_ENCHERES)) {
            $modifiedColumns[':p' . $index++]  = '`utiliser_parametrage_encheres`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::GESTION_MANDATAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`gestion_mandataire`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::VERIFIER_COMPTE_BOAMP)) {
            $modifiedColumns[':p' . $index++]  = '`verifier_compte_boamp`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::FOUR_EYES)) {
            $modifiedColumns[':p' . $index++]  = '`four_eyes`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::INTERFACE_MODULE_RSEM)) {
            $modifiedColumns[':p' . $index++]  = '`interface_module_rsem`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::ARCHIVAGE_CONSULTATION_SAE_EXTERNE_ENVOI_ARCHIVE)) {
            $modifiedColumns[':p' . $index++]  = '`archivage_consultation_sae_externe_envoi_archive`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::ARCHIVAGE_CONSULTATION_SAE_EXTERNE_TELECHARGEMENT_ARCHIVE)) {
            $modifiedColumns[':p' . $index++]  = '`archivage_consultation_sae_externe_telechargement_archive`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::AGENT_VERIFICATION_CERTIFICAT_PEPPOL)) {
            $modifiedColumns[':p' . $index++]  = '`agent_verification_certificat_peppol`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::FUSEAU_HORAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`fuseau_horaire`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::FICHE_WEKA)) {
            $modifiedColumns[':p' . $index++]  = '`fiche_weka`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::MISE_DISPOSITION_PIECES_MARCHE)) {
            $modifiedColumns[':p' . $index++]  = '`mise_disposition_pieces_marche`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::BASE_DCE)) {
            $modifiedColumns[':p' . $index++]  = '`base_dce`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::AVIS_MEMBRES_COMMISION)) {
            $modifiedColumns[':p' . $index++]  = '`avis_membres_commision`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::DONNEES_REDAC)) {
            $modifiedColumns[':p' . $index++]  = '`Donnees_Redac`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::PERSONNALISER_AFFICHAGE_THEME_ET_ILLUSTRATION)) {
            $modifiedColumns[':p' . $index++]  = '`Personnaliser_Affichage_Theme_Et_Illustration`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::TYPE_CONTRAT)) {
            $modifiedColumns[':p' . $index++]  = '`type_contrat`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::ENTITE_ADJUDICATRICE)) {
            $modifiedColumns[':p' . $index++]  = '`entite_adjudicatrice`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::GESTION_OPERATIONS)) {
            $modifiedColumns[':p' . $index++]  = '`gestion_operations`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::CALENDRIER_DE_LA_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`calendrier_de_la_consultation`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::DONNEES_COMPLEMENTAIRES)) {
            $modifiedColumns[':p' . $index++]  = '`donnees_complementaires`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::ESPACE_COLLABORATIF)) {
            $modifiedColumns[':p' . $index++]  = '`espace_collaboratif`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::HISTORIQUE_NAVIGATION_INSCRITS)) {
            $modifiedColumns[':p' . $index++]  = '`historique_navigation_inscrits`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::IDENTIFICATION_CONTRAT)) {
            $modifiedColumns[':p' . $index++]  = '`Identification_contrat`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::EXTRACTION_ACCORDS_CADRES)) {
            $modifiedColumns[':p' . $index++]  = '`extraction_accords_cadres`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::EXTRACTION_SIRET_ACHETEUR)) {
            $modifiedColumns[':p' . $index++]  = '`extraction_siret_acheteur`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::MARCHE_PUBLIC_SIMPLIFIE)) {
            $modifiedColumns[':p' . $index++]  = '`marche_public_simplifie`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::CONSULTATION_DEMANDE_ACHAT)) {
            $modifiedColumns[':p' . $index++]  = '`consultation_demande_achat`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::AUTHENTICATE_AGENT_BY_LDAP)) {
            $modifiedColumns[':p' . $index++]  = '`authenticate_agent_by_ldap`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::CONSULTATION_VIA_IMPORT)) {
            $modifiedColumns[':p' . $index++]  = '`consultation_via_import`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::EXPRESSION_REG_REFERENCE)) {
            $modifiedColumns[':p' . $index++]  = '`EXPRESSION_REG_REFERENCE`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::VISIOCONFERENCE_CAO)) {
            $modifiedColumns[':p' . $index++]  = '`visioconference_cao`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::ESTIMATION_CONFIDENTIEL)) {
            $modifiedColumns[':p' . $index++]  = '`estimation_confidentiel`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::QUALIFICATION_REGISTRE_DEPOT)) {
            $modifiedColumns[':p' . $index++]  = '`qualification_registre_depot`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::GESTION_CAO)) {
            $modifiedColumns[':p' . $index++]  = '`gestion_cao`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::REFERENTIEL_CONTACT)) {
            $modifiedColumns[':p' . $index++]  = '`referentiel_contact`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::GESTION_MONTANT_DEVISE)) {
            $modifiedColumns[':p' . $index++]  = '`gestion_montant_devise`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::GESTION_RABAIS)) {
            $modifiedColumns[':p' . $index++]  = '`gestion_rabais`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::GESTION_CAUTION_PROVISOIRE)) {
            $modifiedColumns[':p' . $index++]  = '`gestion_caution_provisoire`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::GESTION_TRAVAUX_CAO)) {
            $modifiedColumns[':p' . $index++]  = '`gestion_travaux_cao`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::FILTRE_BDF_ENTREPRISE_VALIDE)) {
            $modifiedColumns[':p' . $index++]  = '`filtre_bdf_entreprise_valide`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::GESTION_STATISTIQUES_PME)) {
            $modifiedColumns[':p' . $index++]  = '`gestion_statistiques_pme`';
        }
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::GESTION_DEMANDES_ACHATS)) {
            $modifiedColumns[':p' . $index++]  = '`gestion_demandes_achats`';
        }

        $sql = sprintf(
            'INSERT INTO `configuration_organisme` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`organisme`':						
                        $stmt->bindValue($identifier, $this->organisme, PDO::PARAM_STR);
                        break;
                    case '`encheres`':						
                        $stmt->bindValue($identifier, $this->encheres, PDO::PARAM_STR);
                        break;
                    case '`consultation_pj_autres_pieces_telechargeables`':						
                        $stmt->bindValue($identifier, $this->consultation_pj_autres_pieces_telechargeables, PDO::PARAM_STR);
                        break;
                    case '`no_activex`':						
                        $stmt->bindValue($identifier, $this->no_activex, PDO::PARAM_STR);
                        break;
                    case '`gestion_mapa`':						
                        $stmt->bindValue($identifier, $this->gestion_mapa, PDO::PARAM_STR);
                        break;
                    case '`article_133_upload_fichier`':						
                        $stmt->bindValue($identifier, $this->article_133_upload_fichier, PDO::PARAM_STR);
                        break;
                    case '`centrale_publication`':						
                        $stmt->bindValue($identifier, $this->centrale_publication, PDO::PARAM_STR);
                        break;
                    case '`organisation_centralisee`':						
                        $stmt->bindValue($identifier, $this->organisation_centralisee, PDO::PARAM_STR);
                        break;
                    case '`presence_elu`':						
                        $stmt->bindValue($identifier, $this->presence_elu, PDO::PARAM_STR);
                        break;
                    case '`traduire_consultation`':						
                        $stmt->bindValue($identifier, $this->traduire_consultation, PDO::PARAM_STR);
                        break;
                    case '`suivi_passation`':						
                        $stmt->bindValue($identifier, $this->suivi_passation, PDO::PARAM_STR);
                        break;
                    case '`numerotation_ref_cons`':						
                        $stmt->bindValue($identifier, $this->numerotation_ref_cons, PDO::PARAM_STR);
                        break;
                    case '`pmi_lien_portail_defense_agent`':						
                        $stmt->bindValue($identifier, $this->pmi_lien_portail_defense_agent, PDO::PARAM_STR);
                        break;
                    case '`interface_archive_arcade_pmi`':						
                        $stmt->bindValue($identifier, $this->interface_archive_arcade_pmi, PDO::PARAM_STR);
                        break;
                    case '`desarchivage_consultation`':						
                        $stmt->bindValue($identifier, $this->desarchivage_consultation, PDO::PARAM_STR);
                        break;
                    case '`alimentation_automatique_liste_invites`':						
                        $stmt->bindValue($identifier, $this->alimentation_automatique_liste_invites, PDO::PARAM_STR);
                        break;
                    case '`interface_chorus_pmi`':						
                        $stmt->bindValue($identifier, $this->interface_chorus_pmi, PDO::PARAM_STR);
                        break;
                    case '`archivage_consultation_sur_pf`':						
                        $stmt->bindValue($identifier, $this->archivage_consultation_sur_pf, PDO::PARAM_STR);
                        break;
                    case '`autoriser_modification_apres_phase_consultation`':						
                        $stmt->bindValue($identifier, $this->autoriser_modification_apres_phase_consultation, PDO::PARAM_STR);
                        break;
                    case '`importer_enveloppe`':						
                        $stmt->bindValue($identifier, $this->importer_enveloppe, PDO::PARAM_STR);
                        break;
                    case '`export_marches_notifies`':						
                        $stmt->bindValue($identifier, $this->export_marches_notifies, PDO::PARAM_STR);
                        break;
                    case '`acces_agents_cfe_bd_fournisseur`':						
                        $stmt->bindValue($identifier, $this->acces_agents_cfe_bd_fournisseur, PDO::PARAM_STR);
                        break;
                    case '`acces_agents_cfe_ouverture_analyse`':						
                        $stmt->bindValue($identifier, $this->acces_agents_cfe_ouverture_analyse, PDO::PARAM_STR);
                        break;
                    case '`utiliser_parametrage_encheres`':						
                        $stmt->bindValue($identifier, $this->utiliser_parametrage_encheres, PDO::PARAM_STR);
                        break;
                    case '`gestion_mandataire`':						
                        $stmt->bindValue($identifier, $this->gestion_mandataire, PDO::PARAM_STR);
                        break;
                    case '`verifier_compte_boamp`':						
                        $stmt->bindValue($identifier, $this->verifier_compte_boamp, PDO::PARAM_STR);
                        break;
                    case '`four_eyes`':						
                        $stmt->bindValue($identifier, $this->four_eyes, PDO::PARAM_STR);
                        break;
                    case '`interface_module_rsem`':						
                        $stmt->bindValue($identifier, $this->interface_module_rsem, PDO::PARAM_STR);
                        break;
                    case '`archivage_consultation_sae_externe_envoi_archive`':						
                        $stmt->bindValue($identifier, $this->archivage_consultation_sae_externe_envoi_archive, PDO::PARAM_STR);
                        break;
                    case '`archivage_consultation_sae_externe_telechargement_archive`':						
                        $stmt->bindValue($identifier, $this->archivage_consultation_sae_externe_telechargement_archive, PDO::PARAM_STR);
                        break;
                    case '`agent_verification_certificat_peppol`':						
                        $stmt->bindValue($identifier, $this->agent_verification_certificat_peppol, PDO::PARAM_STR);
                        break;
                    case '`fuseau_horaire`':						
                        $stmt->bindValue($identifier, $this->fuseau_horaire, PDO::PARAM_STR);
                        break;
                    case '`fiche_weka`':						
                        $stmt->bindValue($identifier, $this->fiche_weka, PDO::PARAM_STR);
                        break;
                    case '`mise_disposition_pieces_marche`':						
                        $stmt->bindValue($identifier, $this->mise_disposition_pieces_marche, PDO::PARAM_STR);
                        break;
                    case '`base_dce`':						
                        $stmt->bindValue($identifier, $this->base_dce, PDO::PARAM_STR);
                        break;
                    case '`avis_membres_commision`':						
                        $stmt->bindValue($identifier, $this->avis_membres_commision, PDO::PARAM_STR);
                        break;
                    case '`Donnees_Redac`':						
                        $stmt->bindValue($identifier, $this->donnees_redac, PDO::PARAM_STR);
                        break;
                    case '`Personnaliser_Affichage_Theme_Et_Illustration`':						
                        $stmt->bindValue($identifier, $this->personnaliser_affichage_theme_et_illustration, PDO::PARAM_STR);
                        break;
                    case '`type_contrat`':						
                        $stmt->bindValue($identifier, $this->type_contrat, PDO::PARAM_STR);
                        break;
                    case '`entite_adjudicatrice`':						
                        $stmt->bindValue($identifier, $this->entite_adjudicatrice, PDO::PARAM_STR);
                        break;
                    case '`gestion_operations`':						
                        $stmt->bindValue($identifier, $this->gestion_operations, PDO::PARAM_STR);
                        break;
                    case '`calendrier_de_la_consultation`':						
                        $stmt->bindValue($identifier, $this->calendrier_de_la_consultation, PDO::PARAM_STR);
                        break;
                    case '`donnees_complementaires`':						
                        $stmt->bindValue($identifier, $this->donnees_complementaires, PDO::PARAM_STR);
                        break;
                    case '`espace_collaboratif`':						
                        $stmt->bindValue($identifier, $this->espace_collaboratif, PDO::PARAM_STR);
                        break;
                    case '`historique_navigation_inscrits`':						
                        $stmt->bindValue($identifier, $this->historique_navigation_inscrits, PDO::PARAM_STR);
                        break;
                    case '`Identification_contrat`':						
                        $stmt->bindValue($identifier, $this->identification_contrat, PDO::PARAM_STR);
                        break;
                    case '`extraction_accords_cadres`':						
                        $stmt->bindValue($identifier, $this->extraction_accords_cadres, PDO::PARAM_STR);
                        break;
                    case '`extraction_siret_acheteur`':						
                        $stmt->bindValue($identifier, $this->extraction_siret_acheteur, PDO::PARAM_STR);
                        break;
                    case '`marche_public_simplifie`':						
                        $stmt->bindValue($identifier, $this->marche_public_simplifie, PDO::PARAM_STR);
                        break;
                    case '`consultation_demande_achat`':						
                        $stmt->bindValue($identifier, $this->consultation_demande_achat, PDO::PARAM_STR);
                        break;
                    case '`authenticate_agent_by_ldap`':						
                        $stmt->bindValue($identifier, $this->authenticate_agent_by_ldap, PDO::PARAM_STR);
                        break;
                    case '`consultation_via_import`':						
                        $stmt->bindValue($identifier, $this->consultation_via_import, PDO::PARAM_STR);
                        break;
                    case '`EXPRESSION_REG_REFERENCE`':						
                        $stmt->bindValue($identifier, $this->expression_reg_reference, PDO::PARAM_STR);
                        break;
                    case '`visioconference_cao`':						
                        $stmt->bindValue($identifier, $this->visioconference_cao, PDO::PARAM_STR);
                        break;
                    case '`estimation_confidentiel`':						
                        $stmt->bindValue($identifier, $this->estimation_confidentiel, PDO::PARAM_STR);
                        break;
                    case '`qualification_registre_depot`':						
                        $stmt->bindValue($identifier, $this->qualification_registre_depot, PDO::PARAM_STR);
                        break;
                    case '`gestion_cao`':						
                        $stmt->bindValue($identifier, $this->gestion_cao, PDO::PARAM_STR);
                        break;
                    case '`referentiel_contact`':						
                        $stmt->bindValue($identifier, $this->referentiel_contact, PDO::PARAM_STR);
                        break;
                    case '`gestion_montant_devise`':						
                        $stmt->bindValue($identifier, $this->gestion_montant_devise, PDO::PARAM_STR);
                        break;
                    case '`gestion_rabais`':						
                        $stmt->bindValue($identifier, $this->gestion_rabais, PDO::PARAM_STR);
                        break;
                    case '`gestion_caution_provisoire`':						
                        $stmt->bindValue($identifier, $this->gestion_caution_provisoire, PDO::PARAM_STR);
                        break;
                    case '`gestion_travaux_cao`':						
                        $stmt->bindValue($identifier, $this->gestion_travaux_cao, PDO::PARAM_STR);
                        break;
                    case '`filtre_bdf_entreprise_valide`':						
                        $stmt->bindValue($identifier, $this->filtre_bdf_entreprise_valide, PDO::PARAM_STR);
                        break;
                    case '`gestion_statistiques_pme`':						
                        $stmt->bindValue($identifier, $this->gestion_statistiques_pme, PDO::PARAM_STR);
                        break;
                    case '`gestion_demandes_achats`':						
                        $stmt->bindValue($identifier, $this->gestion_demandes_achats, PDO::PARAM_STR);
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


            if (($retval = CommonConfigurationOrganismePeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonConfigurationOrganismePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getOrganisme();
                break;
            case 1:
                return $this->getEncheres();
                break;
            case 2:
                return $this->getConsultationPjAutresPiecesTelechargeables();
                break;
            case 3:
                return $this->getNoActivex();
                break;
            case 4:
                return $this->getGestionMapa();
                break;
            case 5:
                return $this->getArticle133UploadFichier();
                break;
            case 6:
                return $this->getCentralePublication();
                break;
            case 7:
                return $this->getOrganisationCentralisee();
                break;
            case 8:
                return $this->getPresenceElu();
                break;
            case 9:
                return $this->getTraduireConsultation();
                break;
            case 10:
                return $this->getSuiviPassation();
                break;
            case 11:
                return $this->getNumerotationRefCons();
                break;
            case 12:
                return $this->getPmiLienPortailDefenseAgent();
                break;
            case 13:
                return $this->getInterfaceArchiveArcadePmi();
                break;
            case 14:
                return $this->getDesarchivageConsultation();
                break;
            case 15:
                return $this->getAlimentationAutomatiqueListeInvites();
                break;
            case 16:
                return $this->getInterfaceChorusPmi();
                break;
            case 17:
                return $this->getArchivageConsultationSurPf();
                break;
            case 18:
                return $this->getAutoriserModificationApresPhaseConsultation();
                break;
            case 19:
                return $this->getImporterEnveloppe();
                break;
            case 20:
                return $this->getExportMarchesNotifies();
                break;
            case 21:
                return $this->getAccesAgentsCfeBdFournisseur();
                break;
            case 22:
                return $this->getAccesAgentsCfeOuvertureAnalyse();
                break;
            case 23:
                return $this->getUtiliserParametrageEncheres();
                break;
            case 24:
                return $this->getGestionMandataire();
                break;
            case 25:
                return $this->getVerifierCompteBoamp();
                break;
            case 26:
                return $this->getFourEyes();
                break;
            case 27:
                return $this->getInterfaceModuleRsem();
                break;
            case 28:
                return $this->getArchivageConsultationSaeExterneEnvoiArchive();
                break;
            case 29:
                return $this->getArchivageConsultationSaeExterneTelechargementArchive();
                break;
            case 30:
                return $this->getAgentVerificationCertificatPeppol();
                break;
            case 31:
                return $this->getFuseauHoraire();
                break;
            case 32:
                return $this->getFicheWeka();
                break;
            case 33:
                return $this->getMiseDispositionPiecesMarche();
                break;
            case 34:
                return $this->getBaseDce();
                break;
            case 35:
                return $this->getAvisMembresCommision();
                break;
            case 36:
                return $this->getDonneesRedac();
                break;
            case 37:
                return $this->getPersonnaliserAffichageThemeEtIllustration();
                break;
            case 38:
                return $this->getTypeContrat();
                break;
            case 39:
                return $this->getEntiteAdjudicatrice();
                break;
            case 40:
                return $this->getGestionOperations();
                break;
            case 41:
                return $this->getCalendrierDeLaConsultation();
                break;
            case 42:
                return $this->getDonneesComplementaires();
                break;
            case 43:
                return $this->getEspaceCollaboratif();
                break;
            case 44:
                return $this->getHistoriqueNavigationInscrits();
                break;
            case 45:
                return $this->getIdentificationContrat();
                break;
            case 46:
                return $this->getExtractionAccordsCadres();
                break;
            case 47:
                return $this->getExtractionSiretAcheteur();
                break;
            case 48:
                return $this->getMarchePublicSimplifie();
                break;
            case 49:
                return $this->getConsultationDemandeAchat();
                break;
            case 50:
                return $this->getAuthenticateAgentByLdap();
                break;
            case 51:
                return $this->getConsultationViaImport();
                break;
            case 52:
                return $this->getExpressionRegReference();
                break;
            case 53:
                return $this->getVisioconferenceCao();
                break;
            case 54:
                return $this->getEstimationConfidentiel();
                break;
            case 55:
                return $this->getQualificationRegistreDepot();
                break;
            case 56:
                return $this->getGestionCao();
                break;
            case 57:
                return $this->getReferentielContact();
                break;
            case 58:
                return $this->getGestionMontantDevise();
                break;
            case 59:
                return $this->getGestionRabais();
                break;
            case 60:
                return $this->getGestionCautionProvisoire();
                break;
            case 61:
                return $this->getGestionTravauxCao();
                break;
            case 62:
                return $this->getFiltreBdfEntrepriseValide();
                break;
            case 63:
                return $this->getGestionStatistiquesPme();
                break;
            case 64:
                return $this->getGestionDemandesAchats();
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
        if (isset($alreadyDumpedObjects['CommonConfigurationOrganisme'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonConfigurationOrganisme'][$this->getPrimaryKey()] = true;
        $keys = CommonConfigurationOrganismePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getOrganisme(),
            $keys[1] => $this->getEncheres(),
            $keys[2] => $this->getConsultationPjAutresPiecesTelechargeables(),
            $keys[3] => $this->getNoActivex(),
            $keys[4] => $this->getGestionMapa(),
            $keys[5] => $this->getArticle133UploadFichier(),
            $keys[6] => $this->getCentralePublication(),
            $keys[7] => $this->getOrganisationCentralisee(),
            $keys[8] => $this->getPresenceElu(),
            $keys[9] => $this->getTraduireConsultation(),
            $keys[10] => $this->getSuiviPassation(),
            $keys[11] => $this->getNumerotationRefCons(),
            $keys[12] => $this->getPmiLienPortailDefenseAgent(),
            $keys[13] => $this->getInterfaceArchiveArcadePmi(),
            $keys[14] => $this->getDesarchivageConsultation(),
            $keys[15] => $this->getAlimentationAutomatiqueListeInvites(),
            $keys[16] => $this->getInterfaceChorusPmi(),
            $keys[17] => $this->getArchivageConsultationSurPf(),
            $keys[18] => $this->getAutoriserModificationApresPhaseConsultation(),
            $keys[19] => $this->getImporterEnveloppe(),
            $keys[20] => $this->getExportMarchesNotifies(),
            $keys[21] => $this->getAccesAgentsCfeBdFournisseur(),
            $keys[22] => $this->getAccesAgentsCfeOuvertureAnalyse(),
            $keys[23] => $this->getUtiliserParametrageEncheres(),
            $keys[24] => $this->getGestionMandataire(),
            $keys[25] => $this->getVerifierCompteBoamp(),
            $keys[26] => $this->getFourEyes(),
            $keys[27] => $this->getInterfaceModuleRsem(),
            $keys[28] => $this->getArchivageConsultationSaeExterneEnvoiArchive(),
            $keys[29] => $this->getArchivageConsultationSaeExterneTelechargementArchive(),
            $keys[30] => $this->getAgentVerificationCertificatPeppol(),
            $keys[31] => $this->getFuseauHoraire(),
            $keys[32] => $this->getFicheWeka(),
            $keys[33] => $this->getMiseDispositionPiecesMarche(),
            $keys[34] => $this->getBaseDce(),
            $keys[35] => $this->getAvisMembresCommision(),
            $keys[36] => $this->getDonneesRedac(),
            $keys[37] => $this->getPersonnaliserAffichageThemeEtIllustration(),
            $keys[38] => $this->getTypeContrat(),
            $keys[39] => $this->getEntiteAdjudicatrice(),
            $keys[40] => $this->getGestionOperations(),
            $keys[41] => $this->getCalendrierDeLaConsultation(),
            $keys[42] => $this->getDonneesComplementaires(),
            $keys[43] => $this->getEspaceCollaboratif(),
            $keys[44] => $this->getHistoriqueNavigationInscrits(),
            $keys[45] => $this->getIdentificationContrat(),
            $keys[46] => $this->getExtractionAccordsCadres(),
            $keys[47] => $this->getExtractionSiretAcheteur(),
            $keys[48] => $this->getMarchePublicSimplifie(),
            $keys[49] => $this->getConsultationDemandeAchat(),
            $keys[50] => $this->getAuthenticateAgentByLdap(),
            $keys[51] => $this->getConsultationViaImport(),
            $keys[52] => $this->getExpressionRegReference(),
            $keys[53] => $this->getVisioconferenceCao(),
            $keys[54] => $this->getEstimationConfidentiel(),
            $keys[55] => $this->getQualificationRegistreDepot(),
            $keys[56] => $this->getGestionCao(),
            $keys[57] => $this->getReferentielContact(),
            $keys[58] => $this->getGestionMontantDevise(),
            $keys[59] => $this->getGestionRabais(),
            $keys[60] => $this->getGestionCautionProvisoire(),
            $keys[61] => $this->getGestionTravauxCao(),
            $keys[62] => $this->getFiltreBdfEntrepriseValide(),
            $keys[63] => $this->getGestionStatistiquesPme(),
            $keys[64] => $this->getGestionDemandesAchats(),
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
        $pos = CommonConfigurationOrganismePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setOrganisme($value);
                break;
            case 1:
                $this->setEncheres($value);
                break;
            case 2:
                $this->setConsultationPjAutresPiecesTelechargeables($value);
                break;
            case 3:
                $this->setNoActivex($value);
                break;
            case 4:
                $this->setGestionMapa($value);
                break;
            case 5:
                $this->setArticle133UploadFichier($value);
                break;
            case 6:
                $this->setCentralePublication($value);
                break;
            case 7:
                $this->setOrganisationCentralisee($value);
                break;
            case 8:
                $this->setPresenceElu($value);
                break;
            case 9:
                $this->setTraduireConsultation($value);
                break;
            case 10:
                $this->setSuiviPassation($value);
                break;
            case 11:
                $this->setNumerotationRefCons($value);
                break;
            case 12:
                $this->setPmiLienPortailDefenseAgent($value);
                break;
            case 13:
                $this->setInterfaceArchiveArcadePmi($value);
                break;
            case 14:
                $this->setDesarchivageConsultation($value);
                break;
            case 15:
                $this->setAlimentationAutomatiqueListeInvites($value);
                break;
            case 16:
                $this->setInterfaceChorusPmi($value);
                break;
            case 17:
                $this->setArchivageConsultationSurPf($value);
                break;
            case 18:
                $this->setAutoriserModificationApresPhaseConsultation($value);
                break;
            case 19:
                $this->setImporterEnveloppe($value);
                break;
            case 20:
                $this->setExportMarchesNotifies($value);
                break;
            case 21:
                $this->setAccesAgentsCfeBdFournisseur($value);
                break;
            case 22:
                $this->setAccesAgentsCfeOuvertureAnalyse($value);
                break;
            case 23:
                $this->setUtiliserParametrageEncheres($value);
                break;
            case 24:
                $this->setGestionMandataire($value);
                break;
            case 25:
                $this->setVerifierCompteBoamp($value);
                break;
            case 26:
                $this->setFourEyes($value);
                break;
            case 27:
                $this->setInterfaceModuleRsem($value);
                break;
            case 28:
                $this->setArchivageConsultationSaeExterneEnvoiArchive($value);
                break;
            case 29:
                $this->setArchivageConsultationSaeExterneTelechargementArchive($value);
                break;
            case 30:
                $this->setAgentVerificationCertificatPeppol($value);
                break;
            case 31:
                $this->setFuseauHoraire($value);
                break;
            case 32:
                $this->setFicheWeka($value);
                break;
            case 33:
                $this->setMiseDispositionPiecesMarche($value);
                break;
            case 34:
                $this->setBaseDce($value);
                break;
            case 35:
                $this->setAvisMembresCommision($value);
                break;
            case 36:
                $this->setDonneesRedac($value);
                break;
            case 37:
                $this->setPersonnaliserAffichageThemeEtIllustration($value);
                break;
            case 38:
                $this->setTypeContrat($value);
                break;
            case 39:
                $this->setEntiteAdjudicatrice($value);
                break;
            case 40:
                $this->setGestionOperations($value);
                break;
            case 41:
                $this->setCalendrierDeLaConsultation($value);
                break;
            case 42:
                $this->setDonneesComplementaires($value);
                break;
            case 43:
                $this->setEspaceCollaboratif($value);
                break;
            case 44:
                $this->setHistoriqueNavigationInscrits($value);
                break;
            case 45:
                $this->setIdentificationContrat($value);
                break;
            case 46:
                $this->setExtractionAccordsCadres($value);
                break;
            case 47:
                $this->setExtractionSiretAcheteur($value);
                break;
            case 48:
                $this->setMarchePublicSimplifie($value);
                break;
            case 49:
                $this->setConsultationDemandeAchat($value);
                break;
            case 50:
                $this->setAuthenticateAgentByLdap($value);
                break;
            case 51:
                $this->setConsultationViaImport($value);
                break;
            case 52:
                $this->setExpressionRegReference($value);
                break;
            case 53:
                $this->setVisioconferenceCao($value);
                break;
            case 54:
                $this->setEstimationConfidentiel($value);
                break;
            case 55:
                $this->setQualificationRegistreDepot($value);
                break;
            case 56:
                $this->setGestionCao($value);
                break;
            case 57:
                $this->setReferentielContact($value);
                break;
            case 58:
                $this->setGestionMontantDevise($value);
                break;
            case 59:
                $this->setGestionRabais($value);
                break;
            case 60:
                $this->setGestionCautionProvisoire($value);
                break;
            case 61:
                $this->setGestionTravauxCao($value);
                break;
            case 62:
                $this->setFiltreBdfEntrepriseValide($value);
                break;
            case 63:
                $this->setGestionStatistiquesPme($value);
                break;
            case 64:
                $this->setGestionDemandesAchats($value);
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
        $keys = CommonConfigurationOrganismePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setOrganisme($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setEncheres($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setConsultationPjAutresPiecesTelechargeables($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setNoActivex($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setGestionMapa($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setArticle133UploadFichier($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setCentralePublication($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setOrganisationCentralisee($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setPresenceElu($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setTraduireConsultation($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setSuiviPassation($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setNumerotationRefCons($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setPmiLienPortailDefenseAgent($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setInterfaceArchiveArcadePmi($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setDesarchivageConsultation($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setAlimentationAutomatiqueListeInvites($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setInterfaceChorusPmi($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setArchivageConsultationSurPf($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setAutoriserModificationApresPhaseConsultation($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setImporterEnveloppe($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setExportMarchesNotifies($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setAccesAgentsCfeBdFournisseur($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setAccesAgentsCfeOuvertureAnalyse($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setUtiliserParametrageEncheres($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setGestionMandataire($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setVerifierCompteBoamp($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setFourEyes($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setInterfaceModuleRsem($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setArchivageConsultationSaeExterneEnvoiArchive($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setArchivageConsultationSaeExterneTelechargementArchive($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setAgentVerificationCertificatPeppol($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setFuseauHoraire($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setFicheWeka($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setMiseDispositionPiecesMarche($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setBaseDce($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setAvisMembresCommision($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setDonneesRedac($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setPersonnaliserAffichageThemeEtIllustration($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setTypeContrat($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setEntiteAdjudicatrice($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setGestionOperations($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setCalendrierDeLaConsultation($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setDonneesComplementaires($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setEspaceCollaboratif($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setHistoriqueNavigationInscrits($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setIdentificationContrat($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setExtractionAccordsCadres($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setExtractionSiretAcheteur($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setMarchePublicSimplifie($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setConsultationDemandeAchat($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setAuthenticateAgentByLdap($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setConsultationViaImport($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setExpressionRegReference($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setVisioconferenceCao($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setEstimationConfidentiel($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setQualificationRegistreDepot($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setGestionCao($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setReferentielContact($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setGestionMontantDevise($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setGestionRabais($arr[$keys[59]]);
        if (array_key_exists($keys[60], $arr)) $this->setGestionCautionProvisoire($arr[$keys[60]]);
        if (array_key_exists($keys[61], $arr)) $this->setGestionTravauxCao($arr[$keys[61]]);
        if (array_key_exists($keys[62], $arr)) $this->setFiltreBdfEntrepriseValide($arr[$keys[62]]);
        if (array_key_exists($keys[63], $arr)) $this->setGestionStatistiquesPme($arr[$keys[63]]);
        if (array_key_exists($keys[64], $arr)) $this->setGestionDemandesAchats($arr[$keys[64]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonConfigurationOrganismePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonConfigurationOrganismePeer::ORGANISME)) $criteria->add(CommonConfigurationOrganismePeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::ENCHERES)) $criteria->add(CommonConfigurationOrganismePeer::ENCHERES, $this->encheres);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::CONSULTATION_PJ_AUTRES_PIECES_TELECHARGEABLES)) $criteria->add(CommonConfigurationOrganismePeer::CONSULTATION_PJ_AUTRES_PIECES_TELECHARGEABLES, $this->consultation_pj_autres_pieces_telechargeables);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::NO_ACTIVEX)) $criteria->add(CommonConfigurationOrganismePeer::NO_ACTIVEX, $this->no_activex);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::GESTION_MAPA)) $criteria->add(CommonConfigurationOrganismePeer::GESTION_MAPA, $this->gestion_mapa);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::ARTICLE_133_UPLOAD_FICHIER)) $criteria->add(CommonConfigurationOrganismePeer::ARTICLE_133_UPLOAD_FICHIER, $this->article_133_upload_fichier);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::CENTRALE_PUBLICATION)) $criteria->add(CommonConfigurationOrganismePeer::CENTRALE_PUBLICATION, $this->centrale_publication);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::ORGANISATION_CENTRALISEE)) $criteria->add(CommonConfigurationOrganismePeer::ORGANISATION_CENTRALISEE, $this->organisation_centralisee);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::PRESENCE_ELU)) $criteria->add(CommonConfigurationOrganismePeer::PRESENCE_ELU, $this->presence_elu);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::TRADUIRE_CONSULTATION)) $criteria->add(CommonConfigurationOrganismePeer::TRADUIRE_CONSULTATION, $this->traduire_consultation);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::SUIVI_PASSATION)) $criteria->add(CommonConfigurationOrganismePeer::SUIVI_PASSATION, $this->suivi_passation);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::NUMEROTATION_REF_CONS)) $criteria->add(CommonConfigurationOrganismePeer::NUMEROTATION_REF_CONS, $this->numerotation_ref_cons);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::PMI_LIEN_PORTAIL_DEFENSE_AGENT)) $criteria->add(CommonConfigurationOrganismePeer::PMI_LIEN_PORTAIL_DEFENSE_AGENT, $this->pmi_lien_portail_defense_agent);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::INTERFACE_ARCHIVE_ARCADE_PMI)) $criteria->add(CommonConfigurationOrganismePeer::INTERFACE_ARCHIVE_ARCADE_PMI, $this->interface_archive_arcade_pmi);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::DESARCHIVAGE_CONSULTATION)) $criteria->add(CommonConfigurationOrganismePeer::DESARCHIVAGE_CONSULTATION, $this->desarchivage_consultation);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::ALIMENTATION_AUTOMATIQUE_LISTE_INVITES)) $criteria->add(CommonConfigurationOrganismePeer::ALIMENTATION_AUTOMATIQUE_LISTE_INVITES, $this->alimentation_automatique_liste_invites);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::INTERFACE_CHORUS_PMI)) $criteria->add(CommonConfigurationOrganismePeer::INTERFACE_CHORUS_PMI, $this->interface_chorus_pmi);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::ARCHIVAGE_CONSULTATION_SUR_PF)) $criteria->add(CommonConfigurationOrganismePeer::ARCHIVAGE_CONSULTATION_SUR_PF, $this->archivage_consultation_sur_pf);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::AUTORISER_MODIFICATION_APRES_PHASE_CONSULTATION)) $criteria->add(CommonConfigurationOrganismePeer::AUTORISER_MODIFICATION_APRES_PHASE_CONSULTATION, $this->autoriser_modification_apres_phase_consultation);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::IMPORTER_ENVELOPPE)) $criteria->add(CommonConfigurationOrganismePeer::IMPORTER_ENVELOPPE, $this->importer_enveloppe);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::EXPORT_MARCHES_NOTIFIES)) $criteria->add(CommonConfigurationOrganismePeer::EXPORT_MARCHES_NOTIFIES, $this->export_marches_notifies);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::ACCES_AGENTS_CFE_BD_FOURNISSEUR)) $criteria->add(CommonConfigurationOrganismePeer::ACCES_AGENTS_CFE_BD_FOURNISSEUR, $this->acces_agents_cfe_bd_fournisseur);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::ACCES_AGENTS_CFE_OUVERTURE_ANALYSE)) $criteria->add(CommonConfigurationOrganismePeer::ACCES_AGENTS_CFE_OUVERTURE_ANALYSE, $this->acces_agents_cfe_ouverture_analyse);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::UTILISER_PARAMETRAGE_ENCHERES)) $criteria->add(CommonConfigurationOrganismePeer::UTILISER_PARAMETRAGE_ENCHERES, $this->utiliser_parametrage_encheres);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::GESTION_MANDATAIRE)) $criteria->add(CommonConfigurationOrganismePeer::GESTION_MANDATAIRE, $this->gestion_mandataire);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::VERIFIER_COMPTE_BOAMP)) $criteria->add(CommonConfigurationOrganismePeer::VERIFIER_COMPTE_BOAMP, $this->verifier_compte_boamp);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::FOUR_EYES)) $criteria->add(CommonConfigurationOrganismePeer::FOUR_EYES, $this->four_eyes);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::INTERFACE_MODULE_RSEM)) $criteria->add(CommonConfigurationOrganismePeer::INTERFACE_MODULE_RSEM, $this->interface_module_rsem);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::ARCHIVAGE_CONSULTATION_SAE_EXTERNE_ENVOI_ARCHIVE)) $criteria->add(CommonConfigurationOrganismePeer::ARCHIVAGE_CONSULTATION_SAE_EXTERNE_ENVOI_ARCHIVE, $this->archivage_consultation_sae_externe_envoi_archive);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::ARCHIVAGE_CONSULTATION_SAE_EXTERNE_TELECHARGEMENT_ARCHIVE)) $criteria->add(CommonConfigurationOrganismePeer::ARCHIVAGE_CONSULTATION_SAE_EXTERNE_TELECHARGEMENT_ARCHIVE, $this->archivage_consultation_sae_externe_telechargement_archive);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::AGENT_VERIFICATION_CERTIFICAT_PEPPOL)) $criteria->add(CommonConfigurationOrganismePeer::AGENT_VERIFICATION_CERTIFICAT_PEPPOL, $this->agent_verification_certificat_peppol);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::FUSEAU_HORAIRE)) $criteria->add(CommonConfigurationOrganismePeer::FUSEAU_HORAIRE, $this->fuseau_horaire);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::FICHE_WEKA)) $criteria->add(CommonConfigurationOrganismePeer::FICHE_WEKA, $this->fiche_weka);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::MISE_DISPOSITION_PIECES_MARCHE)) $criteria->add(CommonConfigurationOrganismePeer::MISE_DISPOSITION_PIECES_MARCHE, $this->mise_disposition_pieces_marche);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::BASE_DCE)) $criteria->add(CommonConfigurationOrganismePeer::BASE_DCE, $this->base_dce);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::AVIS_MEMBRES_COMMISION)) $criteria->add(CommonConfigurationOrganismePeer::AVIS_MEMBRES_COMMISION, $this->avis_membres_commision);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::DONNEES_REDAC)) $criteria->add(CommonConfigurationOrganismePeer::DONNEES_REDAC, $this->donnees_redac);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::PERSONNALISER_AFFICHAGE_THEME_ET_ILLUSTRATION)) $criteria->add(CommonConfigurationOrganismePeer::PERSONNALISER_AFFICHAGE_THEME_ET_ILLUSTRATION, $this->personnaliser_affichage_theme_et_illustration);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::TYPE_CONTRAT)) $criteria->add(CommonConfigurationOrganismePeer::TYPE_CONTRAT, $this->type_contrat);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::ENTITE_ADJUDICATRICE)) $criteria->add(CommonConfigurationOrganismePeer::ENTITE_ADJUDICATRICE, $this->entite_adjudicatrice);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::GESTION_OPERATIONS)) $criteria->add(CommonConfigurationOrganismePeer::GESTION_OPERATIONS, $this->gestion_operations);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::CALENDRIER_DE_LA_CONSULTATION)) $criteria->add(CommonConfigurationOrganismePeer::CALENDRIER_DE_LA_CONSULTATION, $this->calendrier_de_la_consultation);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::DONNEES_COMPLEMENTAIRES)) $criteria->add(CommonConfigurationOrganismePeer::DONNEES_COMPLEMENTAIRES, $this->donnees_complementaires);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::ESPACE_COLLABORATIF)) $criteria->add(CommonConfigurationOrganismePeer::ESPACE_COLLABORATIF, $this->espace_collaboratif);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::HISTORIQUE_NAVIGATION_INSCRITS)) $criteria->add(CommonConfigurationOrganismePeer::HISTORIQUE_NAVIGATION_INSCRITS, $this->historique_navigation_inscrits);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::IDENTIFICATION_CONTRAT)) $criteria->add(CommonConfigurationOrganismePeer::IDENTIFICATION_CONTRAT, $this->identification_contrat);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::EXTRACTION_ACCORDS_CADRES)) $criteria->add(CommonConfigurationOrganismePeer::EXTRACTION_ACCORDS_CADRES, $this->extraction_accords_cadres);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::EXTRACTION_SIRET_ACHETEUR)) $criteria->add(CommonConfigurationOrganismePeer::EXTRACTION_SIRET_ACHETEUR, $this->extraction_siret_acheteur);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::MARCHE_PUBLIC_SIMPLIFIE)) $criteria->add(CommonConfigurationOrganismePeer::MARCHE_PUBLIC_SIMPLIFIE, $this->marche_public_simplifie);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::CONSULTATION_DEMANDE_ACHAT)) $criteria->add(CommonConfigurationOrganismePeer::CONSULTATION_DEMANDE_ACHAT, $this->consultation_demande_achat);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::AUTHENTICATE_AGENT_BY_LDAP)) $criteria->add(CommonConfigurationOrganismePeer::AUTHENTICATE_AGENT_BY_LDAP, $this->authenticate_agent_by_ldap);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::CONSULTATION_VIA_IMPORT)) $criteria->add(CommonConfigurationOrganismePeer::CONSULTATION_VIA_IMPORT, $this->consultation_via_import);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::EXPRESSION_REG_REFERENCE)) $criteria->add(CommonConfigurationOrganismePeer::EXPRESSION_REG_REFERENCE, $this->expression_reg_reference);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::VISIOCONFERENCE_CAO)) $criteria->add(CommonConfigurationOrganismePeer::VISIOCONFERENCE_CAO, $this->visioconference_cao);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::ESTIMATION_CONFIDENTIEL)) $criteria->add(CommonConfigurationOrganismePeer::ESTIMATION_CONFIDENTIEL, $this->estimation_confidentiel);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::QUALIFICATION_REGISTRE_DEPOT)) $criteria->add(CommonConfigurationOrganismePeer::QUALIFICATION_REGISTRE_DEPOT, $this->qualification_registre_depot);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::GESTION_CAO)) $criteria->add(CommonConfigurationOrganismePeer::GESTION_CAO, $this->gestion_cao);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::REFERENTIEL_CONTACT)) $criteria->add(CommonConfigurationOrganismePeer::REFERENTIEL_CONTACT, $this->referentiel_contact);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::GESTION_MONTANT_DEVISE)) $criteria->add(CommonConfigurationOrganismePeer::GESTION_MONTANT_DEVISE, $this->gestion_montant_devise);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::GESTION_RABAIS)) $criteria->add(CommonConfigurationOrganismePeer::GESTION_RABAIS, $this->gestion_rabais);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::GESTION_CAUTION_PROVISOIRE)) $criteria->add(CommonConfigurationOrganismePeer::GESTION_CAUTION_PROVISOIRE, $this->gestion_caution_provisoire);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::GESTION_TRAVAUX_CAO)) $criteria->add(CommonConfigurationOrganismePeer::GESTION_TRAVAUX_CAO, $this->gestion_travaux_cao);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::FILTRE_BDF_ENTREPRISE_VALIDE)) $criteria->add(CommonConfigurationOrganismePeer::FILTRE_BDF_ENTREPRISE_VALIDE, $this->filtre_bdf_entreprise_valide);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::GESTION_STATISTIQUES_PME)) $criteria->add(CommonConfigurationOrganismePeer::GESTION_STATISTIQUES_PME, $this->gestion_statistiques_pme);
        if ($this->isColumnModified(CommonConfigurationOrganismePeer::GESTION_DEMANDES_ACHATS)) $criteria->add(CommonConfigurationOrganismePeer::GESTION_DEMANDES_ACHATS, $this->gestion_demandes_achats);

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
        $criteria = new Criteria(CommonConfigurationOrganismePeer::DATABASE_NAME);
        $criteria->add(CommonConfigurationOrganismePeer::ORGANISME, $this->organisme);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getOrganisme();
    }

    /**
     * Generic method to set the primary key (organisme column).
     *
     * @param  string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setOrganisme($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getOrganisme();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonConfigurationOrganisme (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setEncheres($this->getEncheres());
        $copyObj->setConsultationPjAutresPiecesTelechargeables($this->getConsultationPjAutresPiecesTelechargeables());
        $copyObj->setNoActivex($this->getNoActivex());
        $copyObj->setGestionMapa($this->getGestionMapa());
        $copyObj->setArticle133UploadFichier($this->getArticle133UploadFichier());
        $copyObj->setCentralePublication($this->getCentralePublication());
        $copyObj->setOrganisationCentralisee($this->getOrganisationCentralisee());
        $copyObj->setPresenceElu($this->getPresenceElu());
        $copyObj->setTraduireConsultation($this->getTraduireConsultation());
        $copyObj->setSuiviPassation($this->getSuiviPassation());
        $copyObj->setNumerotationRefCons($this->getNumerotationRefCons());
        $copyObj->setPmiLienPortailDefenseAgent($this->getPmiLienPortailDefenseAgent());
        $copyObj->setInterfaceArchiveArcadePmi($this->getInterfaceArchiveArcadePmi());
        $copyObj->setDesarchivageConsultation($this->getDesarchivageConsultation());
        $copyObj->setAlimentationAutomatiqueListeInvites($this->getAlimentationAutomatiqueListeInvites());
        $copyObj->setInterfaceChorusPmi($this->getInterfaceChorusPmi());
        $copyObj->setArchivageConsultationSurPf($this->getArchivageConsultationSurPf());
        $copyObj->setAutoriserModificationApresPhaseConsultation($this->getAutoriserModificationApresPhaseConsultation());
        $copyObj->setImporterEnveloppe($this->getImporterEnveloppe());
        $copyObj->setExportMarchesNotifies($this->getExportMarchesNotifies());
        $copyObj->setAccesAgentsCfeBdFournisseur($this->getAccesAgentsCfeBdFournisseur());
        $copyObj->setAccesAgentsCfeOuvertureAnalyse($this->getAccesAgentsCfeOuvertureAnalyse());
        $copyObj->setUtiliserParametrageEncheres($this->getUtiliserParametrageEncheres());
        $copyObj->setGestionMandataire($this->getGestionMandataire());
        $copyObj->setVerifierCompteBoamp($this->getVerifierCompteBoamp());
        $copyObj->setFourEyes($this->getFourEyes());
        $copyObj->setInterfaceModuleRsem($this->getInterfaceModuleRsem());
        $copyObj->setArchivageConsultationSaeExterneEnvoiArchive($this->getArchivageConsultationSaeExterneEnvoiArchive());
        $copyObj->setArchivageConsultationSaeExterneTelechargementArchive($this->getArchivageConsultationSaeExterneTelechargementArchive());
        $copyObj->setAgentVerificationCertificatPeppol($this->getAgentVerificationCertificatPeppol());
        $copyObj->setFuseauHoraire($this->getFuseauHoraire());
        $copyObj->setFicheWeka($this->getFicheWeka());
        $copyObj->setMiseDispositionPiecesMarche($this->getMiseDispositionPiecesMarche());
        $copyObj->setBaseDce($this->getBaseDce());
        $copyObj->setAvisMembresCommision($this->getAvisMembresCommision());
        $copyObj->setDonneesRedac($this->getDonneesRedac());
        $copyObj->setPersonnaliserAffichageThemeEtIllustration($this->getPersonnaliserAffichageThemeEtIllustration());
        $copyObj->setTypeContrat($this->getTypeContrat());
        $copyObj->setEntiteAdjudicatrice($this->getEntiteAdjudicatrice());
        $copyObj->setGestionOperations($this->getGestionOperations());
        $copyObj->setCalendrierDeLaConsultation($this->getCalendrierDeLaConsultation());
        $copyObj->setDonneesComplementaires($this->getDonneesComplementaires());
        $copyObj->setEspaceCollaboratif($this->getEspaceCollaboratif());
        $copyObj->setHistoriqueNavigationInscrits($this->getHistoriqueNavigationInscrits());
        $copyObj->setIdentificationContrat($this->getIdentificationContrat());
        $copyObj->setExtractionAccordsCadres($this->getExtractionAccordsCadres());
        $copyObj->setExtractionSiretAcheteur($this->getExtractionSiretAcheteur());
        $copyObj->setMarchePublicSimplifie($this->getMarchePublicSimplifie());
        $copyObj->setConsultationDemandeAchat($this->getConsultationDemandeAchat());
        $copyObj->setAuthenticateAgentByLdap($this->getAuthenticateAgentByLdap());
        $copyObj->setConsultationViaImport($this->getConsultationViaImport());
        $copyObj->setExpressionRegReference($this->getExpressionRegReference());
        $copyObj->setVisioconferenceCao($this->getVisioconferenceCao());
        $copyObj->setEstimationConfidentiel($this->getEstimationConfidentiel());
        $copyObj->setQualificationRegistreDepot($this->getQualificationRegistreDepot());
        $copyObj->setGestionCao($this->getGestionCao());
        $copyObj->setReferentielContact($this->getReferentielContact());
        $copyObj->setGestionMontantDevise($this->getGestionMontantDevise());
        $copyObj->setGestionRabais($this->getGestionRabais());
        $copyObj->setGestionCautionProvisoire($this->getGestionCautionProvisoire());
        $copyObj->setGestionTravauxCao($this->getGestionTravauxCao());
        $copyObj->setFiltreBdfEntrepriseValide($this->getFiltreBdfEntrepriseValide());
        $copyObj->setGestionStatistiquesPme($this->getGestionStatistiquesPme());
        $copyObj->setGestionDemandesAchats($this->getGestionDemandesAchats());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setOrganisme(''); // this is a auto-increment column, so set to default value
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
     * @return CommonConfigurationOrganisme Clone of current object.
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
     * @return CommonConfigurationOrganismePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonConfigurationOrganismePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->organisme = null;
        $this->encheres = null;
        $this->consultation_pj_autres_pieces_telechargeables = null;
        $this->no_activex = null;
        $this->gestion_mapa = null;
        $this->article_133_upload_fichier = null;
        $this->centrale_publication = null;
        $this->organisation_centralisee = null;
        $this->presence_elu = null;
        $this->traduire_consultation = null;
        $this->suivi_passation = null;
        $this->numerotation_ref_cons = null;
        $this->pmi_lien_portail_defense_agent = null;
        $this->interface_archive_arcade_pmi = null;
        $this->desarchivage_consultation = null;
        $this->alimentation_automatique_liste_invites = null;
        $this->interface_chorus_pmi = null;
        $this->archivage_consultation_sur_pf = null;
        $this->autoriser_modification_apres_phase_consultation = null;
        $this->importer_enveloppe = null;
        $this->export_marches_notifies = null;
        $this->acces_agents_cfe_bd_fournisseur = null;
        $this->acces_agents_cfe_ouverture_analyse = null;
        $this->utiliser_parametrage_encheres = null;
        $this->gestion_mandataire = null;
        $this->verifier_compte_boamp = null;
        $this->four_eyes = null;
        $this->interface_module_rsem = null;
        $this->archivage_consultation_sae_externe_envoi_archive = null;
        $this->archivage_consultation_sae_externe_telechargement_archive = null;
        $this->agent_verification_certificat_peppol = null;
        $this->fuseau_horaire = null;
        $this->fiche_weka = null;
        $this->mise_disposition_pieces_marche = null;
        $this->base_dce = null;
        $this->avis_membres_commision = null;
        $this->donnees_redac = null;
        $this->personnaliser_affichage_theme_et_illustration = null;
        $this->type_contrat = null;
        $this->entite_adjudicatrice = null;
        $this->gestion_operations = null;
        $this->calendrier_de_la_consultation = null;
        $this->donnees_complementaires = null;
        $this->espace_collaboratif = null;
        $this->historique_navigation_inscrits = null;
        $this->identification_contrat = null;
        $this->extraction_accords_cadres = null;
        $this->extraction_siret_acheteur = null;
        $this->marche_public_simplifie = null;
        $this->consultation_demande_achat = null;
        $this->authenticate_agent_by_ldap = null;
        $this->consultation_via_import = null;
        $this->expression_reg_reference = null;
        $this->visioconference_cao = null;
        $this->estimation_confidentiel = null;
        $this->qualification_registre_depot = null;
        $this->gestion_cao = null;
        $this->referentiel_contact = null;
        $this->gestion_montant_devise = null;
        $this->gestion_rabais = null;
        $this->gestion_caution_provisoire = null;
        $this->gestion_travaux_cao = null;
        $this->filtre_bdf_entreprise_valide = null;
        $this->gestion_statistiques_pme = null;
        $this->gestion_demandes_achats = null;
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
        return (string) $this->exportTo(CommonConfigurationOrganismePeer::DEFAULT_STRING_FORMAT);
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
