<?php


/**
 * Base class that represents a query for the 't_donnee_complementaire_tmp' table.
 *
 * 
 *
 * @method CommonTDonneeComplementaireTmpQuery orderByIdDonneeComplementaire($order = Criteria::ASC) Order by the id_donnee_complementaire column
 * @method CommonTDonneeComplementaireTmpQuery orderByIdTrancheTypePrix($order = Criteria::ASC) Order by the id_tranche_type_prix column
 * @method CommonTDonneeComplementaireTmpQuery orderByIdFormePrix($order = Criteria::ASC) Order by the id_forme_prix column
 * @method CommonTDonneeComplementaireTmpQuery orderByIdCcagReference($order = Criteria::ASC) Order by the id_ccag_reference column
 * @method CommonTDonneeComplementaireTmpQuery orderByReconductible($order = Criteria::ASC) Order by the reconductible column
 * @method CommonTDonneeComplementaireTmpQuery orderByNombreReconductions($order = Criteria::ASC) Order by the nombre_reconductions column
 * @method CommonTDonneeComplementaireTmpQuery orderByModalitesReconduction($order = Criteria::ASC) Order by the modalites_reconduction column
 * @method CommonTDonneeComplementaireTmpQuery orderByVariantesAutorisees($order = Criteria::ASC) Order by the variantes_autorisees column
 * @method CommonTDonneeComplementaireTmpQuery orderByVariantesTechniquesObligatoires($order = Criteria::ASC) Order by the variantes_techniques_obligatoires column
 * @method CommonTDonneeComplementaireTmpQuery orderByVariantesTechniquesDescription($order = Criteria::ASC) Order by the variantes_techniques_description column
 * @method CommonTDonneeComplementaireTmpQuery orderByDecompositionLotsTechniques($order = Criteria::ASC) Order by the decomposition_lots_techniques column
 * @method CommonTDonneeComplementaireTmpQuery orderByIdDureeDelaiDescription($order = Criteria::ASC) Order by the id_duree_delai_description column
 * @method CommonTDonneeComplementaireTmpQuery orderByEstimationPfAttPressenti($order = Criteria::ASC) Order by the estimation_pf_att_pressenti column
 * @method CommonTDonneeComplementaireTmpQuery orderByEstimationBcMinAttPressenti($order = Criteria::ASC) Order by the estimation_bc_min_att_pressenti column
 * @method CommonTDonneeComplementaireTmpQuery orderByEstimationBcMaxAttPressenti($order = Criteria::ASC) Order by the estimation_bc_max_att_pressenti column
 * @method CommonTDonneeComplementaireTmpQuery orderByEstimationPfTabOuvOffre($order = Criteria::ASC) Order by the estimation_pf_tab_ouv_offre column
 * @method CommonTDonneeComplementaireTmpQuery orderByEstimationDqeTabOuvOffre($order = Criteria::ASC) Order by the estimation_dqe_tab_ouv_offre column
 * @method CommonTDonneeComplementaireTmpQuery orderByAvisAttributionPresent($order = Criteria::ASC) Order by the avis_attribution_present column
 * @method CommonTDonneeComplementaireTmpQuery orderByEstimationPfPreinscription($order = Criteria::ASC) Order by the estimation_pf_preinscription column
 * @method CommonTDonneeComplementaireTmpQuery orderByEstimationBcMinPreinscription($order = Criteria::ASC) Order by the estimation_bc_min_preinscription column
 * @method CommonTDonneeComplementaireTmpQuery orderByEstimationBcMaxPreinscription($order = Criteria::ASC) Order by the estimation_bc_max_preinscription column
 * @method CommonTDonneeComplementaireTmpQuery orderByEstimationDateValeurPreinscription($order = Criteria::ASC) Order by the estimation_date_valeur_preinscription column
 * @method CommonTDonneeComplementaireTmpQuery orderByLieuExecution($order = Criteria::ASC) Order by the lieu_execution column
 * @method CommonTDonneeComplementaireTmpQuery orderByDureeMarche($order = Criteria::ASC) Order by the duree_marche column
 * @method CommonTDonneeComplementaireTmpQuery orderByDureeDateDebut($order = Criteria::ASC) Order by the duree_date_debut column
 * @method CommonTDonneeComplementaireTmpQuery orderByDureeDateFin($order = Criteria::ASC) Order by the duree_date_fin column
 * @method CommonTDonneeComplementaireTmpQuery orderByDureeDescription($order = Criteria::ASC) Order by the duree_description column
 * @method CommonTDonneeComplementaireTmpQuery orderByIdChoixMoisJour($order = Criteria::ASC) Order by the id_choix_mois_jour column
 * @method CommonTDonneeComplementaireTmpQuery orderByIdUnite($order = Criteria::ASC) Order by the id_unite column
 * @method CommonTDonneeComplementaireTmpQuery orderByIdNbCandidatsAdmis($order = Criteria::ASC) Order by the id_nb_candidats_admis column
 * @method CommonTDonneeComplementaireTmpQuery orderByNombreCandidatsFixe($order = Criteria::ASC) Order by the nombre_candidats_fixe column
 * @method CommonTDonneeComplementaireTmpQuery orderByNombreCandidatsMin($order = Criteria::ASC) Order by the nombre_candidats_min column
 * @method CommonTDonneeComplementaireTmpQuery orderByNombreCandidatsMax($order = Criteria::ASC) Order by the nombre_candidats_max column
 * @method CommonTDonneeComplementaireTmpQuery orderByDelaiValiditeOffres($order = Criteria::ASC) Order by the delai_validite_offres column
 * @method CommonTDonneeComplementaireTmpQuery orderByPhaseSuccessive($order = Criteria::ASC) Order by the phase_successive column
 * @method CommonTDonneeComplementaireTmpQuery orderByIdGroupementAttributaire($order = Criteria::ASC) Order by the id_groupement_attributaire column
 * @method CommonTDonneeComplementaireTmpQuery orderByIdCritereAttribution($order = Criteria::ASC) Order by the id_critere_attribution column
 * @method CommonTDonneeComplementaireTmpQuery orderByTypePrestation($order = Criteria::ASC) Order by the type_prestation column
 * @method CommonTDonneeComplementaireTmpQuery orderByDelaiPartiel($order = Criteria::ASC) Order by the delai_partiel column
 * @method CommonTDonneeComplementaireTmpQuery orderByAdresseRetraisDossiers($order = Criteria::ASC) Order by the adresse_retrais_dossiers column
 * @method CommonTDonneeComplementaireTmpQuery orderByAdresseDepotOffres($order = Criteria::ASC) Order by the adresse_depot_offres column
 * @method CommonTDonneeComplementaireTmpQuery orderByLieuOuverturePlis($order = Criteria::ASC) Order by the lieu_ouverture_plis column
 * @method CommonTDonneeComplementaireTmpQuery orderByPiecesDossierAdmin($order = Criteria::ASC) Order by the pieces_dossier_admin column
 * @method CommonTDonneeComplementaireTmpQuery orderByIdTrPiecesDossierAdmin($order = Criteria::ASC) Order by the id_tr_pieces_dossier_admin column
 * @method CommonTDonneeComplementaireTmpQuery orderByPiecesDossierTech($order = Criteria::ASC) Order by the pieces_dossier_tech column
 * @method CommonTDonneeComplementaireTmpQuery orderByIdTrPiecesDossierTech($order = Criteria::ASC) Order by the id_tr_pieces_dossier_tech column
 * @method CommonTDonneeComplementaireTmpQuery orderByPiecesDossierAdditif($order = Criteria::ASC) Order by the pieces_dossier_additif column
 * @method CommonTDonneeComplementaireTmpQuery orderByIdTrPiecesDossierAdditif($order = Criteria::ASC) Order by the id_tr_pieces_dossier_additif column
 * @method CommonTDonneeComplementaireTmpQuery orderByIdTrAdresseRetraisDossiers($order = Criteria::ASC) Order by the id_tr_adresse_retrais_dossiers column
 * @method CommonTDonneeComplementaireTmpQuery orderByIdTrAdresseDepotOffres($order = Criteria::ASC) Order by the id_tr_adresse_depot_offres column
 * @method CommonTDonneeComplementaireTmpQuery orderByIdTrLieuOuverturePlis($order = Criteria::ASC) Order by the id_tr_lieu_ouverture_plis column
 * @method CommonTDonneeComplementaireTmpQuery orderByCautionProvisoire($order = Criteria::ASC) Order by the caution_provisoire column
 * @method CommonTDonneeComplementaireTmpQuery orderByPrixAquisitionPlans($order = Criteria::ASC) Order by the prix_aquisition_plans column
 * @method CommonTDonneeComplementaireTmpQuery orderByAddEchantillon($order = Criteria::ASC) Order by the add_echantillon column
 * @method CommonTDonneeComplementaireTmpQuery orderByIdTrAddEchantillon($order = Criteria::ASC) Order by the id_tr_add_echantillon column
 * @method CommonTDonneeComplementaireTmpQuery orderByDateLimiteEchantillon($order = Criteria::ASC) Order by the date_limite_echantillon column
 * @method CommonTDonneeComplementaireTmpQuery orderByAddReunion($order = Criteria::ASC) Order by the add_reunion column
 * @method CommonTDonneeComplementaireTmpQuery orderByIdTrAddReunion($order = Criteria::ASC) Order by the id_tr_add_reunion column
 * @method CommonTDonneeComplementaireTmpQuery orderByDateReunion($order = Criteria::ASC) Order by the date_reunion column
 * @method CommonTDonneeComplementaireTmpQuery orderByReunion($order = Criteria::ASC) Order by the reunion column
 * @method CommonTDonneeComplementaireTmpQuery orderByVisitesLieux($order = Criteria::ASC) Order by the visites_lieux column
 * @method CommonTDonneeComplementaireTmpQuery orderByEchantillon($order = Criteria::ASC) Order by the echantillon column
 * @method CommonTDonneeComplementaireTmpQuery orderByVariantes($order = Criteria::ASC) Order by the variantes column
 * @method CommonTDonneeComplementaireTmpQuery orderByVarianteCalcule($order = Criteria::ASC) Order by the variante_calcule column
 * @method CommonTDonneeComplementaireTmpQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonTDonneeComplementaireTmpQuery orderByReference($order = Criteria::ASC) Order by the reference column
 * @method CommonTDonneeComplementaireTmpQuery orderByLot($order = Criteria::ASC) Order by the lot column
 *
 * @method CommonTDonneeComplementaireTmpQuery groupByIdDonneeComplementaire() Group by the id_donnee_complementaire column
 * @method CommonTDonneeComplementaireTmpQuery groupByIdTrancheTypePrix() Group by the id_tranche_type_prix column
 * @method CommonTDonneeComplementaireTmpQuery groupByIdFormePrix() Group by the id_forme_prix column
 * @method CommonTDonneeComplementaireTmpQuery groupByIdCcagReference() Group by the id_ccag_reference column
 * @method CommonTDonneeComplementaireTmpQuery groupByReconductible() Group by the reconductible column
 * @method CommonTDonneeComplementaireTmpQuery groupByNombreReconductions() Group by the nombre_reconductions column
 * @method CommonTDonneeComplementaireTmpQuery groupByModalitesReconduction() Group by the modalites_reconduction column
 * @method CommonTDonneeComplementaireTmpQuery groupByVariantesAutorisees() Group by the variantes_autorisees column
 * @method CommonTDonneeComplementaireTmpQuery groupByVariantesTechniquesObligatoires() Group by the variantes_techniques_obligatoires column
 * @method CommonTDonneeComplementaireTmpQuery groupByVariantesTechniquesDescription() Group by the variantes_techniques_description column
 * @method CommonTDonneeComplementaireTmpQuery groupByDecompositionLotsTechniques() Group by the decomposition_lots_techniques column
 * @method CommonTDonneeComplementaireTmpQuery groupByIdDureeDelaiDescription() Group by the id_duree_delai_description column
 * @method CommonTDonneeComplementaireTmpQuery groupByEstimationPfAttPressenti() Group by the estimation_pf_att_pressenti column
 * @method CommonTDonneeComplementaireTmpQuery groupByEstimationBcMinAttPressenti() Group by the estimation_bc_min_att_pressenti column
 * @method CommonTDonneeComplementaireTmpQuery groupByEstimationBcMaxAttPressenti() Group by the estimation_bc_max_att_pressenti column
 * @method CommonTDonneeComplementaireTmpQuery groupByEstimationPfTabOuvOffre() Group by the estimation_pf_tab_ouv_offre column
 * @method CommonTDonneeComplementaireTmpQuery groupByEstimationDqeTabOuvOffre() Group by the estimation_dqe_tab_ouv_offre column
 * @method CommonTDonneeComplementaireTmpQuery groupByAvisAttributionPresent() Group by the avis_attribution_present column
 * @method CommonTDonneeComplementaireTmpQuery groupByEstimationPfPreinscription() Group by the estimation_pf_preinscription column
 * @method CommonTDonneeComplementaireTmpQuery groupByEstimationBcMinPreinscription() Group by the estimation_bc_min_preinscription column
 * @method CommonTDonneeComplementaireTmpQuery groupByEstimationBcMaxPreinscription() Group by the estimation_bc_max_preinscription column
 * @method CommonTDonneeComplementaireTmpQuery groupByEstimationDateValeurPreinscription() Group by the estimation_date_valeur_preinscription column
 * @method CommonTDonneeComplementaireTmpQuery groupByLieuExecution() Group by the lieu_execution column
 * @method CommonTDonneeComplementaireTmpQuery groupByDureeMarche() Group by the duree_marche column
 * @method CommonTDonneeComplementaireTmpQuery groupByDureeDateDebut() Group by the duree_date_debut column
 * @method CommonTDonneeComplementaireTmpQuery groupByDureeDateFin() Group by the duree_date_fin column
 * @method CommonTDonneeComplementaireTmpQuery groupByDureeDescription() Group by the duree_description column
 * @method CommonTDonneeComplementaireTmpQuery groupByIdChoixMoisJour() Group by the id_choix_mois_jour column
 * @method CommonTDonneeComplementaireTmpQuery groupByIdUnite() Group by the id_unite column
 * @method CommonTDonneeComplementaireTmpQuery groupByIdNbCandidatsAdmis() Group by the id_nb_candidats_admis column
 * @method CommonTDonneeComplementaireTmpQuery groupByNombreCandidatsFixe() Group by the nombre_candidats_fixe column
 * @method CommonTDonneeComplementaireTmpQuery groupByNombreCandidatsMin() Group by the nombre_candidats_min column
 * @method CommonTDonneeComplementaireTmpQuery groupByNombreCandidatsMax() Group by the nombre_candidats_max column
 * @method CommonTDonneeComplementaireTmpQuery groupByDelaiValiditeOffres() Group by the delai_validite_offres column
 * @method CommonTDonneeComplementaireTmpQuery groupByPhaseSuccessive() Group by the phase_successive column
 * @method CommonTDonneeComplementaireTmpQuery groupByIdGroupementAttributaire() Group by the id_groupement_attributaire column
 * @method CommonTDonneeComplementaireTmpQuery groupByIdCritereAttribution() Group by the id_critere_attribution column
 * @method CommonTDonneeComplementaireTmpQuery groupByTypePrestation() Group by the type_prestation column
 * @method CommonTDonneeComplementaireTmpQuery groupByDelaiPartiel() Group by the delai_partiel column
 * @method CommonTDonneeComplementaireTmpQuery groupByAdresseRetraisDossiers() Group by the adresse_retrais_dossiers column
 * @method CommonTDonneeComplementaireTmpQuery groupByAdresseDepotOffres() Group by the adresse_depot_offres column
 * @method CommonTDonneeComplementaireTmpQuery groupByLieuOuverturePlis() Group by the lieu_ouverture_plis column
 * @method CommonTDonneeComplementaireTmpQuery groupByPiecesDossierAdmin() Group by the pieces_dossier_admin column
 * @method CommonTDonneeComplementaireTmpQuery groupByIdTrPiecesDossierAdmin() Group by the id_tr_pieces_dossier_admin column
 * @method CommonTDonneeComplementaireTmpQuery groupByPiecesDossierTech() Group by the pieces_dossier_tech column
 * @method CommonTDonneeComplementaireTmpQuery groupByIdTrPiecesDossierTech() Group by the id_tr_pieces_dossier_tech column
 * @method CommonTDonneeComplementaireTmpQuery groupByPiecesDossierAdditif() Group by the pieces_dossier_additif column
 * @method CommonTDonneeComplementaireTmpQuery groupByIdTrPiecesDossierAdditif() Group by the id_tr_pieces_dossier_additif column
 * @method CommonTDonneeComplementaireTmpQuery groupByIdTrAdresseRetraisDossiers() Group by the id_tr_adresse_retrais_dossiers column
 * @method CommonTDonneeComplementaireTmpQuery groupByIdTrAdresseDepotOffres() Group by the id_tr_adresse_depot_offres column
 * @method CommonTDonneeComplementaireTmpQuery groupByIdTrLieuOuverturePlis() Group by the id_tr_lieu_ouverture_plis column
 * @method CommonTDonneeComplementaireTmpQuery groupByCautionProvisoire() Group by the caution_provisoire column
 * @method CommonTDonneeComplementaireTmpQuery groupByPrixAquisitionPlans() Group by the prix_aquisition_plans column
 * @method CommonTDonneeComplementaireTmpQuery groupByAddEchantillon() Group by the add_echantillon column
 * @method CommonTDonneeComplementaireTmpQuery groupByIdTrAddEchantillon() Group by the id_tr_add_echantillon column
 * @method CommonTDonneeComplementaireTmpQuery groupByDateLimiteEchantillon() Group by the date_limite_echantillon column
 * @method CommonTDonneeComplementaireTmpQuery groupByAddReunion() Group by the add_reunion column
 * @method CommonTDonneeComplementaireTmpQuery groupByIdTrAddReunion() Group by the id_tr_add_reunion column
 * @method CommonTDonneeComplementaireTmpQuery groupByDateReunion() Group by the date_reunion column
 * @method CommonTDonneeComplementaireTmpQuery groupByReunion() Group by the reunion column
 * @method CommonTDonneeComplementaireTmpQuery groupByVisitesLieux() Group by the visites_lieux column
 * @method CommonTDonneeComplementaireTmpQuery groupByEchantillon() Group by the echantillon column
 * @method CommonTDonneeComplementaireTmpQuery groupByVariantes() Group by the variantes column
 * @method CommonTDonneeComplementaireTmpQuery groupByVarianteCalcule() Group by the variante_calcule column
 * @method CommonTDonneeComplementaireTmpQuery groupByOrganisme() Group by the organisme column
 * @method CommonTDonneeComplementaireTmpQuery groupByReference() Group by the reference column
 * @method CommonTDonneeComplementaireTmpQuery groupByLot() Group by the lot column
 *
 * @method CommonTDonneeComplementaireTmpQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTDonneeComplementaireTmpQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTDonneeComplementaireTmpQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTDonneeComplementaireTmp findOne(PropelPDO $con = null) Return the first CommonTDonneeComplementaireTmp matching the query
 * @method CommonTDonneeComplementaireTmp findOneOrCreate(PropelPDO $con = null) Return the first CommonTDonneeComplementaireTmp matching the query, or a new CommonTDonneeComplementaireTmp object populated from the query conditions when no match is found
 *
 * @method CommonTDonneeComplementaireTmp findOneByIdTrancheTypePrix(int $id_tranche_type_prix) Return the first CommonTDonneeComplementaireTmp filtered by the id_tranche_type_prix column
 * @method CommonTDonneeComplementaireTmp findOneByIdFormePrix(int $id_forme_prix) Return the first CommonTDonneeComplementaireTmp filtered by the id_forme_prix column
 * @method CommonTDonneeComplementaireTmp findOneByIdCcagReference(int $id_ccag_reference) Return the first CommonTDonneeComplementaireTmp filtered by the id_ccag_reference column
 * @method CommonTDonneeComplementaireTmp findOneByReconductible(boolean $reconductible) Return the first CommonTDonneeComplementaireTmp filtered by the reconductible column
 * @method CommonTDonneeComplementaireTmp findOneByNombreReconductions(int $nombre_reconductions) Return the first CommonTDonneeComplementaireTmp filtered by the nombre_reconductions column
 * @method CommonTDonneeComplementaireTmp findOneByModalitesReconduction(string $modalites_reconduction) Return the first CommonTDonneeComplementaireTmp filtered by the modalites_reconduction column
 * @method CommonTDonneeComplementaireTmp findOneByVariantesAutorisees(boolean $variantes_autorisees) Return the first CommonTDonneeComplementaireTmp filtered by the variantes_autorisees column
 * @method CommonTDonneeComplementaireTmp findOneByVariantesTechniquesObligatoires(boolean $variantes_techniques_obligatoires) Return the first CommonTDonneeComplementaireTmp filtered by the variantes_techniques_obligatoires column
 * @method CommonTDonneeComplementaireTmp findOneByVariantesTechniquesDescription(string $variantes_techniques_description) Return the first CommonTDonneeComplementaireTmp filtered by the variantes_techniques_description column
 * @method CommonTDonneeComplementaireTmp findOneByDecompositionLotsTechniques(boolean $decomposition_lots_techniques) Return the first CommonTDonneeComplementaireTmp filtered by the decomposition_lots_techniques column
 * @method CommonTDonneeComplementaireTmp findOneByIdDureeDelaiDescription(int $id_duree_delai_description) Return the first CommonTDonneeComplementaireTmp filtered by the id_duree_delai_description column
 * @method CommonTDonneeComplementaireTmp findOneByEstimationPfAttPressenti(string $estimation_pf_att_pressenti) Return the first CommonTDonneeComplementaireTmp filtered by the estimation_pf_att_pressenti column
 * @method CommonTDonneeComplementaireTmp findOneByEstimationBcMinAttPressenti(string $estimation_bc_min_att_pressenti) Return the first CommonTDonneeComplementaireTmp filtered by the estimation_bc_min_att_pressenti column
 * @method CommonTDonneeComplementaireTmp findOneByEstimationBcMaxAttPressenti(string $estimation_bc_max_att_pressenti) Return the first CommonTDonneeComplementaireTmp filtered by the estimation_bc_max_att_pressenti column
 * @method CommonTDonneeComplementaireTmp findOneByEstimationPfTabOuvOffre(string $estimation_pf_tab_ouv_offre) Return the first CommonTDonneeComplementaireTmp filtered by the estimation_pf_tab_ouv_offre column
 * @method CommonTDonneeComplementaireTmp findOneByEstimationDqeTabOuvOffre(string $estimation_dqe_tab_ouv_offre) Return the first CommonTDonneeComplementaireTmp filtered by the estimation_dqe_tab_ouv_offre column
 * @method CommonTDonneeComplementaireTmp findOneByAvisAttributionPresent(boolean $avis_attribution_present) Return the first CommonTDonneeComplementaireTmp filtered by the avis_attribution_present column
 * @method CommonTDonneeComplementaireTmp findOneByEstimationPfPreinscription(string $estimation_pf_preinscription) Return the first CommonTDonneeComplementaireTmp filtered by the estimation_pf_preinscription column
 * @method CommonTDonneeComplementaireTmp findOneByEstimationBcMinPreinscription(string $estimation_bc_min_preinscription) Return the first CommonTDonneeComplementaireTmp filtered by the estimation_bc_min_preinscription column
 * @method CommonTDonneeComplementaireTmp findOneByEstimationBcMaxPreinscription(string $estimation_bc_max_preinscription) Return the first CommonTDonneeComplementaireTmp filtered by the estimation_bc_max_preinscription column
 * @method CommonTDonneeComplementaireTmp findOneByEstimationDateValeurPreinscription(string $estimation_date_valeur_preinscription) Return the first CommonTDonneeComplementaireTmp filtered by the estimation_date_valeur_preinscription column
 * @method CommonTDonneeComplementaireTmp findOneByLieuExecution(string $lieu_execution) Return the first CommonTDonneeComplementaireTmp filtered by the lieu_execution column
 * @method CommonTDonneeComplementaireTmp findOneByDureeMarche(int $duree_marche) Return the first CommonTDonneeComplementaireTmp filtered by the duree_marche column
 * @method CommonTDonneeComplementaireTmp findOneByDureeDateDebut(string $duree_date_debut) Return the first CommonTDonneeComplementaireTmp filtered by the duree_date_debut column
 * @method CommonTDonneeComplementaireTmp findOneByDureeDateFin(string $duree_date_fin) Return the first CommonTDonneeComplementaireTmp filtered by the duree_date_fin column
 * @method CommonTDonneeComplementaireTmp findOneByDureeDescription(string $duree_description) Return the first CommonTDonneeComplementaireTmp filtered by the duree_description column
 * @method CommonTDonneeComplementaireTmp findOneByIdChoixMoisJour(int $id_choix_mois_jour) Return the first CommonTDonneeComplementaireTmp filtered by the id_choix_mois_jour column
 * @method CommonTDonneeComplementaireTmp findOneByIdUnite(int $id_unite) Return the first CommonTDonneeComplementaireTmp filtered by the id_unite column
 * @method CommonTDonneeComplementaireTmp findOneByIdNbCandidatsAdmis(int $id_nb_candidats_admis) Return the first CommonTDonneeComplementaireTmp filtered by the id_nb_candidats_admis column
 * @method CommonTDonneeComplementaireTmp findOneByNombreCandidatsFixe(int $nombre_candidats_fixe) Return the first CommonTDonneeComplementaireTmp filtered by the nombre_candidats_fixe column
 * @method CommonTDonneeComplementaireTmp findOneByNombreCandidatsMin(int $nombre_candidats_min) Return the first CommonTDonneeComplementaireTmp filtered by the nombre_candidats_min column
 * @method CommonTDonneeComplementaireTmp findOneByNombreCandidatsMax(int $nombre_candidats_max) Return the first CommonTDonneeComplementaireTmp filtered by the nombre_candidats_max column
 * @method CommonTDonneeComplementaireTmp findOneByDelaiValiditeOffres(int $delai_validite_offres) Return the first CommonTDonneeComplementaireTmp filtered by the delai_validite_offres column
 * @method CommonTDonneeComplementaireTmp findOneByPhaseSuccessive(boolean $phase_successive) Return the first CommonTDonneeComplementaireTmp filtered by the phase_successive column
 * @method CommonTDonneeComplementaireTmp findOneByIdGroupementAttributaire(int $id_groupement_attributaire) Return the first CommonTDonneeComplementaireTmp filtered by the id_groupement_attributaire column
 * @method CommonTDonneeComplementaireTmp findOneByIdCritereAttribution(int $id_critere_attribution) Return the first CommonTDonneeComplementaireTmp filtered by the id_critere_attribution column
 * @method CommonTDonneeComplementaireTmp findOneByTypePrestation(int $type_prestation) Return the first CommonTDonneeComplementaireTmp filtered by the type_prestation column
 * @method CommonTDonneeComplementaireTmp findOneByDelaiPartiel(string $delai_partiel) Return the first CommonTDonneeComplementaireTmp filtered by the delai_partiel column
 * @method CommonTDonneeComplementaireTmp findOneByAdresseRetraisDossiers(string $adresse_retrais_dossiers) Return the first CommonTDonneeComplementaireTmp filtered by the adresse_retrais_dossiers column
 * @method CommonTDonneeComplementaireTmp findOneByAdresseDepotOffres(string $adresse_depot_offres) Return the first CommonTDonneeComplementaireTmp filtered by the adresse_depot_offres column
 * @method CommonTDonneeComplementaireTmp findOneByLieuOuverturePlis(string $lieu_ouverture_plis) Return the first CommonTDonneeComplementaireTmp filtered by the lieu_ouverture_plis column
 * @method CommonTDonneeComplementaireTmp findOneByPiecesDossierAdmin(string $pieces_dossier_admin) Return the first CommonTDonneeComplementaireTmp filtered by the pieces_dossier_admin column
 * @method CommonTDonneeComplementaireTmp findOneByIdTrPiecesDossierAdmin(int $id_tr_pieces_dossier_admin) Return the first CommonTDonneeComplementaireTmp filtered by the id_tr_pieces_dossier_admin column
 * @method CommonTDonneeComplementaireTmp findOneByPiecesDossierTech(string $pieces_dossier_tech) Return the first CommonTDonneeComplementaireTmp filtered by the pieces_dossier_tech column
 * @method CommonTDonneeComplementaireTmp findOneByIdTrPiecesDossierTech(int $id_tr_pieces_dossier_tech) Return the first CommonTDonneeComplementaireTmp filtered by the id_tr_pieces_dossier_tech column
 * @method CommonTDonneeComplementaireTmp findOneByPiecesDossierAdditif(string $pieces_dossier_additif) Return the first CommonTDonneeComplementaireTmp filtered by the pieces_dossier_additif column
 * @method CommonTDonneeComplementaireTmp findOneByIdTrPiecesDossierAdditif(int $id_tr_pieces_dossier_additif) Return the first CommonTDonneeComplementaireTmp filtered by the id_tr_pieces_dossier_additif column
 * @method CommonTDonneeComplementaireTmp findOneByIdTrAdresseRetraisDossiers(int $id_tr_adresse_retrais_dossiers) Return the first CommonTDonneeComplementaireTmp filtered by the id_tr_adresse_retrais_dossiers column
 * @method CommonTDonneeComplementaireTmp findOneByIdTrAdresseDepotOffres(int $id_tr_adresse_depot_offres) Return the first CommonTDonneeComplementaireTmp filtered by the id_tr_adresse_depot_offres column
 * @method CommonTDonneeComplementaireTmp findOneByIdTrLieuOuverturePlis(int $id_tr_lieu_ouverture_plis) Return the first CommonTDonneeComplementaireTmp filtered by the id_tr_lieu_ouverture_plis column
 * @method CommonTDonneeComplementaireTmp findOneByCautionProvisoire(string $caution_provisoire) Return the first CommonTDonneeComplementaireTmp filtered by the caution_provisoire column
 * @method CommonTDonneeComplementaireTmp findOneByPrixAquisitionPlans(string $prix_aquisition_plans) Return the first CommonTDonneeComplementaireTmp filtered by the prix_aquisition_plans column
 * @method CommonTDonneeComplementaireTmp findOneByAddEchantillon(string $add_echantillon) Return the first CommonTDonneeComplementaireTmp filtered by the add_echantillon column
 * @method CommonTDonneeComplementaireTmp findOneByIdTrAddEchantillon(int $id_tr_add_echantillon) Return the first CommonTDonneeComplementaireTmp filtered by the id_tr_add_echantillon column
 * @method CommonTDonneeComplementaireTmp findOneByDateLimiteEchantillon(string $date_limite_echantillon) Return the first CommonTDonneeComplementaireTmp filtered by the date_limite_echantillon column
 * @method CommonTDonneeComplementaireTmp findOneByAddReunion(string $add_reunion) Return the first CommonTDonneeComplementaireTmp filtered by the add_reunion column
 * @method CommonTDonneeComplementaireTmp findOneByIdTrAddReunion(int $id_tr_add_reunion) Return the first CommonTDonneeComplementaireTmp filtered by the id_tr_add_reunion column
 * @method CommonTDonneeComplementaireTmp findOneByDateReunion(string $date_reunion) Return the first CommonTDonneeComplementaireTmp filtered by the date_reunion column
 * @method CommonTDonneeComplementaireTmp findOneByReunion(string $reunion) Return the first CommonTDonneeComplementaireTmp filtered by the reunion column
 * @method CommonTDonneeComplementaireTmp findOneByVisitesLieux(string $visites_lieux) Return the first CommonTDonneeComplementaireTmp filtered by the visites_lieux column
 * @method CommonTDonneeComplementaireTmp findOneByEchantillon(string $echantillon) Return the first CommonTDonneeComplementaireTmp filtered by the echantillon column
 * @method CommonTDonneeComplementaireTmp findOneByVariantes(string $variantes) Return the first CommonTDonneeComplementaireTmp filtered by the variantes column
 * @method CommonTDonneeComplementaireTmp findOneByVarianteCalcule(string $variante_calcule) Return the first CommonTDonneeComplementaireTmp filtered by the variante_calcule column
 * @method CommonTDonneeComplementaireTmp findOneByOrganisme(string $organisme) Return the first CommonTDonneeComplementaireTmp filtered by the organisme column
 * @method CommonTDonneeComplementaireTmp findOneByReference(int $reference) Return the first CommonTDonneeComplementaireTmp filtered by the reference column
 * @method CommonTDonneeComplementaireTmp findOneByLot(int $lot) Return the first CommonTDonneeComplementaireTmp filtered by the lot column
 *
 * @method array findByIdDonneeComplementaire(int $id_donnee_complementaire) Return CommonTDonneeComplementaireTmp objects filtered by the id_donnee_complementaire column
 * @method array findByIdTrancheTypePrix(int $id_tranche_type_prix) Return CommonTDonneeComplementaireTmp objects filtered by the id_tranche_type_prix column
 * @method array findByIdFormePrix(int $id_forme_prix) Return CommonTDonneeComplementaireTmp objects filtered by the id_forme_prix column
 * @method array findByIdCcagReference(int $id_ccag_reference) Return CommonTDonneeComplementaireTmp objects filtered by the id_ccag_reference column
 * @method array findByReconductible(boolean $reconductible) Return CommonTDonneeComplementaireTmp objects filtered by the reconductible column
 * @method array findByNombreReconductions(int $nombre_reconductions) Return CommonTDonneeComplementaireTmp objects filtered by the nombre_reconductions column
 * @method array findByModalitesReconduction(string $modalites_reconduction) Return CommonTDonneeComplementaireTmp objects filtered by the modalites_reconduction column
 * @method array findByVariantesAutorisees(boolean $variantes_autorisees) Return CommonTDonneeComplementaireTmp objects filtered by the variantes_autorisees column
 * @method array findByVariantesTechniquesObligatoires(boolean $variantes_techniques_obligatoires) Return CommonTDonneeComplementaireTmp objects filtered by the variantes_techniques_obligatoires column
 * @method array findByVariantesTechniquesDescription(string $variantes_techniques_description) Return CommonTDonneeComplementaireTmp objects filtered by the variantes_techniques_description column
 * @method array findByDecompositionLotsTechniques(boolean $decomposition_lots_techniques) Return CommonTDonneeComplementaireTmp objects filtered by the decomposition_lots_techniques column
 * @method array findByIdDureeDelaiDescription(int $id_duree_delai_description) Return CommonTDonneeComplementaireTmp objects filtered by the id_duree_delai_description column
 * @method array findByEstimationPfAttPressenti(string $estimation_pf_att_pressenti) Return CommonTDonneeComplementaireTmp objects filtered by the estimation_pf_att_pressenti column
 * @method array findByEstimationBcMinAttPressenti(string $estimation_bc_min_att_pressenti) Return CommonTDonneeComplementaireTmp objects filtered by the estimation_bc_min_att_pressenti column
 * @method array findByEstimationBcMaxAttPressenti(string $estimation_bc_max_att_pressenti) Return CommonTDonneeComplementaireTmp objects filtered by the estimation_bc_max_att_pressenti column
 * @method array findByEstimationPfTabOuvOffre(string $estimation_pf_tab_ouv_offre) Return CommonTDonneeComplementaireTmp objects filtered by the estimation_pf_tab_ouv_offre column
 * @method array findByEstimationDqeTabOuvOffre(string $estimation_dqe_tab_ouv_offre) Return CommonTDonneeComplementaireTmp objects filtered by the estimation_dqe_tab_ouv_offre column
 * @method array findByAvisAttributionPresent(boolean $avis_attribution_present) Return CommonTDonneeComplementaireTmp objects filtered by the avis_attribution_present column
 * @method array findByEstimationPfPreinscription(string $estimation_pf_preinscription) Return CommonTDonneeComplementaireTmp objects filtered by the estimation_pf_preinscription column
 * @method array findByEstimationBcMinPreinscription(string $estimation_bc_min_preinscription) Return CommonTDonneeComplementaireTmp objects filtered by the estimation_bc_min_preinscription column
 * @method array findByEstimationBcMaxPreinscription(string $estimation_bc_max_preinscription) Return CommonTDonneeComplementaireTmp objects filtered by the estimation_bc_max_preinscription column
 * @method array findByEstimationDateValeurPreinscription(string $estimation_date_valeur_preinscription) Return CommonTDonneeComplementaireTmp objects filtered by the estimation_date_valeur_preinscription column
 * @method array findByLieuExecution(string $lieu_execution) Return CommonTDonneeComplementaireTmp objects filtered by the lieu_execution column
 * @method array findByDureeMarche(int $duree_marche) Return CommonTDonneeComplementaireTmp objects filtered by the duree_marche column
 * @method array findByDureeDateDebut(string $duree_date_debut) Return CommonTDonneeComplementaireTmp objects filtered by the duree_date_debut column
 * @method array findByDureeDateFin(string $duree_date_fin) Return CommonTDonneeComplementaireTmp objects filtered by the duree_date_fin column
 * @method array findByDureeDescription(string $duree_description) Return CommonTDonneeComplementaireTmp objects filtered by the duree_description column
 * @method array findByIdChoixMoisJour(int $id_choix_mois_jour) Return CommonTDonneeComplementaireTmp objects filtered by the id_choix_mois_jour column
 * @method array findByIdUnite(int $id_unite) Return CommonTDonneeComplementaireTmp objects filtered by the id_unite column
 * @method array findByIdNbCandidatsAdmis(int $id_nb_candidats_admis) Return CommonTDonneeComplementaireTmp objects filtered by the id_nb_candidats_admis column
 * @method array findByNombreCandidatsFixe(int $nombre_candidats_fixe) Return CommonTDonneeComplementaireTmp objects filtered by the nombre_candidats_fixe column
 * @method array findByNombreCandidatsMin(int $nombre_candidats_min) Return CommonTDonneeComplementaireTmp objects filtered by the nombre_candidats_min column
 * @method array findByNombreCandidatsMax(int $nombre_candidats_max) Return CommonTDonneeComplementaireTmp objects filtered by the nombre_candidats_max column
 * @method array findByDelaiValiditeOffres(int $delai_validite_offres) Return CommonTDonneeComplementaireTmp objects filtered by the delai_validite_offres column
 * @method array findByPhaseSuccessive(boolean $phase_successive) Return CommonTDonneeComplementaireTmp objects filtered by the phase_successive column
 * @method array findByIdGroupementAttributaire(int $id_groupement_attributaire) Return CommonTDonneeComplementaireTmp objects filtered by the id_groupement_attributaire column
 * @method array findByIdCritereAttribution(int $id_critere_attribution) Return CommonTDonneeComplementaireTmp objects filtered by the id_critere_attribution column
 * @method array findByTypePrestation(int $type_prestation) Return CommonTDonneeComplementaireTmp objects filtered by the type_prestation column
 * @method array findByDelaiPartiel(string $delai_partiel) Return CommonTDonneeComplementaireTmp objects filtered by the delai_partiel column
 * @method array findByAdresseRetraisDossiers(string $adresse_retrais_dossiers) Return CommonTDonneeComplementaireTmp objects filtered by the adresse_retrais_dossiers column
 * @method array findByAdresseDepotOffres(string $adresse_depot_offres) Return CommonTDonneeComplementaireTmp objects filtered by the adresse_depot_offres column
 * @method array findByLieuOuverturePlis(string $lieu_ouverture_plis) Return CommonTDonneeComplementaireTmp objects filtered by the lieu_ouverture_plis column
 * @method array findByPiecesDossierAdmin(string $pieces_dossier_admin) Return CommonTDonneeComplementaireTmp objects filtered by the pieces_dossier_admin column
 * @method array findByIdTrPiecesDossierAdmin(int $id_tr_pieces_dossier_admin) Return CommonTDonneeComplementaireTmp objects filtered by the id_tr_pieces_dossier_admin column
 * @method array findByPiecesDossierTech(string $pieces_dossier_tech) Return CommonTDonneeComplementaireTmp objects filtered by the pieces_dossier_tech column
 * @method array findByIdTrPiecesDossierTech(int $id_tr_pieces_dossier_tech) Return CommonTDonneeComplementaireTmp objects filtered by the id_tr_pieces_dossier_tech column
 * @method array findByPiecesDossierAdditif(string $pieces_dossier_additif) Return CommonTDonneeComplementaireTmp objects filtered by the pieces_dossier_additif column
 * @method array findByIdTrPiecesDossierAdditif(int $id_tr_pieces_dossier_additif) Return CommonTDonneeComplementaireTmp objects filtered by the id_tr_pieces_dossier_additif column
 * @method array findByIdTrAdresseRetraisDossiers(int $id_tr_adresse_retrais_dossiers) Return CommonTDonneeComplementaireTmp objects filtered by the id_tr_adresse_retrais_dossiers column
 * @method array findByIdTrAdresseDepotOffres(int $id_tr_adresse_depot_offres) Return CommonTDonneeComplementaireTmp objects filtered by the id_tr_adresse_depot_offres column
 * @method array findByIdTrLieuOuverturePlis(int $id_tr_lieu_ouverture_plis) Return CommonTDonneeComplementaireTmp objects filtered by the id_tr_lieu_ouverture_plis column
 * @method array findByCautionProvisoire(string $caution_provisoire) Return CommonTDonneeComplementaireTmp objects filtered by the caution_provisoire column
 * @method array findByPrixAquisitionPlans(string $prix_aquisition_plans) Return CommonTDonneeComplementaireTmp objects filtered by the prix_aquisition_plans column
 * @method array findByAddEchantillon(string $add_echantillon) Return CommonTDonneeComplementaireTmp objects filtered by the add_echantillon column
 * @method array findByIdTrAddEchantillon(int $id_tr_add_echantillon) Return CommonTDonneeComplementaireTmp objects filtered by the id_tr_add_echantillon column
 * @method array findByDateLimiteEchantillon(string $date_limite_echantillon) Return CommonTDonneeComplementaireTmp objects filtered by the date_limite_echantillon column
 * @method array findByAddReunion(string $add_reunion) Return CommonTDonneeComplementaireTmp objects filtered by the add_reunion column
 * @method array findByIdTrAddReunion(int $id_tr_add_reunion) Return CommonTDonneeComplementaireTmp objects filtered by the id_tr_add_reunion column
 * @method array findByDateReunion(string $date_reunion) Return CommonTDonneeComplementaireTmp objects filtered by the date_reunion column
 * @method array findByReunion(string $reunion) Return CommonTDonneeComplementaireTmp objects filtered by the reunion column
 * @method array findByVisitesLieux(string $visites_lieux) Return CommonTDonneeComplementaireTmp objects filtered by the visites_lieux column
 * @method array findByEchantillon(string $echantillon) Return CommonTDonneeComplementaireTmp objects filtered by the echantillon column
 * @method array findByVariantes(string $variantes) Return CommonTDonneeComplementaireTmp objects filtered by the variantes column
 * @method array findByVarianteCalcule(string $variante_calcule) Return CommonTDonneeComplementaireTmp objects filtered by the variante_calcule column
 * @method array findByOrganisme(string $organisme) Return CommonTDonneeComplementaireTmp objects filtered by the organisme column
 * @method array findByReference(int $reference) Return CommonTDonneeComplementaireTmp objects filtered by the reference column
 * @method array findByLot(int $lot) Return CommonTDonneeComplementaireTmp objects filtered by the lot column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTDonneeComplementaireTmpQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTDonneeComplementaireTmpQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTDonneeComplementaireTmp', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTDonneeComplementaireTmpQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTDonneeComplementaireTmpQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTDonneeComplementaireTmpQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTDonneeComplementaireTmpQuery) {
            return $criteria;
        }
        $query = new CommonTDonneeComplementaireTmpQuery();
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
     * @return   CommonTDonneeComplementaireTmp|CommonTDonneeComplementaireTmp[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTDonneeComplementaireTmpPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTDonneeComplementaireTmpPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTDonneeComplementaireTmp A model object, or null if the key is not found
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
     * @return                 CommonTDonneeComplementaireTmp A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_donnee_complementaire`, `id_tranche_type_prix`, `id_forme_prix`, `id_ccag_reference`, `reconductible`, `nombre_reconductions`, `modalites_reconduction`, `variantes_autorisees`, `variantes_techniques_obligatoires`, `variantes_techniques_description`, `decomposition_lots_techniques`, `id_duree_delai_description`, `estimation_pf_att_pressenti`, `estimation_bc_min_att_pressenti`, `estimation_bc_max_att_pressenti`, `estimation_pf_tab_ouv_offre`, `estimation_dqe_tab_ouv_offre`, `avis_attribution_present`, `estimation_pf_preinscription`, `estimation_bc_min_preinscription`, `estimation_bc_max_preinscription`, `estimation_date_valeur_preinscription`, `lieu_execution`, `duree_marche`, `duree_date_debut`, `duree_date_fin`, `duree_description`, `id_choix_mois_jour`, `id_unite`, `id_nb_candidats_admis`, `nombre_candidats_fixe`, `nombre_candidats_min`, `nombre_candidats_max`, `delai_validite_offres`, `phase_successive`, `id_groupement_attributaire`, `id_critere_attribution`, `type_prestation`, `delai_partiel`, `adresse_retrais_dossiers`, `adresse_depot_offres`, `lieu_ouverture_plis`, `pieces_dossier_admin`, `id_tr_pieces_dossier_admin`, `pieces_dossier_tech`, `id_tr_pieces_dossier_tech`, `pieces_dossier_additif`, `id_tr_pieces_dossier_additif`, `id_tr_adresse_retrais_dossiers`, `id_tr_adresse_depot_offres`, `id_tr_lieu_ouverture_plis`, `caution_provisoire`, `prix_aquisition_plans`, `add_echantillon`, `id_tr_add_echantillon`, `date_limite_echantillon`, `add_reunion`, `id_tr_add_reunion`, `date_reunion`, `reunion`, `visites_lieux`, `echantillon`, `variantes`, `variante_calcule`, `organisme`, `reference`, `lot` FROM `t_donnee_complementaire_tmp` WHERE `id_donnee_complementaire` = :p0';
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
            $obj = new CommonTDonneeComplementaireTmp();
            $obj->hydrate($row);
            CommonTDonneeComplementaireTmpPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonTDonneeComplementaireTmp|CommonTDonneeComplementaireTmp[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTDonneeComplementaireTmp[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_DONNEE_COMPLEMENTAIRE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_DONNEE_COMPLEMENTAIRE, $keys, Criteria::IN);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByIdDonneeComplementaire($idDonneeComplementaire = null, $comparison = null)
    {
        if (is_array($idDonneeComplementaire)) {
            $useMinMax = false;
            if (isset($idDonneeComplementaire['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_DONNEE_COMPLEMENTAIRE, $idDonneeComplementaire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDonneeComplementaire['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_DONNEE_COMPLEMENTAIRE, $idDonneeComplementaire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_DONNEE_COMPLEMENTAIRE, $idDonneeComplementaire, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByIdTrancheTypePrix($idTrancheTypePrix = null, $comparison = null)
    {
        if (is_array($idTrancheTypePrix)) {
            $useMinMax = false;
            if (isset($idTrancheTypePrix['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_TRANCHE_TYPE_PRIX, $idTrancheTypePrix['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTrancheTypePrix['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_TRANCHE_TYPE_PRIX, $idTrancheTypePrix['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_TRANCHE_TYPE_PRIX, $idTrancheTypePrix, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByIdFormePrix($idFormePrix = null, $comparison = null)
    {
        if (is_array($idFormePrix)) {
            $useMinMax = false;
            if (isset($idFormePrix['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_FORME_PRIX, $idFormePrix['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idFormePrix['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_FORME_PRIX, $idFormePrix['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_FORME_PRIX, $idFormePrix, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByIdCcagReference($idCcagReference = null, $comparison = null)
    {
        if (is_array($idCcagReference)) {
            $useMinMax = false;
            if (isset($idCcagReference['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_CCAG_REFERENCE, $idCcagReference['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCcagReference['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_CCAG_REFERENCE, $idCcagReference['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_CCAG_REFERENCE, $idCcagReference, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByReconductible($reconductible = null, $comparison = null)
    {
        if (is_string($reconductible)) {
            $reconductible = in_array(strtolower($reconductible), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::RECONDUCTIBLE, $reconductible, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByNombreReconductions($nombreReconductions = null, $comparison = null)
    {
        if (is_array($nombreReconductions)) {
            $useMinMax = false;
            if (isset($nombreReconductions['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::NOMBRE_RECONDUCTIONS, $nombreReconductions['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nombreReconductions['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::NOMBRE_RECONDUCTIONS, $nombreReconductions['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::NOMBRE_RECONDUCTIONS, $nombreReconductions, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::MODALITES_RECONDUCTION, $modalitesReconduction, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByVariantesAutorisees($variantesAutorisees = null, $comparison = null)
    {
        if (is_string($variantesAutorisees)) {
            $variantesAutorisees = in_array(strtolower($variantesAutorisees), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::VARIANTES_AUTORISEES, $variantesAutorisees, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByVariantesTechniquesObligatoires($variantesTechniquesObligatoires = null, $comparison = null)
    {
        if (is_string($variantesTechniquesObligatoires)) {
            $variantesTechniquesObligatoires = in_array(strtolower($variantesTechniquesObligatoires), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::VARIANTES_TECHNIQUES_OBLIGATOIRES, $variantesTechniquesObligatoires, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::VARIANTES_TECHNIQUES_DESCRIPTION, $variantesTechniquesDescription, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByDecompositionLotsTechniques($decompositionLotsTechniques = null, $comparison = null)
    {
        if (is_string($decompositionLotsTechniques)) {
            $decompositionLotsTechniques = in_array(strtolower($decompositionLotsTechniques), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::DECOMPOSITION_LOTS_TECHNIQUES, $decompositionLotsTechniques, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByIdDureeDelaiDescription($idDureeDelaiDescription = null, $comparison = null)
    {
        if (is_array($idDureeDelaiDescription)) {
            $useMinMax = false;
            if (isset($idDureeDelaiDescription['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_DUREE_DELAI_DESCRIPTION, $idDureeDelaiDescription['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDureeDelaiDescription['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_DUREE_DELAI_DESCRIPTION, $idDureeDelaiDescription['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_DUREE_DELAI_DESCRIPTION, $idDureeDelaiDescription, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByEstimationPfAttPressenti($estimationPfAttPressenti = null, $comparison = null)
    {
        if (is_array($estimationPfAttPressenti)) {
            $useMinMax = false;
            if (isset($estimationPfAttPressenti['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ESTIMATION_PF_ATT_PRESSENTI, $estimationPfAttPressenti['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($estimationPfAttPressenti['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ESTIMATION_PF_ATT_PRESSENTI, $estimationPfAttPressenti['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ESTIMATION_PF_ATT_PRESSENTI, $estimationPfAttPressenti, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByEstimationBcMinAttPressenti($estimationBcMinAttPressenti = null, $comparison = null)
    {
        if (is_array($estimationBcMinAttPressenti)) {
            $useMinMax = false;
            if (isset($estimationBcMinAttPressenti['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ESTIMATION_BC_MIN_ATT_PRESSENTI, $estimationBcMinAttPressenti['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($estimationBcMinAttPressenti['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ESTIMATION_BC_MIN_ATT_PRESSENTI, $estimationBcMinAttPressenti['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ESTIMATION_BC_MIN_ATT_PRESSENTI, $estimationBcMinAttPressenti, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByEstimationBcMaxAttPressenti($estimationBcMaxAttPressenti = null, $comparison = null)
    {
        if (is_array($estimationBcMaxAttPressenti)) {
            $useMinMax = false;
            if (isset($estimationBcMaxAttPressenti['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ESTIMATION_BC_MAX_ATT_PRESSENTI, $estimationBcMaxAttPressenti['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($estimationBcMaxAttPressenti['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ESTIMATION_BC_MAX_ATT_PRESSENTI, $estimationBcMaxAttPressenti['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ESTIMATION_BC_MAX_ATT_PRESSENTI, $estimationBcMaxAttPressenti, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByEstimationPfTabOuvOffre($estimationPfTabOuvOffre = null, $comparison = null)
    {
        if (is_array($estimationPfTabOuvOffre)) {
            $useMinMax = false;
            if (isset($estimationPfTabOuvOffre['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ESTIMATION_PF_TAB_OUV_OFFRE, $estimationPfTabOuvOffre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($estimationPfTabOuvOffre['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ESTIMATION_PF_TAB_OUV_OFFRE, $estimationPfTabOuvOffre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ESTIMATION_PF_TAB_OUV_OFFRE, $estimationPfTabOuvOffre, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByEstimationDqeTabOuvOffre($estimationDqeTabOuvOffre = null, $comparison = null)
    {
        if (is_array($estimationDqeTabOuvOffre)) {
            $useMinMax = false;
            if (isset($estimationDqeTabOuvOffre['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ESTIMATION_DQE_TAB_OUV_OFFRE, $estimationDqeTabOuvOffre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($estimationDqeTabOuvOffre['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ESTIMATION_DQE_TAB_OUV_OFFRE, $estimationDqeTabOuvOffre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ESTIMATION_DQE_TAB_OUV_OFFRE, $estimationDqeTabOuvOffre, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByAvisAttributionPresent($avisAttributionPresent = null, $comparison = null)
    {
        if (is_string($avisAttributionPresent)) {
            $avisAttributionPresent = in_array(strtolower($avisAttributionPresent), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::AVIS_ATTRIBUTION_PRESENT, $avisAttributionPresent, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByEstimationPfPreinscription($estimationPfPreinscription = null, $comparison = null)
    {
        if (is_array($estimationPfPreinscription)) {
            $useMinMax = false;
            if (isset($estimationPfPreinscription['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ESTIMATION_PF_PREINSCRIPTION, $estimationPfPreinscription['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($estimationPfPreinscription['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ESTIMATION_PF_PREINSCRIPTION, $estimationPfPreinscription['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ESTIMATION_PF_PREINSCRIPTION, $estimationPfPreinscription, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByEstimationBcMinPreinscription($estimationBcMinPreinscription = null, $comparison = null)
    {
        if (is_array($estimationBcMinPreinscription)) {
            $useMinMax = false;
            if (isset($estimationBcMinPreinscription['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ESTIMATION_BC_MIN_PREINSCRIPTION, $estimationBcMinPreinscription['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($estimationBcMinPreinscription['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ESTIMATION_BC_MIN_PREINSCRIPTION, $estimationBcMinPreinscription['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ESTIMATION_BC_MIN_PREINSCRIPTION, $estimationBcMinPreinscription, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByEstimationBcMaxPreinscription($estimationBcMaxPreinscription = null, $comparison = null)
    {
        if (is_array($estimationBcMaxPreinscription)) {
            $useMinMax = false;
            if (isset($estimationBcMaxPreinscription['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ESTIMATION_BC_MAX_PREINSCRIPTION, $estimationBcMaxPreinscription['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($estimationBcMaxPreinscription['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ESTIMATION_BC_MAX_PREINSCRIPTION, $estimationBcMaxPreinscription['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ESTIMATION_BC_MAX_PREINSCRIPTION, $estimationBcMaxPreinscription, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByEstimationDateValeurPreinscription($estimationDateValeurPreinscription = null, $comparison = null)
    {
        if (is_array($estimationDateValeurPreinscription)) {
            $useMinMax = false;
            if (isset($estimationDateValeurPreinscription['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ESTIMATION_DATE_VALEUR_PREINSCRIPTION, $estimationDateValeurPreinscription['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($estimationDateValeurPreinscription['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ESTIMATION_DATE_VALEUR_PREINSCRIPTION, $estimationDateValeurPreinscription['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ESTIMATION_DATE_VALEUR_PREINSCRIPTION, $estimationDateValeurPreinscription, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::LIEU_EXECUTION, $lieuExecution, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByDureeMarche($dureeMarche = null, $comparison = null)
    {
        if (is_array($dureeMarche)) {
            $useMinMax = false;
            if (isset($dureeMarche['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::DUREE_MARCHE, $dureeMarche['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dureeMarche['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::DUREE_MARCHE, $dureeMarche['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::DUREE_MARCHE, $dureeMarche, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByDureeDateDebut($dureeDateDebut = null, $comparison = null)
    {
        if (is_array($dureeDateDebut)) {
            $useMinMax = false;
            if (isset($dureeDateDebut['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::DUREE_DATE_DEBUT, $dureeDateDebut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dureeDateDebut['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::DUREE_DATE_DEBUT, $dureeDateDebut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::DUREE_DATE_DEBUT, $dureeDateDebut, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByDureeDateFin($dureeDateFin = null, $comparison = null)
    {
        if (is_array($dureeDateFin)) {
            $useMinMax = false;
            if (isset($dureeDateFin['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::DUREE_DATE_FIN, $dureeDateFin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dureeDateFin['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::DUREE_DATE_FIN, $dureeDateFin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::DUREE_DATE_FIN, $dureeDateFin, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::DUREE_DESCRIPTION, $dureeDescription, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByIdChoixMoisJour($idChoixMoisJour = null, $comparison = null)
    {
        if (is_array($idChoixMoisJour)) {
            $useMinMax = false;
            if (isset($idChoixMoisJour['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_CHOIX_MOIS_JOUR, $idChoixMoisJour['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idChoixMoisJour['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_CHOIX_MOIS_JOUR, $idChoixMoisJour['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_CHOIX_MOIS_JOUR, $idChoixMoisJour, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByIdUnite($idUnite = null, $comparison = null)
    {
        if (is_array($idUnite)) {
            $useMinMax = false;
            if (isset($idUnite['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_UNITE, $idUnite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idUnite['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_UNITE, $idUnite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_UNITE, $idUnite, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByIdNbCandidatsAdmis($idNbCandidatsAdmis = null, $comparison = null)
    {
        if (is_array($idNbCandidatsAdmis)) {
            $useMinMax = false;
            if (isset($idNbCandidatsAdmis['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_NB_CANDIDATS_ADMIS, $idNbCandidatsAdmis['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idNbCandidatsAdmis['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_NB_CANDIDATS_ADMIS, $idNbCandidatsAdmis['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_NB_CANDIDATS_ADMIS, $idNbCandidatsAdmis, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByNombreCandidatsFixe($nombreCandidatsFixe = null, $comparison = null)
    {
        if (is_array($nombreCandidatsFixe)) {
            $useMinMax = false;
            if (isset($nombreCandidatsFixe['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::NOMBRE_CANDIDATS_FIXE, $nombreCandidatsFixe['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nombreCandidatsFixe['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::NOMBRE_CANDIDATS_FIXE, $nombreCandidatsFixe['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::NOMBRE_CANDIDATS_FIXE, $nombreCandidatsFixe, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByNombreCandidatsMin($nombreCandidatsMin = null, $comparison = null)
    {
        if (is_array($nombreCandidatsMin)) {
            $useMinMax = false;
            if (isset($nombreCandidatsMin['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::NOMBRE_CANDIDATS_MIN, $nombreCandidatsMin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nombreCandidatsMin['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::NOMBRE_CANDIDATS_MIN, $nombreCandidatsMin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::NOMBRE_CANDIDATS_MIN, $nombreCandidatsMin, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByNombreCandidatsMax($nombreCandidatsMax = null, $comparison = null)
    {
        if (is_array($nombreCandidatsMax)) {
            $useMinMax = false;
            if (isset($nombreCandidatsMax['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::NOMBRE_CANDIDATS_MAX, $nombreCandidatsMax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nombreCandidatsMax['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::NOMBRE_CANDIDATS_MAX, $nombreCandidatsMax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::NOMBRE_CANDIDATS_MAX, $nombreCandidatsMax, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByDelaiValiditeOffres($delaiValiditeOffres = null, $comparison = null)
    {
        if (is_array($delaiValiditeOffres)) {
            $useMinMax = false;
            if (isset($delaiValiditeOffres['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::DELAI_VALIDITE_OFFRES, $delaiValiditeOffres['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delaiValiditeOffres['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::DELAI_VALIDITE_OFFRES, $delaiValiditeOffres['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::DELAI_VALIDITE_OFFRES, $delaiValiditeOffres, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByPhaseSuccessive($phaseSuccessive = null, $comparison = null)
    {
        if (is_string($phaseSuccessive)) {
            $phaseSuccessive = in_array(strtolower($phaseSuccessive), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::PHASE_SUCCESSIVE, $phaseSuccessive, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByIdGroupementAttributaire($idGroupementAttributaire = null, $comparison = null)
    {
        if (is_array($idGroupementAttributaire)) {
            $useMinMax = false;
            if (isset($idGroupementAttributaire['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_GROUPEMENT_ATTRIBUTAIRE, $idGroupementAttributaire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idGroupementAttributaire['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_GROUPEMENT_ATTRIBUTAIRE, $idGroupementAttributaire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_GROUPEMENT_ATTRIBUTAIRE, $idGroupementAttributaire, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByIdCritereAttribution($idCritereAttribution = null, $comparison = null)
    {
        if (is_array($idCritereAttribution)) {
            $useMinMax = false;
            if (isset($idCritereAttribution['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_CRITERE_ATTRIBUTION, $idCritereAttribution['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCritereAttribution['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_CRITERE_ATTRIBUTION, $idCritereAttribution['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_CRITERE_ATTRIBUTION, $idCritereAttribution, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByTypePrestation($typePrestation = null, $comparison = null)
    {
        if (is_array($typePrestation)) {
            $useMinMax = false;
            if (isset($typePrestation['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::TYPE_PRESTATION, $typePrestation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typePrestation['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::TYPE_PRESTATION, $typePrestation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::TYPE_PRESTATION, $typePrestation, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::DELAI_PARTIEL, $delaiPartiel, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ADRESSE_RETRAIS_DOSSIERS, $adresseRetraisDossiers, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ADRESSE_DEPOT_OFFRES, $adresseDepotOffres, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::LIEU_OUVERTURE_PLIS, $lieuOuverturePlis, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::PIECES_DOSSIER_ADMIN, $piecesDossierAdmin, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByIdTrPiecesDossierAdmin($idTrPiecesDossierAdmin = null, $comparison = null)
    {
        if (is_array($idTrPiecesDossierAdmin)) {
            $useMinMax = false;
            if (isset($idTrPiecesDossierAdmin['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_TR_PIECES_DOSSIER_ADMIN, $idTrPiecesDossierAdmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTrPiecesDossierAdmin['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_TR_PIECES_DOSSIER_ADMIN, $idTrPiecesDossierAdmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_TR_PIECES_DOSSIER_ADMIN, $idTrPiecesDossierAdmin, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::PIECES_DOSSIER_TECH, $piecesDossierTech, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByIdTrPiecesDossierTech($idTrPiecesDossierTech = null, $comparison = null)
    {
        if (is_array($idTrPiecesDossierTech)) {
            $useMinMax = false;
            if (isset($idTrPiecesDossierTech['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_TR_PIECES_DOSSIER_TECH, $idTrPiecesDossierTech['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTrPiecesDossierTech['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_TR_PIECES_DOSSIER_TECH, $idTrPiecesDossierTech['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_TR_PIECES_DOSSIER_TECH, $idTrPiecesDossierTech, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::PIECES_DOSSIER_ADDITIF, $piecesDossierAdditif, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByIdTrPiecesDossierAdditif($idTrPiecesDossierAdditif = null, $comparison = null)
    {
        if (is_array($idTrPiecesDossierAdditif)) {
            $useMinMax = false;
            if (isset($idTrPiecesDossierAdditif['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_TR_PIECES_DOSSIER_ADDITIF, $idTrPiecesDossierAdditif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTrPiecesDossierAdditif['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_TR_PIECES_DOSSIER_ADDITIF, $idTrPiecesDossierAdditif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_TR_PIECES_DOSSIER_ADDITIF, $idTrPiecesDossierAdditif, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByIdTrAdresseRetraisDossiers($idTrAdresseRetraisDossiers = null, $comparison = null)
    {
        if (is_array($idTrAdresseRetraisDossiers)) {
            $useMinMax = false;
            if (isset($idTrAdresseRetraisDossiers['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_TR_ADRESSE_RETRAIS_DOSSIERS, $idTrAdresseRetraisDossiers['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTrAdresseRetraisDossiers['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_TR_ADRESSE_RETRAIS_DOSSIERS, $idTrAdresseRetraisDossiers['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_TR_ADRESSE_RETRAIS_DOSSIERS, $idTrAdresseRetraisDossiers, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByIdTrAdresseDepotOffres($idTrAdresseDepotOffres = null, $comparison = null)
    {
        if (is_array($idTrAdresseDepotOffres)) {
            $useMinMax = false;
            if (isset($idTrAdresseDepotOffres['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_TR_ADRESSE_DEPOT_OFFRES, $idTrAdresseDepotOffres['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTrAdresseDepotOffres['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_TR_ADRESSE_DEPOT_OFFRES, $idTrAdresseDepotOffres['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_TR_ADRESSE_DEPOT_OFFRES, $idTrAdresseDepotOffres, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByIdTrLieuOuverturePlis($idTrLieuOuverturePlis = null, $comparison = null)
    {
        if (is_array($idTrLieuOuverturePlis)) {
            $useMinMax = false;
            if (isset($idTrLieuOuverturePlis['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_TR_LIEU_OUVERTURE_PLIS, $idTrLieuOuverturePlis['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTrLieuOuverturePlis['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_TR_LIEU_OUVERTURE_PLIS, $idTrLieuOuverturePlis['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_TR_LIEU_OUVERTURE_PLIS, $idTrLieuOuverturePlis, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::CAUTION_PROVISOIRE, $cautionProvisoire, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::PRIX_AQUISITION_PLANS, $prixAquisitionPlans, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ADD_ECHANTILLON, $addEchantillon, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByIdTrAddEchantillon($idTrAddEchantillon = null, $comparison = null)
    {
        if (is_array($idTrAddEchantillon)) {
            $useMinMax = false;
            if (isset($idTrAddEchantillon['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_TR_ADD_ECHANTILLON, $idTrAddEchantillon['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTrAddEchantillon['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_TR_ADD_ECHANTILLON, $idTrAddEchantillon['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_TR_ADD_ECHANTILLON, $idTrAddEchantillon, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::DATE_LIMITE_ECHANTILLON, $dateLimiteEchantillon, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ADD_REUNION, $addReunion, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByIdTrAddReunion($idTrAddReunion = null, $comparison = null)
    {
        if (is_array($idTrAddReunion)) {
            $useMinMax = false;
            if (isset($idTrAddReunion['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_TR_ADD_REUNION, $idTrAddReunion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTrAddReunion['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_TR_ADD_REUNION, $idTrAddReunion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_TR_ADD_REUNION, $idTrAddReunion, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::DATE_REUNION, $dateReunion, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::REUNION, $reunion, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::VISITES_LIEUX, $visitesLieux, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ECHANTILLON, $echantillon, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::VARIANTES, $variantes, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::VARIANTE_CALCULE, $varianteCalcule, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ORGANISME, $organisme, $comparison);
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
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByReference($reference = null, $comparison = null)
    {
        if (is_array($reference)) {
            $useMinMax = false;
            if (isset($reference['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::REFERENCE, $reference['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reference['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::REFERENCE, $reference['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::REFERENCE, $reference, $comparison);
    }

    /**
     * Filter the query on the lot column
     *
     * Example usage:
     * <code>
     * $query->filterByLot(1234); // WHERE lot = 1234
     * $query->filterByLot(array(12, 34)); // WHERE lot IN (12, 34)
     * $query->filterByLot(array('min' => 12)); // WHERE lot >= 12
     * $query->filterByLot(array('max' => 12)); // WHERE lot <= 12
     * </code>
     *
     * @param     mixed $lot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function filterByLot($lot = null, $comparison = null)
    {
        if (is_array($lot)) {
            $useMinMax = false;
            if (isset($lot['min'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::LOT, $lot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lot['max'])) {
                $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::LOT, $lot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::LOT, $lot, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTDonneeComplementaireTmp $commonTDonneeComplementaireTmp Object to remove from the list of results
     *
     * @return CommonTDonneeComplementaireTmpQuery The current query, for fluid interface
     */
    public function prune($commonTDonneeComplementaireTmp = null)
    {
        if ($commonTDonneeComplementaireTmp) {
            $this->addUsingAlias(CommonTDonneeComplementaireTmpPeer::ID_DONNEE_COMPLEMENTAIRE, $commonTDonneeComplementaireTmp->getIdDonneeComplementaire(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
