<?php



/**
 * This class defines the structure of the 'configuration_organisme' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.mpe.map
 */
class CommonConfigurationOrganismeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonConfigurationOrganismeTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('configuration_organisme');
        $this->setPhpName('CommonConfigurationOrganisme');
        $this->setClassname('CommonConfigurationOrganisme');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, '');
        $this->addColumn('encheres', 'Encheres', 'CHAR', true, null, '0');
        $this->getColumn('encheres', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('consultation_pj_autres_pieces_telechargeables', 'ConsultationPjAutresPiecesTelechargeables', 'CHAR', true, null, '1');
        $this->getColumn('consultation_pj_autres_pieces_telechargeables', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('no_activex', 'NoActivex', 'CHAR', true, null, '0');
        $this->getColumn('no_activex', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gestion_mapa', 'GestionMapa', 'CHAR', true, null, '1');
        $this->getColumn('gestion_mapa', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('article_133_upload_fichier', 'Article133UploadFichier', 'CHAR', true, null, '1');
        $this->getColumn('article_133_upload_fichier', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('centrale_publication', 'CentralePublication', 'CHAR', true, null, '0');
        $this->getColumn('centrale_publication', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('organisation_centralisee', 'OrganisationCentralisee', 'CHAR', true, null, '1');
        $this->getColumn('organisation_centralisee', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('presence_elu', 'PresenceElu', 'CHAR', true, null, '0');
        $this->getColumn('presence_elu', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('traduire_consultation', 'TraduireConsultation', 'CHAR', true, null, '0');
        $this->getColumn('traduire_consultation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('suivi_passation', 'SuiviPassation', 'CHAR', true, null, '0');
        $this->getColumn('suivi_passation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('numerotation_ref_cons', 'NumerotationRefCons', 'CHAR', true, null, '0');
        $this->getColumn('numerotation_ref_cons', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('pmi_lien_portail_defense_agent', 'PmiLienPortailDefenseAgent', 'CHAR', true, null, '0');
        $this->getColumn('pmi_lien_portail_defense_agent', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('interface_archive_arcade_pmi', 'InterfaceArchiveArcadePmi', 'CHAR', true, null, '0');
        $this->getColumn('interface_archive_arcade_pmi', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('desarchivage_consultation', 'DesarchivageConsultation', 'CHAR', true, null, '0');
        $this->getColumn('desarchivage_consultation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('alimentation_automatique_liste_invites', 'AlimentationAutomatiqueListeInvites', 'CHAR', true, null, '0');
        $this->getColumn('alimentation_automatique_liste_invites', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('interface_chorus_pmi', 'InterfaceChorusPmi', 'CHAR', true, null, '0');
        $this->getColumn('interface_chorus_pmi', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('archivage_consultation_sur_pf', 'ArchivageConsultationSurPf', 'CHAR', true, null, '0');
        $this->getColumn('archivage_consultation_sur_pf', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('autoriser_modification_apres_phase_consultation', 'AutoriserModificationApresPhaseConsultation', 'CHAR', true, null, '1');
        $this->getColumn('autoriser_modification_apres_phase_consultation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('importer_enveloppe', 'ImporterEnveloppe', 'CHAR', true, null, '1');
        $this->getColumn('importer_enveloppe', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('export_marches_notifies', 'ExportMarchesNotifies', 'CHAR', true, null, '0');
        $this->getColumn('export_marches_notifies', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('acces_agents_cfe_bd_fournisseur', 'AccesAgentsCfeBdFournisseur', 'CHAR', true, null, '0');
        $this->getColumn('acces_agents_cfe_bd_fournisseur', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('acces_agents_cfe_ouverture_analyse', 'AccesAgentsCfeOuvertureAnalyse', 'CHAR', true, null, '1');
        $this->getColumn('acces_agents_cfe_ouverture_analyse', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('utiliser_parametrage_encheres', 'UtiliserParametrageEncheres', 'CHAR', true, null, '0');
        $this->getColumn('utiliser_parametrage_encheres', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gestion_mandataire', 'GestionMandataire', 'CHAR', true, null, '0');
        $this->getColumn('gestion_mandataire', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('verifier_compte_boamp', 'VerifierCompteBoamp', 'CHAR', true, null, '0');
        $this->getColumn('verifier_compte_boamp', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('four_eyes', 'FourEyes', 'CHAR', true, null, '0');
        $this->getColumn('four_eyes', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('interface_module_rsem', 'InterfaceModuleRsem', 'CHAR', true, null, '0');
        $this->getColumn('interface_module_rsem', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('archivage_consultation_sae_externe_envoi_archive', 'ArchivageConsultationSaeExterneEnvoiArchive', 'CHAR', true, null, '0');
        $this->getColumn('archivage_consultation_sae_externe_envoi_archive', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('archivage_consultation_sae_externe_telechargement_archive', 'ArchivageConsultationSaeExterneTelechargementArchive', 'CHAR', true, null, '0');
        $this->getColumn('archivage_consultation_sae_externe_telechargement_archive', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('agent_verification_certificat_peppol', 'AgentVerificationCertificatPeppol', 'CHAR', true, null, '0');
        $this->getColumn('agent_verification_certificat_peppol', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('fuseau_horaire', 'FuseauHoraire', 'CHAR', true, null, '0');
        $this->getColumn('fuseau_horaire', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('fiche_weka', 'FicheWeka', 'CHAR', true, null, '0');
        $this->getColumn('fiche_weka', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('mise_disposition_pieces_marche', 'MiseDispositionPiecesMarche', 'CHAR', true, null, '0');
        $this->getColumn('mise_disposition_pieces_marche', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('base_dce', 'BaseDce', 'CHAR', true, null, '0');
        $this->getColumn('base_dce', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('avis_membres_commision', 'AvisMembresCommision', 'CHAR', true, null, '0');
        $this->getColumn('avis_membres_commision', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('Donnees_Redac', 'DonneesRedac', 'CHAR', true, null, '0');
        $this->getColumn('Donnees_Redac', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('Personnaliser_Affichage_Theme_Et_Illustration', 'PersonnaliserAffichageThemeEtIllustration', 'CHAR', true, null, '0');
        $this->getColumn('Personnaliser_Affichage_Theme_Et_Illustration', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('type_contrat', 'TypeContrat', 'CHAR', true, null, '0');
        $this->getColumn('type_contrat', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('entite_adjudicatrice', 'EntiteAdjudicatrice', 'CHAR', true, null, '0');
        $this->getColumn('entite_adjudicatrice', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gestion_operations', 'GestionOperations', 'CHAR', true, null, '0');
        $this->getColumn('gestion_operations', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('calendrier_de_la_consultation', 'CalendrierDeLaConsultation', 'CHAR', true, null, '0');
        $this->getColumn('calendrier_de_la_consultation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('donnees_complementaires', 'DonneesComplementaires', 'CHAR', true, null, '0');
        $this->getColumn('donnees_complementaires', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('espace_collaboratif', 'EspaceCollaboratif', 'CHAR', true, null, '0');
        $this->getColumn('espace_collaboratif', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('historique_navigation_inscrits', 'HistoriqueNavigationInscrits', 'CHAR', true, null, '1');
        $this->getColumn('historique_navigation_inscrits', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('Identification_contrat', 'IdentificationContrat', 'CHAR', true, null, '0');
        $this->getColumn('Identification_contrat', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('extraction_accords_cadres', 'ExtractionAccordsCadres', 'CHAR', true, null, '0');
        $this->getColumn('extraction_accords_cadres', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('extraction_siret_acheteur', 'ExtractionSiretAcheteur', 'CHAR', true, null, '0');
        $this->getColumn('extraction_siret_acheteur', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('marche_public_simplifie', 'MarchePublicSimplifie', 'CHAR', true, null, '0');
        $this->getColumn('marche_public_simplifie', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('consultation_demande_achat', 'ConsultationDemandeAchat', 'CHAR', true, null, null);
        $this->getColumn('consultation_demande_achat', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('authenticate_agent_by_ldap', 'AuthenticateAgentByLdap', 'CHAR', true, null, null);
        $this->getColumn('authenticate_agent_by_ldap', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('consultation_via_import', 'ConsultationViaImport', 'CHAR', false, null, null);
        $this->getColumn('consultation_via_import', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('EXPRESSION_REG_REFERENCE', 'ExpressionRegReference', 'VARCHAR', false, 100, null);
        $this->addColumn('visioconference_cao', 'VisioconferenceCao', 'CHAR', true, null, null);
        $this->getColumn('visioconference_cao', false)->setValueSet(array (
  0 => '1',
  1 => '0',
));
        $this->addColumn('estimation_confidentiel', 'EstimationConfidentiel', 'CHAR', true, null, '0');
        $this->getColumn('estimation_confidentiel', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('qualification_registre_depot', 'QualificationRegistreDepot', 'CHAR', true, null, '0');
        $this->getColumn('qualification_registre_depot', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gestion_cao', 'GestionCao', 'CHAR', true, null, '0');
        $this->getColumn('gestion_cao', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('referentiel_contact', 'ReferentielContact', 'CHAR', true, null, '0');
        $this->getColumn('referentiel_contact', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gestion_montant_devise', 'GestionMontantDevise', 'CHAR', true, null, '0');
        $this->getColumn('gestion_montant_devise', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gestion_rabais', 'GestionRabais', 'CHAR', true, null, '0');
        $this->getColumn('gestion_rabais', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gestion_caution_provisoire', 'GestionCautionProvisoire', 'CHAR', true, null, '0');
        $this->getColumn('gestion_caution_provisoire', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gestion_travaux_cao', 'GestionTravauxCao', 'CHAR', true, null, '0');
        $this->getColumn('gestion_travaux_cao', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('filtre_bdf_entreprise_valide', 'FiltreBdfEntrepriseValide', 'CHAR', true, null, '0');
        $this->getColumn('filtre_bdf_entreprise_valide', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gestion_statistiques_pme', 'GestionStatistiquesPme', 'CHAR', true, null, '0');
        $this->getColumn('gestion_statistiques_pme', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gestion_demandes_achats', 'GestionDemandesAchats', 'CHAR', true, null, '0');
        $this->getColumn('gestion_demandes_achats', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonConfigurationOrganismeTableMap
