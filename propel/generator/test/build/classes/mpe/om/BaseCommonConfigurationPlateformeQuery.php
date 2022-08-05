<?php


/**
 * Base class that represents a query for the 'configuration_plateforme' table.
 *
 * 
 *
 * @method CommonConfigurationPlateformeQuery orderByIdAuto($order = Criteria::ASC) Order by the id_auto column
 * @method CommonConfigurationPlateformeQuery orderByCodeCpv($order = Criteria::ASC) Order by the code_cpv column
 * @method CommonConfigurationPlateformeQuery orderByMultiLinguismeEntreprise($order = Criteria::ASC) Order by the multi_linguisme_entreprise column
 * @method CommonConfigurationPlateformeQuery orderByGestionFournisseursDocsMesSousServices($order = Criteria::ASC) Order by the gestion_fournisseurs_docs_mes_sous_services column
 * @method CommonConfigurationPlateformeQuery orderByAuthenticateInscritByCert($order = Criteria::ASC) Order by the authenticate_inscrit_by_cert column
 * @method CommonConfigurationPlateformeQuery orderByAuthenticateInscritByLogin($order = Criteria::ASC) Order by the authenticate_inscrit_by_login column
 * @method CommonConfigurationPlateformeQuery orderByBaseQualifieeEntrepriseInsee($order = Criteria::ASC) Order by the base_qualifiee_entreprise_insee column
 * @method CommonConfigurationPlateformeQuery orderByGestionBoampMesSousServices($order = Criteria::ASC) Order by the gestion_boamp_mes_sous_services column
 * @method CommonConfigurationPlateformeQuery orderByGestionBiCleMesSousServices($order = Criteria::ASC) Order by the gestion_bi_cle_mes_sous_services column
 * @method CommonConfigurationPlateformeQuery orderByNomEntrepriseToujoursVisible($order = Criteria::ASC) Order by the nom_entreprise_toujours_visible column
 * @method CommonConfigurationPlateformeQuery orderByGestionJalMesSousServices($order = Criteria::ASC) Order by the gestion_jal_mes_sous_services column
 * @method CommonConfigurationPlateformeQuery orderByChoixLangueAffichageConsultation($order = Criteria::ASC) Order by the choix_langue_affichage_consultation column
 * @method CommonConfigurationPlateformeQuery orderByCompteEntrepriseDonneesComplementaires($order = Criteria::ASC) Order by the compte_entreprise_donnees_complementaires column
 * @method CommonConfigurationPlateformeQuery orderByAnnuaireEntitesAchatVisibleParEntreprise($order = Criteria::ASC) Order by the annuaire_entites_achat_visible_par_entreprise column
 * @method CommonConfigurationPlateformeQuery orderByAffichageRechercheAvanceeAgentAcSadTransversaux($order = Criteria::ASC) Order by the affichage_recherche_avancee_agent_ac_sad_transversaux column
 * @method CommonConfigurationPlateformeQuery orderByEncheresEntreprise($order = Criteria::ASC) Order by the encheres_entreprise column
 * @method CommonConfigurationPlateformeQuery orderBySocleInterne($order = Criteria::ASC) Order by the socle_interne column
 * @method CommonConfigurationPlateformeQuery orderByModuleCertificat($order = Criteria::ASC) Order by the module_certificat column
 * @method CommonConfigurationPlateformeQuery orderBySocleExterneAgent($order = Criteria::ASC) Order by the socle_externe_agent column
 * @method CommonConfigurationPlateformeQuery orderByAfficherImageOrganisme($order = Criteria::ASC) Order by the afficher_image_organisme column
 * @method CommonConfigurationPlateformeQuery orderBySocleExterneEntreprise($order = Criteria::ASC) Order by the socle_externe_entreprise column
 * @method CommonConfigurationPlateformeQuery orderByPortailDefenseEntreprise($order = Criteria::ASC) Order by the portail_defense_entreprise column
 * @method CommonConfigurationPlateformeQuery orderByCompteEntrepriseProvince($order = Criteria::ASC) Order by the compte_entreprise_province column
 * @method CommonConfigurationPlateformeQuery orderByCompteEntrepriseTelephone3($order = Criteria::ASC) Order by the compte_entreprise_telephone3 column
 * @method CommonConfigurationPlateformeQuery orderByCompteEntrepriseTaxProf($order = Criteria::ASC) Order by the compte_entreprise_tax_prof column
 * @method CommonConfigurationPlateformeQuery orderByCompteEntrepriseRcville($order = Criteria::ASC) Order by the compte_entreprise_rcville column
 * @method CommonConfigurationPlateformeQuery orderByCompteEntrepriseDeclarationHonneur($order = Criteria::ASC) Order by the compte_entreprise_declaration_honneur column
 * @method CommonConfigurationPlateformeQuery orderByCompteEntrepriseQualification($order = Criteria::ASC) Order by the compte_entreprise_qualification column
 * @method CommonConfigurationPlateformeQuery orderByCompteEntrepriseMoyensTechniques($order = Criteria::ASC) Order by the compte_entreprise_moyens_techniques column
 * @method CommonConfigurationPlateformeQuery orderByCompteEntreprisePrestationsRealisees($order = Criteria::ASC) Order by the compte_entreprise_prestations_realisees column
 * @method CommonConfigurationPlateformeQuery orderByCompteEntrepriseChiffreAffaireProductionBiensServices($order = Criteria::ASC) Order by the compte_entreprise_chiffre_affaire_production_biens_services column
 * @method CommonConfigurationPlateformeQuery orderByEnveloppeOffreTechnique($order = Criteria::ASC) Order by the enveloppe_offre_technique column
 * @method CommonConfigurationPlateformeQuery orderByCompteInscritChoixProfil($order = Criteria::ASC) Order by the compte_inscrit_choix_profil column
 * @method CommonConfigurationPlateformeQuery orderByProcedureAdaptee($order = Criteria::ASC) Order by the procedure_adaptee column
 * @method CommonConfigurationPlateformeQuery orderByCompteEntrepriseSiren($order = Criteria::ASC) Order by the compte_entreprise_siren column
 * @method CommonConfigurationPlateformeQuery orderByCompteEntrepriseActivationInscriptionParAgent($order = Criteria::ASC) Order by the compte_entreprise_activation_inscription_par_agent column
 * @method CommonConfigurationPlateformeQuery orderByMenuEntrepriseConsultationsEnCours($order = Criteria::ASC) Order by the menu_entreprise_consultations_en_cours column
 * @method CommonConfigurationPlateformeQuery orderByCompteEntrepriseCapitalSocial($order = Criteria::ASC) Order by the compte_entreprise_capital_social column
 * @method CommonConfigurationPlateformeQuery orderByMailActivationCompteInscritEntreprise($order = Criteria::ASC) Order by the mail_activation_compte_inscrit_entreprise column
 * @method CommonConfigurationPlateformeQuery orderByDecisionDateNotification($order = Criteria::ASC) Order by the decision_date_notification column
 * @method CommonConfigurationPlateformeQuery orderByDecisionPmiPme($order = Criteria::ASC) Order by the decision_pmi_pme column
 * @method CommonConfigurationPlateformeQuery orderByDecisionNaturePrestations($order = Criteria::ASC) Order by the decision_nature_prestations column
 * @method CommonConfigurationPlateformeQuery orderByDecisionObjetMarche($order = Criteria::ASC) Order by the decision_objet_marche column
 * @method CommonConfigurationPlateformeQuery orderByDecisionNote($order = Criteria::ASC) Order by the decision_note column
 * @method CommonConfigurationPlateformeQuery orderByDecisionFicheRecensement($order = Criteria::ASC) Order by the decision_fiche_recensement column
 * @method CommonConfigurationPlateformeQuery orderByRegistrePapierMailObligatoire($order = Criteria::ASC) Order by the registre_papier_mail_obligatoire column
 * @method CommonConfigurationPlateformeQuery orderByMenuEntrepriseIndicateursCles($order = Criteria::ASC) Order by the menu_entreprise_indicateurs_cles column
 * @method CommonConfigurationPlateformeQuery orderByAjoutRpaChampEmail($order = Criteria::ASC) Order by the ajout_rpa_champ_email column
 * @method CommonConfigurationPlateformeQuery orderByAjoutRpaChampTelephone($order = Criteria::ASC) Order by the ajout_rpa_champ_telephone column
 * @method CommonConfigurationPlateformeQuery orderByAjoutRpaChampFax($order = Criteria::ASC) Order by the ajout_rpa_champ_fax column
 * @method CommonConfigurationPlateformeQuery orderByEntreprisePoserQuestionSansPj($order = Criteria::ASC) Order by the entreprise_poser_question_sans_pj column
 * @method CommonConfigurationPlateformeQuery orderByUrlDemarcheAgent($order = Criteria::ASC) Order by the url_demarche_agent column
 * @method CommonConfigurationPlateformeQuery orderByUrlDemarcheEntreprise($order = Criteria::ASC) Order by the url_demarche_entreprise column
 * @method CommonConfigurationPlateformeQuery orderBySiretDetailEntiteAchat($order = Criteria::ASC) Order by the siret_detail_entite_achat column
 * @method CommonConfigurationPlateformeQuery orderByPresenceElu($order = Criteria::ASC) Order by the presence_elu column
 * @method CommonConfigurationPlateformeQuery orderByGererMonService($order = Criteria::ASC) Order by the gerer_mon_service column
 * @method CommonConfigurationPlateformeQuery orderByDepouillementEnveloppeDependRatEnveloppePrecedente($order = Criteria::ASC) Order by the depouillement_enveloppe_depend_RAT_enveloppe_precedente column
 * @method CommonConfigurationPlateformeQuery orderByConsultationAdresseRetraisDossiers($order = Criteria::ASC) Order by the consultation_adresse_retrais_dossiers column
 * @method CommonConfigurationPlateformeQuery orderByConsultationAdresseDepotOffres($order = Criteria::ASC) Order by the consultation_adresse_depot_offres column
 * @method CommonConfigurationPlateformeQuery orderByConsultationCautionProvisoire($order = Criteria::ASC) Order by the consultation_caution_provisoire column
 * @method CommonConfigurationPlateformeQuery orderByConsultationLieuOuverturePlis($order = Criteria::ASC) Order by the consultation_lieu_ouverture_plis column
 * @method CommonConfigurationPlateformeQuery orderByConsultationQualification($order = Criteria::ASC) Order by the consultation_qualification column
 * @method CommonConfigurationPlateformeQuery orderByConsultationAgrement($order = Criteria::ASC) Order by the consultation_agrement column
 * @method CommonConfigurationPlateformeQuery orderByConsultationEchantillonsDemandes($order = Criteria::ASC) Order by the consultation_echantillons_demandes column
 * @method CommonConfigurationPlateformeQuery orderByConsultationReunion($order = Criteria::ASC) Order by the consultation_reunion column
 * @method CommonConfigurationPlateformeQuery orderByConsultationVisiteDesLieux($order = Criteria::ASC) Order by the consultation_visite_des_lieux column
 * @method CommonConfigurationPlateformeQuery orderByConsultationPrixAcquisition($order = Criteria::ASC) Order by the consultation_prix_acquisition column
 * @method CommonConfigurationPlateformeQuery orderByResultatAnalyseAvantDecision($order = Criteria::ASC) Order by the resultat_analyse_avant_decision column
 * @method CommonConfigurationPlateformeQuery orderByCreationInscritParAtes($order = Criteria::ASC) Order by the creation_inscrit_par_ates column
 * @method CommonConfigurationPlateformeQuery orderByConsultationVariantesAutorisees($order = Criteria::ASC) Order by the consultation_variantes_autorisees column
 * @method CommonConfigurationPlateformeQuery orderByRechercheAvanceeParTypeOrg($order = Criteria::ASC) Order by the recherche_avancee_par_type_org column
 * @method CommonConfigurationPlateformeQuery orderByMenuAgentSocietesExclues($order = Criteria::ASC) Order by the menu_agent_societes_exclues column
 * @method CommonConfigurationPlateformeQuery orderByRechercheAvanceeParDomainesActivite($order = Criteria::ASC) Order by the recherche_avancee_par_domaines_activite column
 * @method CommonConfigurationPlateformeQuery orderByRechercheAvanceeParQualification($order = Criteria::ASC) Order by the recherche_avancee_par_qualification column
 * @method CommonConfigurationPlateformeQuery orderByRechercheAvanceeParAgrement($order = Criteria::ASC) Order by the recherche_avancee_par_agrement column
 * @method CommonConfigurationPlateformeQuery orderByContactAdministratifDansDetailConsultationCoteEntreprise($order = Criteria::ASC) Order by the contact_administratif_dans_detail_consultation_cote_entreprise column
 * @method CommonConfigurationPlateformeQuery orderByConsultationPiecesDossiers($order = Criteria::ASC) Order by the consultation_pieces_dossiers column
 * @method CommonConfigurationPlateformeQuery orderByGererAdressesService($order = Criteria::ASC) Order by the gerer_adresses_service column
 * @method CommonConfigurationPlateformeQuery orderByTraduireAnnonces($order = Criteria::ASC) Order by the traduire_annonces column
 * @method CommonConfigurationPlateformeQuery orderByAfficherBlocActionsDansDetailsAnnonces($order = Criteria::ASC) Order by the afficher_bloc_actions_dans_details_annonces column
 * @method CommonConfigurationPlateformeQuery orderByAutoriserUneSeuleReponsePrincipaleParEntreprise($order = Criteria::ASC) Order by the autoriser_une_seule_reponse_principale_par_entreprise column
 * @method CommonConfigurationPlateformeQuery orderByGenerationAvis($order = Criteria::ASC) Order by the generation_avis column
 * @method CommonConfigurationPlateformeQuery orderByPassationAppliquerDonneesEnsembleLots($order = Criteria::ASC) Order by the passation_appliquer_donnees_ensemble_lots column
 * @method CommonConfigurationPlateformeQuery orderByAutreAnnonceExtraitPv($order = Criteria::ASC) Order by the autre_annonce_extrait_pv column
 * @method CommonConfigurationPlateformeQuery orderByAutreAnnonceRapportAchevement($order = Criteria::ASC) Order by the autre_annonce_rapport_achevement column
 * @method CommonConfigurationPlateformeQuery orderByAjoutFichierJointAutreAnnonce($order = Criteria::ASC) Order by the ajout_fichier_joint_autre_annonce column
 * @method CommonConfigurationPlateformeQuery orderByConsultationModePassation($order = Criteria::ASC) Order by the consultation_mode_passation column
 * @method CommonConfigurationPlateformeQuery orderByCompteEntrepriseIdentifiantUnique($order = Criteria::ASC) Order by the compte_entreprise_identifiant_unique column
 * @method CommonConfigurationPlateformeQuery orderByGererCertificatsAgent($order = Criteria::ASC) Order by the gerer_certificats_agent column
 * @method CommonConfigurationPlateformeQuery orderByAutreAnnonceProgrammePrevisionnel($order = Criteria::ASC) Order by the autre_annonce_programme_previsionnel column
 * @method CommonConfigurationPlateformeQuery orderByAnnulerConsultation($order = Criteria::ASC) Order by the annuler_consultation column
 * @method CommonConfigurationPlateformeQuery orderByCfeEntrepriseAccessibleParAgent($order = Criteria::ASC) Order by the cfe_entreprise_accessible_par_agent column
 * @method CommonConfigurationPlateformeQuery orderByCompteEntrepriseCodeNaceReferentiel($order = Criteria::ASC) Order by the compte_entreprise_code_nace_referentiel column
 * @method CommonConfigurationPlateformeQuery orderByCodeNutLtReferentiel($order = Criteria::ASC) Order by the code_nut_lt_referentiel column
 * @method CommonConfigurationPlateformeQuery orderByLieuxExecution($order = Criteria::ASC) Order by the lieux_execution column
 * @method CommonConfigurationPlateformeQuery orderByCompteEntrepriseDomaineActiviteLtReferentiel($order = Criteria::ASC) Order by the compte_entreprise_domaine_activite_lt_referentiel column
 * @method CommonConfigurationPlateformeQuery orderByConsultationDomainesActivitesLtReferentiel($order = Criteria::ASC) Order by the consultation_domaines_activites_lt_referentiel column
 * @method CommonConfigurationPlateformeQuery orderByCompteEntrepriseAgrementLtReferentiel($order = Criteria::ASC) Order by the compte_entreprise_agrement_lt_referentiel column
 * @method CommonConfigurationPlateformeQuery orderByCompteEntrepriseQualificationLtReferentiel($order = Criteria::ASC) Order by the compte_entreprise_qualification_lt_referentiel column
 * @method CommonConfigurationPlateformeQuery orderByReponsePasAPas($order = Criteria::ASC) Order by the reponse_pas_a_pas column
 * @method CommonConfigurationPlateformeQuery orderByAgentControleFormatMotDePasse($order = Criteria::ASC) Order by the agent_controle_format_mot_de_passe column
 * @method CommonConfigurationPlateformeQuery orderByEntrepriseValidationEmailInscription($order = Criteria::ASC) Order by the entreprise_validation_email_inscription column
 * @method CommonConfigurationPlateformeQuery orderByTelechargerDceAvecAuthentification($order = Criteria::ASC) Order by the telecharger_dce_avec_authentification column
 * @method CommonConfigurationPlateformeQuery orderByAuthentificationBasic($order = Criteria::ASC) Order by the authentification_basic column
 * @method CommonConfigurationPlateformeQuery orderByReglementConsultation($order = Criteria::ASC) Order by the reglement_consultation column
 * @method CommonConfigurationPlateformeQuery orderByAnnoncesMarches($order = Criteria::ASC) Order by the annonces_marches column
 * @method CommonConfigurationPlateformeQuery orderByCfeDateFinValiditeObligatoire($order = Criteria::ASC) Order by the cfe_date_fin_validite_obligatoire column
 * @method CommonConfigurationPlateformeQuery orderByAssocierDocumentsCfeConsultation($order = Criteria::ASC) Order by the associer_documents_cfe_consultation column
 * @method CommonConfigurationPlateformeQuery orderByCompteEntrepriseRegion($order = Criteria::ASC) Order by the compte_entreprise_region column
 * @method CommonConfigurationPlateformeQuery orderByCompteEntrepriseTelephone2($order = Criteria::ASC) Order by the compte_entreprise_telephone2 column
 * @method CommonConfigurationPlateformeQuery orderByCompteEntrepriseCnss($order = Criteria::ASC) Order by the compte_entreprise_cnss column
 * @method CommonConfigurationPlateformeQuery orderByCompteEntrepriseRcnum($order = Criteria::ASC) Order by the compte_entreprise_rcnum column
 * @method CommonConfigurationPlateformeQuery orderByCompteEntrepriseDomaineActivite($order = Criteria::ASC) Order by the compte_entreprise_domaine_activite column
 * @method CommonConfigurationPlateformeQuery orderByCompteInscritCodeNic($order = Criteria::ASC) Order by the compte_inscrit_code_nic column
 * @method CommonConfigurationPlateformeQuery orderByCompteEntrepriseCodeApe($order = Criteria::ASC) Order by the compte_entreprise_code_ape column
 * @method CommonConfigurationPlateformeQuery orderByCompteEntrepriseDocumentsCommerciaux($order = Criteria::ASC) Order by the compte_entreprise_documents_commerciaux column
 * @method CommonConfigurationPlateformeQuery orderByCompteEntrepriseAgrement($order = Criteria::ASC) Order by the compte_entreprise_agrement column
 * @method CommonConfigurationPlateformeQuery orderByCompteEntrepriseMoyensHumains($order = Criteria::ASC) Order by the compte_entreprise_moyens_humains column
 * @method CommonConfigurationPlateformeQuery orderByCompteEntrepriseActiviteDomaineDefense($order = Criteria::ASC) Order by the compte_entreprise_activite_domaine_defense column
 * @method CommonConfigurationPlateformeQuery orderByCompteEntrepriseDonneesFinancieres($order = Criteria::ASC) Order by the compte_entreprise_donnees_financieres column
 * @method CommonConfigurationPlateformeQuery orderByEnveloppeAnonymat($order = Criteria::ASC) Order by the enveloppe_anonymat column
 * @method CommonConfigurationPlateformeQuery orderByPubliciteFormatXml($order = Criteria::ASC) Order by the publicite_format_xml column
 * @method CommonConfigurationPlateformeQuery orderByArticle133GenerationPf($order = Criteria::ASC) Order by the article_133_generation_pf column
 * @method CommonConfigurationPlateformeQuery orderByEntrepriseRepondreConsultationApresCloture($order = Criteria::ASC) Order by the entreprise_repondre_consultation_apres_cloture column
 * @method CommonConfigurationPlateformeQuery orderByTelechargementOutilVerifHorodatage($order = Criteria::ASC) Order by the telechargement_outil_verif_horodatage column
 * @method CommonConfigurationPlateformeQuery orderByAffichageCodeCpv($order = Criteria::ASC) Order by the affichage_code_cpv column
 * @method CommonConfigurationPlateformeQuery orderByConsultationDomainesActivites($order = Criteria::ASC) Order by the consultation_domaines_activites column
 * @method CommonConfigurationPlateformeQuery orderByStatistiquesMesureDemat($order = Criteria::ASC) Order by the statistiques_mesure_demat column
 * @method CommonConfigurationPlateformeQuery orderByPublicationProcure($order = Criteria::ASC) Order by the publication_procure column
 * @method CommonConfigurationPlateformeQuery orderByMenuEntrepriseToutesLesConsultations($order = Criteria::ASC) Order by the menu_entreprise_toutes_les_consultations column
 * @method CommonConfigurationPlateformeQuery orderByCompteEntrepriseCpObligatoire($order = Criteria::ASC) Order by the compte_entreprise_cp_obligatoire column
 * @method CommonConfigurationPlateformeQuery orderByAnnulerDepot($order = Criteria::ASC) Order by the annuler_depot column
 * @method CommonConfigurationPlateformeQuery orderByTraduireEntiteAchatArabe($order = Criteria::ASC) Order by the traduire_entite_achat_arabe column
 * @method CommonConfigurationPlateformeQuery orderByTraduireOrganismeArabe($order = Criteria::ASC) Order by the traduire_organisme_arabe column
 * @method CommonConfigurationPlateformeQuery orderByDecisionCp($order = Criteria::ASC) Order by the decision_cp column
 * @method CommonConfigurationPlateformeQuery orderByDecisionTrancheBudgetaire($order = Criteria::ASC) Order by the decision_tranche_budgetaire column
 * @method CommonConfigurationPlateformeQuery orderByDecisionClassement($order = Criteria::ASC) Order by the decision_classement column
 * @method CommonConfigurationPlateformeQuery orderByDecisionAfficherDetailCandidatParDefaut($order = Criteria::ASC) Order by the decision_afficher_detail_candidat_par_defaut column
 * @method CommonConfigurationPlateformeQuery orderByArticle133UploadFichier($order = Criteria::ASC) Order by the article_133_upload_fichier column
 * @method CommonConfigurationPlateformeQuery orderByMultiLinguismeAgent($order = Criteria::ASC) Order by the multi_linguisme_agent column
 * @method CommonConfigurationPlateformeQuery orderByCompteEntrepriseIfu($order = Criteria::ASC) Order by the compte_entreprise_ifu column
 * @method CommonConfigurationPlateformeQuery orderByGestionOrganismeParAgent($order = Criteria::ASC) Order by the gestion_organisme_par_agent column
 * @method CommonConfigurationPlateformeQuery orderByUtiliserLucene($order = Criteria::ASC) Order by the utiliser_lucene column
 * @method CommonConfigurationPlateformeQuery orderByUtiliserPageHtmlLieuxExecution($order = Criteria::ASC) Order by the utiliser_page_html_lieux_execution column
 * @method CommonConfigurationPlateformeQuery orderByPradoValidateurFormatDate($order = Criteria::ASC) Order by the prado_validateur_format_date column
 * @method CommonConfigurationPlateformeQuery orderByPradoValidateurFormatEmail($order = Criteria::ASC) Order by the prado_validateur_format_email column
 * @method CommonConfigurationPlateformeQuery orderBySocleExternePpp($order = Criteria::ASC) Order by the socle_externe_ppp column
 * @method CommonConfigurationPlateformeQuery orderByValidationFormatChampsStricte($order = Criteria::ASC) Order by the validation_format_champs_stricte column
 * @method CommonConfigurationPlateformeQuery orderByPoserQuestionNecessiteAuthentification($order = Criteria::ASC) Order by the poser_question_necessite_authentification column
 * @method CommonConfigurationPlateformeQuery orderByAutoriserModifProfilInscritAtes($order = Criteria::ASC) Order by the autoriser_modif_profil_inscrit_ates column
 * @method CommonConfigurationPlateformeQuery orderByUniciteReferenceConsultation($order = Criteria::ASC) Order by the unicite_reference_consultation column
 * @method CommonConfigurationPlateformeQuery orderByRegistrePapierRcnumRcvilleObligatoires($order = Criteria::ASC) Order by the registre_papier_rcnum_rcville_obligatoires column
 * @method CommonConfigurationPlateformeQuery orderByRegistrePapierAdresseCpVilleObligatoires($order = Criteria::ASC) Order by the registre_papier_adresse_cp_ville_obligatoires column
 * @method CommonConfigurationPlateformeQuery orderByTelechargerDceSansIdentification($order = Criteria::ASC) Order by the telecharger_dce_sans_identification column
 * @method CommonConfigurationPlateformeQuery orderByGestionEntrepriseParAgent($order = Criteria::ASC) Order by the gestion_entreprise_par_agent column
 * @method CommonConfigurationPlateformeQuery orderByAutoriserCaracteresSpeciauxDansReference($order = Criteria::ASC) Order by the autoriser_caracteres_speciaux_dans_reference column
 * @method CommonConfigurationPlateformeQuery orderByInscriptionLibreEntreprise($order = Criteria::ASC) Order by the inscription_libre_entreprise column
 * @method CommonConfigurationPlateformeQuery orderByAfficherCodeService($order = Criteria::ASC) Order by the afficher_code_service column
 * @method CommonConfigurationPlateformeQuery orderByAuthenticateAgentByLogin($order = Criteria::ASC) Order by the authenticate_agent_by_login column
 * @method CommonConfigurationPlateformeQuery orderByAuthenticateAgentByCert($order = Criteria::ASC) Order by the authenticate_agent_by_cert column
 * @method CommonConfigurationPlateformeQuery orderByGenererActeDengagement($order = Criteria::ASC) Order by the generer_acte_dengagement column
 * @method CommonConfigurationPlateformeQuery orderByEntrepriseControleFormatMotDePasse($order = Criteria::ASC) Order by the entreprise_controle_format_mot_de_passe column
 * @method CommonConfigurationPlateformeQuery orderByAutreAnnonceInformation($order = Criteria::ASC) Order by the autre_annonce_information column
 * @method CommonConfigurationPlateformeQuery orderByCreerAutreAnnonce($order = Criteria::ASC) Order by the creer_autre_annonce column
 * @method CommonConfigurationPlateformeQuery orderByConsultationClause($order = Criteria::ASC) Order by the consultation_clause column
 * @method CommonConfigurationPlateformeQuery orderByPanierEntreprise($order = Criteria::ASC) Order by the panier_entreprise column
 * @method CommonConfigurationPlateformeQuery orderByParametragePubliciteParTypeProcedure($order = Criteria::ASC) Order by the parametrage_publicite_par_type_procedure column
 * @method CommonConfigurationPlateformeQuery orderByExportDecision($order = Criteria::ASC) Order by the export_decision column
 * @method CommonConfigurationPlateformeQuery orderByLieuOuverturePlisObligatoire($order = Criteria::ASC) Order by the lieu_ouverture_plis_obligatoire column
 * @method CommonConfigurationPlateformeQuery orderByRegleMiseEnLigneParEntiteCoordinatrice($order = Criteria::ASC) Order by the regle_mise_en_ligne_par_entite_coordinatrice column
 * @method CommonConfigurationPlateformeQuery orderByGestionNewsletter($order = Criteria::ASC) Order by the gestion_newsletter column
 * @method CommonConfigurationPlateformeQuery orderByPubliciteOpoce($order = Criteria::ASC) Order by the publicite_opoce column
 * @method CommonConfigurationPlateformeQuery orderByGestionModelesFormulaire($order = Criteria::ASC) Order by the gestion_modeles_formulaire column
 * @method CommonConfigurationPlateformeQuery orderByGestionAdressesFacturationJal($order = Criteria::ASC) Order by the gestion_adresses_facturation_JAL column
 * @method CommonConfigurationPlateformeQuery orderByPubliciteMarchesEnLigne($order = Criteria::ASC) Order by the publicite_marches_en_ligne column
 * @method CommonConfigurationPlateformeQuery orderByDossierAdditif($order = Criteria::ASC) Order by the dossier_additif column
 * @method CommonConfigurationPlateformeQuery orderByTypeMarche($order = Criteria::ASC) Order by the type_marche column
 * @method CommonConfigurationPlateformeQuery orderByTypePrestation($order = Criteria::ASC) Order by the type_prestation column
 * @method CommonConfigurationPlateformeQuery orderByAfficherTjrBlocCaracteristiqueReponse($order = Criteria::ASC) Order by the afficher_tjr_bloc_caracteristique_reponse column
 * @method CommonConfigurationPlateformeQuery orderByAlerteMetier($order = Criteria::ASC) Order by the alerte_metier column
 * @method CommonConfigurationPlateformeQuery orderByBourseALaSousTraitance($order = Criteria::ASC) Order by the bourse_a_la_sous_traitance column
 * @method CommonConfigurationPlateformeQuery orderByPublierGuides($order = Criteria::ASC) Order by the publier_guides column
 * @method CommonConfigurationPlateformeQuery orderByRechercheAutoCompletion($order = Criteria::ASC) Order by the recherche_auto_completion column
 * @method CommonConfigurationPlateformeQuery orderByStatutCompteEntreprise($order = Criteria::ASC) Order by the statut_compte_entreprise column
 * @method CommonConfigurationPlateformeQuery orderByGestionOrganismes($order = Criteria::ASC) Order by the gestion_organismes column
 * @method CommonConfigurationPlateformeQuery orderByAccueilEntreprisePersonnalise($order = Criteria::ASC) Order by the accueil_entreprise_personnalise column
 * @method CommonConfigurationPlateformeQuery orderByInterfaceModuleSub($order = Criteria::ASC) Order by the interface_module_sub column
 * @method CommonConfigurationPlateformeQuery orderByAuthentificationAgentMultiOrganismes($order = Criteria::ASC) Order by the authentification_agent_multi_organismes column
 * @method CommonConfigurationPlateformeQuery orderByPartagerConsultation($order = Criteria::ASC) Order by the partager_consultation column
 * @method CommonConfigurationPlateformeQuery orderByAnnuaireAcheteursPublics($order = Criteria::ASC) Order by the annuaire_acheteurs_publics column
 * @method CommonConfigurationPlateformeQuery orderByEntrepriseActionsGroupees($order = Criteria::ASC) Order by the entreprise_actions_groupees column
 * @method CommonConfigurationPlateformeQuery orderByLieuxExecutionCarte($order = Criteria::ASC) Order by the lieux_execution_carte column
 * @method CommonConfigurationPlateformeQuery orderBySurchargeReferentiels($order = Criteria::ASC) Order by the surcharge_referentiels column
 * @method CommonConfigurationPlateformeQuery orderByModeRestrictionRgs($order = Criteria::ASC) Order by the Mode_Restriction_RGS column
 * @method CommonConfigurationPlateformeQuery orderByAutreAnnonceDecisionResiliation($order = Criteria::ASC) Order by the autre_annonce_decision_resiliation column
 * @method CommonConfigurationPlateformeQuery orderByAutreAnnonceSyntheseRapportAudit($order = Criteria::ASC) Order by the autre_annonce_synthese_rapport_audit column
 * @method CommonConfigurationPlateformeQuery orderByFicheWeka($order = Criteria::ASC) Order by the fiche_weka column
 * @method CommonConfigurationPlateformeQuery orderByGenerationAutomatiqueMdpAgent($order = Criteria::ASC) Order by the generation_automatique_mdp_agent column
 * @method CommonConfigurationPlateformeQuery orderByGenerationAutomatiqueMdpInscrit($order = Criteria::ASC) Order by the generation_automatique_mdp_inscrit column
 * @method CommonConfigurationPlateformeQuery orderByListeAcRgs($order = Criteria::ASC) Order by the liste_ac_rgs column
 * @method CommonConfigurationPlateformeQuery orderByListeConsOrg($order = Criteria::ASC) Order by the liste_cons_org column
 * @method CommonConfigurationPlateformeQuery orderByMarchePublicSimplifieEntreprise($order = Criteria::ASC) Order by the marche_public_simplifie_entreprise column
 * @method CommonConfigurationPlateformeQuery orderByDemandeValidationControleur($order = Criteria::ASC) Order by the demande_validation_controleur column
 * @method CommonConfigurationPlateformeQuery orderByAccesExecContrats($order = Criteria::ASC) Order by the acces_exec_contrats column
 * @method CommonConfigurationPlateformeQuery orderByFormeJuridiqueGroupementAttributaire($order = Criteria::ASC) Order by the forme_juridique_groupement_attributaire column
 * @method CommonConfigurationPlateformeQuery orderByDateLimiteRemisePlisObligatoire($order = Criteria::ASC) Order by the date_limite_remise_plis_obligatoire column
 * @method CommonConfigurationPlateformeQuery orderByModifTypeProcedure($order = Criteria::ASC) Order by the modif_type_procedure column
 * @method CommonConfigurationPlateformeQuery orderByDonneesComplementairesProcedure($order = Criteria::ASC) Order by the donnees_complementaires_procedure column
 * @method CommonConfigurationPlateformeQuery orderByFormeMarcheFormePrix($order = Criteria::ASC) Order by the forme_marche_forme_prix column
 * @method CommonConfigurationPlateformeQuery orderByControleUniciteNumMarche($order = Criteria::ASC) Order by the controle_unicite_num_marche column
 * @method CommonConfigurationPlateformeQuery orderByAffichageNumMarche($order = Criteria::ASC) Order by the affichage_num_marche column
 * @method CommonConfigurationPlateformeQuery orderByAffichageDateFinMarche($order = Criteria::ASC) Order by the affichage_date_fin_marche column
 * @method CommonConfigurationPlateformeQuery orderByAffichageIce($order = Criteria::ASC) Order by the affichage_ice column
 * @method CommonConfigurationPlateformeQuery orderByBlocageDepotHorsDelai($order = Criteria::ASC) Order by the blocage_depot_hors_delai column
 * @method CommonConfigurationPlateformeQuery orderByActiverSuiviPv($order = Criteria::ASC) Order by the activer_suivi_pv column
 * @method CommonConfigurationPlateformeQuery orderByCaptchaValidateur($order = Criteria::ASC) Order by the captcha_validateur column
 * @method CommonConfigurationPlateformeQuery orderByDecisionDepuisResultatAnalyse($order = Criteria::ASC) Order by the decision_depuis_resultat_analyse column
 * @method CommonConfigurationPlateformeQuery orderByModuleFacture($order = Criteria::ASC) Order by the module_facture column
 * @method CommonConfigurationPlateformeQuery orderByValidationEntrepriseFacturation($order = Criteria::ASC) Order by the validation_entreprise_facturation column
 * @method CommonConfigurationPlateformeQuery orderByBloquerDepotSiEnvNonDepose($order = Criteria::ASC) Order by the bloquer_depot_si_env_non_depose column
 * @method CommonConfigurationPlateformeQuery orderByBloquerDepotSignatureInvalide($order = Criteria::ASC) Order by the bloquer_depot_signature_invalide column
 * @method CommonConfigurationPlateformeQuery orderByConsultationImportLots($order = Criteria::ASC) Order by the consultation_import_lots column
 * @method CommonConfigurationPlateformeQuery orderByDepotSelectionLots($order = Criteria::ASC) Order by the depot_selection_lots column
 * @method CommonConfigurationPlateformeQuery orderByModificationLotsApresMiseEnLigne($order = Criteria::ASC) Order by the modification_lots_apres_mise_en_ligne column
 * @method CommonConfigurationPlateformeQuery orderByFiltreBdfEntrepriseValide($order = Criteria::ASC) Order by the filtre_bdf_entreprise_valide column
 * @method CommonConfigurationPlateformeQuery orderByAffichageIdentifiantFiscale($order = Criteria::ASC) Order by the affichage_identifiant_fiscale column
 * @method CommonConfigurationPlateformeQuery orderByDecisionCreerContrat($order = Criteria::ASC) Order by the decision_creer_contrat column
 * @method CommonConfigurationPlateformeQuery orderByGenerationBiCle($order = Criteria::ASC) Order by the generation_bi_cle column
 *
 * @method CommonConfigurationPlateformeQuery groupByIdAuto() Group by the id_auto column
 * @method CommonConfigurationPlateformeQuery groupByCodeCpv() Group by the code_cpv column
 * @method CommonConfigurationPlateformeQuery groupByMultiLinguismeEntreprise() Group by the multi_linguisme_entreprise column
 * @method CommonConfigurationPlateformeQuery groupByGestionFournisseursDocsMesSousServices() Group by the gestion_fournisseurs_docs_mes_sous_services column
 * @method CommonConfigurationPlateformeQuery groupByAuthenticateInscritByCert() Group by the authenticate_inscrit_by_cert column
 * @method CommonConfigurationPlateformeQuery groupByAuthenticateInscritByLogin() Group by the authenticate_inscrit_by_login column
 * @method CommonConfigurationPlateformeQuery groupByBaseQualifieeEntrepriseInsee() Group by the base_qualifiee_entreprise_insee column
 * @method CommonConfigurationPlateformeQuery groupByGestionBoampMesSousServices() Group by the gestion_boamp_mes_sous_services column
 * @method CommonConfigurationPlateformeQuery groupByGestionBiCleMesSousServices() Group by the gestion_bi_cle_mes_sous_services column
 * @method CommonConfigurationPlateformeQuery groupByNomEntrepriseToujoursVisible() Group by the nom_entreprise_toujours_visible column
 * @method CommonConfigurationPlateformeQuery groupByGestionJalMesSousServices() Group by the gestion_jal_mes_sous_services column
 * @method CommonConfigurationPlateformeQuery groupByChoixLangueAffichageConsultation() Group by the choix_langue_affichage_consultation column
 * @method CommonConfigurationPlateformeQuery groupByCompteEntrepriseDonneesComplementaires() Group by the compte_entreprise_donnees_complementaires column
 * @method CommonConfigurationPlateformeQuery groupByAnnuaireEntitesAchatVisibleParEntreprise() Group by the annuaire_entites_achat_visible_par_entreprise column
 * @method CommonConfigurationPlateformeQuery groupByAffichageRechercheAvanceeAgentAcSadTransversaux() Group by the affichage_recherche_avancee_agent_ac_sad_transversaux column
 * @method CommonConfigurationPlateformeQuery groupByEncheresEntreprise() Group by the encheres_entreprise column
 * @method CommonConfigurationPlateformeQuery groupBySocleInterne() Group by the socle_interne column
 * @method CommonConfigurationPlateformeQuery groupByModuleCertificat() Group by the module_certificat column
 * @method CommonConfigurationPlateformeQuery groupBySocleExterneAgent() Group by the socle_externe_agent column
 * @method CommonConfigurationPlateformeQuery groupByAfficherImageOrganisme() Group by the afficher_image_organisme column
 * @method CommonConfigurationPlateformeQuery groupBySocleExterneEntreprise() Group by the socle_externe_entreprise column
 * @method CommonConfigurationPlateformeQuery groupByPortailDefenseEntreprise() Group by the portail_defense_entreprise column
 * @method CommonConfigurationPlateformeQuery groupByCompteEntrepriseProvince() Group by the compte_entreprise_province column
 * @method CommonConfigurationPlateformeQuery groupByCompteEntrepriseTelephone3() Group by the compte_entreprise_telephone3 column
 * @method CommonConfigurationPlateformeQuery groupByCompteEntrepriseTaxProf() Group by the compte_entreprise_tax_prof column
 * @method CommonConfigurationPlateformeQuery groupByCompteEntrepriseRcville() Group by the compte_entreprise_rcville column
 * @method CommonConfigurationPlateformeQuery groupByCompteEntrepriseDeclarationHonneur() Group by the compte_entreprise_declaration_honneur column
 * @method CommonConfigurationPlateformeQuery groupByCompteEntrepriseQualification() Group by the compte_entreprise_qualification column
 * @method CommonConfigurationPlateformeQuery groupByCompteEntrepriseMoyensTechniques() Group by the compte_entreprise_moyens_techniques column
 * @method CommonConfigurationPlateformeQuery groupByCompteEntreprisePrestationsRealisees() Group by the compte_entreprise_prestations_realisees column
 * @method CommonConfigurationPlateformeQuery groupByCompteEntrepriseChiffreAffaireProductionBiensServices() Group by the compte_entreprise_chiffre_affaire_production_biens_services column
 * @method CommonConfigurationPlateformeQuery groupByEnveloppeOffreTechnique() Group by the enveloppe_offre_technique column
 * @method CommonConfigurationPlateformeQuery groupByCompteInscritChoixProfil() Group by the compte_inscrit_choix_profil column
 * @method CommonConfigurationPlateformeQuery groupByProcedureAdaptee() Group by the procedure_adaptee column
 * @method CommonConfigurationPlateformeQuery groupByCompteEntrepriseSiren() Group by the compte_entreprise_siren column
 * @method CommonConfigurationPlateformeQuery groupByCompteEntrepriseActivationInscriptionParAgent() Group by the compte_entreprise_activation_inscription_par_agent column
 * @method CommonConfigurationPlateformeQuery groupByMenuEntrepriseConsultationsEnCours() Group by the menu_entreprise_consultations_en_cours column
 * @method CommonConfigurationPlateformeQuery groupByCompteEntrepriseCapitalSocial() Group by the compte_entreprise_capital_social column
 * @method CommonConfigurationPlateformeQuery groupByMailActivationCompteInscritEntreprise() Group by the mail_activation_compte_inscrit_entreprise column
 * @method CommonConfigurationPlateformeQuery groupByDecisionDateNotification() Group by the decision_date_notification column
 * @method CommonConfigurationPlateformeQuery groupByDecisionPmiPme() Group by the decision_pmi_pme column
 * @method CommonConfigurationPlateformeQuery groupByDecisionNaturePrestations() Group by the decision_nature_prestations column
 * @method CommonConfigurationPlateformeQuery groupByDecisionObjetMarche() Group by the decision_objet_marche column
 * @method CommonConfigurationPlateformeQuery groupByDecisionNote() Group by the decision_note column
 * @method CommonConfigurationPlateformeQuery groupByDecisionFicheRecensement() Group by the decision_fiche_recensement column
 * @method CommonConfigurationPlateformeQuery groupByRegistrePapierMailObligatoire() Group by the registre_papier_mail_obligatoire column
 * @method CommonConfigurationPlateformeQuery groupByMenuEntrepriseIndicateursCles() Group by the menu_entreprise_indicateurs_cles column
 * @method CommonConfigurationPlateformeQuery groupByAjoutRpaChampEmail() Group by the ajout_rpa_champ_email column
 * @method CommonConfigurationPlateformeQuery groupByAjoutRpaChampTelephone() Group by the ajout_rpa_champ_telephone column
 * @method CommonConfigurationPlateformeQuery groupByAjoutRpaChampFax() Group by the ajout_rpa_champ_fax column
 * @method CommonConfigurationPlateformeQuery groupByEntreprisePoserQuestionSansPj() Group by the entreprise_poser_question_sans_pj column
 * @method CommonConfigurationPlateformeQuery groupByUrlDemarcheAgent() Group by the url_demarche_agent column
 * @method CommonConfigurationPlateformeQuery groupByUrlDemarcheEntreprise() Group by the url_demarche_entreprise column
 * @method CommonConfigurationPlateformeQuery groupBySiretDetailEntiteAchat() Group by the siret_detail_entite_achat column
 * @method CommonConfigurationPlateformeQuery groupByPresenceElu() Group by the presence_elu column
 * @method CommonConfigurationPlateformeQuery groupByGererMonService() Group by the gerer_mon_service column
 * @method CommonConfigurationPlateformeQuery groupByDepouillementEnveloppeDependRatEnveloppePrecedente() Group by the depouillement_enveloppe_depend_RAT_enveloppe_precedente column
 * @method CommonConfigurationPlateformeQuery groupByConsultationAdresseRetraisDossiers() Group by the consultation_adresse_retrais_dossiers column
 * @method CommonConfigurationPlateformeQuery groupByConsultationAdresseDepotOffres() Group by the consultation_adresse_depot_offres column
 * @method CommonConfigurationPlateformeQuery groupByConsultationCautionProvisoire() Group by the consultation_caution_provisoire column
 * @method CommonConfigurationPlateformeQuery groupByConsultationLieuOuverturePlis() Group by the consultation_lieu_ouverture_plis column
 * @method CommonConfigurationPlateformeQuery groupByConsultationQualification() Group by the consultation_qualification column
 * @method CommonConfigurationPlateformeQuery groupByConsultationAgrement() Group by the consultation_agrement column
 * @method CommonConfigurationPlateformeQuery groupByConsultationEchantillonsDemandes() Group by the consultation_echantillons_demandes column
 * @method CommonConfigurationPlateformeQuery groupByConsultationReunion() Group by the consultation_reunion column
 * @method CommonConfigurationPlateformeQuery groupByConsultationVisiteDesLieux() Group by the consultation_visite_des_lieux column
 * @method CommonConfigurationPlateformeQuery groupByConsultationPrixAcquisition() Group by the consultation_prix_acquisition column
 * @method CommonConfigurationPlateformeQuery groupByResultatAnalyseAvantDecision() Group by the resultat_analyse_avant_decision column
 * @method CommonConfigurationPlateformeQuery groupByCreationInscritParAtes() Group by the creation_inscrit_par_ates column
 * @method CommonConfigurationPlateformeQuery groupByConsultationVariantesAutorisees() Group by the consultation_variantes_autorisees column
 * @method CommonConfigurationPlateformeQuery groupByRechercheAvanceeParTypeOrg() Group by the recherche_avancee_par_type_org column
 * @method CommonConfigurationPlateformeQuery groupByMenuAgentSocietesExclues() Group by the menu_agent_societes_exclues column
 * @method CommonConfigurationPlateformeQuery groupByRechercheAvanceeParDomainesActivite() Group by the recherche_avancee_par_domaines_activite column
 * @method CommonConfigurationPlateformeQuery groupByRechercheAvanceeParQualification() Group by the recherche_avancee_par_qualification column
 * @method CommonConfigurationPlateformeQuery groupByRechercheAvanceeParAgrement() Group by the recherche_avancee_par_agrement column
 * @method CommonConfigurationPlateformeQuery groupByContactAdministratifDansDetailConsultationCoteEntreprise() Group by the contact_administratif_dans_detail_consultation_cote_entreprise column
 * @method CommonConfigurationPlateformeQuery groupByConsultationPiecesDossiers() Group by the consultation_pieces_dossiers column
 * @method CommonConfigurationPlateformeQuery groupByGererAdressesService() Group by the gerer_adresses_service column
 * @method CommonConfigurationPlateformeQuery groupByTraduireAnnonces() Group by the traduire_annonces column
 * @method CommonConfigurationPlateformeQuery groupByAfficherBlocActionsDansDetailsAnnonces() Group by the afficher_bloc_actions_dans_details_annonces column
 * @method CommonConfigurationPlateformeQuery groupByAutoriserUneSeuleReponsePrincipaleParEntreprise() Group by the autoriser_une_seule_reponse_principale_par_entreprise column
 * @method CommonConfigurationPlateformeQuery groupByGenerationAvis() Group by the generation_avis column
 * @method CommonConfigurationPlateformeQuery groupByPassationAppliquerDonneesEnsembleLots() Group by the passation_appliquer_donnees_ensemble_lots column
 * @method CommonConfigurationPlateformeQuery groupByAutreAnnonceExtraitPv() Group by the autre_annonce_extrait_pv column
 * @method CommonConfigurationPlateformeQuery groupByAutreAnnonceRapportAchevement() Group by the autre_annonce_rapport_achevement column
 * @method CommonConfigurationPlateformeQuery groupByAjoutFichierJointAutreAnnonce() Group by the ajout_fichier_joint_autre_annonce column
 * @method CommonConfigurationPlateformeQuery groupByConsultationModePassation() Group by the consultation_mode_passation column
 * @method CommonConfigurationPlateformeQuery groupByCompteEntrepriseIdentifiantUnique() Group by the compte_entreprise_identifiant_unique column
 * @method CommonConfigurationPlateformeQuery groupByGererCertificatsAgent() Group by the gerer_certificats_agent column
 * @method CommonConfigurationPlateformeQuery groupByAutreAnnonceProgrammePrevisionnel() Group by the autre_annonce_programme_previsionnel column
 * @method CommonConfigurationPlateformeQuery groupByAnnulerConsultation() Group by the annuler_consultation column
 * @method CommonConfigurationPlateformeQuery groupByCfeEntrepriseAccessibleParAgent() Group by the cfe_entreprise_accessible_par_agent column
 * @method CommonConfigurationPlateformeQuery groupByCompteEntrepriseCodeNaceReferentiel() Group by the compte_entreprise_code_nace_referentiel column
 * @method CommonConfigurationPlateformeQuery groupByCodeNutLtReferentiel() Group by the code_nut_lt_referentiel column
 * @method CommonConfigurationPlateformeQuery groupByLieuxExecution() Group by the lieux_execution column
 * @method CommonConfigurationPlateformeQuery groupByCompteEntrepriseDomaineActiviteLtReferentiel() Group by the compte_entreprise_domaine_activite_lt_referentiel column
 * @method CommonConfigurationPlateformeQuery groupByConsultationDomainesActivitesLtReferentiel() Group by the consultation_domaines_activites_lt_referentiel column
 * @method CommonConfigurationPlateformeQuery groupByCompteEntrepriseAgrementLtReferentiel() Group by the compte_entreprise_agrement_lt_referentiel column
 * @method CommonConfigurationPlateformeQuery groupByCompteEntrepriseQualificationLtReferentiel() Group by the compte_entreprise_qualification_lt_referentiel column
 * @method CommonConfigurationPlateformeQuery groupByReponsePasAPas() Group by the reponse_pas_a_pas column
 * @method CommonConfigurationPlateformeQuery groupByAgentControleFormatMotDePasse() Group by the agent_controle_format_mot_de_passe column
 * @method CommonConfigurationPlateformeQuery groupByEntrepriseValidationEmailInscription() Group by the entreprise_validation_email_inscription column
 * @method CommonConfigurationPlateformeQuery groupByTelechargerDceAvecAuthentification() Group by the telecharger_dce_avec_authentification column
 * @method CommonConfigurationPlateformeQuery groupByAuthentificationBasic() Group by the authentification_basic column
 * @method CommonConfigurationPlateformeQuery groupByReglementConsultation() Group by the reglement_consultation column
 * @method CommonConfigurationPlateformeQuery groupByAnnoncesMarches() Group by the annonces_marches column
 * @method CommonConfigurationPlateformeQuery groupByCfeDateFinValiditeObligatoire() Group by the cfe_date_fin_validite_obligatoire column
 * @method CommonConfigurationPlateformeQuery groupByAssocierDocumentsCfeConsultation() Group by the associer_documents_cfe_consultation column
 * @method CommonConfigurationPlateformeQuery groupByCompteEntrepriseRegion() Group by the compte_entreprise_region column
 * @method CommonConfigurationPlateformeQuery groupByCompteEntrepriseTelephone2() Group by the compte_entreprise_telephone2 column
 * @method CommonConfigurationPlateformeQuery groupByCompteEntrepriseCnss() Group by the compte_entreprise_cnss column
 * @method CommonConfigurationPlateformeQuery groupByCompteEntrepriseRcnum() Group by the compte_entreprise_rcnum column
 * @method CommonConfigurationPlateformeQuery groupByCompteEntrepriseDomaineActivite() Group by the compte_entreprise_domaine_activite column
 * @method CommonConfigurationPlateformeQuery groupByCompteInscritCodeNic() Group by the compte_inscrit_code_nic column
 * @method CommonConfigurationPlateformeQuery groupByCompteEntrepriseCodeApe() Group by the compte_entreprise_code_ape column
 * @method CommonConfigurationPlateformeQuery groupByCompteEntrepriseDocumentsCommerciaux() Group by the compte_entreprise_documents_commerciaux column
 * @method CommonConfigurationPlateformeQuery groupByCompteEntrepriseAgrement() Group by the compte_entreprise_agrement column
 * @method CommonConfigurationPlateformeQuery groupByCompteEntrepriseMoyensHumains() Group by the compte_entreprise_moyens_humains column
 * @method CommonConfigurationPlateformeQuery groupByCompteEntrepriseActiviteDomaineDefense() Group by the compte_entreprise_activite_domaine_defense column
 * @method CommonConfigurationPlateformeQuery groupByCompteEntrepriseDonneesFinancieres() Group by the compte_entreprise_donnees_financieres column
 * @method CommonConfigurationPlateformeQuery groupByEnveloppeAnonymat() Group by the enveloppe_anonymat column
 * @method CommonConfigurationPlateformeQuery groupByPubliciteFormatXml() Group by the publicite_format_xml column
 * @method CommonConfigurationPlateformeQuery groupByArticle133GenerationPf() Group by the article_133_generation_pf column
 * @method CommonConfigurationPlateformeQuery groupByEntrepriseRepondreConsultationApresCloture() Group by the entreprise_repondre_consultation_apres_cloture column
 * @method CommonConfigurationPlateformeQuery groupByTelechargementOutilVerifHorodatage() Group by the telechargement_outil_verif_horodatage column
 * @method CommonConfigurationPlateformeQuery groupByAffichageCodeCpv() Group by the affichage_code_cpv column
 * @method CommonConfigurationPlateformeQuery groupByConsultationDomainesActivites() Group by the consultation_domaines_activites column
 * @method CommonConfigurationPlateformeQuery groupByStatistiquesMesureDemat() Group by the statistiques_mesure_demat column
 * @method CommonConfigurationPlateformeQuery groupByPublicationProcure() Group by the publication_procure column
 * @method CommonConfigurationPlateformeQuery groupByMenuEntrepriseToutesLesConsultations() Group by the menu_entreprise_toutes_les_consultations column
 * @method CommonConfigurationPlateformeQuery groupByCompteEntrepriseCpObligatoire() Group by the compte_entreprise_cp_obligatoire column
 * @method CommonConfigurationPlateformeQuery groupByAnnulerDepot() Group by the annuler_depot column
 * @method CommonConfigurationPlateformeQuery groupByTraduireEntiteAchatArabe() Group by the traduire_entite_achat_arabe column
 * @method CommonConfigurationPlateformeQuery groupByTraduireOrganismeArabe() Group by the traduire_organisme_arabe column
 * @method CommonConfigurationPlateformeQuery groupByDecisionCp() Group by the decision_cp column
 * @method CommonConfigurationPlateformeQuery groupByDecisionTrancheBudgetaire() Group by the decision_tranche_budgetaire column
 * @method CommonConfigurationPlateformeQuery groupByDecisionClassement() Group by the decision_classement column
 * @method CommonConfigurationPlateformeQuery groupByDecisionAfficherDetailCandidatParDefaut() Group by the decision_afficher_detail_candidat_par_defaut column
 * @method CommonConfigurationPlateformeQuery groupByArticle133UploadFichier() Group by the article_133_upload_fichier column
 * @method CommonConfigurationPlateformeQuery groupByMultiLinguismeAgent() Group by the multi_linguisme_agent column
 * @method CommonConfigurationPlateformeQuery groupByCompteEntrepriseIfu() Group by the compte_entreprise_ifu column
 * @method CommonConfigurationPlateformeQuery groupByGestionOrganismeParAgent() Group by the gestion_organisme_par_agent column
 * @method CommonConfigurationPlateformeQuery groupByUtiliserLucene() Group by the utiliser_lucene column
 * @method CommonConfigurationPlateformeQuery groupByUtiliserPageHtmlLieuxExecution() Group by the utiliser_page_html_lieux_execution column
 * @method CommonConfigurationPlateformeQuery groupByPradoValidateurFormatDate() Group by the prado_validateur_format_date column
 * @method CommonConfigurationPlateformeQuery groupByPradoValidateurFormatEmail() Group by the prado_validateur_format_email column
 * @method CommonConfigurationPlateformeQuery groupBySocleExternePpp() Group by the socle_externe_ppp column
 * @method CommonConfigurationPlateformeQuery groupByValidationFormatChampsStricte() Group by the validation_format_champs_stricte column
 * @method CommonConfigurationPlateformeQuery groupByPoserQuestionNecessiteAuthentification() Group by the poser_question_necessite_authentification column
 * @method CommonConfigurationPlateformeQuery groupByAutoriserModifProfilInscritAtes() Group by the autoriser_modif_profil_inscrit_ates column
 * @method CommonConfigurationPlateformeQuery groupByUniciteReferenceConsultation() Group by the unicite_reference_consultation column
 * @method CommonConfigurationPlateformeQuery groupByRegistrePapierRcnumRcvilleObligatoires() Group by the registre_papier_rcnum_rcville_obligatoires column
 * @method CommonConfigurationPlateformeQuery groupByRegistrePapierAdresseCpVilleObligatoires() Group by the registre_papier_adresse_cp_ville_obligatoires column
 * @method CommonConfigurationPlateformeQuery groupByTelechargerDceSansIdentification() Group by the telecharger_dce_sans_identification column
 * @method CommonConfigurationPlateformeQuery groupByGestionEntrepriseParAgent() Group by the gestion_entreprise_par_agent column
 * @method CommonConfigurationPlateformeQuery groupByAutoriserCaracteresSpeciauxDansReference() Group by the autoriser_caracteres_speciaux_dans_reference column
 * @method CommonConfigurationPlateformeQuery groupByInscriptionLibreEntreprise() Group by the inscription_libre_entreprise column
 * @method CommonConfigurationPlateformeQuery groupByAfficherCodeService() Group by the afficher_code_service column
 * @method CommonConfigurationPlateformeQuery groupByAuthenticateAgentByLogin() Group by the authenticate_agent_by_login column
 * @method CommonConfigurationPlateformeQuery groupByAuthenticateAgentByCert() Group by the authenticate_agent_by_cert column
 * @method CommonConfigurationPlateformeQuery groupByGenererActeDengagement() Group by the generer_acte_dengagement column
 * @method CommonConfigurationPlateformeQuery groupByEntrepriseControleFormatMotDePasse() Group by the entreprise_controle_format_mot_de_passe column
 * @method CommonConfigurationPlateformeQuery groupByAutreAnnonceInformation() Group by the autre_annonce_information column
 * @method CommonConfigurationPlateformeQuery groupByCreerAutreAnnonce() Group by the creer_autre_annonce column
 * @method CommonConfigurationPlateformeQuery groupByConsultationClause() Group by the consultation_clause column
 * @method CommonConfigurationPlateformeQuery groupByPanierEntreprise() Group by the panier_entreprise column
 * @method CommonConfigurationPlateformeQuery groupByParametragePubliciteParTypeProcedure() Group by the parametrage_publicite_par_type_procedure column
 * @method CommonConfigurationPlateformeQuery groupByExportDecision() Group by the export_decision column
 * @method CommonConfigurationPlateformeQuery groupByLieuOuverturePlisObligatoire() Group by the lieu_ouverture_plis_obligatoire column
 * @method CommonConfigurationPlateformeQuery groupByRegleMiseEnLigneParEntiteCoordinatrice() Group by the regle_mise_en_ligne_par_entite_coordinatrice column
 * @method CommonConfigurationPlateformeQuery groupByGestionNewsletter() Group by the gestion_newsletter column
 * @method CommonConfigurationPlateformeQuery groupByPubliciteOpoce() Group by the publicite_opoce column
 * @method CommonConfigurationPlateformeQuery groupByGestionModelesFormulaire() Group by the gestion_modeles_formulaire column
 * @method CommonConfigurationPlateformeQuery groupByGestionAdressesFacturationJal() Group by the gestion_adresses_facturation_JAL column
 * @method CommonConfigurationPlateformeQuery groupByPubliciteMarchesEnLigne() Group by the publicite_marches_en_ligne column
 * @method CommonConfigurationPlateformeQuery groupByDossierAdditif() Group by the dossier_additif column
 * @method CommonConfigurationPlateformeQuery groupByTypeMarche() Group by the type_marche column
 * @method CommonConfigurationPlateformeQuery groupByTypePrestation() Group by the type_prestation column
 * @method CommonConfigurationPlateformeQuery groupByAfficherTjrBlocCaracteristiqueReponse() Group by the afficher_tjr_bloc_caracteristique_reponse column
 * @method CommonConfigurationPlateformeQuery groupByAlerteMetier() Group by the alerte_metier column
 * @method CommonConfigurationPlateformeQuery groupByBourseALaSousTraitance() Group by the bourse_a_la_sous_traitance column
 * @method CommonConfigurationPlateformeQuery groupByPublierGuides() Group by the publier_guides column
 * @method CommonConfigurationPlateformeQuery groupByRechercheAutoCompletion() Group by the recherche_auto_completion column
 * @method CommonConfigurationPlateformeQuery groupByStatutCompteEntreprise() Group by the statut_compte_entreprise column
 * @method CommonConfigurationPlateformeQuery groupByGestionOrganismes() Group by the gestion_organismes column
 * @method CommonConfigurationPlateformeQuery groupByAccueilEntreprisePersonnalise() Group by the accueil_entreprise_personnalise column
 * @method CommonConfigurationPlateformeQuery groupByInterfaceModuleSub() Group by the interface_module_sub column
 * @method CommonConfigurationPlateformeQuery groupByAuthentificationAgentMultiOrganismes() Group by the authentification_agent_multi_organismes column
 * @method CommonConfigurationPlateformeQuery groupByPartagerConsultation() Group by the partager_consultation column
 * @method CommonConfigurationPlateformeQuery groupByAnnuaireAcheteursPublics() Group by the annuaire_acheteurs_publics column
 * @method CommonConfigurationPlateformeQuery groupByEntrepriseActionsGroupees() Group by the entreprise_actions_groupees column
 * @method CommonConfigurationPlateformeQuery groupByLieuxExecutionCarte() Group by the lieux_execution_carte column
 * @method CommonConfigurationPlateformeQuery groupBySurchargeReferentiels() Group by the surcharge_referentiels column
 * @method CommonConfigurationPlateformeQuery groupByModeRestrictionRgs() Group by the Mode_Restriction_RGS column
 * @method CommonConfigurationPlateformeQuery groupByAutreAnnonceDecisionResiliation() Group by the autre_annonce_decision_resiliation column
 * @method CommonConfigurationPlateformeQuery groupByAutreAnnonceSyntheseRapportAudit() Group by the autre_annonce_synthese_rapport_audit column
 * @method CommonConfigurationPlateformeQuery groupByFicheWeka() Group by the fiche_weka column
 * @method CommonConfigurationPlateformeQuery groupByGenerationAutomatiqueMdpAgent() Group by the generation_automatique_mdp_agent column
 * @method CommonConfigurationPlateformeQuery groupByGenerationAutomatiqueMdpInscrit() Group by the generation_automatique_mdp_inscrit column
 * @method CommonConfigurationPlateformeQuery groupByListeAcRgs() Group by the liste_ac_rgs column
 * @method CommonConfigurationPlateformeQuery groupByListeConsOrg() Group by the liste_cons_org column
 * @method CommonConfigurationPlateformeQuery groupByMarchePublicSimplifieEntreprise() Group by the marche_public_simplifie_entreprise column
 * @method CommonConfigurationPlateformeQuery groupByDemandeValidationControleur() Group by the demande_validation_controleur column
 * @method CommonConfigurationPlateformeQuery groupByAccesExecContrats() Group by the acces_exec_contrats column
 * @method CommonConfigurationPlateformeQuery groupByFormeJuridiqueGroupementAttributaire() Group by the forme_juridique_groupement_attributaire column
 * @method CommonConfigurationPlateformeQuery groupByDateLimiteRemisePlisObligatoire() Group by the date_limite_remise_plis_obligatoire column
 * @method CommonConfigurationPlateformeQuery groupByModifTypeProcedure() Group by the modif_type_procedure column
 * @method CommonConfigurationPlateformeQuery groupByDonneesComplementairesProcedure() Group by the donnees_complementaires_procedure column
 * @method CommonConfigurationPlateformeQuery groupByFormeMarcheFormePrix() Group by the forme_marche_forme_prix column
 * @method CommonConfigurationPlateformeQuery groupByControleUniciteNumMarche() Group by the controle_unicite_num_marche column
 * @method CommonConfigurationPlateformeQuery groupByAffichageNumMarche() Group by the affichage_num_marche column
 * @method CommonConfigurationPlateformeQuery groupByAffichageDateFinMarche() Group by the affichage_date_fin_marche column
 * @method CommonConfigurationPlateformeQuery groupByAffichageIce() Group by the affichage_ice column
 * @method CommonConfigurationPlateformeQuery groupByBlocageDepotHorsDelai() Group by the blocage_depot_hors_delai column
 * @method CommonConfigurationPlateformeQuery groupByActiverSuiviPv() Group by the activer_suivi_pv column
 * @method CommonConfigurationPlateformeQuery groupByCaptchaValidateur() Group by the captcha_validateur column
 * @method CommonConfigurationPlateformeQuery groupByDecisionDepuisResultatAnalyse() Group by the decision_depuis_resultat_analyse column
 * @method CommonConfigurationPlateformeQuery groupByModuleFacture() Group by the module_facture column
 * @method CommonConfigurationPlateformeQuery groupByValidationEntrepriseFacturation() Group by the validation_entreprise_facturation column
 * @method CommonConfigurationPlateformeQuery groupByBloquerDepotSiEnvNonDepose() Group by the bloquer_depot_si_env_non_depose column
 * @method CommonConfigurationPlateformeQuery groupByBloquerDepotSignatureInvalide() Group by the bloquer_depot_signature_invalide column
 * @method CommonConfigurationPlateformeQuery groupByConsultationImportLots() Group by the consultation_import_lots column
 * @method CommonConfigurationPlateformeQuery groupByDepotSelectionLots() Group by the depot_selection_lots column
 * @method CommonConfigurationPlateformeQuery groupByModificationLotsApresMiseEnLigne() Group by the modification_lots_apres_mise_en_ligne column
 * @method CommonConfigurationPlateformeQuery groupByFiltreBdfEntrepriseValide() Group by the filtre_bdf_entreprise_valide column
 * @method CommonConfigurationPlateformeQuery groupByAffichageIdentifiantFiscale() Group by the affichage_identifiant_fiscale column
 * @method CommonConfigurationPlateformeQuery groupByDecisionCreerContrat() Group by the decision_creer_contrat column
 * @method CommonConfigurationPlateformeQuery groupByGenerationBiCle() Group by the generation_bi_cle column
 *
 * @method CommonConfigurationPlateformeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonConfigurationPlateformeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonConfigurationPlateformeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonConfigurationPlateforme findOne(PropelPDO $con = null) Return the first CommonConfigurationPlateforme matching the query
 * @method CommonConfigurationPlateforme findOneOrCreate(PropelPDO $con = null) Return the first CommonConfigurationPlateforme matching the query, or a new CommonConfigurationPlateforme object populated from the query conditions when no match is found
 *
 * @method CommonConfigurationPlateforme findOneByCodeCpv(string $code_cpv) Return the first CommonConfigurationPlateforme filtered by the code_cpv column
 * @method CommonConfigurationPlateforme findOneByMultiLinguismeEntreprise(string $multi_linguisme_entreprise) Return the first CommonConfigurationPlateforme filtered by the multi_linguisme_entreprise column
 * @method CommonConfigurationPlateforme findOneByGestionFournisseursDocsMesSousServices(string $gestion_fournisseurs_docs_mes_sous_services) Return the first CommonConfigurationPlateforme filtered by the gestion_fournisseurs_docs_mes_sous_services column
 * @method CommonConfigurationPlateforme findOneByAuthenticateInscritByCert(string $authenticate_inscrit_by_cert) Return the first CommonConfigurationPlateforme filtered by the authenticate_inscrit_by_cert column
 * @method CommonConfigurationPlateforme findOneByAuthenticateInscritByLogin(string $authenticate_inscrit_by_login) Return the first CommonConfigurationPlateforme filtered by the authenticate_inscrit_by_login column
 * @method CommonConfigurationPlateforme findOneByBaseQualifieeEntrepriseInsee(string $base_qualifiee_entreprise_insee) Return the first CommonConfigurationPlateforme filtered by the base_qualifiee_entreprise_insee column
 * @method CommonConfigurationPlateforme findOneByGestionBoampMesSousServices(string $gestion_boamp_mes_sous_services) Return the first CommonConfigurationPlateforme filtered by the gestion_boamp_mes_sous_services column
 * @method CommonConfigurationPlateforme findOneByGestionBiCleMesSousServices(string $gestion_bi_cle_mes_sous_services) Return the first CommonConfigurationPlateforme filtered by the gestion_bi_cle_mes_sous_services column
 * @method CommonConfigurationPlateforme findOneByNomEntrepriseToujoursVisible(string $nom_entreprise_toujours_visible) Return the first CommonConfigurationPlateforme filtered by the nom_entreprise_toujours_visible column
 * @method CommonConfigurationPlateforme findOneByGestionJalMesSousServices(string $gestion_jal_mes_sous_services) Return the first CommonConfigurationPlateforme filtered by the gestion_jal_mes_sous_services column
 * @method CommonConfigurationPlateforme findOneByChoixLangueAffichageConsultation(string $choix_langue_affichage_consultation) Return the first CommonConfigurationPlateforme filtered by the choix_langue_affichage_consultation column
 * @method CommonConfigurationPlateforme findOneByCompteEntrepriseDonneesComplementaires(string $compte_entreprise_donnees_complementaires) Return the first CommonConfigurationPlateforme filtered by the compte_entreprise_donnees_complementaires column
 * @method CommonConfigurationPlateforme findOneByAnnuaireEntitesAchatVisibleParEntreprise(string $annuaire_entites_achat_visible_par_entreprise) Return the first CommonConfigurationPlateforme filtered by the annuaire_entites_achat_visible_par_entreprise column
 * @method CommonConfigurationPlateforme findOneByAffichageRechercheAvanceeAgentAcSadTransversaux(string $affichage_recherche_avancee_agent_ac_sad_transversaux) Return the first CommonConfigurationPlateforme filtered by the affichage_recherche_avancee_agent_ac_sad_transversaux column
 * @method CommonConfigurationPlateforme findOneByEncheresEntreprise(string $encheres_entreprise) Return the first CommonConfigurationPlateforme filtered by the encheres_entreprise column
 * @method CommonConfigurationPlateforme findOneBySocleInterne(string $socle_interne) Return the first CommonConfigurationPlateforme filtered by the socle_interne column
 * @method CommonConfigurationPlateforme findOneByModuleCertificat(string $module_certificat) Return the first CommonConfigurationPlateforme filtered by the module_certificat column
 * @method CommonConfigurationPlateforme findOneBySocleExterneAgent(string $socle_externe_agent) Return the first CommonConfigurationPlateforme filtered by the socle_externe_agent column
 * @method CommonConfigurationPlateforme findOneByAfficherImageOrganisme(string $afficher_image_organisme) Return the first CommonConfigurationPlateforme filtered by the afficher_image_organisme column
 * @method CommonConfigurationPlateforme findOneBySocleExterneEntreprise(string $socle_externe_entreprise) Return the first CommonConfigurationPlateforme filtered by the socle_externe_entreprise column
 * @method CommonConfigurationPlateforme findOneByPortailDefenseEntreprise(string $portail_defense_entreprise) Return the first CommonConfigurationPlateforme filtered by the portail_defense_entreprise column
 * @method CommonConfigurationPlateforme findOneByCompteEntrepriseProvince(string $compte_entreprise_province) Return the first CommonConfigurationPlateforme filtered by the compte_entreprise_province column
 * @method CommonConfigurationPlateforme findOneByCompteEntrepriseTelephone3(string $compte_entreprise_telephone3) Return the first CommonConfigurationPlateforme filtered by the compte_entreprise_telephone3 column
 * @method CommonConfigurationPlateforme findOneByCompteEntrepriseTaxProf(string $compte_entreprise_tax_prof) Return the first CommonConfigurationPlateforme filtered by the compte_entreprise_tax_prof column
 * @method CommonConfigurationPlateforme findOneByCompteEntrepriseRcville(string $compte_entreprise_rcville) Return the first CommonConfigurationPlateforme filtered by the compte_entreprise_rcville column
 * @method CommonConfigurationPlateforme findOneByCompteEntrepriseDeclarationHonneur(string $compte_entreprise_declaration_honneur) Return the first CommonConfigurationPlateforme filtered by the compte_entreprise_declaration_honneur column
 * @method CommonConfigurationPlateforme findOneByCompteEntrepriseQualification(string $compte_entreprise_qualification) Return the first CommonConfigurationPlateforme filtered by the compte_entreprise_qualification column
 * @method CommonConfigurationPlateforme findOneByCompteEntrepriseMoyensTechniques(string $compte_entreprise_moyens_techniques) Return the first CommonConfigurationPlateforme filtered by the compte_entreprise_moyens_techniques column
 * @method CommonConfigurationPlateforme findOneByCompteEntreprisePrestationsRealisees(string $compte_entreprise_prestations_realisees) Return the first CommonConfigurationPlateforme filtered by the compte_entreprise_prestations_realisees column
 * @method CommonConfigurationPlateforme findOneByCompteEntrepriseChiffreAffaireProductionBiensServices(string $compte_entreprise_chiffre_affaire_production_biens_services) Return the first CommonConfigurationPlateforme filtered by the compte_entreprise_chiffre_affaire_production_biens_services column
 * @method CommonConfigurationPlateforme findOneByEnveloppeOffreTechnique(string $enveloppe_offre_technique) Return the first CommonConfigurationPlateforme filtered by the enveloppe_offre_technique column
 * @method CommonConfigurationPlateforme findOneByCompteInscritChoixProfil(string $compte_inscrit_choix_profil) Return the first CommonConfigurationPlateforme filtered by the compte_inscrit_choix_profil column
 * @method CommonConfigurationPlateforme findOneByProcedureAdaptee(string $procedure_adaptee) Return the first CommonConfigurationPlateforme filtered by the procedure_adaptee column
 * @method CommonConfigurationPlateforme findOneByCompteEntrepriseSiren(string $compte_entreprise_siren) Return the first CommonConfigurationPlateforme filtered by the compte_entreprise_siren column
 * @method CommonConfigurationPlateforme findOneByCompteEntrepriseActivationInscriptionParAgent(string $compte_entreprise_activation_inscription_par_agent) Return the first CommonConfigurationPlateforme filtered by the compte_entreprise_activation_inscription_par_agent column
 * @method CommonConfigurationPlateforme findOneByMenuEntrepriseConsultationsEnCours(string $menu_entreprise_consultations_en_cours) Return the first CommonConfigurationPlateforme filtered by the menu_entreprise_consultations_en_cours column
 * @method CommonConfigurationPlateforme findOneByCompteEntrepriseCapitalSocial(string $compte_entreprise_capital_social) Return the first CommonConfigurationPlateforme filtered by the compte_entreprise_capital_social column
 * @method CommonConfigurationPlateforme findOneByMailActivationCompteInscritEntreprise(string $mail_activation_compte_inscrit_entreprise) Return the first CommonConfigurationPlateforme filtered by the mail_activation_compte_inscrit_entreprise column
 * @method CommonConfigurationPlateforme findOneByDecisionDateNotification(string $decision_date_notification) Return the first CommonConfigurationPlateforme filtered by the decision_date_notification column
 * @method CommonConfigurationPlateforme findOneByDecisionPmiPme(string $decision_pmi_pme) Return the first CommonConfigurationPlateforme filtered by the decision_pmi_pme column
 * @method CommonConfigurationPlateforme findOneByDecisionNaturePrestations(string $decision_nature_prestations) Return the first CommonConfigurationPlateforme filtered by the decision_nature_prestations column
 * @method CommonConfigurationPlateforme findOneByDecisionObjetMarche(string $decision_objet_marche) Return the first CommonConfigurationPlateforme filtered by the decision_objet_marche column
 * @method CommonConfigurationPlateforme findOneByDecisionNote(string $decision_note) Return the first CommonConfigurationPlateforme filtered by the decision_note column
 * @method CommonConfigurationPlateforme findOneByDecisionFicheRecensement(string $decision_fiche_recensement) Return the first CommonConfigurationPlateforme filtered by the decision_fiche_recensement column
 * @method CommonConfigurationPlateforme findOneByRegistrePapierMailObligatoire(string $registre_papier_mail_obligatoire) Return the first CommonConfigurationPlateforme filtered by the registre_papier_mail_obligatoire column
 * @method CommonConfigurationPlateforme findOneByMenuEntrepriseIndicateursCles(string $menu_entreprise_indicateurs_cles) Return the first CommonConfigurationPlateforme filtered by the menu_entreprise_indicateurs_cles column
 * @method CommonConfigurationPlateforme findOneByAjoutRpaChampEmail(string $ajout_rpa_champ_email) Return the first CommonConfigurationPlateforme filtered by the ajout_rpa_champ_email column
 * @method CommonConfigurationPlateforme findOneByAjoutRpaChampTelephone(string $ajout_rpa_champ_telephone) Return the first CommonConfigurationPlateforme filtered by the ajout_rpa_champ_telephone column
 * @method CommonConfigurationPlateforme findOneByAjoutRpaChampFax(string $ajout_rpa_champ_fax) Return the first CommonConfigurationPlateforme filtered by the ajout_rpa_champ_fax column
 * @method CommonConfigurationPlateforme findOneByEntreprisePoserQuestionSansPj(string $entreprise_poser_question_sans_pj) Return the first CommonConfigurationPlateforme filtered by the entreprise_poser_question_sans_pj column
 * @method CommonConfigurationPlateforme findOneByUrlDemarcheAgent(string $url_demarche_agent) Return the first CommonConfigurationPlateforme filtered by the url_demarche_agent column
 * @method CommonConfigurationPlateforme findOneByUrlDemarcheEntreprise(string $url_demarche_entreprise) Return the first CommonConfigurationPlateforme filtered by the url_demarche_entreprise column
 * @method CommonConfigurationPlateforme findOneBySiretDetailEntiteAchat(string $siret_detail_entite_achat) Return the first CommonConfigurationPlateforme filtered by the siret_detail_entite_achat column
 * @method CommonConfigurationPlateforme findOneByPresenceElu(string $presence_elu) Return the first CommonConfigurationPlateforme filtered by the presence_elu column
 * @method CommonConfigurationPlateforme findOneByGererMonService(string $gerer_mon_service) Return the first CommonConfigurationPlateforme filtered by the gerer_mon_service column
 * @method CommonConfigurationPlateforme findOneByDepouillementEnveloppeDependRatEnveloppePrecedente(string $depouillement_enveloppe_depend_RAT_enveloppe_precedente) Return the first CommonConfigurationPlateforme filtered by the depouillement_enveloppe_depend_RAT_enveloppe_precedente column
 * @method CommonConfigurationPlateforme findOneByConsultationAdresseRetraisDossiers(string $consultation_adresse_retrais_dossiers) Return the first CommonConfigurationPlateforme filtered by the consultation_adresse_retrais_dossiers column
 * @method CommonConfigurationPlateforme findOneByConsultationAdresseDepotOffres(string $consultation_adresse_depot_offres) Return the first CommonConfigurationPlateforme filtered by the consultation_adresse_depot_offres column
 * @method CommonConfigurationPlateforme findOneByConsultationCautionProvisoire(string $consultation_caution_provisoire) Return the first CommonConfigurationPlateforme filtered by the consultation_caution_provisoire column
 * @method CommonConfigurationPlateforme findOneByConsultationLieuOuverturePlis(string $consultation_lieu_ouverture_plis) Return the first CommonConfigurationPlateforme filtered by the consultation_lieu_ouverture_plis column
 * @method CommonConfigurationPlateforme findOneByConsultationQualification(string $consultation_qualification) Return the first CommonConfigurationPlateforme filtered by the consultation_qualification column
 * @method CommonConfigurationPlateforme findOneByConsultationAgrement(string $consultation_agrement) Return the first CommonConfigurationPlateforme filtered by the consultation_agrement column
 * @method CommonConfigurationPlateforme findOneByConsultationEchantillonsDemandes(string $consultation_echantillons_demandes) Return the first CommonConfigurationPlateforme filtered by the consultation_echantillons_demandes column
 * @method CommonConfigurationPlateforme findOneByConsultationReunion(string $consultation_reunion) Return the first CommonConfigurationPlateforme filtered by the consultation_reunion column
 * @method CommonConfigurationPlateforme findOneByConsultationVisiteDesLieux(string $consultation_visite_des_lieux) Return the first CommonConfigurationPlateforme filtered by the consultation_visite_des_lieux column
 * @method CommonConfigurationPlateforme findOneByConsultationPrixAcquisition(string $consultation_prix_acquisition) Return the first CommonConfigurationPlateforme filtered by the consultation_prix_acquisition column
 * @method CommonConfigurationPlateforme findOneByResultatAnalyseAvantDecision(string $resultat_analyse_avant_decision) Return the first CommonConfigurationPlateforme filtered by the resultat_analyse_avant_decision column
 * @method CommonConfigurationPlateforme findOneByCreationInscritParAtes(string $creation_inscrit_par_ates) Return the first CommonConfigurationPlateforme filtered by the creation_inscrit_par_ates column
 * @method CommonConfigurationPlateforme findOneByConsultationVariantesAutorisees(string $consultation_variantes_autorisees) Return the first CommonConfigurationPlateforme filtered by the consultation_variantes_autorisees column
 * @method CommonConfigurationPlateforme findOneByRechercheAvanceeParTypeOrg(string $recherche_avancee_par_type_org) Return the first CommonConfigurationPlateforme filtered by the recherche_avancee_par_type_org column
 * @method CommonConfigurationPlateforme findOneByMenuAgentSocietesExclues(string $menu_agent_societes_exclues) Return the first CommonConfigurationPlateforme filtered by the menu_agent_societes_exclues column
 * @method CommonConfigurationPlateforme findOneByRechercheAvanceeParDomainesActivite(string $recherche_avancee_par_domaines_activite) Return the first CommonConfigurationPlateforme filtered by the recherche_avancee_par_domaines_activite column
 * @method CommonConfigurationPlateforme findOneByRechercheAvanceeParQualification(string $recherche_avancee_par_qualification) Return the first CommonConfigurationPlateforme filtered by the recherche_avancee_par_qualification column
 * @method CommonConfigurationPlateforme findOneByRechercheAvanceeParAgrement(string $recherche_avancee_par_agrement) Return the first CommonConfigurationPlateforme filtered by the recherche_avancee_par_agrement column
 * @method CommonConfigurationPlateforme findOneByContactAdministratifDansDetailConsultationCoteEntreprise(string $contact_administratif_dans_detail_consultation_cote_entreprise) Return the first CommonConfigurationPlateforme filtered by the contact_administratif_dans_detail_consultation_cote_entreprise column
 * @method CommonConfigurationPlateforme findOneByConsultationPiecesDossiers(string $consultation_pieces_dossiers) Return the first CommonConfigurationPlateforme filtered by the consultation_pieces_dossiers column
 * @method CommonConfigurationPlateforme findOneByGererAdressesService(string $gerer_adresses_service) Return the first CommonConfigurationPlateforme filtered by the gerer_adresses_service column
 * @method CommonConfigurationPlateforme findOneByTraduireAnnonces(string $traduire_annonces) Return the first CommonConfigurationPlateforme filtered by the traduire_annonces column
 * @method CommonConfigurationPlateforme findOneByAfficherBlocActionsDansDetailsAnnonces(string $afficher_bloc_actions_dans_details_annonces) Return the first CommonConfigurationPlateforme filtered by the afficher_bloc_actions_dans_details_annonces column
 * @method CommonConfigurationPlateforme findOneByAutoriserUneSeuleReponsePrincipaleParEntreprise(string $autoriser_une_seule_reponse_principale_par_entreprise) Return the first CommonConfigurationPlateforme filtered by the autoriser_une_seule_reponse_principale_par_entreprise column
 * @method CommonConfigurationPlateforme findOneByGenerationAvis(string $generation_avis) Return the first CommonConfigurationPlateforme filtered by the generation_avis column
 * @method CommonConfigurationPlateforme findOneByPassationAppliquerDonneesEnsembleLots(string $passation_appliquer_donnees_ensemble_lots) Return the first CommonConfigurationPlateforme filtered by the passation_appliquer_donnees_ensemble_lots column
 * @method CommonConfigurationPlateforme findOneByAutreAnnonceExtraitPv(string $autre_annonce_extrait_pv) Return the first CommonConfigurationPlateforme filtered by the autre_annonce_extrait_pv column
 * @method CommonConfigurationPlateforme findOneByAutreAnnonceRapportAchevement(string $autre_annonce_rapport_achevement) Return the first CommonConfigurationPlateforme filtered by the autre_annonce_rapport_achevement column
 * @method CommonConfigurationPlateforme findOneByAjoutFichierJointAutreAnnonce(string $ajout_fichier_joint_autre_annonce) Return the first CommonConfigurationPlateforme filtered by the ajout_fichier_joint_autre_annonce column
 * @method CommonConfigurationPlateforme findOneByConsultationModePassation(string $consultation_mode_passation) Return the first CommonConfigurationPlateforme filtered by the consultation_mode_passation column
 * @method CommonConfigurationPlateforme findOneByCompteEntrepriseIdentifiantUnique(string $compte_entreprise_identifiant_unique) Return the first CommonConfigurationPlateforme filtered by the compte_entreprise_identifiant_unique column
 * @method CommonConfigurationPlateforme findOneByGererCertificatsAgent(string $gerer_certificats_agent) Return the first CommonConfigurationPlateforme filtered by the gerer_certificats_agent column
 * @method CommonConfigurationPlateforme findOneByAutreAnnonceProgrammePrevisionnel(string $autre_annonce_programme_previsionnel) Return the first CommonConfigurationPlateforme filtered by the autre_annonce_programme_previsionnel column
 * @method CommonConfigurationPlateforme findOneByAnnulerConsultation(string $annuler_consultation) Return the first CommonConfigurationPlateforme filtered by the annuler_consultation column
 * @method CommonConfigurationPlateforme findOneByCfeEntrepriseAccessibleParAgent(string $cfe_entreprise_accessible_par_agent) Return the first CommonConfigurationPlateforme filtered by the cfe_entreprise_accessible_par_agent column
 * @method CommonConfigurationPlateforme findOneByCompteEntrepriseCodeNaceReferentiel(string $compte_entreprise_code_nace_referentiel) Return the first CommonConfigurationPlateforme filtered by the compte_entreprise_code_nace_referentiel column
 * @method CommonConfigurationPlateforme findOneByCodeNutLtReferentiel(string $code_nut_lt_referentiel) Return the first CommonConfigurationPlateforme filtered by the code_nut_lt_referentiel column
 * @method CommonConfigurationPlateforme findOneByLieuxExecution(string $lieux_execution) Return the first CommonConfigurationPlateforme filtered by the lieux_execution column
 * @method CommonConfigurationPlateforme findOneByCompteEntrepriseDomaineActiviteLtReferentiel(string $compte_entreprise_domaine_activite_lt_referentiel) Return the first CommonConfigurationPlateforme filtered by the compte_entreprise_domaine_activite_lt_referentiel column
 * @method CommonConfigurationPlateforme findOneByConsultationDomainesActivitesLtReferentiel(string $consultation_domaines_activites_lt_referentiel) Return the first CommonConfigurationPlateforme filtered by the consultation_domaines_activites_lt_referentiel column
 * @method CommonConfigurationPlateforme findOneByCompteEntrepriseAgrementLtReferentiel(string $compte_entreprise_agrement_lt_referentiel) Return the first CommonConfigurationPlateforme filtered by the compte_entreprise_agrement_lt_referentiel column
 * @method CommonConfigurationPlateforme findOneByCompteEntrepriseQualificationLtReferentiel(string $compte_entreprise_qualification_lt_referentiel) Return the first CommonConfigurationPlateforme filtered by the compte_entreprise_qualification_lt_referentiel column
 * @method CommonConfigurationPlateforme findOneByReponsePasAPas(string $reponse_pas_a_pas) Return the first CommonConfigurationPlateforme filtered by the reponse_pas_a_pas column
 * @method CommonConfigurationPlateforme findOneByAgentControleFormatMotDePasse(string $agent_controle_format_mot_de_passe) Return the first CommonConfigurationPlateforme filtered by the agent_controle_format_mot_de_passe column
 * @method CommonConfigurationPlateforme findOneByEntrepriseValidationEmailInscription(string $entreprise_validation_email_inscription) Return the first CommonConfigurationPlateforme filtered by the entreprise_validation_email_inscription column
 * @method CommonConfigurationPlateforme findOneByTelechargerDceAvecAuthentification(string $telecharger_dce_avec_authentification) Return the first CommonConfigurationPlateforme filtered by the telecharger_dce_avec_authentification column
 * @method CommonConfigurationPlateforme findOneByAuthentificationBasic(string $authentification_basic) Return the first CommonConfigurationPlateforme filtered by the authentification_basic column
 * @method CommonConfigurationPlateforme findOneByReglementConsultation(string $reglement_consultation) Return the first CommonConfigurationPlateforme filtered by the reglement_consultation column
 * @method CommonConfigurationPlateforme findOneByAnnoncesMarches(string $annonces_marches) Return the first CommonConfigurationPlateforme filtered by the annonces_marches column
 * @method CommonConfigurationPlateforme findOneByCfeDateFinValiditeObligatoire(string $cfe_date_fin_validite_obligatoire) Return the first CommonConfigurationPlateforme filtered by the cfe_date_fin_validite_obligatoire column
 * @method CommonConfigurationPlateforme findOneByAssocierDocumentsCfeConsultation(string $associer_documents_cfe_consultation) Return the first CommonConfigurationPlateforme filtered by the associer_documents_cfe_consultation column
 * @method CommonConfigurationPlateforme findOneByCompteEntrepriseRegion(string $compte_entreprise_region) Return the first CommonConfigurationPlateforme filtered by the compte_entreprise_region column
 * @method CommonConfigurationPlateforme findOneByCompteEntrepriseTelephone2(string $compte_entreprise_telephone2) Return the first CommonConfigurationPlateforme filtered by the compte_entreprise_telephone2 column
 * @method CommonConfigurationPlateforme findOneByCompteEntrepriseCnss(string $compte_entreprise_cnss) Return the first CommonConfigurationPlateforme filtered by the compte_entreprise_cnss column
 * @method CommonConfigurationPlateforme findOneByCompteEntrepriseRcnum(string $compte_entreprise_rcnum) Return the first CommonConfigurationPlateforme filtered by the compte_entreprise_rcnum column
 * @method CommonConfigurationPlateforme findOneByCompteEntrepriseDomaineActivite(string $compte_entreprise_domaine_activite) Return the first CommonConfigurationPlateforme filtered by the compte_entreprise_domaine_activite column
 * @method CommonConfigurationPlateforme findOneByCompteInscritCodeNic(string $compte_inscrit_code_nic) Return the first CommonConfigurationPlateforme filtered by the compte_inscrit_code_nic column
 * @method CommonConfigurationPlateforme findOneByCompteEntrepriseCodeApe(string $compte_entreprise_code_ape) Return the first CommonConfigurationPlateforme filtered by the compte_entreprise_code_ape column
 * @method CommonConfigurationPlateforme findOneByCompteEntrepriseDocumentsCommerciaux(string $compte_entreprise_documents_commerciaux) Return the first CommonConfigurationPlateforme filtered by the compte_entreprise_documents_commerciaux column
 * @method CommonConfigurationPlateforme findOneByCompteEntrepriseAgrement(string $compte_entreprise_agrement) Return the first CommonConfigurationPlateforme filtered by the compte_entreprise_agrement column
 * @method CommonConfigurationPlateforme findOneByCompteEntrepriseMoyensHumains(string $compte_entreprise_moyens_humains) Return the first CommonConfigurationPlateforme filtered by the compte_entreprise_moyens_humains column
 * @method CommonConfigurationPlateforme findOneByCompteEntrepriseActiviteDomaineDefense(string $compte_entreprise_activite_domaine_defense) Return the first CommonConfigurationPlateforme filtered by the compte_entreprise_activite_domaine_defense column
 * @method CommonConfigurationPlateforme findOneByCompteEntrepriseDonneesFinancieres(string $compte_entreprise_donnees_financieres) Return the first CommonConfigurationPlateforme filtered by the compte_entreprise_donnees_financieres column
 * @method CommonConfigurationPlateforme findOneByEnveloppeAnonymat(string $enveloppe_anonymat) Return the first CommonConfigurationPlateforme filtered by the enveloppe_anonymat column
 * @method CommonConfigurationPlateforme findOneByPubliciteFormatXml(string $publicite_format_xml) Return the first CommonConfigurationPlateforme filtered by the publicite_format_xml column
 * @method CommonConfigurationPlateforme findOneByArticle133GenerationPf(string $article_133_generation_pf) Return the first CommonConfigurationPlateforme filtered by the article_133_generation_pf column
 * @method CommonConfigurationPlateforme findOneByEntrepriseRepondreConsultationApresCloture(string $entreprise_repondre_consultation_apres_cloture) Return the first CommonConfigurationPlateforme filtered by the entreprise_repondre_consultation_apres_cloture column
 * @method CommonConfigurationPlateforme findOneByTelechargementOutilVerifHorodatage(string $telechargement_outil_verif_horodatage) Return the first CommonConfigurationPlateforme filtered by the telechargement_outil_verif_horodatage column
 * @method CommonConfigurationPlateforme findOneByAffichageCodeCpv(string $affichage_code_cpv) Return the first CommonConfigurationPlateforme filtered by the affichage_code_cpv column
 * @method CommonConfigurationPlateforme findOneByConsultationDomainesActivites(string $consultation_domaines_activites) Return the first CommonConfigurationPlateforme filtered by the consultation_domaines_activites column
 * @method CommonConfigurationPlateforme findOneByStatistiquesMesureDemat(string $statistiques_mesure_demat) Return the first CommonConfigurationPlateforme filtered by the statistiques_mesure_demat column
 * @method CommonConfigurationPlateforme findOneByPublicationProcure(string $publication_procure) Return the first CommonConfigurationPlateforme filtered by the publication_procure column
 * @method CommonConfigurationPlateforme findOneByMenuEntrepriseToutesLesConsultations(string $menu_entreprise_toutes_les_consultations) Return the first CommonConfigurationPlateforme filtered by the menu_entreprise_toutes_les_consultations column
 * @method CommonConfigurationPlateforme findOneByCompteEntrepriseCpObligatoire(string $compte_entreprise_cp_obligatoire) Return the first CommonConfigurationPlateforme filtered by the compte_entreprise_cp_obligatoire column
 * @method CommonConfigurationPlateforme findOneByAnnulerDepot(string $annuler_depot) Return the first CommonConfigurationPlateforme filtered by the annuler_depot column
 * @method CommonConfigurationPlateforme findOneByTraduireEntiteAchatArabe(string $traduire_entite_achat_arabe) Return the first CommonConfigurationPlateforme filtered by the traduire_entite_achat_arabe column
 * @method CommonConfigurationPlateforme findOneByTraduireOrganismeArabe(string $traduire_organisme_arabe) Return the first CommonConfigurationPlateforme filtered by the traduire_organisme_arabe column
 * @method CommonConfigurationPlateforme findOneByDecisionCp(string $decision_cp) Return the first CommonConfigurationPlateforme filtered by the decision_cp column
 * @method CommonConfigurationPlateforme findOneByDecisionTrancheBudgetaire(string $decision_tranche_budgetaire) Return the first CommonConfigurationPlateforme filtered by the decision_tranche_budgetaire column
 * @method CommonConfigurationPlateforme findOneByDecisionClassement(string $decision_classement) Return the first CommonConfigurationPlateforme filtered by the decision_classement column
 * @method CommonConfigurationPlateforme findOneByDecisionAfficherDetailCandidatParDefaut(string $decision_afficher_detail_candidat_par_defaut) Return the first CommonConfigurationPlateforme filtered by the decision_afficher_detail_candidat_par_defaut column
 * @method CommonConfigurationPlateforme findOneByArticle133UploadFichier(string $article_133_upload_fichier) Return the first CommonConfigurationPlateforme filtered by the article_133_upload_fichier column
 * @method CommonConfigurationPlateforme findOneByMultiLinguismeAgent(string $multi_linguisme_agent) Return the first CommonConfigurationPlateforme filtered by the multi_linguisme_agent column
 * @method CommonConfigurationPlateforme findOneByCompteEntrepriseIfu(string $compte_entreprise_ifu) Return the first CommonConfigurationPlateforme filtered by the compte_entreprise_ifu column
 * @method CommonConfigurationPlateforme findOneByGestionOrganismeParAgent(string $gestion_organisme_par_agent) Return the first CommonConfigurationPlateforme filtered by the gestion_organisme_par_agent column
 * @method CommonConfigurationPlateforme findOneByUtiliserLucene(string $utiliser_lucene) Return the first CommonConfigurationPlateforme filtered by the utiliser_lucene column
 * @method CommonConfigurationPlateforme findOneByUtiliserPageHtmlLieuxExecution(string $utiliser_page_html_lieux_execution) Return the first CommonConfigurationPlateforme filtered by the utiliser_page_html_lieux_execution column
 * @method CommonConfigurationPlateforme findOneByPradoValidateurFormatDate(string $prado_validateur_format_date) Return the first CommonConfigurationPlateforme filtered by the prado_validateur_format_date column
 * @method CommonConfigurationPlateforme findOneByPradoValidateurFormatEmail(string $prado_validateur_format_email) Return the first CommonConfigurationPlateforme filtered by the prado_validateur_format_email column
 * @method CommonConfigurationPlateforme findOneBySocleExternePpp(string $socle_externe_ppp) Return the first CommonConfigurationPlateforme filtered by the socle_externe_ppp column
 * @method CommonConfigurationPlateforme findOneByValidationFormatChampsStricte(string $validation_format_champs_stricte) Return the first CommonConfigurationPlateforme filtered by the validation_format_champs_stricte column
 * @method CommonConfigurationPlateforme findOneByPoserQuestionNecessiteAuthentification(string $poser_question_necessite_authentification) Return the first CommonConfigurationPlateforme filtered by the poser_question_necessite_authentification column
 * @method CommonConfigurationPlateforme findOneByAutoriserModifProfilInscritAtes(string $autoriser_modif_profil_inscrit_ates) Return the first CommonConfigurationPlateforme filtered by the autoriser_modif_profil_inscrit_ates column
 * @method CommonConfigurationPlateforme findOneByUniciteReferenceConsultation(string $unicite_reference_consultation) Return the first CommonConfigurationPlateforme filtered by the unicite_reference_consultation column
 * @method CommonConfigurationPlateforme findOneByRegistrePapierRcnumRcvilleObligatoires(string $registre_papier_rcnum_rcville_obligatoires) Return the first CommonConfigurationPlateforme filtered by the registre_papier_rcnum_rcville_obligatoires column
 * @method CommonConfigurationPlateforme findOneByRegistrePapierAdresseCpVilleObligatoires(string $registre_papier_adresse_cp_ville_obligatoires) Return the first CommonConfigurationPlateforme filtered by the registre_papier_adresse_cp_ville_obligatoires column
 * @method CommonConfigurationPlateforme findOneByTelechargerDceSansIdentification(string $telecharger_dce_sans_identification) Return the first CommonConfigurationPlateforme filtered by the telecharger_dce_sans_identification column
 * @method CommonConfigurationPlateforme findOneByGestionEntrepriseParAgent(string $gestion_entreprise_par_agent) Return the first CommonConfigurationPlateforme filtered by the gestion_entreprise_par_agent column
 * @method CommonConfigurationPlateforme findOneByAutoriserCaracteresSpeciauxDansReference(string $autoriser_caracteres_speciaux_dans_reference) Return the first CommonConfigurationPlateforme filtered by the autoriser_caracteres_speciaux_dans_reference column
 * @method CommonConfigurationPlateforme findOneByInscriptionLibreEntreprise(string $inscription_libre_entreprise) Return the first CommonConfigurationPlateforme filtered by the inscription_libre_entreprise column
 * @method CommonConfigurationPlateforme findOneByAfficherCodeService(string $afficher_code_service) Return the first CommonConfigurationPlateforme filtered by the afficher_code_service column
 * @method CommonConfigurationPlateforme findOneByAuthenticateAgentByLogin(string $authenticate_agent_by_login) Return the first CommonConfigurationPlateforme filtered by the authenticate_agent_by_login column
 * @method CommonConfigurationPlateforme findOneByAuthenticateAgentByCert(string $authenticate_agent_by_cert) Return the first CommonConfigurationPlateforme filtered by the authenticate_agent_by_cert column
 * @method CommonConfigurationPlateforme findOneByGenererActeDengagement(string $generer_acte_dengagement) Return the first CommonConfigurationPlateforme filtered by the generer_acte_dengagement column
 * @method CommonConfigurationPlateforme findOneByEntrepriseControleFormatMotDePasse(string $entreprise_controle_format_mot_de_passe) Return the first CommonConfigurationPlateforme filtered by the entreprise_controle_format_mot_de_passe column
 * @method CommonConfigurationPlateforme findOneByAutreAnnonceInformation(string $autre_annonce_information) Return the first CommonConfigurationPlateforme filtered by the autre_annonce_information column
 * @method CommonConfigurationPlateforme findOneByCreerAutreAnnonce(string $creer_autre_annonce) Return the first CommonConfigurationPlateforme filtered by the creer_autre_annonce column
 * @method CommonConfigurationPlateforme findOneByConsultationClause(string $consultation_clause) Return the first CommonConfigurationPlateforme filtered by the consultation_clause column
 * @method CommonConfigurationPlateforme findOneByPanierEntreprise(string $panier_entreprise) Return the first CommonConfigurationPlateforme filtered by the panier_entreprise column
 * @method CommonConfigurationPlateforme findOneByParametragePubliciteParTypeProcedure(string $parametrage_publicite_par_type_procedure) Return the first CommonConfigurationPlateforme filtered by the parametrage_publicite_par_type_procedure column
 * @method CommonConfigurationPlateforme findOneByExportDecision(string $export_decision) Return the first CommonConfigurationPlateforme filtered by the export_decision column
 * @method CommonConfigurationPlateforme findOneByLieuOuverturePlisObligatoire(string $lieu_ouverture_plis_obligatoire) Return the first CommonConfigurationPlateforme filtered by the lieu_ouverture_plis_obligatoire column
 * @method CommonConfigurationPlateforme findOneByRegleMiseEnLigneParEntiteCoordinatrice(string $regle_mise_en_ligne_par_entite_coordinatrice) Return the first CommonConfigurationPlateforme filtered by the regle_mise_en_ligne_par_entite_coordinatrice column
 * @method CommonConfigurationPlateforme findOneByGestionNewsletter(string $gestion_newsletter) Return the first CommonConfigurationPlateforme filtered by the gestion_newsletter column
 * @method CommonConfigurationPlateforme findOneByPubliciteOpoce(string $publicite_opoce) Return the first CommonConfigurationPlateforme filtered by the publicite_opoce column
 * @method CommonConfigurationPlateforme findOneByGestionModelesFormulaire(string $gestion_modeles_formulaire) Return the first CommonConfigurationPlateforme filtered by the gestion_modeles_formulaire column
 * @method CommonConfigurationPlateforme findOneByGestionAdressesFacturationJal(string $gestion_adresses_facturation_JAL) Return the first CommonConfigurationPlateforme filtered by the gestion_adresses_facturation_JAL column
 * @method CommonConfigurationPlateforme findOneByPubliciteMarchesEnLigne(string $publicite_marches_en_ligne) Return the first CommonConfigurationPlateforme filtered by the publicite_marches_en_ligne column
 * @method CommonConfigurationPlateforme findOneByDossierAdditif(string $dossier_additif) Return the first CommonConfigurationPlateforme filtered by the dossier_additif column
 * @method CommonConfigurationPlateforme findOneByTypeMarche(string $type_marche) Return the first CommonConfigurationPlateforme filtered by the type_marche column
 * @method CommonConfigurationPlateforme findOneByTypePrestation(string $type_prestation) Return the first CommonConfigurationPlateforme filtered by the type_prestation column
 * @method CommonConfigurationPlateforme findOneByAfficherTjrBlocCaracteristiqueReponse(string $afficher_tjr_bloc_caracteristique_reponse) Return the first CommonConfigurationPlateforme filtered by the afficher_tjr_bloc_caracteristique_reponse column
 * @method CommonConfigurationPlateforme findOneByAlerteMetier(string $alerte_metier) Return the first CommonConfigurationPlateforme filtered by the alerte_metier column
 * @method CommonConfigurationPlateforme findOneByBourseALaSousTraitance(string $bourse_a_la_sous_traitance) Return the first CommonConfigurationPlateforme filtered by the bourse_a_la_sous_traitance column
 * @method CommonConfigurationPlateforme findOneByPublierGuides(string $publier_guides) Return the first CommonConfigurationPlateforme filtered by the publier_guides column
 * @method CommonConfigurationPlateforme findOneByRechercheAutoCompletion(string $recherche_auto_completion) Return the first CommonConfigurationPlateforme filtered by the recherche_auto_completion column
 * @method CommonConfigurationPlateforme findOneByStatutCompteEntreprise(string $statut_compte_entreprise) Return the first CommonConfigurationPlateforme filtered by the statut_compte_entreprise column
 * @method CommonConfigurationPlateforme findOneByGestionOrganismes(string $gestion_organismes) Return the first CommonConfigurationPlateforme filtered by the gestion_organismes column
 * @method CommonConfigurationPlateforme findOneByAccueilEntreprisePersonnalise(string $accueil_entreprise_personnalise) Return the first CommonConfigurationPlateforme filtered by the accueil_entreprise_personnalise column
 * @method CommonConfigurationPlateforme findOneByInterfaceModuleSub(string $interface_module_sub) Return the first CommonConfigurationPlateforme filtered by the interface_module_sub column
 * @method CommonConfigurationPlateforme findOneByAuthentificationAgentMultiOrganismes(string $authentification_agent_multi_organismes) Return the first CommonConfigurationPlateforme filtered by the authentification_agent_multi_organismes column
 * @method CommonConfigurationPlateforme findOneByPartagerConsultation(string $partager_consultation) Return the first CommonConfigurationPlateforme filtered by the partager_consultation column
 * @method CommonConfigurationPlateforme findOneByAnnuaireAcheteursPublics(string $annuaire_acheteurs_publics) Return the first CommonConfigurationPlateforme filtered by the annuaire_acheteurs_publics column
 * @method CommonConfigurationPlateforme findOneByEntrepriseActionsGroupees(string $entreprise_actions_groupees) Return the first CommonConfigurationPlateforme filtered by the entreprise_actions_groupees column
 * @method CommonConfigurationPlateforme findOneByLieuxExecutionCarte(string $lieux_execution_carte) Return the first CommonConfigurationPlateforme filtered by the lieux_execution_carte column
 * @method CommonConfigurationPlateforme findOneBySurchargeReferentiels(string $surcharge_referentiels) Return the first CommonConfigurationPlateforme filtered by the surcharge_referentiels column
 * @method CommonConfigurationPlateforme findOneByModeRestrictionRgs(string $Mode_Restriction_RGS) Return the first CommonConfigurationPlateforme filtered by the Mode_Restriction_RGS column
 * @method CommonConfigurationPlateforme findOneByAutreAnnonceDecisionResiliation(string $autre_annonce_decision_resiliation) Return the first CommonConfigurationPlateforme filtered by the autre_annonce_decision_resiliation column
 * @method CommonConfigurationPlateforme findOneByAutreAnnonceSyntheseRapportAudit(string $autre_annonce_synthese_rapport_audit) Return the first CommonConfigurationPlateforme filtered by the autre_annonce_synthese_rapport_audit column
 * @method CommonConfigurationPlateforme findOneByFicheWeka(string $fiche_weka) Return the first CommonConfigurationPlateforme filtered by the fiche_weka column
 * @method CommonConfigurationPlateforme findOneByGenerationAutomatiqueMdpAgent(string $generation_automatique_mdp_agent) Return the first CommonConfigurationPlateforme filtered by the generation_automatique_mdp_agent column
 * @method CommonConfigurationPlateforme findOneByGenerationAutomatiqueMdpInscrit(string $generation_automatique_mdp_inscrit) Return the first CommonConfigurationPlateforme filtered by the generation_automatique_mdp_inscrit column
 * @method CommonConfigurationPlateforme findOneByListeAcRgs(string $liste_ac_rgs) Return the first CommonConfigurationPlateforme filtered by the liste_ac_rgs column
 * @method CommonConfigurationPlateforme findOneByListeConsOrg(string $liste_cons_org) Return the first CommonConfigurationPlateforme filtered by the liste_cons_org column
 * @method CommonConfigurationPlateforme findOneByMarchePublicSimplifieEntreprise(string $marche_public_simplifie_entreprise) Return the first CommonConfigurationPlateforme filtered by the marche_public_simplifie_entreprise column
 * @method CommonConfigurationPlateforme findOneByDemandeValidationControleur(string $demande_validation_controleur) Return the first CommonConfigurationPlateforme filtered by the demande_validation_controleur column
 * @method CommonConfigurationPlateforme findOneByAccesExecContrats(string $acces_exec_contrats) Return the first CommonConfigurationPlateforme filtered by the acces_exec_contrats column
 * @method CommonConfigurationPlateforme findOneByFormeJuridiqueGroupementAttributaire(string $forme_juridique_groupement_attributaire) Return the first CommonConfigurationPlateforme filtered by the forme_juridique_groupement_attributaire column
 * @method CommonConfigurationPlateforme findOneByDateLimiteRemisePlisObligatoire(string $date_limite_remise_plis_obligatoire) Return the first CommonConfigurationPlateforme filtered by the date_limite_remise_plis_obligatoire column
 * @method CommonConfigurationPlateforme findOneByModifTypeProcedure(string $modif_type_procedure) Return the first CommonConfigurationPlateforme filtered by the modif_type_procedure column
 * @method CommonConfigurationPlateforme findOneByDonneesComplementairesProcedure(string $donnees_complementaires_procedure) Return the first CommonConfigurationPlateforme filtered by the donnees_complementaires_procedure column
 * @method CommonConfigurationPlateforme findOneByFormeMarcheFormePrix(string $forme_marche_forme_prix) Return the first CommonConfigurationPlateforme filtered by the forme_marche_forme_prix column
 * @method CommonConfigurationPlateforme findOneByControleUniciteNumMarche(string $controle_unicite_num_marche) Return the first CommonConfigurationPlateforme filtered by the controle_unicite_num_marche column
 * @method CommonConfigurationPlateforme findOneByAffichageNumMarche(string $affichage_num_marche) Return the first CommonConfigurationPlateforme filtered by the affichage_num_marche column
 * @method CommonConfigurationPlateforme findOneByAffichageDateFinMarche(string $affichage_date_fin_marche) Return the first CommonConfigurationPlateforme filtered by the affichage_date_fin_marche column
 * @method CommonConfigurationPlateforme findOneByAffichageIce(string $affichage_ice) Return the first CommonConfigurationPlateforme filtered by the affichage_ice column
 * @method CommonConfigurationPlateforme findOneByBlocageDepotHorsDelai(string $blocage_depot_hors_delai) Return the first CommonConfigurationPlateforme filtered by the blocage_depot_hors_delai column
 * @method CommonConfigurationPlateforme findOneByActiverSuiviPv(string $activer_suivi_pv) Return the first CommonConfigurationPlateforme filtered by the activer_suivi_pv column
 * @method CommonConfigurationPlateforme findOneByCaptchaValidateur(string $captcha_validateur) Return the first CommonConfigurationPlateforme filtered by the captcha_validateur column
 * @method CommonConfigurationPlateforme findOneByDecisionDepuisResultatAnalyse(string $decision_depuis_resultat_analyse) Return the first CommonConfigurationPlateforme filtered by the decision_depuis_resultat_analyse column
 * @method CommonConfigurationPlateforme findOneByModuleFacture(string $module_facture) Return the first CommonConfigurationPlateforme filtered by the module_facture column
 * @method CommonConfigurationPlateforme findOneByValidationEntrepriseFacturation(string $validation_entreprise_facturation) Return the first CommonConfigurationPlateforme filtered by the validation_entreprise_facturation column
 * @method CommonConfigurationPlateforme findOneByBloquerDepotSiEnvNonDepose(string $bloquer_depot_si_env_non_depose) Return the first CommonConfigurationPlateforme filtered by the bloquer_depot_si_env_non_depose column
 * @method CommonConfigurationPlateforme findOneByBloquerDepotSignatureInvalide(string $bloquer_depot_signature_invalide) Return the first CommonConfigurationPlateforme filtered by the bloquer_depot_signature_invalide column
 * @method CommonConfigurationPlateforme findOneByConsultationImportLots(string $consultation_import_lots) Return the first CommonConfigurationPlateforme filtered by the consultation_import_lots column
 * @method CommonConfigurationPlateforme findOneByDepotSelectionLots(string $depot_selection_lots) Return the first CommonConfigurationPlateforme filtered by the depot_selection_lots column
 * @method CommonConfigurationPlateforme findOneByModificationLotsApresMiseEnLigne(string $modification_lots_apres_mise_en_ligne) Return the first CommonConfigurationPlateforme filtered by the modification_lots_apres_mise_en_ligne column
 * @method CommonConfigurationPlateforme findOneByFiltreBdfEntrepriseValide(string $filtre_bdf_entreprise_valide) Return the first CommonConfigurationPlateforme filtered by the filtre_bdf_entreprise_valide column
 * @method CommonConfigurationPlateforme findOneByAffichageIdentifiantFiscale(string $affichage_identifiant_fiscale) Return the first CommonConfigurationPlateforme filtered by the affichage_identifiant_fiscale column
 * @method CommonConfigurationPlateforme findOneByDecisionCreerContrat(string $decision_creer_contrat) Return the first CommonConfigurationPlateforme filtered by the decision_creer_contrat column
 * @method CommonConfigurationPlateforme findOneByGenerationBiCle(string $generation_bi_cle) Return the first CommonConfigurationPlateforme filtered by the generation_bi_cle column
 *
 * @method array findByIdAuto(int $id_auto) Return CommonConfigurationPlateforme objects filtered by the id_auto column
 * @method array findByCodeCpv(string $code_cpv) Return CommonConfigurationPlateforme objects filtered by the code_cpv column
 * @method array findByMultiLinguismeEntreprise(string $multi_linguisme_entreprise) Return CommonConfigurationPlateforme objects filtered by the multi_linguisme_entreprise column
 * @method array findByGestionFournisseursDocsMesSousServices(string $gestion_fournisseurs_docs_mes_sous_services) Return CommonConfigurationPlateforme objects filtered by the gestion_fournisseurs_docs_mes_sous_services column
 * @method array findByAuthenticateInscritByCert(string $authenticate_inscrit_by_cert) Return CommonConfigurationPlateforme objects filtered by the authenticate_inscrit_by_cert column
 * @method array findByAuthenticateInscritByLogin(string $authenticate_inscrit_by_login) Return CommonConfigurationPlateforme objects filtered by the authenticate_inscrit_by_login column
 * @method array findByBaseQualifieeEntrepriseInsee(string $base_qualifiee_entreprise_insee) Return CommonConfigurationPlateforme objects filtered by the base_qualifiee_entreprise_insee column
 * @method array findByGestionBoampMesSousServices(string $gestion_boamp_mes_sous_services) Return CommonConfigurationPlateforme objects filtered by the gestion_boamp_mes_sous_services column
 * @method array findByGestionBiCleMesSousServices(string $gestion_bi_cle_mes_sous_services) Return CommonConfigurationPlateforme objects filtered by the gestion_bi_cle_mes_sous_services column
 * @method array findByNomEntrepriseToujoursVisible(string $nom_entreprise_toujours_visible) Return CommonConfigurationPlateforme objects filtered by the nom_entreprise_toujours_visible column
 * @method array findByGestionJalMesSousServices(string $gestion_jal_mes_sous_services) Return CommonConfigurationPlateforme objects filtered by the gestion_jal_mes_sous_services column
 * @method array findByChoixLangueAffichageConsultation(string $choix_langue_affichage_consultation) Return CommonConfigurationPlateforme objects filtered by the choix_langue_affichage_consultation column
 * @method array findByCompteEntrepriseDonneesComplementaires(string $compte_entreprise_donnees_complementaires) Return CommonConfigurationPlateforme objects filtered by the compte_entreprise_donnees_complementaires column
 * @method array findByAnnuaireEntitesAchatVisibleParEntreprise(string $annuaire_entites_achat_visible_par_entreprise) Return CommonConfigurationPlateforme objects filtered by the annuaire_entites_achat_visible_par_entreprise column
 * @method array findByAffichageRechercheAvanceeAgentAcSadTransversaux(string $affichage_recherche_avancee_agent_ac_sad_transversaux) Return CommonConfigurationPlateforme objects filtered by the affichage_recherche_avancee_agent_ac_sad_transversaux column
 * @method array findByEncheresEntreprise(string $encheres_entreprise) Return CommonConfigurationPlateforme objects filtered by the encheres_entreprise column
 * @method array findBySocleInterne(string $socle_interne) Return CommonConfigurationPlateforme objects filtered by the socle_interne column
 * @method array findByModuleCertificat(string $module_certificat) Return CommonConfigurationPlateforme objects filtered by the module_certificat column
 * @method array findBySocleExterneAgent(string $socle_externe_agent) Return CommonConfigurationPlateforme objects filtered by the socle_externe_agent column
 * @method array findByAfficherImageOrganisme(string $afficher_image_organisme) Return CommonConfigurationPlateforme objects filtered by the afficher_image_organisme column
 * @method array findBySocleExterneEntreprise(string $socle_externe_entreprise) Return CommonConfigurationPlateforme objects filtered by the socle_externe_entreprise column
 * @method array findByPortailDefenseEntreprise(string $portail_defense_entreprise) Return CommonConfigurationPlateforme objects filtered by the portail_defense_entreprise column
 * @method array findByCompteEntrepriseProvince(string $compte_entreprise_province) Return CommonConfigurationPlateforme objects filtered by the compte_entreprise_province column
 * @method array findByCompteEntrepriseTelephone3(string $compte_entreprise_telephone3) Return CommonConfigurationPlateforme objects filtered by the compte_entreprise_telephone3 column
 * @method array findByCompteEntrepriseTaxProf(string $compte_entreprise_tax_prof) Return CommonConfigurationPlateforme objects filtered by the compte_entreprise_tax_prof column
 * @method array findByCompteEntrepriseRcville(string $compte_entreprise_rcville) Return CommonConfigurationPlateforme objects filtered by the compte_entreprise_rcville column
 * @method array findByCompteEntrepriseDeclarationHonneur(string $compte_entreprise_declaration_honneur) Return CommonConfigurationPlateforme objects filtered by the compte_entreprise_declaration_honneur column
 * @method array findByCompteEntrepriseQualification(string $compte_entreprise_qualification) Return CommonConfigurationPlateforme objects filtered by the compte_entreprise_qualification column
 * @method array findByCompteEntrepriseMoyensTechniques(string $compte_entreprise_moyens_techniques) Return CommonConfigurationPlateforme objects filtered by the compte_entreprise_moyens_techniques column
 * @method array findByCompteEntreprisePrestationsRealisees(string $compte_entreprise_prestations_realisees) Return CommonConfigurationPlateforme objects filtered by the compte_entreprise_prestations_realisees column
 * @method array findByCompteEntrepriseChiffreAffaireProductionBiensServices(string $compte_entreprise_chiffre_affaire_production_biens_services) Return CommonConfigurationPlateforme objects filtered by the compte_entreprise_chiffre_affaire_production_biens_services column
 * @method array findByEnveloppeOffreTechnique(string $enveloppe_offre_technique) Return CommonConfigurationPlateforme objects filtered by the enveloppe_offre_technique column
 * @method array findByCompteInscritChoixProfil(string $compte_inscrit_choix_profil) Return CommonConfigurationPlateforme objects filtered by the compte_inscrit_choix_profil column
 * @method array findByProcedureAdaptee(string $procedure_adaptee) Return CommonConfigurationPlateforme objects filtered by the procedure_adaptee column
 * @method array findByCompteEntrepriseSiren(string $compte_entreprise_siren) Return CommonConfigurationPlateforme objects filtered by the compte_entreprise_siren column
 * @method array findByCompteEntrepriseActivationInscriptionParAgent(string $compte_entreprise_activation_inscription_par_agent) Return CommonConfigurationPlateforme objects filtered by the compte_entreprise_activation_inscription_par_agent column
 * @method array findByMenuEntrepriseConsultationsEnCours(string $menu_entreprise_consultations_en_cours) Return CommonConfigurationPlateforme objects filtered by the menu_entreprise_consultations_en_cours column
 * @method array findByCompteEntrepriseCapitalSocial(string $compte_entreprise_capital_social) Return CommonConfigurationPlateforme objects filtered by the compte_entreprise_capital_social column
 * @method array findByMailActivationCompteInscritEntreprise(string $mail_activation_compte_inscrit_entreprise) Return CommonConfigurationPlateforme objects filtered by the mail_activation_compte_inscrit_entreprise column
 * @method array findByDecisionDateNotification(string $decision_date_notification) Return CommonConfigurationPlateforme objects filtered by the decision_date_notification column
 * @method array findByDecisionPmiPme(string $decision_pmi_pme) Return CommonConfigurationPlateforme objects filtered by the decision_pmi_pme column
 * @method array findByDecisionNaturePrestations(string $decision_nature_prestations) Return CommonConfigurationPlateforme objects filtered by the decision_nature_prestations column
 * @method array findByDecisionObjetMarche(string $decision_objet_marche) Return CommonConfigurationPlateforme objects filtered by the decision_objet_marche column
 * @method array findByDecisionNote(string $decision_note) Return CommonConfigurationPlateforme objects filtered by the decision_note column
 * @method array findByDecisionFicheRecensement(string $decision_fiche_recensement) Return CommonConfigurationPlateforme objects filtered by the decision_fiche_recensement column
 * @method array findByRegistrePapierMailObligatoire(string $registre_papier_mail_obligatoire) Return CommonConfigurationPlateforme objects filtered by the registre_papier_mail_obligatoire column
 * @method array findByMenuEntrepriseIndicateursCles(string $menu_entreprise_indicateurs_cles) Return CommonConfigurationPlateforme objects filtered by the menu_entreprise_indicateurs_cles column
 * @method array findByAjoutRpaChampEmail(string $ajout_rpa_champ_email) Return CommonConfigurationPlateforme objects filtered by the ajout_rpa_champ_email column
 * @method array findByAjoutRpaChampTelephone(string $ajout_rpa_champ_telephone) Return CommonConfigurationPlateforme objects filtered by the ajout_rpa_champ_telephone column
 * @method array findByAjoutRpaChampFax(string $ajout_rpa_champ_fax) Return CommonConfigurationPlateforme objects filtered by the ajout_rpa_champ_fax column
 * @method array findByEntreprisePoserQuestionSansPj(string $entreprise_poser_question_sans_pj) Return CommonConfigurationPlateforme objects filtered by the entreprise_poser_question_sans_pj column
 * @method array findByUrlDemarcheAgent(string $url_demarche_agent) Return CommonConfigurationPlateforme objects filtered by the url_demarche_agent column
 * @method array findByUrlDemarcheEntreprise(string $url_demarche_entreprise) Return CommonConfigurationPlateforme objects filtered by the url_demarche_entreprise column
 * @method array findBySiretDetailEntiteAchat(string $siret_detail_entite_achat) Return CommonConfigurationPlateforme objects filtered by the siret_detail_entite_achat column
 * @method array findByPresenceElu(string $presence_elu) Return CommonConfigurationPlateforme objects filtered by the presence_elu column
 * @method array findByGererMonService(string $gerer_mon_service) Return CommonConfigurationPlateforme objects filtered by the gerer_mon_service column
 * @method array findByDepouillementEnveloppeDependRatEnveloppePrecedente(string $depouillement_enveloppe_depend_RAT_enveloppe_precedente) Return CommonConfigurationPlateforme objects filtered by the depouillement_enveloppe_depend_RAT_enveloppe_precedente column
 * @method array findByConsultationAdresseRetraisDossiers(string $consultation_adresse_retrais_dossiers) Return CommonConfigurationPlateforme objects filtered by the consultation_adresse_retrais_dossiers column
 * @method array findByConsultationAdresseDepotOffres(string $consultation_adresse_depot_offres) Return CommonConfigurationPlateforme objects filtered by the consultation_adresse_depot_offres column
 * @method array findByConsultationCautionProvisoire(string $consultation_caution_provisoire) Return CommonConfigurationPlateforme objects filtered by the consultation_caution_provisoire column
 * @method array findByConsultationLieuOuverturePlis(string $consultation_lieu_ouverture_plis) Return CommonConfigurationPlateforme objects filtered by the consultation_lieu_ouverture_plis column
 * @method array findByConsultationQualification(string $consultation_qualification) Return CommonConfigurationPlateforme objects filtered by the consultation_qualification column
 * @method array findByConsultationAgrement(string $consultation_agrement) Return CommonConfigurationPlateforme objects filtered by the consultation_agrement column
 * @method array findByConsultationEchantillonsDemandes(string $consultation_echantillons_demandes) Return CommonConfigurationPlateforme objects filtered by the consultation_echantillons_demandes column
 * @method array findByConsultationReunion(string $consultation_reunion) Return CommonConfigurationPlateforme objects filtered by the consultation_reunion column
 * @method array findByConsultationVisiteDesLieux(string $consultation_visite_des_lieux) Return CommonConfigurationPlateforme objects filtered by the consultation_visite_des_lieux column
 * @method array findByConsultationPrixAcquisition(string $consultation_prix_acquisition) Return CommonConfigurationPlateforme objects filtered by the consultation_prix_acquisition column
 * @method array findByResultatAnalyseAvantDecision(string $resultat_analyse_avant_decision) Return CommonConfigurationPlateforme objects filtered by the resultat_analyse_avant_decision column
 * @method array findByCreationInscritParAtes(string $creation_inscrit_par_ates) Return CommonConfigurationPlateforme objects filtered by the creation_inscrit_par_ates column
 * @method array findByConsultationVariantesAutorisees(string $consultation_variantes_autorisees) Return CommonConfigurationPlateforme objects filtered by the consultation_variantes_autorisees column
 * @method array findByRechercheAvanceeParTypeOrg(string $recherche_avancee_par_type_org) Return CommonConfigurationPlateforme objects filtered by the recherche_avancee_par_type_org column
 * @method array findByMenuAgentSocietesExclues(string $menu_agent_societes_exclues) Return CommonConfigurationPlateforme objects filtered by the menu_agent_societes_exclues column
 * @method array findByRechercheAvanceeParDomainesActivite(string $recherche_avancee_par_domaines_activite) Return CommonConfigurationPlateforme objects filtered by the recherche_avancee_par_domaines_activite column
 * @method array findByRechercheAvanceeParQualification(string $recherche_avancee_par_qualification) Return CommonConfigurationPlateforme objects filtered by the recherche_avancee_par_qualification column
 * @method array findByRechercheAvanceeParAgrement(string $recherche_avancee_par_agrement) Return CommonConfigurationPlateforme objects filtered by the recherche_avancee_par_agrement column
 * @method array findByContactAdministratifDansDetailConsultationCoteEntreprise(string $contact_administratif_dans_detail_consultation_cote_entreprise) Return CommonConfigurationPlateforme objects filtered by the contact_administratif_dans_detail_consultation_cote_entreprise column
 * @method array findByConsultationPiecesDossiers(string $consultation_pieces_dossiers) Return CommonConfigurationPlateforme objects filtered by the consultation_pieces_dossiers column
 * @method array findByGererAdressesService(string $gerer_adresses_service) Return CommonConfigurationPlateforme objects filtered by the gerer_adresses_service column
 * @method array findByTraduireAnnonces(string $traduire_annonces) Return CommonConfigurationPlateforme objects filtered by the traduire_annonces column
 * @method array findByAfficherBlocActionsDansDetailsAnnonces(string $afficher_bloc_actions_dans_details_annonces) Return CommonConfigurationPlateforme objects filtered by the afficher_bloc_actions_dans_details_annonces column
 * @method array findByAutoriserUneSeuleReponsePrincipaleParEntreprise(string $autoriser_une_seule_reponse_principale_par_entreprise) Return CommonConfigurationPlateforme objects filtered by the autoriser_une_seule_reponse_principale_par_entreprise column
 * @method array findByGenerationAvis(string $generation_avis) Return CommonConfigurationPlateforme objects filtered by the generation_avis column
 * @method array findByPassationAppliquerDonneesEnsembleLots(string $passation_appliquer_donnees_ensemble_lots) Return CommonConfigurationPlateforme objects filtered by the passation_appliquer_donnees_ensemble_lots column
 * @method array findByAutreAnnonceExtraitPv(string $autre_annonce_extrait_pv) Return CommonConfigurationPlateforme objects filtered by the autre_annonce_extrait_pv column
 * @method array findByAutreAnnonceRapportAchevement(string $autre_annonce_rapport_achevement) Return CommonConfigurationPlateforme objects filtered by the autre_annonce_rapport_achevement column
 * @method array findByAjoutFichierJointAutreAnnonce(string $ajout_fichier_joint_autre_annonce) Return CommonConfigurationPlateforme objects filtered by the ajout_fichier_joint_autre_annonce column
 * @method array findByConsultationModePassation(string $consultation_mode_passation) Return CommonConfigurationPlateforme objects filtered by the consultation_mode_passation column
 * @method array findByCompteEntrepriseIdentifiantUnique(string $compte_entreprise_identifiant_unique) Return CommonConfigurationPlateforme objects filtered by the compte_entreprise_identifiant_unique column
 * @method array findByGererCertificatsAgent(string $gerer_certificats_agent) Return CommonConfigurationPlateforme objects filtered by the gerer_certificats_agent column
 * @method array findByAutreAnnonceProgrammePrevisionnel(string $autre_annonce_programme_previsionnel) Return CommonConfigurationPlateforme objects filtered by the autre_annonce_programme_previsionnel column
 * @method array findByAnnulerConsultation(string $annuler_consultation) Return CommonConfigurationPlateforme objects filtered by the annuler_consultation column
 * @method array findByCfeEntrepriseAccessibleParAgent(string $cfe_entreprise_accessible_par_agent) Return CommonConfigurationPlateforme objects filtered by the cfe_entreprise_accessible_par_agent column
 * @method array findByCompteEntrepriseCodeNaceReferentiel(string $compte_entreprise_code_nace_referentiel) Return CommonConfigurationPlateforme objects filtered by the compte_entreprise_code_nace_referentiel column
 * @method array findByCodeNutLtReferentiel(string $code_nut_lt_referentiel) Return CommonConfigurationPlateforme objects filtered by the code_nut_lt_referentiel column
 * @method array findByLieuxExecution(string $lieux_execution) Return CommonConfigurationPlateforme objects filtered by the lieux_execution column
 * @method array findByCompteEntrepriseDomaineActiviteLtReferentiel(string $compte_entreprise_domaine_activite_lt_referentiel) Return CommonConfigurationPlateforme objects filtered by the compte_entreprise_domaine_activite_lt_referentiel column
 * @method array findByConsultationDomainesActivitesLtReferentiel(string $consultation_domaines_activites_lt_referentiel) Return CommonConfigurationPlateforme objects filtered by the consultation_domaines_activites_lt_referentiel column
 * @method array findByCompteEntrepriseAgrementLtReferentiel(string $compte_entreprise_agrement_lt_referentiel) Return CommonConfigurationPlateforme objects filtered by the compte_entreprise_agrement_lt_referentiel column
 * @method array findByCompteEntrepriseQualificationLtReferentiel(string $compte_entreprise_qualification_lt_referentiel) Return CommonConfigurationPlateforme objects filtered by the compte_entreprise_qualification_lt_referentiel column
 * @method array findByReponsePasAPas(string $reponse_pas_a_pas) Return CommonConfigurationPlateforme objects filtered by the reponse_pas_a_pas column
 * @method array findByAgentControleFormatMotDePasse(string $agent_controle_format_mot_de_passe) Return CommonConfigurationPlateforme objects filtered by the agent_controle_format_mot_de_passe column
 * @method array findByEntrepriseValidationEmailInscription(string $entreprise_validation_email_inscription) Return CommonConfigurationPlateforme objects filtered by the entreprise_validation_email_inscription column
 * @method array findByTelechargerDceAvecAuthentification(string $telecharger_dce_avec_authentification) Return CommonConfigurationPlateforme objects filtered by the telecharger_dce_avec_authentification column
 * @method array findByAuthentificationBasic(string $authentification_basic) Return CommonConfigurationPlateforme objects filtered by the authentification_basic column
 * @method array findByReglementConsultation(string $reglement_consultation) Return CommonConfigurationPlateforme objects filtered by the reglement_consultation column
 * @method array findByAnnoncesMarches(string $annonces_marches) Return CommonConfigurationPlateforme objects filtered by the annonces_marches column
 * @method array findByCfeDateFinValiditeObligatoire(string $cfe_date_fin_validite_obligatoire) Return CommonConfigurationPlateforme objects filtered by the cfe_date_fin_validite_obligatoire column
 * @method array findByAssocierDocumentsCfeConsultation(string $associer_documents_cfe_consultation) Return CommonConfigurationPlateforme objects filtered by the associer_documents_cfe_consultation column
 * @method array findByCompteEntrepriseRegion(string $compte_entreprise_region) Return CommonConfigurationPlateforme objects filtered by the compte_entreprise_region column
 * @method array findByCompteEntrepriseTelephone2(string $compte_entreprise_telephone2) Return CommonConfigurationPlateforme objects filtered by the compte_entreprise_telephone2 column
 * @method array findByCompteEntrepriseCnss(string $compte_entreprise_cnss) Return CommonConfigurationPlateforme objects filtered by the compte_entreprise_cnss column
 * @method array findByCompteEntrepriseRcnum(string $compte_entreprise_rcnum) Return CommonConfigurationPlateforme objects filtered by the compte_entreprise_rcnum column
 * @method array findByCompteEntrepriseDomaineActivite(string $compte_entreprise_domaine_activite) Return CommonConfigurationPlateforme objects filtered by the compte_entreprise_domaine_activite column
 * @method array findByCompteInscritCodeNic(string $compte_inscrit_code_nic) Return CommonConfigurationPlateforme objects filtered by the compte_inscrit_code_nic column
 * @method array findByCompteEntrepriseCodeApe(string $compte_entreprise_code_ape) Return CommonConfigurationPlateforme objects filtered by the compte_entreprise_code_ape column
 * @method array findByCompteEntrepriseDocumentsCommerciaux(string $compte_entreprise_documents_commerciaux) Return CommonConfigurationPlateforme objects filtered by the compte_entreprise_documents_commerciaux column
 * @method array findByCompteEntrepriseAgrement(string $compte_entreprise_agrement) Return CommonConfigurationPlateforme objects filtered by the compte_entreprise_agrement column
 * @method array findByCompteEntrepriseMoyensHumains(string $compte_entreprise_moyens_humains) Return CommonConfigurationPlateforme objects filtered by the compte_entreprise_moyens_humains column
 * @method array findByCompteEntrepriseActiviteDomaineDefense(string $compte_entreprise_activite_domaine_defense) Return CommonConfigurationPlateforme objects filtered by the compte_entreprise_activite_domaine_defense column
 * @method array findByCompteEntrepriseDonneesFinancieres(string $compte_entreprise_donnees_financieres) Return CommonConfigurationPlateforme objects filtered by the compte_entreprise_donnees_financieres column
 * @method array findByEnveloppeAnonymat(string $enveloppe_anonymat) Return CommonConfigurationPlateforme objects filtered by the enveloppe_anonymat column
 * @method array findByPubliciteFormatXml(string $publicite_format_xml) Return CommonConfigurationPlateforme objects filtered by the publicite_format_xml column
 * @method array findByArticle133GenerationPf(string $article_133_generation_pf) Return CommonConfigurationPlateforme objects filtered by the article_133_generation_pf column
 * @method array findByEntrepriseRepondreConsultationApresCloture(string $entreprise_repondre_consultation_apres_cloture) Return CommonConfigurationPlateforme objects filtered by the entreprise_repondre_consultation_apres_cloture column
 * @method array findByTelechargementOutilVerifHorodatage(string $telechargement_outil_verif_horodatage) Return CommonConfigurationPlateforme objects filtered by the telechargement_outil_verif_horodatage column
 * @method array findByAffichageCodeCpv(string $affichage_code_cpv) Return CommonConfigurationPlateforme objects filtered by the affichage_code_cpv column
 * @method array findByConsultationDomainesActivites(string $consultation_domaines_activites) Return CommonConfigurationPlateforme objects filtered by the consultation_domaines_activites column
 * @method array findByStatistiquesMesureDemat(string $statistiques_mesure_demat) Return CommonConfigurationPlateforme objects filtered by the statistiques_mesure_demat column
 * @method array findByPublicationProcure(string $publication_procure) Return CommonConfigurationPlateforme objects filtered by the publication_procure column
 * @method array findByMenuEntrepriseToutesLesConsultations(string $menu_entreprise_toutes_les_consultations) Return CommonConfigurationPlateforme objects filtered by the menu_entreprise_toutes_les_consultations column
 * @method array findByCompteEntrepriseCpObligatoire(string $compte_entreprise_cp_obligatoire) Return CommonConfigurationPlateforme objects filtered by the compte_entreprise_cp_obligatoire column
 * @method array findByAnnulerDepot(string $annuler_depot) Return CommonConfigurationPlateforme objects filtered by the annuler_depot column
 * @method array findByTraduireEntiteAchatArabe(string $traduire_entite_achat_arabe) Return CommonConfigurationPlateforme objects filtered by the traduire_entite_achat_arabe column
 * @method array findByTraduireOrganismeArabe(string $traduire_organisme_arabe) Return CommonConfigurationPlateforme objects filtered by the traduire_organisme_arabe column
 * @method array findByDecisionCp(string $decision_cp) Return CommonConfigurationPlateforme objects filtered by the decision_cp column
 * @method array findByDecisionTrancheBudgetaire(string $decision_tranche_budgetaire) Return CommonConfigurationPlateforme objects filtered by the decision_tranche_budgetaire column
 * @method array findByDecisionClassement(string $decision_classement) Return CommonConfigurationPlateforme objects filtered by the decision_classement column
 * @method array findByDecisionAfficherDetailCandidatParDefaut(string $decision_afficher_detail_candidat_par_defaut) Return CommonConfigurationPlateforme objects filtered by the decision_afficher_detail_candidat_par_defaut column
 * @method array findByArticle133UploadFichier(string $article_133_upload_fichier) Return CommonConfigurationPlateforme objects filtered by the article_133_upload_fichier column
 * @method array findByMultiLinguismeAgent(string $multi_linguisme_agent) Return CommonConfigurationPlateforme objects filtered by the multi_linguisme_agent column
 * @method array findByCompteEntrepriseIfu(string $compte_entreprise_ifu) Return CommonConfigurationPlateforme objects filtered by the compte_entreprise_ifu column
 * @method array findByGestionOrganismeParAgent(string $gestion_organisme_par_agent) Return CommonConfigurationPlateforme objects filtered by the gestion_organisme_par_agent column
 * @method array findByUtiliserLucene(string $utiliser_lucene) Return CommonConfigurationPlateforme objects filtered by the utiliser_lucene column
 * @method array findByUtiliserPageHtmlLieuxExecution(string $utiliser_page_html_lieux_execution) Return CommonConfigurationPlateforme objects filtered by the utiliser_page_html_lieux_execution column
 * @method array findByPradoValidateurFormatDate(string $prado_validateur_format_date) Return CommonConfigurationPlateforme objects filtered by the prado_validateur_format_date column
 * @method array findByPradoValidateurFormatEmail(string $prado_validateur_format_email) Return CommonConfigurationPlateforme objects filtered by the prado_validateur_format_email column
 * @method array findBySocleExternePpp(string $socle_externe_ppp) Return CommonConfigurationPlateforme objects filtered by the socle_externe_ppp column
 * @method array findByValidationFormatChampsStricte(string $validation_format_champs_stricte) Return CommonConfigurationPlateforme objects filtered by the validation_format_champs_stricte column
 * @method array findByPoserQuestionNecessiteAuthentification(string $poser_question_necessite_authentification) Return CommonConfigurationPlateforme objects filtered by the poser_question_necessite_authentification column
 * @method array findByAutoriserModifProfilInscritAtes(string $autoriser_modif_profil_inscrit_ates) Return CommonConfigurationPlateforme objects filtered by the autoriser_modif_profil_inscrit_ates column
 * @method array findByUniciteReferenceConsultation(string $unicite_reference_consultation) Return CommonConfigurationPlateforme objects filtered by the unicite_reference_consultation column
 * @method array findByRegistrePapierRcnumRcvilleObligatoires(string $registre_papier_rcnum_rcville_obligatoires) Return CommonConfigurationPlateforme objects filtered by the registre_papier_rcnum_rcville_obligatoires column
 * @method array findByRegistrePapierAdresseCpVilleObligatoires(string $registre_papier_adresse_cp_ville_obligatoires) Return CommonConfigurationPlateforme objects filtered by the registre_papier_adresse_cp_ville_obligatoires column
 * @method array findByTelechargerDceSansIdentification(string $telecharger_dce_sans_identification) Return CommonConfigurationPlateforme objects filtered by the telecharger_dce_sans_identification column
 * @method array findByGestionEntrepriseParAgent(string $gestion_entreprise_par_agent) Return CommonConfigurationPlateforme objects filtered by the gestion_entreprise_par_agent column
 * @method array findByAutoriserCaracteresSpeciauxDansReference(string $autoriser_caracteres_speciaux_dans_reference) Return CommonConfigurationPlateforme objects filtered by the autoriser_caracteres_speciaux_dans_reference column
 * @method array findByInscriptionLibreEntreprise(string $inscription_libre_entreprise) Return CommonConfigurationPlateforme objects filtered by the inscription_libre_entreprise column
 * @method array findByAfficherCodeService(string $afficher_code_service) Return CommonConfigurationPlateforme objects filtered by the afficher_code_service column
 * @method array findByAuthenticateAgentByLogin(string $authenticate_agent_by_login) Return CommonConfigurationPlateforme objects filtered by the authenticate_agent_by_login column
 * @method array findByAuthenticateAgentByCert(string $authenticate_agent_by_cert) Return CommonConfigurationPlateforme objects filtered by the authenticate_agent_by_cert column
 * @method array findByGenererActeDengagement(string $generer_acte_dengagement) Return CommonConfigurationPlateforme objects filtered by the generer_acte_dengagement column
 * @method array findByEntrepriseControleFormatMotDePasse(string $entreprise_controle_format_mot_de_passe) Return CommonConfigurationPlateforme objects filtered by the entreprise_controle_format_mot_de_passe column
 * @method array findByAutreAnnonceInformation(string $autre_annonce_information) Return CommonConfigurationPlateforme objects filtered by the autre_annonce_information column
 * @method array findByCreerAutreAnnonce(string $creer_autre_annonce) Return CommonConfigurationPlateforme objects filtered by the creer_autre_annonce column
 * @method array findByConsultationClause(string $consultation_clause) Return CommonConfigurationPlateforme objects filtered by the consultation_clause column
 * @method array findByPanierEntreprise(string $panier_entreprise) Return CommonConfigurationPlateforme objects filtered by the panier_entreprise column
 * @method array findByParametragePubliciteParTypeProcedure(string $parametrage_publicite_par_type_procedure) Return CommonConfigurationPlateforme objects filtered by the parametrage_publicite_par_type_procedure column
 * @method array findByExportDecision(string $export_decision) Return CommonConfigurationPlateforme objects filtered by the export_decision column
 * @method array findByLieuOuverturePlisObligatoire(string $lieu_ouverture_plis_obligatoire) Return CommonConfigurationPlateforme objects filtered by the lieu_ouverture_plis_obligatoire column
 * @method array findByRegleMiseEnLigneParEntiteCoordinatrice(string $regle_mise_en_ligne_par_entite_coordinatrice) Return CommonConfigurationPlateforme objects filtered by the regle_mise_en_ligne_par_entite_coordinatrice column
 * @method array findByGestionNewsletter(string $gestion_newsletter) Return CommonConfigurationPlateforme objects filtered by the gestion_newsletter column
 * @method array findByPubliciteOpoce(string $publicite_opoce) Return CommonConfigurationPlateforme objects filtered by the publicite_opoce column
 * @method array findByGestionModelesFormulaire(string $gestion_modeles_formulaire) Return CommonConfigurationPlateforme objects filtered by the gestion_modeles_formulaire column
 * @method array findByGestionAdressesFacturationJal(string $gestion_adresses_facturation_JAL) Return CommonConfigurationPlateforme objects filtered by the gestion_adresses_facturation_JAL column
 * @method array findByPubliciteMarchesEnLigne(string $publicite_marches_en_ligne) Return CommonConfigurationPlateforme objects filtered by the publicite_marches_en_ligne column
 * @method array findByDossierAdditif(string $dossier_additif) Return CommonConfigurationPlateforme objects filtered by the dossier_additif column
 * @method array findByTypeMarche(string $type_marche) Return CommonConfigurationPlateforme objects filtered by the type_marche column
 * @method array findByTypePrestation(string $type_prestation) Return CommonConfigurationPlateforme objects filtered by the type_prestation column
 * @method array findByAfficherTjrBlocCaracteristiqueReponse(string $afficher_tjr_bloc_caracteristique_reponse) Return CommonConfigurationPlateforme objects filtered by the afficher_tjr_bloc_caracteristique_reponse column
 * @method array findByAlerteMetier(string $alerte_metier) Return CommonConfigurationPlateforme objects filtered by the alerte_metier column
 * @method array findByBourseALaSousTraitance(string $bourse_a_la_sous_traitance) Return CommonConfigurationPlateforme objects filtered by the bourse_a_la_sous_traitance column
 * @method array findByPublierGuides(string $publier_guides) Return CommonConfigurationPlateforme objects filtered by the publier_guides column
 * @method array findByRechercheAutoCompletion(string $recherche_auto_completion) Return CommonConfigurationPlateforme objects filtered by the recherche_auto_completion column
 * @method array findByStatutCompteEntreprise(string $statut_compte_entreprise) Return CommonConfigurationPlateforme objects filtered by the statut_compte_entreprise column
 * @method array findByGestionOrganismes(string $gestion_organismes) Return CommonConfigurationPlateforme objects filtered by the gestion_organismes column
 * @method array findByAccueilEntreprisePersonnalise(string $accueil_entreprise_personnalise) Return CommonConfigurationPlateforme objects filtered by the accueil_entreprise_personnalise column
 * @method array findByInterfaceModuleSub(string $interface_module_sub) Return CommonConfigurationPlateforme objects filtered by the interface_module_sub column
 * @method array findByAuthentificationAgentMultiOrganismes(string $authentification_agent_multi_organismes) Return CommonConfigurationPlateforme objects filtered by the authentification_agent_multi_organismes column
 * @method array findByPartagerConsultation(string $partager_consultation) Return CommonConfigurationPlateforme objects filtered by the partager_consultation column
 * @method array findByAnnuaireAcheteursPublics(string $annuaire_acheteurs_publics) Return CommonConfigurationPlateforme objects filtered by the annuaire_acheteurs_publics column
 * @method array findByEntrepriseActionsGroupees(string $entreprise_actions_groupees) Return CommonConfigurationPlateforme objects filtered by the entreprise_actions_groupees column
 * @method array findByLieuxExecutionCarte(string $lieux_execution_carte) Return CommonConfigurationPlateforme objects filtered by the lieux_execution_carte column
 * @method array findBySurchargeReferentiels(string $surcharge_referentiels) Return CommonConfigurationPlateforme objects filtered by the surcharge_referentiels column
 * @method array findByModeRestrictionRgs(string $Mode_Restriction_RGS) Return CommonConfigurationPlateforme objects filtered by the Mode_Restriction_RGS column
 * @method array findByAutreAnnonceDecisionResiliation(string $autre_annonce_decision_resiliation) Return CommonConfigurationPlateforme objects filtered by the autre_annonce_decision_resiliation column
 * @method array findByAutreAnnonceSyntheseRapportAudit(string $autre_annonce_synthese_rapport_audit) Return CommonConfigurationPlateforme objects filtered by the autre_annonce_synthese_rapport_audit column
 * @method array findByFicheWeka(string $fiche_weka) Return CommonConfigurationPlateforme objects filtered by the fiche_weka column
 * @method array findByGenerationAutomatiqueMdpAgent(string $generation_automatique_mdp_agent) Return CommonConfigurationPlateforme objects filtered by the generation_automatique_mdp_agent column
 * @method array findByGenerationAutomatiqueMdpInscrit(string $generation_automatique_mdp_inscrit) Return CommonConfigurationPlateforme objects filtered by the generation_automatique_mdp_inscrit column
 * @method array findByListeAcRgs(string $liste_ac_rgs) Return CommonConfigurationPlateforme objects filtered by the liste_ac_rgs column
 * @method array findByListeConsOrg(string $liste_cons_org) Return CommonConfigurationPlateforme objects filtered by the liste_cons_org column
 * @method array findByMarchePublicSimplifieEntreprise(string $marche_public_simplifie_entreprise) Return CommonConfigurationPlateforme objects filtered by the marche_public_simplifie_entreprise column
 * @method array findByDemandeValidationControleur(string $demande_validation_controleur) Return CommonConfigurationPlateforme objects filtered by the demande_validation_controleur column
 * @method array findByAccesExecContrats(string $acces_exec_contrats) Return CommonConfigurationPlateforme objects filtered by the acces_exec_contrats column
 * @method array findByFormeJuridiqueGroupementAttributaire(string $forme_juridique_groupement_attributaire) Return CommonConfigurationPlateforme objects filtered by the forme_juridique_groupement_attributaire column
 * @method array findByDateLimiteRemisePlisObligatoire(string $date_limite_remise_plis_obligatoire) Return CommonConfigurationPlateforme objects filtered by the date_limite_remise_plis_obligatoire column
 * @method array findByModifTypeProcedure(string $modif_type_procedure) Return CommonConfigurationPlateforme objects filtered by the modif_type_procedure column
 * @method array findByDonneesComplementairesProcedure(string $donnees_complementaires_procedure) Return CommonConfigurationPlateforme objects filtered by the donnees_complementaires_procedure column
 * @method array findByFormeMarcheFormePrix(string $forme_marche_forme_prix) Return CommonConfigurationPlateforme objects filtered by the forme_marche_forme_prix column
 * @method array findByControleUniciteNumMarche(string $controle_unicite_num_marche) Return CommonConfigurationPlateforme objects filtered by the controle_unicite_num_marche column
 * @method array findByAffichageNumMarche(string $affichage_num_marche) Return CommonConfigurationPlateforme objects filtered by the affichage_num_marche column
 * @method array findByAffichageDateFinMarche(string $affichage_date_fin_marche) Return CommonConfigurationPlateforme objects filtered by the affichage_date_fin_marche column
 * @method array findByAffichageIce(string $affichage_ice) Return CommonConfigurationPlateforme objects filtered by the affichage_ice column
 * @method array findByBlocageDepotHorsDelai(string $blocage_depot_hors_delai) Return CommonConfigurationPlateforme objects filtered by the blocage_depot_hors_delai column
 * @method array findByActiverSuiviPv(string $activer_suivi_pv) Return CommonConfigurationPlateforme objects filtered by the activer_suivi_pv column
 * @method array findByCaptchaValidateur(string $captcha_validateur) Return CommonConfigurationPlateforme objects filtered by the captcha_validateur column
 * @method array findByDecisionDepuisResultatAnalyse(string $decision_depuis_resultat_analyse) Return CommonConfigurationPlateforme objects filtered by the decision_depuis_resultat_analyse column
 * @method array findByModuleFacture(string $module_facture) Return CommonConfigurationPlateforme objects filtered by the module_facture column
 * @method array findByValidationEntrepriseFacturation(string $validation_entreprise_facturation) Return CommonConfigurationPlateforme objects filtered by the validation_entreprise_facturation column
 * @method array findByBloquerDepotSiEnvNonDepose(string $bloquer_depot_si_env_non_depose) Return CommonConfigurationPlateforme objects filtered by the bloquer_depot_si_env_non_depose column
 * @method array findByBloquerDepotSignatureInvalide(string $bloquer_depot_signature_invalide) Return CommonConfigurationPlateforme objects filtered by the bloquer_depot_signature_invalide column
 * @method array findByConsultationImportLots(string $consultation_import_lots) Return CommonConfigurationPlateforme objects filtered by the consultation_import_lots column
 * @method array findByDepotSelectionLots(string $depot_selection_lots) Return CommonConfigurationPlateforme objects filtered by the depot_selection_lots column
 * @method array findByModificationLotsApresMiseEnLigne(string $modification_lots_apres_mise_en_ligne) Return CommonConfigurationPlateforme objects filtered by the modification_lots_apres_mise_en_ligne column
 * @method array findByFiltreBdfEntrepriseValide(string $filtre_bdf_entreprise_valide) Return CommonConfigurationPlateforme objects filtered by the filtre_bdf_entreprise_valide column
 * @method array findByAffichageIdentifiantFiscale(string $affichage_identifiant_fiscale) Return CommonConfigurationPlateforme objects filtered by the affichage_identifiant_fiscale column
 * @method array findByDecisionCreerContrat(string $decision_creer_contrat) Return CommonConfigurationPlateforme objects filtered by the decision_creer_contrat column
 * @method array findByGenerationBiCle(string $generation_bi_cle) Return CommonConfigurationPlateforme objects filtered by the generation_bi_cle column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonConfigurationPlateformeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonConfigurationPlateformeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonConfigurationPlateforme', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonConfigurationPlateformeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonConfigurationPlateformeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonConfigurationPlateformeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonConfigurationPlateformeQuery) {
            return $criteria;
        }
        $query = new CommonConfigurationPlateformeQuery();
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
     * @return   CommonConfigurationPlateforme|CommonConfigurationPlateforme[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonConfigurationPlateformePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonConfigurationPlateformePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonConfigurationPlateforme A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdAuto($key, $con = null)
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
     * @return                 CommonConfigurationPlateforme A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_auto`, `code_cpv`, `multi_linguisme_entreprise`, `gestion_fournisseurs_docs_mes_sous_services`, `authenticate_inscrit_by_cert`, `authenticate_inscrit_by_login`, `base_qualifiee_entreprise_insee`, `gestion_boamp_mes_sous_services`, `gestion_bi_cle_mes_sous_services`, `nom_entreprise_toujours_visible`, `gestion_jal_mes_sous_services`, `choix_langue_affichage_consultation`, `compte_entreprise_donnees_complementaires`, `annuaire_entites_achat_visible_par_entreprise`, `affichage_recherche_avancee_agent_ac_sad_transversaux`, `encheres_entreprise`, `socle_interne`, `module_certificat`, `socle_externe_agent`, `afficher_image_organisme`, `socle_externe_entreprise`, `portail_defense_entreprise`, `compte_entreprise_province`, `compte_entreprise_telephone3`, `compte_entreprise_tax_prof`, `compte_entreprise_rcville`, `compte_entreprise_declaration_honneur`, `compte_entreprise_qualification`, `compte_entreprise_moyens_techniques`, `compte_entreprise_prestations_realisees`, `compte_entreprise_chiffre_affaire_production_biens_services`, `enveloppe_offre_technique`, `compte_inscrit_choix_profil`, `procedure_adaptee`, `compte_entreprise_siren`, `compte_entreprise_activation_inscription_par_agent`, `menu_entreprise_consultations_en_cours`, `compte_entreprise_capital_social`, `mail_activation_compte_inscrit_entreprise`, `decision_date_notification`, `decision_pmi_pme`, `decision_nature_prestations`, `decision_objet_marche`, `decision_note`, `decision_fiche_recensement`, `registre_papier_mail_obligatoire`, `menu_entreprise_indicateurs_cles`, `ajout_rpa_champ_email`, `ajout_rpa_champ_telephone`, `ajout_rpa_champ_fax`, `entreprise_poser_question_sans_pj`, `url_demarche_agent`, `url_demarche_entreprise`, `siret_detail_entite_achat`, `presence_elu`, `gerer_mon_service`, `depouillement_enveloppe_depend_RAT_enveloppe_precedente`, `consultation_adresse_retrais_dossiers`, `consultation_adresse_depot_offres`, `consultation_caution_provisoire`, `consultation_lieu_ouverture_plis`, `consultation_qualification`, `consultation_agrement`, `consultation_echantillons_demandes`, `consultation_reunion`, `consultation_visite_des_lieux`, `consultation_prix_acquisition`, `resultat_analyse_avant_decision`, `creation_inscrit_par_ates`, `consultation_variantes_autorisees`, `recherche_avancee_par_type_org`, `menu_agent_societes_exclues`, `recherche_avancee_par_domaines_activite`, `recherche_avancee_par_qualification`, `recherche_avancee_par_agrement`, `contact_administratif_dans_detail_consultation_cote_entreprise`, `consultation_pieces_dossiers`, `gerer_adresses_service`, `traduire_annonces`, `afficher_bloc_actions_dans_details_annonces`, `autoriser_une_seule_reponse_principale_par_entreprise`, `generation_avis`, `passation_appliquer_donnees_ensemble_lots`, `autre_annonce_extrait_pv`, `autre_annonce_rapport_achevement`, `ajout_fichier_joint_autre_annonce`, `consultation_mode_passation`, `compte_entreprise_identifiant_unique`, `gerer_certificats_agent`, `autre_annonce_programme_previsionnel`, `annuler_consultation`, `cfe_entreprise_accessible_par_agent`, `compte_entreprise_code_nace_referentiel`, `code_nut_lt_referentiel`, `lieux_execution`, `compte_entreprise_domaine_activite_lt_referentiel`, `consultation_domaines_activites_lt_referentiel`, `compte_entreprise_agrement_lt_referentiel`, `compte_entreprise_qualification_lt_referentiel`, `reponse_pas_a_pas`, `agent_controle_format_mot_de_passe`, `entreprise_validation_email_inscription`, `telecharger_dce_avec_authentification`, `authentification_basic`, `reglement_consultation`, `annonces_marches`, `cfe_date_fin_validite_obligatoire`, `associer_documents_cfe_consultation`, `compte_entreprise_region`, `compte_entreprise_telephone2`, `compte_entreprise_cnss`, `compte_entreprise_rcnum`, `compte_entreprise_domaine_activite`, `compte_inscrit_code_nic`, `compte_entreprise_code_ape`, `compte_entreprise_documents_commerciaux`, `compte_entreprise_agrement`, `compte_entreprise_moyens_humains`, `compte_entreprise_activite_domaine_defense`, `compte_entreprise_donnees_financieres`, `enveloppe_anonymat`, `publicite_format_xml`, `article_133_generation_pf`, `entreprise_repondre_consultation_apres_cloture`, `telechargement_outil_verif_horodatage`, `affichage_code_cpv`, `consultation_domaines_activites`, `statistiques_mesure_demat`, `publication_procure`, `menu_entreprise_toutes_les_consultations`, `compte_entreprise_cp_obligatoire`, `annuler_depot`, `traduire_entite_achat_arabe`, `traduire_organisme_arabe`, `decision_cp`, `decision_tranche_budgetaire`, `decision_classement`, `decision_afficher_detail_candidat_par_defaut`, `article_133_upload_fichier`, `multi_linguisme_agent`, `compte_entreprise_ifu`, `gestion_organisme_par_agent`, `utiliser_lucene`, `utiliser_page_html_lieux_execution`, `prado_validateur_format_date`, `prado_validateur_format_email`, `socle_externe_ppp`, `validation_format_champs_stricte`, `poser_question_necessite_authentification`, `autoriser_modif_profil_inscrit_ates`, `unicite_reference_consultation`, `registre_papier_rcnum_rcville_obligatoires`, `registre_papier_adresse_cp_ville_obligatoires`, `telecharger_dce_sans_identification`, `gestion_entreprise_par_agent`, `autoriser_caracteres_speciaux_dans_reference`, `inscription_libre_entreprise`, `afficher_code_service`, `authenticate_agent_by_login`, `authenticate_agent_by_cert`, `generer_acte_dengagement`, `entreprise_controle_format_mot_de_passe`, `autre_annonce_information`, `creer_autre_annonce`, `consultation_clause`, `panier_entreprise`, `parametrage_publicite_par_type_procedure`, `export_decision`, `lieu_ouverture_plis_obligatoire`, `regle_mise_en_ligne_par_entite_coordinatrice`, `gestion_newsletter`, `publicite_opoce`, `gestion_modeles_formulaire`, `gestion_adresses_facturation_JAL`, `publicite_marches_en_ligne`, `dossier_additif`, `type_marche`, `type_prestation`, `afficher_tjr_bloc_caracteristique_reponse`, `alerte_metier`, `bourse_a_la_sous_traitance`, `publier_guides`, `recherche_auto_completion`, `statut_compte_entreprise`, `gestion_organismes`, `accueil_entreprise_personnalise`, `interface_module_sub`, `authentification_agent_multi_organismes`, `partager_consultation`, `annuaire_acheteurs_publics`, `entreprise_actions_groupees`, `lieux_execution_carte`, `surcharge_referentiels`, `Mode_Restriction_RGS`, `autre_annonce_decision_resiliation`, `autre_annonce_synthese_rapport_audit`, `fiche_weka`, `generation_automatique_mdp_agent`, `generation_automatique_mdp_inscrit`, `liste_ac_rgs`, `liste_cons_org`, `marche_public_simplifie_entreprise`, `demande_validation_controleur`, `acces_exec_contrats`, `forme_juridique_groupement_attributaire`, `date_limite_remise_plis_obligatoire`, `modif_type_procedure`, `donnees_complementaires_procedure`, `forme_marche_forme_prix`, `controle_unicite_num_marche`, `affichage_num_marche`, `affichage_date_fin_marche`, `affichage_ice`, `blocage_depot_hors_delai`, `activer_suivi_pv`, `captcha_validateur`, `decision_depuis_resultat_analyse`, `module_facture`, `validation_entreprise_facturation`, `bloquer_depot_si_env_non_depose`, `bloquer_depot_signature_invalide`, `consultation_import_lots`, `depot_selection_lots`, `modification_lots_apres_mise_en_ligne`, `filtre_bdf_entreprise_valide`, `affichage_identifiant_fiscale`, `decision_creer_contrat`, `generation_bi_cle` FROM `configuration_plateforme` WHERE `id_auto` = :p0';
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
            $obj = new CommonConfigurationPlateforme();
            $obj->hydrate($row);
            CommonConfigurationPlateformePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonConfigurationPlateforme|CommonConfigurationPlateforme[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonConfigurationPlateforme[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::ID_AUTO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::ID_AUTO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_auto column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAuto(1234); // WHERE id_auto = 1234
     * $query->filterByIdAuto(array(12, 34)); // WHERE id_auto IN (12, 34)
     * $query->filterByIdAuto(array('min' => 12)); // WHERE id_auto >= 12
     * $query->filterByIdAuto(array('max' => 12)); // WHERE id_auto <= 12
     * </code>
     *
     * @param     mixed $idAuto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByIdAuto($idAuto = null, $comparison = null)
    {
        if (is_array($idAuto)) {
            $useMinMax = false;
            if (isset($idAuto['min'])) {
                $this->addUsingAlias(CommonConfigurationPlateformePeer::ID_AUTO, $idAuto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAuto['max'])) {
                $this->addUsingAlias(CommonConfigurationPlateformePeer::ID_AUTO, $idAuto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::ID_AUTO, $idAuto, $comparison);
    }

    /**
     * Filter the query on the code_cpv column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeCpv('fooValue');   // WHERE code_cpv = 'fooValue'
     * $query->filterByCodeCpv('%fooValue%'); // WHERE code_cpv LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codeCpv The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByCodeCpv($codeCpv = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeCpv)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codeCpv)) {
                $codeCpv = str_replace('*', '%', $codeCpv);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::CODE_CPV, $codeCpv, $comparison);
    }

    /**
     * Filter the query on the multi_linguisme_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByMultiLinguismeEntreprise('fooValue');   // WHERE multi_linguisme_entreprise = 'fooValue'
     * $query->filterByMultiLinguismeEntreprise('%fooValue%'); // WHERE multi_linguisme_entreprise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $multiLinguismeEntreprise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByMultiLinguismeEntreprise($multiLinguismeEntreprise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($multiLinguismeEntreprise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $multiLinguismeEntreprise)) {
                $multiLinguismeEntreprise = str_replace('*', '%', $multiLinguismeEntreprise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::MULTI_LINGUISME_ENTREPRISE, $multiLinguismeEntreprise, $comparison);
    }

    /**
     * Filter the query on the gestion_fournisseurs_docs_mes_sous_services column
     *
     * Example usage:
     * <code>
     * $query->filterByGestionFournisseursDocsMesSousServices('fooValue');   // WHERE gestion_fournisseurs_docs_mes_sous_services = 'fooValue'
     * $query->filterByGestionFournisseursDocsMesSousServices('%fooValue%'); // WHERE gestion_fournisseurs_docs_mes_sous_services LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gestionFournisseursDocsMesSousServices The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByGestionFournisseursDocsMesSousServices($gestionFournisseursDocsMesSousServices = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gestionFournisseursDocsMesSousServices)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gestionFournisseursDocsMesSousServices)) {
                $gestionFournisseursDocsMesSousServices = str_replace('*', '%', $gestionFournisseursDocsMesSousServices);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::GESTION_FOURNISSEURS_DOCS_MES_SOUS_SERVICES, $gestionFournisseursDocsMesSousServices, $comparison);
    }

    /**
     * Filter the query on the authenticate_inscrit_by_cert column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthenticateInscritByCert('fooValue');   // WHERE authenticate_inscrit_by_cert = 'fooValue'
     * $query->filterByAuthenticateInscritByCert('%fooValue%'); // WHERE authenticate_inscrit_by_cert LIKE '%fooValue%'
     * </code>
     *
     * @param     string $authenticateInscritByCert The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByAuthenticateInscritByCert($authenticateInscritByCert = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($authenticateInscritByCert)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $authenticateInscritByCert)) {
                $authenticateInscritByCert = str_replace('*', '%', $authenticateInscritByCert);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::AUTHENTICATE_INSCRIT_BY_CERT, $authenticateInscritByCert, $comparison);
    }

    /**
     * Filter the query on the authenticate_inscrit_by_login column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthenticateInscritByLogin('fooValue');   // WHERE authenticate_inscrit_by_login = 'fooValue'
     * $query->filterByAuthenticateInscritByLogin('%fooValue%'); // WHERE authenticate_inscrit_by_login LIKE '%fooValue%'
     * </code>
     *
     * @param     string $authenticateInscritByLogin The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByAuthenticateInscritByLogin($authenticateInscritByLogin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($authenticateInscritByLogin)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $authenticateInscritByLogin)) {
                $authenticateInscritByLogin = str_replace('*', '%', $authenticateInscritByLogin);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::AUTHENTICATE_INSCRIT_BY_LOGIN, $authenticateInscritByLogin, $comparison);
    }

    /**
     * Filter the query on the base_qualifiee_entreprise_insee column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseQualifieeEntrepriseInsee('fooValue');   // WHERE base_qualifiee_entreprise_insee = 'fooValue'
     * $query->filterByBaseQualifieeEntrepriseInsee('%fooValue%'); // WHERE base_qualifiee_entreprise_insee LIKE '%fooValue%'
     * </code>
     *
     * @param     string $baseQualifieeEntrepriseInsee The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByBaseQualifieeEntrepriseInsee($baseQualifieeEntrepriseInsee = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($baseQualifieeEntrepriseInsee)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $baseQualifieeEntrepriseInsee)) {
                $baseQualifieeEntrepriseInsee = str_replace('*', '%', $baseQualifieeEntrepriseInsee);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::BASE_QUALIFIEE_ENTREPRISE_INSEE, $baseQualifieeEntrepriseInsee, $comparison);
    }

    /**
     * Filter the query on the gestion_boamp_mes_sous_services column
     *
     * Example usage:
     * <code>
     * $query->filterByGestionBoampMesSousServices('fooValue');   // WHERE gestion_boamp_mes_sous_services = 'fooValue'
     * $query->filterByGestionBoampMesSousServices('%fooValue%'); // WHERE gestion_boamp_mes_sous_services LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gestionBoampMesSousServices The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByGestionBoampMesSousServices($gestionBoampMesSousServices = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gestionBoampMesSousServices)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gestionBoampMesSousServices)) {
                $gestionBoampMesSousServices = str_replace('*', '%', $gestionBoampMesSousServices);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::GESTION_BOAMP_MES_SOUS_SERVICES, $gestionBoampMesSousServices, $comparison);
    }

    /**
     * Filter the query on the gestion_bi_cle_mes_sous_services column
     *
     * Example usage:
     * <code>
     * $query->filterByGestionBiCleMesSousServices('fooValue');   // WHERE gestion_bi_cle_mes_sous_services = 'fooValue'
     * $query->filterByGestionBiCleMesSousServices('%fooValue%'); // WHERE gestion_bi_cle_mes_sous_services LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gestionBiCleMesSousServices The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByGestionBiCleMesSousServices($gestionBiCleMesSousServices = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gestionBiCleMesSousServices)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gestionBiCleMesSousServices)) {
                $gestionBiCleMesSousServices = str_replace('*', '%', $gestionBiCleMesSousServices);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::GESTION_BI_CLE_MES_SOUS_SERVICES, $gestionBiCleMesSousServices, $comparison);
    }

    /**
     * Filter the query on the nom_entreprise_toujours_visible column
     *
     * Example usage:
     * <code>
     * $query->filterByNomEntrepriseToujoursVisible('fooValue');   // WHERE nom_entreprise_toujours_visible = 'fooValue'
     * $query->filterByNomEntrepriseToujoursVisible('%fooValue%'); // WHERE nom_entreprise_toujours_visible LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomEntrepriseToujoursVisible The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByNomEntrepriseToujoursVisible($nomEntrepriseToujoursVisible = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomEntrepriseToujoursVisible)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomEntrepriseToujoursVisible)) {
                $nomEntrepriseToujoursVisible = str_replace('*', '%', $nomEntrepriseToujoursVisible);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::NOM_ENTREPRISE_TOUJOURS_VISIBLE, $nomEntrepriseToujoursVisible, $comparison);
    }

    /**
     * Filter the query on the gestion_jal_mes_sous_services column
     *
     * Example usage:
     * <code>
     * $query->filterByGestionJalMesSousServices('fooValue');   // WHERE gestion_jal_mes_sous_services = 'fooValue'
     * $query->filterByGestionJalMesSousServices('%fooValue%'); // WHERE gestion_jal_mes_sous_services LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gestionJalMesSousServices The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByGestionJalMesSousServices($gestionJalMesSousServices = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gestionJalMesSousServices)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gestionJalMesSousServices)) {
                $gestionJalMesSousServices = str_replace('*', '%', $gestionJalMesSousServices);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::GESTION_JAL_MES_SOUS_SERVICES, $gestionJalMesSousServices, $comparison);
    }

    /**
     * Filter the query on the choix_langue_affichage_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByChoixLangueAffichageConsultation('fooValue');   // WHERE choix_langue_affichage_consultation = 'fooValue'
     * $query->filterByChoixLangueAffichageConsultation('%fooValue%'); // WHERE choix_langue_affichage_consultation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $choixLangueAffichageConsultation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByChoixLangueAffichageConsultation($choixLangueAffichageConsultation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($choixLangueAffichageConsultation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $choixLangueAffichageConsultation)) {
                $choixLangueAffichageConsultation = str_replace('*', '%', $choixLangueAffichageConsultation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::CHOIX_LANGUE_AFFICHAGE_CONSULTATION, $choixLangueAffichageConsultation, $comparison);
    }

    /**
     * Filter the query on the compte_entreprise_donnees_complementaires column
     *
     * Example usage:
     * <code>
     * $query->filterByCompteEntrepriseDonneesComplementaires('fooValue');   // WHERE compte_entreprise_donnees_complementaires = 'fooValue'
     * $query->filterByCompteEntrepriseDonneesComplementaires('%fooValue%'); // WHERE compte_entreprise_donnees_complementaires LIKE '%fooValue%'
     * </code>
     *
     * @param     string $compteEntrepriseDonneesComplementaires The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByCompteEntrepriseDonneesComplementaires($compteEntrepriseDonneesComplementaires = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($compteEntrepriseDonneesComplementaires)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $compteEntrepriseDonneesComplementaires)) {
                $compteEntrepriseDonneesComplementaires = str_replace('*', '%', $compteEntrepriseDonneesComplementaires);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DONNEES_COMPLEMENTAIRES, $compteEntrepriseDonneesComplementaires, $comparison);
    }

    /**
     * Filter the query on the annuaire_entites_achat_visible_par_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByAnnuaireEntitesAchatVisibleParEntreprise('fooValue');   // WHERE annuaire_entites_achat_visible_par_entreprise = 'fooValue'
     * $query->filterByAnnuaireEntitesAchatVisibleParEntreprise('%fooValue%'); // WHERE annuaire_entites_achat_visible_par_entreprise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $annuaireEntitesAchatVisibleParEntreprise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByAnnuaireEntitesAchatVisibleParEntreprise($annuaireEntitesAchatVisibleParEntreprise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($annuaireEntitesAchatVisibleParEntreprise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $annuaireEntitesAchatVisibleParEntreprise)) {
                $annuaireEntitesAchatVisibleParEntreprise = str_replace('*', '%', $annuaireEntitesAchatVisibleParEntreprise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::ANNUAIRE_ENTITES_ACHAT_VISIBLE_PAR_ENTREPRISE, $annuaireEntitesAchatVisibleParEntreprise, $comparison);
    }

    /**
     * Filter the query on the affichage_recherche_avancee_agent_ac_sad_transversaux column
     *
     * Example usage:
     * <code>
     * $query->filterByAffichageRechercheAvanceeAgentAcSadTransversaux('fooValue');   // WHERE affichage_recherche_avancee_agent_ac_sad_transversaux = 'fooValue'
     * $query->filterByAffichageRechercheAvanceeAgentAcSadTransversaux('%fooValue%'); // WHERE affichage_recherche_avancee_agent_ac_sad_transversaux LIKE '%fooValue%'
     * </code>
     *
     * @param     string $affichageRechercheAvanceeAgentAcSadTransversaux The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByAffichageRechercheAvanceeAgentAcSadTransversaux($affichageRechercheAvanceeAgentAcSadTransversaux = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($affichageRechercheAvanceeAgentAcSadTransversaux)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $affichageRechercheAvanceeAgentAcSadTransversaux)) {
                $affichageRechercheAvanceeAgentAcSadTransversaux = str_replace('*', '%', $affichageRechercheAvanceeAgentAcSadTransversaux);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::AFFICHAGE_RECHERCHE_AVANCEE_AGENT_AC_SAD_TRANSVERSAUX, $affichageRechercheAvanceeAgentAcSadTransversaux, $comparison);
    }

    /**
     * Filter the query on the encheres_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByEncheresEntreprise('fooValue');   // WHERE encheres_entreprise = 'fooValue'
     * $query->filterByEncheresEntreprise('%fooValue%'); // WHERE encheres_entreprise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $encheresEntreprise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByEncheresEntreprise($encheresEntreprise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($encheresEntreprise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $encheresEntreprise)) {
                $encheresEntreprise = str_replace('*', '%', $encheresEntreprise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::ENCHERES_ENTREPRISE, $encheresEntreprise, $comparison);
    }

    /**
     * Filter the query on the socle_interne column
     *
     * Example usage:
     * <code>
     * $query->filterBySocleInterne('fooValue');   // WHERE socle_interne = 'fooValue'
     * $query->filterBySocleInterne('%fooValue%'); // WHERE socle_interne LIKE '%fooValue%'
     * </code>
     *
     * @param     string $socleInterne The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterBySocleInterne($socleInterne = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($socleInterne)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $socleInterne)) {
                $socleInterne = str_replace('*', '%', $socleInterne);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::SOCLE_INTERNE, $socleInterne, $comparison);
    }

    /**
     * Filter the query on the module_certificat column
     *
     * Example usage:
     * <code>
     * $query->filterByModuleCertificat('fooValue');   // WHERE module_certificat = 'fooValue'
     * $query->filterByModuleCertificat('%fooValue%'); // WHERE module_certificat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $moduleCertificat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByModuleCertificat($moduleCertificat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($moduleCertificat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $moduleCertificat)) {
                $moduleCertificat = str_replace('*', '%', $moduleCertificat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::MODULE_CERTIFICAT, $moduleCertificat, $comparison);
    }

    /**
     * Filter the query on the socle_externe_agent column
     *
     * Example usage:
     * <code>
     * $query->filterBySocleExterneAgent('fooValue');   // WHERE socle_externe_agent = 'fooValue'
     * $query->filterBySocleExterneAgent('%fooValue%'); // WHERE socle_externe_agent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $socleExterneAgent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterBySocleExterneAgent($socleExterneAgent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($socleExterneAgent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $socleExterneAgent)) {
                $socleExterneAgent = str_replace('*', '%', $socleExterneAgent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::SOCLE_EXTERNE_AGENT, $socleExterneAgent, $comparison);
    }

    /**
     * Filter the query on the afficher_image_organisme column
     *
     * Example usage:
     * <code>
     * $query->filterByAfficherImageOrganisme('fooValue');   // WHERE afficher_image_organisme = 'fooValue'
     * $query->filterByAfficherImageOrganisme('%fooValue%'); // WHERE afficher_image_organisme LIKE '%fooValue%'
     * </code>
     *
     * @param     string $afficherImageOrganisme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByAfficherImageOrganisme($afficherImageOrganisme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($afficherImageOrganisme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $afficherImageOrganisme)) {
                $afficherImageOrganisme = str_replace('*', '%', $afficherImageOrganisme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::AFFICHER_IMAGE_ORGANISME, $afficherImageOrganisme, $comparison);
    }

    /**
     * Filter the query on the socle_externe_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterBySocleExterneEntreprise('fooValue');   // WHERE socle_externe_entreprise = 'fooValue'
     * $query->filterBySocleExterneEntreprise('%fooValue%'); // WHERE socle_externe_entreprise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $socleExterneEntreprise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterBySocleExterneEntreprise($socleExterneEntreprise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($socleExterneEntreprise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $socleExterneEntreprise)) {
                $socleExterneEntreprise = str_replace('*', '%', $socleExterneEntreprise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::SOCLE_EXTERNE_ENTREPRISE, $socleExterneEntreprise, $comparison);
    }

    /**
     * Filter the query on the portail_defense_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByPortailDefenseEntreprise('fooValue');   // WHERE portail_defense_entreprise = 'fooValue'
     * $query->filterByPortailDefenseEntreprise('%fooValue%'); // WHERE portail_defense_entreprise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $portailDefenseEntreprise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByPortailDefenseEntreprise($portailDefenseEntreprise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($portailDefenseEntreprise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $portailDefenseEntreprise)) {
                $portailDefenseEntreprise = str_replace('*', '%', $portailDefenseEntreprise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::PORTAIL_DEFENSE_ENTREPRISE, $portailDefenseEntreprise, $comparison);
    }

    /**
     * Filter the query on the compte_entreprise_province column
     *
     * Example usage:
     * <code>
     * $query->filterByCompteEntrepriseProvince('fooValue');   // WHERE compte_entreprise_province = 'fooValue'
     * $query->filterByCompteEntrepriseProvince('%fooValue%'); // WHERE compte_entreprise_province LIKE '%fooValue%'
     * </code>
     *
     * @param     string $compteEntrepriseProvince The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByCompteEntrepriseProvince($compteEntrepriseProvince = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($compteEntrepriseProvince)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $compteEntrepriseProvince)) {
                $compteEntrepriseProvince = str_replace('*', '%', $compteEntrepriseProvince);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_PROVINCE, $compteEntrepriseProvince, $comparison);
    }

    /**
     * Filter the query on the compte_entreprise_telephone3 column
     *
     * Example usage:
     * <code>
     * $query->filterByCompteEntrepriseTelephone3('fooValue');   // WHERE compte_entreprise_telephone3 = 'fooValue'
     * $query->filterByCompteEntrepriseTelephone3('%fooValue%'); // WHERE compte_entreprise_telephone3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $compteEntrepriseTelephone3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByCompteEntrepriseTelephone3($compteEntrepriseTelephone3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($compteEntrepriseTelephone3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $compteEntrepriseTelephone3)) {
                $compteEntrepriseTelephone3 = str_replace('*', '%', $compteEntrepriseTelephone3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_TELEPHONE3, $compteEntrepriseTelephone3, $comparison);
    }

    /**
     * Filter the query on the compte_entreprise_tax_prof column
     *
     * Example usage:
     * <code>
     * $query->filterByCompteEntrepriseTaxProf('fooValue');   // WHERE compte_entreprise_tax_prof = 'fooValue'
     * $query->filterByCompteEntrepriseTaxProf('%fooValue%'); // WHERE compte_entreprise_tax_prof LIKE '%fooValue%'
     * </code>
     *
     * @param     string $compteEntrepriseTaxProf The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByCompteEntrepriseTaxProf($compteEntrepriseTaxProf = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($compteEntrepriseTaxProf)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $compteEntrepriseTaxProf)) {
                $compteEntrepriseTaxProf = str_replace('*', '%', $compteEntrepriseTaxProf);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_TAX_PROF, $compteEntrepriseTaxProf, $comparison);
    }

    /**
     * Filter the query on the compte_entreprise_rcville column
     *
     * Example usage:
     * <code>
     * $query->filterByCompteEntrepriseRcville('fooValue');   // WHERE compte_entreprise_rcville = 'fooValue'
     * $query->filterByCompteEntrepriseRcville('%fooValue%'); // WHERE compte_entreprise_rcville LIKE '%fooValue%'
     * </code>
     *
     * @param     string $compteEntrepriseRcville The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByCompteEntrepriseRcville($compteEntrepriseRcville = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($compteEntrepriseRcville)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $compteEntrepriseRcville)) {
                $compteEntrepriseRcville = str_replace('*', '%', $compteEntrepriseRcville);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_RCVILLE, $compteEntrepriseRcville, $comparison);
    }

    /**
     * Filter the query on the compte_entreprise_declaration_honneur column
     *
     * Example usage:
     * <code>
     * $query->filterByCompteEntrepriseDeclarationHonneur('fooValue');   // WHERE compte_entreprise_declaration_honneur = 'fooValue'
     * $query->filterByCompteEntrepriseDeclarationHonneur('%fooValue%'); // WHERE compte_entreprise_declaration_honneur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $compteEntrepriseDeclarationHonneur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByCompteEntrepriseDeclarationHonneur($compteEntrepriseDeclarationHonneur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($compteEntrepriseDeclarationHonneur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $compteEntrepriseDeclarationHonneur)) {
                $compteEntrepriseDeclarationHonneur = str_replace('*', '%', $compteEntrepriseDeclarationHonneur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DECLARATION_HONNEUR, $compteEntrepriseDeclarationHonneur, $comparison);
    }

    /**
     * Filter the query on the compte_entreprise_qualification column
     *
     * Example usage:
     * <code>
     * $query->filterByCompteEntrepriseQualification('fooValue');   // WHERE compte_entreprise_qualification = 'fooValue'
     * $query->filterByCompteEntrepriseQualification('%fooValue%'); // WHERE compte_entreprise_qualification LIKE '%fooValue%'
     * </code>
     *
     * @param     string $compteEntrepriseQualification The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByCompteEntrepriseQualification($compteEntrepriseQualification = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($compteEntrepriseQualification)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $compteEntrepriseQualification)) {
                $compteEntrepriseQualification = str_replace('*', '%', $compteEntrepriseQualification);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_QUALIFICATION, $compteEntrepriseQualification, $comparison);
    }

    /**
     * Filter the query on the compte_entreprise_moyens_techniques column
     *
     * Example usage:
     * <code>
     * $query->filterByCompteEntrepriseMoyensTechniques('fooValue');   // WHERE compte_entreprise_moyens_techniques = 'fooValue'
     * $query->filterByCompteEntrepriseMoyensTechniques('%fooValue%'); // WHERE compte_entreprise_moyens_techniques LIKE '%fooValue%'
     * </code>
     *
     * @param     string $compteEntrepriseMoyensTechniques The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByCompteEntrepriseMoyensTechniques($compteEntrepriseMoyensTechniques = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($compteEntrepriseMoyensTechniques)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $compteEntrepriseMoyensTechniques)) {
                $compteEntrepriseMoyensTechniques = str_replace('*', '%', $compteEntrepriseMoyensTechniques);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_MOYENS_TECHNIQUES, $compteEntrepriseMoyensTechniques, $comparison);
    }

    /**
     * Filter the query on the compte_entreprise_prestations_realisees column
     *
     * Example usage:
     * <code>
     * $query->filterByCompteEntreprisePrestationsRealisees('fooValue');   // WHERE compte_entreprise_prestations_realisees = 'fooValue'
     * $query->filterByCompteEntreprisePrestationsRealisees('%fooValue%'); // WHERE compte_entreprise_prestations_realisees LIKE '%fooValue%'
     * </code>
     *
     * @param     string $compteEntreprisePrestationsRealisees The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByCompteEntreprisePrestationsRealisees($compteEntreprisePrestationsRealisees = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($compteEntreprisePrestationsRealisees)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $compteEntreprisePrestationsRealisees)) {
                $compteEntreprisePrestationsRealisees = str_replace('*', '%', $compteEntreprisePrestationsRealisees);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_PRESTATIONS_REALISEES, $compteEntreprisePrestationsRealisees, $comparison);
    }

    /**
     * Filter the query on the compte_entreprise_chiffre_affaire_production_biens_services column
     *
     * Example usage:
     * <code>
     * $query->filterByCompteEntrepriseChiffreAffaireProductionBiensServices('fooValue');   // WHERE compte_entreprise_chiffre_affaire_production_biens_services = 'fooValue'
     * $query->filterByCompteEntrepriseChiffreAffaireProductionBiensServices('%fooValue%'); // WHERE compte_entreprise_chiffre_affaire_production_biens_services LIKE '%fooValue%'
     * </code>
     *
     * @param     string $compteEntrepriseChiffreAffaireProductionBiensServices The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByCompteEntrepriseChiffreAffaireProductionBiensServices($compteEntrepriseChiffreAffaireProductionBiensServices = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($compteEntrepriseChiffreAffaireProductionBiensServices)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $compteEntrepriseChiffreAffaireProductionBiensServices)) {
                $compteEntrepriseChiffreAffaireProductionBiensServices = str_replace('*', '%', $compteEntrepriseChiffreAffaireProductionBiensServices);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CHIFFRE_AFFAIRE_PRODUCTION_BIENS_SERVICES, $compteEntrepriseChiffreAffaireProductionBiensServices, $comparison);
    }

    /**
     * Filter the query on the enveloppe_offre_technique column
     *
     * Example usage:
     * <code>
     * $query->filterByEnveloppeOffreTechnique('fooValue');   // WHERE enveloppe_offre_technique = 'fooValue'
     * $query->filterByEnveloppeOffreTechnique('%fooValue%'); // WHERE enveloppe_offre_technique LIKE '%fooValue%'
     * </code>
     *
     * @param     string $enveloppeOffreTechnique The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByEnveloppeOffreTechnique($enveloppeOffreTechnique = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($enveloppeOffreTechnique)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $enveloppeOffreTechnique)) {
                $enveloppeOffreTechnique = str_replace('*', '%', $enveloppeOffreTechnique);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::ENVELOPPE_OFFRE_TECHNIQUE, $enveloppeOffreTechnique, $comparison);
    }

    /**
     * Filter the query on the compte_inscrit_choix_profil column
     *
     * Example usage:
     * <code>
     * $query->filterByCompteInscritChoixProfil('fooValue');   // WHERE compte_inscrit_choix_profil = 'fooValue'
     * $query->filterByCompteInscritChoixProfil('%fooValue%'); // WHERE compte_inscrit_choix_profil LIKE '%fooValue%'
     * </code>
     *
     * @param     string $compteInscritChoixProfil The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByCompteInscritChoixProfil($compteInscritChoixProfil = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($compteInscritChoixProfil)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $compteInscritChoixProfil)) {
                $compteInscritChoixProfil = str_replace('*', '%', $compteInscritChoixProfil);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::COMPTE_INSCRIT_CHOIX_PROFIL, $compteInscritChoixProfil, $comparison);
    }

    /**
     * Filter the query on the procedure_adaptee column
     *
     * Example usage:
     * <code>
     * $query->filterByProcedureAdaptee('fooValue');   // WHERE procedure_adaptee = 'fooValue'
     * $query->filterByProcedureAdaptee('%fooValue%'); // WHERE procedure_adaptee LIKE '%fooValue%'
     * </code>
     *
     * @param     string $procedureAdaptee The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByProcedureAdaptee($procedureAdaptee = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($procedureAdaptee)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $procedureAdaptee)) {
                $procedureAdaptee = str_replace('*', '%', $procedureAdaptee);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::PROCEDURE_ADAPTEE, $procedureAdaptee, $comparison);
    }

    /**
     * Filter the query on the compte_entreprise_siren column
     *
     * Example usage:
     * <code>
     * $query->filterByCompteEntrepriseSiren('fooValue');   // WHERE compte_entreprise_siren = 'fooValue'
     * $query->filterByCompteEntrepriseSiren('%fooValue%'); // WHERE compte_entreprise_siren LIKE '%fooValue%'
     * </code>
     *
     * @param     string $compteEntrepriseSiren The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByCompteEntrepriseSiren($compteEntrepriseSiren = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($compteEntrepriseSiren)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $compteEntrepriseSiren)) {
                $compteEntrepriseSiren = str_replace('*', '%', $compteEntrepriseSiren);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_SIREN, $compteEntrepriseSiren, $comparison);
    }

    /**
     * Filter the query on the compte_entreprise_activation_inscription_par_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByCompteEntrepriseActivationInscriptionParAgent('fooValue');   // WHERE compte_entreprise_activation_inscription_par_agent = 'fooValue'
     * $query->filterByCompteEntrepriseActivationInscriptionParAgent('%fooValue%'); // WHERE compte_entreprise_activation_inscription_par_agent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $compteEntrepriseActivationInscriptionParAgent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByCompteEntrepriseActivationInscriptionParAgent($compteEntrepriseActivationInscriptionParAgent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($compteEntrepriseActivationInscriptionParAgent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $compteEntrepriseActivationInscriptionParAgent)) {
                $compteEntrepriseActivationInscriptionParAgent = str_replace('*', '%', $compteEntrepriseActivationInscriptionParAgent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_ACTIVATION_INSCRIPTION_PAR_AGENT, $compteEntrepriseActivationInscriptionParAgent, $comparison);
    }

    /**
     * Filter the query on the menu_entreprise_consultations_en_cours column
     *
     * Example usage:
     * <code>
     * $query->filterByMenuEntrepriseConsultationsEnCours('fooValue');   // WHERE menu_entreprise_consultations_en_cours = 'fooValue'
     * $query->filterByMenuEntrepriseConsultationsEnCours('%fooValue%'); // WHERE menu_entreprise_consultations_en_cours LIKE '%fooValue%'
     * </code>
     *
     * @param     string $menuEntrepriseConsultationsEnCours The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByMenuEntrepriseConsultationsEnCours($menuEntrepriseConsultationsEnCours = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($menuEntrepriseConsultationsEnCours)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $menuEntrepriseConsultationsEnCours)) {
                $menuEntrepriseConsultationsEnCours = str_replace('*', '%', $menuEntrepriseConsultationsEnCours);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::MENU_ENTREPRISE_CONSULTATIONS_EN_COURS, $menuEntrepriseConsultationsEnCours, $comparison);
    }

    /**
     * Filter the query on the compte_entreprise_capital_social column
     *
     * Example usage:
     * <code>
     * $query->filterByCompteEntrepriseCapitalSocial('fooValue');   // WHERE compte_entreprise_capital_social = 'fooValue'
     * $query->filterByCompteEntrepriseCapitalSocial('%fooValue%'); // WHERE compte_entreprise_capital_social LIKE '%fooValue%'
     * </code>
     *
     * @param     string $compteEntrepriseCapitalSocial The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByCompteEntrepriseCapitalSocial($compteEntrepriseCapitalSocial = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($compteEntrepriseCapitalSocial)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $compteEntrepriseCapitalSocial)) {
                $compteEntrepriseCapitalSocial = str_replace('*', '%', $compteEntrepriseCapitalSocial);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CAPITAL_SOCIAL, $compteEntrepriseCapitalSocial, $comparison);
    }

    /**
     * Filter the query on the mail_activation_compte_inscrit_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByMailActivationCompteInscritEntreprise('fooValue');   // WHERE mail_activation_compte_inscrit_entreprise = 'fooValue'
     * $query->filterByMailActivationCompteInscritEntreprise('%fooValue%'); // WHERE mail_activation_compte_inscrit_entreprise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mailActivationCompteInscritEntreprise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByMailActivationCompteInscritEntreprise($mailActivationCompteInscritEntreprise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mailActivationCompteInscritEntreprise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mailActivationCompteInscritEntreprise)) {
                $mailActivationCompteInscritEntreprise = str_replace('*', '%', $mailActivationCompteInscritEntreprise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::MAIL_ACTIVATION_COMPTE_INSCRIT_ENTREPRISE, $mailActivationCompteInscritEntreprise, $comparison);
    }

    /**
     * Filter the query on the decision_date_notification column
     *
     * Example usage:
     * <code>
     * $query->filterByDecisionDateNotification('fooValue');   // WHERE decision_date_notification = 'fooValue'
     * $query->filterByDecisionDateNotification('%fooValue%'); // WHERE decision_date_notification LIKE '%fooValue%'
     * </code>
     *
     * @param     string $decisionDateNotification The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByDecisionDateNotification($decisionDateNotification = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($decisionDateNotification)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $decisionDateNotification)) {
                $decisionDateNotification = str_replace('*', '%', $decisionDateNotification);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::DECISION_DATE_NOTIFICATION, $decisionDateNotification, $comparison);
    }

    /**
     * Filter the query on the decision_pmi_pme column
     *
     * Example usage:
     * <code>
     * $query->filterByDecisionPmiPme('fooValue');   // WHERE decision_pmi_pme = 'fooValue'
     * $query->filterByDecisionPmiPme('%fooValue%'); // WHERE decision_pmi_pme LIKE '%fooValue%'
     * </code>
     *
     * @param     string $decisionPmiPme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByDecisionPmiPme($decisionPmiPme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($decisionPmiPme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $decisionPmiPme)) {
                $decisionPmiPme = str_replace('*', '%', $decisionPmiPme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::DECISION_PMI_PME, $decisionPmiPme, $comparison);
    }

    /**
     * Filter the query on the decision_nature_prestations column
     *
     * Example usage:
     * <code>
     * $query->filterByDecisionNaturePrestations('fooValue');   // WHERE decision_nature_prestations = 'fooValue'
     * $query->filterByDecisionNaturePrestations('%fooValue%'); // WHERE decision_nature_prestations LIKE '%fooValue%'
     * </code>
     *
     * @param     string $decisionNaturePrestations The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByDecisionNaturePrestations($decisionNaturePrestations = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($decisionNaturePrestations)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $decisionNaturePrestations)) {
                $decisionNaturePrestations = str_replace('*', '%', $decisionNaturePrestations);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::DECISION_NATURE_PRESTATIONS, $decisionNaturePrestations, $comparison);
    }

    /**
     * Filter the query on the decision_objet_marche column
     *
     * Example usage:
     * <code>
     * $query->filterByDecisionObjetMarche('fooValue');   // WHERE decision_objet_marche = 'fooValue'
     * $query->filterByDecisionObjetMarche('%fooValue%'); // WHERE decision_objet_marche LIKE '%fooValue%'
     * </code>
     *
     * @param     string $decisionObjetMarche The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByDecisionObjetMarche($decisionObjetMarche = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($decisionObjetMarche)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $decisionObjetMarche)) {
                $decisionObjetMarche = str_replace('*', '%', $decisionObjetMarche);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::DECISION_OBJET_MARCHE, $decisionObjetMarche, $comparison);
    }

    /**
     * Filter the query on the decision_note column
     *
     * Example usage:
     * <code>
     * $query->filterByDecisionNote('fooValue');   // WHERE decision_note = 'fooValue'
     * $query->filterByDecisionNote('%fooValue%'); // WHERE decision_note LIKE '%fooValue%'
     * </code>
     *
     * @param     string $decisionNote The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByDecisionNote($decisionNote = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($decisionNote)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $decisionNote)) {
                $decisionNote = str_replace('*', '%', $decisionNote);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::DECISION_NOTE, $decisionNote, $comparison);
    }

    /**
     * Filter the query on the decision_fiche_recensement column
     *
     * Example usage:
     * <code>
     * $query->filterByDecisionFicheRecensement('fooValue');   // WHERE decision_fiche_recensement = 'fooValue'
     * $query->filterByDecisionFicheRecensement('%fooValue%'); // WHERE decision_fiche_recensement LIKE '%fooValue%'
     * </code>
     *
     * @param     string $decisionFicheRecensement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByDecisionFicheRecensement($decisionFicheRecensement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($decisionFicheRecensement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $decisionFicheRecensement)) {
                $decisionFicheRecensement = str_replace('*', '%', $decisionFicheRecensement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::DECISION_FICHE_RECENSEMENT, $decisionFicheRecensement, $comparison);
    }

    /**
     * Filter the query on the registre_papier_mail_obligatoire column
     *
     * Example usage:
     * <code>
     * $query->filterByRegistrePapierMailObligatoire('fooValue');   // WHERE registre_papier_mail_obligatoire = 'fooValue'
     * $query->filterByRegistrePapierMailObligatoire('%fooValue%'); // WHERE registre_papier_mail_obligatoire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $registrePapierMailObligatoire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByRegistrePapierMailObligatoire($registrePapierMailObligatoire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($registrePapierMailObligatoire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $registrePapierMailObligatoire)) {
                $registrePapierMailObligatoire = str_replace('*', '%', $registrePapierMailObligatoire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::REGISTRE_PAPIER_MAIL_OBLIGATOIRE, $registrePapierMailObligatoire, $comparison);
    }

    /**
     * Filter the query on the menu_entreprise_indicateurs_cles column
     *
     * Example usage:
     * <code>
     * $query->filterByMenuEntrepriseIndicateursCles('fooValue');   // WHERE menu_entreprise_indicateurs_cles = 'fooValue'
     * $query->filterByMenuEntrepriseIndicateursCles('%fooValue%'); // WHERE menu_entreprise_indicateurs_cles LIKE '%fooValue%'
     * </code>
     *
     * @param     string $menuEntrepriseIndicateursCles The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByMenuEntrepriseIndicateursCles($menuEntrepriseIndicateursCles = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($menuEntrepriseIndicateursCles)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $menuEntrepriseIndicateursCles)) {
                $menuEntrepriseIndicateursCles = str_replace('*', '%', $menuEntrepriseIndicateursCles);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::MENU_ENTREPRISE_INDICATEURS_CLES, $menuEntrepriseIndicateursCles, $comparison);
    }

    /**
     * Filter the query on the ajout_rpa_champ_email column
     *
     * Example usage:
     * <code>
     * $query->filterByAjoutRpaChampEmail('fooValue');   // WHERE ajout_rpa_champ_email = 'fooValue'
     * $query->filterByAjoutRpaChampEmail('%fooValue%'); // WHERE ajout_rpa_champ_email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ajoutRpaChampEmail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByAjoutRpaChampEmail($ajoutRpaChampEmail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ajoutRpaChampEmail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ajoutRpaChampEmail)) {
                $ajoutRpaChampEmail = str_replace('*', '%', $ajoutRpaChampEmail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::AJOUT_RPA_CHAMP_EMAIL, $ajoutRpaChampEmail, $comparison);
    }

    /**
     * Filter the query on the ajout_rpa_champ_telephone column
     *
     * Example usage:
     * <code>
     * $query->filterByAjoutRpaChampTelephone('fooValue');   // WHERE ajout_rpa_champ_telephone = 'fooValue'
     * $query->filterByAjoutRpaChampTelephone('%fooValue%'); // WHERE ajout_rpa_champ_telephone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ajoutRpaChampTelephone The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByAjoutRpaChampTelephone($ajoutRpaChampTelephone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ajoutRpaChampTelephone)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ajoutRpaChampTelephone)) {
                $ajoutRpaChampTelephone = str_replace('*', '%', $ajoutRpaChampTelephone);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::AJOUT_RPA_CHAMP_TELEPHONE, $ajoutRpaChampTelephone, $comparison);
    }

    /**
     * Filter the query on the ajout_rpa_champ_fax column
     *
     * Example usage:
     * <code>
     * $query->filterByAjoutRpaChampFax('fooValue');   // WHERE ajout_rpa_champ_fax = 'fooValue'
     * $query->filterByAjoutRpaChampFax('%fooValue%'); // WHERE ajout_rpa_champ_fax LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ajoutRpaChampFax The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByAjoutRpaChampFax($ajoutRpaChampFax = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ajoutRpaChampFax)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ajoutRpaChampFax)) {
                $ajoutRpaChampFax = str_replace('*', '%', $ajoutRpaChampFax);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::AJOUT_RPA_CHAMP_FAX, $ajoutRpaChampFax, $comparison);
    }

    /**
     * Filter the query on the entreprise_poser_question_sans_pj column
     *
     * Example usage:
     * <code>
     * $query->filterByEntreprisePoserQuestionSansPj('fooValue');   // WHERE entreprise_poser_question_sans_pj = 'fooValue'
     * $query->filterByEntreprisePoserQuestionSansPj('%fooValue%'); // WHERE entreprise_poser_question_sans_pj LIKE '%fooValue%'
     * </code>
     *
     * @param     string $entreprisePoserQuestionSansPj The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByEntreprisePoserQuestionSansPj($entreprisePoserQuestionSansPj = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($entreprisePoserQuestionSansPj)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $entreprisePoserQuestionSansPj)) {
                $entreprisePoserQuestionSansPj = str_replace('*', '%', $entreprisePoserQuestionSansPj);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::ENTREPRISE_POSER_QUESTION_SANS_PJ, $entreprisePoserQuestionSansPj, $comparison);
    }

    /**
     * Filter the query on the url_demarche_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByUrlDemarcheAgent('fooValue');   // WHERE url_demarche_agent = 'fooValue'
     * $query->filterByUrlDemarcheAgent('%fooValue%'); // WHERE url_demarche_agent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $urlDemarcheAgent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByUrlDemarcheAgent($urlDemarcheAgent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($urlDemarcheAgent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $urlDemarcheAgent)) {
                $urlDemarcheAgent = str_replace('*', '%', $urlDemarcheAgent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::URL_DEMARCHE_AGENT, $urlDemarcheAgent, $comparison);
    }

    /**
     * Filter the query on the url_demarche_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByUrlDemarcheEntreprise('fooValue');   // WHERE url_demarche_entreprise = 'fooValue'
     * $query->filterByUrlDemarcheEntreprise('%fooValue%'); // WHERE url_demarche_entreprise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $urlDemarcheEntreprise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByUrlDemarcheEntreprise($urlDemarcheEntreprise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($urlDemarcheEntreprise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $urlDemarcheEntreprise)) {
                $urlDemarcheEntreprise = str_replace('*', '%', $urlDemarcheEntreprise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::URL_DEMARCHE_ENTREPRISE, $urlDemarcheEntreprise, $comparison);
    }

    /**
     * Filter the query on the siret_detail_entite_achat column
     *
     * Example usage:
     * <code>
     * $query->filterBySiretDetailEntiteAchat('fooValue');   // WHERE siret_detail_entite_achat = 'fooValue'
     * $query->filterBySiretDetailEntiteAchat('%fooValue%'); // WHERE siret_detail_entite_achat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $siretDetailEntiteAchat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterBySiretDetailEntiteAchat($siretDetailEntiteAchat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($siretDetailEntiteAchat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $siretDetailEntiteAchat)) {
                $siretDetailEntiteAchat = str_replace('*', '%', $siretDetailEntiteAchat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::SIRET_DETAIL_ENTITE_ACHAT, $siretDetailEntiteAchat, $comparison);
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
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::PRESENCE_ELU, $presenceElu, $comparison);
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
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::GERER_MON_SERVICE, $gererMonService, $comparison);
    }

    /**
     * Filter the query on the depouillement_enveloppe_depend_RAT_enveloppe_precedente column
     *
     * Example usage:
     * <code>
     * $query->filterByDepouillementEnveloppeDependRatEnveloppePrecedente('fooValue');   // WHERE depouillement_enveloppe_depend_RAT_enveloppe_precedente = 'fooValue'
     * $query->filterByDepouillementEnveloppeDependRatEnveloppePrecedente('%fooValue%'); // WHERE depouillement_enveloppe_depend_RAT_enveloppe_precedente LIKE '%fooValue%'
     * </code>
     *
     * @param     string $depouillementEnveloppeDependRatEnveloppePrecedente The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByDepouillementEnveloppeDependRatEnveloppePrecedente($depouillementEnveloppeDependRatEnveloppePrecedente = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($depouillementEnveloppeDependRatEnveloppePrecedente)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $depouillementEnveloppeDependRatEnveloppePrecedente)) {
                $depouillementEnveloppeDependRatEnveloppePrecedente = str_replace('*', '%', $depouillementEnveloppeDependRatEnveloppePrecedente);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::DEPOUILLEMENT_ENVELOPPE_DEPEND_RAT_ENVELOPPE_PRECEDENTE, $depouillementEnveloppeDependRatEnveloppePrecedente, $comparison);
    }

    /**
     * Filter the query on the consultation_adresse_retrais_dossiers column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultationAdresseRetraisDossiers('fooValue');   // WHERE consultation_adresse_retrais_dossiers = 'fooValue'
     * $query->filterByConsultationAdresseRetraisDossiers('%fooValue%'); // WHERE consultation_adresse_retrais_dossiers LIKE '%fooValue%'
     * </code>
     *
     * @param     string $consultationAdresseRetraisDossiers The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByConsultationAdresseRetraisDossiers($consultationAdresseRetraisDossiers = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($consultationAdresseRetraisDossiers)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $consultationAdresseRetraisDossiers)) {
                $consultationAdresseRetraisDossiers = str_replace('*', '%', $consultationAdresseRetraisDossiers);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::CONSULTATION_ADRESSE_RETRAIS_DOSSIERS, $consultationAdresseRetraisDossiers, $comparison);
    }

    /**
     * Filter the query on the consultation_adresse_depot_offres column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultationAdresseDepotOffres('fooValue');   // WHERE consultation_adresse_depot_offres = 'fooValue'
     * $query->filterByConsultationAdresseDepotOffres('%fooValue%'); // WHERE consultation_adresse_depot_offres LIKE '%fooValue%'
     * </code>
     *
     * @param     string $consultationAdresseDepotOffres The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByConsultationAdresseDepotOffres($consultationAdresseDepotOffres = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($consultationAdresseDepotOffres)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $consultationAdresseDepotOffres)) {
                $consultationAdresseDepotOffres = str_replace('*', '%', $consultationAdresseDepotOffres);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::CONSULTATION_ADRESSE_DEPOT_OFFRES, $consultationAdresseDepotOffres, $comparison);
    }

    /**
     * Filter the query on the consultation_caution_provisoire column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultationCautionProvisoire('fooValue');   // WHERE consultation_caution_provisoire = 'fooValue'
     * $query->filterByConsultationCautionProvisoire('%fooValue%'); // WHERE consultation_caution_provisoire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $consultationCautionProvisoire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByConsultationCautionProvisoire($consultationCautionProvisoire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($consultationCautionProvisoire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $consultationCautionProvisoire)) {
                $consultationCautionProvisoire = str_replace('*', '%', $consultationCautionProvisoire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::CONSULTATION_CAUTION_PROVISOIRE, $consultationCautionProvisoire, $comparison);
    }

    /**
     * Filter the query on the consultation_lieu_ouverture_plis column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultationLieuOuverturePlis('fooValue');   // WHERE consultation_lieu_ouverture_plis = 'fooValue'
     * $query->filterByConsultationLieuOuverturePlis('%fooValue%'); // WHERE consultation_lieu_ouverture_plis LIKE '%fooValue%'
     * </code>
     *
     * @param     string $consultationLieuOuverturePlis The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByConsultationLieuOuverturePlis($consultationLieuOuverturePlis = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($consultationLieuOuverturePlis)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $consultationLieuOuverturePlis)) {
                $consultationLieuOuverturePlis = str_replace('*', '%', $consultationLieuOuverturePlis);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::CONSULTATION_LIEU_OUVERTURE_PLIS, $consultationLieuOuverturePlis, $comparison);
    }

    /**
     * Filter the query on the consultation_qualification column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultationQualification('fooValue');   // WHERE consultation_qualification = 'fooValue'
     * $query->filterByConsultationQualification('%fooValue%'); // WHERE consultation_qualification LIKE '%fooValue%'
     * </code>
     *
     * @param     string $consultationQualification The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByConsultationQualification($consultationQualification = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($consultationQualification)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $consultationQualification)) {
                $consultationQualification = str_replace('*', '%', $consultationQualification);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::CONSULTATION_QUALIFICATION, $consultationQualification, $comparison);
    }

    /**
     * Filter the query on the consultation_agrement column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultationAgrement('fooValue');   // WHERE consultation_agrement = 'fooValue'
     * $query->filterByConsultationAgrement('%fooValue%'); // WHERE consultation_agrement LIKE '%fooValue%'
     * </code>
     *
     * @param     string $consultationAgrement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByConsultationAgrement($consultationAgrement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($consultationAgrement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $consultationAgrement)) {
                $consultationAgrement = str_replace('*', '%', $consultationAgrement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::CONSULTATION_AGREMENT, $consultationAgrement, $comparison);
    }

    /**
     * Filter the query on the consultation_echantillons_demandes column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultationEchantillonsDemandes('fooValue');   // WHERE consultation_echantillons_demandes = 'fooValue'
     * $query->filterByConsultationEchantillonsDemandes('%fooValue%'); // WHERE consultation_echantillons_demandes LIKE '%fooValue%'
     * </code>
     *
     * @param     string $consultationEchantillonsDemandes The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByConsultationEchantillonsDemandes($consultationEchantillonsDemandes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($consultationEchantillonsDemandes)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $consultationEchantillonsDemandes)) {
                $consultationEchantillonsDemandes = str_replace('*', '%', $consultationEchantillonsDemandes);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::CONSULTATION_ECHANTILLONS_DEMANDES, $consultationEchantillonsDemandes, $comparison);
    }

    /**
     * Filter the query on the consultation_reunion column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultationReunion('fooValue');   // WHERE consultation_reunion = 'fooValue'
     * $query->filterByConsultationReunion('%fooValue%'); // WHERE consultation_reunion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $consultationReunion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByConsultationReunion($consultationReunion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($consultationReunion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $consultationReunion)) {
                $consultationReunion = str_replace('*', '%', $consultationReunion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::CONSULTATION_REUNION, $consultationReunion, $comparison);
    }

    /**
     * Filter the query on the consultation_visite_des_lieux column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultationVisiteDesLieux('fooValue');   // WHERE consultation_visite_des_lieux = 'fooValue'
     * $query->filterByConsultationVisiteDesLieux('%fooValue%'); // WHERE consultation_visite_des_lieux LIKE '%fooValue%'
     * </code>
     *
     * @param     string $consultationVisiteDesLieux The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByConsultationVisiteDesLieux($consultationVisiteDesLieux = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($consultationVisiteDesLieux)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $consultationVisiteDesLieux)) {
                $consultationVisiteDesLieux = str_replace('*', '%', $consultationVisiteDesLieux);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::CONSULTATION_VISITE_DES_LIEUX, $consultationVisiteDesLieux, $comparison);
    }

    /**
     * Filter the query on the consultation_prix_acquisition column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultationPrixAcquisition('fooValue');   // WHERE consultation_prix_acquisition = 'fooValue'
     * $query->filterByConsultationPrixAcquisition('%fooValue%'); // WHERE consultation_prix_acquisition LIKE '%fooValue%'
     * </code>
     *
     * @param     string $consultationPrixAcquisition The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByConsultationPrixAcquisition($consultationPrixAcquisition = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($consultationPrixAcquisition)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $consultationPrixAcquisition)) {
                $consultationPrixAcquisition = str_replace('*', '%', $consultationPrixAcquisition);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::CONSULTATION_PRIX_ACQUISITION, $consultationPrixAcquisition, $comparison);
    }

    /**
     * Filter the query on the resultat_analyse_avant_decision column
     *
     * Example usage:
     * <code>
     * $query->filterByResultatAnalyseAvantDecision('fooValue');   // WHERE resultat_analyse_avant_decision = 'fooValue'
     * $query->filterByResultatAnalyseAvantDecision('%fooValue%'); // WHERE resultat_analyse_avant_decision LIKE '%fooValue%'
     * </code>
     *
     * @param     string $resultatAnalyseAvantDecision The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByResultatAnalyseAvantDecision($resultatAnalyseAvantDecision = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($resultatAnalyseAvantDecision)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $resultatAnalyseAvantDecision)) {
                $resultatAnalyseAvantDecision = str_replace('*', '%', $resultatAnalyseAvantDecision);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::RESULTAT_ANALYSE_AVANT_DECISION, $resultatAnalyseAvantDecision, $comparison);
    }

    /**
     * Filter the query on the creation_inscrit_par_ates column
     *
     * Example usage:
     * <code>
     * $query->filterByCreationInscritParAtes('fooValue');   // WHERE creation_inscrit_par_ates = 'fooValue'
     * $query->filterByCreationInscritParAtes('%fooValue%'); // WHERE creation_inscrit_par_ates LIKE '%fooValue%'
     * </code>
     *
     * @param     string $creationInscritParAtes The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByCreationInscritParAtes($creationInscritParAtes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($creationInscritParAtes)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $creationInscritParAtes)) {
                $creationInscritParAtes = str_replace('*', '%', $creationInscritParAtes);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::CREATION_INSCRIT_PAR_ATES, $creationInscritParAtes, $comparison);
    }

    /**
     * Filter the query on the consultation_variantes_autorisees column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultationVariantesAutorisees('fooValue');   // WHERE consultation_variantes_autorisees = 'fooValue'
     * $query->filterByConsultationVariantesAutorisees('%fooValue%'); // WHERE consultation_variantes_autorisees LIKE '%fooValue%'
     * </code>
     *
     * @param     string $consultationVariantesAutorisees The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByConsultationVariantesAutorisees($consultationVariantesAutorisees = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($consultationVariantesAutorisees)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $consultationVariantesAutorisees)) {
                $consultationVariantesAutorisees = str_replace('*', '%', $consultationVariantesAutorisees);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::CONSULTATION_VARIANTES_AUTORISEES, $consultationVariantesAutorisees, $comparison);
    }

    /**
     * Filter the query on the recherche_avancee_par_type_org column
     *
     * Example usage:
     * <code>
     * $query->filterByRechercheAvanceeParTypeOrg('fooValue');   // WHERE recherche_avancee_par_type_org = 'fooValue'
     * $query->filterByRechercheAvanceeParTypeOrg('%fooValue%'); // WHERE recherche_avancee_par_type_org LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rechercheAvanceeParTypeOrg The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByRechercheAvanceeParTypeOrg($rechercheAvanceeParTypeOrg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rechercheAvanceeParTypeOrg)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rechercheAvanceeParTypeOrg)) {
                $rechercheAvanceeParTypeOrg = str_replace('*', '%', $rechercheAvanceeParTypeOrg);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::RECHERCHE_AVANCEE_PAR_TYPE_ORG, $rechercheAvanceeParTypeOrg, $comparison);
    }

    /**
     * Filter the query on the menu_agent_societes_exclues column
     *
     * Example usage:
     * <code>
     * $query->filterByMenuAgentSocietesExclues('fooValue');   // WHERE menu_agent_societes_exclues = 'fooValue'
     * $query->filterByMenuAgentSocietesExclues('%fooValue%'); // WHERE menu_agent_societes_exclues LIKE '%fooValue%'
     * </code>
     *
     * @param     string $menuAgentSocietesExclues The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByMenuAgentSocietesExclues($menuAgentSocietesExclues = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($menuAgentSocietesExclues)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $menuAgentSocietesExclues)) {
                $menuAgentSocietesExclues = str_replace('*', '%', $menuAgentSocietesExclues);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::MENU_AGENT_SOCIETES_EXCLUES, $menuAgentSocietesExclues, $comparison);
    }

    /**
     * Filter the query on the recherche_avancee_par_domaines_activite column
     *
     * Example usage:
     * <code>
     * $query->filterByRechercheAvanceeParDomainesActivite('fooValue');   // WHERE recherche_avancee_par_domaines_activite = 'fooValue'
     * $query->filterByRechercheAvanceeParDomainesActivite('%fooValue%'); // WHERE recherche_avancee_par_domaines_activite LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rechercheAvanceeParDomainesActivite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByRechercheAvanceeParDomainesActivite($rechercheAvanceeParDomainesActivite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rechercheAvanceeParDomainesActivite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rechercheAvanceeParDomainesActivite)) {
                $rechercheAvanceeParDomainesActivite = str_replace('*', '%', $rechercheAvanceeParDomainesActivite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::RECHERCHE_AVANCEE_PAR_DOMAINES_ACTIVITE, $rechercheAvanceeParDomainesActivite, $comparison);
    }

    /**
     * Filter the query on the recherche_avancee_par_qualification column
     *
     * Example usage:
     * <code>
     * $query->filterByRechercheAvanceeParQualification('fooValue');   // WHERE recherche_avancee_par_qualification = 'fooValue'
     * $query->filterByRechercheAvanceeParQualification('%fooValue%'); // WHERE recherche_avancee_par_qualification LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rechercheAvanceeParQualification The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByRechercheAvanceeParQualification($rechercheAvanceeParQualification = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rechercheAvanceeParQualification)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rechercheAvanceeParQualification)) {
                $rechercheAvanceeParQualification = str_replace('*', '%', $rechercheAvanceeParQualification);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::RECHERCHE_AVANCEE_PAR_QUALIFICATION, $rechercheAvanceeParQualification, $comparison);
    }

    /**
     * Filter the query on the recherche_avancee_par_agrement column
     *
     * Example usage:
     * <code>
     * $query->filterByRechercheAvanceeParAgrement('fooValue');   // WHERE recherche_avancee_par_agrement = 'fooValue'
     * $query->filterByRechercheAvanceeParAgrement('%fooValue%'); // WHERE recherche_avancee_par_agrement LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rechercheAvanceeParAgrement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByRechercheAvanceeParAgrement($rechercheAvanceeParAgrement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rechercheAvanceeParAgrement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rechercheAvanceeParAgrement)) {
                $rechercheAvanceeParAgrement = str_replace('*', '%', $rechercheAvanceeParAgrement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::RECHERCHE_AVANCEE_PAR_AGREMENT, $rechercheAvanceeParAgrement, $comparison);
    }

    /**
     * Filter the query on the contact_administratif_dans_detail_consultation_cote_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByContactAdministratifDansDetailConsultationCoteEntreprise('fooValue');   // WHERE contact_administratif_dans_detail_consultation_cote_entreprise = 'fooValue'
     * $query->filterByContactAdministratifDansDetailConsultationCoteEntreprise('%fooValue%'); // WHERE contact_administratif_dans_detail_consultation_cote_entreprise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contactAdministratifDansDetailConsultationCoteEntreprise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByContactAdministratifDansDetailConsultationCoteEntreprise($contactAdministratifDansDetailConsultationCoteEntreprise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contactAdministratifDansDetailConsultationCoteEntreprise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $contactAdministratifDansDetailConsultationCoteEntreprise)) {
                $contactAdministratifDansDetailConsultationCoteEntreprise = str_replace('*', '%', $contactAdministratifDansDetailConsultationCoteEntreprise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::CONTACT_ADMINISTRATIF_DANS_DETAIL_CONSULTATION_COTE_ENTREPRISE, $contactAdministratifDansDetailConsultationCoteEntreprise, $comparison);
    }

    /**
     * Filter the query on the consultation_pieces_dossiers column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultationPiecesDossiers('fooValue');   // WHERE consultation_pieces_dossiers = 'fooValue'
     * $query->filterByConsultationPiecesDossiers('%fooValue%'); // WHERE consultation_pieces_dossiers LIKE '%fooValue%'
     * </code>
     *
     * @param     string $consultationPiecesDossiers The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByConsultationPiecesDossiers($consultationPiecesDossiers = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($consultationPiecesDossiers)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $consultationPiecesDossiers)) {
                $consultationPiecesDossiers = str_replace('*', '%', $consultationPiecesDossiers);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::CONSULTATION_PIECES_DOSSIERS, $consultationPiecesDossiers, $comparison);
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
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::GERER_ADRESSES_SERVICE, $gererAdressesService, $comparison);
    }

    /**
     * Filter the query on the traduire_annonces column
     *
     * Example usage:
     * <code>
     * $query->filterByTraduireAnnonces('fooValue');   // WHERE traduire_annonces = 'fooValue'
     * $query->filterByTraduireAnnonces('%fooValue%'); // WHERE traduire_annonces LIKE '%fooValue%'
     * </code>
     *
     * @param     string $traduireAnnonces The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByTraduireAnnonces($traduireAnnonces = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($traduireAnnonces)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $traduireAnnonces)) {
                $traduireAnnonces = str_replace('*', '%', $traduireAnnonces);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::TRADUIRE_ANNONCES, $traduireAnnonces, $comparison);
    }

    /**
     * Filter the query on the afficher_bloc_actions_dans_details_annonces column
     *
     * Example usage:
     * <code>
     * $query->filterByAfficherBlocActionsDansDetailsAnnonces('fooValue');   // WHERE afficher_bloc_actions_dans_details_annonces = 'fooValue'
     * $query->filterByAfficherBlocActionsDansDetailsAnnonces('%fooValue%'); // WHERE afficher_bloc_actions_dans_details_annonces LIKE '%fooValue%'
     * </code>
     *
     * @param     string $afficherBlocActionsDansDetailsAnnonces The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByAfficherBlocActionsDansDetailsAnnonces($afficherBlocActionsDansDetailsAnnonces = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($afficherBlocActionsDansDetailsAnnonces)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $afficherBlocActionsDansDetailsAnnonces)) {
                $afficherBlocActionsDansDetailsAnnonces = str_replace('*', '%', $afficherBlocActionsDansDetailsAnnonces);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::AFFICHER_BLOC_ACTIONS_DANS_DETAILS_ANNONCES, $afficherBlocActionsDansDetailsAnnonces, $comparison);
    }

    /**
     * Filter the query on the autoriser_une_seule_reponse_principale_par_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByAutoriserUneSeuleReponsePrincipaleParEntreprise('fooValue');   // WHERE autoriser_une_seule_reponse_principale_par_entreprise = 'fooValue'
     * $query->filterByAutoriserUneSeuleReponsePrincipaleParEntreprise('%fooValue%'); // WHERE autoriser_une_seule_reponse_principale_par_entreprise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $autoriserUneSeuleReponsePrincipaleParEntreprise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByAutoriserUneSeuleReponsePrincipaleParEntreprise($autoriserUneSeuleReponsePrincipaleParEntreprise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($autoriserUneSeuleReponsePrincipaleParEntreprise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $autoriserUneSeuleReponsePrincipaleParEntreprise)) {
                $autoriserUneSeuleReponsePrincipaleParEntreprise = str_replace('*', '%', $autoriserUneSeuleReponsePrincipaleParEntreprise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::AUTORISER_UNE_SEULE_REPONSE_PRINCIPALE_PAR_ENTREPRISE, $autoriserUneSeuleReponsePrincipaleParEntreprise, $comparison);
    }

    /**
     * Filter the query on the generation_avis column
     *
     * Example usage:
     * <code>
     * $query->filterByGenerationAvis('fooValue');   // WHERE generation_avis = 'fooValue'
     * $query->filterByGenerationAvis('%fooValue%'); // WHERE generation_avis LIKE '%fooValue%'
     * </code>
     *
     * @param     string $generationAvis The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByGenerationAvis($generationAvis = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($generationAvis)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $generationAvis)) {
                $generationAvis = str_replace('*', '%', $generationAvis);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::GENERATION_AVIS, $generationAvis, $comparison);
    }

    /**
     * Filter the query on the passation_appliquer_donnees_ensemble_lots column
     *
     * Example usage:
     * <code>
     * $query->filterByPassationAppliquerDonneesEnsembleLots('fooValue');   // WHERE passation_appliquer_donnees_ensemble_lots = 'fooValue'
     * $query->filterByPassationAppliquerDonneesEnsembleLots('%fooValue%'); // WHERE passation_appliquer_donnees_ensemble_lots LIKE '%fooValue%'
     * </code>
     *
     * @param     string $passationAppliquerDonneesEnsembleLots The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByPassationAppliquerDonneesEnsembleLots($passationAppliquerDonneesEnsembleLots = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($passationAppliquerDonneesEnsembleLots)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $passationAppliquerDonneesEnsembleLots)) {
                $passationAppliquerDonneesEnsembleLots = str_replace('*', '%', $passationAppliquerDonneesEnsembleLots);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::PASSATION_APPLIQUER_DONNEES_ENSEMBLE_LOTS, $passationAppliquerDonneesEnsembleLots, $comparison);
    }

    /**
     * Filter the query on the autre_annonce_extrait_pv column
     *
     * Example usage:
     * <code>
     * $query->filterByAutreAnnonceExtraitPv('fooValue');   // WHERE autre_annonce_extrait_pv = 'fooValue'
     * $query->filterByAutreAnnonceExtraitPv('%fooValue%'); // WHERE autre_annonce_extrait_pv LIKE '%fooValue%'
     * </code>
     *
     * @param     string $autreAnnonceExtraitPv The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByAutreAnnonceExtraitPv($autreAnnonceExtraitPv = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($autreAnnonceExtraitPv)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $autreAnnonceExtraitPv)) {
                $autreAnnonceExtraitPv = str_replace('*', '%', $autreAnnonceExtraitPv);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::AUTRE_ANNONCE_EXTRAIT_PV, $autreAnnonceExtraitPv, $comparison);
    }

    /**
     * Filter the query on the autre_annonce_rapport_achevement column
     *
     * Example usage:
     * <code>
     * $query->filterByAutreAnnonceRapportAchevement('fooValue');   // WHERE autre_annonce_rapport_achevement = 'fooValue'
     * $query->filterByAutreAnnonceRapportAchevement('%fooValue%'); // WHERE autre_annonce_rapport_achevement LIKE '%fooValue%'
     * </code>
     *
     * @param     string $autreAnnonceRapportAchevement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByAutreAnnonceRapportAchevement($autreAnnonceRapportAchevement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($autreAnnonceRapportAchevement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $autreAnnonceRapportAchevement)) {
                $autreAnnonceRapportAchevement = str_replace('*', '%', $autreAnnonceRapportAchevement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::AUTRE_ANNONCE_RAPPORT_ACHEVEMENT, $autreAnnonceRapportAchevement, $comparison);
    }

    /**
     * Filter the query on the ajout_fichier_joint_autre_annonce column
     *
     * Example usage:
     * <code>
     * $query->filterByAjoutFichierJointAutreAnnonce('fooValue');   // WHERE ajout_fichier_joint_autre_annonce = 'fooValue'
     * $query->filterByAjoutFichierJointAutreAnnonce('%fooValue%'); // WHERE ajout_fichier_joint_autre_annonce LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ajoutFichierJointAutreAnnonce The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByAjoutFichierJointAutreAnnonce($ajoutFichierJointAutreAnnonce = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ajoutFichierJointAutreAnnonce)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ajoutFichierJointAutreAnnonce)) {
                $ajoutFichierJointAutreAnnonce = str_replace('*', '%', $ajoutFichierJointAutreAnnonce);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::AJOUT_FICHIER_JOINT_AUTRE_ANNONCE, $ajoutFichierJointAutreAnnonce, $comparison);
    }

    /**
     * Filter the query on the consultation_mode_passation column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultationModePassation('fooValue');   // WHERE consultation_mode_passation = 'fooValue'
     * $query->filterByConsultationModePassation('%fooValue%'); // WHERE consultation_mode_passation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $consultationModePassation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByConsultationModePassation($consultationModePassation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($consultationModePassation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $consultationModePassation)) {
                $consultationModePassation = str_replace('*', '%', $consultationModePassation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::CONSULTATION_MODE_PASSATION, $consultationModePassation, $comparison);
    }

    /**
     * Filter the query on the compte_entreprise_identifiant_unique column
     *
     * Example usage:
     * <code>
     * $query->filterByCompteEntrepriseIdentifiantUnique('fooValue');   // WHERE compte_entreprise_identifiant_unique = 'fooValue'
     * $query->filterByCompteEntrepriseIdentifiantUnique('%fooValue%'); // WHERE compte_entreprise_identifiant_unique LIKE '%fooValue%'
     * </code>
     *
     * @param     string $compteEntrepriseIdentifiantUnique The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByCompteEntrepriseIdentifiantUnique($compteEntrepriseIdentifiantUnique = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($compteEntrepriseIdentifiantUnique)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $compteEntrepriseIdentifiantUnique)) {
                $compteEntrepriseIdentifiantUnique = str_replace('*', '%', $compteEntrepriseIdentifiantUnique);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_IDENTIFIANT_UNIQUE, $compteEntrepriseIdentifiantUnique, $comparison);
    }

    /**
     * Filter the query on the gerer_certificats_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByGererCertificatsAgent('fooValue');   // WHERE gerer_certificats_agent = 'fooValue'
     * $query->filterByGererCertificatsAgent('%fooValue%'); // WHERE gerer_certificats_agent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gererCertificatsAgent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByGererCertificatsAgent($gererCertificatsAgent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gererCertificatsAgent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gererCertificatsAgent)) {
                $gererCertificatsAgent = str_replace('*', '%', $gererCertificatsAgent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::GERER_CERTIFICATS_AGENT, $gererCertificatsAgent, $comparison);
    }

    /**
     * Filter the query on the autre_annonce_programme_previsionnel column
     *
     * Example usage:
     * <code>
     * $query->filterByAutreAnnonceProgrammePrevisionnel('fooValue');   // WHERE autre_annonce_programme_previsionnel = 'fooValue'
     * $query->filterByAutreAnnonceProgrammePrevisionnel('%fooValue%'); // WHERE autre_annonce_programme_previsionnel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $autreAnnonceProgrammePrevisionnel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByAutreAnnonceProgrammePrevisionnel($autreAnnonceProgrammePrevisionnel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($autreAnnonceProgrammePrevisionnel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $autreAnnonceProgrammePrevisionnel)) {
                $autreAnnonceProgrammePrevisionnel = str_replace('*', '%', $autreAnnonceProgrammePrevisionnel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::AUTRE_ANNONCE_PROGRAMME_PREVISIONNEL, $autreAnnonceProgrammePrevisionnel, $comparison);
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
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::ANNULER_CONSULTATION, $annulerConsultation, $comparison);
    }

    /**
     * Filter the query on the cfe_entreprise_accessible_par_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByCfeEntrepriseAccessibleParAgent('fooValue');   // WHERE cfe_entreprise_accessible_par_agent = 'fooValue'
     * $query->filterByCfeEntrepriseAccessibleParAgent('%fooValue%'); // WHERE cfe_entreprise_accessible_par_agent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cfeEntrepriseAccessibleParAgent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByCfeEntrepriseAccessibleParAgent($cfeEntrepriseAccessibleParAgent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cfeEntrepriseAccessibleParAgent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cfeEntrepriseAccessibleParAgent)) {
                $cfeEntrepriseAccessibleParAgent = str_replace('*', '%', $cfeEntrepriseAccessibleParAgent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::CFE_ENTREPRISE_ACCESSIBLE_PAR_AGENT, $cfeEntrepriseAccessibleParAgent, $comparison);
    }

    /**
     * Filter the query on the compte_entreprise_code_nace_referentiel column
     *
     * Example usage:
     * <code>
     * $query->filterByCompteEntrepriseCodeNaceReferentiel('fooValue');   // WHERE compte_entreprise_code_nace_referentiel = 'fooValue'
     * $query->filterByCompteEntrepriseCodeNaceReferentiel('%fooValue%'); // WHERE compte_entreprise_code_nace_referentiel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $compteEntrepriseCodeNaceReferentiel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByCompteEntrepriseCodeNaceReferentiel($compteEntrepriseCodeNaceReferentiel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($compteEntrepriseCodeNaceReferentiel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $compteEntrepriseCodeNaceReferentiel)) {
                $compteEntrepriseCodeNaceReferentiel = str_replace('*', '%', $compteEntrepriseCodeNaceReferentiel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CODE_NACE_REFERENTIEL, $compteEntrepriseCodeNaceReferentiel, $comparison);
    }

    /**
     * Filter the query on the code_nut_lt_referentiel column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeNutLtReferentiel('fooValue');   // WHERE code_nut_lt_referentiel = 'fooValue'
     * $query->filterByCodeNutLtReferentiel('%fooValue%'); // WHERE code_nut_lt_referentiel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codeNutLtReferentiel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByCodeNutLtReferentiel($codeNutLtReferentiel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeNutLtReferentiel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codeNutLtReferentiel)) {
                $codeNutLtReferentiel = str_replace('*', '%', $codeNutLtReferentiel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::CODE_NUT_LT_REFERENTIEL, $codeNutLtReferentiel, $comparison);
    }

    /**
     * Filter the query on the lieux_execution column
     *
     * Example usage:
     * <code>
     * $query->filterByLieuxExecution('fooValue');   // WHERE lieux_execution = 'fooValue'
     * $query->filterByLieuxExecution('%fooValue%'); // WHERE lieux_execution LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lieuxExecution The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByLieuxExecution($lieuxExecution = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lieuxExecution)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lieuxExecution)) {
                $lieuxExecution = str_replace('*', '%', $lieuxExecution);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::LIEUX_EXECUTION, $lieuxExecution, $comparison);
    }

    /**
     * Filter the query on the compte_entreprise_domaine_activite_lt_referentiel column
     *
     * Example usage:
     * <code>
     * $query->filterByCompteEntrepriseDomaineActiviteLtReferentiel('fooValue');   // WHERE compte_entreprise_domaine_activite_lt_referentiel = 'fooValue'
     * $query->filterByCompteEntrepriseDomaineActiviteLtReferentiel('%fooValue%'); // WHERE compte_entreprise_domaine_activite_lt_referentiel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $compteEntrepriseDomaineActiviteLtReferentiel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByCompteEntrepriseDomaineActiviteLtReferentiel($compteEntrepriseDomaineActiviteLtReferentiel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($compteEntrepriseDomaineActiviteLtReferentiel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $compteEntrepriseDomaineActiviteLtReferentiel)) {
                $compteEntrepriseDomaineActiviteLtReferentiel = str_replace('*', '%', $compteEntrepriseDomaineActiviteLtReferentiel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DOMAINE_ACTIVITE_LT_REFERENTIEL, $compteEntrepriseDomaineActiviteLtReferentiel, $comparison);
    }

    /**
     * Filter the query on the consultation_domaines_activites_lt_referentiel column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultationDomainesActivitesLtReferentiel('fooValue');   // WHERE consultation_domaines_activites_lt_referentiel = 'fooValue'
     * $query->filterByConsultationDomainesActivitesLtReferentiel('%fooValue%'); // WHERE consultation_domaines_activites_lt_referentiel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $consultationDomainesActivitesLtReferentiel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByConsultationDomainesActivitesLtReferentiel($consultationDomainesActivitesLtReferentiel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($consultationDomainesActivitesLtReferentiel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $consultationDomainesActivitesLtReferentiel)) {
                $consultationDomainesActivitesLtReferentiel = str_replace('*', '%', $consultationDomainesActivitesLtReferentiel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::CONSULTATION_DOMAINES_ACTIVITES_LT_REFERENTIEL, $consultationDomainesActivitesLtReferentiel, $comparison);
    }

    /**
     * Filter the query on the compte_entreprise_agrement_lt_referentiel column
     *
     * Example usage:
     * <code>
     * $query->filterByCompteEntrepriseAgrementLtReferentiel('fooValue');   // WHERE compte_entreprise_agrement_lt_referentiel = 'fooValue'
     * $query->filterByCompteEntrepriseAgrementLtReferentiel('%fooValue%'); // WHERE compte_entreprise_agrement_lt_referentiel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $compteEntrepriseAgrementLtReferentiel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByCompteEntrepriseAgrementLtReferentiel($compteEntrepriseAgrementLtReferentiel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($compteEntrepriseAgrementLtReferentiel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $compteEntrepriseAgrementLtReferentiel)) {
                $compteEntrepriseAgrementLtReferentiel = str_replace('*', '%', $compteEntrepriseAgrementLtReferentiel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_AGREMENT_LT_REFERENTIEL, $compteEntrepriseAgrementLtReferentiel, $comparison);
    }

    /**
     * Filter the query on the compte_entreprise_qualification_lt_referentiel column
     *
     * Example usage:
     * <code>
     * $query->filterByCompteEntrepriseQualificationLtReferentiel('fooValue');   // WHERE compte_entreprise_qualification_lt_referentiel = 'fooValue'
     * $query->filterByCompteEntrepriseQualificationLtReferentiel('%fooValue%'); // WHERE compte_entreprise_qualification_lt_referentiel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $compteEntrepriseQualificationLtReferentiel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByCompteEntrepriseQualificationLtReferentiel($compteEntrepriseQualificationLtReferentiel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($compteEntrepriseQualificationLtReferentiel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $compteEntrepriseQualificationLtReferentiel)) {
                $compteEntrepriseQualificationLtReferentiel = str_replace('*', '%', $compteEntrepriseQualificationLtReferentiel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_QUALIFICATION_LT_REFERENTIEL, $compteEntrepriseQualificationLtReferentiel, $comparison);
    }

    /**
     * Filter the query on the reponse_pas_a_pas column
     *
     * Example usage:
     * <code>
     * $query->filterByReponsePasAPas('fooValue');   // WHERE reponse_pas_a_pas = 'fooValue'
     * $query->filterByReponsePasAPas('%fooValue%'); // WHERE reponse_pas_a_pas LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reponsePasAPas The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByReponsePasAPas($reponsePasAPas = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reponsePasAPas)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $reponsePasAPas)) {
                $reponsePasAPas = str_replace('*', '%', $reponsePasAPas);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::REPONSE_PAS_A_PAS, $reponsePasAPas, $comparison);
    }

    /**
     * Filter the query on the agent_controle_format_mot_de_passe column
     *
     * Example usage:
     * <code>
     * $query->filterByAgentControleFormatMotDePasse('fooValue');   // WHERE agent_controle_format_mot_de_passe = 'fooValue'
     * $query->filterByAgentControleFormatMotDePasse('%fooValue%'); // WHERE agent_controle_format_mot_de_passe LIKE '%fooValue%'
     * </code>
     *
     * @param     string $agentControleFormatMotDePasse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByAgentControleFormatMotDePasse($agentControleFormatMotDePasse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($agentControleFormatMotDePasse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $agentControleFormatMotDePasse)) {
                $agentControleFormatMotDePasse = str_replace('*', '%', $agentControleFormatMotDePasse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::AGENT_CONTROLE_FORMAT_MOT_DE_PASSE, $agentControleFormatMotDePasse, $comparison);
    }

    /**
     * Filter the query on the entreprise_validation_email_inscription column
     *
     * Example usage:
     * <code>
     * $query->filterByEntrepriseValidationEmailInscription('fooValue');   // WHERE entreprise_validation_email_inscription = 'fooValue'
     * $query->filterByEntrepriseValidationEmailInscription('%fooValue%'); // WHERE entreprise_validation_email_inscription LIKE '%fooValue%'
     * </code>
     *
     * @param     string $entrepriseValidationEmailInscription The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByEntrepriseValidationEmailInscription($entrepriseValidationEmailInscription = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($entrepriseValidationEmailInscription)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $entrepriseValidationEmailInscription)) {
                $entrepriseValidationEmailInscription = str_replace('*', '%', $entrepriseValidationEmailInscription);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::ENTREPRISE_VALIDATION_EMAIL_INSCRIPTION, $entrepriseValidationEmailInscription, $comparison);
    }

    /**
     * Filter the query on the telecharger_dce_avec_authentification column
     *
     * Example usage:
     * <code>
     * $query->filterByTelechargerDceAvecAuthentification('fooValue');   // WHERE telecharger_dce_avec_authentification = 'fooValue'
     * $query->filterByTelechargerDceAvecAuthentification('%fooValue%'); // WHERE telecharger_dce_avec_authentification LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telechargerDceAvecAuthentification The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByTelechargerDceAvecAuthentification($telechargerDceAvecAuthentification = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telechargerDceAvecAuthentification)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telechargerDceAvecAuthentification)) {
                $telechargerDceAvecAuthentification = str_replace('*', '%', $telechargerDceAvecAuthentification);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::TELECHARGER_DCE_AVEC_AUTHENTIFICATION, $telechargerDceAvecAuthentification, $comparison);
    }

    /**
     * Filter the query on the authentification_basic column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthentificationBasic('fooValue');   // WHERE authentification_basic = 'fooValue'
     * $query->filterByAuthentificationBasic('%fooValue%'); // WHERE authentification_basic LIKE '%fooValue%'
     * </code>
     *
     * @param     string $authentificationBasic The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByAuthentificationBasic($authentificationBasic = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($authentificationBasic)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $authentificationBasic)) {
                $authentificationBasic = str_replace('*', '%', $authentificationBasic);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::AUTHENTIFICATION_BASIC, $authentificationBasic, $comparison);
    }

    /**
     * Filter the query on the reglement_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByReglementConsultation('fooValue');   // WHERE reglement_consultation = 'fooValue'
     * $query->filterByReglementConsultation('%fooValue%'); // WHERE reglement_consultation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reglementConsultation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByReglementConsultation($reglementConsultation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reglementConsultation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $reglementConsultation)) {
                $reglementConsultation = str_replace('*', '%', $reglementConsultation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::REGLEMENT_CONSULTATION, $reglementConsultation, $comparison);
    }

    /**
     * Filter the query on the annonces_marches column
     *
     * Example usage:
     * <code>
     * $query->filterByAnnoncesMarches('fooValue');   // WHERE annonces_marches = 'fooValue'
     * $query->filterByAnnoncesMarches('%fooValue%'); // WHERE annonces_marches LIKE '%fooValue%'
     * </code>
     *
     * @param     string $annoncesMarches The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByAnnoncesMarches($annoncesMarches = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($annoncesMarches)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $annoncesMarches)) {
                $annoncesMarches = str_replace('*', '%', $annoncesMarches);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::ANNONCES_MARCHES, $annoncesMarches, $comparison);
    }

    /**
     * Filter the query on the cfe_date_fin_validite_obligatoire column
     *
     * Example usage:
     * <code>
     * $query->filterByCfeDateFinValiditeObligatoire('fooValue');   // WHERE cfe_date_fin_validite_obligatoire = 'fooValue'
     * $query->filterByCfeDateFinValiditeObligatoire('%fooValue%'); // WHERE cfe_date_fin_validite_obligatoire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cfeDateFinValiditeObligatoire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByCfeDateFinValiditeObligatoire($cfeDateFinValiditeObligatoire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cfeDateFinValiditeObligatoire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cfeDateFinValiditeObligatoire)) {
                $cfeDateFinValiditeObligatoire = str_replace('*', '%', $cfeDateFinValiditeObligatoire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::CFE_DATE_FIN_VALIDITE_OBLIGATOIRE, $cfeDateFinValiditeObligatoire, $comparison);
    }

    /**
     * Filter the query on the associer_documents_cfe_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByAssocierDocumentsCfeConsultation('fooValue');   // WHERE associer_documents_cfe_consultation = 'fooValue'
     * $query->filterByAssocierDocumentsCfeConsultation('%fooValue%'); // WHERE associer_documents_cfe_consultation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $associerDocumentsCfeConsultation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByAssocierDocumentsCfeConsultation($associerDocumentsCfeConsultation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($associerDocumentsCfeConsultation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $associerDocumentsCfeConsultation)) {
                $associerDocumentsCfeConsultation = str_replace('*', '%', $associerDocumentsCfeConsultation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::ASSOCIER_DOCUMENTS_CFE_CONSULTATION, $associerDocumentsCfeConsultation, $comparison);
    }

    /**
     * Filter the query on the compte_entreprise_region column
     *
     * Example usage:
     * <code>
     * $query->filterByCompteEntrepriseRegion('fooValue');   // WHERE compte_entreprise_region = 'fooValue'
     * $query->filterByCompteEntrepriseRegion('%fooValue%'); // WHERE compte_entreprise_region LIKE '%fooValue%'
     * </code>
     *
     * @param     string $compteEntrepriseRegion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByCompteEntrepriseRegion($compteEntrepriseRegion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($compteEntrepriseRegion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $compteEntrepriseRegion)) {
                $compteEntrepriseRegion = str_replace('*', '%', $compteEntrepriseRegion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_REGION, $compteEntrepriseRegion, $comparison);
    }

    /**
     * Filter the query on the compte_entreprise_telephone2 column
     *
     * Example usage:
     * <code>
     * $query->filterByCompteEntrepriseTelephone2('fooValue');   // WHERE compte_entreprise_telephone2 = 'fooValue'
     * $query->filterByCompteEntrepriseTelephone2('%fooValue%'); // WHERE compte_entreprise_telephone2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $compteEntrepriseTelephone2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByCompteEntrepriseTelephone2($compteEntrepriseTelephone2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($compteEntrepriseTelephone2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $compteEntrepriseTelephone2)) {
                $compteEntrepriseTelephone2 = str_replace('*', '%', $compteEntrepriseTelephone2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_TELEPHONE2, $compteEntrepriseTelephone2, $comparison);
    }

    /**
     * Filter the query on the compte_entreprise_cnss column
     *
     * Example usage:
     * <code>
     * $query->filterByCompteEntrepriseCnss('fooValue');   // WHERE compte_entreprise_cnss = 'fooValue'
     * $query->filterByCompteEntrepriseCnss('%fooValue%'); // WHERE compte_entreprise_cnss LIKE '%fooValue%'
     * </code>
     *
     * @param     string $compteEntrepriseCnss The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByCompteEntrepriseCnss($compteEntrepriseCnss = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($compteEntrepriseCnss)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $compteEntrepriseCnss)) {
                $compteEntrepriseCnss = str_replace('*', '%', $compteEntrepriseCnss);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CNSS, $compteEntrepriseCnss, $comparison);
    }

    /**
     * Filter the query on the compte_entreprise_rcnum column
     *
     * Example usage:
     * <code>
     * $query->filterByCompteEntrepriseRcnum('fooValue');   // WHERE compte_entreprise_rcnum = 'fooValue'
     * $query->filterByCompteEntrepriseRcnum('%fooValue%'); // WHERE compte_entreprise_rcnum LIKE '%fooValue%'
     * </code>
     *
     * @param     string $compteEntrepriseRcnum The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByCompteEntrepriseRcnum($compteEntrepriseRcnum = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($compteEntrepriseRcnum)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $compteEntrepriseRcnum)) {
                $compteEntrepriseRcnum = str_replace('*', '%', $compteEntrepriseRcnum);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_RCNUM, $compteEntrepriseRcnum, $comparison);
    }

    /**
     * Filter the query on the compte_entreprise_domaine_activite column
     *
     * Example usage:
     * <code>
     * $query->filterByCompteEntrepriseDomaineActivite('fooValue');   // WHERE compte_entreprise_domaine_activite = 'fooValue'
     * $query->filterByCompteEntrepriseDomaineActivite('%fooValue%'); // WHERE compte_entreprise_domaine_activite LIKE '%fooValue%'
     * </code>
     *
     * @param     string $compteEntrepriseDomaineActivite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByCompteEntrepriseDomaineActivite($compteEntrepriseDomaineActivite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($compteEntrepriseDomaineActivite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $compteEntrepriseDomaineActivite)) {
                $compteEntrepriseDomaineActivite = str_replace('*', '%', $compteEntrepriseDomaineActivite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DOMAINE_ACTIVITE, $compteEntrepriseDomaineActivite, $comparison);
    }

    /**
     * Filter the query on the compte_inscrit_code_nic column
     *
     * Example usage:
     * <code>
     * $query->filterByCompteInscritCodeNic('fooValue');   // WHERE compte_inscrit_code_nic = 'fooValue'
     * $query->filterByCompteInscritCodeNic('%fooValue%'); // WHERE compte_inscrit_code_nic LIKE '%fooValue%'
     * </code>
     *
     * @param     string $compteInscritCodeNic The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByCompteInscritCodeNic($compteInscritCodeNic = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($compteInscritCodeNic)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $compteInscritCodeNic)) {
                $compteInscritCodeNic = str_replace('*', '%', $compteInscritCodeNic);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::COMPTE_INSCRIT_CODE_NIC, $compteInscritCodeNic, $comparison);
    }

    /**
     * Filter the query on the compte_entreprise_code_ape column
     *
     * Example usage:
     * <code>
     * $query->filterByCompteEntrepriseCodeApe('fooValue');   // WHERE compte_entreprise_code_ape = 'fooValue'
     * $query->filterByCompteEntrepriseCodeApe('%fooValue%'); // WHERE compte_entreprise_code_ape LIKE '%fooValue%'
     * </code>
     *
     * @param     string $compteEntrepriseCodeApe The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByCompteEntrepriseCodeApe($compteEntrepriseCodeApe = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($compteEntrepriseCodeApe)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $compteEntrepriseCodeApe)) {
                $compteEntrepriseCodeApe = str_replace('*', '%', $compteEntrepriseCodeApe);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CODE_APE, $compteEntrepriseCodeApe, $comparison);
    }

    /**
     * Filter the query on the compte_entreprise_documents_commerciaux column
     *
     * Example usage:
     * <code>
     * $query->filterByCompteEntrepriseDocumentsCommerciaux('fooValue');   // WHERE compte_entreprise_documents_commerciaux = 'fooValue'
     * $query->filterByCompteEntrepriseDocumentsCommerciaux('%fooValue%'); // WHERE compte_entreprise_documents_commerciaux LIKE '%fooValue%'
     * </code>
     *
     * @param     string $compteEntrepriseDocumentsCommerciaux The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByCompteEntrepriseDocumentsCommerciaux($compteEntrepriseDocumentsCommerciaux = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($compteEntrepriseDocumentsCommerciaux)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $compteEntrepriseDocumentsCommerciaux)) {
                $compteEntrepriseDocumentsCommerciaux = str_replace('*', '%', $compteEntrepriseDocumentsCommerciaux);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DOCUMENTS_COMMERCIAUX, $compteEntrepriseDocumentsCommerciaux, $comparison);
    }

    /**
     * Filter the query on the compte_entreprise_agrement column
     *
     * Example usage:
     * <code>
     * $query->filterByCompteEntrepriseAgrement('fooValue');   // WHERE compte_entreprise_agrement = 'fooValue'
     * $query->filterByCompteEntrepriseAgrement('%fooValue%'); // WHERE compte_entreprise_agrement LIKE '%fooValue%'
     * </code>
     *
     * @param     string $compteEntrepriseAgrement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByCompteEntrepriseAgrement($compteEntrepriseAgrement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($compteEntrepriseAgrement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $compteEntrepriseAgrement)) {
                $compteEntrepriseAgrement = str_replace('*', '%', $compteEntrepriseAgrement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_AGREMENT, $compteEntrepriseAgrement, $comparison);
    }

    /**
     * Filter the query on the compte_entreprise_moyens_humains column
     *
     * Example usage:
     * <code>
     * $query->filterByCompteEntrepriseMoyensHumains('fooValue');   // WHERE compte_entreprise_moyens_humains = 'fooValue'
     * $query->filterByCompteEntrepriseMoyensHumains('%fooValue%'); // WHERE compte_entreprise_moyens_humains LIKE '%fooValue%'
     * </code>
     *
     * @param     string $compteEntrepriseMoyensHumains The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByCompteEntrepriseMoyensHumains($compteEntrepriseMoyensHumains = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($compteEntrepriseMoyensHumains)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $compteEntrepriseMoyensHumains)) {
                $compteEntrepriseMoyensHumains = str_replace('*', '%', $compteEntrepriseMoyensHumains);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_MOYENS_HUMAINS, $compteEntrepriseMoyensHumains, $comparison);
    }

    /**
     * Filter the query on the compte_entreprise_activite_domaine_defense column
     *
     * Example usage:
     * <code>
     * $query->filterByCompteEntrepriseActiviteDomaineDefense('fooValue');   // WHERE compte_entreprise_activite_domaine_defense = 'fooValue'
     * $query->filterByCompteEntrepriseActiviteDomaineDefense('%fooValue%'); // WHERE compte_entreprise_activite_domaine_defense LIKE '%fooValue%'
     * </code>
     *
     * @param     string $compteEntrepriseActiviteDomaineDefense The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByCompteEntrepriseActiviteDomaineDefense($compteEntrepriseActiviteDomaineDefense = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($compteEntrepriseActiviteDomaineDefense)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $compteEntrepriseActiviteDomaineDefense)) {
                $compteEntrepriseActiviteDomaineDefense = str_replace('*', '%', $compteEntrepriseActiviteDomaineDefense);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_ACTIVITE_DOMAINE_DEFENSE, $compteEntrepriseActiviteDomaineDefense, $comparison);
    }

    /**
     * Filter the query on the compte_entreprise_donnees_financieres column
     *
     * Example usage:
     * <code>
     * $query->filterByCompteEntrepriseDonneesFinancieres('fooValue');   // WHERE compte_entreprise_donnees_financieres = 'fooValue'
     * $query->filterByCompteEntrepriseDonneesFinancieres('%fooValue%'); // WHERE compte_entreprise_donnees_financieres LIKE '%fooValue%'
     * </code>
     *
     * @param     string $compteEntrepriseDonneesFinancieres The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByCompteEntrepriseDonneesFinancieres($compteEntrepriseDonneesFinancieres = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($compteEntrepriseDonneesFinancieres)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $compteEntrepriseDonneesFinancieres)) {
                $compteEntrepriseDonneesFinancieres = str_replace('*', '%', $compteEntrepriseDonneesFinancieres);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DONNEES_FINANCIERES, $compteEntrepriseDonneesFinancieres, $comparison);
    }

    /**
     * Filter the query on the enveloppe_anonymat column
     *
     * Example usage:
     * <code>
     * $query->filterByEnveloppeAnonymat('fooValue');   // WHERE enveloppe_anonymat = 'fooValue'
     * $query->filterByEnveloppeAnonymat('%fooValue%'); // WHERE enveloppe_anonymat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $enveloppeAnonymat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByEnveloppeAnonymat($enveloppeAnonymat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($enveloppeAnonymat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $enveloppeAnonymat)) {
                $enveloppeAnonymat = str_replace('*', '%', $enveloppeAnonymat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::ENVELOPPE_ANONYMAT, $enveloppeAnonymat, $comparison);
    }

    /**
     * Filter the query on the publicite_format_xml column
     *
     * Example usage:
     * <code>
     * $query->filterByPubliciteFormatXml('fooValue');   // WHERE publicite_format_xml = 'fooValue'
     * $query->filterByPubliciteFormatXml('%fooValue%'); // WHERE publicite_format_xml LIKE '%fooValue%'
     * </code>
     *
     * @param     string $publiciteFormatXml The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByPubliciteFormatXml($publiciteFormatXml = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($publiciteFormatXml)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $publiciteFormatXml)) {
                $publiciteFormatXml = str_replace('*', '%', $publiciteFormatXml);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::PUBLICITE_FORMAT_XML, $publiciteFormatXml, $comparison);
    }

    /**
     * Filter the query on the article_133_generation_pf column
     *
     * Example usage:
     * <code>
     * $query->filterByArticle133GenerationPf('fooValue');   // WHERE article_133_generation_pf = 'fooValue'
     * $query->filterByArticle133GenerationPf('%fooValue%'); // WHERE article_133_generation_pf LIKE '%fooValue%'
     * </code>
     *
     * @param     string $article133GenerationPf The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByArticle133GenerationPf($article133GenerationPf = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($article133GenerationPf)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $article133GenerationPf)) {
                $article133GenerationPf = str_replace('*', '%', $article133GenerationPf);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::ARTICLE_133_GENERATION_PF, $article133GenerationPf, $comparison);
    }

    /**
     * Filter the query on the entreprise_repondre_consultation_apres_cloture column
     *
     * Example usage:
     * <code>
     * $query->filterByEntrepriseRepondreConsultationApresCloture('fooValue');   // WHERE entreprise_repondre_consultation_apres_cloture = 'fooValue'
     * $query->filterByEntrepriseRepondreConsultationApresCloture('%fooValue%'); // WHERE entreprise_repondre_consultation_apres_cloture LIKE '%fooValue%'
     * </code>
     *
     * @param     string $entrepriseRepondreConsultationApresCloture The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByEntrepriseRepondreConsultationApresCloture($entrepriseRepondreConsultationApresCloture = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($entrepriseRepondreConsultationApresCloture)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $entrepriseRepondreConsultationApresCloture)) {
                $entrepriseRepondreConsultationApresCloture = str_replace('*', '%', $entrepriseRepondreConsultationApresCloture);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::ENTREPRISE_REPONDRE_CONSULTATION_APRES_CLOTURE, $entrepriseRepondreConsultationApresCloture, $comparison);
    }

    /**
     * Filter the query on the telechargement_outil_verif_horodatage column
     *
     * Example usage:
     * <code>
     * $query->filterByTelechargementOutilVerifHorodatage('fooValue');   // WHERE telechargement_outil_verif_horodatage = 'fooValue'
     * $query->filterByTelechargementOutilVerifHorodatage('%fooValue%'); // WHERE telechargement_outil_verif_horodatage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telechargementOutilVerifHorodatage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByTelechargementOutilVerifHorodatage($telechargementOutilVerifHorodatage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telechargementOutilVerifHorodatage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telechargementOutilVerifHorodatage)) {
                $telechargementOutilVerifHorodatage = str_replace('*', '%', $telechargementOutilVerifHorodatage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::TELECHARGEMENT_OUTIL_VERIF_HORODATAGE, $telechargementOutilVerifHorodatage, $comparison);
    }

    /**
     * Filter the query on the affichage_code_cpv column
     *
     * Example usage:
     * <code>
     * $query->filterByAffichageCodeCpv('fooValue');   // WHERE affichage_code_cpv = 'fooValue'
     * $query->filterByAffichageCodeCpv('%fooValue%'); // WHERE affichage_code_cpv LIKE '%fooValue%'
     * </code>
     *
     * @param     string $affichageCodeCpv The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByAffichageCodeCpv($affichageCodeCpv = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($affichageCodeCpv)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $affichageCodeCpv)) {
                $affichageCodeCpv = str_replace('*', '%', $affichageCodeCpv);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::AFFICHAGE_CODE_CPV, $affichageCodeCpv, $comparison);
    }

    /**
     * Filter the query on the consultation_domaines_activites column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultationDomainesActivites('fooValue');   // WHERE consultation_domaines_activites = 'fooValue'
     * $query->filterByConsultationDomainesActivites('%fooValue%'); // WHERE consultation_domaines_activites LIKE '%fooValue%'
     * </code>
     *
     * @param     string $consultationDomainesActivites The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByConsultationDomainesActivites($consultationDomainesActivites = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($consultationDomainesActivites)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $consultationDomainesActivites)) {
                $consultationDomainesActivites = str_replace('*', '%', $consultationDomainesActivites);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::CONSULTATION_DOMAINES_ACTIVITES, $consultationDomainesActivites, $comparison);
    }

    /**
     * Filter the query on the statistiques_mesure_demat column
     *
     * Example usage:
     * <code>
     * $query->filterByStatistiquesMesureDemat('fooValue');   // WHERE statistiques_mesure_demat = 'fooValue'
     * $query->filterByStatistiquesMesureDemat('%fooValue%'); // WHERE statistiques_mesure_demat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $statistiquesMesureDemat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByStatistiquesMesureDemat($statistiquesMesureDemat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($statistiquesMesureDemat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $statistiquesMesureDemat)) {
                $statistiquesMesureDemat = str_replace('*', '%', $statistiquesMesureDemat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::STATISTIQUES_MESURE_DEMAT, $statistiquesMesureDemat, $comparison);
    }

    /**
     * Filter the query on the publication_procure column
     *
     * Example usage:
     * <code>
     * $query->filterByPublicationProcure('fooValue');   // WHERE publication_procure = 'fooValue'
     * $query->filterByPublicationProcure('%fooValue%'); // WHERE publication_procure LIKE '%fooValue%'
     * </code>
     *
     * @param     string $publicationProcure The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByPublicationProcure($publicationProcure = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($publicationProcure)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $publicationProcure)) {
                $publicationProcure = str_replace('*', '%', $publicationProcure);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::PUBLICATION_PROCURE, $publicationProcure, $comparison);
    }

    /**
     * Filter the query on the menu_entreprise_toutes_les_consultations column
     *
     * Example usage:
     * <code>
     * $query->filterByMenuEntrepriseToutesLesConsultations('fooValue');   // WHERE menu_entreprise_toutes_les_consultations = 'fooValue'
     * $query->filterByMenuEntrepriseToutesLesConsultations('%fooValue%'); // WHERE menu_entreprise_toutes_les_consultations LIKE '%fooValue%'
     * </code>
     *
     * @param     string $menuEntrepriseToutesLesConsultations The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByMenuEntrepriseToutesLesConsultations($menuEntrepriseToutesLesConsultations = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($menuEntrepriseToutesLesConsultations)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $menuEntrepriseToutesLesConsultations)) {
                $menuEntrepriseToutesLesConsultations = str_replace('*', '%', $menuEntrepriseToutesLesConsultations);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::MENU_ENTREPRISE_TOUTES_LES_CONSULTATIONS, $menuEntrepriseToutesLesConsultations, $comparison);
    }

    /**
     * Filter the query on the compte_entreprise_cp_obligatoire column
     *
     * Example usage:
     * <code>
     * $query->filterByCompteEntrepriseCpObligatoire('fooValue');   // WHERE compte_entreprise_cp_obligatoire = 'fooValue'
     * $query->filterByCompteEntrepriseCpObligatoire('%fooValue%'); // WHERE compte_entreprise_cp_obligatoire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $compteEntrepriseCpObligatoire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByCompteEntrepriseCpObligatoire($compteEntrepriseCpObligatoire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($compteEntrepriseCpObligatoire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $compteEntrepriseCpObligatoire)) {
                $compteEntrepriseCpObligatoire = str_replace('*', '%', $compteEntrepriseCpObligatoire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CP_OBLIGATOIRE, $compteEntrepriseCpObligatoire, $comparison);
    }

    /**
     * Filter the query on the annuler_depot column
     *
     * Example usage:
     * <code>
     * $query->filterByAnnulerDepot('fooValue');   // WHERE annuler_depot = 'fooValue'
     * $query->filterByAnnulerDepot('%fooValue%'); // WHERE annuler_depot LIKE '%fooValue%'
     * </code>
     *
     * @param     string $annulerDepot The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByAnnulerDepot($annulerDepot = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($annulerDepot)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $annulerDepot)) {
                $annulerDepot = str_replace('*', '%', $annulerDepot);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::ANNULER_DEPOT, $annulerDepot, $comparison);
    }

    /**
     * Filter the query on the traduire_entite_achat_arabe column
     *
     * Example usage:
     * <code>
     * $query->filterByTraduireEntiteAchatArabe('fooValue');   // WHERE traduire_entite_achat_arabe = 'fooValue'
     * $query->filterByTraduireEntiteAchatArabe('%fooValue%'); // WHERE traduire_entite_achat_arabe LIKE '%fooValue%'
     * </code>
     *
     * @param     string $traduireEntiteAchatArabe The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByTraduireEntiteAchatArabe($traduireEntiteAchatArabe = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($traduireEntiteAchatArabe)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $traduireEntiteAchatArabe)) {
                $traduireEntiteAchatArabe = str_replace('*', '%', $traduireEntiteAchatArabe);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::TRADUIRE_ENTITE_ACHAT_ARABE, $traduireEntiteAchatArabe, $comparison);
    }

    /**
     * Filter the query on the traduire_organisme_arabe column
     *
     * Example usage:
     * <code>
     * $query->filterByTraduireOrganismeArabe('fooValue');   // WHERE traduire_organisme_arabe = 'fooValue'
     * $query->filterByTraduireOrganismeArabe('%fooValue%'); // WHERE traduire_organisme_arabe LIKE '%fooValue%'
     * </code>
     *
     * @param     string $traduireOrganismeArabe The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByTraduireOrganismeArabe($traduireOrganismeArabe = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($traduireOrganismeArabe)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $traduireOrganismeArabe)) {
                $traduireOrganismeArabe = str_replace('*', '%', $traduireOrganismeArabe);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::TRADUIRE_ORGANISME_ARABE, $traduireOrganismeArabe, $comparison);
    }

    /**
     * Filter the query on the decision_cp column
     *
     * Example usage:
     * <code>
     * $query->filterByDecisionCp('fooValue');   // WHERE decision_cp = 'fooValue'
     * $query->filterByDecisionCp('%fooValue%'); // WHERE decision_cp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $decisionCp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByDecisionCp($decisionCp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($decisionCp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $decisionCp)) {
                $decisionCp = str_replace('*', '%', $decisionCp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::DECISION_CP, $decisionCp, $comparison);
    }

    /**
     * Filter the query on the decision_tranche_budgetaire column
     *
     * Example usage:
     * <code>
     * $query->filterByDecisionTrancheBudgetaire('fooValue');   // WHERE decision_tranche_budgetaire = 'fooValue'
     * $query->filterByDecisionTrancheBudgetaire('%fooValue%'); // WHERE decision_tranche_budgetaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $decisionTrancheBudgetaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByDecisionTrancheBudgetaire($decisionTrancheBudgetaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($decisionTrancheBudgetaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $decisionTrancheBudgetaire)) {
                $decisionTrancheBudgetaire = str_replace('*', '%', $decisionTrancheBudgetaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::DECISION_TRANCHE_BUDGETAIRE, $decisionTrancheBudgetaire, $comparison);
    }

    /**
     * Filter the query on the decision_classement column
     *
     * Example usage:
     * <code>
     * $query->filterByDecisionClassement('fooValue');   // WHERE decision_classement = 'fooValue'
     * $query->filterByDecisionClassement('%fooValue%'); // WHERE decision_classement LIKE '%fooValue%'
     * </code>
     *
     * @param     string $decisionClassement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByDecisionClassement($decisionClassement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($decisionClassement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $decisionClassement)) {
                $decisionClassement = str_replace('*', '%', $decisionClassement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::DECISION_CLASSEMENT, $decisionClassement, $comparison);
    }

    /**
     * Filter the query on the decision_afficher_detail_candidat_par_defaut column
     *
     * Example usage:
     * <code>
     * $query->filterByDecisionAfficherDetailCandidatParDefaut('fooValue');   // WHERE decision_afficher_detail_candidat_par_defaut = 'fooValue'
     * $query->filterByDecisionAfficherDetailCandidatParDefaut('%fooValue%'); // WHERE decision_afficher_detail_candidat_par_defaut LIKE '%fooValue%'
     * </code>
     *
     * @param     string $decisionAfficherDetailCandidatParDefaut The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByDecisionAfficherDetailCandidatParDefaut($decisionAfficherDetailCandidatParDefaut = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($decisionAfficherDetailCandidatParDefaut)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $decisionAfficherDetailCandidatParDefaut)) {
                $decisionAfficherDetailCandidatParDefaut = str_replace('*', '%', $decisionAfficherDetailCandidatParDefaut);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::DECISION_AFFICHER_DETAIL_CANDIDAT_PAR_DEFAUT, $decisionAfficherDetailCandidatParDefaut, $comparison);
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
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::ARTICLE_133_UPLOAD_FICHIER, $article133UploadFichier, $comparison);
    }

    /**
     * Filter the query on the multi_linguisme_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByMultiLinguismeAgent('fooValue');   // WHERE multi_linguisme_agent = 'fooValue'
     * $query->filterByMultiLinguismeAgent('%fooValue%'); // WHERE multi_linguisme_agent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $multiLinguismeAgent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByMultiLinguismeAgent($multiLinguismeAgent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($multiLinguismeAgent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $multiLinguismeAgent)) {
                $multiLinguismeAgent = str_replace('*', '%', $multiLinguismeAgent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::MULTI_LINGUISME_AGENT, $multiLinguismeAgent, $comparison);
    }

    /**
     * Filter the query on the compte_entreprise_ifu column
     *
     * Example usage:
     * <code>
     * $query->filterByCompteEntrepriseIfu('fooValue');   // WHERE compte_entreprise_ifu = 'fooValue'
     * $query->filterByCompteEntrepriseIfu('%fooValue%'); // WHERE compte_entreprise_ifu LIKE '%fooValue%'
     * </code>
     *
     * @param     string $compteEntrepriseIfu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByCompteEntrepriseIfu($compteEntrepriseIfu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($compteEntrepriseIfu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $compteEntrepriseIfu)) {
                $compteEntrepriseIfu = str_replace('*', '%', $compteEntrepriseIfu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_IFU, $compteEntrepriseIfu, $comparison);
    }

    /**
     * Filter the query on the gestion_organisme_par_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByGestionOrganismeParAgent('fooValue');   // WHERE gestion_organisme_par_agent = 'fooValue'
     * $query->filterByGestionOrganismeParAgent('%fooValue%'); // WHERE gestion_organisme_par_agent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gestionOrganismeParAgent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByGestionOrganismeParAgent($gestionOrganismeParAgent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gestionOrganismeParAgent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gestionOrganismeParAgent)) {
                $gestionOrganismeParAgent = str_replace('*', '%', $gestionOrganismeParAgent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::GESTION_ORGANISME_PAR_AGENT, $gestionOrganismeParAgent, $comparison);
    }

    /**
     * Filter the query on the utiliser_lucene column
     *
     * Example usage:
     * <code>
     * $query->filterByUtiliserLucene('fooValue');   // WHERE utiliser_lucene = 'fooValue'
     * $query->filterByUtiliserLucene('%fooValue%'); // WHERE utiliser_lucene LIKE '%fooValue%'
     * </code>
     *
     * @param     string $utiliserLucene The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByUtiliserLucene($utiliserLucene = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($utiliserLucene)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $utiliserLucene)) {
                $utiliserLucene = str_replace('*', '%', $utiliserLucene);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::UTILISER_LUCENE, $utiliserLucene, $comparison);
    }

    /**
     * Filter the query on the utiliser_page_html_lieux_execution column
     *
     * Example usage:
     * <code>
     * $query->filterByUtiliserPageHtmlLieuxExecution('fooValue');   // WHERE utiliser_page_html_lieux_execution = 'fooValue'
     * $query->filterByUtiliserPageHtmlLieuxExecution('%fooValue%'); // WHERE utiliser_page_html_lieux_execution LIKE '%fooValue%'
     * </code>
     *
     * @param     string $utiliserPageHtmlLieuxExecution The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByUtiliserPageHtmlLieuxExecution($utiliserPageHtmlLieuxExecution = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($utiliserPageHtmlLieuxExecution)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $utiliserPageHtmlLieuxExecution)) {
                $utiliserPageHtmlLieuxExecution = str_replace('*', '%', $utiliserPageHtmlLieuxExecution);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::UTILISER_PAGE_HTML_LIEUX_EXECUTION, $utiliserPageHtmlLieuxExecution, $comparison);
    }

    /**
     * Filter the query on the prado_validateur_format_date column
     *
     * Example usage:
     * <code>
     * $query->filterByPradoValidateurFormatDate('fooValue');   // WHERE prado_validateur_format_date = 'fooValue'
     * $query->filterByPradoValidateurFormatDate('%fooValue%'); // WHERE prado_validateur_format_date LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pradoValidateurFormatDate The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByPradoValidateurFormatDate($pradoValidateurFormatDate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pradoValidateurFormatDate)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pradoValidateurFormatDate)) {
                $pradoValidateurFormatDate = str_replace('*', '%', $pradoValidateurFormatDate);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::PRADO_VALIDATEUR_FORMAT_DATE, $pradoValidateurFormatDate, $comparison);
    }

    /**
     * Filter the query on the prado_validateur_format_email column
     *
     * Example usage:
     * <code>
     * $query->filterByPradoValidateurFormatEmail('fooValue');   // WHERE prado_validateur_format_email = 'fooValue'
     * $query->filterByPradoValidateurFormatEmail('%fooValue%'); // WHERE prado_validateur_format_email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pradoValidateurFormatEmail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByPradoValidateurFormatEmail($pradoValidateurFormatEmail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pradoValidateurFormatEmail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pradoValidateurFormatEmail)) {
                $pradoValidateurFormatEmail = str_replace('*', '%', $pradoValidateurFormatEmail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::PRADO_VALIDATEUR_FORMAT_EMAIL, $pradoValidateurFormatEmail, $comparison);
    }

    /**
     * Filter the query on the socle_externe_ppp column
     *
     * Example usage:
     * <code>
     * $query->filterBySocleExternePpp('fooValue');   // WHERE socle_externe_ppp = 'fooValue'
     * $query->filterBySocleExternePpp('%fooValue%'); // WHERE socle_externe_ppp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $socleExternePpp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterBySocleExternePpp($socleExternePpp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($socleExternePpp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $socleExternePpp)) {
                $socleExternePpp = str_replace('*', '%', $socleExternePpp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::SOCLE_EXTERNE_PPP, $socleExternePpp, $comparison);
    }

    /**
     * Filter the query on the validation_format_champs_stricte column
     *
     * Example usage:
     * <code>
     * $query->filterByValidationFormatChampsStricte('fooValue');   // WHERE validation_format_champs_stricte = 'fooValue'
     * $query->filterByValidationFormatChampsStricte('%fooValue%'); // WHERE validation_format_champs_stricte LIKE '%fooValue%'
     * </code>
     *
     * @param     string $validationFormatChampsStricte The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByValidationFormatChampsStricte($validationFormatChampsStricte = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($validationFormatChampsStricte)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $validationFormatChampsStricte)) {
                $validationFormatChampsStricte = str_replace('*', '%', $validationFormatChampsStricte);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::VALIDATION_FORMAT_CHAMPS_STRICTE, $validationFormatChampsStricte, $comparison);
    }

    /**
     * Filter the query on the poser_question_necessite_authentification column
     *
     * Example usage:
     * <code>
     * $query->filterByPoserQuestionNecessiteAuthentification('fooValue');   // WHERE poser_question_necessite_authentification = 'fooValue'
     * $query->filterByPoserQuestionNecessiteAuthentification('%fooValue%'); // WHERE poser_question_necessite_authentification LIKE '%fooValue%'
     * </code>
     *
     * @param     string $poserQuestionNecessiteAuthentification The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByPoserQuestionNecessiteAuthentification($poserQuestionNecessiteAuthentification = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($poserQuestionNecessiteAuthentification)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $poserQuestionNecessiteAuthentification)) {
                $poserQuestionNecessiteAuthentification = str_replace('*', '%', $poserQuestionNecessiteAuthentification);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::POSER_QUESTION_NECESSITE_AUTHENTIFICATION, $poserQuestionNecessiteAuthentification, $comparison);
    }

    /**
     * Filter the query on the autoriser_modif_profil_inscrit_ates column
     *
     * Example usage:
     * <code>
     * $query->filterByAutoriserModifProfilInscritAtes('fooValue');   // WHERE autoriser_modif_profil_inscrit_ates = 'fooValue'
     * $query->filterByAutoriserModifProfilInscritAtes('%fooValue%'); // WHERE autoriser_modif_profil_inscrit_ates LIKE '%fooValue%'
     * </code>
     *
     * @param     string $autoriserModifProfilInscritAtes The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByAutoriserModifProfilInscritAtes($autoriserModifProfilInscritAtes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($autoriserModifProfilInscritAtes)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $autoriserModifProfilInscritAtes)) {
                $autoriserModifProfilInscritAtes = str_replace('*', '%', $autoriserModifProfilInscritAtes);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::AUTORISER_MODIF_PROFIL_INSCRIT_ATES, $autoriserModifProfilInscritAtes, $comparison);
    }

    /**
     * Filter the query on the unicite_reference_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByUniciteReferenceConsultation('fooValue');   // WHERE unicite_reference_consultation = 'fooValue'
     * $query->filterByUniciteReferenceConsultation('%fooValue%'); // WHERE unicite_reference_consultation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $uniciteReferenceConsultation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByUniciteReferenceConsultation($uniciteReferenceConsultation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($uniciteReferenceConsultation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $uniciteReferenceConsultation)) {
                $uniciteReferenceConsultation = str_replace('*', '%', $uniciteReferenceConsultation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::UNICITE_REFERENCE_CONSULTATION, $uniciteReferenceConsultation, $comparison);
    }

    /**
     * Filter the query on the registre_papier_rcnum_rcville_obligatoires column
     *
     * Example usage:
     * <code>
     * $query->filterByRegistrePapierRcnumRcvilleObligatoires('fooValue');   // WHERE registre_papier_rcnum_rcville_obligatoires = 'fooValue'
     * $query->filterByRegistrePapierRcnumRcvilleObligatoires('%fooValue%'); // WHERE registre_papier_rcnum_rcville_obligatoires LIKE '%fooValue%'
     * </code>
     *
     * @param     string $registrePapierRcnumRcvilleObligatoires The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByRegistrePapierRcnumRcvilleObligatoires($registrePapierRcnumRcvilleObligatoires = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($registrePapierRcnumRcvilleObligatoires)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $registrePapierRcnumRcvilleObligatoires)) {
                $registrePapierRcnumRcvilleObligatoires = str_replace('*', '%', $registrePapierRcnumRcvilleObligatoires);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::REGISTRE_PAPIER_RCNUM_RCVILLE_OBLIGATOIRES, $registrePapierRcnumRcvilleObligatoires, $comparison);
    }

    /**
     * Filter the query on the registre_papier_adresse_cp_ville_obligatoires column
     *
     * Example usage:
     * <code>
     * $query->filterByRegistrePapierAdresseCpVilleObligatoires('fooValue');   // WHERE registre_papier_adresse_cp_ville_obligatoires = 'fooValue'
     * $query->filterByRegistrePapierAdresseCpVilleObligatoires('%fooValue%'); // WHERE registre_papier_adresse_cp_ville_obligatoires LIKE '%fooValue%'
     * </code>
     *
     * @param     string $registrePapierAdresseCpVilleObligatoires The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByRegistrePapierAdresseCpVilleObligatoires($registrePapierAdresseCpVilleObligatoires = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($registrePapierAdresseCpVilleObligatoires)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $registrePapierAdresseCpVilleObligatoires)) {
                $registrePapierAdresseCpVilleObligatoires = str_replace('*', '%', $registrePapierAdresseCpVilleObligatoires);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::REGISTRE_PAPIER_ADRESSE_CP_VILLE_OBLIGATOIRES, $registrePapierAdresseCpVilleObligatoires, $comparison);
    }

    /**
     * Filter the query on the telecharger_dce_sans_identification column
     *
     * Example usage:
     * <code>
     * $query->filterByTelechargerDceSansIdentification('fooValue');   // WHERE telecharger_dce_sans_identification = 'fooValue'
     * $query->filterByTelechargerDceSansIdentification('%fooValue%'); // WHERE telecharger_dce_sans_identification LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telechargerDceSansIdentification The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByTelechargerDceSansIdentification($telechargerDceSansIdentification = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telechargerDceSansIdentification)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telechargerDceSansIdentification)) {
                $telechargerDceSansIdentification = str_replace('*', '%', $telechargerDceSansIdentification);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::TELECHARGER_DCE_SANS_IDENTIFICATION, $telechargerDceSansIdentification, $comparison);
    }

    /**
     * Filter the query on the gestion_entreprise_par_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByGestionEntrepriseParAgent('fooValue');   // WHERE gestion_entreprise_par_agent = 'fooValue'
     * $query->filterByGestionEntrepriseParAgent('%fooValue%'); // WHERE gestion_entreprise_par_agent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gestionEntrepriseParAgent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByGestionEntrepriseParAgent($gestionEntrepriseParAgent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gestionEntrepriseParAgent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gestionEntrepriseParAgent)) {
                $gestionEntrepriseParAgent = str_replace('*', '%', $gestionEntrepriseParAgent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::GESTION_ENTREPRISE_PAR_AGENT, $gestionEntrepriseParAgent, $comparison);
    }

    /**
     * Filter the query on the autoriser_caracteres_speciaux_dans_reference column
     *
     * Example usage:
     * <code>
     * $query->filterByAutoriserCaracteresSpeciauxDansReference('fooValue');   // WHERE autoriser_caracteres_speciaux_dans_reference = 'fooValue'
     * $query->filterByAutoriserCaracteresSpeciauxDansReference('%fooValue%'); // WHERE autoriser_caracteres_speciaux_dans_reference LIKE '%fooValue%'
     * </code>
     *
     * @param     string $autoriserCaracteresSpeciauxDansReference The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByAutoriserCaracteresSpeciauxDansReference($autoriserCaracteresSpeciauxDansReference = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($autoriserCaracteresSpeciauxDansReference)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $autoriserCaracteresSpeciauxDansReference)) {
                $autoriserCaracteresSpeciauxDansReference = str_replace('*', '%', $autoriserCaracteresSpeciauxDansReference);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::AUTORISER_CARACTERES_SPECIAUX_DANS_REFERENCE, $autoriserCaracteresSpeciauxDansReference, $comparison);
    }

    /**
     * Filter the query on the inscription_libre_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByInscriptionLibreEntreprise('fooValue');   // WHERE inscription_libre_entreprise = 'fooValue'
     * $query->filterByInscriptionLibreEntreprise('%fooValue%'); // WHERE inscription_libre_entreprise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inscriptionLibreEntreprise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByInscriptionLibreEntreprise($inscriptionLibreEntreprise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inscriptionLibreEntreprise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $inscriptionLibreEntreprise)) {
                $inscriptionLibreEntreprise = str_replace('*', '%', $inscriptionLibreEntreprise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::INSCRIPTION_LIBRE_ENTREPRISE, $inscriptionLibreEntreprise, $comparison);
    }

    /**
     * Filter the query on the afficher_code_service column
     *
     * Example usage:
     * <code>
     * $query->filterByAfficherCodeService('fooValue');   // WHERE afficher_code_service = 'fooValue'
     * $query->filterByAfficherCodeService('%fooValue%'); // WHERE afficher_code_service LIKE '%fooValue%'
     * </code>
     *
     * @param     string $afficherCodeService The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByAfficherCodeService($afficherCodeService = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($afficherCodeService)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $afficherCodeService)) {
                $afficherCodeService = str_replace('*', '%', $afficherCodeService);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::AFFICHER_CODE_SERVICE, $afficherCodeService, $comparison);
    }

    /**
     * Filter the query on the authenticate_agent_by_login column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthenticateAgentByLogin('fooValue');   // WHERE authenticate_agent_by_login = 'fooValue'
     * $query->filterByAuthenticateAgentByLogin('%fooValue%'); // WHERE authenticate_agent_by_login LIKE '%fooValue%'
     * </code>
     *
     * @param     string $authenticateAgentByLogin The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByAuthenticateAgentByLogin($authenticateAgentByLogin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($authenticateAgentByLogin)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $authenticateAgentByLogin)) {
                $authenticateAgentByLogin = str_replace('*', '%', $authenticateAgentByLogin);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::AUTHENTICATE_AGENT_BY_LOGIN, $authenticateAgentByLogin, $comparison);
    }

    /**
     * Filter the query on the authenticate_agent_by_cert column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthenticateAgentByCert('fooValue');   // WHERE authenticate_agent_by_cert = 'fooValue'
     * $query->filterByAuthenticateAgentByCert('%fooValue%'); // WHERE authenticate_agent_by_cert LIKE '%fooValue%'
     * </code>
     *
     * @param     string $authenticateAgentByCert The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByAuthenticateAgentByCert($authenticateAgentByCert = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($authenticateAgentByCert)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $authenticateAgentByCert)) {
                $authenticateAgentByCert = str_replace('*', '%', $authenticateAgentByCert);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::AUTHENTICATE_AGENT_BY_CERT, $authenticateAgentByCert, $comparison);
    }

    /**
     * Filter the query on the generer_acte_dengagement column
     *
     * Example usage:
     * <code>
     * $query->filterByGenererActeDengagement('fooValue');   // WHERE generer_acte_dengagement = 'fooValue'
     * $query->filterByGenererActeDengagement('%fooValue%'); // WHERE generer_acte_dengagement LIKE '%fooValue%'
     * </code>
     *
     * @param     string $genererActeDengagement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByGenererActeDengagement($genererActeDengagement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($genererActeDengagement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $genererActeDengagement)) {
                $genererActeDengagement = str_replace('*', '%', $genererActeDengagement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::GENERER_ACTE_DENGAGEMENT, $genererActeDengagement, $comparison);
    }

    /**
     * Filter the query on the entreprise_controle_format_mot_de_passe column
     *
     * Example usage:
     * <code>
     * $query->filterByEntrepriseControleFormatMotDePasse('fooValue');   // WHERE entreprise_controle_format_mot_de_passe = 'fooValue'
     * $query->filterByEntrepriseControleFormatMotDePasse('%fooValue%'); // WHERE entreprise_controle_format_mot_de_passe LIKE '%fooValue%'
     * </code>
     *
     * @param     string $entrepriseControleFormatMotDePasse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByEntrepriseControleFormatMotDePasse($entrepriseControleFormatMotDePasse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($entrepriseControleFormatMotDePasse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $entrepriseControleFormatMotDePasse)) {
                $entrepriseControleFormatMotDePasse = str_replace('*', '%', $entrepriseControleFormatMotDePasse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::ENTREPRISE_CONTROLE_FORMAT_MOT_DE_PASSE, $entrepriseControleFormatMotDePasse, $comparison);
    }

    /**
     * Filter the query on the autre_annonce_information column
     *
     * Example usage:
     * <code>
     * $query->filterByAutreAnnonceInformation('fooValue');   // WHERE autre_annonce_information = 'fooValue'
     * $query->filterByAutreAnnonceInformation('%fooValue%'); // WHERE autre_annonce_information LIKE '%fooValue%'
     * </code>
     *
     * @param     string $autreAnnonceInformation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByAutreAnnonceInformation($autreAnnonceInformation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($autreAnnonceInformation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $autreAnnonceInformation)) {
                $autreAnnonceInformation = str_replace('*', '%', $autreAnnonceInformation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::AUTRE_ANNONCE_INFORMATION, $autreAnnonceInformation, $comparison);
    }

    /**
     * Filter the query on the creer_autre_annonce column
     *
     * Example usage:
     * <code>
     * $query->filterByCreerAutreAnnonce('fooValue');   // WHERE creer_autre_annonce = 'fooValue'
     * $query->filterByCreerAutreAnnonce('%fooValue%'); // WHERE creer_autre_annonce LIKE '%fooValue%'
     * </code>
     *
     * @param     string $creerAutreAnnonce The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByCreerAutreAnnonce($creerAutreAnnonce = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($creerAutreAnnonce)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $creerAutreAnnonce)) {
                $creerAutreAnnonce = str_replace('*', '%', $creerAutreAnnonce);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::CREER_AUTRE_ANNONCE, $creerAutreAnnonce, $comparison);
    }

    /**
     * Filter the query on the consultation_clause column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultationClause('fooValue');   // WHERE consultation_clause = 'fooValue'
     * $query->filterByConsultationClause('%fooValue%'); // WHERE consultation_clause LIKE '%fooValue%'
     * </code>
     *
     * @param     string $consultationClause The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByConsultationClause($consultationClause = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($consultationClause)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $consultationClause)) {
                $consultationClause = str_replace('*', '%', $consultationClause);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::CONSULTATION_CLAUSE, $consultationClause, $comparison);
    }

    /**
     * Filter the query on the panier_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByPanierEntreprise('fooValue');   // WHERE panier_entreprise = 'fooValue'
     * $query->filterByPanierEntreprise('%fooValue%'); // WHERE panier_entreprise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $panierEntreprise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByPanierEntreprise($panierEntreprise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($panierEntreprise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $panierEntreprise)) {
                $panierEntreprise = str_replace('*', '%', $panierEntreprise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::PANIER_ENTREPRISE, $panierEntreprise, $comparison);
    }

    /**
     * Filter the query on the parametrage_publicite_par_type_procedure column
     *
     * Example usage:
     * <code>
     * $query->filterByParametragePubliciteParTypeProcedure('fooValue');   // WHERE parametrage_publicite_par_type_procedure = 'fooValue'
     * $query->filterByParametragePubliciteParTypeProcedure('%fooValue%'); // WHERE parametrage_publicite_par_type_procedure LIKE '%fooValue%'
     * </code>
     *
     * @param     string $parametragePubliciteParTypeProcedure The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByParametragePubliciteParTypeProcedure($parametragePubliciteParTypeProcedure = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($parametragePubliciteParTypeProcedure)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $parametragePubliciteParTypeProcedure)) {
                $parametragePubliciteParTypeProcedure = str_replace('*', '%', $parametragePubliciteParTypeProcedure);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::PARAMETRAGE_PUBLICITE_PAR_TYPE_PROCEDURE, $parametragePubliciteParTypeProcedure, $comparison);
    }

    /**
     * Filter the query on the export_decision column
     *
     * Example usage:
     * <code>
     * $query->filterByExportDecision('fooValue');   // WHERE export_decision = 'fooValue'
     * $query->filterByExportDecision('%fooValue%'); // WHERE export_decision LIKE '%fooValue%'
     * </code>
     *
     * @param     string $exportDecision The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByExportDecision($exportDecision = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($exportDecision)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $exportDecision)) {
                $exportDecision = str_replace('*', '%', $exportDecision);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::EXPORT_DECISION, $exportDecision, $comparison);
    }

    /**
     * Filter the query on the lieu_ouverture_plis_obligatoire column
     *
     * Example usage:
     * <code>
     * $query->filterByLieuOuverturePlisObligatoire('fooValue');   // WHERE lieu_ouverture_plis_obligatoire = 'fooValue'
     * $query->filterByLieuOuverturePlisObligatoire('%fooValue%'); // WHERE lieu_ouverture_plis_obligatoire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lieuOuverturePlisObligatoire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByLieuOuverturePlisObligatoire($lieuOuverturePlisObligatoire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lieuOuverturePlisObligatoire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lieuOuverturePlisObligatoire)) {
                $lieuOuverturePlisObligatoire = str_replace('*', '%', $lieuOuverturePlisObligatoire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::LIEU_OUVERTURE_PLIS_OBLIGATOIRE, $lieuOuverturePlisObligatoire, $comparison);
    }

    /**
     * Filter the query on the regle_mise_en_ligne_par_entite_coordinatrice column
     *
     * Example usage:
     * <code>
     * $query->filterByRegleMiseEnLigneParEntiteCoordinatrice('fooValue');   // WHERE regle_mise_en_ligne_par_entite_coordinatrice = 'fooValue'
     * $query->filterByRegleMiseEnLigneParEntiteCoordinatrice('%fooValue%'); // WHERE regle_mise_en_ligne_par_entite_coordinatrice LIKE '%fooValue%'
     * </code>
     *
     * @param     string $regleMiseEnLigneParEntiteCoordinatrice The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByRegleMiseEnLigneParEntiteCoordinatrice($regleMiseEnLigneParEntiteCoordinatrice = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($regleMiseEnLigneParEntiteCoordinatrice)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $regleMiseEnLigneParEntiteCoordinatrice)) {
                $regleMiseEnLigneParEntiteCoordinatrice = str_replace('*', '%', $regleMiseEnLigneParEntiteCoordinatrice);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::REGLE_MISE_EN_LIGNE_PAR_ENTITE_COORDINATRICE, $regleMiseEnLigneParEntiteCoordinatrice, $comparison);
    }

    /**
     * Filter the query on the gestion_newsletter column
     *
     * Example usage:
     * <code>
     * $query->filterByGestionNewsletter('fooValue');   // WHERE gestion_newsletter = 'fooValue'
     * $query->filterByGestionNewsletter('%fooValue%'); // WHERE gestion_newsletter LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gestionNewsletter The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByGestionNewsletter($gestionNewsletter = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gestionNewsletter)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gestionNewsletter)) {
                $gestionNewsletter = str_replace('*', '%', $gestionNewsletter);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::GESTION_NEWSLETTER, $gestionNewsletter, $comparison);
    }

    /**
     * Filter the query on the publicite_opoce column
     *
     * Example usage:
     * <code>
     * $query->filterByPubliciteOpoce('fooValue');   // WHERE publicite_opoce = 'fooValue'
     * $query->filterByPubliciteOpoce('%fooValue%'); // WHERE publicite_opoce LIKE '%fooValue%'
     * </code>
     *
     * @param     string $publiciteOpoce The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByPubliciteOpoce($publiciteOpoce = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($publiciteOpoce)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $publiciteOpoce)) {
                $publiciteOpoce = str_replace('*', '%', $publiciteOpoce);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::PUBLICITE_OPOCE, $publiciteOpoce, $comparison);
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
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::GESTION_MODELES_FORMULAIRE, $gestionModelesFormulaire, $comparison);
    }

    /**
     * Filter the query on the gestion_adresses_facturation_JAL column
     *
     * Example usage:
     * <code>
     * $query->filterByGestionAdressesFacturationJal('fooValue');   // WHERE gestion_adresses_facturation_JAL = 'fooValue'
     * $query->filterByGestionAdressesFacturationJal('%fooValue%'); // WHERE gestion_adresses_facturation_JAL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gestionAdressesFacturationJal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::GESTION_ADRESSES_FACTURATION_JAL, $gestionAdressesFacturationJal, $comparison);
    }

    /**
     * Filter the query on the publicite_marches_en_ligne column
     *
     * Example usage:
     * <code>
     * $query->filterByPubliciteMarchesEnLigne('fooValue');   // WHERE publicite_marches_en_ligne = 'fooValue'
     * $query->filterByPubliciteMarchesEnLigne('%fooValue%'); // WHERE publicite_marches_en_ligne LIKE '%fooValue%'
     * </code>
     *
     * @param     string $publiciteMarchesEnLigne The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByPubliciteMarchesEnLigne($publiciteMarchesEnLigne = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($publiciteMarchesEnLigne)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $publiciteMarchesEnLigne)) {
                $publiciteMarchesEnLigne = str_replace('*', '%', $publiciteMarchesEnLigne);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::PUBLICITE_MARCHES_EN_LIGNE, $publiciteMarchesEnLigne, $comparison);
    }

    /**
     * Filter the query on the dossier_additif column
     *
     * Example usage:
     * <code>
     * $query->filterByDossierAdditif('fooValue');   // WHERE dossier_additif = 'fooValue'
     * $query->filterByDossierAdditif('%fooValue%'); // WHERE dossier_additif LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dossierAdditif The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByDossierAdditif($dossierAdditif = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dossierAdditif)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dossierAdditif)) {
                $dossierAdditif = str_replace('*', '%', $dossierAdditif);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::DOSSIER_ADDITIF, $dossierAdditif, $comparison);
    }

    /**
     * Filter the query on the type_marche column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeMarche('fooValue');   // WHERE type_marche = 'fooValue'
     * $query->filterByTypeMarche('%fooValue%'); // WHERE type_marche LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeMarche The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByTypeMarche($typeMarche = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeMarche)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeMarche)) {
                $typeMarche = str_replace('*', '%', $typeMarche);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::TYPE_MARCHE, $typeMarche, $comparison);
    }

    /**
     * Filter the query on the type_prestation column
     *
     * Example usage:
     * <code>
     * $query->filterByTypePrestation('fooValue');   // WHERE type_prestation = 'fooValue'
     * $query->filterByTypePrestation('%fooValue%'); // WHERE type_prestation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typePrestation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByTypePrestation($typePrestation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typePrestation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typePrestation)) {
                $typePrestation = str_replace('*', '%', $typePrestation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::TYPE_PRESTATION, $typePrestation, $comparison);
    }

    /**
     * Filter the query on the afficher_tjr_bloc_caracteristique_reponse column
     *
     * Example usage:
     * <code>
     * $query->filterByAfficherTjrBlocCaracteristiqueReponse('fooValue');   // WHERE afficher_tjr_bloc_caracteristique_reponse = 'fooValue'
     * $query->filterByAfficherTjrBlocCaracteristiqueReponse('%fooValue%'); // WHERE afficher_tjr_bloc_caracteristique_reponse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $afficherTjrBlocCaracteristiqueReponse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByAfficherTjrBlocCaracteristiqueReponse($afficherTjrBlocCaracteristiqueReponse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($afficherTjrBlocCaracteristiqueReponse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $afficherTjrBlocCaracteristiqueReponse)) {
                $afficherTjrBlocCaracteristiqueReponse = str_replace('*', '%', $afficherTjrBlocCaracteristiqueReponse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::AFFICHER_TJR_BLOC_CARACTERISTIQUE_REPONSE, $afficherTjrBlocCaracteristiqueReponse, $comparison);
    }

    /**
     * Filter the query on the alerte_metier column
     *
     * Example usage:
     * <code>
     * $query->filterByAlerteMetier('fooValue');   // WHERE alerte_metier = 'fooValue'
     * $query->filterByAlerteMetier('%fooValue%'); // WHERE alerte_metier LIKE '%fooValue%'
     * </code>
     *
     * @param     string $alerteMetier The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByAlerteMetier($alerteMetier = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($alerteMetier)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $alerteMetier)) {
                $alerteMetier = str_replace('*', '%', $alerteMetier);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::ALERTE_METIER, $alerteMetier, $comparison);
    }

    /**
     * Filter the query on the bourse_a_la_sous_traitance column
     *
     * Example usage:
     * <code>
     * $query->filterByBourseALaSousTraitance('fooValue');   // WHERE bourse_a_la_sous_traitance = 'fooValue'
     * $query->filterByBourseALaSousTraitance('%fooValue%'); // WHERE bourse_a_la_sous_traitance LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bourseALaSousTraitance The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByBourseALaSousTraitance($bourseALaSousTraitance = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bourseALaSousTraitance)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bourseALaSousTraitance)) {
                $bourseALaSousTraitance = str_replace('*', '%', $bourseALaSousTraitance);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::BOURSE_A_LA_SOUS_TRAITANCE, $bourseALaSousTraitance, $comparison);
    }

    /**
     * Filter the query on the publier_guides column
     *
     * Example usage:
     * <code>
     * $query->filterByPublierGuides('fooValue');   // WHERE publier_guides = 'fooValue'
     * $query->filterByPublierGuides('%fooValue%'); // WHERE publier_guides LIKE '%fooValue%'
     * </code>
     *
     * @param     string $publierGuides The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByPublierGuides($publierGuides = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($publierGuides)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $publierGuides)) {
                $publierGuides = str_replace('*', '%', $publierGuides);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::PUBLIER_GUIDES, $publierGuides, $comparison);
    }

    /**
     * Filter the query on the recherche_auto_completion column
     *
     * Example usage:
     * <code>
     * $query->filterByRechercheAutoCompletion('fooValue');   // WHERE recherche_auto_completion = 'fooValue'
     * $query->filterByRechercheAutoCompletion('%fooValue%'); // WHERE recherche_auto_completion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rechercheAutoCompletion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByRechercheAutoCompletion($rechercheAutoCompletion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rechercheAutoCompletion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rechercheAutoCompletion)) {
                $rechercheAutoCompletion = str_replace('*', '%', $rechercheAutoCompletion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::RECHERCHE_AUTO_COMPLETION, $rechercheAutoCompletion, $comparison);
    }

    /**
     * Filter the query on the statut_compte_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByStatutCompteEntreprise('fooValue');   // WHERE statut_compte_entreprise = 'fooValue'
     * $query->filterByStatutCompteEntreprise('%fooValue%'); // WHERE statut_compte_entreprise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $statutCompteEntreprise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByStatutCompteEntreprise($statutCompteEntreprise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($statutCompteEntreprise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $statutCompteEntreprise)) {
                $statutCompteEntreprise = str_replace('*', '%', $statutCompteEntreprise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::STATUT_COMPTE_ENTREPRISE, $statutCompteEntreprise, $comparison);
    }

    /**
     * Filter the query on the gestion_organismes column
     *
     * Example usage:
     * <code>
     * $query->filterByGestionOrganismes('fooValue');   // WHERE gestion_organismes = 'fooValue'
     * $query->filterByGestionOrganismes('%fooValue%'); // WHERE gestion_organismes LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gestionOrganismes The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByGestionOrganismes($gestionOrganismes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gestionOrganismes)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gestionOrganismes)) {
                $gestionOrganismes = str_replace('*', '%', $gestionOrganismes);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::GESTION_ORGANISMES, $gestionOrganismes, $comparison);
    }

    /**
     * Filter the query on the accueil_entreprise_personnalise column
     *
     * Example usage:
     * <code>
     * $query->filterByAccueilEntreprisePersonnalise('fooValue');   // WHERE accueil_entreprise_personnalise = 'fooValue'
     * $query->filterByAccueilEntreprisePersonnalise('%fooValue%'); // WHERE accueil_entreprise_personnalise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $accueilEntreprisePersonnalise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByAccueilEntreprisePersonnalise($accueilEntreprisePersonnalise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($accueilEntreprisePersonnalise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $accueilEntreprisePersonnalise)) {
                $accueilEntreprisePersonnalise = str_replace('*', '%', $accueilEntreprisePersonnalise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::ACCUEIL_ENTREPRISE_PERSONNALISE, $accueilEntreprisePersonnalise, $comparison);
    }

    /**
     * Filter the query on the interface_module_sub column
     *
     * Example usage:
     * <code>
     * $query->filterByInterfaceModuleSub('fooValue');   // WHERE interface_module_sub = 'fooValue'
     * $query->filterByInterfaceModuleSub('%fooValue%'); // WHERE interface_module_sub LIKE '%fooValue%'
     * </code>
     *
     * @param     string $interfaceModuleSub The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByInterfaceModuleSub($interfaceModuleSub = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($interfaceModuleSub)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $interfaceModuleSub)) {
                $interfaceModuleSub = str_replace('*', '%', $interfaceModuleSub);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::INTERFACE_MODULE_SUB, $interfaceModuleSub, $comparison);
    }

    /**
     * Filter the query on the authentification_agent_multi_organismes column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthentificationAgentMultiOrganismes('fooValue');   // WHERE authentification_agent_multi_organismes = 'fooValue'
     * $query->filterByAuthentificationAgentMultiOrganismes('%fooValue%'); // WHERE authentification_agent_multi_organismes LIKE '%fooValue%'
     * </code>
     *
     * @param     string $authentificationAgentMultiOrganismes The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByAuthentificationAgentMultiOrganismes($authentificationAgentMultiOrganismes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($authentificationAgentMultiOrganismes)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $authentificationAgentMultiOrganismes)) {
                $authentificationAgentMultiOrganismes = str_replace('*', '%', $authentificationAgentMultiOrganismes);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::AUTHENTIFICATION_AGENT_MULTI_ORGANISMES, $authentificationAgentMultiOrganismes, $comparison);
    }

    /**
     * Filter the query on the partager_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByPartagerConsultation('fooValue');   // WHERE partager_consultation = 'fooValue'
     * $query->filterByPartagerConsultation('%fooValue%'); // WHERE partager_consultation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $partagerConsultation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByPartagerConsultation($partagerConsultation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($partagerConsultation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $partagerConsultation)) {
                $partagerConsultation = str_replace('*', '%', $partagerConsultation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::PARTAGER_CONSULTATION, $partagerConsultation, $comparison);
    }

    /**
     * Filter the query on the annuaire_acheteurs_publics column
     *
     * Example usage:
     * <code>
     * $query->filterByAnnuaireAcheteursPublics('fooValue');   // WHERE annuaire_acheteurs_publics = 'fooValue'
     * $query->filterByAnnuaireAcheteursPublics('%fooValue%'); // WHERE annuaire_acheteurs_publics LIKE '%fooValue%'
     * </code>
     *
     * @param     string $annuaireAcheteursPublics The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByAnnuaireAcheteursPublics($annuaireAcheteursPublics = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($annuaireAcheteursPublics)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $annuaireAcheteursPublics)) {
                $annuaireAcheteursPublics = str_replace('*', '%', $annuaireAcheteursPublics);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::ANNUAIRE_ACHETEURS_PUBLICS, $annuaireAcheteursPublics, $comparison);
    }

    /**
     * Filter the query on the entreprise_actions_groupees column
     *
     * Example usage:
     * <code>
     * $query->filterByEntrepriseActionsGroupees('fooValue');   // WHERE entreprise_actions_groupees = 'fooValue'
     * $query->filterByEntrepriseActionsGroupees('%fooValue%'); // WHERE entreprise_actions_groupees LIKE '%fooValue%'
     * </code>
     *
     * @param     string $entrepriseActionsGroupees The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByEntrepriseActionsGroupees($entrepriseActionsGroupees = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($entrepriseActionsGroupees)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $entrepriseActionsGroupees)) {
                $entrepriseActionsGroupees = str_replace('*', '%', $entrepriseActionsGroupees);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::ENTREPRISE_ACTIONS_GROUPEES, $entrepriseActionsGroupees, $comparison);
    }

    /**
     * Filter the query on the lieux_execution_carte column
     *
     * Example usage:
     * <code>
     * $query->filterByLieuxExecutionCarte('fooValue');   // WHERE lieux_execution_carte = 'fooValue'
     * $query->filterByLieuxExecutionCarte('%fooValue%'); // WHERE lieux_execution_carte LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lieuxExecutionCarte The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByLieuxExecutionCarte($lieuxExecutionCarte = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lieuxExecutionCarte)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lieuxExecutionCarte)) {
                $lieuxExecutionCarte = str_replace('*', '%', $lieuxExecutionCarte);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::LIEUX_EXECUTION_CARTE, $lieuxExecutionCarte, $comparison);
    }

    /**
     * Filter the query on the surcharge_referentiels column
     *
     * Example usage:
     * <code>
     * $query->filterBySurchargeReferentiels('fooValue');   // WHERE surcharge_referentiels = 'fooValue'
     * $query->filterBySurchargeReferentiels('%fooValue%'); // WHERE surcharge_referentiels LIKE '%fooValue%'
     * </code>
     *
     * @param     string $surchargeReferentiels The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterBySurchargeReferentiels($surchargeReferentiels = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($surchargeReferentiels)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $surchargeReferentiels)) {
                $surchargeReferentiels = str_replace('*', '%', $surchargeReferentiels);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::SURCHARGE_REFERENTIELS, $surchargeReferentiels, $comparison);
    }

    /**
     * Filter the query on the Mode_Restriction_RGS column
     *
     * Example usage:
     * <code>
     * $query->filterByModeRestrictionRgs('fooValue');   // WHERE Mode_Restriction_RGS = 'fooValue'
     * $query->filterByModeRestrictionRgs('%fooValue%'); // WHERE Mode_Restriction_RGS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $modeRestrictionRgs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByModeRestrictionRgs($modeRestrictionRgs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modeRestrictionRgs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $modeRestrictionRgs)) {
                $modeRestrictionRgs = str_replace('*', '%', $modeRestrictionRgs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::MODE_RESTRICTION_RGS, $modeRestrictionRgs, $comparison);
    }

    /**
     * Filter the query on the autre_annonce_decision_resiliation column
     *
     * Example usage:
     * <code>
     * $query->filterByAutreAnnonceDecisionResiliation('fooValue');   // WHERE autre_annonce_decision_resiliation = 'fooValue'
     * $query->filterByAutreAnnonceDecisionResiliation('%fooValue%'); // WHERE autre_annonce_decision_resiliation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $autreAnnonceDecisionResiliation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByAutreAnnonceDecisionResiliation($autreAnnonceDecisionResiliation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($autreAnnonceDecisionResiliation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $autreAnnonceDecisionResiliation)) {
                $autreAnnonceDecisionResiliation = str_replace('*', '%', $autreAnnonceDecisionResiliation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::AUTRE_ANNONCE_DECISION_RESILIATION, $autreAnnonceDecisionResiliation, $comparison);
    }

    /**
     * Filter the query on the autre_annonce_synthese_rapport_audit column
     *
     * Example usage:
     * <code>
     * $query->filterByAutreAnnonceSyntheseRapportAudit('fooValue');   // WHERE autre_annonce_synthese_rapport_audit = 'fooValue'
     * $query->filterByAutreAnnonceSyntheseRapportAudit('%fooValue%'); // WHERE autre_annonce_synthese_rapport_audit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $autreAnnonceSyntheseRapportAudit The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByAutreAnnonceSyntheseRapportAudit($autreAnnonceSyntheseRapportAudit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($autreAnnonceSyntheseRapportAudit)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $autreAnnonceSyntheseRapportAudit)) {
                $autreAnnonceSyntheseRapportAudit = str_replace('*', '%', $autreAnnonceSyntheseRapportAudit);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::AUTRE_ANNONCE_SYNTHESE_RAPPORT_AUDIT, $autreAnnonceSyntheseRapportAudit, $comparison);
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
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::FICHE_WEKA, $ficheWeka, $comparison);
    }

    /**
     * Filter the query on the generation_automatique_mdp_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByGenerationAutomatiqueMdpAgent('fooValue');   // WHERE generation_automatique_mdp_agent = 'fooValue'
     * $query->filterByGenerationAutomatiqueMdpAgent('%fooValue%'); // WHERE generation_automatique_mdp_agent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $generationAutomatiqueMdpAgent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByGenerationAutomatiqueMdpAgent($generationAutomatiqueMdpAgent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($generationAutomatiqueMdpAgent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $generationAutomatiqueMdpAgent)) {
                $generationAutomatiqueMdpAgent = str_replace('*', '%', $generationAutomatiqueMdpAgent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::GENERATION_AUTOMATIQUE_MDP_AGENT, $generationAutomatiqueMdpAgent, $comparison);
    }

    /**
     * Filter the query on the generation_automatique_mdp_inscrit column
     *
     * Example usage:
     * <code>
     * $query->filterByGenerationAutomatiqueMdpInscrit('fooValue');   // WHERE generation_automatique_mdp_inscrit = 'fooValue'
     * $query->filterByGenerationAutomatiqueMdpInscrit('%fooValue%'); // WHERE generation_automatique_mdp_inscrit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $generationAutomatiqueMdpInscrit The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByGenerationAutomatiqueMdpInscrit($generationAutomatiqueMdpInscrit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($generationAutomatiqueMdpInscrit)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $generationAutomatiqueMdpInscrit)) {
                $generationAutomatiqueMdpInscrit = str_replace('*', '%', $generationAutomatiqueMdpInscrit);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::GENERATION_AUTOMATIQUE_MDP_INSCRIT, $generationAutomatiqueMdpInscrit, $comparison);
    }

    /**
     * Filter the query on the liste_ac_rgs column
     *
     * Example usage:
     * <code>
     * $query->filterByListeAcRgs('fooValue');   // WHERE liste_ac_rgs = 'fooValue'
     * $query->filterByListeAcRgs('%fooValue%'); // WHERE liste_ac_rgs LIKE '%fooValue%'
     * </code>
     *
     * @param     string $listeAcRgs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByListeAcRgs($listeAcRgs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($listeAcRgs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $listeAcRgs)) {
                $listeAcRgs = str_replace('*', '%', $listeAcRgs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::LISTE_AC_RGS, $listeAcRgs, $comparison);
    }

    /**
     * Filter the query on the liste_cons_org column
     *
     * Example usage:
     * <code>
     * $query->filterByListeConsOrg('fooValue');   // WHERE liste_cons_org = 'fooValue'
     * $query->filterByListeConsOrg('%fooValue%'); // WHERE liste_cons_org LIKE '%fooValue%'
     * </code>
     *
     * @param     string $listeConsOrg The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByListeConsOrg($listeConsOrg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($listeConsOrg)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $listeConsOrg)) {
                $listeConsOrg = str_replace('*', '%', $listeConsOrg);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::LISTE_CONS_ORG, $listeConsOrg, $comparison);
    }

    /**
     * Filter the query on the marche_public_simplifie_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByMarchePublicSimplifieEntreprise('fooValue');   // WHERE marche_public_simplifie_entreprise = 'fooValue'
     * $query->filterByMarchePublicSimplifieEntreprise('%fooValue%'); // WHERE marche_public_simplifie_entreprise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $marchePublicSimplifieEntreprise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByMarchePublicSimplifieEntreprise($marchePublicSimplifieEntreprise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($marchePublicSimplifieEntreprise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $marchePublicSimplifieEntreprise)) {
                $marchePublicSimplifieEntreprise = str_replace('*', '%', $marchePublicSimplifieEntreprise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::MARCHE_PUBLIC_SIMPLIFIE_ENTREPRISE, $marchePublicSimplifieEntreprise, $comparison);
    }

    /**
     * Filter the query on the demande_validation_controleur column
     *
     * Example usage:
     * <code>
     * $query->filterByDemandeValidationControleur('fooValue');   // WHERE demande_validation_controleur = 'fooValue'
     * $query->filterByDemandeValidationControleur('%fooValue%'); // WHERE demande_validation_controleur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $demandeValidationControleur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByDemandeValidationControleur($demandeValidationControleur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($demandeValidationControleur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $demandeValidationControleur)) {
                $demandeValidationControleur = str_replace('*', '%', $demandeValidationControleur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::DEMANDE_VALIDATION_CONTROLEUR, $demandeValidationControleur, $comparison);
    }

    /**
     * Filter the query on the acces_exec_contrats column
     *
     * Example usage:
     * <code>
     * $query->filterByAccesExecContrats('fooValue');   // WHERE acces_exec_contrats = 'fooValue'
     * $query->filterByAccesExecContrats('%fooValue%'); // WHERE acces_exec_contrats LIKE '%fooValue%'
     * </code>
     *
     * @param     string $accesExecContrats The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByAccesExecContrats($accesExecContrats = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($accesExecContrats)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $accesExecContrats)) {
                $accesExecContrats = str_replace('*', '%', $accesExecContrats);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::ACCES_EXEC_CONTRATS, $accesExecContrats, $comparison);
    }

    /**
     * Filter the query on the forme_juridique_groupement_attributaire column
     *
     * Example usage:
     * <code>
     * $query->filterByFormeJuridiqueGroupementAttributaire('fooValue');   // WHERE forme_juridique_groupement_attributaire = 'fooValue'
     * $query->filterByFormeJuridiqueGroupementAttributaire('%fooValue%'); // WHERE forme_juridique_groupement_attributaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $formeJuridiqueGroupementAttributaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByFormeJuridiqueGroupementAttributaire($formeJuridiqueGroupementAttributaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($formeJuridiqueGroupementAttributaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $formeJuridiqueGroupementAttributaire)) {
                $formeJuridiqueGroupementAttributaire = str_replace('*', '%', $formeJuridiqueGroupementAttributaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::FORME_JURIDIQUE_GROUPEMENT_ATTRIBUTAIRE, $formeJuridiqueGroupementAttributaire, $comparison);
    }

    /**
     * Filter the query on the date_limite_remise_plis_obligatoire column
     *
     * Example usage:
     * <code>
     * $query->filterByDateLimiteRemisePlisObligatoire('fooValue');   // WHERE date_limite_remise_plis_obligatoire = 'fooValue'
     * $query->filterByDateLimiteRemisePlisObligatoire('%fooValue%'); // WHERE date_limite_remise_plis_obligatoire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateLimiteRemisePlisObligatoire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByDateLimiteRemisePlisObligatoire($dateLimiteRemisePlisObligatoire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateLimiteRemisePlisObligatoire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateLimiteRemisePlisObligatoire)) {
                $dateLimiteRemisePlisObligatoire = str_replace('*', '%', $dateLimiteRemisePlisObligatoire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::DATE_LIMITE_REMISE_PLIS_OBLIGATOIRE, $dateLimiteRemisePlisObligatoire, $comparison);
    }

    /**
     * Filter the query on the modif_type_procedure column
     *
     * Example usage:
     * <code>
     * $query->filterByModifTypeProcedure('fooValue');   // WHERE modif_type_procedure = 'fooValue'
     * $query->filterByModifTypeProcedure('%fooValue%'); // WHERE modif_type_procedure LIKE '%fooValue%'
     * </code>
     *
     * @param     string $modifTypeProcedure The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByModifTypeProcedure($modifTypeProcedure = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifTypeProcedure)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $modifTypeProcedure)) {
                $modifTypeProcedure = str_replace('*', '%', $modifTypeProcedure);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::MODIF_TYPE_PROCEDURE, $modifTypeProcedure, $comparison);
    }

    /**
     * Filter the query on the donnees_complementaires_procedure column
     *
     * Example usage:
     * <code>
     * $query->filterByDonneesComplementairesProcedure('fooValue');   // WHERE donnees_complementaires_procedure = 'fooValue'
     * $query->filterByDonneesComplementairesProcedure('%fooValue%'); // WHERE donnees_complementaires_procedure LIKE '%fooValue%'
     * </code>
     *
     * @param     string $donneesComplementairesProcedure The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByDonneesComplementairesProcedure($donneesComplementairesProcedure = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($donneesComplementairesProcedure)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $donneesComplementairesProcedure)) {
                $donneesComplementairesProcedure = str_replace('*', '%', $donneesComplementairesProcedure);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::DONNEES_COMPLEMENTAIRES_PROCEDURE, $donneesComplementairesProcedure, $comparison);
    }

    /**
     * Filter the query on the forme_marche_forme_prix column
     *
     * Example usage:
     * <code>
     * $query->filterByFormeMarcheFormePrix('fooValue');   // WHERE forme_marche_forme_prix = 'fooValue'
     * $query->filterByFormeMarcheFormePrix('%fooValue%'); // WHERE forme_marche_forme_prix LIKE '%fooValue%'
     * </code>
     *
     * @param     string $formeMarcheFormePrix The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByFormeMarcheFormePrix($formeMarcheFormePrix = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($formeMarcheFormePrix)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $formeMarcheFormePrix)) {
                $formeMarcheFormePrix = str_replace('*', '%', $formeMarcheFormePrix);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::FORME_MARCHE_FORME_PRIX, $formeMarcheFormePrix, $comparison);
    }

    /**
     * Filter the query on the controle_unicite_num_marche column
     *
     * Example usage:
     * <code>
     * $query->filterByControleUniciteNumMarche('fooValue');   // WHERE controle_unicite_num_marche = 'fooValue'
     * $query->filterByControleUniciteNumMarche('%fooValue%'); // WHERE controle_unicite_num_marche LIKE '%fooValue%'
     * </code>
     *
     * @param     string $controleUniciteNumMarche The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByControleUniciteNumMarche($controleUniciteNumMarche = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($controleUniciteNumMarche)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $controleUniciteNumMarche)) {
                $controleUniciteNumMarche = str_replace('*', '%', $controleUniciteNumMarche);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::CONTROLE_UNICITE_NUM_MARCHE, $controleUniciteNumMarche, $comparison);
    }

    /**
     * Filter the query on the affichage_num_marche column
     *
     * Example usage:
     * <code>
     * $query->filterByAffichageNumMarche('fooValue');   // WHERE affichage_num_marche = 'fooValue'
     * $query->filterByAffichageNumMarche('%fooValue%'); // WHERE affichage_num_marche LIKE '%fooValue%'
     * </code>
     *
     * @param     string $affichageNumMarche The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByAffichageNumMarche($affichageNumMarche = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($affichageNumMarche)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $affichageNumMarche)) {
                $affichageNumMarche = str_replace('*', '%', $affichageNumMarche);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::AFFICHAGE_NUM_MARCHE, $affichageNumMarche, $comparison);
    }

    /**
     * Filter the query on the affichage_date_fin_marche column
     *
     * Example usage:
     * <code>
     * $query->filterByAffichageDateFinMarche('fooValue');   // WHERE affichage_date_fin_marche = 'fooValue'
     * $query->filterByAffichageDateFinMarche('%fooValue%'); // WHERE affichage_date_fin_marche LIKE '%fooValue%'
     * </code>
     *
     * @param     string $affichageDateFinMarche The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByAffichageDateFinMarche($affichageDateFinMarche = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($affichageDateFinMarche)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $affichageDateFinMarche)) {
                $affichageDateFinMarche = str_replace('*', '%', $affichageDateFinMarche);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::AFFICHAGE_DATE_FIN_MARCHE, $affichageDateFinMarche, $comparison);
    }

    /**
     * Filter the query on the affichage_ice column
     *
     * Example usage:
     * <code>
     * $query->filterByAffichageIce('fooValue');   // WHERE affichage_ice = 'fooValue'
     * $query->filterByAffichageIce('%fooValue%'); // WHERE affichage_ice LIKE '%fooValue%'
     * </code>
     *
     * @param     string $affichageIce The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByAffichageIce($affichageIce = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($affichageIce)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $affichageIce)) {
                $affichageIce = str_replace('*', '%', $affichageIce);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::AFFICHAGE_ICE, $affichageIce, $comparison);
    }

    /**
     * Filter the query on the blocage_depot_hors_delai column
     *
     * Example usage:
     * <code>
     * $query->filterByBlocageDepotHorsDelai('fooValue');   // WHERE blocage_depot_hors_delai = 'fooValue'
     * $query->filterByBlocageDepotHorsDelai('%fooValue%'); // WHERE blocage_depot_hors_delai LIKE '%fooValue%'
     * </code>
     *
     * @param     string $blocageDepotHorsDelai The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByBlocageDepotHorsDelai($blocageDepotHorsDelai = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($blocageDepotHorsDelai)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $blocageDepotHorsDelai)) {
                $blocageDepotHorsDelai = str_replace('*', '%', $blocageDepotHorsDelai);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::BLOCAGE_DEPOT_HORS_DELAI, $blocageDepotHorsDelai, $comparison);
    }

    /**
     * Filter the query on the activer_suivi_pv column
     *
     * Example usage:
     * <code>
     * $query->filterByActiverSuiviPv('fooValue');   // WHERE activer_suivi_pv = 'fooValue'
     * $query->filterByActiverSuiviPv('%fooValue%'); // WHERE activer_suivi_pv LIKE '%fooValue%'
     * </code>
     *
     * @param     string $activerSuiviPv The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByActiverSuiviPv($activerSuiviPv = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($activerSuiviPv)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $activerSuiviPv)) {
                $activerSuiviPv = str_replace('*', '%', $activerSuiviPv);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::ACTIVER_SUIVI_PV, $activerSuiviPv, $comparison);
    }

    /**
     * Filter the query on the captcha_validateur column
     *
     * Example usage:
     * <code>
     * $query->filterByCaptchaValidateur('fooValue');   // WHERE captcha_validateur = 'fooValue'
     * $query->filterByCaptchaValidateur('%fooValue%'); // WHERE captcha_validateur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $captchaValidateur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByCaptchaValidateur($captchaValidateur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($captchaValidateur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $captchaValidateur)) {
                $captchaValidateur = str_replace('*', '%', $captchaValidateur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::CAPTCHA_VALIDATEUR, $captchaValidateur, $comparison);
    }

    /**
     * Filter the query on the decision_depuis_resultat_analyse column
     *
     * Example usage:
     * <code>
     * $query->filterByDecisionDepuisResultatAnalyse('fooValue');   // WHERE decision_depuis_resultat_analyse = 'fooValue'
     * $query->filterByDecisionDepuisResultatAnalyse('%fooValue%'); // WHERE decision_depuis_resultat_analyse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $decisionDepuisResultatAnalyse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByDecisionDepuisResultatAnalyse($decisionDepuisResultatAnalyse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($decisionDepuisResultatAnalyse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $decisionDepuisResultatAnalyse)) {
                $decisionDepuisResultatAnalyse = str_replace('*', '%', $decisionDepuisResultatAnalyse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::DECISION_DEPUIS_RESULTAT_ANALYSE, $decisionDepuisResultatAnalyse, $comparison);
    }

    /**
     * Filter the query on the module_facture column
     *
     * Example usage:
     * <code>
     * $query->filterByModuleFacture('fooValue');   // WHERE module_facture = 'fooValue'
     * $query->filterByModuleFacture('%fooValue%'); // WHERE module_facture LIKE '%fooValue%'
     * </code>
     *
     * @param     string $moduleFacture The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByModuleFacture($moduleFacture = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($moduleFacture)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $moduleFacture)) {
                $moduleFacture = str_replace('*', '%', $moduleFacture);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::MODULE_FACTURE, $moduleFacture, $comparison);
    }

    /**
     * Filter the query on the validation_entreprise_facturation column
     *
     * Example usage:
     * <code>
     * $query->filterByValidationEntrepriseFacturation('fooValue');   // WHERE validation_entreprise_facturation = 'fooValue'
     * $query->filterByValidationEntrepriseFacturation('%fooValue%'); // WHERE validation_entreprise_facturation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $validationEntrepriseFacturation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByValidationEntrepriseFacturation($validationEntrepriseFacturation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($validationEntrepriseFacturation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $validationEntrepriseFacturation)) {
                $validationEntrepriseFacturation = str_replace('*', '%', $validationEntrepriseFacturation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::VALIDATION_ENTREPRISE_FACTURATION, $validationEntrepriseFacturation, $comparison);
    }

    /**
     * Filter the query on the bloquer_depot_si_env_non_depose column
     *
     * Example usage:
     * <code>
     * $query->filterByBloquerDepotSiEnvNonDepose('fooValue');   // WHERE bloquer_depot_si_env_non_depose = 'fooValue'
     * $query->filterByBloquerDepotSiEnvNonDepose('%fooValue%'); // WHERE bloquer_depot_si_env_non_depose LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bloquerDepotSiEnvNonDepose The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByBloquerDepotSiEnvNonDepose($bloquerDepotSiEnvNonDepose = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bloquerDepotSiEnvNonDepose)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bloquerDepotSiEnvNonDepose)) {
                $bloquerDepotSiEnvNonDepose = str_replace('*', '%', $bloquerDepotSiEnvNonDepose);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::BLOQUER_DEPOT_SI_ENV_NON_DEPOSE, $bloquerDepotSiEnvNonDepose, $comparison);
    }

    /**
     * Filter the query on the bloquer_depot_signature_invalide column
     *
     * Example usage:
     * <code>
     * $query->filterByBloquerDepotSignatureInvalide('fooValue');   // WHERE bloquer_depot_signature_invalide = 'fooValue'
     * $query->filterByBloquerDepotSignatureInvalide('%fooValue%'); // WHERE bloquer_depot_signature_invalide LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bloquerDepotSignatureInvalide The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByBloquerDepotSignatureInvalide($bloquerDepotSignatureInvalide = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bloquerDepotSignatureInvalide)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bloquerDepotSignatureInvalide)) {
                $bloquerDepotSignatureInvalide = str_replace('*', '%', $bloquerDepotSignatureInvalide);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::BLOQUER_DEPOT_SIGNATURE_INVALIDE, $bloquerDepotSignatureInvalide, $comparison);
    }

    /**
     * Filter the query on the consultation_import_lots column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultationImportLots('fooValue');   // WHERE consultation_import_lots = 'fooValue'
     * $query->filterByConsultationImportLots('%fooValue%'); // WHERE consultation_import_lots LIKE '%fooValue%'
     * </code>
     *
     * @param     string $consultationImportLots The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByConsultationImportLots($consultationImportLots = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($consultationImportLots)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $consultationImportLots)) {
                $consultationImportLots = str_replace('*', '%', $consultationImportLots);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::CONSULTATION_IMPORT_LOTS, $consultationImportLots, $comparison);
    }

    /**
     * Filter the query on the depot_selection_lots column
     *
     * Example usage:
     * <code>
     * $query->filterByDepotSelectionLots('fooValue');   // WHERE depot_selection_lots = 'fooValue'
     * $query->filterByDepotSelectionLots('%fooValue%'); // WHERE depot_selection_lots LIKE '%fooValue%'
     * </code>
     *
     * @param     string $depotSelectionLots The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByDepotSelectionLots($depotSelectionLots = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($depotSelectionLots)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $depotSelectionLots)) {
                $depotSelectionLots = str_replace('*', '%', $depotSelectionLots);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::DEPOT_SELECTION_LOTS, $depotSelectionLots, $comparison);
    }

    /**
     * Filter the query on the modification_lots_apres_mise_en_ligne column
     *
     * Example usage:
     * <code>
     * $query->filterByModificationLotsApresMiseEnLigne('fooValue');   // WHERE modification_lots_apres_mise_en_ligne = 'fooValue'
     * $query->filterByModificationLotsApresMiseEnLigne('%fooValue%'); // WHERE modification_lots_apres_mise_en_ligne LIKE '%fooValue%'
     * </code>
     *
     * @param     string $modificationLotsApresMiseEnLigne The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByModificationLotsApresMiseEnLigne($modificationLotsApresMiseEnLigne = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modificationLotsApresMiseEnLigne)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $modificationLotsApresMiseEnLigne)) {
                $modificationLotsApresMiseEnLigne = str_replace('*', '%', $modificationLotsApresMiseEnLigne);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::MODIFICATION_LOTS_APRES_MISE_EN_LIGNE, $modificationLotsApresMiseEnLigne, $comparison);
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
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::FILTRE_BDF_ENTREPRISE_VALIDE, $filtreBdfEntrepriseValide, $comparison);
    }

    /**
     * Filter the query on the affichage_identifiant_fiscale column
     *
     * Example usage:
     * <code>
     * $query->filterByAffichageIdentifiantFiscale('fooValue');   // WHERE affichage_identifiant_fiscale = 'fooValue'
     * $query->filterByAffichageIdentifiantFiscale('%fooValue%'); // WHERE affichage_identifiant_fiscale LIKE '%fooValue%'
     * </code>
     *
     * @param     string $affichageIdentifiantFiscale The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByAffichageIdentifiantFiscale($affichageIdentifiantFiscale = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($affichageIdentifiantFiscale)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $affichageIdentifiantFiscale)) {
                $affichageIdentifiantFiscale = str_replace('*', '%', $affichageIdentifiantFiscale);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::AFFICHAGE_IDENTIFIANT_FISCALE, $affichageIdentifiantFiscale, $comparison);
    }

    /**
     * Filter the query on the decision_creer_contrat column
     *
     * Example usage:
     * <code>
     * $query->filterByDecisionCreerContrat('fooValue');   // WHERE decision_creer_contrat = 'fooValue'
     * $query->filterByDecisionCreerContrat('%fooValue%'); // WHERE decision_creer_contrat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $decisionCreerContrat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByDecisionCreerContrat($decisionCreerContrat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($decisionCreerContrat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $decisionCreerContrat)) {
                $decisionCreerContrat = str_replace('*', '%', $decisionCreerContrat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::DECISION_CREER_CONTRAT, $decisionCreerContrat, $comparison);
    }

    /**
     * Filter the query on the generation_bi_cle column
     *
     * Example usage:
     * <code>
     * $query->filterByGenerationBiCle('fooValue');   // WHERE generation_bi_cle = 'fooValue'
     * $query->filterByGenerationBiCle('%fooValue%'); // WHERE generation_bi_cle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $generationBiCle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByGenerationBiCle($generationBiCle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($generationBiCle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $generationBiCle)) {
                $generationBiCle = str_replace('*', '%', $generationBiCle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationPlateformePeer::GENERATION_BI_CLE, $generationBiCle, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonConfigurationPlateforme $commonConfigurationPlateforme Object to remove from the list of results
     *
     * @return CommonConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function prune($commonConfigurationPlateforme = null)
    {
        if ($commonConfigurationPlateforme) {
            $this->addUsingAlias(CommonConfigurationPlateformePeer::ID_AUTO, $commonConfigurationPlateforme->getIdAuto(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
