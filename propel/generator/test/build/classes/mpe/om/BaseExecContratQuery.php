<?php


/**
 * Base class that represents a query for the 'exec_contrat' table.
 *
 * 
 *
 * @method ExecContratQuery orderByIdContrat($order = Criteria::ASC) Order by the id_contrat column
 * @method ExecContratQuery orderByConsultationRef($order = Criteria::ASC) Order by the consultation_ref column
 * @method ExecContratQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method ExecContratQuery orderByIdDecisionEnveloppe($order = Criteria::ASC) Order by the id_decision_enveloppe column
 * @method ExecContratQuery orderByNumero($order = Criteria::ASC) Order by the numero column
 * @method ExecContratQuery orderByStatut($order = Criteria::ASC) Order by the statut column
 * @method ExecContratQuery orderByIdTypeContrat($order = Criteria::ASC) Order by the id_type_contrat column
 * @method ExecContratQuery orderByIdTypeStructure($order = Criteria::ASC) Order by the id_type_structure column
 * @method ExecContratQuery orderByObjet($order = Criteria::ASC) Order by the objet column
 * @method ExecContratQuery orderByNumConsultation($order = Criteria::ASC) Order by the num_consultation column
 * @method ExecContratQuery orderByIdNaturePrestation($order = Criteria::ASC) Order by the id_nature_prestation column
 * @method ExecContratQuery orderByIdService($order = Criteria::ASC) Order by the id_service column
 * @method ExecContratQuery orderByIdServiceGerant($order = Criteria::ASC) Order by the id_service_gerant column
 * @method ExecContratQuery orderByIdAgentGestion($order = Criteria::ASC) Order by the id_agent_gestion column
 * @method ExecContratQuery orderByReconductible($order = Criteria::ASC) Order by the reconductible column
 * @method ExecContratQuery orderByNombreReconduction($order = Criteria::ASC) Order by the nombre_reconduction column
 * @method ExecContratQuery orderByMontantHt($order = Criteria::ASC) Order by the montant_ht column
 * @method ExecContratQuery orderByMontantTtc($order = Criteria::ASC) Order by the montant_ttc column
 * @method ExecContratQuery orderByMontantMin($order = Criteria::ASC) Order by the montant_min column
 * @method ExecContratQuery orderByMontantMax($order = Criteria::ASC) Order by the montant_max column
 * @method ExecContratQuery orderByMontantMinTtc($order = Criteria::ASC) Order by the montant_min_ttc column
 * @method ExecContratQuery orderByMontantMaxTtc($order = Criteria::ASC) Order by the montant_max_ttc column
 * @method ExecContratQuery orderByMontantFactureHt($order = Criteria::ASC) Order by the montant_facture_ht column
 * @method ExecContratQuery orderByMontantFactureTtc($order = Criteria::ASC) Order by the montant_facture_ttc column
 * @method ExecContratQuery orderByMontantPayeHt($order = Criteria::ASC) Order by the montant_paye_ht column
 * @method ExecContratQuery orderByMontantPayeTtc($order = Criteria::ASC) Order by the montant_paye_ttc column
 * @method ExecContratQuery orderByMontantCaution($order = Criteria::ASC) Order by the montant_caution column
 * @method ExecContratQuery orderByPourcentageCaution($order = Criteria::ASC) Order by the pourcentage_caution column
 * @method ExecContratQuery orderByRetenueGarantie($order = Criteria::ASC) Order by the retenue_garantie column
 * @method ExecContratQuery orderByPourcentageRetenueGarantie($order = Criteria::ASC) Order by the pourcentage_retenue_garantie column
 * @method ExecContratQuery orderByMontantRetenuGarantie($order = Criteria::ASC) Order by the montant_retenu_garantie column
 * @method ExecContratQuery orderByPourcentagePrelevementGarantie($order = Criteria::ASC) Order by the pourcentage_prelevement_garantie column
 * @method ExecContratQuery orderByMontantAvance($order = Criteria::ASC) Order by the montant_avance column
 * @method ExecContratQuery orderByDelaiPartiel($order = Criteria::ASC) Order by the delai_partiel column
 * @method ExecContratQuery orderByDelaiContrat($order = Criteria::ASC) Order by the delai_contrat column
 * @method ExecContratQuery orderByUniteDelaiContrat($order = Criteria::ASC) Order by the unite_delai_contrat column
 * @method ExecContratQuery orderByDateApprobation($order = Criteria::ASC) Order by the date_approbation column
 * @method ExecContratQuery orderByDateNotificationApprobation($order = Criteria::ASC) Order by the date_notification_approbation column
 * @method ExecContratQuery orderByDateFin($order = Criteria::ASC) Order by the date_fin column
 * @method ExecContratQuery orderByDateCrea($order = Criteria::ASC) Order by the date_crea column
 * @method ExecContratQuery orderByIdAgentCrea($order = Criteria::ASC) Order by the id_agent_crea column
 * @method ExecContratQuery orderByDateModif($order = Criteria::ASC) Order by the date_modif column
 * @method ExecContratQuery orderByIdAgentModif($order = Criteria::ASC) Order by the id_agent_modif column
 * @method ExecContratQuery orderByDelaiReel($order = Criteria::ASC) Order by the delai_reel column
 * @method ExecContratQuery orderByDepassement($order = Criteria::ASC) Order by the depassement column
 * @method ExecContratQuery orderByDateMajDelaiReel($order = Criteria::ASC) Order by the date_maj_delai_reel column
 * @method ExecContratQuery orderByIdParapheur($order = Criteria::ASC) Order by the id_parapheur column
 * @method ExecContratQuery orderByStatutParapheur($order = Criteria::ASC) Order by the statut_parapheur column
 * @method ExecContratQuery orderByDateClotureParapheur($order = Criteria::ASC) Order by the date_cloture_parapheur column
 * @method ExecContratQuery orderByGarantie($order = Criteria::ASC) Order by the garantie column
 * @method ExecContratQuery orderByDureeGarantie($order = Criteria::ASC) Order by the duree_garantie column
 * @method ExecContratQuery orderByUniteGarantie($order = Criteria::ASC) Order by the unite_garantie column
 * @method ExecContratQuery orderByTypePenalite($order = Criteria::ASC) Order by the type_penalite column
 * @method ExecContratQuery orderByPourcentagePenalite($order = Criteria::ASC) Order by the pourcentage_penalite column
 * @method ExecContratQuery orderByMontantPenalite($order = Criteria::ASC) Order by the montant_penalite column
 * @method ExecContratQuery orderByPlafondPenalite($order = Criteria::ASC) Order by the plafond_penalite column
 * @method ExecContratQuery orderByModePassation($order = Criteria::ASC) Order by the mode_passation column
 * @method ExecContratQuery orderByLieMarche($order = Criteria::ASC) Order by the lie_marche column
 * @method ExecContratQuery orderByNumChapeau($order = Criteria::ASC) Order by the num_chapeau column
 * @method ExecContratQuery orderByOsPhase($order = Criteria::ASC) Order by the os_phase column
 * @method ExecContratQuery orderByPrestationDemande($order = Criteria::ASC) Order by the prestation_demande column
 * @method ExecContratQuery orderByForfaitJh($order = Criteria::ASC) Order by the forfait_jh column
 * @method ExecContratQuery orderByQuantiteJh($order = Criteria::ASC) Order by the quantite_jh column
 * @method ExecContratQuery orderByNatureMarche($order = Criteria::ASC) Order by the nature_marche column
 * @method ExecContratQuery orderByDateDebut($order = Criteria::ASC) Order by the date_debut column
 * @method ExecContratQuery orderByPlurianuelle($order = Criteria::ASC) Order by the plurianuelle column
 * @method ExecContratQuery orderByTrancheconditionnelle($order = Criteria::ASC) Order by the trancheconditionnelle column
 * @method ExecContratQuery orderByIdAgentCr($order = Criteria::ASC) Order by the id_agent_cr column
 * @method ExecContratQuery orderByDevise($order = Criteria::ASC) Order by the devise column
 * @method ExecContratQuery orderByIdContratSource($order = Criteria::ASC) Order by the id_contrat_source column
 *
 * @method ExecContratQuery groupByIdContrat() Group by the id_contrat column
 * @method ExecContratQuery groupByConsultationRef() Group by the consultation_ref column
 * @method ExecContratQuery groupByOrganisme() Group by the organisme column
 * @method ExecContratQuery groupByIdDecisionEnveloppe() Group by the id_decision_enveloppe column
 * @method ExecContratQuery groupByNumero() Group by the numero column
 * @method ExecContratQuery groupByStatut() Group by the statut column
 * @method ExecContratQuery groupByIdTypeContrat() Group by the id_type_contrat column
 * @method ExecContratQuery groupByIdTypeStructure() Group by the id_type_structure column
 * @method ExecContratQuery groupByObjet() Group by the objet column
 * @method ExecContratQuery groupByNumConsultation() Group by the num_consultation column
 * @method ExecContratQuery groupByIdNaturePrestation() Group by the id_nature_prestation column
 * @method ExecContratQuery groupByIdService() Group by the id_service column
 * @method ExecContratQuery groupByIdServiceGerant() Group by the id_service_gerant column
 * @method ExecContratQuery groupByIdAgentGestion() Group by the id_agent_gestion column
 * @method ExecContratQuery groupByReconductible() Group by the reconductible column
 * @method ExecContratQuery groupByNombreReconduction() Group by the nombre_reconduction column
 * @method ExecContratQuery groupByMontantHt() Group by the montant_ht column
 * @method ExecContratQuery groupByMontantTtc() Group by the montant_ttc column
 * @method ExecContratQuery groupByMontantMin() Group by the montant_min column
 * @method ExecContratQuery groupByMontantMax() Group by the montant_max column
 * @method ExecContratQuery groupByMontantMinTtc() Group by the montant_min_ttc column
 * @method ExecContratQuery groupByMontantMaxTtc() Group by the montant_max_ttc column
 * @method ExecContratQuery groupByMontantFactureHt() Group by the montant_facture_ht column
 * @method ExecContratQuery groupByMontantFactureTtc() Group by the montant_facture_ttc column
 * @method ExecContratQuery groupByMontantPayeHt() Group by the montant_paye_ht column
 * @method ExecContratQuery groupByMontantPayeTtc() Group by the montant_paye_ttc column
 * @method ExecContratQuery groupByMontantCaution() Group by the montant_caution column
 * @method ExecContratQuery groupByPourcentageCaution() Group by the pourcentage_caution column
 * @method ExecContratQuery groupByRetenueGarantie() Group by the retenue_garantie column
 * @method ExecContratQuery groupByPourcentageRetenueGarantie() Group by the pourcentage_retenue_garantie column
 * @method ExecContratQuery groupByMontantRetenuGarantie() Group by the montant_retenu_garantie column
 * @method ExecContratQuery groupByPourcentagePrelevementGarantie() Group by the pourcentage_prelevement_garantie column
 * @method ExecContratQuery groupByMontantAvance() Group by the montant_avance column
 * @method ExecContratQuery groupByDelaiPartiel() Group by the delai_partiel column
 * @method ExecContratQuery groupByDelaiContrat() Group by the delai_contrat column
 * @method ExecContratQuery groupByUniteDelaiContrat() Group by the unite_delai_contrat column
 * @method ExecContratQuery groupByDateApprobation() Group by the date_approbation column
 * @method ExecContratQuery groupByDateNotificationApprobation() Group by the date_notification_approbation column
 * @method ExecContratQuery groupByDateFin() Group by the date_fin column
 * @method ExecContratQuery groupByDateCrea() Group by the date_crea column
 * @method ExecContratQuery groupByIdAgentCrea() Group by the id_agent_crea column
 * @method ExecContratQuery groupByDateModif() Group by the date_modif column
 * @method ExecContratQuery groupByIdAgentModif() Group by the id_agent_modif column
 * @method ExecContratQuery groupByDelaiReel() Group by the delai_reel column
 * @method ExecContratQuery groupByDepassement() Group by the depassement column
 * @method ExecContratQuery groupByDateMajDelaiReel() Group by the date_maj_delai_reel column
 * @method ExecContratQuery groupByIdParapheur() Group by the id_parapheur column
 * @method ExecContratQuery groupByStatutParapheur() Group by the statut_parapheur column
 * @method ExecContratQuery groupByDateClotureParapheur() Group by the date_cloture_parapheur column
 * @method ExecContratQuery groupByGarantie() Group by the garantie column
 * @method ExecContratQuery groupByDureeGarantie() Group by the duree_garantie column
 * @method ExecContratQuery groupByUniteGarantie() Group by the unite_garantie column
 * @method ExecContratQuery groupByTypePenalite() Group by the type_penalite column
 * @method ExecContratQuery groupByPourcentagePenalite() Group by the pourcentage_penalite column
 * @method ExecContratQuery groupByMontantPenalite() Group by the montant_penalite column
 * @method ExecContratQuery groupByPlafondPenalite() Group by the plafond_penalite column
 * @method ExecContratQuery groupByModePassation() Group by the mode_passation column
 * @method ExecContratQuery groupByLieMarche() Group by the lie_marche column
 * @method ExecContratQuery groupByNumChapeau() Group by the num_chapeau column
 * @method ExecContratQuery groupByOsPhase() Group by the os_phase column
 * @method ExecContratQuery groupByPrestationDemande() Group by the prestation_demande column
 * @method ExecContratQuery groupByForfaitJh() Group by the forfait_jh column
 * @method ExecContratQuery groupByQuantiteJh() Group by the quantite_jh column
 * @method ExecContratQuery groupByNatureMarche() Group by the nature_marche column
 * @method ExecContratQuery groupByDateDebut() Group by the date_debut column
 * @method ExecContratQuery groupByPlurianuelle() Group by the plurianuelle column
 * @method ExecContratQuery groupByTrancheconditionnelle() Group by the trancheconditionnelle column
 * @method ExecContratQuery groupByIdAgentCr() Group by the id_agent_cr column
 * @method ExecContratQuery groupByDevise() Group by the devise column
 * @method ExecContratQuery groupByIdContratSource() Group by the id_contrat_source column
 *
 * @method ExecContratQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ExecContratQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ExecContratQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ExecContratQuery leftJoinExecTypeContrat($relationAlias = null) Adds a LEFT JOIN clause to the query using the ExecTypeContrat relation
 * @method ExecContratQuery rightJoinExecTypeContrat($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ExecTypeContrat relation
 * @method ExecContratQuery innerJoinExecTypeContrat($relationAlias = null) Adds a INNER JOIN clause to the query using the ExecTypeContrat relation
 *
 * @method ExecContratQuery leftJoinExecTypeStructure($relationAlias = null) Adds a LEFT JOIN clause to the query using the ExecTypeStructure relation
 * @method ExecContratQuery rightJoinExecTypeStructure($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ExecTypeStructure relation
 * @method ExecContratQuery innerJoinExecTypeStructure($relationAlias = null) Adds a INNER JOIN clause to the query using the ExecTypeStructure relation
 *
 * @method ExecContratQuery leftJoinExecAgentContrat($relationAlias = null) Adds a LEFT JOIN clause to the query using the ExecAgentContrat relation
 * @method ExecContratQuery rightJoinExecAgentContrat($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ExecAgentContrat relation
 * @method ExecContratQuery innerJoinExecAgentContrat($relationAlias = null) Adds a INNER JOIN clause to the query using the ExecAgentContrat relation
 *
 * @method ExecContratQuery leftJoinExecAvenant($relationAlias = null) Adds a LEFT JOIN clause to the query using the ExecAvenant relation
 * @method ExecContratQuery rightJoinExecAvenant($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ExecAvenant relation
 * @method ExecContratQuery innerJoinExecAvenant($relationAlias = null) Adds a INNER JOIN clause to the query using the ExecAvenant relation
 *
 * @method ExecContratQuery leftJoinExecContact($relationAlias = null) Adds a LEFT JOIN clause to the query using the ExecContact relation
 * @method ExecContratQuery rightJoinExecContact($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ExecContact relation
 * @method ExecContratQuery innerJoinExecContact($relationAlias = null) Adds a INNER JOIN clause to the query using the ExecContact relation
 *
 * @method ExecContratQuery leftJoinExecContractant($relationAlias = null) Adds a LEFT JOIN clause to the query using the ExecContractant relation
 * @method ExecContratQuery rightJoinExecContractant($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ExecContractant relation
 * @method ExecContratQuery innerJoinExecContractant($relationAlias = null) Adds a INNER JOIN clause to the query using the ExecContractant relation
 *
 * @method ExecContratQuery leftJoinExecDossierPaiement($relationAlias = null) Adds a LEFT JOIN clause to the query using the ExecDossierPaiement relation
 * @method ExecContratQuery rightJoinExecDossierPaiement($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ExecDossierPaiement relation
 * @method ExecContratQuery innerJoinExecDossierPaiement($relationAlias = null) Adds a INNER JOIN clause to the query using the ExecDossierPaiement relation
 *
 * @method ExecContratQuery leftJoinExecEvenement($relationAlias = null) Adds a LEFT JOIN clause to the query using the ExecEvenement relation
 * @method ExecContratQuery rightJoinExecEvenement($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ExecEvenement relation
 * @method ExecContratQuery innerJoinExecEvenement($relationAlias = null) Adds a INNER JOIN clause to the query using the ExecEvenement relation
 *
 * @method ExecContratQuery leftJoinExecFacture($relationAlias = null) Adds a LEFT JOIN clause to the query using the ExecFacture relation
 * @method ExecContratQuery rightJoinExecFacture($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ExecFacture relation
 * @method ExecContratQuery innerJoinExecFacture($relationAlias = null) Adds a INNER JOIN clause to the query using the ExecFacture relation
 *
 * @method ExecContratQuery leftJoinExecHistoriquePrix($relationAlias = null) Adds a LEFT JOIN clause to the query using the ExecHistoriquePrix relation
 * @method ExecContratQuery rightJoinExecHistoriquePrix($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ExecHistoriquePrix relation
 * @method ExecContratQuery innerJoinExecHistoriquePrix($relationAlias = null) Adds a INNER JOIN clause to the query using the ExecHistoriquePrix relation
 *
 * @method ExecContratQuery leftJoinExecInscritContrat($relationAlias = null) Adds a LEFT JOIN clause to the query using the ExecInscritContrat relation
 * @method ExecContratQuery rightJoinExecInscritContrat($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ExecInscritContrat relation
 * @method ExecContratQuery innerJoinExecInscritContrat($relationAlias = null) Adds a INNER JOIN clause to the query using the ExecInscritContrat relation
 *
 * @method ExecContratQuery leftJoinExecLivrableContrat($relationAlias = null) Adds a LEFT JOIN clause to the query using the ExecLivrableContrat relation
 * @method ExecContratQuery rightJoinExecLivrableContrat($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ExecLivrableContrat relation
 * @method ExecContratQuery innerJoinExecLivrableContrat($relationAlias = null) Adds a INNER JOIN clause to the query using the ExecLivrableContrat relation
 *
 * @method ExecContratQuery leftJoinExecPhase($relationAlias = null) Adds a LEFT JOIN clause to the query using the ExecPhase relation
 * @method ExecContratQuery rightJoinExecPhase($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ExecPhase relation
 * @method ExecContratQuery innerJoinExecPhase($relationAlias = null) Adds a INNER JOIN clause to the query using the ExecPhase relation
 *
 * @method ExecContratQuery leftJoinExecPiece($relationAlias = null) Adds a LEFT JOIN clause to the query using the ExecPiece relation
 * @method ExecContratQuery rightJoinExecPiece($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ExecPiece relation
 * @method ExecContratQuery innerJoinExecPiece($relationAlias = null) Adds a INNER JOIN clause to the query using the ExecPiece relation
 *
 * @method ExecContratQuery leftJoinExecPieceAvenant($relationAlias = null) Adds a LEFT JOIN clause to the query using the ExecPieceAvenant relation
 * @method ExecContratQuery rightJoinExecPieceAvenant($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ExecPieceAvenant relation
 * @method ExecContratQuery innerJoinExecPieceAvenant($relationAlias = null) Adds a INNER JOIN clause to the query using the ExecPieceAvenant relation
 *
 * @method ExecContratQuery leftJoinExecPieceContrat($relationAlias = null) Adds a LEFT JOIN clause to the query using the ExecPieceContrat relation
 * @method ExecContratQuery rightJoinExecPieceContrat($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ExecPieceContrat relation
 * @method ExecContratQuery innerJoinExecPieceContrat($relationAlias = null) Adds a INNER JOIN clause to the query using the ExecPieceContrat relation
 *
 * @method ExecContratQuery leftJoinExecPieceDossierpaiement($relationAlias = null) Adds a LEFT JOIN clause to the query using the ExecPieceDossierpaiement relation
 * @method ExecContratQuery rightJoinExecPieceDossierpaiement($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ExecPieceDossierpaiement relation
 * @method ExecContratQuery innerJoinExecPieceDossierpaiement($relationAlias = null) Adds a INNER JOIN clause to the query using the ExecPieceDossierpaiement relation
 *
 * @method ExecContratQuery leftJoinExecPieceEvenement($relationAlias = null) Adds a LEFT JOIN clause to the query using the ExecPieceEvenement relation
 * @method ExecContratQuery rightJoinExecPieceEvenement($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ExecPieceEvenement relation
 * @method ExecContratQuery innerJoinExecPieceEvenement($relationAlias = null) Adds a INNER JOIN clause to the query using the ExecPieceEvenement relation
 *
 * @method ExecContratQuery leftJoinExecPieceFacture($relationAlias = null) Adds a LEFT JOIN clause to the query using the ExecPieceFacture relation
 * @method ExecContratQuery rightJoinExecPieceFacture($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ExecPieceFacture relation
 * @method ExecContratQuery innerJoinExecPieceFacture($relationAlias = null) Adds a INNER JOIN clause to the query using the ExecPieceFacture relation
 *
 * @method ExecContratQuery leftJoinExecPrix($relationAlias = null) Adds a LEFT JOIN clause to the query using the ExecPrix relation
 * @method ExecContratQuery rightJoinExecPrix($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ExecPrix relation
 * @method ExecContratQuery innerJoinExecPrix($relationAlias = null) Adds a INNER JOIN clause to the query using the ExecPrix relation
 *
 * @method ExecContratQuery leftJoinExecPrixAvenant($relationAlias = null) Adds a LEFT JOIN clause to the query using the ExecPrixAvenant relation
 * @method ExecContratQuery rightJoinExecPrixAvenant($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ExecPrixAvenant relation
 * @method ExecContratQuery innerJoinExecPrixAvenant($relationAlias = null) Adds a INNER JOIN clause to the query using the ExecPrixAvenant relation
 *
 * @method ExecContratQuery leftJoinExecRepartition($relationAlias = null) Adds a LEFT JOIN clause to the query using the ExecRepartition relation
 * @method ExecContratQuery rightJoinExecRepartition($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ExecRepartition relation
 * @method ExecContratQuery innerJoinExecRepartition($relationAlias = null) Adds a INNER JOIN clause to the query using the ExecRepartition relation
 *
 * @method ExecContrat findOne(PropelPDO $con = null) Return the first ExecContrat matching the query
 * @method ExecContrat findOneOrCreate(PropelPDO $con = null) Return the first ExecContrat matching the query, or a new ExecContrat object populated from the query conditions when no match is found
 *
 * @method ExecContrat findOneByConsultationRef(int $consultation_ref) Return the first ExecContrat filtered by the consultation_ref column
 * @method ExecContrat findOneByOrganisme(string $organisme) Return the first ExecContrat filtered by the organisme column
 * @method ExecContrat findOneByIdDecisionEnveloppe(int $id_decision_enveloppe) Return the first ExecContrat filtered by the id_decision_enveloppe column
 * @method ExecContrat findOneByNumero(string $numero) Return the first ExecContrat filtered by the numero column
 * @method ExecContrat findOneByStatut(int $statut) Return the first ExecContrat filtered by the statut column
 * @method ExecContrat findOneByIdTypeContrat(int $id_type_contrat) Return the first ExecContrat filtered by the id_type_contrat column
 * @method ExecContrat findOneByIdTypeStructure(int $id_type_structure) Return the first ExecContrat filtered by the id_type_structure column
 * @method ExecContrat findOneByObjet(string $objet) Return the first ExecContrat filtered by the objet column
 * @method ExecContrat findOneByNumConsultation(string $num_consultation) Return the first ExecContrat filtered by the num_consultation column
 * @method ExecContrat findOneByIdNaturePrestation(string $id_nature_prestation) Return the first ExecContrat filtered by the id_nature_prestation column
 * @method ExecContrat findOneByIdService(int $id_service) Return the first ExecContrat filtered by the id_service column
 * @method ExecContrat findOneByIdServiceGerant(int $id_service_gerant) Return the first ExecContrat filtered by the id_service_gerant column
 * @method ExecContrat findOneByIdAgentGestion(int $id_agent_gestion) Return the first ExecContrat filtered by the id_agent_gestion column
 * @method ExecContrat findOneByReconductible(int $reconductible) Return the first ExecContrat filtered by the reconductible column
 * @method ExecContrat findOneByNombreReconduction(int $nombre_reconduction) Return the first ExecContrat filtered by the nombre_reconduction column
 * @method ExecContrat findOneByMontantHt(double $montant_ht) Return the first ExecContrat filtered by the montant_ht column
 * @method ExecContrat findOneByMontantTtc(double $montant_ttc) Return the first ExecContrat filtered by the montant_ttc column
 * @method ExecContrat findOneByMontantMin(double $montant_min) Return the first ExecContrat filtered by the montant_min column
 * @method ExecContrat findOneByMontantMax(double $montant_max) Return the first ExecContrat filtered by the montant_max column
 * @method ExecContrat findOneByMontantMinTtc(double $montant_min_ttc) Return the first ExecContrat filtered by the montant_min_ttc column
 * @method ExecContrat findOneByMontantMaxTtc(double $montant_max_ttc) Return the first ExecContrat filtered by the montant_max_ttc column
 * @method ExecContrat findOneByMontantFactureHt(double $montant_facture_ht) Return the first ExecContrat filtered by the montant_facture_ht column
 * @method ExecContrat findOneByMontantFactureTtc(double $montant_facture_ttc) Return the first ExecContrat filtered by the montant_facture_ttc column
 * @method ExecContrat findOneByMontantPayeHt(double $montant_paye_ht) Return the first ExecContrat filtered by the montant_paye_ht column
 * @method ExecContrat findOneByMontantPayeTtc(double $montant_paye_ttc) Return the first ExecContrat filtered by the montant_paye_ttc column
 * @method ExecContrat findOneByMontantCaution(double $montant_caution) Return the first ExecContrat filtered by the montant_caution column
 * @method ExecContrat findOneByPourcentageCaution(double $pourcentage_caution) Return the first ExecContrat filtered by the pourcentage_caution column
 * @method ExecContrat findOneByRetenueGarantie(string $retenue_garantie) Return the first ExecContrat filtered by the retenue_garantie column
 * @method ExecContrat findOneByPourcentageRetenueGarantie(double $pourcentage_retenue_garantie) Return the first ExecContrat filtered by the pourcentage_retenue_garantie column
 * @method ExecContrat findOneByMontantRetenuGarantie(double $montant_retenu_garantie) Return the first ExecContrat filtered by the montant_retenu_garantie column
 * @method ExecContrat findOneByPourcentagePrelevementGarantie(double $pourcentage_prelevement_garantie) Return the first ExecContrat filtered by the pourcentage_prelevement_garantie column
 * @method ExecContrat findOneByMontantAvance(double $montant_avance) Return the first ExecContrat filtered by the montant_avance column
 * @method ExecContrat findOneByDelaiPartiel(int $delai_partiel) Return the first ExecContrat filtered by the delai_partiel column
 * @method ExecContrat findOneByDelaiContrat(double $delai_contrat) Return the first ExecContrat filtered by the delai_contrat column
 * @method ExecContrat findOneByUniteDelaiContrat(int $unite_delai_contrat) Return the first ExecContrat filtered by the unite_delai_contrat column
 * @method ExecContrat findOneByDateApprobation(string $date_approbation) Return the first ExecContrat filtered by the date_approbation column
 * @method ExecContrat findOneByDateNotificationApprobation(string $date_notification_approbation) Return the first ExecContrat filtered by the date_notification_approbation column
 * @method ExecContrat findOneByDateFin(string $date_fin) Return the first ExecContrat filtered by the date_fin column
 * @method ExecContrat findOneByDateCrea(string $date_crea) Return the first ExecContrat filtered by the date_crea column
 * @method ExecContrat findOneByIdAgentCrea(int $id_agent_crea) Return the first ExecContrat filtered by the id_agent_crea column
 * @method ExecContrat findOneByDateModif(string $date_modif) Return the first ExecContrat filtered by the date_modif column
 * @method ExecContrat findOneByIdAgentModif(int $id_agent_modif) Return the first ExecContrat filtered by the id_agent_modif column
 * @method ExecContrat findOneByDelaiReel(double $delai_reel) Return the first ExecContrat filtered by the delai_reel column
 * @method ExecContrat findOneByDepassement(double $depassement) Return the first ExecContrat filtered by the depassement column
 * @method ExecContrat findOneByDateMajDelaiReel(string $date_maj_delai_reel) Return the first ExecContrat filtered by the date_maj_delai_reel column
 * @method ExecContrat findOneByIdParapheur(int $id_parapheur) Return the first ExecContrat filtered by the id_parapheur column
 * @method ExecContrat findOneByStatutParapheur(int $statut_parapheur) Return the first ExecContrat filtered by the statut_parapheur column
 * @method ExecContrat findOneByDateClotureParapheur(string $date_cloture_parapheur) Return the first ExecContrat filtered by the date_cloture_parapheur column
 * @method ExecContrat findOneByGarantie(string $garantie) Return the first ExecContrat filtered by the garantie column
 * @method ExecContrat findOneByDureeGarantie(double $duree_garantie) Return the first ExecContrat filtered by the duree_garantie column
 * @method ExecContrat findOneByUniteGarantie(int $unite_garantie) Return the first ExecContrat filtered by the unite_garantie column
 * @method ExecContrat findOneByTypePenalite(string $type_penalite) Return the first ExecContrat filtered by the type_penalite column
 * @method ExecContrat findOneByPourcentagePenalite(double $pourcentage_penalite) Return the first ExecContrat filtered by the pourcentage_penalite column
 * @method ExecContrat findOneByMontantPenalite(double $montant_penalite) Return the first ExecContrat filtered by the montant_penalite column
 * @method ExecContrat findOneByPlafondPenalite(double $plafond_penalite) Return the first ExecContrat filtered by the plafond_penalite column
 * @method ExecContrat findOneByModePassation(int $mode_passation) Return the first ExecContrat filtered by the mode_passation column
 * @method ExecContrat findOneByLieMarche(string $lie_marche) Return the first ExecContrat filtered by the lie_marche column
 * @method ExecContrat findOneByNumChapeau(int $num_chapeau) Return the first ExecContrat filtered by the num_chapeau column
 * @method ExecContrat findOneByOsPhase(string $os_phase) Return the first ExecContrat filtered by the os_phase column
 * @method ExecContrat findOneByPrestationDemande(string $prestation_demande) Return the first ExecContrat filtered by the prestation_demande column
 * @method ExecContrat findOneByForfaitJh(string $forfait_jh) Return the first ExecContrat filtered by the forfait_jh column
 * @method ExecContrat findOneByQuantiteJh(double $quantite_jh) Return the first ExecContrat filtered by the quantite_jh column
 * @method ExecContrat findOneByNatureMarche(int $nature_marche) Return the first ExecContrat filtered by the nature_marche column
 * @method ExecContrat findOneByDateDebut(string $date_debut) Return the first ExecContrat filtered by the date_debut column
 * @method ExecContrat findOneByPlurianuelle(string $plurianuelle) Return the first ExecContrat filtered by the plurianuelle column
 * @method ExecContrat findOneByTrancheconditionnelle(string $trancheconditionnelle) Return the first ExecContrat filtered by the trancheconditionnelle column
 * @method ExecContrat findOneByIdAgentCr(int $id_agent_cr) Return the first ExecContrat filtered by the id_agent_cr column
 * @method ExecContrat findOneByDevise(string $devise) Return the first ExecContrat filtered by the devise column
 * @method ExecContrat findOneByIdContratSource(int $id_contrat_source) Return the first ExecContrat filtered by the id_contrat_source column
 *
 * @method array findByIdContrat(int $id_contrat) Return ExecContrat objects filtered by the id_contrat column
 * @method array findByConsultationRef(int $consultation_ref) Return ExecContrat objects filtered by the consultation_ref column
 * @method array findByOrganisme(string $organisme) Return ExecContrat objects filtered by the organisme column
 * @method array findByIdDecisionEnveloppe(int $id_decision_enveloppe) Return ExecContrat objects filtered by the id_decision_enveloppe column
 * @method array findByNumero(string $numero) Return ExecContrat objects filtered by the numero column
 * @method array findByStatut(int $statut) Return ExecContrat objects filtered by the statut column
 * @method array findByIdTypeContrat(int $id_type_contrat) Return ExecContrat objects filtered by the id_type_contrat column
 * @method array findByIdTypeStructure(int $id_type_structure) Return ExecContrat objects filtered by the id_type_structure column
 * @method array findByObjet(string $objet) Return ExecContrat objects filtered by the objet column
 * @method array findByNumConsultation(string $num_consultation) Return ExecContrat objects filtered by the num_consultation column
 * @method array findByIdNaturePrestation(string $id_nature_prestation) Return ExecContrat objects filtered by the id_nature_prestation column
 * @method array findByIdService(int $id_service) Return ExecContrat objects filtered by the id_service column
 * @method array findByIdServiceGerant(int $id_service_gerant) Return ExecContrat objects filtered by the id_service_gerant column
 * @method array findByIdAgentGestion(int $id_agent_gestion) Return ExecContrat objects filtered by the id_agent_gestion column
 * @method array findByReconductible(int $reconductible) Return ExecContrat objects filtered by the reconductible column
 * @method array findByNombreReconduction(int $nombre_reconduction) Return ExecContrat objects filtered by the nombre_reconduction column
 * @method array findByMontantHt(double $montant_ht) Return ExecContrat objects filtered by the montant_ht column
 * @method array findByMontantTtc(double $montant_ttc) Return ExecContrat objects filtered by the montant_ttc column
 * @method array findByMontantMin(double $montant_min) Return ExecContrat objects filtered by the montant_min column
 * @method array findByMontantMax(double $montant_max) Return ExecContrat objects filtered by the montant_max column
 * @method array findByMontantMinTtc(double $montant_min_ttc) Return ExecContrat objects filtered by the montant_min_ttc column
 * @method array findByMontantMaxTtc(double $montant_max_ttc) Return ExecContrat objects filtered by the montant_max_ttc column
 * @method array findByMontantFactureHt(double $montant_facture_ht) Return ExecContrat objects filtered by the montant_facture_ht column
 * @method array findByMontantFactureTtc(double $montant_facture_ttc) Return ExecContrat objects filtered by the montant_facture_ttc column
 * @method array findByMontantPayeHt(double $montant_paye_ht) Return ExecContrat objects filtered by the montant_paye_ht column
 * @method array findByMontantPayeTtc(double $montant_paye_ttc) Return ExecContrat objects filtered by the montant_paye_ttc column
 * @method array findByMontantCaution(double $montant_caution) Return ExecContrat objects filtered by the montant_caution column
 * @method array findByPourcentageCaution(double $pourcentage_caution) Return ExecContrat objects filtered by the pourcentage_caution column
 * @method array findByRetenueGarantie(string $retenue_garantie) Return ExecContrat objects filtered by the retenue_garantie column
 * @method array findByPourcentageRetenueGarantie(double $pourcentage_retenue_garantie) Return ExecContrat objects filtered by the pourcentage_retenue_garantie column
 * @method array findByMontantRetenuGarantie(double $montant_retenu_garantie) Return ExecContrat objects filtered by the montant_retenu_garantie column
 * @method array findByPourcentagePrelevementGarantie(double $pourcentage_prelevement_garantie) Return ExecContrat objects filtered by the pourcentage_prelevement_garantie column
 * @method array findByMontantAvance(double $montant_avance) Return ExecContrat objects filtered by the montant_avance column
 * @method array findByDelaiPartiel(int $delai_partiel) Return ExecContrat objects filtered by the delai_partiel column
 * @method array findByDelaiContrat(double $delai_contrat) Return ExecContrat objects filtered by the delai_contrat column
 * @method array findByUniteDelaiContrat(int $unite_delai_contrat) Return ExecContrat objects filtered by the unite_delai_contrat column
 * @method array findByDateApprobation(string $date_approbation) Return ExecContrat objects filtered by the date_approbation column
 * @method array findByDateNotificationApprobation(string $date_notification_approbation) Return ExecContrat objects filtered by the date_notification_approbation column
 * @method array findByDateFin(string $date_fin) Return ExecContrat objects filtered by the date_fin column
 * @method array findByDateCrea(string $date_crea) Return ExecContrat objects filtered by the date_crea column
 * @method array findByIdAgentCrea(int $id_agent_crea) Return ExecContrat objects filtered by the id_agent_crea column
 * @method array findByDateModif(string $date_modif) Return ExecContrat objects filtered by the date_modif column
 * @method array findByIdAgentModif(int $id_agent_modif) Return ExecContrat objects filtered by the id_agent_modif column
 * @method array findByDelaiReel(double $delai_reel) Return ExecContrat objects filtered by the delai_reel column
 * @method array findByDepassement(double $depassement) Return ExecContrat objects filtered by the depassement column
 * @method array findByDateMajDelaiReel(string $date_maj_delai_reel) Return ExecContrat objects filtered by the date_maj_delai_reel column
 * @method array findByIdParapheur(int $id_parapheur) Return ExecContrat objects filtered by the id_parapheur column
 * @method array findByStatutParapheur(int $statut_parapheur) Return ExecContrat objects filtered by the statut_parapheur column
 * @method array findByDateClotureParapheur(string $date_cloture_parapheur) Return ExecContrat objects filtered by the date_cloture_parapheur column
 * @method array findByGarantie(string $garantie) Return ExecContrat objects filtered by the garantie column
 * @method array findByDureeGarantie(double $duree_garantie) Return ExecContrat objects filtered by the duree_garantie column
 * @method array findByUniteGarantie(int $unite_garantie) Return ExecContrat objects filtered by the unite_garantie column
 * @method array findByTypePenalite(string $type_penalite) Return ExecContrat objects filtered by the type_penalite column
 * @method array findByPourcentagePenalite(double $pourcentage_penalite) Return ExecContrat objects filtered by the pourcentage_penalite column
 * @method array findByMontantPenalite(double $montant_penalite) Return ExecContrat objects filtered by the montant_penalite column
 * @method array findByPlafondPenalite(double $plafond_penalite) Return ExecContrat objects filtered by the plafond_penalite column
 * @method array findByModePassation(int $mode_passation) Return ExecContrat objects filtered by the mode_passation column
 * @method array findByLieMarche(string $lie_marche) Return ExecContrat objects filtered by the lie_marche column
 * @method array findByNumChapeau(int $num_chapeau) Return ExecContrat objects filtered by the num_chapeau column
 * @method array findByOsPhase(string $os_phase) Return ExecContrat objects filtered by the os_phase column
 * @method array findByPrestationDemande(string $prestation_demande) Return ExecContrat objects filtered by the prestation_demande column
 * @method array findByForfaitJh(string $forfait_jh) Return ExecContrat objects filtered by the forfait_jh column
 * @method array findByQuantiteJh(double $quantite_jh) Return ExecContrat objects filtered by the quantite_jh column
 * @method array findByNatureMarche(int $nature_marche) Return ExecContrat objects filtered by the nature_marche column
 * @method array findByDateDebut(string $date_debut) Return ExecContrat objects filtered by the date_debut column
 * @method array findByPlurianuelle(string $plurianuelle) Return ExecContrat objects filtered by the plurianuelle column
 * @method array findByTrancheconditionnelle(string $trancheconditionnelle) Return ExecContrat objects filtered by the trancheconditionnelle column
 * @method array findByIdAgentCr(int $id_agent_cr) Return ExecContrat objects filtered by the id_agent_cr column
 * @method array findByDevise(string $devise) Return ExecContrat objects filtered by the devise column
 * @method array findByIdContratSource(int $id_contrat_source) Return ExecContrat objects filtered by the id_contrat_source column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseExecContratQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseExecContratQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'ExecContrat', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ExecContratQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ExecContratQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ExecContratQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ExecContratQuery) {
            return $criteria;
        }
        $query = new ExecContratQuery();
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
     * @return   ExecContrat|ExecContrat[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ExecContratPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ExecContratPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ExecContrat A model object, or null if the key is not found
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
     * @return                 ExecContrat A model object, or null if the key is not found
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
            $obj = new ExecContrat();
            $obj->hydrate($row);
            ExecContratPeer::addInstanceToPool($obj, (string) $key);
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
     * @return ExecContrat|ExecContrat[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ExecContrat[]|mixed the list of results, formatted by the current formatter
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ExecContratPeer::ID_CONTRAT, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ExecContratPeer::ID_CONTRAT, $keys, Criteria::IN);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByIdContrat($idContrat = null, $comparison = null)
    {
        if (is_array($idContrat)) {
            $useMinMax = false;
            if (isset($idContrat['min'])) {
                $this->addUsingAlias(ExecContratPeer::ID_CONTRAT, $idContrat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idContrat['max'])) {
                $this->addUsingAlias(ExecContratPeer::ID_CONTRAT, $idContrat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::ID_CONTRAT, $idContrat, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByConsultationRef($consultationRef = null, $comparison = null)
    {
        if (is_array($consultationRef)) {
            $useMinMax = false;
            if (isset($consultationRef['min'])) {
                $this->addUsingAlias(ExecContratPeer::CONSULTATION_REF, $consultationRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($consultationRef['max'])) {
                $this->addUsingAlias(ExecContratPeer::CONSULTATION_REF, $consultationRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::CONSULTATION_REF, $consultationRef, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ExecContratPeer::ORGANISME, $organisme, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByIdDecisionEnveloppe($idDecisionEnveloppe = null, $comparison = null)
    {
        if (is_array($idDecisionEnveloppe)) {
            $useMinMax = false;
            if (isset($idDecisionEnveloppe['min'])) {
                $this->addUsingAlias(ExecContratPeer::ID_DECISION_ENVELOPPE, $idDecisionEnveloppe['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDecisionEnveloppe['max'])) {
                $this->addUsingAlias(ExecContratPeer::ID_DECISION_ENVELOPPE, $idDecisionEnveloppe['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::ID_DECISION_ENVELOPPE, $idDecisionEnveloppe, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ExecContratPeer::NUMERO, $numero, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByStatut($statut = null, $comparison = null)
    {
        if (is_array($statut)) {
            $useMinMax = false;
            if (isset($statut['min'])) {
                $this->addUsingAlias(ExecContratPeer::STATUT, $statut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statut['max'])) {
                $this->addUsingAlias(ExecContratPeer::STATUT, $statut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::STATUT, $statut, $comparison);
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
     * @see       filterByExecTypeContrat()
     *
     * @param     mixed $idTypeContrat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByIdTypeContrat($idTypeContrat = null, $comparison = null)
    {
        if (is_array($idTypeContrat)) {
            $useMinMax = false;
            if (isset($idTypeContrat['min'])) {
                $this->addUsingAlias(ExecContratPeer::ID_TYPE_CONTRAT, $idTypeContrat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeContrat['max'])) {
                $this->addUsingAlias(ExecContratPeer::ID_TYPE_CONTRAT, $idTypeContrat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::ID_TYPE_CONTRAT, $idTypeContrat, $comparison);
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
     * @see       filterByExecTypeStructure()
     *
     * @param     mixed $idTypeStructure The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByIdTypeStructure($idTypeStructure = null, $comparison = null)
    {
        if (is_array($idTypeStructure)) {
            $useMinMax = false;
            if (isset($idTypeStructure['min'])) {
                $this->addUsingAlias(ExecContratPeer::ID_TYPE_STRUCTURE, $idTypeStructure['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeStructure['max'])) {
                $this->addUsingAlias(ExecContratPeer::ID_TYPE_STRUCTURE, $idTypeStructure['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::ID_TYPE_STRUCTURE, $idTypeStructure, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ExecContratPeer::OBJET, $objet, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ExecContratPeer::NUM_CONSULTATION, $numConsultation, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ExecContratPeer::ID_NATURE_PRESTATION, $idNaturePrestation, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByIdService($idService = null, $comparison = null)
    {
        if (is_array($idService)) {
            $useMinMax = false;
            if (isset($idService['min'])) {
                $this->addUsingAlias(ExecContratPeer::ID_SERVICE, $idService['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idService['max'])) {
                $this->addUsingAlias(ExecContratPeer::ID_SERVICE, $idService['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::ID_SERVICE, $idService, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByIdServiceGerant($idServiceGerant = null, $comparison = null)
    {
        if (is_array($idServiceGerant)) {
            $useMinMax = false;
            if (isset($idServiceGerant['min'])) {
                $this->addUsingAlias(ExecContratPeer::ID_SERVICE_GERANT, $idServiceGerant['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idServiceGerant['max'])) {
                $this->addUsingAlias(ExecContratPeer::ID_SERVICE_GERANT, $idServiceGerant['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::ID_SERVICE_GERANT, $idServiceGerant, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByIdAgentGestion($idAgentGestion = null, $comparison = null)
    {
        if (is_array($idAgentGestion)) {
            $useMinMax = false;
            if (isset($idAgentGestion['min'])) {
                $this->addUsingAlias(ExecContratPeer::ID_AGENT_GESTION, $idAgentGestion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentGestion['max'])) {
                $this->addUsingAlias(ExecContratPeer::ID_AGENT_GESTION, $idAgentGestion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::ID_AGENT_GESTION, $idAgentGestion, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByReconductible($reconductible = null, $comparison = null)
    {
        if (is_array($reconductible)) {
            $useMinMax = false;
            if (isset($reconductible['min'])) {
                $this->addUsingAlias(ExecContratPeer::RECONDUCTIBLE, $reconductible['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reconductible['max'])) {
                $this->addUsingAlias(ExecContratPeer::RECONDUCTIBLE, $reconductible['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::RECONDUCTIBLE, $reconductible, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByNombreReconduction($nombreReconduction = null, $comparison = null)
    {
        if (is_array($nombreReconduction)) {
            $useMinMax = false;
            if (isset($nombreReconduction['min'])) {
                $this->addUsingAlias(ExecContratPeer::NOMBRE_RECONDUCTION, $nombreReconduction['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nombreReconduction['max'])) {
                $this->addUsingAlias(ExecContratPeer::NOMBRE_RECONDUCTION, $nombreReconduction['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::NOMBRE_RECONDUCTION, $nombreReconduction, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByMontantHt($montantHt = null, $comparison = null)
    {
        if (is_array($montantHt)) {
            $useMinMax = false;
            if (isset($montantHt['min'])) {
                $this->addUsingAlias(ExecContratPeer::MONTANT_HT, $montantHt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantHt['max'])) {
                $this->addUsingAlias(ExecContratPeer::MONTANT_HT, $montantHt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::MONTANT_HT, $montantHt, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByMontantTtc($montantTtc = null, $comparison = null)
    {
        if (is_array($montantTtc)) {
            $useMinMax = false;
            if (isset($montantTtc['min'])) {
                $this->addUsingAlias(ExecContratPeer::MONTANT_TTC, $montantTtc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantTtc['max'])) {
                $this->addUsingAlias(ExecContratPeer::MONTANT_TTC, $montantTtc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::MONTANT_TTC, $montantTtc, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByMontantMin($montantMin = null, $comparison = null)
    {
        if (is_array($montantMin)) {
            $useMinMax = false;
            if (isset($montantMin['min'])) {
                $this->addUsingAlias(ExecContratPeer::MONTANT_MIN, $montantMin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantMin['max'])) {
                $this->addUsingAlias(ExecContratPeer::MONTANT_MIN, $montantMin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::MONTANT_MIN, $montantMin, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByMontantMax($montantMax = null, $comparison = null)
    {
        if (is_array($montantMax)) {
            $useMinMax = false;
            if (isset($montantMax['min'])) {
                $this->addUsingAlias(ExecContratPeer::MONTANT_MAX, $montantMax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantMax['max'])) {
                $this->addUsingAlias(ExecContratPeer::MONTANT_MAX, $montantMax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::MONTANT_MAX, $montantMax, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByMontantMinTtc($montantMinTtc = null, $comparison = null)
    {
        if (is_array($montantMinTtc)) {
            $useMinMax = false;
            if (isset($montantMinTtc['min'])) {
                $this->addUsingAlias(ExecContratPeer::MONTANT_MIN_TTC, $montantMinTtc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantMinTtc['max'])) {
                $this->addUsingAlias(ExecContratPeer::MONTANT_MIN_TTC, $montantMinTtc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::MONTANT_MIN_TTC, $montantMinTtc, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByMontantMaxTtc($montantMaxTtc = null, $comparison = null)
    {
        if (is_array($montantMaxTtc)) {
            $useMinMax = false;
            if (isset($montantMaxTtc['min'])) {
                $this->addUsingAlias(ExecContratPeer::MONTANT_MAX_TTC, $montantMaxTtc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantMaxTtc['max'])) {
                $this->addUsingAlias(ExecContratPeer::MONTANT_MAX_TTC, $montantMaxTtc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::MONTANT_MAX_TTC, $montantMaxTtc, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByMontantFactureHt($montantFactureHt = null, $comparison = null)
    {
        if (is_array($montantFactureHt)) {
            $useMinMax = false;
            if (isset($montantFactureHt['min'])) {
                $this->addUsingAlias(ExecContratPeer::MONTANT_FACTURE_HT, $montantFactureHt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantFactureHt['max'])) {
                $this->addUsingAlias(ExecContratPeer::MONTANT_FACTURE_HT, $montantFactureHt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::MONTANT_FACTURE_HT, $montantFactureHt, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByMontantFactureTtc($montantFactureTtc = null, $comparison = null)
    {
        if (is_array($montantFactureTtc)) {
            $useMinMax = false;
            if (isset($montantFactureTtc['min'])) {
                $this->addUsingAlias(ExecContratPeer::MONTANT_FACTURE_TTC, $montantFactureTtc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantFactureTtc['max'])) {
                $this->addUsingAlias(ExecContratPeer::MONTANT_FACTURE_TTC, $montantFactureTtc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::MONTANT_FACTURE_TTC, $montantFactureTtc, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByMontantPayeHt($montantPayeHt = null, $comparison = null)
    {
        if (is_array($montantPayeHt)) {
            $useMinMax = false;
            if (isset($montantPayeHt['min'])) {
                $this->addUsingAlias(ExecContratPeer::MONTANT_PAYE_HT, $montantPayeHt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantPayeHt['max'])) {
                $this->addUsingAlias(ExecContratPeer::MONTANT_PAYE_HT, $montantPayeHt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::MONTANT_PAYE_HT, $montantPayeHt, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByMontantPayeTtc($montantPayeTtc = null, $comparison = null)
    {
        if (is_array($montantPayeTtc)) {
            $useMinMax = false;
            if (isset($montantPayeTtc['min'])) {
                $this->addUsingAlias(ExecContratPeer::MONTANT_PAYE_TTC, $montantPayeTtc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantPayeTtc['max'])) {
                $this->addUsingAlias(ExecContratPeer::MONTANT_PAYE_TTC, $montantPayeTtc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::MONTANT_PAYE_TTC, $montantPayeTtc, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByMontantCaution($montantCaution = null, $comparison = null)
    {
        if (is_array($montantCaution)) {
            $useMinMax = false;
            if (isset($montantCaution['min'])) {
                $this->addUsingAlias(ExecContratPeer::MONTANT_CAUTION, $montantCaution['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantCaution['max'])) {
                $this->addUsingAlias(ExecContratPeer::MONTANT_CAUTION, $montantCaution['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::MONTANT_CAUTION, $montantCaution, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByPourcentageCaution($pourcentageCaution = null, $comparison = null)
    {
        if (is_array($pourcentageCaution)) {
            $useMinMax = false;
            if (isset($pourcentageCaution['min'])) {
                $this->addUsingAlias(ExecContratPeer::POURCENTAGE_CAUTION, $pourcentageCaution['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pourcentageCaution['max'])) {
                $this->addUsingAlias(ExecContratPeer::POURCENTAGE_CAUTION, $pourcentageCaution['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::POURCENTAGE_CAUTION, $pourcentageCaution, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ExecContratPeer::RETENUE_GARANTIE, $retenueGarantie, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByPourcentageRetenueGarantie($pourcentageRetenueGarantie = null, $comparison = null)
    {
        if (is_array($pourcentageRetenueGarantie)) {
            $useMinMax = false;
            if (isset($pourcentageRetenueGarantie['min'])) {
                $this->addUsingAlias(ExecContratPeer::POURCENTAGE_RETENUE_GARANTIE, $pourcentageRetenueGarantie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pourcentageRetenueGarantie['max'])) {
                $this->addUsingAlias(ExecContratPeer::POURCENTAGE_RETENUE_GARANTIE, $pourcentageRetenueGarantie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::POURCENTAGE_RETENUE_GARANTIE, $pourcentageRetenueGarantie, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByMontantRetenuGarantie($montantRetenuGarantie = null, $comparison = null)
    {
        if (is_array($montantRetenuGarantie)) {
            $useMinMax = false;
            if (isset($montantRetenuGarantie['min'])) {
                $this->addUsingAlias(ExecContratPeer::MONTANT_RETENU_GARANTIE, $montantRetenuGarantie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantRetenuGarantie['max'])) {
                $this->addUsingAlias(ExecContratPeer::MONTANT_RETENU_GARANTIE, $montantRetenuGarantie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::MONTANT_RETENU_GARANTIE, $montantRetenuGarantie, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByPourcentagePrelevementGarantie($pourcentagePrelevementGarantie = null, $comparison = null)
    {
        if (is_array($pourcentagePrelevementGarantie)) {
            $useMinMax = false;
            if (isset($pourcentagePrelevementGarantie['min'])) {
                $this->addUsingAlias(ExecContratPeer::POURCENTAGE_PRELEVEMENT_GARANTIE, $pourcentagePrelevementGarantie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pourcentagePrelevementGarantie['max'])) {
                $this->addUsingAlias(ExecContratPeer::POURCENTAGE_PRELEVEMENT_GARANTIE, $pourcentagePrelevementGarantie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::POURCENTAGE_PRELEVEMENT_GARANTIE, $pourcentagePrelevementGarantie, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByMontantAvance($montantAvance = null, $comparison = null)
    {
        if (is_array($montantAvance)) {
            $useMinMax = false;
            if (isset($montantAvance['min'])) {
                $this->addUsingAlias(ExecContratPeer::MONTANT_AVANCE, $montantAvance['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantAvance['max'])) {
                $this->addUsingAlias(ExecContratPeer::MONTANT_AVANCE, $montantAvance['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::MONTANT_AVANCE, $montantAvance, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByDelaiPartiel($delaiPartiel = null, $comparison = null)
    {
        if (is_array($delaiPartiel)) {
            $useMinMax = false;
            if (isset($delaiPartiel['min'])) {
                $this->addUsingAlias(ExecContratPeer::DELAI_PARTIEL, $delaiPartiel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delaiPartiel['max'])) {
                $this->addUsingAlias(ExecContratPeer::DELAI_PARTIEL, $delaiPartiel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::DELAI_PARTIEL, $delaiPartiel, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByDelaiContrat($delaiContrat = null, $comparison = null)
    {
        if (is_array($delaiContrat)) {
            $useMinMax = false;
            if (isset($delaiContrat['min'])) {
                $this->addUsingAlias(ExecContratPeer::DELAI_CONTRAT, $delaiContrat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delaiContrat['max'])) {
                $this->addUsingAlias(ExecContratPeer::DELAI_CONTRAT, $delaiContrat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::DELAI_CONTRAT, $delaiContrat, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByUniteDelaiContrat($uniteDelaiContrat = null, $comparison = null)
    {
        if (is_array($uniteDelaiContrat)) {
            $useMinMax = false;
            if (isset($uniteDelaiContrat['min'])) {
                $this->addUsingAlias(ExecContratPeer::UNITE_DELAI_CONTRAT, $uniteDelaiContrat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($uniteDelaiContrat['max'])) {
                $this->addUsingAlias(ExecContratPeer::UNITE_DELAI_CONTRAT, $uniteDelaiContrat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::UNITE_DELAI_CONTRAT, $uniteDelaiContrat, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByDateApprobation($dateApprobation = null, $comparison = null)
    {
        if (is_array($dateApprobation)) {
            $useMinMax = false;
            if (isset($dateApprobation['min'])) {
                $this->addUsingAlias(ExecContratPeer::DATE_APPROBATION, $dateApprobation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateApprobation['max'])) {
                $this->addUsingAlias(ExecContratPeer::DATE_APPROBATION, $dateApprobation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::DATE_APPROBATION, $dateApprobation, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByDateNotificationApprobation($dateNotificationApprobation = null, $comparison = null)
    {
        if (is_array($dateNotificationApprobation)) {
            $useMinMax = false;
            if (isset($dateNotificationApprobation['min'])) {
                $this->addUsingAlias(ExecContratPeer::DATE_NOTIFICATION_APPROBATION, $dateNotificationApprobation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateNotificationApprobation['max'])) {
                $this->addUsingAlias(ExecContratPeer::DATE_NOTIFICATION_APPROBATION, $dateNotificationApprobation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::DATE_NOTIFICATION_APPROBATION, $dateNotificationApprobation, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByDateFin($dateFin = null, $comparison = null)
    {
        if (is_array($dateFin)) {
            $useMinMax = false;
            if (isset($dateFin['min'])) {
                $this->addUsingAlias(ExecContratPeer::DATE_FIN, $dateFin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateFin['max'])) {
                $this->addUsingAlias(ExecContratPeer::DATE_FIN, $dateFin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::DATE_FIN, $dateFin, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByDateCrea($dateCrea = null, $comparison = null)
    {
        if (is_array($dateCrea)) {
            $useMinMax = false;
            if (isset($dateCrea['min'])) {
                $this->addUsingAlias(ExecContratPeer::DATE_CREA, $dateCrea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCrea['max'])) {
                $this->addUsingAlias(ExecContratPeer::DATE_CREA, $dateCrea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::DATE_CREA, $dateCrea, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByIdAgentCrea($idAgentCrea = null, $comparison = null)
    {
        if (is_array($idAgentCrea)) {
            $useMinMax = false;
            if (isset($idAgentCrea['min'])) {
                $this->addUsingAlias(ExecContratPeer::ID_AGENT_CREA, $idAgentCrea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentCrea['max'])) {
                $this->addUsingAlias(ExecContratPeer::ID_AGENT_CREA, $idAgentCrea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::ID_AGENT_CREA, $idAgentCrea, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByDateModif($dateModif = null, $comparison = null)
    {
        if (is_array($dateModif)) {
            $useMinMax = false;
            if (isset($dateModif['min'])) {
                $this->addUsingAlias(ExecContratPeer::DATE_MODIF, $dateModif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateModif['max'])) {
                $this->addUsingAlias(ExecContratPeer::DATE_MODIF, $dateModif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::DATE_MODIF, $dateModif, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByIdAgentModif($idAgentModif = null, $comparison = null)
    {
        if (is_array($idAgentModif)) {
            $useMinMax = false;
            if (isset($idAgentModif['min'])) {
                $this->addUsingAlias(ExecContratPeer::ID_AGENT_MODIF, $idAgentModif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentModif['max'])) {
                $this->addUsingAlias(ExecContratPeer::ID_AGENT_MODIF, $idAgentModif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::ID_AGENT_MODIF, $idAgentModif, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByDelaiReel($delaiReel = null, $comparison = null)
    {
        if (is_array($delaiReel)) {
            $useMinMax = false;
            if (isset($delaiReel['min'])) {
                $this->addUsingAlias(ExecContratPeer::DELAI_REEL, $delaiReel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delaiReel['max'])) {
                $this->addUsingAlias(ExecContratPeer::DELAI_REEL, $delaiReel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::DELAI_REEL, $delaiReel, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByDepassement($depassement = null, $comparison = null)
    {
        if (is_array($depassement)) {
            $useMinMax = false;
            if (isset($depassement['min'])) {
                $this->addUsingAlias(ExecContratPeer::DEPASSEMENT, $depassement['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($depassement['max'])) {
                $this->addUsingAlias(ExecContratPeer::DEPASSEMENT, $depassement['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::DEPASSEMENT, $depassement, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByDateMajDelaiReel($dateMajDelaiReel = null, $comparison = null)
    {
        if (is_array($dateMajDelaiReel)) {
            $useMinMax = false;
            if (isset($dateMajDelaiReel['min'])) {
                $this->addUsingAlias(ExecContratPeer::DATE_MAJ_DELAI_REEL, $dateMajDelaiReel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateMajDelaiReel['max'])) {
                $this->addUsingAlias(ExecContratPeer::DATE_MAJ_DELAI_REEL, $dateMajDelaiReel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::DATE_MAJ_DELAI_REEL, $dateMajDelaiReel, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByIdParapheur($idParapheur = null, $comparison = null)
    {
        if (is_array($idParapheur)) {
            $useMinMax = false;
            if (isset($idParapheur['min'])) {
                $this->addUsingAlias(ExecContratPeer::ID_PARAPHEUR, $idParapheur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idParapheur['max'])) {
                $this->addUsingAlias(ExecContratPeer::ID_PARAPHEUR, $idParapheur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::ID_PARAPHEUR, $idParapheur, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByStatutParapheur($statutParapheur = null, $comparison = null)
    {
        if (is_array($statutParapheur)) {
            $useMinMax = false;
            if (isset($statutParapheur['min'])) {
                $this->addUsingAlias(ExecContratPeer::STATUT_PARAPHEUR, $statutParapheur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statutParapheur['max'])) {
                $this->addUsingAlias(ExecContratPeer::STATUT_PARAPHEUR, $statutParapheur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::STATUT_PARAPHEUR, $statutParapheur, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByDateClotureParapheur($dateClotureParapheur = null, $comparison = null)
    {
        if (is_array($dateClotureParapheur)) {
            $useMinMax = false;
            if (isset($dateClotureParapheur['min'])) {
                $this->addUsingAlias(ExecContratPeer::DATE_CLOTURE_PARAPHEUR, $dateClotureParapheur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateClotureParapheur['max'])) {
                $this->addUsingAlias(ExecContratPeer::DATE_CLOTURE_PARAPHEUR, $dateClotureParapheur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::DATE_CLOTURE_PARAPHEUR, $dateClotureParapheur, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ExecContratPeer::GARANTIE, $garantie, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByDureeGarantie($dureeGarantie = null, $comparison = null)
    {
        if (is_array($dureeGarantie)) {
            $useMinMax = false;
            if (isset($dureeGarantie['min'])) {
                $this->addUsingAlias(ExecContratPeer::DUREE_GARANTIE, $dureeGarantie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dureeGarantie['max'])) {
                $this->addUsingAlias(ExecContratPeer::DUREE_GARANTIE, $dureeGarantie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::DUREE_GARANTIE, $dureeGarantie, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByUniteGarantie($uniteGarantie = null, $comparison = null)
    {
        if (is_array($uniteGarantie)) {
            $useMinMax = false;
            if (isset($uniteGarantie['min'])) {
                $this->addUsingAlias(ExecContratPeer::UNITE_GARANTIE, $uniteGarantie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($uniteGarantie['max'])) {
                $this->addUsingAlias(ExecContratPeer::UNITE_GARANTIE, $uniteGarantie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::UNITE_GARANTIE, $uniteGarantie, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ExecContratPeer::TYPE_PENALITE, $typePenalite, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByPourcentagePenalite($pourcentagePenalite = null, $comparison = null)
    {
        if (is_array($pourcentagePenalite)) {
            $useMinMax = false;
            if (isset($pourcentagePenalite['min'])) {
                $this->addUsingAlias(ExecContratPeer::POURCENTAGE_PENALITE, $pourcentagePenalite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pourcentagePenalite['max'])) {
                $this->addUsingAlias(ExecContratPeer::POURCENTAGE_PENALITE, $pourcentagePenalite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::POURCENTAGE_PENALITE, $pourcentagePenalite, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByMontantPenalite($montantPenalite = null, $comparison = null)
    {
        if (is_array($montantPenalite)) {
            $useMinMax = false;
            if (isset($montantPenalite['min'])) {
                $this->addUsingAlias(ExecContratPeer::MONTANT_PENALITE, $montantPenalite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantPenalite['max'])) {
                $this->addUsingAlias(ExecContratPeer::MONTANT_PENALITE, $montantPenalite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::MONTANT_PENALITE, $montantPenalite, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByPlafondPenalite($plafondPenalite = null, $comparison = null)
    {
        if (is_array($plafondPenalite)) {
            $useMinMax = false;
            if (isset($plafondPenalite['min'])) {
                $this->addUsingAlias(ExecContratPeer::PLAFOND_PENALITE, $plafondPenalite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($plafondPenalite['max'])) {
                $this->addUsingAlias(ExecContratPeer::PLAFOND_PENALITE, $plafondPenalite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::PLAFOND_PENALITE, $plafondPenalite, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByModePassation($modePassation = null, $comparison = null)
    {
        if (is_array($modePassation)) {
            $useMinMax = false;
            if (isset($modePassation['min'])) {
                $this->addUsingAlias(ExecContratPeer::MODE_PASSATION, $modePassation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modePassation['max'])) {
                $this->addUsingAlias(ExecContratPeer::MODE_PASSATION, $modePassation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::MODE_PASSATION, $modePassation, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ExecContratPeer::LIE_MARCHE, $lieMarche, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByNumChapeau($numChapeau = null, $comparison = null)
    {
        if (is_array($numChapeau)) {
            $useMinMax = false;
            if (isset($numChapeau['min'])) {
                $this->addUsingAlias(ExecContratPeer::NUM_CHAPEAU, $numChapeau['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numChapeau['max'])) {
                $this->addUsingAlias(ExecContratPeer::NUM_CHAPEAU, $numChapeau['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::NUM_CHAPEAU, $numChapeau, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ExecContratPeer::OS_PHASE, $osPhase, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ExecContratPeer::PRESTATION_DEMANDE, $prestationDemande, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ExecContratPeer::FORFAIT_JH, $forfaitJh, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByQuantiteJh($quantiteJh = null, $comparison = null)
    {
        if (is_array($quantiteJh)) {
            $useMinMax = false;
            if (isset($quantiteJh['min'])) {
                $this->addUsingAlias(ExecContratPeer::QUANTITE_JH, $quantiteJh['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($quantiteJh['max'])) {
                $this->addUsingAlias(ExecContratPeer::QUANTITE_JH, $quantiteJh['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::QUANTITE_JH, $quantiteJh, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByNatureMarche($natureMarche = null, $comparison = null)
    {
        if (is_array($natureMarche)) {
            $useMinMax = false;
            if (isset($natureMarche['min'])) {
                $this->addUsingAlias(ExecContratPeer::NATURE_MARCHE, $natureMarche['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($natureMarche['max'])) {
                $this->addUsingAlias(ExecContratPeer::NATURE_MARCHE, $natureMarche['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::NATURE_MARCHE, $natureMarche, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByDateDebut($dateDebut = null, $comparison = null)
    {
        if (is_array($dateDebut)) {
            $useMinMax = false;
            if (isset($dateDebut['min'])) {
                $this->addUsingAlias(ExecContratPeer::DATE_DEBUT, $dateDebut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateDebut['max'])) {
                $this->addUsingAlias(ExecContratPeer::DATE_DEBUT, $dateDebut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::DATE_DEBUT, $dateDebut, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ExecContratPeer::PLURIANUELLE, $plurianuelle, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ExecContratPeer::TRANCHECONDITIONNELLE, $trancheconditionnelle, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByIdAgentCr($idAgentCr = null, $comparison = null)
    {
        if (is_array($idAgentCr)) {
            $useMinMax = false;
            if (isset($idAgentCr['min'])) {
                $this->addUsingAlias(ExecContratPeer::ID_AGENT_CR, $idAgentCr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentCr['max'])) {
                $this->addUsingAlias(ExecContratPeer::ID_AGENT_CR, $idAgentCr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::ID_AGENT_CR, $idAgentCr, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ExecContratPeer::DEVISE, $devise, $comparison);
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
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function filterByIdContratSource($idContratSource = null, $comparison = null)
    {
        if (is_array($idContratSource)) {
            $useMinMax = false;
            if (isset($idContratSource['min'])) {
                $this->addUsingAlias(ExecContratPeer::ID_CONTRAT_SOURCE, $idContratSource['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idContratSource['max'])) {
                $this->addUsingAlias(ExecContratPeer::ID_CONTRAT_SOURCE, $idContratSource['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecContratPeer::ID_CONTRAT_SOURCE, $idContratSource, $comparison);
    }

    /**
     * Filter the query by a related ExecTypeContrat object
     *
     * @param   ExecTypeContrat|PropelObjectCollection $ExecTypeContrat The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExecContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExecTypeContrat($ExecTypeContrat, $comparison = null)
    {
        if ($ExecTypeContrat instanceof ExecTypeContrat) {
            return $this
                ->addUsingAlias(ExecContratPeer::ID_TYPE_CONTRAT, $ExecTypeContrat->getId(), $comparison);
        } elseif ($ExecTypeContrat instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ExecContratPeer::ID_TYPE_CONTRAT, $ExecTypeContrat->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByExecTypeContrat() only accepts arguments of type ExecTypeContrat or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ExecTypeContrat relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function joinExecTypeContrat($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ExecTypeContrat');

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
            $this->addJoinObject($join, 'ExecTypeContrat');
        }

        return $this;
    }

    /**
     * Use the ExecTypeContrat relation ExecTypeContrat object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ExecTypeContratQuery A secondary query class using the current class as primary query
     */
    public function useExecTypeContratQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinExecTypeContrat($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ExecTypeContrat', 'ExecTypeContratQuery');
    }

    /**
     * Filter the query by a related ExecTypeStructure object
     *
     * @param   ExecTypeStructure|PropelObjectCollection $ExecTypeStructure The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExecContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExecTypeStructure($ExecTypeStructure, $comparison = null)
    {
        if ($ExecTypeStructure instanceof ExecTypeStructure) {
            return $this
                ->addUsingAlias(ExecContratPeer::ID_TYPE_STRUCTURE, $ExecTypeStructure->getId(), $comparison);
        } elseif ($ExecTypeStructure instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ExecContratPeer::ID_TYPE_STRUCTURE, $ExecTypeStructure->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByExecTypeStructure() only accepts arguments of type ExecTypeStructure or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ExecTypeStructure relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function joinExecTypeStructure($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ExecTypeStructure');

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
            $this->addJoinObject($join, 'ExecTypeStructure');
        }

        return $this;
    }

    /**
     * Use the ExecTypeStructure relation ExecTypeStructure object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ExecTypeStructureQuery A secondary query class using the current class as primary query
     */
    public function useExecTypeStructureQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinExecTypeStructure($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ExecTypeStructure', 'ExecTypeStructureQuery');
    }

    /**
     * Filter the query by a related ExecAgentContrat object
     *
     * @param   ExecAgentContrat|PropelObjectCollection $ExecAgentContrat  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExecContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExecAgentContrat($ExecAgentContrat, $comparison = null)
    {
        if ($ExecAgentContrat instanceof ExecAgentContrat) {
            return $this
                ->addUsingAlias(ExecContratPeer::ID_CONTRAT, $ExecAgentContrat->getIdContrat(), $comparison);
        } elseif ($ExecAgentContrat instanceof PropelObjectCollection) {
            return $this
                ->useExecAgentContratQuery()
                ->filterByPrimaryKeys($ExecAgentContrat->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByExecAgentContrat() only accepts arguments of type ExecAgentContrat or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ExecAgentContrat relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function joinExecAgentContrat($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ExecAgentContrat');

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
            $this->addJoinObject($join, 'ExecAgentContrat');
        }

        return $this;
    }

    /**
     * Use the ExecAgentContrat relation ExecAgentContrat object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ExecAgentContratQuery A secondary query class using the current class as primary query
     */
    public function useExecAgentContratQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinExecAgentContrat($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ExecAgentContrat', 'ExecAgentContratQuery');
    }

    /**
     * Filter the query by a related ExecAvenant object
     *
     * @param   ExecAvenant|PropelObjectCollection $ExecAvenant  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExecContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExecAvenant($ExecAvenant, $comparison = null)
    {
        if ($ExecAvenant instanceof ExecAvenant) {
            return $this
                ->addUsingAlias(ExecContratPeer::ID_CONTRAT, $ExecAvenant->getIdContrat(), $comparison);
        } elseif ($ExecAvenant instanceof PropelObjectCollection) {
            return $this
                ->useExecAvenantQuery()
                ->filterByPrimaryKeys($ExecAvenant->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByExecAvenant() only accepts arguments of type ExecAvenant or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ExecAvenant relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function joinExecAvenant($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ExecAvenant');

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
            $this->addJoinObject($join, 'ExecAvenant');
        }

        return $this;
    }

    /**
     * Use the ExecAvenant relation ExecAvenant object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ExecAvenantQuery A secondary query class using the current class as primary query
     */
    public function useExecAvenantQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinExecAvenant($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ExecAvenant', 'ExecAvenantQuery');
    }

    /**
     * Filter the query by a related ExecContact object
     *
     * @param   ExecContact|PropelObjectCollection $ExecContact  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExecContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExecContact($ExecContact, $comparison = null)
    {
        if ($ExecContact instanceof ExecContact) {
            return $this
                ->addUsingAlias(ExecContratPeer::ID_CONTRAT, $ExecContact->getIdContrat(), $comparison);
        } elseif ($ExecContact instanceof PropelObjectCollection) {
            return $this
                ->useExecContactQuery()
                ->filterByPrimaryKeys($ExecContact->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByExecContact() only accepts arguments of type ExecContact or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ExecContact relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function joinExecContact($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ExecContact');

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
            $this->addJoinObject($join, 'ExecContact');
        }

        return $this;
    }

    /**
     * Use the ExecContact relation ExecContact object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ExecContactQuery A secondary query class using the current class as primary query
     */
    public function useExecContactQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinExecContact($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ExecContact', 'ExecContactQuery');
    }

    /**
     * Filter the query by a related ExecContractant object
     *
     * @param   ExecContractant|PropelObjectCollection $ExecContractant  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExecContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExecContractant($ExecContractant, $comparison = null)
    {
        if ($ExecContractant instanceof ExecContractant) {
            return $this
                ->addUsingAlias(ExecContratPeer::ID_CONTRAT, $ExecContractant->getIdContrat(), $comparison);
        } elseif ($ExecContractant instanceof PropelObjectCollection) {
            return $this
                ->useExecContractantQuery()
                ->filterByPrimaryKeys($ExecContractant->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByExecContractant() only accepts arguments of type ExecContractant or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ExecContractant relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function joinExecContractant($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ExecContractant');

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
            $this->addJoinObject($join, 'ExecContractant');
        }

        return $this;
    }

    /**
     * Use the ExecContractant relation ExecContractant object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ExecContractantQuery A secondary query class using the current class as primary query
     */
    public function useExecContractantQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinExecContractant($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ExecContractant', 'ExecContractantQuery');
    }

    /**
     * Filter the query by a related ExecDossierPaiement object
     *
     * @param   ExecDossierPaiement|PropelObjectCollection $ExecDossierPaiement  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExecContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExecDossierPaiement($ExecDossierPaiement, $comparison = null)
    {
        if ($ExecDossierPaiement instanceof ExecDossierPaiement) {
            return $this
                ->addUsingAlias(ExecContratPeer::ID_CONTRAT, $ExecDossierPaiement->getIdContrat(), $comparison);
        } elseif ($ExecDossierPaiement instanceof PropelObjectCollection) {
            return $this
                ->useExecDossierPaiementQuery()
                ->filterByPrimaryKeys($ExecDossierPaiement->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByExecDossierPaiement() only accepts arguments of type ExecDossierPaiement or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ExecDossierPaiement relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function joinExecDossierPaiement($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ExecDossierPaiement');

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
            $this->addJoinObject($join, 'ExecDossierPaiement');
        }

        return $this;
    }

    /**
     * Use the ExecDossierPaiement relation ExecDossierPaiement object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ExecDossierPaiementQuery A secondary query class using the current class as primary query
     */
    public function useExecDossierPaiementQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinExecDossierPaiement($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ExecDossierPaiement', 'ExecDossierPaiementQuery');
    }

    /**
     * Filter the query by a related ExecEvenement object
     *
     * @param   ExecEvenement|PropelObjectCollection $ExecEvenement  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExecContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExecEvenement($ExecEvenement, $comparison = null)
    {
        if ($ExecEvenement instanceof ExecEvenement) {
            return $this
                ->addUsingAlias(ExecContratPeer::ID_CONTRAT, $ExecEvenement->getIdContrat(), $comparison);
        } elseif ($ExecEvenement instanceof PropelObjectCollection) {
            return $this
                ->useExecEvenementQuery()
                ->filterByPrimaryKeys($ExecEvenement->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByExecEvenement() only accepts arguments of type ExecEvenement or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ExecEvenement relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function joinExecEvenement($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ExecEvenement');

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
            $this->addJoinObject($join, 'ExecEvenement');
        }

        return $this;
    }

    /**
     * Use the ExecEvenement relation ExecEvenement object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ExecEvenementQuery A secondary query class using the current class as primary query
     */
    public function useExecEvenementQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinExecEvenement($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ExecEvenement', 'ExecEvenementQuery');
    }

    /**
     * Filter the query by a related ExecFacture object
     *
     * @param   ExecFacture|PropelObjectCollection $ExecFacture  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExecContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExecFacture($ExecFacture, $comparison = null)
    {
        if ($ExecFacture instanceof ExecFacture) {
            return $this
                ->addUsingAlias(ExecContratPeer::ID_CONTRAT, $ExecFacture->getIdContrat(), $comparison);
        } elseif ($ExecFacture instanceof PropelObjectCollection) {
            return $this
                ->useExecFactureQuery()
                ->filterByPrimaryKeys($ExecFacture->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByExecFacture() only accepts arguments of type ExecFacture or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ExecFacture relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function joinExecFacture($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ExecFacture');

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
            $this->addJoinObject($join, 'ExecFacture');
        }

        return $this;
    }

    /**
     * Use the ExecFacture relation ExecFacture object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ExecFactureQuery A secondary query class using the current class as primary query
     */
    public function useExecFactureQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinExecFacture($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ExecFacture', 'ExecFactureQuery');
    }

    /**
     * Filter the query by a related ExecHistoriquePrix object
     *
     * @param   ExecHistoriquePrix|PropelObjectCollection $ExecHistoriquePrix  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExecContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExecHistoriquePrix($ExecHistoriquePrix, $comparison = null)
    {
        if ($ExecHistoriquePrix instanceof ExecHistoriquePrix) {
            return $this
                ->addUsingAlias(ExecContratPeer::ID_CONTRAT, $ExecHistoriquePrix->getIdContrat(), $comparison);
        } elseif ($ExecHistoriquePrix instanceof PropelObjectCollection) {
            return $this
                ->useExecHistoriquePrixQuery()
                ->filterByPrimaryKeys($ExecHistoriquePrix->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByExecHistoriquePrix() only accepts arguments of type ExecHistoriquePrix or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ExecHistoriquePrix relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function joinExecHistoriquePrix($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ExecHistoriquePrix');

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
            $this->addJoinObject($join, 'ExecHistoriquePrix');
        }

        return $this;
    }

    /**
     * Use the ExecHistoriquePrix relation ExecHistoriquePrix object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ExecHistoriquePrixQuery A secondary query class using the current class as primary query
     */
    public function useExecHistoriquePrixQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinExecHistoriquePrix($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ExecHistoriquePrix', 'ExecHistoriquePrixQuery');
    }

    /**
     * Filter the query by a related ExecInscritContrat object
     *
     * @param   ExecInscritContrat|PropelObjectCollection $ExecInscritContrat  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExecContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExecInscritContrat($ExecInscritContrat, $comparison = null)
    {
        if ($ExecInscritContrat instanceof ExecInscritContrat) {
            return $this
                ->addUsingAlias(ExecContratPeer::ID_CONTRAT, $ExecInscritContrat->getIdContrat(), $comparison);
        } elseif ($ExecInscritContrat instanceof PropelObjectCollection) {
            return $this
                ->useExecInscritContratQuery()
                ->filterByPrimaryKeys($ExecInscritContrat->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByExecInscritContrat() only accepts arguments of type ExecInscritContrat or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ExecInscritContrat relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function joinExecInscritContrat($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ExecInscritContrat');

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
            $this->addJoinObject($join, 'ExecInscritContrat');
        }

        return $this;
    }

    /**
     * Use the ExecInscritContrat relation ExecInscritContrat object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ExecInscritContratQuery A secondary query class using the current class as primary query
     */
    public function useExecInscritContratQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinExecInscritContrat($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ExecInscritContrat', 'ExecInscritContratQuery');
    }

    /**
     * Filter the query by a related ExecLivrableContrat object
     *
     * @param   ExecLivrableContrat|PropelObjectCollection $ExecLivrableContrat  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExecContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExecLivrableContrat($ExecLivrableContrat, $comparison = null)
    {
        if ($ExecLivrableContrat instanceof ExecLivrableContrat) {
            return $this
                ->addUsingAlias(ExecContratPeer::ID_CONTRAT, $ExecLivrableContrat->getIdContrat(), $comparison);
        } elseif ($ExecLivrableContrat instanceof PropelObjectCollection) {
            return $this
                ->useExecLivrableContratQuery()
                ->filterByPrimaryKeys($ExecLivrableContrat->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByExecLivrableContrat() only accepts arguments of type ExecLivrableContrat or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ExecLivrableContrat relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function joinExecLivrableContrat($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ExecLivrableContrat');

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
            $this->addJoinObject($join, 'ExecLivrableContrat');
        }

        return $this;
    }

    /**
     * Use the ExecLivrableContrat relation ExecLivrableContrat object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ExecLivrableContratQuery A secondary query class using the current class as primary query
     */
    public function useExecLivrableContratQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinExecLivrableContrat($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ExecLivrableContrat', 'ExecLivrableContratQuery');
    }

    /**
     * Filter the query by a related ExecPhase object
     *
     * @param   ExecPhase|PropelObjectCollection $ExecPhase  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExecContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExecPhase($ExecPhase, $comparison = null)
    {
        if ($ExecPhase instanceof ExecPhase) {
            return $this
                ->addUsingAlias(ExecContratPeer::ID_CONTRAT, $ExecPhase->getIdContrat(), $comparison);
        } elseif ($ExecPhase instanceof PropelObjectCollection) {
            return $this
                ->useExecPhaseQuery()
                ->filterByPrimaryKeys($ExecPhase->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByExecPhase() only accepts arguments of type ExecPhase or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ExecPhase relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function joinExecPhase($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ExecPhase');

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
            $this->addJoinObject($join, 'ExecPhase');
        }

        return $this;
    }

    /**
     * Use the ExecPhase relation ExecPhase object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ExecPhaseQuery A secondary query class using the current class as primary query
     */
    public function useExecPhaseQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinExecPhase($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ExecPhase', 'ExecPhaseQuery');
    }

    /**
     * Filter the query by a related ExecPiece object
     *
     * @param   ExecPiece|PropelObjectCollection $ExecPiece  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExecContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExecPiece($ExecPiece, $comparison = null)
    {
        if ($ExecPiece instanceof ExecPiece) {
            return $this
                ->addUsingAlias(ExecContratPeer::ID_CONTRAT, $ExecPiece->getIdContrat(), $comparison);
        } elseif ($ExecPiece instanceof PropelObjectCollection) {
            return $this
                ->useExecPieceQuery()
                ->filterByPrimaryKeys($ExecPiece->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByExecPiece() only accepts arguments of type ExecPiece or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ExecPiece relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function joinExecPiece($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ExecPiece');

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
            $this->addJoinObject($join, 'ExecPiece');
        }

        return $this;
    }

    /**
     * Use the ExecPiece relation ExecPiece object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ExecPieceQuery A secondary query class using the current class as primary query
     */
    public function useExecPieceQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinExecPiece($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ExecPiece', 'ExecPieceQuery');
    }

    /**
     * Filter the query by a related ExecPieceAvenant object
     *
     * @param   ExecPieceAvenant|PropelObjectCollection $ExecPieceAvenant  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExecContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExecPieceAvenant($ExecPieceAvenant, $comparison = null)
    {
        if ($ExecPieceAvenant instanceof ExecPieceAvenant) {
            return $this
                ->addUsingAlias(ExecContratPeer::ID_CONTRAT, $ExecPieceAvenant->getIdContrat(), $comparison);
        } elseif ($ExecPieceAvenant instanceof PropelObjectCollection) {
            return $this
                ->useExecPieceAvenantQuery()
                ->filterByPrimaryKeys($ExecPieceAvenant->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByExecPieceAvenant() only accepts arguments of type ExecPieceAvenant or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ExecPieceAvenant relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function joinExecPieceAvenant($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ExecPieceAvenant');

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
            $this->addJoinObject($join, 'ExecPieceAvenant');
        }

        return $this;
    }

    /**
     * Use the ExecPieceAvenant relation ExecPieceAvenant object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ExecPieceAvenantQuery A secondary query class using the current class as primary query
     */
    public function useExecPieceAvenantQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinExecPieceAvenant($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ExecPieceAvenant', 'ExecPieceAvenantQuery');
    }

    /**
     * Filter the query by a related ExecPieceContrat object
     *
     * @param   ExecPieceContrat|PropelObjectCollection $ExecPieceContrat  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExecContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExecPieceContrat($ExecPieceContrat, $comparison = null)
    {
        if ($ExecPieceContrat instanceof ExecPieceContrat) {
            return $this
                ->addUsingAlias(ExecContratPeer::ID_CONTRAT, $ExecPieceContrat->getIdContrat(), $comparison);
        } elseif ($ExecPieceContrat instanceof PropelObjectCollection) {
            return $this
                ->useExecPieceContratQuery()
                ->filterByPrimaryKeys($ExecPieceContrat->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByExecPieceContrat() only accepts arguments of type ExecPieceContrat or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ExecPieceContrat relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function joinExecPieceContrat($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ExecPieceContrat');

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
            $this->addJoinObject($join, 'ExecPieceContrat');
        }

        return $this;
    }

    /**
     * Use the ExecPieceContrat relation ExecPieceContrat object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ExecPieceContratQuery A secondary query class using the current class as primary query
     */
    public function useExecPieceContratQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinExecPieceContrat($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ExecPieceContrat', 'ExecPieceContratQuery');
    }

    /**
     * Filter the query by a related ExecPieceDossierpaiement object
     *
     * @param   ExecPieceDossierpaiement|PropelObjectCollection $ExecPieceDossierpaiement  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExecContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExecPieceDossierpaiement($ExecPieceDossierpaiement, $comparison = null)
    {
        if ($ExecPieceDossierpaiement instanceof ExecPieceDossierpaiement) {
            return $this
                ->addUsingAlias(ExecContratPeer::ID_CONTRAT, $ExecPieceDossierpaiement->getIdContrat(), $comparison);
        } elseif ($ExecPieceDossierpaiement instanceof PropelObjectCollection) {
            return $this
                ->useExecPieceDossierpaiementQuery()
                ->filterByPrimaryKeys($ExecPieceDossierpaiement->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByExecPieceDossierpaiement() only accepts arguments of type ExecPieceDossierpaiement or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ExecPieceDossierpaiement relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function joinExecPieceDossierpaiement($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ExecPieceDossierpaiement');

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
            $this->addJoinObject($join, 'ExecPieceDossierpaiement');
        }

        return $this;
    }

    /**
     * Use the ExecPieceDossierpaiement relation ExecPieceDossierpaiement object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ExecPieceDossierpaiementQuery A secondary query class using the current class as primary query
     */
    public function useExecPieceDossierpaiementQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinExecPieceDossierpaiement($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ExecPieceDossierpaiement', 'ExecPieceDossierpaiementQuery');
    }

    /**
     * Filter the query by a related ExecPieceEvenement object
     *
     * @param   ExecPieceEvenement|PropelObjectCollection $ExecPieceEvenement  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExecContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExecPieceEvenement($ExecPieceEvenement, $comparison = null)
    {
        if ($ExecPieceEvenement instanceof ExecPieceEvenement) {
            return $this
                ->addUsingAlias(ExecContratPeer::ID_CONTRAT, $ExecPieceEvenement->getIdContrat(), $comparison);
        } elseif ($ExecPieceEvenement instanceof PropelObjectCollection) {
            return $this
                ->useExecPieceEvenementQuery()
                ->filterByPrimaryKeys($ExecPieceEvenement->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByExecPieceEvenement() only accepts arguments of type ExecPieceEvenement or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ExecPieceEvenement relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function joinExecPieceEvenement($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ExecPieceEvenement');

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
            $this->addJoinObject($join, 'ExecPieceEvenement');
        }

        return $this;
    }

    /**
     * Use the ExecPieceEvenement relation ExecPieceEvenement object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ExecPieceEvenementQuery A secondary query class using the current class as primary query
     */
    public function useExecPieceEvenementQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinExecPieceEvenement($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ExecPieceEvenement', 'ExecPieceEvenementQuery');
    }

    /**
     * Filter the query by a related ExecPieceFacture object
     *
     * @param   ExecPieceFacture|PropelObjectCollection $ExecPieceFacture  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExecContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExecPieceFacture($ExecPieceFacture, $comparison = null)
    {
        if ($ExecPieceFacture instanceof ExecPieceFacture) {
            return $this
                ->addUsingAlias(ExecContratPeer::ID_CONTRAT, $ExecPieceFacture->getIdContrat(), $comparison);
        } elseif ($ExecPieceFacture instanceof PropelObjectCollection) {
            return $this
                ->useExecPieceFactureQuery()
                ->filterByPrimaryKeys($ExecPieceFacture->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByExecPieceFacture() only accepts arguments of type ExecPieceFacture or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ExecPieceFacture relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function joinExecPieceFacture($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ExecPieceFacture');

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
            $this->addJoinObject($join, 'ExecPieceFacture');
        }

        return $this;
    }

    /**
     * Use the ExecPieceFacture relation ExecPieceFacture object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ExecPieceFactureQuery A secondary query class using the current class as primary query
     */
    public function useExecPieceFactureQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinExecPieceFacture($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ExecPieceFacture', 'ExecPieceFactureQuery');
    }

    /**
     * Filter the query by a related ExecPrix object
     *
     * @param   ExecPrix|PropelObjectCollection $ExecPrix  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExecContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExecPrix($ExecPrix, $comparison = null)
    {
        if ($ExecPrix instanceof ExecPrix) {
            return $this
                ->addUsingAlias(ExecContratPeer::ID_CONTRAT, $ExecPrix->getIdContrat(), $comparison);
        } elseif ($ExecPrix instanceof PropelObjectCollection) {
            return $this
                ->useExecPrixQuery()
                ->filterByPrimaryKeys($ExecPrix->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByExecPrix() only accepts arguments of type ExecPrix or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ExecPrix relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function joinExecPrix($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ExecPrix');

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
            $this->addJoinObject($join, 'ExecPrix');
        }

        return $this;
    }

    /**
     * Use the ExecPrix relation ExecPrix object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ExecPrixQuery A secondary query class using the current class as primary query
     */
    public function useExecPrixQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinExecPrix($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ExecPrix', 'ExecPrixQuery');
    }

    /**
     * Filter the query by a related ExecPrixAvenant object
     *
     * @param   ExecPrixAvenant|PropelObjectCollection $ExecPrixAvenant  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExecContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExecPrixAvenant($ExecPrixAvenant, $comparison = null)
    {
        if ($ExecPrixAvenant instanceof ExecPrixAvenant) {
            return $this
                ->addUsingAlias(ExecContratPeer::ID_CONTRAT, $ExecPrixAvenant->getIdContrat(), $comparison);
        } elseif ($ExecPrixAvenant instanceof PropelObjectCollection) {
            return $this
                ->useExecPrixAvenantQuery()
                ->filterByPrimaryKeys($ExecPrixAvenant->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByExecPrixAvenant() only accepts arguments of type ExecPrixAvenant or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ExecPrixAvenant relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function joinExecPrixAvenant($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ExecPrixAvenant');

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
            $this->addJoinObject($join, 'ExecPrixAvenant');
        }

        return $this;
    }

    /**
     * Use the ExecPrixAvenant relation ExecPrixAvenant object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ExecPrixAvenantQuery A secondary query class using the current class as primary query
     */
    public function useExecPrixAvenantQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinExecPrixAvenant($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ExecPrixAvenant', 'ExecPrixAvenantQuery');
    }

    /**
     * Filter the query by a related ExecRepartition object
     *
     * @param   ExecRepartition|PropelObjectCollection $ExecRepartition  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExecContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExecRepartition($ExecRepartition, $comparison = null)
    {
        if ($ExecRepartition instanceof ExecRepartition) {
            return $this
                ->addUsingAlias(ExecContratPeer::ID_CONTRAT, $ExecRepartition->getIdContrat(), $comparison);
        } elseif ($ExecRepartition instanceof PropelObjectCollection) {
            return $this
                ->useExecRepartitionQuery()
                ->filterByPrimaryKeys($ExecRepartition->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByExecRepartition() only accepts arguments of type ExecRepartition or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ExecRepartition relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function joinExecRepartition($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ExecRepartition');

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
            $this->addJoinObject($join, 'ExecRepartition');
        }

        return $this;
    }

    /**
     * Use the ExecRepartition relation ExecRepartition object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ExecRepartitionQuery A secondary query class using the current class as primary query
     */
    public function useExecRepartitionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinExecRepartition($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ExecRepartition', 'ExecRepartitionQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ExecContrat $ExecContrat Object to remove from the list of results
     *
     * @return ExecContratQuery The current query, for fluid interface
     */
    public function prune($ExecContrat = null)
    {
        if ($ExecContrat) {
            $this->addUsingAlias(ExecContratPeer::ID_CONTRAT, $ExecContrat->getIdContrat(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
