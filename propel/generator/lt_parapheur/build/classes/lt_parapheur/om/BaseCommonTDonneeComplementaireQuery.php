<?php


/**
 * Base class that represents a query for the 't_donnee_complementaire' table.
 *
 * 
 *
 * @method CommonTDonneeComplementaireQuery orderByIdDonneeComplementaire($order = Criteria::ASC) Order by the id_donnee_complementaire column
 * @method CommonTDonneeComplementaireQuery orderByIdTrancheTypePrix($order = Criteria::ASC) Order by the id_tranche_type_prix column
 * @method CommonTDonneeComplementaireQuery orderByIdFormePrix($order = Criteria::ASC) Order by the id_forme_prix column
 * @method CommonTDonneeComplementaireQuery orderByIdCcagReference($order = Criteria::ASC) Order by the id_ccag_reference column
 * @method CommonTDonneeComplementaireQuery orderByReconductible($order = Criteria::ASC) Order by the reconductible column
 * @method CommonTDonneeComplementaireQuery orderByNombreReconductions($order = Criteria::ASC) Order by the nombre_reconductions column
 * @method CommonTDonneeComplementaireQuery orderByModalitesReconduction($order = Criteria::ASC) Order by the modalites_reconduction column
 * @method CommonTDonneeComplementaireQuery orderByVariantesAutorisees($order = Criteria::ASC) Order by the variantes_autorisees column
 * @method CommonTDonneeComplementaireQuery orderByVariantesTechniquesObligatoires($order = Criteria::ASC) Order by the variantes_techniques_obligatoires column
 * @method CommonTDonneeComplementaireQuery orderByVariantesTechniquesDescription($order = Criteria::ASC) Order by the variantes_techniques_description column
 * @method CommonTDonneeComplementaireQuery orderByDecompositionLotsTechniques($order = Criteria::ASC) Order by the decomposition_lots_techniques column
 * @method CommonTDonneeComplementaireQuery orderByIdDureeDelaiDescription($order = Criteria::ASC) Order by the id_duree_delai_description column
 * @method CommonTDonneeComplementaireQuery orderByEstimationPfAttPressenti($order = Criteria::ASC) Order by the estimation_pf_att_pressenti column
 * @method CommonTDonneeComplementaireQuery orderByEstimationBcMinAttPressenti($order = Criteria::ASC) Order by the estimation_bc_min_att_pressenti column
 * @method CommonTDonneeComplementaireQuery orderByEstimationBcMaxAttPressenti($order = Criteria::ASC) Order by the estimation_bc_max_att_pressenti column
 * @method CommonTDonneeComplementaireQuery orderByEstimationPfTabOuvOffre($order = Criteria::ASC) Order by the estimation_pf_tab_ouv_offre column
 * @method CommonTDonneeComplementaireQuery orderByEstimationDqeTabOuvOffre($order = Criteria::ASC) Order by the estimation_dqe_tab_ouv_offre column
 * @method CommonTDonneeComplementaireQuery orderByAvisAttributionPresent($order = Criteria::ASC) Order by the avis_attribution_present column
 * @method CommonTDonneeComplementaireQuery orderByEstimationPfPreinscription($order = Criteria::ASC) Order by the estimation_pf_preinscription column
 * @method CommonTDonneeComplementaireQuery orderByEstimationBcMinPreinscription($order = Criteria::ASC) Order by the estimation_bc_min_preinscription column
 * @method CommonTDonneeComplementaireQuery orderByEstimationBcMaxPreinscription($order = Criteria::ASC) Order by the estimation_bc_max_preinscription column
 * @method CommonTDonneeComplementaireQuery orderByEstimationDateValeurPreinscription($order = Criteria::ASC) Order by the estimation_date_valeur_preinscription column
 * @method CommonTDonneeComplementaireQuery orderByLieuExecution($order = Criteria::ASC) Order by the lieu_execution column
 * @method CommonTDonneeComplementaireQuery orderByDureeMarche($order = Criteria::ASC) Order by the duree_marche column
 * @method CommonTDonneeComplementaireQuery orderByDureeDateDebut($order = Criteria::ASC) Order by the duree_date_debut column
 * @method CommonTDonneeComplementaireQuery orderByDureeDateFin($order = Criteria::ASC) Order by the duree_date_fin column
 * @method CommonTDonneeComplementaireQuery orderByDureeDescription($order = Criteria::ASC) Order by the duree_description column
 * @method CommonTDonneeComplementaireQuery orderByIdChoixMoisJour($order = Criteria::ASC) Order by the id_choix_mois_jour column
 * @method CommonTDonneeComplementaireQuery orderByIdUnite($order = Criteria::ASC) Order by the id_unite column
 * @method CommonTDonneeComplementaireQuery orderByIdNbCandidatsAdmis($order = Criteria::ASC) Order by the id_nb_candidats_admis column
 * @method CommonTDonneeComplementaireQuery orderByNombreCandidatsFixe($order = Criteria::ASC) Order by the nombre_candidats_fixe column
 * @method CommonTDonneeComplementaireQuery orderByNombreCandidatsMin($order = Criteria::ASC) Order by the nombre_candidats_min column
 * @method CommonTDonneeComplementaireQuery orderByNombreCandidatsMax($order = Criteria::ASC) Order by the nombre_candidats_max column
 * @method CommonTDonneeComplementaireQuery orderByDelaiValiditeOffres($order = Criteria::ASC) Order by the delai_validite_offres column
 * @method CommonTDonneeComplementaireQuery orderByPhaseSuccessive($order = Criteria::ASC) Order by the phase_successive column
 * @method CommonTDonneeComplementaireQuery orderByIdGroupementAttributaire($order = Criteria::ASC) Order by the id_groupement_attributaire column
 * @method CommonTDonneeComplementaireQuery orderByIdCritereAttribution($order = Criteria::ASC) Order by the id_critere_attribution column
 * @method CommonTDonneeComplementaireQuery orderByTypePrestation($order = Criteria::ASC) Order by the type_prestation column
 * @method CommonTDonneeComplementaireQuery orderByDelaiPartiel($order = Criteria::ASC) Order by the delai_partiel column
 * @method CommonTDonneeComplementaireQuery orderByAdresseRetraisDossiers($order = Criteria::ASC) Order by the adresse_retrais_dossiers column
 * @method CommonTDonneeComplementaireQuery orderByAdresseDepotOffres($order = Criteria::ASC) Order by the adresse_depot_offres column
 * @method CommonTDonneeComplementaireQuery orderByLieuOuverturePlis($order = Criteria::ASC) Order by the lieu_ouverture_plis column
 * @method CommonTDonneeComplementaireQuery orderByPiecesDossierAdmin($order = Criteria::ASC) Order by the pieces_dossier_admin column
 * @method CommonTDonneeComplementaireQuery orderByIdTrPiecesDossierAdmin($order = Criteria::ASC) Order by the id_tr_pieces_dossier_admin column
 * @method CommonTDonneeComplementaireQuery orderByPiecesDossierTech($order = Criteria::ASC) Order by the pieces_dossier_tech column
 * @method CommonTDonneeComplementaireQuery orderByIdTrPiecesDossierTech($order = Criteria::ASC) Order by the id_tr_pieces_dossier_tech column
 * @method CommonTDonneeComplementaireQuery orderByPiecesDossierAdditif($order = Criteria::ASC) Order by the pieces_dossier_additif column
 * @method CommonTDonneeComplementaireQuery orderByIdTrPiecesDossierAdditif($order = Criteria::ASC) Order by the id_tr_pieces_dossier_additif column
 * @method CommonTDonneeComplementaireQuery orderByIdTrAdresseRetraisDossiers($order = Criteria::ASC) Order by the id_tr_adresse_retrais_dossiers column
 * @method CommonTDonneeComplementaireQuery orderByIdTrAdresseDepotOffres($order = Criteria::ASC) Order by the id_tr_adresse_depot_offres column
 * @method CommonTDonneeComplementaireQuery orderByIdTrLieuOuverturePlis($order = Criteria::ASC) Order by the id_tr_lieu_ouverture_plis column
 * @method CommonTDonneeComplementaireQuery orderByCautionProvisoire($order = Criteria::ASC) Order by the caution_provisoire column
 * @method CommonTDonneeComplementaireQuery orderByPrixAquisitionPlans($order = Criteria::ASC) Order by the prix_aquisition_plans column
 * @method CommonTDonneeComplementaireQuery orderByAddEchantillon($order = Criteria::ASC) Order by the add_echantillon column
 * @method CommonTDonneeComplementaireQuery orderByIdTrAddEchantillon($order = Criteria::ASC) Order by the id_tr_add_echantillon column
 * @method CommonTDonneeComplementaireQuery orderByDateLimiteEchantillon($order = Criteria::ASC) Order by the date_limite_echantillon column
 * @method CommonTDonneeComplementaireQuery orderByAddReunion($order = Criteria::ASC) Order by the add_reunion column
 * @method CommonTDonneeComplementaireQuery orderByIdTrAddReunion($order = Criteria::ASC) Order by the id_tr_add_reunion column
 * @method CommonTDonneeComplementaireQuery orderByDateReunion($order = Criteria::ASC) Order by the date_reunion column
 * @method CommonTDonneeComplementaireQuery orderByReunion($order = Criteria::ASC) Order by the reunion column
 * @method CommonTDonneeComplementaireQuery orderByVisitesLieux($order = Criteria::ASC) Order by the visites_lieux column
 * @method CommonTDonneeComplementaireQuery orderByEchantillon($order = Criteria::ASC) Order by the echantillon column
 * @method CommonTDonneeComplementaireQuery orderByVariantes($order = Criteria::ASC) Order by the variantes column
 * @method CommonTDonneeComplementaireQuery orderByVarianteCalcule($order = Criteria::ASC) Order by the variante_calcule column
 * @method CommonTDonneeComplementaireQuery orderByCriteresIdentiques($order = Criteria::ASC) Order by the criteres_identiques column
 * @method CommonTDonneeComplementaireQuery orderByDateExpressionBesoin($order = Criteria::ASC) Order by the date_expression_besoin column
 * @method CommonTDonneeComplementaireQuery orderByIdRefContact1($order = Criteria::ASC) Order by the id_ref_contact_1 column
 * @method CommonTDonneeComplementaireQuery orderByIdRefContact2($order = Criteria::ASC) Order by the id_ref_contact_2 column
 *
 * @method CommonTDonneeComplementaireQuery groupByIdDonneeComplementaire() Group by the id_donnee_complementaire column
 * @method CommonTDonneeComplementaireQuery groupByIdTrancheTypePrix() Group by the id_tranche_type_prix column
 * @method CommonTDonneeComplementaireQuery groupByIdFormePrix() Group by the id_forme_prix column
 * @method CommonTDonneeComplementaireQuery groupByIdCcagReference() Group by the id_ccag_reference column
 * @method CommonTDonneeComplementaireQuery groupByReconductible() Group by the reconductible column
 * @method CommonTDonneeComplementaireQuery groupByNombreReconductions() Group by the nombre_reconductions column
 * @method CommonTDonneeComplementaireQuery groupByModalitesReconduction() Group by the modalites_reconduction column
 * @method CommonTDonneeComplementaireQuery groupByVariantesAutorisees() Group by the variantes_autorisees column
 * @method CommonTDonneeComplementaireQuery groupByVariantesTechniquesObligatoires() Group by the variantes_techniques_obligatoires column
 * @method CommonTDonneeComplementaireQuery groupByVariantesTechniquesDescription() Group by the variantes_techniques_description column
 * @method CommonTDonneeComplementaireQuery groupByDecompositionLotsTechniques() Group by the decomposition_lots_techniques column
 * @method CommonTDonneeComplementaireQuery groupByIdDureeDelaiDescription() Group by the id_duree_delai_description column
 * @method CommonTDonneeComplementaireQuery groupByEstimationPfAttPressenti() Group by the estimation_pf_att_pressenti column
 * @method CommonTDonneeComplementaireQuery groupByEstimationBcMinAttPressenti() Group by the estimation_bc_min_att_pressenti column
 * @method CommonTDonneeComplementaireQuery groupByEstimationBcMaxAttPressenti() Group by the estimation_bc_max_att_pressenti column
 * @method CommonTDonneeComplementaireQuery groupByEstimationPfTabOuvOffre() Group by the estimation_pf_tab_ouv_offre column
 * @method CommonTDonneeComplementaireQuery groupByEstimationDqeTabOuvOffre() Group by the estimation_dqe_tab_ouv_offre column
 * @method CommonTDonneeComplementaireQuery groupByAvisAttributionPresent() Group by the avis_attribution_present column
 * @method CommonTDonneeComplementaireQuery groupByEstimationPfPreinscription() Group by the estimation_pf_preinscription column
 * @method CommonTDonneeComplementaireQuery groupByEstimationBcMinPreinscription() Group by the estimation_bc_min_preinscription column
 * @method CommonTDonneeComplementaireQuery groupByEstimationBcMaxPreinscription() Group by the estimation_bc_max_preinscription column
 * @method CommonTDonneeComplementaireQuery groupByEstimationDateValeurPreinscription() Group by the estimation_date_valeur_preinscription column
 * @method CommonTDonneeComplementaireQuery groupByLieuExecution() Group by the lieu_execution column
 * @method CommonTDonneeComplementaireQuery groupByDureeMarche() Group by the duree_marche column
 * @method CommonTDonneeComplementaireQuery groupByDureeDateDebut() Group by the duree_date_debut column
 * @method CommonTDonneeComplementaireQuery groupByDureeDateFin() Group by the duree_date_fin column
 * @method CommonTDonneeComplementaireQuery groupByDureeDescription() Group by the duree_description column
 * @method CommonTDonneeComplementaireQuery groupByIdChoixMoisJour() Group by the id_choix_mois_jour column
 * @method CommonTDonneeComplementaireQuery groupByIdUnite() Group by the id_unite column
 * @method CommonTDonneeComplementaireQuery groupByIdNbCandidatsAdmis() Group by the id_nb_candidats_admis column
 * @method CommonTDonneeComplementaireQuery groupByNombreCandidatsFixe() Group by the nombre_candidats_fixe column
 * @method CommonTDonneeComplementaireQuery groupByNombreCandidatsMin() Group by the nombre_candidats_min column
 * @method CommonTDonneeComplementaireQuery groupByNombreCandidatsMax() Group by the nombre_candidats_max column
 * @method CommonTDonneeComplementaireQuery groupByDelaiValiditeOffres() Group by the delai_validite_offres column
 * @method CommonTDonneeComplementaireQuery groupByPhaseSuccessive() Group by the phase_successive column
 * @method CommonTDonneeComplementaireQuery groupByIdGroupementAttributaire() Group by the id_groupement_attributaire column
 * @method CommonTDonneeComplementaireQuery groupByIdCritereAttribution() Group by the id_critere_attribution column
 * @method CommonTDonneeComplementaireQuery groupByTypePrestation() Group by the type_prestation column
 * @method CommonTDonneeComplementaireQuery groupByDelaiPartiel() Group by the delai_partiel column
 * @method CommonTDonneeComplementaireQuery groupByAdresseRetraisDossiers() Group by the adresse_retrais_dossiers column
 * @method CommonTDonneeComplementaireQuery groupByAdresseDepotOffres() Group by the adresse_depot_offres column
 * @method CommonTDonneeComplementaireQuery groupByLieuOuverturePlis() Group by the lieu_ouverture_plis column
 * @method CommonTDonneeComplementaireQuery groupByPiecesDossierAdmin() Group by the pieces_dossier_admin column
 * @method CommonTDonneeComplementaireQuery groupByIdTrPiecesDossierAdmin() Group by the id_tr_pieces_dossier_admin column
 * @method CommonTDonneeComplementaireQuery groupByPiecesDossierTech() Group by the pieces_dossier_tech column
 * @method CommonTDonneeComplementaireQuery groupByIdTrPiecesDossierTech() Group by the id_tr_pieces_dossier_tech column
 * @method CommonTDonneeComplementaireQuery groupByPiecesDossierAdditif() Group by the pieces_dossier_additif column
 * @method CommonTDonneeComplementaireQuery groupByIdTrPiecesDossierAdditif() Group by the id_tr_pieces_dossier_additif column
 * @method CommonTDonneeComplementaireQuery groupByIdTrAdresseRetraisDossiers() Group by the id_tr_adresse_retrais_dossiers column
 * @method CommonTDonneeComplementaireQuery groupByIdTrAdresseDepotOffres() Group by the id_tr_adresse_depot_offres column
 * @method CommonTDonneeComplementaireQuery groupByIdTrLieuOuverturePlis() Group by the id_tr_lieu_ouverture_plis column
 * @method CommonTDonneeComplementaireQuery groupByCautionProvisoire() Group by the caution_provisoire column
 * @method CommonTDonneeComplementaireQuery groupByPrixAquisitionPlans() Group by the prix_aquisition_plans column
 * @method CommonTDonneeComplementaireQuery groupByAddEchantillon() Group by the add_echantillon column
 * @method CommonTDonneeComplementaireQuery groupByIdTrAddEchantillon() Group by the id_tr_add_echantillon column
 * @method CommonTDonneeComplementaireQuery groupByDateLimiteEchantillon() Group by the date_limite_echantillon column
 * @method CommonTDonneeComplementaireQuery groupByAddReunion() Group by the add_reunion column
 * @method CommonTDonneeComplementaireQuery groupByIdTrAddReunion() Group by the id_tr_add_reunion column
 * @method CommonTDonneeComplementaireQuery groupByDateReunion() Group by the date_reunion column
 * @method CommonTDonneeComplementaireQuery groupByReunion() Group by the reunion column
 * @method CommonTDonneeComplementaireQuery groupByVisitesLieux() Group by the visites_lieux column
 * @method CommonTDonneeComplementaireQuery groupByEchantillon() Group by the echantillon column
 * @method CommonTDonneeComplementaireQuery groupByVariantes() Group by the variantes column
 * @method CommonTDonneeComplementaireQuery groupByVarianteCalcule() Group by the variante_calcule column
 * @method CommonTDonneeComplementaireQuery groupByCriteresIdentiques() Group by the criteres_identiques column
 * @method CommonTDonneeComplementaireQuery groupByDateExpressionBesoin() Group by the date_expression_besoin column
 * @method CommonTDonneeComplementaireQuery groupByIdRefContact1() Group by the id_ref_contact_1 column
 * @method CommonTDonneeComplementaireQuery groupByIdRefContact2() Group by the id_ref_contact_2 column
 *
 * @method CommonTDonneeComplementaireQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTDonneeComplementaireQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTDonneeComplementaireQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTDonneeComplementaireQuery leftJoinCommonTLotTechnique($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTLotTechnique relation
 * @method CommonTDonneeComplementaireQuery rightJoinCommonTLotTechnique($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTLotTechnique relation
 * @method CommonTDonneeComplementaireQuery innerJoinCommonTLotTechnique($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTLotTechnique relation
 *
 * @method CommonTDonneeComplementaireQuery leftJoinCommonTTranche($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTTranche relation
 * @method CommonTDonneeComplementaireQuery rightJoinCommonTTranche($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTTranche relation
 * @method CommonTDonneeComplementaireQuery innerJoinCommonTTranche($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTTranche relation
 *
 * @method CommonTDonneeComplementaire findOne(PropelPDO $con = null) Return the first CommonTDonneeComplementaire matching the query
 * @method CommonTDonneeComplementaire findOneOrCreate(PropelPDO $con = null) Return the first CommonTDonneeComplementaire matching the query, or a new CommonTDonneeComplementaire object populated from the query conditions when no match is found
 *
 * @method CommonTDonneeComplementaire findOneByIdTrancheTypePrix(int $id_tranche_type_prix) Return the first CommonTDonneeComplementaire filtered by the id_tranche_type_prix column
 * @method CommonTDonneeComplementaire findOneByIdFormePrix(int $id_forme_prix) Return the first CommonTDonneeComplementaire filtered by the id_forme_prix column
 * @method CommonTDonneeComplementaire findOneByIdCcagReference(int $id_ccag_reference) Return the first CommonTDonneeComplementaire filtered by the id_ccag_reference column
 * @method CommonTDonneeComplementaire findOneByReconductible(boolean $reconductible) Return the first CommonTDonneeComplementaire filtered by the reconductible column
 * @method CommonTDonneeComplementaire findOneByNombreReconductions(int $nombre_reconductions) Return the first CommonTDonneeComplementaire filtered by the nombre_reconductions column
 * @method CommonTDonneeComplementaire findOneByModalitesReconduction(string $modalites_reconduction) Return the first CommonTDonneeComplementaire filtered by the modalites_reconduction column
 * @method CommonTDonneeComplementaire findOneByVariantesAutorisees(boolean $variantes_autorisees) Return the first CommonTDonneeComplementaire filtered by the variantes_autorisees column
 * @method CommonTDonneeComplementaire findOneByVariantesTechniquesObligatoires(boolean $variantes_techniques_obligatoires) Return the first CommonTDonneeComplementaire filtered by the variantes_techniques_obligatoires column
 * @method CommonTDonneeComplementaire findOneByVariantesTechniquesDescription(string $variantes_techniques_description) Return the first CommonTDonneeComplementaire filtered by the variantes_techniques_description column
 * @method CommonTDonneeComplementaire findOneByDecompositionLotsTechniques(boolean $decomposition_lots_techniques) Return the first CommonTDonneeComplementaire filtered by the decomposition_lots_techniques column
 * @method CommonTDonneeComplementaire findOneByIdDureeDelaiDescription(int $id_duree_delai_description) Return the first CommonTDonneeComplementaire filtered by the id_duree_delai_description column
 * @method CommonTDonneeComplementaire findOneByEstimationPfAttPressenti(string $estimation_pf_att_pressenti) Return the first CommonTDonneeComplementaire filtered by the estimation_pf_att_pressenti column
 * @method CommonTDonneeComplementaire findOneByEstimationBcMinAttPressenti(string $estimation_bc_min_att_pressenti) Return the first CommonTDonneeComplementaire filtered by the estimation_bc_min_att_pressenti column
 * @method CommonTDonneeComplementaire findOneByEstimationBcMaxAttPressenti(string $estimation_bc_max_att_pressenti) Return the first CommonTDonneeComplementaire filtered by the estimation_bc_max_att_pressenti column
 * @method CommonTDonneeComplementaire findOneByEstimationPfTabOuvOffre(string $estimation_pf_tab_ouv_offre) Return the first CommonTDonneeComplementaire filtered by the estimation_pf_tab_ouv_offre column
 * @method CommonTDonneeComplementaire findOneByEstimationDqeTabOuvOffre(string $estimation_dqe_tab_ouv_offre) Return the first CommonTDonneeComplementaire filtered by the estimation_dqe_tab_ouv_offre column
 * @method CommonTDonneeComplementaire findOneByAvisAttributionPresent(boolean $avis_attribution_present) Return the first CommonTDonneeComplementaire filtered by the avis_attribution_present column
 * @method CommonTDonneeComplementaire findOneByEstimationPfPreinscription(string $estimation_pf_preinscription) Return the first CommonTDonneeComplementaire filtered by the estimation_pf_preinscription column
 * @method CommonTDonneeComplementaire findOneByEstimationBcMinPreinscription(string $estimation_bc_min_preinscription) Return the first CommonTDonneeComplementaire filtered by the estimation_bc_min_preinscription column
 * @method CommonTDonneeComplementaire findOneByEstimationBcMaxPreinscription(string $estimation_bc_max_preinscription) Return the first CommonTDonneeComplementaire filtered by the estimation_bc_max_preinscription column
 * @method CommonTDonneeComplementaire findOneByEstimationDateValeurPreinscription(string $estimation_date_valeur_preinscription) Return the first CommonTDonneeComplementaire filtered by the estimation_date_valeur_preinscription column
 * @method CommonTDonneeComplementaire findOneByLieuExecution(string $lieu_execution) Return the first CommonTDonneeComplementaire filtered by the lieu_execution column
 * @method CommonTDonneeComplementaire findOneByDureeMarche(int $duree_marche) Return the first CommonTDonneeComplementaire filtered by the duree_marche column
 * @method CommonTDonneeComplementaire findOneByDureeDateDebut(string $duree_date_debut) Return the first CommonTDonneeComplementaire filtered by the duree_date_debut column
 * @method CommonTDonneeComplementaire findOneByDureeDateFin(string $duree_date_fin) Return the first CommonTDonneeComplementaire filtered by the duree_date_fin column
 * @method CommonTDonneeComplementaire findOneByDureeDescription(string $duree_description) Return the first CommonTDonneeComplementaire filtered by the duree_description column
 * @method CommonTDonneeComplementaire findOneByIdChoixMoisJour(int $id_choix_mois_jour) Return the first CommonTDonneeComplementaire filtered by the id_choix_mois_jour column
 * @method CommonTDonneeComplementaire findOneByIdUnite(int $id_unite) Return the first CommonTDonneeComplementaire filtered by the id_unite column
 * @method CommonTDonneeComplementaire findOneByIdNbCandidatsAdmis(int $id_nb_candidats_admis) Return the first CommonTDonneeComplementaire filtered by the id_nb_candidats_admis column
 * @method CommonTDonneeComplementaire findOneByNombreCandidatsFixe(int $nombre_candidats_fixe) Return the first CommonTDonneeComplementaire filtered by the nombre_candidats_fixe column
 * @method CommonTDonneeComplementaire findOneByNombreCandidatsMin(int $nombre_candidats_min) Return the first CommonTDonneeComplementaire filtered by the nombre_candidats_min column
 * @method CommonTDonneeComplementaire findOneByNombreCandidatsMax(int $nombre_candidats_max) Return the first CommonTDonneeComplementaire filtered by the nombre_candidats_max column
 * @method CommonTDonneeComplementaire findOneByDelaiValiditeOffres(int $delai_validite_offres) Return the first CommonTDonneeComplementaire filtered by the delai_validite_offres column
 * @method CommonTDonneeComplementaire findOneByPhaseSuccessive(boolean $phase_successive) Return the first CommonTDonneeComplementaire filtered by the phase_successive column
 * @method CommonTDonneeComplementaire findOneByIdGroupementAttributaire(int $id_groupement_attributaire) Return the first CommonTDonneeComplementaire filtered by the id_groupement_attributaire column
 * @method CommonTDonneeComplementaire findOneByIdCritereAttribution(int $id_critere_attribution) Return the first CommonTDonneeComplementaire filtered by the id_critere_attribution column
 * @method CommonTDonneeComplementaire findOneByTypePrestation(int $type_prestation) Return the first CommonTDonneeComplementaire filtered by the type_prestation column
 * @method CommonTDonneeComplementaire findOneByDelaiPartiel(string $delai_partiel) Return the first CommonTDonneeComplementaire filtered by the delai_partiel column
 * @method CommonTDonneeComplementaire findOneByAdresseRetraisDossiers(string $adresse_retrais_dossiers) Return the first CommonTDonneeComplementaire filtered by the adresse_retrais_dossiers column
 * @method CommonTDonneeComplementaire findOneByAdresseDepotOffres(string $adresse_depot_offres) Return the first CommonTDonneeComplementaire filtered by the adresse_depot_offres column
 * @method CommonTDonneeComplementaire findOneByLieuOuverturePlis(string $lieu_ouverture_plis) Return the first CommonTDonneeComplementaire filtered by the lieu_ouverture_plis column
 * @method CommonTDonneeComplementaire findOneByPiecesDossierAdmin(string $pieces_dossier_admin) Return the first CommonTDonneeComplementaire filtered by the pieces_dossier_admin column
 * @method CommonTDonneeComplementaire findOneByIdTrPiecesDossierAdmin(int $id_tr_pieces_dossier_admin) Return the first CommonTDonneeComplementaire filtered by the id_tr_pieces_dossier_admin column
 * @method CommonTDonneeComplementaire findOneByPiecesDossierTech(string $pieces_dossier_tech) Return the first CommonTDonneeComplementaire filtered by the pieces_dossier_tech column
 * @method CommonTDonneeComplementaire findOneByIdTrPiecesDossierTech(int $id_tr_pieces_dossier_tech) Return the first CommonTDonneeComplementaire filtered by the id_tr_pieces_dossier_tech column
 * @method CommonTDonneeComplementaire findOneByPiecesDossierAdditif(string $pieces_dossier_additif) Return the first CommonTDonneeComplementaire filtered by the pieces_dossier_additif column
 * @method CommonTDonneeComplementaire findOneByIdTrPiecesDossierAdditif(int $id_tr_pieces_dossier_additif) Return the first CommonTDonneeComplementaire filtered by the id_tr_pieces_dossier_additif column
 * @method CommonTDonneeComplementaire findOneByIdTrAdresseRetraisDossiers(int $id_tr_adresse_retrais_dossiers) Return the first CommonTDonneeComplementaire filtered by the id_tr_adresse_retrais_dossiers column
 * @method CommonTDonneeComplementaire findOneByIdTrAdresseDepotOffres(int $id_tr_adresse_depot_offres) Return the first CommonTDonneeComplementaire filtered by the id_tr_adresse_depot_offres column
 * @method CommonTDonneeComplementaire findOneByIdTrLieuOuverturePlis(int $id_tr_lieu_ouverture_plis) Return the first CommonTDonneeComplementaire filtered by the id_tr_lieu_ouverture_plis column
 * @method CommonTDonneeComplementaire findOneByCautionProvisoire(string $caution_provisoire) Return the first CommonTDonneeComplementaire filtered by the caution_provisoire column
 * @method CommonTDonneeComplementaire findOneByPrixAquisitionPlans(string $prix_aquisition_plans) Return the first CommonTDonneeComplementaire filtered by the prix_aquisition_plans column
 * @method CommonTDonneeComplementaire findOneByAddEchantillon(string $add_echantillon) Return the first CommonTDonneeComplementaire filtered by the add_echantillon column
 * @method CommonTDonneeComplementaire findOneByIdTrAddEchantillon(int $id_tr_add_echantillon) Return the first CommonTDonneeComplementaire filtered by the id_tr_add_echantillon column
 * @method CommonTDonneeComplementaire findOneByDateLimiteEchantillon(string $date_limite_echantillon) Return the first CommonTDonneeComplementaire filtered by the date_limite_echantillon column
 * @method CommonTDonneeComplementaire findOneByAddReunion(string $add_reunion) Return the first CommonTDonneeComplementaire filtered by the add_reunion column
 * @method CommonTDonneeComplementaire findOneByIdTrAddReunion(int $id_tr_add_reunion) Return the first CommonTDonneeComplementaire filtered by the id_tr_add_reunion column
 * @method CommonTDonneeComplementaire findOneByDateReunion(string $date_reunion) Return the first CommonTDonneeComplementaire filtered by the date_reunion column
 * @method CommonTDonneeComplementaire findOneByReunion(string $reunion) Return the first CommonTDonneeComplementaire filtered by the reunion column
 * @method CommonTDonneeComplementaire findOneByVisitesLieux(string $visites_lieux) Return the first CommonTDonneeComplementaire filtered by the visites_lieux column
 * @method CommonTDonneeComplementaire findOneByEchantillon(string $echantillon) Return the first CommonTDonneeComplementaire filtered by the echantillon column
 * @method CommonTDonneeComplementaire findOneByVariantes(string $variantes) Return the first CommonTDonneeComplementaire filtered by the variantes column
 * @method CommonTDonneeComplementaire findOneByVarianteCalcule(string $variante_calcule) Return the first CommonTDonneeComplementaire filtered by the variante_calcule column
 * @method CommonTDonneeComplementaire findOneByCriteresIdentiques(string $criteres_identiques) Return the first CommonTDonneeComplementaire filtered by the criteres_identiques column
 * @method CommonTDonneeComplementaire findOneByDateExpressionBesoin(string $date_expression_besoin) Return the first CommonTDonneeComplementaire filtered by the date_expression_besoin column
 * @method CommonTDonneeComplementaire findOneByIdRefContact1(int $id_ref_contact_1) Return the first CommonTDonneeComplementaire filtered by the id_ref_contact_1 column
 * @method CommonTDonneeComplementaire findOneByIdRefContact2(int $id_ref_contact_2) Return the first CommonTDonneeComplementaire filtered by the id_ref_contact_2 column
 *
 * @method array findByIdDonneeComplementaire(int $id_donnee_complementaire) Return CommonTDonneeComplementaire objects filtered by the id_donnee_complementaire column
 * @method array findByIdTrancheTypePrix(int $id_tranche_type_prix) Return CommonTDonneeComplementaire objects filtered by the id_tranche_type_prix column
 * @method array findByIdFormePrix(int $id_forme_prix) Return CommonTDonneeComplementaire objects filtered by the id_forme_prix column
 * @method array findByIdCcagReference(int $id_ccag_reference) Return CommonTDonneeComplementaire objects filtered by the id_ccag_reference column
 * @method array findByReconductible(boolean $reconductible) Return CommonTDonneeComplementaire objects filtered by the reconductible column
 * @method array findByNombreReconductions(int $nombre_reconductions) Return CommonTDonneeComplementaire objects filtered by the nombre_reconductions column
 * @method array findByModalitesReconduction(string $modalites_reconduction) Return CommonTDonneeComplementaire objects filtered by the modalites_reconduction column
 * @method array findByVariantesAutorisees(boolean $variantes_autorisees) Return CommonTDonneeComplementaire objects filtered by the variantes_autorisees column
 * @method array findByVariantesTechniquesObligatoires(boolean $variantes_techniques_obligatoires) Return CommonTDonneeComplementaire objects filtered by the variantes_techniques_obligatoires column
 * @method array findByVariantesTechniquesDescription(string $variantes_techniques_description) Return CommonTDonneeComplementaire objects filtered by the variantes_techniques_description column
 * @method array findByDecompositionLotsTechniques(boolean $decomposition_lots_techniques) Return CommonTDonneeComplementaire objects filtered by the decomposition_lots_techniques column
 * @method array findByIdDureeDelaiDescription(int $id_duree_delai_description) Return CommonTDonneeComplementaire objects filtered by the id_duree_delai_description column
 * @method array findByEstimationPfAttPressenti(string $estimation_pf_att_pressenti) Return CommonTDonneeComplementaire objects filtered by the estimation_pf_att_pressenti column
 * @method array findByEstimationBcMinAttPressenti(string $estimation_bc_min_att_pressenti) Return CommonTDonneeComplementaire objects filtered by the estimation_bc_min_att_pressenti column
 * @method array findByEstimationBcMaxAttPressenti(string $estimation_bc_max_att_pressenti) Return CommonTDonneeComplementaire objects filtered by the estimation_bc_max_att_pressenti column
 * @method array findByEstimationPfTabOuvOffre(string $estimation_pf_tab_ouv_offre) Return CommonTDonneeComplementaire objects filtered by the estimation_pf_tab_ouv_offre column
 * @method array findByEstimationDqeTabOuvOffre(string $estimation_dqe_tab_ouv_offre) Return CommonTDonneeComplementaire objects filtered by the estimation_dqe_tab_ouv_offre column
 * @method array findByAvisAttributionPresent(boolean $avis_attribution_present) Return CommonTDonneeComplementaire objects filtered by the avis_attribution_present column
 * @method array findByEstimationPfPreinscription(string $estimation_pf_preinscription) Return CommonTDonneeComplementaire objects filtered by the estimation_pf_preinscription column
 * @method array findByEstimationBcMinPreinscription(string $estimation_bc_min_preinscription) Return CommonTDonneeComplementaire objects filtered by the estimation_bc_min_preinscription column
 * @method array findByEstimationBcMaxPreinscription(string $estimation_bc_max_preinscription) Return CommonTDonneeComplementaire objects filtered by the estimation_bc_max_preinscription column
 * @method array findByEstimationDateValeurPreinscription(string $estimation_date_valeur_preinscription) Return CommonTDonneeComplementaire objects filtered by the estimation_date_valeur_preinscription column
 * @method array findByLieuExecution(string $lieu_execution) Return CommonTDonneeComplementaire objects filtered by the lieu_execution column
 * @method array findByDureeMarche(int $duree_marche) Return CommonTDonneeComplementaire objects filtered by the duree_marche column
 * @method array findByDureeDateDebut(string $duree_date_debut) Return CommonTDonneeComplementaire objects filtered by the duree_date_debut column
 * @method array findByDureeDateFin(string $duree_date_fin) Return CommonTDonneeComplementaire objects filtered by the duree_date_fin column
 * @method array findByDureeDescription(string $duree_description) Return CommonTDonneeComplementaire objects filtered by the duree_description column
 * @method array findByIdChoixMoisJour(int $id_choix_mois_jour) Return CommonTDonneeComplementaire objects filtered by the id_choix_mois_jour column
 * @method array findByIdUnite(int $id_unite) Return CommonTDonneeComplementaire objects filtered by the id_unite column
 * @method array findByIdNbCandidatsAdmis(int $id_nb_candidats_admis) Return CommonTDonneeComplementaire objects filtered by the id_nb_candidats_admis column
 * @method array findByNombreCandidatsFixe(int $nombre_candidats_fixe) Return CommonTDonneeComplementaire objects filtered by the nombre_candidats_fixe column
 * @method array findByNombreCandidatsMin(int $nombre_candidats_min) Return CommonTDonneeComplementaire objects filtered by the nombre_candidats_min column
 * @method array findByNombreCandidatsMax(int $nombre_candidats_max) Return CommonTDonneeComplementaire objects filtered by the nombre_candidats_max column
 * @method array findByDelaiValiditeOffres(int $delai_validite_offres) Return CommonTDonneeComplementaire objects filtered by the delai_validite_offres column
 * @method array findByPhaseSuccessive(boolean $phase_successive) Return CommonTDonneeComplementaire objects filtered by the phase_successive column
 * @method array findByIdGroupementAttributaire(int $id_groupement_attributaire) Return CommonTDonneeComplementaire objects filtered by the id_groupement_attributaire column
 * @method array findByIdCritereAttribution(int $id_critere_attribution) Return CommonTDonneeComplementaire objects filtered by the id_critere_attribution column
 * @method array findByTypePrestation(int $type_prestation) Return CommonTDonneeComplementaire objects filtered by the type_prestation column
 * @method array findByDelaiPartiel(string $delai_partiel) Return CommonTDonneeComplementaire objects filtered by the delai_partiel column
 * @method array findByAdresseRetraisDossiers(string $adresse_retrais_dossiers) Return CommonTDonneeComplementaire objects filtered by the adresse_retrais_dossiers column
 * @method array findByAdresseDepotOffres(string $adresse_depot_offres) Return CommonTDonneeComplementaire objects filtered by the adresse_depot_offres column
 * @method array findByLieuOuverturePlis(string $lieu_ouverture_plis) Return CommonTDonneeComplementaire objects filtered by the lieu_ouverture_plis column
 * @method array findByPiecesDossierAdmin(string $pieces_dossier_admin) Return CommonTDonneeComplementaire objects filtered by the pieces_dossier_admin column
 * @method array findByIdTrPiecesDossierAdmin(int $id_tr_pieces_dossier_admin) Return CommonTDonneeComplementaire objects filtered by the id_tr_pieces_dossier_admin column
 * @method array findByPiecesDossierTech(string $pieces_dossier_tech) Return CommonTDonneeComplementaire objects filtered by the pieces_dossier_tech column
 * @method array findByIdTrPiecesDossierTech(int $id_tr_pieces_dossier_tech) Return CommonTDonneeComplementaire objects filtered by the id_tr_pieces_dossier_tech column
 * @method array findByPiecesDossierAdditif(string $pieces_dossier_additif) Return CommonTDonneeComplementaire objects filtered by the pieces_dossier_additif column
 * @method array findByIdTrPiecesDossierAdditif(int $id_tr_pieces_dossier_additif) Return CommonTDonneeComplementaire objects filtered by the id_tr_pieces_dossier_additif column
 * @method array findByIdTrAdresseRetraisDossiers(int $id_tr_adresse_retrais_dossiers) Return CommonTDonneeComplementaire objects filtered by the id_tr_adresse_retrais_dossiers column
 * @method array findByIdTrAdresseDepotOffres(int $id_tr_adresse_depot_offres) Return CommonTDonneeComplementaire objects filtered by the id_tr_adresse_depot_offres column
 * @method array findByIdTrLieuOuverturePlis(int $id_tr_lieu_ouverture_plis) Return CommonTDonneeComplementaire objects filtered by the id_tr_lieu_ouverture_plis column
 * @method array findByCautionProvisoire(string $caution_provisoire) Return CommonTDonneeComplementaire objects filtered by the caution_provisoire column
 * @method array findByPrixAquisitionPlans(string $prix_aquisition_plans) Return CommonTDonneeComplementaire objects filtered by the prix_aquisition_plans column
 * @method array findByAddEchantillon(string $add_echantillon) Return CommonTDonneeComplementaire objects filtered by the add_echantillon column
 * @method array findByIdTrAddEchantillon(int $id_tr_add_echantillon) Return CommonTDonneeComplementaire objects filtered by the id_tr_add_echantillon column
 * @method array findByDateLimiteEchantillon(string $date_limite_echantillon) Return CommonTDonneeComplementaire objects filtered by the date_limite_echantillon column
 * @method array findByAddReunion(string $add_reunion) Return CommonTDonneeComplementaire objects filtered by the add_reunion column
 * @method array findByIdTrAddReunion(int $id_tr_add_reunion) Return CommonTDonneeComplementaire objects filtered by the id_tr_add_reunion column
 * @method array findByDateReunion(string $date_reunion) Return CommonTDonneeComplementaire objects filtered by the date_reunion column
 * @method array findByReunion(string $reunion) Return CommonTDonneeComplementaire objects filtered by the reunion column
 * @method array findByVisitesLieux(string $visites_lieux) Return CommonTDonneeComplementaire objects filtered by the visites_lieux column
 * @method array findByEchantillon(string $echantillon) Return CommonTDonneeComplementaire objects filtered by the echantillon column
 * @method array findByVariantes(string $variantes) Return CommonTDonneeComplementaire objects filtered by the variantes column
 * @method array findByVarianteCalcule(string $variante_calcule) Return CommonTDonneeComplementaire objects filtered by the variante_calcule column
 * @method array findByCriteresIdentiques(string $criteres_identiques) Return CommonTDonneeComplementaire objects filtered by the criteres_identiques column
 * @method array findByDateExpressionBesoin(string $date_expression_besoin) Return CommonTDonneeComplementaire objects filtered by the date_expression_besoin column
 * @method array findByIdRefContact1(int $id_ref_contact_1) Return CommonTDonneeComplementaire objects filtered by the id_ref_contact_1 column
 * @method array findByIdRefContact2(int $id_ref_contact_2) Return CommonTDonneeComplementaire objects filtered by the id_ref_contact_2 column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTDonneeComplementaireQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTDonneeComplementaireQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTDonneeComplementaire', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTDonneeComplementaireQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTDonneeComplementaireQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTDonneeComplementaireQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTDonneeComplementaireQuery) {
            return $criteria;
        }
        $query = new CommonTDonneeComplementaireQuery();
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
     * @return   CommonTDonneeComplementaire|CommonTDonneeComplementaire[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTDonneeComplementairePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTDonneeComplementairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTDonneeComplementaire A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdDonneeComplementaire($key, $con = null)
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
     * @return                 CommonTDonneeComplementaire A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_donnee_complementaire`, `id_tranche_type_prix`, `id_forme_prix`, `id_ccag_reference`, `reconductible`, `nombre_reconductions`, `modalites_reconduction`, `variantes_autorisees`, `variantes_techniques_obligatoires`, `variantes_techniques_description`, `decomposition_lots_techniques`, `id_duree_delai_description`, `estimation_pf_att_pressenti`, `estimation_bc_min_att_pressenti`, `estimation_bc_max_att_pressenti`, `estimation_pf_tab_ouv_offre`, `estimation_dqe_tab_ouv_offre`, `avis_attribution_present`, `estimation_pf_preinscription`, `estimation_bc_min_preinscription`, `estimation_bc_max_preinscription`, `estimation_date_valeur_preinscription`, `lieu_execution`, `duree_marche`, `duree_date_debut`, `duree_date_fin`, `duree_description`, `id_choix_mois_jour`, `id_unite`, `id_nb_candidats_admis`, `nombre_candidats_fixe`, `nombre_candidats_min`, `nombre_candidats_max`, `delai_validite_offres`, `phase_successive`, `id_groupement_attributaire`, `id_critere_attribution`, `type_prestation`, `delai_partiel`, `adresse_retrais_dossiers`, `adresse_depot_offres`, `lieu_ouverture_plis`, `pieces_dossier_admin`, `id_tr_pieces_dossier_admin`, `pieces_dossier_tech`, `id_tr_pieces_dossier_tech`, `pieces_dossier_additif`, `id_tr_pieces_dossier_additif`, `id_tr_adresse_retrais_dossiers`, `id_tr_adresse_depot_offres`, `id_tr_lieu_ouverture_plis`, `caution_provisoire`, `prix_aquisition_plans`, `add_echantillon`, `id_tr_add_echantillon`, `date_limite_echantillon`, `add_reunion`, `id_tr_add_reunion`, `date_reunion`, `reunion`, `visites_lieux`, `echantillon`, `variantes`, `variante_calcule`, `criteres_identiques`, `date_expression_besoin`, `id_ref_contact_1`, `id_ref_contact_2` FROM `t_donnee_complementaire` WHERE `id_donnee_complementaire` = :p0';
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
            $obj = new CommonTDonneeComplementaire();
            $obj->hydrate($row);
            CommonTDonneeComplementairePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonTDonneeComplementaire|CommonTDonneeComplementaire[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTDonneeComplementaire[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_DONNEE_COMPLEMENTAIRE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_DONNEE_COMPLEMENTAIRE, $keys, Criteria::IN);
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
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByIdDonneeComplementaire($idDonneeComplementaire = null, $comparison = null)
    {
        if (is_array($idDonneeComplementaire)) {
            $useMinMax = false;
            if (isset($idDonneeComplementaire['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_DONNEE_COMPLEMENTAIRE, $idDonneeComplementaire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDonneeComplementaire['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_DONNEE_COMPLEMENTAIRE, $idDonneeComplementaire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_DONNEE_COMPLEMENTAIRE, $idDonneeComplementaire, $comparison);
    }

    /**
     * Filter the query on the id_tranche_type_prix column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTrancheTypePrix(1234); // WHERE id_tranche_type_prix = 1234
     * $query->filterByIdTrancheTypePrix(array(12, 34)); // WHERE id_tranche_type_prix IN (12, 34)
     * $query->filterByIdTrancheTypePrix(array('min' => 12)); // WHERE id_tranche_type_prix >= 12
     * $query->filterByIdTrancheTypePrix(array('max' => 12)); // WHERE id_tranche_type_prix <= 12
     * </code>
     *
     * @param     mixed $idTrancheTypePrix The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByIdTrancheTypePrix($idTrancheTypePrix = null, $comparison = null)
    {
        if (is_array($idTrancheTypePrix)) {
            $useMinMax = false;
            if (isset($idTrancheTypePrix['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_TRANCHE_TYPE_PRIX, $idTrancheTypePrix['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTrancheTypePrix['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_TRANCHE_TYPE_PRIX, $idTrancheTypePrix['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_TRANCHE_TYPE_PRIX, $idTrancheTypePrix, $comparison);
    }

    /**
     * Filter the query on the id_forme_prix column
     *
     * Example usage:
     * <code>
     * $query->filterByIdFormePrix(1234); // WHERE id_forme_prix = 1234
     * $query->filterByIdFormePrix(array(12, 34)); // WHERE id_forme_prix IN (12, 34)
     * $query->filterByIdFormePrix(array('min' => 12)); // WHERE id_forme_prix >= 12
     * $query->filterByIdFormePrix(array('max' => 12)); // WHERE id_forme_prix <= 12
     * </code>
     *
     * @param     mixed $idFormePrix The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByIdFormePrix($idFormePrix = null, $comparison = null)
    {
        if (is_array($idFormePrix)) {
            $useMinMax = false;
            if (isset($idFormePrix['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_FORME_PRIX, $idFormePrix['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idFormePrix['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_FORME_PRIX, $idFormePrix['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_FORME_PRIX, $idFormePrix, $comparison);
    }

    /**
     * Filter the query on the id_ccag_reference column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCcagReference(1234); // WHERE id_ccag_reference = 1234
     * $query->filterByIdCcagReference(array(12, 34)); // WHERE id_ccag_reference IN (12, 34)
     * $query->filterByIdCcagReference(array('min' => 12)); // WHERE id_ccag_reference >= 12
     * $query->filterByIdCcagReference(array('max' => 12)); // WHERE id_ccag_reference <= 12
     * </code>
     *
     * @param     mixed $idCcagReference The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByIdCcagReference($idCcagReference = null, $comparison = null)
    {
        if (is_array($idCcagReference)) {
            $useMinMax = false;
            if (isset($idCcagReference['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_CCAG_REFERENCE, $idCcagReference['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCcagReference['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_CCAG_REFERENCE, $idCcagReference['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_CCAG_REFERENCE, $idCcagReference, $comparison);
    }

    /**
     * Filter the query on the reconductible column
     *
     * Example usage:
     * <code>
     * $query->filterByReconductible(true); // WHERE reconductible = true
     * $query->filterByReconductible('yes'); // WHERE reconductible = true
     * </code>
     *
     * @param     boolean|string $reconductible The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByReconductible($reconductible = null, $comparison = null)
    {
        if (is_string($reconductible)) {
            $reconductible = in_array(strtolower($reconductible), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::RECONDUCTIBLE, $reconductible, $comparison);
    }

    /**
     * Filter the query on the nombre_reconductions column
     *
     * Example usage:
     * <code>
     * $query->filterByNombreReconductions(1234); // WHERE nombre_reconductions = 1234
     * $query->filterByNombreReconductions(array(12, 34)); // WHERE nombre_reconductions IN (12, 34)
     * $query->filterByNombreReconductions(array('min' => 12)); // WHERE nombre_reconductions >= 12
     * $query->filterByNombreReconductions(array('max' => 12)); // WHERE nombre_reconductions <= 12
     * </code>
     *
     * @param     mixed $nombreReconductions The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByNombreReconductions($nombreReconductions = null, $comparison = null)
    {
        if (is_array($nombreReconductions)) {
            $useMinMax = false;
            if (isset($nombreReconductions['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::NOMBRE_RECONDUCTIONS, $nombreReconductions['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nombreReconductions['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::NOMBRE_RECONDUCTIONS, $nombreReconductions['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::NOMBRE_RECONDUCTIONS, $nombreReconductions, $comparison);
    }

    /**
     * Filter the query on the modalites_reconduction column
     *
     * Example usage:
     * <code>
     * $query->filterByModalitesReconduction('fooValue');   // WHERE modalites_reconduction = 'fooValue'
     * $query->filterByModalitesReconduction('%fooValue%'); // WHERE modalites_reconduction LIKE '%fooValue%'
     * </code>
     *
     * @param     string $modalitesReconduction The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByModalitesReconduction($modalitesReconduction = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modalitesReconduction)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $modalitesReconduction)) {
                $modalitesReconduction = str_replace('*', '%', $modalitesReconduction);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::MODALITES_RECONDUCTION, $modalitesReconduction, $comparison);
    }

    /**
     * Filter the query on the variantes_autorisees column
     *
     * Example usage:
     * <code>
     * $query->filterByVariantesAutorisees(true); // WHERE variantes_autorisees = true
     * $query->filterByVariantesAutorisees('yes'); // WHERE variantes_autorisees = true
     * </code>
     *
     * @param     boolean|string $variantesAutorisees The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByVariantesAutorisees($variantesAutorisees = null, $comparison = null)
    {
        if (is_string($variantesAutorisees)) {
            $variantesAutorisees = in_array(strtolower($variantesAutorisees), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::VARIANTES_AUTORISEES, $variantesAutorisees, $comparison);
    }

    /**
     * Filter the query on the variantes_techniques_obligatoires column
     *
     * Example usage:
     * <code>
     * $query->filterByVariantesTechniquesObligatoires(true); // WHERE variantes_techniques_obligatoires = true
     * $query->filterByVariantesTechniquesObligatoires('yes'); // WHERE variantes_techniques_obligatoires = true
     * </code>
     *
     * @param     boolean|string $variantesTechniquesObligatoires The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByVariantesTechniquesObligatoires($variantesTechniquesObligatoires = null, $comparison = null)
    {
        if (is_string($variantesTechniquesObligatoires)) {
            $variantesTechniquesObligatoires = in_array(strtolower($variantesTechniquesObligatoires), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::VARIANTES_TECHNIQUES_OBLIGATOIRES, $variantesTechniquesObligatoires, $comparison);
    }

    /**
     * Filter the query on the variantes_techniques_description column
     *
     * Example usage:
     * <code>
     * $query->filterByVariantesTechniquesDescription('fooValue');   // WHERE variantes_techniques_description = 'fooValue'
     * $query->filterByVariantesTechniquesDescription('%fooValue%'); // WHERE variantes_techniques_description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $variantesTechniquesDescription The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByVariantesTechniquesDescription($variantesTechniquesDescription = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($variantesTechniquesDescription)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $variantesTechniquesDescription)) {
                $variantesTechniquesDescription = str_replace('*', '%', $variantesTechniquesDescription);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::VARIANTES_TECHNIQUES_DESCRIPTION, $variantesTechniquesDescription, $comparison);
    }

    /**
     * Filter the query on the decomposition_lots_techniques column
     *
     * Example usage:
     * <code>
     * $query->filterByDecompositionLotsTechniques(true); // WHERE decomposition_lots_techniques = true
     * $query->filterByDecompositionLotsTechniques('yes'); // WHERE decomposition_lots_techniques = true
     * </code>
     *
     * @param     boolean|string $decompositionLotsTechniques The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByDecompositionLotsTechniques($decompositionLotsTechniques = null, $comparison = null)
    {
        if (is_string($decompositionLotsTechniques)) {
            $decompositionLotsTechniques = in_array(strtolower($decompositionLotsTechniques), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::DECOMPOSITION_LOTS_TECHNIQUES, $decompositionLotsTechniques, $comparison);
    }

    /**
     * Filter the query on the id_duree_delai_description column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDureeDelaiDescription(1234); // WHERE id_duree_delai_description = 1234
     * $query->filterByIdDureeDelaiDescription(array(12, 34)); // WHERE id_duree_delai_description IN (12, 34)
     * $query->filterByIdDureeDelaiDescription(array('min' => 12)); // WHERE id_duree_delai_description >= 12
     * $query->filterByIdDureeDelaiDescription(array('max' => 12)); // WHERE id_duree_delai_description <= 12
     * </code>
     *
     * @param     mixed $idDureeDelaiDescription The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByIdDureeDelaiDescription($idDureeDelaiDescription = null, $comparison = null)
    {
        if (is_array($idDureeDelaiDescription)) {
            $useMinMax = false;
            if (isset($idDureeDelaiDescription['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_DUREE_DELAI_DESCRIPTION, $idDureeDelaiDescription['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDureeDelaiDescription['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_DUREE_DELAI_DESCRIPTION, $idDureeDelaiDescription['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_DUREE_DELAI_DESCRIPTION, $idDureeDelaiDescription, $comparison);
    }

    /**
     * Filter the query on the estimation_pf_att_pressenti column
     *
     * Example usage:
     * <code>
     * $query->filterByEstimationPfAttPressenti(1234); // WHERE estimation_pf_att_pressenti = 1234
     * $query->filterByEstimationPfAttPressenti(array(12, 34)); // WHERE estimation_pf_att_pressenti IN (12, 34)
     * $query->filterByEstimationPfAttPressenti(array('min' => 12)); // WHERE estimation_pf_att_pressenti >= 12
     * $query->filterByEstimationPfAttPressenti(array('max' => 12)); // WHERE estimation_pf_att_pressenti <= 12
     * </code>
     *
     * @param     mixed $estimationPfAttPressenti The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByEstimationPfAttPressenti($estimationPfAttPressenti = null, $comparison = null)
    {
        if (is_array($estimationPfAttPressenti)) {
            $useMinMax = false;
            if (isset($estimationPfAttPressenti['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ESTIMATION_PF_ATT_PRESSENTI, $estimationPfAttPressenti['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($estimationPfAttPressenti['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ESTIMATION_PF_ATT_PRESSENTI, $estimationPfAttPressenti['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::ESTIMATION_PF_ATT_PRESSENTI, $estimationPfAttPressenti, $comparison);
    }

    /**
     * Filter the query on the estimation_bc_min_att_pressenti column
     *
     * Example usage:
     * <code>
     * $query->filterByEstimationBcMinAttPressenti(1234); // WHERE estimation_bc_min_att_pressenti = 1234
     * $query->filterByEstimationBcMinAttPressenti(array(12, 34)); // WHERE estimation_bc_min_att_pressenti IN (12, 34)
     * $query->filterByEstimationBcMinAttPressenti(array('min' => 12)); // WHERE estimation_bc_min_att_pressenti >= 12
     * $query->filterByEstimationBcMinAttPressenti(array('max' => 12)); // WHERE estimation_bc_min_att_pressenti <= 12
     * </code>
     *
     * @param     mixed $estimationBcMinAttPressenti The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByEstimationBcMinAttPressenti($estimationBcMinAttPressenti = null, $comparison = null)
    {
        if (is_array($estimationBcMinAttPressenti)) {
            $useMinMax = false;
            if (isset($estimationBcMinAttPressenti['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ESTIMATION_BC_MIN_ATT_PRESSENTI, $estimationBcMinAttPressenti['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($estimationBcMinAttPressenti['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ESTIMATION_BC_MIN_ATT_PRESSENTI, $estimationBcMinAttPressenti['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::ESTIMATION_BC_MIN_ATT_PRESSENTI, $estimationBcMinAttPressenti, $comparison);
    }

    /**
     * Filter the query on the estimation_bc_max_att_pressenti column
     *
     * Example usage:
     * <code>
     * $query->filterByEstimationBcMaxAttPressenti(1234); // WHERE estimation_bc_max_att_pressenti = 1234
     * $query->filterByEstimationBcMaxAttPressenti(array(12, 34)); // WHERE estimation_bc_max_att_pressenti IN (12, 34)
     * $query->filterByEstimationBcMaxAttPressenti(array('min' => 12)); // WHERE estimation_bc_max_att_pressenti >= 12
     * $query->filterByEstimationBcMaxAttPressenti(array('max' => 12)); // WHERE estimation_bc_max_att_pressenti <= 12
     * </code>
     *
     * @param     mixed $estimationBcMaxAttPressenti The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByEstimationBcMaxAttPressenti($estimationBcMaxAttPressenti = null, $comparison = null)
    {
        if (is_array($estimationBcMaxAttPressenti)) {
            $useMinMax = false;
            if (isset($estimationBcMaxAttPressenti['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ESTIMATION_BC_MAX_ATT_PRESSENTI, $estimationBcMaxAttPressenti['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($estimationBcMaxAttPressenti['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ESTIMATION_BC_MAX_ATT_PRESSENTI, $estimationBcMaxAttPressenti['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::ESTIMATION_BC_MAX_ATT_PRESSENTI, $estimationBcMaxAttPressenti, $comparison);
    }

    /**
     * Filter the query on the estimation_pf_tab_ouv_offre column
     *
     * Example usage:
     * <code>
     * $query->filterByEstimationPfTabOuvOffre(1234); // WHERE estimation_pf_tab_ouv_offre = 1234
     * $query->filterByEstimationPfTabOuvOffre(array(12, 34)); // WHERE estimation_pf_tab_ouv_offre IN (12, 34)
     * $query->filterByEstimationPfTabOuvOffre(array('min' => 12)); // WHERE estimation_pf_tab_ouv_offre >= 12
     * $query->filterByEstimationPfTabOuvOffre(array('max' => 12)); // WHERE estimation_pf_tab_ouv_offre <= 12
     * </code>
     *
     * @param     mixed $estimationPfTabOuvOffre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByEstimationPfTabOuvOffre($estimationPfTabOuvOffre = null, $comparison = null)
    {
        if (is_array($estimationPfTabOuvOffre)) {
            $useMinMax = false;
            if (isset($estimationPfTabOuvOffre['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ESTIMATION_PF_TAB_OUV_OFFRE, $estimationPfTabOuvOffre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($estimationPfTabOuvOffre['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ESTIMATION_PF_TAB_OUV_OFFRE, $estimationPfTabOuvOffre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::ESTIMATION_PF_TAB_OUV_OFFRE, $estimationPfTabOuvOffre, $comparison);
    }

    /**
     * Filter the query on the estimation_dqe_tab_ouv_offre column
     *
     * Example usage:
     * <code>
     * $query->filterByEstimationDqeTabOuvOffre(1234); // WHERE estimation_dqe_tab_ouv_offre = 1234
     * $query->filterByEstimationDqeTabOuvOffre(array(12, 34)); // WHERE estimation_dqe_tab_ouv_offre IN (12, 34)
     * $query->filterByEstimationDqeTabOuvOffre(array('min' => 12)); // WHERE estimation_dqe_tab_ouv_offre >= 12
     * $query->filterByEstimationDqeTabOuvOffre(array('max' => 12)); // WHERE estimation_dqe_tab_ouv_offre <= 12
     * </code>
     *
     * @param     mixed $estimationDqeTabOuvOffre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByEstimationDqeTabOuvOffre($estimationDqeTabOuvOffre = null, $comparison = null)
    {
        if (is_array($estimationDqeTabOuvOffre)) {
            $useMinMax = false;
            if (isset($estimationDqeTabOuvOffre['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ESTIMATION_DQE_TAB_OUV_OFFRE, $estimationDqeTabOuvOffre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($estimationDqeTabOuvOffre['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ESTIMATION_DQE_TAB_OUV_OFFRE, $estimationDqeTabOuvOffre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::ESTIMATION_DQE_TAB_OUV_OFFRE, $estimationDqeTabOuvOffre, $comparison);
    }

    /**
     * Filter the query on the avis_attribution_present column
     *
     * Example usage:
     * <code>
     * $query->filterByAvisAttributionPresent(true); // WHERE avis_attribution_present = true
     * $query->filterByAvisAttributionPresent('yes'); // WHERE avis_attribution_present = true
     * </code>
     *
     * @param     boolean|string $avisAttributionPresent The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByAvisAttributionPresent($avisAttributionPresent = null, $comparison = null)
    {
        if (is_string($avisAttributionPresent)) {
            $avisAttributionPresent = in_array(strtolower($avisAttributionPresent), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::AVIS_ATTRIBUTION_PRESENT, $avisAttributionPresent, $comparison);
    }

    /**
     * Filter the query on the estimation_pf_preinscription column
     *
     * Example usage:
     * <code>
     * $query->filterByEstimationPfPreinscription(1234); // WHERE estimation_pf_preinscription = 1234
     * $query->filterByEstimationPfPreinscription(array(12, 34)); // WHERE estimation_pf_preinscription IN (12, 34)
     * $query->filterByEstimationPfPreinscription(array('min' => 12)); // WHERE estimation_pf_preinscription >= 12
     * $query->filterByEstimationPfPreinscription(array('max' => 12)); // WHERE estimation_pf_preinscription <= 12
     * </code>
     *
     * @param     mixed $estimationPfPreinscription The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByEstimationPfPreinscription($estimationPfPreinscription = null, $comparison = null)
    {
        if (is_array($estimationPfPreinscription)) {
            $useMinMax = false;
            if (isset($estimationPfPreinscription['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ESTIMATION_PF_PREINSCRIPTION, $estimationPfPreinscription['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($estimationPfPreinscription['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ESTIMATION_PF_PREINSCRIPTION, $estimationPfPreinscription['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::ESTIMATION_PF_PREINSCRIPTION, $estimationPfPreinscription, $comparison);
    }

    /**
     * Filter the query on the estimation_bc_min_preinscription column
     *
     * Example usage:
     * <code>
     * $query->filterByEstimationBcMinPreinscription(1234); // WHERE estimation_bc_min_preinscription = 1234
     * $query->filterByEstimationBcMinPreinscription(array(12, 34)); // WHERE estimation_bc_min_preinscription IN (12, 34)
     * $query->filterByEstimationBcMinPreinscription(array('min' => 12)); // WHERE estimation_bc_min_preinscription >= 12
     * $query->filterByEstimationBcMinPreinscription(array('max' => 12)); // WHERE estimation_bc_min_preinscription <= 12
     * </code>
     *
     * @param     mixed $estimationBcMinPreinscription The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByEstimationBcMinPreinscription($estimationBcMinPreinscription = null, $comparison = null)
    {
        if (is_array($estimationBcMinPreinscription)) {
            $useMinMax = false;
            if (isset($estimationBcMinPreinscription['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ESTIMATION_BC_MIN_PREINSCRIPTION, $estimationBcMinPreinscription['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($estimationBcMinPreinscription['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ESTIMATION_BC_MIN_PREINSCRIPTION, $estimationBcMinPreinscription['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::ESTIMATION_BC_MIN_PREINSCRIPTION, $estimationBcMinPreinscription, $comparison);
    }

    /**
     * Filter the query on the estimation_bc_max_preinscription column
     *
     * Example usage:
     * <code>
     * $query->filterByEstimationBcMaxPreinscription(1234); // WHERE estimation_bc_max_preinscription = 1234
     * $query->filterByEstimationBcMaxPreinscription(array(12, 34)); // WHERE estimation_bc_max_preinscription IN (12, 34)
     * $query->filterByEstimationBcMaxPreinscription(array('min' => 12)); // WHERE estimation_bc_max_preinscription >= 12
     * $query->filterByEstimationBcMaxPreinscription(array('max' => 12)); // WHERE estimation_bc_max_preinscription <= 12
     * </code>
     *
     * @param     mixed $estimationBcMaxPreinscription The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByEstimationBcMaxPreinscription($estimationBcMaxPreinscription = null, $comparison = null)
    {
        if (is_array($estimationBcMaxPreinscription)) {
            $useMinMax = false;
            if (isset($estimationBcMaxPreinscription['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ESTIMATION_BC_MAX_PREINSCRIPTION, $estimationBcMaxPreinscription['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($estimationBcMaxPreinscription['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ESTIMATION_BC_MAX_PREINSCRIPTION, $estimationBcMaxPreinscription['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::ESTIMATION_BC_MAX_PREINSCRIPTION, $estimationBcMaxPreinscription, $comparison);
    }

    /**
     * Filter the query on the estimation_date_valeur_preinscription column
     *
     * Example usage:
     * <code>
     * $query->filterByEstimationDateValeurPreinscription('2011-03-14'); // WHERE estimation_date_valeur_preinscription = '2011-03-14'
     * $query->filterByEstimationDateValeurPreinscription('now'); // WHERE estimation_date_valeur_preinscription = '2011-03-14'
     * $query->filterByEstimationDateValeurPreinscription(array('max' => 'yesterday')); // WHERE estimation_date_valeur_preinscription > '2011-03-13'
     * </code>
     *
     * @param     mixed $estimationDateValeurPreinscription The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByEstimationDateValeurPreinscription($estimationDateValeurPreinscription = null, $comparison = null)
    {
        if (is_array($estimationDateValeurPreinscription)) {
            $useMinMax = false;
            if (isset($estimationDateValeurPreinscription['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ESTIMATION_DATE_VALEUR_PREINSCRIPTION, $estimationDateValeurPreinscription['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($estimationDateValeurPreinscription['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ESTIMATION_DATE_VALEUR_PREINSCRIPTION, $estimationDateValeurPreinscription['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::ESTIMATION_DATE_VALEUR_PREINSCRIPTION, $estimationDateValeurPreinscription, $comparison);
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
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::LIEU_EXECUTION, $lieuExecution, $comparison);
    }

    /**
     * Filter the query on the duree_marche column
     *
     * Example usage:
     * <code>
     * $query->filterByDureeMarche(1234); // WHERE duree_marche = 1234
     * $query->filterByDureeMarche(array(12, 34)); // WHERE duree_marche IN (12, 34)
     * $query->filterByDureeMarche(array('min' => 12)); // WHERE duree_marche >= 12
     * $query->filterByDureeMarche(array('max' => 12)); // WHERE duree_marche <= 12
     * </code>
     *
     * @param     mixed $dureeMarche The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByDureeMarche($dureeMarche = null, $comparison = null)
    {
        if (is_array($dureeMarche)) {
            $useMinMax = false;
            if (isset($dureeMarche['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::DUREE_MARCHE, $dureeMarche['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dureeMarche['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::DUREE_MARCHE, $dureeMarche['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::DUREE_MARCHE, $dureeMarche, $comparison);
    }

    /**
     * Filter the query on the duree_date_debut column
     *
     * Example usage:
     * <code>
     * $query->filterByDureeDateDebut('2011-03-14'); // WHERE duree_date_debut = '2011-03-14'
     * $query->filterByDureeDateDebut('now'); // WHERE duree_date_debut = '2011-03-14'
     * $query->filterByDureeDateDebut(array('max' => 'yesterday')); // WHERE duree_date_debut > '2011-03-13'
     * </code>
     *
     * @param     mixed $dureeDateDebut The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByDureeDateDebut($dureeDateDebut = null, $comparison = null)
    {
        if (is_array($dureeDateDebut)) {
            $useMinMax = false;
            if (isset($dureeDateDebut['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::DUREE_DATE_DEBUT, $dureeDateDebut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dureeDateDebut['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::DUREE_DATE_DEBUT, $dureeDateDebut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::DUREE_DATE_DEBUT, $dureeDateDebut, $comparison);
    }

    /**
     * Filter the query on the duree_date_fin column
     *
     * Example usage:
     * <code>
     * $query->filterByDureeDateFin('2011-03-14'); // WHERE duree_date_fin = '2011-03-14'
     * $query->filterByDureeDateFin('now'); // WHERE duree_date_fin = '2011-03-14'
     * $query->filterByDureeDateFin(array('max' => 'yesterday')); // WHERE duree_date_fin > '2011-03-13'
     * </code>
     *
     * @param     mixed $dureeDateFin The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByDureeDateFin($dureeDateFin = null, $comparison = null)
    {
        if (is_array($dureeDateFin)) {
            $useMinMax = false;
            if (isset($dureeDateFin['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::DUREE_DATE_FIN, $dureeDateFin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dureeDateFin['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::DUREE_DATE_FIN, $dureeDateFin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::DUREE_DATE_FIN, $dureeDateFin, $comparison);
    }

    /**
     * Filter the query on the duree_description column
     *
     * Example usage:
     * <code>
     * $query->filterByDureeDescription('fooValue');   // WHERE duree_description = 'fooValue'
     * $query->filterByDureeDescription('%fooValue%'); // WHERE duree_description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dureeDescription The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByDureeDescription($dureeDescription = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dureeDescription)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dureeDescription)) {
                $dureeDescription = str_replace('*', '%', $dureeDescription);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::DUREE_DESCRIPTION, $dureeDescription, $comparison);
    }

    /**
     * Filter the query on the id_choix_mois_jour column
     *
     * Example usage:
     * <code>
     * $query->filterByIdChoixMoisJour(1234); // WHERE id_choix_mois_jour = 1234
     * $query->filterByIdChoixMoisJour(array(12, 34)); // WHERE id_choix_mois_jour IN (12, 34)
     * $query->filterByIdChoixMoisJour(array('min' => 12)); // WHERE id_choix_mois_jour >= 12
     * $query->filterByIdChoixMoisJour(array('max' => 12)); // WHERE id_choix_mois_jour <= 12
     * </code>
     *
     * @param     mixed $idChoixMoisJour The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByIdChoixMoisJour($idChoixMoisJour = null, $comparison = null)
    {
        if (is_array($idChoixMoisJour)) {
            $useMinMax = false;
            if (isset($idChoixMoisJour['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_CHOIX_MOIS_JOUR, $idChoixMoisJour['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idChoixMoisJour['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_CHOIX_MOIS_JOUR, $idChoixMoisJour['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_CHOIX_MOIS_JOUR, $idChoixMoisJour, $comparison);
    }

    /**
     * Filter the query on the id_unite column
     *
     * Example usage:
     * <code>
     * $query->filterByIdUnite(1234); // WHERE id_unite = 1234
     * $query->filterByIdUnite(array(12, 34)); // WHERE id_unite IN (12, 34)
     * $query->filterByIdUnite(array('min' => 12)); // WHERE id_unite >= 12
     * $query->filterByIdUnite(array('max' => 12)); // WHERE id_unite <= 12
     * </code>
     *
     * @param     mixed $idUnite The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByIdUnite($idUnite = null, $comparison = null)
    {
        if (is_array($idUnite)) {
            $useMinMax = false;
            if (isset($idUnite['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_UNITE, $idUnite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idUnite['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_UNITE, $idUnite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_UNITE, $idUnite, $comparison);
    }

    /**
     * Filter the query on the id_nb_candidats_admis column
     *
     * Example usage:
     * <code>
     * $query->filterByIdNbCandidatsAdmis(1234); // WHERE id_nb_candidats_admis = 1234
     * $query->filterByIdNbCandidatsAdmis(array(12, 34)); // WHERE id_nb_candidats_admis IN (12, 34)
     * $query->filterByIdNbCandidatsAdmis(array('min' => 12)); // WHERE id_nb_candidats_admis >= 12
     * $query->filterByIdNbCandidatsAdmis(array('max' => 12)); // WHERE id_nb_candidats_admis <= 12
     * </code>
     *
     * @param     mixed $idNbCandidatsAdmis The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByIdNbCandidatsAdmis($idNbCandidatsAdmis = null, $comparison = null)
    {
        if (is_array($idNbCandidatsAdmis)) {
            $useMinMax = false;
            if (isset($idNbCandidatsAdmis['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_NB_CANDIDATS_ADMIS, $idNbCandidatsAdmis['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idNbCandidatsAdmis['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_NB_CANDIDATS_ADMIS, $idNbCandidatsAdmis['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_NB_CANDIDATS_ADMIS, $idNbCandidatsAdmis, $comparison);
    }

    /**
     * Filter the query on the nombre_candidats_fixe column
     *
     * Example usage:
     * <code>
     * $query->filterByNombreCandidatsFixe(1234); // WHERE nombre_candidats_fixe = 1234
     * $query->filterByNombreCandidatsFixe(array(12, 34)); // WHERE nombre_candidats_fixe IN (12, 34)
     * $query->filterByNombreCandidatsFixe(array('min' => 12)); // WHERE nombre_candidats_fixe >= 12
     * $query->filterByNombreCandidatsFixe(array('max' => 12)); // WHERE nombre_candidats_fixe <= 12
     * </code>
     *
     * @param     mixed $nombreCandidatsFixe The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByNombreCandidatsFixe($nombreCandidatsFixe = null, $comparison = null)
    {
        if (is_array($nombreCandidatsFixe)) {
            $useMinMax = false;
            if (isset($nombreCandidatsFixe['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::NOMBRE_CANDIDATS_FIXE, $nombreCandidatsFixe['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nombreCandidatsFixe['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::NOMBRE_CANDIDATS_FIXE, $nombreCandidatsFixe['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::NOMBRE_CANDIDATS_FIXE, $nombreCandidatsFixe, $comparison);
    }

    /**
     * Filter the query on the nombre_candidats_min column
     *
     * Example usage:
     * <code>
     * $query->filterByNombreCandidatsMin(1234); // WHERE nombre_candidats_min = 1234
     * $query->filterByNombreCandidatsMin(array(12, 34)); // WHERE nombre_candidats_min IN (12, 34)
     * $query->filterByNombreCandidatsMin(array('min' => 12)); // WHERE nombre_candidats_min >= 12
     * $query->filterByNombreCandidatsMin(array('max' => 12)); // WHERE nombre_candidats_min <= 12
     * </code>
     *
     * @param     mixed $nombreCandidatsMin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByNombreCandidatsMin($nombreCandidatsMin = null, $comparison = null)
    {
        if (is_array($nombreCandidatsMin)) {
            $useMinMax = false;
            if (isset($nombreCandidatsMin['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::NOMBRE_CANDIDATS_MIN, $nombreCandidatsMin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nombreCandidatsMin['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::NOMBRE_CANDIDATS_MIN, $nombreCandidatsMin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::NOMBRE_CANDIDATS_MIN, $nombreCandidatsMin, $comparison);
    }

    /**
     * Filter the query on the nombre_candidats_max column
     *
     * Example usage:
     * <code>
     * $query->filterByNombreCandidatsMax(1234); // WHERE nombre_candidats_max = 1234
     * $query->filterByNombreCandidatsMax(array(12, 34)); // WHERE nombre_candidats_max IN (12, 34)
     * $query->filterByNombreCandidatsMax(array('min' => 12)); // WHERE nombre_candidats_max >= 12
     * $query->filterByNombreCandidatsMax(array('max' => 12)); // WHERE nombre_candidats_max <= 12
     * </code>
     *
     * @param     mixed $nombreCandidatsMax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByNombreCandidatsMax($nombreCandidatsMax = null, $comparison = null)
    {
        if (is_array($nombreCandidatsMax)) {
            $useMinMax = false;
            if (isset($nombreCandidatsMax['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::NOMBRE_CANDIDATS_MAX, $nombreCandidatsMax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nombreCandidatsMax['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::NOMBRE_CANDIDATS_MAX, $nombreCandidatsMax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::NOMBRE_CANDIDATS_MAX, $nombreCandidatsMax, $comparison);
    }

    /**
     * Filter the query on the delai_validite_offres column
     *
     * Example usage:
     * <code>
     * $query->filterByDelaiValiditeOffres(1234); // WHERE delai_validite_offres = 1234
     * $query->filterByDelaiValiditeOffres(array(12, 34)); // WHERE delai_validite_offres IN (12, 34)
     * $query->filterByDelaiValiditeOffres(array('min' => 12)); // WHERE delai_validite_offres >= 12
     * $query->filterByDelaiValiditeOffres(array('max' => 12)); // WHERE delai_validite_offres <= 12
     * </code>
     *
     * @param     mixed $delaiValiditeOffres The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByDelaiValiditeOffres($delaiValiditeOffres = null, $comparison = null)
    {
        if (is_array($delaiValiditeOffres)) {
            $useMinMax = false;
            if (isset($delaiValiditeOffres['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::DELAI_VALIDITE_OFFRES, $delaiValiditeOffres['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delaiValiditeOffres['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::DELAI_VALIDITE_OFFRES, $delaiValiditeOffres['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::DELAI_VALIDITE_OFFRES, $delaiValiditeOffres, $comparison);
    }

    /**
     * Filter the query on the phase_successive column
     *
     * Example usage:
     * <code>
     * $query->filterByPhaseSuccessive(true); // WHERE phase_successive = true
     * $query->filterByPhaseSuccessive('yes'); // WHERE phase_successive = true
     * </code>
     *
     * @param     boolean|string $phaseSuccessive The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByPhaseSuccessive($phaseSuccessive = null, $comparison = null)
    {
        if (is_string($phaseSuccessive)) {
            $phaseSuccessive = in_array(strtolower($phaseSuccessive), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::PHASE_SUCCESSIVE, $phaseSuccessive, $comparison);
    }

    /**
     * Filter the query on the id_groupement_attributaire column
     *
     * Example usage:
     * <code>
     * $query->filterByIdGroupementAttributaire(1234); // WHERE id_groupement_attributaire = 1234
     * $query->filterByIdGroupementAttributaire(array(12, 34)); // WHERE id_groupement_attributaire IN (12, 34)
     * $query->filterByIdGroupementAttributaire(array('min' => 12)); // WHERE id_groupement_attributaire >= 12
     * $query->filterByIdGroupementAttributaire(array('max' => 12)); // WHERE id_groupement_attributaire <= 12
     * </code>
     *
     * @param     mixed $idGroupementAttributaire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByIdGroupementAttributaire($idGroupementAttributaire = null, $comparison = null)
    {
        if (is_array($idGroupementAttributaire)) {
            $useMinMax = false;
            if (isset($idGroupementAttributaire['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_GROUPEMENT_ATTRIBUTAIRE, $idGroupementAttributaire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idGroupementAttributaire['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_GROUPEMENT_ATTRIBUTAIRE, $idGroupementAttributaire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_GROUPEMENT_ATTRIBUTAIRE, $idGroupementAttributaire, $comparison);
    }

    /**
     * Filter the query on the id_critere_attribution column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCritereAttribution(1234); // WHERE id_critere_attribution = 1234
     * $query->filterByIdCritereAttribution(array(12, 34)); // WHERE id_critere_attribution IN (12, 34)
     * $query->filterByIdCritereAttribution(array('min' => 12)); // WHERE id_critere_attribution >= 12
     * $query->filterByIdCritereAttribution(array('max' => 12)); // WHERE id_critere_attribution <= 12
     * </code>
     *
     * @param     mixed $idCritereAttribution The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByIdCritereAttribution($idCritereAttribution = null, $comparison = null)
    {
        if (is_array($idCritereAttribution)) {
            $useMinMax = false;
            if (isset($idCritereAttribution['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_CRITERE_ATTRIBUTION, $idCritereAttribution['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCritereAttribution['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_CRITERE_ATTRIBUTION, $idCritereAttribution['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_CRITERE_ATTRIBUTION, $idCritereAttribution, $comparison);
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
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByTypePrestation($typePrestation = null, $comparison = null)
    {
        if (is_array($typePrestation)) {
            $useMinMax = false;
            if (isset($typePrestation['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::TYPE_PRESTATION, $typePrestation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typePrestation['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::TYPE_PRESTATION, $typePrestation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::TYPE_PRESTATION, $typePrestation, $comparison);
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
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::DELAI_PARTIEL, $delaiPartiel, $comparison);
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
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::ADRESSE_RETRAIS_DOSSIERS, $adresseRetraisDossiers, $comparison);
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
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::ADRESSE_DEPOT_OFFRES, $adresseDepotOffres, $comparison);
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
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::LIEU_OUVERTURE_PLIS, $lieuOuverturePlis, $comparison);
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
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::PIECES_DOSSIER_ADMIN, $piecesDossierAdmin, $comparison);
    }

    /**
     * Filter the query on the id_tr_pieces_dossier_admin column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTrPiecesDossierAdmin(1234); // WHERE id_tr_pieces_dossier_admin = 1234
     * $query->filterByIdTrPiecesDossierAdmin(array(12, 34)); // WHERE id_tr_pieces_dossier_admin IN (12, 34)
     * $query->filterByIdTrPiecesDossierAdmin(array('min' => 12)); // WHERE id_tr_pieces_dossier_admin >= 12
     * $query->filterByIdTrPiecesDossierAdmin(array('max' => 12)); // WHERE id_tr_pieces_dossier_admin <= 12
     * </code>
     *
     * @param     mixed $idTrPiecesDossierAdmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByIdTrPiecesDossierAdmin($idTrPiecesDossierAdmin = null, $comparison = null)
    {
        if (is_array($idTrPiecesDossierAdmin)) {
            $useMinMax = false;
            if (isset($idTrPiecesDossierAdmin['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_TR_PIECES_DOSSIER_ADMIN, $idTrPiecesDossierAdmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTrPiecesDossierAdmin['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_TR_PIECES_DOSSIER_ADMIN, $idTrPiecesDossierAdmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_TR_PIECES_DOSSIER_ADMIN, $idTrPiecesDossierAdmin, $comparison);
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
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::PIECES_DOSSIER_TECH, $piecesDossierTech, $comparison);
    }

    /**
     * Filter the query on the id_tr_pieces_dossier_tech column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTrPiecesDossierTech(1234); // WHERE id_tr_pieces_dossier_tech = 1234
     * $query->filterByIdTrPiecesDossierTech(array(12, 34)); // WHERE id_tr_pieces_dossier_tech IN (12, 34)
     * $query->filterByIdTrPiecesDossierTech(array('min' => 12)); // WHERE id_tr_pieces_dossier_tech >= 12
     * $query->filterByIdTrPiecesDossierTech(array('max' => 12)); // WHERE id_tr_pieces_dossier_tech <= 12
     * </code>
     *
     * @param     mixed $idTrPiecesDossierTech The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByIdTrPiecesDossierTech($idTrPiecesDossierTech = null, $comparison = null)
    {
        if (is_array($idTrPiecesDossierTech)) {
            $useMinMax = false;
            if (isset($idTrPiecesDossierTech['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_TR_PIECES_DOSSIER_TECH, $idTrPiecesDossierTech['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTrPiecesDossierTech['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_TR_PIECES_DOSSIER_TECH, $idTrPiecesDossierTech['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_TR_PIECES_DOSSIER_TECH, $idTrPiecesDossierTech, $comparison);
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
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::PIECES_DOSSIER_ADDITIF, $piecesDossierAdditif, $comparison);
    }

    /**
     * Filter the query on the id_tr_pieces_dossier_additif column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTrPiecesDossierAdditif(1234); // WHERE id_tr_pieces_dossier_additif = 1234
     * $query->filterByIdTrPiecesDossierAdditif(array(12, 34)); // WHERE id_tr_pieces_dossier_additif IN (12, 34)
     * $query->filterByIdTrPiecesDossierAdditif(array('min' => 12)); // WHERE id_tr_pieces_dossier_additif >= 12
     * $query->filterByIdTrPiecesDossierAdditif(array('max' => 12)); // WHERE id_tr_pieces_dossier_additif <= 12
     * </code>
     *
     * @param     mixed $idTrPiecesDossierAdditif The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByIdTrPiecesDossierAdditif($idTrPiecesDossierAdditif = null, $comparison = null)
    {
        if (is_array($idTrPiecesDossierAdditif)) {
            $useMinMax = false;
            if (isset($idTrPiecesDossierAdditif['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_TR_PIECES_DOSSIER_ADDITIF, $idTrPiecesDossierAdditif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTrPiecesDossierAdditif['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_TR_PIECES_DOSSIER_ADDITIF, $idTrPiecesDossierAdditif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_TR_PIECES_DOSSIER_ADDITIF, $idTrPiecesDossierAdditif, $comparison);
    }

    /**
     * Filter the query on the id_tr_adresse_retrais_dossiers column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTrAdresseRetraisDossiers(1234); // WHERE id_tr_adresse_retrais_dossiers = 1234
     * $query->filterByIdTrAdresseRetraisDossiers(array(12, 34)); // WHERE id_tr_adresse_retrais_dossiers IN (12, 34)
     * $query->filterByIdTrAdresseRetraisDossiers(array('min' => 12)); // WHERE id_tr_adresse_retrais_dossiers >= 12
     * $query->filterByIdTrAdresseRetraisDossiers(array('max' => 12)); // WHERE id_tr_adresse_retrais_dossiers <= 12
     * </code>
     *
     * @param     mixed $idTrAdresseRetraisDossiers The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByIdTrAdresseRetraisDossiers($idTrAdresseRetraisDossiers = null, $comparison = null)
    {
        if (is_array($idTrAdresseRetraisDossiers)) {
            $useMinMax = false;
            if (isset($idTrAdresseRetraisDossiers['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_TR_ADRESSE_RETRAIS_DOSSIERS, $idTrAdresseRetraisDossiers['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTrAdresseRetraisDossiers['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_TR_ADRESSE_RETRAIS_DOSSIERS, $idTrAdresseRetraisDossiers['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_TR_ADRESSE_RETRAIS_DOSSIERS, $idTrAdresseRetraisDossiers, $comparison);
    }

    /**
     * Filter the query on the id_tr_adresse_depot_offres column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTrAdresseDepotOffres(1234); // WHERE id_tr_adresse_depot_offres = 1234
     * $query->filterByIdTrAdresseDepotOffres(array(12, 34)); // WHERE id_tr_adresse_depot_offres IN (12, 34)
     * $query->filterByIdTrAdresseDepotOffres(array('min' => 12)); // WHERE id_tr_adresse_depot_offres >= 12
     * $query->filterByIdTrAdresseDepotOffres(array('max' => 12)); // WHERE id_tr_adresse_depot_offres <= 12
     * </code>
     *
     * @param     mixed $idTrAdresseDepotOffres The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByIdTrAdresseDepotOffres($idTrAdresseDepotOffres = null, $comparison = null)
    {
        if (is_array($idTrAdresseDepotOffres)) {
            $useMinMax = false;
            if (isset($idTrAdresseDepotOffres['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_TR_ADRESSE_DEPOT_OFFRES, $idTrAdresseDepotOffres['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTrAdresseDepotOffres['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_TR_ADRESSE_DEPOT_OFFRES, $idTrAdresseDepotOffres['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_TR_ADRESSE_DEPOT_OFFRES, $idTrAdresseDepotOffres, $comparison);
    }

    /**
     * Filter the query on the id_tr_lieu_ouverture_plis column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTrLieuOuverturePlis(1234); // WHERE id_tr_lieu_ouverture_plis = 1234
     * $query->filterByIdTrLieuOuverturePlis(array(12, 34)); // WHERE id_tr_lieu_ouverture_plis IN (12, 34)
     * $query->filterByIdTrLieuOuverturePlis(array('min' => 12)); // WHERE id_tr_lieu_ouverture_plis >= 12
     * $query->filterByIdTrLieuOuverturePlis(array('max' => 12)); // WHERE id_tr_lieu_ouverture_plis <= 12
     * </code>
     *
     * @param     mixed $idTrLieuOuverturePlis The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByIdTrLieuOuverturePlis($idTrLieuOuverturePlis = null, $comparison = null)
    {
        if (is_array($idTrLieuOuverturePlis)) {
            $useMinMax = false;
            if (isset($idTrLieuOuverturePlis['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_TR_LIEU_OUVERTURE_PLIS, $idTrLieuOuverturePlis['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTrLieuOuverturePlis['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_TR_LIEU_OUVERTURE_PLIS, $idTrLieuOuverturePlis['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_TR_LIEU_OUVERTURE_PLIS, $idTrLieuOuverturePlis, $comparison);
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
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::CAUTION_PROVISOIRE, $cautionProvisoire, $comparison);
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
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::PRIX_AQUISITION_PLANS, $prixAquisitionPlans, $comparison);
    }

    /**
     * Filter the query on the add_echantillon column
     *
     * Example usage:
     * <code>
     * $query->filterByAddEchantillon('fooValue');   // WHERE add_echantillon = 'fooValue'
     * $query->filterByAddEchantillon('%fooValue%'); // WHERE add_echantillon LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addEchantillon The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByAddEchantillon($addEchantillon = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addEchantillon)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addEchantillon)) {
                $addEchantillon = str_replace('*', '%', $addEchantillon);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::ADD_ECHANTILLON, $addEchantillon, $comparison);
    }

    /**
     * Filter the query on the id_tr_add_echantillon column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTrAddEchantillon(1234); // WHERE id_tr_add_echantillon = 1234
     * $query->filterByIdTrAddEchantillon(array(12, 34)); // WHERE id_tr_add_echantillon IN (12, 34)
     * $query->filterByIdTrAddEchantillon(array('min' => 12)); // WHERE id_tr_add_echantillon >= 12
     * $query->filterByIdTrAddEchantillon(array('max' => 12)); // WHERE id_tr_add_echantillon <= 12
     * </code>
     *
     * @param     mixed $idTrAddEchantillon The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByIdTrAddEchantillon($idTrAddEchantillon = null, $comparison = null)
    {
        if (is_array($idTrAddEchantillon)) {
            $useMinMax = false;
            if (isset($idTrAddEchantillon['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_TR_ADD_ECHANTILLON, $idTrAddEchantillon['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTrAddEchantillon['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_TR_ADD_ECHANTILLON, $idTrAddEchantillon['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_TR_ADD_ECHANTILLON, $idTrAddEchantillon, $comparison);
    }

    /**
     * Filter the query on the date_limite_echantillon column
     *
     * Example usage:
     * <code>
     * $query->filterByDateLimiteEchantillon('fooValue');   // WHERE date_limite_echantillon = 'fooValue'
     * $query->filterByDateLimiteEchantillon('%fooValue%'); // WHERE date_limite_echantillon LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateLimiteEchantillon The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByDateLimiteEchantillon($dateLimiteEchantillon = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateLimiteEchantillon)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateLimiteEchantillon)) {
                $dateLimiteEchantillon = str_replace('*', '%', $dateLimiteEchantillon);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::DATE_LIMITE_ECHANTILLON, $dateLimiteEchantillon, $comparison);
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
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::ADD_REUNION, $addReunion, $comparison);
    }

    /**
     * Filter the query on the id_tr_add_reunion column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTrAddReunion(1234); // WHERE id_tr_add_reunion = 1234
     * $query->filterByIdTrAddReunion(array(12, 34)); // WHERE id_tr_add_reunion IN (12, 34)
     * $query->filterByIdTrAddReunion(array('min' => 12)); // WHERE id_tr_add_reunion >= 12
     * $query->filterByIdTrAddReunion(array('max' => 12)); // WHERE id_tr_add_reunion <= 12
     * </code>
     *
     * @param     mixed $idTrAddReunion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByIdTrAddReunion($idTrAddReunion = null, $comparison = null)
    {
        if (is_array($idTrAddReunion)) {
            $useMinMax = false;
            if (isset($idTrAddReunion['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_TR_ADD_REUNION, $idTrAddReunion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTrAddReunion['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_TR_ADD_REUNION, $idTrAddReunion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_TR_ADD_REUNION, $idTrAddReunion, $comparison);
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
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::DATE_REUNION, $dateReunion, $comparison);
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
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::REUNION, $reunion, $comparison);
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
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::VISITES_LIEUX, $visitesLieux, $comparison);
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
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::ECHANTILLON, $echantillon, $comparison);
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
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::VARIANTES, $variantes, $comparison);
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
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::VARIANTE_CALCULE, $varianteCalcule, $comparison);
    }

    /**
     * Filter the query on the criteres_identiques column
     *
     * Example usage:
     * <code>
     * $query->filterByCriteresIdentiques('fooValue');   // WHERE criteres_identiques = 'fooValue'
     * $query->filterByCriteresIdentiques('%fooValue%'); // WHERE criteres_identiques LIKE '%fooValue%'
     * </code>
     *
     * @param     string $criteresIdentiques The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByCriteresIdentiques($criteresIdentiques = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($criteresIdentiques)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $criteresIdentiques)) {
                $criteresIdentiques = str_replace('*', '%', $criteresIdentiques);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::CRITERES_IDENTIQUES, $criteresIdentiques, $comparison);
    }

    /**
     * Filter the query on the date_expression_besoin column
     *
     * Example usage:
     * <code>
     * $query->filterByDateExpressionBesoin('2011-03-14'); // WHERE date_expression_besoin = '2011-03-14'
     * $query->filterByDateExpressionBesoin('now'); // WHERE date_expression_besoin = '2011-03-14'
     * $query->filterByDateExpressionBesoin(array('max' => 'yesterday')); // WHERE date_expression_besoin > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateExpressionBesoin The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByDateExpressionBesoin($dateExpressionBesoin = null, $comparison = null)
    {
        if (is_array($dateExpressionBesoin)) {
            $useMinMax = false;
            if (isset($dateExpressionBesoin['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::DATE_EXPRESSION_BESOIN, $dateExpressionBesoin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateExpressionBesoin['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::DATE_EXPRESSION_BESOIN, $dateExpressionBesoin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::DATE_EXPRESSION_BESOIN, $dateExpressionBesoin, $comparison);
    }

    /**
     * Filter the query on the id_ref_contact_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByIdRefContact1(1234); // WHERE id_ref_contact_1 = 1234
     * $query->filterByIdRefContact1(array(12, 34)); // WHERE id_ref_contact_1 IN (12, 34)
     * $query->filterByIdRefContact1(array('min' => 12)); // WHERE id_ref_contact_1 >= 12
     * $query->filterByIdRefContact1(array('max' => 12)); // WHERE id_ref_contact_1 <= 12
     * </code>
     *
     * @param     mixed $idRefContact1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByIdRefContact1($idRefContact1 = null, $comparison = null)
    {
        if (is_array($idRefContact1)) {
            $useMinMax = false;
            if (isset($idRefContact1['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_REF_CONTACT_1, $idRefContact1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idRefContact1['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_REF_CONTACT_1, $idRefContact1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_REF_CONTACT_1, $idRefContact1, $comparison);
    }

    /**
     * Filter the query on the id_ref_contact_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByIdRefContact2(1234); // WHERE id_ref_contact_2 = 1234
     * $query->filterByIdRefContact2(array(12, 34)); // WHERE id_ref_contact_2 IN (12, 34)
     * $query->filterByIdRefContact2(array('min' => 12)); // WHERE id_ref_contact_2 >= 12
     * $query->filterByIdRefContact2(array('max' => 12)); // WHERE id_ref_contact_2 <= 12
     * </code>
     *
     * @param     mixed $idRefContact2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function filterByIdRefContact2($idRefContact2 = null, $comparison = null)
    {
        if (is_array($idRefContact2)) {
            $useMinMax = false;
            if (isset($idRefContact2['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_REF_CONTACT_2, $idRefContact2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idRefContact2['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_REF_CONTACT_2, $idRefContact2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_REF_CONTACT_2, $idRefContact2, $comparison);
    }

    /**
     * Filter the query by a related CommonTLotTechnique object
     *
     * @param   CommonTLotTechnique|PropelObjectCollection $commonTLotTechnique  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTDonneeComplementaireQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTLotTechnique($commonTLotTechnique, $comparison = null)
    {
        if ($commonTLotTechnique instanceof CommonTLotTechnique) {
            return $this
                ->addUsingAlias(CommonTDonneeComplementairePeer::ID_DONNEE_COMPLEMENTAIRE, $commonTLotTechnique->getIdDonneeComplementaire(), $comparison);
        } elseif ($commonTLotTechnique instanceof PropelObjectCollection) {
            return $this
                ->useCommonTLotTechniqueQuery()
                ->filterByPrimaryKeys($commonTLotTechnique->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonTLotTechnique() only accepts arguments of type CommonTLotTechnique or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTLotTechnique relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function joinCommonTLotTechnique($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTLotTechnique');

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
            $this->addJoinObject($join, 'CommonTLotTechnique');
        }

        return $this;
    }

    /**
     * Use the CommonTLotTechnique relation CommonTLotTechnique object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTLotTechniqueQuery A secondary query class using the current class as primary query
     */
    public function useCommonTLotTechniqueQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonTLotTechnique($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTLotTechnique', 'CommonTLotTechniqueQuery');
    }

    /**
     * Filter the query by a related CommonTTranche object
     *
     * @param   CommonTTranche|PropelObjectCollection $commonTTranche  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTDonneeComplementaireQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTTranche($commonTTranche, $comparison = null)
    {
        if ($commonTTranche instanceof CommonTTranche) {
            return $this
                ->addUsingAlias(CommonTDonneeComplementairePeer::ID_DONNEE_COMPLEMENTAIRE, $commonTTranche->getIdDonneeComplementaire(), $comparison);
        } elseif ($commonTTranche instanceof PropelObjectCollection) {
            return $this
                ->useCommonTTrancheQuery()
                ->filterByPrimaryKeys($commonTTranche->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonTTranche() only accepts arguments of type CommonTTranche or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTTranche relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function joinCommonTTranche($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTTranche');

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
            $this->addJoinObject($join, 'CommonTTranche');
        }

        return $this;
    }

    /**
     * Use the CommonTTranche relation CommonTTranche object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTTrancheQuery A secondary query class using the current class as primary query
     */
    public function useCommonTTrancheQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonTTranche($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTTranche', 'CommonTTrancheQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTDonneeComplementaire $commonTDonneeComplementaire Object to remove from the list of results
     *
     * @return CommonTDonneeComplementaireQuery The current query, for fluid interface
     */
    public function prune($commonTDonneeComplementaire = null)
    {
        if ($commonTDonneeComplementaire) {
            $this->addUsingAlias(CommonTDonneeComplementairePeer::ID_DONNEE_COMPLEMENTAIRE, $commonTDonneeComplementaire->getIdDonneeComplementaire(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
