<?php


/**
 * Base class that represents a query for the 'ProcedureEquivalence' table.
 *
 * 
 *
 * @method CommonProcedureEquivalenceQuery orderByIdTypeProcedure($order = Criteria::ASC) Order by the id_type_procedure column
 * @method CommonProcedureEquivalenceQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonProcedureEquivalenceQuery orderByElecResp($order = Criteria::ASC) Order by the elec_resp column
 * @method CommonProcedureEquivalenceQuery orderByNoElecResp($order = Criteria::ASC) Order by the no_elec_resp column
 * @method CommonProcedureEquivalenceQuery orderByCipherEnabled($order = Criteria::ASC) Order by the cipher_enabled column
 * @method CommonProcedureEquivalenceQuery orderByCipherDisabled($order = Criteria::ASC) Order by the cipher_disabled column
 * @method CommonProcedureEquivalenceQuery orderBySignatureEnabled($order = Criteria::ASC) Order by the signature_enabled column
 * @method CommonProcedureEquivalenceQuery orderBySignatureDisabled($order = Criteria::ASC) Order by the signature_disabled column
 * @method CommonProcedureEquivalenceQuery orderByEnvCandidature($order = Criteria::ASC) Order by the env_candidature column
 * @method CommonProcedureEquivalenceQuery orderByEnvOffre($order = Criteria::ASC) Order by the env_offre column
 * @method CommonProcedureEquivalenceQuery orderByEnvAnonymat($order = Criteria::ASC) Order by the env_anonymat column
 * @method CommonProcedureEquivalenceQuery orderByEnvoiComplet($order = Criteria::ASC) Order by the envoi_complet column
 * @method CommonProcedureEquivalenceQuery orderByEnvoiDiffere($order = Criteria::ASC) Order by the envoi_differe column
 * @method CommonProcedureEquivalenceQuery orderByProcedurePublicite($order = Criteria::ASC) Order by the procedure_publicite column
 * @method CommonProcedureEquivalenceQuery orderByProcedureRestreinteCandidature($order = Criteria::ASC) Order by the procedure_restreinte_candidature column
 * @method CommonProcedureEquivalenceQuery orderByProcedureRestreinteOffre($order = Criteria::ASC) Order by the procedure_restreinte_offre column
 * @method CommonProcedureEquivalenceQuery orderByEnvoiMailParMpe($order = Criteria::ASC) Order by the envoi_mail_par_mpe column
 * @method CommonProcedureEquivalenceQuery orderByNoEnvoiMailParMpe($order = Criteria::ASC) Order by the no_envoi_mail_par_mpe column
 * @method CommonProcedureEquivalenceQuery orderByMiseEnLigne1($order = Criteria::ASC) Order by the mise_en_ligne1 column
 * @method CommonProcedureEquivalenceQuery orderByMiseEnLigne2($order = Criteria::ASC) Order by the mise_en_ligne2 column
 * @method CommonProcedureEquivalenceQuery orderByMiseEnLigne3($order = Criteria::ASC) Order by the mise_en_ligne3 column
 * @method CommonProcedureEquivalenceQuery orderByMiseEnLigne4($order = Criteria::ASC) Order by the mise_en_ligne4 column
 * @method CommonProcedureEquivalenceQuery orderByEnvOffreTypeUnique($order = Criteria::ASC) Order by the env_offre_type_unique column
 * @method CommonProcedureEquivalenceQuery orderByEnvOffreTypeMultiple($order = Criteria::ASC) Order by the env_offre_type_multiple column
 * @method CommonProcedureEquivalenceQuery orderByNoFichierAnnonce($order = Criteria::ASC) Order by the no_fichier_annonce column
 * @method CommonProcedureEquivalenceQuery orderByFichierImporte($order = Criteria::ASC) Order by the fichier_importe column
 * @method CommonProcedureEquivalenceQuery orderByFichierBoamp($order = Criteria::ASC) Order by the fichier_boamp column
 * @method CommonProcedureEquivalenceQuery orderByReglementCons($order = Criteria::ASC) Order by the reglement_cons column
 * @method CommonProcedureEquivalenceQuery orderByDossierDce($order = Criteria::ASC) Order by the dossier_dce column
 * @method CommonProcedureEquivalenceQuery orderByPartialDceDownload($order = Criteria::ASC) Order by the partial_dce_download column
 * @method CommonProcedureEquivalenceQuery orderByService($order = Criteria::ASC) Order by the service column
 * @method CommonProcedureEquivalenceQuery orderByConstitutionDossierReponse($order = Criteria::ASC) Order by the constitution_dossier_reponse column
 * @method CommonProcedureEquivalenceQuery orderByEnvOffreTypeUnique2($order = Criteria::ASC) Order by the env_offre_type_unique2 column
 * @method CommonProcedureEquivalenceQuery orderByEnvOffreTypeMultiple2($order = Criteria::ASC) Order by the env_offre_type_multiple2 column
 * @method CommonProcedureEquivalenceQuery orderByGestionEnvoisPostaux($order = Criteria::ASC) Order by the gestion_envois_postaux column
 * @method CommonProcedureEquivalenceQuery orderByTireurPlanNon($order = Criteria::ASC) Order by the tireur_plan_non column
 * @method CommonProcedureEquivalenceQuery orderByTireurPlanOui($order = Criteria::ASC) Order by the tireur_plan_oui column
 * @method CommonProcedureEquivalenceQuery orderByTireurPlanPapier($order = Criteria::ASC) Order by the tireur_plan_papier column
 * @method CommonProcedureEquivalenceQuery orderByTireurPlanCdrom($order = Criteria::ASC) Order by the tireur_plan_cdrom column
 * @method CommonProcedureEquivalenceQuery orderByTireurPlanNom($order = Criteria::ASC) Order by the tireur_plan_nom column
 * @method CommonProcedureEquivalenceQuery orderByTirageDescriptif($order = Criteria::ASC) Order by the tirage_descriptif column
 * @method CommonProcedureEquivalenceQuery orderByDelaiDateLimiteRemisePli($order = Criteria::ASC) Order by the delai_date_limite_remise_pli column
 * @method CommonProcedureEquivalenceQuery orderBySignaturePropre($order = Criteria::ASC) Order by the signature_propre column
 * @method CommonProcedureEquivalenceQuery orderByProcedureRestreinte($order = Criteria::ASC) Order by the procedure_restreinte column
 * @method CommonProcedureEquivalenceQuery orderByOuvertureSimultanee($order = Criteria::ASC) Order by the ouverture_simultanee column
 * @method CommonProcedureEquivalenceQuery orderByTypeDecisionARenseigner($order = Criteria::ASC) Order by the type_decision_a_renseigner column
 * @method CommonProcedureEquivalenceQuery orderByTypeDecisionAttributionMarche($order = Criteria::ASC) Order by the type_decision_attribution_marche column
 * @method CommonProcedureEquivalenceQuery orderByTypeDecisionDeclarationSansSuite($order = Criteria::ASC) Order by the type_decision_declaration_sans_suite column
 * @method CommonProcedureEquivalenceQuery orderByTypeDecisionDeclarationInfructueux($order = Criteria::ASC) Order by the type_decision_declaration_infructueux column
 * @method CommonProcedureEquivalenceQuery orderByTypeDecisionSelectionEntreprise($order = Criteria::ASC) Order by the type_decision_selection_entreprise column
 * @method CommonProcedureEquivalenceQuery orderByTypeDecisionAttributionAccordCadre($order = Criteria::ASC) Order by the type_decision_attribution_accord_cadre column
 * @method CommonProcedureEquivalenceQuery orderByTypeDecisionAdmissionSad($order = Criteria::ASC) Order by the type_decision_admission_sad column
 * @method CommonProcedureEquivalenceQuery orderByTypeDecisionAutre($order = Criteria::ASC) Order by the type_decision_autre column
 * @method CommonProcedureEquivalenceQuery orderByEnvOffreTechnique($order = Criteria::ASC) Order by the env_offre_technique column
 * @method CommonProcedureEquivalenceQuery orderByEnvOffreTechniqueTypeUnique($order = Criteria::ASC) Order by the env_offre_technique_type_unique column
 * @method CommonProcedureEquivalenceQuery orderByEnvOffreTechniqueTypeMultiple($order = Criteria::ASC) Order by the env_offre_technique_type_multiple column
 * @method CommonProcedureEquivalenceQuery orderByRepObligatoire($order = Criteria::ASC) Order by the rep_obligatoire column
 * @method CommonProcedureEquivalenceQuery orderByNoRepObligatoire($order = Criteria::ASC) Order by the no_rep_obligatoire column
 * @method CommonProcedureEquivalenceQuery orderByAutrePieceCons($order = Criteria::ASC) Order by the autre_piece_cons column
 * @method CommonProcedureEquivalenceQuery orderByRespElecAutrePlateforme($order = Criteria::ASC) Order by the resp_elec_autre_plateforme column
 * @method CommonProcedureEquivalenceQuery orderByMiseEnLigneEntiteCoordinatrice($order = Criteria::ASC) Order by the mise_en_ligne_entite_coordinatrice column
 * @method CommonProcedureEquivalenceQuery orderByAutoriserPublicite($order = Criteria::ASC) Order by the autoriser_publicite column
 * @method CommonProcedureEquivalenceQuery orderByPoursuiteDateLimiteRemisePli($order = Criteria::ASC) Order by the poursuite_date_limite_remise_pli column
 * @method CommonProcedureEquivalenceQuery orderByDelaiPoursuiteAffichage($order = Criteria::ASC) Order by the delai_poursuite_affichage column
 * @method CommonProcedureEquivalenceQuery orderByModeOuvertureDossier($order = Criteria::ASC) Order by the mode_ouverture_dossier column
 * @method CommonProcedureEquivalenceQuery orderByModeOuvertureReponse($order = Criteria::ASC) Order by the mode_ouverture_reponse column
 * @method CommonProcedureEquivalenceQuery orderByMarchePublicSimplifie($order = Criteria::ASC) Order by the marche_public_simplifie column
 *
 * @method CommonProcedureEquivalenceQuery groupByIdTypeProcedure() Group by the id_type_procedure column
 * @method CommonProcedureEquivalenceQuery groupByOrganisme() Group by the organisme column
 * @method CommonProcedureEquivalenceQuery groupByElecResp() Group by the elec_resp column
 * @method CommonProcedureEquivalenceQuery groupByNoElecResp() Group by the no_elec_resp column
 * @method CommonProcedureEquivalenceQuery groupByCipherEnabled() Group by the cipher_enabled column
 * @method CommonProcedureEquivalenceQuery groupByCipherDisabled() Group by the cipher_disabled column
 * @method CommonProcedureEquivalenceQuery groupBySignatureEnabled() Group by the signature_enabled column
 * @method CommonProcedureEquivalenceQuery groupBySignatureDisabled() Group by the signature_disabled column
 * @method CommonProcedureEquivalenceQuery groupByEnvCandidature() Group by the env_candidature column
 * @method CommonProcedureEquivalenceQuery groupByEnvOffre() Group by the env_offre column
 * @method CommonProcedureEquivalenceQuery groupByEnvAnonymat() Group by the env_anonymat column
 * @method CommonProcedureEquivalenceQuery groupByEnvoiComplet() Group by the envoi_complet column
 * @method CommonProcedureEquivalenceQuery groupByEnvoiDiffere() Group by the envoi_differe column
 * @method CommonProcedureEquivalenceQuery groupByProcedurePublicite() Group by the procedure_publicite column
 * @method CommonProcedureEquivalenceQuery groupByProcedureRestreinteCandidature() Group by the procedure_restreinte_candidature column
 * @method CommonProcedureEquivalenceQuery groupByProcedureRestreinteOffre() Group by the procedure_restreinte_offre column
 * @method CommonProcedureEquivalenceQuery groupByEnvoiMailParMpe() Group by the envoi_mail_par_mpe column
 * @method CommonProcedureEquivalenceQuery groupByNoEnvoiMailParMpe() Group by the no_envoi_mail_par_mpe column
 * @method CommonProcedureEquivalenceQuery groupByMiseEnLigne1() Group by the mise_en_ligne1 column
 * @method CommonProcedureEquivalenceQuery groupByMiseEnLigne2() Group by the mise_en_ligne2 column
 * @method CommonProcedureEquivalenceQuery groupByMiseEnLigne3() Group by the mise_en_ligne3 column
 * @method CommonProcedureEquivalenceQuery groupByMiseEnLigne4() Group by the mise_en_ligne4 column
 * @method CommonProcedureEquivalenceQuery groupByEnvOffreTypeUnique() Group by the env_offre_type_unique column
 * @method CommonProcedureEquivalenceQuery groupByEnvOffreTypeMultiple() Group by the env_offre_type_multiple column
 * @method CommonProcedureEquivalenceQuery groupByNoFichierAnnonce() Group by the no_fichier_annonce column
 * @method CommonProcedureEquivalenceQuery groupByFichierImporte() Group by the fichier_importe column
 * @method CommonProcedureEquivalenceQuery groupByFichierBoamp() Group by the fichier_boamp column
 * @method CommonProcedureEquivalenceQuery groupByReglementCons() Group by the reglement_cons column
 * @method CommonProcedureEquivalenceQuery groupByDossierDce() Group by the dossier_dce column
 * @method CommonProcedureEquivalenceQuery groupByPartialDceDownload() Group by the partial_dce_download column
 * @method CommonProcedureEquivalenceQuery groupByService() Group by the service column
 * @method CommonProcedureEquivalenceQuery groupByConstitutionDossierReponse() Group by the constitution_dossier_reponse column
 * @method CommonProcedureEquivalenceQuery groupByEnvOffreTypeUnique2() Group by the env_offre_type_unique2 column
 * @method CommonProcedureEquivalenceQuery groupByEnvOffreTypeMultiple2() Group by the env_offre_type_multiple2 column
 * @method CommonProcedureEquivalenceQuery groupByGestionEnvoisPostaux() Group by the gestion_envois_postaux column
 * @method CommonProcedureEquivalenceQuery groupByTireurPlanNon() Group by the tireur_plan_non column
 * @method CommonProcedureEquivalenceQuery groupByTireurPlanOui() Group by the tireur_plan_oui column
 * @method CommonProcedureEquivalenceQuery groupByTireurPlanPapier() Group by the tireur_plan_papier column
 * @method CommonProcedureEquivalenceQuery groupByTireurPlanCdrom() Group by the tireur_plan_cdrom column
 * @method CommonProcedureEquivalenceQuery groupByTireurPlanNom() Group by the tireur_plan_nom column
 * @method CommonProcedureEquivalenceQuery groupByTirageDescriptif() Group by the tirage_descriptif column
 * @method CommonProcedureEquivalenceQuery groupByDelaiDateLimiteRemisePli() Group by the delai_date_limite_remise_pli column
 * @method CommonProcedureEquivalenceQuery groupBySignaturePropre() Group by the signature_propre column
 * @method CommonProcedureEquivalenceQuery groupByProcedureRestreinte() Group by the procedure_restreinte column
 * @method CommonProcedureEquivalenceQuery groupByOuvertureSimultanee() Group by the ouverture_simultanee column
 * @method CommonProcedureEquivalenceQuery groupByTypeDecisionARenseigner() Group by the type_decision_a_renseigner column
 * @method CommonProcedureEquivalenceQuery groupByTypeDecisionAttributionMarche() Group by the type_decision_attribution_marche column
 * @method CommonProcedureEquivalenceQuery groupByTypeDecisionDeclarationSansSuite() Group by the type_decision_declaration_sans_suite column
 * @method CommonProcedureEquivalenceQuery groupByTypeDecisionDeclarationInfructueux() Group by the type_decision_declaration_infructueux column
 * @method CommonProcedureEquivalenceQuery groupByTypeDecisionSelectionEntreprise() Group by the type_decision_selection_entreprise column
 * @method CommonProcedureEquivalenceQuery groupByTypeDecisionAttributionAccordCadre() Group by the type_decision_attribution_accord_cadre column
 * @method CommonProcedureEquivalenceQuery groupByTypeDecisionAdmissionSad() Group by the type_decision_admission_sad column
 * @method CommonProcedureEquivalenceQuery groupByTypeDecisionAutre() Group by the type_decision_autre column
 * @method CommonProcedureEquivalenceQuery groupByEnvOffreTechnique() Group by the env_offre_technique column
 * @method CommonProcedureEquivalenceQuery groupByEnvOffreTechniqueTypeUnique() Group by the env_offre_technique_type_unique column
 * @method CommonProcedureEquivalenceQuery groupByEnvOffreTechniqueTypeMultiple() Group by the env_offre_technique_type_multiple column
 * @method CommonProcedureEquivalenceQuery groupByRepObligatoire() Group by the rep_obligatoire column
 * @method CommonProcedureEquivalenceQuery groupByNoRepObligatoire() Group by the no_rep_obligatoire column
 * @method CommonProcedureEquivalenceQuery groupByAutrePieceCons() Group by the autre_piece_cons column
 * @method CommonProcedureEquivalenceQuery groupByRespElecAutrePlateforme() Group by the resp_elec_autre_plateforme column
 * @method CommonProcedureEquivalenceQuery groupByMiseEnLigneEntiteCoordinatrice() Group by the mise_en_ligne_entite_coordinatrice column
 * @method CommonProcedureEquivalenceQuery groupByAutoriserPublicite() Group by the autoriser_publicite column
 * @method CommonProcedureEquivalenceQuery groupByPoursuiteDateLimiteRemisePli() Group by the poursuite_date_limite_remise_pli column
 * @method CommonProcedureEquivalenceQuery groupByDelaiPoursuiteAffichage() Group by the delai_poursuite_affichage column
 * @method CommonProcedureEquivalenceQuery groupByModeOuvertureDossier() Group by the mode_ouverture_dossier column
 * @method CommonProcedureEquivalenceQuery groupByModeOuvertureReponse() Group by the mode_ouverture_reponse column
 * @method CommonProcedureEquivalenceQuery groupByMarchePublicSimplifie() Group by the marche_public_simplifie column
 *
 * @method CommonProcedureEquivalenceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonProcedureEquivalenceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonProcedureEquivalenceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonProcedureEquivalence findOne(PropelPDO $con = null) Return the first CommonProcedureEquivalence matching the query
 * @method CommonProcedureEquivalence findOneOrCreate(PropelPDO $con = null) Return the first CommonProcedureEquivalence matching the query, or a new CommonProcedureEquivalence object populated from the query conditions when no match is found
 *
 * @method CommonProcedureEquivalence findOneByIdTypeProcedure(int $id_type_procedure) Return the first CommonProcedureEquivalence filtered by the id_type_procedure column
 * @method CommonProcedureEquivalence findOneByOrganisme(string $organisme) Return the first CommonProcedureEquivalence filtered by the organisme column
 * @method CommonProcedureEquivalence findOneByElecResp(string $elec_resp) Return the first CommonProcedureEquivalence filtered by the elec_resp column
 * @method CommonProcedureEquivalence findOneByNoElecResp(string $no_elec_resp) Return the first CommonProcedureEquivalence filtered by the no_elec_resp column
 * @method CommonProcedureEquivalence findOneByCipherEnabled(string $cipher_enabled) Return the first CommonProcedureEquivalence filtered by the cipher_enabled column
 * @method CommonProcedureEquivalence findOneByCipherDisabled(string $cipher_disabled) Return the first CommonProcedureEquivalence filtered by the cipher_disabled column
 * @method CommonProcedureEquivalence findOneBySignatureEnabled(string $signature_enabled) Return the first CommonProcedureEquivalence filtered by the signature_enabled column
 * @method CommonProcedureEquivalence findOneBySignatureDisabled(string $signature_disabled) Return the first CommonProcedureEquivalence filtered by the signature_disabled column
 * @method CommonProcedureEquivalence findOneByEnvCandidature(string $env_candidature) Return the first CommonProcedureEquivalence filtered by the env_candidature column
 * @method CommonProcedureEquivalence findOneByEnvOffre(string $env_offre) Return the first CommonProcedureEquivalence filtered by the env_offre column
 * @method CommonProcedureEquivalence findOneByEnvAnonymat(string $env_anonymat) Return the first CommonProcedureEquivalence filtered by the env_anonymat column
 * @method CommonProcedureEquivalence findOneByEnvoiComplet(string $envoi_complet) Return the first CommonProcedureEquivalence filtered by the envoi_complet column
 * @method CommonProcedureEquivalence findOneByEnvoiDiffere(string $envoi_differe) Return the first CommonProcedureEquivalence filtered by the envoi_differe column
 * @method CommonProcedureEquivalence findOneByProcedurePublicite(string $procedure_publicite) Return the first CommonProcedureEquivalence filtered by the procedure_publicite column
 * @method CommonProcedureEquivalence findOneByProcedureRestreinteCandidature(string $procedure_restreinte_candidature) Return the first CommonProcedureEquivalence filtered by the procedure_restreinte_candidature column
 * @method CommonProcedureEquivalence findOneByProcedureRestreinteOffre(string $procedure_restreinte_offre) Return the first CommonProcedureEquivalence filtered by the procedure_restreinte_offre column
 * @method CommonProcedureEquivalence findOneByEnvoiMailParMpe(string $envoi_mail_par_mpe) Return the first CommonProcedureEquivalence filtered by the envoi_mail_par_mpe column
 * @method CommonProcedureEquivalence findOneByNoEnvoiMailParMpe(string $no_envoi_mail_par_mpe) Return the first CommonProcedureEquivalence filtered by the no_envoi_mail_par_mpe column
 * @method CommonProcedureEquivalence findOneByMiseEnLigne1(string $mise_en_ligne1) Return the first CommonProcedureEquivalence filtered by the mise_en_ligne1 column
 * @method CommonProcedureEquivalence findOneByMiseEnLigne2(string $mise_en_ligne2) Return the first CommonProcedureEquivalence filtered by the mise_en_ligne2 column
 * @method CommonProcedureEquivalence findOneByMiseEnLigne3(string $mise_en_ligne3) Return the first CommonProcedureEquivalence filtered by the mise_en_ligne3 column
 * @method CommonProcedureEquivalence findOneByMiseEnLigne4(string $mise_en_ligne4) Return the first CommonProcedureEquivalence filtered by the mise_en_ligne4 column
 * @method CommonProcedureEquivalence findOneByEnvOffreTypeUnique(string $env_offre_type_unique) Return the first CommonProcedureEquivalence filtered by the env_offre_type_unique column
 * @method CommonProcedureEquivalence findOneByEnvOffreTypeMultiple(string $env_offre_type_multiple) Return the first CommonProcedureEquivalence filtered by the env_offre_type_multiple column
 * @method CommonProcedureEquivalence findOneByNoFichierAnnonce(string $no_fichier_annonce) Return the first CommonProcedureEquivalence filtered by the no_fichier_annonce column
 * @method CommonProcedureEquivalence findOneByFichierImporte(string $fichier_importe) Return the first CommonProcedureEquivalence filtered by the fichier_importe column
 * @method CommonProcedureEquivalence findOneByFichierBoamp(string $fichier_boamp) Return the first CommonProcedureEquivalence filtered by the fichier_boamp column
 * @method CommonProcedureEquivalence findOneByReglementCons(string $reglement_cons) Return the first CommonProcedureEquivalence filtered by the reglement_cons column
 * @method CommonProcedureEquivalence findOneByDossierDce(string $dossier_dce) Return the first CommonProcedureEquivalence filtered by the dossier_dce column
 * @method CommonProcedureEquivalence findOneByPartialDceDownload(string $partial_dce_download) Return the first CommonProcedureEquivalence filtered by the partial_dce_download column
 * @method CommonProcedureEquivalence findOneByService(string $service) Return the first CommonProcedureEquivalence filtered by the service column
 * @method CommonProcedureEquivalence findOneByConstitutionDossierReponse(string $constitution_dossier_reponse) Return the first CommonProcedureEquivalence filtered by the constitution_dossier_reponse column
 * @method CommonProcedureEquivalence findOneByEnvOffreTypeUnique2(string $env_offre_type_unique2) Return the first CommonProcedureEquivalence filtered by the env_offre_type_unique2 column
 * @method CommonProcedureEquivalence findOneByEnvOffreTypeMultiple2(string $env_offre_type_multiple2) Return the first CommonProcedureEquivalence filtered by the env_offre_type_multiple2 column
 * @method CommonProcedureEquivalence findOneByGestionEnvoisPostaux(string $gestion_envois_postaux) Return the first CommonProcedureEquivalence filtered by the gestion_envois_postaux column
 * @method CommonProcedureEquivalence findOneByTireurPlanNon(string $tireur_plan_non) Return the first CommonProcedureEquivalence filtered by the tireur_plan_non column
 * @method CommonProcedureEquivalence findOneByTireurPlanOui(string $tireur_plan_oui) Return the first CommonProcedureEquivalence filtered by the tireur_plan_oui column
 * @method CommonProcedureEquivalence findOneByTireurPlanPapier(string $tireur_plan_papier) Return the first CommonProcedureEquivalence filtered by the tireur_plan_papier column
 * @method CommonProcedureEquivalence findOneByTireurPlanCdrom(string $tireur_plan_cdrom) Return the first CommonProcedureEquivalence filtered by the tireur_plan_cdrom column
 * @method CommonProcedureEquivalence findOneByTireurPlanNom(string $tireur_plan_nom) Return the first CommonProcedureEquivalence filtered by the tireur_plan_nom column
 * @method CommonProcedureEquivalence findOneByTirageDescriptif(string $tirage_descriptif) Return the first CommonProcedureEquivalence filtered by the tirage_descriptif column
 * @method CommonProcedureEquivalence findOneByDelaiDateLimiteRemisePli(string $delai_date_limite_remise_pli) Return the first CommonProcedureEquivalence filtered by the delai_date_limite_remise_pli column
 * @method CommonProcedureEquivalence findOneBySignaturePropre(string $signature_propre) Return the first CommonProcedureEquivalence filtered by the signature_propre column
 * @method CommonProcedureEquivalence findOneByProcedureRestreinte(string $procedure_restreinte) Return the first CommonProcedureEquivalence filtered by the procedure_restreinte column
 * @method CommonProcedureEquivalence findOneByOuvertureSimultanee(string $ouverture_simultanee) Return the first CommonProcedureEquivalence filtered by the ouverture_simultanee column
 * @method CommonProcedureEquivalence findOneByTypeDecisionARenseigner(string $type_decision_a_renseigner) Return the first CommonProcedureEquivalence filtered by the type_decision_a_renseigner column
 * @method CommonProcedureEquivalence findOneByTypeDecisionAttributionMarche(string $type_decision_attribution_marche) Return the first CommonProcedureEquivalence filtered by the type_decision_attribution_marche column
 * @method CommonProcedureEquivalence findOneByTypeDecisionDeclarationSansSuite(string $type_decision_declaration_sans_suite) Return the first CommonProcedureEquivalence filtered by the type_decision_declaration_sans_suite column
 * @method CommonProcedureEquivalence findOneByTypeDecisionDeclarationInfructueux(string $type_decision_declaration_infructueux) Return the first CommonProcedureEquivalence filtered by the type_decision_declaration_infructueux column
 * @method CommonProcedureEquivalence findOneByTypeDecisionSelectionEntreprise(string $type_decision_selection_entreprise) Return the first CommonProcedureEquivalence filtered by the type_decision_selection_entreprise column
 * @method CommonProcedureEquivalence findOneByTypeDecisionAttributionAccordCadre(string $type_decision_attribution_accord_cadre) Return the first CommonProcedureEquivalence filtered by the type_decision_attribution_accord_cadre column
 * @method CommonProcedureEquivalence findOneByTypeDecisionAdmissionSad(string $type_decision_admission_sad) Return the first CommonProcedureEquivalence filtered by the type_decision_admission_sad column
 * @method CommonProcedureEquivalence findOneByTypeDecisionAutre(string $type_decision_autre) Return the first CommonProcedureEquivalence filtered by the type_decision_autre column
 * @method CommonProcedureEquivalence findOneByEnvOffreTechnique(string $env_offre_technique) Return the first CommonProcedureEquivalence filtered by the env_offre_technique column
 * @method CommonProcedureEquivalence findOneByEnvOffreTechniqueTypeUnique(string $env_offre_technique_type_unique) Return the first CommonProcedureEquivalence filtered by the env_offre_technique_type_unique column
 * @method CommonProcedureEquivalence findOneByEnvOffreTechniqueTypeMultiple(string $env_offre_technique_type_multiple) Return the first CommonProcedureEquivalence filtered by the env_offre_technique_type_multiple column
 * @method CommonProcedureEquivalence findOneByRepObligatoire(string $rep_obligatoire) Return the first CommonProcedureEquivalence filtered by the rep_obligatoire column
 * @method CommonProcedureEquivalence findOneByNoRepObligatoire(string $no_rep_obligatoire) Return the first CommonProcedureEquivalence filtered by the no_rep_obligatoire column
 * @method CommonProcedureEquivalence findOneByAutrePieceCons(string $autre_piece_cons) Return the first CommonProcedureEquivalence filtered by the autre_piece_cons column
 * @method CommonProcedureEquivalence findOneByRespElecAutrePlateforme(string $resp_elec_autre_plateforme) Return the first CommonProcedureEquivalence filtered by the resp_elec_autre_plateforme column
 * @method CommonProcedureEquivalence findOneByMiseEnLigneEntiteCoordinatrice(string $mise_en_ligne_entite_coordinatrice) Return the first CommonProcedureEquivalence filtered by the mise_en_ligne_entite_coordinatrice column
 * @method CommonProcedureEquivalence findOneByAutoriserPublicite(string $autoriser_publicite) Return the first CommonProcedureEquivalence filtered by the autoriser_publicite column
 * @method CommonProcedureEquivalence findOneByPoursuiteDateLimiteRemisePli(string $poursuite_date_limite_remise_pli) Return the first CommonProcedureEquivalence filtered by the poursuite_date_limite_remise_pli column
 * @method CommonProcedureEquivalence findOneByDelaiPoursuiteAffichage(string $delai_poursuite_affichage) Return the first CommonProcedureEquivalence filtered by the delai_poursuite_affichage column
 * @method CommonProcedureEquivalence findOneByModeOuvertureDossier(string $mode_ouverture_dossier) Return the first CommonProcedureEquivalence filtered by the mode_ouverture_dossier column
 * @method CommonProcedureEquivalence findOneByModeOuvertureReponse(string $mode_ouverture_reponse) Return the first CommonProcedureEquivalence filtered by the mode_ouverture_reponse column
 * @method CommonProcedureEquivalence findOneByMarchePublicSimplifie(string $marche_public_simplifie) Return the first CommonProcedureEquivalence filtered by the marche_public_simplifie column
 *
 * @method array findByIdTypeProcedure(int $id_type_procedure) Return CommonProcedureEquivalence objects filtered by the id_type_procedure column
 * @method array findByOrganisme(string $organisme) Return CommonProcedureEquivalence objects filtered by the organisme column
 * @method array findByElecResp(string $elec_resp) Return CommonProcedureEquivalence objects filtered by the elec_resp column
 * @method array findByNoElecResp(string $no_elec_resp) Return CommonProcedureEquivalence objects filtered by the no_elec_resp column
 * @method array findByCipherEnabled(string $cipher_enabled) Return CommonProcedureEquivalence objects filtered by the cipher_enabled column
 * @method array findByCipherDisabled(string $cipher_disabled) Return CommonProcedureEquivalence objects filtered by the cipher_disabled column
 * @method array findBySignatureEnabled(string $signature_enabled) Return CommonProcedureEquivalence objects filtered by the signature_enabled column
 * @method array findBySignatureDisabled(string $signature_disabled) Return CommonProcedureEquivalence objects filtered by the signature_disabled column
 * @method array findByEnvCandidature(string $env_candidature) Return CommonProcedureEquivalence objects filtered by the env_candidature column
 * @method array findByEnvOffre(string $env_offre) Return CommonProcedureEquivalence objects filtered by the env_offre column
 * @method array findByEnvAnonymat(string $env_anonymat) Return CommonProcedureEquivalence objects filtered by the env_anonymat column
 * @method array findByEnvoiComplet(string $envoi_complet) Return CommonProcedureEquivalence objects filtered by the envoi_complet column
 * @method array findByEnvoiDiffere(string $envoi_differe) Return CommonProcedureEquivalence objects filtered by the envoi_differe column
 * @method array findByProcedurePublicite(string $procedure_publicite) Return CommonProcedureEquivalence objects filtered by the procedure_publicite column
 * @method array findByProcedureRestreinteCandidature(string $procedure_restreinte_candidature) Return CommonProcedureEquivalence objects filtered by the procedure_restreinte_candidature column
 * @method array findByProcedureRestreinteOffre(string $procedure_restreinte_offre) Return CommonProcedureEquivalence objects filtered by the procedure_restreinte_offre column
 * @method array findByEnvoiMailParMpe(string $envoi_mail_par_mpe) Return CommonProcedureEquivalence objects filtered by the envoi_mail_par_mpe column
 * @method array findByNoEnvoiMailParMpe(string $no_envoi_mail_par_mpe) Return CommonProcedureEquivalence objects filtered by the no_envoi_mail_par_mpe column
 * @method array findByMiseEnLigne1(string $mise_en_ligne1) Return CommonProcedureEquivalence objects filtered by the mise_en_ligne1 column
 * @method array findByMiseEnLigne2(string $mise_en_ligne2) Return CommonProcedureEquivalence objects filtered by the mise_en_ligne2 column
 * @method array findByMiseEnLigne3(string $mise_en_ligne3) Return CommonProcedureEquivalence objects filtered by the mise_en_ligne3 column
 * @method array findByMiseEnLigne4(string $mise_en_ligne4) Return CommonProcedureEquivalence objects filtered by the mise_en_ligne4 column
 * @method array findByEnvOffreTypeUnique(string $env_offre_type_unique) Return CommonProcedureEquivalence objects filtered by the env_offre_type_unique column
 * @method array findByEnvOffreTypeMultiple(string $env_offre_type_multiple) Return CommonProcedureEquivalence objects filtered by the env_offre_type_multiple column
 * @method array findByNoFichierAnnonce(string $no_fichier_annonce) Return CommonProcedureEquivalence objects filtered by the no_fichier_annonce column
 * @method array findByFichierImporte(string $fichier_importe) Return CommonProcedureEquivalence objects filtered by the fichier_importe column
 * @method array findByFichierBoamp(string $fichier_boamp) Return CommonProcedureEquivalence objects filtered by the fichier_boamp column
 * @method array findByReglementCons(string $reglement_cons) Return CommonProcedureEquivalence objects filtered by the reglement_cons column
 * @method array findByDossierDce(string $dossier_dce) Return CommonProcedureEquivalence objects filtered by the dossier_dce column
 * @method array findByPartialDceDownload(string $partial_dce_download) Return CommonProcedureEquivalence objects filtered by the partial_dce_download column
 * @method array findByService(string $service) Return CommonProcedureEquivalence objects filtered by the service column
 * @method array findByConstitutionDossierReponse(string $constitution_dossier_reponse) Return CommonProcedureEquivalence objects filtered by the constitution_dossier_reponse column
 * @method array findByEnvOffreTypeUnique2(string $env_offre_type_unique2) Return CommonProcedureEquivalence objects filtered by the env_offre_type_unique2 column
 * @method array findByEnvOffreTypeMultiple2(string $env_offre_type_multiple2) Return CommonProcedureEquivalence objects filtered by the env_offre_type_multiple2 column
 * @method array findByGestionEnvoisPostaux(string $gestion_envois_postaux) Return CommonProcedureEquivalence objects filtered by the gestion_envois_postaux column
 * @method array findByTireurPlanNon(string $tireur_plan_non) Return CommonProcedureEquivalence objects filtered by the tireur_plan_non column
 * @method array findByTireurPlanOui(string $tireur_plan_oui) Return CommonProcedureEquivalence objects filtered by the tireur_plan_oui column
 * @method array findByTireurPlanPapier(string $tireur_plan_papier) Return CommonProcedureEquivalence objects filtered by the tireur_plan_papier column
 * @method array findByTireurPlanCdrom(string $tireur_plan_cdrom) Return CommonProcedureEquivalence objects filtered by the tireur_plan_cdrom column
 * @method array findByTireurPlanNom(string $tireur_plan_nom) Return CommonProcedureEquivalence objects filtered by the tireur_plan_nom column
 * @method array findByTirageDescriptif(string $tirage_descriptif) Return CommonProcedureEquivalence objects filtered by the tirage_descriptif column
 * @method array findByDelaiDateLimiteRemisePli(string $delai_date_limite_remise_pli) Return CommonProcedureEquivalence objects filtered by the delai_date_limite_remise_pli column
 * @method array findBySignaturePropre(string $signature_propre) Return CommonProcedureEquivalence objects filtered by the signature_propre column
 * @method array findByProcedureRestreinte(string $procedure_restreinte) Return CommonProcedureEquivalence objects filtered by the procedure_restreinte column
 * @method array findByOuvertureSimultanee(string $ouverture_simultanee) Return CommonProcedureEquivalence objects filtered by the ouverture_simultanee column
 * @method array findByTypeDecisionARenseigner(string $type_decision_a_renseigner) Return CommonProcedureEquivalence objects filtered by the type_decision_a_renseigner column
 * @method array findByTypeDecisionAttributionMarche(string $type_decision_attribution_marche) Return CommonProcedureEquivalence objects filtered by the type_decision_attribution_marche column
 * @method array findByTypeDecisionDeclarationSansSuite(string $type_decision_declaration_sans_suite) Return CommonProcedureEquivalence objects filtered by the type_decision_declaration_sans_suite column
 * @method array findByTypeDecisionDeclarationInfructueux(string $type_decision_declaration_infructueux) Return CommonProcedureEquivalence objects filtered by the type_decision_declaration_infructueux column
 * @method array findByTypeDecisionSelectionEntreprise(string $type_decision_selection_entreprise) Return CommonProcedureEquivalence objects filtered by the type_decision_selection_entreprise column
 * @method array findByTypeDecisionAttributionAccordCadre(string $type_decision_attribution_accord_cadre) Return CommonProcedureEquivalence objects filtered by the type_decision_attribution_accord_cadre column
 * @method array findByTypeDecisionAdmissionSad(string $type_decision_admission_sad) Return CommonProcedureEquivalence objects filtered by the type_decision_admission_sad column
 * @method array findByTypeDecisionAutre(string $type_decision_autre) Return CommonProcedureEquivalence objects filtered by the type_decision_autre column
 * @method array findByEnvOffreTechnique(string $env_offre_technique) Return CommonProcedureEquivalence objects filtered by the env_offre_technique column
 * @method array findByEnvOffreTechniqueTypeUnique(string $env_offre_technique_type_unique) Return CommonProcedureEquivalence objects filtered by the env_offre_technique_type_unique column
 * @method array findByEnvOffreTechniqueTypeMultiple(string $env_offre_technique_type_multiple) Return CommonProcedureEquivalence objects filtered by the env_offre_technique_type_multiple column
 * @method array findByRepObligatoire(string $rep_obligatoire) Return CommonProcedureEquivalence objects filtered by the rep_obligatoire column
 * @method array findByNoRepObligatoire(string $no_rep_obligatoire) Return CommonProcedureEquivalence objects filtered by the no_rep_obligatoire column
 * @method array findByAutrePieceCons(string $autre_piece_cons) Return CommonProcedureEquivalence objects filtered by the autre_piece_cons column
 * @method array findByRespElecAutrePlateforme(string $resp_elec_autre_plateforme) Return CommonProcedureEquivalence objects filtered by the resp_elec_autre_plateforme column
 * @method array findByMiseEnLigneEntiteCoordinatrice(string $mise_en_ligne_entite_coordinatrice) Return CommonProcedureEquivalence objects filtered by the mise_en_ligne_entite_coordinatrice column
 * @method array findByAutoriserPublicite(string $autoriser_publicite) Return CommonProcedureEquivalence objects filtered by the autoriser_publicite column
 * @method array findByPoursuiteDateLimiteRemisePli(string $poursuite_date_limite_remise_pli) Return CommonProcedureEquivalence objects filtered by the poursuite_date_limite_remise_pli column
 * @method array findByDelaiPoursuiteAffichage(string $delai_poursuite_affichage) Return CommonProcedureEquivalence objects filtered by the delai_poursuite_affichage column
 * @method array findByModeOuvertureDossier(string $mode_ouverture_dossier) Return CommonProcedureEquivalence objects filtered by the mode_ouverture_dossier column
 * @method array findByModeOuvertureReponse(string $mode_ouverture_reponse) Return CommonProcedureEquivalence objects filtered by the mode_ouverture_reponse column
 * @method array findByMarchePublicSimplifie(string $marche_public_simplifie) Return CommonProcedureEquivalence objects filtered by the marche_public_simplifie column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonProcedureEquivalenceQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonProcedureEquivalenceQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonProcedureEquivalence', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonProcedureEquivalenceQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonProcedureEquivalenceQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonProcedureEquivalenceQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonProcedureEquivalenceQuery) {
            return $criteria;
        }
        $query = new CommonProcedureEquivalenceQuery();
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
                         A Primary key composition: [$id_type_procedure, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonProcedureEquivalence|CommonProcedureEquivalence[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonProcedureEquivalencePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonProcedureEquivalencePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonProcedureEquivalence A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_type_procedure`, `organisme`, `elec_resp`, `no_elec_resp`, `cipher_enabled`, `cipher_disabled`, `signature_enabled`, `signature_disabled`, `env_candidature`, `env_offre`, `env_anonymat`, `envoi_complet`, `envoi_differe`, `procedure_publicite`, `procedure_restreinte_candidature`, `procedure_restreinte_offre`, `envoi_mail_par_mpe`, `no_envoi_mail_par_mpe`, `mise_en_ligne1`, `mise_en_ligne2`, `mise_en_ligne3`, `mise_en_ligne4`, `env_offre_type_unique`, `env_offre_type_multiple`, `no_fichier_annonce`, `fichier_importe`, `fichier_boamp`, `reglement_cons`, `dossier_dce`, `partial_dce_download`, `service`, `constitution_dossier_reponse`, `env_offre_type_unique2`, `env_offre_type_multiple2`, `gestion_envois_postaux`, `tireur_plan_non`, `tireur_plan_oui`, `tireur_plan_papier`, `tireur_plan_cdrom`, `tireur_plan_nom`, `tirage_descriptif`, `delai_date_limite_remise_pli`, `signature_propre`, `procedure_restreinte`, `ouverture_simultanee`, `type_decision_a_renseigner`, `type_decision_attribution_marche`, `type_decision_declaration_sans_suite`, `type_decision_declaration_infructueux`, `type_decision_selection_entreprise`, `type_decision_attribution_accord_cadre`, `type_decision_admission_sad`, `type_decision_autre`, `env_offre_technique`, `env_offre_technique_type_unique`, `env_offre_technique_type_multiple`, `rep_obligatoire`, `no_rep_obligatoire`, `autre_piece_cons`, `resp_elec_autre_plateforme`, `mise_en_ligne_entite_coordinatrice`, `autoriser_publicite`, `poursuite_date_limite_remise_pli`, `delai_poursuite_affichage`, `mode_ouverture_dossier`, `mode_ouverture_reponse`, `marche_public_simplifie` FROM `ProcedureEquivalence` WHERE `id_type_procedure` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonProcedureEquivalence();
            $obj->hydrate($row);
            CommonProcedureEquivalencePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonProcedureEquivalence|CommonProcedureEquivalence[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonProcedureEquivalence[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonProcedureEquivalencePeer::ID_TYPE_PROCEDURE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonProcedureEquivalencePeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonProcedureEquivalencePeer::ID_TYPE_PROCEDURE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonProcedureEquivalencePeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByIdTypeProcedure($idTypeProcedure = null, $comparison = null)
    {
        if (is_array($idTypeProcedure)) {
            $useMinMax = false;
            if (isset($idTypeProcedure['min'])) {
                $this->addUsingAlias(CommonProcedureEquivalencePeer::ID_TYPE_PROCEDURE, $idTypeProcedure['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeProcedure['max'])) {
                $this->addUsingAlias(CommonProcedureEquivalencePeer::ID_TYPE_PROCEDURE, $idTypeProcedure['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::ID_TYPE_PROCEDURE, $idTypeProcedure, $comparison);
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
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the elec_resp column
     *
     * Example usage:
     * <code>
     * $query->filterByElecResp('fooValue');   // WHERE elec_resp = 'fooValue'
     * $query->filterByElecResp('%fooValue%'); // WHERE elec_resp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $elecResp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByElecResp($elecResp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($elecResp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $elecResp)) {
                $elecResp = str_replace('*', '%', $elecResp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::ELEC_RESP, $elecResp, $comparison);
    }

    /**
     * Filter the query on the no_elec_resp column
     *
     * Example usage:
     * <code>
     * $query->filterByNoElecResp('fooValue');   // WHERE no_elec_resp = 'fooValue'
     * $query->filterByNoElecResp('%fooValue%'); // WHERE no_elec_resp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $noElecResp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByNoElecResp($noElecResp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($noElecResp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $noElecResp)) {
                $noElecResp = str_replace('*', '%', $noElecResp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::NO_ELEC_RESP, $noElecResp, $comparison);
    }

    /**
     * Filter the query on the cipher_enabled column
     *
     * Example usage:
     * <code>
     * $query->filterByCipherEnabled('fooValue');   // WHERE cipher_enabled = 'fooValue'
     * $query->filterByCipherEnabled('%fooValue%'); // WHERE cipher_enabled LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cipherEnabled The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByCipherEnabled($cipherEnabled = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cipherEnabled)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cipherEnabled)) {
                $cipherEnabled = str_replace('*', '%', $cipherEnabled);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::CIPHER_ENABLED, $cipherEnabled, $comparison);
    }

    /**
     * Filter the query on the cipher_disabled column
     *
     * Example usage:
     * <code>
     * $query->filterByCipherDisabled('fooValue');   // WHERE cipher_disabled = 'fooValue'
     * $query->filterByCipherDisabled('%fooValue%'); // WHERE cipher_disabled LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cipherDisabled The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByCipherDisabled($cipherDisabled = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cipherDisabled)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cipherDisabled)) {
                $cipherDisabled = str_replace('*', '%', $cipherDisabled);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::CIPHER_DISABLED, $cipherDisabled, $comparison);
    }

    /**
     * Filter the query on the signature_enabled column
     *
     * Example usage:
     * <code>
     * $query->filterBySignatureEnabled('fooValue');   // WHERE signature_enabled = 'fooValue'
     * $query->filterBySignatureEnabled('%fooValue%'); // WHERE signature_enabled LIKE '%fooValue%'
     * </code>
     *
     * @param     string $signatureEnabled The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterBySignatureEnabled($signatureEnabled = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($signatureEnabled)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $signatureEnabled)) {
                $signatureEnabled = str_replace('*', '%', $signatureEnabled);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::SIGNATURE_ENABLED, $signatureEnabled, $comparison);
    }

    /**
     * Filter the query on the signature_disabled column
     *
     * Example usage:
     * <code>
     * $query->filterBySignatureDisabled('fooValue');   // WHERE signature_disabled = 'fooValue'
     * $query->filterBySignatureDisabled('%fooValue%'); // WHERE signature_disabled LIKE '%fooValue%'
     * </code>
     *
     * @param     string $signatureDisabled The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterBySignatureDisabled($signatureDisabled = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($signatureDisabled)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $signatureDisabled)) {
                $signatureDisabled = str_replace('*', '%', $signatureDisabled);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::SIGNATURE_DISABLED, $signatureDisabled, $comparison);
    }

    /**
     * Filter the query on the env_candidature column
     *
     * Example usage:
     * <code>
     * $query->filterByEnvCandidature('fooValue');   // WHERE env_candidature = 'fooValue'
     * $query->filterByEnvCandidature('%fooValue%'); // WHERE env_candidature LIKE '%fooValue%'
     * </code>
     *
     * @param     string $envCandidature The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByEnvCandidature($envCandidature = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($envCandidature)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $envCandidature)) {
                $envCandidature = str_replace('*', '%', $envCandidature);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::ENV_CANDIDATURE, $envCandidature, $comparison);
    }

    /**
     * Filter the query on the env_offre column
     *
     * Example usage:
     * <code>
     * $query->filterByEnvOffre('fooValue');   // WHERE env_offre = 'fooValue'
     * $query->filterByEnvOffre('%fooValue%'); // WHERE env_offre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $envOffre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByEnvOffre($envOffre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($envOffre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $envOffre)) {
                $envOffre = str_replace('*', '%', $envOffre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::ENV_OFFRE, $envOffre, $comparison);
    }

    /**
     * Filter the query on the env_anonymat column
     *
     * Example usage:
     * <code>
     * $query->filterByEnvAnonymat('fooValue');   // WHERE env_anonymat = 'fooValue'
     * $query->filterByEnvAnonymat('%fooValue%'); // WHERE env_anonymat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $envAnonymat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByEnvAnonymat($envAnonymat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($envAnonymat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $envAnonymat)) {
                $envAnonymat = str_replace('*', '%', $envAnonymat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::ENV_ANONYMAT, $envAnonymat, $comparison);
    }

    /**
     * Filter the query on the envoi_complet column
     *
     * Example usage:
     * <code>
     * $query->filterByEnvoiComplet('fooValue');   // WHERE envoi_complet = 'fooValue'
     * $query->filterByEnvoiComplet('%fooValue%'); // WHERE envoi_complet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $envoiComplet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByEnvoiComplet($envoiComplet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($envoiComplet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $envoiComplet)) {
                $envoiComplet = str_replace('*', '%', $envoiComplet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::ENVOI_COMPLET, $envoiComplet, $comparison);
    }

    /**
     * Filter the query on the envoi_differe column
     *
     * Example usage:
     * <code>
     * $query->filterByEnvoiDiffere('fooValue');   // WHERE envoi_differe = 'fooValue'
     * $query->filterByEnvoiDiffere('%fooValue%'); // WHERE envoi_differe LIKE '%fooValue%'
     * </code>
     *
     * @param     string $envoiDiffere The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByEnvoiDiffere($envoiDiffere = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($envoiDiffere)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $envoiDiffere)) {
                $envoiDiffere = str_replace('*', '%', $envoiDiffere);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::ENVOI_DIFFERE, $envoiDiffere, $comparison);
    }

    /**
     * Filter the query on the procedure_publicite column
     *
     * Example usage:
     * <code>
     * $query->filterByProcedurePublicite('fooValue');   // WHERE procedure_publicite = 'fooValue'
     * $query->filterByProcedurePublicite('%fooValue%'); // WHERE procedure_publicite LIKE '%fooValue%'
     * </code>
     *
     * @param     string $procedurePublicite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByProcedurePublicite($procedurePublicite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($procedurePublicite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $procedurePublicite)) {
                $procedurePublicite = str_replace('*', '%', $procedurePublicite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::PROCEDURE_PUBLICITE, $procedurePublicite, $comparison);
    }

    /**
     * Filter the query on the procedure_restreinte_candidature column
     *
     * Example usage:
     * <code>
     * $query->filterByProcedureRestreinteCandidature('fooValue');   // WHERE procedure_restreinte_candidature = 'fooValue'
     * $query->filterByProcedureRestreinteCandidature('%fooValue%'); // WHERE procedure_restreinte_candidature LIKE '%fooValue%'
     * </code>
     *
     * @param     string $procedureRestreinteCandidature The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByProcedureRestreinteCandidature($procedureRestreinteCandidature = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($procedureRestreinteCandidature)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $procedureRestreinteCandidature)) {
                $procedureRestreinteCandidature = str_replace('*', '%', $procedureRestreinteCandidature);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::PROCEDURE_RESTREINTE_CANDIDATURE, $procedureRestreinteCandidature, $comparison);
    }

    /**
     * Filter the query on the procedure_restreinte_offre column
     *
     * Example usage:
     * <code>
     * $query->filterByProcedureRestreinteOffre('fooValue');   // WHERE procedure_restreinte_offre = 'fooValue'
     * $query->filterByProcedureRestreinteOffre('%fooValue%'); // WHERE procedure_restreinte_offre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $procedureRestreinteOffre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByProcedureRestreinteOffre($procedureRestreinteOffre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($procedureRestreinteOffre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $procedureRestreinteOffre)) {
                $procedureRestreinteOffre = str_replace('*', '%', $procedureRestreinteOffre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::PROCEDURE_RESTREINTE_OFFRE, $procedureRestreinteOffre, $comparison);
    }

    /**
     * Filter the query on the envoi_mail_par_mpe column
     *
     * Example usage:
     * <code>
     * $query->filterByEnvoiMailParMpe('fooValue');   // WHERE envoi_mail_par_mpe = 'fooValue'
     * $query->filterByEnvoiMailParMpe('%fooValue%'); // WHERE envoi_mail_par_mpe LIKE '%fooValue%'
     * </code>
     *
     * @param     string $envoiMailParMpe The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByEnvoiMailParMpe($envoiMailParMpe = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($envoiMailParMpe)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $envoiMailParMpe)) {
                $envoiMailParMpe = str_replace('*', '%', $envoiMailParMpe);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::ENVOI_MAIL_PAR_MPE, $envoiMailParMpe, $comparison);
    }

    /**
     * Filter the query on the no_envoi_mail_par_mpe column
     *
     * Example usage:
     * <code>
     * $query->filterByNoEnvoiMailParMpe('fooValue');   // WHERE no_envoi_mail_par_mpe = 'fooValue'
     * $query->filterByNoEnvoiMailParMpe('%fooValue%'); // WHERE no_envoi_mail_par_mpe LIKE '%fooValue%'
     * </code>
     *
     * @param     string $noEnvoiMailParMpe The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByNoEnvoiMailParMpe($noEnvoiMailParMpe = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($noEnvoiMailParMpe)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $noEnvoiMailParMpe)) {
                $noEnvoiMailParMpe = str_replace('*', '%', $noEnvoiMailParMpe);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::NO_ENVOI_MAIL_PAR_MPE, $noEnvoiMailParMpe, $comparison);
    }

    /**
     * Filter the query on the mise_en_ligne1 column
     *
     * Example usage:
     * <code>
     * $query->filterByMiseEnLigne1('fooValue');   // WHERE mise_en_ligne1 = 'fooValue'
     * $query->filterByMiseEnLigne1('%fooValue%'); // WHERE mise_en_ligne1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $miseEnLigne1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByMiseEnLigne1($miseEnLigne1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($miseEnLigne1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $miseEnLigne1)) {
                $miseEnLigne1 = str_replace('*', '%', $miseEnLigne1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::MISE_EN_LIGNE1, $miseEnLigne1, $comparison);
    }

    /**
     * Filter the query on the mise_en_ligne2 column
     *
     * Example usage:
     * <code>
     * $query->filterByMiseEnLigne2('fooValue');   // WHERE mise_en_ligne2 = 'fooValue'
     * $query->filterByMiseEnLigne2('%fooValue%'); // WHERE mise_en_ligne2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $miseEnLigne2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByMiseEnLigne2($miseEnLigne2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($miseEnLigne2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $miseEnLigne2)) {
                $miseEnLigne2 = str_replace('*', '%', $miseEnLigne2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::MISE_EN_LIGNE2, $miseEnLigne2, $comparison);
    }

    /**
     * Filter the query on the mise_en_ligne3 column
     *
     * Example usage:
     * <code>
     * $query->filterByMiseEnLigne3('fooValue');   // WHERE mise_en_ligne3 = 'fooValue'
     * $query->filterByMiseEnLigne3('%fooValue%'); // WHERE mise_en_ligne3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $miseEnLigne3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByMiseEnLigne3($miseEnLigne3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($miseEnLigne3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $miseEnLigne3)) {
                $miseEnLigne3 = str_replace('*', '%', $miseEnLigne3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::MISE_EN_LIGNE3, $miseEnLigne3, $comparison);
    }

    /**
     * Filter the query on the mise_en_ligne4 column
     *
     * Example usage:
     * <code>
     * $query->filterByMiseEnLigne4('fooValue');   // WHERE mise_en_ligne4 = 'fooValue'
     * $query->filterByMiseEnLigne4('%fooValue%'); // WHERE mise_en_ligne4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $miseEnLigne4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByMiseEnLigne4($miseEnLigne4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($miseEnLigne4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $miseEnLigne4)) {
                $miseEnLigne4 = str_replace('*', '%', $miseEnLigne4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::MISE_EN_LIGNE4, $miseEnLigne4, $comparison);
    }

    /**
     * Filter the query on the env_offre_type_unique column
     *
     * Example usage:
     * <code>
     * $query->filterByEnvOffreTypeUnique('fooValue');   // WHERE env_offre_type_unique = 'fooValue'
     * $query->filterByEnvOffreTypeUnique('%fooValue%'); // WHERE env_offre_type_unique LIKE '%fooValue%'
     * </code>
     *
     * @param     string $envOffreTypeUnique The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByEnvOffreTypeUnique($envOffreTypeUnique = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($envOffreTypeUnique)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $envOffreTypeUnique)) {
                $envOffreTypeUnique = str_replace('*', '%', $envOffreTypeUnique);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::ENV_OFFRE_TYPE_UNIQUE, $envOffreTypeUnique, $comparison);
    }

    /**
     * Filter the query on the env_offre_type_multiple column
     *
     * Example usage:
     * <code>
     * $query->filterByEnvOffreTypeMultiple('fooValue');   // WHERE env_offre_type_multiple = 'fooValue'
     * $query->filterByEnvOffreTypeMultiple('%fooValue%'); // WHERE env_offre_type_multiple LIKE '%fooValue%'
     * </code>
     *
     * @param     string $envOffreTypeMultiple The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByEnvOffreTypeMultiple($envOffreTypeMultiple = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($envOffreTypeMultiple)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $envOffreTypeMultiple)) {
                $envOffreTypeMultiple = str_replace('*', '%', $envOffreTypeMultiple);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::ENV_OFFRE_TYPE_MULTIPLE, $envOffreTypeMultiple, $comparison);
    }

    /**
     * Filter the query on the no_fichier_annonce column
     *
     * Example usage:
     * <code>
     * $query->filterByNoFichierAnnonce('fooValue');   // WHERE no_fichier_annonce = 'fooValue'
     * $query->filterByNoFichierAnnonce('%fooValue%'); // WHERE no_fichier_annonce LIKE '%fooValue%'
     * </code>
     *
     * @param     string $noFichierAnnonce The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByNoFichierAnnonce($noFichierAnnonce = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($noFichierAnnonce)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $noFichierAnnonce)) {
                $noFichierAnnonce = str_replace('*', '%', $noFichierAnnonce);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::NO_FICHIER_ANNONCE, $noFichierAnnonce, $comparison);
    }

    /**
     * Filter the query on the fichier_importe column
     *
     * Example usage:
     * <code>
     * $query->filterByFichierImporte('fooValue');   // WHERE fichier_importe = 'fooValue'
     * $query->filterByFichierImporte('%fooValue%'); // WHERE fichier_importe LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fichierImporte The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByFichierImporte($fichierImporte = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fichierImporte)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fichierImporte)) {
                $fichierImporte = str_replace('*', '%', $fichierImporte);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::FICHIER_IMPORTE, $fichierImporte, $comparison);
    }

    /**
     * Filter the query on the fichier_boamp column
     *
     * Example usage:
     * <code>
     * $query->filterByFichierBoamp('fooValue');   // WHERE fichier_boamp = 'fooValue'
     * $query->filterByFichierBoamp('%fooValue%'); // WHERE fichier_boamp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fichierBoamp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByFichierBoamp($fichierBoamp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fichierBoamp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fichierBoamp)) {
                $fichierBoamp = str_replace('*', '%', $fichierBoamp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::FICHIER_BOAMP, $fichierBoamp, $comparison);
    }

    /**
     * Filter the query on the reglement_cons column
     *
     * Example usage:
     * <code>
     * $query->filterByReglementCons('fooValue');   // WHERE reglement_cons = 'fooValue'
     * $query->filterByReglementCons('%fooValue%'); // WHERE reglement_cons LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reglementCons The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByReglementCons($reglementCons = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reglementCons)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $reglementCons)) {
                $reglementCons = str_replace('*', '%', $reglementCons);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::REGLEMENT_CONS, $reglementCons, $comparison);
    }

    /**
     * Filter the query on the dossier_dce column
     *
     * Example usage:
     * <code>
     * $query->filterByDossierDce('fooValue');   // WHERE dossier_dce = 'fooValue'
     * $query->filterByDossierDce('%fooValue%'); // WHERE dossier_dce LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dossierDce The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByDossierDce($dossierDce = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dossierDce)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dossierDce)) {
                $dossierDce = str_replace('*', '%', $dossierDce);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::DOSSIER_DCE, $dossierDce, $comparison);
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
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::PARTIAL_DCE_DOWNLOAD, $partialDceDownload, $comparison);
    }

    /**
     * Filter the query on the service column
     *
     * Example usage:
     * <code>
     * $query->filterByService('fooValue');   // WHERE service = 'fooValue'
     * $query->filterByService('%fooValue%'); // WHERE service LIKE '%fooValue%'
     * </code>
     *
     * @param     string $service The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByService($service = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($service)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $service)) {
                $service = str_replace('*', '%', $service);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::SERVICE, $service, $comparison);
    }

    /**
     * Filter the query on the constitution_dossier_reponse column
     *
     * Example usage:
     * <code>
     * $query->filterByConstitutionDossierReponse('fooValue');   // WHERE constitution_dossier_reponse = 'fooValue'
     * $query->filterByConstitutionDossierReponse('%fooValue%'); // WHERE constitution_dossier_reponse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $constitutionDossierReponse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByConstitutionDossierReponse($constitutionDossierReponse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($constitutionDossierReponse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $constitutionDossierReponse)) {
                $constitutionDossierReponse = str_replace('*', '%', $constitutionDossierReponse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::CONSTITUTION_DOSSIER_REPONSE, $constitutionDossierReponse, $comparison);
    }

    /**
     * Filter the query on the env_offre_type_unique2 column
     *
     * Example usage:
     * <code>
     * $query->filterByEnvOffreTypeUnique2('fooValue');   // WHERE env_offre_type_unique2 = 'fooValue'
     * $query->filterByEnvOffreTypeUnique2('%fooValue%'); // WHERE env_offre_type_unique2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $envOffreTypeUnique2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByEnvOffreTypeUnique2($envOffreTypeUnique2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($envOffreTypeUnique2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $envOffreTypeUnique2)) {
                $envOffreTypeUnique2 = str_replace('*', '%', $envOffreTypeUnique2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::ENV_OFFRE_TYPE_UNIQUE2, $envOffreTypeUnique2, $comparison);
    }

    /**
     * Filter the query on the env_offre_type_multiple2 column
     *
     * Example usage:
     * <code>
     * $query->filterByEnvOffreTypeMultiple2('fooValue');   // WHERE env_offre_type_multiple2 = 'fooValue'
     * $query->filterByEnvOffreTypeMultiple2('%fooValue%'); // WHERE env_offre_type_multiple2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $envOffreTypeMultiple2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByEnvOffreTypeMultiple2($envOffreTypeMultiple2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($envOffreTypeMultiple2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $envOffreTypeMultiple2)) {
                $envOffreTypeMultiple2 = str_replace('*', '%', $envOffreTypeMultiple2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::ENV_OFFRE_TYPE_MULTIPLE2, $envOffreTypeMultiple2, $comparison);
    }

    /**
     * Filter the query on the gestion_envois_postaux column
     *
     * Example usage:
     * <code>
     * $query->filterByGestionEnvoisPostaux('fooValue');   // WHERE gestion_envois_postaux = 'fooValue'
     * $query->filterByGestionEnvoisPostaux('%fooValue%'); // WHERE gestion_envois_postaux LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gestionEnvoisPostaux The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByGestionEnvoisPostaux($gestionEnvoisPostaux = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gestionEnvoisPostaux)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gestionEnvoisPostaux)) {
                $gestionEnvoisPostaux = str_replace('*', '%', $gestionEnvoisPostaux);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::GESTION_ENVOIS_POSTAUX, $gestionEnvoisPostaux, $comparison);
    }

    /**
     * Filter the query on the tireur_plan_non column
     *
     * Example usage:
     * <code>
     * $query->filterByTireurPlanNon('fooValue');   // WHERE tireur_plan_non = 'fooValue'
     * $query->filterByTireurPlanNon('%fooValue%'); // WHERE tireur_plan_non LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tireurPlanNon The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByTireurPlanNon($tireurPlanNon = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tireurPlanNon)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tireurPlanNon)) {
                $tireurPlanNon = str_replace('*', '%', $tireurPlanNon);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::TIREUR_PLAN_NON, $tireurPlanNon, $comparison);
    }

    /**
     * Filter the query on the tireur_plan_oui column
     *
     * Example usage:
     * <code>
     * $query->filterByTireurPlanOui('fooValue');   // WHERE tireur_plan_oui = 'fooValue'
     * $query->filterByTireurPlanOui('%fooValue%'); // WHERE tireur_plan_oui LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tireurPlanOui The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByTireurPlanOui($tireurPlanOui = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tireurPlanOui)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tireurPlanOui)) {
                $tireurPlanOui = str_replace('*', '%', $tireurPlanOui);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::TIREUR_PLAN_OUI, $tireurPlanOui, $comparison);
    }

    /**
     * Filter the query on the tireur_plan_papier column
     *
     * Example usage:
     * <code>
     * $query->filterByTireurPlanPapier('fooValue');   // WHERE tireur_plan_papier = 'fooValue'
     * $query->filterByTireurPlanPapier('%fooValue%'); // WHERE tireur_plan_papier LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tireurPlanPapier The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByTireurPlanPapier($tireurPlanPapier = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tireurPlanPapier)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tireurPlanPapier)) {
                $tireurPlanPapier = str_replace('*', '%', $tireurPlanPapier);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::TIREUR_PLAN_PAPIER, $tireurPlanPapier, $comparison);
    }

    /**
     * Filter the query on the tireur_plan_cdrom column
     *
     * Example usage:
     * <code>
     * $query->filterByTireurPlanCdrom('fooValue');   // WHERE tireur_plan_cdrom = 'fooValue'
     * $query->filterByTireurPlanCdrom('%fooValue%'); // WHERE tireur_plan_cdrom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tireurPlanCdrom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByTireurPlanCdrom($tireurPlanCdrom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tireurPlanCdrom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tireurPlanCdrom)) {
                $tireurPlanCdrom = str_replace('*', '%', $tireurPlanCdrom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::TIREUR_PLAN_CDROM, $tireurPlanCdrom, $comparison);
    }

    /**
     * Filter the query on the tireur_plan_nom column
     *
     * Example usage:
     * <code>
     * $query->filterByTireurPlanNom('fooValue');   // WHERE tireur_plan_nom = 'fooValue'
     * $query->filterByTireurPlanNom('%fooValue%'); // WHERE tireur_plan_nom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tireurPlanNom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByTireurPlanNom($tireurPlanNom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tireurPlanNom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tireurPlanNom)) {
                $tireurPlanNom = str_replace('*', '%', $tireurPlanNom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::TIREUR_PLAN_NOM, $tireurPlanNom, $comparison);
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
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::TIRAGE_DESCRIPTIF, $tirageDescriptif, $comparison);
    }

    /**
     * Filter the query on the delai_date_limite_remise_pli column
     *
     * Example usage:
     * <code>
     * $query->filterByDelaiDateLimiteRemisePli('fooValue');   // WHERE delai_date_limite_remise_pli = 'fooValue'
     * $query->filterByDelaiDateLimiteRemisePli('%fooValue%'); // WHERE delai_date_limite_remise_pli LIKE '%fooValue%'
     * </code>
     *
     * @param     string $delaiDateLimiteRemisePli The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByDelaiDateLimiteRemisePli($delaiDateLimiteRemisePli = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($delaiDateLimiteRemisePli)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $delaiDateLimiteRemisePli)) {
                $delaiDateLimiteRemisePli = str_replace('*', '%', $delaiDateLimiteRemisePli);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::DELAI_DATE_LIMITE_REMISE_PLI, $delaiDateLimiteRemisePli, $comparison);
    }

    /**
     * Filter the query on the signature_propre column
     *
     * Example usage:
     * <code>
     * $query->filterBySignaturePropre('fooValue');   // WHERE signature_propre = 'fooValue'
     * $query->filterBySignaturePropre('%fooValue%'); // WHERE signature_propre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $signaturePropre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterBySignaturePropre($signaturePropre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($signaturePropre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $signaturePropre)) {
                $signaturePropre = str_replace('*', '%', $signaturePropre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::SIGNATURE_PROPRE, $signaturePropre, $comparison);
    }

    /**
     * Filter the query on the procedure_restreinte column
     *
     * Example usage:
     * <code>
     * $query->filterByProcedureRestreinte('fooValue');   // WHERE procedure_restreinte = 'fooValue'
     * $query->filterByProcedureRestreinte('%fooValue%'); // WHERE procedure_restreinte LIKE '%fooValue%'
     * </code>
     *
     * @param     string $procedureRestreinte The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByProcedureRestreinte($procedureRestreinte = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($procedureRestreinte)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $procedureRestreinte)) {
                $procedureRestreinte = str_replace('*', '%', $procedureRestreinte);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::PROCEDURE_RESTREINTE, $procedureRestreinte, $comparison);
    }

    /**
     * Filter the query on the ouverture_simultanee column
     *
     * Example usage:
     * <code>
     * $query->filterByOuvertureSimultanee('fooValue');   // WHERE ouverture_simultanee = 'fooValue'
     * $query->filterByOuvertureSimultanee('%fooValue%'); // WHERE ouverture_simultanee LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ouvertureSimultanee The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByOuvertureSimultanee($ouvertureSimultanee = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ouvertureSimultanee)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ouvertureSimultanee)) {
                $ouvertureSimultanee = str_replace('*', '%', $ouvertureSimultanee);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::OUVERTURE_SIMULTANEE, $ouvertureSimultanee, $comparison);
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
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::TYPE_DECISION_A_RENSEIGNER, $typeDecisionARenseigner, $comparison);
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
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::TYPE_DECISION_ATTRIBUTION_MARCHE, $typeDecisionAttributionMarche, $comparison);
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
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::TYPE_DECISION_DECLARATION_SANS_SUITE, $typeDecisionDeclarationSansSuite, $comparison);
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
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::TYPE_DECISION_DECLARATION_INFRUCTUEUX, $typeDecisionDeclarationInfructueux, $comparison);
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
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::TYPE_DECISION_SELECTION_ENTREPRISE, $typeDecisionSelectionEntreprise, $comparison);
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
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::TYPE_DECISION_ATTRIBUTION_ACCORD_CADRE, $typeDecisionAttributionAccordCadre, $comparison);
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
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::TYPE_DECISION_ADMISSION_SAD, $typeDecisionAdmissionSad, $comparison);
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
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::TYPE_DECISION_AUTRE, $typeDecisionAutre, $comparison);
    }

    /**
     * Filter the query on the env_offre_technique column
     *
     * Example usage:
     * <code>
     * $query->filterByEnvOffreTechnique('fooValue');   // WHERE env_offre_technique = 'fooValue'
     * $query->filterByEnvOffreTechnique('%fooValue%'); // WHERE env_offre_technique LIKE '%fooValue%'
     * </code>
     *
     * @param     string $envOffreTechnique The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByEnvOffreTechnique($envOffreTechnique = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($envOffreTechnique)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $envOffreTechnique)) {
                $envOffreTechnique = str_replace('*', '%', $envOffreTechnique);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::ENV_OFFRE_TECHNIQUE, $envOffreTechnique, $comparison);
    }

    /**
     * Filter the query on the env_offre_technique_type_unique column
     *
     * Example usage:
     * <code>
     * $query->filterByEnvOffreTechniqueTypeUnique('fooValue');   // WHERE env_offre_technique_type_unique = 'fooValue'
     * $query->filterByEnvOffreTechniqueTypeUnique('%fooValue%'); // WHERE env_offre_technique_type_unique LIKE '%fooValue%'
     * </code>
     *
     * @param     string $envOffreTechniqueTypeUnique The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByEnvOffreTechniqueTypeUnique($envOffreTechniqueTypeUnique = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($envOffreTechniqueTypeUnique)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $envOffreTechniqueTypeUnique)) {
                $envOffreTechniqueTypeUnique = str_replace('*', '%', $envOffreTechniqueTypeUnique);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::ENV_OFFRE_TECHNIQUE_TYPE_UNIQUE, $envOffreTechniqueTypeUnique, $comparison);
    }

    /**
     * Filter the query on the env_offre_technique_type_multiple column
     *
     * Example usage:
     * <code>
     * $query->filterByEnvOffreTechniqueTypeMultiple('fooValue');   // WHERE env_offre_technique_type_multiple = 'fooValue'
     * $query->filterByEnvOffreTechniqueTypeMultiple('%fooValue%'); // WHERE env_offre_technique_type_multiple LIKE '%fooValue%'
     * </code>
     *
     * @param     string $envOffreTechniqueTypeMultiple The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByEnvOffreTechniqueTypeMultiple($envOffreTechniqueTypeMultiple = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($envOffreTechniqueTypeMultiple)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $envOffreTechniqueTypeMultiple)) {
                $envOffreTechniqueTypeMultiple = str_replace('*', '%', $envOffreTechniqueTypeMultiple);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::ENV_OFFRE_TECHNIQUE_TYPE_MULTIPLE, $envOffreTechniqueTypeMultiple, $comparison);
    }

    /**
     * Filter the query on the rep_obligatoire column
     *
     * Example usage:
     * <code>
     * $query->filterByRepObligatoire('fooValue');   // WHERE rep_obligatoire = 'fooValue'
     * $query->filterByRepObligatoire('%fooValue%'); // WHERE rep_obligatoire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $repObligatoire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByRepObligatoire($repObligatoire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($repObligatoire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $repObligatoire)) {
                $repObligatoire = str_replace('*', '%', $repObligatoire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::REP_OBLIGATOIRE, $repObligatoire, $comparison);
    }

    /**
     * Filter the query on the no_rep_obligatoire column
     *
     * Example usage:
     * <code>
     * $query->filterByNoRepObligatoire('fooValue');   // WHERE no_rep_obligatoire = 'fooValue'
     * $query->filterByNoRepObligatoire('%fooValue%'); // WHERE no_rep_obligatoire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $noRepObligatoire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByNoRepObligatoire($noRepObligatoire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($noRepObligatoire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $noRepObligatoire)) {
                $noRepObligatoire = str_replace('*', '%', $noRepObligatoire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::NO_REP_OBLIGATOIRE, $noRepObligatoire, $comparison);
    }

    /**
     * Filter the query on the autre_piece_cons column
     *
     * Example usage:
     * <code>
     * $query->filterByAutrePieceCons('fooValue');   // WHERE autre_piece_cons = 'fooValue'
     * $query->filterByAutrePieceCons('%fooValue%'); // WHERE autre_piece_cons LIKE '%fooValue%'
     * </code>
     *
     * @param     string $autrePieceCons The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByAutrePieceCons($autrePieceCons = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($autrePieceCons)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $autrePieceCons)) {
                $autrePieceCons = str_replace('*', '%', $autrePieceCons);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::AUTRE_PIECE_CONS, $autrePieceCons, $comparison);
    }

    /**
     * Filter the query on the resp_elec_autre_plateforme column
     *
     * Example usage:
     * <code>
     * $query->filterByRespElecAutrePlateforme('fooValue');   // WHERE resp_elec_autre_plateforme = 'fooValue'
     * $query->filterByRespElecAutrePlateforme('%fooValue%'); // WHERE resp_elec_autre_plateforme LIKE '%fooValue%'
     * </code>
     *
     * @param     string $respElecAutrePlateforme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByRespElecAutrePlateforme($respElecAutrePlateforme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($respElecAutrePlateforme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $respElecAutrePlateforme)) {
                $respElecAutrePlateforme = str_replace('*', '%', $respElecAutrePlateforme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::RESP_ELEC_AUTRE_PLATEFORME, $respElecAutrePlateforme, $comparison);
    }

    /**
     * Filter the query on the mise_en_ligne_entite_coordinatrice column
     *
     * Example usage:
     * <code>
     * $query->filterByMiseEnLigneEntiteCoordinatrice('fooValue');   // WHERE mise_en_ligne_entite_coordinatrice = 'fooValue'
     * $query->filterByMiseEnLigneEntiteCoordinatrice('%fooValue%'); // WHERE mise_en_ligne_entite_coordinatrice LIKE '%fooValue%'
     * </code>
     *
     * @param     string $miseEnLigneEntiteCoordinatrice The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByMiseEnLigneEntiteCoordinatrice($miseEnLigneEntiteCoordinatrice = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($miseEnLigneEntiteCoordinatrice)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $miseEnLigneEntiteCoordinatrice)) {
                $miseEnLigneEntiteCoordinatrice = str_replace('*', '%', $miseEnLigneEntiteCoordinatrice);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::MISE_EN_LIGNE_ENTITE_COORDINATRICE, $miseEnLigneEntiteCoordinatrice, $comparison);
    }

    /**
     * Filter the query on the autoriser_publicite column
     *
     * Example usage:
     * <code>
     * $query->filterByAutoriserPublicite('fooValue');   // WHERE autoriser_publicite = 'fooValue'
     * $query->filterByAutoriserPublicite('%fooValue%'); // WHERE autoriser_publicite LIKE '%fooValue%'
     * </code>
     *
     * @param     string $autoriserPublicite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByAutoriserPublicite($autoriserPublicite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($autoriserPublicite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $autoriserPublicite)) {
                $autoriserPublicite = str_replace('*', '%', $autoriserPublicite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::AUTORISER_PUBLICITE, $autoriserPublicite, $comparison);
    }

    /**
     * Filter the query on the poursuite_date_limite_remise_pli column
     *
     * Example usage:
     * <code>
     * $query->filterByPoursuiteDateLimiteRemisePli('fooValue');   // WHERE poursuite_date_limite_remise_pli = 'fooValue'
     * $query->filterByPoursuiteDateLimiteRemisePli('%fooValue%'); // WHERE poursuite_date_limite_remise_pli LIKE '%fooValue%'
     * </code>
     *
     * @param     string $poursuiteDateLimiteRemisePli The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByPoursuiteDateLimiteRemisePli($poursuiteDateLimiteRemisePli = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($poursuiteDateLimiteRemisePli)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $poursuiteDateLimiteRemisePli)) {
                $poursuiteDateLimiteRemisePli = str_replace('*', '%', $poursuiteDateLimiteRemisePli);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::POURSUITE_DATE_LIMITE_REMISE_PLI, $poursuiteDateLimiteRemisePli, $comparison);
    }

    /**
     * Filter the query on the delai_poursuite_affichage column
     *
     * Example usage:
     * <code>
     * $query->filterByDelaiPoursuiteAffichage('fooValue');   // WHERE delai_poursuite_affichage = 'fooValue'
     * $query->filterByDelaiPoursuiteAffichage('%fooValue%'); // WHERE delai_poursuite_affichage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $delaiPoursuiteAffichage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByDelaiPoursuiteAffichage($delaiPoursuiteAffichage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($delaiPoursuiteAffichage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $delaiPoursuiteAffichage)) {
                $delaiPoursuiteAffichage = str_replace('*', '%', $delaiPoursuiteAffichage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::DELAI_POURSUITE_AFFICHAGE, $delaiPoursuiteAffichage, $comparison);
    }

    /**
     * Filter the query on the mode_ouverture_dossier column
     *
     * Example usage:
     * <code>
     * $query->filterByModeOuvertureDossier('fooValue');   // WHERE mode_ouverture_dossier = 'fooValue'
     * $query->filterByModeOuvertureDossier('%fooValue%'); // WHERE mode_ouverture_dossier LIKE '%fooValue%'
     * </code>
     *
     * @param     string $modeOuvertureDossier The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function filterByModeOuvertureDossier($modeOuvertureDossier = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modeOuvertureDossier)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $modeOuvertureDossier)) {
                $modeOuvertureDossier = str_replace('*', '%', $modeOuvertureDossier);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::MODE_OUVERTURE_DOSSIER, $modeOuvertureDossier, $comparison);
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
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::MODE_OUVERTURE_REPONSE, $modeOuvertureReponse, $comparison);
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
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonProcedureEquivalencePeer::MARCHE_PUBLIC_SIMPLIFIE, $marchePublicSimplifie, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonProcedureEquivalence $commonProcedureEquivalence Object to remove from the list of results
     *
     * @return CommonProcedureEquivalenceQuery The current query, for fluid interface
     */
    public function prune($commonProcedureEquivalence = null)
    {
        if ($commonProcedureEquivalence) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonProcedureEquivalencePeer::ID_TYPE_PROCEDURE), $commonProcedureEquivalence->getIdTypeProcedure(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonProcedureEquivalencePeer::ORGANISME), $commonProcedureEquivalence->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
