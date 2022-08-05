<?php


/**
 * Base class that represents a query for the 'HabilitationAgent' table.
 *
 * 
 *
 * @method CommonHabilitationAgentQuery orderByIdAgent($order = Criteria::ASC) Order by the id_agent column
 * @method CommonHabilitationAgentQuery orderByGestionAgentPole($order = Criteria::ASC) Order by the gestion_agent_pole column
 * @method CommonHabilitationAgentQuery orderByGestionFournisseursEnvoisPostaux($order = Criteria::ASC) Order by the gestion_fournisseurs_envois_postaux column
 * @method CommonHabilitationAgentQuery orderByGestionBiCles($order = Criteria::ASC) Order by the gestion_bi_cles column
 * @method CommonHabilitationAgentQuery orderByCreerConsultation($order = Criteria::ASC) Order by the creer_consultation column
 * @method CommonHabilitationAgentQuery orderByModifierConsultation($order = Criteria::ASC) Order by the modifier_consultation column
 * @method CommonHabilitationAgentQuery orderByValiderConsultation($order = Criteria::ASC) Order by the valider_consultation column
 * @method CommonHabilitationAgentQuery orderByPublierConsultation($order = Criteria::ASC) Order by the publier_consultation column
 * @method CommonHabilitationAgentQuery orderBySuivreConsultation($order = Criteria::ASC) Order by the suivre_consultation column
 * @method CommonHabilitationAgentQuery orderBySuivreConsultationPole($order = Criteria::ASC) Order by the suivre_consultation_pole column
 * @method CommonHabilitationAgentQuery orderBySupprimerEnveloppe($order = Criteria::ASC) Order by the supprimer_enveloppe column
 * @method CommonHabilitationAgentQuery orderBySupprimerConsultation($order = Criteria::ASC) Order by the supprimer_consultation column
 * @method CommonHabilitationAgentQuery orderByDepouillerCandidature($order = Criteria::ASC) Order by the depouiller_candidature column
 * @method CommonHabilitationAgentQuery orderByDepouillerOffre($order = Criteria::ASC) Order by the depouiller_offre column
 * @method CommonHabilitationAgentQuery orderByMessagerieSecurisee($order = Criteria::ASC) Order by the messagerie_securisee column
 * @method CommonHabilitationAgentQuery orderByAccesRegistreDepotsPapier($order = Criteria::ASC) Order by the acces_registre_depots_papier column
 * @method CommonHabilitationAgentQuery orderByAccesRegistreRetraitsPapier($order = Criteria::ASC) Order by the acces_registre_retraits_papier column
 * @method CommonHabilitationAgentQuery orderByAccesRegistreQuestionsPapier($order = Criteria::ASC) Order by the acces_registre_questions_papier column
 * @method CommonHabilitationAgentQuery orderByGererEncheres($order = Criteria::ASC) Order by the gerer_encheres column
 * @method CommonHabilitationAgentQuery orderBySuivreEncheres($order = Criteria::ASC) Order by the suivre_encheres column
 * @method CommonHabilitationAgentQuery orderBySuiviEntreprise($order = Criteria::ASC) Order by the suivi_entreprise column
 * @method CommonHabilitationAgentQuery orderByEnvoiBoamp($order = Criteria::ASC) Order by the envoi_boamp column
 * @method CommonHabilitationAgentQuery orderByAccesClassementLot($order = Criteria::ASC) Order by the acces_classement_lot column
 * @method CommonHabilitationAgentQuery orderByConnecteurSis($order = Criteria::ASC) Order by the connecteur_sis column
 * @method CommonHabilitationAgentQuery orderByConnecteurMarco($order = Criteria::ASC) Order by the connecteur_marco column
 * @method CommonHabilitationAgentQuery orderByRepondreAuxQuestions($order = Criteria::ASC) Order by the repondre_aux_questions column
 * @method CommonHabilitationAgentQuery orderByAppelProjetFormation($order = Criteria::ASC) Order by the appel_projet_formation column
 * @method CommonHabilitationAgentQuery orderByUtiliserClientCao($order = Criteria::ASC) Order by the utiliser_client_CAO column
 * @method CommonHabilitationAgentQuery orderByNotificationBoamp($order = Criteria::ASC) Order by the notification_boamp column
 * @method CommonHabilitationAgentQuery orderByAdministrerCompte($order = Criteria::ASC) Order by the administrer_compte column
 * @method CommonHabilitationAgentQuery orderByGestionMapa($order = Criteria::ASC) Order by the gestion_mapa column
 * @method CommonHabilitationAgentQuery orderByGestionTypeValidation($order = Criteria::ASC) Order by the gestion_type_validation column
 * @method CommonHabilitationAgentQuery orderByApprouverConsultation($order = Criteria::ASC) Order by the approuver_consultation column
 * @method CommonHabilitationAgentQuery orderByAdministrerProcedure($order = Criteria::ASC) Order by the administrer_procedure column
 * @method CommonHabilitationAgentQuery orderByRestreindreCreation($order = Criteria::ASC) Order by the restreindre_creation column
 * @method CommonHabilitationAgentQuery orderByCreerListeMarches($order = Criteria::ASC) Order by the creer_liste_marches column
 * @method CommonHabilitationAgentQuery orderByGestionCommissions($order = Criteria::ASC) Order by the gestion_commissions column
 * @method CommonHabilitationAgentQuery orderBySuiviSeulConsultation($order = Criteria::ASC) Order by the suivi_seul_consultation column
 * @method CommonHabilitationAgentQuery orderByAttributionMarche($order = Criteria::ASC) Order by the attribution_marche column
 * @method CommonHabilitationAgentQuery orderByFicheRecensement($order = Criteria::ASC) Order by the fiche_recensement column
 * @method CommonHabilitationAgentQuery orderByDeclarerInfructueux($order = Criteria::ASC) Order by the declarer_infructueux column
 * @method CommonHabilitationAgentQuery orderByDeclarerSansSuite($order = Criteria::ASC) Order by the declarer_sans_suite column
 * @method CommonHabilitationAgentQuery orderByCreerConsultationTransverse($order = Criteria::ASC) Order by the creer_consultation_transverse column
 * @method CommonHabilitationAgentQuery orderByOuvrirCandidatureEnLigne($order = Criteria::ASC) Order by the ouvrir_candidature_en_ligne column
 * @method CommonHabilitationAgentQuery orderByOuvrirCandidatureADistance($order = Criteria::ASC) Order by the ouvrir_candidature_a_distance column
 * @method CommonHabilitationAgentQuery orderByRefuserEnveloppe($order = Criteria::ASC) Order by the refuser_enveloppe column
 * @method CommonHabilitationAgentQuery orderByGererAdmissibilite($order = Criteria::ASC) Order by the gerer_admissibilite column
 * @method CommonHabilitationAgentQuery orderByRestaurerEnveloppe($order = Criteria::ASC) Order by the restaurer_enveloppe column
 * @method CommonHabilitationAgentQuery orderByOuvrirAnonymatEnLigne($order = Criteria::ASC) Order by the ouvrir_anonymat_en_ligne column
 * @method CommonHabilitationAgentQuery orderByOuvrirOffreEnLigne($order = Criteria::ASC) Order by the ouvrir_offre_en_ligne column
 * @method CommonHabilitationAgentQuery orderByGestionCompteBoamp($order = Criteria::ASC) Order by the gestion_compte_boamp column
 * @method CommonHabilitationAgentQuery orderByGestionAgents($order = Criteria::ASC) Order by the gestion_agents column
 * @method CommonHabilitationAgentQuery orderByGestionHabilitations($order = Criteria::ASC) Order by the gestion_habilitations column
 * @method CommonHabilitationAgentQuery orderByGererMapaInferieurMontant($order = Criteria::ASC) Order by the gerer_mapa_inferieur_montant column
 * @method CommonHabilitationAgentQuery orderByGererMapaSuperieurMontant($order = Criteria::ASC) Order by the gerer_mapa_superieur_montant column
 * @method CommonHabilitationAgentQuery orderByModifierConsultationAvantValidation($order = Criteria::ASC) Order by the modifier_consultation_avant_validation column
 * @method CommonHabilitationAgentQuery orderByModifierConsultationApresValidation($order = Criteria::ASC) Order by the modifier_consultation_apres_validation column
 * @method CommonHabilitationAgentQuery orderByAccesReponses($order = Criteria::ASC) Order by the acces_reponses column
 * @method CommonHabilitationAgentQuery orderByTelechargementGroupeAnticipePlisChiffres($order = Criteria::ASC) Order by the telechargement_groupe_anticipe_plis_chiffres column
 * @method CommonHabilitationAgentQuery orderByTelechargementUnitairePlisChiffres($order = Criteria::ASC) Order by the telechargement_unitaire_plis_chiffres column
 * @method CommonHabilitationAgentQuery orderByOuvrirOffreADistance($order = Criteria::ASC) Order by the ouvrir_offre_a_distance column
 * @method CommonHabilitationAgentQuery orderByCreerAnnonceInformation($order = Criteria::ASC) Order by the creer_annonce_information column
 * @method CommonHabilitationAgentQuery orderBySaisieMarches($order = Criteria::ASC) Order by the saisie_marches column
 * @method CommonHabilitationAgentQuery orderByValidationMarches($order = Criteria::ASC) Order by the validation_marches column
 * @method CommonHabilitationAgentQuery orderByPublicationMarches($order = Criteria::ASC) Order by the publication_marches column
 * @method CommonHabilitationAgentQuery orderByGererStatistiquesMetier($order = Criteria::ASC) Order by the gerer_statistiques_metier column
 * @method CommonHabilitationAgentQuery orderByGererArchives($order = Criteria::ASC) Order by the gerer_archives column
 * @method CommonHabilitationAgentQuery orderByAdministrerProceduresFormalisees($order = Criteria::ASC) Order by the administrer_procedures_formalisees column
 * @method CommonHabilitationAgentQuery orderByCreerAnnonceAttribution($order = Criteria::ASC) Order by the creer_annonce_attribution column
 * @method CommonHabilitationAgentQuery orderByAccesRegistreRetraitsElectronique($order = Criteria::ASC) Order by the acces_registre_retraits_electronique column
 * @method CommonHabilitationAgentQuery orderByAccesRegistreQuestionsElectronique($order = Criteria::ASC) Order by the acces_registre_questions_electronique column
 * @method CommonHabilitationAgentQuery orderByAccesRegistreDepotsElectronique($order = Criteria::ASC) Order by the acces_registre_depots_electronique column
 * @method CommonHabilitationAgentQuery orderByValidationSimple($order = Criteria::ASC) Order by the validation_simple column
 * @method CommonHabilitationAgentQuery orderByValidationIntermediaire($order = Criteria::ASC) Order by the validation_intermediaire column
 * @method CommonHabilitationAgentQuery orderByValidationFinale($order = Criteria::ASC) Order by the validation_finale column
 * @method CommonHabilitationAgentQuery orderByCreerSuiteConsultation($order = Criteria::ASC) Order by the creer_suite_consultation column
 * @method CommonHabilitationAgentQuery orderByHyperAdmin($order = Criteria::ASC) Order by the hyper_admin column
 * @method CommonHabilitationAgentQuery orderByDroitGestionServices($order = Criteria::ASC) Order by the droit_gestion_services column
 * @method CommonHabilitationAgentQuery orderBySuiviAcces($order = Criteria::ASC) Order by the suivi_acces column
 * @method CommonHabilitationAgentQuery orderByStatistiquesSite($order = Criteria::ASC) Order by the statistiques_site column
 * @method CommonHabilitationAgentQuery orderByStatistiquesQos($order = Criteria::ASC) Order by the statistiques_QoS column
 * @method CommonHabilitationAgentQuery orderByOuvrirAnonymatADistance($order = Criteria::ASC) Order by the ouvrir_anonymat_a_distance column
 * @method CommonHabilitationAgentQuery orderByGestionCompteJal($order = Criteria::ASC) Order by the gestion_compte_jal column
 * @method CommonHabilitationAgentQuery orderByGestionCentralePub($order = Criteria::ASC) Order by the gestion_centrale_pub column
 * @method CommonHabilitationAgentQuery orderByGestionCompteGroupeMoniteur($order = Criteria::ASC) Order by the Gestion_Compte_Groupe_Moniteur column
 * @method CommonHabilitationAgentQuery orderByOuvrirOffreTechniqueEnLigne($order = Criteria::ASC) Order by the ouvrir_offre_technique_en_ligne column
 * @method CommonHabilitationAgentQuery orderByOuvrirOffreTechniqueADistance($order = Criteria::ASC) Order by the ouvrir_offre_technique_a_distance column
 * @method CommonHabilitationAgentQuery orderByActivationCompteEntreprise($order = Criteria::ASC) Order by the activation_compte_entreprise column
 * @method CommonHabilitationAgentQuery orderByImporterEnveloppe($order = Criteria::ASC) Order by the importer_enveloppe column
 * @method CommonHabilitationAgentQuery orderBySuiviSeulRegistreDepotsPapier($order = Criteria::ASC) Order by the suivi_seul_registre_depots_papier column
 * @method CommonHabilitationAgentQuery orderBySuiviSeulRegistreRetraitsPapier($order = Criteria::ASC) Order by the suivi_seul_registre_retraits_papier column
 * @method CommonHabilitationAgentQuery orderBySuiviSeulRegistreQuestionsPapier($order = Criteria::ASC) Order by the suivi_seul_registre_questions_papier column
 * @method CommonHabilitationAgentQuery orderBySuiviSeulRegistreDepotsElectronique($order = Criteria::ASC) Order by the suivi_seul_registre_depots_electronique column
 * @method CommonHabilitationAgentQuery orderBySuiviSeulRegistreRetraitsElectronique($order = Criteria::ASC) Order by the suivi_seul_registre_retraits_electronique column
 * @method CommonHabilitationAgentQuery orderBySuiviSeulRegistreQuestionsElectronique($order = Criteria::ASC) Order by the suivi_seul_registre_questions_electronique column
 * @method CommonHabilitationAgentQuery orderByModifierConsultationMapaInferieurMontantApresValidation($order = Criteria::ASC) Order by the modifier_consultation_mapa_inferieur_montant_apres_validation column
 * @method CommonHabilitationAgentQuery orderByModifierConsultationMapaSuperieurMontantApresValidation($order = Criteria::ASC) Order by the modifier_consultation_mapa_superieur_montant_apres_validation column
 * @method CommonHabilitationAgentQuery orderByModifierConsultationProceduresFormaliseesApresValidation($order = Criteria::ASC) Order by the modifier_consultation_procedures_formalisees_apres_validation column
 * @method CommonHabilitationAgentQuery orderByGererLesEntreprises($order = Criteria::ASC) Order by the gerer_les_entreprises column
 * @method CommonHabilitationAgentQuery orderByPorteeSocietesExclues($order = Criteria::ASC) Order by the portee_societes_exclues column
 * @method CommonHabilitationAgentQuery orderByPorteeSocietesExcluesTousOrganismes($order = Criteria::ASC) Order by the portee_societes_exclues_tous_organismes column
 * @method CommonHabilitationAgentQuery orderByModifierSocietesExclues($order = Criteria::ASC) Order by the modifier_societes_exclues column
 * @method CommonHabilitationAgentQuery orderBySupprimerSocietesExclues($order = Criteria::ASC) Order by the supprimer_societes_exclues column
 * @method CommonHabilitationAgentQuery orderByResultatAnalyse($order = Criteria::ASC) Order by the resultat_analyse column
 * @method CommonHabilitationAgentQuery orderByGererAdressesService($order = Criteria::ASC) Order by the gerer_adresses_service column
 * @method CommonHabilitationAgentQuery orderByGererMonService($order = Criteria::ASC) Order by the gerer_mon_service column
 * @method CommonHabilitationAgentQuery orderByDownloadArchives($order = Criteria::ASC) Order by the download_archives column
 * @method CommonHabilitationAgentQuery orderByCreerAnnonceExtraitPv($order = Criteria::ASC) Order by the creer_annonce_extrait_pv column
 * @method CommonHabilitationAgentQuery orderByCreerAnnonceRapportAchevement($order = Criteria::ASC) Order by the creer_annonce_rapport_achevement column
 * @method CommonHabilitationAgentQuery orderByGestionCertificatsAgent($order = Criteria::ASC) Order by the gestion_certificats_agent column
 * @method CommonHabilitationAgentQuery orderByCreerAvisProgrammePrevisionnel($order = Criteria::ASC) Order by the creer_avis_programme_previsionnel column
 * @method CommonHabilitationAgentQuery orderByAnnulerConsultation($order = Criteria::ASC) Order by the annuler_consultation column
 * @method CommonHabilitationAgentQuery orderByEnvoyerPublicite($order = Criteria::ASC) Order by the envoyer_publicite column
 * @method CommonHabilitationAgentQuery orderByListeMarchesNotifies($order = Criteria::ASC) Order by the liste_marches_notifies column
 * @method CommonHabilitationAgentQuery orderBySuivreMessage($order = Criteria::ASC) Order by the suivre_message column
 * @method CommonHabilitationAgentQuery orderByEnvoyerMessage($order = Criteria::ASC) Order by the envoyer_message column
 * @method CommonHabilitationAgentQuery orderBySuiviFluxChorusTransversal($order = Criteria::ASC) Order by the suivi_flux_chorus_transversal column
 * @method CommonHabilitationAgentQuery orderByGestionMandataire($order = Criteria::ASC) Order by the gestion_mandataire column
 * @method CommonHabilitationAgentQuery orderByGererNewsletter($order = Criteria::ASC) Order by the gerer_newsletter column
 * @method CommonHabilitationAgentQuery orderByGestionModelesFormulaire($order = Criteria::ASC) Order by the gestion_modeles_formulaire column
 * @method CommonHabilitationAgentQuery orderByGestionAdressesFacturationJal($order = Criteria::ASC) Order by the gestion_adresses_facturation_jal column
 * @method CommonHabilitationAgentQuery orderByAdministrerAdressesFacturationJal($order = Criteria::ASC) Order by the administrer_adresses_facturation_jal column
 * @method CommonHabilitationAgentQuery orderByRedactionDocumentsRedac($order = Criteria::ASC) Order by the redaction_documents_redac column
 * @method CommonHabilitationAgentQuery orderByValidationDocumentsRedac($order = Criteria::ASC) Order by the validation_documents_redac column
 * @method CommonHabilitationAgentQuery orderByGestionMiseDispositionPiecesMarche($order = Criteria::ASC) Order by the gestion_mise_disposition_pieces_marche column
 * @method CommonHabilitationAgentQuery orderByAnnuaireAcheteur($order = Criteria::ASC) Order by the annuaire_acheteur column
 * @method CommonHabilitationAgentQuery orderByReprendreIntegralementArticle($order = Criteria::ASC) Order by the reprendre_integralement_article column
 * @method CommonHabilitationAgentQuery orderByAdministrerClauses($order = Criteria::ASC) Order by the administrer_clauses column
 * @method CommonHabilitationAgentQuery orderByValiderClauses($order = Criteria::ASC) Order by the valider_clauses column
 * @method CommonHabilitationAgentQuery orderByAdministrerCanevas($order = Criteria::ASC) Order by the administrer_canevas column
 * @method CommonHabilitationAgentQuery orderByValiderCanevas($order = Criteria::ASC) Order by the valider_canevas column
 * @method CommonHabilitationAgentQuery orderByAdministrerClausesEntiteAchats($order = Criteria::ASC) Order by the administrer_clauses_entite_achats column
 * @method CommonHabilitationAgentQuery orderByGenererPiecesFormatOdt($order = Criteria::ASC) Order by the generer_pieces_format_odt column
 * @method CommonHabilitationAgentQuery orderByPublierVersionClausierEditeur($order = Criteria::ASC) Order by the publier_version_clausier_editeur column
 * @method CommonHabilitationAgentQuery orderByAdministrerClausesEditeur($order = Criteria::ASC) Order by the administrer_clauses_editeur column
 * @method CommonHabilitationAgentQuery orderByValiderClausesEditeur($order = Criteria::ASC) Order by the valider_clauses_editeur column
 * @method CommonHabilitationAgentQuery orderByAdministrerCanevasEditeur($order = Criteria::ASC) Order by the administrer_canevas_editeur column
 * @method CommonHabilitationAgentQuery orderByValiderCanevasEditeur($order = Criteria::ASC) Order by the valider_canevas_editeur column
 * @method CommonHabilitationAgentQuery orderByDecisionSuiviSeul($order = Criteria::ASC) Order by the decision_suivi_seul column
 * @method CommonHabilitationAgentQuery orderByOuvrirCandidatureHorsLigne($order = Criteria::ASC) Order by the ouvrir_candidature_hors_ligne column
 * @method CommonHabilitationAgentQuery orderByOuvrirOffreHorsLigne($order = Criteria::ASC) Order by the ouvrir_offre_hors_ligne column
 * @method CommonHabilitationAgentQuery orderByOuvrirOffreTechniqueHorsLigne($order = Criteria::ASC) Order by the ouvrir_offre_technique_hors_ligne column
 * @method CommonHabilitationAgentQuery orderByOuvrirAnonymatHorsLigne($order = Criteria::ASC) Order by the ouvrir_anonymat_hors_ligne column
 * @method CommonHabilitationAgentQuery orderByEspaceCollaboratifGestionnaire($order = Criteria::ASC) Order by the espace_collaboratif_gestionnaire column
 * @method CommonHabilitationAgentQuery orderByEspaceCollaboratifContributeur($order = Criteria::ASC) Order by the espace_collaboratif_contributeur column
 * @method CommonHabilitationAgentQuery orderByGererOrganismes($order = Criteria::ASC) Order by the gerer_organismes column
 * @method CommonHabilitationAgentQuery orderByGererAssociationsAgents($order = Criteria::ASC) Order by the gerer_associations_agents column
 * @method CommonHabilitationAgentQuery orderByModuleRedactionUniquement($order = Criteria::ASC) Order by the module_redaction_uniquement column
 * @method CommonHabilitationAgentQuery orderByHistoriqueNavigationInscrits($order = Criteria::ASC) Order by the historique_navigation_inscrits column
 * @method CommonHabilitationAgentQuery orderByTelechargerAccordsCadres($order = Criteria::ASC) Order by the telecharger_accords_cadres column
 * @method CommonHabilitationAgentQuery orderByCreerAnnonceDecisionResiliation($order = Criteria::ASC) Order by the creer_annonce_decision_resiliation column
 * @method CommonHabilitationAgentQuery orderByCreerAnnonceSyntheseRapportAudit($order = Criteria::ASC) Order by the creer_annonce_synthese_rapport_audit column
 * @method CommonHabilitationAgentQuery orderByGererOperations($order = Criteria::ASC) Order by the gerer_operations column
 * @method CommonHabilitationAgentQuery orderByTelechargerSiretAcheteur($order = Criteria::ASC) Order by the telecharger_siret_acheteur column
 * @method CommonHabilitationAgentQuery orderByGererReouverturesModification($order = Criteria::ASC) Order by the gerer_reouvertures_modification column
 * @method CommonHabilitationAgentQuery orderByEnvoyerDemandeValidation($order = Criteria::ASC) Order by the envoyer_demande_validation column
 * @method CommonHabilitationAgentQuery orderBySuivreConsultationOrganisme($order = Criteria::ASC) Order by the suivre_consultation_organisme column
 * @method CommonHabilitationAgentQuery orderByRenseignerMontant($order = Criteria::ASC) Order by the renseigner_montant column
 * @method CommonHabilitationAgentQuery orderByGestionReferentielContact($order = Criteria::ASC) Order by the gestion_referentiel_contact column
 * @method CommonHabilitationAgentQuery orderByGererCao($order = Criteria::ASC) Order by the gerer_cao column
 * @method CommonHabilitationAgentQuery orderByValidationAccesFacture($order = Criteria::ASC) Order by the validation_acces_facture column
 * @method CommonHabilitationAgentQuery orderByGestionTravauxCao($order = Criteria::ASC) Order by the gestion_travaux_cao column
 *
 * @method CommonHabilitationAgentQuery groupByIdAgent() Group by the id_agent column
 * @method CommonHabilitationAgentQuery groupByGestionAgentPole() Group by the gestion_agent_pole column
 * @method CommonHabilitationAgentQuery groupByGestionFournisseursEnvoisPostaux() Group by the gestion_fournisseurs_envois_postaux column
 * @method CommonHabilitationAgentQuery groupByGestionBiCles() Group by the gestion_bi_cles column
 * @method CommonHabilitationAgentQuery groupByCreerConsultation() Group by the creer_consultation column
 * @method CommonHabilitationAgentQuery groupByModifierConsultation() Group by the modifier_consultation column
 * @method CommonHabilitationAgentQuery groupByValiderConsultation() Group by the valider_consultation column
 * @method CommonHabilitationAgentQuery groupByPublierConsultation() Group by the publier_consultation column
 * @method CommonHabilitationAgentQuery groupBySuivreConsultation() Group by the suivre_consultation column
 * @method CommonHabilitationAgentQuery groupBySuivreConsultationPole() Group by the suivre_consultation_pole column
 * @method CommonHabilitationAgentQuery groupBySupprimerEnveloppe() Group by the supprimer_enveloppe column
 * @method CommonHabilitationAgentQuery groupBySupprimerConsultation() Group by the supprimer_consultation column
 * @method CommonHabilitationAgentQuery groupByDepouillerCandidature() Group by the depouiller_candidature column
 * @method CommonHabilitationAgentQuery groupByDepouillerOffre() Group by the depouiller_offre column
 * @method CommonHabilitationAgentQuery groupByMessagerieSecurisee() Group by the messagerie_securisee column
 * @method CommonHabilitationAgentQuery groupByAccesRegistreDepotsPapier() Group by the acces_registre_depots_papier column
 * @method CommonHabilitationAgentQuery groupByAccesRegistreRetraitsPapier() Group by the acces_registre_retraits_papier column
 * @method CommonHabilitationAgentQuery groupByAccesRegistreQuestionsPapier() Group by the acces_registre_questions_papier column
 * @method CommonHabilitationAgentQuery groupByGererEncheres() Group by the gerer_encheres column
 * @method CommonHabilitationAgentQuery groupBySuivreEncheres() Group by the suivre_encheres column
 * @method CommonHabilitationAgentQuery groupBySuiviEntreprise() Group by the suivi_entreprise column
 * @method CommonHabilitationAgentQuery groupByEnvoiBoamp() Group by the envoi_boamp column
 * @method CommonHabilitationAgentQuery groupByAccesClassementLot() Group by the acces_classement_lot column
 * @method CommonHabilitationAgentQuery groupByConnecteurSis() Group by the connecteur_sis column
 * @method CommonHabilitationAgentQuery groupByConnecteurMarco() Group by the connecteur_marco column
 * @method CommonHabilitationAgentQuery groupByRepondreAuxQuestions() Group by the repondre_aux_questions column
 * @method CommonHabilitationAgentQuery groupByAppelProjetFormation() Group by the appel_projet_formation column
 * @method CommonHabilitationAgentQuery groupByUtiliserClientCao() Group by the utiliser_client_CAO column
 * @method CommonHabilitationAgentQuery groupByNotificationBoamp() Group by the notification_boamp column
 * @method CommonHabilitationAgentQuery groupByAdministrerCompte() Group by the administrer_compte column
 * @method CommonHabilitationAgentQuery groupByGestionMapa() Group by the gestion_mapa column
 * @method CommonHabilitationAgentQuery groupByGestionTypeValidation() Group by the gestion_type_validation column
 * @method CommonHabilitationAgentQuery groupByApprouverConsultation() Group by the approuver_consultation column
 * @method CommonHabilitationAgentQuery groupByAdministrerProcedure() Group by the administrer_procedure column
 * @method CommonHabilitationAgentQuery groupByRestreindreCreation() Group by the restreindre_creation column
 * @method CommonHabilitationAgentQuery groupByCreerListeMarches() Group by the creer_liste_marches column
 * @method CommonHabilitationAgentQuery groupByGestionCommissions() Group by the gestion_commissions column
 * @method CommonHabilitationAgentQuery groupBySuiviSeulConsultation() Group by the suivi_seul_consultation column
 * @method CommonHabilitationAgentQuery groupByAttributionMarche() Group by the attribution_marche column
 * @method CommonHabilitationAgentQuery groupByFicheRecensement() Group by the fiche_recensement column
 * @method CommonHabilitationAgentQuery groupByDeclarerInfructueux() Group by the declarer_infructueux column
 * @method CommonHabilitationAgentQuery groupByDeclarerSansSuite() Group by the declarer_sans_suite column
 * @method CommonHabilitationAgentQuery groupByCreerConsultationTransverse() Group by the creer_consultation_transverse column
 * @method CommonHabilitationAgentQuery groupByOuvrirCandidatureEnLigne() Group by the ouvrir_candidature_en_ligne column
 * @method CommonHabilitationAgentQuery groupByOuvrirCandidatureADistance() Group by the ouvrir_candidature_a_distance column
 * @method CommonHabilitationAgentQuery groupByRefuserEnveloppe() Group by the refuser_enveloppe column
 * @method CommonHabilitationAgentQuery groupByGererAdmissibilite() Group by the gerer_admissibilite column
 * @method CommonHabilitationAgentQuery groupByRestaurerEnveloppe() Group by the restaurer_enveloppe column
 * @method CommonHabilitationAgentQuery groupByOuvrirAnonymatEnLigne() Group by the ouvrir_anonymat_en_ligne column
 * @method CommonHabilitationAgentQuery groupByOuvrirOffreEnLigne() Group by the ouvrir_offre_en_ligne column
 * @method CommonHabilitationAgentQuery groupByGestionCompteBoamp() Group by the gestion_compte_boamp column
 * @method CommonHabilitationAgentQuery groupByGestionAgents() Group by the gestion_agents column
 * @method CommonHabilitationAgentQuery groupByGestionHabilitations() Group by the gestion_habilitations column
 * @method CommonHabilitationAgentQuery groupByGererMapaInferieurMontant() Group by the gerer_mapa_inferieur_montant column
 * @method CommonHabilitationAgentQuery groupByGererMapaSuperieurMontant() Group by the gerer_mapa_superieur_montant column
 * @method CommonHabilitationAgentQuery groupByModifierConsultationAvantValidation() Group by the modifier_consultation_avant_validation column
 * @method CommonHabilitationAgentQuery groupByModifierConsultationApresValidation() Group by the modifier_consultation_apres_validation column
 * @method CommonHabilitationAgentQuery groupByAccesReponses() Group by the acces_reponses column
 * @method CommonHabilitationAgentQuery groupByTelechargementGroupeAnticipePlisChiffres() Group by the telechargement_groupe_anticipe_plis_chiffres column
 * @method CommonHabilitationAgentQuery groupByTelechargementUnitairePlisChiffres() Group by the telechargement_unitaire_plis_chiffres column
 * @method CommonHabilitationAgentQuery groupByOuvrirOffreADistance() Group by the ouvrir_offre_a_distance column
 * @method CommonHabilitationAgentQuery groupByCreerAnnonceInformation() Group by the creer_annonce_information column
 * @method CommonHabilitationAgentQuery groupBySaisieMarches() Group by the saisie_marches column
 * @method CommonHabilitationAgentQuery groupByValidationMarches() Group by the validation_marches column
 * @method CommonHabilitationAgentQuery groupByPublicationMarches() Group by the publication_marches column
 * @method CommonHabilitationAgentQuery groupByGererStatistiquesMetier() Group by the gerer_statistiques_metier column
 * @method CommonHabilitationAgentQuery groupByGererArchives() Group by the gerer_archives column
 * @method CommonHabilitationAgentQuery groupByAdministrerProceduresFormalisees() Group by the administrer_procedures_formalisees column
 * @method CommonHabilitationAgentQuery groupByCreerAnnonceAttribution() Group by the creer_annonce_attribution column
 * @method CommonHabilitationAgentQuery groupByAccesRegistreRetraitsElectronique() Group by the acces_registre_retraits_electronique column
 * @method CommonHabilitationAgentQuery groupByAccesRegistreQuestionsElectronique() Group by the acces_registre_questions_electronique column
 * @method CommonHabilitationAgentQuery groupByAccesRegistreDepotsElectronique() Group by the acces_registre_depots_electronique column
 * @method CommonHabilitationAgentQuery groupByValidationSimple() Group by the validation_simple column
 * @method CommonHabilitationAgentQuery groupByValidationIntermediaire() Group by the validation_intermediaire column
 * @method CommonHabilitationAgentQuery groupByValidationFinale() Group by the validation_finale column
 * @method CommonHabilitationAgentQuery groupByCreerSuiteConsultation() Group by the creer_suite_consultation column
 * @method CommonHabilitationAgentQuery groupByHyperAdmin() Group by the hyper_admin column
 * @method CommonHabilitationAgentQuery groupByDroitGestionServices() Group by the droit_gestion_services column
 * @method CommonHabilitationAgentQuery groupBySuiviAcces() Group by the suivi_acces column
 * @method CommonHabilitationAgentQuery groupByStatistiquesSite() Group by the statistiques_site column
 * @method CommonHabilitationAgentQuery groupByStatistiquesQos() Group by the statistiques_QoS column
 * @method CommonHabilitationAgentQuery groupByOuvrirAnonymatADistance() Group by the ouvrir_anonymat_a_distance column
 * @method CommonHabilitationAgentQuery groupByGestionCompteJal() Group by the gestion_compte_jal column
 * @method CommonHabilitationAgentQuery groupByGestionCentralePub() Group by the gestion_centrale_pub column
 * @method CommonHabilitationAgentQuery groupByGestionCompteGroupeMoniteur() Group by the Gestion_Compte_Groupe_Moniteur column
 * @method CommonHabilitationAgentQuery groupByOuvrirOffreTechniqueEnLigne() Group by the ouvrir_offre_technique_en_ligne column
 * @method CommonHabilitationAgentQuery groupByOuvrirOffreTechniqueADistance() Group by the ouvrir_offre_technique_a_distance column
 * @method CommonHabilitationAgentQuery groupByActivationCompteEntreprise() Group by the activation_compte_entreprise column
 * @method CommonHabilitationAgentQuery groupByImporterEnveloppe() Group by the importer_enveloppe column
 * @method CommonHabilitationAgentQuery groupBySuiviSeulRegistreDepotsPapier() Group by the suivi_seul_registre_depots_papier column
 * @method CommonHabilitationAgentQuery groupBySuiviSeulRegistreRetraitsPapier() Group by the suivi_seul_registre_retraits_papier column
 * @method CommonHabilitationAgentQuery groupBySuiviSeulRegistreQuestionsPapier() Group by the suivi_seul_registre_questions_papier column
 * @method CommonHabilitationAgentQuery groupBySuiviSeulRegistreDepotsElectronique() Group by the suivi_seul_registre_depots_electronique column
 * @method CommonHabilitationAgentQuery groupBySuiviSeulRegistreRetraitsElectronique() Group by the suivi_seul_registre_retraits_electronique column
 * @method CommonHabilitationAgentQuery groupBySuiviSeulRegistreQuestionsElectronique() Group by the suivi_seul_registre_questions_electronique column
 * @method CommonHabilitationAgentQuery groupByModifierConsultationMapaInferieurMontantApresValidation() Group by the modifier_consultation_mapa_inferieur_montant_apres_validation column
 * @method CommonHabilitationAgentQuery groupByModifierConsultationMapaSuperieurMontantApresValidation() Group by the modifier_consultation_mapa_superieur_montant_apres_validation column
 * @method CommonHabilitationAgentQuery groupByModifierConsultationProceduresFormaliseesApresValidation() Group by the modifier_consultation_procedures_formalisees_apres_validation column
 * @method CommonHabilitationAgentQuery groupByGererLesEntreprises() Group by the gerer_les_entreprises column
 * @method CommonHabilitationAgentQuery groupByPorteeSocietesExclues() Group by the portee_societes_exclues column
 * @method CommonHabilitationAgentQuery groupByPorteeSocietesExcluesTousOrganismes() Group by the portee_societes_exclues_tous_organismes column
 * @method CommonHabilitationAgentQuery groupByModifierSocietesExclues() Group by the modifier_societes_exclues column
 * @method CommonHabilitationAgentQuery groupBySupprimerSocietesExclues() Group by the supprimer_societes_exclues column
 * @method CommonHabilitationAgentQuery groupByResultatAnalyse() Group by the resultat_analyse column
 * @method CommonHabilitationAgentQuery groupByGererAdressesService() Group by the gerer_adresses_service column
 * @method CommonHabilitationAgentQuery groupByGererMonService() Group by the gerer_mon_service column
 * @method CommonHabilitationAgentQuery groupByDownloadArchives() Group by the download_archives column
 * @method CommonHabilitationAgentQuery groupByCreerAnnonceExtraitPv() Group by the creer_annonce_extrait_pv column
 * @method CommonHabilitationAgentQuery groupByCreerAnnonceRapportAchevement() Group by the creer_annonce_rapport_achevement column
 * @method CommonHabilitationAgentQuery groupByGestionCertificatsAgent() Group by the gestion_certificats_agent column
 * @method CommonHabilitationAgentQuery groupByCreerAvisProgrammePrevisionnel() Group by the creer_avis_programme_previsionnel column
 * @method CommonHabilitationAgentQuery groupByAnnulerConsultation() Group by the annuler_consultation column
 * @method CommonHabilitationAgentQuery groupByEnvoyerPublicite() Group by the envoyer_publicite column
 * @method CommonHabilitationAgentQuery groupByListeMarchesNotifies() Group by the liste_marches_notifies column
 * @method CommonHabilitationAgentQuery groupBySuivreMessage() Group by the suivre_message column
 * @method CommonHabilitationAgentQuery groupByEnvoyerMessage() Group by the envoyer_message column
 * @method CommonHabilitationAgentQuery groupBySuiviFluxChorusTransversal() Group by the suivi_flux_chorus_transversal column
 * @method CommonHabilitationAgentQuery groupByGestionMandataire() Group by the gestion_mandataire column
 * @method CommonHabilitationAgentQuery groupByGererNewsletter() Group by the gerer_newsletter column
 * @method CommonHabilitationAgentQuery groupByGestionModelesFormulaire() Group by the gestion_modeles_formulaire column
 * @method CommonHabilitationAgentQuery groupByGestionAdressesFacturationJal() Group by the gestion_adresses_facturation_jal column
 * @method CommonHabilitationAgentQuery groupByAdministrerAdressesFacturationJal() Group by the administrer_adresses_facturation_jal column
 * @method CommonHabilitationAgentQuery groupByRedactionDocumentsRedac() Group by the redaction_documents_redac column
 * @method CommonHabilitationAgentQuery groupByValidationDocumentsRedac() Group by the validation_documents_redac column
 * @method CommonHabilitationAgentQuery groupByGestionMiseDispositionPiecesMarche() Group by the gestion_mise_disposition_pieces_marche column
 * @method CommonHabilitationAgentQuery groupByAnnuaireAcheteur() Group by the annuaire_acheteur column
 * @method CommonHabilitationAgentQuery groupByReprendreIntegralementArticle() Group by the reprendre_integralement_article column
 * @method CommonHabilitationAgentQuery groupByAdministrerClauses() Group by the administrer_clauses column
 * @method CommonHabilitationAgentQuery groupByValiderClauses() Group by the valider_clauses column
 * @method CommonHabilitationAgentQuery groupByAdministrerCanevas() Group by the administrer_canevas column
 * @method CommonHabilitationAgentQuery groupByValiderCanevas() Group by the valider_canevas column
 * @method CommonHabilitationAgentQuery groupByAdministrerClausesEntiteAchats() Group by the administrer_clauses_entite_achats column
 * @method CommonHabilitationAgentQuery groupByGenererPiecesFormatOdt() Group by the generer_pieces_format_odt column
 * @method CommonHabilitationAgentQuery groupByPublierVersionClausierEditeur() Group by the publier_version_clausier_editeur column
 * @method CommonHabilitationAgentQuery groupByAdministrerClausesEditeur() Group by the administrer_clauses_editeur column
 * @method CommonHabilitationAgentQuery groupByValiderClausesEditeur() Group by the valider_clauses_editeur column
 * @method CommonHabilitationAgentQuery groupByAdministrerCanevasEditeur() Group by the administrer_canevas_editeur column
 * @method CommonHabilitationAgentQuery groupByValiderCanevasEditeur() Group by the valider_canevas_editeur column
 * @method CommonHabilitationAgentQuery groupByDecisionSuiviSeul() Group by the decision_suivi_seul column
 * @method CommonHabilitationAgentQuery groupByOuvrirCandidatureHorsLigne() Group by the ouvrir_candidature_hors_ligne column
 * @method CommonHabilitationAgentQuery groupByOuvrirOffreHorsLigne() Group by the ouvrir_offre_hors_ligne column
 * @method CommonHabilitationAgentQuery groupByOuvrirOffreTechniqueHorsLigne() Group by the ouvrir_offre_technique_hors_ligne column
 * @method CommonHabilitationAgentQuery groupByOuvrirAnonymatHorsLigne() Group by the ouvrir_anonymat_hors_ligne column
 * @method CommonHabilitationAgentQuery groupByEspaceCollaboratifGestionnaire() Group by the espace_collaboratif_gestionnaire column
 * @method CommonHabilitationAgentQuery groupByEspaceCollaboratifContributeur() Group by the espace_collaboratif_contributeur column
 * @method CommonHabilitationAgentQuery groupByGererOrganismes() Group by the gerer_organismes column
 * @method CommonHabilitationAgentQuery groupByGererAssociationsAgents() Group by the gerer_associations_agents column
 * @method CommonHabilitationAgentQuery groupByModuleRedactionUniquement() Group by the module_redaction_uniquement column
 * @method CommonHabilitationAgentQuery groupByHistoriqueNavigationInscrits() Group by the historique_navigation_inscrits column
 * @method CommonHabilitationAgentQuery groupByTelechargerAccordsCadres() Group by the telecharger_accords_cadres column
 * @method CommonHabilitationAgentQuery groupByCreerAnnonceDecisionResiliation() Group by the creer_annonce_decision_resiliation column
 * @method CommonHabilitationAgentQuery groupByCreerAnnonceSyntheseRapportAudit() Group by the creer_annonce_synthese_rapport_audit column
 * @method CommonHabilitationAgentQuery groupByGererOperations() Group by the gerer_operations column
 * @method CommonHabilitationAgentQuery groupByTelechargerSiretAcheteur() Group by the telecharger_siret_acheteur column
 * @method CommonHabilitationAgentQuery groupByGererReouverturesModification() Group by the gerer_reouvertures_modification column
 * @method CommonHabilitationAgentQuery groupByEnvoyerDemandeValidation() Group by the envoyer_demande_validation column
 * @method CommonHabilitationAgentQuery groupBySuivreConsultationOrganisme() Group by the suivre_consultation_organisme column
 * @method CommonHabilitationAgentQuery groupByRenseignerMontant() Group by the renseigner_montant column
 * @method CommonHabilitationAgentQuery groupByGestionReferentielContact() Group by the gestion_referentiel_contact column
 * @method CommonHabilitationAgentQuery groupByGererCao() Group by the gerer_cao column
 * @method CommonHabilitationAgentQuery groupByValidationAccesFacture() Group by the validation_acces_facture column
 * @method CommonHabilitationAgentQuery groupByGestionTravauxCao() Group by the gestion_travaux_cao column
 *
 * @method CommonHabilitationAgentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonHabilitationAgentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonHabilitationAgentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonHabilitationAgent findOne(PropelPDO $con = null) Return the first CommonHabilitationAgent matching the query
 * @method CommonHabilitationAgent findOneOrCreate(PropelPDO $con = null) Return the first CommonHabilitationAgent matching the query, or a new CommonHabilitationAgent object populated from the query conditions when no match is found
 *
 * @method CommonHabilitationAgent findOneByGestionAgentPole(string $gestion_agent_pole) Return the first CommonHabilitationAgent filtered by the gestion_agent_pole column
 * @method CommonHabilitationAgent findOneByGestionFournisseursEnvoisPostaux(string $gestion_fournisseurs_envois_postaux) Return the first CommonHabilitationAgent filtered by the gestion_fournisseurs_envois_postaux column
 * @method CommonHabilitationAgent findOneByGestionBiCles(string $gestion_bi_cles) Return the first CommonHabilitationAgent filtered by the gestion_bi_cles column
 * @method CommonHabilitationAgent findOneByCreerConsultation(string $creer_consultation) Return the first CommonHabilitationAgent filtered by the creer_consultation column
 * @method CommonHabilitationAgent findOneByModifierConsultation(string $modifier_consultation) Return the first CommonHabilitationAgent filtered by the modifier_consultation column
 * @method CommonHabilitationAgent findOneByValiderConsultation(string $valider_consultation) Return the first CommonHabilitationAgent filtered by the valider_consultation column
 * @method CommonHabilitationAgent findOneByPublierConsultation(string $publier_consultation) Return the first CommonHabilitationAgent filtered by the publier_consultation column
 * @method CommonHabilitationAgent findOneBySuivreConsultation(string $suivre_consultation) Return the first CommonHabilitationAgent filtered by the suivre_consultation column
 * @method CommonHabilitationAgent findOneBySuivreConsultationPole(string $suivre_consultation_pole) Return the first CommonHabilitationAgent filtered by the suivre_consultation_pole column
 * @method CommonHabilitationAgent findOneBySupprimerEnveloppe(string $supprimer_enveloppe) Return the first CommonHabilitationAgent filtered by the supprimer_enveloppe column
 * @method CommonHabilitationAgent findOneBySupprimerConsultation(string $supprimer_consultation) Return the first CommonHabilitationAgent filtered by the supprimer_consultation column
 * @method CommonHabilitationAgent findOneByDepouillerCandidature(string $depouiller_candidature) Return the first CommonHabilitationAgent filtered by the depouiller_candidature column
 * @method CommonHabilitationAgent findOneByDepouillerOffre(string $depouiller_offre) Return the first CommonHabilitationAgent filtered by the depouiller_offre column
 * @method CommonHabilitationAgent findOneByMessagerieSecurisee(string $messagerie_securisee) Return the first CommonHabilitationAgent filtered by the messagerie_securisee column
 * @method CommonHabilitationAgent findOneByAccesRegistreDepotsPapier(string $acces_registre_depots_papier) Return the first CommonHabilitationAgent filtered by the acces_registre_depots_papier column
 * @method CommonHabilitationAgent findOneByAccesRegistreRetraitsPapier(string $acces_registre_retraits_papier) Return the first CommonHabilitationAgent filtered by the acces_registre_retraits_papier column
 * @method CommonHabilitationAgent findOneByAccesRegistreQuestionsPapier(string $acces_registre_questions_papier) Return the first CommonHabilitationAgent filtered by the acces_registre_questions_papier column
 * @method CommonHabilitationAgent findOneByGererEncheres(string $gerer_encheres) Return the first CommonHabilitationAgent filtered by the gerer_encheres column
 * @method CommonHabilitationAgent findOneBySuivreEncheres(string $suivre_encheres) Return the first CommonHabilitationAgent filtered by the suivre_encheres column
 * @method CommonHabilitationAgent findOneBySuiviEntreprise(string $suivi_entreprise) Return the first CommonHabilitationAgent filtered by the suivi_entreprise column
 * @method CommonHabilitationAgent findOneByEnvoiBoamp(string $envoi_boamp) Return the first CommonHabilitationAgent filtered by the envoi_boamp column
 * @method CommonHabilitationAgent findOneByAccesClassementLot(string $acces_classement_lot) Return the first CommonHabilitationAgent filtered by the acces_classement_lot column
 * @method CommonHabilitationAgent findOneByConnecteurSis(string $connecteur_sis) Return the first CommonHabilitationAgent filtered by the connecteur_sis column
 * @method CommonHabilitationAgent findOneByConnecteurMarco(string $connecteur_marco) Return the first CommonHabilitationAgent filtered by the connecteur_marco column
 * @method CommonHabilitationAgent findOneByRepondreAuxQuestions(string $repondre_aux_questions) Return the first CommonHabilitationAgent filtered by the repondre_aux_questions column
 * @method CommonHabilitationAgent findOneByAppelProjetFormation(string $appel_projet_formation) Return the first CommonHabilitationAgent filtered by the appel_projet_formation column
 * @method CommonHabilitationAgent findOneByUtiliserClientCao(string $utiliser_client_CAO) Return the first CommonHabilitationAgent filtered by the utiliser_client_CAO column
 * @method CommonHabilitationAgent findOneByNotificationBoamp(string $notification_boamp) Return the first CommonHabilitationAgent filtered by the notification_boamp column
 * @method CommonHabilitationAgent findOneByAdministrerCompte(string $administrer_compte) Return the first CommonHabilitationAgent filtered by the administrer_compte column
 * @method CommonHabilitationAgent findOneByGestionMapa(string $gestion_mapa) Return the first CommonHabilitationAgent filtered by the gestion_mapa column
 * @method CommonHabilitationAgent findOneByGestionTypeValidation(string $gestion_type_validation) Return the first CommonHabilitationAgent filtered by the gestion_type_validation column
 * @method CommonHabilitationAgent findOneByApprouverConsultation(string $approuver_consultation) Return the first CommonHabilitationAgent filtered by the approuver_consultation column
 * @method CommonHabilitationAgent findOneByAdministrerProcedure(string $administrer_procedure) Return the first CommonHabilitationAgent filtered by the administrer_procedure column
 * @method CommonHabilitationAgent findOneByRestreindreCreation(string $restreindre_creation) Return the first CommonHabilitationAgent filtered by the restreindre_creation column
 * @method CommonHabilitationAgent findOneByCreerListeMarches(string $creer_liste_marches) Return the first CommonHabilitationAgent filtered by the creer_liste_marches column
 * @method CommonHabilitationAgent findOneByGestionCommissions(string $gestion_commissions) Return the first CommonHabilitationAgent filtered by the gestion_commissions column
 * @method CommonHabilitationAgent findOneBySuiviSeulConsultation(string $suivi_seul_consultation) Return the first CommonHabilitationAgent filtered by the suivi_seul_consultation column
 * @method CommonHabilitationAgent findOneByAttributionMarche(string $attribution_marche) Return the first CommonHabilitationAgent filtered by the attribution_marche column
 * @method CommonHabilitationAgent findOneByFicheRecensement(string $fiche_recensement) Return the first CommonHabilitationAgent filtered by the fiche_recensement column
 * @method CommonHabilitationAgent findOneByDeclarerInfructueux(string $declarer_infructueux) Return the first CommonHabilitationAgent filtered by the declarer_infructueux column
 * @method CommonHabilitationAgent findOneByDeclarerSansSuite(string $declarer_sans_suite) Return the first CommonHabilitationAgent filtered by the declarer_sans_suite column
 * @method CommonHabilitationAgent findOneByCreerConsultationTransverse(string $creer_consultation_transverse) Return the first CommonHabilitationAgent filtered by the creer_consultation_transverse column
 * @method CommonHabilitationAgent findOneByOuvrirCandidatureEnLigne(string $ouvrir_candidature_en_ligne) Return the first CommonHabilitationAgent filtered by the ouvrir_candidature_en_ligne column
 * @method CommonHabilitationAgent findOneByOuvrirCandidatureADistance(string $ouvrir_candidature_a_distance) Return the first CommonHabilitationAgent filtered by the ouvrir_candidature_a_distance column
 * @method CommonHabilitationAgent findOneByRefuserEnveloppe(string $refuser_enveloppe) Return the first CommonHabilitationAgent filtered by the refuser_enveloppe column
 * @method CommonHabilitationAgent findOneByGererAdmissibilite(string $gerer_admissibilite) Return the first CommonHabilitationAgent filtered by the gerer_admissibilite column
 * @method CommonHabilitationAgent findOneByRestaurerEnveloppe(string $restaurer_enveloppe) Return the first CommonHabilitationAgent filtered by the restaurer_enveloppe column
 * @method CommonHabilitationAgent findOneByOuvrirAnonymatEnLigne(string $ouvrir_anonymat_en_ligne) Return the first CommonHabilitationAgent filtered by the ouvrir_anonymat_en_ligne column
 * @method CommonHabilitationAgent findOneByOuvrirOffreEnLigne(string $ouvrir_offre_en_ligne) Return the first CommonHabilitationAgent filtered by the ouvrir_offre_en_ligne column
 * @method CommonHabilitationAgent findOneByGestionCompteBoamp(string $gestion_compte_boamp) Return the first CommonHabilitationAgent filtered by the gestion_compte_boamp column
 * @method CommonHabilitationAgent findOneByGestionAgents(string $gestion_agents) Return the first CommonHabilitationAgent filtered by the gestion_agents column
 * @method CommonHabilitationAgent findOneByGestionHabilitations(string $gestion_habilitations) Return the first CommonHabilitationAgent filtered by the gestion_habilitations column
 * @method CommonHabilitationAgent findOneByGererMapaInferieurMontant(string $gerer_mapa_inferieur_montant) Return the first CommonHabilitationAgent filtered by the gerer_mapa_inferieur_montant column
 * @method CommonHabilitationAgent findOneByGererMapaSuperieurMontant(string $gerer_mapa_superieur_montant) Return the first CommonHabilitationAgent filtered by the gerer_mapa_superieur_montant column
 * @method CommonHabilitationAgent findOneByModifierConsultationAvantValidation(string $modifier_consultation_avant_validation) Return the first CommonHabilitationAgent filtered by the modifier_consultation_avant_validation column
 * @method CommonHabilitationAgent findOneByModifierConsultationApresValidation(string $modifier_consultation_apres_validation) Return the first CommonHabilitationAgent filtered by the modifier_consultation_apres_validation column
 * @method CommonHabilitationAgent findOneByAccesReponses(string $acces_reponses) Return the first CommonHabilitationAgent filtered by the acces_reponses column
 * @method CommonHabilitationAgent findOneByTelechargementGroupeAnticipePlisChiffres(string $telechargement_groupe_anticipe_plis_chiffres) Return the first CommonHabilitationAgent filtered by the telechargement_groupe_anticipe_plis_chiffres column
 * @method CommonHabilitationAgent findOneByTelechargementUnitairePlisChiffres(string $telechargement_unitaire_plis_chiffres) Return the first CommonHabilitationAgent filtered by the telechargement_unitaire_plis_chiffres column
 * @method CommonHabilitationAgent findOneByOuvrirOffreADistance(string $ouvrir_offre_a_distance) Return the first CommonHabilitationAgent filtered by the ouvrir_offre_a_distance column
 * @method CommonHabilitationAgent findOneByCreerAnnonceInformation(string $creer_annonce_information) Return the first CommonHabilitationAgent filtered by the creer_annonce_information column
 * @method CommonHabilitationAgent findOneBySaisieMarches(string $saisie_marches) Return the first CommonHabilitationAgent filtered by the saisie_marches column
 * @method CommonHabilitationAgent findOneByValidationMarches(string $validation_marches) Return the first CommonHabilitationAgent filtered by the validation_marches column
 * @method CommonHabilitationAgent findOneByPublicationMarches(string $publication_marches) Return the first CommonHabilitationAgent filtered by the publication_marches column
 * @method CommonHabilitationAgent findOneByGererStatistiquesMetier(string $gerer_statistiques_metier) Return the first CommonHabilitationAgent filtered by the gerer_statistiques_metier column
 * @method CommonHabilitationAgent findOneByGererArchives(string $gerer_archives) Return the first CommonHabilitationAgent filtered by the gerer_archives column
 * @method CommonHabilitationAgent findOneByAdministrerProceduresFormalisees(string $administrer_procedures_formalisees) Return the first CommonHabilitationAgent filtered by the administrer_procedures_formalisees column
 * @method CommonHabilitationAgent findOneByCreerAnnonceAttribution(string $creer_annonce_attribution) Return the first CommonHabilitationAgent filtered by the creer_annonce_attribution column
 * @method CommonHabilitationAgent findOneByAccesRegistreRetraitsElectronique(string $acces_registre_retraits_electronique) Return the first CommonHabilitationAgent filtered by the acces_registre_retraits_electronique column
 * @method CommonHabilitationAgent findOneByAccesRegistreQuestionsElectronique(string $acces_registre_questions_electronique) Return the first CommonHabilitationAgent filtered by the acces_registre_questions_electronique column
 * @method CommonHabilitationAgent findOneByAccesRegistreDepotsElectronique(string $acces_registre_depots_electronique) Return the first CommonHabilitationAgent filtered by the acces_registre_depots_electronique column
 * @method CommonHabilitationAgent findOneByValidationSimple(string $validation_simple) Return the first CommonHabilitationAgent filtered by the validation_simple column
 * @method CommonHabilitationAgent findOneByValidationIntermediaire(string $validation_intermediaire) Return the first CommonHabilitationAgent filtered by the validation_intermediaire column
 * @method CommonHabilitationAgent findOneByValidationFinale(string $validation_finale) Return the first CommonHabilitationAgent filtered by the validation_finale column
 * @method CommonHabilitationAgent findOneByCreerSuiteConsultation(string $creer_suite_consultation) Return the first CommonHabilitationAgent filtered by the creer_suite_consultation column
 * @method CommonHabilitationAgent findOneByHyperAdmin(string $hyper_admin) Return the first CommonHabilitationAgent filtered by the hyper_admin column
 * @method CommonHabilitationAgent findOneByDroitGestionServices(string $droit_gestion_services) Return the first CommonHabilitationAgent filtered by the droit_gestion_services column
 * @method CommonHabilitationAgent findOneBySuiviAcces(string $suivi_acces) Return the first CommonHabilitationAgent filtered by the suivi_acces column
 * @method CommonHabilitationAgent findOneByStatistiquesSite(string $statistiques_site) Return the first CommonHabilitationAgent filtered by the statistiques_site column
 * @method CommonHabilitationAgent findOneByStatistiquesQos(string $statistiques_QoS) Return the first CommonHabilitationAgent filtered by the statistiques_QoS column
 * @method CommonHabilitationAgent findOneByOuvrirAnonymatADistance(string $ouvrir_anonymat_a_distance) Return the first CommonHabilitationAgent filtered by the ouvrir_anonymat_a_distance column
 * @method CommonHabilitationAgent findOneByGestionCompteJal(string $gestion_compte_jal) Return the first CommonHabilitationAgent filtered by the gestion_compte_jal column
 * @method CommonHabilitationAgent findOneByGestionCentralePub(string $gestion_centrale_pub) Return the first CommonHabilitationAgent filtered by the gestion_centrale_pub column
 * @method CommonHabilitationAgent findOneByGestionCompteGroupeMoniteur(string $Gestion_Compte_Groupe_Moniteur) Return the first CommonHabilitationAgent filtered by the Gestion_Compte_Groupe_Moniteur column
 * @method CommonHabilitationAgent findOneByOuvrirOffreTechniqueEnLigne(string $ouvrir_offre_technique_en_ligne) Return the first CommonHabilitationAgent filtered by the ouvrir_offre_technique_en_ligne column
 * @method CommonHabilitationAgent findOneByOuvrirOffreTechniqueADistance(string $ouvrir_offre_technique_a_distance) Return the first CommonHabilitationAgent filtered by the ouvrir_offre_technique_a_distance column
 * @method CommonHabilitationAgent findOneByActivationCompteEntreprise(string $activation_compte_entreprise) Return the first CommonHabilitationAgent filtered by the activation_compte_entreprise column
 * @method CommonHabilitationAgent findOneByImporterEnveloppe(string $importer_enveloppe) Return the first CommonHabilitationAgent filtered by the importer_enveloppe column
 * @method CommonHabilitationAgent findOneBySuiviSeulRegistreDepotsPapier(string $suivi_seul_registre_depots_papier) Return the first CommonHabilitationAgent filtered by the suivi_seul_registre_depots_papier column
 * @method CommonHabilitationAgent findOneBySuiviSeulRegistreRetraitsPapier(string $suivi_seul_registre_retraits_papier) Return the first CommonHabilitationAgent filtered by the suivi_seul_registre_retraits_papier column
 * @method CommonHabilitationAgent findOneBySuiviSeulRegistreQuestionsPapier(string $suivi_seul_registre_questions_papier) Return the first CommonHabilitationAgent filtered by the suivi_seul_registre_questions_papier column
 * @method CommonHabilitationAgent findOneBySuiviSeulRegistreDepotsElectronique(string $suivi_seul_registre_depots_electronique) Return the first CommonHabilitationAgent filtered by the suivi_seul_registre_depots_electronique column
 * @method CommonHabilitationAgent findOneBySuiviSeulRegistreRetraitsElectronique(string $suivi_seul_registre_retraits_electronique) Return the first CommonHabilitationAgent filtered by the suivi_seul_registre_retraits_electronique column
 * @method CommonHabilitationAgent findOneBySuiviSeulRegistreQuestionsElectronique(string $suivi_seul_registre_questions_electronique) Return the first CommonHabilitationAgent filtered by the suivi_seul_registre_questions_electronique column
 * @method CommonHabilitationAgent findOneByModifierConsultationMapaInferieurMontantApresValidation(string $modifier_consultation_mapa_inferieur_montant_apres_validation) Return the first CommonHabilitationAgent filtered by the modifier_consultation_mapa_inferieur_montant_apres_validation column
 * @method CommonHabilitationAgent findOneByModifierConsultationMapaSuperieurMontantApresValidation(string $modifier_consultation_mapa_superieur_montant_apres_validation) Return the first CommonHabilitationAgent filtered by the modifier_consultation_mapa_superieur_montant_apres_validation column
 * @method CommonHabilitationAgent findOneByModifierConsultationProceduresFormaliseesApresValidation(string $modifier_consultation_procedures_formalisees_apres_validation) Return the first CommonHabilitationAgent filtered by the modifier_consultation_procedures_formalisees_apres_validation column
 * @method CommonHabilitationAgent findOneByGererLesEntreprises(string $gerer_les_entreprises) Return the first CommonHabilitationAgent filtered by the gerer_les_entreprises column
 * @method CommonHabilitationAgent findOneByPorteeSocietesExclues(string $portee_societes_exclues) Return the first CommonHabilitationAgent filtered by the portee_societes_exclues column
 * @method CommonHabilitationAgent findOneByPorteeSocietesExcluesTousOrganismes(string $portee_societes_exclues_tous_organismes) Return the first CommonHabilitationAgent filtered by the portee_societes_exclues_tous_organismes column
 * @method CommonHabilitationAgent findOneByModifierSocietesExclues(string $modifier_societes_exclues) Return the first CommonHabilitationAgent filtered by the modifier_societes_exclues column
 * @method CommonHabilitationAgent findOneBySupprimerSocietesExclues(string $supprimer_societes_exclues) Return the first CommonHabilitationAgent filtered by the supprimer_societes_exclues column
 * @method CommonHabilitationAgent findOneByResultatAnalyse(string $resultat_analyse) Return the first CommonHabilitationAgent filtered by the resultat_analyse column
 * @method CommonHabilitationAgent findOneByGererAdressesService(string $gerer_adresses_service) Return the first CommonHabilitationAgent filtered by the gerer_adresses_service column
 * @method CommonHabilitationAgent findOneByGererMonService(string $gerer_mon_service) Return the first CommonHabilitationAgent filtered by the gerer_mon_service column
 * @method CommonHabilitationAgent findOneByDownloadArchives(string $download_archives) Return the first CommonHabilitationAgent filtered by the download_archives column
 * @method CommonHabilitationAgent findOneByCreerAnnonceExtraitPv(string $creer_annonce_extrait_pv) Return the first CommonHabilitationAgent filtered by the creer_annonce_extrait_pv column
 * @method CommonHabilitationAgent findOneByCreerAnnonceRapportAchevement(string $creer_annonce_rapport_achevement) Return the first CommonHabilitationAgent filtered by the creer_annonce_rapport_achevement column
 * @method CommonHabilitationAgent findOneByGestionCertificatsAgent(string $gestion_certificats_agent) Return the first CommonHabilitationAgent filtered by the gestion_certificats_agent column
 * @method CommonHabilitationAgent findOneByCreerAvisProgrammePrevisionnel(string $creer_avis_programme_previsionnel) Return the first CommonHabilitationAgent filtered by the creer_avis_programme_previsionnel column
 * @method CommonHabilitationAgent findOneByAnnulerConsultation(string $annuler_consultation) Return the first CommonHabilitationAgent filtered by the annuler_consultation column
 * @method CommonHabilitationAgent findOneByEnvoyerPublicite(string $envoyer_publicite) Return the first CommonHabilitationAgent filtered by the envoyer_publicite column
 * @method CommonHabilitationAgent findOneByListeMarchesNotifies(string $liste_marches_notifies) Return the first CommonHabilitationAgent filtered by the liste_marches_notifies column
 * @method CommonHabilitationAgent findOneBySuivreMessage(string $suivre_message) Return the first CommonHabilitationAgent filtered by the suivre_message column
 * @method CommonHabilitationAgent findOneByEnvoyerMessage(string $envoyer_message) Return the first CommonHabilitationAgent filtered by the envoyer_message column
 * @method CommonHabilitationAgent findOneBySuiviFluxChorusTransversal(string $suivi_flux_chorus_transversal) Return the first CommonHabilitationAgent filtered by the suivi_flux_chorus_transversal column
 * @method CommonHabilitationAgent findOneByGestionMandataire(string $gestion_mandataire) Return the first CommonHabilitationAgent filtered by the gestion_mandataire column
 * @method CommonHabilitationAgent findOneByGererNewsletter(string $gerer_newsletter) Return the first CommonHabilitationAgent filtered by the gerer_newsletter column
 * @method CommonHabilitationAgent findOneByGestionModelesFormulaire(string $gestion_modeles_formulaire) Return the first CommonHabilitationAgent filtered by the gestion_modeles_formulaire column
 * @method CommonHabilitationAgent findOneByGestionAdressesFacturationJal(string $gestion_adresses_facturation_jal) Return the first CommonHabilitationAgent filtered by the gestion_adresses_facturation_jal column
 * @method CommonHabilitationAgent findOneByAdministrerAdressesFacturationJal(string $administrer_adresses_facturation_jal) Return the first CommonHabilitationAgent filtered by the administrer_adresses_facturation_jal column
 * @method CommonHabilitationAgent findOneByRedactionDocumentsRedac(string $redaction_documents_redac) Return the first CommonHabilitationAgent filtered by the redaction_documents_redac column
 * @method CommonHabilitationAgent findOneByValidationDocumentsRedac(string $validation_documents_redac) Return the first CommonHabilitationAgent filtered by the validation_documents_redac column
 * @method CommonHabilitationAgent findOneByGestionMiseDispositionPiecesMarche(string $gestion_mise_disposition_pieces_marche) Return the first CommonHabilitationAgent filtered by the gestion_mise_disposition_pieces_marche column
 * @method CommonHabilitationAgent findOneByAnnuaireAcheteur(string $annuaire_acheteur) Return the first CommonHabilitationAgent filtered by the annuaire_acheteur column
 * @method CommonHabilitationAgent findOneByReprendreIntegralementArticle(string $reprendre_integralement_article) Return the first CommonHabilitationAgent filtered by the reprendre_integralement_article column
 * @method CommonHabilitationAgent findOneByAdministrerClauses(string $administrer_clauses) Return the first CommonHabilitationAgent filtered by the administrer_clauses column
 * @method CommonHabilitationAgent findOneByValiderClauses(string $valider_clauses) Return the first CommonHabilitationAgent filtered by the valider_clauses column
 * @method CommonHabilitationAgent findOneByAdministrerCanevas(string $administrer_canevas) Return the first CommonHabilitationAgent filtered by the administrer_canevas column
 * @method CommonHabilitationAgent findOneByValiderCanevas(string $valider_canevas) Return the first CommonHabilitationAgent filtered by the valider_canevas column
 * @method CommonHabilitationAgent findOneByAdministrerClausesEntiteAchats(string $administrer_clauses_entite_achats) Return the first CommonHabilitationAgent filtered by the administrer_clauses_entite_achats column
 * @method CommonHabilitationAgent findOneByGenererPiecesFormatOdt(string $generer_pieces_format_odt) Return the first CommonHabilitationAgent filtered by the generer_pieces_format_odt column
 * @method CommonHabilitationAgent findOneByPublierVersionClausierEditeur(string $publier_version_clausier_editeur) Return the first CommonHabilitationAgent filtered by the publier_version_clausier_editeur column
 * @method CommonHabilitationAgent findOneByAdministrerClausesEditeur(string $administrer_clauses_editeur) Return the first CommonHabilitationAgent filtered by the administrer_clauses_editeur column
 * @method CommonHabilitationAgent findOneByValiderClausesEditeur(string $valider_clauses_editeur) Return the first CommonHabilitationAgent filtered by the valider_clauses_editeur column
 * @method CommonHabilitationAgent findOneByAdministrerCanevasEditeur(string $administrer_canevas_editeur) Return the first CommonHabilitationAgent filtered by the administrer_canevas_editeur column
 * @method CommonHabilitationAgent findOneByValiderCanevasEditeur(string $valider_canevas_editeur) Return the first CommonHabilitationAgent filtered by the valider_canevas_editeur column
 * @method CommonHabilitationAgent findOneByDecisionSuiviSeul(string $decision_suivi_seul) Return the first CommonHabilitationAgent filtered by the decision_suivi_seul column
 * @method CommonHabilitationAgent findOneByOuvrirCandidatureHorsLigne(string $ouvrir_candidature_hors_ligne) Return the first CommonHabilitationAgent filtered by the ouvrir_candidature_hors_ligne column
 * @method CommonHabilitationAgent findOneByOuvrirOffreHorsLigne(string $ouvrir_offre_hors_ligne) Return the first CommonHabilitationAgent filtered by the ouvrir_offre_hors_ligne column
 * @method CommonHabilitationAgent findOneByOuvrirOffreTechniqueHorsLigne(string $ouvrir_offre_technique_hors_ligne) Return the first CommonHabilitationAgent filtered by the ouvrir_offre_technique_hors_ligne column
 * @method CommonHabilitationAgent findOneByOuvrirAnonymatHorsLigne(string $ouvrir_anonymat_hors_ligne) Return the first CommonHabilitationAgent filtered by the ouvrir_anonymat_hors_ligne column
 * @method CommonHabilitationAgent findOneByEspaceCollaboratifGestionnaire(string $espace_collaboratif_gestionnaire) Return the first CommonHabilitationAgent filtered by the espace_collaboratif_gestionnaire column
 * @method CommonHabilitationAgent findOneByEspaceCollaboratifContributeur(string $espace_collaboratif_contributeur) Return the first CommonHabilitationAgent filtered by the espace_collaboratif_contributeur column
 * @method CommonHabilitationAgent findOneByGererOrganismes(string $gerer_organismes) Return the first CommonHabilitationAgent filtered by the gerer_organismes column
 * @method CommonHabilitationAgent findOneByGererAssociationsAgents(string $gerer_associations_agents) Return the first CommonHabilitationAgent filtered by the gerer_associations_agents column
 * @method CommonHabilitationAgent findOneByModuleRedactionUniquement(string $module_redaction_uniquement) Return the first CommonHabilitationAgent filtered by the module_redaction_uniquement column
 * @method CommonHabilitationAgent findOneByHistoriqueNavigationInscrits(string $historique_navigation_inscrits) Return the first CommonHabilitationAgent filtered by the historique_navigation_inscrits column
 * @method CommonHabilitationAgent findOneByTelechargerAccordsCadres(string $telecharger_accords_cadres) Return the first CommonHabilitationAgent filtered by the telecharger_accords_cadres column
 * @method CommonHabilitationAgent findOneByCreerAnnonceDecisionResiliation(string $creer_annonce_decision_resiliation) Return the first CommonHabilitationAgent filtered by the creer_annonce_decision_resiliation column
 * @method CommonHabilitationAgent findOneByCreerAnnonceSyntheseRapportAudit(string $creer_annonce_synthese_rapport_audit) Return the first CommonHabilitationAgent filtered by the creer_annonce_synthese_rapport_audit column
 * @method CommonHabilitationAgent findOneByGererOperations(string $gerer_operations) Return the first CommonHabilitationAgent filtered by the gerer_operations column
 * @method CommonHabilitationAgent findOneByTelechargerSiretAcheteur(string $telecharger_siret_acheteur) Return the first CommonHabilitationAgent filtered by the telecharger_siret_acheteur column
 * @method CommonHabilitationAgent findOneByGererReouverturesModification(string $gerer_reouvertures_modification) Return the first CommonHabilitationAgent filtered by the gerer_reouvertures_modification column
 * @method CommonHabilitationAgent findOneByEnvoyerDemandeValidation(string $envoyer_demande_validation) Return the first CommonHabilitationAgent filtered by the envoyer_demande_validation column
 * @method CommonHabilitationAgent findOneBySuivreConsultationOrganisme(string $suivre_consultation_organisme) Return the first CommonHabilitationAgent filtered by the suivre_consultation_organisme column
 * @method CommonHabilitationAgent findOneByRenseignerMontant(string $renseigner_montant) Return the first CommonHabilitationAgent filtered by the renseigner_montant column
 * @method CommonHabilitationAgent findOneByGestionReferentielContact(string $gestion_referentiel_contact) Return the first CommonHabilitationAgent filtered by the gestion_referentiel_contact column
 * @method CommonHabilitationAgent findOneByGererCao(string $gerer_cao) Return the first CommonHabilitationAgent filtered by the gerer_cao column
 * @method CommonHabilitationAgent findOneByValidationAccesFacture(string $validation_acces_facture) Return the first CommonHabilitationAgent filtered by the validation_acces_facture column
 * @method CommonHabilitationAgent findOneByGestionTravauxCao(string $gestion_travaux_cao) Return the first CommonHabilitationAgent filtered by the gestion_travaux_cao column
 *
 * @method array findByIdAgent(int $id_agent) Return CommonHabilitationAgent objects filtered by the id_agent column
 * @method array findByGestionAgentPole(string $gestion_agent_pole) Return CommonHabilitationAgent objects filtered by the gestion_agent_pole column
 * @method array findByGestionFournisseursEnvoisPostaux(string $gestion_fournisseurs_envois_postaux) Return CommonHabilitationAgent objects filtered by the gestion_fournisseurs_envois_postaux column
 * @method array findByGestionBiCles(string $gestion_bi_cles) Return CommonHabilitationAgent objects filtered by the gestion_bi_cles column
 * @method array findByCreerConsultation(string $creer_consultation) Return CommonHabilitationAgent objects filtered by the creer_consultation column
 * @method array findByModifierConsultation(string $modifier_consultation) Return CommonHabilitationAgent objects filtered by the modifier_consultation column
 * @method array findByValiderConsultation(string $valider_consultation) Return CommonHabilitationAgent objects filtered by the valider_consultation column
 * @method array findByPublierConsultation(string $publier_consultation) Return CommonHabilitationAgent objects filtered by the publier_consultation column
 * @method array findBySuivreConsultation(string $suivre_consultation) Return CommonHabilitationAgent objects filtered by the suivre_consultation column
 * @method array findBySuivreConsultationPole(string $suivre_consultation_pole) Return CommonHabilitationAgent objects filtered by the suivre_consultation_pole column
 * @method array findBySupprimerEnveloppe(string $supprimer_enveloppe) Return CommonHabilitationAgent objects filtered by the supprimer_enveloppe column
 * @method array findBySupprimerConsultation(string $supprimer_consultation) Return CommonHabilitationAgent objects filtered by the supprimer_consultation column
 * @method array findByDepouillerCandidature(string $depouiller_candidature) Return CommonHabilitationAgent objects filtered by the depouiller_candidature column
 * @method array findByDepouillerOffre(string $depouiller_offre) Return CommonHabilitationAgent objects filtered by the depouiller_offre column
 * @method array findByMessagerieSecurisee(string $messagerie_securisee) Return CommonHabilitationAgent objects filtered by the messagerie_securisee column
 * @method array findByAccesRegistreDepotsPapier(string $acces_registre_depots_papier) Return CommonHabilitationAgent objects filtered by the acces_registre_depots_papier column
 * @method array findByAccesRegistreRetraitsPapier(string $acces_registre_retraits_papier) Return CommonHabilitationAgent objects filtered by the acces_registre_retraits_papier column
 * @method array findByAccesRegistreQuestionsPapier(string $acces_registre_questions_papier) Return CommonHabilitationAgent objects filtered by the acces_registre_questions_papier column
 * @method array findByGererEncheres(string $gerer_encheres) Return CommonHabilitationAgent objects filtered by the gerer_encheres column
 * @method array findBySuivreEncheres(string $suivre_encheres) Return CommonHabilitationAgent objects filtered by the suivre_encheres column
 * @method array findBySuiviEntreprise(string $suivi_entreprise) Return CommonHabilitationAgent objects filtered by the suivi_entreprise column
 * @method array findByEnvoiBoamp(string $envoi_boamp) Return CommonHabilitationAgent objects filtered by the envoi_boamp column
 * @method array findByAccesClassementLot(string $acces_classement_lot) Return CommonHabilitationAgent objects filtered by the acces_classement_lot column
 * @method array findByConnecteurSis(string $connecteur_sis) Return CommonHabilitationAgent objects filtered by the connecteur_sis column
 * @method array findByConnecteurMarco(string $connecteur_marco) Return CommonHabilitationAgent objects filtered by the connecteur_marco column
 * @method array findByRepondreAuxQuestions(string $repondre_aux_questions) Return CommonHabilitationAgent objects filtered by the repondre_aux_questions column
 * @method array findByAppelProjetFormation(string $appel_projet_formation) Return CommonHabilitationAgent objects filtered by the appel_projet_formation column
 * @method array findByUtiliserClientCao(string $utiliser_client_CAO) Return CommonHabilitationAgent objects filtered by the utiliser_client_CAO column
 * @method array findByNotificationBoamp(string $notification_boamp) Return CommonHabilitationAgent objects filtered by the notification_boamp column
 * @method array findByAdministrerCompte(string $administrer_compte) Return CommonHabilitationAgent objects filtered by the administrer_compte column
 * @method array findByGestionMapa(string $gestion_mapa) Return CommonHabilitationAgent objects filtered by the gestion_mapa column
 * @method array findByGestionTypeValidation(string $gestion_type_validation) Return CommonHabilitationAgent objects filtered by the gestion_type_validation column
 * @method array findByApprouverConsultation(string $approuver_consultation) Return CommonHabilitationAgent objects filtered by the approuver_consultation column
 * @method array findByAdministrerProcedure(string $administrer_procedure) Return CommonHabilitationAgent objects filtered by the administrer_procedure column
 * @method array findByRestreindreCreation(string $restreindre_creation) Return CommonHabilitationAgent objects filtered by the restreindre_creation column
 * @method array findByCreerListeMarches(string $creer_liste_marches) Return CommonHabilitationAgent objects filtered by the creer_liste_marches column
 * @method array findByGestionCommissions(string $gestion_commissions) Return CommonHabilitationAgent objects filtered by the gestion_commissions column
 * @method array findBySuiviSeulConsultation(string $suivi_seul_consultation) Return CommonHabilitationAgent objects filtered by the suivi_seul_consultation column
 * @method array findByAttributionMarche(string $attribution_marche) Return CommonHabilitationAgent objects filtered by the attribution_marche column
 * @method array findByFicheRecensement(string $fiche_recensement) Return CommonHabilitationAgent objects filtered by the fiche_recensement column
 * @method array findByDeclarerInfructueux(string $declarer_infructueux) Return CommonHabilitationAgent objects filtered by the declarer_infructueux column
 * @method array findByDeclarerSansSuite(string $declarer_sans_suite) Return CommonHabilitationAgent objects filtered by the declarer_sans_suite column
 * @method array findByCreerConsultationTransverse(string $creer_consultation_transverse) Return CommonHabilitationAgent objects filtered by the creer_consultation_transverse column
 * @method array findByOuvrirCandidatureEnLigne(string $ouvrir_candidature_en_ligne) Return CommonHabilitationAgent objects filtered by the ouvrir_candidature_en_ligne column
 * @method array findByOuvrirCandidatureADistance(string $ouvrir_candidature_a_distance) Return CommonHabilitationAgent objects filtered by the ouvrir_candidature_a_distance column
 * @method array findByRefuserEnveloppe(string $refuser_enveloppe) Return CommonHabilitationAgent objects filtered by the refuser_enveloppe column
 * @method array findByGererAdmissibilite(string $gerer_admissibilite) Return CommonHabilitationAgent objects filtered by the gerer_admissibilite column
 * @method array findByRestaurerEnveloppe(string $restaurer_enveloppe) Return CommonHabilitationAgent objects filtered by the restaurer_enveloppe column
 * @method array findByOuvrirAnonymatEnLigne(string $ouvrir_anonymat_en_ligne) Return CommonHabilitationAgent objects filtered by the ouvrir_anonymat_en_ligne column
 * @method array findByOuvrirOffreEnLigne(string $ouvrir_offre_en_ligne) Return CommonHabilitationAgent objects filtered by the ouvrir_offre_en_ligne column
 * @method array findByGestionCompteBoamp(string $gestion_compte_boamp) Return CommonHabilitationAgent objects filtered by the gestion_compte_boamp column
 * @method array findByGestionAgents(string $gestion_agents) Return CommonHabilitationAgent objects filtered by the gestion_agents column
 * @method array findByGestionHabilitations(string $gestion_habilitations) Return CommonHabilitationAgent objects filtered by the gestion_habilitations column
 * @method array findByGererMapaInferieurMontant(string $gerer_mapa_inferieur_montant) Return CommonHabilitationAgent objects filtered by the gerer_mapa_inferieur_montant column
 * @method array findByGererMapaSuperieurMontant(string $gerer_mapa_superieur_montant) Return CommonHabilitationAgent objects filtered by the gerer_mapa_superieur_montant column
 * @method array findByModifierConsultationAvantValidation(string $modifier_consultation_avant_validation) Return CommonHabilitationAgent objects filtered by the modifier_consultation_avant_validation column
 * @method array findByModifierConsultationApresValidation(string $modifier_consultation_apres_validation) Return CommonHabilitationAgent objects filtered by the modifier_consultation_apres_validation column
 * @method array findByAccesReponses(string $acces_reponses) Return CommonHabilitationAgent objects filtered by the acces_reponses column
 * @method array findByTelechargementGroupeAnticipePlisChiffres(string $telechargement_groupe_anticipe_plis_chiffres) Return CommonHabilitationAgent objects filtered by the telechargement_groupe_anticipe_plis_chiffres column
 * @method array findByTelechargementUnitairePlisChiffres(string $telechargement_unitaire_plis_chiffres) Return CommonHabilitationAgent objects filtered by the telechargement_unitaire_plis_chiffres column
 * @method array findByOuvrirOffreADistance(string $ouvrir_offre_a_distance) Return CommonHabilitationAgent objects filtered by the ouvrir_offre_a_distance column
 * @method array findByCreerAnnonceInformation(string $creer_annonce_information) Return CommonHabilitationAgent objects filtered by the creer_annonce_information column
 * @method array findBySaisieMarches(string $saisie_marches) Return CommonHabilitationAgent objects filtered by the saisie_marches column
 * @method array findByValidationMarches(string $validation_marches) Return CommonHabilitationAgent objects filtered by the validation_marches column
 * @method array findByPublicationMarches(string $publication_marches) Return CommonHabilitationAgent objects filtered by the publication_marches column
 * @method array findByGererStatistiquesMetier(string $gerer_statistiques_metier) Return CommonHabilitationAgent objects filtered by the gerer_statistiques_metier column
 * @method array findByGererArchives(string $gerer_archives) Return CommonHabilitationAgent objects filtered by the gerer_archives column
 * @method array findByAdministrerProceduresFormalisees(string $administrer_procedures_formalisees) Return CommonHabilitationAgent objects filtered by the administrer_procedures_formalisees column
 * @method array findByCreerAnnonceAttribution(string $creer_annonce_attribution) Return CommonHabilitationAgent objects filtered by the creer_annonce_attribution column
 * @method array findByAccesRegistreRetraitsElectronique(string $acces_registre_retraits_electronique) Return CommonHabilitationAgent objects filtered by the acces_registre_retraits_electronique column
 * @method array findByAccesRegistreQuestionsElectronique(string $acces_registre_questions_electronique) Return CommonHabilitationAgent objects filtered by the acces_registre_questions_electronique column
 * @method array findByAccesRegistreDepotsElectronique(string $acces_registre_depots_electronique) Return CommonHabilitationAgent objects filtered by the acces_registre_depots_electronique column
 * @method array findByValidationSimple(string $validation_simple) Return CommonHabilitationAgent objects filtered by the validation_simple column
 * @method array findByValidationIntermediaire(string $validation_intermediaire) Return CommonHabilitationAgent objects filtered by the validation_intermediaire column
 * @method array findByValidationFinale(string $validation_finale) Return CommonHabilitationAgent objects filtered by the validation_finale column
 * @method array findByCreerSuiteConsultation(string $creer_suite_consultation) Return CommonHabilitationAgent objects filtered by the creer_suite_consultation column
 * @method array findByHyperAdmin(string $hyper_admin) Return CommonHabilitationAgent objects filtered by the hyper_admin column
 * @method array findByDroitGestionServices(string $droit_gestion_services) Return CommonHabilitationAgent objects filtered by the droit_gestion_services column
 * @method array findBySuiviAcces(string $suivi_acces) Return CommonHabilitationAgent objects filtered by the suivi_acces column
 * @method array findByStatistiquesSite(string $statistiques_site) Return CommonHabilitationAgent objects filtered by the statistiques_site column
 * @method array findByStatistiquesQos(string $statistiques_QoS) Return CommonHabilitationAgent objects filtered by the statistiques_QoS column
 * @method array findByOuvrirAnonymatADistance(string $ouvrir_anonymat_a_distance) Return CommonHabilitationAgent objects filtered by the ouvrir_anonymat_a_distance column
 * @method array findByGestionCompteJal(string $gestion_compte_jal) Return CommonHabilitationAgent objects filtered by the gestion_compte_jal column
 * @method array findByGestionCentralePub(string $gestion_centrale_pub) Return CommonHabilitationAgent objects filtered by the gestion_centrale_pub column
 * @method array findByGestionCompteGroupeMoniteur(string $Gestion_Compte_Groupe_Moniteur) Return CommonHabilitationAgent objects filtered by the Gestion_Compte_Groupe_Moniteur column
 * @method array findByOuvrirOffreTechniqueEnLigne(string $ouvrir_offre_technique_en_ligne) Return CommonHabilitationAgent objects filtered by the ouvrir_offre_technique_en_ligne column
 * @method array findByOuvrirOffreTechniqueADistance(string $ouvrir_offre_technique_a_distance) Return CommonHabilitationAgent objects filtered by the ouvrir_offre_technique_a_distance column
 * @method array findByActivationCompteEntreprise(string $activation_compte_entreprise) Return CommonHabilitationAgent objects filtered by the activation_compte_entreprise column
 * @method array findByImporterEnveloppe(string $importer_enveloppe) Return CommonHabilitationAgent objects filtered by the importer_enveloppe column
 * @method array findBySuiviSeulRegistreDepotsPapier(string $suivi_seul_registre_depots_papier) Return CommonHabilitationAgent objects filtered by the suivi_seul_registre_depots_papier column
 * @method array findBySuiviSeulRegistreRetraitsPapier(string $suivi_seul_registre_retraits_papier) Return CommonHabilitationAgent objects filtered by the suivi_seul_registre_retraits_papier column
 * @method array findBySuiviSeulRegistreQuestionsPapier(string $suivi_seul_registre_questions_papier) Return CommonHabilitationAgent objects filtered by the suivi_seul_registre_questions_papier column
 * @method array findBySuiviSeulRegistreDepotsElectronique(string $suivi_seul_registre_depots_electronique) Return CommonHabilitationAgent objects filtered by the suivi_seul_registre_depots_electronique column
 * @method array findBySuiviSeulRegistreRetraitsElectronique(string $suivi_seul_registre_retraits_electronique) Return CommonHabilitationAgent objects filtered by the suivi_seul_registre_retraits_electronique column
 * @method array findBySuiviSeulRegistreQuestionsElectronique(string $suivi_seul_registre_questions_electronique) Return CommonHabilitationAgent objects filtered by the suivi_seul_registre_questions_electronique column
 * @method array findByModifierConsultationMapaInferieurMontantApresValidation(string $modifier_consultation_mapa_inferieur_montant_apres_validation) Return CommonHabilitationAgent objects filtered by the modifier_consultation_mapa_inferieur_montant_apres_validation column
 * @method array findByModifierConsultationMapaSuperieurMontantApresValidation(string $modifier_consultation_mapa_superieur_montant_apres_validation) Return CommonHabilitationAgent objects filtered by the modifier_consultation_mapa_superieur_montant_apres_validation column
 * @method array findByModifierConsultationProceduresFormaliseesApresValidation(string $modifier_consultation_procedures_formalisees_apres_validation) Return CommonHabilitationAgent objects filtered by the modifier_consultation_procedures_formalisees_apres_validation column
 * @method array findByGererLesEntreprises(string $gerer_les_entreprises) Return CommonHabilitationAgent objects filtered by the gerer_les_entreprises column
 * @method array findByPorteeSocietesExclues(string $portee_societes_exclues) Return CommonHabilitationAgent objects filtered by the portee_societes_exclues column
 * @method array findByPorteeSocietesExcluesTousOrganismes(string $portee_societes_exclues_tous_organismes) Return CommonHabilitationAgent objects filtered by the portee_societes_exclues_tous_organismes column
 * @method array findByModifierSocietesExclues(string $modifier_societes_exclues) Return CommonHabilitationAgent objects filtered by the modifier_societes_exclues column
 * @method array findBySupprimerSocietesExclues(string $supprimer_societes_exclues) Return CommonHabilitationAgent objects filtered by the supprimer_societes_exclues column
 * @method array findByResultatAnalyse(string $resultat_analyse) Return CommonHabilitationAgent objects filtered by the resultat_analyse column
 * @method array findByGererAdressesService(string $gerer_adresses_service) Return CommonHabilitationAgent objects filtered by the gerer_adresses_service column
 * @method array findByGererMonService(string $gerer_mon_service) Return CommonHabilitationAgent objects filtered by the gerer_mon_service column
 * @method array findByDownloadArchives(string $download_archives) Return CommonHabilitationAgent objects filtered by the download_archives column
 * @method array findByCreerAnnonceExtraitPv(string $creer_annonce_extrait_pv) Return CommonHabilitationAgent objects filtered by the creer_annonce_extrait_pv column
 * @method array findByCreerAnnonceRapportAchevement(string $creer_annonce_rapport_achevement) Return CommonHabilitationAgent objects filtered by the creer_annonce_rapport_achevement column
 * @method array findByGestionCertificatsAgent(string $gestion_certificats_agent) Return CommonHabilitationAgent objects filtered by the gestion_certificats_agent column
 * @method array findByCreerAvisProgrammePrevisionnel(string $creer_avis_programme_previsionnel) Return CommonHabilitationAgent objects filtered by the creer_avis_programme_previsionnel column
 * @method array findByAnnulerConsultation(string $annuler_consultation) Return CommonHabilitationAgent objects filtered by the annuler_consultation column
 * @method array findByEnvoyerPublicite(string $envoyer_publicite) Return CommonHabilitationAgent objects filtered by the envoyer_publicite column
 * @method array findByListeMarchesNotifies(string $liste_marches_notifies) Return CommonHabilitationAgent objects filtered by the liste_marches_notifies column
 * @method array findBySuivreMessage(string $suivre_message) Return CommonHabilitationAgent objects filtered by the suivre_message column
 * @method array findByEnvoyerMessage(string $envoyer_message) Return CommonHabilitationAgent objects filtered by the envoyer_message column
 * @method array findBySuiviFluxChorusTransversal(string $suivi_flux_chorus_transversal) Return CommonHabilitationAgent objects filtered by the suivi_flux_chorus_transversal column
 * @method array findByGestionMandataire(string $gestion_mandataire) Return CommonHabilitationAgent objects filtered by the gestion_mandataire column
 * @method array findByGererNewsletter(string $gerer_newsletter) Return CommonHabilitationAgent objects filtered by the gerer_newsletter column
 * @method array findByGestionModelesFormulaire(string $gestion_modeles_formulaire) Return CommonHabilitationAgent objects filtered by the gestion_modeles_formulaire column
 * @method array findByGestionAdressesFacturationJal(string $gestion_adresses_facturation_jal) Return CommonHabilitationAgent objects filtered by the gestion_adresses_facturation_jal column
 * @method array findByAdministrerAdressesFacturationJal(string $administrer_adresses_facturation_jal) Return CommonHabilitationAgent objects filtered by the administrer_adresses_facturation_jal column
 * @method array findByRedactionDocumentsRedac(string $redaction_documents_redac) Return CommonHabilitationAgent objects filtered by the redaction_documents_redac column
 * @method array findByValidationDocumentsRedac(string $validation_documents_redac) Return CommonHabilitationAgent objects filtered by the validation_documents_redac column
 * @method array findByGestionMiseDispositionPiecesMarche(string $gestion_mise_disposition_pieces_marche) Return CommonHabilitationAgent objects filtered by the gestion_mise_disposition_pieces_marche column
 * @method array findByAnnuaireAcheteur(string $annuaire_acheteur) Return CommonHabilitationAgent objects filtered by the annuaire_acheteur column
 * @method array findByReprendreIntegralementArticle(string $reprendre_integralement_article) Return CommonHabilitationAgent objects filtered by the reprendre_integralement_article column
 * @method array findByAdministrerClauses(string $administrer_clauses) Return CommonHabilitationAgent objects filtered by the administrer_clauses column
 * @method array findByValiderClauses(string $valider_clauses) Return CommonHabilitationAgent objects filtered by the valider_clauses column
 * @method array findByAdministrerCanevas(string $administrer_canevas) Return CommonHabilitationAgent objects filtered by the administrer_canevas column
 * @method array findByValiderCanevas(string $valider_canevas) Return CommonHabilitationAgent objects filtered by the valider_canevas column
 * @method array findByAdministrerClausesEntiteAchats(string $administrer_clauses_entite_achats) Return CommonHabilitationAgent objects filtered by the administrer_clauses_entite_achats column
 * @method array findByGenererPiecesFormatOdt(string $generer_pieces_format_odt) Return CommonHabilitationAgent objects filtered by the generer_pieces_format_odt column
 * @method array findByPublierVersionClausierEditeur(string $publier_version_clausier_editeur) Return CommonHabilitationAgent objects filtered by the publier_version_clausier_editeur column
 * @method array findByAdministrerClausesEditeur(string $administrer_clauses_editeur) Return CommonHabilitationAgent objects filtered by the administrer_clauses_editeur column
 * @method array findByValiderClausesEditeur(string $valider_clauses_editeur) Return CommonHabilitationAgent objects filtered by the valider_clauses_editeur column
 * @method array findByAdministrerCanevasEditeur(string $administrer_canevas_editeur) Return CommonHabilitationAgent objects filtered by the administrer_canevas_editeur column
 * @method array findByValiderCanevasEditeur(string $valider_canevas_editeur) Return CommonHabilitationAgent objects filtered by the valider_canevas_editeur column
 * @method array findByDecisionSuiviSeul(string $decision_suivi_seul) Return CommonHabilitationAgent objects filtered by the decision_suivi_seul column
 * @method array findByOuvrirCandidatureHorsLigne(string $ouvrir_candidature_hors_ligne) Return CommonHabilitationAgent objects filtered by the ouvrir_candidature_hors_ligne column
 * @method array findByOuvrirOffreHorsLigne(string $ouvrir_offre_hors_ligne) Return CommonHabilitationAgent objects filtered by the ouvrir_offre_hors_ligne column
 * @method array findByOuvrirOffreTechniqueHorsLigne(string $ouvrir_offre_technique_hors_ligne) Return CommonHabilitationAgent objects filtered by the ouvrir_offre_technique_hors_ligne column
 * @method array findByOuvrirAnonymatHorsLigne(string $ouvrir_anonymat_hors_ligne) Return CommonHabilitationAgent objects filtered by the ouvrir_anonymat_hors_ligne column
 * @method array findByEspaceCollaboratifGestionnaire(string $espace_collaboratif_gestionnaire) Return CommonHabilitationAgent objects filtered by the espace_collaboratif_gestionnaire column
 * @method array findByEspaceCollaboratifContributeur(string $espace_collaboratif_contributeur) Return CommonHabilitationAgent objects filtered by the espace_collaboratif_contributeur column
 * @method array findByGererOrganismes(string $gerer_organismes) Return CommonHabilitationAgent objects filtered by the gerer_organismes column
 * @method array findByGererAssociationsAgents(string $gerer_associations_agents) Return CommonHabilitationAgent objects filtered by the gerer_associations_agents column
 * @method array findByModuleRedactionUniquement(string $module_redaction_uniquement) Return CommonHabilitationAgent objects filtered by the module_redaction_uniquement column
 * @method array findByHistoriqueNavigationInscrits(string $historique_navigation_inscrits) Return CommonHabilitationAgent objects filtered by the historique_navigation_inscrits column
 * @method array findByTelechargerAccordsCadres(string $telecharger_accords_cadres) Return CommonHabilitationAgent objects filtered by the telecharger_accords_cadres column
 * @method array findByCreerAnnonceDecisionResiliation(string $creer_annonce_decision_resiliation) Return CommonHabilitationAgent objects filtered by the creer_annonce_decision_resiliation column
 * @method array findByCreerAnnonceSyntheseRapportAudit(string $creer_annonce_synthese_rapport_audit) Return CommonHabilitationAgent objects filtered by the creer_annonce_synthese_rapport_audit column
 * @method array findByGererOperations(string $gerer_operations) Return CommonHabilitationAgent objects filtered by the gerer_operations column
 * @method array findByTelechargerSiretAcheteur(string $telecharger_siret_acheteur) Return CommonHabilitationAgent objects filtered by the telecharger_siret_acheteur column
 * @method array findByGererReouverturesModification(string $gerer_reouvertures_modification) Return CommonHabilitationAgent objects filtered by the gerer_reouvertures_modification column
 * @method array findByEnvoyerDemandeValidation(string $envoyer_demande_validation) Return CommonHabilitationAgent objects filtered by the envoyer_demande_validation column
 * @method array findBySuivreConsultationOrganisme(string $suivre_consultation_organisme) Return CommonHabilitationAgent objects filtered by the suivre_consultation_organisme column
 * @method array findByRenseignerMontant(string $renseigner_montant) Return CommonHabilitationAgent objects filtered by the renseigner_montant column
 * @method array findByGestionReferentielContact(string $gestion_referentiel_contact) Return CommonHabilitationAgent objects filtered by the gestion_referentiel_contact column
 * @method array findByGererCao(string $gerer_cao) Return CommonHabilitationAgent objects filtered by the gerer_cao column
 * @method array findByValidationAccesFacture(string $validation_acces_facture) Return CommonHabilitationAgent objects filtered by the validation_acces_facture column
 * @method array findByGestionTravauxCao(string $gestion_travaux_cao) Return CommonHabilitationAgent objects filtered by the gestion_travaux_cao column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonHabilitationAgentQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonHabilitationAgentQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonHabilitationAgent', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonHabilitationAgentQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonHabilitationAgentQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonHabilitationAgentQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonHabilitationAgentQuery) {
            return $criteria;
        }
        $query = new CommonHabilitationAgentQuery();
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
     * @return   CommonHabilitationAgent|CommonHabilitationAgent[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonHabilitationAgentPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonHabilitationAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonHabilitationAgent A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdAgent($key, $con = null)
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
     * @return                 CommonHabilitationAgent A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_agent`, `gestion_agent_pole`, `gestion_fournisseurs_envois_postaux`, `gestion_bi_cles`, `creer_consultation`, `modifier_consultation`, `valider_consultation`, `publier_consultation`, `suivre_consultation`, `suivre_consultation_pole`, `supprimer_enveloppe`, `supprimer_consultation`, `depouiller_candidature`, `depouiller_offre`, `messagerie_securisee`, `acces_registre_depots_papier`, `acces_registre_retraits_papier`, `acces_registre_questions_papier`, `gerer_encheres`, `suivre_encheres`, `suivi_entreprise`, `envoi_boamp`, `acces_classement_lot`, `connecteur_sis`, `connecteur_marco`, `repondre_aux_questions`, `appel_projet_formation`, `utiliser_client_CAO`, `notification_boamp`, `administrer_compte`, `gestion_mapa`, `gestion_type_validation`, `approuver_consultation`, `administrer_procedure`, `restreindre_creation`, `creer_liste_marches`, `gestion_commissions`, `suivi_seul_consultation`, `attribution_marche`, `fiche_recensement`, `declarer_infructueux`, `declarer_sans_suite`, `creer_consultation_transverse`, `ouvrir_candidature_en_ligne`, `ouvrir_candidature_a_distance`, `refuser_enveloppe`, `gerer_admissibilite`, `restaurer_enveloppe`, `ouvrir_anonymat_en_ligne`, `ouvrir_offre_en_ligne`, `gestion_compte_boamp`, `gestion_agents`, `gestion_habilitations`, `gerer_mapa_inferieur_montant`, `gerer_mapa_superieur_montant`, `modifier_consultation_avant_validation`, `modifier_consultation_apres_validation`, `acces_reponses`, `telechargement_groupe_anticipe_plis_chiffres`, `telechargement_unitaire_plis_chiffres`, `ouvrir_offre_a_distance`, `creer_annonce_information`, `saisie_marches`, `validation_marches`, `publication_marches`, `gerer_statistiques_metier`, `gerer_archives`, `administrer_procedures_formalisees`, `creer_annonce_attribution`, `acces_registre_retraits_electronique`, `acces_registre_questions_electronique`, `acces_registre_depots_electronique`, `validation_simple`, `validation_intermediaire`, `validation_finale`, `creer_suite_consultation`, `hyper_admin`, `droit_gestion_services`, `suivi_acces`, `statistiques_site`, `statistiques_QoS`, `ouvrir_anonymat_a_distance`, `gestion_compte_jal`, `gestion_centrale_pub`, `Gestion_Compte_Groupe_Moniteur`, `ouvrir_offre_technique_en_ligne`, `ouvrir_offre_technique_a_distance`, `activation_compte_entreprise`, `importer_enveloppe`, `suivi_seul_registre_depots_papier`, `suivi_seul_registre_retraits_papier`, `suivi_seul_registre_questions_papier`, `suivi_seul_registre_depots_electronique`, `suivi_seul_registre_retraits_electronique`, `suivi_seul_registre_questions_electronique`, `modifier_consultation_mapa_inferieur_montant_apres_validation`, `modifier_consultation_mapa_superieur_montant_apres_validation`, `modifier_consultation_procedures_formalisees_apres_validation`, `gerer_les_entreprises`, `portee_societes_exclues`, `portee_societes_exclues_tous_organismes`, `modifier_societes_exclues`, `supprimer_societes_exclues`, `resultat_analyse`, `gerer_adresses_service`, `gerer_mon_service`, `download_archives`, `creer_annonce_extrait_pv`, `creer_annonce_rapport_achevement`, `gestion_certificats_agent`, `creer_avis_programme_previsionnel`, `annuler_consultation`, `envoyer_publicite`, `liste_marches_notifies`, `suivre_message`, `envoyer_message`, `suivi_flux_chorus_transversal`, `gestion_mandataire`, `gerer_newsletter`, `gestion_modeles_formulaire`, `gestion_adresses_facturation_jal`, `administrer_adresses_facturation_jal`, `redaction_documents_redac`, `validation_documents_redac`, `gestion_mise_disposition_pieces_marche`, `annuaire_acheteur`, `reprendre_integralement_article`, `administrer_clauses`, `valider_clauses`, `administrer_canevas`, `valider_canevas`, `administrer_clauses_entite_achats`, `generer_pieces_format_odt`, `publier_version_clausier_editeur`, `administrer_clauses_editeur`, `valider_clauses_editeur`, `administrer_canevas_editeur`, `valider_canevas_editeur`, `decision_suivi_seul`, `ouvrir_candidature_hors_ligne`, `ouvrir_offre_hors_ligne`, `ouvrir_offre_technique_hors_ligne`, `ouvrir_anonymat_hors_ligne`, `espace_collaboratif_gestionnaire`, `espace_collaboratif_contributeur`, `gerer_organismes`, `gerer_associations_agents`, `module_redaction_uniquement`, `historique_navigation_inscrits`, `telecharger_accords_cadres`, `creer_annonce_decision_resiliation`, `creer_annonce_synthese_rapport_audit`, `gerer_operations`, `telecharger_siret_acheteur`, `gerer_reouvertures_modification`, `envoyer_demande_validation`, `suivre_consultation_organisme`, `renseigner_montant`, `gestion_referentiel_contact`, `gerer_cao`, `validation_acces_facture`, `gestion_travaux_cao` FROM `HabilitationAgent` WHERE `id_agent` = :p0';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonHabilitationAgent();
            $obj->hydrate($row);
            CommonHabilitationAgentPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonHabilitationAgent|CommonHabilitationAgent[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonHabilitationAgent[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonHabilitationAgentPeer::ID_AGENT, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonHabilitationAgentPeer::ID_AGENT, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgent(1234); // WHERE id_agent = 1234
     * $query->filterByIdAgent(array(12, 34)); // WHERE id_agent IN (12, 34)
     * $query->filterByIdAgent(array('min' => 12)); // WHERE id_agent >= 12
     * $query->filterByIdAgent(array('max' => 12)); // WHERE id_agent <= 12
     * </code>
     *
     * @param     mixed $idAgent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByIdAgent($idAgent = null, $comparison = null)
    {
        if (is_array($idAgent)) {
            $useMinMax = false;
            if (isset($idAgent['min'])) {
                $this->addUsingAlias(CommonHabilitationAgentPeer::ID_AGENT, $idAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgent['max'])) {
                $this->addUsingAlias(CommonHabilitationAgentPeer::ID_AGENT, $idAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::ID_AGENT, $idAgent, $comparison);
    }

    /**
     * Filter the query on the gestion_agent_pole column
     *
     * Example usage:
     * <code>
     * $query->filterByGestionAgentPole('fooValue');   // WHERE gestion_agent_pole = 'fooValue'
     * $query->filterByGestionAgentPole('%fooValue%'); // WHERE gestion_agent_pole LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gestionAgentPole The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByGestionAgentPole($gestionAgentPole = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gestionAgentPole)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gestionAgentPole)) {
                $gestionAgentPole = str_replace('*', '%', $gestionAgentPole);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::GESTION_AGENT_POLE, $gestionAgentPole, $comparison);
    }

    /**
     * Filter the query on the gestion_fournisseurs_envois_postaux column
     *
     * Example usage:
     * <code>
     * $query->filterByGestionFournisseursEnvoisPostaux('fooValue');   // WHERE gestion_fournisseurs_envois_postaux = 'fooValue'
     * $query->filterByGestionFournisseursEnvoisPostaux('%fooValue%'); // WHERE gestion_fournisseurs_envois_postaux LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gestionFournisseursEnvoisPostaux The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByGestionFournisseursEnvoisPostaux($gestionFournisseursEnvoisPostaux = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gestionFournisseursEnvoisPostaux)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gestionFournisseursEnvoisPostaux)) {
                $gestionFournisseursEnvoisPostaux = str_replace('*', '%', $gestionFournisseursEnvoisPostaux);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::GESTION_FOURNISSEURS_ENVOIS_POSTAUX, $gestionFournisseursEnvoisPostaux, $comparison);
    }

    /**
     * Filter the query on the gestion_bi_cles column
     *
     * Example usage:
     * <code>
     * $query->filterByGestionBiCles('fooValue');   // WHERE gestion_bi_cles = 'fooValue'
     * $query->filterByGestionBiCles('%fooValue%'); // WHERE gestion_bi_cles LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gestionBiCles The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByGestionBiCles($gestionBiCles = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gestionBiCles)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gestionBiCles)) {
                $gestionBiCles = str_replace('*', '%', $gestionBiCles);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::GESTION_BI_CLES, $gestionBiCles, $comparison);
    }

    /**
     * Filter the query on the creer_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByCreerConsultation('fooValue');   // WHERE creer_consultation = 'fooValue'
     * $query->filterByCreerConsultation('%fooValue%'); // WHERE creer_consultation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $creerConsultation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByCreerConsultation($creerConsultation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($creerConsultation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $creerConsultation)) {
                $creerConsultation = str_replace('*', '%', $creerConsultation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::CREER_CONSULTATION, $creerConsultation, $comparison);
    }

    /**
     * Filter the query on the modifier_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByModifierConsultation('fooValue');   // WHERE modifier_consultation = 'fooValue'
     * $query->filterByModifierConsultation('%fooValue%'); // WHERE modifier_consultation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $modifierConsultation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByModifierConsultation($modifierConsultation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifierConsultation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $modifierConsultation)) {
                $modifierConsultation = str_replace('*', '%', $modifierConsultation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::MODIFIER_CONSULTATION, $modifierConsultation, $comparison);
    }

    /**
     * Filter the query on the valider_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByValiderConsultation('fooValue');   // WHERE valider_consultation = 'fooValue'
     * $query->filterByValiderConsultation('%fooValue%'); // WHERE valider_consultation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $validerConsultation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByValiderConsultation($validerConsultation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($validerConsultation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $validerConsultation)) {
                $validerConsultation = str_replace('*', '%', $validerConsultation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::VALIDER_CONSULTATION, $validerConsultation, $comparison);
    }

    /**
     * Filter the query on the publier_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByPublierConsultation('fooValue');   // WHERE publier_consultation = 'fooValue'
     * $query->filterByPublierConsultation('%fooValue%'); // WHERE publier_consultation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $publierConsultation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByPublierConsultation($publierConsultation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($publierConsultation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $publierConsultation)) {
                $publierConsultation = str_replace('*', '%', $publierConsultation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::PUBLIER_CONSULTATION, $publierConsultation, $comparison);
    }

    /**
     * Filter the query on the suivre_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterBySuivreConsultation('fooValue');   // WHERE suivre_consultation = 'fooValue'
     * $query->filterBySuivreConsultation('%fooValue%'); // WHERE suivre_consultation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $suivreConsultation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterBySuivreConsultation($suivreConsultation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($suivreConsultation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $suivreConsultation)) {
                $suivreConsultation = str_replace('*', '%', $suivreConsultation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::SUIVRE_CONSULTATION, $suivreConsultation, $comparison);
    }

    /**
     * Filter the query on the suivre_consultation_pole column
     *
     * Example usage:
     * <code>
     * $query->filterBySuivreConsultationPole('fooValue');   // WHERE suivre_consultation_pole = 'fooValue'
     * $query->filterBySuivreConsultationPole('%fooValue%'); // WHERE suivre_consultation_pole LIKE '%fooValue%'
     * </code>
     *
     * @param     string $suivreConsultationPole The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterBySuivreConsultationPole($suivreConsultationPole = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($suivreConsultationPole)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $suivreConsultationPole)) {
                $suivreConsultationPole = str_replace('*', '%', $suivreConsultationPole);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::SUIVRE_CONSULTATION_POLE, $suivreConsultationPole, $comparison);
    }

    /**
     * Filter the query on the supprimer_enveloppe column
     *
     * Example usage:
     * <code>
     * $query->filterBySupprimerEnveloppe('fooValue');   // WHERE supprimer_enveloppe = 'fooValue'
     * $query->filterBySupprimerEnveloppe('%fooValue%'); // WHERE supprimer_enveloppe LIKE '%fooValue%'
     * </code>
     *
     * @param     string $supprimerEnveloppe The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterBySupprimerEnveloppe($supprimerEnveloppe = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($supprimerEnveloppe)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $supprimerEnveloppe)) {
                $supprimerEnveloppe = str_replace('*', '%', $supprimerEnveloppe);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::SUPPRIMER_ENVELOPPE, $supprimerEnveloppe, $comparison);
    }

    /**
     * Filter the query on the supprimer_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterBySupprimerConsultation('fooValue');   // WHERE supprimer_consultation = 'fooValue'
     * $query->filterBySupprimerConsultation('%fooValue%'); // WHERE supprimer_consultation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $supprimerConsultation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterBySupprimerConsultation($supprimerConsultation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($supprimerConsultation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $supprimerConsultation)) {
                $supprimerConsultation = str_replace('*', '%', $supprimerConsultation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::SUPPRIMER_CONSULTATION, $supprimerConsultation, $comparison);
    }

    /**
     * Filter the query on the depouiller_candidature column
     *
     * Example usage:
     * <code>
     * $query->filterByDepouillerCandidature('fooValue');   // WHERE depouiller_candidature = 'fooValue'
     * $query->filterByDepouillerCandidature('%fooValue%'); // WHERE depouiller_candidature LIKE '%fooValue%'
     * </code>
     *
     * @param     string $depouillerCandidature The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByDepouillerCandidature($depouillerCandidature = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($depouillerCandidature)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $depouillerCandidature)) {
                $depouillerCandidature = str_replace('*', '%', $depouillerCandidature);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::DEPOUILLER_CANDIDATURE, $depouillerCandidature, $comparison);
    }

    /**
     * Filter the query on the depouiller_offre column
     *
     * Example usage:
     * <code>
     * $query->filterByDepouillerOffre('fooValue');   // WHERE depouiller_offre = 'fooValue'
     * $query->filterByDepouillerOffre('%fooValue%'); // WHERE depouiller_offre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $depouillerOffre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByDepouillerOffre($depouillerOffre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($depouillerOffre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $depouillerOffre)) {
                $depouillerOffre = str_replace('*', '%', $depouillerOffre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::DEPOUILLER_OFFRE, $depouillerOffre, $comparison);
    }

    /**
     * Filter the query on the messagerie_securisee column
     *
     * Example usage:
     * <code>
     * $query->filterByMessagerieSecurisee('fooValue');   // WHERE messagerie_securisee = 'fooValue'
     * $query->filterByMessagerieSecurisee('%fooValue%'); // WHERE messagerie_securisee LIKE '%fooValue%'
     * </code>
     *
     * @param     string $messagerieSecurisee The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByMessagerieSecurisee($messagerieSecurisee = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($messagerieSecurisee)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $messagerieSecurisee)) {
                $messagerieSecurisee = str_replace('*', '%', $messagerieSecurisee);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::MESSAGERIE_SECURISEE, $messagerieSecurisee, $comparison);
    }

    /**
     * Filter the query on the acces_registre_depots_papier column
     *
     * Example usage:
     * <code>
     * $query->filterByAccesRegistreDepotsPapier('fooValue');   // WHERE acces_registre_depots_papier = 'fooValue'
     * $query->filterByAccesRegistreDepotsPapier('%fooValue%'); // WHERE acces_registre_depots_papier LIKE '%fooValue%'
     * </code>
     *
     * @param     string $accesRegistreDepotsPapier The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByAccesRegistreDepotsPapier($accesRegistreDepotsPapier = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($accesRegistreDepotsPapier)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $accesRegistreDepotsPapier)) {
                $accesRegistreDepotsPapier = str_replace('*', '%', $accesRegistreDepotsPapier);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::ACCES_REGISTRE_DEPOTS_PAPIER, $accesRegistreDepotsPapier, $comparison);
    }

    /**
     * Filter the query on the acces_registre_retraits_papier column
     *
     * Example usage:
     * <code>
     * $query->filterByAccesRegistreRetraitsPapier('fooValue');   // WHERE acces_registre_retraits_papier = 'fooValue'
     * $query->filterByAccesRegistreRetraitsPapier('%fooValue%'); // WHERE acces_registre_retraits_papier LIKE '%fooValue%'
     * </code>
     *
     * @param     string $accesRegistreRetraitsPapier The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByAccesRegistreRetraitsPapier($accesRegistreRetraitsPapier = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($accesRegistreRetraitsPapier)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $accesRegistreRetraitsPapier)) {
                $accesRegistreRetraitsPapier = str_replace('*', '%', $accesRegistreRetraitsPapier);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::ACCES_REGISTRE_RETRAITS_PAPIER, $accesRegistreRetraitsPapier, $comparison);
    }

    /**
     * Filter the query on the acces_registre_questions_papier column
     *
     * Example usage:
     * <code>
     * $query->filterByAccesRegistreQuestionsPapier('fooValue');   // WHERE acces_registre_questions_papier = 'fooValue'
     * $query->filterByAccesRegistreQuestionsPapier('%fooValue%'); // WHERE acces_registre_questions_papier LIKE '%fooValue%'
     * </code>
     *
     * @param     string $accesRegistreQuestionsPapier The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByAccesRegistreQuestionsPapier($accesRegistreQuestionsPapier = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($accesRegistreQuestionsPapier)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $accesRegistreQuestionsPapier)) {
                $accesRegistreQuestionsPapier = str_replace('*', '%', $accesRegistreQuestionsPapier);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::ACCES_REGISTRE_QUESTIONS_PAPIER, $accesRegistreQuestionsPapier, $comparison);
    }

    /**
     * Filter the query on the gerer_encheres column
     *
     * Example usage:
     * <code>
     * $query->filterByGererEncheres('fooValue');   // WHERE gerer_encheres = 'fooValue'
     * $query->filterByGererEncheres('%fooValue%'); // WHERE gerer_encheres LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gererEncheres The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByGererEncheres($gererEncheres = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gererEncheres)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gererEncheres)) {
                $gererEncheres = str_replace('*', '%', $gererEncheres);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::GERER_ENCHERES, $gererEncheres, $comparison);
    }

    /**
     * Filter the query on the suivre_encheres column
     *
     * Example usage:
     * <code>
     * $query->filterBySuivreEncheres('fooValue');   // WHERE suivre_encheres = 'fooValue'
     * $query->filterBySuivreEncheres('%fooValue%'); // WHERE suivre_encheres LIKE '%fooValue%'
     * </code>
     *
     * @param     string $suivreEncheres The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterBySuivreEncheres($suivreEncheres = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($suivreEncheres)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $suivreEncheres)) {
                $suivreEncheres = str_replace('*', '%', $suivreEncheres);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::SUIVRE_ENCHERES, $suivreEncheres, $comparison);
    }

    /**
     * Filter the query on the suivi_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterBySuiviEntreprise('fooValue');   // WHERE suivi_entreprise = 'fooValue'
     * $query->filterBySuiviEntreprise('%fooValue%'); // WHERE suivi_entreprise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $suiviEntreprise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterBySuiviEntreprise($suiviEntreprise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($suiviEntreprise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $suiviEntreprise)) {
                $suiviEntreprise = str_replace('*', '%', $suiviEntreprise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::SUIVI_ENTREPRISE, $suiviEntreprise, $comparison);
    }

    /**
     * Filter the query on the envoi_boamp column
     *
     * Example usage:
     * <code>
     * $query->filterByEnvoiBoamp('fooValue');   // WHERE envoi_boamp = 'fooValue'
     * $query->filterByEnvoiBoamp('%fooValue%'); // WHERE envoi_boamp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $envoiBoamp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByEnvoiBoamp($envoiBoamp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($envoiBoamp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $envoiBoamp)) {
                $envoiBoamp = str_replace('*', '%', $envoiBoamp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::ENVOI_BOAMP, $envoiBoamp, $comparison);
    }

    /**
     * Filter the query on the acces_classement_lot column
     *
     * Example usage:
     * <code>
     * $query->filterByAccesClassementLot('fooValue');   // WHERE acces_classement_lot = 'fooValue'
     * $query->filterByAccesClassementLot('%fooValue%'); // WHERE acces_classement_lot LIKE '%fooValue%'
     * </code>
     *
     * @param     string $accesClassementLot The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByAccesClassementLot($accesClassementLot = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($accesClassementLot)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $accesClassementLot)) {
                $accesClassementLot = str_replace('*', '%', $accesClassementLot);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::ACCES_CLASSEMENT_LOT, $accesClassementLot, $comparison);
    }

    /**
     * Filter the query on the connecteur_sis column
     *
     * Example usage:
     * <code>
     * $query->filterByConnecteurSis('fooValue');   // WHERE connecteur_sis = 'fooValue'
     * $query->filterByConnecteurSis('%fooValue%'); // WHERE connecteur_sis LIKE '%fooValue%'
     * </code>
     *
     * @param     string $connecteurSis The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByConnecteurSis($connecteurSis = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($connecteurSis)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $connecteurSis)) {
                $connecteurSis = str_replace('*', '%', $connecteurSis);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::CONNECTEUR_SIS, $connecteurSis, $comparison);
    }

    /**
     * Filter the query on the connecteur_marco column
     *
     * Example usage:
     * <code>
     * $query->filterByConnecteurMarco('fooValue');   // WHERE connecteur_marco = 'fooValue'
     * $query->filterByConnecteurMarco('%fooValue%'); // WHERE connecteur_marco LIKE '%fooValue%'
     * </code>
     *
     * @param     string $connecteurMarco The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByConnecteurMarco($connecteurMarco = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($connecteurMarco)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $connecteurMarco)) {
                $connecteurMarco = str_replace('*', '%', $connecteurMarco);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::CONNECTEUR_MARCO, $connecteurMarco, $comparison);
    }

    /**
     * Filter the query on the repondre_aux_questions column
     *
     * Example usage:
     * <code>
     * $query->filterByRepondreAuxQuestions('fooValue');   // WHERE repondre_aux_questions = 'fooValue'
     * $query->filterByRepondreAuxQuestions('%fooValue%'); // WHERE repondre_aux_questions LIKE '%fooValue%'
     * </code>
     *
     * @param     string $repondreAuxQuestions The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByRepondreAuxQuestions($repondreAuxQuestions = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($repondreAuxQuestions)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $repondreAuxQuestions)) {
                $repondreAuxQuestions = str_replace('*', '%', $repondreAuxQuestions);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::REPONDRE_AUX_QUESTIONS, $repondreAuxQuestions, $comparison);
    }

    /**
     * Filter the query on the appel_projet_formation column
     *
     * Example usage:
     * <code>
     * $query->filterByAppelProjetFormation('fooValue');   // WHERE appel_projet_formation = 'fooValue'
     * $query->filterByAppelProjetFormation('%fooValue%'); // WHERE appel_projet_formation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appelProjetFormation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByAppelProjetFormation($appelProjetFormation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appelProjetFormation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appelProjetFormation)) {
                $appelProjetFormation = str_replace('*', '%', $appelProjetFormation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::APPEL_PROJET_FORMATION, $appelProjetFormation, $comparison);
    }

    /**
     * Filter the query on the utiliser_client_CAO column
     *
     * Example usage:
     * <code>
     * $query->filterByUtiliserClientCao('fooValue');   // WHERE utiliser_client_CAO = 'fooValue'
     * $query->filterByUtiliserClientCao('%fooValue%'); // WHERE utiliser_client_CAO LIKE '%fooValue%'
     * </code>
     *
     * @param     string $utiliserClientCao The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByUtiliserClientCao($utiliserClientCao = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($utiliserClientCao)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $utiliserClientCao)) {
                $utiliserClientCao = str_replace('*', '%', $utiliserClientCao);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::UTILISER_CLIENT_CAO, $utiliserClientCao, $comparison);
    }

    /**
     * Filter the query on the notification_boamp column
     *
     * Example usage:
     * <code>
     * $query->filterByNotificationBoamp('fooValue');   // WHERE notification_boamp = 'fooValue'
     * $query->filterByNotificationBoamp('%fooValue%'); // WHERE notification_boamp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $notificationBoamp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByNotificationBoamp($notificationBoamp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($notificationBoamp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $notificationBoamp)) {
                $notificationBoamp = str_replace('*', '%', $notificationBoamp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::NOTIFICATION_BOAMP, $notificationBoamp, $comparison);
    }

    /**
     * Filter the query on the administrer_compte column
     *
     * Example usage:
     * <code>
     * $query->filterByAdministrerCompte('fooValue');   // WHERE administrer_compte = 'fooValue'
     * $query->filterByAdministrerCompte('%fooValue%'); // WHERE administrer_compte LIKE '%fooValue%'
     * </code>
     *
     * @param     string $administrerCompte The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByAdministrerCompte($administrerCompte = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($administrerCompte)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $administrerCompte)) {
                $administrerCompte = str_replace('*', '%', $administrerCompte);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::ADMINISTRER_COMPTE, $administrerCompte, $comparison);
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
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonHabilitationAgentPeer::GESTION_MAPA, $gestionMapa, $comparison);
    }

    /**
     * Filter the query on the gestion_type_validation column
     *
     * Example usage:
     * <code>
     * $query->filterByGestionTypeValidation('fooValue');   // WHERE gestion_type_validation = 'fooValue'
     * $query->filterByGestionTypeValidation('%fooValue%'); // WHERE gestion_type_validation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gestionTypeValidation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByGestionTypeValidation($gestionTypeValidation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gestionTypeValidation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gestionTypeValidation)) {
                $gestionTypeValidation = str_replace('*', '%', $gestionTypeValidation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::GESTION_TYPE_VALIDATION, $gestionTypeValidation, $comparison);
    }

    /**
     * Filter the query on the approuver_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByApprouverConsultation('fooValue');   // WHERE approuver_consultation = 'fooValue'
     * $query->filterByApprouverConsultation('%fooValue%'); // WHERE approuver_consultation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $approuverConsultation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByApprouverConsultation($approuverConsultation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($approuverConsultation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $approuverConsultation)) {
                $approuverConsultation = str_replace('*', '%', $approuverConsultation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::APPROUVER_CONSULTATION, $approuverConsultation, $comparison);
    }

    /**
     * Filter the query on the administrer_procedure column
     *
     * Example usage:
     * <code>
     * $query->filterByAdministrerProcedure('fooValue');   // WHERE administrer_procedure = 'fooValue'
     * $query->filterByAdministrerProcedure('%fooValue%'); // WHERE administrer_procedure LIKE '%fooValue%'
     * </code>
     *
     * @param     string $administrerProcedure The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByAdministrerProcedure($administrerProcedure = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($administrerProcedure)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $administrerProcedure)) {
                $administrerProcedure = str_replace('*', '%', $administrerProcedure);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::ADMINISTRER_PROCEDURE, $administrerProcedure, $comparison);
    }

    /**
     * Filter the query on the restreindre_creation column
     *
     * Example usage:
     * <code>
     * $query->filterByRestreindreCreation('fooValue');   // WHERE restreindre_creation = 'fooValue'
     * $query->filterByRestreindreCreation('%fooValue%'); // WHERE restreindre_creation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $restreindreCreation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByRestreindreCreation($restreindreCreation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($restreindreCreation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $restreindreCreation)) {
                $restreindreCreation = str_replace('*', '%', $restreindreCreation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::RESTREINDRE_CREATION, $restreindreCreation, $comparison);
    }

    /**
     * Filter the query on the creer_liste_marches column
     *
     * Example usage:
     * <code>
     * $query->filterByCreerListeMarches('fooValue');   // WHERE creer_liste_marches = 'fooValue'
     * $query->filterByCreerListeMarches('%fooValue%'); // WHERE creer_liste_marches LIKE '%fooValue%'
     * </code>
     *
     * @param     string $creerListeMarches The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByCreerListeMarches($creerListeMarches = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($creerListeMarches)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $creerListeMarches)) {
                $creerListeMarches = str_replace('*', '%', $creerListeMarches);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::CREER_LISTE_MARCHES, $creerListeMarches, $comparison);
    }

    /**
     * Filter the query on the gestion_commissions column
     *
     * Example usage:
     * <code>
     * $query->filterByGestionCommissions('fooValue');   // WHERE gestion_commissions = 'fooValue'
     * $query->filterByGestionCommissions('%fooValue%'); // WHERE gestion_commissions LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gestionCommissions The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByGestionCommissions($gestionCommissions = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gestionCommissions)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gestionCommissions)) {
                $gestionCommissions = str_replace('*', '%', $gestionCommissions);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::GESTION_COMMISSIONS, $gestionCommissions, $comparison);
    }

    /**
     * Filter the query on the suivi_seul_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterBySuiviSeulConsultation('fooValue');   // WHERE suivi_seul_consultation = 'fooValue'
     * $query->filterBySuiviSeulConsultation('%fooValue%'); // WHERE suivi_seul_consultation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $suiviSeulConsultation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterBySuiviSeulConsultation($suiviSeulConsultation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($suiviSeulConsultation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $suiviSeulConsultation)) {
                $suiviSeulConsultation = str_replace('*', '%', $suiviSeulConsultation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::SUIVI_SEUL_CONSULTATION, $suiviSeulConsultation, $comparison);
    }

    /**
     * Filter the query on the attribution_marche column
     *
     * Example usage:
     * <code>
     * $query->filterByAttributionMarche('fooValue');   // WHERE attribution_marche = 'fooValue'
     * $query->filterByAttributionMarche('%fooValue%'); // WHERE attribution_marche LIKE '%fooValue%'
     * </code>
     *
     * @param     string $attributionMarche The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByAttributionMarche($attributionMarche = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($attributionMarche)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $attributionMarche)) {
                $attributionMarche = str_replace('*', '%', $attributionMarche);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::ATTRIBUTION_MARCHE, $attributionMarche, $comparison);
    }

    /**
     * Filter the query on the fiche_recensement column
     *
     * Example usage:
     * <code>
     * $query->filterByFicheRecensement('fooValue');   // WHERE fiche_recensement = 'fooValue'
     * $query->filterByFicheRecensement('%fooValue%'); // WHERE fiche_recensement LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ficheRecensement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByFicheRecensement($ficheRecensement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ficheRecensement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ficheRecensement)) {
                $ficheRecensement = str_replace('*', '%', $ficheRecensement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::FICHE_RECENSEMENT, $ficheRecensement, $comparison);
    }

    /**
     * Filter the query on the declarer_infructueux column
     *
     * Example usage:
     * <code>
     * $query->filterByDeclarerInfructueux('fooValue');   // WHERE declarer_infructueux = 'fooValue'
     * $query->filterByDeclarerInfructueux('%fooValue%'); // WHERE declarer_infructueux LIKE '%fooValue%'
     * </code>
     *
     * @param     string $declarerInfructueux The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByDeclarerInfructueux($declarerInfructueux = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($declarerInfructueux)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $declarerInfructueux)) {
                $declarerInfructueux = str_replace('*', '%', $declarerInfructueux);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::DECLARER_INFRUCTUEUX, $declarerInfructueux, $comparison);
    }

    /**
     * Filter the query on the declarer_sans_suite column
     *
     * Example usage:
     * <code>
     * $query->filterByDeclarerSansSuite('fooValue');   // WHERE declarer_sans_suite = 'fooValue'
     * $query->filterByDeclarerSansSuite('%fooValue%'); // WHERE declarer_sans_suite LIKE '%fooValue%'
     * </code>
     *
     * @param     string $declarerSansSuite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByDeclarerSansSuite($declarerSansSuite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($declarerSansSuite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $declarerSansSuite)) {
                $declarerSansSuite = str_replace('*', '%', $declarerSansSuite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::DECLARER_SANS_SUITE, $declarerSansSuite, $comparison);
    }

    /**
     * Filter the query on the creer_consultation_transverse column
     *
     * Example usage:
     * <code>
     * $query->filterByCreerConsultationTransverse('fooValue');   // WHERE creer_consultation_transverse = 'fooValue'
     * $query->filterByCreerConsultationTransverse('%fooValue%'); // WHERE creer_consultation_transverse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $creerConsultationTransverse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByCreerConsultationTransverse($creerConsultationTransverse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($creerConsultationTransverse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $creerConsultationTransverse)) {
                $creerConsultationTransverse = str_replace('*', '%', $creerConsultationTransverse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::CREER_CONSULTATION_TRANSVERSE, $creerConsultationTransverse, $comparison);
    }

    /**
     * Filter the query on the ouvrir_candidature_en_ligne column
     *
     * Example usage:
     * <code>
     * $query->filterByOuvrirCandidatureEnLigne('fooValue');   // WHERE ouvrir_candidature_en_ligne = 'fooValue'
     * $query->filterByOuvrirCandidatureEnLigne('%fooValue%'); // WHERE ouvrir_candidature_en_ligne LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ouvrirCandidatureEnLigne The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByOuvrirCandidatureEnLigne($ouvrirCandidatureEnLigne = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ouvrirCandidatureEnLigne)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ouvrirCandidatureEnLigne)) {
                $ouvrirCandidatureEnLigne = str_replace('*', '%', $ouvrirCandidatureEnLigne);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::OUVRIR_CANDIDATURE_EN_LIGNE, $ouvrirCandidatureEnLigne, $comparison);
    }

    /**
     * Filter the query on the ouvrir_candidature_a_distance column
     *
     * Example usage:
     * <code>
     * $query->filterByOuvrirCandidatureADistance('fooValue');   // WHERE ouvrir_candidature_a_distance = 'fooValue'
     * $query->filterByOuvrirCandidatureADistance('%fooValue%'); // WHERE ouvrir_candidature_a_distance LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ouvrirCandidatureADistance The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByOuvrirCandidatureADistance($ouvrirCandidatureADistance = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ouvrirCandidatureADistance)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ouvrirCandidatureADistance)) {
                $ouvrirCandidatureADistance = str_replace('*', '%', $ouvrirCandidatureADistance);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::OUVRIR_CANDIDATURE_A_DISTANCE, $ouvrirCandidatureADistance, $comparison);
    }

    /**
     * Filter the query on the refuser_enveloppe column
     *
     * Example usage:
     * <code>
     * $query->filterByRefuserEnveloppe('fooValue');   // WHERE refuser_enveloppe = 'fooValue'
     * $query->filterByRefuserEnveloppe('%fooValue%'); // WHERE refuser_enveloppe LIKE '%fooValue%'
     * </code>
     *
     * @param     string $refuserEnveloppe The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByRefuserEnveloppe($refuserEnveloppe = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($refuserEnveloppe)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $refuserEnveloppe)) {
                $refuserEnveloppe = str_replace('*', '%', $refuserEnveloppe);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::REFUSER_ENVELOPPE, $refuserEnveloppe, $comparison);
    }

    /**
     * Filter the query on the gerer_admissibilite column
     *
     * Example usage:
     * <code>
     * $query->filterByGererAdmissibilite('fooValue');   // WHERE gerer_admissibilite = 'fooValue'
     * $query->filterByGererAdmissibilite('%fooValue%'); // WHERE gerer_admissibilite LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gererAdmissibilite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByGererAdmissibilite($gererAdmissibilite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gererAdmissibilite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gererAdmissibilite)) {
                $gererAdmissibilite = str_replace('*', '%', $gererAdmissibilite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::GERER_ADMISSIBILITE, $gererAdmissibilite, $comparison);
    }

    /**
     * Filter the query on the restaurer_enveloppe column
     *
     * Example usage:
     * <code>
     * $query->filterByRestaurerEnveloppe('fooValue');   // WHERE restaurer_enveloppe = 'fooValue'
     * $query->filterByRestaurerEnveloppe('%fooValue%'); // WHERE restaurer_enveloppe LIKE '%fooValue%'
     * </code>
     *
     * @param     string $restaurerEnveloppe The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByRestaurerEnveloppe($restaurerEnveloppe = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($restaurerEnveloppe)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $restaurerEnveloppe)) {
                $restaurerEnveloppe = str_replace('*', '%', $restaurerEnveloppe);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::RESTAURER_ENVELOPPE, $restaurerEnveloppe, $comparison);
    }

    /**
     * Filter the query on the ouvrir_anonymat_en_ligne column
     *
     * Example usage:
     * <code>
     * $query->filterByOuvrirAnonymatEnLigne('fooValue');   // WHERE ouvrir_anonymat_en_ligne = 'fooValue'
     * $query->filterByOuvrirAnonymatEnLigne('%fooValue%'); // WHERE ouvrir_anonymat_en_ligne LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ouvrirAnonymatEnLigne The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByOuvrirAnonymatEnLigne($ouvrirAnonymatEnLigne = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ouvrirAnonymatEnLigne)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ouvrirAnonymatEnLigne)) {
                $ouvrirAnonymatEnLigne = str_replace('*', '%', $ouvrirAnonymatEnLigne);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::OUVRIR_ANONYMAT_EN_LIGNE, $ouvrirAnonymatEnLigne, $comparison);
    }

    /**
     * Filter the query on the ouvrir_offre_en_ligne column
     *
     * Example usage:
     * <code>
     * $query->filterByOuvrirOffreEnLigne('fooValue');   // WHERE ouvrir_offre_en_ligne = 'fooValue'
     * $query->filterByOuvrirOffreEnLigne('%fooValue%'); // WHERE ouvrir_offre_en_ligne LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ouvrirOffreEnLigne The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByOuvrirOffreEnLigne($ouvrirOffreEnLigne = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ouvrirOffreEnLigne)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ouvrirOffreEnLigne)) {
                $ouvrirOffreEnLigne = str_replace('*', '%', $ouvrirOffreEnLigne);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::OUVRIR_OFFRE_EN_LIGNE, $ouvrirOffreEnLigne, $comparison);
    }

    /**
     * Filter the query on the gestion_compte_boamp column
     *
     * Example usage:
     * <code>
     * $query->filterByGestionCompteBoamp('fooValue');   // WHERE gestion_compte_boamp = 'fooValue'
     * $query->filterByGestionCompteBoamp('%fooValue%'); // WHERE gestion_compte_boamp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gestionCompteBoamp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByGestionCompteBoamp($gestionCompteBoamp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gestionCompteBoamp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gestionCompteBoamp)) {
                $gestionCompteBoamp = str_replace('*', '%', $gestionCompteBoamp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::GESTION_COMPTE_BOAMP, $gestionCompteBoamp, $comparison);
    }

    /**
     * Filter the query on the gestion_agents column
     *
     * Example usage:
     * <code>
     * $query->filterByGestionAgents('fooValue');   // WHERE gestion_agents = 'fooValue'
     * $query->filterByGestionAgents('%fooValue%'); // WHERE gestion_agents LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gestionAgents The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByGestionAgents($gestionAgents = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gestionAgents)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gestionAgents)) {
                $gestionAgents = str_replace('*', '%', $gestionAgents);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::GESTION_AGENTS, $gestionAgents, $comparison);
    }

    /**
     * Filter the query on the gestion_habilitations column
     *
     * Example usage:
     * <code>
     * $query->filterByGestionHabilitations('fooValue');   // WHERE gestion_habilitations = 'fooValue'
     * $query->filterByGestionHabilitations('%fooValue%'); // WHERE gestion_habilitations LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gestionHabilitations The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByGestionHabilitations($gestionHabilitations = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gestionHabilitations)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gestionHabilitations)) {
                $gestionHabilitations = str_replace('*', '%', $gestionHabilitations);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::GESTION_HABILITATIONS, $gestionHabilitations, $comparison);
    }

    /**
     * Filter the query on the gerer_mapa_inferieur_montant column
     *
     * Example usage:
     * <code>
     * $query->filterByGererMapaInferieurMontant('fooValue');   // WHERE gerer_mapa_inferieur_montant = 'fooValue'
     * $query->filterByGererMapaInferieurMontant('%fooValue%'); // WHERE gerer_mapa_inferieur_montant LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gererMapaInferieurMontant The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByGererMapaInferieurMontant($gererMapaInferieurMontant = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gererMapaInferieurMontant)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gererMapaInferieurMontant)) {
                $gererMapaInferieurMontant = str_replace('*', '%', $gererMapaInferieurMontant);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::GERER_MAPA_INFERIEUR_MONTANT, $gererMapaInferieurMontant, $comparison);
    }

    /**
     * Filter the query on the gerer_mapa_superieur_montant column
     *
     * Example usage:
     * <code>
     * $query->filterByGererMapaSuperieurMontant('fooValue');   // WHERE gerer_mapa_superieur_montant = 'fooValue'
     * $query->filterByGererMapaSuperieurMontant('%fooValue%'); // WHERE gerer_mapa_superieur_montant LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gererMapaSuperieurMontant The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByGererMapaSuperieurMontant($gererMapaSuperieurMontant = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gererMapaSuperieurMontant)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gererMapaSuperieurMontant)) {
                $gererMapaSuperieurMontant = str_replace('*', '%', $gererMapaSuperieurMontant);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::GERER_MAPA_SUPERIEUR_MONTANT, $gererMapaSuperieurMontant, $comparison);
    }

    /**
     * Filter the query on the modifier_consultation_avant_validation column
     *
     * Example usage:
     * <code>
     * $query->filterByModifierConsultationAvantValidation('fooValue');   // WHERE modifier_consultation_avant_validation = 'fooValue'
     * $query->filterByModifierConsultationAvantValidation('%fooValue%'); // WHERE modifier_consultation_avant_validation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $modifierConsultationAvantValidation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByModifierConsultationAvantValidation($modifierConsultationAvantValidation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifierConsultationAvantValidation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $modifierConsultationAvantValidation)) {
                $modifierConsultationAvantValidation = str_replace('*', '%', $modifierConsultationAvantValidation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_AVANT_VALIDATION, $modifierConsultationAvantValidation, $comparison);
    }

    /**
     * Filter the query on the modifier_consultation_apres_validation column
     *
     * Example usage:
     * <code>
     * $query->filterByModifierConsultationApresValidation('fooValue');   // WHERE modifier_consultation_apres_validation = 'fooValue'
     * $query->filterByModifierConsultationApresValidation('%fooValue%'); // WHERE modifier_consultation_apres_validation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $modifierConsultationApresValidation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByModifierConsultationApresValidation($modifierConsultationApresValidation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifierConsultationApresValidation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $modifierConsultationApresValidation)) {
                $modifierConsultationApresValidation = str_replace('*', '%', $modifierConsultationApresValidation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_APRES_VALIDATION, $modifierConsultationApresValidation, $comparison);
    }

    /**
     * Filter the query on the acces_reponses column
     *
     * Example usage:
     * <code>
     * $query->filterByAccesReponses('fooValue');   // WHERE acces_reponses = 'fooValue'
     * $query->filterByAccesReponses('%fooValue%'); // WHERE acces_reponses LIKE '%fooValue%'
     * </code>
     *
     * @param     string $accesReponses The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByAccesReponses($accesReponses = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($accesReponses)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $accesReponses)) {
                $accesReponses = str_replace('*', '%', $accesReponses);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::ACCES_REPONSES, $accesReponses, $comparison);
    }

    /**
     * Filter the query on the telechargement_groupe_anticipe_plis_chiffres column
     *
     * Example usage:
     * <code>
     * $query->filterByTelechargementGroupeAnticipePlisChiffres('fooValue');   // WHERE telechargement_groupe_anticipe_plis_chiffres = 'fooValue'
     * $query->filterByTelechargementGroupeAnticipePlisChiffres('%fooValue%'); // WHERE telechargement_groupe_anticipe_plis_chiffres LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telechargementGroupeAnticipePlisChiffres The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByTelechargementGroupeAnticipePlisChiffres($telechargementGroupeAnticipePlisChiffres = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telechargementGroupeAnticipePlisChiffres)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telechargementGroupeAnticipePlisChiffres)) {
                $telechargementGroupeAnticipePlisChiffres = str_replace('*', '%', $telechargementGroupeAnticipePlisChiffres);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::TELECHARGEMENT_GROUPE_ANTICIPE_PLIS_CHIFFRES, $telechargementGroupeAnticipePlisChiffres, $comparison);
    }

    /**
     * Filter the query on the telechargement_unitaire_plis_chiffres column
     *
     * Example usage:
     * <code>
     * $query->filterByTelechargementUnitairePlisChiffres('fooValue');   // WHERE telechargement_unitaire_plis_chiffres = 'fooValue'
     * $query->filterByTelechargementUnitairePlisChiffres('%fooValue%'); // WHERE telechargement_unitaire_plis_chiffres LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telechargementUnitairePlisChiffres The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByTelechargementUnitairePlisChiffres($telechargementUnitairePlisChiffres = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telechargementUnitairePlisChiffres)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telechargementUnitairePlisChiffres)) {
                $telechargementUnitairePlisChiffres = str_replace('*', '%', $telechargementUnitairePlisChiffres);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::TELECHARGEMENT_UNITAIRE_PLIS_CHIFFRES, $telechargementUnitairePlisChiffres, $comparison);
    }

    /**
     * Filter the query on the ouvrir_offre_a_distance column
     *
     * Example usage:
     * <code>
     * $query->filterByOuvrirOffreADistance('fooValue');   // WHERE ouvrir_offre_a_distance = 'fooValue'
     * $query->filterByOuvrirOffreADistance('%fooValue%'); // WHERE ouvrir_offre_a_distance LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ouvrirOffreADistance The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByOuvrirOffreADistance($ouvrirOffreADistance = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ouvrirOffreADistance)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ouvrirOffreADistance)) {
                $ouvrirOffreADistance = str_replace('*', '%', $ouvrirOffreADistance);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::OUVRIR_OFFRE_A_DISTANCE, $ouvrirOffreADistance, $comparison);
    }

    /**
     * Filter the query on the creer_annonce_information column
     *
     * Example usage:
     * <code>
     * $query->filterByCreerAnnonceInformation('fooValue');   // WHERE creer_annonce_information = 'fooValue'
     * $query->filterByCreerAnnonceInformation('%fooValue%'); // WHERE creer_annonce_information LIKE '%fooValue%'
     * </code>
     *
     * @param     string $creerAnnonceInformation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByCreerAnnonceInformation($creerAnnonceInformation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($creerAnnonceInformation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $creerAnnonceInformation)) {
                $creerAnnonceInformation = str_replace('*', '%', $creerAnnonceInformation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::CREER_ANNONCE_INFORMATION, $creerAnnonceInformation, $comparison);
    }

    /**
     * Filter the query on the saisie_marches column
     *
     * Example usage:
     * <code>
     * $query->filterBySaisieMarches('fooValue');   // WHERE saisie_marches = 'fooValue'
     * $query->filterBySaisieMarches('%fooValue%'); // WHERE saisie_marches LIKE '%fooValue%'
     * </code>
     *
     * @param     string $saisieMarches The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterBySaisieMarches($saisieMarches = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($saisieMarches)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $saisieMarches)) {
                $saisieMarches = str_replace('*', '%', $saisieMarches);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::SAISIE_MARCHES, $saisieMarches, $comparison);
    }

    /**
     * Filter the query on the validation_marches column
     *
     * Example usage:
     * <code>
     * $query->filterByValidationMarches('fooValue');   // WHERE validation_marches = 'fooValue'
     * $query->filterByValidationMarches('%fooValue%'); // WHERE validation_marches LIKE '%fooValue%'
     * </code>
     *
     * @param     string $validationMarches The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByValidationMarches($validationMarches = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($validationMarches)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $validationMarches)) {
                $validationMarches = str_replace('*', '%', $validationMarches);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::VALIDATION_MARCHES, $validationMarches, $comparison);
    }

    /**
     * Filter the query on the publication_marches column
     *
     * Example usage:
     * <code>
     * $query->filterByPublicationMarches('fooValue');   // WHERE publication_marches = 'fooValue'
     * $query->filterByPublicationMarches('%fooValue%'); // WHERE publication_marches LIKE '%fooValue%'
     * </code>
     *
     * @param     string $publicationMarches The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByPublicationMarches($publicationMarches = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($publicationMarches)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $publicationMarches)) {
                $publicationMarches = str_replace('*', '%', $publicationMarches);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::PUBLICATION_MARCHES, $publicationMarches, $comparison);
    }

    /**
     * Filter the query on the gerer_statistiques_metier column
     *
     * Example usage:
     * <code>
     * $query->filterByGererStatistiquesMetier('fooValue');   // WHERE gerer_statistiques_metier = 'fooValue'
     * $query->filterByGererStatistiquesMetier('%fooValue%'); // WHERE gerer_statistiques_metier LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gererStatistiquesMetier The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByGererStatistiquesMetier($gererStatistiquesMetier = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gererStatistiquesMetier)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gererStatistiquesMetier)) {
                $gererStatistiquesMetier = str_replace('*', '%', $gererStatistiquesMetier);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::GERER_STATISTIQUES_METIER, $gererStatistiquesMetier, $comparison);
    }

    /**
     * Filter the query on the gerer_archives column
     *
     * Example usage:
     * <code>
     * $query->filterByGererArchives('fooValue');   // WHERE gerer_archives = 'fooValue'
     * $query->filterByGererArchives('%fooValue%'); // WHERE gerer_archives LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gererArchives The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByGererArchives($gererArchives = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gererArchives)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gererArchives)) {
                $gererArchives = str_replace('*', '%', $gererArchives);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::GERER_ARCHIVES, $gererArchives, $comparison);
    }

    /**
     * Filter the query on the administrer_procedures_formalisees column
     *
     * Example usage:
     * <code>
     * $query->filterByAdministrerProceduresFormalisees('fooValue');   // WHERE administrer_procedures_formalisees = 'fooValue'
     * $query->filterByAdministrerProceduresFormalisees('%fooValue%'); // WHERE administrer_procedures_formalisees LIKE '%fooValue%'
     * </code>
     *
     * @param     string $administrerProceduresFormalisees The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByAdministrerProceduresFormalisees($administrerProceduresFormalisees = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($administrerProceduresFormalisees)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $administrerProceduresFormalisees)) {
                $administrerProceduresFormalisees = str_replace('*', '%', $administrerProceduresFormalisees);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::ADMINISTRER_PROCEDURES_FORMALISEES, $administrerProceduresFormalisees, $comparison);
    }

    /**
     * Filter the query on the creer_annonce_attribution column
     *
     * Example usage:
     * <code>
     * $query->filterByCreerAnnonceAttribution('fooValue');   // WHERE creer_annonce_attribution = 'fooValue'
     * $query->filterByCreerAnnonceAttribution('%fooValue%'); // WHERE creer_annonce_attribution LIKE '%fooValue%'
     * </code>
     *
     * @param     string $creerAnnonceAttribution The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByCreerAnnonceAttribution($creerAnnonceAttribution = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($creerAnnonceAttribution)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $creerAnnonceAttribution)) {
                $creerAnnonceAttribution = str_replace('*', '%', $creerAnnonceAttribution);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::CREER_ANNONCE_ATTRIBUTION, $creerAnnonceAttribution, $comparison);
    }

    /**
     * Filter the query on the acces_registre_retraits_electronique column
     *
     * Example usage:
     * <code>
     * $query->filterByAccesRegistreRetraitsElectronique('fooValue');   // WHERE acces_registre_retraits_electronique = 'fooValue'
     * $query->filterByAccesRegistreRetraitsElectronique('%fooValue%'); // WHERE acces_registre_retraits_electronique LIKE '%fooValue%'
     * </code>
     *
     * @param     string $accesRegistreRetraitsElectronique The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByAccesRegistreRetraitsElectronique($accesRegistreRetraitsElectronique = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($accesRegistreRetraitsElectronique)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $accesRegistreRetraitsElectronique)) {
                $accesRegistreRetraitsElectronique = str_replace('*', '%', $accesRegistreRetraitsElectronique);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::ACCES_REGISTRE_RETRAITS_ELECTRONIQUE, $accesRegistreRetraitsElectronique, $comparison);
    }

    /**
     * Filter the query on the acces_registre_questions_electronique column
     *
     * Example usage:
     * <code>
     * $query->filterByAccesRegistreQuestionsElectronique('fooValue');   // WHERE acces_registre_questions_electronique = 'fooValue'
     * $query->filterByAccesRegistreQuestionsElectronique('%fooValue%'); // WHERE acces_registre_questions_electronique LIKE '%fooValue%'
     * </code>
     *
     * @param     string $accesRegistreQuestionsElectronique The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByAccesRegistreQuestionsElectronique($accesRegistreQuestionsElectronique = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($accesRegistreQuestionsElectronique)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $accesRegistreQuestionsElectronique)) {
                $accesRegistreQuestionsElectronique = str_replace('*', '%', $accesRegistreQuestionsElectronique);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::ACCES_REGISTRE_QUESTIONS_ELECTRONIQUE, $accesRegistreQuestionsElectronique, $comparison);
    }

    /**
     * Filter the query on the acces_registre_depots_electronique column
     *
     * Example usage:
     * <code>
     * $query->filterByAccesRegistreDepotsElectronique('fooValue');   // WHERE acces_registre_depots_electronique = 'fooValue'
     * $query->filterByAccesRegistreDepotsElectronique('%fooValue%'); // WHERE acces_registre_depots_electronique LIKE '%fooValue%'
     * </code>
     *
     * @param     string $accesRegistreDepotsElectronique The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByAccesRegistreDepotsElectronique($accesRegistreDepotsElectronique = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($accesRegistreDepotsElectronique)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $accesRegistreDepotsElectronique)) {
                $accesRegistreDepotsElectronique = str_replace('*', '%', $accesRegistreDepotsElectronique);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::ACCES_REGISTRE_DEPOTS_ELECTRONIQUE, $accesRegistreDepotsElectronique, $comparison);
    }

    /**
     * Filter the query on the validation_simple column
     *
     * Example usage:
     * <code>
     * $query->filterByValidationSimple('fooValue');   // WHERE validation_simple = 'fooValue'
     * $query->filterByValidationSimple('%fooValue%'); // WHERE validation_simple LIKE '%fooValue%'
     * </code>
     *
     * @param     string $validationSimple The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByValidationSimple($validationSimple = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($validationSimple)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $validationSimple)) {
                $validationSimple = str_replace('*', '%', $validationSimple);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::VALIDATION_SIMPLE, $validationSimple, $comparison);
    }

    /**
     * Filter the query on the validation_intermediaire column
     *
     * Example usage:
     * <code>
     * $query->filterByValidationIntermediaire('fooValue');   // WHERE validation_intermediaire = 'fooValue'
     * $query->filterByValidationIntermediaire('%fooValue%'); // WHERE validation_intermediaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $validationIntermediaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByValidationIntermediaire($validationIntermediaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($validationIntermediaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $validationIntermediaire)) {
                $validationIntermediaire = str_replace('*', '%', $validationIntermediaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::VALIDATION_INTERMEDIAIRE, $validationIntermediaire, $comparison);
    }

    /**
     * Filter the query on the validation_finale column
     *
     * Example usage:
     * <code>
     * $query->filterByValidationFinale('fooValue');   // WHERE validation_finale = 'fooValue'
     * $query->filterByValidationFinale('%fooValue%'); // WHERE validation_finale LIKE '%fooValue%'
     * </code>
     *
     * @param     string $validationFinale The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByValidationFinale($validationFinale = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($validationFinale)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $validationFinale)) {
                $validationFinale = str_replace('*', '%', $validationFinale);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::VALIDATION_FINALE, $validationFinale, $comparison);
    }

    /**
     * Filter the query on the creer_suite_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByCreerSuiteConsultation('fooValue');   // WHERE creer_suite_consultation = 'fooValue'
     * $query->filterByCreerSuiteConsultation('%fooValue%'); // WHERE creer_suite_consultation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $creerSuiteConsultation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByCreerSuiteConsultation($creerSuiteConsultation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($creerSuiteConsultation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $creerSuiteConsultation)) {
                $creerSuiteConsultation = str_replace('*', '%', $creerSuiteConsultation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::CREER_SUITE_CONSULTATION, $creerSuiteConsultation, $comparison);
    }

    /**
     * Filter the query on the hyper_admin column
     *
     * Example usage:
     * <code>
     * $query->filterByHyperAdmin('fooValue');   // WHERE hyper_admin = 'fooValue'
     * $query->filterByHyperAdmin('%fooValue%'); // WHERE hyper_admin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hyperAdmin The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByHyperAdmin($hyperAdmin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hyperAdmin)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $hyperAdmin)) {
                $hyperAdmin = str_replace('*', '%', $hyperAdmin);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::HYPER_ADMIN, $hyperAdmin, $comparison);
    }

    /**
     * Filter the query on the droit_gestion_services column
     *
     * Example usage:
     * <code>
     * $query->filterByDroitGestionServices('fooValue');   // WHERE droit_gestion_services = 'fooValue'
     * $query->filterByDroitGestionServices('%fooValue%'); // WHERE droit_gestion_services LIKE '%fooValue%'
     * </code>
     *
     * @param     string $droitGestionServices The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByDroitGestionServices($droitGestionServices = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($droitGestionServices)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $droitGestionServices)) {
                $droitGestionServices = str_replace('*', '%', $droitGestionServices);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::DROIT_GESTION_SERVICES, $droitGestionServices, $comparison);
    }

    /**
     * Filter the query on the suivi_acces column
     *
     * Example usage:
     * <code>
     * $query->filterBySuiviAcces('fooValue');   // WHERE suivi_acces = 'fooValue'
     * $query->filterBySuiviAcces('%fooValue%'); // WHERE suivi_acces LIKE '%fooValue%'
     * </code>
     *
     * @param     string $suiviAcces The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterBySuiviAcces($suiviAcces = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($suiviAcces)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $suiviAcces)) {
                $suiviAcces = str_replace('*', '%', $suiviAcces);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::SUIVI_ACCES, $suiviAcces, $comparison);
    }

    /**
     * Filter the query on the statistiques_site column
     *
     * Example usage:
     * <code>
     * $query->filterByStatistiquesSite('fooValue');   // WHERE statistiques_site = 'fooValue'
     * $query->filterByStatistiquesSite('%fooValue%'); // WHERE statistiques_site LIKE '%fooValue%'
     * </code>
     *
     * @param     string $statistiquesSite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByStatistiquesSite($statistiquesSite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($statistiquesSite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $statistiquesSite)) {
                $statistiquesSite = str_replace('*', '%', $statistiquesSite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::STATISTIQUES_SITE, $statistiquesSite, $comparison);
    }

    /**
     * Filter the query on the statistiques_QoS column
     *
     * Example usage:
     * <code>
     * $query->filterByStatistiquesQos('fooValue');   // WHERE statistiques_QoS = 'fooValue'
     * $query->filterByStatistiquesQos('%fooValue%'); // WHERE statistiques_QoS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $statistiquesQos The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByStatistiquesQos($statistiquesQos = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($statistiquesQos)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $statistiquesQos)) {
                $statistiquesQos = str_replace('*', '%', $statistiquesQos);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::STATISTIQUES_QOS, $statistiquesQos, $comparison);
    }

    /**
     * Filter the query on the ouvrir_anonymat_a_distance column
     *
     * Example usage:
     * <code>
     * $query->filterByOuvrirAnonymatADistance('fooValue');   // WHERE ouvrir_anonymat_a_distance = 'fooValue'
     * $query->filterByOuvrirAnonymatADistance('%fooValue%'); // WHERE ouvrir_anonymat_a_distance LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ouvrirAnonymatADistance The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByOuvrirAnonymatADistance($ouvrirAnonymatADistance = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ouvrirAnonymatADistance)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ouvrirAnonymatADistance)) {
                $ouvrirAnonymatADistance = str_replace('*', '%', $ouvrirAnonymatADistance);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::OUVRIR_ANONYMAT_A_DISTANCE, $ouvrirAnonymatADistance, $comparison);
    }

    /**
     * Filter the query on the gestion_compte_jal column
     *
     * Example usage:
     * <code>
     * $query->filterByGestionCompteJal('fooValue');   // WHERE gestion_compte_jal = 'fooValue'
     * $query->filterByGestionCompteJal('%fooValue%'); // WHERE gestion_compte_jal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gestionCompteJal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByGestionCompteJal($gestionCompteJal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gestionCompteJal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gestionCompteJal)) {
                $gestionCompteJal = str_replace('*', '%', $gestionCompteJal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::GESTION_COMPTE_JAL, $gestionCompteJal, $comparison);
    }

    /**
     * Filter the query on the gestion_centrale_pub column
     *
     * Example usage:
     * <code>
     * $query->filterByGestionCentralePub('fooValue');   // WHERE gestion_centrale_pub = 'fooValue'
     * $query->filterByGestionCentralePub('%fooValue%'); // WHERE gestion_centrale_pub LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gestionCentralePub The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByGestionCentralePub($gestionCentralePub = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gestionCentralePub)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gestionCentralePub)) {
                $gestionCentralePub = str_replace('*', '%', $gestionCentralePub);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::GESTION_CENTRALE_PUB, $gestionCentralePub, $comparison);
    }

    /**
     * Filter the query on the Gestion_Compte_Groupe_Moniteur column
     *
     * Example usage:
     * <code>
     * $query->filterByGestionCompteGroupeMoniteur('fooValue');   // WHERE Gestion_Compte_Groupe_Moniteur = 'fooValue'
     * $query->filterByGestionCompteGroupeMoniteur('%fooValue%'); // WHERE Gestion_Compte_Groupe_Moniteur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gestionCompteGroupeMoniteur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByGestionCompteGroupeMoniteur($gestionCompteGroupeMoniteur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gestionCompteGroupeMoniteur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gestionCompteGroupeMoniteur)) {
                $gestionCompteGroupeMoniteur = str_replace('*', '%', $gestionCompteGroupeMoniteur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::GESTION_COMPTE_GROUPE_MONITEUR, $gestionCompteGroupeMoniteur, $comparison);
    }

    /**
     * Filter the query on the ouvrir_offre_technique_en_ligne column
     *
     * Example usage:
     * <code>
     * $query->filterByOuvrirOffreTechniqueEnLigne('fooValue');   // WHERE ouvrir_offre_technique_en_ligne = 'fooValue'
     * $query->filterByOuvrirOffreTechniqueEnLigne('%fooValue%'); // WHERE ouvrir_offre_technique_en_ligne LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ouvrirOffreTechniqueEnLigne The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByOuvrirOffreTechniqueEnLigne($ouvrirOffreTechniqueEnLigne = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ouvrirOffreTechniqueEnLigne)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ouvrirOffreTechniqueEnLigne)) {
                $ouvrirOffreTechniqueEnLigne = str_replace('*', '%', $ouvrirOffreTechniqueEnLigne);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::OUVRIR_OFFRE_TECHNIQUE_EN_LIGNE, $ouvrirOffreTechniqueEnLigne, $comparison);
    }

    /**
     * Filter the query on the ouvrir_offre_technique_a_distance column
     *
     * Example usage:
     * <code>
     * $query->filterByOuvrirOffreTechniqueADistance('fooValue');   // WHERE ouvrir_offre_technique_a_distance = 'fooValue'
     * $query->filterByOuvrirOffreTechniqueADistance('%fooValue%'); // WHERE ouvrir_offre_technique_a_distance LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ouvrirOffreTechniqueADistance The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByOuvrirOffreTechniqueADistance($ouvrirOffreTechniqueADistance = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ouvrirOffreTechniqueADistance)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ouvrirOffreTechniqueADistance)) {
                $ouvrirOffreTechniqueADistance = str_replace('*', '%', $ouvrirOffreTechniqueADistance);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::OUVRIR_OFFRE_TECHNIQUE_A_DISTANCE, $ouvrirOffreTechniqueADistance, $comparison);
    }

    /**
     * Filter the query on the activation_compte_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByActivationCompteEntreprise('fooValue');   // WHERE activation_compte_entreprise = 'fooValue'
     * $query->filterByActivationCompteEntreprise('%fooValue%'); // WHERE activation_compte_entreprise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $activationCompteEntreprise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByActivationCompteEntreprise($activationCompteEntreprise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($activationCompteEntreprise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $activationCompteEntreprise)) {
                $activationCompteEntreprise = str_replace('*', '%', $activationCompteEntreprise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::ACTIVATION_COMPTE_ENTREPRISE, $activationCompteEntreprise, $comparison);
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
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonHabilitationAgentPeer::IMPORTER_ENVELOPPE, $importerEnveloppe, $comparison);
    }

    /**
     * Filter the query on the suivi_seul_registre_depots_papier column
     *
     * Example usage:
     * <code>
     * $query->filterBySuiviSeulRegistreDepotsPapier('fooValue');   // WHERE suivi_seul_registre_depots_papier = 'fooValue'
     * $query->filterBySuiviSeulRegistreDepotsPapier('%fooValue%'); // WHERE suivi_seul_registre_depots_papier LIKE '%fooValue%'
     * </code>
     *
     * @param     string $suiviSeulRegistreDepotsPapier The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterBySuiviSeulRegistreDepotsPapier($suiviSeulRegistreDepotsPapier = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($suiviSeulRegistreDepotsPapier)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $suiviSeulRegistreDepotsPapier)) {
                $suiviSeulRegistreDepotsPapier = str_replace('*', '%', $suiviSeulRegistreDepotsPapier);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_DEPOTS_PAPIER, $suiviSeulRegistreDepotsPapier, $comparison);
    }

    /**
     * Filter the query on the suivi_seul_registre_retraits_papier column
     *
     * Example usage:
     * <code>
     * $query->filterBySuiviSeulRegistreRetraitsPapier('fooValue');   // WHERE suivi_seul_registre_retraits_papier = 'fooValue'
     * $query->filterBySuiviSeulRegistreRetraitsPapier('%fooValue%'); // WHERE suivi_seul_registre_retraits_papier LIKE '%fooValue%'
     * </code>
     *
     * @param     string $suiviSeulRegistreRetraitsPapier The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterBySuiviSeulRegistreRetraitsPapier($suiviSeulRegistreRetraitsPapier = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($suiviSeulRegistreRetraitsPapier)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $suiviSeulRegistreRetraitsPapier)) {
                $suiviSeulRegistreRetraitsPapier = str_replace('*', '%', $suiviSeulRegistreRetraitsPapier);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_RETRAITS_PAPIER, $suiviSeulRegistreRetraitsPapier, $comparison);
    }

    /**
     * Filter the query on the suivi_seul_registre_questions_papier column
     *
     * Example usage:
     * <code>
     * $query->filterBySuiviSeulRegistreQuestionsPapier('fooValue');   // WHERE suivi_seul_registre_questions_papier = 'fooValue'
     * $query->filterBySuiviSeulRegistreQuestionsPapier('%fooValue%'); // WHERE suivi_seul_registre_questions_papier LIKE '%fooValue%'
     * </code>
     *
     * @param     string $suiviSeulRegistreQuestionsPapier The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterBySuiviSeulRegistreQuestionsPapier($suiviSeulRegistreQuestionsPapier = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($suiviSeulRegistreQuestionsPapier)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $suiviSeulRegistreQuestionsPapier)) {
                $suiviSeulRegistreQuestionsPapier = str_replace('*', '%', $suiviSeulRegistreQuestionsPapier);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_QUESTIONS_PAPIER, $suiviSeulRegistreQuestionsPapier, $comparison);
    }

    /**
     * Filter the query on the suivi_seul_registre_depots_electronique column
     *
     * Example usage:
     * <code>
     * $query->filterBySuiviSeulRegistreDepotsElectronique('fooValue');   // WHERE suivi_seul_registre_depots_electronique = 'fooValue'
     * $query->filterBySuiviSeulRegistreDepotsElectronique('%fooValue%'); // WHERE suivi_seul_registre_depots_electronique LIKE '%fooValue%'
     * </code>
     *
     * @param     string $suiviSeulRegistreDepotsElectronique The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterBySuiviSeulRegistreDepotsElectronique($suiviSeulRegistreDepotsElectronique = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($suiviSeulRegistreDepotsElectronique)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $suiviSeulRegistreDepotsElectronique)) {
                $suiviSeulRegistreDepotsElectronique = str_replace('*', '%', $suiviSeulRegistreDepotsElectronique);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_DEPOTS_ELECTRONIQUE, $suiviSeulRegistreDepotsElectronique, $comparison);
    }

    /**
     * Filter the query on the suivi_seul_registre_retraits_electronique column
     *
     * Example usage:
     * <code>
     * $query->filterBySuiviSeulRegistreRetraitsElectronique('fooValue');   // WHERE suivi_seul_registre_retraits_electronique = 'fooValue'
     * $query->filterBySuiviSeulRegistreRetraitsElectronique('%fooValue%'); // WHERE suivi_seul_registre_retraits_electronique LIKE '%fooValue%'
     * </code>
     *
     * @param     string $suiviSeulRegistreRetraitsElectronique The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterBySuiviSeulRegistreRetraitsElectronique($suiviSeulRegistreRetraitsElectronique = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($suiviSeulRegistreRetraitsElectronique)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $suiviSeulRegistreRetraitsElectronique)) {
                $suiviSeulRegistreRetraitsElectronique = str_replace('*', '%', $suiviSeulRegistreRetraitsElectronique);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_RETRAITS_ELECTRONIQUE, $suiviSeulRegistreRetraitsElectronique, $comparison);
    }

    /**
     * Filter the query on the suivi_seul_registre_questions_electronique column
     *
     * Example usage:
     * <code>
     * $query->filterBySuiviSeulRegistreQuestionsElectronique('fooValue');   // WHERE suivi_seul_registre_questions_electronique = 'fooValue'
     * $query->filterBySuiviSeulRegistreQuestionsElectronique('%fooValue%'); // WHERE suivi_seul_registre_questions_electronique LIKE '%fooValue%'
     * </code>
     *
     * @param     string $suiviSeulRegistreQuestionsElectronique The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterBySuiviSeulRegistreQuestionsElectronique($suiviSeulRegistreQuestionsElectronique = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($suiviSeulRegistreQuestionsElectronique)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $suiviSeulRegistreQuestionsElectronique)) {
                $suiviSeulRegistreQuestionsElectronique = str_replace('*', '%', $suiviSeulRegistreQuestionsElectronique);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_QUESTIONS_ELECTRONIQUE, $suiviSeulRegistreQuestionsElectronique, $comparison);
    }

    /**
     * Filter the query on the modifier_consultation_mapa_inferieur_montant_apres_validation column
     *
     * Example usage:
     * <code>
     * $query->filterByModifierConsultationMapaInferieurMontantApresValidation('fooValue');   // WHERE modifier_consultation_mapa_inferieur_montant_apres_validation = 'fooValue'
     * $query->filterByModifierConsultationMapaInferieurMontantApresValidation('%fooValue%'); // WHERE modifier_consultation_mapa_inferieur_montant_apres_validation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $modifierConsultationMapaInferieurMontantApresValidation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByModifierConsultationMapaInferieurMontantApresValidation($modifierConsultationMapaInferieurMontantApresValidation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifierConsultationMapaInferieurMontantApresValidation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $modifierConsultationMapaInferieurMontantApresValidation)) {
                $modifierConsultationMapaInferieurMontantApresValidation = str_replace('*', '%', $modifierConsultationMapaInferieurMontantApresValidation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_MAPA_INFERIEUR_MONTANT_APRES_VALIDATION, $modifierConsultationMapaInferieurMontantApresValidation, $comparison);
    }

    /**
     * Filter the query on the modifier_consultation_mapa_superieur_montant_apres_validation column
     *
     * Example usage:
     * <code>
     * $query->filterByModifierConsultationMapaSuperieurMontantApresValidation('fooValue');   // WHERE modifier_consultation_mapa_superieur_montant_apres_validation = 'fooValue'
     * $query->filterByModifierConsultationMapaSuperieurMontantApresValidation('%fooValue%'); // WHERE modifier_consultation_mapa_superieur_montant_apres_validation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $modifierConsultationMapaSuperieurMontantApresValidation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByModifierConsultationMapaSuperieurMontantApresValidation($modifierConsultationMapaSuperieurMontantApresValidation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifierConsultationMapaSuperieurMontantApresValidation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $modifierConsultationMapaSuperieurMontantApresValidation)) {
                $modifierConsultationMapaSuperieurMontantApresValidation = str_replace('*', '%', $modifierConsultationMapaSuperieurMontantApresValidation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_MAPA_SUPERIEUR_MONTANT_APRES_VALIDATION, $modifierConsultationMapaSuperieurMontantApresValidation, $comparison);
    }

    /**
     * Filter the query on the modifier_consultation_procedures_formalisees_apres_validation column
     *
     * Example usage:
     * <code>
     * $query->filterByModifierConsultationProceduresFormaliseesApresValidation('fooValue');   // WHERE modifier_consultation_procedures_formalisees_apres_validation = 'fooValue'
     * $query->filterByModifierConsultationProceduresFormaliseesApresValidation('%fooValue%'); // WHERE modifier_consultation_procedures_formalisees_apres_validation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $modifierConsultationProceduresFormaliseesApresValidation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByModifierConsultationProceduresFormaliseesApresValidation($modifierConsultationProceduresFormaliseesApresValidation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifierConsultationProceduresFormaliseesApresValidation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $modifierConsultationProceduresFormaliseesApresValidation)) {
                $modifierConsultationProceduresFormaliseesApresValidation = str_replace('*', '%', $modifierConsultationProceduresFormaliseesApresValidation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_PROCEDURES_FORMALISEES_APRES_VALIDATION, $modifierConsultationProceduresFormaliseesApresValidation, $comparison);
    }

    /**
     * Filter the query on the gerer_les_entreprises column
     *
     * Example usage:
     * <code>
     * $query->filterByGererLesEntreprises('fooValue');   // WHERE gerer_les_entreprises = 'fooValue'
     * $query->filterByGererLesEntreprises('%fooValue%'); // WHERE gerer_les_entreprises LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gererLesEntreprises The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByGererLesEntreprises($gererLesEntreprises = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gererLesEntreprises)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gererLesEntreprises)) {
                $gererLesEntreprises = str_replace('*', '%', $gererLesEntreprises);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::GERER_LES_ENTREPRISES, $gererLesEntreprises, $comparison);
    }

    /**
     * Filter the query on the portee_societes_exclues column
     *
     * Example usage:
     * <code>
     * $query->filterByPorteeSocietesExclues('fooValue');   // WHERE portee_societes_exclues = 'fooValue'
     * $query->filterByPorteeSocietesExclues('%fooValue%'); // WHERE portee_societes_exclues LIKE '%fooValue%'
     * </code>
     *
     * @param     string $porteeSocietesExclues The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByPorteeSocietesExclues($porteeSocietesExclues = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($porteeSocietesExclues)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $porteeSocietesExclues)) {
                $porteeSocietesExclues = str_replace('*', '%', $porteeSocietesExclues);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::PORTEE_SOCIETES_EXCLUES, $porteeSocietesExclues, $comparison);
    }

    /**
     * Filter the query on the portee_societes_exclues_tous_organismes column
     *
     * Example usage:
     * <code>
     * $query->filterByPorteeSocietesExcluesTousOrganismes('fooValue');   // WHERE portee_societes_exclues_tous_organismes = 'fooValue'
     * $query->filterByPorteeSocietesExcluesTousOrganismes('%fooValue%'); // WHERE portee_societes_exclues_tous_organismes LIKE '%fooValue%'
     * </code>
     *
     * @param     string $porteeSocietesExcluesTousOrganismes The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByPorteeSocietesExcluesTousOrganismes($porteeSocietesExcluesTousOrganismes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($porteeSocietesExcluesTousOrganismes)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $porteeSocietesExcluesTousOrganismes)) {
                $porteeSocietesExcluesTousOrganismes = str_replace('*', '%', $porteeSocietesExcluesTousOrganismes);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::PORTEE_SOCIETES_EXCLUES_TOUS_ORGANISMES, $porteeSocietesExcluesTousOrganismes, $comparison);
    }

    /**
     * Filter the query on the modifier_societes_exclues column
     *
     * Example usage:
     * <code>
     * $query->filterByModifierSocietesExclues('fooValue');   // WHERE modifier_societes_exclues = 'fooValue'
     * $query->filterByModifierSocietesExclues('%fooValue%'); // WHERE modifier_societes_exclues LIKE '%fooValue%'
     * </code>
     *
     * @param     string $modifierSocietesExclues The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByModifierSocietesExclues($modifierSocietesExclues = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifierSocietesExclues)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $modifierSocietesExclues)) {
                $modifierSocietesExclues = str_replace('*', '%', $modifierSocietesExclues);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::MODIFIER_SOCIETES_EXCLUES, $modifierSocietesExclues, $comparison);
    }

    /**
     * Filter the query on the supprimer_societes_exclues column
     *
     * Example usage:
     * <code>
     * $query->filterBySupprimerSocietesExclues('fooValue');   // WHERE supprimer_societes_exclues = 'fooValue'
     * $query->filterBySupprimerSocietesExclues('%fooValue%'); // WHERE supprimer_societes_exclues LIKE '%fooValue%'
     * </code>
     *
     * @param     string $supprimerSocietesExclues The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterBySupprimerSocietesExclues($supprimerSocietesExclues = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($supprimerSocietesExclues)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $supprimerSocietesExclues)) {
                $supprimerSocietesExclues = str_replace('*', '%', $supprimerSocietesExclues);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::SUPPRIMER_SOCIETES_EXCLUES, $supprimerSocietesExclues, $comparison);
    }

    /**
     * Filter the query on the resultat_analyse column
     *
     * Example usage:
     * <code>
     * $query->filterByResultatAnalyse('fooValue');   // WHERE resultat_analyse = 'fooValue'
     * $query->filterByResultatAnalyse('%fooValue%'); // WHERE resultat_analyse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $resultatAnalyse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByResultatAnalyse($resultatAnalyse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($resultatAnalyse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $resultatAnalyse)) {
                $resultatAnalyse = str_replace('*', '%', $resultatAnalyse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::RESULTAT_ANALYSE, $resultatAnalyse, $comparison);
    }

    /**
     * Filter the query on the gerer_adresses_service column
     *
     * Example usage:
     * <code>
     * $query->filterByGererAdressesService('fooValue');   // WHERE gerer_adresses_service = 'fooValue'
     * $query->filterByGererAdressesService('%fooValue%'); // WHERE gerer_adresses_service LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gererAdressesService The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByGererAdressesService($gererAdressesService = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gererAdressesService)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gererAdressesService)) {
                $gererAdressesService = str_replace('*', '%', $gererAdressesService);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::GERER_ADRESSES_SERVICE, $gererAdressesService, $comparison);
    }

    /**
     * Filter the query on the gerer_mon_service column
     *
     * Example usage:
     * <code>
     * $query->filterByGererMonService('fooValue');   // WHERE gerer_mon_service = 'fooValue'
     * $query->filterByGererMonService('%fooValue%'); // WHERE gerer_mon_service LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gererMonService The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByGererMonService($gererMonService = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gererMonService)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gererMonService)) {
                $gererMonService = str_replace('*', '%', $gererMonService);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::GERER_MON_SERVICE, $gererMonService, $comparison);
    }

    /**
     * Filter the query on the download_archives column
     *
     * Example usage:
     * <code>
     * $query->filterByDownloadArchives('fooValue');   // WHERE download_archives = 'fooValue'
     * $query->filterByDownloadArchives('%fooValue%'); // WHERE download_archives LIKE '%fooValue%'
     * </code>
     *
     * @param     string $downloadArchives The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByDownloadArchives($downloadArchives = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($downloadArchives)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $downloadArchives)) {
                $downloadArchives = str_replace('*', '%', $downloadArchives);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::DOWNLOAD_ARCHIVES, $downloadArchives, $comparison);
    }

    /**
     * Filter the query on the creer_annonce_extrait_pv column
     *
     * Example usage:
     * <code>
     * $query->filterByCreerAnnonceExtraitPv('fooValue');   // WHERE creer_annonce_extrait_pv = 'fooValue'
     * $query->filterByCreerAnnonceExtraitPv('%fooValue%'); // WHERE creer_annonce_extrait_pv LIKE '%fooValue%'
     * </code>
     *
     * @param     string $creerAnnonceExtraitPv The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByCreerAnnonceExtraitPv($creerAnnonceExtraitPv = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($creerAnnonceExtraitPv)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $creerAnnonceExtraitPv)) {
                $creerAnnonceExtraitPv = str_replace('*', '%', $creerAnnonceExtraitPv);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::CREER_ANNONCE_EXTRAIT_PV, $creerAnnonceExtraitPv, $comparison);
    }

    /**
     * Filter the query on the creer_annonce_rapport_achevement column
     *
     * Example usage:
     * <code>
     * $query->filterByCreerAnnonceRapportAchevement('fooValue');   // WHERE creer_annonce_rapport_achevement = 'fooValue'
     * $query->filterByCreerAnnonceRapportAchevement('%fooValue%'); // WHERE creer_annonce_rapport_achevement LIKE '%fooValue%'
     * </code>
     *
     * @param     string $creerAnnonceRapportAchevement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByCreerAnnonceRapportAchevement($creerAnnonceRapportAchevement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($creerAnnonceRapportAchevement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $creerAnnonceRapportAchevement)) {
                $creerAnnonceRapportAchevement = str_replace('*', '%', $creerAnnonceRapportAchevement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::CREER_ANNONCE_RAPPORT_ACHEVEMENT, $creerAnnonceRapportAchevement, $comparison);
    }

    /**
     * Filter the query on the gestion_certificats_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByGestionCertificatsAgent('fooValue');   // WHERE gestion_certificats_agent = 'fooValue'
     * $query->filterByGestionCertificatsAgent('%fooValue%'); // WHERE gestion_certificats_agent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gestionCertificatsAgent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByGestionCertificatsAgent($gestionCertificatsAgent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gestionCertificatsAgent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gestionCertificatsAgent)) {
                $gestionCertificatsAgent = str_replace('*', '%', $gestionCertificatsAgent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::GESTION_CERTIFICATS_AGENT, $gestionCertificatsAgent, $comparison);
    }

    /**
     * Filter the query on the creer_avis_programme_previsionnel column
     *
     * Example usage:
     * <code>
     * $query->filterByCreerAvisProgrammePrevisionnel('fooValue');   // WHERE creer_avis_programme_previsionnel = 'fooValue'
     * $query->filterByCreerAvisProgrammePrevisionnel('%fooValue%'); // WHERE creer_avis_programme_previsionnel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $creerAvisProgrammePrevisionnel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByCreerAvisProgrammePrevisionnel($creerAvisProgrammePrevisionnel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($creerAvisProgrammePrevisionnel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $creerAvisProgrammePrevisionnel)) {
                $creerAvisProgrammePrevisionnel = str_replace('*', '%', $creerAvisProgrammePrevisionnel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::CREER_AVIS_PROGRAMME_PREVISIONNEL, $creerAvisProgrammePrevisionnel, $comparison);
    }

    /**
     * Filter the query on the annuler_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByAnnulerConsultation('fooValue');   // WHERE annuler_consultation = 'fooValue'
     * $query->filterByAnnulerConsultation('%fooValue%'); // WHERE annuler_consultation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $annulerConsultation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByAnnulerConsultation($annulerConsultation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($annulerConsultation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $annulerConsultation)) {
                $annulerConsultation = str_replace('*', '%', $annulerConsultation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::ANNULER_CONSULTATION, $annulerConsultation, $comparison);
    }

    /**
     * Filter the query on the envoyer_publicite column
     *
     * Example usage:
     * <code>
     * $query->filterByEnvoyerPublicite('fooValue');   // WHERE envoyer_publicite = 'fooValue'
     * $query->filterByEnvoyerPublicite('%fooValue%'); // WHERE envoyer_publicite LIKE '%fooValue%'
     * </code>
     *
     * @param     string $envoyerPublicite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByEnvoyerPublicite($envoyerPublicite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($envoyerPublicite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $envoyerPublicite)) {
                $envoyerPublicite = str_replace('*', '%', $envoyerPublicite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::ENVOYER_PUBLICITE, $envoyerPublicite, $comparison);
    }

    /**
     * Filter the query on the liste_marches_notifies column
     *
     * Example usage:
     * <code>
     * $query->filterByListeMarchesNotifies('fooValue');   // WHERE liste_marches_notifies = 'fooValue'
     * $query->filterByListeMarchesNotifies('%fooValue%'); // WHERE liste_marches_notifies LIKE '%fooValue%'
     * </code>
     *
     * @param     string $listeMarchesNotifies The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByListeMarchesNotifies($listeMarchesNotifies = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($listeMarchesNotifies)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $listeMarchesNotifies)) {
                $listeMarchesNotifies = str_replace('*', '%', $listeMarchesNotifies);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::LISTE_MARCHES_NOTIFIES, $listeMarchesNotifies, $comparison);
    }

    /**
     * Filter the query on the suivre_message column
     *
     * Example usage:
     * <code>
     * $query->filterBySuivreMessage('fooValue');   // WHERE suivre_message = 'fooValue'
     * $query->filterBySuivreMessage('%fooValue%'); // WHERE suivre_message LIKE '%fooValue%'
     * </code>
     *
     * @param     string $suivreMessage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterBySuivreMessage($suivreMessage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($suivreMessage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $suivreMessage)) {
                $suivreMessage = str_replace('*', '%', $suivreMessage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::SUIVRE_MESSAGE, $suivreMessage, $comparison);
    }

    /**
     * Filter the query on the envoyer_message column
     *
     * Example usage:
     * <code>
     * $query->filterByEnvoyerMessage('fooValue');   // WHERE envoyer_message = 'fooValue'
     * $query->filterByEnvoyerMessage('%fooValue%'); // WHERE envoyer_message LIKE '%fooValue%'
     * </code>
     *
     * @param     string $envoyerMessage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByEnvoyerMessage($envoyerMessage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($envoyerMessage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $envoyerMessage)) {
                $envoyerMessage = str_replace('*', '%', $envoyerMessage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::ENVOYER_MESSAGE, $envoyerMessage, $comparison);
    }

    /**
     * Filter the query on the suivi_flux_chorus_transversal column
     *
     * Example usage:
     * <code>
     * $query->filterBySuiviFluxChorusTransversal('fooValue');   // WHERE suivi_flux_chorus_transversal = 'fooValue'
     * $query->filterBySuiviFluxChorusTransversal('%fooValue%'); // WHERE suivi_flux_chorus_transversal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $suiviFluxChorusTransversal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterBySuiviFluxChorusTransversal($suiviFluxChorusTransversal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($suiviFluxChorusTransversal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $suiviFluxChorusTransversal)) {
                $suiviFluxChorusTransversal = str_replace('*', '%', $suiviFluxChorusTransversal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::SUIVI_FLUX_CHORUS_TRANSVERSAL, $suiviFluxChorusTransversal, $comparison);
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
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonHabilitationAgentPeer::GESTION_MANDATAIRE, $gestionMandataire, $comparison);
    }

    /**
     * Filter the query on the gerer_newsletter column
     *
     * Example usage:
     * <code>
     * $query->filterByGererNewsletter('fooValue');   // WHERE gerer_newsletter = 'fooValue'
     * $query->filterByGererNewsletter('%fooValue%'); // WHERE gerer_newsletter LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gererNewsletter The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByGererNewsletter($gererNewsletter = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gererNewsletter)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gererNewsletter)) {
                $gererNewsletter = str_replace('*', '%', $gererNewsletter);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::GERER_NEWSLETTER, $gererNewsletter, $comparison);
    }

    /**
     * Filter the query on the gestion_modeles_formulaire column
     *
     * Example usage:
     * <code>
     * $query->filterByGestionModelesFormulaire('fooValue');   // WHERE gestion_modeles_formulaire = 'fooValue'
     * $query->filterByGestionModelesFormulaire('%fooValue%'); // WHERE gestion_modeles_formulaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gestionModelesFormulaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByGestionModelesFormulaire($gestionModelesFormulaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gestionModelesFormulaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gestionModelesFormulaire)) {
                $gestionModelesFormulaire = str_replace('*', '%', $gestionModelesFormulaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::GESTION_MODELES_FORMULAIRE, $gestionModelesFormulaire, $comparison);
    }

    /**
     * Filter the query on the gestion_adresses_facturation_jal column
     *
     * Example usage:
     * <code>
     * $query->filterByGestionAdressesFacturationJal('fooValue');   // WHERE gestion_adresses_facturation_jal = 'fooValue'
     * $query->filterByGestionAdressesFacturationJal('%fooValue%'); // WHERE gestion_adresses_facturation_jal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gestionAdressesFacturationJal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByGestionAdressesFacturationJal($gestionAdressesFacturationJal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gestionAdressesFacturationJal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gestionAdressesFacturationJal)) {
                $gestionAdressesFacturationJal = str_replace('*', '%', $gestionAdressesFacturationJal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::GESTION_ADRESSES_FACTURATION_JAL, $gestionAdressesFacturationJal, $comparison);
    }

    /**
     * Filter the query on the administrer_adresses_facturation_jal column
     *
     * Example usage:
     * <code>
     * $query->filterByAdministrerAdressesFacturationJal('fooValue');   // WHERE administrer_adresses_facturation_jal = 'fooValue'
     * $query->filterByAdministrerAdressesFacturationJal('%fooValue%'); // WHERE administrer_adresses_facturation_jal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $administrerAdressesFacturationJal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByAdministrerAdressesFacturationJal($administrerAdressesFacturationJal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($administrerAdressesFacturationJal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $administrerAdressesFacturationJal)) {
                $administrerAdressesFacturationJal = str_replace('*', '%', $administrerAdressesFacturationJal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::ADMINISTRER_ADRESSES_FACTURATION_JAL, $administrerAdressesFacturationJal, $comparison);
    }

    /**
     * Filter the query on the redaction_documents_redac column
     *
     * Example usage:
     * <code>
     * $query->filterByRedactionDocumentsRedac('fooValue');   // WHERE redaction_documents_redac = 'fooValue'
     * $query->filterByRedactionDocumentsRedac('%fooValue%'); // WHERE redaction_documents_redac LIKE '%fooValue%'
     * </code>
     *
     * @param     string $redactionDocumentsRedac The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByRedactionDocumentsRedac($redactionDocumentsRedac = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($redactionDocumentsRedac)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $redactionDocumentsRedac)) {
                $redactionDocumentsRedac = str_replace('*', '%', $redactionDocumentsRedac);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::REDACTION_DOCUMENTS_REDAC, $redactionDocumentsRedac, $comparison);
    }

    /**
     * Filter the query on the validation_documents_redac column
     *
     * Example usage:
     * <code>
     * $query->filterByValidationDocumentsRedac('fooValue');   // WHERE validation_documents_redac = 'fooValue'
     * $query->filterByValidationDocumentsRedac('%fooValue%'); // WHERE validation_documents_redac LIKE '%fooValue%'
     * </code>
     *
     * @param     string $validationDocumentsRedac The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByValidationDocumentsRedac($validationDocumentsRedac = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($validationDocumentsRedac)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $validationDocumentsRedac)) {
                $validationDocumentsRedac = str_replace('*', '%', $validationDocumentsRedac);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::VALIDATION_DOCUMENTS_REDAC, $validationDocumentsRedac, $comparison);
    }

    /**
     * Filter the query on the gestion_mise_disposition_pieces_marche column
     *
     * Example usage:
     * <code>
     * $query->filterByGestionMiseDispositionPiecesMarche('fooValue');   // WHERE gestion_mise_disposition_pieces_marche = 'fooValue'
     * $query->filterByGestionMiseDispositionPiecesMarche('%fooValue%'); // WHERE gestion_mise_disposition_pieces_marche LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gestionMiseDispositionPiecesMarche The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByGestionMiseDispositionPiecesMarche($gestionMiseDispositionPiecesMarche = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gestionMiseDispositionPiecesMarche)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gestionMiseDispositionPiecesMarche)) {
                $gestionMiseDispositionPiecesMarche = str_replace('*', '%', $gestionMiseDispositionPiecesMarche);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::GESTION_MISE_DISPOSITION_PIECES_MARCHE, $gestionMiseDispositionPiecesMarche, $comparison);
    }

    /**
     * Filter the query on the annuaire_acheteur column
     *
     * Example usage:
     * <code>
     * $query->filterByAnnuaireAcheteur('fooValue');   // WHERE annuaire_acheteur = 'fooValue'
     * $query->filterByAnnuaireAcheteur('%fooValue%'); // WHERE annuaire_acheteur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $annuaireAcheteur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByAnnuaireAcheteur($annuaireAcheteur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($annuaireAcheteur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $annuaireAcheteur)) {
                $annuaireAcheteur = str_replace('*', '%', $annuaireAcheteur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::ANNUAIRE_ACHETEUR, $annuaireAcheteur, $comparison);
    }

    /**
     * Filter the query on the reprendre_integralement_article column
     *
     * Example usage:
     * <code>
     * $query->filterByReprendreIntegralementArticle('fooValue');   // WHERE reprendre_integralement_article = 'fooValue'
     * $query->filterByReprendreIntegralementArticle('%fooValue%'); // WHERE reprendre_integralement_article LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reprendreIntegralementArticle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByReprendreIntegralementArticle($reprendreIntegralementArticle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reprendreIntegralementArticle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $reprendreIntegralementArticle)) {
                $reprendreIntegralementArticle = str_replace('*', '%', $reprendreIntegralementArticle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::REPRENDRE_INTEGRALEMENT_ARTICLE, $reprendreIntegralementArticle, $comparison);
    }

    /**
     * Filter the query on the administrer_clauses column
     *
     * Example usage:
     * <code>
     * $query->filterByAdministrerClauses('fooValue');   // WHERE administrer_clauses = 'fooValue'
     * $query->filterByAdministrerClauses('%fooValue%'); // WHERE administrer_clauses LIKE '%fooValue%'
     * </code>
     *
     * @param     string $administrerClauses The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByAdministrerClauses($administrerClauses = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($administrerClauses)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $administrerClauses)) {
                $administrerClauses = str_replace('*', '%', $administrerClauses);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::ADMINISTRER_CLAUSES, $administrerClauses, $comparison);
    }

    /**
     * Filter the query on the valider_clauses column
     *
     * Example usage:
     * <code>
     * $query->filterByValiderClauses('fooValue');   // WHERE valider_clauses = 'fooValue'
     * $query->filterByValiderClauses('%fooValue%'); // WHERE valider_clauses LIKE '%fooValue%'
     * </code>
     *
     * @param     string $validerClauses The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByValiderClauses($validerClauses = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($validerClauses)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $validerClauses)) {
                $validerClauses = str_replace('*', '%', $validerClauses);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::VALIDER_CLAUSES, $validerClauses, $comparison);
    }

    /**
     * Filter the query on the administrer_canevas column
     *
     * Example usage:
     * <code>
     * $query->filterByAdministrerCanevas('fooValue');   // WHERE administrer_canevas = 'fooValue'
     * $query->filterByAdministrerCanevas('%fooValue%'); // WHERE administrer_canevas LIKE '%fooValue%'
     * </code>
     *
     * @param     string $administrerCanevas The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByAdministrerCanevas($administrerCanevas = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($administrerCanevas)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $administrerCanevas)) {
                $administrerCanevas = str_replace('*', '%', $administrerCanevas);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::ADMINISTRER_CANEVAS, $administrerCanevas, $comparison);
    }

    /**
     * Filter the query on the valider_canevas column
     *
     * Example usage:
     * <code>
     * $query->filterByValiderCanevas('fooValue');   // WHERE valider_canevas = 'fooValue'
     * $query->filterByValiderCanevas('%fooValue%'); // WHERE valider_canevas LIKE '%fooValue%'
     * </code>
     *
     * @param     string $validerCanevas The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByValiderCanevas($validerCanevas = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($validerCanevas)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $validerCanevas)) {
                $validerCanevas = str_replace('*', '%', $validerCanevas);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::VALIDER_CANEVAS, $validerCanevas, $comparison);
    }

    /**
     * Filter the query on the administrer_clauses_entite_achats column
     *
     * Example usage:
     * <code>
     * $query->filterByAdministrerClausesEntiteAchats('fooValue');   // WHERE administrer_clauses_entite_achats = 'fooValue'
     * $query->filterByAdministrerClausesEntiteAchats('%fooValue%'); // WHERE administrer_clauses_entite_achats LIKE '%fooValue%'
     * </code>
     *
     * @param     string $administrerClausesEntiteAchats The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByAdministrerClausesEntiteAchats($administrerClausesEntiteAchats = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($administrerClausesEntiteAchats)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $administrerClausesEntiteAchats)) {
                $administrerClausesEntiteAchats = str_replace('*', '%', $administrerClausesEntiteAchats);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::ADMINISTRER_CLAUSES_ENTITE_ACHATS, $administrerClausesEntiteAchats, $comparison);
    }

    /**
     * Filter the query on the generer_pieces_format_odt column
     *
     * Example usage:
     * <code>
     * $query->filterByGenererPiecesFormatOdt('fooValue');   // WHERE generer_pieces_format_odt = 'fooValue'
     * $query->filterByGenererPiecesFormatOdt('%fooValue%'); // WHERE generer_pieces_format_odt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $genererPiecesFormatOdt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByGenererPiecesFormatOdt($genererPiecesFormatOdt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($genererPiecesFormatOdt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $genererPiecesFormatOdt)) {
                $genererPiecesFormatOdt = str_replace('*', '%', $genererPiecesFormatOdt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::GENERER_PIECES_FORMAT_ODT, $genererPiecesFormatOdt, $comparison);
    }

    /**
     * Filter the query on the publier_version_clausier_editeur column
     *
     * Example usage:
     * <code>
     * $query->filterByPublierVersionClausierEditeur('fooValue');   // WHERE publier_version_clausier_editeur = 'fooValue'
     * $query->filterByPublierVersionClausierEditeur('%fooValue%'); // WHERE publier_version_clausier_editeur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $publierVersionClausierEditeur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByPublierVersionClausierEditeur($publierVersionClausierEditeur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($publierVersionClausierEditeur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $publierVersionClausierEditeur)) {
                $publierVersionClausierEditeur = str_replace('*', '%', $publierVersionClausierEditeur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::PUBLIER_VERSION_CLAUSIER_EDITEUR, $publierVersionClausierEditeur, $comparison);
    }

    /**
     * Filter the query on the administrer_clauses_editeur column
     *
     * Example usage:
     * <code>
     * $query->filterByAdministrerClausesEditeur('fooValue');   // WHERE administrer_clauses_editeur = 'fooValue'
     * $query->filterByAdministrerClausesEditeur('%fooValue%'); // WHERE administrer_clauses_editeur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $administrerClausesEditeur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByAdministrerClausesEditeur($administrerClausesEditeur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($administrerClausesEditeur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $administrerClausesEditeur)) {
                $administrerClausesEditeur = str_replace('*', '%', $administrerClausesEditeur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::ADMINISTRER_CLAUSES_EDITEUR, $administrerClausesEditeur, $comparison);
    }

    /**
     * Filter the query on the valider_clauses_editeur column
     *
     * Example usage:
     * <code>
     * $query->filterByValiderClausesEditeur('fooValue');   // WHERE valider_clauses_editeur = 'fooValue'
     * $query->filterByValiderClausesEditeur('%fooValue%'); // WHERE valider_clauses_editeur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $validerClausesEditeur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByValiderClausesEditeur($validerClausesEditeur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($validerClausesEditeur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $validerClausesEditeur)) {
                $validerClausesEditeur = str_replace('*', '%', $validerClausesEditeur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::VALIDER_CLAUSES_EDITEUR, $validerClausesEditeur, $comparison);
    }

    /**
     * Filter the query on the administrer_canevas_editeur column
     *
     * Example usage:
     * <code>
     * $query->filterByAdministrerCanevasEditeur('fooValue');   // WHERE administrer_canevas_editeur = 'fooValue'
     * $query->filterByAdministrerCanevasEditeur('%fooValue%'); // WHERE administrer_canevas_editeur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $administrerCanevasEditeur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByAdministrerCanevasEditeur($administrerCanevasEditeur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($administrerCanevasEditeur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $administrerCanevasEditeur)) {
                $administrerCanevasEditeur = str_replace('*', '%', $administrerCanevasEditeur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::ADMINISTRER_CANEVAS_EDITEUR, $administrerCanevasEditeur, $comparison);
    }

    /**
     * Filter the query on the valider_canevas_editeur column
     *
     * Example usage:
     * <code>
     * $query->filterByValiderCanevasEditeur('fooValue');   // WHERE valider_canevas_editeur = 'fooValue'
     * $query->filterByValiderCanevasEditeur('%fooValue%'); // WHERE valider_canevas_editeur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $validerCanevasEditeur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByValiderCanevasEditeur($validerCanevasEditeur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($validerCanevasEditeur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $validerCanevasEditeur)) {
                $validerCanevasEditeur = str_replace('*', '%', $validerCanevasEditeur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::VALIDER_CANEVAS_EDITEUR, $validerCanevasEditeur, $comparison);
    }

    /**
     * Filter the query on the decision_suivi_seul column
     *
     * Example usage:
     * <code>
     * $query->filterByDecisionSuiviSeul('fooValue');   // WHERE decision_suivi_seul = 'fooValue'
     * $query->filterByDecisionSuiviSeul('%fooValue%'); // WHERE decision_suivi_seul LIKE '%fooValue%'
     * </code>
     *
     * @param     string $decisionSuiviSeul The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByDecisionSuiviSeul($decisionSuiviSeul = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($decisionSuiviSeul)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $decisionSuiviSeul)) {
                $decisionSuiviSeul = str_replace('*', '%', $decisionSuiviSeul);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::DECISION_SUIVI_SEUL, $decisionSuiviSeul, $comparison);
    }

    /**
     * Filter the query on the ouvrir_candidature_hors_ligne column
     *
     * Example usage:
     * <code>
     * $query->filterByOuvrirCandidatureHorsLigne('fooValue');   // WHERE ouvrir_candidature_hors_ligne = 'fooValue'
     * $query->filterByOuvrirCandidatureHorsLigne('%fooValue%'); // WHERE ouvrir_candidature_hors_ligne LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ouvrirCandidatureHorsLigne The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByOuvrirCandidatureHorsLigne($ouvrirCandidatureHorsLigne = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ouvrirCandidatureHorsLigne)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ouvrirCandidatureHorsLigne)) {
                $ouvrirCandidatureHorsLigne = str_replace('*', '%', $ouvrirCandidatureHorsLigne);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::OUVRIR_CANDIDATURE_HORS_LIGNE, $ouvrirCandidatureHorsLigne, $comparison);
    }

    /**
     * Filter the query on the ouvrir_offre_hors_ligne column
     *
     * Example usage:
     * <code>
     * $query->filterByOuvrirOffreHorsLigne('fooValue');   // WHERE ouvrir_offre_hors_ligne = 'fooValue'
     * $query->filterByOuvrirOffreHorsLigne('%fooValue%'); // WHERE ouvrir_offre_hors_ligne LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ouvrirOffreHorsLigne The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByOuvrirOffreHorsLigne($ouvrirOffreHorsLigne = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ouvrirOffreHorsLigne)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ouvrirOffreHorsLigne)) {
                $ouvrirOffreHorsLigne = str_replace('*', '%', $ouvrirOffreHorsLigne);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::OUVRIR_OFFRE_HORS_LIGNE, $ouvrirOffreHorsLigne, $comparison);
    }

    /**
     * Filter the query on the ouvrir_offre_technique_hors_ligne column
     *
     * Example usage:
     * <code>
     * $query->filterByOuvrirOffreTechniqueHorsLigne('fooValue');   // WHERE ouvrir_offre_technique_hors_ligne = 'fooValue'
     * $query->filterByOuvrirOffreTechniqueHorsLigne('%fooValue%'); // WHERE ouvrir_offre_technique_hors_ligne LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ouvrirOffreTechniqueHorsLigne The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByOuvrirOffreTechniqueHorsLigne($ouvrirOffreTechniqueHorsLigne = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ouvrirOffreTechniqueHorsLigne)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ouvrirOffreTechniqueHorsLigne)) {
                $ouvrirOffreTechniqueHorsLigne = str_replace('*', '%', $ouvrirOffreTechniqueHorsLigne);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::OUVRIR_OFFRE_TECHNIQUE_HORS_LIGNE, $ouvrirOffreTechniqueHorsLigne, $comparison);
    }

    /**
     * Filter the query on the ouvrir_anonymat_hors_ligne column
     *
     * Example usage:
     * <code>
     * $query->filterByOuvrirAnonymatHorsLigne('fooValue');   // WHERE ouvrir_anonymat_hors_ligne = 'fooValue'
     * $query->filterByOuvrirAnonymatHorsLigne('%fooValue%'); // WHERE ouvrir_anonymat_hors_ligne LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ouvrirAnonymatHorsLigne The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByOuvrirAnonymatHorsLigne($ouvrirAnonymatHorsLigne = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ouvrirAnonymatHorsLigne)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ouvrirAnonymatHorsLigne)) {
                $ouvrirAnonymatHorsLigne = str_replace('*', '%', $ouvrirAnonymatHorsLigne);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::OUVRIR_ANONYMAT_HORS_LIGNE, $ouvrirAnonymatHorsLigne, $comparison);
    }

    /**
     * Filter the query on the espace_collaboratif_gestionnaire column
     *
     * Example usage:
     * <code>
     * $query->filterByEspaceCollaboratifGestionnaire('fooValue');   // WHERE espace_collaboratif_gestionnaire = 'fooValue'
     * $query->filterByEspaceCollaboratifGestionnaire('%fooValue%'); // WHERE espace_collaboratif_gestionnaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $espaceCollaboratifGestionnaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByEspaceCollaboratifGestionnaire($espaceCollaboratifGestionnaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($espaceCollaboratifGestionnaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $espaceCollaboratifGestionnaire)) {
                $espaceCollaboratifGestionnaire = str_replace('*', '%', $espaceCollaboratifGestionnaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::ESPACE_COLLABORATIF_GESTIONNAIRE, $espaceCollaboratifGestionnaire, $comparison);
    }

    /**
     * Filter the query on the espace_collaboratif_contributeur column
     *
     * Example usage:
     * <code>
     * $query->filterByEspaceCollaboratifContributeur('fooValue');   // WHERE espace_collaboratif_contributeur = 'fooValue'
     * $query->filterByEspaceCollaboratifContributeur('%fooValue%'); // WHERE espace_collaboratif_contributeur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $espaceCollaboratifContributeur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByEspaceCollaboratifContributeur($espaceCollaboratifContributeur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($espaceCollaboratifContributeur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $espaceCollaboratifContributeur)) {
                $espaceCollaboratifContributeur = str_replace('*', '%', $espaceCollaboratifContributeur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::ESPACE_COLLABORATIF_CONTRIBUTEUR, $espaceCollaboratifContributeur, $comparison);
    }

    /**
     * Filter the query on the gerer_organismes column
     *
     * Example usage:
     * <code>
     * $query->filterByGererOrganismes('fooValue');   // WHERE gerer_organismes = 'fooValue'
     * $query->filterByGererOrganismes('%fooValue%'); // WHERE gerer_organismes LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gererOrganismes The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByGererOrganismes($gererOrganismes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gererOrganismes)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gererOrganismes)) {
                $gererOrganismes = str_replace('*', '%', $gererOrganismes);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::GERER_ORGANISMES, $gererOrganismes, $comparison);
    }

    /**
     * Filter the query on the gerer_associations_agents column
     *
     * Example usage:
     * <code>
     * $query->filterByGererAssociationsAgents('fooValue');   // WHERE gerer_associations_agents = 'fooValue'
     * $query->filterByGererAssociationsAgents('%fooValue%'); // WHERE gerer_associations_agents LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gererAssociationsAgents The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByGererAssociationsAgents($gererAssociationsAgents = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gererAssociationsAgents)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gererAssociationsAgents)) {
                $gererAssociationsAgents = str_replace('*', '%', $gererAssociationsAgents);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::GERER_ASSOCIATIONS_AGENTS, $gererAssociationsAgents, $comparison);
    }

    /**
     * Filter the query on the module_redaction_uniquement column
     *
     * Example usage:
     * <code>
     * $query->filterByModuleRedactionUniquement('fooValue');   // WHERE module_redaction_uniquement = 'fooValue'
     * $query->filterByModuleRedactionUniquement('%fooValue%'); // WHERE module_redaction_uniquement LIKE '%fooValue%'
     * </code>
     *
     * @param     string $moduleRedactionUniquement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByModuleRedactionUniquement($moduleRedactionUniquement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($moduleRedactionUniquement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $moduleRedactionUniquement)) {
                $moduleRedactionUniquement = str_replace('*', '%', $moduleRedactionUniquement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::MODULE_REDACTION_UNIQUEMENT, $moduleRedactionUniquement, $comparison);
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
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonHabilitationAgentPeer::HISTORIQUE_NAVIGATION_INSCRITS, $historiqueNavigationInscrits, $comparison);
    }

    /**
     * Filter the query on the telecharger_accords_cadres column
     *
     * Example usage:
     * <code>
     * $query->filterByTelechargerAccordsCadres('fooValue');   // WHERE telecharger_accords_cadres = 'fooValue'
     * $query->filterByTelechargerAccordsCadres('%fooValue%'); // WHERE telecharger_accords_cadres LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telechargerAccordsCadres The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByTelechargerAccordsCadres($telechargerAccordsCadres = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telechargerAccordsCadres)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telechargerAccordsCadres)) {
                $telechargerAccordsCadres = str_replace('*', '%', $telechargerAccordsCadres);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::TELECHARGER_ACCORDS_CADRES, $telechargerAccordsCadres, $comparison);
    }

    /**
     * Filter the query on the creer_annonce_decision_resiliation column
     *
     * Example usage:
     * <code>
     * $query->filterByCreerAnnonceDecisionResiliation('fooValue');   // WHERE creer_annonce_decision_resiliation = 'fooValue'
     * $query->filterByCreerAnnonceDecisionResiliation('%fooValue%'); // WHERE creer_annonce_decision_resiliation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $creerAnnonceDecisionResiliation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByCreerAnnonceDecisionResiliation($creerAnnonceDecisionResiliation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($creerAnnonceDecisionResiliation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $creerAnnonceDecisionResiliation)) {
                $creerAnnonceDecisionResiliation = str_replace('*', '%', $creerAnnonceDecisionResiliation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::CREER_ANNONCE_DECISION_RESILIATION, $creerAnnonceDecisionResiliation, $comparison);
    }

    /**
     * Filter the query on the creer_annonce_synthese_rapport_audit column
     *
     * Example usage:
     * <code>
     * $query->filterByCreerAnnonceSyntheseRapportAudit('fooValue');   // WHERE creer_annonce_synthese_rapport_audit = 'fooValue'
     * $query->filterByCreerAnnonceSyntheseRapportAudit('%fooValue%'); // WHERE creer_annonce_synthese_rapport_audit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $creerAnnonceSyntheseRapportAudit The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByCreerAnnonceSyntheseRapportAudit($creerAnnonceSyntheseRapportAudit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($creerAnnonceSyntheseRapportAudit)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $creerAnnonceSyntheseRapportAudit)) {
                $creerAnnonceSyntheseRapportAudit = str_replace('*', '%', $creerAnnonceSyntheseRapportAudit);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::CREER_ANNONCE_SYNTHESE_RAPPORT_AUDIT, $creerAnnonceSyntheseRapportAudit, $comparison);
    }

    /**
     * Filter the query on the gerer_operations column
     *
     * Example usage:
     * <code>
     * $query->filterByGererOperations('fooValue');   // WHERE gerer_operations = 'fooValue'
     * $query->filterByGererOperations('%fooValue%'); // WHERE gerer_operations LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gererOperations The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByGererOperations($gererOperations = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gererOperations)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gererOperations)) {
                $gererOperations = str_replace('*', '%', $gererOperations);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::GERER_OPERATIONS, $gererOperations, $comparison);
    }

    /**
     * Filter the query on the telecharger_siret_acheteur column
     *
     * Example usage:
     * <code>
     * $query->filterByTelechargerSiretAcheteur('fooValue');   // WHERE telecharger_siret_acheteur = 'fooValue'
     * $query->filterByTelechargerSiretAcheteur('%fooValue%'); // WHERE telecharger_siret_acheteur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telechargerSiretAcheteur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByTelechargerSiretAcheteur($telechargerSiretAcheteur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telechargerSiretAcheteur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telechargerSiretAcheteur)) {
                $telechargerSiretAcheteur = str_replace('*', '%', $telechargerSiretAcheteur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::TELECHARGER_SIRET_ACHETEUR, $telechargerSiretAcheteur, $comparison);
    }

    /**
     * Filter the query on the gerer_reouvertures_modification column
     *
     * Example usage:
     * <code>
     * $query->filterByGererReouverturesModification('fooValue');   // WHERE gerer_reouvertures_modification = 'fooValue'
     * $query->filterByGererReouverturesModification('%fooValue%'); // WHERE gerer_reouvertures_modification LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gererReouverturesModification The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByGererReouverturesModification($gererReouverturesModification = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gererReouverturesModification)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gererReouverturesModification)) {
                $gererReouverturesModification = str_replace('*', '%', $gererReouverturesModification);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::GERER_REOUVERTURES_MODIFICATION, $gererReouverturesModification, $comparison);
    }

    /**
     * Filter the query on the envoyer_demande_validation column
     *
     * Example usage:
     * <code>
     * $query->filterByEnvoyerDemandeValidation('fooValue');   // WHERE envoyer_demande_validation = 'fooValue'
     * $query->filterByEnvoyerDemandeValidation('%fooValue%'); // WHERE envoyer_demande_validation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $envoyerDemandeValidation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByEnvoyerDemandeValidation($envoyerDemandeValidation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($envoyerDemandeValidation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $envoyerDemandeValidation)) {
                $envoyerDemandeValidation = str_replace('*', '%', $envoyerDemandeValidation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::ENVOYER_DEMANDE_VALIDATION, $envoyerDemandeValidation, $comparison);
    }

    /**
     * Filter the query on the suivre_consultation_organisme column
     *
     * Example usage:
     * <code>
     * $query->filterBySuivreConsultationOrganisme('fooValue');   // WHERE suivre_consultation_organisme = 'fooValue'
     * $query->filterBySuivreConsultationOrganisme('%fooValue%'); // WHERE suivre_consultation_organisme LIKE '%fooValue%'
     * </code>
     *
     * @param     string $suivreConsultationOrganisme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterBySuivreConsultationOrganisme($suivreConsultationOrganisme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($suivreConsultationOrganisme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $suivreConsultationOrganisme)) {
                $suivreConsultationOrganisme = str_replace('*', '%', $suivreConsultationOrganisme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::SUIVRE_CONSULTATION_ORGANISME, $suivreConsultationOrganisme, $comparison);
    }

    /**
     * Filter the query on the renseigner_montant column
     *
     * Example usage:
     * <code>
     * $query->filterByRenseignerMontant('fooValue');   // WHERE renseigner_montant = 'fooValue'
     * $query->filterByRenseignerMontant('%fooValue%'); // WHERE renseigner_montant LIKE '%fooValue%'
     * </code>
     *
     * @param     string $renseignerMontant The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByRenseignerMontant($renseignerMontant = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($renseignerMontant)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $renseignerMontant)) {
                $renseignerMontant = str_replace('*', '%', $renseignerMontant);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::RENSEIGNER_MONTANT, $renseignerMontant, $comparison);
    }

    /**
     * Filter the query on the gestion_referentiel_contact column
     *
     * Example usage:
     * <code>
     * $query->filterByGestionReferentielContact('fooValue');   // WHERE gestion_referentiel_contact = 'fooValue'
     * $query->filterByGestionReferentielContact('%fooValue%'); // WHERE gestion_referentiel_contact LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gestionReferentielContact The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByGestionReferentielContact($gestionReferentielContact = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gestionReferentielContact)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gestionReferentielContact)) {
                $gestionReferentielContact = str_replace('*', '%', $gestionReferentielContact);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::GESTION_REFERENTIEL_CONTACT, $gestionReferentielContact, $comparison);
    }

    /**
     * Filter the query on the gerer_cao column
     *
     * Example usage:
     * <code>
     * $query->filterByGererCao('fooValue');   // WHERE gerer_cao = 'fooValue'
     * $query->filterByGererCao('%fooValue%'); // WHERE gerer_cao LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gererCao The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByGererCao($gererCao = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gererCao)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gererCao)) {
                $gererCao = str_replace('*', '%', $gererCao);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::GERER_CAO, $gererCao, $comparison);
    }

    /**
     * Filter the query on the validation_acces_facture column
     *
     * Example usage:
     * <code>
     * $query->filterByValidationAccesFacture('fooValue');   // WHERE validation_acces_facture = 'fooValue'
     * $query->filterByValidationAccesFacture('%fooValue%'); // WHERE validation_acces_facture LIKE '%fooValue%'
     * </code>
     *
     * @param     string $validationAccesFacture The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByValidationAccesFacture($validationAccesFacture = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($validationAccesFacture)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $validationAccesFacture)) {
                $validationAccesFacture = str_replace('*', '%', $validationAccesFacture);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHabilitationAgentPeer::VALIDATION_ACCES_FACTURE, $validationAccesFacture, $comparison);
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
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonHabilitationAgentPeer::GESTION_TRAVAUX_CAO, $gestionTravauxCao, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonHabilitationAgent $commonHabilitationAgent Object to remove from the list of results
     *
     * @return CommonHabilitationAgentQuery The current query, for fluid interface
     */
    public function prune($commonHabilitationAgent = null)
    {
        if ($commonHabilitationAgent) {
            $this->addUsingAlias(CommonHabilitationAgentPeer::ID_AGENT, $commonHabilitationAgent->getIdAgent(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
