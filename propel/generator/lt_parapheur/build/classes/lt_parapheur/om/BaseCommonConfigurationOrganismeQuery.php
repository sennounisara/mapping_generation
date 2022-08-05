<?php


/**
 * Base class that represents a query for the 'configuration_organisme' table.
 *
 * 
 *
 * @method CommonConfigurationOrganismeQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonConfigurationOrganismeQuery orderByEncheres($order = Criteria::ASC) Order by the encheres column
 * @method CommonConfigurationOrganismeQuery orderByConsultationPjAutresPiecesTelechargeables($order = Criteria::ASC) Order by the consultation_pj_autres_pieces_telechargeables column
 * @method CommonConfigurationOrganismeQuery orderByNoActivex($order = Criteria::ASC) Order by the no_activex column
 * @method CommonConfigurationOrganismeQuery orderByGestionMapa($order = Criteria::ASC) Order by the gestion_mapa column
 * @method CommonConfigurationOrganismeQuery orderByArticle133UploadFichier($order = Criteria::ASC) Order by the article_133_upload_fichier column
 * @method CommonConfigurationOrganismeQuery orderByCentralePublication($order = Criteria::ASC) Order by the centrale_publication column
 * @method CommonConfigurationOrganismeQuery orderByOrganisationCentralisee($order = Criteria::ASC) Order by the organisation_centralisee column
 * @method CommonConfigurationOrganismeQuery orderByPresenceElu($order = Criteria::ASC) Order by the presence_elu column
 * @method CommonConfigurationOrganismeQuery orderByTraduireConsultation($order = Criteria::ASC) Order by the traduire_consultation column
 * @method CommonConfigurationOrganismeQuery orderBySuiviPassation($order = Criteria::ASC) Order by the suivi_passation column
 * @method CommonConfigurationOrganismeQuery orderByNumerotationRefCons($order = Criteria::ASC) Order by the numerotation_ref_cons column
 * @method CommonConfigurationOrganismeQuery orderByPmiLienPortailDefenseAgent($order = Criteria::ASC) Order by the pmi_lien_portail_defense_agent column
 * @method CommonConfigurationOrganismeQuery orderByInterfaceArchiveArcadePmi($order = Criteria::ASC) Order by the interface_archive_arcade_pmi column
 * @method CommonConfigurationOrganismeQuery orderByDesarchivageConsultation($order = Criteria::ASC) Order by the desarchivage_consultation column
 * @method CommonConfigurationOrganismeQuery orderByAlimentationAutomatiqueListeInvites($order = Criteria::ASC) Order by the alimentation_automatique_liste_invites column
 * @method CommonConfigurationOrganismeQuery orderByInterfaceChorusPmi($order = Criteria::ASC) Order by the interface_chorus_pmi column
 * @method CommonConfigurationOrganismeQuery orderByArchivageConsultationSurPf($order = Criteria::ASC) Order by the archivage_consultation_sur_pf column
 * @method CommonConfigurationOrganismeQuery orderByAutoriserModificationApresPhaseConsultation($order = Criteria::ASC) Order by the autoriser_modification_apres_phase_consultation column
 * @method CommonConfigurationOrganismeQuery orderByImporterEnveloppe($order = Criteria::ASC) Order by the importer_enveloppe column
 * @method CommonConfigurationOrganismeQuery orderByExportMarchesNotifies($order = Criteria::ASC) Order by the export_marches_notifies column
 * @method CommonConfigurationOrganismeQuery orderByAccesAgentsCfeBdFournisseur($order = Criteria::ASC) Order by the acces_agents_cfe_bd_fournisseur column
 * @method CommonConfigurationOrganismeQuery orderByAccesAgentsCfeOuvertureAnalyse($order = Criteria::ASC) Order by the acces_agents_cfe_ouverture_analyse column
 * @method CommonConfigurationOrganismeQuery orderByUtiliserParametrageEncheres($order = Criteria::ASC) Order by the utiliser_parametrage_encheres column
 * @method CommonConfigurationOrganismeQuery orderByGestionMandataire($order = Criteria::ASC) Order by the gestion_mandataire column
 * @method CommonConfigurationOrganismeQuery orderByVerifierCompteBoamp($order = Criteria::ASC) Order by the verifier_compte_boamp column
 * @method CommonConfigurationOrganismeQuery orderByFourEyes($order = Criteria::ASC) Order by the four_eyes column
 * @method CommonConfigurationOrganismeQuery orderByInterfaceModuleRsem($order = Criteria::ASC) Order by the interface_module_rsem column
 * @method CommonConfigurationOrganismeQuery orderByArchivageConsultationSaeExterneEnvoiArchive($order = Criteria::ASC) Order by the archivage_consultation_sae_externe_envoi_archive column
 * @method CommonConfigurationOrganismeQuery orderByArchivageConsultationSaeExterneTelechargementArchive($order = Criteria::ASC) Order by the archivage_consultation_sae_externe_telechargement_archive column
 * @method CommonConfigurationOrganismeQuery orderByAgentVerificationCertificatPeppol($order = Criteria::ASC) Order by the agent_verification_certificat_peppol column
 * @method CommonConfigurationOrganismeQuery orderByFuseauHoraire($order = Criteria::ASC) Order by the fuseau_horaire column
 * @method CommonConfigurationOrganismeQuery orderByFicheWeka($order = Criteria::ASC) Order by the fiche_weka column
 * @method CommonConfigurationOrganismeQuery orderByMiseDispositionPiecesMarche($order = Criteria::ASC) Order by the mise_disposition_pieces_marche column
 * @method CommonConfigurationOrganismeQuery orderByBaseDce($order = Criteria::ASC) Order by the base_dce column
 * @method CommonConfigurationOrganismeQuery orderByAvisMembresCommision($order = Criteria::ASC) Order by the avis_membres_commision column
 * @method CommonConfigurationOrganismeQuery orderByDonneesRedac($order = Criteria::ASC) Order by the Donnees_Redac column
 * @method CommonConfigurationOrganismeQuery orderByPersonnaliserAffichageThemeEtIllustration($order = Criteria::ASC) Order by the Personnaliser_Affichage_Theme_Et_Illustration column
 * @method CommonConfigurationOrganismeQuery orderByTypeContrat($order = Criteria::ASC) Order by the type_contrat column
 * @method CommonConfigurationOrganismeQuery orderByEntiteAdjudicatrice($order = Criteria::ASC) Order by the entite_adjudicatrice column
 * @method CommonConfigurationOrganismeQuery orderByGestionOperations($order = Criteria::ASC) Order by the gestion_operations column
 * @method CommonConfigurationOrganismeQuery orderByCalendrierDeLaConsultation($order = Criteria::ASC) Order by the calendrier_de_la_consultation column
 * @method CommonConfigurationOrganismeQuery orderByDonneesComplementaires($order = Criteria::ASC) Order by the donnees_complementaires column
 * @method CommonConfigurationOrganismeQuery orderByEspaceCollaboratif($order = Criteria::ASC) Order by the espace_collaboratif column
 * @method CommonConfigurationOrganismeQuery orderByHistoriqueNavigationInscrits($order = Criteria::ASC) Order by the historique_navigation_inscrits column
 * @method CommonConfigurationOrganismeQuery orderByIdentificationContrat($order = Criteria::ASC) Order by the Identification_contrat column
 * @method CommonConfigurationOrganismeQuery orderByExtractionAccordsCadres($order = Criteria::ASC) Order by the extraction_accords_cadres column
 * @method CommonConfigurationOrganismeQuery orderByExtractionSiretAcheteur($order = Criteria::ASC) Order by the extraction_siret_acheteur column
 * @method CommonConfigurationOrganismeQuery orderByMarchePublicSimplifie($order = Criteria::ASC) Order by the marche_public_simplifie column
 * @method CommonConfigurationOrganismeQuery orderByConsultationDemandeAchat($order = Criteria::ASC) Order by the consultation_demande_achat column
 * @method CommonConfigurationOrganismeQuery orderByAuthenticateAgentByLdap($order = Criteria::ASC) Order by the authenticate_agent_by_ldap column
 * @method CommonConfigurationOrganismeQuery orderByConsultationViaImport($order = Criteria::ASC) Order by the consultation_via_import column
 * @method CommonConfigurationOrganismeQuery orderByExpressionRegReference($order = Criteria::ASC) Order by the EXPRESSION_REG_REFERENCE column
 * @method CommonConfigurationOrganismeQuery orderByVisioconferenceCao($order = Criteria::ASC) Order by the visioconference_cao column
 * @method CommonConfigurationOrganismeQuery orderByEstimationConfidentiel($order = Criteria::ASC) Order by the estimation_confidentiel column
 * @method CommonConfigurationOrganismeQuery orderByQualificationRegistreDepot($order = Criteria::ASC) Order by the qualification_registre_depot column
 * @method CommonConfigurationOrganismeQuery orderByGestionCao($order = Criteria::ASC) Order by the gestion_cao column
 * @method CommonConfigurationOrganismeQuery orderByReferentielContact($order = Criteria::ASC) Order by the referentiel_contact column
 * @method CommonConfigurationOrganismeQuery orderByGestionMontantDevise($order = Criteria::ASC) Order by the gestion_montant_devise column
 * @method CommonConfigurationOrganismeQuery orderByGestionRabais($order = Criteria::ASC) Order by the gestion_rabais column
 * @method CommonConfigurationOrganismeQuery orderByGestionCautionProvisoire($order = Criteria::ASC) Order by the gestion_caution_provisoire column
 * @method CommonConfigurationOrganismeQuery orderByGestionTravauxCao($order = Criteria::ASC) Order by the gestion_travaux_cao column
 * @method CommonConfigurationOrganismeQuery orderByFiltreBdfEntrepriseValide($order = Criteria::ASC) Order by the filtre_bdf_entreprise_valide column
 * @method CommonConfigurationOrganismeQuery orderByGestionStatistiquesPme($order = Criteria::ASC) Order by the gestion_statistiques_pme column
 * @method CommonConfigurationOrganismeQuery orderByGestionDemandesAchats($order = Criteria::ASC) Order by the gestion_demandes_achats column
 *
 * @method CommonConfigurationOrganismeQuery groupByOrganisme() Group by the organisme column
 * @method CommonConfigurationOrganismeQuery groupByEncheres() Group by the encheres column
 * @method CommonConfigurationOrganismeQuery groupByConsultationPjAutresPiecesTelechargeables() Group by the consultation_pj_autres_pieces_telechargeables column
 * @method CommonConfigurationOrganismeQuery groupByNoActivex() Group by the no_activex column
 * @method CommonConfigurationOrganismeQuery groupByGestionMapa() Group by the gestion_mapa column
 * @method CommonConfigurationOrganismeQuery groupByArticle133UploadFichier() Group by the article_133_upload_fichier column
 * @method CommonConfigurationOrganismeQuery groupByCentralePublication() Group by the centrale_publication column
 * @method CommonConfigurationOrganismeQuery groupByOrganisationCentralisee() Group by the organisation_centralisee column
 * @method CommonConfigurationOrganismeQuery groupByPresenceElu() Group by the presence_elu column
 * @method CommonConfigurationOrganismeQuery groupByTraduireConsultation() Group by the traduire_consultation column
 * @method CommonConfigurationOrganismeQuery groupBySuiviPassation() Group by the suivi_passation column
 * @method CommonConfigurationOrganismeQuery groupByNumerotationRefCons() Group by the numerotation_ref_cons column
 * @method CommonConfigurationOrganismeQuery groupByPmiLienPortailDefenseAgent() Group by the pmi_lien_portail_defense_agent column
 * @method CommonConfigurationOrganismeQuery groupByInterfaceArchiveArcadePmi() Group by the interface_archive_arcade_pmi column
 * @method CommonConfigurationOrganismeQuery groupByDesarchivageConsultation() Group by the desarchivage_consultation column
 * @method CommonConfigurationOrganismeQuery groupByAlimentationAutomatiqueListeInvites() Group by the alimentation_automatique_liste_invites column
 * @method CommonConfigurationOrganismeQuery groupByInterfaceChorusPmi() Group by the interface_chorus_pmi column
 * @method CommonConfigurationOrganismeQuery groupByArchivageConsultationSurPf() Group by the archivage_consultation_sur_pf column
 * @method CommonConfigurationOrganismeQuery groupByAutoriserModificationApresPhaseConsultation() Group by the autoriser_modification_apres_phase_consultation column
 * @method CommonConfigurationOrganismeQuery groupByImporterEnveloppe() Group by the importer_enveloppe column
 * @method CommonConfigurationOrganismeQuery groupByExportMarchesNotifies() Group by the export_marches_notifies column
 * @method CommonConfigurationOrganismeQuery groupByAccesAgentsCfeBdFournisseur() Group by the acces_agents_cfe_bd_fournisseur column
 * @method CommonConfigurationOrganismeQuery groupByAccesAgentsCfeOuvertureAnalyse() Group by the acces_agents_cfe_ouverture_analyse column
 * @method CommonConfigurationOrganismeQuery groupByUtiliserParametrageEncheres() Group by the utiliser_parametrage_encheres column
 * @method CommonConfigurationOrganismeQuery groupByGestionMandataire() Group by the gestion_mandataire column
 * @method CommonConfigurationOrganismeQuery groupByVerifierCompteBoamp() Group by the verifier_compte_boamp column
 * @method CommonConfigurationOrganismeQuery groupByFourEyes() Group by the four_eyes column
 * @method CommonConfigurationOrganismeQuery groupByInterfaceModuleRsem() Group by the interface_module_rsem column
 * @method CommonConfigurationOrganismeQuery groupByArchivageConsultationSaeExterneEnvoiArchive() Group by the archivage_consultation_sae_externe_envoi_archive column
 * @method CommonConfigurationOrganismeQuery groupByArchivageConsultationSaeExterneTelechargementArchive() Group by the archivage_consultation_sae_externe_telechargement_archive column
 * @method CommonConfigurationOrganismeQuery groupByAgentVerificationCertificatPeppol() Group by the agent_verification_certificat_peppol column
 * @method CommonConfigurationOrganismeQuery groupByFuseauHoraire() Group by the fuseau_horaire column
 * @method CommonConfigurationOrganismeQuery groupByFicheWeka() Group by the fiche_weka column
 * @method CommonConfigurationOrganismeQuery groupByMiseDispositionPiecesMarche() Group by the mise_disposition_pieces_marche column
 * @method CommonConfigurationOrganismeQuery groupByBaseDce() Group by the base_dce column
 * @method CommonConfigurationOrganismeQuery groupByAvisMembresCommision() Group by the avis_membres_commision column
 * @method CommonConfigurationOrganismeQuery groupByDonneesRedac() Group by the Donnees_Redac column
 * @method CommonConfigurationOrganismeQuery groupByPersonnaliserAffichageThemeEtIllustration() Group by the Personnaliser_Affichage_Theme_Et_Illustration column
 * @method CommonConfigurationOrganismeQuery groupByTypeContrat() Group by the type_contrat column
 * @method CommonConfigurationOrganismeQuery groupByEntiteAdjudicatrice() Group by the entite_adjudicatrice column
 * @method CommonConfigurationOrganismeQuery groupByGestionOperations() Group by the gestion_operations column
 * @method CommonConfigurationOrganismeQuery groupByCalendrierDeLaConsultation() Group by the calendrier_de_la_consultation column
 * @method CommonConfigurationOrganismeQuery groupByDonneesComplementaires() Group by the donnees_complementaires column
 * @method CommonConfigurationOrganismeQuery groupByEspaceCollaboratif() Group by the espace_collaboratif column
 * @method CommonConfigurationOrganismeQuery groupByHistoriqueNavigationInscrits() Group by the historique_navigation_inscrits column
 * @method CommonConfigurationOrganismeQuery groupByIdentificationContrat() Group by the Identification_contrat column
 * @method CommonConfigurationOrganismeQuery groupByExtractionAccordsCadres() Group by the extraction_accords_cadres column
 * @method CommonConfigurationOrganismeQuery groupByExtractionSiretAcheteur() Group by the extraction_siret_acheteur column
 * @method CommonConfigurationOrganismeQuery groupByMarchePublicSimplifie() Group by the marche_public_simplifie column
 * @method CommonConfigurationOrganismeQuery groupByConsultationDemandeAchat() Group by the consultation_demande_achat column
 * @method CommonConfigurationOrganismeQuery groupByAuthenticateAgentByLdap() Group by the authenticate_agent_by_ldap column
 * @method CommonConfigurationOrganismeQuery groupByConsultationViaImport() Group by the consultation_via_import column
 * @method CommonConfigurationOrganismeQuery groupByExpressionRegReference() Group by the EXPRESSION_REG_REFERENCE column
 * @method CommonConfigurationOrganismeQuery groupByVisioconferenceCao() Group by the visioconference_cao column
 * @method CommonConfigurationOrganismeQuery groupByEstimationConfidentiel() Group by the estimation_confidentiel column
 * @method CommonConfigurationOrganismeQuery groupByQualificationRegistreDepot() Group by the qualification_registre_depot column
 * @method CommonConfigurationOrganismeQuery groupByGestionCao() Group by the gestion_cao column
 * @method CommonConfigurationOrganismeQuery groupByReferentielContact() Group by the referentiel_contact column
 * @method CommonConfigurationOrganismeQuery groupByGestionMontantDevise() Group by the gestion_montant_devise column
 * @method CommonConfigurationOrganismeQuery groupByGestionRabais() Group by the gestion_rabais column
 * @method CommonConfigurationOrganismeQuery groupByGestionCautionProvisoire() Group by the gestion_caution_provisoire column
 * @method CommonConfigurationOrganismeQuery groupByGestionTravauxCao() Group by the gestion_travaux_cao column
 * @method CommonConfigurationOrganismeQuery groupByFiltreBdfEntrepriseValide() Group by the filtre_bdf_entreprise_valide column
 * @method CommonConfigurationOrganismeQuery groupByGestionStatistiquesPme() Group by the gestion_statistiques_pme column
 * @method CommonConfigurationOrganismeQuery groupByGestionDemandesAchats() Group by the gestion_demandes_achats column
 *
 * @method CommonConfigurationOrganismeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonConfigurationOrganismeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonConfigurationOrganismeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonConfigurationOrganisme findOne(PropelPDO $con = null) Return the first CommonConfigurationOrganisme matching the query
 * @method CommonConfigurationOrganisme findOneOrCreate(PropelPDO $con = null) Return the first CommonConfigurationOrganisme matching the query, or a new CommonConfigurationOrganisme object populated from the query conditions when no match is found
 *
 * @method CommonConfigurationOrganisme findOneByEncheres(string $encheres) Return the first CommonConfigurationOrganisme filtered by the encheres column
 * @method CommonConfigurationOrganisme findOneByConsultationPjAutresPiecesTelechargeables(string $consultation_pj_autres_pieces_telechargeables) Return the first CommonConfigurationOrganisme filtered by the consultation_pj_autres_pieces_telechargeables column
 * @method CommonConfigurationOrganisme findOneByNoActivex(string $no_activex) Return the first CommonConfigurationOrganisme filtered by the no_activex column
 * @method CommonConfigurationOrganisme findOneByGestionMapa(string $gestion_mapa) Return the first CommonConfigurationOrganisme filtered by the gestion_mapa column
 * @method CommonConfigurationOrganisme findOneByArticle133UploadFichier(string $article_133_upload_fichier) Return the first CommonConfigurationOrganisme filtered by the article_133_upload_fichier column
 * @method CommonConfigurationOrganisme findOneByCentralePublication(string $centrale_publication) Return the first CommonConfigurationOrganisme filtered by the centrale_publication column
 * @method CommonConfigurationOrganisme findOneByOrganisationCentralisee(string $organisation_centralisee) Return the first CommonConfigurationOrganisme filtered by the organisation_centralisee column
 * @method CommonConfigurationOrganisme findOneByPresenceElu(string $presence_elu) Return the first CommonConfigurationOrganisme filtered by the presence_elu column
 * @method CommonConfigurationOrganisme findOneByTraduireConsultation(string $traduire_consultation) Return the first CommonConfigurationOrganisme filtered by the traduire_consultation column
 * @method CommonConfigurationOrganisme findOneBySuiviPassation(string $suivi_passation) Return the first CommonConfigurationOrganisme filtered by the suivi_passation column
 * @method CommonConfigurationOrganisme findOneByNumerotationRefCons(string $numerotation_ref_cons) Return the first CommonConfigurationOrganisme filtered by the numerotation_ref_cons column
 * @method CommonConfigurationOrganisme findOneByPmiLienPortailDefenseAgent(string $pmi_lien_portail_defense_agent) Return the first CommonConfigurationOrganisme filtered by the pmi_lien_portail_defense_agent column
 * @method CommonConfigurationOrganisme findOneByInterfaceArchiveArcadePmi(string $interface_archive_arcade_pmi) Return the first CommonConfigurationOrganisme filtered by the interface_archive_arcade_pmi column
 * @method CommonConfigurationOrganisme findOneByDesarchivageConsultation(string $desarchivage_consultation) Return the first CommonConfigurationOrganisme filtered by the desarchivage_consultation column
 * @method CommonConfigurationOrganisme findOneByAlimentationAutomatiqueListeInvites(string $alimentation_automatique_liste_invites) Return the first CommonConfigurationOrganisme filtered by the alimentation_automatique_liste_invites column
 * @method CommonConfigurationOrganisme findOneByInterfaceChorusPmi(string $interface_chorus_pmi) Return the first CommonConfigurationOrganisme filtered by the interface_chorus_pmi column
 * @method CommonConfigurationOrganisme findOneByArchivageConsultationSurPf(string $archivage_consultation_sur_pf) Return the first CommonConfigurationOrganisme filtered by the archivage_consultation_sur_pf column
 * @method CommonConfigurationOrganisme findOneByAutoriserModificationApresPhaseConsultation(string $autoriser_modification_apres_phase_consultation) Return the first CommonConfigurationOrganisme filtered by the autoriser_modification_apres_phase_consultation column
 * @method CommonConfigurationOrganisme findOneByImporterEnveloppe(string $importer_enveloppe) Return the first CommonConfigurationOrganisme filtered by the importer_enveloppe column
 * @method CommonConfigurationOrganisme findOneByExportMarchesNotifies(string $export_marches_notifies) Return the first CommonConfigurationOrganisme filtered by the export_marches_notifies column
 * @method CommonConfigurationOrganisme findOneByAccesAgentsCfeBdFournisseur(string $acces_agents_cfe_bd_fournisseur) Return the first CommonConfigurationOrganisme filtered by the acces_agents_cfe_bd_fournisseur column
 * @method CommonConfigurationOrganisme findOneByAccesAgentsCfeOuvertureAnalyse(string $acces_agents_cfe_ouverture_analyse) Return the first CommonConfigurationOrganisme filtered by the acces_agents_cfe_ouverture_analyse column
 * @method CommonConfigurationOrganisme findOneByUtiliserParametrageEncheres(string $utiliser_parametrage_encheres) Return the first CommonConfigurationOrganisme filtered by the utiliser_parametrage_encheres column
 * @method CommonConfigurationOrganisme findOneByGestionMandataire(string $gestion_mandataire) Return the first CommonConfigurationOrganisme filtered by the gestion_mandataire column
 * @method CommonConfigurationOrganisme findOneByVerifierCompteBoamp(string $verifier_compte_boamp) Return the first CommonConfigurationOrganisme filtered by the verifier_compte_boamp column
 * @method CommonConfigurationOrganisme findOneByFourEyes(string $four_eyes) Return the first CommonConfigurationOrganisme filtered by the four_eyes column
 * @method CommonConfigurationOrganisme findOneByInterfaceModuleRsem(string $interface_module_rsem) Return the first CommonConfigurationOrganisme filtered by the interface_module_rsem column
 * @method CommonConfigurationOrganisme findOneByArchivageConsultationSaeExterneEnvoiArchive(string $archivage_consultation_sae_externe_envoi_archive) Return the first CommonConfigurationOrganisme filtered by the archivage_consultation_sae_externe_envoi_archive column
 * @method CommonConfigurationOrganisme findOneByArchivageConsultationSaeExterneTelechargementArchive(string $archivage_consultation_sae_externe_telechargement_archive) Return the first CommonConfigurationOrganisme filtered by the archivage_consultation_sae_externe_telechargement_archive column
 * @method CommonConfigurationOrganisme findOneByAgentVerificationCertificatPeppol(string $agent_verification_certificat_peppol) Return the first CommonConfigurationOrganisme filtered by the agent_verification_certificat_peppol column
 * @method CommonConfigurationOrganisme findOneByFuseauHoraire(string $fuseau_horaire) Return the first CommonConfigurationOrganisme filtered by the fuseau_horaire column
 * @method CommonConfigurationOrganisme findOneByFicheWeka(string $fiche_weka) Return the first CommonConfigurationOrganisme filtered by the fiche_weka column
 * @method CommonConfigurationOrganisme findOneByMiseDispositionPiecesMarche(string $mise_disposition_pieces_marche) Return the first CommonConfigurationOrganisme filtered by the mise_disposition_pieces_marche column
 * @method CommonConfigurationOrganisme findOneByBaseDce(string $base_dce) Return the first CommonConfigurationOrganisme filtered by the base_dce column
 * @method CommonConfigurationOrganisme findOneByAvisMembresCommision(string $avis_membres_commision) Return the first CommonConfigurationOrganisme filtered by the avis_membres_commision column
 * @method CommonConfigurationOrganisme findOneByDonneesRedac(string $Donnees_Redac) Return the first CommonConfigurationOrganisme filtered by the Donnees_Redac column
 * @method CommonConfigurationOrganisme findOneByPersonnaliserAffichageThemeEtIllustration(string $Personnaliser_Affichage_Theme_Et_Illustration) Return the first CommonConfigurationOrganisme filtered by the Personnaliser_Affichage_Theme_Et_Illustration column
 * @method CommonConfigurationOrganisme findOneByTypeContrat(string $type_contrat) Return the first CommonConfigurationOrganisme filtered by the type_contrat column
 * @method CommonConfigurationOrganisme findOneByEntiteAdjudicatrice(string $entite_adjudicatrice) Return the first CommonConfigurationOrganisme filtered by the entite_adjudicatrice column
 * @method CommonConfigurationOrganisme findOneByGestionOperations(string $gestion_operations) Return the first CommonConfigurationOrganisme filtered by the gestion_operations column
 * @method CommonConfigurationOrganisme findOneByCalendrierDeLaConsultation(string $calendrier_de_la_consultation) Return the first CommonConfigurationOrganisme filtered by the calendrier_de_la_consultation column
 * @method CommonConfigurationOrganisme findOneByDonneesComplementaires(string $donnees_complementaires) Return the first CommonConfigurationOrganisme filtered by the donnees_complementaires column
 * @method CommonConfigurationOrganisme findOneByEspaceCollaboratif(string $espace_collaboratif) Return the first CommonConfigurationOrganisme filtered by the espace_collaboratif column
 * @method CommonConfigurationOrganisme findOneByHistoriqueNavigationInscrits(string $historique_navigation_inscrits) Return the first CommonConfigurationOrganisme filtered by the historique_navigation_inscrits column
 * @method CommonConfigurationOrganisme findOneByIdentificationContrat(string $Identification_contrat) Return the first CommonConfigurationOrganisme filtered by the Identification_contrat column
 * @method CommonConfigurationOrganisme findOneByExtractionAccordsCadres(string $extraction_accords_cadres) Return the first CommonConfigurationOrganisme filtered by the extraction_accords_cadres column
 * @method CommonConfigurationOrganisme findOneByExtractionSiretAcheteur(string $extraction_siret_acheteur) Return the first CommonConfigurationOrganisme filtered by the extraction_siret_acheteur column
 * @method CommonConfigurationOrganisme findOneByMarchePublicSimplifie(string $marche_public_simplifie) Return the first CommonConfigurationOrganisme filtered by the marche_public_simplifie column
 * @method CommonConfigurationOrganisme findOneByConsultationDemandeAchat(string $consultation_demande_achat) Return the first CommonConfigurationOrganisme filtered by the consultation_demande_achat column
 * @method CommonConfigurationOrganisme findOneByAuthenticateAgentByLdap(string $authenticate_agent_by_ldap) Return the first CommonConfigurationOrganisme filtered by the authenticate_agent_by_ldap column
 * @method CommonConfigurationOrganisme findOneByConsultationViaImport(string $consultation_via_import) Return the first CommonConfigurationOrganisme filtered by the consultation_via_import column
 * @method CommonConfigurationOrganisme findOneByExpressionRegReference(string $EXPRESSION_REG_REFERENCE) Return the first CommonConfigurationOrganisme filtered by the EXPRESSION_REG_REFERENCE column
 * @method CommonConfigurationOrganisme findOneByVisioconferenceCao(string $visioconference_cao) Return the first CommonConfigurationOrganisme filtered by the visioconference_cao column
 * @method CommonConfigurationOrganisme findOneByEstimationConfidentiel(string $estimation_confidentiel) Return the first CommonConfigurationOrganisme filtered by the estimation_confidentiel column
 * @method CommonConfigurationOrganisme findOneByQualificationRegistreDepot(string $qualification_registre_depot) Return the first CommonConfigurationOrganisme filtered by the qualification_registre_depot column
 * @method CommonConfigurationOrganisme findOneByGestionCao(string $gestion_cao) Return the first CommonConfigurationOrganisme filtered by the gestion_cao column
 * @method CommonConfigurationOrganisme findOneByReferentielContact(string $referentiel_contact) Return the first CommonConfigurationOrganisme filtered by the referentiel_contact column
 * @method CommonConfigurationOrganisme findOneByGestionMontantDevise(string $gestion_montant_devise) Return the first CommonConfigurationOrganisme filtered by the gestion_montant_devise column
 * @method CommonConfigurationOrganisme findOneByGestionRabais(string $gestion_rabais) Return the first CommonConfigurationOrganisme filtered by the gestion_rabais column
 * @method CommonConfigurationOrganisme findOneByGestionCautionProvisoire(string $gestion_caution_provisoire) Return the first CommonConfigurationOrganisme filtered by the gestion_caution_provisoire column
 * @method CommonConfigurationOrganisme findOneByGestionTravauxCao(string $gestion_travaux_cao) Return the first CommonConfigurationOrganisme filtered by the gestion_travaux_cao column
 * @method CommonConfigurationOrganisme findOneByFiltreBdfEntrepriseValide(string $filtre_bdf_entreprise_valide) Return the first CommonConfigurationOrganisme filtered by the filtre_bdf_entreprise_valide column
 * @method CommonConfigurationOrganisme findOneByGestionStatistiquesPme(string $gestion_statistiques_pme) Return the first CommonConfigurationOrganisme filtered by the gestion_statistiques_pme column
 * @method CommonConfigurationOrganisme findOneByGestionDemandesAchats(string $gestion_demandes_achats) Return the first CommonConfigurationOrganisme filtered by the gestion_demandes_achats column
 *
 * @method array findByOrganisme(string $organisme) Return CommonConfigurationOrganisme objects filtered by the organisme column
 * @method array findByEncheres(string $encheres) Return CommonConfigurationOrganisme objects filtered by the encheres column
 * @method array findByConsultationPjAutresPiecesTelechargeables(string $consultation_pj_autres_pieces_telechargeables) Return CommonConfigurationOrganisme objects filtered by the consultation_pj_autres_pieces_telechargeables column
 * @method array findByNoActivex(string $no_activex) Return CommonConfigurationOrganisme objects filtered by the no_activex column
 * @method array findByGestionMapa(string $gestion_mapa) Return CommonConfigurationOrganisme objects filtered by the gestion_mapa column
 * @method array findByArticle133UploadFichier(string $article_133_upload_fichier) Return CommonConfigurationOrganisme objects filtered by the article_133_upload_fichier column
 * @method array findByCentralePublication(string $centrale_publication) Return CommonConfigurationOrganisme objects filtered by the centrale_publication column
 * @method array findByOrganisationCentralisee(string $organisation_centralisee) Return CommonConfigurationOrganisme objects filtered by the organisation_centralisee column
 * @method array findByPresenceElu(string $presence_elu) Return CommonConfigurationOrganisme objects filtered by the presence_elu column
 * @method array findByTraduireConsultation(string $traduire_consultation) Return CommonConfigurationOrganisme objects filtered by the traduire_consultation column
 * @method array findBySuiviPassation(string $suivi_passation) Return CommonConfigurationOrganisme objects filtered by the suivi_passation column
 * @method array findByNumerotationRefCons(string $numerotation_ref_cons) Return CommonConfigurationOrganisme objects filtered by the numerotation_ref_cons column
 * @method array findByPmiLienPortailDefenseAgent(string $pmi_lien_portail_defense_agent) Return CommonConfigurationOrganisme objects filtered by the pmi_lien_portail_defense_agent column
 * @method array findByInterfaceArchiveArcadePmi(string $interface_archive_arcade_pmi) Return CommonConfigurationOrganisme objects filtered by the interface_archive_arcade_pmi column
 * @method array findByDesarchivageConsultation(string $desarchivage_consultation) Return CommonConfigurationOrganisme objects filtered by the desarchivage_consultation column
 * @method array findByAlimentationAutomatiqueListeInvites(string $alimentation_automatique_liste_invites) Return CommonConfigurationOrganisme objects filtered by the alimentation_automatique_liste_invites column
 * @method array findByInterfaceChorusPmi(string $interface_chorus_pmi) Return CommonConfigurationOrganisme objects filtered by the interface_chorus_pmi column
 * @method array findByArchivageConsultationSurPf(string $archivage_consultation_sur_pf) Return CommonConfigurationOrganisme objects filtered by the archivage_consultation_sur_pf column
 * @method array findByAutoriserModificationApresPhaseConsultation(string $autoriser_modification_apres_phase_consultation) Return CommonConfigurationOrganisme objects filtered by the autoriser_modification_apres_phase_consultation column
 * @method array findByImporterEnveloppe(string $importer_enveloppe) Return CommonConfigurationOrganisme objects filtered by the importer_enveloppe column
 * @method array findByExportMarchesNotifies(string $export_marches_notifies) Return CommonConfigurationOrganisme objects filtered by the export_marches_notifies column
 * @method array findByAccesAgentsCfeBdFournisseur(string $acces_agents_cfe_bd_fournisseur) Return CommonConfigurationOrganisme objects filtered by the acces_agents_cfe_bd_fournisseur column
 * @method array findByAccesAgentsCfeOuvertureAnalyse(string $acces_agents_cfe_ouverture_analyse) Return CommonConfigurationOrganisme objects filtered by the acces_agents_cfe_ouverture_analyse column
 * @method array findByUtiliserParametrageEncheres(string $utiliser_parametrage_encheres) Return CommonConfigurationOrganisme objects filtered by the utiliser_parametrage_encheres column
 * @method array findByGestionMandataire(string $gestion_mandataire) Return CommonConfigurationOrganisme objects filtered by the gestion_mandataire column
 * @method array findByVerifierCompteBoamp(string $verifier_compte_boamp) Return CommonConfigurationOrganisme objects filtered by the verifier_compte_boamp column
 * @method array findByFourEyes(string $four_eyes) Return CommonConfigurationOrganisme objects filtered by the four_eyes column
 * @method array findByInterfaceModuleRsem(string $interface_module_rsem) Return CommonConfigurationOrganisme objects filtered by the interface_module_rsem column
 * @method array findByArchivageConsultationSaeExterneEnvoiArchive(string $archivage_consultation_sae_externe_envoi_archive) Return CommonConfigurationOrganisme objects filtered by the archivage_consultation_sae_externe_envoi_archive column
 * @method array findByArchivageConsultationSaeExterneTelechargementArchive(string $archivage_consultation_sae_externe_telechargement_archive) Return CommonConfigurationOrganisme objects filtered by the archivage_consultation_sae_externe_telechargement_archive column
 * @method array findByAgentVerificationCertificatPeppol(string $agent_verification_certificat_peppol) Return CommonConfigurationOrganisme objects filtered by the agent_verification_certificat_peppol column
 * @method array findByFuseauHoraire(string $fuseau_horaire) Return CommonConfigurationOrganisme objects filtered by the fuseau_horaire column
 * @method array findByFicheWeka(string $fiche_weka) Return CommonConfigurationOrganisme objects filtered by the fiche_weka column
 * @method array findByMiseDispositionPiecesMarche(string $mise_disposition_pieces_marche) Return CommonConfigurationOrganisme objects filtered by the mise_disposition_pieces_marche column
 * @method array findByBaseDce(string $base_dce) Return CommonConfigurationOrganisme objects filtered by the base_dce column
 * @method array findByAvisMembresCommision(string $avis_membres_commision) Return CommonConfigurationOrganisme objects filtered by the avis_membres_commision column
 * @method array findByDonneesRedac(string $Donnees_Redac) Return CommonConfigurationOrganisme objects filtered by the Donnees_Redac column
 * @method array findByPersonnaliserAffichageThemeEtIllustration(string $Personnaliser_Affichage_Theme_Et_Illustration) Return CommonConfigurationOrganisme objects filtered by the Personnaliser_Affichage_Theme_Et_Illustration column
 * @method array findByTypeContrat(string $type_contrat) Return CommonConfigurationOrganisme objects filtered by the type_contrat column
 * @method array findByEntiteAdjudicatrice(string $entite_adjudicatrice) Return CommonConfigurationOrganisme objects filtered by the entite_adjudicatrice column
 * @method array findByGestionOperations(string $gestion_operations) Return CommonConfigurationOrganisme objects filtered by the gestion_operations column
 * @method array findByCalendrierDeLaConsultation(string $calendrier_de_la_consultation) Return CommonConfigurationOrganisme objects filtered by the calendrier_de_la_consultation column
 * @method array findByDonneesComplementaires(string $donnees_complementaires) Return CommonConfigurationOrganisme objects filtered by the donnees_complementaires column
 * @method array findByEspaceCollaboratif(string $espace_collaboratif) Return CommonConfigurationOrganisme objects filtered by the espace_collaboratif column
 * @method array findByHistoriqueNavigationInscrits(string $historique_navigation_inscrits) Return CommonConfigurationOrganisme objects filtered by the historique_navigation_inscrits column
 * @method array findByIdentificationContrat(string $Identification_contrat) Return CommonConfigurationOrganisme objects filtered by the Identification_contrat column
 * @method array findByExtractionAccordsCadres(string $extraction_accords_cadres) Return CommonConfigurationOrganisme objects filtered by the extraction_accords_cadres column
 * @method array findByExtractionSiretAcheteur(string $extraction_siret_acheteur) Return CommonConfigurationOrganisme objects filtered by the extraction_siret_acheteur column
 * @method array findByMarchePublicSimplifie(string $marche_public_simplifie) Return CommonConfigurationOrganisme objects filtered by the marche_public_simplifie column
 * @method array findByConsultationDemandeAchat(string $consultation_demande_achat) Return CommonConfigurationOrganisme objects filtered by the consultation_demande_achat column
 * @method array findByAuthenticateAgentByLdap(string $authenticate_agent_by_ldap) Return CommonConfigurationOrganisme objects filtered by the authenticate_agent_by_ldap column
 * @method array findByConsultationViaImport(string $consultation_via_import) Return CommonConfigurationOrganisme objects filtered by the consultation_via_import column
 * @method array findByExpressionRegReference(string $EXPRESSION_REG_REFERENCE) Return CommonConfigurationOrganisme objects filtered by the EXPRESSION_REG_REFERENCE column
 * @method array findByVisioconferenceCao(string $visioconference_cao) Return CommonConfigurationOrganisme objects filtered by the visioconference_cao column
 * @method array findByEstimationConfidentiel(string $estimation_confidentiel) Return CommonConfigurationOrganisme objects filtered by the estimation_confidentiel column
 * @method array findByQualificationRegistreDepot(string $qualification_registre_depot) Return CommonConfigurationOrganisme objects filtered by the qualification_registre_depot column
 * @method array findByGestionCao(string $gestion_cao) Return CommonConfigurationOrganisme objects filtered by the gestion_cao column
 * @method array findByReferentielContact(string $referentiel_contact) Return CommonConfigurationOrganisme objects filtered by the referentiel_contact column
 * @method array findByGestionMontantDevise(string $gestion_montant_devise) Return CommonConfigurationOrganisme objects filtered by the gestion_montant_devise column
 * @method array findByGestionRabais(string $gestion_rabais) Return CommonConfigurationOrganisme objects filtered by the gestion_rabais column
 * @method array findByGestionCautionProvisoire(string $gestion_caution_provisoire) Return CommonConfigurationOrganisme objects filtered by the gestion_caution_provisoire column
 * @method array findByGestionTravauxCao(string $gestion_travaux_cao) Return CommonConfigurationOrganisme objects filtered by the gestion_travaux_cao column
 * @method array findByFiltreBdfEntrepriseValide(string $filtre_bdf_entreprise_valide) Return CommonConfigurationOrganisme objects filtered by the filtre_bdf_entreprise_valide column
 * @method array findByGestionStatistiquesPme(string $gestion_statistiques_pme) Return CommonConfigurationOrganisme objects filtered by the gestion_statistiques_pme column
 * @method array findByGestionDemandesAchats(string $gestion_demandes_achats) Return CommonConfigurationOrganisme objects filtered by the gestion_demandes_achats column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonConfigurationOrganismeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonConfigurationOrganismeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonConfigurationOrganisme', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonConfigurationOrganismeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonConfigurationOrganismeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonConfigurationOrganismeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonConfigurationOrganismeQuery) {
            return $criteria;
        }
        $query = new CommonConfigurationOrganismeQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query 
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonConfigurationOrganisme|CommonConfigurationOrganisme[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonConfigurationOrganismePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonConfigurationOrganismePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonConfigurationOrganisme A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByOrganisme($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonConfigurationOrganisme A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `organisme`, `encheres`, `consultation_pj_autres_pieces_telechargeables`, `no_activex`, `gestion_mapa`, `article_133_upload_fichier`, `centrale_publication`, `organisation_centralisee`, `presence_elu`, `traduire_consultation`, `suivi_passation`, `numerotation_ref_cons`, `pmi_lien_portail_defense_agent`, `interface_archive_arcade_pmi`, `desarchivage_consultation`, `alimentation_automatique_liste_invites`, `interface_chorus_pmi`, `archivage_consultation_sur_pf`, `autoriser_modification_apres_phase_consultation`, `importer_enveloppe`, `export_marches_notifies`, `acces_agents_cfe_bd_fournisseur`, `acces_agents_cfe_ouverture_analyse`, `utiliser_parametrage_encheres`, `gestion_mandataire`, `verifier_compte_boamp`, `four_eyes`, `interface_module_rsem`, `archivage_consultation_sae_externe_envoi_archive`, `archivage_consultation_sae_externe_telechargement_archive`, `agent_verification_certificat_peppol`, `fuseau_horaire`, `fiche_weka`, `mise_disposition_pieces_marche`, `base_dce`, `avis_membres_commision`, `Donnees_Redac`, `Personnaliser_Affichage_Theme_Et_Illustration`, `type_contrat`, `entite_adjudicatrice`, `gestion_operations`, `calendrier_de_la_consultation`, `donnees_complementaires`, `espace_collaboratif`, `historique_navigation_inscrits`, `Identification_contrat`, `extraction_accords_cadres`, `extraction_siret_acheteur`, `marche_public_simplifie`, `consultation_demande_achat`, `authenticate_agent_by_ldap`, `consultation_via_import`, `EXPRESSION_REG_REFERENCE`, `visioconference_cao`, `estimation_confidentiel`, `qualification_registre_depot`, `gestion_cao`, `referentiel_contact`, `gestion_montant_devise`, `gestion_rabais`, `gestion_caution_provisoire`, `gestion_travaux_cao`, `filtre_bdf_entreprise_valide`, `gestion_statistiques_pme`, `gestion_demandes_achats` FROM `configuration_organisme` WHERE `organisme` = :p0';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonConfigurationOrganisme();
            $obj->hydrate($row);
            CommonConfigurationOrganismePeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return CommonConfigurationOrganisme|CommonConfigurationOrganisme[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonConfigurationOrganisme[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::ORGANISME, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::ORGANISME, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the organisme column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganisme('fooValue');   // WHERE organisme = 'fooValue'
     * $query->filterByOrganisme('%fooValue%'); // WHERE organisme LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organisme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByOrganisme($organisme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($organisme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $organisme)) {
                $organisme = str_replace('*', '%', $organisme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the encheres column
     *
     * Example usage:
     * <code>
     * $query->filterByEncheres('fooValue');   // WHERE encheres = 'fooValue'
     * $query->filterByEncheres('%fooValue%'); // WHERE encheres LIKE '%fooValue%'
     * </code>
     *
     * @param     string $encheres The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByEncheres($encheres = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($encheres)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $encheres)) {
                $encheres = str_replace('*', '%', $encheres);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::ENCHERES, $encheres, $comparison);
    }

    /**
     * Filter the query on the consultation_pj_autres_pieces_telechargeables column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultationPjAutresPiecesTelechargeables('fooValue');   // WHERE consultation_pj_autres_pieces_telechargeables = 'fooValue'
     * $query->filterByConsultationPjAutresPiecesTelechargeables('%fooValue%'); // WHERE consultation_pj_autres_pieces_telechargeables LIKE '%fooValue%'
     * </code>
     *
     * @param     string $consultationPjAutresPiecesTelechargeables The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByConsultationPjAutresPiecesTelechargeables($consultationPjAutresPiecesTelechargeables = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($consultationPjAutresPiecesTelechargeables)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $consultationPjAutresPiecesTelechargeables)) {
                $consultationPjAutresPiecesTelechargeables = str_replace('*', '%', $consultationPjAutresPiecesTelechargeables);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::CONSULTATION_PJ_AUTRES_PIECES_TELECHARGEABLES, $consultationPjAutresPiecesTelechargeables, $comparison);
    }

    /**
     * Filter the query on the no_activex column
     *
     * Example usage:
     * <code>
     * $query->filterByNoActivex('fooValue');   // WHERE no_activex = 'fooValue'
     * $query->filterByNoActivex('%fooValue%'); // WHERE no_activex LIKE '%fooValue%'
     * </code>
     *
     * @param     string $noActivex The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByNoActivex($noActivex = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($noActivex)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $noActivex)) {
                $noActivex = str_replace('*', '%', $noActivex);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::NO_ACTIVEX, $noActivex, $comparison);
    }

    /**
     * Filter the query on the gestion_mapa column
     *
     * Example usage:
     * <code>
     * $query->filterByGestionMapa('fooValue');   // WHERE gestion_mapa = 'fooValue'
     * $query->filterByGestionMapa('%fooValue%'); // WHERE gestion_mapa LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gestionMapa The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByGestionMapa($gestionMapa = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gestionMapa)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gestionMapa)) {
                $gestionMapa = str_replace('*', '%', $gestionMapa);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::GESTION_MAPA, $gestionMapa, $comparison);
    }

    /**
     * Filter the query on the article_133_upload_fichier column
     *
     * Example usage:
     * <code>
     * $query->filterByArticle133UploadFichier('fooValue');   // WHERE article_133_upload_fichier = 'fooValue'
     * $query->filterByArticle133UploadFichier('%fooValue%'); // WHERE article_133_upload_fichier LIKE '%fooValue%'
     * </code>
     *
     * @param     string $article133UploadFichier The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByArticle133UploadFichier($article133UploadFichier = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($article133UploadFichier)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $article133UploadFichier)) {
                $article133UploadFichier = str_replace('*', '%', $article133UploadFichier);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::ARTICLE_133_UPLOAD_FICHIER, $article133UploadFichier, $comparison);
    }

    /**
     * Filter the query on the centrale_publication column
     *
     * Example usage:
     * <code>
     * $query->filterByCentralePublication('fooValue');   // WHERE centrale_publication = 'fooValue'
     * $query->filterByCentralePublication('%fooValue%'); // WHERE centrale_publication LIKE '%fooValue%'
     * </code>
     *
     * @param     string $centralePublication The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByCentralePublication($centralePublication = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($centralePublication)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $centralePublication)) {
                $centralePublication = str_replace('*', '%', $centralePublication);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::CENTRALE_PUBLICATION, $centralePublication, $comparison);
    }

    /**
     * Filter the query on the organisation_centralisee column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganisationCentralisee('fooValue');   // WHERE organisation_centralisee = 'fooValue'
     * $query->filterByOrganisationCentralisee('%fooValue%'); // WHERE organisation_centralisee LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organisationCentralisee The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByOrganisationCentralisee($organisationCentralisee = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($organisationCentralisee)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $organisationCentralisee)) {
                $organisationCentralisee = str_replace('*', '%', $organisationCentralisee);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::ORGANISATION_CENTRALISEE, $organisationCentralisee, $comparison);
    }

    /**
     * Filter the query on the presence_elu column
     *
     * Example usage:
     * <code>
     * $query->filterByPresenceElu('fooValue');   // WHERE presence_elu = 'fooValue'
     * $query->filterByPresenceElu('%fooValue%'); // WHERE presence_elu LIKE '%fooValue%'
     * </code>
     *
     * @param     string $presenceElu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByPresenceElu($presenceElu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($presenceElu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $presenceElu)) {
                $presenceElu = str_replace('*', '%', $presenceElu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::PRESENCE_ELU, $presenceElu, $comparison);
    }

    /**
     * Filter the query on the traduire_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByTraduireConsultation('fooValue');   // WHERE traduire_consultation = 'fooValue'
     * $query->filterByTraduireConsultation('%fooValue%'); // WHERE traduire_consultation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $traduireConsultation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByTraduireConsultation($traduireConsultation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($traduireConsultation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $traduireConsultation)) {
                $traduireConsultation = str_replace('*', '%', $traduireConsultation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::TRADUIRE_CONSULTATION, $traduireConsultation, $comparison);
    }

    /**
     * Filter the query on the suivi_passation column
     *
     * Example usage:
     * <code>
     * $query->filterBySuiviPassation('fooValue');   // WHERE suivi_passation = 'fooValue'
     * $query->filterBySuiviPassation('%fooValue%'); // WHERE suivi_passation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $suiviPassation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterBySuiviPassation($suiviPassation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($suiviPassation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $suiviPassation)) {
                $suiviPassation = str_replace('*', '%', $suiviPassation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::SUIVI_PASSATION, $suiviPassation, $comparison);
    }

    /**
     * Filter the query on the numerotation_ref_cons column
     *
     * Example usage:
     * <code>
     * $query->filterByNumerotationRefCons('fooValue');   // WHERE numerotation_ref_cons = 'fooValue'
     * $query->filterByNumerotationRefCons('%fooValue%'); // WHERE numerotation_ref_cons LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numerotationRefCons The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByNumerotationRefCons($numerotationRefCons = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numerotationRefCons)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numerotationRefCons)) {
                $numerotationRefCons = str_replace('*', '%', $numerotationRefCons);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::NUMEROTATION_REF_CONS, $numerotationRefCons, $comparison);
    }

    /**
     * Filter the query on the pmi_lien_portail_defense_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByPmiLienPortailDefenseAgent('fooValue');   // WHERE pmi_lien_portail_defense_agent = 'fooValue'
     * $query->filterByPmiLienPortailDefenseAgent('%fooValue%'); // WHERE pmi_lien_portail_defense_agent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pmiLienPortailDefenseAgent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByPmiLienPortailDefenseAgent($pmiLienPortailDefenseAgent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmiLienPortailDefenseAgent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pmiLienPortailDefenseAgent)) {
                $pmiLienPortailDefenseAgent = str_replace('*', '%', $pmiLienPortailDefenseAgent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::PMI_LIEN_PORTAIL_DEFENSE_AGENT, $pmiLienPortailDefenseAgent, $comparison);
    }

    /**
     * Filter the query on the interface_archive_arcade_pmi column
     *
     * Example usage:
     * <code>
     * $query->filterByInterfaceArchiveArcadePmi('fooValue');   // WHERE interface_archive_arcade_pmi = 'fooValue'
     * $query->filterByInterfaceArchiveArcadePmi('%fooValue%'); // WHERE interface_archive_arcade_pmi LIKE '%fooValue%'
     * </code>
     *
     * @param     string $interfaceArchiveArcadePmi The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByInterfaceArchiveArcadePmi($interfaceArchiveArcadePmi = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($interfaceArchiveArcadePmi)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $interfaceArchiveArcadePmi)) {
                $interfaceArchiveArcadePmi = str_replace('*', '%', $interfaceArchiveArcadePmi);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::INTERFACE_ARCHIVE_ARCADE_PMI, $interfaceArchiveArcadePmi, $comparison);
    }

    /**
     * Filter the query on the desarchivage_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByDesarchivageConsultation('fooValue');   // WHERE desarchivage_consultation = 'fooValue'
     * $query->filterByDesarchivageConsultation('%fooValue%'); // WHERE desarchivage_consultation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $desarchivageConsultation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByDesarchivageConsultation($desarchivageConsultation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($desarchivageConsultation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $desarchivageConsultation)) {
                $desarchivageConsultation = str_replace('*', '%', $desarchivageConsultation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::DESARCHIVAGE_CONSULTATION, $desarchivageConsultation, $comparison);
    }

    /**
     * Filter the query on the alimentation_automatique_liste_invites column
     *
     * Example usage:
     * <code>
     * $query->filterByAlimentationAutomatiqueListeInvites('fooValue');   // WHERE alimentation_automatique_liste_invites = 'fooValue'
     * $query->filterByAlimentationAutomatiqueListeInvites('%fooValue%'); // WHERE alimentation_automatique_liste_invites LIKE '%fooValue%'
     * </code>
     *
     * @param     string $alimentationAutomatiqueListeInvites The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByAlimentationAutomatiqueListeInvites($alimentationAutomatiqueListeInvites = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($alimentationAutomatiqueListeInvites)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $alimentationAutomatiqueListeInvites)) {
                $alimentationAutomatiqueListeInvites = str_replace('*', '%', $alimentationAutomatiqueListeInvites);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::ALIMENTATION_AUTOMATIQUE_LISTE_INVITES, $alimentationAutomatiqueListeInvites, $comparison);
    }

    /**
     * Filter the query on the interface_chorus_pmi column
     *
     * Example usage:
     * <code>
     * $query->filterByInterfaceChorusPmi('fooValue');   // WHERE interface_chorus_pmi = 'fooValue'
     * $query->filterByInterfaceChorusPmi('%fooValue%'); // WHERE interface_chorus_pmi LIKE '%fooValue%'
     * </code>
     *
     * @param     string $interfaceChorusPmi The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByInterfaceChorusPmi($interfaceChorusPmi = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($interfaceChorusPmi)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $interfaceChorusPmi)) {
                $interfaceChorusPmi = str_replace('*', '%', $interfaceChorusPmi);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::INTERFACE_CHORUS_PMI, $interfaceChorusPmi, $comparison);
    }

    /**
     * Filter the query on the archivage_consultation_sur_pf column
     *
     * Example usage:
     * <code>
     * $query->filterByArchivageConsultationSurPf('fooValue');   // WHERE archivage_consultation_sur_pf = 'fooValue'
     * $query->filterByArchivageConsultationSurPf('%fooValue%'); // WHERE archivage_consultation_sur_pf LIKE '%fooValue%'
     * </code>
     *
     * @param     string $archivageConsultationSurPf The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByArchivageConsultationSurPf($archivageConsultationSurPf = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($archivageConsultationSurPf)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $archivageConsultationSurPf)) {
                $archivageConsultationSurPf = str_replace('*', '%', $archivageConsultationSurPf);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::ARCHIVAGE_CONSULTATION_SUR_PF, $archivageConsultationSurPf, $comparison);
    }

    /**
     * Filter the query on the autoriser_modification_apres_phase_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByAutoriserModificationApresPhaseConsultation('fooValue');   // WHERE autoriser_modification_apres_phase_consultation = 'fooValue'
     * $query->filterByAutoriserModificationApresPhaseConsultation('%fooValue%'); // WHERE autoriser_modification_apres_phase_consultation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $autoriserModificationApresPhaseConsultation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByAutoriserModificationApresPhaseConsultation($autoriserModificationApresPhaseConsultation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($autoriserModificationApresPhaseConsultation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $autoriserModificationApresPhaseConsultation)) {
                $autoriserModificationApresPhaseConsultation = str_replace('*', '%', $autoriserModificationApresPhaseConsultation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::AUTORISER_MODIFICATION_APRES_PHASE_CONSULTATION, $autoriserModificationApresPhaseConsultation, $comparison);
    }

    /**
     * Filter the query on the importer_enveloppe column
     *
     * Example usage:
     * <code>
     * $query->filterByImporterEnveloppe('fooValue');   // WHERE importer_enveloppe = 'fooValue'
     * $query->filterByImporterEnveloppe('%fooValue%'); // WHERE importer_enveloppe LIKE '%fooValue%'
     * </code>
     *
     * @param     string $importerEnveloppe The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByImporterEnveloppe($importerEnveloppe = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($importerEnveloppe)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $importerEnveloppe)) {
                $importerEnveloppe = str_replace('*', '%', $importerEnveloppe);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::IMPORTER_ENVELOPPE, $importerEnveloppe, $comparison);
    }

    /**
     * Filter the query on the export_marches_notifies column
     *
     * Example usage:
     * <code>
     * $query->filterByExportMarchesNotifies('fooValue');   // WHERE export_marches_notifies = 'fooValue'
     * $query->filterByExportMarchesNotifies('%fooValue%'); // WHERE export_marches_notifies LIKE '%fooValue%'
     * </code>
     *
     * @param     string $exportMarchesNotifies The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByExportMarchesNotifies($exportMarchesNotifies = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($exportMarchesNotifies)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $exportMarchesNotifies)) {
                $exportMarchesNotifies = str_replace('*', '%', $exportMarchesNotifies);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::EXPORT_MARCHES_NOTIFIES, $exportMarchesNotifies, $comparison);
    }

    /**
     * Filter the query on the acces_agents_cfe_bd_fournisseur column
     *
     * Example usage:
     * <code>
     * $query->filterByAccesAgentsCfeBdFournisseur('fooValue');   // WHERE acces_agents_cfe_bd_fournisseur = 'fooValue'
     * $query->filterByAccesAgentsCfeBdFournisseur('%fooValue%'); // WHERE acces_agents_cfe_bd_fournisseur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $accesAgentsCfeBdFournisseur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByAccesAgentsCfeBdFournisseur($accesAgentsCfeBdFournisseur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($accesAgentsCfeBdFournisseur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $accesAgentsCfeBdFournisseur)) {
                $accesAgentsCfeBdFournisseur = str_replace('*', '%', $accesAgentsCfeBdFournisseur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::ACCES_AGENTS_CFE_BD_FOURNISSEUR, $accesAgentsCfeBdFournisseur, $comparison);
    }

    /**
     * Filter the query on the acces_agents_cfe_ouverture_analyse column
     *
     * Example usage:
     * <code>
     * $query->filterByAccesAgentsCfeOuvertureAnalyse('fooValue');   // WHERE acces_agents_cfe_ouverture_analyse = 'fooValue'
     * $query->filterByAccesAgentsCfeOuvertureAnalyse('%fooValue%'); // WHERE acces_agents_cfe_ouverture_analyse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $accesAgentsCfeOuvertureAnalyse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByAccesAgentsCfeOuvertureAnalyse($accesAgentsCfeOuvertureAnalyse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($accesAgentsCfeOuvertureAnalyse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $accesAgentsCfeOuvertureAnalyse)) {
                $accesAgentsCfeOuvertureAnalyse = str_replace('*', '%', $accesAgentsCfeOuvertureAnalyse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::ACCES_AGENTS_CFE_OUVERTURE_ANALYSE, $accesAgentsCfeOuvertureAnalyse, $comparison);
    }

    /**
     * Filter the query on the utiliser_parametrage_encheres column
     *
     * Example usage:
     * <code>
     * $query->filterByUtiliserParametrageEncheres('fooValue');   // WHERE utiliser_parametrage_encheres = 'fooValue'
     * $query->filterByUtiliserParametrageEncheres('%fooValue%'); // WHERE utiliser_parametrage_encheres LIKE '%fooValue%'
     * </code>
     *
     * @param     string $utiliserParametrageEncheres The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByUtiliserParametrageEncheres($utiliserParametrageEncheres = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($utiliserParametrageEncheres)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $utiliserParametrageEncheres)) {
                $utiliserParametrageEncheres = str_replace('*', '%', $utiliserParametrageEncheres);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::UTILISER_PARAMETRAGE_ENCHERES, $utiliserParametrageEncheres, $comparison);
    }

    /**
     * Filter the query on the gestion_mandataire column
     *
     * Example usage:
     * <code>
     * $query->filterByGestionMandataire('fooValue');   // WHERE gestion_mandataire = 'fooValue'
     * $query->filterByGestionMandataire('%fooValue%'); // WHERE gestion_mandataire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gestionMandataire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByGestionMandataire($gestionMandataire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gestionMandataire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gestionMandataire)) {
                $gestionMandataire = str_replace('*', '%', $gestionMandataire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::GESTION_MANDATAIRE, $gestionMandataire, $comparison);
    }

    /**
     * Filter the query on the verifier_compte_boamp column
     *
     * Example usage:
     * <code>
     * $query->filterByVerifierCompteBoamp('fooValue');   // WHERE verifier_compte_boamp = 'fooValue'
     * $query->filterByVerifierCompteBoamp('%fooValue%'); // WHERE verifier_compte_boamp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $verifierCompteBoamp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByVerifierCompteBoamp($verifierCompteBoamp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($verifierCompteBoamp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $verifierCompteBoamp)) {
                $verifierCompteBoamp = str_replace('*', '%', $verifierCompteBoamp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::VERIFIER_COMPTE_BOAMP, $verifierCompteBoamp, $comparison);
    }

    /**
     * Filter the query on the four_eyes column
     *
     * Example usage:
     * <code>
     * $query->filterByFourEyes('fooValue');   // WHERE four_eyes = 'fooValue'
     * $query->filterByFourEyes('%fooValue%'); // WHERE four_eyes LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fourEyes The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByFourEyes($fourEyes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fourEyes)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fourEyes)) {
                $fourEyes = str_replace('*', '%', $fourEyes);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::FOUR_EYES, $fourEyes, $comparison);
    }

    /**
     * Filter the query on the interface_module_rsem column
     *
     * Example usage:
     * <code>
     * $query->filterByInterfaceModuleRsem('fooValue');   // WHERE interface_module_rsem = 'fooValue'
     * $query->filterByInterfaceModuleRsem('%fooValue%'); // WHERE interface_module_rsem LIKE '%fooValue%'
     * </code>
     *
     * @param     string $interfaceModuleRsem The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByInterfaceModuleRsem($interfaceModuleRsem = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($interfaceModuleRsem)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $interfaceModuleRsem)) {
                $interfaceModuleRsem = str_replace('*', '%', $interfaceModuleRsem);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::INTERFACE_MODULE_RSEM, $interfaceModuleRsem, $comparison);
    }

    /**
     * Filter the query on the archivage_consultation_sae_externe_envoi_archive column
     *
     * Example usage:
     * <code>
     * $query->filterByArchivageConsultationSaeExterneEnvoiArchive('fooValue');   // WHERE archivage_consultation_sae_externe_envoi_archive = 'fooValue'
     * $query->filterByArchivageConsultationSaeExterneEnvoiArchive('%fooValue%'); // WHERE archivage_consultation_sae_externe_envoi_archive LIKE '%fooValue%'
     * </code>
     *
     * @param     string $archivageConsultationSaeExterneEnvoiArchive The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByArchivageConsultationSaeExterneEnvoiArchive($archivageConsultationSaeExterneEnvoiArchive = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($archivageConsultationSaeExterneEnvoiArchive)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $archivageConsultationSaeExterneEnvoiArchive)) {
                $archivageConsultationSaeExterneEnvoiArchive = str_replace('*', '%', $archivageConsultationSaeExterneEnvoiArchive);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::ARCHIVAGE_CONSULTATION_SAE_EXTERNE_ENVOI_ARCHIVE, $archivageConsultationSaeExterneEnvoiArchive, $comparison);
    }

    /**
     * Filter the query on the archivage_consultation_sae_externe_telechargement_archive column
     *
     * Example usage:
     * <code>
     * $query->filterByArchivageConsultationSaeExterneTelechargementArchive('fooValue');   // WHERE archivage_consultation_sae_externe_telechargement_archive = 'fooValue'
     * $query->filterByArchivageConsultationSaeExterneTelechargementArchive('%fooValue%'); // WHERE archivage_consultation_sae_externe_telechargement_archive LIKE '%fooValue%'
     * </code>
     *
     * @param     string $archivageConsultationSaeExterneTelechargementArchive The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByArchivageConsultationSaeExterneTelechargementArchive($archivageConsultationSaeExterneTelechargementArchive = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($archivageConsultationSaeExterneTelechargementArchive)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $archivageConsultationSaeExterneTelechargementArchive)) {
                $archivageConsultationSaeExterneTelechargementArchive = str_replace('*', '%', $archivageConsultationSaeExterneTelechargementArchive);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::ARCHIVAGE_CONSULTATION_SAE_EXTERNE_TELECHARGEMENT_ARCHIVE, $archivageConsultationSaeExterneTelechargementArchive, $comparison);
    }

    /**
     * Filter the query on the agent_verification_certificat_peppol column
     *
     * Example usage:
     * <code>
     * $query->filterByAgentVerificationCertificatPeppol('fooValue');   // WHERE agent_verification_certificat_peppol = 'fooValue'
     * $query->filterByAgentVerificationCertificatPeppol('%fooValue%'); // WHERE agent_verification_certificat_peppol LIKE '%fooValue%'
     * </code>
     *
     * @param     string $agentVerificationCertificatPeppol The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByAgentVerificationCertificatPeppol($agentVerificationCertificatPeppol = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($agentVerificationCertificatPeppol)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $agentVerificationCertificatPeppol)) {
                $agentVerificationCertificatPeppol = str_replace('*', '%', $agentVerificationCertificatPeppol);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::AGENT_VERIFICATION_CERTIFICAT_PEPPOL, $agentVerificationCertificatPeppol, $comparison);
    }

    /**
     * Filter the query on the fuseau_horaire column
     *
     * Example usage:
     * <code>
     * $query->filterByFuseauHoraire('fooValue');   // WHERE fuseau_horaire = 'fooValue'
     * $query->filterByFuseauHoraire('%fooValue%'); // WHERE fuseau_horaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fuseauHoraire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByFuseauHoraire($fuseauHoraire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fuseauHoraire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fuseauHoraire)) {
                $fuseauHoraire = str_replace('*', '%', $fuseauHoraire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::FUSEAU_HORAIRE, $fuseauHoraire, $comparison);
    }

    /**
     * Filter the query on the fiche_weka column
     *
     * Example usage:
     * <code>
     * $query->filterByFicheWeka('fooValue');   // WHERE fiche_weka = 'fooValue'
     * $query->filterByFicheWeka('%fooValue%'); // WHERE fiche_weka LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ficheWeka The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByFicheWeka($ficheWeka = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ficheWeka)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ficheWeka)) {
                $ficheWeka = str_replace('*', '%', $ficheWeka);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::FICHE_WEKA, $ficheWeka, $comparison);
    }

    /**
     * Filter the query on the mise_disposition_pieces_marche column
     *
     * Example usage:
     * <code>
     * $query->filterByMiseDispositionPiecesMarche('fooValue');   // WHERE mise_disposition_pieces_marche = 'fooValue'
     * $query->filterByMiseDispositionPiecesMarche('%fooValue%'); // WHERE mise_disposition_pieces_marche LIKE '%fooValue%'
     * </code>
     *
     * @param     string $miseDispositionPiecesMarche The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByMiseDispositionPiecesMarche($miseDispositionPiecesMarche = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($miseDispositionPiecesMarche)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $miseDispositionPiecesMarche)) {
                $miseDispositionPiecesMarche = str_replace('*', '%', $miseDispositionPiecesMarche);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::MISE_DISPOSITION_PIECES_MARCHE, $miseDispositionPiecesMarche, $comparison);
    }

    /**
     * Filter the query on the base_dce column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseDce('fooValue');   // WHERE base_dce = 'fooValue'
     * $query->filterByBaseDce('%fooValue%'); // WHERE base_dce LIKE '%fooValue%'
     * </code>
     *
     * @param     string $baseDce The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByBaseDce($baseDce = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($baseDce)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $baseDce)) {
                $baseDce = str_replace('*', '%', $baseDce);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::BASE_DCE, $baseDce, $comparison);
    }

    /**
     * Filter the query on the avis_membres_commision column
     *
     * Example usage:
     * <code>
     * $query->filterByAvisMembresCommision('fooValue');   // WHERE avis_membres_commision = 'fooValue'
     * $query->filterByAvisMembresCommision('%fooValue%'); // WHERE avis_membres_commision LIKE '%fooValue%'
     * </code>
     *
     * @param     string $avisMembresCommision The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByAvisMembresCommision($avisMembresCommision = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($avisMembresCommision)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $avisMembresCommision)) {
                $avisMembresCommision = str_replace('*', '%', $avisMembresCommision);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::AVIS_MEMBRES_COMMISION, $avisMembresCommision, $comparison);
    }

    /**
     * Filter the query on the Donnees_Redac column
     *
     * Example usage:
     * <code>
     * $query->filterByDonneesRedac('fooValue');   // WHERE Donnees_Redac = 'fooValue'
     * $query->filterByDonneesRedac('%fooValue%'); // WHERE Donnees_Redac LIKE '%fooValue%'
     * </code>
     *
     * @param     string $donneesRedac The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByDonneesRedac($donneesRedac = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($donneesRedac)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $donneesRedac)) {
                $donneesRedac = str_replace('*', '%', $donneesRedac);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::DONNEES_REDAC, $donneesRedac, $comparison);
    }

    /**
     * Filter the query on the Personnaliser_Affichage_Theme_Et_Illustration column
     *
     * Example usage:
     * <code>
     * $query->filterByPersonnaliserAffichageThemeEtIllustration('fooValue');   // WHERE Personnaliser_Affichage_Theme_Et_Illustration = 'fooValue'
     * $query->filterByPersonnaliserAffichageThemeEtIllustration('%fooValue%'); // WHERE Personnaliser_Affichage_Theme_Et_Illustration LIKE '%fooValue%'
     * </code>
     *
     * @param     string $personnaliserAffichageThemeEtIllustration The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByPersonnaliserAffichageThemeEtIllustration($personnaliserAffichageThemeEtIllustration = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($personnaliserAffichageThemeEtIllustration)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $personnaliserAffichageThemeEtIllustration)) {
                $personnaliserAffichageThemeEtIllustration = str_replace('*', '%', $personnaliserAffichageThemeEtIllustration);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::PERSONNALISER_AFFICHAGE_THEME_ET_ILLUSTRATION, $personnaliserAffichageThemeEtIllustration, $comparison);
    }

    /**
     * Filter the query on the type_contrat column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeContrat('fooValue');   // WHERE type_contrat = 'fooValue'
     * $query->filterByTypeContrat('%fooValue%'); // WHERE type_contrat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeContrat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByTypeContrat($typeContrat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeContrat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeContrat)) {
                $typeContrat = str_replace('*', '%', $typeContrat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::TYPE_CONTRAT, $typeContrat, $comparison);
    }

    /**
     * Filter the query on the entite_adjudicatrice column
     *
     * Example usage:
     * <code>
     * $query->filterByEntiteAdjudicatrice('fooValue');   // WHERE entite_adjudicatrice = 'fooValue'
     * $query->filterByEntiteAdjudicatrice('%fooValue%'); // WHERE entite_adjudicatrice LIKE '%fooValue%'
     * </code>
     *
     * @param     string $entiteAdjudicatrice The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByEntiteAdjudicatrice($entiteAdjudicatrice = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($entiteAdjudicatrice)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $entiteAdjudicatrice)) {
                $entiteAdjudicatrice = str_replace('*', '%', $entiteAdjudicatrice);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::ENTITE_ADJUDICATRICE, $entiteAdjudicatrice, $comparison);
    }

    /**
     * Filter the query on the gestion_operations column
     *
     * Example usage:
     * <code>
     * $query->filterByGestionOperations('fooValue');   // WHERE gestion_operations = 'fooValue'
     * $query->filterByGestionOperations('%fooValue%'); // WHERE gestion_operations LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gestionOperations The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByGestionOperations($gestionOperations = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gestionOperations)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gestionOperations)) {
                $gestionOperations = str_replace('*', '%', $gestionOperations);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::GESTION_OPERATIONS, $gestionOperations, $comparison);
    }

    /**
     * Filter the query on the calendrier_de_la_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByCalendrierDeLaConsultation('fooValue');   // WHERE calendrier_de_la_consultation = 'fooValue'
     * $query->filterByCalendrierDeLaConsultation('%fooValue%'); // WHERE calendrier_de_la_consultation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $calendrierDeLaConsultation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByCalendrierDeLaConsultation($calendrierDeLaConsultation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($calendrierDeLaConsultation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $calendrierDeLaConsultation)) {
                $calendrierDeLaConsultation = str_replace('*', '%', $calendrierDeLaConsultation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::CALENDRIER_DE_LA_CONSULTATION, $calendrierDeLaConsultation, $comparison);
    }

    /**
     * Filter the query on the donnees_complementaires column
     *
     * Example usage:
     * <code>
     * $query->filterByDonneesComplementaires('fooValue');   // WHERE donnees_complementaires = 'fooValue'
     * $query->filterByDonneesComplementaires('%fooValue%'); // WHERE donnees_complementaires LIKE '%fooValue%'
     * </code>
     *
     * @param     string $donneesComplementaires The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByDonneesComplementaires($donneesComplementaires = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($donneesComplementaires)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $donneesComplementaires)) {
                $donneesComplementaires = str_replace('*', '%', $donneesComplementaires);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::DONNEES_COMPLEMENTAIRES, $donneesComplementaires, $comparison);
    }

    /**
     * Filter the query on the espace_collaboratif column
     *
     * Example usage:
     * <code>
     * $query->filterByEspaceCollaboratif('fooValue');   // WHERE espace_collaboratif = 'fooValue'
     * $query->filterByEspaceCollaboratif('%fooValue%'); // WHERE espace_collaboratif LIKE '%fooValue%'
     * </code>
     *
     * @param     string $espaceCollaboratif The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByEspaceCollaboratif($espaceCollaboratif = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($espaceCollaboratif)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $espaceCollaboratif)) {
                $espaceCollaboratif = str_replace('*', '%', $espaceCollaboratif);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::ESPACE_COLLABORATIF, $espaceCollaboratif, $comparison);
    }

    /**
     * Filter the query on the historique_navigation_inscrits column
     *
     * Example usage:
     * <code>
     * $query->filterByHistoriqueNavigationInscrits('fooValue');   // WHERE historique_navigation_inscrits = 'fooValue'
     * $query->filterByHistoriqueNavigationInscrits('%fooValue%'); // WHERE historique_navigation_inscrits LIKE '%fooValue%'
     * </code>
     *
     * @param     string $historiqueNavigationInscrits The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByHistoriqueNavigationInscrits($historiqueNavigationInscrits = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($historiqueNavigationInscrits)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $historiqueNavigationInscrits)) {
                $historiqueNavigationInscrits = str_replace('*', '%', $historiqueNavigationInscrits);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::HISTORIQUE_NAVIGATION_INSCRITS, $historiqueNavigationInscrits, $comparison);
    }

    /**
     * Filter the query on the Identification_contrat column
     *
     * Example usage:
     * <code>
     * $query->filterByIdentificationContrat('fooValue');   // WHERE Identification_contrat = 'fooValue'
     * $query->filterByIdentificationContrat('%fooValue%'); // WHERE Identification_contrat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $identificationContrat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByIdentificationContrat($identificationContrat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($identificationContrat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $identificationContrat)) {
                $identificationContrat = str_replace('*', '%', $identificationContrat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::IDENTIFICATION_CONTRAT, $identificationContrat, $comparison);
    }

    /**
     * Filter the query on the extraction_accords_cadres column
     *
     * Example usage:
     * <code>
     * $query->filterByExtractionAccordsCadres('fooValue');   // WHERE extraction_accords_cadres = 'fooValue'
     * $query->filterByExtractionAccordsCadres('%fooValue%'); // WHERE extraction_accords_cadres LIKE '%fooValue%'
     * </code>
     *
     * @param     string $extractionAccordsCadres The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByExtractionAccordsCadres($extractionAccordsCadres = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($extractionAccordsCadres)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $extractionAccordsCadres)) {
                $extractionAccordsCadres = str_replace('*', '%', $extractionAccordsCadres);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::EXTRACTION_ACCORDS_CADRES, $extractionAccordsCadres, $comparison);
    }

    /**
     * Filter the query on the extraction_siret_acheteur column
     *
     * Example usage:
     * <code>
     * $query->filterByExtractionSiretAcheteur('fooValue');   // WHERE extraction_siret_acheteur = 'fooValue'
     * $query->filterByExtractionSiretAcheteur('%fooValue%'); // WHERE extraction_siret_acheteur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $extractionSiretAcheteur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByExtractionSiretAcheteur($extractionSiretAcheteur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($extractionSiretAcheteur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $extractionSiretAcheteur)) {
                $extractionSiretAcheteur = str_replace('*', '%', $extractionSiretAcheteur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::EXTRACTION_SIRET_ACHETEUR, $extractionSiretAcheteur, $comparison);
    }

    /**
     * Filter the query on the marche_public_simplifie column
     *
     * Example usage:
     * <code>
     * $query->filterByMarchePublicSimplifie('fooValue');   // WHERE marche_public_simplifie = 'fooValue'
     * $query->filterByMarchePublicSimplifie('%fooValue%'); // WHERE marche_public_simplifie LIKE '%fooValue%'
     * </code>
     *
     * @param     string $marchePublicSimplifie The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByMarchePublicSimplifie($marchePublicSimplifie = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($marchePublicSimplifie)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $marchePublicSimplifie)) {
                $marchePublicSimplifie = str_replace('*', '%', $marchePublicSimplifie);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::MARCHE_PUBLIC_SIMPLIFIE, $marchePublicSimplifie, $comparison);
    }

    /**
     * Filter the query on the consultation_demande_achat column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultationDemandeAchat('fooValue');   // WHERE consultation_demande_achat = 'fooValue'
     * $query->filterByConsultationDemandeAchat('%fooValue%'); // WHERE consultation_demande_achat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $consultationDemandeAchat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByConsultationDemandeAchat($consultationDemandeAchat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($consultationDemandeAchat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $consultationDemandeAchat)) {
                $consultationDemandeAchat = str_replace('*', '%', $consultationDemandeAchat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::CONSULTATION_DEMANDE_ACHAT, $consultationDemandeAchat, $comparison);
    }

    /**
     * Filter the query on the authenticate_agent_by_ldap column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthenticateAgentByLdap('fooValue');   // WHERE authenticate_agent_by_ldap = 'fooValue'
     * $query->filterByAuthenticateAgentByLdap('%fooValue%'); // WHERE authenticate_agent_by_ldap LIKE '%fooValue%'
     * </code>
     *
     * @param     string $authenticateAgentByLdap The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByAuthenticateAgentByLdap($authenticateAgentByLdap = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($authenticateAgentByLdap)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $authenticateAgentByLdap)) {
                $authenticateAgentByLdap = str_replace('*', '%', $authenticateAgentByLdap);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::AUTHENTICATE_AGENT_BY_LDAP, $authenticateAgentByLdap, $comparison);
    }

    /**
     * Filter the query on the consultation_via_import column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultationViaImport('fooValue');   // WHERE consultation_via_import = 'fooValue'
     * $query->filterByConsultationViaImport('%fooValue%'); // WHERE consultation_via_import LIKE '%fooValue%'
     * </code>
     *
     * @param     string $consultationViaImport The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByConsultationViaImport($consultationViaImport = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($consultationViaImport)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $consultationViaImport)) {
                $consultationViaImport = str_replace('*', '%', $consultationViaImport);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::CONSULTATION_VIA_IMPORT, $consultationViaImport, $comparison);
    }

    /**
     * Filter the query on the EXPRESSION_REG_REFERENCE column
     *
     * Example usage:
     * <code>
     * $query->filterByExpressionRegReference('fooValue');   // WHERE EXPRESSION_REG_REFERENCE = 'fooValue'
     * $query->filterByExpressionRegReference('%fooValue%'); // WHERE EXPRESSION_REG_REFERENCE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $expressionRegReference The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByExpressionRegReference($expressionRegReference = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($expressionRegReference)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $expressionRegReference)) {
                $expressionRegReference = str_replace('*', '%', $expressionRegReference);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::EXPRESSION_REG_REFERENCE, $expressionRegReference, $comparison);
    }

    /**
     * Filter the query on the visioconference_cao column
     *
     * Example usage:
     * <code>
     * $query->filterByVisioconferenceCao('fooValue');   // WHERE visioconference_cao = 'fooValue'
     * $query->filterByVisioconferenceCao('%fooValue%'); // WHERE visioconference_cao LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visioconferenceCao The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByVisioconferenceCao($visioconferenceCao = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visioconferenceCao)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visioconferenceCao)) {
                $visioconferenceCao = str_replace('*', '%', $visioconferenceCao);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::VISIOCONFERENCE_CAO, $visioconferenceCao, $comparison);
    }

    /**
     * Filter the query on the estimation_confidentiel column
     *
     * Example usage:
     * <code>
     * $query->filterByEstimationConfidentiel('fooValue');   // WHERE estimation_confidentiel = 'fooValue'
     * $query->filterByEstimationConfidentiel('%fooValue%'); // WHERE estimation_confidentiel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $estimationConfidentiel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByEstimationConfidentiel($estimationConfidentiel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($estimationConfidentiel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $estimationConfidentiel)) {
                $estimationConfidentiel = str_replace('*', '%', $estimationConfidentiel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::ESTIMATION_CONFIDENTIEL, $estimationConfidentiel, $comparison);
    }

    /**
     * Filter the query on the qualification_registre_depot column
     *
     * Example usage:
     * <code>
     * $query->filterByQualificationRegistreDepot('fooValue');   // WHERE qualification_registre_depot = 'fooValue'
     * $query->filterByQualificationRegistreDepot('%fooValue%'); // WHERE qualification_registre_depot LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qualificationRegistreDepot The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByQualificationRegistreDepot($qualificationRegistreDepot = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qualificationRegistreDepot)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $qualificationRegistreDepot)) {
                $qualificationRegistreDepot = str_replace('*', '%', $qualificationRegistreDepot);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::QUALIFICATION_REGISTRE_DEPOT, $qualificationRegistreDepot, $comparison);
    }

    /**
     * Filter the query on the gestion_cao column
     *
     * Example usage:
     * <code>
     * $query->filterByGestionCao('fooValue');   // WHERE gestion_cao = 'fooValue'
     * $query->filterByGestionCao('%fooValue%'); // WHERE gestion_cao LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gestionCao The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByGestionCao($gestionCao = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gestionCao)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gestionCao)) {
                $gestionCao = str_replace('*', '%', $gestionCao);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::GESTION_CAO, $gestionCao, $comparison);
    }

    /**
     * Filter the query on the referentiel_contact column
     *
     * Example usage:
     * <code>
     * $query->filterByReferentielContact('fooValue');   // WHERE referentiel_contact = 'fooValue'
     * $query->filterByReferentielContact('%fooValue%'); // WHERE referentiel_contact LIKE '%fooValue%'
     * </code>
     *
     * @param     string $referentielContact The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByReferentielContact($referentielContact = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($referentielContact)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $referentielContact)) {
                $referentielContact = str_replace('*', '%', $referentielContact);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::REFERENTIEL_CONTACT, $referentielContact, $comparison);
    }

    /**
     * Filter the query on the gestion_montant_devise column
     *
     * Example usage:
     * <code>
     * $query->filterByGestionMontantDevise('fooValue');   // WHERE gestion_montant_devise = 'fooValue'
     * $query->filterByGestionMontantDevise('%fooValue%'); // WHERE gestion_montant_devise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gestionMontantDevise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByGestionMontantDevise($gestionMontantDevise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gestionMontantDevise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gestionMontantDevise)) {
                $gestionMontantDevise = str_replace('*', '%', $gestionMontantDevise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::GESTION_MONTANT_DEVISE, $gestionMontantDevise, $comparison);
    }

    /**
     * Filter the query on the gestion_rabais column
     *
     * Example usage:
     * <code>
     * $query->filterByGestionRabais('fooValue');   // WHERE gestion_rabais = 'fooValue'
     * $query->filterByGestionRabais('%fooValue%'); // WHERE gestion_rabais LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gestionRabais The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByGestionRabais($gestionRabais = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gestionRabais)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gestionRabais)) {
                $gestionRabais = str_replace('*', '%', $gestionRabais);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::GESTION_RABAIS, $gestionRabais, $comparison);
    }

    /**
     * Filter the query on the gestion_caution_provisoire column
     *
     * Example usage:
     * <code>
     * $query->filterByGestionCautionProvisoire('fooValue');   // WHERE gestion_caution_provisoire = 'fooValue'
     * $query->filterByGestionCautionProvisoire('%fooValue%'); // WHERE gestion_caution_provisoire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gestionCautionProvisoire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByGestionCautionProvisoire($gestionCautionProvisoire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gestionCautionProvisoire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gestionCautionProvisoire)) {
                $gestionCautionProvisoire = str_replace('*', '%', $gestionCautionProvisoire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::GESTION_CAUTION_PROVISOIRE, $gestionCautionProvisoire, $comparison);
    }

    /**
     * Filter the query on the gestion_travaux_cao column
     *
     * Example usage:
     * <code>
     * $query->filterByGestionTravauxCao('fooValue');   // WHERE gestion_travaux_cao = 'fooValue'
     * $query->filterByGestionTravauxCao('%fooValue%'); // WHERE gestion_travaux_cao LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gestionTravauxCao The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByGestionTravauxCao($gestionTravauxCao = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gestionTravauxCao)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gestionTravauxCao)) {
                $gestionTravauxCao = str_replace('*', '%', $gestionTravauxCao);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::GESTION_TRAVAUX_CAO, $gestionTravauxCao, $comparison);
    }

    /**
     * Filter the query on the filtre_bdf_entreprise_valide column
     *
     * Example usage:
     * <code>
     * $query->filterByFiltreBdfEntrepriseValide('fooValue');   // WHERE filtre_bdf_entreprise_valide = 'fooValue'
     * $query->filterByFiltreBdfEntrepriseValide('%fooValue%'); // WHERE filtre_bdf_entreprise_valide LIKE '%fooValue%'
     * </code>
     *
     * @param     string $filtreBdfEntrepriseValide The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByFiltreBdfEntrepriseValide($filtreBdfEntrepriseValide = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($filtreBdfEntrepriseValide)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $filtreBdfEntrepriseValide)) {
                $filtreBdfEntrepriseValide = str_replace('*', '%', $filtreBdfEntrepriseValide);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::FILTRE_BDF_ENTREPRISE_VALIDE, $filtreBdfEntrepriseValide, $comparison);
    }

    /**
     * Filter the query on the gestion_statistiques_pme column
     *
     * Example usage:
     * <code>
     * $query->filterByGestionStatistiquesPme('fooValue');   // WHERE gestion_statistiques_pme = 'fooValue'
     * $query->filterByGestionStatistiquesPme('%fooValue%'); // WHERE gestion_statistiques_pme LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gestionStatistiquesPme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByGestionStatistiquesPme($gestionStatistiquesPme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gestionStatistiquesPme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gestionStatistiquesPme)) {
                $gestionStatistiquesPme = str_replace('*', '%', $gestionStatistiquesPme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::GESTION_STATISTIQUES_PME, $gestionStatistiquesPme, $comparison);
    }

    /**
     * Filter the query on the gestion_demandes_achats column
     *
     * Example usage:
     * <code>
     * $query->filterByGestionDemandesAchats('fooValue');   // WHERE gestion_demandes_achats = 'fooValue'
     * $query->filterByGestionDemandesAchats('%fooValue%'); // WHERE gestion_demandes_achats LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gestionDemandesAchats The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function filterByGestionDemandesAchats($gestionDemandesAchats = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gestionDemandesAchats)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gestionDemandesAchats)) {
                $gestionDemandesAchats = str_replace('*', '%', $gestionDemandesAchats);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationOrganismePeer::GESTION_DEMANDES_ACHATS, $gestionDemandesAchats, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonConfigurationOrganisme $commonConfigurationOrganisme Object to remove from the list of results
     *
     * @return CommonConfigurationOrganismeQuery The current query, for fluid interface
     */
    public function prune($commonConfigurationOrganisme = null)
    {
        if ($commonConfigurationOrganisme) {
            $this->addUsingAlias(CommonConfigurationOrganismePeer::ORGANISME, $commonConfigurationOrganisme->getOrganisme(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
