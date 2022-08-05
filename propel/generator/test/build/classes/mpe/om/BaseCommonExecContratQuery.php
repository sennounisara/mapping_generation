<?php


/**
 * Base class that represents a query for the 'exec_contrat' table.
 *
 * 
 *
 * @method CommonExecContratQuery orderByIdContrat($order = Criteria::ASC) Order by the id_contrat column
 * @method CommonExecContratQuery orderByConsultationRef($order = Criteria::ASC) Order by the consultation_ref column
 * @method CommonExecContratQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonExecContratQuery orderByIdDecisionEnveloppe($order = Criteria::ASC) Order by the id_decision_enveloppe column
 * @method CommonExecContratQuery orderByNumero($order = Criteria::ASC) Order by the numero column
 * @method CommonExecContratQuery orderByStatut($order = Criteria::ASC) Order by the statut column
 * @method CommonExecContratQuery orderByIdTypeContrat($order = Criteria::ASC) Order by the id_type_contrat column
 * @method CommonExecContratQuery orderByIdTypeStructure($order = Criteria::ASC) Order by the id_type_structure column
 * @method CommonExecContratQuery orderByObjet($order = Criteria::ASC) Order by the objet column
 * @method CommonExecContratQuery orderByNumConsultation($order = Criteria::ASC) Order by the num_consultation column
 * @method CommonExecContratQuery orderByIdNaturePrestation($order = Criteria::ASC) Order by the id_nature_prestation column
 * @method CommonExecContratQuery orderByIdService($order = Criteria::ASC) Order by the id_service column
 * @method CommonExecContratQuery orderByIdServiceGerant($order = Criteria::ASC) Order by the id_service_gerant column
 * @method CommonExecContratQuery orderByIdAgentGestion($order = Criteria::ASC) Order by the id_agent_gestion column
 * @method CommonExecContratQuery orderByReconductible($order = Criteria::ASC) Order by the reconductible column
 * @method CommonExecContratQuery orderByNombreReconduction($order = Criteria::ASC) Order by the nombre_reconduction column
 * @method CommonExecContratQuery orderByMontantHt($order = Criteria::ASC) Order by the montant_ht column
 * @method CommonExecContratQuery orderByMontantTtc($order = Criteria::ASC) Order by the montant_ttc column
 * @method CommonExecContratQuery orderByMontantMin($order = Criteria::ASC) Order by the montant_min column
 * @method CommonExecContratQuery orderByMontantMax($order = Criteria::ASC) Order by the montant_max column
 * @method CommonExecContratQuery orderByMontantMinTtc($order = Criteria::ASC) Order by the montant_min_ttc column
 * @method CommonExecContratQuery orderByMontantMaxTtc($order = Criteria::ASC) Order by the montant_max_ttc column
 * @method CommonExecContratQuery orderByMontantFactureHt($order = Criteria::ASC) Order by the montant_facture_ht column
 * @method CommonExecContratQuery orderByMontantFactureTtc($order = Criteria::ASC) Order by the montant_facture_ttc column
 * @method CommonExecContratQuery orderByMontantPayeHt($order = Criteria::ASC) Order by the montant_paye_ht column
 * @method CommonExecContratQuery orderByMontantPayeTtc($order = Criteria::ASC) Order by the montant_paye_ttc column
 * @method CommonExecContratQuery orderByMontantCaution($order = Criteria::ASC) Order by the montant_caution column
 * @method CommonExecContratQuery orderByPourcentageCaution($order = Criteria::ASC) Order by the pourcentage_caution column
 * @method CommonExecContratQuery orderByRetenueGarantie($order = Criteria::ASC) Order by the retenue_garantie column
 * @method CommonExecContratQuery orderByPourcentageRetenueGarantie($order = Criteria::ASC) Order by the pourcentage_retenue_garantie column
 * @method CommonExecContratQuery orderByMontantRetenuGarantie($order = Criteria::ASC) Order by the montant_retenu_garantie column
 * @method CommonExecContratQuery orderByPourcentagePrelevementGarantie($order = Criteria::ASC) Order by the pourcentage_prelevement_garantie column
 * @method CommonExecContratQuery orderByMontantAvance($order = Criteria::ASC) Order by the montant_avance column
 * @method CommonExecContratQuery orderByDelaiPartiel($order = Criteria::ASC) Order by the delai_partiel column
 * @method CommonExecContratQuery orderByDelaiContrat($order = Criteria::ASC) Order by the delai_contrat column
 * @method CommonExecContratQuery orderByUniteDelaiContrat($order = Criteria::ASC) Order by the unite_delai_contrat column
 * @method CommonExecContratQuery orderByDateApprobation($order = Criteria::ASC) Order by the date_approbation column
 * @method CommonExecContratQuery orderByDateNotificationApprobation($order = Criteria::ASC) Order by the date_notification_approbation column
 * @method CommonExecContratQuery orderByDateFin($order = Criteria::ASC) Order by the date_fin column
 * @method CommonExecContratQuery orderByDateCrea($order = Criteria::ASC) Order by the date_crea column
 * @method CommonExecContratQuery orderByIdAgentCrea($order = Criteria::ASC) Order by the id_agent_crea column
 * @method CommonExecContratQuery orderByDateModif($order = Criteria::ASC) Order by the date_modif column
 * @method CommonExecContratQuery orderByIdAgentModif($order = Criteria::ASC) Order by the id_agent_modif column
 * @method CommonExecContratQuery orderByDelaiReel($order = Criteria::ASC) Order by the delai_reel column
 * @method CommonExecContratQuery orderByDepassement($order = Criteria::ASC) Order by the depassement column
 * @method CommonExecContratQuery orderByDateMajDelaiReel($order = Criteria::ASC) Order by the date_maj_delai_reel column
 * @method CommonExecContratQuery orderByIdParapheur($order = Criteria::ASC) Order by the id_parapheur column
 * @method CommonExecContratQuery orderByStatutParapheur($order = Criteria::ASC) Order by the statut_parapheur column
 * @method CommonExecContratQuery orderByDateClotureParapheur($order = Criteria::ASC) Order by the date_cloture_parapheur column
 * @method CommonExecContratQuery orderByGarantie($order = Criteria::ASC) Order by the garantie column
 * @method CommonExecContratQuery orderByDureeGarantie($order = Criteria::ASC) Order by the duree_garantie column
 * @method CommonExecContratQuery orderByUniteGarantie($order = Criteria::ASC) Order by the unite_garantie column
 * @method CommonExecContratQuery orderByTypePenalite($order = Criteria::ASC) Order by the type_penalite column
 * @method CommonExecContratQuery orderByPourcentagePenalite($order = Criteria::ASC) Order by the pourcentage_penalite column
 * @method CommonExecContratQuery orderByMontantPenalite($order = Criteria::ASC) Order by the montant_penalite column
 * @method CommonExecContratQuery orderByPlafondPenalite($order = Criteria::ASC) Order by the plafond_penalite column
 * @method CommonExecContratQuery orderByModePassation($order = Criteria::ASC) Order by the mode_passation column
 * @method CommonExecContratQuery orderByLieMarche($order = Criteria::ASC) Order by the lie_marche column
 * @method CommonExecContratQuery orderByNumChapeau($order = Criteria::ASC) Order by the num_chapeau column
 * @method CommonExecContratQuery orderByOsPhase($order = Criteria::ASC) Order by the os_phase column
 * @method CommonExecContratQuery orderByPrestationDemande($order = Criteria::ASC) Order by the prestation_demande column
 * @method CommonExecContratQuery orderByForfaitJh($order = Criteria::ASC) Order by the forfait_jh column
 * @method CommonExecContratQuery orderByQuantiteJh($order = Criteria::ASC) Order by the quantite_jh column
 * @method CommonExecContratQuery orderByNatureMarche($order = Criteria::ASC) Order by the nature_marche column
 * @method CommonExecContratQuery orderByDateDebut($order = Criteria::ASC) Order by the date_debut column
 * @method CommonExecContratQuery orderByPlurianuelle($order = Criteria::ASC) Order by the plurianuelle column
 * @method CommonExecContratQuery orderByTrancheconditionnelle($order = Criteria::ASC) Order by the trancheconditionnelle column
 * @method CommonExecContratQuery orderByIdAgentCr($order = Criteria::ASC) Order by the id_agent_cr column
 * @method CommonExecContratQuery orderByDevise($order = Criteria::ASC) Order by the devise column
 * @method CommonExecContratQuery orderByIdContratSource($order = Criteria::ASC) Order by the id_contrat_source column
 *
 * @method CommonExecContratQuery groupByIdContrat() Group by the id_contrat column
 * @method CommonExecContratQuery groupByConsultationRef() Group by the consultation_ref column
 * @method CommonExecContratQuery groupByOrganisme() Group by the organisme column
 * @method CommonExecContratQuery groupByIdDecisionEnveloppe() Group by the id_decision_enveloppe column
 * @method CommonExecContratQuery groupByNumero() Group by the numero column
 * @method CommonExecContratQuery groupByStatut() Group by the statut column
 * @method CommonExecContratQuery groupByIdTypeContrat() Group by the id_type_contrat column
 * @method CommonExecContratQuery groupByIdTypeStructure() Group by the id_type_structure column
 * @method CommonExecContratQuery groupByObjet() Group by the objet column
 * @method CommonExecContratQuery groupByNumConsultation() Group by the num_consultation column
 * @method CommonExecContratQuery groupByIdNaturePrestation() Group by the id_nature_prestation column
 * @method CommonExecContratQuery groupByIdService() Group by the id_service column
 * @method CommonExecContratQuery groupByIdServiceGerant() Group by the id_service_gerant column
 * @method CommonExecContratQuery groupByIdAgentGestion() Group by the id_agent_gestion column
 * @method CommonExecContratQuery groupByReconductible() Group by the reconductible column
 * @method CommonExecContratQuery groupByNombreReconduction() Group by the nombre_reconduction column
 * @method CommonExecContratQuery groupByMontantHt() Group by the montant_ht column
 * @method CommonExecContratQuery groupByMontantTtc() Group by the montant_ttc column
 * @method CommonExecContratQuery groupByMontantMin() Group by the montant_min column
 * @method CommonExecContratQuery groupByMontantMax() Group by the montant_max column
 * @method CommonExecContratQuery groupByMontantMinTtc() Group by the montant_min_ttc column
 * @method CommonExecContratQuery groupByMontantMaxTtc() Group by the montant_max_ttc column
 * @method CommonExecContratQuery groupByMontantFactureHt() Group by the montant_facture_ht column
 * @method CommonExecContratQuery groupByMontantFactureTtc() Group by the montant_facture_ttc column
 * @method CommonExecContratQuery groupByMontantPayeHt() Group by the montant_paye_ht column
 * @method CommonExecContratQuery groupByMontantPayeTtc() Group by the montant_paye_ttc column
 * @method CommonExecContratQuery groupByMontantCaution() Group by the montant_caution column
 * @method CommonExecContratQuery groupByPourcentageCaution() Group by the pourcentage_caution column
 * @method CommonExecContratQuery groupByRetenueGarantie() Group by the retenue_garantie column
 * @method CommonExecContratQuery groupByPourcentageRetenueGarantie() Group by the pourcentage_retenue_garantie column
 * @method CommonExecContratQuery groupByMontantRetenuGarantie() Group by the montant_retenu_garantie column
 * @method CommonExecContratQuery groupByPourcentagePrelevementGarantie() Group by the pourcentage_prelevement_garantie column
 * @method CommonExecContratQuery groupByMontantAvance() Group by the montant_avance column
 * @method CommonExecContratQuery groupByDelaiPartiel() Group by the delai_partiel column
 * @method CommonExecContratQuery groupByDelaiContrat() Group by the delai_contrat column
 * @method CommonExecContratQuery groupByUniteDelaiContrat() Group by the unite_delai_contrat column
 * @method CommonExecContratQuery groupByDateApprobation() Group by the date_approbation column
 * @method CommonExecContratQuery groupByDateNotificationApprobation() Group by the date_notification_approbation column
 * @method CommonExecContratQuery groupByDateFin() Group by the date_fin column
 * @method CommonExecContratQuery groupByDateCrea() Group by the date_crea column
 * @method CommonExecContratQuery groupByIdAgentCrea() Group by the id_agent_crea column
 * @method CommonExecContratQuery groupByDateModif() Group by the date_modif column
 * @method CommonExecContratQuery groupByIdAgentModif() Group by the id_agent_modif column
 * @method CommonExecContratQuery groupByDelaiReel() Group by the delai_reel column
 * @method CommonExecContratQuery groupByDepassement() Group by the depassement column
 * @method CommonExecContratQuery groupByDateMajDelaiReel() Group by the date_maj_delai_reel column
 * @method CommonExecContratQuery groupByIdParapheur() Group by the id_parapheur column
 * @method CommonExecContratQuery groupByStatutParapheur() Group by the statut_parapheur column
 * @method CommonExecContratQuery groupByDateClotureParapheur() Group by the date_cloture_parapheur column
 * @method CommonExecContratQuery groupByGarantie() Group by the garantie column
 * @method CommonExecContratQuery groupByDureeGarantie() Group by the duree_garantie column
 * @method CommonExecContratQuery groupByUniteGarantie() Group by the unite_garantie column
 * @method CommonExecContratQuery groupByTypePenalite() Group by the type_penalite column
 * @method CommonExecContratQuery groupByPourcentagePenalite() Group by the pourcentage_penalite column
 * @method CommonExecContratQuery groupByMontantPenalite() Group by the montant_penalite column
 * @method CommonExecContratQuery groupByPlafondPenalite() Group by the plafond_penalite column
 * @method CommonExecContratQuery groupByModePassation() Group by the mode_passation column
 * @method CommonExecContratQuery groupByLieMarche() Group by the lie_marche column
 * @method CommonExecContratQuery groupByNumChapeau() Group by the num_chapeau column
 * @method CommonExecContratQuery groupByOsPhase() Group by the os_phase column
 * @method CommonExecContratQuery groupByPrestationDemande() Group by the prestation_demande column
 * @method CommonExecContratQuery groupByForfaitJh() Group by the forfait_jh column
 * @method CommonExecContratQuery groupByQuantiteJh() Group by the quantite_jh column
 * @method CommonExecContratQuery groupByNatureMarche() Group by the nature_marche column
 * @method CommonExecContratQuery groupByDateDebut() Group by the date_debut column
 * @method CommonExecContratQuery groupByPlurianuelle() Group by the plurianuelle column
 * @method CommonExecContratQuery groupByTrancheconditionnelle() Group by the trancheconditionnelle column
 * @method CommonExecContratQuery groupByIdAgentCr() Group by the id_agent_cr column
 * @method CommonExecContratQuery groupByDevise() Group by the devise column
 * @method CommonExecContratQuery groupByIdContratSource() Group by the id_contrat_source column
 *
 * @method CommonExecContratQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonExecContratQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonExecContratQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonExecContratQuery leftJoinCommonExecTypeContrat($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecTypeContrat relation
 * @method CommonExecContratQuery rightJoinCommonExecTypeContrat($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecTypeContrat relation
 * @method CommonExecContratQuery innerJoinCommonExecTypeContrat($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecTypeContrat relation
 *
 * @method CommonExecContratQuery leftJoinCommonExecTypeStructure($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecTypeStructure relation
 * @method CommonExecContratQuery rightJoinCommonExecTypeStructure($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecTypeStructure relation
 * @method CommonExecContratQuery innerJoinCommonExecTypeStructure($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecTypeStructure relation
 *
 * @method CommonExecContratQuery leftJoinCommonExecAgentContrat($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecAgentContrat relation
 * @method CommonExecContratQuery rightJoinCommonExecAgentContrat($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecAgentContrat relation
 * @method CommonExecContratQuery innerJoinCommonExecAgentContrat($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecAgentContrat relation
 *
 * @method CommonExecContratQuery leftJoinCommonExecAvenant($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecAvenant relation
 * @method CommonExecContratQuery rightJoinCommonExecAvenant($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecAvenant relation
 * @method CommonExecContratQuery innerJoinCommonExecAvenant($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecAvenant relation
 *
 * @method CommonExecContratQuery leftJoinCommonExecContact($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecContact relation
 * @method CommonExecContratQuery rightJoinCommonExecContact($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecContact relation
 * @method CommonExecContratQuery innerJoinCommonExecContact($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecContact relation
 *
 * @method CommonExecContratQuery leftJoinCommonExecContractant($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecContractant relation
 * @method CommonExecContratQuery rightJoinCommonExecContractant($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecContractant relation
 * @method CommonExecContratQuery innerJoinCommonExecContractant($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecContractant relation
 *
 * @method CommonExecContratQuery leftJoinCommonExecDossierPaiement($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecDossierPaiement relation
 * @method CommonExecContratQuery rightJoinCommonExecDossierPaiement($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecDossierPaiement relation
 * @method CommonExecContratQuery innerJoinCommonExecDossierPaiement($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecDossierPaiement relation
 *
 * @method CommonExecContratQuery leftJoinCommonExecEvenement($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecEvenement relation
 * @method CommonExecContratQuery rightJoinCommonExecEvenement($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecEvenement relation
 * @method CommonExecContratQuery innerJoinCommonExecEvenement($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecEvenement relation
 *
 * @method CommonExecContratQuery leftJoinCommonExecFacture($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecFacture relation
 * @method CommonExecContratQuery rightJoinCommonExecFacture($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecFacture relation
 * @method CommonExecContratQuery innerJoinCommonExecFacture($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecFacture relation
 *
 * @method CommonExecContratQuery leftJoinCommonExecHistoriquePrix($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecHistoriquePrix relation
 * @method CommonExecContratQuery rightJoinCommonExecHistoriquePrix($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecHistoriquePrix relation
 * @method CommonExecContratQuery innerJoinCommonExecHistoriquePrix($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecHistoriquePrix relation
 *
 * @method CommonExecContratQuery leftJoinCommonExecInscritContrat($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecInscritContrat relation
 * @method CommonExecContratQuery rightJoinCommonExecInscritContrat($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecInscritContrat relation
 * @method CommonExecContratQuery innerJoinCommonExecInscritContrat($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecInscritContrat relation
 *
 * @method CommonExecContratQuery leftJoinCommonExecLivrableContrat($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecLivrableContrat relation
 * @method CommonExecContratQuery rightJoinCommonExecLivrableContrat($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecLivrableContrat relation
 * @method CommonExecContratQuery innerJoinCommonExecLivrableContrat($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecLivrableContrat relation
 *
 * @method CommonExecContratQuery leftJoinCommonExecPhase($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecPhase relation
 * @method CommonExecContratQuery rightJoinCommonExecPhase($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecPhase relation
 * @method CommonExecContratQuery innerJoinCommonExecPhase($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecPhase relation
 *
 * @method CommonExecContratQuery leftJoinCommonExecPiece($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecPiece relation
 * @method CommonExecContratQuery rightJoinCommonExecPiece($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecPiece relation
 * @method CommonExecContratQuery innerJoinCommonExecPiece($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecPiece relation
 *
 * @method CommonExecContratQuery leftJoinCommonExecPieceAvenant($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecPieceAvenant relation
 * @method CommonExecContratQuery rightJoinCommonExecPieceAvenant($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecPieceAvenant relation
 * @method CommonExecContratQuery innerJoinCommonExecPieceAvenant($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecPieceAvenant relation
 *
 * @method CommonExecContratQuery leftJoinCommonExecPieceContrat($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecPieceContrat relation
 * @method CommonExecContratQuery rightJoinCommonExecPieceContrat($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecPieceContrat relation
 * @method CommonExecContratQuery innerJoinCommonExecPieceContrat($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecPieceContrat relation
 *
 * @method CommonExecContratQuery leftJoinCommonExecPieceDossierpaiement($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecPieceDossierpaiement relation
 * @method CommonExecContratQuery rightJoinCommonExecPieceDossierpaiement($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecPieceDossierpaiement relation
 * @method CommonExecContratQuery innerJoinCommonExecPieceDossierpaiement($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecPieceDossierpaiement relation
 *
 * @method CommonExecContratQuery leftJoinCommonExecPieceEvenement($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecPieceEvenement relation
 * @method CommonExecContratQuery rightJoinCommonExecPieceEvenement($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecPieceEvenement relation
 * @method CommonExecContratQuery innerJoinCommonExecPieceEvenement($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecPieceEvenement relation
 *
 * @method CommonExecContratQuery leftJoinCommonExecPieceFacture($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecPieceFacture relation
 * @method CommonExecContratQuery rightJoinCommonExecPieceFacture($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecPieceFacture relation
 * @method CommonExecContratQuery innerJoinCommonExecPieceFacture($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecPieceFacture relation
 *
 * @method CommonExecContratQuery leftJoinCommonExecPrix($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecPrix relation
 * @method CommonExecContratQuery rightJoinCommonExecPrix($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecPrix relation
 * @method CommonExecContratQuery innerJoinCommonExecPrix($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecPrix relation
 *
 * @method CommonExecContratQuery leftJoinCommonExecPrixAvenant($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecPrixAvenant relation
 * @method CommonExecContratQuery rightJoinCommonExecPrixAvenant($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecPrixAvenant relation
 * @method CommonExecContratQuery innerJoinCommonExecPrixAvenant($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecPrixAvenant relation
 *
 * @method CommonExecContratQuery leftJoinCommonExecRepartition($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecRepartition relation
 * @method CommonExecContratQuery rightJoinCommonExecRepartition($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecRepartition relation
 * @method CommonExecContratQuery innerJoinCommonExecRepartition($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecRepartition relation
 *
 * @method CommonExecContrat findOne(PropelPDO $con = null) Return the first CommonExecContrat matching the query
 * @method CommonExecContrat findOneOrCreate(PropelPDO $con = null) Return the first CommonExecContrat matching the query, or a new CommonExecContrat object populated from the query conditions when no match is found
 *
 * @method CommonExecContrat findOneByConsultationRef(int $consultation_ref) Return the first CommonExecContrat filtered by the consultation_ref column
 * @method CommonExecContrat findOneByOrganisme(string $organisme) Return the first CommonExecContrat filtered by the organisme column
 * @method CommonExecContrat findOneByIdDecisionEnveloppe(int $id_decision_enveloppe) Return the first CommonExecContrat filtered by the id_decision_enveloppe column
 * @method CommonExecContrat findOneByNumero(string $numero) Return the first CommonExecContrat filtered by the numero column
 * @method CommonExecContrat findOneByStatut(int $statut) Return the first CommonExecContrat filtered by the statut column
 * @method CommonExecContrat findOneByIdTypeContrat(int $id_type_contrat) Return the first CommonExecContrat filtered by the id_type_contrat column
 * @method CommonExecContrat findOneByIdTypeStructure(int $id_type_structure) Return the first CommonExecContrat filtered by the id_type_structure column
 * @method CommonExecContrat findOneByObjet(string $objet) Return the first CommonExecContrat filtered by the objet column
 * @method CommonExecContrat findOneByNumConsultation(string $num_consultation) Return the first CommonExecContrat filtered by the num_consultation column
 * @method CommonExecContrat findOneByIdNaturePrestation(string $id_nature_prestation) Return the first CommonExecContrat filtered by the id_nature_prestation column
 * @method CommonExecContrat findOneByIdService(int $id_service) Return the first CommonExecContrat filtered by the id_service column
 * @method CommonExecContrat findOneByIdServiceGerant(int $id_service_gerant) Return the first CommonExecContrat filtered by the id_service_gerant column
 * @method CommonExecContrat findOneByIdAgentGestion(int $id_agent_gestion) Return the first CommonExecContrat filtered by the id_agent_gestion column
 * @method CommonExecContrat findOneByReconductible(int $reconductible) Return the first CommonExecContrat filtered by the reconductible column
 * @method CommonExecContrat findOneByNombreReconduction(int $nombre_reconduction) Return the first CommonExecContrat filtered by the nombre_reconduction column
 * @method CommonExecContrat findOneByMontantHt(double $montant_ht) Return the first CommonExecContrat filtered by the montant_ht column
 * @method CommonExecContrat findOneByMontantTtc(double $montant_ttc) Return the first CommonExecContrat filtered by the montant_ttc column
 * @method CommonExecContrat findOneByMontantMin(double $montant_min) Return the first CommonExecContrat filtered by the montant_min column
 * @method CommonExecContrat findOneByMontantMax(double $montant_max) Return the first CommonExecContrat filtered by the montant_max column
 * @method CommonExecContrat findOneByMontantMinTtc(double $montant_min_ttc) Return the first CommonExecContrat filtered by the montant_min_ttc column
 * @method CommonExecContrat findOneByMontantMaxTtc(double $montant_max_ttc) Return the first CommonExecContrat filtered by the montant_max_ttc column
 * @method CommonExecContrat findOneByMontantFactureHt(double $montant_facture_ht) Return the first CommonExecContrat filtered by the montant_facture_ht column
 * @method CommonExecContrat findOneByMontantFactureTtc(double $montant_facture_ttc) Return the first CommonExecContrat filtered by the montant_facture_ttc column
 * @method CommonExecContrat findOneByMontantPayeHt(double $montant_paye_ht) Return the first CommonExecContrat filtered by the montant_paye_ht column
 * @method CommonExecContrat findOneByMontantPayeTtc(double $montant_paye_ttc) Return the first CommonExecContrat filtered by the montant_paye_ttc column
 * @method CommonExecContrat findOneByMontantCaution(double $montant_caution) Return the first CommonExecContrat filtered by the montant_caution column
 * @method CommonExecContrat findOneByPourcentageCaution(double $pourcentage_caution) Return the first CommonExecContrat filtered by the pourcentage_caution column
 * @method CommonExecContrat findOneByRetenueGarantie(string $retenue_garantie) Return the first CommonExecContrat filtered by the retenue_garantie column
 * @method CommonExecContrat findOneByPourcentageRetenueGarantie(double $pourcentage_retenue_garantie) Return the first CommonExecContrat filtered by the pourcentage_retenue_garantie column
 * @method CommonExecContrat findOneByMontantRetenuGarantie(double $montant_retenu_garantie) Return the first CommonExecContrat filtered by the montant_retenu_garantie column
 * @method CommonExecContrat findOneByPourcentagePrelevementGarantie(double $pourcentage_prelevement_garantie) Return the first CommonExecContrat filtered by the pourcentage_prelevement_garantie column
 * @method CommonExecContrat findOneByMontantAvance(double $montant_avance) Return the first CommonExecContrat filtered by the montant_avance column
 * @method CommonExecContrat findOneByDelaiPartiel(int $delai_partiel) Return the first CommonExecContrat filtered by the delai_partiel column
 * @method CommonExecContrat findOneByDelaiContrat(double $delai_contrat) Return the first CommonExecContrat filtered by the delai_contrat column
 * @method CommonExecContrat findOneByUniteDelaiContrat(int $unite_delai_contrat) Return the first CommonExecContrat filtered by the unite_delai_contrat column
 * @method CommonExecContrat findOneByDateApprobation(string $date_approbation) Return the first CommonExecContrat filtered by the date_approbation column
 * @method CommonExecContrat findOneByDateNotificationApprobation(string $date_notification_approbation) Return the first CommonExecContrat filtered by the date_notification_approbation column
 * @method CommonExecContrat findOneByDateFin(string $date_fin) Return the first CommonExecContrat filtered by the date_fin column
 * @method CommonExecContrat findOneByDateCrea(string $date_crea) Return the first CommonExecContrat filtered by the date_crea column
 * @method CommonExecContrat findOneByIdAgentCrea(int $id_agent_crea) Return the first CommonExecContrat filtered by the id_agent_crea column
 * @method CommonExecContrat findOneByDateModif(string $date_modif) Return the first CommonExecContrat filtered by the date_modif column
 * @method CommonExecContrat findOneByIdAgentModif(int $id_agent_modif) Return the first CommonExecContrat filtered by the id_agent_modif column
 * @method CommonExecContrat findOneByDelaiReel(double $delai_reel) Return the first CommonExecContrat filtered by the delai_reel column
 * @method CommonExecContrat findOneByDepassement(double $depassement) Return the first CommonExecContrat filtered by the depassement column
 * @method CommonExecContrat findOneByDateMajDelaiReel(string $date_maj_delai_reel) Return the first CommonExecContrat filtered by the date_maj_delai_reel column
 * @method CommonExecContrat findOneByIdParapheur(int $id_parapheur) Return the first CommonExecContrat filtered by the id_parapheur column
 * @method CommonExecContrat findOneByStatutParapheur(int $statut_parapheur) Return the first CommonExecContrat filtered by the statut_parapheur column
 * @method CommonExecContrat findOneByDateClotureParapheur(string $date_cloture_parapheur) Return the first CommonExecContrat filtered by the date_cloture_parapheur column
 * @method CommonExecContrat findOneByGarantie(string $garantie) Return the first CommonExecContrat filtered by the garantie column
 * @method CommonExecContrat findOneByDureeGarantie(double $duree_garantie) Return the first CommonExecContrat filtered by the duree_garantie column
 * @method CommonExecContrat findOneByUniteGarantie(int $unite_garantie) Return the first CommonExecContrat filtered by the unite_garantie column
 * @method CommonExecContrat findOneByTypePenalite(string $type_penalite) Return the first CommonExecContrat filtered by the type_penalite column
 * @method CommonExecContrat findOneByPourcentagePenalite(double $pourcentage_penalite) Return the first CommonExecContrat filtered by the pourcentage_penalite column
 * @method CommonExecContrat findOneByMontantPenalite(double $montant_penalite) Return the first CommonExecContrat filtered by the montant_penalite column
 * @method CommonExecContrat findOneByPlafondPenalite(double $plafond_penalite) Return the first CommonExecContrat filtered by the plafond_penalite column
 * @method CommonExecContrat findOneByModePassation(int $mode_passation) Return the first CommonExecContrat filtered by the mode_passation column
 * @method CommonExecContrat findOneByLieMarche(string $lie_marche) Return the first CommonExecContrat filtered by the lie_marche column
 * @method CommonExecContrat findOneByNumChapeau(int $num_chapeau) Return the first CommonExecContrat filtered by the num_chapeau column
 * @method CommonExecContrat findOneByOsPhase(string $os_phase) Return the first CommonExecContrat filtered by the os_phase column
 * @method CommonExecContrat findOneByPrestationDemande(string $prestation_demande) Return the first CommonExecContrat filtered by the prestation_demande column
 * @method CommonExecContrat findOneByForfaitJh(string $forfait_jh) Return the first CommonExecContrat filtered by the forfait_jh column
 * @method CommonExecContrat findOneByQuantiteJh(double $quantite_jh) Return the first CommonExecContrat filtered by the quantite_jh column
 * @method CommonExecContrat findOneByNatureMarche(int $nature_marche) Return the first CommonExecContrat filtered by the nature_marche column
 * @method CommonExecContrat findOneByDateDebut(string $date_debut) Return the first CommonExecContrat filtered by the date_debut column
 * @method CommonExecContrat findOneByPlurianuelle(string $plurianuelle) Return the first CommonExecContrat filtered by the plurianuelle column
 * @method CommonExecContrat findOneByTrancheconditionnelle(string $trancheconditionnelle) Return the first CommonExecContrat filtered by the trancheconditionnelle column
 * @method CommonExecContrat findOneByIdAgentCr(int $id_agent_cr) Return the first CommonExecContrat filtered by the id_agent_cr column
 * @method CommonExecContrat findOneByDevise(string $devise) Return the first CommonExecContrat filtered by the devise column
 * @method CommonExecContrat findOneByIdContratSource(int $id_contrat_source) Return the first CommonExecContrat filtered by the id_contrat_source column
 *
 * @method array findByIdContrat(int $id_contrat) Return CommonExecContrat objects filtered by the id_contrat column
 * @method array findByConsultationRef(int $consultation_ref) Return CommonExecContrat objects filtered by the consultation_ref column
 * @method array findByOrganisme(string $organisme) Return CommonExecContrat objects filtered by the organisme column
 * @method array findByIdDecisionEnveloppe(int $id_decision_enveloppe) Return CommonExecContrat objects filtered by the id_decision_enveloppe column
 * @method array findByNumero(string $numero) Return CommonExecContrat objects filtered by the numero column
 * @method array findByStatut(int $statut) Return CommonExecContrat objects filtered by the statut column
 * @method array findByIdTypeContrat(int $id_type_contrat) Return CommonExecContrat objects filtered by the id_type_contrat column
 * @method array findByIdTypeStructure(int $id_type_structure) Return CommonExecContrat objects filtered by the id_type_structure column
 * @method array findByObjet(string $objet) Return CommonExecContrat objects filtered by the objet column
 * @method array findByNumConsultation(string $num_consultation) Return CommonExecContrat objects filtered by the num_consultation column
 * @method array findByIdNaturePrestation(string $id_nature_prestation) Return CommonExecContrat objects filtered by the id_nature_prestation column
 * @method array findByIdService(int $id_service) Return CommonExecContrat objects filtered by the id_service column
 * @method array findByIdServiceGerant(int $id_service_gerant) Return CommonExecContrat objects filtered by the id_service_gerant column
 * @method array findByIdAgentGestion(int $id_agent_gestion) Return CommonExecContrat objects filtered by the id_agent_gestion column
 * @method array findByReconductible(int $reconductible) Return CommonExecContrat objects filtered by the reconductible column
 * @method array findByNombreReconduction(int $nombre_reconduction) Return CommonExecContrat objects filtered by the nombre_reconduction column
 * @method array findByMontantHt(double $montant_ht) Return CommonExecContrat objects filtered by the montant_ht column
 * @method array findByMontantTtc(double $montant_ttc) Return CommonExecContrat objects filtered by the montant_ttc column
 * @method array findByMontantMin(double $montant_min) Return CommonExecContrat objects filtered by the montant_min column
 * @method array findByMontantMax(double $montant_max) Return CommonExecContrat objects filtered by the montant_max column
 * @method array findByMontantMinTtc(double $montant_min_ttc) Return CommonExecContrat objects filtered by the montant_min_ttc column
 * @method array findByMontantMaxTtc(double $montant_max_ttc) Return CommonExecContrat objects filtered by the montant_max_ttc column
 * @method array findByMontantFactureHt(double $montant_facture_ht) Return CommonExecContrat objects filtered by the montant_facture_ht column
 * @method array findByMontantFactureTtc(double $montant_facture_ttc) Return CommonExecContrat objects filtered by the montant_facture_ttc column
 * @method array findByMontantPayeHt(double $montant_paye_ht) Return CommonExecContrat objects filtered by the montant_paye_ht column
 * @method array findByMontantPayeTtc(double $montant_paye_ttc) Return CommonExecContrat objects filtered by the montant_paye_ttc column
 * @method array findByMontantCaution(double $montant_caution) Return CommonExecContrat objects filtered by the montant_caution column
 * @method array findByPourcentageCaution(double $pourcentage_caution) Return CommonExecContrat objects filtered by the pourcentage_caution column
 * @method array findByRetenueGarantie(string $retenue_garantie) Return CommonExecContrat objects filtered by the retenue_garantie column
 * @method array findByPourcentageRetenueGarantie(double $pourcentage_retenue_garantie) Return CommonExecContrat objects filtered by the pourcentage_retenue_garantie column
 * @method array findByMontantRetenuGarantie(double $montant_retenu_garantie) Return CommonExecContrat objects filtered by the montant_retenu_garantie column
 * @method array findByPourcentagePrelevementGarantie(double $pourcentage_prelevement_garantie) Return CommonExecContrat objects filtered by the pourcentage_prelevement_garantie column
 * @method array findByMontantAvance(double $montant_avance) Return CommonExecContrat objects filtered by the montant_avance column
 * @method array findByDelaiPartiel(int $delai_partiel) Return CommonExecContrat objects filtered by the delai_partiel column
 * @method array findByDelaiContrat(double $delai_contrat) Return CommonExecContrat objects filtered by the delai_contrat column
 * @method array findByUniteDelaiContrat(int $unite_delai_contrat) Return CommonExecContrat objects filtered by the unite_delai_contrat column
 * @method array findByDateApprobation(string $date_approbation) Return CommonExecContrat objects filtered by the date_approbation column
 * @method array findByDateNotificationApprobation(string $date_notification_approbation) Return CommonExecContrat objects filtered by the date_notification_approbation column
 * @method array findByDateFin(string $date_fin) Return CommonExecContrat objects filtered by the date_fin column
 * @method array findByDateCrea(string $date_crea) Return CommonExecContrat objects filtered by the date_crea column
 * @method array findByIdAgentCrea(int $id_agent_crea) Return CommonExecContrat objects filtered by the id_agent_crea column
 * @method array findByDateModif(string $date_modif) Return CommonExecContrat objects filtered by the date_modif column
 * @method array findByIdAgentModif(int $id_agent_modif) Return CommonExecContrat objects filtered by the id_agent_modif column
 * @method array findByDelaiReel(double $delai_reel) Return CommonExecContrat objects filtered by the delai_reel column
 * @method array findByDepassement(double $depassement) Return CommonExecContrat objects filtered by the depassement column
 * @method array findByDateMajDelaiReel(string $date_maj_delai_reel) Return CommonExecContrat objects filtered by the date_maj_delai_reel column
 * @method array findByIdParapheur(int $id_parapheur) Return CommonExecContrat objects filtered by the id_parapheur column
 * @method array findByStatutParapheur(int $statut_parapheur) Return CommonExecContrat objects filtered by the statut_parapheur column
 * @method array findByDateClotureParapheur(string $date_cloture_parapheur) Return CommonExecContrat objects filtered by the date_cloture_parapheur column
 * @method array findByGarantie(string $garantie) Return CommonExecContrat objects filtered by the garantie column
 * @method array findByDureeGarantie(double $duree_garantie) Return CommonExecContrat objects filtered by the duree_garantie column
 * @method array findByUniteGarantie(int $unite_garantie) Return CommonExecContrat objects filtered by the unite_garantie column
 * @method array findByTypePenalite(string $type_penalite) Return CommonExecContrat objects filtered by the type_penalite column
 * @method array findByPourcentagePenalite(double $pourcentage_penalite) Return CommonExecContrat objects filtered by the pourcentage_penalite column
 * @method array findByMontantPenalite(double $montant_penalite) Return CommonExecContrat objects filtered by the montant_penalite column
 * @method array findByPlafondPenalite(double $plafond_penalite) Return CommonExecContrat objects filtered by the plafond_penalite column
 * @method array findByModePassation(int $mode_passation) Return CommonExecContrat objects filtered by the mode_passation column
 * @method array findByLieMarche(string $lie_marche) Return CommonExecContrat objects filtered by the lie_marche column
 * @method array findByNumChapeau(int $num_chapeau) Return CommonExecContrat objects filtered by the num_chapeau column
 * @method array findByOsPhase(string $os_phase) Return CommonExecContrat objects filtered by the os_phase column
 * @method array findByPrestationDemande(string $prestation_demande) Return CommonExecContrat objects filtered by the prestation_demande column
 * @method array findByForfaitJh(string $forfait_jh) Return CommonExecContrat objects filtered by the forfait_jh column
 * @method array findByQuantiteJh(double $quantite_jh) Return CommonExecContrat objects filtered by the quantite_jh column
 * @method array findByNatureMarche(int $nature_marche) Return CommonExecContrat objects filtered by the nature_marche column
 * @method array findByDateDebut(string $date_debut) Return CommonExecContrat objects filtered by the date_debut column
 * @method array findByPlurianuelle(string $plurianuelle) Return CommonExecContrat objects filtered by the plurianuelle column
 * @method array findByTrancheconditionnelle(string $trancheconditionnelle) Return CommonExecContrat objects filtered by the trancheconditionnelle column
 * @method array findByIdAgentCr(int $id_agent_cr) Return CommonExecContrat objects filtered by the id_agent_cr column
 * @method array findByDevise(string $devise) Return CommonExecContrat objects filtered by the devise column
 * @method array findByIdContratSource(int $id_contrat_source) Return CommonExecContrat objects filtered by the id_contrat_source column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonExecContratQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonExecContratQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonExecContrat', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonExecContratQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonExecContratQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonExecContratQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonExecContratQuery) {
            return $criteria;
        }
        $query = new CommonExecContratQuery();
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
     * @return   CommonExecContrat|CommonExecContrat[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonExecContratPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonExecContratPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonExecContrat A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdContrat($key, $con = null)
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
     * @return                 CommonExecContrat A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_contrat`, `consultation_ref`, `organisme`, `id_decision_enveloppe`, `numero`, `statut`, `id_type_contrat`, `id_type_structure`, `objet`, `num_consultation`, `id_nature_prestation`, `id_service`, `id_service_gerant`, `id_agent_gestion`, `reconductible`, `nombre_reconduction`, `montant_ht`, `montant_ttc`, `montant_min`, `montant_max`, `montant_min_ttc`, `montant_max_ttc`, `montant_facture_ht`, `montant_facture_ttc`, `montant_paye_ht`, `montant_paye_ttc`, `montant_caution`, `pourcentage_caution`, `retenue_garantie`, `pourcentage_retenue_garantie`, `montant_retenu_garantie`, `pourcentage_prelevement_garantie`, `montant_avance`, `delai_partiel`, `delai_contrat`, `unite_delai_contrat`, `date_approbation`, `date_notification_approbation`, `date_fin`, `date_crea`, `id_agent_crea`, `date_modif`, `id_agent_modif`, `delai_reel`, `depassement`, `date_maj_delai_reel`, `id_parapheur`, `statut_parapheur`, `date_cloture_parapheur`, `garantie`, `duree_garantie`, `unite_garantie`, `type_penalite`, `pourcentage_penalite`, `montant_penalite`, `plafond_penalite`, `mode_passation`, `lie_marche`, `num_chapeau`, `os_phase`, `prestation_demande`, `forfait_jh`, `quantite_jh`, `nature_marche`, `date_debut`, `plurianuelle`, `trancheconditionnelle`, `id_agent_cr`, `devise`, `id_contrat_source` FROM `exec_contrat` WHERE `id_contrat` = :p0';
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
            $obj = new CommonExecContrat();
            $obj->hydrate($row);
            CommonExecContratPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonExecContrat|CommonExecContrat[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonExecContrat[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonExecContratPeer::ID_CONTRAT, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonExecContratPeer::ID_CONTRAT, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_contrat column
     *
     * Example usage:
     * <code>
     * $query->filterByIdContrat(1234); // WHERE id_contrat = 1234
     * $query->filterByIdContrat(array(12, 34)); // WHERE id_contrat IN (12, 34)
     * $query->filterByIdContrat(array('min' => 12)); // WHERE id_contrat >= 12
     * $query->filterByIdContrat(array('max' => 12)); // WHERE id_contrat <= 12
     * </code>
     *
     * @param     mixed $idContrat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByIdContrat($idContrat = null, $comparison = null)
    {
        if (is_array($idContrat)) {
            $useMinMax = false;
            if (isset($idContrat['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::ID_CONTRAT, $idContrat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idContrat['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::ID_CONTRAT, $idContrat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::ID_CONTRAT, $idContrat, $comparison);
    }

    /**
     * Filter the query on the consultation_ref column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultationRef(1234); // WHERE consultation_ref = 1234
     * $query->filterByConsultationRef(array(12, 34)); // WHERE consultation_ref IN (12, 34)
     * $query->filterByConsultationRef(array('min' => 12)); // WHERE consultation_ref >= 12
     * $query->filterByConsultationRef(array('max' => 12)); // WHERE consultation_ref <= 12
     * </code>
     *
     * @param     mixed $consultationRef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByConsultationRef($consultationRef = null, $comparison = null)
    {
        if (is_array($consultationRef)) {
            $useMinMax = false;
            if (isset($consultationRef['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::CONSULTATION_REF, $consultationRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($consultationRef['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::CONSULTATION_REF, $consultationRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::CONSULTATION_REF, $consultationRef, $comparison);
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
     * @return CommonExecContratQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonExecContratPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the id_decision_enveloppe column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDecisionEnveloppe(1234); // WHERE id_decision_enveloppe = 1234
     * $query->filterByIdDecisionEnveloppe(array(12, 34)); // WHERE id_decision_enveloppe IN (12, 34)
     * $query->filterByIdDecisionEnveloppe(array('min' => 12)); // WHERE id_decision_enveloppe >= 12
     * $query->filterByIdDecisionEnveloppe(array('max' => 12)); // WHERE id_decision_enveloppe <= 12
     * </code>
     *
     * @param     mixed $idDecisionEnveloppe The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByIdDecisionEnveloppe($idDecisionEnveloppe = null, $comparison = null)
    {
        if (is_array($idDecisionEnveloppe)) {
            $useMinMax = false;
            if (isset($idDecisionEnveloppe['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::ID_DECISION_ENVELOPPE, $idDecisionEnveloppe['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDecisionEnveloppe['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::ID_DECISION_ENVELOPPE, $idDecisionEnveloppe['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::ID_DECISION_ENVELOPPE, $idDecisionEnveloppe, $comparison);
    }

    /**
     * Filter the query on the numero column
     *
     * Example usage:
     * <code>
     * $query->filterByNumero('fooValue');   // WHERE numero = 'fooValue'
     * $query->filterByNumero('%fooValue%'); // WHERE numero LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numero The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByNumero($numero = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numero)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numero)) {
                $numero = str_replace('*', '%', $numero);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::NUMERO, $numero, $comparison);
    }

    /**
     * Filter the query on the statut column
     *
     * Example usage:
     * <code>
     * $query->filterByStatut(1234); // WHERE statut = 1234
     * $query->filterByStatut(array(12, 34)); // WHERE statut IN (12, 34)
     * $query->filterByStatut(array('min' => 12)); // WHERE statut >= 12
     * $query->filterByStatut(array('max' => 12)); // WHERE statut <= 12
     * </code>
     *
     * @param     mixed $statut The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByStatut($statut = null, $comparison = null)
    {
        if (is_array($statut)) {
            $useMinMax = false;
            if (isset($statut['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::STATUT, $statut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statut['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::STATUT, $statut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::STATUT, $statut, $comparison);
    }

    /**
     * Filter the query on the id_type_contrat column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTypeContrat(1234); // WHERE id_type_contrat = 1234
     * $query->filterByIdTypeContrat(array(12, 34)); // WHERE id_type_contrat IN (12, 34)
     * $query->filterByIdTypeContrat(array('min' => 12)); // WHERE id_type_contrat >= 12
     * $query->filterByIdTypeContrat(array('max' => 12)); // WHERE id_type_contrat <= 12
     * </code>
     *
     * @see       filterByCommonExecTypeContrat()
     *
     * @param     mixed $idTypeContrat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByIdTypeContrat($idTypeContrat = null, $comparison = null)
    {
        if (is_array($idTypeContrat)) {
            $useMinMax = false;
            if (isset($idTypeContrat['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::ID_TYPE_CONTRAT, $idTypeContrat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeContrat['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::ID_TYPE_CONTRAT, $idTypeContrat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::ID_TYPE_CONTRAT, $idTypeContrat, $comparison);
    }

    /**
     * Filter the query on the id_type_structure column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTypeStructure(1234); // WHERE id_type_structure = 1234
     * $query->filterByIdTypeStructure(array(12, 34)); // WHERE id_type_structure IN (12, 34)
     * $query->filterByIdTypeStructure(array('min' => 12)); // WHERE id_type_structure >= 12
     * $query->filterByIdTypeStructure(array('max' => 12)); // WHERE id_type_structure <= 12
     * </code>
     *
     * @see       filterByCommonExecTypeStructure()
     *
     * @param     mixed $idTypeStructure The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByIdTypeStructure($idTypeStructure = null, $comparison = null)
    {
        if (is_array($idTypeStructure)) {
            $useMinMax = false;
            if (isset($idTypeStructure['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::ID_TYPE_STRUCTURE, $idTypeStructure['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeStructure['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::ID_TYPE_STRUCTURE, $idTypeStructure['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::ID_TYPE_STRUCTURE, $idTypeStructure, $comparison);
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
     * @return CommonExecContratQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonExecContratPeer::OBJET, $objet, $comparison);
    }

    /**
     * Filter the query on the num_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByNumConsultation('fooValue');   // WHERE num_consultation = 'fooValue'
     * $query->filterByNumConsultation('%fooValue%'); // WHERE num_consultation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numConsultation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByNumConsultation($numConsultation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numConsultation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numConsultation)) {
                $numConsultation = str_replace('*', '%', $numConsultation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::NUM_CONSULTATION, $numConsultation, $comparison);
    }

    /**
     * Filter the query on the id_nature_prestation column
     *
     * Example usage:
     * <code>
     * $query->filterByIdNaturePrestation('fooValue');   // WHERE id_nature_prestation = 'fooValue'
     * $query->filterByIdNaturePrestation('%fooValue%'); // WHERE id_nature_prestation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idNaturePrestation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByIdNaturePrestation($idNaturePrestation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idNaturePrestation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idNaturePrestation)) {
                $idNaturePrestation = str_replace('*', '%', $idNaturePrestation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::ID_NATURE_PRESTATION, $idNaturePrestation, $comparison);
    }

    /**
     * Filter the query on the id_service column
     *
     * Example usage:
     * <code>
     * $query->filterByIdService(1234); // WHERE id_service = 1234
     * $query->filterByIdService(array(12, 34)); // WHERE id_service IN (12, 34)
     * $query->filterByIdService(array('min' => 12)); // WHERE id_service >= 12
     * $query->filterByIdService(array('max' => 12)); // WHERE id_service <= 12
     * </code>
     *
     * @param     mixed $idService The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByIdService($idService = null, $comparison = null)
    {
        if (is_array($idService)) {
            $useMinMax = false;
            if (isset($idService['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::ID_SERVICE, $idService['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idService['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::ID_SERVICE, $idService['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::ID_SERVICE, $idService, $comparison);
    }

    /**
     * Filter the query on the id_service_gerant column
     *
     * Example usage:
     * <code>
     * $query->filterByIdServiceGerant(1234); // WHERE id_service_gerant = 1234
     * $query->filterByIdServiceGerant(array(12, 34)); // WHERE id_service_gerant IN (12, 34)
     * $query->filterByIdServiceGerant(array('min' => 12)); // WHERE id_service_gerant >= 12
     * $query->filterByIdServiceGerant(array('max' => 12)); // WHERE id_service_gerant <= 12
     * </code>
     *
     * @param     mixed $idServiceGerant The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByIdServiceGerant($idServiceGerant = null, $comparison = null)
    {
        if (is_array($idServiceGerant)) {
            $useMinMax = false;
            if (isset($idServiceGerant['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::ID_SERVICE_GERANT, $idServiceGerant['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idServiceGerant['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::ID_SERVICE_GERANT, $idServiceGerant['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::ID_SERVICE_GERANT, $idServiceGerant, $comparison);
    }

    /**
     * Filter the query on the id_agent_gestion column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentGestion(1234); // WHERE id_agent_gestion = 1234
     * $query->filterByIdAgentGestion(array(12, 34)); // WHERE id_agent_gestion IN (12, 34)
     * $query->filterByIdAgentGestion(array('min' => 12)); // WHERE id_agent_gestion >= 12
     * $query->filterByIdAgentGestion(array('max' => 12)); // WHERE id_agent_gestion <= 12
     * </code>
     *
     * @param     mixed $idAgentGestion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByIdAgentGestion($idAgentGestion = null, $comparison = null)
    {
        if (is_array($idAgentGestion)) {
            $useMinMax = false;
            if (isset($idAgentGestion['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::ID_AGENT_GESTION, $idAgentGestion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentGestion['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::ID_AGENT_GESTION, $idAgentGestion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::ID_AGENT_GESTION, $idAgentGestion, $comparison);
    }

    /**
     * Filter the query on the reconductible column
     *
     * Example usage:
     * <code>
     * $query->filterByReconductible(1234); // WHERE reconductible = 1234
     * $query->filterByReconductible(array(12, 34)); // WHERE reconductible IN (12, 34)
     * $query->filterByReconductible(array('min' => 12)); // WHERE reconductible >= 12
     * $query->filterByReconductible(array('max' => 12)); // WHERE reconductible <= 12
     * </code>
     *
     * @param     mixed $reconductible The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByReconductible($reconductible = null, $comparison = null)
    {
        if (is_array($reconductible)) {
            $useMinMax = false;
            if (isset($reconductible['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::RECONDUCTIBLE, $reconductible['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reconductible['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::RECONDUCTIBLE, $reconductible['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::RECONDUCTIBLE, $reconductible, $comparison);
    }

    /**
     * Filter the query on the nombre_reconduction column
     *
     * Example usage:
     * <code>
     * $query->filterByNombreReconduction(1234); // WHERE nombre_reconduction = 1234
     * $query->filterByNombreReconduction(array(12, 34)); // WHERE nombre_reconduction IN (12, 34)
     * $query->filterByNombreReconduction(array('min' => 12)); // WHERE nombre_reconduction >= 12
     * $query->filterByNombreReconduction(array('max' => 12)); // WHERE nombre_reconduction <= 12
     * </code>
     *
     * @param     mixed $nombreReconduction The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByNombreReconduction($nombreReconduction = null, $comparison = null)
    {
        if (is_array($nombreReconduction)) {
            $useMinMax = false;
            if (isset($nombreReconduction['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::NOMBRE_RECONDUCTION, $nombreReconduction['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nombreReconduction['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::NOMBRE_RECONDUCTION, $nombreReconduction['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::NOMBRE_RECONDUCTION, $nombreReconduction, $comparison);
    }

    /**
     * Filter the query on the montant_ht column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantHt(1234); // WHERE montant_ht = 1234
     * $query->filterByMontantHt(array(12, 34)); // WHERE montant_ht IN (12, 34)
     * $query->filterByMontantHt(array('min' => 12)); // WHERE montant_ht >= 12
     * $query->filterByMontantHt(array('max' => 12)); // WHERE montant_ht <= 12
     * </code>
     *
     * @param     mixed $montantHt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByMontantHt($montantHt = null, $comparison = null)
    {
        if (is_array($montantHt)) {
            $useMinMax = false;
            if (isset($montantHt['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::MONTANT_HT, $montantHt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantHt['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::MONTANT_HT, $montantHt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::MONTANT_HT, $montantHt, $comparison);
    }

    /**
     * Filter the query on the montant_ttc column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantTtc(1234); // WHERE montant_ttc = 1234
     * $query->filterByMontantTtc(array(12, 34)); // WHERE montant_ttc IN (12, 34)
     * $query->filterByMontantTtc(array('min' => 12)); // WHERE montant_ttc >= 12
     * $query->filterByMontantTtc(array('max' => 12)); // WHERE montant_ttc <= 12
     * </code>
     *
     * @param     mixed $montantTtc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByMontantTtc($montantTtc = null, $comparison = null)
    {
        if (is_array($montantTtc)) {
            $useMinMax = false;
            if (isset($montantTtc['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::MONTANT_TTC, $montantTtc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantTtc['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::MONTANT_TTC, $montantTtc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::MONTANT_TTC, $montantTtc, $comparison);
    }

    /**
     * Filter the query on the montant_min column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantMin(1234); // WHERE montant_min = 1234
     * $query->filterByMontantMin(array(12, 34)); // WHERE montant_min IN (12, 34)
     * $query->filterByMontantMin(array('min' => 12)); // WHERE montant_min >= 12
     * $query->filterByMontantMin(array('max' => 12)); // WHERE montant_min <= 12
     * </code>
     *
     * @param     mixed $montantMin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByMontantMin($montantMin = null, $comparison = null)
    {
        if (is_array($montantMin)) {
            $useMinMax = false;
            if (isset($montantMin['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::MONTANT_MIN, $montantMin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantMin['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::MONTANT_MIN, $montantMin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::MONTANT_MIN, $montantMin, $comparison);
    }

    /**
     * Filter the query on the montant_max column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantMax(1234); // WHERE montant_max = 1234
     * $query->filterByMontantMax(array(12, 34)); // WHERE montant_max IN (12, 34)
     * $query->filterByMontantMax(array('min' => 12)); // WHERE montant_max >= 12
     * $query->filterByMontantMax(array('max' => 12)); // WHERE montant_max <= 12
     * </code>
     *
     * @param     mixed $montantMax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByMontantMax($montantMax = null, $comparison = null)
    {
        if (is_array($montantMax)) {
            $useMinMax = false;
            if (isset($montantMax['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::MONTANT_MAX, $montantMax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantMax['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::MONTANT_MAX, $montantMax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::MONTANT_MAX, $montantMax, $comparison);
    }

    /**
     * Filter the query on the montant_min_ttc column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantMinTtc(1234); // WHERE montant_min_ttc = 1234
     * $query->filterByMontantMinTtc(array(12, 34)); // WHERE montant_min_ttc IN (12, 34)
     * $query->filterByMontantMinTtc(array('min' => 12)); // WHERE montant_min_ttc >= 12
     * $query->filterByMontantMinTtc(array('max' => 12)); // WHERE montant_min_ttc <= 12
     * </code>
     *
     * @param     mixed $montantMinTtc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByMontantMinTtc($montantMinTtc = null, $comparison = null)
    {
        if (is_array($montantMinTtc)) {
            $useMinMax = false;
            if (isset($montantMinTtc['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::MONTANT_MIN_TTC, $montantMinTtc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantMinTtc['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::MONTANT_MIN_TTC, $montantMinTtc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::MONTANT_MIN_TTC, $montantMinTtc, $comparison);
    }

    /**
     * Filter the query on the montant_max_ttc column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantMaxTtc(1234); // WHERE montant_max_ttc = 1234
     * $query->filterByMontantMaxTtc(array(12, 34)); // WHERE montant_max_ttc IN (12, 34)
     * $query->filterByMontantMaxTtc(array('min' => 12)); // WHERE montant_max_ttc >= 12
     * $query->filterByMontantMaxTtc(array('max' => 12)); // WHERE montant_max_ttc <= 12
     * </code>
     *
     * @param     mixed $montantMaxTtc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByMontantMaxTtc($montantMaxTtc = null, $comparison = null)
    {
        if (is_array($montantMaxTtc)) {
            $useMinMax = false;
            if (isset($montantMaxTtc['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::MONTANT_MAX_TTC, $montantMaxTtc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantMaxTtc['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::MONTANT_MAX_TTC, $montantMaxTtc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::MONTANT_MAX_TTC, $montantMaxTtc, $comparison);
    }

    /**
     * Filter the query on the montant_facture_ht column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantFactureHt(1234); // WHERE montant_facture_ht = 1234
     * $query->filterByMontantFactureHt(array(12, 34)); // WHERE montant_facture_ht IN (12, 34)
     * $query->filterByMontantFactureHt(array('min' => 12)); // WHERE montant_facture_ht >= 12
     * $query->filterByMontantFactureHt(array('max' => 12)); // WHERE montant_facture_ht <= 12
     * </code>
     *
     * @param     mixed $montantFactureHt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByMontantFactureHt($montantFactureHt = null, $comparison = null)
    {
        if (is_array($montantFactureHt)) {
            $useMinMax = false;
            if (isset($montantFactureHt['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::MONTANT_FACTURE_HT, $montantFactureHt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantFactureHt['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::MONTANT_FACTURE_HT, $montantFactureHt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::MONTANT_FACTURE_HT, $montantFactureHt, $comparison);
    }

    /**
     * Filter the query on the montant_facture_ttc column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantFactureTtc(1234); // WHERE montant_facture_ttc = 1234
     * $query->filterByMontantFactureTtc(array(12, 34)); // WHERE montant_facture_ttc IN (12, 34)
     * $query->filterByMontantFactureTtc(array('min' => 12)); // WHERE montant_facture_ttc >= 12
     * $query->filterByMontantFactureTtc(array('max' => 12)); // WHERE montant_facture_ttc <= 12
     * </code>
     *
     * @param     mixed $montantFactureTtc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByMontantFactureTtc($montantFactureTtc = null, $comparison = null)
    {
        if (is_array($montantFactureTtc)) {
            $useMinMax = false;
            if (isset($montantFactureTtc['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::MONTANT_FACTURE_TTC, $montantFactureTtc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantFactureTtc['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::MONTANT_FACTURE_TTC, $montantFactureTtc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::MONTANT_FACTURE_TTC, $montantFactureTtc, $comparison);
    }

    /**
     * Filter the query on the montant_paye_ht column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantPayeHt(1234); // WHERE montant_paye_ht = 1234
     * $query->filterByMontantPayeHt(array(12, 34)); // WHERE montant_paye_ht IN (12, 34)
     * $query->filterByMontantPayeHt(array('min' => 12)); // WHERE montant_paye_ht >= 12
     * $query->filterByMontantPayeHt(array('max' => 12)); // WHERE montant_paye_ht <= 12
     * </code>
     *
     * @param     mixed $montantPayeHt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByMontantPayeHt($montantPayeHt = null, $comparison = null)
    {
        if (is_array($montantPayeHt)) {
            $useMinMax = false;
            if (isset($montantPayeHt['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::MONTANT_PAYE_HT, $montantPayeHt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantPayeHt['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::MONTANT_PAYE_HT, $montantPayeHt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::MONTANT_PAYE_HT, $montantPayeHt, $comparison);
    }

    /**
     * Filter the query on the montant_paye_ttc column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantPayeTtc(1234); // WHERE montant_paye_ttc = 1234
     * $query->filterByMontantPayeTtc(array(12, 34)); // WHERE montant_paye_ttc IN (12, 34)
     * $query->filterByMontantPayeTtc(array('min' => 12)); // WHERE montant_paye_ttc >= 12
     * $query->filterByMontantPayeTtc(array('max' => 12)); // WHERE montant_paye_ttc <= 12
     * </code>
     *
     * @param     mixed $montantPayeTtc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByMontantPayeTtc($montantPayeTtc = null, $comparison = null)
    {
        if (is_array($montantPayeTtc)) {
            $useMinMax = false;
            if (isset($montantPayeTtc['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::MONTANT_PAYE_TTC, $montantPayeTtc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantPayeTtc['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::MONTANT_PAYE_TTC, $montantPayeTtc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::MONTANT_PAYE_TTC, $montantPayeTtc, $comparison);
    }

    /**
     * Filter the query on the montant_caution column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantCaution(1234); // WHERE montant_caution = 1234
     * $query->filterByMontantCaution(array(12, 34)); // WHERE montant_caution IN (12, 34)
     * $query->filterByMontantCaution(array('min' => 12)); // WHERE montant_caution >= 12
     * $query->filterByMontantCaution(array('max' => 12)); // WHERE montant_caution <= 12
     * </code>
     *
     * @param     mixed $montantCaution The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByMontantCaution($montantCaution = null, $comparison = null)
    {
        if (is_array($montantCaution)) {
            $useMinMax = false;
            if (isset($montantCaution['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::MONTANT_CAUTION, $montantCaution['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantCaution['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::MONTANT_CAUTION, $montantCaution['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::MONTANT_CAUTION, $montantCaution, $comparison);
    }

    /**
     * Filter the query on the pourcentage_caution column
     *
     * Example usage:
     * <code>
     * $query->filterByPourcentageCaution(1234); // WHERE pourcentage_caution = 1234
     * $query->filterByPourcentageCaution(array(12, 34)); // WHERE pourcentage_caution IN (12, 34)
     * $query->filterByPourcentageCaution(array('min' => 12)); // WHERE pourcentage_caution >= 12
     * $query->filterByPourcentageCaution(array('max' => 12)); // WHERE pourcentage_caution <= 12
     * </code>
     *
     * @param     mixed $pourcentageCaution The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByPourcentageCaution($pourcentageCaution = null, $comparison = null)
    {
        if (is_array($pourcentageCaution)) {
            $useMinMax = false;
            if (isset($pourcentageCaution['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::POURCENTAGE_CAUTION, $pourcentageCaution['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pourcentageCaution['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::POURCENTAGE_CAUTION, $pourcentageCaution['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::POURCENTAGE_CAUTION, $pourcentageCaution, $comparison);
    }

    /**
     * Filter the query on the retenue_garantie column
     *
     * Example usage:
     * <code>
     * $query->filterByRetenueGarantie('fooValue');   // WHERE retenue_garantie = 'fooValue'
     * $query->filterByRetenueGarantie('%fooValue%'); // WHERE retenue_garantie LIKE '%fooValue%'
     * </code>
     *
     * @param     string $retenueGarantie The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByRetenueGarantie($retenueGarantie = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($retenueGarantie)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $retenueGarantie)) {
                $retenueGarantie = str_replace('*', '%', $retenueGarantie);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::RETENUE_GARANTIE, $retenueGarantie, $comparison);
    }

    /**
     * Filter the query on the pourcentage_retenue_garantie column
     *
     * Example usage:
     * <code>
     * $query->filterByPourcentageRetenueGarantie(1234); // WHERE pourcentage_retenue_garantie = 1234
     * $query->filterByPourcentageRetenueGarantie(array(12, 34)); // WHERE pourcentage_retenue_garantie IN (12, 34)
     * $query->filterByPourcentageRetenueGarantie(array('min' => 12)); // WHERE pourcentage_retenue_garantie >= 12
     * $query->filterByPourcentageRetenueGarantie(array('max' => 12)); // WHERE pourcentage_retenue_garantie <= 12
     * </code>
     *
     * @param     mixed $pourcentageRetenueGarantie The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByPourcentageRetenueGarantie($pourcentageRetenueGarantie = null, $comparison = null)
    {
        if (is_array($pourcentageRetenueGarantie)) {
            $useMinMax = false;
            if (isset($pourcentageRetenueGarantie['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::POURCENTAGE_RETENUE_GARANTIE, $pourcentageRetenueGarantie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pourcentageRetenueGarantie['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::POURCENTAGE_RETENUE_GARANTIE, $pourcentageRetenueGarantie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::POURCENTAGE_RETENUE_GARANTIE, $pourcentageRetenueGarantie, $comparison);
    }

    /**
     * Filter the query on the montant_retenu_garantie column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantRetenuGarantie(1234); // WHERE montant_retenu_garantie = 1234
     * $query->filterByMontantRetenuGarantie(array(12, 34)); // WHERE montant_retenu_garantie IN (12, 34)
     * $query->filterByMontantRetenuGarantie(array('min' => 12)); // WHERE montant_retenu_garantie >= 12
     * $query->filterByMontantRetenuGarantie(array('max' => 12)); // WHERE montant_retenu_garantie <= 12
     * </code>
     *
     * @param     mixed $montantRetenuGarantie The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByMontantRetenuGarantie($montantRetenuGarantie = null, $comparison = null)
    {
        if (is_array($montantRetenuGarantie)) {
            $useMinMax = false;
            if (isset($montantRetenuGarantie['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::MONTANT_RETENU_GARANTIE, $montantRetenuGarantie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantRetenuGarantie['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::MONTANT_RETENU_GARANTIE, $montantRetenuGarantie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::MONTANT_RETENU_GARANTIE, $montantRetenuGarantie, $comparison);
    }

    /**
     * Filter the query on the pourcentage_prelevement_garantie column
     *
     * Example usage:
     * <code>
     * $query->filterByPourcentagePrelevementGarantie(1234); // WHERE pourcentage_prelevement_garantie = 1234
     * $query->filterByPourcentagePrelevementGarantie(array(12, 34)); // WHERE pourcentage_prelevement_garantie IN (12, 34)
     * $query->filterByPourcentagePrelevementGarantie(array('min' => 12)); // WHERE pourcentage_prelevement_garantie >= 12
     * $query->filterByPourcentagePrelevementGarantie(array('max' => 12)); // WHERE pourcentage_prelevement_garantie <= 12
     * </code>
     *
     * @param     mixed $pourcentagePrelevementGarantie The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByPourcentagePrelevementGarantie($pourcentagePrelevementGarantie = null, $comparison = null)
    {
        if (is_array($pourcentagePrelevementGarantie)) {
            $useMinMax = false;
            if (isset($pourcentagePrelevementGarantie['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::POURCENTAGE_PRELEVEMENT_GARANTIE, $pourcentagePrelevementGarantie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pourcentagePrelevementGarantie['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::POURCENTAGE_PRELEVEMENT_GARANTIE, $pourcentagePrelevementGarantie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::POURCENTAGE_PRELEVEMENT_GARANTIE, $pourcentagePrelevementGarantie, $comparison);
    }

    /**
     * Filter the query on the montant_avance column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantAvance(1234); // WHERE montant_avance = 1234
     * $query->filterByMontantAvance(array(12, 34)); // WHERE montant_avance IN (12, 34)
     * $query->filterByMontantAvance(array('min' => 12)); // WHERE montant_avance >= 12
     * $query->filterByMontantAvance(array('max' => 12)); // WHERE montant_avance <= 12
     * </code>
     *
     * @param     mixed $montantAvance The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByMontantAvance($montantAvance = null, $comparison = null)
    {
        if (is_array($montantAvance)) {
            $useMinMax = false;
            if (isset($montantAvance['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::MONTANT_AVANCE, $montantAvance['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantAvance['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::MONTANT_AVANCE, $montantAvance['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::MONTANT_AVANCE, $montantAvance, $comparison);
    }

    /**
     * Filter the query on the delai_partiel column
     *
     * Example usage:
     * <code>
     * $query->filterByDelaiPartiel(1234); // WHERE delai_partiel = 1234
     * $query->filterByDelaiPartiel(array(12, 34)); // WHERE delai_partiel IN (12, 34)
     * $query->filterByDelaiPartiel(array('min' => 12)); // WHERE delai_partiel >= 12
     * $query->filterByDelaiPartiel(array('max' => 12)); // WHERE delai_partiel <= 12
     * </code>
     *
     * @param     mixed $delaiPartiel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByDelaiPartiel($delaiPartiel = null, $comparison = null)
    {
        if (is_array($delaiPartiel)) {
            $useMinMax = false;
            if (isset($delaiPartiel['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::DELAI_PARTIEL, $delaiPartiel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delaiPartiel['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::DELAI_PARTIEL, $delaiPartiel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::DELAI_PARTIEL, $delaiPartiel, $comparison);
    }

    /**
     * Filter the query on the delai_contrat column
     *
     * Example usage:
     * <code>
     * $query->filterByDelaiContrat(1234); // WHERE delai_contrat = 1234
     * $query->filterByDelaiContrat(array(12, 34)); // WHERE delai_contrat IN (12, 34)
     * $query->filterByDelaiContrat(array('min' => 12)); // WHERE delai_contrat >= 12
     * $query->filterByDelaiContrat(array('max' => 12)); // WHERE delai_contrat <= 12
     * </code>
     *
     * @param     mixed $delaiContrat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByDelaiContrat($delaiContrat = null, $comparison = null)
    {
        if (is_array($delaiContrat)) {
            $useMinMax = false;
            if (isset($delaiContrat['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::DELAI_CONTRAT, $delaiContrat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delaiContrat['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::DELAI_CONTRAT, $delaiContrat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::DELAI_CONTRAT, $delaiContrat, $comparison);
    }

    /**
     * Filter the query on the unite_delai_contrat column
     *
     * Example usage:
     * <code>
     * $query->filterByUniteDelaiContrat(1234); // WHERE unite_delai_contrat = 1234
     * $query->filterByUniteDelaiContrat(array(12, 34)); // WHERE unite_delai_contrat IN (12, 34)
     * $query->filterByUniteDelaiContrat(array('min' => 12)); // WHERE unite_delai_contrat >= 12
     * $query->filterByUniteDelaiContrat(array('max' => 12)); // WHERE unite_delai_contrat <= 12
     * </code>
     *
     * @param     mixed $uniteDelaiContrat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByUniteDelaiContrat($uniteDelaiContrat = null, $comparison = null)
    {
        if (is_array($uniteDelaiContrat)) {
            $useMinMax = false;
            if (isset($uniteDelaiContrat['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::UNITE_DELAI_CONTRAT, $uniteDelaiContrat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($uniteDelaiContrat['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::UNITE_DELAI_CONTRAT, $uniteDelaiContrat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::UNITE_DELAI_CONTRAT, $uniteDelaiContrat, $comparison);
    }

    /**
     * Filter the query on the date_approbation column
     *
     * Example usage:
     * <code>
     * $query->filterByDateApprobation('2011-03-14'); // WHERE date_approbation = '2011-03-14'
     * $query->filterByDateApprobation('now'); // WHERE date_approbation = '2011-03-14'
     * $query->filterByDateApprobation(array('max' => 'yesterday')); // WHERE date_approbation > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateApprobation The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByDateApprobation($dateApprobation = null, $comparison = null)
    {
        if (is_array($dateApprobation)) {
            $useMinMax = false;
            if (isset($dateApprobation['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::DATE_APPROBATION, $dateApprobation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateApprobation['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::DATE_APPROBATION, $dateApprobation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::DATE_APPROBATION, $dateApprobation, $comparison);
    }

    /**
     * Filter the query on the date_notification_approbation column
     *
     * Example usage:
     * <code>
     * $query->filterByDateNotificationApprobation('2011-03-14'); // WHERE date_notification_approbation = '2011-03-14'
     * $query->filterByDateNotificationApprobation('now'); // WHERE date_notification_approbation = '2011-03-14'
     * $query->filterByDateNotificationApprobation(array('max' => 'yesterday')); // WHERE date_notification_approbation > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateNotificationApprobation The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByDateNotificationApprobation($dateNotificationApprobation = null, $comparison = null)
    {
        if (is_array($dateNotificationApprobation)) {
            $useMinMax = false;
            if (isset($dateNotificationApprobation['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::DATE_NOTIFICATION_APPROBATION, $dateNotificationApprobation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateNotificationApprobation['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::DATE_NOTIFICATION_APPROBATION, $dateNotificationApprobation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::DATE_NOTIFICATION_APPROBATION, $dateNotificationApprobation, $comparison);
    }

    /**
     * Filter the query on the date_fin column
     *
     * Example usage:
     * <code>
     * $query->filterByDateFin('2011-03-14'); // WHERE date_fin = '2011-03-14'
     * $query->filterByDateFin('now'); // WHERE date_fin = '2011-03-14'
     * $query->filterByDateFin(array('max' => 'yesterday')); // WHERE date_fin > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateFin The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByDateFin($dateFin = null, $comparison = null)
    {
        if (is_array($dateFin)) {
            $useMinMax = false;
            if (isset($dateFin['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::DATE_FIN, $dateFin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateFin['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::DATE_FIN, $dateFin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::DATE_FIN, $dateFin, $comparison);
    }

    /**
     * Filter the query on the date_crea column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCrea('2011-03-14'); // WHERE date_crea = '2011-03-14'
     * $query->filterByDateCrea('now'); // WHERE date_crea = '2011-03-14'
     * $query->filterByDateCrea(array('max' => 'yesterday')); // WHERE date_crea > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateCrea The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByDateCrea($dateCrea = null, $comparison = null)
    {
        if (is_array($dateCrea)) {
            $useMinMax = false;
            if (isset($dateCrea['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::DATE_CREA, $dateCrea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCrea['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::DATE_CREA, $dateCrea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::DATE_CREA, $dateCrea, $comparison);
    }

    /**
     * Filter the query on the id_agent_crea column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentCrea(1234); // WHERE id_agent_crea = 1234
     * $query->filterByIdAgentCrea(array(12, 34)); // WHERE id_agent_crea IN (12, 34)
     * $query->filterByIdAgentCrea(array('min' => 12)); // WHERE id_agent_crea >= 12
     * $query->filterByIdAgentCrea(array('max' => 12)); // WHERE id_agent_crea <= 12
     * </code>
     *
     * @param     mixed $idAgentCrea The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByIdAgentCrea($idAgentCrea = null, $comparison = null)
    {
        if (is_array($idAgentCrea)) {
            $useMinMax = false;
            if (isset($idAgentCrea['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::ID_AGENT_CREA, $idAgentCrea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentCrea['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::ID_AGENT_CREA, $idAgentCrea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::ID_AGENT_CREA, $idAgentCrea, $comparison);
    }

    /**
     * Filter the query on the date_modif column
     *
     * Example usage:
     * <code>
     * $query->filterByDateModif('2011-03-14'); // WHERE date_modif = '2011-03-14'
     * $query->filterByDateModif('now'); // WHERE date_modif = '2011-03-14'
     * $query->filterByDateModif(array('max' => 'yesterday')); // WHERE date_modif > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateModif The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByDateModif($dateModif = null, $comparison = null)
    {
        if (is_array($dateModif)) {
            $useMinMax = false;
            if (isset($dateModif['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::DATE_MODIF, $dateModif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateModif['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::DATE_MODIF, $dateModif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::DATE_MODIF, $dateModif, $comparison);
    }

    /**
     * Filter the query on the id_agent_modif column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentModif(1234); // WHERE id_agent_modif = 1234
     * $query->filterByIdAgentModif(array(12, 34)); // WHERE id_agent_modif IN (12, 34)
     * $query->filterByIdAgentModif(array('min' => 12)); // WHERE id_agent_modif >= 12
     * $query->filterByIdAgentModif(array('max' => 12)); // WHERE id_agent_modif <= 12
     * </code>
     *
     * @param     mixed $idAgentModif The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByIdAgentModif($idAgentModif = null, $comparison = null)
    {
        if (is_array($idAgentModif)) {
            $useMinMax = false;
            if (isset($idAgentModif['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::ID_AGENT_MODIF, $idAgentModif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentModif['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::ID_AGENT_MODIF, $idAgentModif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::ID_AGENT_MODIF, $idAgentModif, $comparison);
    }

    /**
     * Filter the query on the delai_reel column
     *
     * Example usage:
     * <code>
     * $query->filterByDelaiReel(1234); // WHERE delai_reel = 1234
     * $query->filterByDelaiReel(array(12, 34)); // WHERE delai_reel IN (12, 34)
     * $query->filterByDelaiReel(array('min' => 12)); // WHERE delai_reel >= 12
     * $query->filterByDelaiReel(array('max' => 12)); // WHERE delai_reel <= 12
     * </code>
     *
     * @param     mixed $delaiReel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByDelaiReel($delaiReel = null, $comparison = null)
    {
        if (is_array($delaiReel)) {
            $useMinMax = false;
            if (isset($delaiReel['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::DELAI_REEL, $delaiReel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delaiReel['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::DELAI_REEL, $delaiReel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::DELAI_REEL, $delaiReel, $comparison);
    }

    /**
     * Filter the query on the depassement column
     *
     * Example usage:
     * <code>
     * $query->filterByDepassement(1234); // WHERE depassement = 1234
     * $query->filterByDepassement(array(12, 34)); // WHERE depassement IN (12, 34)
     * $query->filterByDepassement(array('min' => 12)); // WHERE depassement >= 12
     * $query->filterByDepassement(array('max' => 12)); // WHERE depassement <= 12
     * </code>
     *
     * @param     mixed $depassement The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByDepassement($depassement = null, $comparison = null)
    {
        if (is_array($depassement)) {
            $useMinMax = false;
            if (isset($depassement['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::DEPASSEMENT, $depassement['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($depassement['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::DEPASSEMENT, $depassement['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::DEPASSEMENT, $depassement, $comparison);
    }

    /**
     * Filter the query on the date_maj_delai_reel column
     *
     * Example usage:
     * <code>
     * $query->filterByDateMajDelaiReel('2011-03-14'); // WHERE date_maj_delai_reel = '2011-03-14'
     * $query->filterByDateMajDelaiReel('now'); // WHERE date_maj_delai_reel = '2011-03-14'
     * $query->filterByDateMajDelaiReel(array('max' => 'yesterday')); // WHERE date_maj_delai_reel > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateMajDelaiReel The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByDateMajDelaiReel($dateMajDelaiReel = null, $comparison = null)
    {
        if (is_array($dateMajDelaiReel)) {
            $useMinMax = false;
            if (isset($dateMajDelaiReel['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::DATE_MAJ_DELAI_REEL, $dateMajDelaiReel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateMajDelaiReel['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::DATE_MAJ_DELAI_REEL, $dateMajDelaiReel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::DATE_MAJ_DELAI_REEL, $dateMajDelaiReel, $comparison);
    }

    /**
     * Filter the query on the id_parapheur column
     *
     * Example usage:
     * <code>
     * $query->filterByIdParapheur(1234); // WHERE id_parapheur = 1234
     * $query->filterByIdParapheur(array(12, 34)); // WHERE id_parapheur IN (12, 34)
     * $query->filterByIdParapheur(array('min' => 12)); // WHERE id_parapheur >= 12
     * $query->filterByIdParapheur(array('max' => 12)); // WHERE id_parapheur <= 12
     * </code>
     *
     * @param     mixed $idParapheur The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByIdParapheur($idParapheur = null, $comparison = null)
    {
        if (is_array($idParapheur)) {
            $useMinMax = false;
            if (isset($idParapheur['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::ID_PARAPHEUR, $idParapheur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idParapheur['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::ID_PARAPHEUR, $idParapheur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::ID_PARAPHEUR, $idParapheur, $comparison);
    }

    /**
     * Filter the query on the statut_parapheur column
     *
     * Example usage:
     * <code>
     * $query->filterByStatutParapheur(1234); // WHERE statut_parapheur = 1234
     * $query->filterByStatutParapheur(array(12, 34)); // WHERE statut_parapheur IN (12, 34)
     * $query->filterByStatutParapheur(array('min' => 12)); // WHERE statut_parapheur >= 12
     * $query->filterByStatutParapheur(array('max' => 12)); // WHERE statut_parapheur <= 12
     * </code>
     *
     * @param     mixed $statutParapheur The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByStatutParapheur($statutParapheur = null, $comparison = null)
    {
        if (is_array($statutParapheur)) {
            $useMinMax = false;
            if (isset($statutParapheur['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::STATUT_PARAPHEUR, $statutParapheur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statutParapheur['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::STATUT_PARAPHEUR, $statutParapheur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::STATUT_PARAPHEUR, $statutParapheur, $comparison);
    }

    /**
     * Filter the query on the date_cloture_parapheur column
     *
     * Example usage:
     * <code>
     * $query->filterByDateClotureParapheur('2011-03-14'); // WHERE date_cloture_parapheur = '2011-03-14'
     * $query->filterByDateClotureParapheur('now'); // WHERE date_cloture_parapheur = '2011-03-14'
     * $query->filterByDateClotureParapheur(array('max' => 'yesterday')); // WHERE date_cloture_parapheur > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateClotureParapheur The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByDateClotureParapheur($dateClotureParapheur = null, $comparison = null)
    {
        if (is_array($dateClotureParapheur)) {
            $useMinMax = false;
            if (isset($dateClotureParapheur['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::DATE_CLOTURE_PARAPHEUR, $dateClotureParapheur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateClotureParapheur['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::DATE_CLOTURE_PARAPHEUR, $dateClotureParapheur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::DATE_CLOTURE_PARAPHEUR, $dateClotureParapheur, $comparison);
    }

    /**
     * Filter the query on the garantie column
     *
     * Example usage:
     * <code>
     * $query->filterByGarantie('fooValue');   // WHERE garantie = 'fooValue'
     * $query->filterByGarantie('%fooValue%'); // WHERE garantie LIKE '%fooValue%'
     * </code>
     *
     * @param     string $garantie The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByGarantie($garantie = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($garantie)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $garantie)) {
                $garantie = str_replace('*', '%', $garantie);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::GARANTIE, $garantie, $comparison);
    }

    /**
     * Filter the query on the duree_garantie column
     *
     * Example usage:
     * <code>
     * $query->filterByDureeGarantie(1234); // WHERE duree_garantie = 1234
     * $query->filterByDureeGarantie(array(12, 34)); // WHERE duree_garantie IN (12, 34)
     * $query->filterByDureeGarantie(array('min' => 12)); // WHERE duree_garantie >= 12
     * $query->filterByDureeGarantie(array('max' => 12)); // WHERE duree_garantie <= 12
     * </code>
     *
     * @param     mixed $dureeGarantie The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByDureeGarantie($dureeGarantie = null, $comparison = null)
    {
        if (is_array($dureeGarantie)) {
            $useMinMax = false;
            if (isset($dureeGarantie['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::DUREE_GARANTIE, $dureeGarantie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dureeGarantie['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::DUREE_GARANTIE, $dureeGarantie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::DUREE_GARANTIE, $dureeGarantie, $comparison);
    }

    /**
     * Filter the query on the unite_garantie column
     *
     * Example usage:
     * <code>
     * $query->filterByUniteGarantie(1234); // WHERE unite_garantie = 1234
     * $query->filterByUniteGarantie(array(12, 34)); // WHERE unite_garantie IN (12, 34)
     * $query->filterByUniteGarantie(array('min' => 12)); // WHERE unite_garantie >= 12
     * $query->filterByUniteGarantie(array('max' => 12)); // WHERE unite_garantie <= 12
     * </code>
     *
     * @param     mixed $uniteGarantie The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByUniteGarantie($uniteGarantie = null, $comparison = null)
    {
        if (is_array($uniteGarantie)) {
            $useMinMax = false;
            if (isset($uniteGarantie['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::UNITE_GARANTIE, $uniteGarantie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($uniteGarantie['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::UNITE_GARANTIE, $uniteGarantie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::UNITE_GARANTIE, $uniteGarantie, $comparison);
    }

    /**
     * Filter the query on the type_penalite column
     *
     * Example usage:
     * <code>
     * $query->filterByTypePenalite('fooValue');   // WHERE type_penalite = 'fooValue'
     * $query->filterByTypePenalite('%fooValue%'); // WHERE type_penalite LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typePenalite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByTypePenalite($typePenalite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typePenalite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typePenalite)) {
                $typePenalite = str_replace('*', '%', $typePenalite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::TYPE_PENALITE, $typePenalite, $comparison);
    }

    /**
     * Filter the query on the pourcentage_penalite column
     *
     * Example usage:
     * <code>
     * $query->filterByPourcentagePenalite(1234); // WHERE pourcentage_penalite = 1234
     * $query->filterByPourcentagePenalite(array(12, 34)); // WHERE pourcentage_penalite IN (12, 34)
     * $query->filterByPourcentagePenalite(array('min' => 12)); // WHERE pourcentage_penalite >= 12
     * $query->filterByPourcentagePenalite(array('max' => 12)); // WHERE pourcentage_penalite <= 12
     * </code>
     *
     * @param     mixed $pourcentagePenalite The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByPourcentagePenalite($pourcentagePenalite = null, $comparison = null)
    {
        if (is_array($pourcentagePenalite)) {
            $useMinMax = false;
            if (isset($pourcentagePenalite['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::POURCENTAGE_PENALITE, $pourcentagePenalite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pourcentagePenalite['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::POURCENTAGE_PENALITE, $pourcentagePenalite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::POURCENTAGE_PENALITE, $pourcentagePenalite, $comparison);
    }

    /**
     * Filter the query on the montant_penalite column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantPenalite(1234); // WHERE montant_penalite = 1234
     * $query->filterByMontantPenalite(array(12, 34)); // WHERE montant_penalite IN (12, 34)
     * $query->filterByMontantPenalite(array('min' => 12)); // WHERE montant_penalite >= 12
     * $query->filterByMontantPenalite(array('max' => 12)); // WHERE montant_penalite <= 12
     * </code>
     *
     * @param     mixed $montantPenalite The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByMontantPenalite($montantPenalite = null, $comparison = null)
    {
        if (is_array($montantPenalite)) {
            $useMinMax = false;
            if (isset($montantPenalite['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::MONTANT_PENALITE, $montantPenalite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantPenalite['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::MONTANT_PENALITE, $montantPenalite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::MONTANT_PENALITE, $montantPenalite, $comparison);
    }

    /**
     * Filter the query on the plafond_penalite column
     *
     * Example usage:
     * <code>
     * $query->filterByPlafondPenalite(1234); // WHERE plafond_penalite = 1234
     * $query->filterByPlafondPenalite(array(12, 34)); // WHERE plafond_penalite IN (12, 34)
     * $query->filterByPlafondPenalite(array('min' => 12)); // WHERE plafond_penalite >= 12
     * $query->filterByPlafondPenalite(array('max' => 12)); // WHERE plafond_penalite <= 12
     * </code>
     *
     * @param     mixed $plafondPenalite The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByPlafondPenalite($plafondPenalite = null, $comparison = null)
    {
        if (is_array($plafondPenalite)) {
            $useMinMax = false;
            if (isset($plafondPenalite['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::PLAFOND_PENALITE, $plafondPenalite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($plafondPenalite['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::PLAFOND_PENALITE, $plafondPenalite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::PLAFOND_PENALITE, $plafondPenalite, $comparison);
    }

    /**
     * Filter the query on the mode_passation column
     *
     * Example usage:
     * <code>
     * $query->filterByModePassation(1234); // WHERE mode_passation = 1234
     * $query->filterByModePassation(array(12, 34)); // WHERE mode_passation IN (12, 34)
     * $query->filterByModePassation(array('min' => 12)); // WHERE mode_passation >= 12
     * $query->filterByModePassation(array('max' => 12)); // WHERE mode_passation <= 12
     * </code>
     *
     * @param     mixed $modePassation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByModePassation($modePassation = null, $comparison = null)
    {
        if (is_array($modePassation)) {
            $useMinMax = false;
            if (isset($modePassation['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::MODE_PASSATION, $modePassation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modePassation['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::MODE_PASSATION, $modePassation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::MODE_PASSATION, $modePassation, $comparison);
    }

    /**
     * Filter the query on the lie_marche column
     *
     * Example usage:
     * <code>
     * $query->filterByLieMarche('fooValue');   // WHERE lie_marche = 'fooValue'
     * $query->filterByLieMarche('%fooValue%'); // WHERE lie_marche LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lieMarche The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByLieMarche($lieMarche = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lieMarche)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lieMarche)) {
                $lieMarche = str_replace('*', '%', $lieMarche);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::LIE_MARCHE, $lieMarche, $comparison);
    }

    /**
     * Filter the query on the num_chapeau column
     *
     * Example usage:
     * <code>
     * $query->filterByNumChapeau(1234); // WHERE num_chapeau = 1234
     * $query->filterByNumChapeau(array(12, 34)); // WHERE num_chapeau IN (12, 34)
     * $query->filterByNumChapeau(array('min' => 12)); // WHERE num_chapeau >= 12
     * $query->filterByNumChapeau(array('max' => 12)); // WHERE num_chapeau <= 12
     * </code>
     *
     * @param     mixed $numChapeau The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByNumChapeau($numChapeau = null, $comparison = null)
    {
        if (is_array($numChapeau)) {
            $useMinMax = false;
            if (isset($numChapeau['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::NUM_CHAPEAU, $numChapeau['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numChapeau['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::NUM_CHAPEAU, $numChapeau['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::NUM_CHAPEAU, $numChapeau, $comparison);
    }

    /**
     * Filter the query on the os_phase column
     *
     * Example usage:
     * <code>
     * $query->filterByOsPhase('fooValue');   // WHERE os_phase = 'fooValue'
     * $query->filterByOsPhase('%fooValue%'); // WHERE os_phase LIKE '%fooValue%'
     * </code>
     *
     * @param     string $osPhase The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByOsPhase($osPhase = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($osPhase)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $osPhase)) {
                $osPhase = str_replace('*', '%', $osPhase);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::OS_PHASE, $osPhase, $comparison);
    }

    /**
     * Filter the query on the prestation_demande column
     *
     * Example usage:
     * <code>
     * $query->filterByPrestationDemande('fooValue');   // WHERE prestation_demande = 'fooValue'
     * $query->filterByPrestationDemande('%fooValue%'); // WHERE prestation_demande LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prestationDemande The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByPrestationDemande($prestationDemande = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prestationDemande)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prestationDemande)) {
                $prestationDemande = str_replace('*', '%', $prestationDemande);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::PRESTATION_DEMANDE, $prestationDemande, $comparison);
    }

    /**
     * Filter the query on the forfait_jh column
     *
     * Example usage:
     * <code>
     * $query->filterByForfaitJh('fooValue');   // WHERE forfait_jh = 'fooValue'
     * $query->filterByForfaitJh('%fooValue%'); // WHERE forfait_jh LIKE '%fooValue%'
     * </code>
     *
     * @param     string $forfaitJh The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByForfaitJh($forfaitJh = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($forfaitJh)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $forfaitJh)) {
                $forfaitJh = str_replace('*', '%', $forfaitJh);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::FORFAIT_JH, $forfaitJh, $comparison);
    }

    /**
     * Filter the query on the quantite_jh column
     *
     * Example usage:
     * <code>
     * $query->filterByQuantiteJh(1234); // WHERE quantite_jh = 1234
     * $query->filterByQuantiteJh(array(12, 34)); // WHERE quantite_jh IN (12, 34)
     * $query->filterByQuantiteJh(array('min' => 12)); // WHERE quantite_jh >= 12
     * $query->filterByQuantiteJh(array('max' => 12)); // WHERE quantite_jh <= 12
     * </code>
     *
     * @param     mixed $quantiteJh The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByQuantiteJh($quantiteJh = null, $comparison = null)
    {
        if (is_array($quantiteJh)) {
            $useMinMax = false;
            if (isset($quantiteJh['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::QUANTITE_JH, $quantiteJh['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($quantiteJh['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::QUANTITE_JH, $quantiteJh['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::QUANTITE_JH, $quantiteJh, $comparison);
    }

    /**
     * Filter the query on the nature_marche column
     *
     * Example usage:
     * <code>
     * $query->filterByNatureMarche(1234); // WHERE nature_marche = 1234
     * $query->filterByNatureMarche(array(12, 34)); // WHERE nature_marche IN (12, 34)
     * $query->filterByNatureMarche(array('min' => 12)); // WHERE nature_marche >= 12
     * $query->filterByNatureMarche(array('max' => 12)); // WHERE nature_marche <= 12
     * </code>
     *
     * @param     mixed $natureMarche The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByNatureMarche($natureMarche = null, $comparison = null)
    {
        if (is_array($natureMarche)) {
            $useMinMax = false;
            if (isset($natureMarche['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::NATURE_MARCHE, $natureMarche['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($natureMarche['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::NATURE_MARCHE, $natureMarche['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::NATURE_MARCHE, $natureMarche, $comparison);
    }

    /**
     * Filter the query on the date_debut column
     *
     * Example usage:
     * <code>
     * $query->filterByDateDebut('2011-03-14'); // WHERE date_debut = '2011-03-14'
     * $query->filterByDateDebut('now'); // WHERE date_debut = '2011-03-14'
     * $query->filterByDateDebut(array('max' => 'yesterday')); // WHERE date_debut > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateDebut The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByDateDebut($dateDebut = null, $comparison = null)
    {
        if (is_array($dateDebut)) {
            $useMinMax = false;
            if (isset($dateDebut['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::DATE_DEBUT, $dateDebut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateDebut['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::DATE_DEBUT, $dateDebut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::DATE_DEBUT, $dateDebut, $comparison);
    }

    /**
     * Filter the query on the plurianuelle column
     *
     * Example usage:
     * <code>
     * $query->filterByPlurianuelle('fooValue');   // WHERE plurianuelle = 'fooValue'
     * $query->filterByPlurianuelle('%fooValue%'); // WHERE plurianuelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $plurianuelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByPlurianuelle($plurianuelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($plurianuelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $plurianuelle)) {
                $plurianuelle = str_replace('*', '%', $plurianuelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::PLURIANUELLE, $plurianuelle, $comparison);
    }

    /**
     * Filter the query on the trancheconditionnelle column
     *
     * Example usage:
     * <code>
     * $query->filterByTrancheconditionnelle('fooValue');   // WHERE trancheconditionnelle = 'fooValue'
     * $query->filterByTrancheconditionnelle('%fooValue%'); // WHERE trancheconditionnelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $trancheconditionnelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByTrancheconditionnelle($trancheconditionnelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($trancheconditionnelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $trancheconditionnelle)) {
                $trancheconditionnelle = str_replace('*', '%', $trancheconditionnelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::TRANCHECONDITIONNELLE, $trancheconditionnelle, $comparison);
    }

    /**
     * Filter the query on the id_agent_cr column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentCr(1234); // WHERE id_agent_cr = 1234
     * $query->filterByIdAgentCr(array(12, 34)); // WHERE id_agent_cr IN (12, 34)
     * $query->filterByIdAgentCr(array('min' => 12)); // WHERE id_agent_cr >= 12
     * $query->filterByIdAgentCr(array('max' => 12)); // WHERE id_agent_cr <= 12
     * </code>
     *
     * @param     mixed $idAgentCr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByIdAgentCr($idAgentCr = null, $comparison = null)
    {
        if (is_array($idAgentCr)) {
            $useMinMax = false;
            if (isset($idAgentCr['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::ID_AGENT_CR, $idAgentCr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentCr['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::ID_AGENT_CR, $idAgentCr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::ID_AGENT_CR, $idAgentCr, $comparison);
    }

    /**
     * Filter the query on the devise column
     *
     * Example usage:
     * <code>
     * $query->filterByDevise('fooValue');   // WHERE devise = 'fooValue'
     * $query->filterByDevise('%fooValue%'); // WHERE devise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $devise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByDevise($devise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($devise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $devise)) {
                $devise = str_replace('*', '%', $devise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::DEVISE, $devise, $comparison);
    }

    /**
     * Filter the query on the id_contrat_source column
     *
     * Example usage:
     * <code>
     * $query->filterByIdContratSource(1234); // WHERE id_contrat_source = 1234
     * $query->filterByIdContratSource(array(12, 34)); // WHERE id_contrat_source IN (12, 34)
     * $query->filterByIdContratSource(array('min' => 12)); // WHERE id_contrat_source >= 12
     * $query->filterByIdContratSource(array('max' => 12)); // WHERE id_contrat_source <= 12
     * </code>
     *
     * @param     mixed $idContratSource The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function filterByIdContratSource($idContratSource = null, $comparison = null)
    {
        if (is_array($idContratSource)) {
            $useMinMax = false;
            if (isset($idContratSource['min'])) {
                $this->addUsingAlias(CommonExecContratPeer::ID_CONTRAT_SOURCE, $idContratSource['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idContratSource['max'])) {
                $this->addUsingAlias(CommonExecContratPeer::ID_CONTRAT_SOURCE, $idContratSource['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContratPeer::ID_CONTRAT_SOURCE, $idContratSource, $comparison);
    }

    /**
     * Filter the query by a related CommonExecTypeContrat object
     *
     * @param   CommonExecTypeContrat|PropelObjectCollection $commonExecTypeContrat The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecTypeContrat($commonExecTypeContrat, $comparison = null)
    {
        if ($commonExecTypeContrat instanceof CommonExecTypeContrat) {
            return $this
                ->addUsingAlias(CommonExecContratPeer::ID_TYPE_CONTRAT, $commonExecTypeContrat->getId(), $comparison);
        } elseif ($commonExecTypeContrat instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecContratPeer::ID_TYPE_CONTRAT, $commonExecTypeContrat->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonExecTypeContrat() only accepts arguments of type CommonExecTypeContrat or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecTypeContrat relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function joinCommonExecTypeContrat($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecTypeContrat');

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
            $this->addJoinObject($join, 'CommonExecTypeContrat');
        }

        return $this;
    }

    /**
     * Use the CommonExecTypeContrat relation CommonExecTypeContrat object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecTypeContratQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecTypeContratQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecTypeContrat($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecTypeContrat', 'CommonExecTypeContratQuery');
    }

    /**
     * Filter the query by a related CommonExecTypeStructure object
     *
     * @param   CommonExecTypeStructure|PropelObjectCollection $commonExecTypeStructure The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecTypeStructure($commonExecTypeStructure, $comparison = null)
    {
        if ($commonExecTypeStructure instanceof CommonExecTypeStructure) {
            return $this
                ->addUsingAlias(CommonExecContratPeer::ID_TYPE_STRUCTURE, $commonExecTypeStructure->getId(), $comparison);
        } elseif ($commonExecTypeStructure instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecContratPeer::ID_TYPE_STRUCTURE, $commonExecTypeStructure->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonExecTypeStructure() only accepts arguments of type CommonExecTypeStructure or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecTypeStructure relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function joinCommonExecTypeStructure($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecTypeStructure');

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
            $this->addJoinObject($join, 'CommonExecTypeStructure');
        }

        return $this;
    }

    /**
     * Use the CommonExecTypeStructure relation CommonExecTypeStructure object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecTypeStructureQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecTypeStructureQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecTypeStructure($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecTypeStructure', 'CommonExecTypeStructureQuery');
    }

    /**
     * Filter the query by a related CommonExecAgentContrat object
     *
     * @param   CommonExecAgentContrat|PropelObjectCollection $commonExecAgentContrat  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecAgentContrat($commonExecAgentContrat, $comparison = null)
    {
        if ($commonExecAgentContrat instanceof CommonExecAgentContrat) {
            return $this
                ->addUsingAlias(CommonExecContratPeer::ID_CONTRAT, $commonExecAgentContrat->getIdContrat(), $comparison);
        } elseif ($commonExecAgentContrat instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecAgentContratQuery()
                ->filterByPrimaryKeys($commonExecAgentContrat->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecAgentContrat() only accepts arguments of type CommonExecAgentContrat or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecAgentContrat relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function joinCommonExecAgentContrat($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecAgentContrat');

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
            $this->addJoinObject($join, 'CommonExecAgentContrat');
        }

        return $this;
    }

    /**
     * Use the CommonExecAgentContrat relation CommonExecAgentContrat object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecAgentContratQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecAgentContratQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecAgentContrat($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecAgentContrat', 'CommonExecAgentContratQuery');
    }

    /**
     * Filter the query by a related CommonExecAvenant object
     *
     * @param   CommonExecAvenant|PropelObjectCollection $commonExecAvenant  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecAvenant($commonExecAvenant, $comparison = null)
    {
        if ($commonExecAvenant instanceof CommonExecAvenant) {
            return $this
                ->addUsingAlias(CommonExecContratPeer::ID_CONTRAT, $commonExecAvenant->getIdContrat(), $comparison);
        } elseif ($commonExecAvenant instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecAvenantQuery()
                ->filterByPrimaryKeys($commonExecAvenant->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecAvenant() only accepts arguments of type CommonExecAvenant or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecAvenant relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function joinCommonExecAvenant($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecAvenant');

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
            $this->addJoinObject($join, 'CommonExecAvenant');
        }

        return $this;
    }

    /**
     * Use the CommonExecAvenant relation CommonExecAvenant object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecAvenantQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecAvenantQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecAvenant($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecAvenant', 'CommonExecAvenantQuery');
    }

    /**
     * Filter the query by a related CommonExecContact object
     *
     * @param   CommonExecContact|PropelObjectCollection $commonExecContact  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecContact($commonExecContact, $comparison = null)
    {
        if ($commonExecContact instanceof CommonExecContact) {
            return $this
                ->addUsingAlias(CommonExecContratPeer::ID_CONTRAT, $commonExecContact->getIdContrat(), $comparison);
        } elseif ($commonExecContact instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecContactQuery()
                ->filterByPrimaryKeys($commonExecContact->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecContact() only accepts arguments of type CommonExecContact or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecContact relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function joinCommonExecContact($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecContact');

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
            $this->addJoinObject($join, 'CommonExecContact');
        }

        return $this;
    }

    /**
     * Use the CommonExecContact relation CommonExecContact object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecContactQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecContactQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecContact($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecContact', 'CommonExecContactQuery');
    }

    /**
     * Filter the query by a related CommonExecContractant object
     *
     * @param   CommonExecContractant|PropelObjectCollection $commonExecContractant  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecContractant($commonExecContractant, $comparison = null)
    {
        if ($commonExecContractant instanceof CommonExecContractant) {
            return $this
                ->addUsingAlias(CommonExecContratPeer::ID_CONTRAT, $commonExecContractant->getIdContrat(), $comparison);
        } elseif ($commonExecContractant instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecContractantQuery()
                ->filterByPrimaryKeys($commonExecContractant->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecContractant() only accepts arguments of type CommonExecContractant or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecContractant relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function joinCommonExecContractant($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecContractant');

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
            $this->addJoinObject($join, 'CommonExecContractant');
        }

        return $this;
    }

    /**
     * Use the CommonExecContractant relation CommonExecContractant object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecContractantQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecContractantQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecContractant($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecContractant', 'CommonExecContractantQuery');
    }

    /**
     * Filter the query by a related CommonExecDossierPaiement object
     *
     * @param   CommonExecDossierPaiement|PropelObjectCollection $commonExecDossierPaiement  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecDossierPaiement($commonExecDossierPaiement, $comparison = null)
    {
        if ($commonExecDossierPaiement instanceof CommonExecDossierPaiement) {
            return $this
                ->addUsingAlias(CommonExecContratPeer::ID_CONTRAT, $commonExecDossierPaiement->getIdContrat(), $comparison);
        } elseif ($commonExecDossierPaiement instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecDossierPaiementQuery()
                ->filterByPrimaryKeys($commonExecDossierPaiement->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecDossierPaiement() only accepts arguments of type CommonExecDossierPaiement or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecDossierPaiement relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function joinCommonExecDossierPaiement($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecDossierPaiement');

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
            $this->addJoinObject($join, 'CommonExecDossierPaiement');
        }

        return $this;
    }

    /**
     * Use the CommonExecDossierPaiement relation CommonExecDossierPaiement object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecDossierPaiementQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecDossierPaiementQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecDossierPaiement($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecDossierPaiement', 'CommonExecDossierPaiementQuery');
    }

    /**
     * Filter the query by a related CommonExecEvenement object
     *
     * @param   CommonExecEvenement|PropelObjectCollection $commonExecEvenement  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecEvenement($commonExecEvenement, $comparison = null)
    {
        if ($commonExecEvenement instanceof CommonExecEvenement) {
            return $this
                ->addUsingAlias(CommonExecContratPeer::ID_CONTRAT, $commonExecEvenement->getIdContrat(), $comparison);
        } elseif ($commonExecEvenement instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecEvenementQuery()
                ->filterByPrimaryKeys($commonExecEvenement->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecEvenement() only accepts arguments of type CommonExecEvenement or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecEvenement relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function joinCommonExecEvenement($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecEvenement');

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
            $this->addJoinObject($join, 'CommonExecEvenement');
        }

        return $this;
    }

    /**
     * Use the CommonExecEvenement relation CommonExecEvenement object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecEvenementQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecEvenementQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecEvenement($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecEvenement', 'CommonExecEvenementQuery');
    }

    /**
     * Filter the query by a related CommonExecFacture object
     *
     * @param   CommonExecFacture|PropelObjectCollection $commonExecFacture  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecFacture($commonExecFacture, $comparison = null)
    {
        if ($commonExecFacture instanceof CommonExecFacture) {
            return $this
                ->addUsingAlias(CommonExecContratPeer::ID_CONTRAT, $commonExecFacture->getIdContrat(), $comparison);
        } elseif ($commonExecFacture instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecFactureQuery()
                ->filterByPrimaryKeys($commonExecFacture->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecFacture() only accepts arguments of type CommonExecFacture or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecFacture relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function joinCommonExecFacture($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecFacture');

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
            $this->addJoinObject($join, 'CommonExecFacture');
        }

        return $this;
    }

    /**
     * Use the CommonExecFacture relation CommonExecFacture object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecFactureQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecFactureQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecFacture($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecFacture', 'CommonExecFactureQuery');
    }

    /**
     * Filter the query by a related CommonExecHistoriquePrix object
     *
     * @param   CommonExecHistoriquePrix|PropelObjectCollection $commonExecHistoriquePrix  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecHistoriquePrix($commonExecHistoriquePrix, $comparison = null)
    {
        if ($commonExecHistoriquePrix instanceof CommonExecHistoriquePrix) {
            return $this
                ->addUsingAlias(CommonExecContratPeer::ID_CONTRAT, $commonExecHistoriquePrix->getIdContrat(), $comparison);
        } elseif ($commonExecHistoriquePrix instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecHistoriquePrixQuery()
                ->filterByPrimaryKeys($commonExecHistoriquePrix->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecHistoriquePrix() only accepts arguments of type CommonExecHistoriquePrix or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecHistoriquePrix relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function joinCommonExecHistoriquePrix($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecHistoriquePrix');

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
            $this->addJoinObject($join, 'CommonExecHistoriquePrix');
        }

        return $this;
    }

    /**
     * Use the CommonExecHistoriquePrix relation CommonExecHistoriquePrix object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecHistoriquePrixQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecHistoriquePrixQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecHistoriquePrix($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecHistoriquePrix', 'CommonExecHistoriquePrixQuery');
    }

    /**
     * Filter the query by a related CommonExecInscritContrat object
     *
     * @param   CommonExecInscritContrat|PropelObjectCollection $commonExecInscritContrat  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecInscritContrat($commonExecInscritContrat, $comparison = null)
    {
        if ($commonExecInscritContrat instanceof CommonExecInscritContrat) {
            return $this
                ->addUsingAlias(CommonExecContratPeer::ID_CONTRAT, $commonExecInscritContrat->getIdContrat(), $comparison);
        } elseif ($commonExecInscritContrat instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecInscritContratQuery()
                ->filterByPrimaryKeys($commonExecInscritContrat->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecInscritContrat() only accepts arguments of type CommonExecInscritContrat or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecInscritContrat relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function joinCommonExecInscritContrat($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecInscritContrat');

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
            $this->addJoinObject($join, 'CommonExecInscritContrat');
        }

        return $this;
    }

    /**
     * Use the CommonExecInscritContrat relation CommonExecInscritContrat object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecInscritContratQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecInscritContratQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecInscritContrat($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecInscritContrat', 'CommonExecInscritContratQuery');
    }

    /**
     * Filter the query by a related CommonExecLivrableContrat object
     *
     * @param   CommonExecLivrableContrat|PropelObjectCollection $commonExecLivrableContrat  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecLivrableContrat($commonExecLivrableContrat, $comparison = null)
    {
        if ($commonExecLivrableContrat instanceof CommonExecLivrableContrat) {
            return $this
                ->addUsingAlias(CommonExecContratPeer::ID_CONTRAT, $commonExecLivrableContrat->getIdContrat(), $comparison);
        } elseif ($commonExecLivrableContrat instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecLivrableContratQuery()
                ->filterByPrimaryKeys($commonExecLivrableContrat->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecLivrableContrat() only accepts arguments of type CommonExecLivrableContrat or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecLivrableContrat relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function joinCommonExecLivrableContrat($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecLivrableContrat');

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
            $this->addJoinObject($join, 'CommonExecLivrableContrat');
        }

        return $this;
    }

    /**
     * Use the CommonExecLivrableContrat relation CommonExecLivrableContrat object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecLivrableContratQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecLivrableContratQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecLivrableContrat($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecLivrableContrat', 'CommonExecLivrableContratQuery');
    }

    /**
     * Filter the query by a related CommonExecPhase object
     *
     * @param   CommonExecPhase|PropelObjectCollection $commonExecPhase  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecPhase($commonExecPhase, $comparison = null)
    {
        if ($commonExecPhase instanceof CommonExecPhase) {
            return $this
                ->addUsingAlias(CommonExecContratPeer::ID_CONTRAT, $commonExecPhase->getIdContrat(), $comparison);
        } elseif ($commonExecPhase instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecPhaseQuery()
                ->filterByPrimaryKeys($commonExecPhase->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecPhase() only accepts arguments of type CommonExecPhase or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecPhase relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function joinCommonExecPhase($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecPhase');

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
            $this->addJoinObject($join, 'CommonExecPhase');
        }

        return $this;
    }

    /**
     * Use the CommonExecPhase relation CommonExecPhase object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecPhaseQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecPhaseQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecPhase($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecPhase', 'CommonExecPhaseQuery');
    }

    /**
     * Filter the query by a related CommonExecPiece object
     *
     * @param   CommonExecPiece|PropelObjectCollection $commonExecPiece  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecPiece($commonExecPiece, $comparison = null)
    {
        if ($commonExecPiece instanceof CommonExecPiece) {
            return $this
                ->addUsingAlias(CommonExecContratPeer::ID_CONTRAT, $commonExecPiece->getIdContrat(), $comparison);
        } elseif ($commonExecPiece instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecPieceQuery()
                ->filterByPrimaryKeys($commonExecPiece->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecPiece() only accepts arguments of type CommonExecPiece or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecPiece relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function joinCommonExecPiece($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecPiece');

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
            $this->addJoinObject($join, 'CommonExecPiece');
        }

        return $this;
    }

    /**
     * Use the CommonExecPiece relation CommonExecPiece object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecPieceQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecPieceQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecPiece($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecPiece', 'CommonExecPieceQuery');
    }

    /**
     * Filter the query by a related CommonExecPieceAvenant object
     *
     * @param   CommonExecPieceAvenant|PropelObjectCollection $commonExecPieceAvenant  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecPieceAvenant($commonExecPieceAvenant, $comparison = null)
    {
        if ($commonExecPieceAvenant instanceof CommonExecPieceAvenant) {
            return $this
                ->addUsingAlias(CommonExecContratPeer::ID_CONTRAT, $commonExecPieceAvenant->getIdContrat(), $comparison);
        } elseif ($commonExecPieceAvenant instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecPieceAvenantQuery()
                ->filterByPrimaryKeys($commonExecPieceAvenant->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecPieceAvenant() only accepts arguments of type CommonExecPieceAvenant or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecPieceAvenant relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function joinCommonExecPieceAvenant($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecPieceAvenant');

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
            $this->addJoinObject($join, 'CommonExecPieceAvenant');
        }

        return $this;
    }

    /**
     * Use the CommonExecPieceAvenant relation CommonExecPieceAvenant object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecPieceAvenantQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecPieceAvenantQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecPieceAvenant($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecPieceAvenant', 'CommonExecPieceAvenantQuery');
    }

    /**
     * Filter the query by a related CommonExecPieceContrat object
     *
     * @param   CommonExecPieceContrat|PropelObjectCollection $commonExecPieceContrat  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecPieceContrat($commonExecPieceContrat, $comparison = null)
    {
        if ($commonExecPieceContrat instanceof CommonExecPieceContrat) {
            return $this
                ->addUsingAlias(CommonExecContratPeer::ID_CONTRAT, $commonExecPieceContrat->getIdContrat(), $comparison);
        } elseif ($commonExecPieceContrat instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecPieceContratQuery()
                ->filterByPrimaryKeys($commonExecPieceContrat->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecPieceContrat() only accepts arguments of type CommonExecPieceContrat or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecPieceContrat relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function joinCommonExecPieceContrat($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecPieceContrat');

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
            $this->addJoinObject($join, 'CommonExecPieceContrat');
        }

        return $this;
    }

    /**
     * Use the CommonExecPieceContrat relation CommonExecPieceContrat object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecPieceContratQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecPieceContratQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecPieceContrat($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecPieceContrat', 'CommonExecPieceContratQuery');
    }

    /**
     * Filter the query by a related CommonExecPieceDossierpaiement object
     *
     * @param   CommonExecPieceDossierpaiement|PropelObjectCollection $commonExecPieceDossierpaiement  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecPieceDossierpaiement($commonExecPieceDossierpaiement, $comparison = null)
    {
        if ($commonExecPieceDossierpaiement instanceof CommonExecPieceDossierpaiement) {
            return $this
                ->addUsingAlias(CommonExecContratPeer::ID_CONTRAT, $commonExecPieceDossierpaiement->getIdContrat(), $comparison);
        } elseif ($commonExecPieceDossierpaiement instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecPieceDossierpaiementQuery()
                ->filterByPrimaryKeys($commonExecPieceDossierpaiement->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecPieceDossierpaiement() only accepts arguments of type CommonExecPieceDossierpaiement or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecPieceDossierpaiement relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function joinCommonExecPieceDossierpaiement($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecPieceDossierpaiement');

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
            $this->addJoinObject($join, 'CommonExecPieceDossierpaiement');
        }

        return $this;
    }

    /**
     * Use the CommonExecPieceDossierpaiement relation CommonExecPieceDossierpaiement object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecPieceDossierpaiementQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecPieceDossierpaiementQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecPieceDossierpaiement($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecPieceDossierpaiement', 'CommonExecPieceDossierpaiementQuery');
    }

    /**
     * Filter the query by a related CommonExecPieceEvenement object
     *
     * @param   CommonExecPieceEvenement|PropelObjectCollection $commonExecPieceEvenement  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecPieceEvenement($commonExecPieceEvenement, $comparison = null)
    {
        if ($commonExecPieceEvenement instanceof CommonExecPieceEvenement) {
            return $this
                ->addUsingAlias(CommonExecContratPeer::ID_CONTRAT, $commonExecPieceEvenement->getIdContrat(), $comparison);
        } elseif ($commonExecPieceEvenement instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecPieceEvenementQuery()
                ->filterByPrimaryKeys($commonExecPieceEvenement->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecPieceEvenement() only accepts arguments of type CommonExecPieceEvenement or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecPieceEvenement relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function joinCommonExecPieceEvenement($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecPieceEvenement');

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
            $this->addJoinObject($join, 'CommonExecPieceEvenement');
        }

        return $this;
    }

    /**
     * Use the CommonExecPieceEvenement relation CommonExecPieceEvenement object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecPieceEvenementQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecPieceEvenementQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecPieceEvenement($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecPieceEvenement', 'CommonExecPieceEvenementQuery');
    }

    /**
     * Filter the query by a related CommonExecPieceFacture object
     *
     * @param   CommonExecPieceFacture|PropelObjectCollection $commonExecPieceFacture  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecPieceFacture($commonExecPieceFacture, $comparison = null)
    {
        if ($commonExecPieceFacture instanceof CommonExecPieceFacture) {
            return $this
                ->addUsingAlias(CommonExecContratPeer::ID_CONTRAT, $commonExecPieceFacture->getIdContrat(), $comparison);
        } elseif ($commonExecPieceFacture instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecPieceFactureQuery()
                ->filterByPrimaryKeys($commonExecPieceFacture->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecPieceFacture() only accepts arguments of type CommonExecPieceFacture or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecPieceFacture relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function joinCommonExecPieceFacture($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecPieceFacture');

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
            $this->addJoinObject($join, 'CommonExecPieceFacture');
        }

        return $this;
    }

    /**
     * Use the CommonExecPieceFacture relation CommonExecPieceFacture object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecPieceFactureQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecPieceFactureQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecPieceFacture($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecPieceFacture', 'CommonExecPieceFactureQuery');
    }

    /**
     * Filter the query by a related CommonExecPrix object
     *
     * @param   CommonExecPrix|PropelObjectCollection $commonExecPrix  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecPrix($commonExecPrix, $comparison = null)
    {
        if ($commonExecPrix instanceof CommonExecPrix) {
            return $this
                ->addUsingAlias(CommonExecContratPeer::ID_CONTRAT, $commonExecPrix->getIdContrat(), $comparison);
        } elseif ($commonExecPrix instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecPrixQuery()
                ->filterByPrimaryKeys($commonExecPrix->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecPrix() only accepts arguments of type CommonExecPrix or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecPrix relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function joinCommonExecPrix($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecPrix');

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
            $this->addJoinObject($join, 'CommonExecPrix');
        }

        return $this;
    }

    /**
     * Use the CommonExecPrix relation CommonExecPrix object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecPrixQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecPrixQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecPrix($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecPrix', 'CommonExecPrixQuery');
    }

    /**
     * Filter the query by a related CommonExecPrixAvenant object
     *
     * @param   CommonExecPrixAvenant|PropelObjectCollection $commonExecPrixAvenant  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecPrixAvenant($commonExecPrixAvenant, $comparison = null)
    {
        if ($commonExecPrixAvenant instanceof CommonExecPrixAvenant) {
            return $this
                ->addUsingAlias(CommonExecContratPeer::ID_CONTRAT, $commonExecPrixAvenant->getIdContrat(), $comparison);
        } elseif ($commonExecPrixAvenant instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecPrixAvenantQuery()
                ->filterByPrimaryKeys($commonExecPrixAvenant->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecPrixAvenant() only accepts arguments of type CommonExecPrixAvenant or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecPrixAvenant relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function joinCommonExecPrixAvenant($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecPrixAvenant');

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
            $this->addJoinObject($join, 'CommonExecPrixAvenant');
        }

        return $this;
    }

    /**
     * Use the CommonExecPrixAvenant relation CommonExecPrixAvenant object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecPrixAvenantQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecPrixAvenantQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecPrixAvenant($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecPrixAvenant', 'CommonExecPrixAvenantQuery');
    }

    /**
     * Filter the query by a related CommonExecRepartition object
     *
     * @param   CommonExecRepartition|PropelObjectCollection $commonExecRepartition  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecRepartition($commonExecRepartition, $comparison = null)
    {
        if ($commonExecRepartition instanceof CommonExecRepartition) {
            return $this
                ->addUsingAlias(CommonExecContratPeer::ID_CONTRAT, $commonExecRepartition->getIdContrat(), $comparison);
        } elseif ($commonExecRepartition instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecRepartitionQuery()
                ->filterByPrimaryKeys($commonExecRepartition->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecRepartition() only accepts arguments of type CommonExecRepartition or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecRepartition relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function joinCommonExecRepartition($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecRepartition');

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
            $this->addJoinObject($join, 'CommonExecRepartition');
        }

        return $this;
    }

    /**
     * Use the CommonExecRepartition relation CommonExecRepartition object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecRepartitionQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecRepartitionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecRepartition($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecRepartition', 'CommonExecRepartitionQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonExecContrat $commonExecContrat Object to remove from the list of results
     *
     * @return CommonExecContratQuery The current query, for fluid interface
     */
    public function prune($commonExecContrat = null)
    {
        if ($commonExecContrat) {
            $this->addUsingAlias(CommonExecContratPeer::ID_CONTRAT, $commonExecContrat->getIdContrat(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
