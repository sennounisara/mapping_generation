<?php


/**
 * Base class that represents a query for the 'consultation' table.
 *
 * 
 *
 * @method CommonConsultationQuery orderByReference($order = Criteria::ASC) Order by the reference column
 * @method CommonConsultationQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonConsultationQuery orderByReferenceUtilisateur($order = Criteria::ASC) Order by the reference_utilisateur column
 * @method CommonConsultationQuery orderByCategorie($order = Criteria::ASC) Order by the categorie column
 * @method CommonConsultationQuery orderByTitre($order = Criteria::ASC) Order by the titre column
 * @method CommonConsultationQuery orderByResume($order = Criteria::ASC) Order by the resume column
 * @method CommonConsultationQuery orderByDatedebut($order = Criteria::ASC) Order by the datedebut column
 * @method CommonConsultationQuery orderByDatefin($order = Criteria::ASC) Order by the datefin column
 * @method CommonConsultationQuery orderByDatevalidation($order = Criteria::ASC) Order by the datevalidation column
 * @method CommonConsultationQuery orderByTypeProcedure($order = Criteria::ASC) Order by the type_procedure column
 * @method CommonConsultationQuery orderByCodeProcedure($order = Criteria::ASC) Order by the code_procedure column
 * @method CommonConsultationQuery orderByReponseElectronique($order = Criteria::ASC) Order by the reponse_electronique column
 * @method CommonConsultationQuery orderByNumProcedure($order = Criteria::ASC) Order by the num_procedure column
 * @method CommonConsultationQuery orderByIdTypeProcedure($order = Criteria::ASC) Order by the id_type_procedure column
 * @method CommonConsultationQuery orderByIdTypeAvis($order = Criteria::ASC) Order by the id_type_avis column
 * @method CommonConsultationQuery orderByLieuExecution($order = Criteria::ASC) Order by the lieu_execution column
 * @method CommonConsultationQuery orderByTypeMiseEnLigne($order = Criteria::ASC) Order by the type_mise_en_ligne column
 * @method CommonConsultationQuery orderByDatemiseenligne($order = Criteria::ASC) Order by the datemiseenligne column
 * @method CommonConsultationQuery orderByIsTiersAvis($order = Criteria::ASC) Order by the is_tiers_avis column
 * @method CommonConsultationQuery orderByUrl($order = Criteria::ASC) Order by the url column
 * @method CommonConsultationQuery orderByDatefinSad($order = Criteria::ASC) Order by the datefin_sad column
 * @method CommonConsultationQuery orderByIsSysAcqDyn($order = Criteria::ASC) Order by the is_sys_acq_dyn column
 * @method CommonConsultationQuery orderByReferenceConsultationInit($order = Criteria::ASC) Order by the reference_consultation_init column
 * @method CommonConsultationQuery orderBySignatureOffre($order = Criteria::ASC) Order by the signature_offre column
 * @method CommonConsultationQuery orderByIdTypeValidation($order = Criteria::ASC) Order by the id_type_validation column
 * @method CommonConsultationQuery orderByEtatApprobation($order = Criteria::ASC) Order by the etat_approbation column
 * @method CommonConsultationQuery orderByEtatValidation($order = Criteria::ASC) Order by the etat_validation column
 * @method CommonConsultationQuery orderByChampSuppInvisible($order = Criteria::ASC) Order by the champ_supp_invisible column
 * @method CommonConsultationQuery orderByCodeCpv1($order = Criteria::ASC) Order by the code_cpv_1 column
 * @method CommonConsultationQuery orderByCodeCpv2($order = Criteria::ASC) Order by the code_cpv_2 column
 * @method CommonConsultationQuery orderByPublicationEurope($order = Criteria::ASC) Order by the publication_europe column
 * @method CommonConsultationQuery orderByEtatPublication($order = Criteria::ASC) Order by the etat_publication column
 * @method CommonConsultationQuery orderByPoursuivreAffichage($order = Criteria::ASC) Order by the poursuivre_affichage column
 * @method CommonConsultationQuery orderByNbrTelechargementDce($order = Criteria::ASC) Order by the nbr_telechargement_dce column
 * @method CommonConsultationQuery orderByServiceId($order = Criteria::ASC) Order by the service_id column
 * @method CommonConsultationQuery orderByServiceAssocieId($order = Criteria::ASC) Order by the service_associe_id column
 * @method CommonConsultationQuery orderByDetailConsultation($order = Criteria::ASC) Order by the detail_consultation column
 * @method CommonConsultationQuery orderByDateFinAffichage($order = Criteria::ASC) Order by the date_fin_affichage column
 * @method CommonConsultationQuery orderByDepouillablePhaseConsultation($order = Criteria::ASC) Order by the depouillable_phase_consultation column
 * @method CommonConsultationQuery orderByConsultationTransverse($order = Criteria::ASC) Order by the consultation_transverse column
 * @method CommonConsultationQuery orderByConsultationAchatPublique($order = Criteria::ASC) Order by the consultation_achat_publique column
 * @method CommonConsultationQuery orderByUrlConsultationAchatPublique($order = Criteria::ASC) Order by the url_consultation_achat_publique column
 * @method CommonConsultationQuery orderByPartialDceDownload($order = Criteria::ASC) Order by the partial_dce_download column
 * @method CommonConsultationQuery orderByTiragePlan($order = Criteria::ASC) Order by the tirage_plan column
 * @method CommonConsultationQuery orderByTireurPlan($order = Criteria::ASC) Order by the tireur_plan column
 * @method CommonConsultationQuery orderByDateMiseEnLigneCalcule($order = Criteria::ASC) Order by the date_mise_en_ligne_calcule column
 * @method CommonConsultationQuery orderByAccessibiliteEn($order = Criteria::ASC) Order by the accessibilite_en column
 * @method CommonConsultationQuery orderByAccessibiliteEs($order = Criteria::ASC) Order by the accessibilite_es column
 * @method CommonConsultationQuery orderByNbrReponse($order = Criteria::ASC) Order by the nbr_reponse column
 * @method CommonConsultationQuery orderByIdTypeProcedureOrg($order = Criteria::ASC) Order by the id_type_procedure_org column
 * @method CommonConsultationQuery orderByOrganismeConsultationInit($order = Criteria::ASC) Order by the organisme_consultation_init column
 * @method CommonConsultationQuery orderByTirageDescriptif($order = Criteria::ASC) Order by the tirage_descriptif column
 * @method CommonConsultationQuery orderByDateValidationIntermediaire($order = Criteria::ASC) Order by the date_validation_intermediaire column
 * @method CommonConsultationQuery orderByAccessibiliteFr($order = Criteria::ASC) Order by the accessibilite_fr column
 * @method CommonConsultationQuery orderByIdTrAccessibilite($order = Criteria::ASC) Order by the id_tr_accessibilite column
 * @method CommonConsultationQuery orderByAccessibiliteCz($order = Criteria::ASC) Order by the accessibilite_cz column
 * @method CommonConsultationQuery orderByAccessibiliteDu($order = Criteria::ASC) Order by the accessibilite_du column
 * @method CommonConsultationQuery orderByAccessibiliteSu($order = Criteria::ASC) Order by the accessibilite_su column
 * @method CommonConsultationQuery orderByAccessibiliteAr($order = Criteria::ASC) Order by the accessibilite_ar column
 * @method CommonConsultationQuery orderByAlloti($order = Criteria::ASC) Order by the alloti column
 * @method CommonConsultationQuery orderByNumeroPhase($order = Criteria::ASC) Order by the numero_phase column
 * @method CommonConsultationQuery orderByConsultationExterne($order = Criteria::ASC) Order by the consultation_externe column
 * @method CommonConsultationQuery orderByUrlConsultationExterne($order = Criteria::ASC) Order by the url_consultation_externe column
 * @method CommonConsultationQuery orderByOrgDenomination($order = Criteria::ASC) Order by the org_denomination column
 * @method CommonConsultationQuery orderByDomainesActivites($order = Criteria::ASC) Order by the domaines_activites column
 * @method CommonConsultationQuery orderByIdAffaire($order = Criteria::ASC) Order by the id_affaire column
 * @method CommonConsultationQuery orderByAdresseRetraisDossiers($order = Criteria::ASC) Order by the adresse_retrais_dossiers column
 * @method CommonConsultationQuery orderByCautionProvisoire($order = Criteria::ASC) Order by the caution_provisoire column
 * @method CommonConsultationQuery orderByAdresseDepotOffres($order = Criteria::ASC) Order by the adresse_depot_offres column
 * @method CommonConsultationQuery orderByLieuOuverturePlis($order = Criteria::ASC) Order by the lieu_ouverture_plis column
 * @method CommonConsultationQuery orderByPrixAquisitionPlans($order = Criteria::ASC) Order by the prix_aquisition_plans column
 * @method CommonConsultationQuery orderByQualification($order = Criteria::ASC) Order by the qualification column
 * @method CommonConsultationQuery orderByAgrements($order = Criteria::ASC) Order by the agrements column
 * @method CommonConsultationQuery orderByAddEchantillion($order = Criteria::ASC) Order by the add_echantillion column
 * @method CommonConsultationQuery orderByDateLimiteEchantillion($order = Criteria::ASC) Order by the date_limite_echantillion column
 * @method CommonConsultationQuery orderByAddReunion($order = Criteria::ASC) Order by the add_reunion column
 * @method CommonConsultationQuery orderByDateReunion($order = Criteria::ASC) Order by the date_reunion column
 * @method CommonConsultationQuery orderByVariantes($order = Criteria::ASC) Order by the variantes column
 * @method CommonConsultationQuery orderByAdresseRetraisDossiersAr($order = Criteria::ASC) Order by the adresse_retrais_dossiers_ar column
 * @method CommonConsultationQuery orderByAdresseDepotOffresAr($order = Criteria::ASC) Order by the adresse_depot_offres_ar column
 * @method CommonConsultationQuery orderByLieuOuverturePlisAr($order = Criteria::ASC) Order by the lieu_ouverture_plis_ar column
 * @method CommonConsultationQuery orderByPiecesDossierAdmin($order = Criteria::ASC) Order by the pieces_dossier_admin column
 * @method CommonConsultationQuery orderByPiecesDossierAdminFr($order = Criteria::ASC) Order by the pieces_dossier_admin_fr column
 * @method CommonConsultationQuery orderByPiecesDossierAdminEn($order = Criteria::ASC) Order by the pieces_dossier_admin_en column
 * @method CommonConsultationQuery orderByPiecesDossierAdminEs($order = Criteria::ASC) Order by the pieces_dossier_admin_es column
 * @method CommonConsultationQuery orderByPiecesDossierAdminSu($order = Criteria::ASC) Order by the pieces_dossier_admin_su column
 * @method CommonConsultationQuery orderByPiecesDossierAdminDu($order = Criteria::ASC) Order by the pieces_dossier_admin_du column
 * @method CommonConsultationQuery orderByPiecesDossierAdminCz($order = Criteria::ASC) Order by the pieces_dossier_admin_cz column
 * @method CommonConsultationQuery orderByPiecesDossierAdminAr($order = Criteria::ASC) Order by the pieces_dossier_admin_ar column
 * @method CommonConsultationQuery orderByPiecesDossierTech($order = Criteria::ASC) Order by the pieces_dossier_tech column
 * @method CommonConsultationQuery orderByPiecesDossierTechFr($order = Criteria::ASC) Order by the pieces_dossier_tech_fr column
 * @method CommonConsultationQuery orderByPiecesDossierTechEn($order = Criteria::ASC) Order by the pieces_dossier_tech_en column
 * @method CommonConsultationQuery orderByPiecesDossierTechEs($order = Criteria::ASC) Order by the pieces_dossier_tech_es column
 * @method CommonConsultationQuery orderByPiecesDossierTechSu($order = Criteria::ASC) Order by the pieces_dossier_tech_su column
 * @method CommonConsultationQuery orderByPiecesDossierTechDu($order = Criteria::ASC) Order by the pieces_dossier_tech_du column
 * @method CommonConsultationQuery orderByPiecesDossierTechCz($order = Criteria::ASC) Order by the pieces_dossier_tech_cz column
 * @method CommonConsultationQuery orderByPiecesDossierTechAr($order = Criteria::ASC) Order by the pieces_dossier_tech_ar column
 * @method CommonConsultationQuery orderByPiecesDossierAdditif($order = Criteria::ASC) Order by the pieces_dossier_additif column
 * @method CommonConsultationQuery orderByPiecesDossierAdditifFr($order = Criteria::ASC) Order by the pieces_dossier_additif_fr column
 * @method CommonConsultationQuery orderByPiecesDossierAdditifEn($order = Criteria::ASC) Order by the pieces_dossier_additif_en column
 * @method CommonConsultationQuery orderByPiecesDossierAdditifEs($order = Criteria::ASC) Order by the pieces_dossier_additif_es column
 * @method CommonConsultationQuery orderByPiecesDossierAdditifSu($order = Criteria::ASC) Order by the pieces_dossier_additif_su column
 * @method CommonConsultationQuery orderByPiecesDossierAdditifDu($order = Criteria::ASC) Order by the pieces_dossier_additif_du column
 * @method CommonConsultationQuery orderByPiecesDossierAdditifCz($order = Criteria::ASC) Order by the pieces_dossier_additif_cz column
 * @method CommonConsultationQuery orderByPiecesDossierAdditifAr($order = Criteria::ASC) Order by the pieces_dossier_additif_ar column
 * @method CommonConsultationQuery orderByIdRpa($order = Criteria::ASC) Order by the id_rpa column
 * @method CommonConsultationQuery orderByDetailConsultationFr($order = Criteria::ASC) Order by the detail_consultation_fr column
 * @method CommonConsultationQuery orderByDetailConsultationEn($order = Criteria::ASC) Order by the detail_consultation_en column
 * @method CommonConsultationQuery orderByDetailConsultationEs($order = Criteria::ASC) Order by the detail_consultation_es column
 * @method CommonConsultationQuery orderByDetailConsultationSu($order = Criteria::ASC) Order by the detail_consultation_su column
 * @method CommonConsultationQuery orderByDetailConsultationDu($order = Criteria::ASC) Order by the detail_consultation_du column
 * @method CommonConsultationQuery orderByDetailConsultationCz($order = Criteria::ASC) Order by the detail_consultation_cz column
 * @method CommonConsultationQuery orderByDetailConsultationAr($order = Criteria::ASC) Order by the detail_consultation_ar column
 * @method CommonConsultationQuery orderByEchantillon($order = Criteria::ASC) Order by the echantillon column
 * @method CommonConsultationQuery orderByReunion($order = Criteria::ASC) Order by the reunion column
 * @method CommonConsultationQuery orderByVisitesLieux($order = Criteria::ASC) Order by the visites_lieux column
 * @method CommonConsultationQuery orderByVarianteCalcule($order = Criteria::ASC) Order by the variante_calcule column
 * @method CommonConsultationQuery orderByAdresseRetraisDossiersFr($order = Criteria::ASC) Order by the adresse_retrais_dossiers_fr column
 * @method CommonConsultationQuery orderByAdresseRetraisDossiersEn($order = Criteria::ASC) Order by the adresse_retrais_dossiers_en column
 * @method CommonConsultationQuery orderByAdresseRetraisDossiersEs($order = Criteria::ASC) Order by the adresse_retrais_dossiers_es column
 * @method CommonConsultationQuery orderByAdresseRetraisDossiersSu($order = Criteria::ASC) Order by the adresse_retrais_dossiers_su column
 * @method CommonConsultationQuery orderByAdresseRetraisDossiersDu($order = Criteria::ASC) Order by the adresse_retrais_dossiers_du column
 * @method CommonConsultationQuery orderByAdresseRetraisDossiersCz($order = Criteria::ASC) Order by the adresse_retrais_dossiers_cz column
 * @method CommonConsultationQuery orderByAdresseDepotOffresFr($order = Criteria::ASC) Order by the adresse_depot_offres_fr column
 * @method CommonConsultationQuery orderByAdresseDepotOffresEn($order = Criteria::ASC) Order by the adresse_depot_offres_en column
 * @method CommonConsultationQuery orderByAdresseDepotOffresEs($order = Criteria::ASC) Order by the adresse_depot_offres_es column
 * @method CommonConsultationQuery orderByAdresseDepotOffresSu($order = Criteria::ASC) Order by the adresse_depot_offres_su column
 * @method CommonConsultationQuery orderByAdresseDepotOffresDu($order = Criteria::ASC) Order by the adresse_depot_offres_du column
 * @method CommonConsultationQuery orderByAdresseDepotOffresCz($order = Criteria::ASC) Order by the adresse_depot_offres_cz column
 * @method CommonConsultationQuery orderByLieuOuverturePlisFr($order = Criteria::ASC) Order by the lieu_ouverture_plis_fr column
 * @method CommonConsultationQuery orderByLieuOuverturePlisEn($order = Criteria::ASC) Order by the lieu_ouverture_plis_en column
 * @method CommonConsultationQuery orderByLieuOuverturePlisEs($order = Criteria::ASC) Order by the lieu_ouverture_plis_es column
 * @method CommonConsultationQuery orderByLieuOuverturePlisSu($order = Criteria::ASC) Order by the lieu_ouverture_plis_su column
 * @method CommonConsultationQuery orderByLieuOuverturePlisDu($order = Criteria::ASC) Order by the lieu_ouverture_plis_du column
 * @method CommonConsultationQuery orderByLieuOuverturePlisCz($order = Criteria::ASC) Order by the lieu_ouverture_plis_cz column
 * @method CommonConsultationQuery orderByAddEchantillionFr($order = Criteria::ASC) Order by the add_echantillion_fr column
 * @method CommonConsultationQuery orderByAddEchantillionEn($order = Criteria::ASC) Order by the add_echantillion_en column
 * @method CommonConsultationQuery orderByAddEchantillionEs($order = Criteria::ASC) Order by the add_echantillion_es column
 * @method CommonConsultationQuery orderByAddEchantillionSu($order = Criteria::ASC) Order by the add_echantillion_su column
 * @method CommonConsultationQuery orderByAddEchantillionDu($order = Criteria::ASC) Order by the add_echantillion_du column
 * @method CommonConsultationQuery orderByAddEchantillionCz($order = Criteria::ASC) Order by the add_echantillion_cz column
 * @method CommonConsultationQuery orderByAddEchantillionAr($order = Criteria::ASC) Order by the add_echantillion_ar column
 * @method CommonConsultationQuery orderByAddReunionFr($order = Criteria::ASC) Order by the add_reunion_fr column
 * @method CommonConsultationQuery orderByAddReunionEn($order = Criteria::ASC) Order by the add_reunion_en column
 * @method CommonConsultationQuery orderByAddReunionEs($order = Criteria::ASC) Order by the add_reunion_es column
 * @method CommonConsultationQuery orderByAddReunionSu($order = Criteria::ASC) Order by the add_reunion_su column
 * @method CommonConsultationQuery orderByAddReunionDu($order = Criteria::ASC) Order by the add_reunion_du column
 * @method CommonConsultationQuery orderByAddReunionCz($order = Criteria::ASC) Order by the add_reunion_cz column
 * @method CommonConsultationQuery orderByAddReunionAr($order = Criteria::ASC) Order by the add_reunion_ar column
 * @method CommonConsultationQuery orderByModePassation($order = Criteria::ASC) Order by the mode_passation column
 * @method CommonConsultationQuery orderByConsultationAnnulee($order = Criteria::ASC) Order by the consultation_annulee column
 * @method CommonConsultationQuery orderByCompteBoampAssocie($order = Criteria::ASC) Order by the Compte_Boamp_Associe column
 * @method CommonConsultationQuery orderByAccessibiliteIt($order = Criteria::ASC) Order by the accessibilite_it column
 * @method CommonConsultationQuery orderByAdresseDepotOffresIt($order = Criteria::ASC) Order by the adresse_depot_offres_it column
 * @method CommonConsultationQuery orderByLieuOuverturePlisIt($order = Criteria::ASC) Order by the lieu_ouverture_plis_it column
 * @method CommonConsultationQuery orderByAdresseRetraisDossiersIt($order = Criteria::ASC) Order by the adresse_retrais_dossiers_it column
 * @method CommonConsultationQuery orderByPiecesDossierAdminIt($order = Criteria::ASC) Order by the pieces_dossier_admin_it column
 * @method CommonConsultationQuery orderByPiecesDossierTechIt($order = Criteria::ASC) Order by the pieces_dossier_tech_it column
 * @method CommonConsultationQuery orderByPiecesDossierAdditifIt($order = Criteria::ASC) Order by the pieces_dossier_additif_it column
 * @method CommonConsultationQuery orderByDetailConsultationIt($order = Criteria::ASC) Order by the detail_consultation_it column
 * @method CommonConsultationQuery orderByAddEchantillionIt($order = Criteria::ASC) Order by the add_echantillion_it column
 * @method CommonConsultationQuery orderByAddReunionIt($order = Criteria::ASC) Order by the add_reunion_it column
 * @method CommonConsultationQuery orderByCodesNuts($order = Criteria::ASC) Order by the codes_nuts column
 * @method CommonConsultationQuery orderByIntitule($order = Criteria::ASC) Order by the intitule column
 * @method CommonConsultationQuery orderByIdTrIntitule($order = Criteria::ASC) Order by the id_tr_intitule column
 * @method CommonConsultationQuery orderByObjet($order = Criteria::ASC) Order by the objet column
 * @method CommonConsultationQuery orderByIdTrObjet($order = Criteria::ASC) Order by the id_tr_objet column
 * @method CommonConsultationQuery orderByDateDecision($order = Criteria::ASC) Order by the date_decision column
 * @method CommonConsultationQuery orderByTypeAcces($order = Criteria::ASC) Order by the type_acces column
 * @method CommonConsultationQuery orderByAutoriserReponseElectronique($order = Criteria::ASC) Order by the autoriser_reponse_electronique column
 * @method CommonConsultationQuery orderByRegleMiseEnLigne($order = Criteria::ASC) Order by the regle_mise_en_ligne column
 * @method CommonConsultationQuery orderByIdRegleValidation($order = Criteria::ASC) Order by the id_regle_validation column
 * @method CommonConsultationQuery orderByIntituleFr($order = Criteria::ASC) Order by the intitule_fr column
 * @method CommonConsultationQuery orderByIntituleEn($order = Criteria::ASC) Order by the intitule_en column
 * @method CommonConsultationQuery orderByIntituleEs($order = Criteria::ASC) Order by the intitule_es column
 * @method CommonConsultationQuery orderByIntituleSu($order = Criteria::ASC) Order by the intitule_su column
 * @method CommonConsultationQuery orderByIntituleDu($order = Criteria::ASC) Order by the intitule_du column
 * @method CommonConsultationQuery orderByIntituleCz($order = Criteria::ASC) Order by the intitule_cz column
 * @method CommonConsultationQuery orderByIntituleAr($order = Criteria::ASC) Order by the intitule_ar column
 * @method CommonConsultationQuery orderByIntituleIt($order = Criteria::ASC) Order by the intitule_it column
 * @method CommonConsultationQuery orderByObjetFr($order = Criteria::ASC) Order by the objet_fr column
 * @method CommonConsultationQuery orderByObjetEn($order = Criteria::ASC) Order by the objet_en column
 * @method CommonConsultationQuery orderByObjetEs($order = Criteria::ASC) Order by the objet_es column
 * @method CommonConsultationQuery orderByObjetSu($order = Criteria::ASC) Order by the objet_su column
 * @method CommonConsultationQuery orderByObjetDu($order = Criteria::ASC) Order by the objet_du column
 * @method CommonConsultationQuery orderByObjetCz($order = Criteria::ASC) Order by the objet_cz column
 * @method CommonConsultationQuery orderByObjetAr($order = Criteria::ASC) Order by the objet_ar column
 * @method CommonConsultationQuery orderByObjetIt($order = Criteria::ASC) Order by the objet_it column
 * @method CommonConsultationQuery orderByClauseSociale($order = Criteria::ASC) Order by the clause_sociale column
 * @method CommonConsultationQuery orderByClauseEnvironnementale($order = Criteria::ASC) Order by the clause_environnementale column
 * @method CommonConsultationQuery orderByReponseObligatoire($order = Criteria::ASC) Order by the reponse_obligatoire column
 * @method CommonConsultationQuery orderByAutoriserPublicite($order = Criteria::ASC) Order by the autoriser_publicite column
 * @method CommonConsultationQuery orderByTypeEnvoi($order = Criteria::ASC) Order by the type_envoi column
 * @method CommonConsultationQuery orderByChiffrementOffre($order = Criteria::ASC) Order by the chiffrement_offre column
 * @method CommonConsultationQuery orderByEnvCandidature($order = Criteria::ASC) Order by the env_candidature column
 * @method CommonConsultationQuery orderByEnvOffre($order = Criteria::ASC) Order by the env_offre column
 * @method CommonConsultationQuery orderByEnvAnonymat($order = Criteria::ASC) Order by the env_anonymat column
 * @method CommonConsultationQuery orderByIdEtatConsultation($order = Criteria::ASC) Order by the id_etat_consultation column
 * @method CommonConsultationQuery orderByReferenceConnecteur($order = Criteria::ASC) Order by the reference_connecteur column
 * @method CommonConsultationQuery orderByConsStatut($order = Criteria::ASC) Order by the cons_statut column
 * @method CommonConsultationQuery orderByIdApprobateur($order = Criteria::ASC) Order by the id_approbateur column
 * @method CommonConsultationQuery orderByIdValideur($order = Criteria::ASC) Order by the id_valideur column
 * @method CommonConsultationQuery orderByServiceValidation($order = Criteria::ASC) Order by the service_validation column
 * @method CommonConsultationQuery orderByIdCreateur($order = Criteria::ASC) Order by the id_createur column
 * @method CommonConsultationQuery orderByNomCreateur($order = Criteria::ASC) Order by the nom_createur column
 * @method CommonConsultationQuery orderByPrenomCreateur($order = Criteria::ASC) Order by the prenom_createur column
 * @method CommonConsultationQuery orderBySignatureActeEngagement($order = Criteria::ASC) Order by the signature_acte_engagement column
 * @method CommonConsultationQuery orderByArchivemetadescription($order = Criteria::ASC) Order by the archiveMetaDescription column
 * @method CommonConsultationQuery orderByArchivemetamotsclef($order = Criteria::ASC) Order by the archiveMetaMotsClef column
 * @method CommonConsultationQuery orderByArchiveidblobzip($order = Criteria::ASC) Order by the archiveIdBlobZip column
 * @method CommonConsultationQuery orderByDecisionPartielle($order = Criteria::ASC) Order by the decision_partielle column
 * @method CommonConsultationQuery orderByTypeDecisionARenseigner($order = Criteria::ASC) Order by the type_decision_a_renseigner column
 * @method CommonConsultationQuery orderByTypeDecisionAttributionMarche($order = Criteria::ASC) Order by the type_decision_attribution_marche column
 * @method CommonConsultationQuery orderByTypeDecisionDeclarationSansSuite($order = Criteria::ASC) Order by the type_decision_declaration_sans_suite column
 * @method CommonConsultationQuery orderByTypeDecisionDeclarationInfructueux($order = Criteria::ASC) Order by the type_decision_declaration_infructueux column
 * @method CommonConsultationQuery orderByTypeDecisionSelectionEntreprise($order = Criteria::ASC) Order by the type_decision_selection_entreprise column
 * @method CommonConsultationQuery orderByTypeDecisionAttributionAccordCadre($order = Criteria::ASC) Order by the type_decision_attribution_accord_cadre column
 * @method CommonConsultationQuery orderByTypeDecisionAdmissionSad($order = Criteria::ASC) Order by the type_decision_admission_sad column
 * @method CommonConsultationQuery orderByTypeDecisionAutre($order = Criteria::ASC) Order by the type_decision_autre column
 * @method CommonConsultationQuery orderByIdArchiveur($order = Criteria::ASC) Order by the id_archiveur column
 * @method CommonConsultationQuery orderByPrenomNomAgentTelechargementPlis($order = Criteria::ASC) Order by the prenom_nom_agent_telechargement_plis column
 * @method CommonConsultationQuery orderByIdAgentTelechargementPlis($order = Criteria::ASC) Order by the id_agent_telechargement_plis column
 * @method CommonConsultationQuery orderByPathTelechargementPlis($order = Criteria::ASC) Order by the path_telechargement_plis column
 * @method CommonConsultationQuery orderByDateTelechargementPlis($order = Criteria::ASC) Order by the date_telechargement_plis column
 * @method CommonConsultationQuery orderByServiceValidationIntermediaire($order = Criteria::ASC) Order by the service_validation_intermediaire column
 * @method CommonConsultationQuery orderByEnvOffreTechnique($order = Criteria::ASC) Order by the env_offre_technique column
 * @method CommonConsultationQuery orderByRefOrgPartenaire($order = Criteria::ASC) Order by the ref_org_partenaire column
 * @method CommonConsultationQuery orderByDateArchivage($order = Criteria::ASC) Order by the date_archivage column
 * @method CommonConsultationQuery orderByDateDecisionAnnulation($order = Criteria::ASC) Order by the date_decision_annulation column
 * @method CommonConsultationQuery orderByCommentaireAnnulation($order = Criteria::ASC) Order by the commentaire_annulation column
 * @method CommonConsultationQuery orderByDateMiseEnLigneSouhaitee($order = Criteria::ASC) Order by the date_mise_en_ligne_souhaitee column
 * @method CommonConsultationQuery orderByEtatEnAttenteValidation($order = Criteria::ASC) Order by the etat_en_attente_validation column
 * @method CommonConsultationQuery orderByDossierAdditif($order = Criteria::ASC) Order by the dossier_additif column
 * @method CommonConsultationQuery orderByTypeMarche($order = Criteria::ASC) Order by the type_marche column
 * @method CommonConsultationQuery orderByTypePrestation($order = Criteria::ASC) Order by the type_prestation column
 * @method CommonConsultationQuery orderByDateModification($order = Criteria::ASC) Order by the date_modification column
 * @method CommonConsultationQuery orderByDelaiPartiel($order = Criteria::ASC) Order by the delai_partiel column
 * @method CommonConsultationQuery orderByDatefinlocale($order = Criteria::ASC) Order by the dateFinLocale column
 * @method CommonConsultationQuery orderByLieuresidence($order = Criteria::ASC) Order by the lieuResidence column
 * @method CommonConsultationQuery orderByAlerte($order = Criteria::ASC) Order by the alerte column
 * @method CommonConsultationQuery orderByDoublon($order = Criteria::ASC) Order by the doublon column
 * @method CommonConsultationQuery orderByDenominationAdapte($order = Criteria::ASC) Order by the denomination_adapte column
 * @method CommonConsultationQuery orderByUrlConsultationAvisPub($order = Criteria::ASC) Order by the url_consultation_avis_pub column
 * @method CommonConsultationQuery orderByDoublonDe($order = Criteria::ASC) Order by the doublon_de column
 * @method CommonConsultationQuery orderByEntiteAdjudicatrice($order = Criteria::ASC) Order by the entite_adjudicatrice column
 * @method CommonConsultationQuery orderByCodeOperation($order = Criteria::ASC) Order by the code_operation column
 * @method CommonConsultationQuery orderByClauseSocialeConditionExecution($order = Criteria::ASC) Order by the clause_sociale_condition_execution column
 * @method CommonConsultationQuery orderByClauseSocialeInsertion($order = Criteria::ASC) Order by the clause_sociale_insertion column
 * @method CommonConsultationQuery orderByClauseSocialeAteliersProteges($order = Criteria::ASC) Order by the clause_sociale_ateliers_proteges column
 * @method CommonConsultationQuery orderByClauseEnvSpecsTechniques($order = Criteria::ASC) Order by the clause_env_specs_techniques column
 * @method CommonConsultationQuery orderByClauseEnvCondExecution($order = Criteria::ASC) Order by the clause_env_cond_execution column
 * @method CommonConsultationQuery orderByClauseEnvCriteresSelect($order = Criteria::ASC) Order by the clause_env_criteres_select column
 * @method CommonConsultationQuery orderByIdDonneeComplementaire($order = Criteria::ASC) Order by the id_donnee_complementaire column
 * @method CommonConsultationQuery orderByDonneeComplementaireObligatoire($order = Criteria::ASC) Order by the donnee_complementaire_obligatoire column
 * @method CommonConsultationQuery orderByModeOuvertureReponse($order = Criteria::ASC) Order by the mode_ouverture_reponse column
 * @method CommonConsultationQuery orderByIdFichierAnnulation($order = Criteria::ASC) Order by the id_fichier_annulation column
 * @method CommonConsultationQuery orderByIdoperation($order = Criteria::ASC) Order by the idOperation column
 * @method CommonConsultationQuery orderByMarchePublicSimplifie($order = Criteria::ASC) Order by the marche_public_simplifie column
 * @method CommonConsultationQuery orderByInfosBlocsAtlas($order = Criteria::ASC) Order by the infos_blocs_atlas column
 * @method CommonConsultationQuery orderByDateFinUnix($order = Criteria::ASC) Order by the DATE_FIN_UNIX column
 * @method CommonConsultationQuery orderByDateAchevement($order = Criteria::ASC) Order by the date_achevement column
 * @method CommonConsultationQuery orderByNombreDeLots($order = Criteria::ASC) Order by the nombre_de_lots column
 *
 * @method CommonConsultationQuery groupByReference() Group by the reference column
 * @method CommonConsultationQuery groupByOrganisme() Group by the organisme column
 * @method CommonConsultationQuery groupByReferenceUtilisateur() Group by the reference_utilisateur column
 * @method CommonConsultationQuery groupByCategorie() Group by the categorie column
 * @method CommonConsultationQuery groupByTitre() Group by the titre column
 * @method CommonConsultationQuery groupByResume() Group by the resume column
 * @method CommonConsultationQuery groupByDatedebut() Group by the datedebut column
 * @method CommonConsultationQuery groupByDatefin() Group by the datefin column
 * @method CommonConsultationQuery groupByDatevalidation() Group by the datevalidation column
 * @method CommonConsultationQuery groupByTypeProcedure() Group by the type_procedure column
 * @method CommonConsultationQuery groupByCodeProcedure() Group by the code_procedure column
 * @method CommonConsultationQuery groupByReponseElectronique() Group by the reponse_electronique column
 * @method CommonConsultationQuery groupByNumProcedure() Group by the num_procedure column
 * @method CommonConsultationQuery groupByIdTypeProcedure() Group by the id_type_procedure column
 * @method CommonConsultationQuery groupByIdTypeAvis() Group by the id_type_avis column
 * @method CommonConsultationQuery groupByLieuExecution() Group by the lieu_execution column
 * @method CommonConsultationQuery groupByTypeMiseEnLigne() Group by the type_mise_en_ligne column
 * @method CommonConsultationQuery groupByDatemiseenligne() Group by the datemiseenligne column
 * @method CommonConsultationQuery groupByIsTiersAvis() Group by the is_tiers_avis column
 * @method CommonConsultationQuery groupByUrl() Group by the url column
 * @method CommonConsultationQuery groupByDatefinSad() Group by the datefin_sad column
 * @method CommonConsultationQuery groupByIsSysAcqDyn() Group by the is_sys_acq_dyn column
 * @method CommonConsultationQuery groupByReferenceConsultationInit() Group by the reference_consultation_init column
 * @method CommonConsultationQuery groupBySignatureOffre() Group by the signature_offre column
 * @method CommonConsultationQuery groupByIdTypeValidation() Group by the id_type_validation column
 * @method CommonConsultationQuery groupByEtatApprobation() Group by the etat_approbation column
 * @method CommonConsultationQuery groupByEtatValidation() Group by the etat_validation column
 * @method CommonConsultationQuery groupByChampSuppInvisible() Group by the champ_supp_invisible column
 * @method CommonConsultationQuery groupByCodeCpv1() Group by the code_cpv_1 column
 * @method CommonConsultationQuery groupByCodeCpv2() Group by the code_cpv_2 column
 * @method CommonConsultationQuery groupByPublicationEurope() Group by the publication_europe column
 * @method CommonConsultationQuery groupByEtatPublication() Group by the etat_publication column
 * @method CommonConsultationQuery groupByPoursuivreAffichage() Group by the poursuivre_affichage column
 * @method CommonConsultationQuery groupByNbrTelechargementDce() Group by the nbr_telechargement_dce column
 * @method CommonConsultationQuery groupByServiceId() Group by the service_id column
 * @method CommonConsultationQuery groupByServiceAssocieId() Group by the service_associe_id column
 * @method CommonConsultationQuery groupByDetailConsultation() Group by the detail_consultation column
 * @method CommonConsultationQuery groupByDateFinAffichage() Group by the date_fin_affichage column
 * @method CommonConsultationQuery groupByDepouillablePhaseConsultation() Group by the depouillable_phase_consultation column
 * @method CommonConsultationQuery groupByConsultationTransverse() Group by the consultation_transverse column
 * @method CommonConsultationQuery groupByConsultationAchatPublique() Group by the consultation_achat_publique column
 * @method CommonConsultationQuery groupByUrlConsultationAchatPublique() Group by the url_consultation_achat_publique column
 * @method CommonConsultationQuery groupByPartialDceDownload() Group by the partial_dce_download column
 * @method CommonConsultationQuery groupByTiragePlan() Group by the tirage_plan column
 * @method CommonConsultationQuery groupByTireurPlan() Group by the tireur_plan column
 * @method CommonConsultationQuery groupByDateMiseEnLigneCalcule() Group by the date_mise_en_ligne_calcule column
 * @method CommonConsultationQuery groupByAccessibiliteEn() Group by the accessibilite_en column
 * @method CommonConsultationQuery groupByAccessibiliteEs() Group by the accessibilite_es column
 * @method CommonConsultationQuery groupByNbrReponse() Group by the nbr_reponse column
 * @method CommonConsultationQuery groupByIdTypeProcedureOrg() Group by the id_type_procedure_org column
 * @method CommonConsultationQuery groupByOrganismeConsultationInit() Group by the organisme_consultation_init column
 * @method CommonConsultationQuery groupByTirageDescriptif() Group by the tirage_descriptif column
 * @method CommonConsultationQuery groupByDateValidationIntermediaire() Group by the date_validation_intermediaire column
 * @method CommonConsultationQuery groupByAccessibiliteFr() Group by the accessibilite_fr column
 * @method CommonConsultationQuery groupByIdTrAccessibilite() Group by the id_tr_accessibilite column
 * @method CommonConsultationQuery groupByAccessibiliteCz() Group by the accessibilite_cz column
 * @method CommonConsultationQuery groupByAccessibiliteDu() Group by the accessibilite_du column
 * @method CommonConsultationQuery groupByAccessibiliteSu() Group by the accessibilite_su column
 * @method CommonConsultationQuery groupByAccessibiliteAr() Group by the accessibilite_ar column
 * @method CommonConsultationQuery groupByAlloti() Group by the alloti column
 * @method CommonConsultationQuery groupByNumeroPhase() Group by the numero_phase column
 * @method CommonConsultationQuery groupByConsultationExterne() Group by the consultation_externe column
 * @method CommonConsultationQuery groupByUrlConsultationExterne() Group by the url_consultation_externe column
 * @method CommonConsultationQuery groupByOrgDenomination() Group by the org_denomination column
 * @method CommonConsultationQuery groupByDomainesActivites() Group by the domaines_activites column
 * @method CommonConsultationQuery groupByIdAffaire() Group by the id_affaire column
 * @method CommonConsultationQuery groupByAdresseRetraisDossiers() Group by the adresse_retrais_dossiers column
 * @method CommonConsultationQuery groupByCautionProvisoire() Group by the caution_provisoire column
 * @method CommonConsultationQuery groupByAdresseDepotOffres() Group by the adresse_depot_offres column
 * @method CommonConsultationQuery groupByLieuOuverturePlis() Group by the lieu_ouverture_plis column
 * @method CommonConsultationQuery groupByPrixAquisitionPlans() Group by the prix_aquisition_plans column
 * @method CommonConsultationQuery groupByQualification() Group by the qualification column
 * @method CommonConsultationQuery groupByAgrements() Group by the agrements column
 * @method CommonConsultationQuery groupByAddEchantillion() Group by the add_echantillion column
 * @method CommonConsultationQuery groupByDateLimiteEchantillion() Group by the date_limite_echantillion column
 * @method CommonConsultationQuery groupByAddReunion() Group by the add_reunion column
 * @method CommonConsultationQuery groupByDateReunion() Group by the date_reunion column
 * @method CommonConsultationQuery groupByVariantes() Group by the variantes column
 * @method CommonConsultationQuery groupByAdresseRetraisDossiersAr() Group by the adresse_retrais_dossiers_ar column
 * @method CommonConsultationQuery groupByAdresseDepotOffresAr() Group by the adresse_depot_offres_ar column
 * @method CommonConsultationQuery groupByLieuOuverturePlisAr() Group by the lieu_ouverture_plis_ar column
 * @method CommonConsultationQuery groupByPiecesDossierAdmin() Group by the pieces_dossier_admin column
 * @method CommonConsultationQuery groupByPiecesDossierAdminFr() Group by the pieces_dossier_admin_fr column
 * @method CommonConsultationQuery groupByPiecesDossierAdminEn() Group by the pieces_dossier_admin_en column
 * @method CommonConsultationQuery groupByPiecesDossierAdminEs() Group by the pieces_dossier_admin_es column
 * @method CommonConsultationQuery groupByPiecesDossierAdminSu() Group by the pieces_dossier_admin_su column
 * @method CommonConsultationQuery groupByPiecesDossierAdminDu() Group by the pieces_dossier_admin_du column
 * @method CommonConsultationQuery groupByPiecesDossierAdminCz() Group by the pieces_dossier_admin_cz column
 * @method CommonConsultationQuery groupByPiecesDossierAdminAr() Group by the pieces_dossier_admin_ar column
 * @method CommonConsultationQuery groupByPiecesDossierTech() Group by the pieces_dossier_tech column
 * @method CommonConsultationQuery groupByPiecesDossierTechFr() Group by the pieces_dossier_tech_fr column
 * @method CommonConsultationQuery groupByPiecesDossierTechEn() Group by the pieces_dossier_tech_en column
 * @method CommonConsultationQuery groupByPiecesDossierTechEs() Group by the pieces_dossier_tech_es column
 * @method CommonConsultationQuery groupByPiecesDossierTechSu() Group by the pieces_dossier_tech_su column
 * @method CommonConsultationQuery groupByPiecesDossierTechDu() Group by the pieces_dossier_tech_du column
 * @method CommonConsultationQuery groupByPiecesDossierTechCz() Group by the pieces_dossier_tech_cz column
 * @method CommonConsultationQuery groupByPiecesDossierTechAr() Group by the pieces_dossier_tech_ar column
 * @method CommonConsultationQuery groupByPiecesDossierAdditif() Group by the pieces_dossier_additif column
 * @method CommonConsultationQuery groupByPiecesDossierAdditifFr() Group by the pieces_dossier_additif_fr column
 * @method CommonConsultationQuery groupByPiecesDossierAdditifEn() Group by the pieces_dossier_additif_en column
 * @method CommonConsultationQuery groupByPiecesDossierAdditifEs() Group by the pieces_dossier_additif_es column
 * @method CommonConsultationQuery groupByPiecesDossierAdditifSu() Group by the pieces_dossier_additif_su column
 * @method CommonConsultationQuery groupByPiecesDossierAdditifDu() Group by the pieces_dossier_additif_du column
 * @method CommonConsultationQuery groupByPiecesDossierAdditifCz() Group by the pieces_dossier_additif_cz column
 * @method CommonConsultationQuery groupByPiecesDossierAdditifAr() Group by the pieces_dossier_additif_ar column
 * @method CommonConsultationQuery groupByIdRpa() Group by the id_rpa column
 * @method CommonConsultationQuery groupByDetailConsultationFr() Group by the detail_consultation_fr column
 * @method CommonConsultationQuery groupByDetailConsultationEn() Group by the detail_consultation_en column
 * @method CommonConsultationQuery groupByDetailConsultationEs() Group by the detail_consultation_es column
 * @method CommonConsultationQuery groupByDetailConsultationSu() Group by the detail_consultation_su column
 * @method CommonConsultationQuery groupByDetailConsultationDu() Group by the detail_consultation_du column
 * @method CommonConsultationQuery groupByDetailConsultationCz() Group by the detail_consultation_cz column
 * @method CommonConsultationQuery groupByDetailConsultationAr() Group by the detail_consultation_ar column
 * @method CommonConsultationQuery groupByEchantillon() Group by the echantillon column
 * @method CommonConsultationQuery groupByReunion() Group by the reunion column
 * @method CommonConsultationQuery groupByVisitesLieux() Group by the visites_lieux column
 * @method CommonConsultationQuery groupByVarianteCalcule() Group by the variante_calcule column
 * @method CommonConsultationQuery groupByAdresseRetraisDossiersFr() Group by the adresse_retrais_dossiers_fr column
 * @method CommonConsultationQuery groupByAdresseRetraisDossiersEn() Group by the adresse_retrais_dossiers_en column
 * @method CommonConsultationQuery groupByAdresseRetraisDossiersEs() Group by the adresse_retrais_dossiers_es column
 * @method CommonConsultationQuery groupByAdresseRetraisDossiersSu() Group by the adresse_retrais_dossiers_su column
 * @method CommonConsultationQuery groupByAdresseRetraisDossiersDu() Group by the adresse_retrais_dossiers_du column
 * @method CommonConsultationQuery groupByAdresseRetraisDossiersCz() Group by the adresse_retrais_dossiers_cz column
 * @method CommonConsultationQuery groupByAdresseDepotOffresFr() Group by the adresse_depot_offres_fr column
 * @method CommonConsultationQuery groupByAdresseDepotOffresEn() Group by the adresse_depot_offres_en column
 * @method CommonConsultationQuery groupByAdresseDepotOffresEs() Group by the adresse_depot_offres_es column
 * @method CommonConsultationQuery groupByAdresseDepotOffresSu() Group by the adresse_depot_offres_su column
 * @method CommonConsultationQuery groupByAdresseDepotOffresDu() Group by the adresse_depot_offres_du column
 * @method CommonConsultationQuery groupByAdresseDepotOffresCz() Group by the adresse_depot_offres_cz column
 * @method CommonConsultationQuery groupByLieuOuverturePlisFr() Group by the lieu_ouverture_plis_fr column
 * @method CommonConsultationQuery groupByLieuOuverturePlisEn() Group by the lieu_ouverture_plis_en column
 * @method CommonConsultationQuery groupByLieuOuverturePlisEs() Group by the lieu_ouverture_plis_es column
 * @method CommonConsultationQuery groupByLieuOuverturePlisSu() Group by the lieu_ouverture_plis_su column
 * @method CommonConsultationQuery groupByLieuOuverturePlisDu() Group by the lieu_ouverture_plis_du column
 * @method CommonConsultationQuery groupByLieuOuverturePlisCz() Group by the lieu_ouverture_plis_cz column
 * @method CommonConsultationQuery groupByAddEchantillionFr() Group by the add_echantillion_fr column
 * @method CommonConsultationQuery groupByAddEchantillionEn() Group by the add_echantillion_en column
 * @method CommonConsultationQuery groupByAddEchantillionEs() Group by the add_echantillion_es column
 * @method CommonConsultationQuery groupByAddEchantillionSu() Group by the add_echantillion_su column
 * @method CommonConsultationQuery groupByAddEchantillionDu() Group by the add_echantillion_du column
 * @method CommonConsultationQuery groupByAddEchantillionCz() Group by the add_echantillion_cz column
 * @method CommonConsultationQuery groupByAddEchantillionAr() Group by the add_echantillion_ar column
 * @method CommonConsultationQuery groupByAddReunionFr() Group by the add_reunion_fr column
 * @method CommonConsultationQuery groupByAddReunionEn() Group by the add_reunion_en column
 * @method CommonConsultationQuery groupByAddReunionEs() Group by the add_reunion_es column
 * @method CommonConsultationQuery groupByAddReunionSu() Group by the add_reunion_su column
 * @method CommonConsultationQuery groupByAddReunionDu() Group by the add_reunion_du column
 * @method CommonConsultationQuery groupByAddReunionCz() Group by the add_reunion_cz column
 * @method CommonConsultationQuery groupByAddReunionAr() Group by the add_reunion_ar column
 * @method CommonConsultationQuery groupByModePassation() Group by the mode_passation column
 * @method CommonConsultationQuery groupByConsultationAnnulee() Group by the consultation_annulee column
 * @method CommonConsultationQuery groupByCompteBoampAssocie() Group by the Compte_Boamp_Associe column
 * @method CommonConsultationQuery groupByAccessibiliteIt() Group by the accessibilite_it column
 * @method CommonConsultationQuery groupByAdresseDepotOffresIt() Group by the adresse_depot_offres_it column
 * @method CommonConsultationQuery groupByLieuOuverturePlisIt() Group by the lieu_ouverture_plis_it column
 * @method CommonConsultationQuery groupByAdresseRetraisDossiersIt() Group by the adresse_retrais_dossiers_it column
 * @method CommonConsultationQuery groupByPiecesDossierAdminIt() Group by the pieces_dossier_admin_it column
 * @method CommonConsultationQuery groupByPiecesDossierTechIt() Group by the pieces_dossier_tech_it column
 * @method CommonConsultationQuery groupByPiecesDossierAdditifIt() Group by the pieces_dossier_additif_it column
 * @method CommonConsultationQuery groupByDetailConsultationIt() Group by the detail_consultation_it column
 * @method CommonConsultationQuery groupByAddEchantillionIt() Group by the add_echantillion_it column
 * @method CommonConsultationQuery groupByAddReunionIt() Group by the add_reunion_it column
 * @method CommonConsultationQuery groupByCodesNuts() Group by the codes_nuts column
 * @method CommonConsultationQuery groupByIntitule() Group by the intitule column
 * @method CommonConsultationQuery groupByIdTrIntitule() Group by the id_tr_intitule column
 * @method CommonConsultationQuery groupByObjet() Group by the objet column
 * @method CommonConsultationQuery groupByIdTrObjet() Group by the id_tr_objet column
 * @method CommonConsultationQuery groupByDateDecision() Group by the date_decision column
 * @method CommonConsultationQuery groupByTypeAcces() Group by the type_acces column
 * @method CommonConsultationQuery groupByAutoriserReponseElectronique() Group by the autoriser_reponse_electronique column
 * @method CommonConsultationQuery groupByRegleMiseEnLigne() Group by the regle_mise_en_ligne column
 * @method CommonConsultationQuery groupByIdRegleValidation() Group by the id_regle_validation column
 * @method CommonConsultationQuery groupByIntituleFr() Group by the intitule_fr column
 * @method CommonConsultationQuery groupByIntituleEn() Group by the intitule_en column
 * @method CommonConsultationQuery groupByIntituleEs() Group by the intitule_es column
 * @method CommonConsultationQuery groupByIntituleSu() Group by the intitule_su column
 * @method CommonConsultationQuery groupByIntituleDu() Group by the intitule_du column
 * @method CommonConsultationQuery groupByIntituleCz() Group by the intitule_cz column
 * @method CommonConsultationQuery groupByIntituleAr() Group by the intitule_ar column
 * @method CommonConsultationQuery groupByIntituleIt() Group by the intitule_it column
 * @method CommonConsultationQuery groupByObjetFr() Group by the objet_fr column
 * @method CommonConsultationQuery groupByObjetEn() Group by the objet_en column
 * @method CommonConsultationQuery groupByObjetEs() Group by the objet_es column
 * @method CommonConsultationQuery groupByObjetSu() Group by the objet_su column
 * @method CommonConsultationQuery groupByObjetDu() Group by the objet_du column
 * @method CommonConsultationQuery groupByObjetCz() Group by the objet_cz column
 * @method CommonConsultationQuery groupByObjetAr() Group by the objet_ar column
 * @method CommonConsultationQuery groupByObjetIt() Group by the objet_it column
 * @method CommonConsultationQuery groupByClauseSociale() Group by the clause_sociale column
 * @method CommonConsultationQuery groupByClauseEnvironnementale() Group by the clause_environnementale column
 * @method CommonConsultationQuery groupByReponseObligatoire() Group by the reponse_obligatoire column
 * @method CommonConsultationQuery groupByAutoriserPublicite() Group by the autoriser_publicite column
 * @method CommonConsultationQuery groupByTypeEnvoi() Group by the type_envoi column
 * @method CommonConsultationQuery groupByChiffrementOffre() Group by the chiffrement_offre column
 * @method CommonConsultationQuery groupByEnvCandidature() Group by the env_candidature column
 * @method CommonConsultationQuery groupByEnvOffre() Group by the env_offre column
 * @method CommonConsultationQuery groupByEnvAnonymat() Group by the env_anonymat column
 * @method CommonConsultationQuery groupByIdEtatConsultation() Group by the id_etat_consultation column
 * @method CommonConsultationQuery groupByReferenceConnecteur() Group by the reference_connecteur column
 * @method CommonConsultationQuery groupByConsStatut() Group by the cons_statut column
 * @method CommonConsultationQuery groupByIdApprobateur() Group by the id_approbateur column
 * @method CommonConsultationQuery groupByIdValideur() Group by the id_valideur column
 * @method CommonConsultationQuery groupByServiceValidation() Group by the service_validation column
 * @method CommonConsultationQuery groupByIdCreateur() Group by the id_createur column
 * @method CommonConsultationQuery groupByNomCreateur() Group by the nom_createur column
 * @method CommonConsultationQuery groupByPrenomCreateur() Group by the prenom_createur column
 * @method CommonConsultationQuery groupBySignatureActeEngagement() Group by the signature_acte_engagement column
 * @method CommonConsultationQuery groupByArchivemetadescription() Group by the archiveMetaDescription column
 * @method CommonConsultationQuery groupByArchivemetamotsclef() Group by the archiveMetaMotsClef column
 * @method CommonConsultationQuery groupByArchiveidblobzip() Group by the archiveIdBlobZip column
 * @method CommonConsultationQuery groupByDecisionPartielle() Group by the decision_partielle column
 * @method CommonConsultationQuery groupByTypeDecisionARenseigner() Group by the type_decision_a_renseigner column
 * @method CommonConsultationQuery groupByTypeDecisionAttributionMarche() Group by the type_decision_attribution_marche column
 * @method CommonConsultationQuery groupByTypeDecisionDeclarationSansSuite() Group by the type_decision_declaration_sans_suite column
 * @method CommonConsultationQuery groupByTypeDecisionDeclarationInfructueux() Group by the type_decision_declaration_infructueux column
 * @method CommonConsultationQuery groupByTypeDecisionSelectionEntreprise() Group by the type_decision_selection_entreprise column
 * @method CommonConsultationQuery groupByTypeDecisionAttributionAccordCadre() Group by the type_decision_attribution_accord_cadre column
 * @method CommonConsultationQuery groupByTypeDecisionAdmissionSad() Group by the type_decision_admission_sad column
 * @method CommonConsultationQuery groupByTypeDecisionAutre() Group by the type_decision_autre column
 * @method CommonConsultationQuery groupByIdArchiveur() Group by the id_archiveur column
 * @method CommonConsultationQuery groupByPrenomNomAgentTelechargementPlis() Group by the prenom_nom_agent_telechargement_plis column
 * @method CommonConsultationQuery groupByIdAgentTelechargementPlis() Group by the id_agent_telechargement_plis column
 * @method CommonConsultationQuery groupByPathTelechargementPlis() Group by the path_telechargement_plis column
 * @method CommonConsultationQuery groupByDateTelechargementPlis() Group by the date_telechargement_plis column
 * @method CommonConsultationQuery groupByServiceValidationIntermediaire() Group by the service_validation_intermediaire column
 * @method CommonConsultationQuery groupByEnvOffreTechnique() Group by the env_offre_technique column
 * @method CommonConsultationQuery groupByRefOrgPartenaire() Group by the ref_org_partenaire column
 * @method CommonConsultationQuery groupByDateArchivage() Group by the date_archivage column
 * @method CommonConsultationQuery groupByDateDecisionAnnulation() Group by the date_decision_annulation column
 * @method CommonConsultationQuery groupByCommentaireAnnulation() Group by the commentaire_annulation column
 * @method CommonConsultationQuery groupByDateMiseEnLigneSouhaitee() Group by the date_mise_en_ligne_souhaitee column
 * @method CommonConsultationQuery groupByEtatEnAttenteValidation() Group by the etat_en_attente_validation column
 * @method CommonConsultationQuery groupByDossierAdditif() Group by the dossier_additif column
 * @method CommonConsultationQuery groupByTypeMarche() Group by the type_marche column
 * @method CommonConsultationQuery groupByTypePrestation() Group by the type_prestation column
 * @method CommonConsultationQuery groupByDateModification() Group by the date_modification column
 * @method CommonConsultationQuery groupByDelaiPartiel() Group by the delai_partiel column
 * @method CommonConsultationQuery groupByDatefinlocale() Group by the dateFinLocale column
 * @method CommonConsultationQuery groupByLieuresidence() Group by the lieuResidence column
 * @method CommonConsultationQuery groupByAlerte() Group by the alerte column
 * @method CommonConsultationQuery groupByDoublon() Group by the doublon column
 * @method CommonConsultationQuery groupByDenominationAdapte() Group by the denomination_adapte column
 * @method CommonConsultationQuery groupByUrlConsultationAvisPub() Group by the url_consultation_avis_pub column
 * @method CommonConsultationQuery groupByDoublonDe() Group by the doublon_de column
 * @method CommonConsultationQuery groupByEntiteAdjudicatrice() Group by the entite_adjudicatrice column
 * @method CommonConsultationQuery groupByCodeOperation() Group by the code_operation column
 * @method CommonConsultationQuery groupByClauseSocialeConditionExecution() Group by the clause_sociale_condition_execution column
 * @method CommonConsultationQuery groupByClauseSocialeInsertion() Group by the clause_sociale_insertion column
 * @method CommonConsultationQuery groupByClauseSocialeAteliersProteges() Group by the clause_sociale_ateliers_proteges column
 * @method CommonConsultationQuery groupByClauseEnvSpecsTechniques() Group by the clause_env_specs_techniques column
 * @method CommonConsultationQuery groupByClauseEnvCondExecution() Group by the clause_env_cond_execution column
 * @method CommonConsultationQuery groupByClauseEnvCriteresSelect() Group by the clause_env_criteres_select column
 * @method CommonConsultationQuery groupByIdDonneeComplementaire() Group by the id_donnee_complementaire column
 * @method CommonConsultationQuery groupByDonneeComplementaireObligatoire() Group by the donnee_complementaire_obligatoire column
 * @method CommonConsultationQuery groupByModeOuvertureReponse() Group by the mode_ouverture_reponse column
 * @method CommonConsultationQuery groupByIdFichierAnnulation() Group by the id_fichier_annulation column
 * @method CommonConsultationQuery groupByIdoperation() Group by the idOperation column
 * @method CommonConsultationQuery groupByMarchePublicSimplifie() Group by the marche_public_simplifie column
 * @method CommonConsultationQuery groupByInfosBlocsAtlas() Group by the infos_blocs_atlas column
 * @method CommonConsultationQuery groupByDateFinUnix() Group by the DATE_FIN_UNIX column
 * @method CommonConsultationQuery groupByDateAchevement() Group by the date_achevement column
 * @method CommonConsultationQuery groupByNombreDeLots() Group by the nombre_de_lots column
 *
 * @method CommonConsultationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonConsultationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonConsultationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonConsultationQuery leftJoinCommonAVIS($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonAVIS relation
 * @method CommonConsultationQuery rightJoinCommonAVIS($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonAVIS relation
 * @method CommonConsultationQuery innerJoinCommonAVIS($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonAVIS relation
 *
 * @method CommonConsultationQuery leftJoinCommonAnnonce($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonAnnonce relation
 * @method CommonConsultationQuery rightJoinCommonAnnonce($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonAnnonce relation
 * @method CommonConsultationQuery innerJoinCommonAnnonce($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonAnnonce relation
 *
 * @method CommonConsultationQuery leftJoinCommonAnnonceBoampRelatedByOrganismeConsultationRef($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonAnnonceBoampRelatedByOrganismeConsultationRef relation
 * @method CommonConsultationQuery rightJoinCommonAnnonceBoampRelatedByOrganismeConsultationRef($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonAnnonceBoampRelatedByOrganismeConsultationRef relation
 * @method CommonConsultationQuery innerJoinCommonAnnonceBoampRelatedByOrganismeConsultationRef($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonAnnonceBoampRelatedByOrganismeConsultationRef relation
 *
 * @method CommonConsultationQuery leftJoinCommonAnnonceBoampRelatedByConsultationRef($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonAnnonceBoampRelatedByConsultationRef relation
 * @method CommonConsultationQuery rightJoinCommonAnnonceBoampRelatedByConsultationRef($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonAnnonceBoampRelatedByConsultationRef relation
 * @method CommonConsultationQuery innerJoinCommonAnnonceBoampRelatedByConsultationRef($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonAnnonceBoampRelatedByConsultationRef relation
 *
 * @method CommonConsultationQuery leftJoinCommonAvisPub($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonAvisPub relation
 * @method CommonConsultationQuery rightJoinCommonAvisPub($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonAvisPub relation
 * @method CommonConsultationQuery innerJoinCommonAvisPub($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonAvisPub relation
 *
 * @method CommonConsultationQuery leftJoinCommonCategorieLot($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonCategorieLot relation
 * @method CommonConsultationQuery rightJoinCommonCategorieLot($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonCategorieLot relation
 * @method CommonConsultationQuery innerJoinCommonCategorieLot($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonCategorieLot relation
 *
 * @method CommonConsultationQuery leftJoinCommonComplement($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonComplement relation
 * @method CommonConsultationQuery rightJoinCommonComplement($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonComplement relation
 * @method CommonConsultationQuery innerJoinCommonComplement($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonComplement relation
 *
 * @method CommonConsultationQuery leftJoinCommonConsultationHistoriqueEtat($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonConsultationHistoriqueEtat relation
 * @method CommonConsultationQuery rightJoinCommonConsultationHistoriqueEtat($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonConsultationHistoriqueEtat relation
 * @method CommonConsultationQuery innerJoinCommonConsultationHistoriqueEtat($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonConsultationHistoriqueEtat relation
 *
 * @method CommonConsultationQuery leftJoinCommonDATEFIN($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonDATEFIN relation
 * @method CommonConsultationQuery rightJoinCommonDATEFIN($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonDATEFIN relation
 * @method CommonConsultationQuery innerJoinCommonDATEFIN($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonDATEFIN relation
 *
 * @method CommonConsultationQuery leftJoinCommonDAConsultation($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonDAConsultation relation
 * @method CommonConsultationQuery rightJoinCommonDAConsultation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonDAConsultation relation
 * @method CommonConsultationQuery innerJoinCommonDAConsultation($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonDAConsultation relation
 *
 * @method CommonConsultationQuery leftJoinCommonDCE($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonDCE relation
 * @method CommonConsultationQuery rightJoinCommonDCE($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonDCE relation
 * @method CommonConsultationQuery innerJoinCommonDCE($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonDCE relation
 *
 * @method CommonConsultationQuery leftJoinCommonDocumentExterne($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonDocumentExterne relation
 * @method CommonConsultationQuery rightJoinCommonDocumentExterne($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonDocumentExterne relation
 * @method CommonConsultationQuery innerJoinCommonDocumentExterne($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonDocumentExterne relation
 *
 * @method CommonConsultationQuery leftJoinCommonHeliosPiecePublicite($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonHeliosPiecePublicite relation
 * @method CommonConsultationQuery rightJoinCommonHeliosPiecePublicite($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonHeliosPiecePublicite relation
 * @method CommonConsultationQuery innerJoinCommonHeliosPiecePublicite($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonHeliosPiecePublicite relation
 *
 * @method CommonConsultationQuery leftJoinCommonHeliosPvConsultation($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonHeliosPvConsultation relation
 * @method CommonConsultationQuery rightJoinCommonHeliosPvConsultation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonHeliosPvConsultation relation
 * @method CommonConsultationQuery innerJoinCommonHeliosPvConsultation($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonHeliosPvConsultation relation
 *
 * @method CommonConsultationQuery leftJoinCommonHeliosRapportPrefet($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonHeliosRapportPrefet relation
 * @method CommonConsultationQuery rightJoinCommonHeliosRapportPrefet($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonHeliosRapportPrefet relation
 * @method CommonConsultationQuery innerJoinCommonHeliosRapportPrefet($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonHeliosRapportPrefet relation
 *
 * @method CommonConsultationQuery leftJoinCommonHeliosTableauAr($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonHeliosTableauAr relation
 * @method CommonConsultationQuery rightJoinCommonHeliosTableauAr($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonHeliosTableauAr relation
 * @method CommonConsultationQuery innerJoinCommonHeliosTableauAr($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonHeliosTableauAr relation
 *
 * @method CommonConsultationQuery leftJoinCommonHeliosTeletransmission($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonHeliosTeletransmission relation
 * @method CommonConsultationQuery rightJoinCommonHeliosTeletransmission($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonHeliosTeletransmission relation
 * @method CommonConsultationQuery innerJoinCommonHeliosTeletransmission($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonHeliosTeletransmission relation
 *
 * @method CommonConsultationQuery leftJoinCommonInterneConsultation($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonInterneConsultation relation
 * @method CommonConsultationQuery rightJoinCommonInterneConsultation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonInterneConsultation relation
 * @method CommonConsultationQuery innerJoinCommonInterneConsultation($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonInterneConsultation relation
 *
 * @method CommonConsultationQuery leftJoinCommonInterneConsultationSuiviSeul($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonInterneConsultationSuiviSeul relation
 * @method CommonConsultationQuery rightJoinCommonInterneConsultationSuiviSeul($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonInterneConsultationSuiviSeul relation
 * @method CommonConsultationQuery innerJoinCommonInterneConsultationSuiviSeul($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonInterneConsultationSuiviSeul relation
 *
 * @method CommonConsultationQuery leftJoinCommonOffrePapier($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonOffrePapier relation
 * @method CommonConsultationQuery rightJoinCommonOffrePapier($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonOffrePapier relation
 * @method CommonConsultationQuery innerJoinCommonOffrePapier($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonOffrePapier relation
 *
 * @method CommonConsultationQuery leftJoinCommonOffres($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonOffres relation
 * @method CommonConsultationQuery rightJoinCommonOffres($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonOffres relation
 * @method CommonConsultationQuery innerJoinCommonOffres($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonOffres relation
 *
 * @method CommonConsultationQuery leftJoinCommonPanierEntreprise($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonPanierEntreprise relation
 * @method CommonConsultationQuery rightJoinCommonPanierEntreprise($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonPanierEntreprise relation
 * @method CommonConsultationQuery innerJoinCommonPanierEntreprise($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonPanierEntreprise relation
 *
 * @method CommonConsultationQuery leftJoinCommonPiecesDCERelatedByRefConsultation($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonPiecesDCERelatedByRefConsultation relation
 * @method CommonConsultationQuery rightJoinCommonPiecesDCERelatedByRefConsultation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonPiecesDCERelatedByRefConsultation relation
 * @method CommonConsultationQuery innerJoinCommonPiecesDCERelatedByRefConsultation($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonPiecesDCERelatedByRefConsultation relation
 *
 * @method CommonConsultationQuery leftJoinCommonPiecesDCERelatedByOrganismeConsultation($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonPiecesDCERelatedByOrganismeConsultation relation
 * @method CommonConsultationQuery rightJoinCommonPiecesDCERelatedByOrganismeConsultation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonPiecesDCERelatedByOrganismeConsultation relation
 * @method CommonConsultationQuery innerJoinCommonPiecesDCERelatedByOrganismeConsultation($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonPiecesDCERelatedByOrganismeConsultation relation
 *
 * @method CommonConsultationQuery leftJoinCommonRG($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonRG relation
 * @method CommonConsultationQuery rightJoinCommonRG($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonRG relation
 * @method CommonConsultationQuery innerJoinCommonRG($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonRG relation
 *
 * @method CommonConsultationQuery leftJoinCommonRetraitPapier($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonRetraitPapier relation
 * @method CommonConsultationQuery rightJoinCommonRetraitPapier($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonRetraitPapier relation
 * @method CommonConsultationQuery innerJoinCommonRetraitPapier($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonRetraitPapier relation
 *
 * @method CommonConsultationQuery leftJoinCommonSupportPublication($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonSupportPublication relation
 * @method CommonConsultationQuery rightJoinCommonSupportPublication($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonSupportPublication relation
 * @method CommonConsultationQuery innerJoinCommonSupportPublication($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonSupportPublication relation
 *
 * @method CommonConsultationQuery leftJoinCommonTelechargement($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTelechargement relation
 * @method CommonConsultationQuery rightJoinCommonTelechargement($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTelechargement relation
 * @method CommonConsultationQuery innerJoinCommonTelechargement($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTelechargement relation
 *
 * @method CommonConsultationQuery leftJoinCommonTelechargementAnonymeRelatedByOrganismeConsultationRef($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTelechargementAnonymeRelatedByOrganismeConsultationRef relation
 * @method CommonConsultationQuery rightJoinCommonTelechargementAnonymeRelatedByOrganismeConsultationRef($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTelechargementAnonymeRelatedByOrganismeConsultationRef relation
 * @method CommonConsultationQuery innerJoinCommonTelechargementAnonymeRelatedByOrganismeConsultationRef($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTelechargementAnonymeRelatedByOrganismeConsultationRef relation
 *
 * @method CommonConsultationQuery leftJoinCommonTelechargementAnonymeRelatedByConsultationRef($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTelechargementAnonymeRelatedByConsultationRef relation
 * @method CommonConsultationQuery rightJoinCommonTelechargementAnonymeRelatedByConsultationRef($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTelechargementAnonymeRelatedByConsultationRef relation
 * @method CommonConsultationQuery innerJoinCommonTelechargementAnonymeRelatedByConsultationRef($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTelechargementAnonymeRelatedByConsultationRef relation
 *
 * @method CommonConsultationQuery leftJoinCommonConsultationDocumentCfe($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonConsultationDocumentCfe relation
 * @method CommonConsultationQuery rightJoinCommonConsultationDocumentCfe($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonConsultationDocumentCfe relation
 * @method CommonConsultationQuery innerJoinCommonConsultationDocumentCfe($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonConsultationDocumentCfe relation
 *
 * @method CommonConsultationQuery leftJoinCommonTCalendrier($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTCalendrier relation
 * @method CommonConsultationQuery rightJoinCommonTCalendrier($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTCalendrier relation
 * @method CommonConsultationQuery innerJoinCommonTCalendrier($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTCalendrier relation
 *
 * @method CommonConsultationQuery leftJoinCommonTParamDossierFormulaire($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTParamDossierFormulaire relation
 * @method CommonConsultationQuery rightJoinCommonTParamDossierFormulaire($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTParamDossierFormulaire relation
 * @method CommonConsultationQuery innerJoinCommonTParamDossierFormulaire($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTParamDossierFormulaire relation
 *
 * @method CommonConsultationQuery leftJoinCommonTReponseElecFormulaire($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTReponseElecFormulaire relation
 * @method CommonConsultationQuery rightJoinCommonTReponseElecFormulaire($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTReponseElecFormulaire relation
 * @method CommonConsultationQuery innerJoinCommonTReponseElecFormulaire($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTReponseElecFormulaire relation
 *
 * @method CommonConsultationQuery leftJoinCommonVisiteLieux($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonVisiteLieux relation
 * @method CommonConsultationQuery rightJoinCommonVisiteLieux($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonVisiteLieux relation
 * @method CommonConsultationQuery innerJoinCommonVisiteLieux($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonVisiteLieux relation
 *
 * @method CommonConsultation findOne(PropelPDO $con = null) Return the first CommonConsultation matching the query
 * @method CommonConsultation findOneOrCreate(PropelPDO $con = null) Return the first CommonConsultation matching the query, or a new CommonConsultation object populated from the query conditions when no match is found
 *
 * @method CommonConsultation findOneByReference(int $reference) Return the first CommonConsultation filtered by the reference column
 * @method CommonConsultation findOneByOrganisme(string $organisme) Return the first CommonConsultation filtered by the organisme column
 * @method CommonConsultation findOneByReferenceUtilisateur(string $reference_utilisateur) Return the first CommonConsultation filtered by the reference_utilisateur column
 * @method CommonConsultation findOneByCategorie(string $categorie) Return the first CommonConsultation filtered by the categorie column
 * @method CommonConsultation findOneByTitre(string $titre) Return the first CommonConsultation filtered by the titre column
 * @method CommonConsultation findOneByResume(string $resume) Return the first CommonConsultation filtered by the resume column
 * @method CommonConsultation findOneByDatedebut(string $datedebut) Return the first CommonConsultation filtered by the datedebut column
 * @method CommonConsultation findOneByDatefin(string $datefin) Return the first CommonConsultation filtered by the datefin column
 * @method CommonConsultation findOneByDatevalidation(string $datevalidation) Return the first CommonConsultation filtered by the datevalidation column
 * @method CommonConsultation findOneByTypeProcedure(string $type_procedure) Return the first CommonConsultation filtered by the type_procedure column
 * @method CommonConsultation findOneByCodeProcedure(string $code_procedure) Return the first CommonConsultation filtered by the code_procedure column
 * @method CommonConsultation findOneByReponseElectronique(string $reponse_electronique) Return the first CommonConsultation filtered by the reponse_electronique column
 * @method CommonConsultation findOneByNumProcedure(int $num_procedure) Return the first CommonConsultation filtered by the num_procedure column
 * @method CommonConsultation findOneByIdTypeProcedure(int $id_type_procedure) Return the first CommonConsultation filtered by the id_type_procedure column
 * @method CommonConsultation findOneByIdTypeAvis(int $id_type_avis) Return the first CommonConsultation filtered by the id_type_avis column
 * @method CommonConsultation findOneByLieuExecution(string $lieu_execution) Return the first CommonConsultation filtered by the lieu_execution column
 * @method CommonConsultation findOneByTypeMiseEnLigne(int $type_mise_en_ligne) Return the first CommonConsultation filtered by the type_mise_en_ligne column
 * @method CommonConsultation findOneByDatemiseenligne(string $datemiseenligne) Return the first CommonConsultation filtered by the datemiseenligne column
 * @method CommonConsultation findOneByIsTiersAvis(string $is_tiers_avis) Return the first CommonConsultation filtered by the is_tiers_avis column
 * @method CommonConsultation findOneByUrl(string $url) Return the first CommonConsultation filtered by the url column
 * @method CommonConsultation findOneByDatefinSad(string $datefin_sad) Return the first CommonConsultation filtered by the datefin_sad column
 * @method CommonConsultation findOneByIsSysAcqDyn(int $is_sys_acq_dyn) Return the first CommonConsultation filtered by the is_sys_acq_dyn column
 * @method CommonConsultation findOneByReferenceConsultationInit(string $reference_consultation_init) Return the first CommonConsultation filtered by the reference_consultation_init column
 * @method CommonConsultation findOneBySignatureOffre(string $signature_offre) Return the first CommonConsultation filtered by the signature_offre column
 * @method CommonConsultation findOneByIdTypeValidation(int $id_type_validation) Return the first CommonConsultation filtered by the id_type_validation column
 * @method CommonConsultation findOneByEtatApprobation(string $etat_approbation) Return the first CommonConsultation filtered by the etat_approbation column
 * @method CommonConsultation findOneByEtatValidation(string $etat_validation) Return the first CommonConsultation filtered by the etat_validation column
 * @method CommonConsultation findOneByChampSuppInvisible(string $champ_supp_invisible) Return the first CommonConsultation filtered by the champ_supp_invisible column
 * @method CommonConsultation findOneByCodeCpv1(string $code_cpv_1) Return the first CommonConsultation filtered by the code_cpv_1 column
 * @method CommonConsultation findOneByCodeCpv2(string $code_cpv_2) Return the first CommonConsultation filtered by the code_cpv_2 column
 * @method CommonConsultation findOneByPublicationEurope(string $publication_europe) Return the first CommonConsultation filtered by the publication_europe column
 * @method CommonConsultation findOneByEtatPublication(int $etat_publication) Return the first CommonConsultation filtered by the etat_publication column
 * @method CommonConsultation findOneByPoursuivreAffichage(int $poursuivre_affichage) Return the first CommonConsultation filtered by the poursuivre_affichage column
 * @method CommonConsultation findOneByNbrTelechargementDce(int $nbr_telechargement_dce) Return the first CommonConsultation filtered by the nbr_telechargement_dce column
 * @method CommonConsultation findOneByServiceId(int $service_id) Return the first CommonConsultation filtered by the service_id column
 * @method CommonConsultation findOneByServiceAssocieId(int $service_associe_id) Return the first CommonConsultation filtered by the service_associe_id column
 * @method CommonConsultation findOneByDetailConsultation(string $detail_consultation) Return the first CommonConsultation filtered by the detail_consultation column
 * @method CommonConsultation findOneByDateFinAffichage(string $date_fin_affichage) Return the first CommonConsultation filtered by the date_fin_affichage column
 * @method CommonConsultation findOneByDepouillablePhaseConsultation(string $depouillable_phase_consultation) Return the first CommonConsultation filtered by the depouillable_phase_consultation column
 * @method CommonConsultation findOneByConsultationTransverse(string $consultation_transverse) Return the first CommonConsultation filtered by the consultation_transverse column
 * @method CommonConsultation findOneByConsultationAchatPublique(string $consultation_achat_publique) Return the first CommonConsultation filtered by the consultation_achat_publique column
 * @method CommonConsultation findOneByUrlConsultationAchatPublique(string $url_consultation_achat_publique) Return the first CommonConsultation filtered by the url_consultation_achat_publique column
 * @method CommonConsultation findOneByPartialDceDownload(string $partial_dce_download) Return the first CommonConsultation filtered by the partial_dce_download column
 * @method CommonConsultation findOneByTiragePlan(int $tirage_plan) Return the first CommonConsultation filtered by the tirage_plan column
 * @method CommonConsultation findOneByTireurPlan(int $tireur_plan) Return the first CommonConsultation filtered by the tireur_plan column
 * @method CommonConsultation findOneByDateMiseEnLigneCalcule(string $date_mise_en_ligne_calcule) Return the first CommonConsultation filtered by the date_mise_en_ligne_calcule column
 * @method CommonConsultation findOneByAccessibiliteEn(string $accessibilite_en) Return the first CommonConsultation filtered by the accessibilite_en column
 * @method CommonConsultation findOneByAccessibiliteEs(string $accessibilite_es) Return the first CommonConsultation filtered by the accessibilite_es column
 * @method CommonConsultation findOneByNbrReponse(int $nbr_reponse) Return the first CommonConsultation filtered by the nbr_reponse column
 * @method CommonConsultation findOneByIdTypeProcedureOrg(int $id_type_procedure_org) Return the first CommonConsultation filtered by the id_type_procedure_org column
 * @method CommonConsultation findOneByOrganismeConsultationInit(string $organisme_consultation_init) Return the first CommonConsultation filtered by the organisme_consultation_init column
 * @method CommonConsultation findOneByTirageDescriptif(string $tirage_descriptif) Return the first CommonConsultation filtered by the tirage_descriptif column
 * @method CommonConsultation findOneByDateValidationIntermediaire(string $date_validation_intermediaire) Return the first CommonConsultation filtered by the date_validation_intermediaire column
 * @method CommonConsultation findOneByAccessibiliteFr(string $accessibilite_fr) Return the first CommonConsultation filtered by the accessibilite_fr column
 * @method CommonConsultation findOneByIdTrAccessibilite(int $id_tr_accessibilite) Return the first CommonConsultation filtered by the id_tr_accessibilite column
 * @method CommonConsultation findOneByAccessibiliteCz(string $accessibilite_cz) Return the first CommonConsultation filtered by the accessibilite_cz column
 * @method CommonConsultation findOneByAccessibiliteDu(string $accessibilite_du) Return the first CommonConsultation filtered by the accessibilite_du column
 * @method CommonConsultation findOneByAccessibiliteSu(string $accessibilite_su) Return the first CommonConsultation filtered by the accessibilite_su column
 * @method CommonConsultation findOneByAccessibiliteAr(string $accessibilite_ar) Return the first CommonConsultation filtered by the accessibilite_ar column
 * @method CommonConsultation findOneByAlloti(string $alloti) Return the first CommonConsultation filtered by the alloti column
 * @method CommonConsultation findOneByNumeroPhase(int $numero_phase) Return the first CommonConsultation filtered by the numero_phase column
 * @method CommonConsultation findOneByConsultationExterne(string $consultation_externe) Return the first CommonConsultation filtered by the consultation_externe column
 * @method CommonConsultation findOneByUrlConsultationExterne(string $url_consultation_externe) Return the first CommonConsultation filtered by the url_consultation_externe column
 * @method CommonConsultation findOneByOrgDenomination(string $org_denomination) Return the first CommonConsultation filtered by the org_denomination column
 * @method CommonConsultation findOneByDomainesActivites(string $domaines_activites) Return the first CommonConsultation filtered by the domaines_activites column
 * @method CommonConsultation findOneByIdAffaire(int $id_affaire) Return the first CommonConsultation filtered by the id_affaire column
 * @method CommonConsultation findOneByAdresseRetraisDossiers(string $adresse_retrais_dossiers) Return the first CommonConsultation filtered by the adresse_retrais_dossiers column
 * @method CommonConsultation findOneByCautionProvisoire(string $caution_provisoire) Return the first CommonConsultation filtered by the caution_provisoire column
 * @method CommonConsultation findOneByAdresseDepotOffres(string $adresse_depot_offres) Return the first CommonConsultation filtered by the adresse_depot_offres column
 * @method CommonConsultation findOneByLieuOuverturePlis(string $lieu_ouverture_plis) Return the first CommonConsultation filtered by the lieu_ouverture_plis column
 * @method CommonConsultation findOneByPrixAquisitionPlans(string $prix_aquisition_plans) Return the first CommonConsultation filtered by the prix_aquisition_plans column
 * @method CommonConsultation findOneByQualification(string $qualification) Return the first CommonConsultation filtered by the qualification column
 * @method CommonConsultation findOneByAgrements(string $agrements) Return the first CommonConsultation filtered by the agrements column
 * @method CommonConsultation findOneByAddEchantillion(string $add_echantillion) Return the first CommonConsultation filtered by the add_echantillion column
 * @method CommonConsultation findOneByDateLimiteEchantillion(string $date_limite_echantillion) Return the first CommonConsultation filtered by the date_limite_echantillion column
 * @method CommonConsultation findOneByAddReunion(string $add_reunion) Return the first CommonConsultation filtered by the add_reunion column
 * @method CommonConsultation findOneByDateReunion(string $date_reunion) Return the first CommonConsultation filtered by the date_reunion column
 * @method CommonConsultation findOneByVariantes(string $variantes) Return the first CommonConsultation filtered by the variantes column
 * @method CommonConsultation findOneByAdresseRetraisDossiersAr(string $adresse_retrais_dossiers_ar) Return the first CommonConsultation filtered by the adresse_retrais_dossiers_ar column
 * @method CommonConsultation findOneByAdresseDepotOffresAr(string $adresse_depot_offres_ar) Return the first CommonConsultation filtered by the adresse_depot_offres_ar column
 * @method CommonConsultation findOneByLieuOuverturePlisAr(string $lieu_ouverture_plis_ar) Return the first CommonConsultation filtered by the lieu_ouverture_plis_ar column
 * @method CommonConsultation findOneByPiecesDossierAdmin(string $pieces_dossier_admin) Return the first CommonConsultation filtered by the pieces_dossier_admin column
 * @method CommonConsultation findOneByPiecesDossierAdminFr(string $pieces_dossier_admin_fr) Return the first CommonConsultation filtered by the pieces_dossier_admin_fr column
 * @method CommonConsultation findOneByPiecesDossierAdminEn(string $pieces_dossier_admin_en) Return the first CommonConsultation filtered by the pieces_dossier_admin_en column
 * @method CommonConsultation findOneByPiecesDossierAdminEs(string $pieces_dossier_admin_es) Return the first CommonConsultation filtered by the pieces_dossier_admin_es column
 * @method CommonConsultation findOneByPiecesDossierAdminSu(string $pieces_dossier_admin_su) Return the first CommonConsultation filtered by the pieces_dossier_admin_su column
 * @method CommonConsultation findOneByPiecesDossierAdminDu(string $pieces_dossier_admin_du) Return the first CommonConsultation filtered by the pieces_dossier_admin_du column
 * @method CommonConsultation findOneByPiecesDossierAdminCz(string $pieces_dossier_admin_cz) Return the first CommonConsultation filtered by the pieces_dossier_admin_cz column
 * @method CommonConsultation findOneByPiecesDossierAdminAr(string $pieces_dossier_admin_ar) Return the first CommonConsultation filtered by the pieces_dossier_admin_ar column
 * @method CommonConsultation findOneByPiecesDossierTech(string $pieces_dossier_tech) Return the first CommonConsultation filtered by the pieces_dossier_tech column
 * @method CommonConsultation findOneByPiecesDossierTechFr(string $pieces_dossier_tech_fr) Return the first CommonConsultation filtered by the pieces_dossier_tech_fr column
 * @method CommonConsultation findOneByPiecesDossierTechEn(string $pieces_dossier_tech_en) Return the first CommonConsultation filtered by the pieces_dossier_tech_en column
 * @method CommonConsultation findOneByPiecesDossierTechEs(string $pieces_dossier_tech_es) Return the first CommonConsultation filtered by the pieces_dossier_tech_es column
 * @method CommonConsultation findOneByPiecesDossierTechSu(string $pieces_dossier_tech_su) Return the first CommonConsultation filtered by the pieces_dossier_tech_su column
 * @method CommonConsultation findOneByPiecesDossierTechDu(string $pieces_dossier_tech_du) Return the first CommonConsultation filtered by the pieces_dossier_tech_du column
 * @method CommonConsultation findOneByPiecesDossierTechCz(string $pieces_dossier_tech_cz) Return the first CommonConsultation filtered by the pieces_dossier_tech_cz column
 * @method CommonConsultation findOneByPiecesDossierTechAr(string $pieces_dossier_tech_ar) Return the first CommonConsultation filtered by the pieces_dossier_tech_ar column
 * @method CommonConsultation findOneByPiecesDossierAdditif(string $pieces_dossier_additif) Return the first CommonConsultation filtered by the pieces_dossier_additif column
 * @method CommonConsultation findOneByPiecesDossierAdditifFr(string $pieces_dossier_additif_fr) Return the first CommonConsultation filtered by the pieces_dossier_additif_fr column
 * @method CommonConsultation findOneByPiecesDossierAdditifEn(string $pieces_dossier_additif_en) Return the first CommonConsultation filtered by the pieces_dossier_additif_en column
 * @method CommonConsultation findOneByPiecesDossierAdditifEs(string $pieces_dossier_additif_es) Return the first CommonConsultation filtered by the pieces_dossier_additif_es column
 * @method CommonConsultation findOneByPiecesDossierAdditifSu(string $pieces_dossier_additif_su) Return the first CommonConsultation filtered by the pieces_dossier_additif_su column
 * @method CommonConsultation findOneByPiecesDossierAdditifDu(string $pieces_dossier_additif_du) Return the first CommonConsultation filtered by the pieces_dossier_additif_du column
 * @method CommonConsultation findOneByPiecesDossierAdditifCz(string $pieces_dossier_additif_cz) Return the first CommonConsultation filtered by the pieces_dossier_additif_cz column
 * @method CommonConsultation findOneByPiecesDossierAdditifAr(string $pieces_dossier_additif_ar) Return the first CommonConsultation filtered by the pieces_dossier_additif_ar column
 * @method CommonConsultation findOneByIdRpa(int $id_rpa) Return the first CommonConsultation filtered by the id_rpa column
 * @method CommonConsultation findOneByDetailConsultationFr(string $detail_consultation_fr) Return the first CommonConsultation filtered by the detail_consultation_fr column
 * @method CommonConsultation findOneByDetailConsultationEn(string $detail_consultation_en) Return the first CommonConsultation filtered by the detail_consultation_en column
 * @method CommonConsultation findOneByDetailConsultationEs(string $detail_consultation_es) Return the first CommonConsultation filtered by the detail_consultation_es column
 * @method CommonConsultation findOneByDetailConsultationSu(string $detail_consultation_su) Return the first CommonConsultation filtered by the detail_consultation_su column
 * @method CommonConsultation findOneByDetailConsultationDu(string $detail_consultation_du) Return the first CommonConsultation filtered by the detail_consultation_du column
 * @method CommonConsultation findOneByDetailConsultationCz(string $detail_consultation_cz) Return the first CommonConsultation filtered by the detail_consultation_cz column
 * @method CommonConsultation findOneByDetailConsultationAr(string $detail_consultation_ar) Return the first CommonConsultation filtered by the detail_consultation_ar column
 * @method CommonConsultation findOneByEchantillon(string $echantillon) Return the first CommonConsultation filtered by the echantillon column
 * @method CommonConsultation findOneByReunion(string $reunion) Return the first CommonConsultation filtered by the reunion column
 * @method CommonConsultation findOneByVisitesLieux(string $visites_lieux) Return the first CommonConsultation filtered by the visites_lieux column
 * @method CommonConsultation findOneByVarianteCalcule(string $variante_calcule) Return the first CommonConsultation filtered by the variante_calcule column
 * @method CommonConsultation findOneByAdresseRetraisDossiersFr(string $adresse_retrais_dossiers_fr) Return the first CommonConsultation filtered by the adresse_retrais_dossiers_fr column
 * @method CommonConsultation findOneByAdresseRetraisDossiersEn(string $adresse_retrais_dossiers_en) Return the first CommonConsultation filtered by the adresse_retrais_dossiers_en column
 * @method CommonConsultation findOneByAdresseRetraisDossiersEs(string $adresse_retrais_dossiers_es) Return the first CommonConsultation filtered by the adresse_retrais_dossiers_es column
 * @method CommonConsultation findOneByAdresseRetraisDossiersSu(string $adresse_retrais_dossiers_su) Return the first CommonConsultation filtered by the adresse_retrais_dossiers_su column
 * @method CommonConsultation findOneByAdresseRetraisDossiersDu(string $adresse_retrais_dossiers_du) Return the first CommonConsultation filtered by the adresse_retrais_dossiers_du column
 * @method CommonConsultation findOneByAdresseRetraisDossiersCz(string $adresse_retrais_dossiers_cz) Return the first CommonConsultation filtered by the adresse_retrais_dossiers_cz column
 * @method CommonConsultation findOneByAdresseDepotOffresFr(string $adresse_depot_offres_fr) Return the first CommonConsultation filtered by the adresse_depot_offres_fr column
 * @method CommonConsultation findOneByAdresseDepotOffresEn(string $adresse_depot_offres_en) Return the first CommonConsultation filtered by the adresse_depot_offres_en column
 * @method CommonConsultation findOneByAdresseDepotOffresEs(string $adresse_depot_offres_es) Return the first CommonConsultation filtered by the adresse_depot_offres_es column
 * @method CommonConsultation findOneByAdresseDepotOffresSu(string $adresse_depot_offres_su) Return the first CommonConsultation filtered by the adresse_depot_offres_su column
 * @method CommonConsultation findOneByAdresseDepotOffresDu(string $adresse_depot_offres_du) Return the first CommonConsultation filtered by the adresse_depot_offres_du column
 * @method CommonConsultation findOneByAdresseDepotOffresCz(string $adresse_depot_offres_cz) Return the first CommonConsultation filtered by the adresse_depot_offres_cz column
 * @method CommonConsultation findOneByLieuOuverturePlisFr(string $lieu_ouverture_plis_fr) Return the first CommonConsultation filtered by the lieu_ouverture_plis_fr column
 * @method CommonConsultation findOneByLieuOuverturePlisEn(string $lieu_ouverture_plis_en) Return the first CommonConsultation filtered by the lieu_ouverture_plis_en column
 * @method CommonConsultation findOneByLieuOuverturePlisEs(string $lieu_ouverture_plis_es) Return the first CommonConsultation filtered by the lieu_ouverture_plis_es column
 * @method CommonConsultation findOneByLieuOuverturePlisSu(string $lieu_ouverture_plis_su) Return the first CommonConsultation filtered by the lieu_ouverture_plis_su column
 * @method CommonConsultation findOneByLieuOuverturePlisDu(string $lieu_ouverture_plis_du) Return the first CommonConsultation filtered by the lieu_ouverture_plis_du column
 * @method CommonConsultation findOneByLieuOuverturePlisCz(string $lieu_ouverture_plis_cz) Return the first CommonConsultation filtered by the lieu_ouverture_plis_cz column
 * @method CommonConsultation findOneByAddEchantillionFr(string $add_echantillion_fr) Return the first CommonConsultation filtered by the add_echantillion_fr column
 * @method CommonConsultation findOneByAddEchantillionEn(string $add_echantillion_en) Return the first CommonConsultation filtered by the add_echantillion_en column
 * @method CommonConsultation findOneByAddEchantillionEs(string $add_echantillion_es) Return the first CommonConsultation filtered by the add_echantillion_es column
 * @method CommonConsultation findOneByAddEchantillionSu(string $add_echantillion_su) Return the first CommonConsultation filtered by the add_echantillion_su column
 * @method CommonConsultation findOneByAddEchantillionDu(string $add_echantillion_du) Return the first CommonConsultation filtered by the add_echantillion_du column
 * @method CommonConsultation findOneByAddEchantillionCz(string $add_echantillion_cz) Return the first CommonConsultation filtered by the add_echantillion_cz column
 * @method CommonConsultation findOneByAddEchantillionAr(string $add_echantillion_ar) Return the first CommonConsultation filtered by the add_echantillion_ar column
 * @method CommonConsultation findOneByAddReunionFr(string $add_reunion_fr) Return the first CommonConsultation filtered by the add_reunion_fr column
 * @method CommonConsultation findOneByAddReunionEn(string $add_reunion_en) Return the first CommonConsultation filtered by the add_reunion_en column
 * @method CommonConsultation findOneByAddReunionEs(string $add_reunion_es) Return the first CommonConsultation filtered by the add_reunion_es column
 * @method CommonConsultation findOneByAddReunionSu(string $add_reunion_su) Return the first CommonConsultation filtered by the add_reunion_su column
 * @method CommonConsultation findOneByAddReunionDu(string $add_reunion_du) Return the first CommonConsultation filtered by the add_reunion_du column
 * @method CommonConsultation findOneByAddReunionCz(string $add_reunion_cz) Return the first CommonConsultation filtered by the add_reunion_cz column
 * @method CommonConsultation findOneByAddReunionAr(string $add_reunion_ar) Return the first CommonConsultation filtered by the add_reunion_ar column
 * @method CommonConsultation findOneByModePassation(string $mode_passation) Return the first CommonConsultation filtered by the mode_passation column
 * @method CommonConsultation findOneByConsultationAnnulee(string $consultation_annulee) Return the first CommonConsultation filtered by the consultation_annulee column
 * @method CommonConsultation findOneByCompteBoampAssocie(int $Compte_Boamp_Associe) Return the first CommonConsultation filtered by the Compte_Boamp_Associe column
 * @method CommonConsultation findOneByAccessibiliteIt(string $accessibilite_it) Return the first CommonConsultation filtered by the accessibilite_it column
 * @method CommonConsultation findOneByAdresseDepotOffresIt(string $adresse_depot_offres_it) Return the first CommonConsultation filtered by the adresse_depot_offres_it column
 * @method CommonConsultation findOneByLieuOuverturePlisIt(string $lieu_ouverture_plis_it) Return the first CommonConsultation filtered by the lieu_ouverture_plis_it column
 * @method CommonConsultation findOneByAdresseRetraisDossiersIt(string $adresse_retrais_dossiers_it) Return the first CommonConsultation filtered by the adresse_retrais_dossiers_it column
 * @method CommonConsultation findOneByPiecesDossierAdminIt(string $pieces_dossier_admin_it) Return the first CommonConsultation filtered by the pieces_dossier_admin_it column
 * @method CommonConsultation findOneByPiecesDossierTechIt(string $pieces_dossier_tech_it) Return the first CommonConsultation filtered by the pieces_dossier_tech_it column
 * @method CommonConsultation findOneByPiecesDossierAdditifIt(string $pieces_dossier_additif_it) Return the first CommonConsultation filtered by the pieces_dossier_additif_it column
 * @method CommonConsultation findOneByDetailConsultationIt(string $detail_consultation_it) Return the first CommonConsultation filtered by the detail_consultation_it column
 * @method CommonConsultation findOneByAddEchantillionIt(string $add_echantillion_it) Return the first CommonConsultation filtered by the add_echantillion_it column
 * @method CommonConsultation findOneByAddReunionIt(string $add_reunion_it) Return the first CommonConsultation filtered by the add_reunion_it column
 * @method CommonConsultation findOneByCodesNuts(string $codes_nuts) Return the first CommonConsultation filtered by the codes_nuts column
 * @method CommonConsultation findOneByIntitule(string $intitule) Return the first CommonConsultation filtered by the intitule column
 * @method CommonConsultation findOneByIdTrIntitule(int $id_tr_intitule) Return the first CommonConsultation filtered by the id_tr_intitule column
 * @method CommonConsultation findOneByObjet(string $objet) Return the first CommonConsultation filtered by the objet column
 * @method CommonConsultation findOneByIdTrObjet(int $id_tr_objet) Return the first CommonConsultation filtered by the id_tr_objet column
 * @method CommonConsultation findOneByDateDecision(string $date_decision) Return the first CommonConsultation filtered by the date_decision column
 * @method CommonConsultation findOneByTypeAcces(string $type_acces) Return the first CommonConsultation filtered by the type_acces column
 * @method CommonConsultation findOneByAutoriserReponseElectronique(string $autoriser_reponse_electronique) Return the first CommonConsultation filtered by the autoriser_reponse_electronique column
 * @method CommonConsultation findOneByRegleMiseEnLigne(int $regle_mise_en_ligne) Return the first CommonConsultation filtered by the regle_mise_en_ligne column
 * @method CommonConsultation findOneByIdRegleValidation(int $id_regle_validation) Return the first CommonConsultation filtered by the id_regle_validation column
 * @method CommonConsultation findOneByIntituleFr(string $intitule_fr) Return the first CommonConsultation filtered by the intitule_fr column
 * @method CommonConsultation findOneByIntituleEn(string $intitule_en) Return the first CommonConsultation filtered by the intitule_en column
 * @method CommonConsultation findOneByIntituleEs(string $intitule_es) Return the first CommonConsultation filtered by the intitule_es column
 * @method CommonConsultation findOneByIntituleSu(string $intitule_su) Return the first CommonConsultation filtered by the intitule_su column
 * @method CommonConsultation findOneByIntituleDu(string $intitule_du) Return the first CommonConsultation filtered by the intitule_du column
 * @method CommonConsultation findOneByIntituleCz(string $intitule_cz) Return the first CommonConsultation filtered by the intitule_cz column
 * @method CommonConsultation findOneByIntituleAr(string $intitule_ar) Return the first CommonConsultation filtered by the intitule_ar column
 * @method CommonConsultation findOneByIntituleIt(string $intitule_it) Return the first CommonConsultation filtered by the intitule_it column
 * @method CommonConsultation findOneByObjetFr(string $objet_fr) Return the first CommonConsultation filtered by the objet_fr column
 * @method CommonConsultation findOneByObjetEn(string $objet_en) Return the first CommonConsultation filtered by the objet_en column
 * @method CommonConsultation findOneByObjetEs(string $objet_es) Return the first CommonConsultation filtered by the objet_es column
 * @method CommonConsultation findOneByObjetSu(string $objet_su) Return the first CommonConsultation filtered by the objet_su column
 * @method CommonConsultation findOneByObjetDu(string $objet_du) Return the first CommonConsultation filtered by the objet_du column
 * @method CommonConsultation findOneByObjetCz(string $objet_cz) Return the first CommonConsultation filtered by the objet_cz column
 * @method CommonConsultation findOneByObjetAr(string $objet_ar) Return the first CommonConsultation filtered by the objet_ar column
 * @method CommonConsultation findOneByObjetIt(string $objet_it) Return the first CommonConsultation filtered by the objet_it column
 * @method CommonConsultation findOneByClauseSociale(string $clause_sociale) Return the first CommonConsultation filtered by the clause_sociale column
 * @method CommonConsultation findOneByClauseEnvironnementale(string $clause_environnementale) Return the first CommonConsultation filtered by the clause_environnementale column
 * @method CommonConsultation findOneByReponseObligatoire(string $reponse_obligatoire) Return the first CommonConsultation filtered by the reponse_obligatoire column
 * @method CommonConsultation findOneByAutoriserPublicite(int $autoriser_publicite) Return the first CommonConsultation filtered by the autoriser_publicite column
 * @method CommonConsultation findOneByTypeEnvoi(string $type_envoi) Return the first CommonConsultation filtered by the type_envoi column
 * @method CommonConsultation findOneByChiffrementOffre(string $chiffrement_offre) Return the first CommonConsultation filtered by the chiffrement_offre column
 * @method CommonConsultation findOneByEnvCandidature(int $env_candidature) Return the first CommonConsultation filtered by the env_candidature column
 * @method CommonConsultation findOneByEnvOffre(int $env_offre) Return the first CommonConsultation filtered by the env_offre column
 * @method CommonConsultation findOneByEnvAnonymat(int $env_anonymat) Return the first CommonConsultation filtered by the env_anonymat column
 * @method CommonConsultation findOneByIdEtatConsultation(int $id_etat_consultation) Return the first CommonConsultation filtered by the id_etat_consultation column
 * @method CommonConsultation findOneByReferenceConnecteur(string $reference_connecteur) Return the first CommonConsultation filtered by the reference_connecteur column
 * @method CommonConsultation findOneByConsStatut(string $cons_statut) Return the first CommonConsultation filtered by the cons_statut column
 * @method CommonConsultation findOneByIdApprobateur(int $id_approbateur) Return the first CommonConsultation filtered by the id_approbateur column
 * @method CommonConsultation findOneByIdValideur(int $id_valideur) Return the first CommonConsultation filtered by the id_valideur column
 * @method CommonConsultation findOneByServiceValidation(int $service_validation) Return the first CommonConsultation filtered by the service_validation column
 * @method CommonConsultation findOneByIdCreateur(int $id_createur) Return the first CommonConsultation filtered by the id_createur column
 * @method CommonConsultation findOneByNomCreateur(string $nom_createur) Return the first CommonConsultation filtered by the nom_createur column
 * @method CommonConsultation findOneByPrenomCreateur(string $prenom_createur) Return the first CommonConsultation filtered by the prenom_createur column
 * @method CommonConsultation findOneBySignatureActeEngagement(string $signature_acte_engagement) Return the first CommonConsultation filtered by the signature_acte_engagement column
 * @method CommonConsultation findOneByArchivemetadescription(string $archiveMetaDescription) Return the first CommonConsultation filtered by the archiveMetaDescription column
 * @method CommonConsultation findOneByArchivemetamotsclef(string $archiveMetaMotsClef) Return the first CommonConsultation filtered by the archiveMetaMotsClef column
 * @method CommonConsultation findOneByArchiveidblobzip(int $archiveIdBlobZip) Return the first CommonConsultation filtered by the archiveIdBlobZip column
 * @method CommonConsultation findOneByDecisionPartielle(string $decision_partielle) Return the first CommonConsultation filtered by the decision_partielle column
 * @method CommonConsultation findOneByTypeDecisionARenseigner(string $type_decision_a_renseigner) Return the first CommonConsultation filtered by the type_decision_a_renseigner column
 * @method CommonConsultation findOneByTypeDecisionAttributionMarche(string $type_decision_attribution_marche) Return the first CommonConsultation filtered by the type_decision_attribution_marche column
 * @method CommonConsultation findOneByTypeDecisionDeclarationSansSuite(string $type_decision_declaration_sans_suite) Return the first CommonConsultation filtered by the type_decision_declaration_sans_suite column
 * @method CommonConsultation findOneByTypeDecisionDeclarationInfructueux(string $type_decision_declaration_infructueux) Return the first CommonConsultation filtered by the type_decision_declaration_infructueux column
 * @method CommonConsultation findOneByTypeDecisionSelectionEntreprise(string $type_decision_selection_entreprise) Return the first CommonConsultation filtered by the type_decision_selection_entreprise column
 * @method CommonConsultation findOneByTypeDecisionAttributionAccordCadre(string $type_decision_attribution_accord_cadre) Return the first CommonConsultation filtered by the type_decision_attribution_accord_cadre column
 * @method CommonConsultation findOneByTypeDecisionAdmissionSad(string $type_decision_admission_sad) Return the first CommonConsultation filtered by the type_decision_admission_sad column
 * @method CommonConsultation findOneByTypeDecisionAutre(string $type_decision_autre) Return the first CommonConsultation filtered by the type_decision_autre column
 * @method CommonConsultation findOneByIdArchiveur(int $id_archiveur) Return the first CommonConsultation filtered by the id_archiveur column
 * @method CommonConsultation findOneByPrenomNomAgentTelechargementPlis(string $prenom_nom_agent_telechargement_plis) Return the first CommonConsultation filtered by the prenom_nom_agent_telechargement_plis column
 * @method CommonConsultation findOneByIdAgentTelechargementPlis(int $id_agent_telechargement_plis) Return the first CommonConsultation filtered by the id_agent_telechargement_plis column
 * @method CommonConsultation findOneByPathTelechargementPlis(string $path_telechargement_plis) Return the first CommonConsultation filtered by the path_telechargement_plis column
 * @method CommonConsultation findOneByDateTelechargementPlis(string $date_telechargement_plis) Return the first CommonConsultation filtered by the date_telechargement_plis column
 * @method CommonConsultation findOneByServiceValidationIntermediaire(int $service_validation_intermediaire) Return the first CommonConsultation filtered by the service_validation_intermediaire column
 * @method CommonConsultation findOneByEnvOffreTechnique(int $env_offre_technique) Return the first CommonConsultation filtered by the env_offre_technique column
 * @method CommonConsultation findOneByRefOrgPartenaire(string $ref_org_partenaire) Return the first CommonConsultation filtered by the ref_org_partenaire column
 * @method CommonConsultation findOneByDateArchivage(string $date_archivage) Return the first CommonConsultation filtered by the date_archivage column
 * @method CommonConsultation findOneByDateDecisionAnnulation(string $date_decision_annulation) Return the first CommonConsultation filtered by the date_decision_annulation column
 * @method CommonConsultation findOneByCommentaireAnnulation(string $commentaire_annulation) Return the first CommonConsultation filtered by the commentaire_annulation column
 * @method CommonConsultation findOneByDateMiseEnLigneSouhaitee(string $date_mise_en_ligne_souhaitee) Return the first CommonConsultation filtered by the date_mise_en_ligne_souhaitee column
 * @method CommonConsultation findOneByEtatEnAttenteValidation(string $etat_en_attente_validation) Return the first CommonConsultation filtered by the etat_en_attente_validation column
 * @method CommonConsultation findOneByDossierAdditif(string $dossier_additif) Return the first CommonConsultation filtered by the dossier_additif column
 * @method CommonConsultation findOneByTypeMarche(int $type_marche) Return the first CommonConsultation filtered by the type_marche column
 * @method CommonConsultation findOneByTypePrestation(int $type_prestation) Return the first CommonConsultation filtered by the type_prestation column
 * @method CommonConsultation findOneByDateModification(string $date_modification) Return the first CommonConsultation filtered by the date_modification column
 * @method CommonConsultation findOneByDelaiPartiel(string $delai_partiel) Return the first CommonConsultation filtered by the delai_partiel column
 * @method CommonConsultation findOneByDatefinlocale(string $dateFinLocale) Return the first CommonConsultation filtered by the dateFinLocale column
 * @method CommonConsultation findOneByLieuresidence(string $lieuResidence) Return the first CommonConsultation filtered by the lieuResidence column
 * @method CommonConsultation findOneByAlerte(string $alerte) Return the first CommonConsultation filtered by the alerte column
 * @method CommonConsultation findOneByDoublon(string $doublon) Return the first CommonConsultation filtered by the doublon column
 * @method CommonConsultation findOneByDenominationAdapte(string $denomination_adapte) Return the first CommonConsultation filtered by the denomination_adapte column
 * @method CommonConsultation findOneByUrlConsultationAvisPub(string $url_consultation_avis_pub) Return the first CommonConsultation filtered by the url_consultation_avis_pub column
 * @method CommonConsultation findOneByDoublonDe(string $doublon_de) Return the first CommonConsultation filtered by the doublon_de column
 * @method CommonConsultation findOneByEntiteAdjudicatrice(string $entite_adjudicatrice) Return the first CommonConsultation filtered by the entite_adjudicatrice column
 * @method CommonConsultation findOneByCodeOperation(string $code_operation) Return the first CommonConsultation filtered by the code_operation column
 * @method CommonConsultation findOneByClauseSocialeConditionExecution(string $clause_sociale_condition_execution) Return the first CommonConsultation filtered by the clause_sociale_condition_execution column
 * @method CommonConsultation findOneByClauseSocialeInsertion(string $clause_sociale_insertion) Return the first CommonConsultation filtered by the clause_sociale_insertion column
 * @method CommonConsultation findOneByClauseSocialeAteliersProteges(string $clause_sociale_ateliers_proteges) Return the first CommonConsultation filtered by the clause_sociale_ateliers_proteges column
 * @method CommonConsultation findOneByClauseEnvSpecsTechniques(string $clause_env_specs_techniques) Return the first CommonConsultation filtered by the clause_env_specs_techniques column
 * @method CommonConsultation findOneByClauseEnvCondExecution(string $clause_env_cond_execution) Return the first CommonConsultation filtered by the clause_env_cond_execution column
 * @method CommonConsultation findOneByClauseEnvCriteresSelect(string $clause_env_criteres_select) Return the first CommonConsultation filtered by the clause_env_criteres_select column
 * @method CommonConsultation findOneByIdDonneeComplementaire(int $id_donnee_complementaire) Return the first CommonConsultation filtered by the id_donnee_complementaire column
 * @method CommonConsultation findOneByDonneeComplementaireObligatoire(string $donnee_complementaire_obligatoire) Return the first CommonConsultation filtered by the donnee_complementaire_obligatoire column
 * @method CommonConsultation findOneByModeOuvertureReponse(string $mode_ouverture_reponse) Return the first CommonConsultation filtered by the mode_ouverture_reponse column
 * @method CommonConsultation findOneByIdFichierAnnulation(int $id_fichier_annulation) Return the first CommonConsultation filtered by the id_fichier_annulation column
 * @method CommonConsultation findOneByIdoperation(int $idOperation) Return the first CommonConsultation filtered by the idOperation column
 * @method CommonConsultation findOneByMarchePublicSimplifie(string $marche_public_simplifie) Return the first CommonConsultation filtered by the marche_public_simplifie column
 * @method CommonConsultation findOneByInfosBlocsAtlas(string $infos_blocs_atlas) Return the first CommonConsultation filtered by the infos_blocs_atlas column
 * @method CommonConsultation findOneByDateFinUnix(string $DATE_FIN_UNIX) Return the first CommonConsultation filtered by the DATE_FIN_UNIX column
 * @method CommonConsultation findOneByDateAchevement(string $date_achevement) Return the first CommonConsultation filtered by the date_achevement column
 * @method CommonConsultation findOneByNombreDeLots(int $nombre_de_lots) Return the first CommonConsultation filtered by the nombre_de_lots column
 *
 * @method array findByReference(int $reference) Return CommonConsultation objects filtered by the reference column
 * @method array findByOrganisme(string $organisme) Return CommonConsultation objects filtered by the organisme column
 * @method array findByReferenceUtilisateur(string $reference_utilisateur) Return CommonConsultation objects filtered by the reference_utilisateur column
 * @method array findByCategorie(string $categorie) Return CommonConsultation objects filtered by the categorie column
 * @method array findByTitre(string $titre) Return CommonConsultation objects filtered by the titre column
 * @method array findByResume(string $resume) Return CommonConsultation objects filtered by the resume column
 * @method array findByDatedebut(string $datedebut) Return CommonConsultation objects filtered by the datedebut column
 * @method array findByDatefin(string $datefin) Return CommonConsultation objects filtered by the datefin column
 * @method array findByDatevalidation(string $datevalidation) Return CommonConsultation objects filtered by the datevalidation column
 * @method array findByTypeProcedure(string $type_procedure) Return CommonConsultation objects filtered by the type_procedure column
 * @method array findByCodeProcedure(string $code_procedure) Return CommonConsultation objects filtered by the code_procedure column
 * @method array findByReponseElectronique(string $reponse_electronique) Return CommonConsultation objects filtered by the reponse_electronique column
 * @method array findByNumProcedure(int $num_procedure) Return CommonConsultation objects filtered by the num_procedure column
 * @method array findByIdTypeProcedure(int $id_type_procedure) Return CommonConsultation objects filtered by the id_type_procedure column
 * @method array findByIdTypeAvis(int $id_type_avis) Return CommonConsultation objects filtered by the id_type_avis column
 * @method array findByLieuExecution(string $lieu_execution) Return CommonConsultation objects filtered by the lieu_execution column
 * @method array findByTypeMiseEnLigne(int $type_mise_en_ligne) Return CommonConsultation objects filtered by the type_mise_en_ligne column
 * @method array findByDatemiseenligne(string $datemiseenligne) Return CommonConsultation objects filtered by the datemiseenligne column
 * @method array findByIsTiersAvis(string $is_tiers_avis) Return CommonConsultation objects filtered by the is_tiers_avis column
 * @method array findByUrl(string $url) Return CommonConsultation objects filtered by the url column
 * @method array findByDatefinSad(string $datefin_sad) Return CommonConsultation objects filtered by the datefin_sad column
 * @method array findByIsSysAcqDyn(int $is_sys_acq_dyn) Return CommonConsultation objects filtered by the is_sys_acq_dyn column
 * @method array findByReferenceConsultationInit(string $reference_consultation_init) Return CommonConsultation objects filtered by the reference_consultation_init column
 * @method array findBySignatureOffre(string $signature_offre) Return CommonConsultation objects filtered by the signature_offre column
 * @method array findByIdTypeValidation(int $id_type_validation) Return CommonConsultation objects filtered by the id_type_validation column
 * @method array findByEtatApprobation(string $etat_approbation) Return CommonConsultation objects filtered by the etat_approbation column
 * @method array findByEtatValidation(string $etat_validation) Return CommonConsultation objects filtered by the etat_validation column
 * @method array findByChampSuppInvisible(string $champ_supp_invisible) Return CommonConsultation objects filtered by the champ_supp_invisible column
 * @method array findByCodeCpv1(string $code_cpv_1) Return CommonConsultation objects filtered by the code_cpv_1 column
 * @method array findByCodeCpv2(string $code_cpv_2) Return CommonConsultation objects filtered by the code_cpv_2 column
 * @method array findByPublicationEurope(string $publication_europe) Return CommonConsultation objects filtered by the publication_europe column
 * @method array findByEtatPublication(int $etat_publication) Return CommonConsultation objects filtered by the etat_publication column
 * @method array findByPoursuivreAffichage(int $poursuivre_affichage) Return CommonConsultation objects filtered by the poursuivre_affichage column
 * @method array findByNbrTelechargementDce(int $nbr_telechargement_dce) Return CommonConsultation objects filtered by the nbr_telechargement_dce column
 * @method array findByServiceId(int $service_id) Return CommonConsultation objects filtered by the service_id column
 * @method array findByServiceAssocieId(int $service_associe_id) Return CommonConsultation objects filtered by the service_associe_id column
 * @method array findByDetailConsultation(string $detail_consultation) Return CommonConsultation objects filtered by the detail_consultation column
 * @method array findByDateFinAffichage(string $date_fin_affichage) Return CommonConsultation objects filtered by the date_fin_affichage column
 * @method array findByDepouillablePhaseConsultation(string $depouillable_phase_consultation) Return CommonConsultation objects filtered by the depouillable_phase_consultation column
 * @method array findByConsultationTransverse(string $consultation_transverse) Return CommonConsultation objects filtered by the consultation_transverse column
 * @method array findByConsultationAchatPublique(string $consultation_achat_publique) Return CommonConsultation objects filtered by the consultation_achat_publique column
 * @method array findByUrlConsultationAchatPublique(string $url_consultation_achat_publique) Return CommonConsultation objects filtered by the url_consultation_achat_publique column
 * @method array findByPartialDceDownload(string $partial_dce_download) Return CommonConsultation objects filtered by the partial_dce_download column
 * @method array findByTiragePlan(int $tirage_plan) Return CommonConsultation objects filtered by the tirage_plan column
 * @method array findByTireurPlan(int $tireur_plan) Return CommonConsultation objects filtered by the tireur_plan column
 * @method array findByDateMiseEnLigneCalcule(string $date_mise_en_ligne_calcule) Return CommonConsultation objects filtered by the date_mise_en_ligne_calcule column
 * @method array findByAccessibiliteEn(string $accessibilite_en) Return CommonConsultation objects filtered by the accessibilite_en column
 * @method array findByAccessibiliteEs(string $accessibilite_es) Return CommonConsultation objects filtered by the accessibilite_es column
 * @method array findByNbrReponse(int $nbr_reponse) Return CommonConsultation objects filtered by the nbr_reponse column
 * @method array findByIdTypeProcedureOrg(int $id_type_procedure_org) Return CommonConsultation objects filtered by the id_type_procedure_org column
 * @method array findByOrganismeConsultationInit(string $organisme_consultation_init) Return CommonConsultation objects filtered by the organisme_consultation_init column
 * @method array findByTirageDescriptif(string $tirage_descriptif) Return CommonConsultation objects filtered by the tirage_descriptif column
 * @method array findByDateValidationIntermediaire(string $date_validation_intermediaire) Return CommonConsultation objects filtered by the date_validation_intermediaire column
 * @method array findByAccessibiliteFr(string $accessibilite_fr) Return CommonConsultation objects filtered by the accessibilite_fr column
 * @method array findByIdTrAccessibilite(int $id_tr_accessibilite) Return CommonConsultation objects filtered by the id_tr_accessibilite column
 * @method array findByAccessibiliteCz(string $accessibilite_cz) Return CommonConsultation objects filtered by the accessibilite_cz column
 * @method array findByAccessibiliteDu(string $accessibilite_du) Return CommonConsultation objects filtered by the accessibilite_du column
 * @method array findByAccessibiliteSu(string $accessibilite_su) Return CommonConsultation objects filtered by the accessibilite_su column
 * @method array findByAccessibiliteAr(string $accessibilite_ar) Return CommonConsultation objects filtered by the accessibilite_ar column
 * @method array findByAlloti(string $alloti) Return CommonConsultation objects filtered by the alloti column
 * @method array findByNumeroPhase(int $numero_phase) Return CommonConsultation objects filtered by the numero_phase column
 * @method array findByConsultationExterne(string $consultation_externe) Return CommonConsultation objects filtered by the consultation_externe column
 * @method array findByUrlConsultationExterne(string $url_consultation_externe) Return CommonConsultation objects filtered by the url_consultation_externe column
 * @method array findByOrgDenomination(string $org_denomination) Return CommonConsultation objects filtered by the org_denomination column
 * @method array findByDomainesActivites(string $domaines_activites) Return CommonConsultation objects filtered by the domaines_activites column
 * @method array findByIdAffaire(int $id_affaire) Return CommonConsultation objects filtered by the id_affaire column
 * @method array findByAdresseRetraisDossiers(string $adresse_retrais_dossiers) Return CommonConsultation objects filtered by the adresse_retrais_dossiers column
 * @method array findByCautionProvisoire(string $caution_provisoire) Return CommonConsultation objects filtered by the caution_provisoire column
 * @method array findByAdresseDepotOffres(string $adresse_depot_offres) Return CommonConsultation objects filtered by the adresse_depot_offres column
 * @method array findByLieuOuverturePlis(string $lieu_ouverture_plis) Return CommonConsultation objects filtered by the lieu_ouverture_plis column
 * @method array findByPrixAquisitionPlans(string $prix_aquisition_plans) Return CommonConsultation objects filtered by the prix_aquisition_plans column
 * @method array findByQualification(string $qualification) Return CommonConsultation objects filtered by the qualification column
 * @method array findByAgrements(string $agrements) Return CommonConsultation objects filtered by the agrements column
 * @method array findByAddEchantillion(string $add_echantillion) Return CommonConsultation objects filtered by the add_echantillion column
 * @method array findByDateLimiteEchantillion(string $date_limite_echantillion) Return CommonConsultation objects filtered by the date_limite_echantillion column
 * @method array findByAddReunion(string $add_reunion) Return CommonConsultation objects filtered by the add_reunion column
 * @method array findByDateReunion(string $date_reunion) Return CommonConsultation objects filtered by the date_reunion column
 * @method array findByVariantes(string $variantes) Return CommonConsultation objects filtered by the variantes column
 * @method array findByAdresseRetraisDossiersAr(string $adresse_retrais_dossiers_ar) Return CommonConsultation objects filtered by the adresse_retrais_dossiers_ar column
 * @method array findByAdresseDepotOffresAr(string $adresse_depot_offres_ar) Return CommonConsultation objects filtered by the adresse_depot_offres_ar column
 * @method array findByLieuOuverturePlisAr(string $lieu_ouverture_plis_ar) Return CommonConsultation objects filtered by the lieu_ouverture_plis_ar column
 * @method array findByPiecesDossierAdmin(string $pieces_dossier_admin) Return CommonConsultation objects filtered by the pieces_dossier_admin column
 * @method array findByPiecesDossierAdminFr(string $pieces_dossier_admin_fr) Return CommonConsultation objects filtered by the pieces_dossier_admin_fr column
 * @method array findByPiecesDossierAdminEn(string $pieces_dossier_admin_en) Return CommonConsultation objects filtered by the pieces_dossier_admin_en column
 * @method array findByPiecesDossierAdminEs(string $pieces_dossier_admin_es) Return CommonConsultation objects filtered by the pieces_dossier_admin_es column
 * @method array findByPiecesDossierAdminSu(string $pieces_dossier_admin_su) Return CommonConsultation objects filtered by the pieces_dossier_admin_su column
 * @method array findByPiecesDossierAdminDu(string $pieces_dossier_admin_du) Return CommonConsultation objects filtered by the pieces_dossier_admin_du column
 * @method array findByPiecesDossierAdminCz(string $pieces_dossier_admin_cz) Return CommonConsultation objects filtered by the pieces_dossier_admin_cz column
 * @method array findByPiecesDossierAdminAr(string $pieces_dossier_admin_ar) Return CommonConsultation objects filtered by the pieces_dossier_admin_ar column
 * @method array findByPiecesDossierTech(string $pieces_dossier_tech) Return CommonConsultation objects filtered by the pieces_dossier_tech column
 * @method array findByPiecesDossierTechFr(string $pieces_dossier_tech_fr) Return CommonConsultation objects filtered by the pieces_dossier_tech_fr column
 * @method array findByPiecesDossierTechEn(string $pieces_dossier_tech_en) Return CommonConsultation objects filtered by the pieces_dossier_tech_en column
 * @method array findByPiecesDossierTechEs(string $pieces_dossier_tech_es) Return CommonConsultation objects filtered by the pieces_dossier_tech_es column
 * @method array findByPiecesDossierTechSu(string $pieces_dossier_tech_su) Return CommonConsultation objects filtered by the pieces_dossier_tech_su column
 * @method array findByPiecesDossierTechDu(string $pieces_dossier_tech_du) Return CommonConsultation objects filtered by the pieces_dossier_tech_du column
 * @method array findByPiecesDossierTechCz(string $pieces_dossier_tech_cz) Return CommonConsultation objects filtered by the pieces_dossier_tech_cz column
 * @method array findByPiecesDossierTechAr(string $pieces_dossier_tech_ar) Return CommonConsultation objects filtered by the pieces_dossier_tech_ar column
 * @method array findByPiecesDossierAdditif(string $pieces_dossier_additif) Return CommonConsultation objects filtered by the pieces_dossier_additif column
 * @method array findByPiecesDossierAdditifFr(string $pieces_dossier_additif_fr) Return CommonConsultation objects filtered by the pieces_dossier_additif_fr column
 * @method array findByPiecesDossierAdditifEn(string $pieces_dossier_additif_en) Return CommonConsultation objects filtered by the pieces_dossier_additif_en column
 * @method array findByPiecesDossierAdditifEs(string $pieces_dossier_additif_es) Return CommonConsultation objects filtered by the pieces_dossier_additif_es column
 * @method array findByPiecesDossierAdditifSu(string $pieces_dossier_additif_su) Return CommonConsultation objects filtered by the pieces_dossier_additif_su column
 * @method array findByPiecesDossierAdditifDu(string $pieces_dossier_additif_du) Return CommonConsultation objects filtered by the pieces_dossier_additif_du column
 * @method array findByPiecesDossierAdditifCz(string $pieces_dossier_additif_cz) Return CommonConsultation objects filtered by the pieces_dossier_additif_cz column
 * @method array findByPiecesDossierAdditifAr(string $pieces_dossier_additif_ar) Return CommonConsultation objects filtered by the pieces_dossier_additif_ar column
 * @method array findByIdRpa(int $id_rpa) Return CommonConsultation objects filtered by the id_rpa column
 * @method array findByDetailConsultationFr(string $detail_consultation_fr) Return CommonConsultation objects filtered by the detail_consultation_fr column
 * @method array findByDetailConsultationEn(string $detail_consultation_en) Return CommonConsultation objects filtered by the detail_consultation_en column
 * @method array findByDetailConsultationEs(string $detail_consultation_es) Return CommonConsultation objects filtered by the detail_consultation_es column
 * @method array findByDetailConsultationSu(string $detail_consultation_su) Return CommonConsultation objects filtered by the detail_consultation_su column
 * @method array findByDetailConsultationDu(string $detail_consultation_du) Return CommonConsultation objects filtered by the detail_consultation_du column
 * @method array findByDetailConsultationCz(string $detail_consultation_cz) Return CommonConsultation objects filtered by the detail_consultation_cz column
 * @method array findByDetailConsultationAr(string $detail_consultation_ar) Return CommonConsultation objects filtered by the detail_consultation_ar column
 * @method array findByEchantillon(string $echantillon) Return CommonConsultation objects filtered by the echantillon column
 * @method array findByReunion(string $reunion) Return CommonConsultation objects filtered by the reunion column
 * @method array findByVisitesLieux(string $visites_lieux) Return CommonConsultation objects filtered by the visites_lieux column
 * @method array findByVarianteCalcule(string $variante_calcule) Return CommonConsultation objects filtered by the variante_calcule column
 * @method array findByAdresseRetraisDossiersFr(string $adresse_retrais_dossiers_fr) Return CommonConsultation objects filtered by the adresse_retrais_dossiers_fr column
 * @method array findByAdresseRetraisDossiersEn(string $adresse_retrais_dossiers_en) Return CommonConsultation objects filtered by the adresse_retrais_dossiers_en column
 * @method array findByAdresseRetraisDossiersEs(string $adresse_retrais_dossiers_es) Return CommonConsultation objects filtered by the adresse_retrais_dossiers_es column
 * @method array findByAdresseRetraisDossiersSu(string $adresse_retrais_dossiers_su) Return CommonConsultation objects filtered by the adresse_retrais_dossiers_su column
 * @method array findByAdresseRetraisDossiersDu(string $adresse_retrais_dossiers_du) Return CommonConsultation objects filtered by the adresse_retrais_dossiers_du column
 * @method array findByAdresseRetraisDossiersCz(string $adresse_retrais_dossiers_cz) Return CommonConsultation objects filtered by the adresse_retrais_dossiers_cz column
 * @method array findByAdresseDepotOffresFr(string $adresse_depot_offres_fr) Return CommonConsultation objects filtered by the adresse_depot_offres_fr column
 * @method array findByAdresseDepotOffresEn(string $adresse_depot_offres_en) Return CommonConsultation objects filtered by the adresse_depot_offres_en column
 * @method array findByAdresseDepotOffresEs(string $adresse_depot_offres_es) Return CommonConsultation objects filtered by the adresse_depot_offres_es column
 * @method array findByAdresseDepotOffresSu(string $adresse_depot_offres_su) Return CommonConsultation objects filtered by the adresse_depot_offres_su column
 * @method array findByAdresseDepotOffresDu(string $adresse_depot_offres_du) Return CommonConsultation objects filtered by the adresse_depot_offres_du column
 * @method array findByAdresseDepotOffresCz(string $adresse_depot_offres_cz) Return CommonConsultation objects filtered by the adresse_depot_offres_cz column
 * @method array findByLieuOuverturePlisFr(string $lieu_ouverture_plis_fr) Return CommonConsultation objects filtered by the lieu_ouverture_plis_fr column
 * @method array findByLieuOuverturePlisEn(string $lieu_ouverture_plis_en) Return CommonConsultation objects filtered by the lieu_ouverture_plis_en column
 * @method array findByLieuOuverturePlisEs(string $lieu_ouverture_plis_es) Return CommonConsultation objects filtered by the lieu_ouverture_plis_es column
 * @method array findByLieuOuverturePlisSu(string $lieu_ouverture_plis_su) Return CommonConsultation objects filtered by the lieu_ouverture_plis_su column
 * @method array findByLieuOuverturePlisDu(string $lieu_ouverture_plis_du) Return CommonConsultation objects filtered by the lieu_ouverture_plis_du column
 * @method array findByLieuOuverturePlisCz(string $lieu_ouverture_plis_cz) Return CommonConsultation objects filtered by the lieu_ouverture_plis_cz column
 * @method array findByAddEchantillionFr(string $add_echantillion_fr) Return CommonConsultation objects filtered by the add_echantillion_fr column
 * @method array findByAddEchantillionEn(string $add_echantillion_en) Return CommonConsultation objects filtered by the add_echantillion_en column
 * @method array findByAddEchantillionEs(string $add_echantillion_es) Return CommonConsultation objects filtered by the add_echantillion_es column
 * @method array findByAddEchantillionSu(string $add_echantillion_su) Return CommonConsultation objects filtered by the add_echantillion_su column
 * @method array findByAddEchantillionDu(string $add_echantillion_du) Return CommonConsultation objects filtered by the add_echantillion_du column
 * @method array findByAddEchantillionCz(string $add_echantillion_cz) Return CommonConsultation objects filtered by the add_echantillion_cz column
 * @method array findByAddEchantillionAr(string $add_echantillion_ar) Return CommonConsultation objects filtered by the add_echantillion_ar column
 * @method array findByAddReunionFr(string $add_reunion_fr) Return CommonConsultation objects filtered by the add_reunion_fr column
 * @method array findByAddReunionEn(string $add_reunion_en) Return CommonConsultation objects filtered by the add_reunion_en column
 * @method array findByAddReunionEs(string $add_reunion_es) Return CommonConsultation objects filtered by the add_reunion_es column
 * @method array findByAddReunionSu(string $add_reunion_su) Return CommonConsultation objects filtered by the add_reunion_su column
 * @method array findByAddReunionDu(string $add_reunion_du) Return CommonConsultation objects filtered by the add_reunion_du column
 * @method array findByAddReunionCz(string $add_reunion_cz) Return CommonConsultation objects filtered by the add_reunion_cz column
 * @method array findByAddReunionAr(string $add_reunion_ar) Return CommonConsultation objects filtered by the add_reunion_ar column
 * @method array findByModePassation(string $mode_passation) Return CommonConsultation objects filtered by the mode_passation column
 * @method array findByConsultationAnnulee(string $consultation_annulee) Return CommonConsultation objects filtered by the consultation_annulee column
 * @method array findByCompteBoampAssocie(int $Compte_Boamp_Associe) Return CommonConsultation objects filtered by the Compte_Boamp_Associe column
 * @method array findByAccessibiliteIt(string $accessibilite_it) Return CommonConsultation objects filtered by the accessibilite_it column
 * @method array findByAdresseDepotOffresIt(string $adresse_depot_offres_it) Return CommonConsultation objects filtered by the adresse_depot_offres_it column
 * @method array findByLieuOuverturePlisIt(string $lieu_ouverture_plis_it) Return CommonConsultation objects filtered by the lieu_ouverture_plis_it column
 * @method array findByAdresseRetraisDossiersIt(string $adresse_retrais_dossiers_it) Return CommonConsultation objects filtered by the adresse_retrais_dossiers_it column
 * @method array findByPiecesDossierAdminIt(string $pieces_dossier_admin_it) Return CommonConsultation objects filtered by the pieces_dossier_admin_it column
 * @method array findByPiecesDossierTechIt(string $pieces_dossier_tech_it) Return CommonConsultation objects filtered by the pieces_dossier_tech_it column
 * @method array findByPiecesDossierAdditifIt(string $pieces_dossier_additif_it) Return CommonConsultation objects filtered by the pieces_dossier_additif_it column
 * @method array findByDetailConsultationIt(string $detail_consultation_it) Return CommonConsultation objects filtered by the detail_consultation_it column
 * @method array findByAddEchantillionIt(string $add_echantillion_it) Return CommonConsultation objects filtered by the add_echantillion_it column
 * @method array findByAddReunionIt(string $add_reunion_it) Return CommonConsultation objects filtered by the add_reunion_it column
 * @method array findByCodesNuts(string $codes_nuts) Return CommonConsultation objects filtered by the codes_nuts column
 * @method array findByIntitule(string $intitule) Return CommonConsultation objects filtered by the intitule column
 * @method array findByIdTrIntitule(int $id_tr_intitule) Return CommonConsultation objects filtered by the id_tr_intitule column
 * @method array findByObjet(string $objet) Return CommonConsultation objects filtered by the objet column
 * @method array findByIdTrObjet(int $id_tr_objet) Return CommonConsultation objects filtered by the id_tr_objet column
 * @method array findByDateDecision(string $date_decision) Return CommonConsultation objects filtered by the date_decision column
 * @method array findByTypeAcces(string $type_acces) Return CommonConsultation objects filtered by the type_acces column
 * @method array findByAutoriserReponseElectronique(string $autoriser_reponse_electronique) Return CommonConsultation objects filtered by the autoriser_reponse_electronique column
 * @method array findByRegleMiseEnLigne(int $regle_mise_en_ligne) Return CommonConsultation objects filtered by the regle_mise_en_ligne column
 * @method array findByIdRegleValidation(int $id_regle_validation) Return CommonConsultation objects filtered by the id_regle_validation column
 * @method array findByIntituleFr(string $intitule_fr) Return CommonConsultation objects filtered by the intitule_fr column
 * @method array findByIntituleEn(string $intitule_en) Return CommonConsultation objects filtered by the intitule_en column
 * @method array findByIntituleEs(string $intitule_es) Return CommonConsultation objects filtered by the intitule_es column
 * @method array findByIntituleSu(string $intitule_su) Return CommonConsultation objects filtered by the intitule_su column
 * @method array findByIntituleDu(string $intitule_du) Return CommonConsultation objects filtered by the intitule_du column
 * @method array findByIntituleCz(string $intitule_cz) Return CommonConsultation objects filtered by the intitule_cz column
 * @method array findByIntituleAr(string $intitule_ar) Return CommonConsultation objects filtered by the intitule_ar column
 * @method array findByIntituleIt(string $intitule_it) Return CommonConsultation objects filtered by the intitule_it column
 * @method array findByObjetFr(string $objet_fr) Return CommonConsultation objects filtered by the objet_fr column
 * @method array findByObjetEn(string $objet_en) Return CommonConsultation objects filtered by the objet_en column
 * @method array findByObjetEs(string $objet_es) Return CommonConsultation objects filtered by the objet_es column
 * @method array findByObjetSu(string $objet_su) Return CommonConsultation objects filtered by the objet_su column
 * @method array findByObjetDu(string $objet_du) Return CommonConsultation objects filtered by the objet_du column
 * @method array findByObjetCz(string $objet_cz) Return CommonConsultation objects filtered by the objet_cz column
 * @method array findByObjetAr(string $objet_ar) Return CommonConsultation objects filtered by the objet_ar column
 * @method array findByObjetIt(string $objet_it) Return CommonConsultation objects filtered by the objet_it column
 * @method array findByClauseSociale(string $clause_sociale) Return CommonConsultation objects filtered by the clause_sociale column
 * @method array findByClauseEnvironnementale(string $clause_environnementale) Return CommonConsultation objects filtered by the clause_environnementale column
 * @method array findByReponseObligatoire(string $reponse_obligatoire) Return CommonConsultation objects filtered by the reponse_obligatoire column
 * @method array findByAutoriserPublicite(int $autoriser_publicite) Return CommonConsultation objects filtered by the autoriser_publicite column
 * @method array findByTypeEnvoi(string $type_envoi) Return CommonConsultation objects filtered by the type_envoi column
 * @method array findByChiffrementOffre(string $chiffrement_offre) Return CommonConsultation objects filtered by the chiffrement_offre column
 * @method array findByEnvCandidature(int $env_candidature) Return CommonConsultation objects filtered by the env_candidature column
 * @method array findByEnvOffre(int $env_offre) Return CommonConsultation objects filtered by the env_offre column
 * @method array findByEnvAnonymat(int $env_anonymat) Return CommonConsultation objects filtered by the env_anonymat column
 * @method array findByIdEtatConsultation(int $id_etat_consultation) Return CommonConsultation objects filtered by the id_etat_consultation column
 * @method array findByReferenceConnecteur(string $reference_connecteur) Return CommonConsultation objects filtered by the reference_connecteur column
 * @method array findByConsStatut(string $cons_statut) Return CommonConsultation objects filtered by the cons_statut column
 * @method array findByIdApprobateur(int $id_approbateur) Return CommonConsultation objects filtered by the id_approbateur column
 * @method array findByIdValideur(int $id_valideur) Return CommonConsultation objects filtered by the id_valideur column
 * @method array findByServiceValidation(int $service_validation) Return CommonConsultation objects filtered by the service_validation column
 * @method array findByIdCreateur(int $id_createur) Return CommonConsultation objects filtered by the id_createur column
 * @method array findByNomCreateur(string $nom_createur) Return CommonConsultation objects filtered by the nom_createur column
 * @method array findByPrenomCreateur(string $prenom_createur) Return CommonConsultation objects filtered by the prenom_createur column
 * @method array findBySignatureActeEngagement(string $signature_acte_engagement) Return CommonConsultation objects filtered by the signature_acte_engagement column
 * @method array findByArchivemetadescription(string $archiveMetaDescription) Return CommonConsultation objects filtered by the archiveMetaDescription column
 * @method array findByArchivemetamotsclef(string $archiveMetaMotsClef) Return CommonConsultation objects filtered by the archiveMetaMotsClef column
 * @method array findByArchiveidblobzip(int $archiveIdBlobZip) Return CommonConsultation objects filtered by the archiveIdBlobZip column
 * @method array findByDecisionPartielle(string $decision_partielle) Return CommonConsultation objects filtered by the decision_partielle column
 * @method array findByTypeDecisionARenseigner(string $type_decision_a_renseigner) Return CommonConsultation objects filtered by the type_decision_a_renseigner column
 * @method array findByTypeDecisionAttributionMarche(string $type_decision_attribution_marche) Return CommonConsultation objects filtered by the type_decision_attribution_marche column
 * @method array findByTypeDecisionDeclarationSansSuite(string $type_decision_declaration_sans_suite) Return CommonConsultation objects filtered by the type_decision_declaration_sans_suite column
 * @method array findByTypeDecisionDeclarationInfructueux(string $type_decision_declaration_infructueux) Return CommonConsultation objects filtered by the type_decision_declaration_infructueux column
 * @method array findByTypeDecisionSelectionEntreprise(string $type_decision_selection_entreprise) Return CommonConsultation objects filtered by the type_decision_selection_entreprise column
 * @method array findByTypeDecisionAttributionAccordCadre(string $type_decision_attribution_accord_cadre) Return CommonConsultation objects filtered by the type_decision_attribution_accord_cadre column
 * @method array findByTypeDecisionAdmissionSad(string $type_decision_admission_sad) Return CommonConsultation objects filtered by the type_decision_admission_sad column
 * @method array findByTypeDecisionAutre(string $type_decision_autre) Return CommonConsultation objects filtered by the type_decision_autre column
 * @method array findByIdArchiveur(int $id_archiveur) Return CommonConsultation objects filtered by the id_archiveur column
 * @method array findByPrenomNomAgentTelechargementPlis(string $prenom_nom_agent_telechargement_plis) Return CommonConsultation objects filtered by the prenom_nom_agent_telechargement_plis column
 * @method array findByIdAgentTelechargementPlis(int $id_agent_telechargement_plis) Return CommonConsultation objects filtered by the id_agent_telechargement_plis column
 * @method array findByPathTelechargementPlis(string $path_telechargement_plis) Return CommonConsultation objects filtered by the path_telechargement_plis column
 * @method array findByDateTelechargementPlis(string $date_telechargement_plis) Return CommonConsultation objects filtered by the date_telechargement_plis column
 * @method array findByServiceValidationIntermediaire(int $service_validation_intermediaire) Return CommonConsultation objects filtered by the service_validation_intermediaire column
 * @method array findByEnvOffreTechnique(int $env_offre_technique) Return CommonConsultation objects filtered by the env_offre_technique column
 * @method array findByRefOrgPartenaire(string $ref_org_partenaire) Return CommonConsultation objects filtered by the ref_org_partenaire column
 * @method array findByDateArchivage(string $date_archivage) Return CommonConsultation objects filtered by the date_archivage column
 * @method array findByDateDecisionAnnulation(string $date_decision_annulation) Return CommonConsultation objects filtered by the date_decision_annulation column
 * @method array findByCommentaireAnnulation(string $commentaire_annulation) Return CommonConsultation objects filtered by the commentaire_annulation column
 * @method array findByDateMiseEnLigneSouhaitee(string $date_mise_en_ligne_souhaitee) Return CommonConsultation objects filtered by the date_mise_en_ligne_souhaitee column
 * @method array findByEtatEnAttenteValidation(string $etat_en_attente_validation) Return CommonConsultation objects filtered by the etat_en_attente_validation column
 * @method array findByDossierAdditif(string $dossier_additif) Return CommonConsultation objects filtered by the dossier_additif column
 * @method array findByTypeMarche(int $type_marche) Return CommonConsultation objects filtered by the type_marche column
 * @method array findByTypePrestation(int $type_prestation) Return CommonConsultation objects filtered by the type_prestation column
 * @method array findByDateModification(string $date_modification) Return CommonConsultation objects filtered by the date_modification column
 * @method array findByDelaiPartiel(string $delai_partiel) Return CommonConsultation objects filtered by the delai_partiel column
 * @method array findByDatefinlocale(string $dateFinLocale) Return CommonConsultation objects filtered by the dateFinLocale column
 * @method array findByLieuresidence(string $lieuResidence) Return CommonConsultation objects filtered by the lieuResidence column
 * @method array findByAlerte(string $alerte) Return CommonConsultation objects filtered by the alerte column
 * @method array findByDoublon(string $doublon) Return CommonConsultation objects filtered by the doublon column
 * @method array findByDenominationAdapte(string $denomination_adapte) Return CommonConsultation objects filtered by the denomination_adapte column
 * @method array findByUrlConsultationAvisPub(string $url_consultation_avis_pub) Return CommonConsultation objects filtered by the url_consultation_avis_pub column
 * @method array findByDoublonDe(string $doublon_de) Return CommonConsultation objects filtered by the doublon_de column
 * @method array findByEntiteAdjudicatrice(string $entite_adjudicatrice) Return CommonConsultation objects filtered by the entite_adjudicatrice column
 * @method array findByCodeOperation(string $code_operation) Return CommonConsultation objects filtered by the code_operation column
 * @method array findByClauseSocialeConditionExecution(string $clause_sociale_condition_execution) Return CommonConsultation objects filtered by the clause_sociale_condition_execution column
 * @method array findByClauseSocialeInsertion(string $clause_sociale_insertion) Return CommonConsultation objects filtered by the clause_sociale_insertion column
 * @method array findByClauseSocialeAteliersProteges(string $clause_sociale_ateliers_proteges) Return CommonConsultation objects filtered by the clause_sociale_ateliers_proteges column
 * @method array findByClauseEnvSpecsTechniques(string $clause_env_specs_techniques) Return CommonConsultation objects filtered by the clause_env_specs_techniques column
 * @method array findByClauseEnvCondExecution(string $clause_env_cond_execution) Return CommonConsultation objects filtered by the clause_env_cond_execution column
 * @method array findByClauseEnvCriteresSelect(string $clause_env_criteres_select) Return CommonConsultation objects filtered by the clause_env_criteres_select column
 * @method array findByIdDonneeComplementaire(int $id_donnee_complementaire) Return CommonConsultation objects filtered by the id_donnee_complementaire column
 * @method array findByDonneeComplementaireObligatoire(string $donnee_complementaire_obligatoire) Return CommonConsultation objects filtered by the donnee_complementaire_obligatoire column
 * @method array findByModeOuvertureReponse(string $mode_ouverture_reponse) Return CommonConsultation objects filtered by the mode_ouverture_reponse column
 * @method array findByIdFichierAnnulation(int $id_fichier_annulation) Return CommonConsultation objects filtered by the id_fichier_annulation column
 * @method array findByIdoperation(int $idOperation) Return CommonConsultation objects filtered by the idOperation column
 * @method array findByMarchePublicSimplifie(string $marche_public_simplifie) Return CommonConsultation objects filtered by the marche_public_simplifie column
 * @method array findByInfosBlocsAtlas(string $infos_blocs_atlas) Return CommonConsultation objects filtered by the infos_blocs_atlas column
 * @method array findByDateFinUnix(string $DATE_FIN_UNIX) Return CommonConsultation objects filtered by the DATE_FIN_UNIX column
 * @method array findByDateAchevement(string $date_achevement) Return CommonConsultation objects filtered by the date_achevement column
 * @method array findByNombreDeLots(int $nombre_de_lots) Return CommonConsultation objects filtered by the nombre_de_lots column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonConsultationQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonConsultationQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonConsultation', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonConsultationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonConsultationQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonConsultationQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonConsultationQuery) {
            return $criteria;
        }
        $query = new CommonConsultationQuery();
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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query 
                         A Primary key composition: [$reference, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonConsultation|CommonConsultation[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonConsultationPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonConsultationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonConsultation A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `reference`, `organisme`, `reference_utilisateur`, `categorie`, `titre`, `resume`, `datedebut`, `datefin`, `datevalidation`, `type_procedure`, `code_procedure`, `reponse_electronique`, `num_procedure`, `id_type_procedure`, `id_type_avis`, `lieu_execution`, `type_mise_en_ligne`, `datemiseenligne`, `is_tiers_avis`, `url`, `datefin_sad`, `is_sys_acq_dyn`, `reference_consultation_init`, `signature_offre`, `id_type_validation`, `etat_approbation`, `etat_validation`, `champ_supp_invisible`, `code_cpv_1`, `code_cpv_2`, `publication_europe`, `etat_publication`, `poursuivre_affichage`, `nbr_telechargement_dce`, `service_id`, `service_associe_id`, `detail_consultation`, `date_fin_affichage`, `depouillable_phase_consultation`, `consultation_transverse`, `consultation_achat_publique`, `url_consultation_achat_publique`, `partial_dce_download`, `tirage_plan`, `tireur_plan`, `date_mise_en_ligne_calcule`, `accessibilite_en`, `accessibilite_es`, `nbr_reponse`, `id_type_procedure_org`, `organisme_consultation_init`, `tirage_descriptif`, `date_validation_intermediaire`, `accessibilite_fr`, `id_tr_accessibilite`, `accessibilite_cz`, `accessibilite_du`, `accessibilite_su`, `accessibilite_ar`, `alloti`, `numero_phase`, `consultation_externe`, `url_consultation_externe`, `org_denomination`, `domaines_activites`, `id_affaire`, `adresse_retrais_dossiers`, `caution_provisoire`, `adresse_depot_offres`, `lieu_ouverture_plis`, `prix_aquisition_plans`, `qualification`, `agrements`, `add_echantillion`, `date_limite_echantillion`, `add_reunion`, `date_reunion`, `variantes`, `adresse_retrais_dossiers_ar`, `adresse_depot_offres_ar`, `lieu_ouverture_plis_ar`, `pieces_dossier_admin`, `pieces_dossier_admin_fr`, `pieces_dossier_admin_en`, `pieces_dossier_admin_es`, `pieces_dossier_admin_su`, `pieces_dossier_admin_du`, `pieces_dossier_admin_cz`, `pieces_dossier_admin_ar`, `pieces_dossier_tech`, `pieces_dossier_tech_fr`, `pieces_dossier_tech_en`, `pieces_dossier_tech_es`, `pieces_dossier_tech_su`, `pieces_dossier_tech_du`, `pieces_dossier_tech_cz`, `pieces_dossier_tech_ar`, `pieces_dossier_additif`, `pieces_dossier_additif_fr`, `pieces_dossier_additif_en`, `pieces_dossier_additif_es`, `pieces_dossier_additif_su`, `pieces_dossier_additif_du`, `pieces_dossier_additif_cz`, `pieces_dossier_additif_ar`, `id_rpa`, `detail_consultation_fr`, `detail_consultation_en`, `detail_consultation_es`, `detail_consultation_su`, `detail_consultation_du`, `detail_consultation_cz`, `detail_consultation_ar`, `echantillon`, `reunion`, `visites_lieux`, `variante_calcule`, `adresse_retrais_dossiers_fr`, `adresse_retrais_dossiers_en`, `adresse_retrais_dossiers_es`, `adresse_retrais_dossiers_su`, `adresse_retrais_dossiers_du`, `adresse_retrais_dossiers_cz`, `adresse_depot_offres_fr`, `adresse_depot_offres_en`, `adresse_depot_offres_es`, `adresse_depot_offres_su`, `adresse_depot_offres_du`, `adresse_depot_offres_cz`, `lieu_ouverture_plis_fr`, `lieu_ouverture_plis_en`, `lieu_ouverture_plis_es`, `lieu_ouverture_plis_su`, `lieu_ouverture_plis_du`, `lieu_ouverture_plis_cz`, `add_echantillion_fr`, `add_echantillion_en`, `add_echantillion_es`, `add_echantillion_su`, `add_echantillion_du`, `add_echantillion_cz`, `add_echantillion_ar`, `add_reunion_fr`, `add_reunion_en`, `add_reunion_es`, `add_reunion_su`, `add_reunion_du`, `add_reunion_cz`, `add_reunion_ar`, `mode_passation`, `consultation_annulee`, `Compte_Boamp_Associe`, `accessibilite_it`, `adresse_depot_offres_it`, `lieu_ouverture_plis_it`, `adresse_retrais_dossiers_it`, `pieces_dossier_admin_it`, `pieces_dossier_tech_it`, `pieces_dossier_additif_it`, `detail_consultation_it`, `add_echantillion_it`, `add_reunion_it`, `codes_nuts`, `intitule`, `id_tr_intitule`, `objet`, `id_tr_objet`, `date_decision`, `type_acces`, `autoriser_reponse_electronique`, `regle_mise_en_ligne`, `id_regle_validation`, `intitule_fr`, `intitule_en`, `intitule_es`, `intitule_su`, `intitule_du`, `intitule_cz`, `intitule_ar`, `intitule_it`, `objet_fr`, `objet_en`, `objet_es`, `objet_su`, `objet_du`, `objet_cz`, `objet_ar`, `objet_it`, `clause_sociale`, `clause_environnementale`, `reponse_obligatoire`, `autoriser_publicite`, `type_envoi`, `chiffrement_offre`, `env_candidature`, `env_offre`, `env_anonymat`, `id_etat_consultation`, `reference_connecteur`, `cons_statut`, `id_approbateur`, `id_valideur`, `service_validation`, `id_createur`, `nom_createur`, `prenom_createur`, `signature_acte_engagement`, `archiveMetaDescription`, `archiveMetaMotsClef`, `archiveIdBlobZip`, `decision_partielle`, `type_decision_a_renseigner`, `type_decision_attribution_marche`, `type_decision_declaration_sans_suite`, `type_decision_declaration_infructueux`, `type_decision_selection_entreprise`, `type_decision_attribution_accord_cadre`, `type_decision_admission_sad`, `type_decision_autre`, `id_archiveur`, `prenom_nom_agent_telechargement_plis`, `id_agent_telechargement_plis`, `path_telechargement_plis`, `date_telechargement_plis`, `service_validation_intermediaire`, `env_offre_technique`, `ref_org_partenaire`, `date_archivage`, `date_decision_annulation`, `commentaire_annulation`, `date_mise_en_ligne_souhaitee`, `etat_en_attente_validation`, `dossier_additif`, `type_marche`, `type_prestation`, `date_modification`, `delai_partiel`, `dateFinLocale`, `lieuResidence`, `alerte`, `doublon`, `denomination_adapte`, `url_consultation_avis_pub`, `doublon_de`, `entite_adjudicatrice`, `code_operation`, `clause_sociale_condition_execution`, `clause_sociale_insertion`, `clause_sociale_ateliers_proteges`, `clause_env_specs_techniques`, `clause_env_cond_execution`, `clause_env_criteres_select`, `id_donnee_complementaire`, `donnee_complementaire_obligatoire`, `mode_ouverture_reponse`, `id_fichier_annulation`, `idOperation`, `marche_public_simplifie`, `infos_blocs_atlas`, `DATE_FIN_UNIX`, `date_achevement`, `nombre_de_lots` FROM `consultation` WHERE `reference` = :p0 AND `organisme` = :p1';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonConsultation();
            $obj->hydrate($row);
            CommonConsultationPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonConsultation|CommonConsultation[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonConsultation[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonConsultationPeer::REFERENCE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonConsultationPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonConsultationPeer::REFERENCE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonConsultationPeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the reference column
     *
     * Example usage:
     * <code>
     * $query->filterByReference(1234); // WHERE reference = 1234
     * $query->filterByReference(array(12, 34)); // WHERE reference IN (12, 34)
     * $query->filterByReference(array('min' => 12)); // WHERE reference >= 12
     * $query->filterByReference(array('max' => 12)); // WHERE reference <= 12
     * </code>
     *
     * @param     mixed $reference The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByReference($reference = null, $comparison = null)
    {
        if (is_array($reference)) {
            $useMinMax = false;
            if (isset($reference['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::REFERENCE, $reference['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reference['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::REFERENCE, $reference['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::REFERENCE, $reference, $comparison);
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
     * @return CommonConsultationQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonConsultationPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the reference_utilisateur column
     *
     * Example usage:
     * <code>
     * $query->filterByReferenceUtilisateur('fooValue');   // WHERE reference_utilisateur = 'fooValue'
     * $query->filterByReferenceUtilisateur('%fooValue%'); // WHERE reference_utilisateur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $referenceUtilisateur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByReferenceUtilisateur($referenceUtilisateur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($referenceUtilisateur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $referenceUtilisateur)) {
                $referenceUtilisateur = str_replace('*', '%', $referenceUtilisateur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::REFERENCE_UTILISATEUR, $referenceUtilisateur, $comparison);
    }

    /**
     * Filter the query on the categorie column
     *
     * Example usage:
     * <code>
     * $query->filterByCategorie('fooValue');   // WHERE categorie = 'fooValue'
     * $query->filterByCategorie('%fooValue%'); // WHERE categorie LIKE '%fooValue%'
     * </code>
     *
     * @param     string $categorie The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByCategorie($categorie = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($categorie)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $categorie)) {
                $categorie = str_replace('*', '%', $categorie);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::CATEGORIE, $categorie, $comparison);
    }

    /**
     * Filter the query on the titre column
     *
     * Example usage:
     * <code>
     * $query->filterByTitre('fooValue');   // WHERE titre = 'fooValue'
     * $query->filterByTitre('%fooValue%'); // WHERE titre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $titre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByTitre($titre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($titre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $titre)) {
                $titre = str_replace('*', '%', $titre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::TITRE, $titre, $comparison);
    }

    /**
     * Filter the query on the resume column
     *
     * Example usage:
     * <code>
     * $query->filterByResume('fooValue');   // WHERE resume = 'fooValue'
     * $query->filterByResume('%fooValue%'); // WHERE resume LIKE '%fooValue%'
     * </code>
     *
     * @param     string $resume The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByResume($resume = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($resume)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $resume)) {
                $resume = str_replace('*', '%', $resume);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::RESUME, $resume, $comparison);
    }

    /**
     * Filter the query on the datedebut column
     *
     * Example usage:
     * <code>
     * $query->filterByDatedebut('2011-03-14'); // WHERE datedebut = '2011-03-14'
     * $query->filterByDatedebut('now'); // WHERE datedebut = '2011-03-14'
     * $query->filterByDatedebut(array('max' => 'yesterday')); // WHERE datedebut > '2011-03-13'
     * </code>
     *
     * @param     mixed $datedebut The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByDatedebut($datedebut = null, $comparison = null)
    {
        if (is_array($datedebut)) {
            $useMinMax = false;
            if (isset($datedebut['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::DATEDEBUT, $datedebut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datedebut['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::DATEDEBUT, $datedebut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::DATEDEBUT, $datedebut, $comparison);
    }

    /**
     * Filter the query on the datefin column
     *
     * Example usage:
     * <code>
     * $query->filterByDatefin('2011-03-14'); // WHERE datefin = '2011-03-14'
     * $query->filterByDatefin('now'); // WHERE datefin = '2011-03-14'
     * $query->filterByDatefin(array('max' => 'yesterday')); // WHERE datefin > '2011-03-13'
     * </code>
     *
     * @param     mixed $datefin The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByDatefin($datefin = null, $comparison = null)
    {
        if (is_array($datefin)) {
            $useMinMax = false;
            if (isset($datefin['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::DATEFIN, $datefin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datefin['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::DATEFIN, $datefin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::DATEFIN, $datefin, $comparison);
    }

    /**
     * Filter the query on the datevalidation column
     *
     * Example usage:
     * <code>
     * $query->filterByDatevalidation('fooValue');   // WHERE datevalidation = 'fooValue'
     * $query->filterByDatevalidation('%fooValue%'); // WHERE datevalidation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datevalidation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByDatevalidation($datevalidation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datevalidation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datevalidation)) {
                $datevalidation = str_replace('*', '%', $datevalidation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::DATEVALIDATION, $datevalidation, $comparison);
    }

    /**
     * Filter the query on the type_procedure column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeProcedure('fooValue');   // WHERE type_procedure = 'fooValue'
     * $query->filterByTypeProcedure('%fooValue%'); // WHERE type_procedure LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeProcedure The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByTypeProcedure($typeProcedure = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeProcedure)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeProcedure)) {
                $typeProcedure = str_replace('*', '%', $typeProcedure);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::TYPE_PROCEDURE, $typeProcedure, $comparison);
    }

    /**
     * Filter the query on the code_procedure column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeProcedure('fooValue');   // WHERE code_procedure = 'fooValue'
     * $query->filterByCodeProcedure('%fooValue%'); // WHERE code_procedure LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codeProcedure The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByCodeProcedure($codeProcedure = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeProcedure)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codeProcedure)) {
                $codeProcedure = str_replace('*', '%', $codeProcedure);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::CODE_PROCEDURE, $codeProcedure, $comparison);
    }

    /**
     * Filter the query on the reponse_electronique column
     *
     * Example usage:
     * <code>
     * $query->filterByReponseElectronique('fooValue');   // WHERE reponse_electronique = 'fooValue'
     * $query->filterByReponseElectronique('%fooValue%'); // WHERE reponse_electronique LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reponseElectronique The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByReponseElectronique($reponseElectronique = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reponseElectronique)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $reponseElectronique)) {
                $reponseElectronique = str_replace('*', '%', $reponseElectronique);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::REPONSE_ELECTRONIQUE, $reponseElectronique, $comparison);
    }

    /**
     * Filter the query on the num_procedure column
     *
     * Example usage:
     * <code>
     * $query->filterByNumProcedure(1234); // WHERE num_procedure = 1234
     * $query->filterByNumProcedure(array(12, 34)); // WHERE num_procedure IN (12, 34)
     * $query->filterByNumProcedure(array('min' => 12)); // WHERE num_procedure >= 12
     * $query->filterByNumProcedure(array('max' => 12)); // WHERE num_procedure <= 12
     * </code>
     *
     * @param     mixed $numProcedure The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByNumProcedure($numProcedure = null, $comparison = null)
    {
        if (is_array($numProcedure)) {
            $useMinMax = false;
            if (isset($numProcedure['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::NUM_PROCEDURE, $numProcedure['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numProcedure['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::NUM_PROCEDURE, $numProcedure['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::NUM_PROCEDURE, $numProcedure, $comparison);
    }

    /**
     * Filter the query on the id_type_procedure column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTypeProcedure(1234); // WHERE id_type_procedure = 1234
     * $query->filterByIdTypeProcedure(array(12, 34)); // WHERE id_type_procedure IN (12, 34)
     * $query->filterByIdTypeProcedure(array('min' => 12)); // WHERE id_type_procedure >= 12
     * $query->filterByIdTypeProcedure(array('max' => 12)); // WHERE id_type_procedure <= 12
     * </code>
     *
     * @param     mixed $idTypeProcedure The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByIdTypeProcedure($idTypeProcedure = null, $comparison = null)
    {
        if (is_array($idTypeProcedure)) {
            $useMinMax = false;
            if (isset($idTypeProcedure['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::ID_TYPE_PROCEDURE, $idTypeProcedure['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeProcedure['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::ID_TYPE_PROCEDURE, $idTypeProcedure['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ID_TYPE_PROCEDURE, $idTypeProcedure, $comparison);
    }

    /**
     * Filter the query on the id_type_avis column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTypeAvis(1234); // WHERE id_type_avis = 1234
     * $query->filterByIdTypeAvis(array(12, 34)); // WHERE id_type_avis IN (12, 34)
     * $query->filterByIdTypeAvis(array('min' => 12)); // WHERE id_type_avis >= 12
     * $query->filterByIdTypeAvis(array('max' => 12)); // WHERE id_type_avis <= 12
     * </code>
     *
     * @param     mixed $idTypeAvis The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByIdTypeAvis($idTypeAvis = null, $comparison = null)
    {
        if (is_array($idTypeAvis)) {
            $useMinMax = false;
            if (isset($idTypeAvis['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::ID_TYPE_AVIS, $idTypeAvis['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeAvis['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::ID_TYPE_AVIS, $idTypeAvis['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ID_TYPE_AVIS, $idTypeAvis, $comparison);
    }

    /**
     * Filter the query on the lieu_execution column
     *
     * Example usage:
     * <code>
     * $query->filterByLieuExecution('fooValue');   // WHERE lieu_execution = 'fooValue'
     * $query->filterByLieuExecution('%fooValue%'); // WHERE lieu_execution LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lieuExecution The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByLieuExecution($lieuExecution = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lieuExecution)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lieuExecution)) {
                $lieuExecution = str_replace('*', '%', $lieuExecution);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::LIEU_EXECUTION, $lieuExecution, $comparison);
    }

    /**
     * Filter the query on the type_mise_en_ligne column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeMiseEnLigne(1234); // WHERE type_mise_en_ligne = 1234
     * $query->filterByTypeMiseEnLigne(array(12, 34)); // WHERE type_mise_en_ligne IN (12, 34)
     * $query->filterByTypeMiseEnLigne(array('min' => 12)); // WHERE type_mise_en_ligne >= 12
     * $query->filterByTypeMiseEnLigne(array('max' => 12)); // WHERE type_mise_en_ligne <= 12
     * </code>
     *
     * @param     mixed $typeMiseEnLigne The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByTypeMiseEnLigne($typeMiseEnLigne = null, $comparison = null)
    {
        if (is_array($typeMiseEnLigne)) {
            $useMinMax = false;
            if (isset($typeMiseEnLigne['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::TYPE_MISE_EN_LIGNE, $typeMiseEnLigne['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeMiseEnLigne['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::TYPE_MISE_EN_LIGNE, $typeMiseEnLigne['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::TYPE_MISE_EN_LIGNE, $typeMiseEnLigne, $comparison);
    }

    /**
     * Filter the query on the datemiseenligne column
     *
     * Example usage:
     * <code>
     * $query->filterByDatemiseenligne('2011-03-14'); // WHERE datemiseenligne = '2011-03-14'
     * $query->filterByDatemiseenligne('now'); // WHERE datemiseenligne = '2011-03-14'
     * $query->filterByDatemiseenligne(array('max' => 'yesterday')); // WHERE datemiseenligne > '2011-03-13'
     * </code>
     *
     * @param     mixed $datemiseenligne The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByDatemiseenligne($datemiseenligne = null, $comparison = null)
    {
        if (is_array($datemiseenligne)) {
            $useMinMax = false;
            if (isset($datemiseenligne['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::DATEMISEENLIGNE, $datemiseenligne['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemiseenligne['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::DATEMISEENLIGNE, $datemiseenligne['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::DATEMISEENLIGNE, $datemiseenligne, $comparison);
    }

    /**
     * Filter the query on the is_tiers_avis column
     *
     * Example usage:
     * <code>
     * $query->filterByIsTiersAvis('fooValue');   // WHERE is_tiers_avis = 'fooValue'
     * $query->filterByIsTiersAvis('%fooValue%'); // WHERE is_tiers_avis LIKE '%fooValue%'
     * </code>
     *
     * @param     string $isTiersAvis The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByIsTiersAvis($isTiersAvis = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($isTiersAvis)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $isTiersAvis)) {
                $isTiersAvis = str_replace('*', '%', $isTiersAvis);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::IS_TIERS_AVIS, $isTiersAvis, $comparison);
    }

    /**
     * Filter the query on the url column
     *
     * Example usage:
     * <code>
     * $query->filterByUrl('fooValue');   // WHERE url = 'fooValue'
     * $query->filterByUrl('%fooValue%'); // WHERE url LIKE '%fooValue%'
     * </code>
     *
     * @param     string $url The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByUrl($url = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($url)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $url)) {
                $url = str_replace('*', '%', $url);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::URL, $url, $comparison);
    }

    /**
     * Filter the query on the datefin_sad column
     *
     * Example usage:
     * <code>
     * $query->filterByDatefinSad('2011-03-14'); // WHERE datefin_sad = '2011-03-14'
     * $query->filterByDatefinSad('now'); // WHERE datefin_sad = '2011-03-14'
     * $query->filterByDatefinSad(array('max' => 'yesterday')); // WHERE datefin_sad > '2011-03-13'
     * </code>
     *
     * @param     mixed $datefinSad The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByDatefinSad($datefinSad = null, $comparison = null)
    {
        if (is_array($datefinSad)) {
            $useMinMax = false;
            if (isset($datefinSad['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::DATEFIN_SAD, $datefinSad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datefinSad['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::DATEFIN_SAD, $datefinSad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::DATEFIN_SAD, $datefinSad, $comparison);
    }

    /**
     * Filter the query on the is_sys_acq_dyn column
     *
     * Example usage:
     * <code>
     * $query->filterByIsSysAcqDyn(1234); // WHERE is_sys_acq_dyn = 1234
     * $query->filterByIsSysAcqDyn(array(12, 34)); // WHERE is_sys_acq_dyn IN (12, 34)
     * $query->filterByIsSysAcqDyn(array('min' => 12)); // WHERE is_sys_acq_dyn >= 12
     * $query->filterByIsSysAcqDyn(array('max' => 12)); // WHERE is_sys_acq_dyn <= 12
     * </code>
     *
     * @param     mixed $isSysAcqDyn The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByIsSysAcqDyn($isSysAcqDyn = null, $comparison = null)
    {
        if (is_array($isSysAcqDyn)) {
            $useMinMax = false;
            if (isset($isSysAcqDyn['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::IS_SYS_ACQ_DYN, $isSysAcqDyn['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isSysAcqDyn['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::IS_SYS_ACQ_DYN, $isSysAcqDyn['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::IS_SYS_ACQ_DYN, $isSysAcqDyn, $comparison);
    }

    /**
     * Filter the query on the reference_consultation_init column
     *
     * Example usage:
     * <code>
     * $query->filterByReferenceConsultationInit('fooValue');   // WHERE reference_consultation_init = 'fooValue'
     * $query->filterByReferenceConsultationInit('%fooValue%'); // WHERE reference_consultation_init LIKE '%fooValue%'
     * </code>
     *
     * @param     string $referenceConsultationInit The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByReferenceConsultationInit($referenceConsultationInit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($referenceConsultationInit)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $referenceConsultationInit)) {
                $referenceConsultationInit = str_replace('*', '%', $referenceConsultationInit);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::REFERENCE_CONSULTATION_INIT, $referenceConsultationInit, $comparison);
    }

    /**
     * Filter the query on the signature_offre column
     *
     * Example usage:
     * <code>
     * $query->filterBySignatureOffre('fooValue');   // WHERE signature_offre = 'fooValue'
     * $query->filterBySignatureOffre('%fooValue%'); // WHERE signature_offre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $signatureOffre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterBySignatureOffre($signatureOffre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($signatureOffre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $signatureOffre)) {
                $signatureOffre = str_replace('*', '%', $signatureOffre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::SIGNATURE_OFFRE, $signatureOffre, $comparison);
    }

    /**
     * Filter the query on the id_type_validation column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTypeValidation(1234); // WHERE id_type_validation = 1234
     * $query->filterByIdTypeValidation(array(12, 34)); // WHERE id_type_validation IN (12, 34)
     * $query->filterByIdTypeValidation(array('min' => 12)); // WHERE id_type_validation >= 12
     * $query->filterByIdTypeValidation(array('max' => 12)); // WHERE id_type_validation <= 12
     * </code>
     *
     * @param     mixed $idTypeValidation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByIdTypeValidation($idTypeValidation = null, $comparison = null)
    {
        if (is_array($idTypeValidation)) {
            $useMinMax = false;
            if (isset($idTypeValidation['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::ID_TYPE_VALIDATION, $idTypeValidation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeValidation['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::ID_TYPE_VALIDATION, $idTypeValidation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ID_TYPE_VALIDATION, $idTypeValidation, $comparison);
    }

    /**
     * Filter the query on the etat_approbation column
     *
     * Example usage:
     * <code>
     * $query->filterByEtatApprobation('fooValue');   // WHERE etat_approbation = 'fooValue'
     * $query->filterByEtatApprobation('%fooValue%'); // WHERE etat_approbation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $etatApprobation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByEtatApprobation($etatApprobation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($etatApprobation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $etatApprobation)) {
                $etatApprobation = str_replace('*', '%', $etatApprobation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ETAT_APPROBATION, $etatApprobation, $comparison);
    }

    /**
     * Filter the query on the etat_validation column
     *
     * Example usage:
     * <code>
     * $query->filterByEtatValidation('fooValue');   // WHERE etat_validation = 'fooValue'
     * $query->filterByEtatValidation('%fooValue%'); // WHERE etat_validation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $etatValidation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByEtatValidation($etatValidation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($etatValidation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $etatValidation)) {
                $etatValidation = str_replace('*', '%', $etatValidation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ETAT_VALIDATION, $etatValidation, $comparison);
    }

    /**
     * Filter the query on the champ_supp_invisible column
     *
     * Example usage:
     * <code>
     * $query->filterByChampSuppInvisible('fooValue');   // WHERE champ_supp_invisible = 'fooValue'
     * $query->filterByChampSuppInvisible('%fooValue%'); // WHERE champ_supp_invisible LIKE '%fooValue%'
     * </code>
     *
     * @param     string $champSuppInvisible The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByChampSuppInvisible($champSuppInvisible = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($champSuppInvisible)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $champSuppInvisible)) {
                $champSuppInvisible = str_replace('*', '%', $champSuppInvisible);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::CHAMP_SUPP_INVISIBLE, $champSuppInvisible, $comparison);
    }

    /**
     * Filter the query on the code_cpv_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeCpv1('fooValue');   // WHERE code_cpv_1 = 'fooValue'
     * $query->filterByCodeCpv1('%fooValue%'); // WHERE code_cpv_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codeCpv1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByCodeCpv1($codeCpv1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeCpv1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codeCpv1)) {
                $codeCpv1 = str_replace('*', '%', $codeCpv1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::CODE_CPV_1, $codeCpv1, $comparison);
    }

    /**
     * Filter the query on the code_cpv_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeCpv2('fooValue');   // WHERE code_cpv_2 = 'fooValue'
     * $query->filterByCodeCpv2('%fooValue%'); // WHERE code_cpv_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codeCpv2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByCodeCpv2($codeCpv2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeCpv2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codeCpv2)) {
                $codeCpv2 = str_replace('*', '%', $codeCpv2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::CODE_CPV_2, $codeCpv2, $comparison);
    }

    /**
     * Filter the query on the publication_europe column
     *
     * Example usage:
     * <code>
     * $query->filterByPublicationEurope('fooValue');   // WHERE publication_europe = 'fooValue'
     * $query->filterByPublicationEurope('%fooValue%'); // WHERE publication_europe LIKE '%fooValue%'
     * </code>
     *
     * @param     string $publicationEurope The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByPublicationEurope($publicationEurope = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($publicationEurope)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $publicationEurope)) {
                $publicationEurope = str_replace('*', '%', $publicationEurope);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::PUBLICATION_EUROPE, $publicationEurope, $comparison);
    }

    /**
     * Filter the query on the etat_publication column
     *
     * Example usage:
     * <code>
     * $query->filterByEtatPublication(1234); // WHERE etat_publication = 1234
     * $query->filterByEtatPublication(array(12, 34)); // WHERE etat_publication IN (12, 34)
     * $query->filterByEtatPublication(array('min' => 12)); // WHERE etat_publication >= 12
     * $query->filterByEtatPublication(array('max' => 12)); // WHERE etat_publication <= 12
     * </code>
     *
     * @param     mixed $etatPublication The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByEtatPublication($etatPublication = null, $comparison = null)
    {
        if (is_array($etatPublication)) {
            $useMinMax = false;
            if (isset($etatPublication['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::ETAT_PUBLICATION, $etatPublication['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($etatPublication['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::ETAT_PUBLICATION, $etatPublication['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ETAT_PUBLICATION, $etatPublication, $comparison);
    }

    /**
     * Filter the query on the poursuivre_affichage column
     *
     * Example usage:
     * <code>
     * $query->filterByPoursuivreAffichage(1234); // WHERE poursuivre_affichage = 1234
     * $query->filterByPoursuivreAffichage(array(12, 34)); // WHERE poursuivre_affichage IN (12, 34)
     * $query->filterByPoursuivreAffichage(array('min' => 12)); // WHERE poursuivre_affichage >= 12
     * $query->filterByPoursuivreAffichage(array('max' => 12)); // WHERE poursuivre_affichage <= 12
     * </code>
     *
     * @param     mixed $poursuivreAffichage The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByPoursuivreAffichage($poursuivreAffichage = null, $comparison = null)
    {
        if (is_array($poursuivreAffichage)) {
            $useMinMax = false;
            if (isset($poursuivreAffichage['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::POURSUIVRE_AFFICHAGE, $poursuivreAffichage['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($poursuivreAffichage['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::POURSUIVRE_AFFICHAGE, $poursuivreAffichage['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::POURSUIVRE_AFFICHAGE, $poursuivreAffichage, $comparison);
    }

    /**
     * Filter the query on the nbr_telechargement_dce column
     *
     * Example usage:
     * <code>
     * $query->filterByNbrTelechargementDce(1234); // WHERE nbr_telechargement_dce = 1234
     * $query->filterByNbrTelechargementDce(array(12, 34)); // WHERE nbr_telechargement_dce IN (12, 34)
     * $query->filterByNbrTelechargementDce(array('min' => 12)); // WHERE nbr_telechargement_dce >= 12
     * $query->filterByNbrTelechargementDce(array('max' => 12)); // WHERE nbr_telechargement_dce <= 12
     * </code>
     *
     * @param     mixed $nbrTelechargementDce The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByNbrTelechargementDce($nbrTelechargementDce = null, $comparison = null)
    {
        if (is_array($nbrTelechargementDce)) {
            $useMinMax = false;
            if (isset($nbrTelechargementDce['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::NBR_TELECHARGEMENT_DCE, $nbrTelechargementDce['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nbrTelechargementDce['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::NBR_TELECHARGEMENT_DCE, $nbrTelechargementDce['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::NBR_TELECHARGEMENT_DCE, $nbrTelechargementDce, $comparison);
    }

    /**
     * Filter the query on the service_id column
     *
     * Example usage:
     * <code>
     * $query->filterByServiceId(1234); // WHERE service_id = 1234
     * $query->filterByServiceId(array(12, 34)); // WHERE service_id IN (12, 34)
     * $query->filterByServiceId(array('min' => 12)); // WHERE service_id >= 12
     * $query->filterByServiceId(array('max' => 12)); // WHERE service_id <= 12
     * </code>
     *
     * @param     mixed $serviceId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByServiceId($serviceId = null, $comparison = null)
    {
        if (is_array($serviceId)) {
            $useMinMax = false;
            if (isset($serviceId['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::SERVICE_ID, $serviceId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($serviceId['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::SERVICE_ID, $serviceId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::SERVICE_ID, $serviceId, $comparison);
    }

    /**
     * Filter the query on the service_associe_id column
     *
     * Example usage:
     * <code>
     * $query->filterByServiceAssocieId(1234); // WHERE service_associe_id = 1234
     * $query->filterByServiceAssocieId(array(12, 34)); // WHERE service_associe_id IN (12, 34)
     * $query->filterByServiceAssocieId(array('min' => 12)); // WHERE service_associe_id >= 12
     * $query->filterByServiceAssocieId(array('max' => 12)); // WHERE service_associe_id <= 12
     * </code>
     *
     * @param     mixed $serviceAssocieId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByServiceAssocieId($serviceAssocieId = null, $comparison = null)
    {
        if (is_array($serviceAssocieId)) {
            $useMinMax = false;
            if (isset($serviceAssocieId['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::SERVICE_ASSOCIE_ID, $serviceAssocieId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($serviceAssocieId['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::SERVICE_ASSOCIE_ID, $serviceAssocieId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::SERVICE_ASSOCIE_ID, $serviceAssocieId, $comparison);
    }

    /**
     * Filter the query on the detail_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByDetailConsultation('fooValue');   // WHERE detail_consultation = 'fooValue'
     * $query->filterByDetailConsultation('%fooValue%'); // WHERE detail_consultation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $detailConsultation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByDetailConsultation($detailConsultation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($detailConsultation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $detailConsultation)) {
                $detailConsultation = str_replace('*', '%', $detailConsultation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::DETAIL_CONSULTATION, $detailConsultation, $comparison);
    }

    /**
     * Filter the query on the date_fin_affichage column
     *
     * Example usage:
     * <code>
     * $query->filterByDateFinAffichage('fooValue');   // WHERE date_fin_affichage = 'fooValue'
     * $query->filterByDateFinAffichage('%fooValue%'); // WHERE date_fin_affichage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateFinAffichage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByDateFinAffichage($dateFinAffichage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateFinAffichage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateFinAffichage)) {
                $dateFinAffichage = str_replace('*', '%', $dateFinAffichage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::DATE_FIN_AFFICHAGE, $dateFinAffichage, $comparison);
    }

    /**
     * Filter the query on the depouillable_phase_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByDepouillablePhaseConsultation('fooValue');   // WHERE depouillable_phase_consultation = 'fooValue'
     * $query->filterByDepouillablePhaseConsultation('%fooValue%'); // WHERE depouillable_phase_consultation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $depouillablePhaseConsultation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByDepouillablePhaseConsultation($depouillablePhaseConsultation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($depouillablePhaseConsultation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $depouillablePhaseConsultation)) {
                $depouillablePhaseConsultation = str_replace('*', '%', $depouillablePhaseConsultation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::DEPOUILLABLE_PHASE_CONSULTATION, $depouillablePhaseConsultation, $comparison);
    }

    /**
     * Filter the query on the consultation_transverse column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultationTransverse('fooValue');   // WHERE consultation_transverse = 'fooValue'
     * $query->filterByConsultationTransverse('%fooValue%'); // WHERE consultation_transverse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $consultationTransverse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByConsultationTransverse($consultationTransverse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($consultationTransverse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $consultationTransverse)) {
                $consultationTransverse = str_replace('*', '%', $consultationTransverse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::CONSULTATION_TRANSVERSE, $consultationTransverse, $comparison);
    }

    /**
     * Filter the query on the consultation_achat_publique column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultationAchatPublique('fooValue');   // WHERE consultation_achat_publique = 'fooValue'
     * $query->filterByConsultationAchatPublique('%fooValue%'); // WHERE consultation_achat_publique LIKE '%fooValue%'
     * </code>
     *
     * @param     string $consultationAchatPublique The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByConsultationAchatPublique($consultationAchatPublique = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($consultationAchatPublique)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $consultationAchatPublique)) {
                $consultationAchatPublique = str_replace('*', '%', $consultationAchatPublique);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::CONSULTATION_ACHAT_PUBLIQUE, $consultationAchatPublique, $comparison);
    }

    /**
     * Filter the query on the url_consultation_achat_publique column
     *
     * Example usage:
     * <code>
     * $query->filterByUrlConsultationAchatPublique('fooValue');   // WHERE url_consultation_achat_publique = 'fooValue'
     * $query->filterByUrlConsultationAchatPublique('%fooValue%'); // WHERE url_consultation_achat_publique LIKE '%fooValue%'
     * </code>
     *
     * @param     string $urlConsultationAchatPublique The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByUrlConsultationAchatPublique($urlConsultationAchatPublique = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($urlConsultationAchatPublique)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $urlConsultationAchatPublique)) {
                $urlConsultationAchatPublique = str_replace('*', '%', $urlConsultationAchatPublique);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::URL_CONSULTATION_ACHAT_PUBLIQUE, $urlConsultationAchatPublique, $comparison);
    }

    /**
     * Filter the query on the partial_dce_download column
     *
     * Example usage:
     * <code>
     * $query->filterByPartialDceDownload('fooValue');   // WHERE partial_dce_download = 'fooValue'
     * $query->filterByPartialDceDownload('%fooValue%'); // WHERE partial_dce_download LIKE '%fooValue%'
     * </code>
     *
     * @param     string $partialDceDownload The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByPartialDceDownload($partialDceDownload = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($partialDceDownload)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $partialDceDownload)) {
                $partialDceDownload = str_replace('*', '%', $partialDceDownload);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::PARTIAL_DCE_DOWNLOAD, $partialDceDownload, $comparison);
    }

    /**
     * Filter the query on the tirage_plan column
     *
     * Example usage:
     * <code>
     * $query->filterByTiragePlan(1234); // WHERE tirage_plan = 1234
     * $query->filterByTiragePlan(array(12, 34)); // WHERE tirage_plan IN (12, 34)
     * $query->filterByTiragePlan(array('min' => 12)); // WHERE tirage_plan >= 12
     * $query->filterByTiragePlan(array('max' => 12)); // WHERE tirage_plan <= 12
     * </code>
     *
     * @param     mixed $tiragePlan The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByTiragePlan($tiragePlan = null, $comparison = null)
    {
        if (is_array($tiragePlan)) {
            $useMinMax = false;
            if (isset($tiragePlan['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::TIRAGE_PLAN, $tiragePlan['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tiragePlan['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::TIRAGE_PLAN, $tiragePlan['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::TIRAGE_PLAN, $tiragePlan, $comparison);
    }

    /**
     * Filter the query on the tireur_plan column
     *
     * Example usage:
     * <code>
     * $query->filterByTireurPlan(1234); // WHERE tireur_plan = 1234
     * $query->filterByTireurPlan(array(12, 34)); // WHERE tireur_plan IN (12, 34)
     * $query->filterByTireurPlan(array('min' => 12)); // WHERE tireur_plan >= 12
     * $query->filterByTireurPlan(array('max' => 12)); // WHERE tireur_plan <= 12
     * </code>
     *
     * @param     mixed $tireurPlan The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByTireurPlan($tireurPlan = null, $comparison = null)
    {
        if (is_array($tireurPlan)) {
            $useMinMax = false;
            if (isset($tireurPlan['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::TIREUR_PLAN, $tireurPlan['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tireurPlan['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::TIREUR_PLAN, $tireurPlan['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::TIREUR_PLAN, $tireurPlan, $comparison);
    }

    /**
     * Filter the query on the date_mise_en_ligne_calcule column
     *
     * Example usage:
     * <code>
     * $query->filterByDateMiseEnLigneCalcule('2011-03-14'); // WHERE date_mise_en_ligne_calcule = '2011-03-14'
     * $query->filterByDateMiseEnLigneCalcule('now'); // WHERE date_mise_en_ligne_calcule = '2011-03-14'
     * $query->filterByDateMiseEnLigneCalcule(array('max' => 'yesterday')); // WHERE date_mise_en_ligne_calcule > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateMiseEnLigneCalcule The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByDateMiseEnLigneCalcule($dateMiseEnLigneCalcule = null, $comparison = null)
    {
        if (is_array($dateMiseEnLigneCalcule)) {
            $useMinMax = false;
            if (isset($dateMiseEnLigneCalcule['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::DATE_MISE_EN_LIGNE_CALCULE, $dateMiseEnLigneCalcule['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateMiseEnLigneCalcule['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::DATE_MISE_EN_LIGNE_CALCULE, $dateMiseEnLigneCalcule['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::DATE_MISE_EN_LIGNE_CALCULE, $dateMiseEnLigneCalcule, $comparison);
    }

    /**
     * Filter the query on the accessibilite_en column
     *
     * Example usage:
     * <code>
     * $query->filterByAccessibiliteEn('fooValue');   // WHERE accessibilite_en = 'fooValue'
     * $query->filterByAccessibiliteEn('%fooValue%'); // WHERE accessibilite_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $accessibiliteEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAccessibiliteEn($accessibiliteEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($accessibiliteEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $accessibiliteEn)) {
                $accessibiliteEn = str_replace('*', '%', $accessibiliteEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ACCESSIBILITE_EN, $accessibiliteEn, $comparison);
    }

    /**
     * Filter the query on the accessibilite_es column
     *
     * Example usage:
     * <code>
     * $query->filterByAccessibiliteEs('fooValue');   // WHERE accessibilite_es = 'fooValue'
     * $query->filterByAccessibiliteEs('%fooValue%'); // WHERE accessibilite_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $accessibiliteEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAccessibiliteEs($accessibiliteEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($accessibiliteEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $accessibiliteEs)) {
                $accessibiliteEs = str_replace('*', '%', $accessibiliteEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ACCESSIBILITE_ES, $accessibiliteEs, $comparison);
    }

    /**
     * Filter the query on the nbr_reponse column
     *
     * Example usage:
     * <code>
     * $query->filterByNbrReponse(1234); // WHERE nbr_reponse = 1234
     * $query->filterByNbrReponse(array(12, 34)); // WHERE nbr_reponse IN (12, 34)
     * $query->filterByNbrReponse(array('min' => 12)); // WHERE nbr_reponse >= 12
     * $query->filterByNbrReponse(array('max' => 12)); // WHERE nbr_reponse <= 12
     * </code>
     *
     * @param     mixed $nbrReponse The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByNbrReponse($nbrReponse = null, $comparison = null)
    {
        if (is_array($nbrReponse)) {
            $useMinMax = false;
            if (isset($nbrReponse['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::NBR_REPONSE, $nbrReponse['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nbrReponse['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::NBR_REPONSE, $nbrReponse['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::NBR_REPONSE, $nbrReponse, $comparison);
    }

    /**
     * Filter the query on the id_type_procedure_org column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTypeProcedureOrg(1234); // WHERE id_type_procedure_org = 1234
     * $query->filterByIdTypeProcedureOrg(array(12, 34)); // WHERE id_type_procedure_org IN (12, 34)
     * $query->filterByIdTypeProcedureOrg(array('min' => 12)); // WHERE id_type_procedure_org >= 12
     * $query->filterByIdTypeProcedureOrg(array('max' => 12)); // WHERE id_type_procedure_org <= 12
     * </code>
     *
     * @param     mixed $idTypeProcedureOrg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByIdTypeProcedureOrg($idTypeProcedureOrg = null, $comparison = null)
    {
        if (is_array($idTypeProcedureOrg)) {
            $useMinMax = false;
            if (isset($idTypeProcedureOrg['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::ID_TYPE_PROCEDURE_ORG, $idTypeProcedureOrg['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeProcedureOrg['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::ID_TYPE_PROCEDURE_ORG, $idTypeProcedureOrg['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ID_TYPE_PROCEDURE_ORG, $idTypeProcedureOrg, $comparison);
    }

    /**
     * Filter the query on the organisme_consultation_init column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganismeConsultationInit('fooValue');   // WHERE organisme_consultation_init = 'fooValue'
     * $query->filterByOrganismeConsultationInit('%fooValue%'); // WHERE organisme_consultation_init LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organismeConsultationInit The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByOrganismeConsultationInit($organismeConsultationInit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($organismeConsultationInit)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $organismeConsultationInit)) {
                $organismeConsultationInit = str_replace('*', '%', $organismeConsultationInit);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ORGANISME_CONSULTATION_INIT, $organismeConsultationInit, $comparison);
    }

    /**
     * Filter the query on the tirage_descriptif column
     *
     * Example usage:
     * <code>
     * $query->filterByTirageDescriptif('fooValue');   // WHERE tirage_descriptif = 'fooValue'
     * $query->filterByTirageDescriptif('%fooValue%'); // WHERE tirage_descriptif LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tirageDescriptif The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByTirageDescriptif($tirageDescriptif = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tirageDescriptif)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tirageDescriptif)) {
                $tirageDescriptif = str_replace('*', '%', $tirageDescriptif);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::TIRAGE_DESCRIPTIF, $tirageDescriptif, $comparison);
    }

    /**
     * Filter the query on the date_validation_intermediaire column
     *
     * Example usage:
     * <code>
     * $query->filterByDateValidationIntermediaire('fooValue');   // WHERE date_validation_intermediaire = 'fooValue'
     * $query->filterByDateValidationIntermediaire('%fooValue%'); // WHERE date_validation_intermediaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateValidationIntermediaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByDateValidationIntermediaire($dateValidationIntermediaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateValidationIntermediaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateValidationIntermediaire)) {
                $dateValidationIntermediaire = str_replace('*', '%', $dateValidationIntermediaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::DATE_VALIDATION_INTERMEDIAIRE, $dateValidationIntermediaire, $comparison);
    }

    /**
     * Filter the query on the accessibilite_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByAccessibiliteFr('fooValue');   // WHERE accessibilite_fr = 'fooValue'
     * $query->filterByAccessibiliteFr('%fooValue%'); // WHERE accessibilite_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $accessibiliteFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAccessibiliteFr($accessibiliteFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($accessibiliteFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $accessibiliteFr)) {
                $accessibiliteFr = str_replace('*', '%', $accessibiliteFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ACCESSIBILITE_FR, $accessibiliteFr, $comparison);
    }

    /**
     * Filter the query on the id_tr_accessibilite column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTrAccessibilite(1234); // WHERE id_tr_accessibilite = 1234
     * $query->filterByIdTrAccessibilite(array(12, 34)); // WHERE id_tr_accessibilite IN (12, 34)
     * $query->filterByIdTrAccessibilite(array('min' => 12)); // WHERE id_tr_accessibilite >= 12
     * $query->filterByIdTrAccessibilite(array('max' => 12)); // WHERE id_tr_accessibilite <= 12
     * </code>
     *
     * @param     mixed $idTrAccessibilite The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByIdTrAccessibilite($idTrAccessibilite = null, $comparison = null)
    {
        if (is_array($idTrAccessibilite)) {
            $useMinMax = false;
            if (isset($idTrAccessibilite['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::ID_TR_ACCESSIBILITE, $idTrAccessibilite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTrAccessibilite['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::ID_TR_ACCESSIBILITE, $idTrAccessibilite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ID_TR_ACCESSIBILITE, $idTrAccessibilite, $comparison);
    }

    /**
     * Filter the query on the accessibilite_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByAccessibiliteCz('fooValue');   // WHERE accessibilite_cz = 'fooValue'
     * $query->filterByAccessibiliteCz('%fooValue%'); // WHERE accessibilite_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $accessibiliteCz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAccessibiliteCz($accessibiliteCz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($accessibiliteCz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $accessibiliteCz)) {
                $accessibiliteCz = str_replace('*', '%', $accessibiliteCz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ACCESSIBILITE_CZ, $accessibiliteCz, $comparison);
    }

    /**
     * Filter the query on the accessibilite_du column
     *
     * Example usage:
     * <code>
     * $query->filterByAccessibiliteDu('fooValue');   // WHERE accessibilite_du = 'fooValue'
     * $query->filterByAccessibiliteDu('%fooValue%'); // WHERE accessibilite_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $accessibiliteDu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAccessibiliteDu($accessibiliteDu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($accessibiliteDu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $accessibiliteDu)) {
                $accessibiliteDu = str_replace('*', '%', $accessibiliteDu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ACCESSIBILITE_DU, $accessibiliteDu, $comparison);
    }

    /**
     * Filter the query on the accessibilite_su column
     *
     * Example usage:
     * <code>
     * $query->filterByAccessibiliteSu('fooValue');   // WHERE accessibilite_su = 'fooValue'
     * $query->filterByAccessibiliteSu('%fooValue%'); // WHERE accessibilite_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $accessibiliteSu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAccessibiliteSu($accessibiliteSu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($accessibiliteSu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $accessibiliteSu)) {
                $accessibiliteSu = str_replace('*', '%', $accessibiliteSu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ACCESSIBILITE_SU, $accessibiliteSu, $comparison);
    }

    /**
     * Filter the query on the accessibilite_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByAccessibiliteAr('fooValue');   // WHERE accessibilite_ar = 'fooValue'
     * $query->filterByAccessibiliteAr('%fooValue%'); // WHERE accessibilite_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $accessibiliteAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAccessibiliteAr($accessibiliteAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($accessibiliteAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $accessibiliteAr)) {
                $accessibiliteAr = str_replace('*', '%', $accessibiliteAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ACCESSIBILITE_AR, $accessibiliteAr, $comparison);
    }

    /**
     * Filter the query on the alloti column
     *
     * Example usage:
     * <code>
     * $query->filterByAlloti('fooValue');   // WHERE alloti = 'fooValue'
     * $query->filterByAlloti('%fooValue%'); // WHERE alloti LIKE '%fooValue%'
     * </code>
     *
     * @param     string $alloti The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAlloti($alloti = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($alloti)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $alloti)) {
                $alloti = str_replace('*', '%', $alloti);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ALLOTI, $alloti, $comparison);
    }

    /**
     * Filter the query on the numero_phase column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeroPhase(1234); // WHERE numero_phase = 1234
     * $query->filterByNumeroPhase(array(12, 34)); // WHERE numero_phase IN (12, 34)
     * $query->filterByNumeroPhase(array('min' => 12)); // WHERE numero_phase >= 12
     * $query->filterByNumeroPhase(array('max' => 12)); // WHERE numero_phase <= 12
     * </code>
     *
     * @param     mixed $numeroPhase The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByNumeroPhase($numeroPhase = null, $comparison = null)
    {
        if (is_array($numeroPhase)) {
            $useMinMax = false;
            if (isset($numeroPhase['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::NUMERO_PHASE, $numeroPhase['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numeroPhase['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::NUMERO_PHASE, $numeroPhase['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::NUMERO_PHASE, $numeroPhase, $comparison);
    }

    /**
     * Filter the query on the consultation_externe column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultationExterne('fooValue');   // WHERE consultation_externe = 'fooValue'
     * $query->filterByConsultationExterne('%fooValue%'); // WHERE consultation_externe LIKE '%fooValue%'
     * </code>
     *
     * @param     string $consultationExterne The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByConsultationExterne($consultationExterne = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($consultationExterne)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $consultationExterne)) {
                $consultationExterne = str_replace('*', '%', $consultationExterne);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::CONSULTATION_EXTERNE, $consultationExterne, $comparison);
    }

    /**
     * Filter the query on the url_consultation_externe column
     *
     * Example usage:
     * <code>
     * $query->filterByUrlConsultationExterne('fooValue');   // WHERE url_consultation_externe = 'fooValue'
     * $query->filterByUrlConsultationExterne('%fooValue%'); // WHERE url_consultation_externe LIKE '%fooValue%'
     * </code>
     *
     * @param     string $urlConsultationExterne The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByUrlConsultationExterne($urlConsultationExterne = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($urlConsultationExterne)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $urlConsultationExterne)) {
                $urlConsultationExterne = str_replace('*', '%', $urlConsultationExterne);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::URL_CONSULTATION_EXTERNE, $urlConsultationExterne, $comparison);
    }

    /**
     * Filter the query on the org_denomination column
     *
     * Example usage:
     * <code>
     * $query->filterByOrgDenomination('fooValue');   // WHERE org_denomination = 'fooValue'
     * $query->filterByOrgDenomination('%fooValue%'); // WHERE org_denomination LIKE '%fooValue%'
     * </code>
     *
     * @param     string $orgDenomination The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByOrgDenomination($orgDenomination = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($orgDenomination)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $orgDenomination)) {
                $orgDenomination = str_replace('*', '%', $orgDenomination);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ORG_DENOMINATION, $orgDenomination, $comparison);
    }

    /**
     * Filter the query on the domaines_activites column
     *
     * Example usage:
     * <code>
     * $query->filterByDomainesActivites('fooValue');   // WHERE domaines_activites = 'fooValue'
     * $query->filterByDomainesActivites('%fooValue%'); // WHERE domaines_activites LIKE '%fooValue%'
     * </code>
     *
     * @param     string $domainesActivites The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByDomainesActivites($domainesActivites = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($domainesActivites)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $domainesActivites)) {
                $domainesActivites = str_replace('*', '%', $domainesActivites);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::DOMAINES_ACTIVITES, $domainesActivites, $comparison);
    }

    /**
     * Filter the query on the id_affaire column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAffaire(1234); // WHERE id_affaire = 1234
     * $query->filterByIdAffaire(array(12, 34)); // WHERE id_affaire IN (12, 34)
     * $query->filterByIdAffaire(array('min' => 12)); // WHERE id_affaire >= 12
     * $query->filterByIdAffaire(array('max' => 12)); // WHERE id_affaire <= 12
     * </code>
     *
     * @param     mixed $idAffaire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByIdAffaire($idAffaire = null, $comparison = null)
    {
        if (is_array($idAffaire)) {
            $useMinMax = false;
            if (isset($idAffaire['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::ID_AFFAIRE, $idAffaire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAffaire['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::ID_AFFAIRE, $idAffaire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ID_AFFAIRE, $idAffaire, $comparison);
    }

    /**
     * Filter the query on the adresse_retrais_dossiers column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseRetraisDossiers('fooValue');   // WHERE adresse_retrais_dossiers = 'fooValue'
     * $query->filterByAdresseRetraisDossiers('%fooValue%'); // WHERE adresse_retrais_dossiers LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseRetraisDossiers The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAdresseRetraisDossiers($adresseRetraisDossiers = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseRetraisDossiers)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseRetraisDossiers)) {
                $adresseRetraisDossiers = str_replace('*', '%', $adresseRetraisDossiers);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ADRESSE_RETRAIS_DOSSIERS, $adresseRetraisDossiers, $comparison);
    }

    /**
     * Filter the query on the caution_provisoire column
     *
     * Example usage:
     * <code>
     * $query->filterByCautionProvisoire('fooValue');   // WHERE caution_provisoire = 'fooValue'
     * $query->filterByCautionProvisoire('%fooValue%'); // WHERE caution_provisoire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cautionProvisoire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByCautionProvisoire($cautionProvisoire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cautionProvisoire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cautionProvisoire)) {
                $cautionProvisoire = str_replace('*', '%', $cautionProvisoire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::CAUTION_PROVISOIRE, $cautionProvisoire, $comparison);
    }

    /**
     * Filter the query on the adresse_depot_offres column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseDepotOffres('fooValue');   // WHERE adresse_depot_offres = 'fooValue'
     * $query->filterByAdresseDepotOffres('%fooValue%'); // WHERE adresse_depot_offres LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseDepotOffres The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAdresseDepotOffres($adresseDepotOffres = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseDepotOffres)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseDepotOffres)) {
                $adresseDepotOffres = str_replace('*', '%', $adresseDepotOffres);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ADRESSE_DEPOT_OFFRES, $adresseDepotOffres, $comparison);
    }

    /**
     * Filter the query on the lieu_ouverture_plis column
     *
     * Example usage:
     * <code>
     * $query->filterByLieuOuverturePlis('fooValue');   // WHERE lieu_ouverture_plis = 'fooValue'
     * $query->filterByLieuOuverturePlis('%fooValue%'); // WHERE lieu_ouverture_plis LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lieuOuverturePlis The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByLieuOuverturePlis($lieuOuverturePlis = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lieuOuverturePlis)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lieuOuverturePlis)) {
                $lieuOuverturePlis = str_replace('*', '%', $lieuOuverturePlis);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::LIEU_OUVERTURE_PLIS, $lieuOuverturePlis, $comparison);
    }

    /**
     * Filter the query on the prix_aquisition_plans column
     *
     * Example usage:
     * <code>
     * $query->filterByPrixAquisitionPlans('fooValue');   // WHERE prix_aquisition_plans = 'fooValue'
     * $query->filterByPrixAquisitionPlans('%fooValue%'); // WHERE prix_aquisition_plans LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prixAquisitionPlans The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByPrixAquisitionPlans($prixAquisitionPlans = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prixAquisitionPlans)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prixAquisitionPlans)) {
                $prixAquisitionPlans = str_replace('*', '%', $prixAquisitionPlans);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::PRIX_AQUISITION_PLANS, $prixAquisitionPlans, $comparison);
    }

    /**
     * Filter the query on the qualification column
     *
     * Example usage:
     * <code>
     * $query->filterByQualification('fooValue');   // WHERE qualification = 'fooValue'
     * $query->filterByQualification('%fooValue%'); // WHERE qualification LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qualification The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByQualification($qualification = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qualification)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $qualification)) {
                $qualification = str_replace('*', '%', $qualification);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::QUALIFICATION, $qualification, $comparison);
    }

    /**
     * Filter the query on the agrements column
     *
     * Example usage:
     * <code>
     * $query->filterByAgrements('fooValue');   // WHERE agrements = 'fooValue'
     * $query->filterByAgrements('%fooValue%'); // WHERE agrements LIKE '%fooValue%'
     * </code>
     *
     * @param     string $agrements The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAgrements($agrements = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($agrements)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $agrements)) {
                $agrements = str_replace('*', '%', $agrements);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::AGREMENTS, $agrements, $comparison);
    }

    /**
     * Filter the query on the add_echantillion column
     *
     * Example usage:
     * <code>
     * $query->filterByAddEchantillion('fooValue');   // WHERE add_echantillion = 'fooValue'
     * $query->filterByAddEchantillion('%fooValue%'); // WHERE add_echantillion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addEchantillion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAddEchantillion($addEchantillion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addEchantillion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addEchantillion)) {
                $addEchantillion = str_replace('*', '%', $addEchantillion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ADD_ECHANTILLION, $addEchantillion, $comparison);
    }

    /**
     * Filter the query on the date_limite_echantillion column
     *
     * Example usage:
     * <code>
     * $query->filterByDateLimiteEchantillion('fooValue');   // WHERE date_limite_echantillion = 'fooValue'
     * $query->filterByDateLimiteEchantillion('%fooValue%'); // WHERE date_limite_echantillion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateLimiteEchantillion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByDateLimiteEchantillion($dateLimiteEchantillion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateLimiteEchantillion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateLimiteEchantillion)) {
                $dateLimiteEchantillion = str_replace('*', '%', $dateLimiteEchantillion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::DATE_LIMITE_ECHANTILLION, $dateLimiteEchantillion, $comparison);
    }

    /**
     * Filter the query on the add_reunion column
     *
     * Example usage:
     * <code>
     * $query->filterByAddReunion('fooValue');   // WHERE add_reunion = 'fooValue'
     * $query->filterByAddReunion('%fooValue%'); // WHERE add_reunion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addReunion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAddReunion($addReunion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addReunion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addReunion)) {
                $addReunion = str_replace('*', '%', $addReunion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ADD_REUNION, $addReunion, $comparison);
    }

    /**
     * Filter the query on the date_reunion column
     *
     * Example usage:
     * <code>
     * $query->filterByDateReunion('fooValue');   // WHERE date_reunion = 'fooValue'
     * $query->filterByDateReunion('%fooValue%'); // WHERE date_reunion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateReunion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByDateReunion($dateReunion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateReunion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateReunion)) {
                $dateReunion = str_replace('*', '%', $dateReunion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::DATE_REUNION, $dateReunion, $comparison);
    }

    /**
     * Filter the query on the variantes column
     *
     * Example usage:
     * <code>
     * $query->filterByVariantes('fooValue');   // WHERE variantes = 'fooValue'
     * $query->filterByVariantes('%fooValue%'); // WHERE variantes LIKE '%fooValue%'
     * </code>
     *
     * @param     string $variantes The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByVariantes($variantes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($variantes)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $variantes)) {
                $variantes = str_replace('*', '%', $variantes);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::VARIANTES, $variantes, $comparison);
    }

    /**
     * Filter the query on the adresse_retrais_dossiers_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseRetraisDossiersAr('fooValue');   // WHERE adresse_retrais_dossiers_ar = 'fooValue'
     * $query->filterByAdresseRetraisDossiersAr('%fooValue%'); // WHERE adresse_retrais_dossiers_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseRetraisDossiersAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAdresseRetraisDossiersAr($adresseRetraisDossiersAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseRetraisDossiersAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseRetraisDossiersAr)) {
                $adresseRetraisDossiersAr = str_replace('*', '%', $adresseRetraisDossiersAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ADRESSE_RETRAIS_DOSSIERS_AR, $adresseRetraisDossiersAr, $comparison);
    }

    /**
     * Filter the query on the adresse_depot_offres_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseDepotOffresAr('fooValue');   // WHERE adresse_depot_offres_ar = 'fooValue'
     * $query->filterByAdresseDepotOffresAr('%fooValue%'); // WHERE adresse_depot_offres_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseDepotOffresAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAdresseDepotOffresAr($adresseDepotOffresAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseDepotOffresAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseDepotOffresAr)) {
                $adresseDepotOffresAr = str_replace('*', '%', $adresseDepotOffresAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ADRESSE_DEPOT_OFFRES_AR, $adresseDepotOffresAr, $comparison);
    }

    /**
     * Filter the query on the lieu_ouverture_plis_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByLieuOuverturePlisAr('fooValue');   // WHERE lieu_ouverture_plis_ar = 'fooValue'
     * $query->filterByLieuOuverturePlisAr('%fooValue%'); // WHERE lieu_ouverture_plis_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lieuOuverturePlisAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByLieuOuverturePlisAr($lieuOuverturePlisAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lieuOuverturePlisAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lieuOuverturePlisAr)) {
                $lieuOuverturePlisAr = str_replace('*', '%', $lieuOuverturePlisAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::LIEU_OUVERTURE_PLIS_AR, $lieuOuverturePlisAr, $comparison);
    }

    /**
     * Filter the query on the pieces_dossier_admin column
     *
     * Example usage:
     * <code>
     * $query->filterByPiecesDossierAdmin('fooValue');   // WHERE pieces_dossier_admin = 'fooValue'
     * $query->filterByPiecesDossierAdmin('%fooValue%'); // WHERE pieces_dossier_admin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $piecesDossierAdmin The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByPiecesDossierAdmin($piecesDossierAdmin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($piecesDossierAdmin)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $piecesDossierAdmin)) {
                $piecesDossierAdmin = str_replace('*', '%', $piecesDossierAdmin);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::PIECES_DOSSIER_ADMIN, $piecesDossierAdmin, $comparison);
    }

    /**
     * Filter the query on the pieces_dossier_admin_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByPiecesDossierAdminFr('fooValue');   // WHERE pieces_dossier_admin_fr = 'fooValue'
     * $query->filterByPiecesDossierAdminFr('%fooValue%'); // WHERE pieces_dossier_admin_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $piecesDossierAdminFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByPiecesDossierAdminFr($piecesDossierAdminFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($piecesDossierAdminFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $piecesDossierAdminFr)) {
                $piecesDossierAdminFr = str_replace('*', '%', $piecesDossierAdminFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::PIECES_DOSSIER_ADMIN_FR, $piecesDossierAdminFr, $comparison);
    }

    /**
     * Filter the query on the pieces_dossier_admin_en column
     *
     * Example usage:
     * <code>
     * $query->filterByPiecesDossierAdminEn('fooValue');   // WHERE pieces_dossier_admin_en = 'fooValue'
     * $query->filterByPiecesDossierAdminEn('%fooValue%'); // WHERE pieces_dossier_admin_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $piecesDossierAdminEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByPiecesDossierAdminEn($piecesDossierAdminEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($piecesDossierAdminEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $piecesDossierAdminEn)) {
                $piecesDossierAdminEn = str_replace('*', '%', $piecesDossierAdminEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::PIECES_DOSSIER_ADMIN_EN, $piecesDossierAdminEn, $comparison);
    }

    /**
     * Filter the query on the pieces_dossier_admin_es column
     *
     * Example usage:
     * <code>
     * $query->filterByPiecesDossierAdminEs('fooValue');   // WHERE pieces_dossier_admin_es = 'fooValue'
     * $query->filterByPiecesDossierAdminEs('%fooValue%'); // WHERE pieces_dossier_admin_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $piecesDossierAdminEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByPiecesDossierAdminEs($piecesDossierAdminEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($piecesDossierAdminEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $piecesDossierAdminEs)) {
                $piecesDossierAdminEs = str_replace('*', '%', $piecesDossierAdminEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::PIECES_DOSSIER_ADMIN_ES, $piecesDossierAdminEs, $comparison);
    }

    /**
     * Filter the query on the pieces_dossier_admin_su column
     *
     * Example usage:
     * <code>
     * $query->filterByPiecesDossierAdminSu('fooValue');   // WHERE pieces_dossier_admin_su = 'fooValue'
     * $query->filterByPiecesDossierAdminSu('%fooValue%'); // WHERE pieces_dossier_admin_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $piecesDossierAdminSu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByPiecesDossierAdminSu($piecesDossierAdminSu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($piecesDossierAdminSu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $piecesDossierAdminSu)) {
                $piecesDossierAdminSu = str_replace('*', '%', $piecesDossierAdminSu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::PIECES_DOSSIER_ADMIN_SU, $piecesDossierAdminSu, $comparison);
    }

    /**
     * Filter the query on the pieces_dossier_admin_du column
     *
     * Example usage:
     * <code>
     * $query->filterByPiecesDossierAdminDu('fooValue');   // WHERE pieces_dossier_admin_du = 'fooValue'
     * $query->filterByPiecesDossierAdminDu('%fooValue%'); // WHERE pieces_dossier_admin_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $piecesDossierAdminDu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByPiecesDossierAdminDu($piecesDossierAdminDu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($piecesDossierAdminDu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $piecesDossierAdminDu)) {
                $piecesDossierAdminDu = str_replace('*', '%', $piecesDossierAdminDu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::PIECES_DOSSIER_ADMIN_DU, $piecesDossierAdminDu, $comparison);
    }

    /**
     * Filter the query on the pieces_dossier_admin_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByPiecesDossierAdminCz('fooValue');   // WHERE pieces_dossier_admin_cz = 'fooValue'
     * $query->filterByPiecesDossierAdminCz('%fooValue%'); // WHERE pieces_dossier_admin_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $piecesDossierAdminCz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByPiecesDossierAdminCz($piecesDossierAdminCz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($piecesDossierAdminCz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $piecesDossierAdminCz)) {
                $piecesDossierAdminCz = str_replace('*', '%', $piecesDossierAdminCz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::PIECES_DOSSIER_ADMIN_CZ, $piecesDossierAdminCz, $comparison);
    }

    /**
     * Filter the query on the pieces_dossier_admin_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByPiecesDossierAdminAr('fooValue');   // WHERE pieces_dossier_admin_ar = 'fooValue'
     * $query->filterByPiecesDossierAdminAr('%fooValue%'); // WHERE pieces_dossier_admin_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $piecesDossierAdminAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByPiecesDossierAdminAr($piecesDossierAdminAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($piecesDossierAdminAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $piecesDossierAdminAr)) {
                $piecesDossierAdminAr = str_replace('*', '%', $piecesDossierAdminAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::PIECES_DOSSIER_ADMIN_AR, $piecesDossierAdminAr, $comparison);
    }

    /**
     * Filter the query on the pieces_dossier_tech column
     *
     * Example usage:
     * <code>
     * $query->filterByPiecesDossierTech('fooValue');   // WHERE pieces_dossier_tech = 'fooValue'
     * $query->filterByPiecesDossierTech('%fooValue%'); // WHERE pieces_dossier_tech LIKE '%fooValue%'
     * </code>
     *
     * @param     string $piecesDossierTech The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByPiecesDossierTech($piecesDossierTech = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($piecesDossierTech)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $piecesDossierTech)) {
                $piecesDossierTech = str_replace('*', '%', $piecesDossierTech);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::PIECES_DOSSIER_TECH, $piecesDossierTech, $comparison);
    }

    /**
     * Filter the query on the pieces_dossier_tech_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByPiecesDossierTechFr('fooValue');   // WHERE pieces_dossier_tech_fr = 'fooValue'
     * $query->filterByPiecesDossierTechFr('%fooValue%'); // WHERE pieces_dossier_tech_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $piecesDossierTechFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByPiecesDossierTechFr($piecesDossierTechFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($piecesDossierTechFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $piecesDossierTechFr)) {
                $piecesDossierTechFr = str_replace('*', '%', $piecesDossierTechFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::PIECES_DOSSIER_TECH_FR, $piecesDossierTechFr, $comparison);
    }

    /**
     * Filter the query on the pieces_dossier_tech_en column
     *
     * Example usage:
     * <code>
     * $query->filterByPiecesDossierTechEn('fooValue');   // WHERE pieces_dossier_tech_en = 'fooValue'
     * $query->filterByPiecesDossierTechEn('%fooValue%'); // WHERE pieces_dossier_tech_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $piecesDossierTechEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByPiecesDossierTechEn($piecesDossierTechEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($piecesDossierTechEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $piecesDossierTechEn)) {
                $piecesDossierTechEn = str_replace('*', '%', $piecesDossierTechEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::PIECES_DOSSIER_TECH_EN, $piecesDossierTechEn, $comparison);
    }

    /**
     * Filter the query on the pieces_dossier_tech_es column
     *
     * Example usage:
     * <code>
     * $query->filterByPiecesDossierTechEs('fooValue');   // WHERE pieces_dossier_tech_es = 'fooValue'
     * $query->filterByPiecesDossierTechEs('%fooValue%'); // WHERE pieces_dossier_tech_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $piecesDossierTechEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByPiecesDossierTechEs($piecesDossierTechEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($piecesDossierTechEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $piecesDossierTechEs)) {
                $piecesDossierTechEs = str_replace('*', '%', $piecesDossierTechEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::PIECES_DOSSIER_TECH_ES, $piecesDossierTechEs, $comparison);
    }

    /**
     * Filter the query on the pieces_dossier_tech_su column
     *
     * Example usage:
     * <code>
     * $query->filterByPiecesDossierTechSu('fooValue');   // WHERE pieces_dossier_tech_su = 'fooValue'
     * $query->filterByPiecesDossierTechSu('%fooValue%'); // WHERE pieces_dossier_tech_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $piecesDossierTechSu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByPiecesDossierTechSu($piecesDossierTechSu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($piecesDossierTechSu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $piecesDossierTechSu)) {
                $piecesDossierTechSu = str_replace('*', '%', $piecesDossierTechSu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::PIECES_DOSSIER_TECH_SU, $piecesDossierTechSu, $comparison);
    }

    /**
     * Filter the query on the pieces_dossier_tech_du column
     *
     * Example usage:
     * <code>
     * $query->filterByPiecesDossierTechDu('fooValue');   // WHERE pieces_dossier_tech_du = 'fooValue'
     * $query->filterByPiecesDossierTechDu('%fooValue%'); // WHERE pieces_dossier_tech_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $piecesDossierTechDu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByPiecesDossierTechDu($piecesDossierTechDu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($piecesDossierTechDu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $piecesDossierTechDu)) {
                $piecesDossierTechDu = str_replace('*', '%', $piecesDossierTechDu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::PIECES_DOSSIER_TECH_DU, $piecesDossierTechDu, $comparison);
    }

    /**
     * Filter the query on the pieces_dossier_tech_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByPiecesDossierTechCz('fooValue');   // WHERE pieces_dossier_tech_cz = 'fooValue'
     * $query->filterByPiecesDossierTechCz('%fooValue%'); // WHERE pieces_dossier_tech_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $piecesDossierTechCz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByPiecesDossierTechCz($piecesDossierTechCz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($piecesDossierTechCz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $piecesDossierTechCz)) {
                $piecesDossierTechCz = str_replace('*', '%', $piecesDossierTechCz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::PIECES_DOSSIER_TECH_CZ, $piecesDossierTechCz, $comparison);
    }

    /**
     * Filter the query on the pieces_dossier_tech_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByPiecesDossierTechAr('fooValue');   // WHERE pieces_dossier_tech_ar = 'fooValue'
     * $query->filterByPiecesDossierTechAr('%fooValue%'); // WHERE pieces_dossier_tech_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $piecesDossierTechAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByPiecesDossierTechAr($piecesDossierTechAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($piecesDossierTechAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $piecesDossierTechAr)) {
                $piecesDossierTechAr = str_replace('*', '%', $piecesDossierTechAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::PIECES_DOSSIER_TECH_AR, $piecesDossierTechAr, $comparison);
    }

    /**
     * Filter the query on the pieces_dossier_additif column
     *
     * Example usage:
     * <code>
     * $query->filterByPiecesDossierAdditif('fooValue');   // WHERE pieces_dossier_additif = 'fooValue'
     * $query->filterByPiecesDossierAdditif('%fooValue%'); // WHERE pieces_dossier_additif LIKE '%fooValue%'
     * </code>
     *
     * @param     string $piecesDossierAdditif The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByPiecesDossierAdditif($piecesDossierAdditif = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($piecesDossierAdditif)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $piecesDossierAdditif)) {
                $piecesDossierAdditif = str_replace('*', '%', $piecesDossierAdditif);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::PIECES_DOSSIER_ADDITIF, $piecesDossierAdditif, $comparison);
    }

    /**
     * Filter the query on the pieces_dossier_additif_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByPiecesDossierAdditifFr('fooValue');   // WHERE pieces_dossier_additif_fr = 'fooValue'
     * $query->filterByPiecesDossierAdditifFr('%fooValue%'); // WHERE pieces_dossier_additif_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $piecesDossierAdditifFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByPiecesDossierAdditifFr($piecesDossierAdditifFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($piecesDossierAdditifFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $piecesDossierAdditifFr)) {
                $piecesDossierAdditifFr = str_replace('*', '%', $piecesDossierAdditifFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::PIECES_DOSSIER_ADDITIF_FR, $piecesDossierAdditifFr, $comparison);
    }

    /**
     * Filter the query on the pieces_dossier_additif_en column
     *
     * Example usage:
     * <code>
     * $query->filterByPiecesDossierAdditifEn('fooValue');   // WHERE pieces_dossier_additif_en = 'fooValue'
     * $query->filterByPiecesDossierAdditifEn('%fooValue%'); // WHERE pieces_dossier_additif_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $piecesDossierAdditifEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByPiecesDossierAdditifEn($piecesDossierAdditifEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($piecesDossierAdditifEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $piecesDossierAdditifEn)) {
                $piecesDossierAdditifEn = str_replace('*', '%', $piecesDossierAdditifEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::PIECES_DOSSIER_ADDITIF_EN, $piecesDossierAdditifEn, $comparison);
    }

    /**
     * Filter the query on the pieces_dossier_additif_es column
     *
     * Example usage:
     * <code>
     * $query->filterByPiecesDossierAdditifEs('fooValue');   // WHERE pieces_dossier_additif_es = 'fooValue'
     * $query->filterByPiecesDossierAdditifEs('%fooValue%'); // WHERE pieces_dossier_additif_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $piecesDossierAdditifEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByPiecesDossierAdditifEs($piecesDossierAdditifEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($piecesDossierAdditifEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $piecesDossierAdditifEs)) {
                $piecesDossierAdditifEs = str_replace('*', '%', $piecesDossierAdditifEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::PIECES_DOSSIER_ADDITIF_ES, $piecesDossierAdditifEs, $comparison);
    }

    /**
     * Filter the query on the pieces_dossier_additif_su column
     *
     * Example usage:
     * <code>
     * $query->filterByPiecesDossierAdditifSu('fooValue');   // WHERE pieces_dossier_additif_su = 'fooValue'
     * $query->filterByPiecesDossierAdditifSu('%fooValue%'); // WHERE pieces_dossier_additif_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $piecesDossierAdditifSu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByPiecesDossierAdditifSu($piecesDossierAdditifSu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($piecesDossierAdditifSu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $piecesDossierAdditifSu)) {
                $piecesDossierAdditifSu = str_replace('*', '%', $piecesDossierAdditifSu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::PIECES_DOSSIER_ADDITIF_SU, $piecesDossierAdditifSu, $comparison);
    }

    /**
     * Filter the query on the pieces_dossier_additif_du column
     *
     * Example usage:
     * <code>
     * $query->filterByPiecesDossierAdditifDu('fooValue');   // WHERE pieces_dossier_additif_du = 'fooValue'
     * $query->filterByPiecesDossierAdditifDu('%fooValue%'); // WHERE pieces_dossier_additif_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $piecesDossierAdditifDu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByPiecesDossierAdditifDu($piecesDossierAdditifDu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($piecesDossierAdditifDu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $piecesDossierAdditifDu)) {
                $piecesDossierAdditifDu = str_replace('*', '%', $piecesDossierAdditifDu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::PIECES_DOSSIER_ADDITIF_DU, $piecesDossierAdditifDu, $comparison);
    }

    /**
     * Filter the query on the pieces_dossier_additif_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByPiecesDossierAdditifCz('fooValue');   // WHERE pieces_dossier_additif_cz = 'fooValue'
     * $query->filterByPiecesDossierAdditifCz('%fooValue%'); // WHERE pieces_dossier_additif_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $piecesDossierAdditifCz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByPiecesDossierAdditifCz($piecesDossierAdditifCz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($piecesDossierAdditifCz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $piecesDossierAdditifCz)) {
                $piecesDossierAdditifCz = str_replace('*', '%', $piecesDossierAdditifCz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::PIECES_DOSSIER_ADDITIF_CZ, $piecesDossierAdditifCz, $comparison);
    }

    /**
     * Filter the query on the pieces_dossier_additif_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByPiecesDossierAdditifAr('fooValue');   // WHERE pieces_dossier_additif_ar = 'fooValue'
     * $query->filterByPiecesDossierAdditifAr('%fooValue%'); // WHERE pieces_dossier_additif_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $piecesDossierAdditifAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByPiecesDossierAdditifAr($piecesDossierAdditifAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($piecesDossierAdditifAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $piecesDossierAdditifAr)) {
                $piecesDossierAdditifAr = str_replace('*', '%', $piecesDossierAdditifAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::PIECES_DOSSIER_ADDITIF_AR, $piecesDossierAdditifAr, $comparison);
    }

    /**
     * Filter the query on the id_rpa column
     *
     * Example usage:
     * <code>
     * $query->filterByIdRpa(1234); // WHERE id_rpa = 1234
     * $query->filterByIdRpa(array(12, 34)); // WHERE id_rpa IN (12, 34)
     * $query->filterByIdRpa(array('min' => 12)); // WHERE id_rpa >= 12
     * $query->filterByIdRpa(array('max' => 12)); // WHERE id_rpa <= 12
     * </code>
     *
     * @param     mixed $idRpa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByIdRpa($idRpa = null, $comparison = null)
    {
        if (is_array($idRpa)) {
            $useMinMax = false;
            if (isset($idRpa['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::ID_RPA, $idRpa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idRpa['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::ID_RPA, $idRpa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ID_RPA, $idRpa, $comparison);
    }

    /**
     * Filter the query on the detail_consultation_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByDetailConsultationFr('fooValue');   // WHERE detail_consultation_fr = 'fooValue'
     * $query->filterByDetailConsultationFr('%fooValue%'); // WHERE detail_consultation_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $detailConsultationFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByDetailConsultationFr($detailConsultationFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($detailConsultationFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $detailConsultationFr)) {
                $detailConsultationFr = str_replace('*', '%', $detailConsultationFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::DETAIL_CONSULTATION_FR, $detailConsultationFr, $comparison);
    }

    /**
     * Filter the query on the detail_consultation_en column
     *
     * Example usage:
     * <code>
     * $query->filterByDetailConsultationEn('fooValue');   // WHERE detail_consultation_en = 'fooValue'
     * $query->filterByDetailConsultationEn('%fooValue%'); // WHERE detail_consultation_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $detailConsultationEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByDetailConsultationEn($detailConsultationEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($detailConsultationEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $detailConsultationEn)) {
                $detailConsultationEn = str_replace('*', '%', $detailConsultationEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::DETAIL_CONSULTATION_EN, $detailConsultationEn, $comparison);
    }

    /**
     * Filter the query on the detail_consultation_es column
     *
     * Example usage:
     * <code>
     * $query->filterByDetailConsultationEs('fooValue');   // WHERE detail_consultation_es = 'fooValue'
     * $query->filterByDetailConsultationEs('%fooValue%'); // WHERE detail_consultation_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $detailConsultationEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByDetailConsultationEs($detailConsultationEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($detailConsultationEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $detailConsultationEs)) {
                $detailConsultationEs = str_replace('*', '%', $detailConsultationEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::DETAIL_CONSULTATION_ES, $detailConsultationEs, $comparison);
    }

    /**
     * Filter the query on the detail_consultation_su column
     *
     * Example usage:
     * <code>
     * $query->filterByDetailConsultationSu('fooValue');   // WHERE detail_consultation_su = 'fooValue'
     * $query->filterByDetailConsultationSu('%fooValue%'); // WHERE detail_consultation_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $detailConsultationSu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByDetailConsultationSu($detailConsultationSu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($detailConsultationSu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $detailConsultationSu)) {
                $detailConsultationSu = str_replace('*', '%', $detailConsultationSu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::DETAIL_CONSULTATION_SU, $detailConsultationSu, $comparison);
    }

    /**
     * Filter the query on the detail_consultation_du column
     *
     * Example usage:
     * <code>
     * $query->filterByDetailConsultationDu('fooValue');   // WHERE detail_consultation_du = 'fooValue'
     * $query->filterByDetailConsultationDu('%fooValue%'); // WHERE detail_consultation_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $detailConsultationDu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByDetailConsultationDu($detailConsultationDu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($detailConsultationDu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $detailConsultationDu)) {
                $detailConsultationDu = str_replace('*', '%', $detailConsultationDu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::DETAIL_CONSULTATION_DU, $detailConsultationDu, $comparison);
    }

    /**
     * Filter the query on the detail_consultation_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByDetailConsultationCz('fooValue');   // WHERE detail_consultation_cz = 'fooValue'
     * $query->filterByDetailConsultationCz('%fooValue%'); // WHERE detail_consultation_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $detailConsultationCz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByDetailConsultationCz($detailConsultationCz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($detailConsultationCz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $detailConsultationCz)) {
                $detailConsultationCz = str_replace('*', '%', $detailConsultationCz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::DETAIL_CONSULTATION_CZ, $detailConsultationCz, $comparison);
    }

    /**
     * Filter the query on the detail_consultation_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByDetailConsultationAr('fooValue');   // WHERE detail_consultation_ar = 'fooValue'
     * $query->filterByDetailConsultationAr('%fooValue%'); // WHERE detail_consultation_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $detailConsultationAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByDetailConsultationAr($detailConsultationAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($detailConsultationAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $detailConsultationAr)) {
                $detailConsultationAr = str_replace('*', '%', $detailConsultationAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::DETAIL_CONSULTATION_AR, $detailConsultationAr, $comparison);
    }

    /**
     * Filter the query on the echantillon column
     *
     * Example usage:
     * <code>
     * $query->filterByEchantillon('fooValue');   // WHERE echantillon = 'fooValue'
     * $query->filterByEchantillon('%fooValue%'); // WHERE echantillon LIKE '%fooValue%'
     * </code>
     *
     * @param     string $echantillon The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByEchantillon($echantillon = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($echantillon)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $echantillon)) {
                $echantillon = str_replace('*', '%', $echantillon);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ECHANTILLON, $echantillon, $comparison);
    }

    /**
     * Filter the query on the reunion column
     *
     * Example usage:
     * <code>
     * $query->filterByReunion('fooValue');   // WHERE reunion = 'fooValue'
     * $query->filterByReunion('%fooValue%'); // WHERE reunion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reunion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByReunion($reunion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reunion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $reunion)) {
                $reunion = str_replace('*', '%', $reunion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::REUNION, $reunion, $comparison);
    }

    /**
     * Filter the query on the visites_lieux column
     *
     * Example usage:
     * <code>
     * $query->filterByVisitesLieux('fooValue');   // WHERE visites_lieux = 'fooValue'
     * $query->filterByVisitesLieux('%fooValue%'); // WHERE visites_lieux LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visitesLieux The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByVisitesLieux($visitesLieux = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visitesLieux)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visitesLieux)) {
                $visitesLieux = str_replace('*', '%', $visitesLieux);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::VISITES_LIEUX, $visitesLieux, $comparison);
    }

    /**
     * Filter the query on the variante_calcule column
     *
     * Example usage:
     * <code>
     * $query->filterByVarianteCalcule('fooValue');   // WHERE variante_calcule = 'fooValue'
     * $query->filterByVarianteCalcule('%fooValue%'); // WHERE variante_calcule LIKE '%fooValue%'
     * </code>
     *
     * @param     string $varianteCalcule The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByVarianteCalcule($varianteCalcule = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($varianteCalcule)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $varianteCalcule)) {
                $varianteCalcule = str_replace('*', '%', $varianteCalcule);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::VARIANTE_CALCULE, $varianteCalcule, $comparison);
    }

    /**
     * Filter the query on the adresse_retrais_dossiers_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseRetraisDossiersFr('fooValue');   // WHERE adresse_retrais_dossiers_fr = 'fooValue'
     * $query->filterByAdresseRetraisDossiersFr('%fooValue%'); // WHERE adresse_retrais_dossiers_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseRetraisDossiersFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAdresseRetraisDossiersFr($adresseRetraisDossiersFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseRetraisDossiersFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseRetraisDossiersFr)) {
                $adresseRetraisDossiersFr = str_replace('*', '%', $adresseRetraisDossiersFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ADRESSE_RETRAIS_DOSSIERS_FR, $adresseRetraisDossiersFr, $comparison);
    }

    /**
     * Filter the query on the adresse_retrais_dossiers_en column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseRetraisDossiersEn('fooValue');   // WHERE adresse_retrais_dossiers_en = 'fooValue'
     * $query->filterByAdresseRetraisDossiersEn('%fooValue%'); // WHERE adresse_retrais_dossiers_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseRetraisDossiersEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAdresseRetraisDossiersEn($adresseRetraisDossiersEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseRetraisDossiersEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseRetraisDossiersEn)) {
                $adresseRetraisDossiersEn = str_replace('*', '%', $adresseRetraisDossiersEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ADRESSE_RETRAIS_DOSSIERS_EN, $adresseRetraisDossiersEn, $comparison);
    }

    /**
     * Filter the query on the adresse_retrais_dossiers_es column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseRetraisDossiersEs('fooValue');   // WHERE adresse_retrais_dossiers_es = 'fooValue'
     * $query->filterByAdresseRetraisDossiersEs('%fooValue%'); // WHERE adresse_retrais_dossiers_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseRetraisDossiersEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAdresseRetraisDossiersEs($adresseRetraisDossiersEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseRetraisDossiersEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseRetraisDossiersEs)) {
                $adresseRetraisDossiersEs = str_replace('*', '%', $adresseRetraisDossiersEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ADRESSE_RETRAIS_DOSSIERS_ES, $adresseRetraisDossiersEs, $comparison);
    }

    /**
     * Filter the query on the adresse_retrais_dossiers_su column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseRetraisDossiersSu('fooValue');   // WHERE adresse_retrais_dossiers_su = 'fooValue'
     * $query->filterByAdresseRetraisDossiersSu('%fooValue%'); // WHERE adresse_retrais_dossiers_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseRetraisDossiersSu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAdresseRetraisDossiersSu($adresseRetraisDossiersSu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseRetraisDossiersSu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseRetraisDossiersSu)) {
                $adresseRetraisDossiersSu = str_replace('*', '%', $adresseRetraisDossiersSu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ADRESSE_RETRAIS_DOSSIERS_SU, $adresseRetraisDossiersSu, $comparison);
    }

    /**
     * Filter the query on the adresse_retrais_dossiers_du column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseRetraisDossiersDu('fooValue');   // WHERE adresse_retrais_dossiers_du = 'fooValue'
     * $query->filterByAdresseRetraisDossiersDu('%fooValue%'); // WHERE adresse_retrais_dossiers_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseRetraisDossiersDu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAdresseRetraisDossiersDu($adresseRetraisDossiersDu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseRetraisDossiersDu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseRetraisDossiersDu)) {
                $adresseRetraisDossiersDu = str_replace('*', '%', $adresseRetraisDossiersDu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ADRESSE_RETRAIS_DOSSIERS_DU, $adresseRetraisDossiersDu, $comparison);
    }

    /**
     * Filter the query on the adresse_retrais_dossiers_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseRetraisDossiersCz('fooValue');   // WHERE adresse_retrais_dossiers_cz = 'fooValue'
     * $query->filterByAdresseRetraisDossiersCz('%fooValue%'); // WHERE adresse_retrais_dossiers_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseRetraisDossiersCz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAdresseRetraisDossiersCz($adresseRetraisDossiersCz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseRetraisDossiersCz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseRetraisDossiersCz)) {
                $adresseRetraisDossiersCz = str_replace('*', '%', $adresseRetraisDossiersCz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ADRESSE_RETRAIS_DOSSIERS_CZ, $adresseRetraisDossiersCz, $comparison);
    }

    /**
     * Filter the query on the adresse_depot_offres_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseDepotOffresFr('fooValue');   // WHERE adresse_depot_offres_fr = 'fooValue'
     * $query->filterByAdresseDepotOffresFr('%fooValue%'); // WHERE adresse_depot_offres_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseDepotOffresFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAdresseDepotOffresFr($adresseDepotOffresFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseDepotOffresFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseDepotOffresFr)) {
                $adresseDepotOffresFr = str_replace('*', '%', $adresseDepotOffresFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ADRESSE_DEPOT_OFFRES_FR, $adresseDepotOffresFr, $comparison);
    }

    /**
     * Filter the query on the adresse_depot_offres_en column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseDepotOffresEn('fooValue');   // WHERE adresse_depot_offres_en = 'fooValue'
     * $query->filterByAdresseDepotOffresEn('%fooValue%'); // WHERE adresse_depot_offres_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseDepotOffresEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAdresseDepotOffresEn($adresseDepotOffresEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseDepotOffresEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseDepotOffresEn)) {
                $adresseDepotOffresEn = str_replace('*', '%', $adresseDepotOffresEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ADRESSE_DEPOT_OFFRES_EN, $adresseDepotOffresEn, $comparison);
    }

    /**
     * Filter the query on the adresse_depot_offres_es column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseDepotOffresEs('fooValue');   // WHERE adresse_depot_offres_es = 'fooValue'
     * $query->filterByAdresseDepotOffresEs('%fooValue%'); // WHERE adresse_depot_offres_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseDepotOffresEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAdresseDepotOffresEs($adresseDepotOffresEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseDepotOffresEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseDepotOffresEs)) {
                $adresseDepotOffresEs = str_replace('*', '%', $adresseDepotOffresEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ADRESSE_DEPOT_OFFRES_ES, $adresseDepotOffresEs, $comparison);
    }

    /**
     * Filter the query on the adresse_depot_offres_su column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseDepotOffresSu('fooValue');   // WHERE adresse_depot_offres_su = 'fooValue'
     * $query->filterByAdresseDepotOffresSu('%fooValue%'); // WHERE adresse_depot_offres_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseDepotOffresSu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAdresseDepotOffresSu($adresseDepotOffresSu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseDepotOffresSu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseDepotOffresSu)) {
                $adresseDepotOffresSu = str_replace('*', '%', $adresseDepotOffresSu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ADRESSE_DEPOT_OFFRES_SU, $adresseDepotOffresSu, $comparison);
    }

    /**
     * Filter the query on the adresse_depot_offres_du column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseDepotOffresDu('fooValue');   // WHERE adresse_depot_offres_du = 'fooValue'
     * $query->filterByAdresseDepotOffresDu('%fooValue%'); // WHERE adresse_depot_offres_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseDepotOffresDu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAdresseDepotOffresDu($adresseDepotOffresDu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseDepotOffresDu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseDepotOffresDu)) {
                $adresseDepotOffresDu = str_replace('*', '%', $adresseDepotOffresDu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ADRESSE_DEPOT_OFFRES_DU, $adresseDepotOffresDu, $comparison);
    }

    /**
     * Filter the query on the adresse_depot_offres_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseDepotOffresCz('fooValue');   // WHERE adresse_depot_offres_cz = 'fooValue'
     * $query->filterByAdresseDepotOffresCz('%fooValue%'); // WHERE adresse_depot_offres_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseDepotOffresCz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAdresseDepotOffresCz($adresseDepotOffresCz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseDepotOffresCz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseDepotOffresCz)) {
                $adresseDepotOffresCz = str_replace('*', '%', $adresseDepotOffresCz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ADRESSE_DEPOT_OFFRES_CZ, $adresseDepotOffresCz, $comparison);
    }

    /**
     * Filter the query on the lieu_ouverture_plis_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByLieuOuverturePlisFr('fooValue');   // WHERE lieu_ouverture_plis_fr = 'fooValue'
     * $query->filterByLieuOuverturePlisFr('%fooValue%'); // WHERE lieu_ouverture_plis_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lieuOuverturePlisFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByLieuOuverturePlisFr($lieuOuverturePlisFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lieuOuverturePlisFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lieuOuverturePlisFr)) {
                $lieuOuverturePlisFr = str_replace('*', '%', $lieuOuverturePlisFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::LIEU_OUVERTURE_PLIS_FR, $lieuOuverturePlisFr, $comparison);
    }

    /**
     * Filter the query on the lieu_ouverture_plis_en column
     *
     * Example usage:
     * <code>
     * $query->filterByLieuOuverturePlisEn('fooValue');   // WHERE lieu_ouverture_plis_en = 'fooValue'
     * $query->filterByLieuOuverturePlisEn('%fooValue%'); // WHERE lieu_ouverture_plis_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lieuOuverturePlisEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByLieuOuverturePlisEn($lieuOuverturePlisEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lieuOuverturePlisEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lieuOuverturePlisEn)) {
                $lieuOuverturePlisEn = str_replace('*', '%', $lieuOuverturePlisEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::LIEU_OUVERTURE_PLIS_EN, $lieuOuverturePlisEn, $comparison);
    }

    /**
     * Filter the query on the lieu_ouverture_plis_es column
     *
     * Example usage:
     * <code>
     * $query->filterByLieuOuverturePlisEs('fooValue');   // WHERE lieu_ouverture_plis_es = 'fooValue'
     * $query->filterByLieuOuverturePlisEs('%fooValue%'); // WHERE lieu_ouverture_plis_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lieuOuverturePlisEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByLieuOuverturePlisEs($lieuOuverturePlisEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lieuOuverturePlisEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lieuOuverturePlisEs)) {
                $lieuOuverturePlisEs = str_replace('*', '%', $lieuOuverturePlisEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::LIEU_OUVERTURE_PLIS_ES, $lieuOuverturePlisEs, $comparison);
    }

    /**
     * Filter the query on the lieu_ouverture_plis_su column
     *
     * Example usage:
     * <code>
     * $query->filterByLieuOuverturePlisSu('fooValue');   // WHERE lieu_ouverture_plis_su = 'fooValue'
     * $query->filterByLieuOuverturePlisSu('%fooValue%'); // WHERE lieu_ouverture_plis_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lieuOuverturePlisSu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByLieuOuverturePlisSu($lieuOuverturePlisSu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lieuOuverturePlisSu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lieuOuverturePlisSu)) {
                $lieuOuverturePlisSu = str_replace('*', '%', $lieuOuverturePlisSu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::LIEU_OUVERTURE_PLIS_SU, $lieuOuverturePlisSu, $comparison);
    }

    /**
     * Filter the query on the lieu_ouverture_plis_du column
     *
     * Example usage:
     * <code>
     * $query->filterByLieuOuverturePlisDu('fooValue');   // WHERE lieu_ouverture_plis_du = 'fooValue'
     * $query->filterByLieuOuverturePlisDu('%fooValue%'); // WHERE lieu_ouverture_plis_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lieuOuverturePlisDu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByLieuOuverturePlisDu($lieuOuverturePlisDu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lieuOuverturePlisDu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lieuOuverturePlisDu)) {
                $lieuOuverturePlisDu = str_replace('*', '%', $lieuOuverturePlisDu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::LIEU_OUVERTURE_PLIS_DU, $lieuOuverturePlisDu, $comparison);
    }

    /**
     * Filter the query on the lieu_ouverture_plis_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByLieuOuverturePlisCz('fooValue');   // WHERE lieu_ouverture_plis_cz = 'fooValue'
     * $query->filterByLieuOuverturePlisCz('%fooValue%'); // WHERE lieu_ouverture_plis_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lieuOuverturePlisCz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByLieuOuverturePlisCz($lieuOuverturePlisCz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lieuOuverturePlisCz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lieuOuverturePlisCz)) {
                $lieuOuverturePlisCz = str_replace('*', '%', $lieuOuverturePlisCz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::LIEU_OUVERTURE_PLIS_CZ, $lieuOuverturePlisCz, $comparison);
    }

    /**
     * Filter the query on the add_echantillion_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByAddEchantillionFr('fooValue');   // WHERE add_echantillion_fr = 'fooValue'
     * $query->filterByAddEchantillionFr('%fooValue%'); // WHERE add_echantillion_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addEchantillionFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAddEchantillionFr($addEchantillionFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addEchantillionFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addEchantillionFr)) {
                $addEchantillionFr = str_replace('*', '%', $addEchantillionFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ADD_ECHANTILLION_FR, $addEchantillionFr, $comparison);
    }

    /**
     * Filter the query on the add_echantillion_en column
     *
     * Example usage:
     * <code>
     * $query->filterByAddEchantillionEn('fooValue');   // WHERE add_echantillion_en = 'fooValue'
     * $query->filterByAddEchantillionEn('%fooValue%'); // WHERE add_echantillion_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addEchantillionEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAddEchantillionEn($addEchantillionEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addEchantillionEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addEchantillionEn)) {
                $addEchantillionEn = str_replace('*', '%', $addEchantillionEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ADD_ECHANTILLION_EN, $addEchantillionEn, $comparison);
    }

    /**
     * Filter the query on the add_echantillion_es column
     *
     * Example usage:
     * <code>
     * $query->filterByAddEchantillionEs('fooValue');   // WHERE add_echantillion_es = 'fooValue'
     * $query->filterByAddEchantillionEs('%fooValue%'); // WHERE add_echantillion_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addEchantillionEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAddEchantillionEs($addEchantillionEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addEchantillionEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addEchantillionEs)) {
                $addEchantillionEs = str_replace('*', '%', $addEchantillionEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ADD_ECHANTILLION_ES, $addEchantillionEs, $comparison);
    }

    /**
     * Filter the query on the add_echantillion_su column
     *
     * Example usage:
     * <code>
     * $query->filterByAddEchantillionSu('fooValue');   // WHERE add_echantillion_su = 'fooValue'
     * $query->filterByAddEchantillionSu('%fooValue%'); // WHERE add_echantillion_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addEchantillionSu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAddEchantillionSu($addEchantillionSu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addEchantillionSu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addEchantillionSu)) {
                $addEchantillionSu = str_replace('*', '%', $addEchantillionSu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ADD_ECHANTILLION_SU, $addEchantillionSu, $comparison);
    }

    /**
     * Filter the query on the add_echantillion_du column
     *
     * Example usage:
     * <code>
     * $query->filterByAddEchantillionDu('fooValue');   // WHERE add_echantillion_du = 'fooValue'
     * $query->filterByAddEchantillionDu('%fooValue%'); // WHERE add_echantillion_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addEchantillionDu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAddEchantillionDu($addEchantillionDu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addEchantillionDu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addEchantillionDu)) {
                $addEchantillionDu = str_replace('*', '%', $addEchantillionDu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ADD_ECHANTILLION_DU, $addEchantillionDu, $comparison);
    }

    /**
     * Filter the query on the add_echantillion_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByAddEchantillionCz('fooValue');   // WHERE add_echantillion_cz = 'fooValue'
     * $query->filterByAddEchantillionCz('%fooValue%'); // WHERE add_echantillion_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addEchantillionCz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAddEchantillionCz($addEchantillionCz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addEchantillionCz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addEchantillionCz)) {
                $addEchantillionCz = str_replace('*', '%', $addEchantillionCz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ADD_ECHANTILLION_CZ, $addEchantillionCz, $comparison);
    }

    /**
     * Filter the query on the add_echantillion_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByAddEchantillionAr('fooValue');   // WHERE add_echantillion_ar = 'fooValue'
     * $query->filterByAddEchantillionAr('%fooValue%'); // WHERE add_echantillion_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addEchantillionAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAddEchantillionAr($addEchantillionAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addEchantillionAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addEchantillionAr)) {
                $addEchantillionAr = str_replace('*', '%', $addEchantillionAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ADD_ECHANTILLION_AR, $addEchantillionAr, $comparison);
    }

    /**
     * Filter the query on the add_reunion_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByAddReunionFr('fooValue');   // WHERE add_reunion_fr = 'fooValue'
     * $query->filterByAddReunionFr('%fooValue%'); // WHERE add_reunion_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addReunionFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAddReunionFr($addReunionFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addReunionFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addReunionFr)) {
                $addReunionFr = str_replace('*', '%', $addReunionFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ADD_REUNION_FR, $addReunionFr, $comparison);
    }

    /**
     * Filter the query on the add_reunion_en column
     *
     * Example usage:
     * <code>
     * $query->filterByAddReunionEn('fooValue');   // WHERE add_reunion_en = 'fooValue'
     * $query->filterByAddReunionEn('%fooValue%'); // WHERE add_reunion_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addReunionEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAddReunionEn($addReunionEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addReunionEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addReunionEn)) {
                $addReunionEn = str_replace('*', '%', $addReunionEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ADD_REUNION_EN, $addReunionEn, $comparison);
    }

    /**
     * Filter the query on the add_reunion_es column
     *
     * Example usage:
     * <code>
     * $query->filterByAddReunionEs('fooValue');   // WHERE add_reunion_es = 'fooValue'
     * $query->filterByAddReunionEs('%fooValue%'); // WHERE add_reunion_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addReunionEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAddReunionEs($addReunionEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addReunionEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addReunionEs)) {
                $addReunionEs = str_replace('*', '%', $addReunionEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ADD_REUNION_ES, $addReunionEs, $comparison);
    }

    /**
     * Filter the query on the add_reunion_su column
     *
     * Example usage:
     * <code>
     * $query->filterByAddReunionSu('fooValue');   // WHERE add_reunion_su = 'fooValue'
     * $query->filterByAddReunionSu('%fooValue%'); // WHERE add_reunion_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addReunionSu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAddReunionSu($addReunionSu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addReunionSu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addReunionSu)) {
                $addReunionSu = str_replace('*', '%', $addReunionSu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ADD_REUNION_SU, $addReunionSu, $comparison);
    }

    /**
     * Filter the query on the add_reunion_du column
     *
     * Example usage:
     * <code>
     * $query->filterByAddReunionDu('fooValue');   // WHERE add_reunion_du = 'fooValue'
     * $query->filterByAddReunionDu('%fooValue%'); // WHERE add_reunion_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addReunionDu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAddReunionDu($addReunionDu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addReunionDu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addReunionDu)) {
                $addReunionDu = str_replace('*', '%', $addReunionDu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ADD_REUNION_DU, $addReunionDu, $comparison);
    }

    /**
     * Filter the query on the add_reunion_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByAddReunionCz('fooValue');   // WHERE add_reunion_cz = 'fooValue'
     * $query->filterByAddReunionCz('%fooValue%'); // WHERE add_reunion_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addReunionCz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAddReunionCz($addReunionCz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addReunionCz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addReunionCz)) {
                $addReunionCz = str_replace('*', '%', $addReunionCz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ADD_REUNION_CZ, $addReunionCz, $comparison);
    }

    /**
     * Filter the query on the add_reunion_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByAddReunionAr('fooValue');   // WHERE add_reunion_ar = 'fooValue'
     * $query->filterByAddReunionAr('%fooValue%'); // WHERE add_reunion_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addReunionAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAddReunionAr($addReunionAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addReunionAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addReunionAr)) {
                $addReunionAr = str_replace('*', '%', $addReunionAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ADD_REUNION_AR, $addReunionAr, $comparison);
    }

    /**
     * Filter the query on the mode_passation column
     *
     * Example usage:
     * <code>
     * $query->filterByModePassation('fooValue');   // WHERE mode_passation = 'fooValue'
     * $query->filterByModePassation('%fooValue%'); // WHERE mode_passation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $modePassation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByModePassation($modePassation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modePassation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $modePassation)) {
                $modePassation = str_replace('*', '%', $modePassation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::MODE_PASSATION, $modePassation, $comparison);
    }

    /**
     * Filter the query on the consultation_annulee column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultationAnnulee('fooValue');   // WHERE consultation_annulee = 'fooValue'
     * $query->filterByConsultationAnnulee('%fooValue%'); // WHERE consultation_annulee LIKE '%fooValue%'
     * </code>
     *
     * @param     string $consultationAnnulee The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByConsultationAnnulee($consultationAnnulee = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($consultationAnnulee)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $consultationAnnulee)) {
                $consultationAnnulee = str_replace('*', '%', $consultationAnnulee);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::CONSULTATION_ANNULEE, $consultationAnnulee, $comparison);
    }

    /**
     * Filter the query on the Compte_Boamp_Associe column
     *
     * Example usage:
     * <code>
     * $query->filterByCompteBoampAssocie(1234); // WHERE Compte_Boamp_Associe = 1234
     * $query->filterByCompteBoampAssocie(array(12, 34)); // WHERE Compte_Boamp_Associe IN (12, 34)
     * $query->filterByCompteBoampAssocie(array('min' => 12)); // WHERE Compte_Boamp_Associe >= 12
     * $query->filterByCompteBoampAssocie(array('max' => 12)); // WHERE Compte_Boamp_Associe <= 12
     * </code>
     *
     * @param     mixed $compteBoampAssocie The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByCompteBoampAssocie($compteBoampAssocie = null, $comparison = null)
    {
        if (is_array($compteBoampAssocie)) {
            $useMinMax = false;
            if (isset($compteBoampAssocie['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::COMPTE_BOAMP_ASSOCIE, $compteBoampAssocie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($compteBoampAssocie['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::COMPTE_BOAMP_ASSOCIE, $compteBoampAssocie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::COMPTE_BOAMP_ASSOCIE, $compteBoampAssocie, $comparison);
    }

    /**
     * Filter the query on the accessibilite_it column
     *
     * Example usage:
     * <code>
     * $query->filterByAccessibiliteIt('fooValue');   // WHERE accessibilite_it = 'fooValue'
     * $query->filterByAccessibiliteIt('%fooValue%'); // WHERE accessibilite_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $accessibiliteIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAccessibiliteIt($accessibiliteIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($accessibiliteIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $accessibiliteIt)) {
                $accessibiliteIt = str_replace('*', '%', $accessibiliteIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ACCESSIBILITE_IT, $accessibiliteIt, $comparison);
    }

    /**
     * Filter the query on the adresse_depot_offres_it column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseDepotOffresIt('fooValue');   // WHERE adresse_depot_offres_it = 'fooValue'
     * $query->filterByAdresseDepotOffresIt('%fooValue%'); // WHERE adresse_depot_offres_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseDepotOffresIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAdresseDepotOffresIt($adresseDepotOffresIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseDepotOffresIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseDepotOffresIt)) {
                $adresseDepotOffresIt = str_replace('*', '%', $adresseDepotOffresIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ADRESSE_DEPOT_OFFRES_IT, $adresseDepotOffresIt, $comparison);
    }

    /**
     * Filter the query on the lieu_ouverture_plis_it column
     *
     * Example usage:
     * <code>
     * $query->filterByLieuOuverturePlisIt('fooValue');   // WHERE lieu_ouverture_plis_it = 'fooValue'
     * $query->filterByLieuOuverturePlisIt('%fooValue%'); // WHERE lieu_ouverture_plis_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lieuOuverturePlisIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByLieuOuverturePlisIt($lieuOuverturePlisIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lieuOuverturePlisIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lieuOuverturePlisIt)) {
                $lieuOuverturePlisIt = str_replace('*', '%', $lieuOuverturePlisIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::LIEU_OUVERTURE_PLIS_IT, $lieuOuverturePlisIt, $comparison);
    }

    /**
     * Filter the query on the adresse_retrais_dossiers_it column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseRetraisDossiersIt('fooValue');   // WHERE adresse_retrais_dossiers_it = 'fooValue'
     * $query->filterByAdresseRetraisDossiersIt('%fooValue%'); // WHERE adresse_retrais_dossiers_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseRetraisDossiersIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAdresseRetraisDossiersIt($adresseRetraisDossiersIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseRetraisDossiersIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseRetraisDossiersIt)) {
                $adresseRetraisDossiersIt = str_replace('*', '%', $adresseRetraisDossiersIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ADRESSE_RETRAIS_DOSSIERS_IT, $adresseRetraisDossiersIt, $comparison);
    }

    /**
     * Filter the query on the pieces_dossier_admin_it column
     *
     * Example usage:
     * <code>
     * $query->filterByPiecesDossierAdminIt('fooValue');   // WHERE pieces_dossier_admin_it = 'fooValue'
     * $query->filterByPiecesDossierAdminIt('%fooValue%'); // WHERE pieces_dossier_admin_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $piecesDossierAdminIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByPiecesDossierAdminIt($piecesDossierAdminIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($piecesDossierAdminIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $piecesDossierAdminIt)) {
                $piecesDossierAdminIt = str_replace('*', '%', $piecesDossierAdminIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::PIECES_DOSSIER_ADMIN_IT, $piecesDossierAdminIt, $comparison);
    }

    /**
     * Filter the query on the pieces_dossier_tech_it column
     *
     * Example usage:
     * <code>
     * $query->filterByPiecesDossierTechIt('fooValue');   // WHERE pieces_dossier_tech_it = 'fooValue'
     * $query->filterByPiecesDossierTechIt('%fooValue%'); // WHERE pieces_dossier_tech_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $piecesDossierTechIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByPiecesDossierTechIt($piecesDossierTechIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($piecesDossierTechIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $piecesDossierTechIt)) {
                $piecesDossierTechIt = str_replace('*', '%', $piecesDossierTechIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::PIECES_DOSSIER_TECH_IT, $piecesDossierTechIt, $comparison);
    }

    /**
     * Filter the query on the pieces_dossier_additif_it column
     *
     * Example usage:
     * <code>
     * $query->filterByPiecesDossierAdditifIt('fooValue');   // WHERE pieces_dossier_additif_it = 'fooValue'
     * $query->filterByPiecesDossierAdditifIt('%fooValue%'); // WHERE pieces_dossier_additif_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $piecesDossierAdditifIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByPiecesDossierAdditifIt($piecesDossierAdditifIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($piecesDossierAdditifIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $piecesDossierAdditifIt)) {
                $piecesDossierAdditifIt = str_replace('*', '%', $piecesDossierAdditifIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::PIECES_DOSSIER_ADDITIF_IT, $piecesDossierAdditifIt, $comparison);
    }

    /**
     * Filter the query on the detail_consultation_it column
     *
     * Example usage:
     * <code>
     * $query->filterByDetailConsultationIt('fooValue');   // WHERE detail_consultation_it = 'fooValue'
     * $query->filterByDetailConsultationIt('%fooValue%'); // WHERE detail_consultation_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $detailConsultationIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByDetailConsultationIt($detailConsultationIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($detailConsultationIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $detailConsultationIt)) {
                $detailConsultationIt = str_replace('*', '%', $detailConsultationIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::DETAIL_CONSULTATION_IT, $detailConsultationIt, $comparison);
    }

    /**
     * Filter the query on the add_echantillion_it column
     *
     * Example usage:
     * <code>
     * $query->filterByAddEchantillionIt('fooValue');   // WHERE add_echantillion_it = 'fooValue'
     * $query->filterByAddEchantillionIt('%fooValue%'); // WHERE add_echantillion_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addEchantillionIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAddEchantillionIt($addEchantillionIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addEchantillionIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addEchantillionIt)) {
                $addEchantillionIt = str_replace('*', '%', $addEchantillionIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ADD_ECHANTILLION_IT, $addEchantillionIt, $comparison);
    }

    /**
     * Filter the query on the add_reunion_it column
     *
     * Example usage:
     * <code>
     * $query->filterByAddReunionIt('fooValue');   // WHERE add_reunion_it = 'fooValue'
     * $query->filterByAddReunionIt('%fooValue%'); // WHERE add_reunion_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addReunionIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAddReunionIt($addReunionIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addReunionIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addReunionIt)) {
                $addReunionIt = str_replace('*', '%', $addReunionIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ADD_REUNION_IT, $addReunionIt, $comparison);
    }

    /**
     * Filter the query on the codes_nuts column
     *
     * Example usage:
     * <code>
     * $query->filterByCodesNuts('fooValue');   // WHERE codes_nuts = 'fooValue'
     * $query->filterByCodesNuts('%fooValue%'); // WHERE codes_nuts LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codesNuts The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByCodesNuts($codesNuts = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codesNuts)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codesNuts)) {
                $codesNuts = str_replace('*', '%', $codesNuts);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::CODES_NUTS, $codesNuts, $comparison);
    }

    /**
     * Filter the query on the intitule column
     *
     * Example usage:
     * <code>
     * $query->filterByIntitule('fooValue');   // WHERE intitule = 'fooValue'
     * $query->filterByIntitule('%fooValue%'); // WHERE intitule LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intitule The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByIntitule($intitule = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intitule)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $intitule)) {
                $intitule = str_replace('*', '%', $intitule);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::INTITULE, $intitule, $comparison);
    }

    /**
     * Filter the query on the id_tr_intitule column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTrIntitule(1234); // WHERE id_tr_intitule = 1234
     * $query->filterByIdTrIntitule(array(12, 34)); // WHERE id_tr_intitule IN (12, 34)
     * $query->filterByIdTrIntitule(array('min' => 12)); // WHERE id_tr_intitule >= 12
     * $query->filterByIdTrIntitule(array('max' => 12)); // WHERE id_tr_intitule <= 12
     * </code>
     *
     * @param     mixed $idTrIntitule The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByIdTrIntitule($idTrIntitule = null, $comparison = null)
    {
        if (is_array($idTrIntitule)) {
            $useMinMax = false;
            if (isset($idTrIntitule['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::ID_TR_INTITULE, $idTrIntitule['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTrIntitule['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::ID_TR_INTITULE, $idTrIntitule['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ID_TR_INTITULE, $idTrIntitule, $comparison);
    }

    /**
     * Filter the query on the objet column
     *
     * Example usage:
     * <code>
     * $query->filterByObjet('fooValue');   // WHERE objet = 'fooValue'
     * $query->filterByObjet('%fooValue%'); // WHERE objet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $objet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByObjet($objet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($objet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $objet)) {
                $objet = str_replace('*', '%', $objet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::OBJET, $objet, $comparison);
    }

    /**
     * Filter the query on the id_tr_objet column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTrObjet(1234); // WHERE id_tr_objet = 1234
     * $query->filterByIdTrObjet(array(12, 34)); // WHERE id_tr_objet IN (12, 34)
     * $query->filterByIdTrObjet(array('min' => 12)); // WHERE id_tr_objet >= 12
     * $query->filterByIdTrObjet(array('max' => 12)); // WHERE id_tr_objet <= 12
     * </code>
     *
     * @param     mixed $idTrObjet The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByIdTrObjet($idTrObjet = null, $comparison = null)
    {
        if (is_array($idTrObjet)) {
            $useMinMax = false;
            if (isset($idTrObjet['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::ID_TR_OBJET, $idTrObjet['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTrObjet['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::ID_TR_OBJET, $idTrObjet['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ID_TR_OBJET, $idTrObjet, $comparison);
    }

    /**
     * Filter the query on the date_decision column
     *
     * Example usage:
     * <code>
     * $query->filterByDateDecision('fooValue');   // WHERE date_decision = 'fooValue'
     * $query->filterByDateDecision('%fooValue%'); // WHERE date_decision LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateDecision The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByDateDecision($dateDecision = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateDecision)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateDecision)) {
                $dateDecision = str_replace('*', '%', $dateDecision);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::DATE_DECISION, $dateDecision, $comparison);
    }

    /**
     * Filter the query on the type_acces column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeAcces('fooValue');   // WHERE type_acces = 'fooValue'
     * $query->filterByTypeAcces('%fooValue%'); // WHERE type_acces LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeAcces The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByTypeAcces($typeAcces = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeAcces)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeAcces)) {
                $typeAcces = str_replace('*', '%', $typeAcces);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::TYPE_ACCES, $typeAcces, $comparison);
    }

    /**
     * Filter the query on the autoriser_reponse_electronique column
     *
     * Example usage:
     * <code>
     * $query->filterByAutoriserReponseElectronique('fooValue');   // WHERE autoriser_reponse_electronique = 'fooValue'
     * $query->filterByAutoriserReponseElectronique('%fooValue%'); // WHERE autoriser_reponse_electronique LIKE '%fooValue%'
     * </code>
     *
     * @param     string $autoriserReponseElectronique The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAutoriserReponseElectronique($autoriserReponseElectronique = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($autoriserReponseElectronique)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $autoriserReponseElectronique)) {
                $autoriserReponseElectronique = str_replace('*', '%', $autoriserReponseElectronique);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::AUTORISER_REPONSE_ELECTRONIQUE, $autoriserReponseElectronique, $comparison);
    }

    /**
     * Filter the query on the regle_mise_en_ligne column
     *
     * Example usage:
     * <code>
     * $query->filterByRegleMiseEnLigne(1234); // WHERE regle_mise_en_ligne = 1234
     * $query->filterByRegleMiseEnLigne(array(12, 34)); // WHERE regle_mise_en_ligne IN (12, 34)
     * $query->filterByRegleMiseEnLigne(array('min' => 12)); // WHERE regle_mise_en_ligne >= 12
     * $query->filterByRegleMiseEnLigne(array('max' => 12)); // WHERE regle_mise_en_ligne <= 12
     * </code>
     *
     * @param     mixed $regleMiseEnLigne The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByRegleMiseEnLigne($regleMiseEnLigne = null, $comparison = null)
    {
        if (is_array($regleMiseEnLigne)) {
            $useMinMax = false;
            if (isset($regleMiseEnLigne['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::REGLE_MISE_EN_LIGNE, $regleMiseEnLigne['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($regleMiseEnLigne['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::REGLE_MISE_EN_LIGNE, $regleMiseEnLigne['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::REGLE_MISE_EN_LIGNE, $regleMiseEnLigne, $comparison);
    }

    /**
     * Filter the query on the id_regle_validation column
     *
     * Example usage:
     * <code>
     * $query->filterByIdRegleValidation(1234); // WHERE id_regle_validation = 1234
     * $query->filterByIdRegleValidation(array(12, 34)); // WHERE id_regle_validation IN (12, 34)
     * $query->filterByIdRegleValidation(array('min' => 12)); // WHERE id_regle_validation >= 12
     * $query->filterByIdRegleValidation(array('max' => 12)); // WHERE id_regle_validation <= 12
     * </code>
     *
     * @param     mixed $idRegleValidation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByIdRegleValidation($idRegleValidation = null, $comparison = null)
    {
        if (is_array($idRegleValidation)) {
            $useMinMax = false;
            if (isset($idRegleValidation['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::ID_REGLE_VALIDATION, $idRegleValidation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idRegleValidation['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::ID_REGLE_VALIDATION, $idRegleValidation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ID_REGLE_VALIDATION, $idRegleValidation, $comparison);
    }

    /**
     * Filter the query on the intitule_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByIntituleFr('fooValue');   // WHERE intitule_fr = 'fooValue'
     * $query->filterByIntituleFr('%fooValue%'); // WHERE intitule_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intituleFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByIntituleFr($intituleFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intituleFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $intituleFr)) {
                $intituleFr = str_replace('*', '%', $intituleFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::INTITULE_FR, $intituleFr, $comparison);
    }

    /**
     * Filter the query on the intitule_en column
     *
     * Example usage:
     * <code>
     * $query->filterByIntituleEn('fooValue');   // WHERE intitule_en = 'fooValue'
     * $query->filterByIntituleEn('%fooValue%'); // WHERE intitule_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intituleEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByIntituleEn($intituleEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intituleEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $intituleEn)) {
                $intituleEn = str_replace('*', '%', $intituleEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::INTITULE_EN, $intituleEn, $comparison);
    }

    /**
     * Filter the query on the intitule_es column
     *
     * Example usage:
     * <code>
     * $query->filterByIntituleEs('fooValue');   // WHERE intitule_es = 'fooValue'
     * $query->filterByIntituleEs('%fooValue%'); // WHERE intitule_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intituleEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByIntituleEs($intituleEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intituleEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $intituleEs)) {
                $intituleEs = str_replace('*', '%', $intituleEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::INTITULE_ES, $intituleEs, $comparison);
    }

    /**
     * Filter the query on the intitule_su column
     *
     * Example usage:
     * <code>
     * $query->filterByIntituleSu('fooValue');   // WHERE intitule_su = 'fooValue'
     * $query->filterByIntituleSu('%fooValue%'); // WHERE intitule_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intituleSu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByIntituleSu($intituleSu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intituleSu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $intituleSu)) {
                $intituleSu = str_replace('*', '%', $intituleSu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::INTITULE_SU, $intituleSu, $comparison);
    }

    /**
     * Filter the query on the intitule_du column
     *
     * Example usage:
     * <code>
     * $query->filterByIntituleDu('fooValue');   // WHERE intitule_du = 'fooValue'
     * $query->filterByIntituleDu('%fooValue%'); // WHERE intitule_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intituleDu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByIntituleDu($intituleDu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intituleDu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $intituleDu)) {
                $intituleDu = str_replace('*', '%', $intituleDu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::INTITULE_DU, $intituleDu, $comparison);
    }

    /**
     * Filter the query on the intitule_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByIntituleCz('fooValue');   // WHERE intitule_cz = 'fooValue'
     * $query->filterByIntituleCz('%fooValue%'); // WHERE intitule_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intituleCz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByIntituleCz($intituleCz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intituleCz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $intituleCz)) {
                $intituleCz = str_replace('*', '%', $intituleCz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::INTITULE_CZ, $intituleCz, $comparison);
    }

    /**
     * Filter the query on the intitule_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByIntituleAr('fooValue');   // WHERE intitule_ar = 'fooValue'
     * $query->filterByIntituleAr('%fooValue%'); // WHERE intitule_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intituleAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByIntituleAr($intituleAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intituleAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $intituleAr)) {
                $intituleAr = str_replace('*', '%', $intituleAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::INTITULE_AR, $intituleAr, $comparison);
    }

    /**
     * Filter the query on the intitule_it column
     *
     * Example usage:
     * <code>
     * $query->filterByIntituleIt('fooValue');   // WHERE intitule_it = 'fooValue'
     * $query->filterByIntituleIt('%fooValue%'); // WHERE intitule_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intituleIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByIntituleIt($intituleIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intituleIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $intituleIt)) {
                $intituleIt = str_replace('*', '%', $intituleIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::INTITULE_IT, $intituleIt, $comparison);
    }

    /**
     * Filter the query on the objet_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByObjetFr('fooValue');   // WHERE objet_fr = 'fooValue'
     * $query->filterByObjetFr('%fooValue%'); // WHERE objet_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $objetFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByObjetFr($objetFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($objetFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $objetFr)) {
                $objetFr = str_replace('*', '%', $objetFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::OBJET_FR, $objetFr, $comparison);
    }

    /**
     * Filter the query on the objet_en column
     *
     * Example usage:
     * <code>
     * $query->filterByObjetEn('fooValue');   // WHERE objet_en = 'fooValue'
     * $query->filterByObjetEn('%fooValue%'); // WHERE objet_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $objetEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByObjetEn($objetEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($objetEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $objetEn)) {
                $objetEn = str_replace('*', '%', $objetEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::OBJET_EN, $objetEn, $comparison);
    }

    /**
     * Filter the query on the objet_es column
     *
     * Example usage:
     * <code>
     * $query->filterByObjetEs('fooValue');   // WHERE objet_es = 'fooValue'
     * $query->filterByObjetEs('%fooValue%'); // WHERE objet_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $objetEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByObjetEs($objetEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($objetEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $objetEs)) {
                $objetEs = str_replace('*', '%', $objetEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::OBJET_ES, $objetEs, $comparison);
    }

    /**
     * Filter the query on the objet_su column
     *
     * Example usage:
     * <code>
     * $query->filterByObjetSu('fooValue');   // WHERE objet_su = 'fooValue'
     * $query->filterByObjetSu('%fooValue%'); // WHERE objet_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $objetSu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByObjetSu($objetSu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($objetSu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $objetSu)) {
                $objetSu = str_replace('*', '%', $objetSu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::OBJET_SU, $objetSu, $comparison);
    }

    /**
     * Filter the query on the objet_du column
     *
     * Example usage:
     * <code>
     * $query->filterByObjetDu('fooValue');   // WHERE objet_du = 'fooValue'
     * $query->filterByObjetDu('%fooValue%'); // WHERE objet_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $objetDu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByObjetDu($objetDu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($objetDu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $objetDu)) {
                $objetDu = str_replace('*', '%', $objetDu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::OBJET_DU, $objetDu, $comparison);
    }

    /**
     * Filter the query on the objet_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByObjetCz('fooValue');   // WHERE objet_cz = 'fooValue'
     * $query->filterByObjetCz('%fooValue%'); // WHERE objet_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $objetCz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByObjetCz($objetCz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($objetCz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $objetCz)) {
                $objetCz = str_replace('*', '%', $objetCz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::OBJET_CZ, $objetCz, $comparison);
    }

    /**
     * Filter the query on the objet_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByObjetAr('fooValue');   // WHERE objet_ar = 'fooValue'
     * $query->filterByObjetAr('%fooValue%'); // WHERE objet_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $objetAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByObjetAr($objetAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($objetAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $objetAr)) {
                $objetAr = str_replace('*', '%', $objetAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::OBJET_AR, $objetAr, $comparison);
    }

    /**
     * Filter the query on the objet_it column
     *
     * Example usage:
     * <code>
     * $query->filterByObjetIt('fooValue');   // WHERE objet_it = 'fooValue'
     * $query->filterByObjetIt('%fooValue%'); // WHERE objet_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $objetIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByObjetIt($objetIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($objetIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $objetIt)) {
                $objetIt = str_replace('*', '%', $objetIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::OBJET_IT, $objetIt, $comparison);
    }

    /**
     * Filter the query on the clause_sociale column
     *
     * Example usage:
     * <code>
     * $query->filterByClauseSociale('fooValue');   // WHERE clause_sociale = 'fooValue'
     * $query->filterByClauseSociale('%fooValue%'); // WHERE clause_sociale LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clauseSociale The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByClauseSociale($clauseSociale = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clauseSociale)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clauseSociale)) {
                $clauseSociale = str_replace('*', '%', $clauseSociale);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::CLAUSE_SOCIALE, $clauseSociale, $comparison);
    }

    /**
     * Filter the query on the clause_environnementale column
     *
     * Example usage:
     * <code>
     * $query->filterByClauseEnvironnementale('fooValue');   // WHERE clause_environnementale = 'fooValue'
     * $query->filterByClauseEnvironnementale('%fooValue%'); // WHERE clause_environnementale LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clauseEnvironnementale The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByClauseEnvironnementale($clauseEnvironnementale = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clauseEnvironnementale)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clauseEnvironnementale)) {
                $clauseEnvironnementale = str_replace('*', '%', $clauseEnvironnementale);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::CLAUSE_ENVIRONNEMENTALE, $clauseEnvironnementale, $comparison);
    }

    /**
     * Filter the query on the reponse_obligatoire column
     *
     * Example usage:
     * <code>
     * $query->filterByReponseObligatoire('fooValue');   // WHERE reponse_obligatoire = 'fooValue'
     * $query->filterByReponseObligatoire('%fooValue%'); // WHERE reponse_obligatoire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reponseObligatoire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByReponseObligatoire($reponseObligatoire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reponseObligatoire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $reponseObligatoire)) {
                $reponseObligatoire = str_replace('*', '%', $reponseObligatoire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::REPONSE_OBLIGATOIRE, $reponseObligatoire, $comparison);
    }

    /**
     * Filter the query on the autoriser_publicite column
     *
     * Example usage:
     * <code>
     * $query->filterByAutoriserPublicite(1234); // WHERE autoriser_publicite = 1234
     * $query->filterByAutoriserPublicite(array(12, 34)); // WHERE autoriser_publicite IN (12, 34)
     * $query->filterByAutoriserPublicite(array('min' => 12)); // WHERE autoriser_publicite >= 12
     * $query->filterByAutoriserPublicite(array('max' => 12)); // WHERE autoriser_publicite <= 12
     * </code>
     *
     * @param     mixed $autoriserPublicite The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAutoriserPublicite($autoriserPublicite = null, $comparison = null)
    {
        if (is_array($autoriserPublicite)) {
            $useMinMax = false;
            if (isset($autoriserPublicite['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::AUTORISER_PUBLICITE, $autoriserPublicite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoriserPublicite['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::AUTORISER_PUBLICITE, $autoriserPublicite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::AUTORISER_PUBLICITE, $autoriserPublicite, $comparison);
    }

    /**
     * Filter the query on the type_envoi column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeEnvoi('fooValue');   // WHERE type_envoi = 'fooValue'
     * $query->filterByTypeEnvoi('%fooValue%'); // WHERE type_envoi LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeEnvoi The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByTypeEnvoi($typeEnvoi = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeEnvoi)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeEnvoi)) {
                $typeEnvoi = str_replace('*', '%', $typeEnvoi);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::TYPE_ENVOI, $typeEnvoi, $comparison);
    }

    /**
     * Filter the query on the chiffrement_offre column
     *
     * Example usage:
     * <code>
     * $query->filterByChiffrementOffre('fooValue');   // WHERE chiffrement_offre = 'fooValue'
     * $query->filterByChiffrementOffre('%fooValue%'); // WHERE chiffrement_offre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $chiffrementOffre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByChiffrementOffre($chiffrementOffre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($chiffrementOffre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $chiffrementOffre)) {
                $chiffrementOffre = str_replace('*', '%', $chiffrementOffre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::CHIFFREMENT_OFFRE, $chiffrementOffre, $comparison);
    }

    /**
     * Filter the query on the env_candidature column
     *
     * Example usage:
     * <code>
     * $query->filterByEnvCandidature(1234); // WHERE env_candidature = 1234
     * $query->filterByEnvCandidature(array(12, 34)); // WHERE env_candidature IN (12, 34)
     * $query->filterByEnvCandidature(array('min' => 12)); // WHERE env_candidature >= 12
     * $query->filterByEnvCandidature(array('max' => 12)); // WHERE env_candidature <= 12
     * </code>
     *
     * @param     mixed $envCandidature The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByEnvCandidature($envCandidature = null, $comparison = null)
    {
        if (is_array($envCandidature)) {
            $useMinMax = false;
            if (isset($envCandidature['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::ENV_CANDIDATURE, $envCandidature['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($envCandidature['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::ENV_CANDIDATURE, $envCandidature['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ENV_CANDIDATURE, $envCandidature, $comparison);
    }

    /**
     * Filter the query on the env_offre column
     *
     * Example usage:
     * <code>
     * $query->filterByEnvOffre(1234); // WHERE env_offre = 1234
     * $query->filterByEnvOffre(array(12, 34)); // WHERE env_offre IN (12, 34)
     * $query->filterByEnvOffre(array('min' => 12)); // WHERE env_offre >= 12
     * $query->filterByEnvOffre(array('max' => 12)); // WHERE env_offre <= 12
     * </code>
     *
     * @param     mixed $envOffre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByEnvOffre($envOffre = null, $comparison = null)
    {
        if (is_array($envOffre)) {
            $useMinMax = false;
            if (isset($envOffre['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::ENV_OFFRE, $envOffre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($envOffre['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::ENV_OFFRE, $envOffre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ENV_OFFRE, $envOffre, $comparison);
    }

    /**
     * Filter the query on the env_anonymat column
     *
     * Example usage:
     * <code>
     * $query->filterByEnvAnonymat(1234); // WHERE env_anonymat = 1234
     * $query->filterByEnvAnonymat(array(12, 34)); // WHERE env_anonymat IN (12, 34)
     * $query->filterByEnvAnonymat(array('min' => 12)); // WHERE env_anonymat >= 12
     * $query->filterByEnvAnonymat(array('max' => 12)); // WHERE env_anonymat <= 12
     * </code>
     *
     * @param     mixed $envAnonymat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByEnvAnonymat($envAnonymat = null, $comparison = null)
    {
        if (is_array($envAnonymat)) {
            $useMinMax = false;
            if (isset($envAnonymat['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::ENV_ANONYMAT, $envAnonymat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($envAnonymat['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::ENV_ANONYMAT, $envAnonymat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ENV_ANONYMAT, $envAnonymat, $comparison);
    }

    /**
     * Filter the query on the id_etat_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEtatConsultation(1234); // WHERE id_etat_consultation = 1234
     * $query->filterByIdEtatConsultation(array(12, 34)); // WHERE id_etat_consultation IN (12, 34)
     * $query->filterByIdEtatConsultation(array('min' => 12)); // WHERE id_etat_consultation >= 12
     * $query->filterByIdEtatConsultation(array('max' => 12)); // WHERE id_etat_consultation <= 12
     * </code>
     *
     * @param     mixed $idEtatConsultation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByIdEtatConsultation($idEtatConsultation = null, $comparison = null)
    {
        if (is_array($idEtatConsultation)) {
            $useMinMax = false;
            if (isset($idEtatConsultation['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::ID_ETAT_CONSULTATION, $idEtatConsultation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEtatConsultation['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::ID_ETAT_CONSULTATION, $idEtatConsultation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ID_ETAT_CONSULTATION, $idEtatConsultation, $comparison);
    }

    /**
     * Filter the query on the reference_connecteur column
     *
     * Example usage:
     * <code>
     * $query->filterByReferenceConnecteur('fooValue');   // WHERE reference_connecteur = 'fooValue'
     * $query->filterByReferenceConnecteur('%fooValue%'); // WHERE reference_connecteur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $referenceConnecteur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByReferenceConnecteur($referenceConnecteur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($referenceConnecteur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $referenceConnecteur)) {
                $referenceConnecteur = str_replace('*', '%', $referenceConnecteur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::REFERENCE_CONNECTEUR, $referenceConnecteur, $comparison);
    }

    /**
     * Filter the query on the cons_statut column
     *
     * Example usage:
     * <code>
     * $query->filterByConsStatut('fooValue');   // WHERE cons_statut = 'fooValue'
     * $query->filterByConsStatut('%fooValue%'); // WHERE cons_statut LIKE '%fooValue%'
     * </code>
     *
     * @param     string $consStatut The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByConsStatut($consStatut = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($consStatut)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $consStatut)) {
                $consStatut = str_replace('*', '%', $consStatut);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::CONS_STATUT, $consStatut, $comparison);
    }

    /**
     * Filter the query on the id_approbateur column
     *
     * Example usage:
     * <code>
     * $query->filterByIdApprobateur(1234); // WHERE id_approbateur = 1234
     * $query->filterByIdApprobateur(array(12, 34)); // WHERE id_approbateur IN (12, 34)
     * $query->filterByIdApprobateur(array('min' => 12)); // WHERE id_approbateur >= 12
     * $query->filterByIdApprobateur(array('max' => 12)); // WHERE id_approbateur <= 12
     * </code>
     *
     * @param     mixed $idApprobateur The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByIdApprobateur($idApprobateur = null, $comparison = null)
    {
        if (is_array($idApprobateur)) {
            $useMinMax = false;
            if (isset($idApprobateur['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::ID_APPROBATEUR, $idApprobateur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idApprobateur['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::ID_APPROBATEUR, $idApprobateur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ID_APPROBATEUR, $idApprobateur, $comparison);
    }

    /**
     * Filter the query on the id_valideur column
     *
     * Example usage:
     * <code>
     * $query->filterByIdValideur(1234); // WHERE id_valideur = 1234
     * $query->filterByIdValideur(array(12, 34)); // WHERE id_valideur IN (12, 34)
     * $query->filterByIdValideur(array('min' => 12)); // WHERE id_valideur >= 12
     * $query->filterByIdValideur(array('max' => 12)); // WHERE id_valideur <= 12
     * </code>
     *
     * @param     mixed $idValideur The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByIdValideur($idValideur = null, $comparison = null)
    {
        if (is_array($idValideur)) {
            $useMinMax = false;
            if (isset($idValideur['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::ID_VALIDEUR, $idValideur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idValideur['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::ID_VALIDEUR, $idValideur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ID_VALIDEUR, $idValideur, $comparison);
    }

    /**
     * Filter the query on the service_validation column
     *
     * Example usage:
     * <code>
     * $query->filterByServiceValidation(1234); // WHERE service_validation = 1234
     * $query->filterByServiceValidation(array(12, 34)); // WHERE service_validation IN (12, 34)
     * $query->filterByServiceValidation(array('min' => 12)); // WHERE service_validation >= 12
     * $query->filterByServiceValidation(array('max' => 12)); // WHERE service_validation <= 12
     * </code>
     *
     * @param     mixed $serviceValidation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByServiceValidation($serviceValidation = null, $comparison = null)
    {
        if (is_array($serviceValidation)) {
            $useMinMax = false;
            if (isset($serviceValidation['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::SERVICE_VALIDATION, $serviceValidation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($serviceValidation['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::SERVICE_VALIDATION, $serviceValidation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::SERVICE_VALIDATION, $serviceValidation, $comparison);
    }

    /**
     * Filter the query on the id_createur column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCreateur(1234); // WHERE id_createur = 1234
     * $query->filterByIdCreateur(array(12, 34)); // WHERE id_createur IN (12, 34)
     * $query->filterByIdCreateur(array('min' => 12)); // WHERE id_createur >= 12
     * $query->filterByIdCreateur(array('max' => 12)); // WHERE id_createur <= 12
     * </code>
     *
     * @param     mixed $idCreateur The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByIdCreateur($idCreateur = null, $comparison = null)
    {
        if (is_array($idCreateur)) {
            $useMinMax = false;
            if (isset($idCreateur['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::ID_CREATEUR, $idCreateur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCreateur['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::ID_CREATEUR, $idCreateur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ID_CREATEUR, $idCreateur, $comparison);
    }

    /**
     * Filter the query on the nom_createur column
     *
     * Example usage:
     * <code>
     * $query->filterByNomCreateur('fooValue');   // WHERE nom_createur = 'fooValue'
     * $query->filterByNomCreateur('%fooValue%'); // WHERE nom_createur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomCreateur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByNomCreateur($nomCreateur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomCreateur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomCreateur)) {
                $nomCreateur = str_replace('*', '%', $nomCreateur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::NOM_CREATEUR, $nomCreateur, $comparison);
    }

    /**
     * Filter the query on the prenom_createur column
     *
     * Example usage:
     * <code>
     * $query->filterByPrenomCreateur('fooValue');   // WHERE prenom_createur = 'fooValue'
     * $query->filterByPrenomCreateur('%fooValue%'); // WHERE prenom_createur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prenomCreateur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByPrenomCreateur($prenomCreateur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prenomCreateur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prenomCreateur)) {
                $prenomCreateur = str_replace('*', '%', $prenomCreateur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::PRENOM_CREATEUR, $prenomCreateur, $comparison);
    }

    /**
     * Filter the query on the signature_acte_engagement column
     *
     * Example usage:
     * <code>
     * $query->filterBySignatureActeEngagement('fooValue');   // WHERE signature_acte_engagement = 'fooValue'
     * $query->filterBySignatureActeEngagement('%fooValue%'); // WHERE signature_acte_engagement LIKE '%fooValue%'
     * </code>
     *
     * @param     string $signatureActeEngagement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterBySignatureActeEngagement($signatureActeEngagement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($signatureActeEngagement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $signatureActeEngagement)) {
                $signatureActeEngagement = str_replace('*', '%', $signatureActeEngagement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::SIGNATURE_ACTE_ENGAGEMENT, $signatureActeEngagement, $comparison);
    }

    /**
     * Filter the query on the archiveMetaDescription column
     *
     * Example usage:
     * <code>
     * $query->filterByArchivemetadescription('fooValue');   // WHERE archiveMetaDescription = 'fooValue'
     * $query->filterByArchivemetadescription('%fooValue%'); // WHERE archiveMetaDescription LIKE '%fooValue%'
     * </code>
     *
     * @param     string $archivemetadescription The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByArchivemetadescription($archivemetadescription = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($archivemetadescription)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $archivemetadescription)) {
                $archivemetadescription = str_replace('*', '%', $archivemetadescription);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ARCHIVEMETADESCRIPTION, $archivemetadescription, $comparison);
    }

    /**
     * Filter the query on the archiveMetaMotsClef column
     *
     * Example usage:
     * <code>
     * $query->filterByArchivemetamotsclef('fooValue');   // WHERE archiveMetaMotsClef = 'fooValue'
     * $query->filterByArchivemetamotsclef('%fooValue%'); // WHERE archiveMetaMotsClef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $archivemetamotsclef The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByArchivemetamotsclef($archivemetamotsclef = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($archivemetamotsclef)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $archivemetamotsclef)) {
                $archivemetamotsclef = str_replace('*', '%', $archivemetamotsclef);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ARCHIVEMETAMOTSCLEF, $archivemetamotsclef, $comparison);
    }

    /**
     * Filter the query on the archiveIdBlobZip column
     *
     * Example usage:
     * <code>
     * $query->filterByArchiveidblobzip(1234); // WHERE archiveIdBlobZip = 1234
     * $query->filterByArchiveidblobzip(array(12, 34)); // WHERE archiveIdBlobZip IN (12, 34)
     * $query->filterByArchiveidblobzip(array('min' => 12)); // WHERE archiveIdBlobZip >= 12
     * $query->filterByArchiveidblobzip(array('max' => 12)); // WHERE archiveIdBlobZip <= 12
     * </code>
     *
     * @param     mixed $archiveidblobzip The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByArchiveidblobzip($archiveidblobzip = null, $comparison = null)
    {
        if (is_array($archiveidblobzip)) {
            $useMinMax = false;
            if (isset($archiveidblobzip['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::ARCHIVEIDBLOBZIP, $archiveidblobzip['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($archiveidblobzip['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::ARCHIVEIDBLOBZIP, $archiveidblobzip['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ARCHIVEIDBLOBZIP, $archiveidblobzip, $comparison);
    }

    /**
     * Filter the query on the decision_partielle column
     *
     * Example usage:
     * <code>
     * $query->filterByDecisionPartielle('fooValue');   // WHERE decision_partielle = 'fooValue'
     * $query->filterByDecisionPartielle('%fooValue%'); // WHERE decision_partielle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $decisionPartielle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByDecisionPartielle($decisionPartielle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($decisionPartielle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $decisionPartielle)) {
                $decisionPartielle = str_replace('*', '%', $decisionPartielle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::DECISION_PARTIELLE, $decisionPartielle, $comparison);
    }

    /**
     * Filter the query on the type_decision_a_renseigner column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeDecisionARenseigner('fooValue');   // WHERE type_decision_a_renseigner = 'fooValue'
     * $query->filterByTypeDecisionARenseigner('%fooValue%'); // WHERE type_decision_a_renseigner LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeDecisionARenseigner The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByTypeDecisionARenseigner($typeDecisionARenseigner = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeDecisionARenseigner)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeDecisionARenseigner)) {
                $typeDecisionARenseigner = str_replace('*', '%', $typeDecisionARenseigner);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::TYPE_DECISION_A_RENSEIGNER, $typeDecisionARenseigner, $comparison);
    }

    /**
     * Filter the query on the type_decision_attribution_marche column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeDecisionAttributionMarche('fooValue');   // WHERE type_decision_attribution_marche = 'fooValue'
     * $query->filterByTypeDecisionAttributionMarche('%fooValue%'); // WHERE type_decision_attribution_marche LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeDecisionAttributionMarche The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByTypeDecisionAttributionMarche($typeDecisionAttributionMarche = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeDecisionAttributionMarche)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeDecisionAttributionMarche)) {
                $typeDecisionAttributionMarche = str_replace('*', '%', $typeDecisionAttributionMarche);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::TYPE_DECISION_ATTRIBUTION_MARCHE, $typeDecisionAttributionMarche, $comparison);
    }

    /**
     * Filter the query on the type_decision_declaration_sans_suite column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeDecisionDeclarationSansSuite('fooValue');   // WHERE type_decision_declaration_sans_suite = 'fooValue'
     * $query->filterByTypeDecisionDeclarationSansSuite('%fooValue%'); // WHERE type_decision_declaration_sans_suite LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeDecisionDeclarationSansSuite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByTypeDecisionDeclarationSansSuite($typeDecisionDeclarationSansSuite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeDecisionDeclarationSansSuite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeDecisionDeclarationSansSuite)) {
                $typeDecisionDeclarationSansSuite = str_replace('*', '%', $typeDecisionDeclarationSansSuite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::TYPE_DECISION_DECLARATION_SANS_SUITE, $typeDecisionDeclarationSansSuite, $comparison);
    }

    /**
     * Filter the query on the type_decision_declaration_infructueux column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeDecisionDeclarationInfructueux('fooValue');   // WHERE type_decision_declaration_infructueux = 'fooValue'
     * $query->filterByTypeDecisionDeclarationInfructueux('%fooValue%'); // WHERE type_decision_declaration_infructueux LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeDecisionDeclarationInfructueux The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByTypeDecisionDeclarationInfructueux($typeDecisionDeclarationInfructueux = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeDecisionDeclarationInfructueux)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeDecisionDeclarationInfructueux)) {
                $typeDecisionDeclarationInfructueux = str_replace('*', '%', $typeDecisionDeclarationInfructueux);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::TYPE_DECISION_DECLARATION_INFRUCTUEUX, $typeDecisionDeclarationInfructueux, $comparison);
    }

    /**
     * Filter the query on the type_decision_selection_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeDecisionSelectionEntreprise('fooValue');   // WHERE type_decision_selection_entreprise = 'fooValue'
     * $query->filterByTypeDecisionSelectionEntreprise('%fooValue%'); // WHERE type_decision_selection_entreprise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeDecisionSelectionEntreprise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByTypeDecisionSelectionEntreprise($typeDecisionSelectionEntreprise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeDecisionSelectionEntreprise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeDecisionSelectionEntreprise)) {
                $typeDecisionSelectionEntreprise = str_replace('*', '%', $typeDecisionSelectionEntreprise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::TYPE_DECISION_SELECTION_ENTREPRISE, $typeDecisionSelectionEntreprise, $comparison);
    }

    /**
     * Filter the query on the type_decision_attribution_accord_cadre column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeDecisionAttributionAccordCadre('fooValue');   // WHERE type_decision_attribution_accord_cadre = 'fooValue'
     * $query->filterByTypeDecisionAttributionAccordCadre('%fooValue%'); // WHERE type_decision_attribution_accord_cadre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeDecisionAttributionAccordCadre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByTypeDecisionAttributionAccordCadre($typeDecisionAttributionAccordCadre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeDecisionAttributionAccordCadre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeDecisionAttributionAccordCadre)) {
                $typeDecisionAttributionAccordCadre = str_replace('*', '%', $typeDecisionAttributionAccordCadre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::TYPE_DECISION_ATTRIBUTION_ACCORD_CADRE, $typeDecisionAttributionAccordCadre, $comparison);
    }

    /**
     * Filter the query on the type_decision_admission_sad column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeDecisionAdmissionSad('fooValue');   // WHERE type_decision_admission_sad = 'fooValue'
     * $query->filterByTypeDecisionAdmissionSad('%fooValue%'); // WHERE type_decision_admission_sad LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeDecisionAdmissionSad The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByTypeDecisionAdmissionSad($typeDecisionAdmissionSad = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeDecisionAdmissionSad)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeDecisionAdmissionSad)) {
                $typeDecisionAdmissionSad = str_replace('*', '%', $typeDecisionAdmissionSad);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::TYPE_DECISION_ADMISSION_SAD, $typeDecisionAdmissionSad, $comparison);
    }

    /**
     * Filter the query on the type_decision_autre column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeDecisionAutre('fooValue');   // WHERE type_decision_autre = 'fooValue'
     * $query->filterByTypeDecisionAutre('%fooValue%'); // WHERE type_decision_autre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeDecisionAutre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByTypeDecisionAutre($typeDecisionAutre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeDecisionAutre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeDecisionAutre)) {
                $typeDecisionAutre = str_replace('*', '%', $typeDecisionAutre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::TYPE_DECISION_AUTRE, $typeDecisionAutre, $comparison);
    }

    /**
     * Filter the query on the id_archiveur column
     *
     * Example usage:
     * <code>
     * $query->filterByIdArchiveur(1234); // WHERE id_archiveur = 1234
     * $query->filterByIdArchiveur(array(12, 34)); // WHERE id_archiveur IN (12, 34)
     * $query->filterByIdArchiveur(array('min' => 12)); // WHERE id_archiveur >= 12
     * $query->filterByIdArchiveur(array('max' => 12)); // WHERE id_archiveur <= 12
     * </code>
     *
     * @param     mixed $idArchiveur The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByIdArchiveur($idArchiveur = null, $comparison = null)
    {
        if (is_array($idArchiveur)) {
            $useMinMax = false;
            if (isset($idArchiveur['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::ID_ARCHIVEUR, $idArchiveur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idArchiveur['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::ID_ARCHIVEUR, $idArchiveur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ID_ARCHIVEUR, $idArchiveur, $comparison);
    }

    /**
     * Filter the query on the prenom_nom_agent_telechargement_plis column
     *
     * Example usage:
     * <code>
     * $query->filterByPrenomNomAgentTelechargementPlis('fooValue');   // WHERE prenom_nom_agent_telechargement_plis = 'fooValue'
     * $query->filterByPrenomNomAgentTelechargementPlis('%fooValue%'); // WHERE prenom_nom_agent_telechargement_plis LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prenomNomAgentTelechargementPlis The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByPrenomNomAgentTelechargementPlis($prenomNomAgentTelechargementPlis = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prenomNomAgentTelechargementPlis)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prenomNomAgentTelechargementPlis)) {
                $prenomNomAgentTelechargementPlis = str_replace('*', '%', $prenomNomAgentTelechargementPlis);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::PRENOM_NOM_AGENT_TELECHARGEMENT_PLIS, $prenomNomAgentTelechargementPlis, $comparison);
    }

    /**
     * Filter the query on the id_agent_telechargement_plis column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentTelechargementPlis(1234); // WHERE id_agent_telechargement_plis = 1234
     * $query->filterByIdAgentTelechargementPlis(array(12, 34)); // WHERE id_agent_telechargement_plis IN (12, 34)
     * $query->filterByIdAgentTelechargementPlis(array('min' => 12)); // WHERE id_agent_telechargement_plis >= 12
     * $query->filterByIdAgentTelechargementPlis(array('max' => 12)); // WHERE id_agent_telechargement_plis <= 12
     * </code>
     *
     * @param     mixed $idAgentTelechargementPlis The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByIdAgentTelechargementPlis($idAgentTelechargementPlis = null, $comparison = null)
    {
        if (is_array($idAgentTelechargementPlis)) {
            $useMinMax = false;
            if (isset($idAgentTelechargementPlis['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::ID_AGENT_TELECHARGEMENT_PLIS, $idAgentTelechargementPlis['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentTelechargementPlis['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::ID_AGENT_TELECHARGEMENT_PLIS, $idAgentTelechargementPlis['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ID_AGENT_TELECHARGEMENT_PLIS, $idAgentTelechargementPlis, $comparison);
    }

    /**
     * Filter the query on the path_telechargement_plis column
     *
     * Example usage:
     * <code>
     * $query->filterByPathTelechargementPlis('fooValue');   // WHERE path_telechargement_plis = 'fooValue'
     * $query->filterByPathTelechargementPlis('%fooValue%'); // WHERE path_telechargement_plis LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pathTelechargementPlis The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByPathTelechargementPlis($pathTelechargementPlis = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pathTelechargementPlis)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pathTelechargementPlis)) {
                $pathTelechargementPlis = str_replace('*', '%', $pathTelechargementPlis);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::PATH_TELECHARGEMENT_PLIS, $pathTelechargementPlis, $comparison);
    }

    /**
     * Filter the query on the date_telechargement_plis column
     *
     * Example usage:
     * <code>
     * $query->filterByDateTelechargementPlis('fooValue');   // WHERE date_telechargement_plis = 'fooValue'
     * $query->filterByDateTelechargementPlis('%fooValue%'); // WHERE date_telechargement_plis LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateTelechargementPlis The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByDateTelechargementPlis($dateTelechargementPlis = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateTelechargementPlis)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateTelechargementPlis)) {
                $dateTelechargementPlis = str_replace('*', '%', $dateTelechargementPlis);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::DATE_TELECHARGEMENT_PLIS, $dateTelechargementPlis, $comparison);
    }

    /**
     * Filter the query on the service_validation_intermediaire column
     *
     * Example usage:
     * <code>
     * $query->filterByServiceValidationIntermediaire(1234); // WHERE service_validation_intermediaire = 1234
     * $query->filterByServiceValidationIntermediaire(array(12, 34)); // WHERE service_validation_intermediaire IN (12, 34)
     * $query->filterByServiceValidationIntermediaire(array('min' => 12)); // WHERE service_validation_intermediaire >= 12
     * $query->filterByServiceValidationIntermediaire(array('max' => 12)); // WHERE service_validation_intermediaire <= 12
     * </code>
     *
     * @param     mixed $serviceValidationIntermediaire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByServiceValidationIntermediaire($serviceValidationIntermediaire = null, $comparison = null)
    {
        if (is_array($serviceValidationIntermediaire)) {
            $useMinMax = false;
            if (isset($serviceValidationIntermediaire['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::SERVICE_VALIDATION_INTERMEDIAIRE, $serviceValidationIntermediaire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($serviceValidationIntermediaire['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::SERVICE_VALIDATION_INTERMEDIAIRE, $serviceValidationIntermediaire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::SERVICE_VALIDATION_INTERMEDIAIRE, $serviceValidationIntermediaire, $comparison);
    }

    /**
     * Filter the query on the env_offre_technique column
     *
     * Example usage:
     * <code>
     * $query->filterByEnvOffreTechnique(1234); // WHERE env_offre_technique = 1234
     * $query->filterByEnvOffreTechnique(array(12, 34)); // WHERE env_offre_technique IN (12, 34)
     * $query->filterByEnvOffreTechnique(array('min' => 12)); // WHERE env_offre_technique >= 12
     * $query->filterByEnvOffreTechnique(array('max' => 12)); // WHERE env_offre_technique <= 12
     * </code>
     *
     * @param     mixed $envOffreTechnique The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByEnvOffreTechnique($envOffreTechnique = null, $comparison = null)
    {
        if (is_array($envOffreTechnique)) {
            $useMinMax = false;
            if (isset($envOffreTechnique['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::ENV_OFFRE_TECHNIQUE, $envOffreTechnique['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($envOffreTechnique['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::ENV_OFFRE_TECHNIQUE, $envOffreTechnique['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ENV_OFFRE_TECHNIQUE, $envOffreTechnique, $comparison);
    }

    /**
     * Filter the query on the ref_org_partenaire column
     *
     * Example usage:
     * <code>
     * $query->filterByRefOrgPartenaire('fooValue');   // WHERE ref_org_partenaire = 'fooValue'
     * $query->filterByRefOrgPartenaire('%fooValue%'); // WHERE ref_org_partenaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $refOrgPartenaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByRefOrgPartenaire($refOrgPartenaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($refOrgPartenaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $refOrgPartenaire)) {
                $refOrgPartenaire = str_replace('*', '%', $refOrgPartenaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::REF_ORG_PARTENAIRE, $refOrgPartenaire, $comparison);
    }

    /**
     * Filter the query on the date_archivage column
     *
     * Example usage:
     * <code>
     * $query->filterByDateArchivage('fooValue');   // WHERE date_archivage = 'fooValue'
     * $query->filterByDateArchivage('%fooValue%'); // WHERE date_archivage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateArchivage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByDateArchivage($dateArchivage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateArchivage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateArchivage)) {
                $dateArchivage = str_replace('*', '%', $dateArchivage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::DATE_ARCHIVAGE, $dateArchivage, $comparison);
    }

    /**
     * Filter the query on the date_decision_annulation column
     *
     * Example usage:
     * <code>
     * $query->filterByDateDecisionAnnulation('fooValue');   // WHERE date_decision_annulation = 'fooValue'
     * $query->filterByDateDecisionAnnulation('%fooValue%'); // WHERE date_decision_annulation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateDecisionAnnulation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByDateDecisionAnnulation($dateDecisionAnnulation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateDecisionAnnulation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateDecisionAnnulation)) {
                $dateDecisionAnnulation = str_replace('*', '%', $dateDecisionAnnulation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::DATE_DECISION_ANNULATION, $dateDecisionAnnulation, $comparison);
    }

    /**
     * Filter the query on the commentaire_annulation column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentaireAnnulation('fooValue');   // WHERE commentaire_annulation = 'fooValue'
     * $query->filterByCommentaireAnnulation('%fooValue%'); // WHERE commentaire_annulation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commentaireAnnulation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByCommentaireAnnulation($commentaireAnnulation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commentaireAnnulation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commentaireAnnulation)) {
                $commentaireAnnulation = str_replace('*', '%', $commentaireAnnulation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::COMMENTAIRE_ANNULATION, $commentaireAnnulation, $comparison);
    }

    /**
     * Filter the query on the date_mise_en_ligne_souhaitee column
     *
     * Example usage:
     * <code>
     * $query->filterByDateMiseEnLigneSouhaitee('fooValue');   // WHERE date_mise_en_ligne_souhaitee = 'fooValue'
     * $query->filterByDateMiseEnLigneSouhaitee('%fooValue%'); // WHERE date_mise_en_ligne_souhaitee LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateMiseEnLigneSouhaitee The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByDateMiseEnLigneSouhaitee($dateMiseEnLigneSouhaitee = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateMiseEnLigneSouhaitee)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateMiseEnLigneSouhaitee)) {
                $dateMiseEnLigneSouhaitee = str_replace('*', '%', $dateMiseEnLigneSouhaitee);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::DATE_MISE_EN_LIGNE_SOUHAITEE, $dateMiseEnLigneSouhaitee, $comparison);
    }

    /**
     * Filter the query on the etat_en_attente_validation column
     *
     * Example usage:
     * <code>
     * $query->filterByEtatEnAttenteValidation('fooValue');   // WHERE etat_en_attente_validation = 'fooValue'
     * $query->filterByEtatEnAttenteValidation('%fooValue%'); // WHERE etat_en_attente_validation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $etatEnAttenteValidation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByEtatEnAttenteValidation($etatEnAttenteValidation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($etatEnAttenteValidation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $etatEnAttenteValidation)) {
                $etatEnAttenteValidation = str_replace('*', '%', $etatEnAttenteValidation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ETAT_EN_ATTENTE_VALIDATION, $etatEnAttenteValidation, $comparison);
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
     * @return CommonConsultationQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonConsultationPeer::DOSSIER_ADDITIF, $dossierAdditif, $comparison);
    }

    /**
     * Filter the query on the type_marche column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeMarche(1234); // WHERE type_marche = 1234
     * $query->filterByTypeMarche(array(12, 34)); // WHERE type_marche IN (12, 34)
     * $query->filterByTypeMarche(array('min' => 12)); // WHERE type_marche >= 12
     * $query->filterByTypeMarche(array('max' => 12)); // WHERE type_marche <= 12
     * </code>
     *
     * @param     mixed $typeMarche The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByTypeMarche($typeMarche = null, $comparison = null)
    {
        if (is_array($typeMarche)) {
            $useMinMax = false;
            if (isset($typeMarche['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::TYPE_MARCHE, $typeMarche['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeMarche['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::TYPE_MARCHE, $typeMarche['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::TYPE_MARCHE, $typeMarche, $comparison);
    }

    /**
     * Filter the query on the type_prestation column
     *
     * Example usage:
     * <code>
     * $query->filterByTypePrestation(1234); // WHERE type_prestation = 1234
     * $query->filterByTypePrestation(array(12, 34)); // WHERE type_prestation IN (12, 34)
     * $query->filterByTypePrestation(array('min' => 12)); // WHERE type_prestation >= 12
     * $query->filterByTypePrestation(array('max' => 12)); // WHERE type_prestation <= 12
     * </code>
     *
     * @param     mixed $typePrestation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByTypePrestation($typePrestation = null, $comparison = null)
    {
        if (is_array($typePrestation)) {
            $useMinMax = false;
            if (isset($typePrestation['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::TYPE_PRESTATION, $typePrestation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typePrestation['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::TYPE_PRESTATION, $typePrestation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::TYPE_PRESTATION, $typePrestation, $comparison);
    }

    /**
     * Filter the query on the date_modification column
     *
     * Example usage:
     * <code>
     * $query->filterByDateModification('fooValue');   // WHERE date_modification = 'fooValue'
     * $query->filterByDateModification('%fooValue%'); // WHERE date_modification LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateModification The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByDateModification($dateModification = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateModification)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateModification)) {
                $dateModification = str_replace('*', '%', $dateModification);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::DATE_MODIFICATION, $dateModification, $comparison);
    }

    /**
     * Filter the query on the delai_partiel column
     *
     * Example usage:
     * <code>
     * $query->filterByDelaiPartiel('fooValue');   // WHERE delai_partiel = 'fooValue'
     * $query->filterByDelaiPartiel('%fooValue%'); // WHERE delai_partiel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $delaiPartiel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByDelaiPartiel($delaiPartiel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($delaiPartiel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $delaiPartiel)) {
                $delaiPartiel = str_replace('*', '%', $delaiPartiel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::DELAI_PARTIEL, $delaiPartiel, $comparison);
    }

    /**
     * Filter the query on the dateFinLocale column
     *
     * Example usage:
     * <code>
     * $query->filterByDatefinlocale('fooValue');   // WHERE dateFinLocale = 'fooValue'
     * $query->filterByDatefinlocale('%fooValue%'); // WHERE dateFinLocale LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datefinlocale The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByDatefinlocale($datefinlocale = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datefinlocale)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datefinlocale)) {
                $datefinlocale = str_replace('*', '%', $datefinlocale);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::DATEFINLOCALE, $datefinlocale, $comparison);
    }

    /**
     * Filter the query on the lieuResidence column
     *
     * Example usage:
     * <code>
     * $query->filterByLieuresidence('fooValue');   // WHERE lieuResidence = 'fooValue'
     * $query->filterByLieuresidence('%fooValue%'); // WHERE lieuResidence LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lieuresidence The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByLieuresidence($lieuresidence = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lieuresidence)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lieuresidence)) {
                $lieuresidence = str_replace('*', '%', $lieuresidence);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::LIEURESIDENCE, $lieuresidence, $comparison);
    }

    /**
     * Filter the query on the alerte column
     *
     * Example usage:
     * <code>
     * $query->filterByAlerte('fooValue');   // WHERE alerte = 'fooValue'
     * $query->filterByAlerte('%fooValue%'); // WHERE alerte LIKE '%fooValue%'
     * </code>
     *
     * @param     string $alerte The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByAlerte($alerte = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($alerte)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $alerte)) {
                $alerte = str_replace('*', '%', $alerte);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ALERTE, $alerte, $comparison);
    }

    /**
     * Filter the query on the doublon column
     *
     * Example usage:
     * <code>
     * $query->filterByDoublon('fooValue');   // WHERE doublon = 'fooValue'
     * $query->filterByDoublon('%fooValue%'); // WHERE doublon LIKE '%fooValue%'
     * </code>
     *
     * @param     string $doublon The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByDoublon($doublon = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($doublon)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $doublon)) {
                $doublon = str_replace('*', '%', $doublon);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::DOUBLON, $doublon, $comparison);
    }

    /**
     * Filter the query on the denomination_adapte column
     *
     * Example usage:
     * <code>
     * $query->filterByDenominationAdapte('fooValue');   // WHERE denomination_adapte = 'fooValue'
     * $query->filterByDenominationAdapte('%fooValue%'); // WHERE denomination_adapte LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denominationAdapte The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByDenominationAdapte($denominationAdapte = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denominationAdapte)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $denominationAdapte)) {
                $denominationAdapte = str_replace('*', '%', $denominationAdapte);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::DENOMINATION_ADAPTE, $denominationAdapte, $comparison);
    }

    /**
     * Filter the query on the url_consultation_avis_pub column
     *
     * Example usage:
     * <code>
     * $query->filterByUrlConsultationAvisPub('fooValue');   // WHERE url_consultation_avis_pub = 'fooValue'
     * $query->filterByUrlConsultationAvisPub('%fooValue%'); // WHERE url_consultation_avis_pub LIKE '%fooValue%'
     * </code>
     *
     * @param     string $urlConsultationAvisPub The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByUrlConsultationAvisPub($urlConsultationAvisPub = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($urlConsultationAvisPub)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $urlConsultationAvisPub)) {
                $urlConsultationAvisPub = str_replace('*', '%', $urlConsultationAvisPub);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::URL_CONSULTATION_AVIS_PUB, $urlConsultationAvisPub, $comparison);
    }

    /**
     * Filter the query on the doublon_de column
     *
     * Example usage:
     * <code>
     * $query->filterByDoublonDe('fooValue');   // WHERE doublon_de = 'fooValue'
     * $query->filterByDoublonDe('%fooValue%'); // WHERE doublon_de LIKE '%fooValue%'
     * </code>
     *
     * @param     string $doublonDe The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByDoublonDe($doublonDe = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($doublonDe)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $doublonDe)) {
                $doublonDe = str_replace('*', '%', $doublonDe);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::DOUBLON_DE, $doublonDe, $comparison);
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
     * @return CommonConsultationQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonConsultationPeer::ENTITE_ADJUDICATRICE, $entiteAdjudicatrice, $comparison);
    }

    /**
     * Filter the query on the code_operation column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeOperation('fooValue');   // WHERE code_operation = 'fooValue'
     * $query->filterByCodeOperation('%fooValue%'); // WHERE code_operation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codeOperation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByCodeOperation($codeOperation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeOperation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codeOperation)) {
                $codeOperation = str_replace('*', '%', $codeOperation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::CODE_OPERATION, $codeOperation, $comparison);
    }

    /**
     * Filter the query on the clause_sociale_condition_execution column
     *
     * Example usage:
     * <code>
     * $query->filterByClauseSocialeConditionExecution('fooValue');   // WHERE clause_sociale_condition_execution = 'fooValue'
     * $query->filterByClauseSocialeConditionExecution('%fooValue%'); // WHERE clause_sociale_condition_execution LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clauseSocialeConditionExecution The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByClauseSocialeConditionExecution($clauseSocialeConditionExecution = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clauseSocialeConditionExecution)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clauseSocialeConditionExecution)) {
                $clauseSocialeConditionExecution = str_replace('*', '%', $clauseSocialeConditionExecution);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::CLAUSE_SOCIALE_CONDITION_EXECUTION, $clauseSocialeConditionExecution, $comparison);
    }

    /**
     * Filter the query on the clause_sociale_insertion column
     *
     * Example usage:
     * <code>
     * $query->filterByClauseSocialeInsertion('fooValue');   // WHERE clause_sociale_insertion = 'fooValue'
     * $query->filterByClauseSocialeInsertion('%fooValue%'); // WHERE clause_sociale_insertion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clauseSocialeInsertion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByClauseSocialeInsertion($clauseSocialeInsertion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clauseSocialeInsertion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clauseSocialeInsertion)) {
                $clauseSocialeInsertion = str_replace('*', '%', $clauseSocialeInsertion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::CLAUSE_SOCIALE_INSERTION, $clauseSocialeInsertion, $comparison);
    }

    /**
     * Filter the query on the clause_sociale_ateliers_proteges column
     *
     * Example usage:
     * <code>
     * $query->filterByClauseSocialeAteliersProteges('fooValue');   // WHERE clause_sociale_ateliers_proteges = 'fooValue'
     * $query->filterByClauseSocialeAteliersProteges('%fooValue%'); // WHERE clause_sociale_ateliers_proteges LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clauseSocialeAteliersProteges The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByClauseSocialeAteliersProteges($clauseSocialeAteliersProteges = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clauseSocialeAteliersProteges)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clauseSocialeAteliersProteges)) {
                $clauseSocialeAteliersProteges = str_replace('*', '%', $clauseSocialeAteliersProteges);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::CLAUSE_SOCIALE_ATELIERS_PROTEGES, $clauseSocialeAteliersProteges, $comparison);
    }

    /**
     * Filter the query on the clause_env_specs_techniques column
     *
     * Example usage:
     * <code>
     * $query->filterByClauseEnvSpecsTechniques('fooValue');   // WHERE clause_env_specs_techniques = 'fooValue'
     * $query->filterByClauseEnvSpecsTechniques('%fooValue%'); // WHERE clause_env_specs_techniques LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clauseEnvSpecsTechniques The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByClauseEnvSpecsTechniques($clauseEnvSpecsTechniques = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clauseEnvSpecsTechniques)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clauseEnvSpecsTechniques)) {
                $clauseEnvSpecsTechniques = str_replace('*', '%', $clauseEnvSpecsTechniques);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::CLAUSE_ENV_SPECS_TECHNIQUES, $clauseEnvSpecsTechniques, $comparison);
    }

    /**
     * Filter the query on the clause_env_cond_execution column
     *
     * Example usage:
     * <code>
     * $query->filterByClauseEnvCondExecution('fooValue');   // WHERE clause_env_cond_execution = 'fooValue'
     * $query->filterByClauseEnvCondExecution('%fooValue%'); // WHERE clause_env_cond_execution LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clauseEnvCondExecution The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByClauseEnvCondExecution($clauseEnvCondExecution = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clauseEnvCondExecution)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clauseEnvCondExecution)) {
                $clauseEnvCondExecution = str_replace('*', '%', $clauseEnvCondExecution);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::CLAUSE_ENV_COND_EXECUTION, $clauseEnvCondExecution, $comparison);
    }

    /**
     * Filter the query on the clause_env_criteres_select column
     *
     * Example usage:
     * <code>
     * $query->filterByClauseEnvCriteresSelect('fooValue');   // WHERE clause_env_criteres_select = 'fooValue'
     * $query->filterByClauseEnvCriteresSelect('%fooValue%'); // WHERE clause_env_criteres_select LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clauseEnvCriteresSelect The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByClauseEnvCriteresSelect($clauseEnvCriteresSelect = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clauseEnvCriteresSelect)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clauseEnvCriteresSelect)) {
                $clauseEnvCriteresSelect = str_replace('*', '%', $clauseEnvCriteresSelect);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::CLAUSE_ENV_CRITERES_SELECT, $clauseEnvCriteresSelect, $comparison);
    }

    /**
     * Filter the query on the id_donnee_complementaire column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDonneeComplementaire(1234); // WHERE id_donnee_complementaire = 1234
     * $query->filterByIdDonneeComplementaire(array(12, 34)); // WHERE id_donnee_complementaire IN (12, 34)
     * $query->filterByIdDonneeComplementaire(array('min' => 12)); // WHERE id_donnee_complementaire >= 12
     * $query->filterByIdDonneeComplementaire(array('max' => 12)); // WHERE id_donnee_complementaire <= 12
     * </code>
     *
     * @param     mixed $idDonneeComplementaire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByIdDonneeComplementaire($idDonneeComplementaire = null, $comparison = null)
    {
        if (is_array($idDonneeComplementaire)) {
            $useMinMax = false;
            if (isset($idDonneeComplementaire['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::ID_DONNEE_COMPLEMENTAIRE, $idDonneeComplementaire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDonneeComplementaire['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::ID_DONNEE_COMPLEMENTAIRE, $idDonneeComplementaire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ID_DONNEE_COMPLEMENTAIRE, $idDonneeComplementaire, $comparison);
    }

    /**
     * Filter the query on the donnee_complementaire_obligatoire column
     *
     * Example usage:
     * <code>
     * $query->filterByDonneeComplementaireObligatoire('fooValue');   // WHERE donnee_complementaire_obligatoire = 'fooValue'
     * $query->filterByDonneeComplementaireObligatoire('%fooValue%'); // WHERE donnee_complementaire_obligatoire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $donneeComplementaireObligatoire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByDonneeComplementaireObligatoire($donneeComplementaireObligatoire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($donneeComplementaireObligatoire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $donneeComplementaireObligatoire)) {
                $donneeComplementaireObligatoire = str_replace('*', '%', $donneeComplementaireObligatoire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::DONNEE_COMPLEMENTAIRE_OBLIGATOIRE, $donneeComplementaireObligatoire, $comparison);
    }

    /**
     * Filter the query on the mode_ouverture_reponse column
     *
     * Example usage:
     * <code>
     * $query->filterByModeOuvertureReponse('fooValue');   // WHERE mode_ouverture_reponse = 'fooValue'
     * $query->filterByModeOuvertureReponse('%fooValue%'); // WHERE mode_ouverture_reponse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $modeOuvertureReponse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByModeOuvertureReponse($modeOuvertureReponse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modeOuvertureReponse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $modeOuvertureReponse)) {
                $modeOuvertureReponse = str_replace('*', '%', $modeOuvertureReponse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::MODE_OUVERTURE_REPONSE, $modeOuvertureReponse, $comparison);
    }

    /**
     * Filter the query on the id_fichier_annulation column
     *
     * Example usage:
     * <code>
     * $query->filterByIdFichierAnnulation(1234); // WHERE id_fichier_annulation = 1234
     * $query->filterByIdFichierAnnulation(array(12, 34)); // WHERE id_fichier_annulation IN (12, 34)
     * $query->filterByIdFichierAnnulation(array('min' => 12)); // WHERE id_fichier_annulation >= 12
     * $query->filterByIdFichierAnnulation(array('max' => 12)); // WHERE id_fichier_annulation <= 12
     * </code>
     *
     * @param     mixed $idFichierAnnulation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByIdFichierAnnulation($idFichierAnnulation = null, $comparison = null)
    {
        if (is_array($idFichierAnnulation)) {
            $useMinMax = false;
            if (isset($idFichierAnnulation['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::ID_FICHIER_ANNULATION, $idFichierAnnulation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idFichierAnnulation['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::ID_FICHIER_ANNULATION, $idFichierAnnulation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::ID_FICHIER_ANNULATION, $idFichierAnnulation, $comparison);
    }

    /**
     * Filter the query on the idOperation column
     *
     * Example usage:
     * <code>
     * $query->filterByIdoperation(1234); // WHERE idOperation = 1234
     * $query->filterByIdoperation(array(12, 34)); // WHERE idOperation IN (12, 34)
     * $query->filterByIdoperation(array('min' => 12)); // WHERE idOperation >= 12
     * $query->filterByIdoperation(array('max' => 12)); // WHERE idOperation <= 12
     * </code>
     *
     * @param     mixed $idoperation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByIdoperation($idoperation = null, $comparison = null)
    {
        if (is_array($idoperation)) {
            $useMinMax = false;
            if (isset($idoperation['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::IDOPERATION, $idoperation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idoperation['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::IDOPERATION, $idoperation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::IDOPERATION, $idoperation, $comparison);
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
     * @return CommonConsultationQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonConsultationPeer::MARCHE_PUBLIC_SIMPLIFIE, $marchePublicSimplifie, $comparison);
    }

    /**
     * Filter the query on the infos_blocs_atlas column
     *
     * Example usage:
     * <code>
     * $query->filterByInfosBlocsAtlas('fooValue');   // WHERE infos_blocs_atlas = 'fooValue'
     * $query->filterByInfosBlocsAtlas('%fooValue%'); // WHERE infos_blocs_atlas LIKE '%fooValue%'
     * </code>
     *
     * @param     string $infosBlocsAtlas The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByInfosBlocsAtlas($infosBlocsAtlas = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($infosBlocsAtlas)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $infosBlocsAtlas)) {
                $infosBlocsAtlas = str_replace('*', '%', $infosBlocsAtlas);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::INFOS_BLOCS_ATLAS, $infosBlocsAtlas, $comparison);
    }

    /**
     * Filter the query on the DATE_FIN_UNIX column
     *
     * Example usage:
     * <code>
     * $query->filterByDateFinUnix('fooValue');   // WHERE DATE_FIN_UNIX = 'fooValue'
     * $query->filterByDateFinUnix('%fooValue%'); // WHERE DATE_FIN_UNIX LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateFinUnix The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByDateFinUnix($dateFinUnix = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateFinUnix)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateFinUnix)) {
                $dateFinUnix = str_replace('*', '%', $dateFinUnix);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::DATE_FIN_UNIX, $dateFinUnix, $comparison);
    }

    /**
     * Filter the query on the date_achevement column
     *
     * Example usage:
     * <code>
     * $query->filterByDateAchevement('2011-03-14'); // WHERE date_achevement = '2011-03-14'
     * $query->filterByDateAchevement('now'); // WHERE date_achevement = '2011-03-14'
     * $query->filterByDateAchevement(array('max' => 'yesterday')); // WHERE date_achevement > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateAchevement The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByDateAchevement($dateAchevement = null, $comparison = null)
    {
        if (is_array($dateAchevement)) {
            $useMinMax = false;
            if (isset($dateAchevement['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::DATE_ACHEVEMENT, $dateAchevement['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateAchevement['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::DATE_ACHEVEMENT, $dateAchevement['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::DATE_ACHEVEMENT, $dateAchevement, $comparison);
    }

    /**
     * Filter the query on the nombre_de_lots column
     *
     * Example usage:
     * <code>
     * $query->filterByNombreDeLots(1234); // WHERE nombre_de_lots = 1234
     * $query->filterByNombreDeLots(array(12, 34)); // WHERE nombre_de_lots IN (12, 34)
     * $query->filterByNombreDeLots(array('min' => 12)); // WHERE nombre_de_lots >= 12
     * $query->filterByNombreDeLots(array('max' => 12)); // WHERE nombre_de_lots <= 12
     * </code>
     *
     * @param     mixed $nombreDeLots The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function filterByNombreDeLots($nombreDeLots = null, $comparison = null)
    {
        if (is_array($nombreDeLots)) {
            $useMinMax = false;
            if (isset($nombreDeLots['min'])) {
                $this->addUsingAlias(CommonConsultationPeer::NOMBRE_DE_LOTS, $nombreDeLots['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nombreDeLots['max'])) {
                $this->addUsingAlias(CommonConsultationPeer::NOMBRE_DE_LOTS, $nombreDeLots['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationPeer::NOMBRE_DE_LOTS, $nombreDeLots, $comparison);
    }

    /**
     * Filter the query by a related CommonAVIS object
     *
     * @param   CommonAVIS|PropelObjectCollection $commonAVIS  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonConsultationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonAVIS($commonAVIS, $comparison = null)
    {
        if ($commonAVIS instanceof CommonAVIS) {
            return $this
                ->addUsingAlias(CommonConsultationPeer::ORGANISME, $commonAVIS->getOrganisme(), $comparison)
                ->addUsingAlias(CommonConsultationPeer::REFERENCE, $commonAVIS->getConsultationRef(), $comparison);
        } else {
            throw new PropelException('filterByCommonAVIS() only accepts arguments of type CommonAVIS');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonAVIS relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function joinCommonAVIS($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonAVIS');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonAVIS');
        }

        return $this;
    }

    /**
     * Use the CommonAVIS relation CommonAVIS object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonAVISQuery A secondary query class using the current class as primary query
     */
    public function useCommonAVISQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonAVIS($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonAVIS', 'CommonAVISQuery');
    }

    /**
     * Filter the query by a related CommonAnnonce object
     *
     * @param   CommonAnnonce|PropelObjectCollection $commonAnnonce  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonConsultationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonAnnonce($commonAnnonce, $comparison = null)
    {
        if ($commonAnnonce instanceof CommonAnnonce) {
            return $this
                ->addUsingAlias(CommonConsultationPeer::ORGANISME, $commonAnnonce->getOrganisme(), $comparison)
                ->addUsingAlias(CommonConsultationPeer::REFERENCE, $commonAnnonce->getConsultationRef(), $comparison);
        } else {
            throw new PropelException('filterByCommonAnnonce() only accepts arguments of type CommonAnnonce');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonAnnonce relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function joinCommonAnnonce($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonAnnonce');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonAnnonce');
        }

        return $this;
    }

    /**
     * Use the CommonAnnonce relation CommonAnnonce object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonAnnonceQuery A secondary query class using the current class as primary query
     */
    public function useCommonAnnonceQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonAnnonce($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonAnnonce', 'CommonAnnonceQuery');
    }

    /**
     * Filter the query by a related CommonAnnonceBoamp object
     *
     * @param   CommonAnnonceBoamp|PropelObjectCollection $commonAnnonceBoamp  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonConsultationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonAnnonceBoampRelatedByOrganismeConsultationRef($commonAnnonceBoamp, $comparison = null)
    {
        if ($commonAnnonceBoamp instanceof CommonAnnonceBoamp) {
            return $this
                ->addUsingAlias(CommonConsultationPeer::ORGANISME, $commonAnnonceBoamp->getOrganisme(), $comparison)
                ->addUsingAlias(CommonConsultationPeer::REFERENCE, $commonAnnonceBoamp->getConsultationRef(), $comparison);
        } else {
            throw new PropelException('filterByCommonAnnonceBoampRelatedByOrganismeConsultationRef() only accepts arguments of type CommonAnnonceBoamp');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonAnnonceBoampRelatedByOrganismeConsultationRef relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function joinCommonAnnonceBoampRelatedByOrganismeConsultationRef($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonAnnonceBoampRelatedByOrganismeConsultationRef');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonAnnonceBoampRelatedByOrganismeConsultationRef');
        }

        return $this;
    }

    /**
     * Use the CommonAnnonceBoampRelatedByOrganismeConsultationRef relation CommonAnnonceBoamp object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonAnnonceBoampQuery A secondary query class using the current class as primary query
     */
    public function useCommonAnnonceBoampRelatedByOrganismeConsultationRefQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonAnnonceBoampRelatedByOrganismeConsultationRef($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonAnnonceBoampRelatedByOrganismeConsultationRef', 'CommonAnnonceBoampQuery');
    }

    /**
     * Filter the query by a related CommonAnnonceBoamp object
     *
     * @param   CommonAnnonceBoamp|PropelObjectCollection $commonAnnonceBoamp  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonConsultationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonAnnonceBoampRelatedByConsultationRef($commonAnnonceBoamp, $comparison = null)
    {
        if ($commonAnnonceBoamp instanceof CommonAnnonceBoamp) {
            return $this
                ->addUsingAlias(CommonConsultationPeer::REFERENCE, $commonAnnonceBoamp->getConsultationRef(), $comparison);
        } elseif ($commonAnnonceBoamp instanceof PropelObjectCollection) {
            return $this
                ->useCommonAnnonceBoampRelatedByConsultationRefQuery()
                ->filterByPrimaryKeys($commonAnnonceBoamp->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonAnnonceBoampRelatedByConsultationRef() only accepts arguments of type CommonAnnonceBoamp or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonAnnonceBoampRelatedByConsultationRef relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function joinCommonAnnonceBoampRelatedByConsultationRef($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonAnnonceBoampRelatedByConsultationRef');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonAnnonceBoampRelatedByConsultationRef');
        }

        return $this;
    }

    /**
     * Use the CommonAnnonceBoampRelatedByConsultationRef relation CommonAnnonceBoamp object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonAnnonceBoampQuery A secondary query class using the current class as primary query
     */
    public function useCommonAnnonceBoampRelatedByConsultationRefQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonAnnonceBoampRelatedByConsultationRef($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonAnnonceBoampRelatedByConsultationRef', 'CommonAnnonceBoampQuery');
    }

    /**
     * Filter the query by a related CommonAvisPub object
     *
     * @param   CommonAvisPub|PropelObjectCollection $commonAvisPub  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonConsultationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonAvisPub($commonAvisPub, $comparison = null)
    {
        if ($commonAvisPub instanceof CommonAvisPub) {
            return $this
                ->addUsingAlias(CommonConsultationPeer::ORGANISME, $commonAvisPub->getOrganisme(), $comparison)
                ->addUsingAlias(CommonConsultationPeer::REFERENCE, $commonAvisPub->getConsultationRef(), $comparison);
        } else {
            throw new PropelException('filterByCommonAvisPub() only accepts arguments of type CommonAvisPub');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonAvisPub relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function joinCommonAvisPub($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonAvisPub');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonAvisPub');
        }

        return $this;
    }

    /**
     * Use the CommonAvisPub relation CommonAvisPub object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonAvisPubQuery A secondary query class using the current class as primary query
     */
    public function useCommonAvisPubQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonAvisPub($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonAvisPub', 'CommonAvisPubQuery');
    }

    /**
     * Filter the query by a related CommonCategorieLot object
     *
     * @param   CommonCategorieLot|PropelObjectCollection $commonCategorieLot  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonConsultationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonCategorieLot($commonCategorieLot, $comparison = null)
    {
        if ($commonCategorieLot instanceof CommonCategorieLot) {
            return $this
                ->addUsingAlias(CommonConsultationPeer::ORGANISME, $commonCategorieLot->getOrganisme(), $comparison)
                ->addUsingAlias(CommonConsultationPeer::REFERENCE, $commonCategorieLot->getConsultationRef(), $comparison);
        } else {
            throw new PropelException('filterByCommonCategorieLot() only accepts arguments of type CommonCategorieLot');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonCategorieLot relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function joinCommonCategorieLot($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonCategorieLot');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonCategorieLot');
        }

        return $this;
    }

    /**
     * Use the CommonCategorieLot relation CommonCategorieLot object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonCategorieLotQuery A secondary query class using the current class as primary query
     */
    public function useCommonCategorieLotQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonCategorieLot($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonCategorieLot', 'CommonCategorieLotQuery');
    }

    /**
     * Filter the query by a related CommonComplement object
     *
     * @param   CommonComplement|PropelObjectCollection $commonComplement  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonConsultationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonComplement($commonComplement, $comparison = null)
    {
        if ($commonComplement instanceof CommonComplement) {
            return $this
                ->addUsingAlias(CommonConsultationPeer::ORGANISME, $commonComplement->getOrganisme(), $comparison)
                ->addUsingAlias(CommonConsultationPeer::REFERENCE, $commonComplement->getConsultationRef(), $comparison);
        } else {
            throw new PropelException('filterByCommonComplement() only accepts arguments of type CommonComplement');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonComplement relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function joinCommonComplement($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonComplement');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonComplement');
        }

        return $this;
    }

    /**
     * Use the CommonComplement relation CommonComplement object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonComplementQuery A secondary query class using the current class as primary query
     */
    public function useCommonComplementQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonComplement($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonComplement', 'CommonComplementQuery');
    }

    /**
     * Filter the query by a related CommonConsultationHistoriqueEtat object
     *
     * @param   CommonConsultationHistoriqueEtat|PropelObjectCollection $commonConsultationHistoriqueEtat  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonConsultationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonConsultationHistoriqueEtat($commonConsultationHistoriqueEtat, $comparison = null)
    {
        if ($commonConsultationHistoriqueEtat instanceof CommonConsultationHistoriqueEtat) {
            return $this
                ->addUsingAlias(CommonConsultationPeer::REFERENCE, $commonConsultationHistoriqueEtat->getConsultationRef(), $comparison);
        } elseif ($commonConsultationHistoriqueEtat instanceof PropelObjectCollection) {
            return $this
                ->useCommonConsultationHistoriqueEtatQuery()
                ->filterByPrimaryKeys($commonConsultationHistoriqueEtat->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonConsultationHistoriqueEtat() only accepts arguments of type CommonConsultationHistoriqueEtat or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonConsultationHistoriqueEtat relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function joinCommonConsultationHistoriqueEtat($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonConsultationHistoriqueEtat');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonConsultationHistoriqueEtat');
        }

        return $this;
    }

    /**
     * Use the CommonConsultationHistoriqueEtat relation CommonConsultationHistoriqueEtat object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonConsultationHistoriqueEtatQuery A secondary query class using the current class as primary query
     */
    public function useCommonConsultationHistoriqueEtatQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonConsultationHistoriqueEtat($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonConsultationHistoriqueEtat', 'CommonConsultationHistoriqueEtatQuery');
    }

    /**
     * Filter the query by a related CommonDATEFIN object
     *
     * @param   CommonDATEFIN|PropelObjectCollection $commonDATEFIN  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonConsultationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonDATEFIN($commonDATEFIN, $comparison = null)
    {
        if ($commonDATEFIN instanceof CommonDATEFIN) {
            return $this
                ->addUsingAlias(CommonConsultationPeer::ORGANISME, $commonDATEFIN->getOrganisme(), $comparison)
                ->addUsingAlias(CommonConsultationPeer::REFERENCE, $commonDATEFIN->getConsultationRef(), $comparison);
        } else {
            throw new PropelException('filterByCommonDATEFIN() only accepts arguments of type CommonDATEFIN');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonDATEFIN relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function joinCommonDATEFIN($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonDATEFIN');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonDATEFIN');
        }

        return $this;
    }

    /**
     * Use the CommonDATEFIN relation CommonDATEFIN object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonDATEFINQuery A secondary query class using the current class as primary query
     */
    public function useCommonDATEFINQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonDATEFIN($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonDATEFIN', 'CommonDATEFINQuery');
    }

    /**
     * Filter the query by a related CommonDAConsultation object
     *
     * @param   CommonDAConsultation|PropelObjectCollection $commonDAConsultation  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonConsultationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonDAConsultation($commonDAConsultation, $comparison = null)
    {
        if ($commonDAConsultation instanceof CommonDAConsultation) {
            return $this
                ->addUsingAlias(CommonConsultationPeer::REFERENCE, $commonDAConsultation->getConsultationRef(), $comparison);
        } elseif ($commonDAConsultation instanceof PropelObjectCollection) {
            return $this
                ->useCommonDAConsultationQuery()
                ->filterByPrimaryKeys($commonDAConsultation->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonDAConsultation() only accepts arguments of type CommonDAConsultation or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonDAConsultation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function joinCommonDAConsultation($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonDAConsultation');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonDAConsultation');
        }

        return $this;
    }

    /**
     * Use the CommonDAConsultation relation CommonDAConsultation object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonDAConsultationQuery A secondary query class using the current class as primary query
     */
    public function useCommonDAConsultationQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonDAConsultation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonDAConsultation', 'CommonDAConsultationQuery');
    }

    /**
     * Filter the query by a related CommonDCE object
     *
     * @param   CommonDCE|PropelObjectCollection $commonDCE  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonConsultationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonDCE($commonDCE, $comparison = null)
    {
        if ($commonDCE instanceof CommonDCE) {
            return $this
                ->addUsingAlias(CommonConsultationPeer::ORGANISME, $commonDCE->getOrganisme(), $comparison)
                ->addUsingAlias(CommonConsultationPeer::REFERENCE, $commonDCE->getConsultationRef(), $comparison);
        } else {
            throw new PropelException('filterByCommonDCE() only accepts arguments of type CommonDCE');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonDCE relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function joinCommonDCE($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonDCE');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonDCE');
        }

        return $this;
    }

    /**
     * Use the CommonDCE relation CommonDCE object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonDCEQuery A secondary query class using the current class as primary query
     */
    public function useCommonDCEQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonDCE($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonDCE', 'CommonDCEQuery');
    }

    /**
     * Filter the query by a related CommonDocumentExterne object
     *
     * @param   CommonDocumentExterne|PropelObjectCollection $commonDocumentExterne  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonConsultationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonDocumentExterne($commonDocumentExterne, $comparison = null)
    {
        if ($commonDocumentExterne instanceof CommonDocumentExterne) {
            return $this
                ->addUsingAlias(CommonConsultationPeer::ORGANISME, $commonDocumentExterne->getOrganisme(), $comparison)
                ->addUsingAlias(CommonConsultationPeer::REFERENCE, $commonDocumentExterne->getRefconsultation(), $comparison);
        } else {
            throw new PropelException('filterByCommonDocumentExterne() only accepts arguments of type CommonDocumentExterne');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonDocumentExterne relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function joinCommonDocumentExterne($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonDocumentExterne');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonDocumentExterne');
        }

        return $this;
    }

    /**
     * Use the CommonDocumentExterne relation CommonDocumentExterne object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonDocumentExterneQuery A secondary query class using the current class as primary query
     */
    public function useCommonDocumentExterneQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonDocumentExterne($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonDocumentExterne', 'CommonDocumentExterneQuery');
    }

    /**
     * Filter the query by a related CommonHeliosPiecePublicite object
     *
     * @param   CommonHeliosPiecePublicite|PropelObjectCollection $commonHeliosPiecePublicite  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonConsultationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonHeliosPiecePublicite($commonHeliosPiecePublicite, $comparison = null)
    {
        if ($commonHeliosPiecePublicite instanceof CommonHeliosPiecePublicite) {
            return $this
                ->addUsingAlias(CommonConsultationPeer::ORGANISME, $commonHeliosPiecePublicite->getOrganisme(), $comparison)
                ->addUsingAlias(CommonConsultationPeer::REFERENCE, $commonHeliosPiecePublicite->getConsultationRef(), $comparison);
        } else {
            throw new PropelException('filterByCommonHeliosPiecePublicite() only accepts arguments of type CommonHeliosPiecePublicite');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonHeliosPiecePublicite relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function joinCommonHeliosPiecePublicite($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonHeliosPiecePublicite');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonHeliosPiecePublicite');
        }

        return $this;
    }

    /**
     * Use the CommonHeliosPiecePublicite relation CommonHeliosPiecePublicite object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonHeliosPiecePubliciteQuery A secondary query class using the current class as primary query
     */
    public function useCommonHeliosPiecePubliciteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonHeliosPiecePublicite($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonHeliosPiecePublicite', 'CommonHeliosPiecePubliciteQuery');
    }

    /**
     * Filter the query by a related CommonHeliosPvConsultation object
     *
     * @param   CommonHeliosPvConsultation|PropelObjectCollection $commonHeliosPvConsultation  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonConsultationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonHeliosPvConsultation($commonHeliosPvConsultation, $comparison = null)
    {
        if ($commonHeliosPvConsultation instanceof CommonHeliosPvConsultation) {
            return $this
                ->addUsingAlias(CommonConsultationPeer::ORGANISME, $commonHeliosPvConsultation->getOrganisme(), $comparison)
                ->addUsingAlias(CommonConsultationPeer::REFERENCE, $commonHeliosPvConsultation->getConsultationRef(), $comparison);
        } else {
            throw new PropelException('filterByCommonHeliosPvConsultation() only accepts arguments of type CommonHeliosPvConsultation');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonHeliosPvConsultation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function joinCommonHeliosPvConsultation($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonHeliosPvConsultation');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonHeliosPvConsultation');
        }

        return $this;
    }

    /**
     * Use the CommonHeliosPvConsultation relation CommonHeliosPvConsultation object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonHeliosPvConsultationQuery A secondary query class using the current class as primary query
     */
    public function useCommonHeliosPvConsultationQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonHeliosPvConsultation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonHeliosPvConsultation', 'CommonHeliosPvConsultationQuery');
    }

    /**
     * Filter the query by a related CommonHeliosRapportPrefet object
     *
     * @param   CommonHeliosRapportPrefet|PropelObjectCollection $commonHeliosRapportPrefet  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonConsultationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonHeliosRapportPrefet($commonHeliosRapportPrefet, $comparison = null)
    {
        if ($commonHeliosRapportPrefet instanceof CommonHeliosRapportPrefet) {
            return $this
                ->addUsingAlias(CommonConsultationPeer::ORGANISME, $commonHeliosRapportPrefet->getOrganisme(), $comparison)
                ->addUsingAlias(CommonConsultationPeer::REFERENCE, $commonHeliosRapportPrefet->getConsultationRef(), $comparison);
        } else {
            throw new PropelException('filterByCommonHeliosRapportPrefet() only accepts arguments of type CommonHeliosRapportPrefet');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonHeliosRapportPrefet relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function joinCommonHeliosRapportPrefet($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonHeliosRapportPrefet');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonHeliosRapportPrefet');
        }

        return $this;
    }

    /**
     * Use the CommonHeliosRapportPrefet relation CommonHeliosRapportPrefet object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonHeliosRapportPrefetQuery A secondary query class using the current class as primary query
     */
    public function useCommonHeliosRapportPrefetQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonHeliosRapportPrefet($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonHeliosRapportPrefet', 'CommonHeliosRapportPrefetQuery');
    }

    /**
     * Filter the query by a related CommonHeliosTableauAr object
     *
     * @param   CommonHeliosTableauAr|PropelObjectCollection $commonHeliosTableauAr  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonConsultationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonHeliosTableauAr($commonHeliosTableauAr, $comparison = null)
    {
        if ($commonHeliosTableauAr instanceof CommonHeliosTableauAr) {
            return $this
                ->addUsingAlias(CommonConsultationPeer::ORGANISME, $commonHeliosTableauAr->getOrganisme(), $comparison)
                ->addUsingAlias(CommonConsultationPeer::REFERENCE, $commonHeliosTableauAr->getConsultationRef(), $comparison);
        } else {
            throw new PropelException('filterByCommonHeliosTableauAr() only accepts arguments of type CommonHeliosTableauAr');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonHeliosTableauAr relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function joinCommonHeliosTableauAr($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonHeliosTableauAr');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonHeliosTableauAr');
        }

        return $this;
    }

    /**
     * Use the CommonHeliosTableauAr relation CommonHeliosTableauAr object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonHeliosTableauArQuery A secondary query class using the current class as primary query
     */
    public function useCommonHeliosTableauArQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonHeliosTableauAr($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonHeliosTableauAr', 'CommonHeliosTableauArQuery');
    }

    /**
     * Filter the query by a related CommonHeliosTeletransmission object
     *
     * @param   CommonHeliosTeletransmission|PropelObjectCollection $commonHeliosTeletransmission  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonConsultationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonHeliosTeletransmission($commonHeliosTeletransmission, $comparison = null)
    {
        if ($commonHeliosTeletransmission instanceof CommonHeliosTeletransmission) {
            return $this
                ->addUsingAlias(CommonConsultationPeer::ORGANISME, $commonHeliosTeletransmission->getOrganisme(), $comparison)
                ->addUsingAlias(CommonConsultationPeer::REFERENCE, $commonHeliosTeletransmission->getConsultationRef(), $comparison);
        } else {
            throw new PropelException('filterByCommonHeliosTeletransmission() only accepts arguments of type CommonHeliosTeletransmission');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonHeliosTeletransmission relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function joinCommonHeliosTeletransmission($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonHeliosTeletransmission');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonHeliosTeletransmission');
        }

        return $this;
    }

    /**
     * Use the CommonHeliosTeletransmission relation CommonHeliosTeletransmission object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonHeliosTeletransmissionQuery A secondary query class using the current class as primary query
     */
    public function useCommonHeliosTeletransmissionQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonHeliosTeletransmission($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonHeliosTeletransmission', 'CommonHeliosTeletransmissionQuery');
    }

    /**
     * Filter the query by a related CommonInterneConsultation object
     *
     * @param   CommonInterneConsultation|PropelObjectCollection $commonInterneConsultation  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonConsultationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonInterneConsultation($commonInterneConsultation, $comparison = null)
    {
        if ($commonInterneConsultation instanceof CommonInterneConsultation) {
            return $this
                ->addUsingAlias(CommonConsultationPeer::ORGANISME, $commonInterneConsultation->getOrganisme(), $comparison)
                ->addUsingAlias(CommonConsultationPeer::REFERENCE, $commonInterneConsultation->getConsultationRef(), $comparison);
        } else {
            throw new PropelException('filterByCommonInterneConsultation() only accepts arguments of type CommonInterneConsultation');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonInterneConsultation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function joinCommonInterneConsultation($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonInterneConsultation');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonInterneConsultation');
        }

        return $this;
    }

    /**
     * Use the CommonInterneConsultation relation CommonInterneConsultation object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonInterneConsultationQuery A secondary query class using the current class as primary query
     */
    public function useCommonInterneConsultationQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonInterneConsultation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonInterneConsultation', 'CommonInterneConsultationQuery');
    }

    /**
     * Filter the query by a related CommonInterneConsultationSuiviSeul object
     *
     * @param   CommonInterneConsultationSuiviSeul|PropelObjectCollection $commonInterneConsultationSuiviSeul  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonConsultationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonInterneConsultationSuiviSeul($commonInterneConsultationSuiviSeul, $comparison = null)
    {
        if ($commonInterneConsultationSuiviSeul instanceof CommonInterneConsultationSuiviSeul) {
            return $this
                ->addUsingAlias(CommonConsultationPeer::ORGANISME, $commonInterneConsultationSuiviSeul->getOrganisme(), $comparison)
                ->addUsingAlias(CommonConsultationPeer::REFERENCE, $commonInterneConsultationSuiviSeul->getConsultationRef(), $comparison);
        } else {
            throw new PropelException('filterByCommonInterneConsultationSuiviSeul() only accepts arguments of type CommonInterneConsultationSuiviSeul');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonInterneConsultationSuiviSeul relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function joinCommonInterneConsultationSuiviSeul($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonInterneConsultationSuiviSeul');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonInterneConsultationSuiviSeul');
        }

        return $this;
    }

    /**
     * Use the CommonInterneConsultationSuiviSeul relation CommonInterneConsultationSuiviSeul object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonInterneConsultationSuiviSeulQuery A secondary query class using the current class as primary query
     */
    public function useCommonInterneConsultationSuiviSeulQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonInterneConsultationSuiviSeul($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonInterneConsultationSuiviSeul', 'CommonInterneConsultationSuiviSeulQuery');
    }

    /**
     * Filter the query by a related CommonOffrePapier object
     *
     * @param   CommonOffrePapier|PropelObjectCollection $commonOffrePapier  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonConsultationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonOffrePapier($commonOffrePapier, $comparison = null)
    {
        if ($commonOffrePapier instanceof CommonOffrePapier) {
            return $this
                ->addUsingAlias(CommonConsultationPeer::ORGANISME, $commonOffrePapier->getOrganisme(), $comparison)
                ->addUsingAlias(CommonConsultationPeer::REFERENCE, $commonOffrePapier->getConsultationRef(), $comparison);
        } else {
            throw new PropelException('filterByCommonOffrePapier() only accepts arguments of type CommonOffrePapier');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonOffrePapier relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function joinCommonOffrePapier($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonOffrePapier');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonOffrePapier');
        }

        return $this;
    }

    /**
     * Use the CommonOffrePapier relation CommonOffrePapier object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonOffrePapierQuery A secondary query class using the current class as primary query
     */
    public function useCommonOffrePapierQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonOffrePapier($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonOffrePapier', 'CommonOffrePapierQuery');
    }

    /**
     * Filter the query by a related CommonOffres object
     *
     * @param   CommonOffres|PropelObjectCollection $commonOffres  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonConsultationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonOffres($commonOffres, $comparison = null)
    {
        if ($commonOffres instanceof CommonOffres) {
            return $this
                ->addUsingAlias(CommonConsultationPeer::ORGANISME, $commonOffres->getOrganisme(), $comparison)
                ->addUsingAlias(CommonConsultationPeer::REFERENCE, $commonOffres->getConsultationRef(), $comparison);
        } else {
            throw new PropelException('filterByCommonOffres() only accepts arguments of type CommonOffres');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonOffres relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function joinCommonOffres($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonOffres');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonOffres');
        }

        return $this;
    }

    /**
     * Use the CommonOffres relation CommonOffres object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonOffresQuery A secondary query class using the current class as primary query
     */
    public function useCommonOffresQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonOffres($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonOffres', 'CommonOffresQuery');
    }

    /**
     * Filter the query by a related CommonPanierEntreprise object
     *
     * @param   CommonPanierEntreprise|PropelObjectCollection $commonPanierEntreprise  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonConsultationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonPanierEntreprise($commonPanierEntreprise, $comparison = null)
    {
        if ($commonPanierEntreprise instanceof CommonPanierEntreprise) {
            return $this
                ->addUsingAlias(CommonConsultationPeer::REFERENCE, $commonPanierEntreprise->getRefConsultation(), $comparison);
        } elseif ($commonPanierEntreprise instanceof PropelObjectCollection) {
            return $this
                ->useCommonPanierEntrepriseQuery()
                ->filterByPrimaryKeys($commonPanierEntreprise->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonPanierEntreprise() only accepts arguments of type CommonPanierEntreprise or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonPanierEntreprise relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function joinCommonPanierEntreprise($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonPanierEntreprise');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonPanierEntreprise');
        }

        return $this;
    }

    /**
     * Use the CommonPanierEntreprise relation CommonPanierEntreprise object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonPanierEntrepriseQuery A secondary query class using the current class as primary query
     */
    public function useCommonPanierEntrepriseQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonPanierEntreprise($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonPanierEntreprise', 'CommonPanierEntrepriseQuery');
    }

    /**
     * Filter the query by a related CommonPiecesDCE object
     *
     * @param   CommonPiecesDCE|PropelObjectCollection $commonPiecesDCE  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonConsultationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonPiecesDCERelatedByRefConsultation($commonPiecesDCE, $comparison = null)
    {
        if ($commonPiecesDCE instanceof CommonPiecesDCE) {
            return $this
                ->addUsingAlias(CommonConsultationPeer::REFERENCE, $commonPiecesDCE->getRefConsultation(), $comparison);
        } elseif ($commonPiecesDCE instanceof PropelObjectCollection) {
            return $this
                ->useCommonPiecesDCERelatedByRefConsultationQuery()
                ->filterByPrimaryKeys($commonPiecesDCE->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonPiecesDCERelatedByRefConsultation() only accepts arguments of type CommonPiecesDCE or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonPiecesDCERelatedByRefConsultation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function joinCommonPiecesDCERelatedByRefConsultation($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonPiecesDCERelatedByRefConsultation');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonPiecesDCERelatedByRefConsultation');
        }

        return $this;
    }

    /**
     * Use the CommonPiecesDCERelatedByRefConsultation relation CommonPiecesDCE object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonPiecesDCEQuery A secondary query class using the current class as primary query
     */
    public function useCommonPiecesDCERelatedByRefConsultationQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonPiecesDCERelatedByRefConsultation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonPiecesDCERelatedByRefConsultation', 'CommonPiecesDCEQuery');
    }

    /**
     * Filter the query by a related CommonPiecesDCE object
     *
     * @param   CommonPiecesDCE|PropelObjectCollection $commonPiecesDCE  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonConsultationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonPiecesDCERelatedByOrganismeConsultation($commonPiecesDCE, $comparison = null)
    {
        if ($commonPiecesDCE instanceof CommonPiecesDCE) {
            return $this
                ->addUsingAlias(CommonConsultationPeer::ORGANISME, $commonPiecesDCE->getOrganismeConsultation(), $comparison);
        } elseif ($commonPiecesDCE instanceof PropelObjectCollection) {
            return $this
                ->useCommonPiecesDCERelatedByOrganismeConsultationQuery()
                ->filterByPrimaryKeys($commonPiecesDCE->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonPiecesDCERelatedByOrganismeConsultation() only accepts arguments of type CommonPiecesDCE or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonPiecesDCERelatedByOrganismeConsultation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function joinCommonPiecesDCERelatedByOrganismeConsultation($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonPiecesDCERelatedByOrganismeConsultation');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonPiecesDCERelatedByOrganismeConsultation');
        }

        return $this;
    }

    /**
     * Use the CommonPiecesDCERelatedByOrganismeConsultation relation CommonPiecesDCE object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonPiecesDCEQuery A secondary query class using the current class as primary query
     */
    public function useCommonPiecesDCERelatedByOrganismeConsultationQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonPiecesDCERelatedByOrganismeConsultation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonPiecesDCERelatedByOrganismeConsultation', 'CommonPiecesDCEQuery');
    }

    /**
     * Filter the query by a related CommonRG object
     *
     * @param   CommonRG|PropelObjectCollection $commonRG  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonConsultationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonRG($commonRG, $comparison = null)
    {
        if ($commonRG instanceof CommonRG) {
            return $this
                ->addUsingAlias(CommonConsultationPeer::ORGANISME, $commonRG->getOrganisme(), $comparison)
                ->addUsingAlias(CommonConsultationPeer::REFERENCE, $commonRG->getConsultationRef(), $comparison);
        } else {
            throw new PropelException('filterByCommonRG() only accepts arguments of type CommonRG');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonRG relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function joinCommonRG($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonRG');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonRG');
        }

        return $this;
    }

    /**
     * Use the CommonRG relation CommonRG object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonRGQuery A secondary query class using the current class as primary query
     */
    public function useCommonRGQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonRG($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonRG', 'CommonRGQuery');
    }

    /**
     * Filter the query by a related CommonRetraitPapier object
     *
     * @param   CommonRetraitPapier|PropelObjectCollection $commonRetraitPapier  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonConsultationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonRetraitPapier($commonRetraitPapier, $comparison = null)
    {
        if ($commonRetraitPapier instanceof CommonRetraitPapier) {
            return $this
                ->addUsingAlias(CommonConsultationPeer::ORGANISME, $commonRetraitPapier->getOrganisme(), $comparison)
                ->addUsingAlias(CommonConsultationPeer::REFERENCE, $commonRetraitPapier->getConsultationRef(), $comparison);
        } else {
            throw new PropelException('filterByCommonRetraitPapier() only accepts arguments of type CommonRetraitPapier');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonRetraitPapier relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function joinCommonRetraitPapier($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonRetraitPapier');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonRetraitPapier');
        }

        return $this;
    }

    /**
     * Use the CommonRetraitPapier relation CommonRetraitPapier object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonRetraitPapierQuery A secondary query class using the current class as primary query
     */
    public function useCommonRetraitPapierQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonRetraitPapier($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonRetraitPapier', 'CommonRetraitPapierQuery');
    }

    /**
     * Filter the query by a related CommonSupportPublication object
     *
     * @param   CommonSupportPublication|PropelObjectCollection $commonSupportPublication  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonConsultationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonSupportPublication($commonSupportPublication, $comparison = null)
    {
        if ($commonSupportPublication instanceof CommonSupportPublication) {
            return $this
                ->addUsingAlias(CommonConsultationPeer::ORGANISME, $commonSupportPublication->getOrganisme(), $comparison)
                ->addUsingAlias(CommonConsultationPeer::REFERENCE, $commonSupportPublication->getConsultationRef(), $comparison);
        } else {
            throw new PropelException('filterByCommonSupportPublication() only accepts arguments of type CommonSupportPublication');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonSupportPublication relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function joinCommonSupportPublication($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonSupportPublication');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonSupportPublication');
        }

        return $this;
    }

    /**
     * Use the CommonSupportPublication relation CommonSupportPublication object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonSupportPublicationQuery A secondary query class using the current class as primary query
     */
    public function useCommonSupportPublicationQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonSupportPublication($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonSupportPublication', 'CommonSupportPublicationQuery');
    }

    /**
     * Filter the query by a related CommonTelechargement object
     *
     * @param   CommonTelechargement|PropelObjectCollection $commonTelechargement  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonConsultationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTelechargement($commonTelechargement, $comparison = null)
    {
        if ($commonTelechargement instanceof CommonTelechargement) {
            return $this
                ->addUsingAlias(CommonConsultationPeer::ORGANISME, $commonTelechargement->getOrganisme(), $comparison)
                ->addUsingAlias(CommonConsultationPeer::REFERENCE, $commonTelechargement->getConsultationRef(), $comparison);
        } else {
            throw new PropelException('filterByCommonTelechargement() only accepts arguments of type CommonTelechargement');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTelechargement relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function joinCommonTelechargement($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTelechargement');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonTelechargement');
        }

        return $this;
    }

    /**
     * Use the CommonTelechargement relation CommonTelechargement object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTelechargementQuery A secondary query class using the current class as primary query
     */
    public function useCommonTelechargementQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonTelechargement($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTelechargement', 'CommonTelechargementQuery');
    }

    /**
     * Filter the query by a related CommonTelechargementAnonyme object
     *
     * @param   CommonTelechargementAnonyme|PropelObjectCollection $commonTelechargementAnonyme  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonConsultationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTelechargementAnonymeRelatedByOrganismeConsultationRef($commonTelechargementAnonyme, $comparison = null)
    {
        if ($commonTelechargementAnonyme instanceof CommonTelechargementAnonyme) {
            return $this
                ->addUsingAlias(CommonConsultationPeer::ORGANISME, $commonTelechargementAnonyme->getOrganisme(), $comparison)
                ->addUsingAlias(CommonConsultationPeer::REFERENCE, $commonTelechargementAnonyme->getConsultationRef(), $comparison);
        } else {
            throw new PropelException('filterByCommonTelechargementAnonymeRelatedByOrganismeConsultationRef() only accepts arguments of type CommonTelechargementAnonyme');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTelechargementAnonymeRelatedByOrganismeConsultationRef relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function joinCommonTelechargementAnonymeRelatedByOrganismeConsultationRef($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTelechargementAnonymeRelatedByOrganismeConsultationRef');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonTelechargementAnonymeRelatedByOrganismeConsultationRef');
        }

        return $this;
    }

    /**
     * Use the CommonTelechargementAnonymeRelatedByOrganismeConsultationRef relation CommonTelechargementAnonyme object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTelechargementAnonymeQuery A secondary query class using the current class as primary query
     */
    public function useCommonTelechargementAnonymeRelatedByOrganismeConsultationRefQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonTelechargementAnonymeRelatedByOrganismeConsultationRef($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTelechargementAnonymeRelatedByOrganismeConsultationRef', 'CommonTelechargementAnonymeQuery');
    }

    /**
     * Filter the query by a related CommonTelechargementAnonyme object
     *
     * @param   CommonTelechargementAnonyme|PropelObjectCollection $commonTelechargementAnonyme  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonConsultationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTelechargementAnonymeRelatedByConsultationRef($commonTelechargementAnonyme, $comparison = null)
    {
        if ($commonTelechargementAnonyme instanceof CommonTelechargementAnonyme) {
            return $this
                ->addUsingAlias(CommonConsultationPeer::REFERENCE, $commonTelechargementAnonyme->getConsultationRef(), $comparison);
        } elseif ($commonTelechargementAnonyme instanceof PropelObjectCollection) {
            return $this
                ->useCommonTelechargementAnonymeRelatedByConsultationRefQuery()
                ->filterByPrimaryKeys($commonTelechargementAnonyme->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonTelechargementAnonymeRelatedByConsultationRef() only accepts arguments of type CommonTelechargementAnonyme or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTelechargementAnonymeRelatedByConsultationRef relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function joinCommonTelechargementAnonymeRelatedByConsultationRef($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTelechargementAnonymeRelatedByConsultationRef');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonTelechargementAnonymeRelatedByConsultationRef');
        }

        return $this;
    }

    /**
     * Use the CommonTelechargementAnonymeRelatedByConsultationRef relation CommonTelechargementAnonyme object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTelechargementAnonymeQuery A secondary query class using the current class as primary query
     */
    public function useCommonTelechargementAnonymeRelatedByConsultationRefQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonTelechargementAnonymeRelatedByConsultationRef($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTelechargementAnonymeRelatedByConsultationRef', 'CommonTelechargementAnonymeQuery');
    }

    /**
     * Filter the query by a related CommonConsultationDocumentCfe object
     *
     * @param   CommonConsultationDocumentCfe|PropelObjectCollection $commonConsultationDocumentCfe  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonConsultationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonConsultationDocumentCfe($commonConsultationDocumentCfe, $comparison = null)
    {
        if ($commonConsultationDocumentCfe instanceof CommonConsultationDocumentCfe) {
            return $this
                ->addUsingAlias(CommonConsultationPeer::REFERENCE, $commonConsultationDocumentCfe->getRefConsultation(), $comparison);
        } elseif ($commonConsultationDocumentCfe instanceof PropelObjectCollection) {
            return $this
                ->useCommonConsultationDocumentCfeQuery()
                ->filterByPrimaryKeys($commonConsultationDocumentCfe->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonConsultationDocumentCfe() only accepts arguments of type CommonConsultationDocumentCfe or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonConsultationDocumentCfe relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function joinCommonConsultationDocumentCfe($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonConsultationDocumentCfe');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonConsultationDocumentCfe');
        }

        return $this;
    }

    /**
     * Use the CommonConsultationDocumentCfe relation CommonConsultationDocumentCfe object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonConsultationDocumentCfeQuery A secondary query class using the current class as primary query
     */
    public function useCommonConsultationDocumentCfeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonConsultationDocumentCfe($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonConsultationDocumentCfe', 'CommonConsultationDocumentCfeQuery');
    }

    /**
     * Filter the query by a related CommonTCalendrier object
     *
     * @param   CommonTCalendrier|PropelObjectCollection $commonTCalendrier  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonConsultationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTCalendrier($commonTCalendrier, $comparison = null)
    {
        if ($commonTCalendrier instanceof CommonTCalendrier) {
            return $this
                ->addUsingAlias(CommonConsultationPeer::ORGANISME, $commonTCalendrier->getOrganisme(), $comparison)
                ->addUsingAlias(CommonConsultationPeer::REFERENCE, $commonTCalendrier->getReference(), $comparison);
        } else {
            throw new PropelException('filterByCommonTCalendrier() only accepts arguments of type CommonTCalendrier');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTCalendrier relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function joinCommonTCalendrier($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTCalendrier');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonTCalendrier');
        }

        return $this;
    }

    /**
     * Use the CommonTCalendrier relation CommonTCalendrier object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTCalendrierQuery A secondary query class using the current class as primary query
     */
    public function useCommonTCalendrierQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonTCalendrier($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTCalendrier', 'CommonTCalendrierQuery');
    }

    /**
     * Filter the query by a related CommonTParamDossierFormulaire object
     *
     * @param   CommonTParamDossierFormulaire|PropelObjectCollection $commonTParamDossierFormulaire  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonConsultationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTParamDossierFormulaire($commonTParamDossierFormulaire, $comparison = null)
    {
        if ($commonTParamDossierFormulaire instanceof CommonTParamDossierFormulaire) {
            return $this
                ->addUsingAlias(CommonConsultationPeer::ORGANISME, $commonTParamDossierFormulaire->getOrganisme(), $comparison)
                ->addUsingAlias(CommonConsultationPeer::REFERENCE, $commonTParamDossierFormulaire->getConsultationRef(), $comparison);
        } else {
            throw new PropelException('filterByCommonTParamDossierFormulaire() only accepts arguments of type CommonTParamDossierFormulaire');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTParamDossierFormulaire relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function joinCommonTParamDossierFormulaire($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTParamDossierFormulaire');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonTParamDossierFormulaire');
        }

        return $this;
    }

    /**
     * Use the CommonTParamDossierFormulaire relation CommonTParamDossierFormulaire object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTParamDossierFormulaireQuery A secondary query class using the current class as primary query
     */
    public function useCommonTParamDossierFormulaireQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonTParamDossierFormulaire($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTParamDossierFormulaire', 'CommonTParamDossierFormulaireQuery');
    }

    /**
     * Filter the query by a related CommonTReponseElecFormulaire object
     *
     * @param   CommonTReponseElecFormulaire|PropelObjectCollection $commonTReponseElecFormulaire  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonConsultationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTReponseElecFormulaire($commonTReponseElecFormulaire, $comparison = null)
    {
        if ($commonTReponseElecFormulaire instanceof CommonTReponseElecFormulaire) {
            return $this
                ->addUsingAlias(CommonConsultationPeer::ORGANISME, $commonTReponseElecFormulaire->getOrganisme(), $comparison)
                ->addUsingAlias(CommonConsultationPeer::REFERENCE, $commonTReponseElecFormulaire->getConsultationRef(), $comparison);
        } else {
            throw new PropelException('filterByCommonTReponseElecFormulaire() only accepts arguments of type CommonTReponseElecFormulaire');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTReponseElecFormulaire relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function joinCommonTReponseElecFormulaire($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTReponseElecFormulaire');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonTReponseElecFormulaire');
        }

        return $this;
    }

    /**
     * Use the CommonTReponseElecFormulaire relation CommonTReponseElecFormulaire object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTReponseElecFormulaireQuery A secondary query class using the current class as primary query
     */
    public function useCommonTReponseElecFormulaireQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonTReponseElecFormulaire($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTReponseElecFormulaire', 'CommonTReponseElecFormulaireQuery');
    }

    /**
     * Filter the query by a related CommonVisiteLieux object
     *
     * @param   CommonVisiteLieux|PropelObjectCollection $commonVisiteLieux  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonConsultationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonVisiteLieux($commonVisiteLieux, $comparison = null)
    {
        if ($commonVisiteLieux instanceof CommonVisiteLieux) {
            return $this
                ->addUsingAlias(CommonConsultationPeer::ORGANISME, $commonVisiteLieux->getOrganisme(), $comparison)
                ->addUsingAlias(CommonConsultationPeer::REFERENCE, $commonVisiteLieux->getReference(), $comparison);
        } else {
            throw new PropelException('filterByCommonVisiteLieux() only accepts arguments of type CommonVisiteLieux');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonVisiteLieux relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function joinCommonVisiteLieux($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonVisiteLieux');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonVisiteLieux');
        }

        return $this;
    }

    /**
     * Use the CommonVisiteLieux relation CommonVisiteLieux object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonVisiteLieuxQuery A secondary query class using the current class as primary query
     */
    public function useCommonVisiteLieuxQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonVisiteLieux($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonVisiteLieux', 'CommonVisiteLieuxQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonConsultation $commonConsultation Object to remove from the list of results
     *
     * @return CommonConsultationQuery The current query, for fluid interface
     */
    public function prune($commonConsultation = null)
    {
        if ($commonConsultation) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonConsultationPeer::REFERENCE), $commonConsultation->getReference(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonConsultationPeer::ORGANISME), $commonConsultation->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
