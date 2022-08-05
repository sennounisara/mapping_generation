<?php


/**
 * Base static class for performing query and update operations on the 'configuration_organisme' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonConfigurationOrganismePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'configuration_organisme';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonConfigurationOrganisme';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonConfigurationOrganismeTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 65;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 65;

    /** the column name for the organisme field */
    const ORGANISME = 'configuration_organisme.organisme';

    /** the column name for the encheres field */
    const ENCHERES = 'configuration_organisme.encheres';

    /** the column name for the consultation_pj_autres_pieces_telechargeables field */
    const CONSULTATION_PJ_AUTRES_PIECES_TELECHARGEABLES = 'configuration_organisme.consultation_pj_autres_pieces_telechargeables';

    /** the column name for the no_activex field */
    const NO_ACTIVEX = 'configuration_organisme.no_activex';

    /** the column name for the gestion_mapa field */
    const GESTION_MAPA = 'configuration_organisme.gestion_mapa';

    /** the column name for the article_133_upload_fichier field */
    const ARTICLE_133_UPLOAD_FICHIER = 'configuration_organisme.article_133_upload_fichier';

    /** the column name for the centrale_publication field */
    const CENTRALE_PUBLICATION = 'configuration_organisme.centrale_publication';

    /** the column name for the organisation_centralisee field */
    const ORGANISATION_CENTRALISEE = 'configuration_organisme.organisation_centralisee';

    /** the column name for the presence_elu field */
    const PRESENCE_ELU = 'configuration_organisme.presence_elu';

    /** the column name for the traduire_consultation field */
    const TRADUIRE_CONSULTATION = 'configuration_organisme.traduire_consultation';

    /** the column name for the suivi_passation field */
    const SUIVI_PASSATION = 'configuration_organisme.suivi_passation';

    /** the column name for the numerotation_ref_cons field */
    const NUMEROTATION_REF_CONS = 'configuration_organisme.numerotation_ref_cons';

    /** the column name for the pmi_lien_portail_defense_agent field */
    const PMI_LIEN_PORTAIL_DEFENSE_AGENT = 'configuration_organisme.pmi_lien_portail_defense_agent';

    /** the column name for the interface_archive_arcade_pmi field */
    const INTERFACE_ARCHIVE_ARCADE_PMI = 'configuration_organisme.interface_archive_arcade_pmi';

    /** the column name for the desarchivage_consultation field */
    const DESARCHIVAGE_CONSULTATION = 'configuration_organisme.desarchivage_consultation';

    /** the column name for the alimentation_automatique_liste_invites field */
    const ALIMENTATION_AUTOMATIQUE_LISTE_INVITES = 'configuration_organisme.alimentation_automatique_liste_invites';

    /** the column name for the interface_chorus_pmi field */
    const INTERFACE_CHORUS_PMI = 'configuration_organisme.interface_chorus_pmi';

    /** the column name for the archivage_consultation_sur_pf field */
    const ARCHIVAGE_CONSULTATION_SUR_PF = 'configuration_organisme.archivage_consultation_sur_pf';

    /** the column name for the autoriser_modification_apres_phase_consultation field */
    const AUTORISER_MODIFICATION_APRES_PHASE_CONSULTATION = 'configuration_organisme.autoriser_modification_apres_phase_consultation';

    /** the column name for the importer_enveloppe field */
    const IMPORTER_ENVELOPPE = 'configuration_organisme.importer_enveloppe';

    /** the column name for the export_marches_notifies field */
    const EXPORT_MARCHES_NOTIFIES = 'configuration_organisme.export_marches_notifies';

    /** the column name for the acces_agents_cfe_bd_fournisseur field */
    const ACCES_AGENTS_CFE_BD_FOURNISSEUR = 'configuration_organisme.acces_agents_cfe_bd_fournisseur';

    /** the column name for the acces_agents_cfe_ouverture_analyse field */
    const ACCES_AGENTS_CFE_OUVERTURE_ANALYSE = 'configuration_organisme.acces_agents_cfe_ouverture_analyse';

    /** the column name for the utiliser_parametrage_encheres field */
    const UTILISER_PARAMETRAGE_ENCHERES = 'configuration_organisme.utiliser_parametrage_encheres';

    /** the column name for the gestion_mandataire field */
    const GESTION_MANDATAIRE = 'configuration_organisme.gestion_mandataire';

    /** the column name for the verifier_compte_boamp field */
    const VERIFIER_COMPTE_BOAMP = 'configuration_organisme.verifier_compte_boamp';

    /** the column name for the four_eyes field */
    const FOUR_EYES = 'configuration_organisme.four_eyes';

    /** the column name for the interface_module_rsem field */
    const INTERFACE_MODULE_RSEM = 'configuration_organisme.interface_module_rsem';

    /** the column name for the archivage_consultation_sae_externe_envoi_archive field */
    const ARCHIVAGE_CONSULTATION_SAE_EXTERNE_ENVOI_ARCHIVE = 'configuration_organisme.archivage_consultation_sae_externe_envoi_archive';

    /** the column name for the archivage_consultation_sae_externe_telechargement_archive field */
    const ARCHIVAGE_CONSULTATION_SAE_EXTERNE_TELECHARGEMENT_ARCHIVE = 'configuration_organisme.archivage_consultation_sae_externe_telechargement_archive';

    /** the column name for the agent_verification_certificat_peppol field */
    const AGENT_VERIFICATION_CERTIFICAT_PEPPOL = 'configuration_organisme.agent_verification_certificat_peppol';

    /** the column name for the fuseau_horaire field */
    const FUSEAU_HORAIRE = 'configuration_organisme.fuseau_horaire';

    /** the column name for the fiche_weka field */
    const FICHE_WEKA = 'configuration_organisme.fiche_weka';

    /** the column name for the mise_disposition_pieces_marche field */
    const MISE_DISPOSITION_PIECES_MARCHE = 'configuration_organisme.mise_disposition_pieces_marche';

    /** the column name for the base_dce field */
    const BASE_DCE = 'configuration_organisme.base_dce';

    /** the column name for the avis_membres_commision field */
    const AVIS_MEMBRES_COMMISION = 'configuration_organisme.avis_membres_commision';

    /** the column name for the Donnees_Redac field */
    const DONNEES_REDAC = 'configuration_organisme.Donnees_Redac';

    /** the column name for the Personnaliser_Affichage_Theme_Et_Illustration field */
    const PERSONNALISER_AFFICHAGE_THEME_ET_ILLUSTRATION = 'configuration_organisme.Personnaliser_Affichage_Theme_Et_Illustration';

    /** the column name for the type_contrat field */
    const TYPE_CONTRAT = 'configuration_organisme.type_contrat';

    /** the column name for the entite_adjudicatrice field */
    const ENTITE_ADJUDICATRICE = 'configuration_organisme.entite_adjudicatrice';

    /** the column name for the gestion_operations field */
    const GESTION_OPERATIONS = 'configuration_organisme.gestion_operations';

    /** the column name for the calendrier_de_la_consultation field */
    const CALENDRIER_DE_LA_CONSULTATION = 'configuration_organisme.calendrier_de_la_consultation';

    /** the column name for the donnees_complementaires field */
    const DONNEES_COMPLEMENTAIRES = 'configuration_organisme.donnees_complementaires';

    /** the column name for the espace_collaboratif field */
    const ESPACE_COLLABORATIF = 'configuration_organisme.espace_collaboratif';

    /** the column name for the historique_navigation_inscrits field */
    const HISTORIQUE_NAVIGATION_INSCRITS = 'configuration_organisme.historique_navigation_inscrits';

    /** the column name for the Identification_contrat field */
    const IDENTIFICATION_CONTRAT = 'configuration_organisme.Identification_contrat';

    /** the column name for the extraction_accords_cadres field */
    const EXTRACTION_ACCORDS_CADRES = 'configuration_organisme.extraction_accords_cadres';

    /** the column name for the extraction_siret_acheteur field */
    const EXTRACTION_SIRET_ACHETEUR = 'configuration_organisme.extraction_siret_acheteur';

    /** the column name for the marche_public_simplifie field */
    const MARCHE_PUBLIC_SIMPLIFIE = 'configuration_organisme.marche_public_simplifie';

    /** the column name for the consultation_demande_achat field */
    const CONSULTATION_DEMANDE_ACHAT = 'configuration_organisme.consultation_demande_achat';

    /** the column name for the authenticate_agent_by_ldap field */
    const AUTHENTICATE_AGENT_BY_LDAP = 'configuration_organisme.authenticate_agent_by_ldap';

    /** the column name for the consultation_via_import field */
    const CONSULTATION_VIA_IMPORT = 'configuration_organisme.consultation_via_import';

    /** the column name for the EXPRESSION_REG_REFERENCE field */
    const EXPRESSION_REG_REFERENCE = 'configuration_organisme.EXPRESSION_REG_REFERENCE';

    /** the column name for the visioconference_cao field */
    const VISIOCONFERENCE_CAO = 'configuration_organisme.visioconference_cao';

    /** the column name for the estimation_confidentiel field */
    const ESTIMATION_CONFIDENTIEL = 'configuration_organisme.estimation_confidentiel';

    /** the column name for the qualification_registre_depot field */
    const QUALIFICATION_REGISTRE_DEPOT = 'configuration_organisme.qualification_registre_depot';

    /** the column name for the gestion_cao field */
    const GESTION_CAO = 'configuration_organisme.gestion_cao';

    /** the column name for the referentiel_contact field */
    const REFERENTIEL_CONTACT = 'configuration_organisme.referentiel_contact';

    /** the column name for the gestion_montant_devise field */
    const GESTION_MONTANT_DEVISE = 'configuration_organisme.gestion_montant_devise';

    /** the column name for the gestion_rabais field */
    const GESTION_RABAIS = 'configuration_organisme.gestion_rabais';

    /** the column name for the gestion_caution_provisoire field */
    const GESTION_CAUTION_PROVISOIRE = 'configuration_organisme.gestion_caution_provisoire';

    /** the column name for the gestion_travaux_cao field */
    const GESTION_TRAVAUX_CAO = 'configuration_organisme.gestion_travaux_cao';

    /** the column name for the filtre_bdf_entreprise_valide field */
    const FILTRE_BDF_ENTREPRISE_VALIDE = 'configuration_organisme.filtre_bdf_entreprise_valide';

    /** the column name for the gestion_statistiques_pme field */
    const GESTION_STATISTIQUES_PME = 'configuration_organisme.gestion_statistiques_pme';

    /** the column name for the gestion_demandes_achats field */
    const GESTION_DEMANDES_ACHATS = 'configuration_organisme.gestion_demandes_achats';

    /** The enumerated values for the encheres field */
    const ENCHERES_0 = '0';
    const ENCHERES_1 = '1';

    /** The enumerated values for the consultation_pj_autres_pieces_telechargeables field */
    const CONSULTATION_PJ_AUTRES_PIECES_TELECHARGEABLES_0 = '0';
    const CONSULTATION_PJ_AUTRES_PIECES_TELECHARGEABLES_1 = '1';

    /** The enumerated values for the no_activex field */
    const NO_ACTIVEX_0 = '0';
    const NO_ACTIVEX_1 = '1';

    /** The enumerated values for the gestion_mapa field */
    const GESTION_MAPA_0 = '0';
    const GESTION_MAPA_1 = '1';

    /** The enumerated values for the article_133_upload_fichier field */
    const ARTICLE_133_UPLOAD_FICHIER_0 = '0';
    const ARTICLE_133_UPLOAD_FICHIER_1 = '1';

    /** The enumerated values for the centrale_publication field */
    const CENTRALE_PUBLICATION_0 = '0';
    const CENTRALE_PUBLICATION_1 = '1';

    /** The enumerated values for the organisation_centralisee field */
    const ORGANISATION_CENTRALISEE_0 = '0';
    const ORGANISATION_CENTRALISEE_1 = '1';

    /** The enumerated values for the presence_elu field */
    const PRESENCE_ELU_0 = '0';
    const PRESENCE_ELU_1 = '1';

    /** The enumerated values for the traduire_consultation field */
    const TRADUIRE_CONSULTATION_0 = '0';
    const TRADUIRE_CONSULTATION_1 = '1';

    /** The enumerated values for the suivi_passation field */
    const SUIVI_PASSATION_0 = '0';
    const SUIVI_PASSATION_1 = '1';

    /** The enumerated values for the numerotation_ref_cons field */
    const NUMEROTATION_REF_CONS_0 = '0';
    const NUMEROTATION_REF_CONS_1 = '1';

    /** The enumerated values for the pmi_lien_portail_defense_agent field */
    const PMI_LIEN_PORTAIL_DEFENSE_AGENT_0 = '0';
    const PMI_LIEN_PORTAIL_DEFENSE_AGENT_1 = '1';

    /** The enumerated values for the interface_archive_arcade_pmi field */
    const INTERFACE_ARCHIVE_ARCADE_PMI_0 = '0';
    const INTERFACE_ARCHIVE_ARCADE_PMI_1 = '1';

    /** The enumerated values for the desarchivage_consultation field */
    const DESARCHIVAGE_CONSULTATION_0 = '0';
    const DESARCHIVAGE_CONSULTATION_1 = '1';

    /** The enumerated values for the alimentation_automatique_liste_invites field */
    const ALIMENTATION_AUTOMATIQUE_LISTE_INVITES_0 = '0';
    const ALIMENTATION_AUTOMATIQUE_LISTE_INVITES_1 = '1';

    /** The enumerated values for the interface_chorus_pmi field */
    const INTERFACE_CHORUS_PMI_0 = '0';
    const INTERFACE_CHORUS_PMI_1 = '1';

    /** The enumerated values for the archivage_consultation_sur_pf field */
    const ARCHIVAGE_CONSULTATION_SUR_PF_0 = '0';
    const ARCHIVAGE_CONSULTATION_SUR_PF_1 = '1';

    /** The enumerated values for the autoriser_modification_apres_phase_consultation field */
    const AUTORISER_MODIFICATION_APRES_PHASE_CONSULTATION_0 = '0';
    const AUTORISER_MODIFICATION_APRES_PHASE_CONSULTATION_1 = '1';

    /** The enumerated values for the importer_enveloppe field */
    const IMPORTER_ENVELOPPE_0 = '0';
    const IMPORTER_ENVELOPPE_1 = '1';

    /** The enumerated values for the export_marches_notifies field */
    const EXPORT_MARCHES_NOTIFIES_0 = '0';
    const EXPORT_MARCHES_NOTIFIES_1 = '1';

    /** The enumerated values for the acces_agents_cfe_bd_fournisseur field */
    const ACCES_AGENTS_CFE_BD_FOURNISSEUR_0 = '0';
    const ACCES_AGENTS_CFE_BD_FOURNISSEUR_1 = '1';

    /** The enumerated values for the acces_agents_cfe_ouverture_analyse field */
    const ACCES_AGENTS_CFE_OUVERTURE_ANALYSE_0 = '0';
    const ACCES_AGENTS_CFE_OUVERTURE_ANALYSE_1 = '1';

    /** The enumerated values for the utiliser_parametrage_encheres field */
    const UTILISER_PARAMETRAGE_ENCHERES_0 = '0';
    const UTILISER_PARAMETRAGE_ENCHERES_1 = '1';

    /** The enumerated values for the gestion_mandataire field */
    const GESTION_MANDATAIRE_0 = '0';
    const GESTION_MANDATAIRE_1 = '1';

    /** The enumerated values for the verifier_compte_boamp field */
    const VERIFIER_COMPTE_BOAMP_0 = '0';
    const VERIFIER_COMPTE_BOAMP_1 = '1';

    /** The enumerated values for the four_eyes field */
    const FOUR_EYES_0 = '0';
    const FOUR_EYES_1 = '1';

    /** The enumerated values for the interface_module_rsem field */
    const INTERFACE_MODULE_RSEM_0 = '0';
    const INTERFACE_MODULE_RSEM_1 = '1';

    /** The enumerated values for the archivage_consultation_sae_externe_envoi_archive field */
    const ARCHIVAGE_CONSULTATION_SAE_EXTERNE_ENVOI_ARCHIVE_0 = '0';
    const ARCHIVAGE_CONSULTATION_SAE_EXTERNE_ENVOI_ARCHIVE_1 = '1';

    /** The enumerated values for the archivage_consultation_sae_externe_telechargement_archive field */
    const ARCHIVAGE_CONSULTATION_SAE_EXTERNE_TELECHARGEMENT_ARCHIVE_0 = '0';
    const ARCHIVAGE_CONSULTATION_SAE_EXTERNE_TELECHARGEMENT_ARCHIVE_1 = '1';

    /** The enumerated values for the agent_verification_certificat_peppol field */
    const AGENT_VERIFICATION_CERTIFICAT_PEPPOL_0 = '0';
    const AGENT_VERIFICATION_CERTIFICAT_PEPPOL_1 = '1';

    /** The enumerated values for the fuseau_horaire field */
    const FUSEAU_HORAIRE_0 = '0';
    const FUSEAU_HORAIRE_1 = '1';

    /** The enumerated values for the fiche_weka field */
    const FICHE_WEKA_0 = '0';
    const FICHE_WEKA_1 = '1';

    /** The enumerated values for the mise_disposition_pieces_marche field */
    const MISE_DISPOSITION_PIECES_MARCHE_0 = '0';
    const MISE_DISPOSITION_PIECES_MARCHE_1 = '1';

    /** The enumerated values for the base_dce field */
    const BASE_DCE_0 = '0';
    const BASE_DCE_1 = '1';

    /** The enumerated values for the avis_membres_commision field */
    const AVIS_MEMBRES_COMMISION_0 = '0';
    const AVIS_MEMBRES_COMMISION_1 = '1';

    /** The enumerated values for the Donnees_Redac field */
    const DONNEES_REDAC_0 = '0';
    const DONNEES_REDAC_1 = '1';

    /** The enumerated values for the Personnaliser_Affichage_Theme_Et_Illustration field */
    const PERSONNALISER_AFFICHAGE_THEME_ET_ILLUSTRATION_0 = '0';
    const PERSONNALISER_AFFICHAGE_THEME_ET_ILLUSTRATION_1 = '1';

    /** The enumerated values for the type_contrat field */
    const TYPE_CONTRAT_0 = '0';
    const TYPE_CONTRAT_1 = '1';

    /** The enumerated values for the entite_adjudicatrice field */
    const ENTITE_ADJUDICATRICE_0 = '0';
    const ENTITE_ADJUDICATRICE_1 = '1';

    /** The enumerated values for the gestion_operations field */
    const GESTION_OPERATIONS_0 = '0';
    const GESTION_OPERATIONS_1 = '1';

    /** The enumerated values for the calendrier_de_la_consultation field */
    const CALENDRIER_DE_LA_CONSULTATION_0 = '0';
    const CALENDRIER_DE_LA_CONSULTATION_1 = '1';

    /** The enumerated values for the donnees_complementaires field */
    const DONNEES_COMPLEMENTAIRES_0 = '0';
    const DONNEES_COMPLEMENTAIRES_1 = '1';

    /** The enumerated values for the espace_collaboratif field */
    const ESPACE_COLLABORATIF_0 = '0';
    const ESPACE_COLLABORATIF_1 = '1';

    /** The enumerated values for the historique_navigation_inscrits field */
    const HISTORIQUE_NAVIGATION_INSCRITS_0 = '0';
    const HISTORIQUE_NAVIGATION_INSCRITS_1 = '1';

    /** The enumerated values for the Identification_contrat field */
    const IDENTIFICATION_CONTRAT_0 = '0';
    const IDENTIFICATION_CONTRAT_1 = '1';

    /** The enumerated values for the extraction_accords_cadres field */
    const EXTRACTION_ACCORDS_CADRES_0 = '0';
    const EXTRACTION_ACCORDS_CADRES_1 = '1';

    /** The enumerated values for the extraction_siret_acheteur field */
    const EXTRACTION_SIRET_ACHETEUR_0 = '0';
    const EXTRACTION_SIRET_ACHETEUR_1 = '1';

    /** The enumerated values for the marche_public_simplifie field */
    const MARCHE_PUBLIC_SIMPLIFIE_0 = '0';
    const MARCHE_PUBLIC_SIMPLIFIE_1 = '1';

    /** The enumerated values for the consultation_demande_achat field */
    const CONSULTATION_DEMANDE_ACHAT_0 = '0';
    const CONSULTATION_DEMANDE_ACHAT_1 = '1';

    /** The enumerated values for the authenticate_agent_by_ldap field */
    const AUTHENTICATE_AGENT_BY_LDAP_0 = '0';
    const AUTHENTICATE_AGENT_BY_LDAP_1 = '1';

    /** The enumerated values for the consultation_via_import field */
    const CONSULTATION_VIA_IMPORT_0 = '0';
    const CONSULTATION_VIA_IMPORT_1 = '1';

    /** The enumerated values for the visioconference_cao field */
    const VISIOCONFERENCE_CAO_1 = '1';
    const VISIOCONFERENCE_CAO_0 = '0';

    /** The enumerated values for the estimation_confidentiel field */
    const ESTIMATION_CONFIDENTIEL_0 = '0';
    const ESTIMATION_CONFIDENTIEL_1 = '1';

    /** The enumerated values for the qualification_registre_depot field */
    const QUALIFICATION_REGISTRE_DEPOT_0 = '0';
    const QUALIFICATION_REGISTRE_DEPOT_1 = '1';

    /** The enumerated values for the gestion_cao field */
    const GESTION_CAO_0 = '0';
    const GESTION_CAO_1 = '1';

    /** The enumerated values for the referentiel_contact field */
    const REFERENTIEL_CONTACT_0 = '0';
    const REFERENTIEL_CONTACT_1 = '1';

    /** The enumerated values for the gestion_montant_devise field */
    const GESTION_MONTANT_DEVISE_0 = '0';
    const GESTION_MONTANT_DEVISE_1 = '1';

    /** The enumerated values for the gestion_rabais field */
    const GESTION_RABAIS_0 = '0';
    const GESTION_RABAIS_1 = '1';

    /** The enumerated values for the gestion_caution_provisoire field */
    const GESTION_CAUTION_PROVISOIRE_0 = '0';
    const GESTION_CAUTION_PROVISOIRE_1 = '1';

    /** The enumerated values for the gestion_travaux_cao field */
    const GESTION_TRAVAUX_CAO_0 = '0';
    const GESTION_TRAVAUX_CAO_1 = '1';

    /** The enumerated values for the filtre_bdf_entreprise_valide field */
    const FILTRE_BDF_ENTREPRISE_VALIDE_0 = '0';
    const FILTRE_BDF_ENTREPRISE_VALIDE_1 = '1';

    /** The enumerated values for the gestion_statistiques_pme field */
    const GESTION_STATISTIQUES_PME_0 = '0';
    const GESTION_STATISTIQUES_PME_1 = '1';

    /** The enumerated values for the gestion_demandes_achats field */
    const GESTION_DEMANDES_ACHATS_0 = '0';
    const GESTION_DEMANDES_ACHATS_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonConfigurationOrganisme objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonConfigurationOrganisme[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonConfigurationOrganismePeer::$fieldNames[CommonConfigurationOrganismePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Organisme', 'Encheres', 'ConsultationPjAutresPiecesTelechargeables', 'NoActivex', 'GestionMapa', 'Article133UploadFichier', 'CentralePublication', 'OrganisationCentralisee', 'PresenceElu', 'TraduireConsultation', 'SuiviPassation', 'NumerotationRefCons', 'PmiLienPortailDefenseAgent', 'InterfaceArchiveArcadePmi', 'DesarchivageConsultation', 'AlimentationAutomatiqueListeInvites', 'InterfaceChorusPmi', 'ArchivageConsultationSurPf', 'AutoriserModificationApresPhaseConsultation', 'ImporterEnveloppe', 'ExportMarchesNotifies', 'AccesAgentsCfeBdFournisseur', 'AccesAgentsCfeOuvertureAnalyse', 'UtiliserParametrageEncheres', 'GestionMandataire', 'VerifierCompteBoamp', 'FourEyes', 'InterfaceModuleRsem', 'ArchivageConsultationSaeExterneEnvoiArchive', 'ArchivageConsultationSaeExterneTelechargementArchive', 'AgentVerificationCertificatPeppol', 'FuseauHoraire', 'FicheWeka', 'MiseDispositionPiecesMarche', 'BaseDce', 'AvisMembresCommision', 'DonneesRedac', 'PersonnaliserAffichageThemeEtIllustration', 'TypeContrat', 'EntiteAdjudicatrice', 'GestionOperations', 'CalendrierDeLaConsultation', 'DonneesComplementaires', 'EspaceCollaboratif', 'HistoriqueNavigationInscrits', 'IdentificationContrat', 'ExtractionAccordsCadres', 'ExtractionSiretAcheteur', 'MarchePublicSimplifie', 'ConsultationDemandeAchat', 'AuthenticateAgentByLdap', 'ConsultationViaImport', 'ExpressionRegReference', 'VisioconferenceCao', 'EstimationConfidentiel', 'QualificationRegistreDepot', 'GestionCao', 'ReferentielContact', 'GestionMontantDevise', 'GestionRabais', 'GestionCautionProvisoire', 'GestionTravauxCao', 'FiltreBdfEntrepriseValide', 'GestionStatistiquesPme', 'GestionDemandesAchats', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('organisme', 'encheres', 'consultationPjAutresPiecesTelechargeables', 'noActivex', 'gestionMapa', 'article133UploadFichier', 'centralePublication', 'organisationCentralisee', 'presenceElu', 'traduireConsultation', 'suiviPassation', 'numerotationRefCons', 'pmiLienPortailDefenseAgent', 'interfaceArchiveArcadePmi', 'desarchivageConsultation', 'alimentationAutomatiqueListeInvites', 'interfaceChorusPmi', 'archivageConsultationSurPf', 'autoriserModificationApresPhaseConsultation', 'importerEnveloppe', 'exportMarchesNotifies', 'accesAgentsCfeBdFournisseur', 'accesAgentsCfeOuvertureAnalyse', 'utiliserParametrageEncheres', 'gestionMandataire', 'verifierCompteBoamp', 'fourEyes', 'interfaceModuleRsem', 'archivageConsultationSaeExterneEnvoiArchive', 'archivageConsultationSaeExterneTelechargementArchive', 'agentVerificationCertificatPeppol', 'fuseauHoraire', 'ficheWeka', 'miseDispositionPiecesMarche', 'baseDce', 'avisMembresCommision', 'donneesRedac', 'personnaliserAffichageThemeEtIllustration', 'typeContrat', 'entiteAdjudicatrice', 'gestionOperations', 'calendrierDeLaConsultation', 'donneesComplementaires', 'espaceCollaboratif', 'historiqueNavigationInscrits', 'identificationContrat', 'extractionAccordsCadres', 'extractionSiretAcheteur', 'marchePublicSimplifie', 'consultationDemandeAchat', 'authenticateAgentByLdap', 'consultationViaImport', 'expressionRegReference', 'visioconferenceCao', 'estimationConfidentiel', 'qualificationRegistreDepot', 'gestionCao', 'referentielContact', 'gestionMontantDevise', 'gestionRabais', 'gestionCautionProvisoire', 'gestionTravauxCao', 'filtreBdfEntrepriseValide', 'gestionStatistiquesPme', 'gestionDemandesAchats', ),
        BasePeer::TYPE_COLNAME => array (CommonConfigurationOrganismePeer::ORGANISME, CommonConfigurationOrganismePeer::ENCHERES, CommonConfigurationOrganismePeer::CONSULTATION_PJ_AUTRES_PIECES_TELECHARGEABLES, CommonConfigurationOrganismePeer::NO_ACTIVEX, CommonConfigurationOrganismePeer::GESTION_MAPA, CommonConfigurationOrganismePeer::ARTICLE_133_UPLOAD_FICHIER, CommonConfigurationOrganismePeer::CENTRALE_PUBLICATION, CommonConfigurationOrganismePeer::ORGANISATION_CENTRALISEE, CommonConfigurationOrganismePeer::PRESENCE_ELU, CommonConfigurationOrganismePeer::TRADUIRE_CONSULTATION, CommonConfigurationOrganismePeer::SUIVI_PASSATION, CommonConfigurationOrganismePeer::NUMEROTATION_REF_CONS, CommonConfigurationOrganismePeer::PMI_LIEN_PORTAIL_DEFENSE_AGENT, CommonConfigurationOrganismePeer::INTERFACE_ARCHIVE_ARCADE_PMI, CommonConfigurationOrganismePeer::DESARCHIVAGE_CONSULTATION, CommonConfigurationOrganismePeer::ALIMENTATION_AUTOMATIQUE_LISTE_INVITES, CommonConfigurationOrganismePeer::INTERFACE_CHORUS_PMI, CommonConfigurationOrganismePeer::ARCHIVAGE_CONSULTATION_SUR_PF, CommonConfigurationOrganismePeer::AUTORISER_MODIFICATION_APRES_PHASE_CONSULTATION, CommonConfigurationOrganismePeer::IMPORTER_ENVELOPPE, CommonConfigurationOrganismePeer::EXPORT_MARCHES_NOTIFIES, CommonConfigurationOrganismePeer::ACCES_AGENTS_CFE_BD_FOURNISSEUR, CommonConfigurationOrganismePeer::ACCES_AGENTS_CFE_OUVERTURE_ANALYSE, CommonConfigurationOrganismePeer::UTILISER_PARAMETRAGE_ENCHERES, CommonConfigurationOrganismePeer::GESTION_MANDATAIRE, CommonConfigurationOrganismePeer::VERIFIER_COMPTE_BOAMP, CommonConfigurationOrganismePeer::FOUR_EYES, CommonConfigurationOrganismePeer::INTERFACE_MODULE_RSEM, CommonConfigurationOrganismePeer::ARCHIVAGE_CONSULTATION_SAE_EXTERNE_ENVOI_ARCHIVE, CommonConfigurationOrganismePeer::ARCHIVAGE_CONSULTATION_SAE_EXTERNE_TELECHARGEMENT_ARCHIVE, CommonConfigurationOrganismePeer::AGENT_VERIFICATION_CERTIFICAT_PEPPOL, CommonConfigurationOrganismePeer::FUSEAU_HORAIRE, CommonConfigurationOrganismePeer::FICHE_WEKA, CommonConfigurationOrganismePeer::MISE_DISPOSITION_PIECES_MARCHE, CommonConfigurationOrganismePeer::BASE_DCE, CommonConfigurationOrganismePeer::AVIS_MEMBRES_COMMISION, CommonConfigurationOrganismePeer::DONNEES_REDAC, CommonConfigurationOrganismePeer::PERSONNALISER_AFFICHAGE_THEME_ET_ILLUSTRATION, CommonConfigurationOrganismePeer::TYPE_CONTRAT, CommonConfigurationOrganismePeer::ENTITE_ADJUDICATRICE, CommonConfigurationOrganismePeer::GESTION_OPERATIONS, CommonConfigurationOrganismePeer::CALENDRIER_DE_LA_CONSULTATION, CommonConfigurationOrganismePeer::DONNEES_COMPLEMENTAIRES, CommonConfigurationOrganismePeer::ESPACE_COLLABORATIF, CommonConfigurationOrganismePeer::HISTORIQUE_NAVIGATION_INSCRITS, CommonConfigurationOrganismePeer::IDENTIFICATION_CONTRAT, CommonConfigurationOrganismePeer::EXTRACTION_ACCORDS_CADRES, CommonConfigurationOrganismePeer::EXTRACTION_SIRET_ACHETEUR, CommonConfigurationOrganismePeer::MARCHE_PUBLIC_SIMPLIFIE, CommonConfigurationOrganismePeer::CONSULTATION_DEMANDE_ACHAT, CommonConfigurationOrganismePeer::AUTHENTICATE_AGENT_BY_LDAP, CommonConfigurationOrganismePeer::CONSULTATION_VIA_IMPORT, CommonConfigurationOrganismePeer::EXPRESSION_REG_REFERENCE, CommonConfigurationOrganismePeer::VISIOCONFERENCE_CAO, CommonConfigurationOrganismePeer::ESTIMATION_CONFIDENTIEL, CommonConfigurationOrganismePeer::QUALIFICATION_REGISTRE_DEPOT, CommonConfigurationOrganismePeer::GESTION_CAO, CommonConfigurationOrganismePeer::REFERENTIEL_CONTACT, CommonConfigurationOrganismePeer::GESTION_MONTANT_DEVISE, CommonConfigurationOrganismePeer::GESTION_RABAIS, CommonConfigurationOrganismePeer::GESTION_CAUTION_PROVISOIRE, CommonConfigurationOrganismePeer::GESTION_TRAVAUX_CAO, CommonConfigurationOrganismePeer::FILTRE_BDF_ENTREPRISE_VALIDE, CommonConfigurationOrganismePeer::GESTION_STATISTIQUES_PME, CommonConfigurationOrganismePeer::GESTION_DEMANDES_ACHATS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ORGANISME', 'ENCHERES', 'CONSULTATION_PJ_AUTRES_PIECES_TELECHARGEABLES', 'NO_ACTIVEX', 'GESTION_MAPA', 'ARTICLE_133_UPLOAD_FICHIER', 'CENTRALE_PUBLICATION', 'ORGANISATION_CENTRALISEE', 'PRESENCE_ELU', 'TRADUIRE_CONSULTATION', 'SUIVI_PASSATION', 'NUMEROTATION_REF_CONS', 'PMI_LIEN_PORTAIL_DEFENSE_AGENT', 'INTERFACE_ARCHIVE_ARCADE_PMI', 'DESARCHIVAGE_CONSULTATION', 'ALIMENTATION_AUTOMATIQUE_LISTE_INVITES', 'INTERFACE_CHORUS_PMI', 'ARCHIVAGE_CONSULTATION_SUR_PF', 'AUTORISER_MODIFICATION_APRES_PHASE_CONSULTATION', 'IMPORTER_ENVELOPPE', 'EXPORT_MARCHES_NOTIFIES', 'ACCES_AGENTS_CFE_BD_FOURNISSEUR', 'ACCES_AGENTS_CFE_OUVERTURE_ANALYSE', 'UTILISER_PARAMETRAGE_ENCHERES', 'GESTION_MANDATAIRE', 'VERIFIER_COMPTE_BOAMP', 'FOUR_EYES', 'INTERFACE_MODULE_RSEM', 'ARCHIVAGE_CONSULTATION_SAE_EXTERNE_ENVOI_ARCHIVE', 'ARCHIVAGE_CONSULTATION_SAE_EXTERNE_TELECHARGEMENT_ARCHIVE', 'AGENT_VERIFICATION_CERTIFICAT_PEPPOL', 'FUSEAU_HORAIRE', 'FICHE_WEKA', 'MISE_DISPOSITION_PIECES_MARCHE', 'BASE_DCE', 'AVIS_MEMBRES_COMMISION', 'DONNEES_REDAC', 'PERSONNALISER_AFFICHAGE_THEME_ET_ILLUSTRATION', 'TYPE_CONTRAT', 'ENTITE_ADJUDICATRICE', 'GESTION_OPERATIONS', 'CALENDRIER_DE_LA_CONSULTATION', 'DONNEES_COMPLEMENTAIRES', 'ESPACE_COLLABORATIF', 'HISTORIQUE_NAVIGATION_INSCRITS', 'IDENTIFICATION_CONTRAT', 'EXTRACTION_ACCORDS_CADRES', 'EXTRACTION_SIRET_ACHETEUR', 'MARCHE_PUBLIC_SIMPLIFIE', 'CONSULTATION_DEMANDE_ACHAT', 'AUTHENTICATE_AGENT_BY_LDAP', 'CONSULTATION_VIA_IMPORT', 'EXPRESSION_REG_REFERENCE', 'VISIOCONFERENCE_CAO', 'ESTIMATION_CONFIDENTIEL', 'QUALIFICATION_REGISTRE_DEPOT', 'GESTION_CAO', 'REFERENTIEL_CONTACT', 'GESTION_MONTANT_DEVISE', 'GESTION_RABAIS', 'GESTION_CAUTION_PROVISOIRE', 'GESTION_TRAVAUX_CAO', 'FILTRE_BDF_ENTREPRISE_VALIDE', 'GESTION_STATISTIQUES_PME', 'GESTION_DEMANDES_ACHATS', ),
        BasePeer::TYPE_FIELDNAME => array ('organisme', 'encheres', 'consultation_pj_autres_pieces_telechargeables', 'no_activex', 'gestion_mapa', 'article_133_upload_fichier', 'centrale_publication', 'organisation_centralisee', 'presence_elu', 'traduire_consultation', 'suivi_passation', 'numerotation_ref_cons', 'pmi_lien_portail_defense_agent', 'interface_archive_arcade_pmi', 'desarchivage_consultation', 'alimentation_automatique_liste_invites', 'interface_chorus_pmi', 'archivage_consultation_sur_pf', 'autoriser_modification_apres_phase_consultation', 'importer_enveloppe', 'export_marches_notifies', 'acces_agents_cfe_bd_fournisseur', 'acces_agents_cfe_ouverture_analyse', 'utiliser_parametrage_encheres', 'gestion_mandataire', 'verifier_compte_boamp', 'four_eyes', 'interface_module_rsem', 'archivage_consultation_sae_externe_envoi_archive', 'archivage_consultation_sae_externe_telechargement_archive', 'agent_verification_certificat_peppol', 'fuseau_horaire', 'fiche_weka', 'mise_disposition_pieces_marche', 'base_dce', 'avis_membres_commision', 'Donnees_Redac', 'Personnaliser_Affichage_Theme_Et_Illustration', 'type_contrat', 'entite_adjudicatrice', 'gestion_operations', 'calendrier_de_la_consultation', 'donnees_complementaires', 'espace_collaboratif', 'historique_navigation_inscrits', 'Identification_contrat', 'extraction_accords_cadres', 'extraction_siret_acheteur', 'marche_public_simplifie', 'consultation_demande_achat', 'authenticate_agent_by_ldap', 'consultation_via_import', 'EXPRESSION_REG_REFERENCE', 'visioconference_cao', 'estimation_confidentiel', 'qualification_registre_depot', 'gestion_cao', 'referentiel_contact', 'gestion_montant_devise', 'gestion_rabais', 'gestion_caution_provisoire', 'gestion_travaux_cao', 'filtre_bdf_entreprise_valide', 'gestion_statistiques_pme', 'gestion_demandes_achats', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonConfigurationOrganismePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Organisme' => 0, 'Encheres' => 1, 'ConsultationPjAutresPiecesTelechargeables' => 2, 'NoActivex' => 3, 'GestionMapa' => 4, 'Article133UploadFichier' => 5, 'CentralePublication' => 6, 'OrganisationCentralisee' => 7, 'PresenceElu' => 8, 'TraduireConsultation' => 9, 'SuiviPassation' => 10, 'NumerotationRefCons' => 11, 'PmiLienPortailDefenseAgent' => 12, 'InterfaceArchiveArcadePmi' => 13, 'DesarchivageConsultation' => 14, 'AlimentationAutomatiqueListeInvites' => 15, 'InterfaceChorusPmi' => 16, 'ArchivageConsultationSurPf' => 17, 'AutoriserModificationApresPhaseConsultation' => 18, 'ImporterEnveloppe' => 19, 'ExportMarchesNotifies' => 20, 'AccesAgentsCfeBdFournisseur' => 21, 'AccesAgentsCfeOuvertureAnalyse' => 22, 'UtiliserParametrageEncheres' => 23, 'GestionMandataire' => 24, 'VerifierCompteBoamp' => 25, 'FourEyes' => 26, 'InterfaceModuleRsem' => 27, 'ArchivageConsultationSaeExterneEnvoiArchive' => 28, 'ArchivageConsultationSaeExterneTelechargementArchive' => 29, 'AgentVerificationCertificatPeppol' => 30, 'FuseauHoraire' => 31, 'FicheWeka' => 32, 'MiseDispositionPiecesMarche' => 33, 'BaseDce' => 34, 'AvisMembresCommision' => 35, 'DonneesRedac' => 36, 'PersonnaliserAffichageThemeEtIllustration' => 37, 'TypeContrat' => 38, 'EntiteAdjudicatrice' => 39, 'GestionOperations' => 40, 'CalendrierDeLaConsultation' => 41, 'DonneesComplementaires' => 42, 'EspaceCollaboratif' => 43, 'HistoriqueNavigationInscrits' => 44, 'IdentificationContrat' => 45, 'ExtractionAccordsCadres' => 46, 'ExtractionSiretAcheteur' => 47, 'MarchePublicSimplifie' => 48, 'ConsultationDemandeAchat' => 49, 'AuthenticateAgentByLdap' => 50, 'ConsultationViaImport' => 51, 'ExpressionRegReference' => 52, 'VisioconferenceCao' => 53, 'EstimationConfidentiel' => 54, 'QualificationRegistreDepot' => 55, 'GestionCao' => 56, 'ReferentielContact' => 57, 'GestionMontantDevise' => 58, 'GestionRabais' => 59, 'GestionCautionProvisoire' => 60, 'GestionTravauxCao' => 61, 'FiltreBdfEntrepriseValide' => 62, 'GestionStatistiquesPme' => 63, 'GestionDemandesAchats' => 64, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('organisme' => 0, 'encheres' => 1, 'consultationPjAutresPiecesTelechargeables' => 2, 'noActivex' => 3, 'gestionMapa' => 4, 'article133UploadFichier' => 5, 'centralePublication' => 6, 'organisationCentralisee' => 7, 'presenceElu' => 8, 'traduireConsultation' => 9, 'suiviPassation' => 10, 'numerotationRefCons' => 11, 'pmiLienPortailDefenseAgent' => 12, 'interfaceArchiveArcadePmi' => 13, 'desarchivageConsultation' => 14, 'alimentationAutomatiqueListeInvites' => 15, 'interfaceChorusPmi' => 16, 'archivageConsultationSurPf' => 17, 'autoriserModificationApresPhaseConsultation' => 18, 'importerEnveloppe' => 19, 'exportMarchesNotifies' => 20, 'accesAgentsCfeBdFournisseur' => 21, 'accesAgentsCfeOuvertureAnalyse' => 22, 'utiliserParametrageEncheres' => 23, 'gestionMandataire' => 24, 'verifierCompteBoamp' => 25, 'fourEyes' => 26, 'interfaceModuleRsem' => 27, 'archivageConsultationSaeExterneEnvoiArchive' => 28, 'archivageConsultationSaeExterneTelechargementArchive' => 29, 'agentVerificationCertificatPeppol' => 30, 'fuseauHoraire' => 31, 'ficheWeka' => 32, 'miseDispositionPiecesMarche' => 33, 'baseDce' => 34, 'avisMembresCommision' => 35, 'donneesRedac' => 36, 'personnaliserAffichageThemeEtIllustration' => 37, 'typeContrat' => 38, 'entiteAdjudicatrice' => 39, 'gestionOperations' => 40, 'calendrierDeLaConsultation' => 41, 'donneesComplementaires' => 42, 'espaceCollaboratif' => 43, 'historiqueNavigationInscrits' => 44, 'identificationContrat' => 45, 'extractionAccordsCadres' => 46, 'extractionSiretAcheteur' => 47, 'marchePublicSimplifie' => 48, 'consultationDemandeAchat' => 49, 'authenticateAgentByLdap' => 50, 'consultationViaImport' => 51, 'expressionRegReference' => 52, 'visioconferenceCao' => 53, 'estimationConfidentiel' => 54, 'qualificationRegistreDepot' => 55, 'gestionCao' => 56, 'referentielContact' => 57, 'gestionMontantDevise' => 58, 'gestionRabais' => 59, 'gestionCautionProvisoire' => 60, 'gestionTravauxCao' => 61, 'filtreBdfEntrepriseValide' => 62, 'gestionStatistiquesPme' => 63, 'gestionDemandesAchats' => 64, ),
        BasePeer::TYPE_COLNAME => array (CommonConfigurationOrganismePeer::ORGANISME => 0, CommonConfigurationOrganismePeer::ENCHERES => 1, CommonConfigurationOrganismePeer::CONSULTATION_PJ_AUTRES_PIECES_TELECHARGEABLES => 2, CommonConfigurationOrganismePeer::NO_ACTIVEX => 3, CommonConfigurationOrganismePeer::GESTION_MAPA => 4, CommonConfigurationOrganismePeer::ARTICLE_133_UPLOAD_FICHIER => 5, CommonConfigurationOrganismePeer::CENTRALE_PUBLICATION => 6, CommonConfigurationOrganismePeer::ORGANISATION_CENTRALISEE => 7, CommonConfigurationOrganismePeer::PRESENCE_ELU => 8, CommonConfigurationOrganismePeer::TRADUIRE_CONSULTATION => 9, CommonConfigurationOrganismePeer::SUIVI_PASSATION => 10, CommonConfigurationOrganismePeer::NUMEROTATION_REF_CONS => 11, CommonConfigurationOrganismePeer::PMI_LIEN_PORTAIL_DEFENSE_AGENT => 12, CommonConfigurationOrganismePeer::INTERFACE_ARCHIVE_ARCADE_PMI => 13, CommonConfigurationOrganismePeer::DESARCHIVAGE_CONSULTATION => 14, CommonConfigurationOrganismePeer::ALIMENTATION_AUTOMATIQUE_LISTE_INVITES => 15, CommonConfigurationOrganismePeer::INTERFACE_CHORUS_PMI => 16, CommonConfigurationOrganismePeer::ARCHIVAGE_CONSULTATION_SUR_PF => 17, CommonConfigurationOrganismePeer::AUTORISER_MODIFICATION_APRES_PHASE_CONSULTATION => 18, CommonConfigurationOrganismePeer::IMPORTER_ENVELOPPE => 19, CommonConfigurationOrganismePeer::EXPORT_MARCHES_NOTIFIES => 20, CommonConfigurationOrganismePeer::ACCES_AGENTS_CFE_BD_FOURNISSEUR => 21, CommonConfigurationOrganismePeer::ACCES_AGENTS_CFE_OUVERTURE_ANALYSE => 22, CommonConfigurationOrganismePeer::UTILISER_PARAMETRAGE_ENCHERES => 23, CommonConfigurationOrganismePeer::GESTION_MANDATAIRE => 24, CommonConfigurationOrganismePeer::VERIFIER_COMPTE_BOAMP => 25, CommonConfigurationOrganismePeer::FOUR_EYES => 26, CommonConfigurationOrganismePeer::INTERFACE_MODULE_RSEM => 27, CommonConfigurationOrganismePeer::ARCHIVAGE_CONSULTATION_SAE_EXTERNE_ENVOI_ARCHIVE => 28, CommonConfigurationOrganismePeer::ARCHIVAGE_CONSULTATION_SAE_EXTERNE_TELECHARGEMENT_ARCHIVE => 29, CommonConfigurationOrganismePeer::AGENT_VERIFICATION_CERTIFICAT_PEPPOL => 30, CommonConfigurationOrganismePeer::FUSEAU_HORAIRE => 31, CommonConfigurationOrganismePeer::FICHE_WEKA => 32, CommonConfigurationOrganismePeer::MISE_DISPOSITION_PIECES_MARCHE => 33, CommonConfigurationOrganismePeer::BASE_DCE => 34, CommonConfigurationOrganismePeer::AVIS_MEMBRES_COMMISION => 35, CommonConfigurationOrganismePeer::DONNEES_REDAC => 36, CommonConfigurationOrganismePeer::PERSONNALISER_AFFICHAGE_THEME_ET_ILLUSTRATION => 37, CommonConfigurationOrganismePeer::TYPE_CONTRAT => 38, CommonConfigurationOrganismePeer::ENTITE_ADJUDICATRICE => 39, CommonConfigurationOrganismePeer::GESTION_OPERATIONS => 40, CommonConfigurationOrganismePeer::CALENDRIER_DE_LA_CONSULTATION => 41, CommonConfigurationOrganismePeer::DONNEES_COMPLEMENTAIRES => 42, CommonConfigurationOrganismePeer::ESPACE_COLLABORATIF => 43, CommonConfigurationOrganismePeer::HISTORIQUE_NAVIGATION_INSCRITS => 44, CommonConfigurationOrganismePeer::IDENTIFICATION_CONTRAT => 45, CommonConfigurationOrganismePeer::EXTRACTION_ACCORDS_CADRES => 46, CommonConfigurationOrganismePeer::EXTRACTION_SIRET_ACHETEUR => 47, CommonConfigurationOrganismePeer::MARCHE_PUBLIC_SIMPLIFIE => 48, CommonConfigurationOrganismePeer::CONSULTATION_DEMANDE_ACHAT => 49, CommonConfigurationOrganismePeer::AUTHENTICATE_AGENT_BY_LDAP => 50, CommonConfigurationOrganismePeer::CONSULTATION_VIA_IMPORT => 51, CommonConfigurationOrganismePeer::EXPRESSION_REG_REFERENCE => 52, CommonConfigurationOrganismePeer::VISIOCONFERENCE_CAO => 53, CommonConfigurationOrganismePeer::ESTIMATION_CONFIDENTIEL => 54, CommonConfigurationOrganismePeer::QUALIFICATION_REGISTRE_DEPOT => 55, CommonConfigurationOrganismePeer::GESTION_CAO => 56, CommonConfigurationOrganismePeer::REFERENTIEL_CONTACT => 57, CommonConfigurationOrganismePeer::GESTION_MONTANT_DEVISE => 58, CommonConfigurationOrganismePeer::GESTION_RABAIS => 59, CommonConfigurationOrganismePeer::GESTION_CAUTION_PROVISOIRE => 60, CommonConfigurationOrganismePeer::GESTION_TRAVAUX_CAO => 61, CommonConfigurationOrganismePeer::FILTRE_BDF_ENTREPRISE_VALIDE => 62, CommonConfigurationOrganismePeer::GESTION_STATISTIQUES_PME => 63, CommonConfigurationOrganismePeer::GESTION_DEMANDES_ACHATS => 64, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ORGANISME' => 0, 'ENCHERES' => 1, 'CONSULTATION_PJ_AUTRES_PIECES_TELECHARGEABLES' => 2, 'NO_ACTIVEX' => 3, 'GESTION_MAPA' => 4, 'ARTICLE_133_UPLOAD_FICHIER' => 5, 'CENTRALE_PUBLICATION' => 6, 'ORGANISATION_CENTRALISEE' => 7, 'PRESENCE_ELU' => 8, 'TRADUIRE_CONSULTATION' => 9, 'SUIVI_PASSATION' => 10, 'NUMEROTATION_REF_CONS' => 11, 'PMI_LIEN_PORTAIL_DEFENSE_AGENT' => 12, 'INTERFACE_ARCHIVE_ARCADE_PMI' => 13, 'DESARCHIVAGE_CONSULTATION' => 14, 'ALIMENTATION_AUTOMATIQUE_LISTE_INVITES' => 15, 'INTERFACE_CHORUS_PMI' => 16, 'ARCHIVAGE_CONSULTATION_SUR_PF' => 17, 'AUTORISER_MODIFICATION_APRES_PHASE_CONSULTATION' => 18, 'IMPORTER_ENVELOPPE' => 19, 'EXPORT_MARCHES_NOTIFIES' => 20, 'ACCES_AGENTS_CFE_BD_FOURNISSEUR' => 21, 'ACCES_AGENTS_CFE_OUVERTURE_ANALYSE' => 22, 'UTILISER_PARAMETRAGE_ENCHERES' => 23, 'GESTION_MANDATAIRE' => 24, 'VERIFIER_COMPTE_BOAMP' => 25, 'FOUR_EYES' => 26, 'INTERFACE_MODULE_RSEM' => 27, 'ARCHIVAGE_CONSULTATION_SAE_EXTERNE_ENVOI_ARCHIVE' => 28, 'ARCHIVAGE_CONSULTATION_SAE_EXTERNE_TELECHARGEMENT_ARCHIVE' => 29, 'AGENT_VERIFICATION_CERTIFICAT_PEPPOL' => 30, 'FUSEAU_HORAIRE' => 31, 'FICHE_WEKA' => 32, 'MISE_DISPOSITION_PIECES_MARCHE' => 33, 'BASE_DCE' => 34, 'AVIS_MEMBRES_COMMISION' => 35, 'DONNEES_REDAC' => 36, 'PERSONNALISER_AFFICHAGE_THEME_ET_ILLUSTRATION' => 37, 'TYPE_CONTRAT' => 38, 'ENTITE_ADJUDICATRICE' => 39, 'GESTION_OPERATIONS' => 40, 'CALENDRIER_DE_LA_CONSULTATION' => 41, 'DONNEES_COMPLEMENTAIRES' => 42, 'ESPACE_COLLABORATIF' => 43, 'HISTORIQUE_NAVIGATION_INSCRITS' => 44, 'IDENTIFICATION_CONTRAT' => 45, 'EXTRACTION_ACCORDS_CADRES' => 46, 'EXTRACTION_SIRET_ACHETEUR' => 47, 'MARCHE_PUBLIC_SIMPLIFIE' => 48, 'CONSULTATION_DEMANDE_ACHAT' => 49, 'AUTHENTICATE_AGENT_BY_LDAP' => 50, 'CONSULTATION_VIA_IMPORT' => 51, 'EXPRESSION_REG_REFERENCE' => 52, 'VISIOCONFERENCE_CAO' => 53, 'ESTIMATION_CONFIDENTIEL' => 54, 'QUALIFICATION_REGISTRE_DEPOT' => 55, 'GESTION_CAO' => 56, 'REFERENTIEL_CONTACT' => 57, 'GESTION_MONTANT_DEVISE' => 58, 'GESTION_RABAIS' => 59, 'GESTION_CAUTION_PROVISOIRE' => 60, 'GESTION_TRAVAUX_CAO' => 61, 'FILTRE_BDF_ENTREPRISE_VALIDE' => 62, 'GESTION_STATISTIQUES_PME' => 63, 'GESTION_DEMANDES_ACHATS' => 64, ),
        BasePeer::TYPE_FIELDNAME => array ('organisme' => 0, 'encheres' => 1, 'consultation_pj_autres_pieces_telechargeables' => 2, 'no_activex' => 3, 'gestion_mapa' => 4, 'article_133_upload_fichier' => 5, 'centrale_publication' => 6, 'organisation_centralisee' => 7, 'presence_elu' => 8, 'traduire_consultation' => 9, 'suivi_passation' => 10, 'numerotation_ref_cons' => 11, 'pmi_lien_portail_defense_agent' => 12, 'interface_archive_arcade_pmi' => 13, 'desarchivage_consultation' => 14, 'alimentation_automatique_liste_invites' => 15, 'interface_chorus_pmi' => 16, 'archivage_consultation_sur_pf' => 17, 'autoriser_modification_apres_phase_consultation' => 18, 'importer_enveloppe' => 19, 'export_marches_notifies' => 20, 'acces_agents_cfe_bd_fournisseur' => 21, 'acces_agents_cfe_ouverture_analyse' => 22, 'utiliser_parametrage_encheres' => 23, 'gestion_mandataire' => 24, 'verifier_compte_boamp' => 25, 'four_eyes' => 26, 'interface_module_rsem' => 27, 'archivage_consultation_sae_externe_envoi_archive' => 28, 'archivage_consultation_sae_externe_telechargement_archive' => 29, 'agent_verification_certificat_peppol' => 30, 'fuseau_horaire' => 31, 'fiche_weka' => 32, 'mise_disposition_pieces_marche' => 33, 'base_dce' => 34, 'avis_membres_commision' => 35, 'Donnees_Redac' => 36, 'Personnaliser_Affichage_Theme_Et_Illustration' => 37, 'type_contrat' => 38, 'entite_adjudicatrice' => 39, 'gestion_operations' => 40, 'calendrier_de_la_consultation' => 41, 'donnees_complementaires' => 42, 'espace_collaboratif' => 43, 'historique_navigation_inscrits' => 44, 'Identification_contrat' => 45, 'extraction_accords_cadres' => 46, 'extraction_siret_acheteur' => 47, 'marche_public_simplifie' => 48, 'consultation_demande_achat' => 49, 'authenticate_agent_by_ldap' => 50, 'consultation_via_import' => 51, 'EXPRESSION_REG_REFERENCE' => 52, 'visioconference_cao' => 53, 'estimation_confidentiel' => 54, 'qualification_registre_depot' => 55, 'gestion_cao' => 56, 'referentiel_contact' => 57, 'gestion_montant_devise' => 58, 'gestion_rabais' => 59, 'gestion_caution_provisoire' => 60, 'gestion_travaux_cao' => 61, 'filtre_bdf_entreprise_valide' => 62, 'gestion_statistiques_pme' => 63, 'gestion_demandes_achats' => 64, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonConfigurationOrganismePeer::ENCHERES => array(
            CommonConfigurationOrganismePeer::ENCHERES_0,
            CommonConfigurationOrganismePeer::ENCHERES_1,
        ),
        CommonConfigurationOrganismePeer::CONSULTATION_PJ_AUTRES_PIECES_TELECHARGEABLES => array(
            CommonConfigurationOrganismePeer::CONSULTATION_PJ_AUTRES_PIECES_TELECHARGEABLES_0,
            CommonConfigurationOrganismePeer::CONSULTATION_PJ_AUTRES_PIECES_TELECHARGEABLES_1,
        ),
        CommonConfigurationOrganismePeer::NO_ACTIVEX => array(
            CommonConfigurationOrganismePeer::NO_ACTIVEX_0,
            CommonConfigurationOrganismePeer::NO_ACTIVEX_1,
        ),
        CommonConfigurationOrganismePeer::GESTION_MAPA => array(
            CommonConfigurationOrganismePeer::GESTION_MAPA_0,
            CommonConfigurationOrganismePeer::GESTION_MAPA_1,
        ),
        CommonConfigurationOrganismePeer::ARTICLE_133_UPLOAD_FICHIER => array(
            CommonConfigurationOrganismePeer::ARTICLE_133_UPLOAD_FICHIER_0,
            CommonConfigurationOrganismePeer::ARTICLE_133_UPLOAD_FICHIER_1,
        ),
        CommonConfigurationOrganismePeer::CENTRALE_PUBLICATION => array(
            CommonConfigurationOrganismePeer::CENTRALE_PUBLICATION_0,
            CommonConfigurationOrganismePeer::CENTRALE_PUBLICATION_1,
        ),
        CommonConfigurationOrganismePeer::ORGANISATION_CENTRALISEE => array(
            CommonConfigurationOrganismePeer::ORGANISATION_CENTRALISEE_0,
            CommonConfigurationOrganismePeer::ORGANISATION_CENTRALISEE_1,
        ),
        CommonConfigurationOrganismePeer::PRESENCE_ELU => array(
            CommonConfigurationOrganismePeer::PRESENCE_ELU_0,
            CommonConfigurationOrganismePeer::PRESENCE_ELU_1,
        ),
        CommonConfigurationOrganismePeer::TRADUIRE_CONSULTATION => array(
            CommonConfigurationOrganismePeer::TRADUIRE_CONSULTATION_0,
            CommonConfigurationOrganismePeer::TRADUIRE_CONSULTATION_1,
        ),
        CommonConfigurationOrganismePeer::SUIVI_PASSATION => array(
            CommonConfigurationOrganismePeer::SUIVI_PASSATION_0,
            CommonConfigurationOrganismePeer::SUIVI_PASSATION_1,
        ),
        CommonConfigurationOrganismePeer::NUMEROTATION_REF_CONS => array(
            CommonConfigurationOrganismePeer::NUMEROTATION_REF_CONS_0,
            CommonConfigurationOrganismePeer::NUMEROTATION_REF_CONS_1,
        ),
        CommonConfigurationOrganismePeer::PMI_LIEN_PORTAIL_DEFENSE_AGENT => array(
            CommonConfigurationOrganismePeer::PMI_LIEN_PORTAIL_DEFENSE_AGENT_0,
            CommonConfigurationOrganismePeer::PMI_LIEN_PORTAIL_DEFENSE_AGENT_1,
        ),
        CommonConfigurationOrganismePeer::INTERFACE_ARCHIVE_ARCADE_PMI => array(
            CommonConfigurationOrganismePeer::INTERFACE_ARCHIVE_ARCADE_PMI_0,
            CommonConfigurationOrganismePeer::INTERFACE_ARCHIVE_ARCADE_PMI_1,
        ),
        CommonConfigurationOrganismePeer::DESARCHIVAGE_CONSULTATION => array(
            CommonConfigurationOrganismePeer::DESARCHIVAGE_CONSULTATION_0,
            CommonConfigurationOrganismePeer::DESARCHIVAGE_CONSULTATION_1,
        ),
        CommonConfigurationOrganismePeer::ALIMENTATION_AUTOMATIQUE_LISTE_INVITES => array(
            CommonConfigurationOrganismePeer::ALIMENTATION_AUTOMATIQUE_LISTE_INVITES_0,
            CommonConfigurationOrganismePeer::ALIMENTATION_AUTOMATIQUE_LISTE_INVITES_1,
        ),
        CommonConfigurationOrganismePeer::INTERFACE_CHORUS_PMI => array(
            CommonConfigurationOrganismePeer::INTERFACE_CHORUS_PMI_0,
            CommonConfigurationOrganismePeer::INTERFACE_CHORUS_PMI_1,
        ),
        CommonConfigurationOrganismePeer::ARCHIVAGE_CONSULTATION_SUR_PF => array(
            CommonConfigurationOrganismePeer::ARCHIVAGE_CONSULTATION_SUR_PF_0,
            CommonConfigurationOrganismePeer::ARCHIVAGE_CONSULTATION_SUR_PF_1,
        ),
        CommonConfigurationOrganismePeer::AUTORISER_MODIFICATION_APRES_PHASE_CONSULTATION => array(
            CommonConfigurationOrganismePeer::AUTORISER_MODIFICATION_APRES_PHASE_CONSULTATION_0,
            CommonConfigurationOrganismePeer::AUTORISER_MODIFICATION_APRES_PHASE_CONSULTATION_1,
        ),
        CommonConfigurationOrganismePeer::IMPORTER_ENVELOPPE => array(
            CommonConfigurationOrganismePeer::IMPORTER_ENVELOPPE_0,
            CommonConfigurationOrganismePeer::IMPORTER_ENVELOPPE_1,
        ),
        CommonConfigurationOrganismePeer::EXPORT_MARCHES_NOTIFIES => array(
            CommonConfigurationOrganismePeer::EXPORT_MARCHES_NOTIFIES_0,
            CommonConfigurationOrganismePeer::EXPORT_MARCHES_NOTIFIES_1,
        ),
        CommonConfigurationOrganismePeer::ACCES_AGENTS_CFE_BD_FOURNISSEUR => array(
            CommonConfigurationOrganismePeer::ACCES_AGENTS_CFE_BD_FOURNISSEUR_0,
            CommonConfigurationOrganismePeer::ACCES_AGENTS_CFE_BD_FOURNISSEUR_1,
        ),
        CommonConfigurationOrganismePeer::ACCES_AGENTS_CFE_OUVERTURE_ANALYSE => array(
            CommonConfigurationOrganismePeer::ACCES_AGENTS_CFE_OUVERTURE_ANALYSE_0,
            CommonConfigurationOrganismePeer::ACCES_AGENTS_CFE_OUVERTURE_ANALYSE_1,
        ),
        CommonConfigurationOrganismePeer::UTILISER_PARAMETRAGE_ENCHERES => array(
            CommonConfigurationOrganismePeer::UTILISER_PARAMETRAGE_ENCHERES_0,
            CommonConfigurationOrganismePeer::UTILISER_PARAMETRAGE_ENCHERES_1,
        ),
        CommonConfigurationOrganismePeer::GESTION_MANDATAIRE => array(
            CommonConfigurationOrganismePeer::GESTION_MANDATAIRE_0,
            CommonConfigurationOrganismePeer::GESTION_MANDATAIRE_1,
        ),
        CommonConfigurationOrganismePeer::VERIFIER_COMPTE_BOAMP => array(
            CommonConfigurationOrganismePeer::VERIFIER_COMPTE_BOAMP_0,
            CommonConfigurationOrganismePeer::VERIFIER_COMPTE_BOAMP_1,
        ),
        CommonConfigurationOrganismePeer::FOUR_EYES => array(
            CommonConfigurationOrganismePeer::FOUR_EYES_0,
            CommonConfigurationOrganismePeer::FOUR_EYES_1,
        ),
        CommonConfigurationOrganismePeer::INTERFACE_MODULE_RSEM => array(
            CommonConfigurationOrganismePeer::INTERFACE_MODULE_RSEM_0,
            CommonConfigurationOrganismePeer::INTERFACE_MODULE_RSEM_1,
        ),
        CommonConfigurationOrganismePeer::ARCHIVAGE_CONSULTATION_SAE_EXTERNE_ENVOI_ARCHIVE => array(
            CommonConfigurationOrganismePeer::ARCHIVAGE_CONSULTATION_SAE_EXTERNE_ENVOI_ARCHIVE_0,
            CommonConfigurationOrganismePeer::ARCHIVAGE_CONSULTATION_SAE_EXTERNE_ENVOI_ARCHIVE_1,
        ),
        CommonConfigurationOrganismePeer::ARCHIVAGE_CONSULTATION_SAE_EXTERNE_TELECHARGEMENT_ARCHIVE => array(
            CommonConfigurationOrganismePeer::ARCHIVAGE_CONSULTATION_SAE_EXTERNE_TELECHARGEMENT_ARCHIVE_0,
            CommonConfigurationOrganismePeer::ARCHIVAGE_CONSULTATION_SAE_EXTERNE_TELECHARGEMENT_ARCHIVE_1,
        ),
        CommonConfigurationOrganismePeer::AGENT_VERIFICATION_CERTIFICAT_PEPPOL => array(
            CommonConfigurationOrganismePeer::AGENT_VERIFICATION_CERTIFICAT_PEPPOL_0,
            CommonConfigurationOrganismePeer::AGENT_VERIFICATION_CERTIFICAT_PEPPOL_1,
        ),
        CommonConfigurationOrganismePeer::FUSEAU_HORAIRE => array(
            CommonConfigurationOrganismePeer::FUSEAU_HORAIRE_0,
            CommonConfigurationOrganismePeer::FUSEAU_HORAIRE_1,
        ),
        CommonConfigurationOrganismePeer::FICHE_WEKA => array(
            CommonConfigurationOrganismePeer::FICHE_WEKA_0,
            CommonConfigurationOrganismePeer::FICHE_WEKA_1,
        ),
        CommonConfigurationOrganismePeer::MISE_DISPOSITION_PIECES_MARCHE => array(
            CommonConfigurationOrganismePeer::MISE_DISPOSITION_PIECES_MARCHE_0,
            CommonConfigurationOrganismePeer::MISE_DISPOSITION_PIECES_MARCHE_1,
        ),
        CommonConfigurationOrganismePeer::BASE_DCE => array(
            CommonConfigurationOrganismePeer::BASE_DCE_0,
            CommonConfigurationOrganismePeer::BASE_DCE_1,
        ),
        CommonConfigurationOrganismePeer::AVIS_MEMBRES_COMMISION => array(
            CommonConfigurationOrganismePeer::AVIS_MEMBRES_COMMISION_0,
            CommonConfigurationOrganismePeer::AVIS_MEMBRES_COMMISION_1,
        ),
        CommonConfigurationOrganismePeer::DONNEES_REDAC => array(
            CommonConfigurationOrganismePeer::DONNEES_REDAC_0,
            CommonConfigurationOrganismePeer::DONNEES_REDAC_1,
        ),
        CommonConfigurationOrganismePeer::PERSONNALISER_AFFICHAGE_THEME_ET_ILLUSTRATION => array(
            CommonConfigurationOrganismePeer::PERSONNALISER_AFFICHAGE_THEME_ET_ILLUSTRATION_0,
            CommonConfigurationOrganismePeer::PERSONNALISER_AFFICHAGE_THEME_ET_ILLUSTRATION_1,
        ),
        CommonConfigurationOrganismePeer::TYPE_CONTRAT => array(
            CommonConfigurationOrganismePeer::TYPE_CONTRAT_0,
            CommonConfigurationOrganismePeer::TYPE_CONTRAT_1,
        ),
        CommonConfigurationOrganismePeer::ENTITE_ADJUDICATRICE => array(
            CommonConfigurationOrganismePeer::ENTITE_ADJUDICATRICE_0,
            CommonConfigurationOrganismePeer::ENTITE_ADJUDICATRICE_1,
        ),
        CommonConfigurationOrganismePeer::GESTION_OPERATIONS => array(
            CommonConfigurationOrganismePeer::GESTION_OPERATIONS_0,
            CommonConfigurationOrganismePeer::GESTION_OPERATIONS_1,
        ),
        CommonConfigurationOrganismePeer::CALENDRIER_DE_LA_CONSULTATION => array(
            CommonConfigurationOrganismePeer::CALENDRIER_DE_LA_CONSULTATION_0,
            CommonConfigurationOrganismePeer::CALENDRIER_DE_LA_CONSULTATION_1,
        ),
        CommonConfigurationOrganismePeer::DONNEES_COMPLEMENTAIRES => array(
            CommonConfigurationOrganismePeer::DONNEES_COMPLEMENTAIRES_0,
            CommonConfigurationOrganismePeer::DONNEES_COMPLEMENTAIRES_1,
        ),
        CommonConfigurationOrganismePeer::ESPACE_COLLABORATIF => array(
            CommonConfigurationOrganismePeer::ESPACE_COLLABORATIF_0,
            CommonConfigurationOrganismePeer::ESPACE_COLLABORATIF_1,
        ),
        CommonConfigurationOrganismePeer::HISTORIQUE_NAVIGATION_INSCRITS => array(
            CommonConfigurationOrganismePeer::HISTORIQUE_NAVIGATION_INSCRITS_0,
            CommonConfigurationOrganismePeer::HISTORIQUE_NAVIGATION_INSCRITS_1,
        ),
        CommonConfigurationOrganismePeer::IDENTIFICATION_CONTRAT => array(
            CommonConfigurationOrganismePeer::IDENTIFICATION_CONTRAT_0,
            CommonConfigurationOrganismePeer::IDENTIFICATION_CONTRAT_1,
        ),
        CommonConfigurationOrganismePeer::EXTRACTION_ACCORDS_CADRES => array(
            CommonConfigurationOrganismePeer::EXTRACTION_ACCORDS_CADRES_0,
            CommonConfigurationOrganismePeer::EXTRACTION_ACCORDS_CADRES_1,
        ),
        CommonConfigurationOrganismePeer::EXTRACTION_SIRET_ACHETEUR => array(
            CommonConfigurationOrganismePeer::EXTRACTION_SIRET_ACHETEUR_0,
            CommonConfigurationOrganismePeer::EXTRACTION_SIRET_ACHETEUR_1,
        ),
        CommonConfigurationOrganismePeer::MARCHE_PUBLIC_SIMPLIFIE => array(
            CommonConfigurationOrganismePeer::MARCHE_PUBLIC_SIMPLIFIE_0,
            CommonConfigurationOrganismePeer::MARCHE_PUBLIC_SIMPLIFIE_1,
        ),
        CommonConfigurationOrganismePeer::CONSULTATION_DEMANDE_ACHAT => array(
            CommonConfigurationOrganismePeer::CONSULTATION_DEMANDE_ACHAT_0,
            CommonConfigurationOrganismePeer::CONSULTATION_DEMANDE_ACHAT_1,
        ),
        CommonConfigurationOrganismePeer::AUTHENTICATE_AGENT_BY_LDAP => array(
            CommonConfigurationOrganismePeer::AUTHENTICATE_AGENT_BY_LDAP_0,
            CommonConfigurationOrganismePeer::AUTHENTICATE_AGENT_BY_LDAP_1,
        ),
        CommonConfigurationOrganismePeer::CONSULTATION_VIA_IMPORT => array(
            CommonConfigurationOrganismePeer::CONSULTATION_VIA_IMPORT_0,
            CommonConfigurationOrganismePeer::CONSULTATION_VIA_IMPORT_1,
        ),
        CommonConfigurationOrganismePeer::VISIOCONFERENCE_CAO => array(
            CommonConfigurationOrganismePeer::VISIOCONFERENCE_CAO_1,
            CommonConfigurationOrganismePeer::VISIOCONFERENCE_CAO_0,
        ),
        CommonConfigurationOrganismePeer::ESTIMATION_CONFIDENTIEL => array(
            CommonConfigurationOrganismePeer::ESTIMATION_CONFIDENTIEL_0,
            CommonConfigurationOrganismePeer::ESTIMATION_CONFIDENTIEL_1,
        ),
        CommonConfigurationOrganismePeer::QUALIFICATION_REGISTRE_DEPOT => array(
            CommonConfigurationOrganismePeer::QUALIFICATION_REGISTRE_DEPOT_0,
            CommonConfigurationOrganismePeer::QUALIFICATION_REGISTRE_DEPOT_1,
        ),
        CommonConfigurationOrganismePeer::GESTION_CAO => array(
            CommonConfigurationOrganismePeer::GESTION_CAO_0,
            CommonConfigurationOrganismePeer::GESTION_CAO_1,
        ),
        CommonConfigurationOrganismePeer::REFERENTIEL_CONTACT => array(
            CommonConfigurationOrganismePeer::REFERENTIEL_CONTACT_0,
            CommonConfigurationOrganismePeer::REFERENTIEL_CONTACT_1,
        ),
        CommonConfigurationOrganismePeer::GESTION_MONTANT_DEVISE => array(
            CommonConfigurationOrganismePeer::GESTION_MONTANT_DEVISE_0,
            CommonConfigurationOrganismePeer::GESTION_MONTANT_DEVISE_1,
        ),
        CommonConfigurationOrganismePeer::GESTION_RABAIS => array(
            CommonConfigurationOrganismePeer::GESTION_RABAIS_0,
            CommonConfigurationOrganismePeer::GESTION_RABAIS_1,
        ),
        CommonConfigurationOrganismePeer::GESTION_CAUTION_PROVISOIRE => array(
            CommonConfigurationOrganismePeer::GESTION_CAUTION_PROVISOIRE_0,
            CommonConfigurationOrganismePeer::GESTION_CAUTION_PROVISOIRE_1,
        ),
        CommonConfigurationOrganismePeer::GESTION_TRAVAUX_CAO => array(
            CommonConfigurationOrganismePeer::GESTION_TRAVAUX_CAO_0,
            CommonConfigurationOrganismePeer::GESTION_TRAVAUX_CAO_1,
        ),
        CommonConfigurationOrganismePeer::FILTRE_BDF_ENTREPRISE_VALIDE => array(
            CommonConfigurationOrganismePeer::FILTRE_BDF_ENTREPRISE_VALIDE_0,
            CommonConfigurationOrganismePeer::FILTRE_BDF_ENTREPRISE_VALIDE_1,
        ),
        CommonConfigurationOrganismePeer::GESTION_STATISTIQUES_PME => array(
            CommonConfigurationOrganismePeer::GESTION_STATISTIQUES_PME_0,
            CommonConfigurationOrganismePeer::GESTION_STATISTIQUES_PME_1,
        ),
        CommonConfigurationOrganismePeer::GESTION_DEMANDES_ACHATS => array(
            CommonConfigurationOrganismePeer::GESTION_DEMANDES_ACHATS_0,
            CommonConfigurationOrganismePeer::GESTION_DEMANDES_ACHATS_1,
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
        $toNames = CommonConfigurationOrganismePeer::getFieldNames($toType);
        $key = isset(CommonConfigurationOrganismePeer::$fieldKeys[$fromType][$name]) ? CommonConfigurationOrganismePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonConfigurationOrganismePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonConfigurationOrganismePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonConfigurationOrganismePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonConfigurationOrganismePeer::$enumValueSets;
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
        $valueSets = CommonConfigurationOrganismePeer::getValueSets();

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
        $values = CommonConfigurationOrganismePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonConfigurationOrganismePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonConfigurationOrganismePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::ORGANISME);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::ENCHERES);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::CONSULTATION_PJ_AUTRES_PIECES_TELECHARGEABLES);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::NO_ACTIVEX);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::GESTION_MAPA);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::ARTICLE_133_UPLOAD_FICHIER);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::CENTRALE_PUBLICATION);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::ORGANISATION_CENTRALISEE);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::PRESENCE_ELU);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::TRADUIRE_CONSULTATION);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::SUIVI_PASSATION);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::NUMEROTATION_REF_CONS);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::PMI_LIEN_PORTAIL_DEFENSE_AGENT);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::INTERFACE_ARCHIVE_ARCADE_PMI);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::DESARCHIVAGE_CONSULTATION);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::ALIMENTATION_AUTOMATIQUE_LISTE_INVITES);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::INTERFACE_CHORUS_PMI);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::ARCHIVAGE_CONSULTATION_SUR_PF);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::AUTORISER_MODIFICATION_APRES_PHASE_CONSULTATION);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::IMPORTER_ENVELOPPE);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::EXPORT_MARCHES_NOTIFIES);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::ACCES_AGENTS_CFE_BD_FOURNISSEUR);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::ACCES_AGENTS_CFE_OUVERTURE_ANALYSE);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::UTILISER_PARAMETRAGE_ENCHERES);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::GESTION_MANDATAIRE);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::VERIFIER_COMPTE_BOAMP);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::FOUR_EYES);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::INTERFACE_MODULE_RSEM);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::ARCHIVAGE_CONSULTATION_SAE_EXTERNE_ENVOI_ARCHIVE);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::ARCHIVAGE_CONSULTATION_SAE_EXTERNE_TELECHARGEMENT_ARCHIVE);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::AGENT_VERIFICATION_CERTIFICAT_PEPPOL);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::FUSEAU_HORAIRE);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::FICHE_WEKA);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::MISE_DISPOSITION_PIECES_MARCHE);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::BASE_DCE);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::AVIS_MEMBRES_COMMISION);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::DONNEES_REDAC);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::PERSONNALISER_AFFICHAGE_THEME_ET_ILLUSTRATION);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::TYPE_CONTRAT);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::ENTITE_ADJUDICATRICE);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::GESTION_OPERATIONS);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::CALENDRIER_DE_LA_CONSULTATION);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::DONNEES_COMPLEMENTAIRES);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::ESPACE_COLLABORATIF);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::HISTORIQUE_NAVIGATION_INSCRITS);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::IDENTIFICATION_CONTRAT);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::EXTRACTION_ACCORDS_CADRES);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::EXTRACTION_SIRET_ACHETEUR);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::MARCHE_PUBLIC_SIMPLIFIE);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::CONSULTATION_DEMANDE_ACHAT);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::AUTHENTICATE_AGENT_BY_LDAP);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::CONSULTATION_VIA_IMPORT);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::EXPRESSION_REG_REFERENCE);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::VISIOCONFERENCE_CAO);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::ESTIMATION_CONFIDENTIEL);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::QUALIFICATION_REGISTRE_DEPOT);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::GESTION_CAO);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::REFERENTIEL_CONTACT);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::GESTION_MONTANT_DEVISE);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::GESTION_RABAIS);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::GESTION_CAUTION_PROVISOIRE);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::GESTION_TRAVAUX_CAO);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::FILTRE_BDF_ENTREPRISE_VALIDE);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::GESTION_STATISTIQUES_PME);
            $criteria->addSelectColumn(CommonConfigurationOrganismePeer::GESTION_DEMANDES_ACHATS);
        } else {
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.encheres');
            $criteria->addSelectColumn($alias . '.consultation_pj_autres_pieces_telechargeables');
            $criteria->addSelectColumn($alias . '.no_activex');
            $criteria->addSelectColumn($alias . '.gestion_mapa');
            $criteria->addSelectColumn($alias . '.article_133_upload_fichier');
            $criteria->addSelectColumn($alias . '.centrale_publication');
            $criteria->addSelectColumn($alias . '.organisation_centralisee');
            $criteria->addSelectColumn($alias . '.presence_elu');
            $criteria->addSelectColumn($alias . '.traduire_consultation');
            $criteria->addSelectColumn($alias . '.suivi_passation');
            $criteria->addSelectColumn($alias . '.numerotation_ref_cons');
            $criteria->addSelectColumn($alias . '.pmi_lien_portail_defense_agent');
            $criteria->addSelectColumn($alias . '.interface_archive_arcade_pmi');
            $criteria->addSelectColumn($alias . '.desarchivage_consultation');
            $criteria->addSelectColumn($alias . '.alimentation_automatique_liste_invites');
            $criteria->addSelectColumn($alias . '.interface_chorus_pmi');
            $criteria->addSelectColumn($alias . '.archivage_consultation_sur_pf');
            $criteria->addSelectColumn($alias . '.autoriser_modification_apres_phase_consultation');
            $criteria->addSelectColumn($alias . '.importer_enveloppe');
            $criteria->addSelectColumn($alias . '.export_marches_notifies');
            $criteria->addSelectColumn($alias . '.acces_agents_cfe_bd_fournisseur');
            $criteria->addSelectColumn($alias . '.acces_agents_cfe_ouverture_analyse');
            $criteria->addSelectColumn($alias . '.utiliser_parametrage_encheres');
            $criteria->addSelectColumn($alias . '.gestion_mandataire');
            $criteria->addSelectColumn($alias . '.verifier_compte_boamp');
            $criteria->addSelectColumn($alias . '.four_eyes');
            $criteria->addSelectColumn($alias . '.interface_module_rsem');
            $criteria->addSelectColumn($alias . '.archivage_consultation_sae_externe_envoi_archive');
            $criteria->addSelectColumn($alias . '.archivage_consultation_sae_externe_telechargement_archive');
            $criteria->addSelectColumn($alias . '.agent_verification_certificat_peppol');
            $criteria->addSelectColumn($alias . '.fuseau_horaire');
            $criteria->addSelectColumn($alias . '.fiche_weka');
            $criteria->addSelectColumn($alias . '.mise_disposition_pieces_marche');
            $criteria->addSelectColumn($alias . '.base_dce');
            $criteria->addSelectColumn($alias . '.avis_membres_commision');
            $criteria->addSelectColumn($alias . '.Donnees_Redac');
            $criteria->addSelectColumn($alias . '.Personnaliser_Affichage_Theme_Et_Illustration');
            $criteria->addSelectColumn($alias . '.type_contrat');
            $criteria->addSelectColumn($alias . '.entite_adjudicatrice');
            $criteria->addSelectColumn($alias . '.gestion_operations');
            $criteria->addSelectColumn($alias . '.calendrier_de_la_consultation');
            $criteria->addSelectColumn($alias . '.donnees_complementaires');
            $criteria->addSelectColumn($alias . '.espace_collaboratif');
            $criteria->addSelectColumn($alias . '.historique_navigation_inscrits');
            $criteria->addSelectColumn($alias . '.Identification_contrat');
            $criteria->addSelectColumn($alias . '.extraction_accords_cadres');
            $criteria->addSelectColumn($alias . '.extraction_siret_acheteur');
            $criteria->addSelectColumn($alias . '.marche_public_simplifie');
            $criteria->addSelectColumn($alias . '.consultation_demande_achat');
            $criteria->addSelectColumn($alias . '.authenticate_agent_by_ldap');
            $criteria->addSelectColumn($alias . '.consultation_via_import');
            $criteria->addSelectColumn($alias . '.EXPRESSION_REG_REFERENCE');
            $criteria->addSelectColumn($alias . '.visioconference_cao');
            $criteria->addSelectColumn($alias . '.estimation_confidentiel');
            $criteria->addSelectColumn($alias . '.qualification_registre_depot');
            $criteria->addSelectColumn($alias . '.gestion_cao');
            $criteria->addSelectColumn($alias . '.referentiel_contact');
            $criteria->addSelectColumn($alias . '.gestion_montant_devise');
            $criteria->addSelectColumn($alias . '.gestion_rabais');
            $criteria->addSelectColumn($alias . '.gestion_caution_provisoire');
            $criteria->addSelectColumn($alias . '.gestion_travaux_cao');
            $criteria->addSelectColumn($alias . '.filtre_bdf_entreprise_valide');
            $criteria->addSelectColumn($alias . '.gestion_statistiques_pme');
            $criteria->addSelectColumn($alias . '.gestion_demandes_achats');
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
        $criteria->setPrimaryTableName(CommonConfigurationOrganismePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonConfigurationOrganismePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonConfigurationOrganismePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonConfigurationOrganismePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonConfigurationOrganisme
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonConfigurationOrganismePeer::doSelect($critcopy, $con);
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
        return CommonConfigurationOrganismePeer::populateObjects(CommonConfigurationOrganismePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonConfigurationOrganismePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonConfigurationOrganismePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonConfigurationOrganismePeer::DATABASE_NAME);

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
     * @param      CommonConfigurationOrganisme $obj A CommonConfigurationOrganisme object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getOrganisme();
            } // if key === null
            CommonConfigurationOrganismePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonConfigurationOrganisme object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonConfigurationOrganisme) {
                $key = (string) $value->getOrganisme();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonConfigurationOrganisme object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonConfigurationOrganismePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonConfigurationOrganisme Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonConfigurationOrganismePeer::$instances[$key])) {
                return CommonConfigurationOrganismePeer::$instances[$key];
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
        foreach (CommonConfigurationOrganismePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonConfigurationOrganismePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to configuration_organisme
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

        return (string) $row[$startcol];
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
        $cls = CommonConfigurationOrganismePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonConfigurationOrganismePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonConfigurationOrganismePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonConfigurationOrganismePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonConfigurationOrganisme object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonConfigurationOrganismePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonConfigurationOrganismePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonConfigurationOrganismePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonConfigurationOrganismePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonConfigurationOrganismePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonConfigurationOrganismePeer::DATABASE_NAME)->getTable(CommonConfigurationOrganismePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonConfigurationOrganismePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonConfigurationOrganismePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonConfigurationOrganismeTableMap());
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
        return CommonConfigurationOrganismePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonConfigurationOrganisme or Criteria object.
     *
     * @param      mixed $values Criteria or CommonConfigurationOrganisme object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonConfigurationOrganismePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonConfigurationOrganisme object
        }


        // Set the correct dbName
        $criteria->setDbName(CommonConfigurationOrganismePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonConfigurationOrganisme or Criteria object.
     *
     * @param      mixed $values Criteria or CommonConfigurationOrganisme object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonConfigurationOrganismePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonConfigurationOrganismePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonConfigurationOrganismePeer::ORGANISME);
            $value = $criteria->remove(CommonConfigurationOrganismePeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonConfigurationOrganismePeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonConfigurationOrganismePeer::TABLE_NAME);
            }

        } else { // $values is CommonConfigurationOrganisme object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonConfigurationOrganismePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the configuration_organisme table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonConfigurationOrganismePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonConfigurationOrganismePeer::TABLE_NAME, $con, CommonConfigurationOrganismePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonConfigurationOrganismePeer::clearInstancePool();
            CommonConfigurationOrganismePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonConfigurationOrganisme or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonConfigurationOrganisme object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonConfigurationOrganismePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonConfigurationOrganismePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonConfigurationOrganisme) { // it's a model object
            // invalidate the cache for this single object
            CommonConfigurationOrganismePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonConfigurationOrganismePeer::DATABASE_NAME);
            $criteria->add(CommonConfigurationOrganismePeer::ORGANISME, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonConfigurationOrganismePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonConfigurationOrganismePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonConfigurationOrganismePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonConfigurationOrganisme object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonConfigurationOrganisme $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonConfigurationOrganismePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonConfigurationOrganismePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonConfigurationOrganismePeer::DATABASE_NAME, CommonConfigurationOrganismePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      string $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonConfigurationOrganisme
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonConfigurationOrganismePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonConfigurationOrganismePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonConfigurationOrganismePeer::DATABASE_NAME);
        $criteria->add(CommonConfigurationOrganismePeer::ORGANISME, $pk);

        $v = CommonConfigurationOrganismePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonConfigurationOrganisme[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonConfigurationOrganismePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonConfigurationOrganismePeer::DATABASE_NAME);
            $criteria->add(CommonConfigurationOrganismePeer::ORGANISME, $pks, Criteria::IN);
            $objs = CommonConfigurationOrganismePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonConfigurationOrganismePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonConfigurationOrganismePeer::buildTableMap();

