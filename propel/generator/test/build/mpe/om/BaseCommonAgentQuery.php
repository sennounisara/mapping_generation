<?php


/**
 * Base class that represents a query for the 'Agent' table.
 *
 * 
 *
 * @method CommonAgentQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonAgentQuery orderByLogin($order = Criteria::ASC) Order by the login column
 * @method CommonAgentQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method CommonAgentQuery orderByMdp($order = Criteria::ASC) Order by the mdp column
 * @method CommonAgentQuery orderByCertificat($order = Criteria::ASC) Order by the certificat column
 * @method CommonAgentQuery orderByNom($order = Criteria::ASC) Order by the nom column
 * @method CommonAgentQuery orderByPrenom($order = Criteria::ASC) Order by the prenom column
 * @method CommonAgentQuery orderByTentativesMdp($order = Criteria::ASC) Order by the tentatives_mdp column
 * @method CommonAgentQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonAgentQuery orderByServiceId($order = Criteria::ASC) Order by the service_id column
 * @method CommonAgentQuery orderByRecevoirMail($order = Criteria::ASC) Order by the RECEVOIR_MAIL column
 * @method CommonAgentQuery orderByElu($order = Criteria::ASC) Order by the elu column
 * @method CommonAgentQuery orderByNomFonction($order = Criteria::ASC) Order by the nom_fonction column
 * @method CommonAgentQuery orderByNumTel($order = Criteria::ASC) Order by the num_tel column
 * @method CommonAgentQuery orderByNumFax($order = Criteria::ASC) Order by the num_fax column
 * @method CommonAgentQuery orderByTypeComm($order = Criteria::ASC) Order by the type_comm column
 * @method CommonAgentQuery orderByAdrPostale($order = Criteria::ASC) Order by the adr_postale column
 * @method CommonAgentQuery orderByCivilite($order = Criteria::ASC) Order by the civilite column
 * @method CommonAgentQuery orderByAlerteReponseElectronique($order = Criteria::ASC) Order by the alerte_reponse_electronique column
 * @method CommonAgentQuery orderByAlerteReceptionMainlevee($order = Criteria::ASC) Order by the alerte_reception_mainlevee column
 * @method CommonAgentQuery orderByAlerteClotureConsultation($order = Criteria::ASC) Order by the alerte_cloture_consultation column
 * @method CommonAgentQuery orderByAlerteReceptionMessage($order = Criteria::ASC) Order by the alerte_reception_message column
 * @method CommonAgentQuery orderByAlertePublicationBoamp($order = Criteria::ASC) Order by the alerte_publication_boamp column
 * @method CommonAgentQuery orderByAlerteEchecPublicationBoamp($order = Criteria::ASC) Order by the alerte_echec_publication_boamp column
 * @method CommonAgentQuery orderByAlerteCreationModificationAgent($order = Criteria::ASC) Order by the alerte_creation_modification_agent column
 * @method CommonAgentQuery orderByDateCreation($order = Criteria::ASC) Order by the date_creation column
 * @method CommonAgentQuery orderByDateModification($order = Criteria::ASC) Order by the date_modification column
 * @method CommonAgentQuery orderByIdInitial($order = Criteria::ASC) Order by the id_initial column
 * @method CommonAgentQuery orderByIdProfilSocleExterne($order = Criteria::ASC) Order by the id_profil_socle_externe column
 * @method CommonAgentQuery orderByLieuExecution($order = Criteria::ASC) Order by the lieu_execution column
 * @method CommonAgentQuery orderByAlerteQuestionEntreprise($order = Criteria::ASC) Order by the alerte_question_entreprise column
 * @method CommonAgentQuery orderByActif($order = Criteria::ASC) Order by the actif column
 * @method CommonAgentQuery orderByCodesNuts($order = Criteria::ASC) Order by the codes_nuts column
 * @method CommonAgentQuery orderByNumCertificat($order = Criteria::ASC) Order by the num_certificat column
 * @method CommonAgentQuery orderByAlerteValidationConsultation($order = Criteria::ASC) Order by the alerte_validation_consultation column
 * @method CommonAgentQuery orderByAlerteChorus($order = Criteria::ASC) Order by the alerte_chorus column
 * @method CommonAgentQuery orderByPassword($order = Criteria::ASC) Order by the password column
 * @method CommonAgentQuery orderByCodeTheme($order = Criteria::ASC) Order by the code_theme column
 *
 * @method CommonAgentQuery groupById() Group by the id column
 * @method CommonAgentQuery groupByLogin() Group by the login column
 * @method CommonAgentQuery groupByEmail() Group by the email column
 * @method CommonAgentQuery groupByMdp() Group by the mdp column
 * @method CommonAgentQuery groupByCertificat() Group by the certificat column
 * @method CommonAgentQuery groupByNom() Group by the nom column
 * @method CommonAgentQuery groupByPrenom() Group by the prenom column
 * @method CommonAgentQuery groupByTentativesMdp() Group by the tentatives_mdp column
 * @method CommonAgentQuery groupByOrganisme() Group by the organisme column
 * @method CommonAgentQuery groupByServiceId() Group by the service_id column
 * @method CommonAgentQuery groupByRecevoirMail() Group by the RECEVOIR_MAIL column
 * @method CommonAgentQuery groupByElu() Group by the elu column
 * @method CommonAgentQuery groupByNomFonction() Group by the nom_fonction column
 * @method CommonAgentQuery groupByNumTel() Group by the num_tel column
 * @method CommonAgentQuery groupByNumFax() Group by the num_fax column
 * @method CommonAgentQuery groupByTypeComm() Group by the type_comm column
 * @method CommonAgentQuery groupByAdrPostale() Group by the adr_postale column
 * @method CommonAgentQuery groupByCivilite() Group by the civilite column
 * @method CommonAgentQuery groupByAlerteReponseElectronique() Group by the alerte_reponse_electronique column
 * @method CommonAgentQuery groupByAlerteReceptionMainlevee() Group by the alerte_reception_mainlevee column
 * @method CommonAgentQuery groupByAlerteClotureConsultation() Group by the alerte_cloture_consultation column
 * @method CommonAgentQuery groupByAlerteReceptionMessage() Group by the alerte_reception_message column
 * @method CommonAgentQuery groupByAlertePublicationBoamp() Group by the alerte_publication_boamp column
 * @method CommonAgentQuery groupByAlerteEchecPublicationBoamp() Group by the alerte_echec_publication_boamp column
 * @method CommonAgentQuery groupByAlerteCreationModificationAgent() Group by the alerte_creation_modification_agent column
 * @method CommonAgentQuery groupByDateCreation() Group by the date_creation column
 * @method CommonAgentQuery groupByDateModification() Group by the date_modification column
 * @method CommonAgentQuery groupByIdInitial() Group by the id_initial column
 * @method CommonAgentQuery groupByIdProfilSocleExterne() Group by the id_profil_socle_externe column
 * @method CommonAgentQuery groupByLieuExecution() Group by the lieu_execution column
 * @method CommonAgentQuery groupByAlerteQuestionEntreprise() Group by the alerte_question_entreprise column
 * @method CommonAgentQuery groupByActif() Group by the actif column
 * @method CommonAgentQuery groupByCodesNuts() Group by the codes_nuts column
 * @method CommonAgentQuery groupByNumCertificat() Group by the num_certificat column
 * @method CommonAgentQuery groupByAlerteValidationConsultation() Group by the alerte_validation_consultation column
 * @method CommonAgentQuery groupByAlerteChorus() Group by the alerte_chorus column
 * @method CommonAgentQuery groupByPassword() Group by the password column
 * @method CommonAgentQuery groupByCodeTheme() Group by the code_theme column
 *
 * @method CommonAgentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonAgentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonAgentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonAgentQuery leftJoinCommonOrganisme($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonOrganisme relation
 * @method CommonAgentQuery rightJoinCommonOrganisme($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonOrganisme relation
 * @method CommonAgentQuery innerJoinCommonOrganisme($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonOrganisme relation
 *
 * @method CommonAgentQuery leftJoinCommonDemandeAchatParCatalogue($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonDemandeAchatParCatalogue relation
 * @method CommonAgentQuery rightJoinCommonDemandeAchatParCatalogue($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonDemandeAchatParCatalogue relation
 * @method CommonAgentQuery innerJoinCommonDemandeAchatParCatalogue($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonDemandeAchatParCatalogue relation
 *
 * @method CommonAgentQuery leftJoinCommonExecAgentContrat($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecAgentContrat relation
 * @method CommonAgentQuery rightJoinCommonExecAgentContrat($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecAgentContrat relation
 * @method CommonAgentQuery innerJoinCommonExecAgentContrat($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecAgentContrat relation
 *
 * @method CommonAgentQuery leftJoinCommonExecAvenantRelatedByIdAgentCrea($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecAvenantRelatedByIdAgentCrea relation
 * @method CommonAgentQuery rightJoinCommonExecAvenantRelatedByIdAgentCrea($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecAvenantRelatedByIdAgentCrea relation
 * @method CommonAgentQuery innerJoinCommonExecAvenantRelatedByIdAgentCrea($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecAvenantRelatedByIdAgentCrea relation
 *
 * @method CommonAgentQuery leftJoinCommonExecAvenantRelatedByIdAgentModif($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecAvenantRelatedByIdAgentModif relation
 * @method CommonAgentQuery rightJoinCommonExecAvenantRelatedByIdAgentModif($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecAvenantRelatedByIdAgentModif relation
 * @method CommonAgentQuery innerJoinCommonExecAvenantRelatedByIdAgentModif($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecAvenantRelatedByIdAgentModif relation
 *
 * @method CommonAgentQuery leftJoinCommonExecAvenantRelatedByIdAgentRejet($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecAvenantRelatedByIdAgentRejet relation
 * @method CommonAgentQuery rightJoinCommonExecAvenantRelatedByIdAgentRejet($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecAvenantRelatedByIdAgentRejet relation
 * @method CommonAgentQuery innerJoinCommonExecAvenantRelatedByIdAgentRejet($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecAvenantRelatedByIdAgentRejet relation
 *
 * @method CommonAgentQuery leftJoinCommonExecAvenantRelatedByIdAgentValidation($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecAvenantRelatedByIdAgentValidation relation
 * @method CommonAgentQuery rightJoinCommonExecAvenantRelatedByIdAgentValidation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecAvenantRelatedByIdAgentValidation relation
 * @method CommonAgentQuery innerJoinCommonExecAvenantRelatedByIdAgentValidation($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecAvenantRelatedByIdAgentValidation relation
 *
 * @method CommonAgentQuery leftJoinCommonExecContractantRelatedByIdAgentCrea($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecContractantRelatedByIdAgentCrea relation
 * @method CommonAgentQuery rightJoinCommonExecContractantRelatedByIdAgentCrea($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecContractantRelatedByIdAgentCrea relation
 * @method CommonAgentQuery innerJoinCommonExecContractantRelatedByIdAgentCrea($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecContractantRelatedByIdAgentCrea relation
 *
 * @method CommonAgentQuery leftJoinCommonExecContractantRelatedByIdAgentModif($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecContractantRelatedByIdAgentModif relation
 * @method CommonAgentQuery rightJoinCommonExecContractantRelatedByIdAgentModif($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecContractantRelatedByIdAgentModif relation
 * @method CommonAgentQuery innerJoinCommonExecContractantRelatedByIdAgentModif($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecContractantRelatedByIdAgentModif relation
 *
 * @method CommonAgentQuery leftJoinCommonExecContratRelatedByIdAgentCrea($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecContratRelatedByIdAgentCrea relation
 * @method CommonAgentQuery rightJoinCommonExecContratRelatedByIdAgentCrea($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecContratRelatedByIdAgentCrea relation
 * @method CommonAgentQuery innerJoinCommonExecContratRelatedByIdAgentCrea($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecContratRelatedByIdAgentCrea relation
 *
 * @method CommonAgentQuery leftJoinCommonExecContratRelatedByIdAgentGestion($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecContratRelatedByIdAgentGestion relation
 * @method CommonAgentQuery rightJoinCommonExecContratRelatedByIdAgentGestion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecContratRelatedByIdAgentGestion relation
 * @method CommonAgentQuery innerJoinCommonExecContratRelatedByIdAgentGestion($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecContratRelatedByIdAgentGestion relation
 *
 * @method CommonAgentQuery leftJoinCommonExecContratRelatedByIdAgentModif($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecContratRelatedByIdAgentModif relation
 * @method CommonAgentQuery rightJoinCommonExecContratRelatedByIdAgentModif($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecContratRelatedByIdAgentModif relation
 * @method CommonAgentQuery innerJoinCommonExecContratRelatedByIdAgentModif($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecContratRelatedByIdAgentModif relation
 *
 * @method CommonAgentQuery leftJoinCommonExecDossierPaiement($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecDossierPaiement relation
 * @method CommonAgentQuery rightJoinCommonExecDossierPaiement($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecDossierPaiement relation
 * @method CommonAgentQuery innerJoinCommonExecDossierPaiement($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecDossierPaiement relation
 *
 * @method CommonAgentQuery leftJoinCommonExecEvenementRelatedByIdAgentCrea($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecEvenementRelatedByIdAgentCrea relation
 * @method CommonAgentQuery rightJoinCommonExecEvenementRelatedByIdAgentCrea($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecEvenementRelatedByIdAgentCrea relation
 * @method CommonAgentQuery innerJoinCommonExecEvenementRelatedByIdAgentCrea($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecEvenementRelatedByIdAgentCrea relation
 *
 * @method CommonAgentQuery leftJoinCommonExecEvenementRelatedByIdAgentModif($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecEvenementRelatedByIdAgentModif relation
 * @method CommonAgentQuery rightJoinCommonExecEvenementRelatedByIdAgentModif($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecEvenementRelatedByIdAgentModif relation
 * @method CommonAgentQuery innerJoinCommonExecEvenementRelatedByIdAgentModif($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecEvenementRelatedByIdAgentModif relation
 *
 * @method CommonAgentQuery leftJoinCommonExecEvenementRelatedByIdAgentRejet($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecEvenementRelatedByIdAgentRejet relation
 * @method CommonAgentQuery rightJoinCommonExecEvenementRelatedByIdAgentRejet($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecEvenementRelatedByIdAgentRejet relation
 * @method CommonAgentQuery innerJoinCommonExecEvenementRelatedByIdAgentRejet($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecEvenementRelatedByIdAgentRejet relation
 *
 * @method CommonAgentQuery leftJoinCommonExecEvenementRelatedByIdAgentValidation($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecEvenementRelatedByIdAgentValidation relation
 * @method CommonAgentQuery rightJoinCommonExecEvenementRelatedByIdAgentValidation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecEvenementRelatedByIdAgentValidation relation
 * @method CommonAgentQuery innerJoinCommonExecEvenementRelatedByIdAgentValidation($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecEvenementRelatedByIdAgentValidation relation
 *
 * @method CommonAgentQuery leftJoinCommonExecFactureRelatedByIdAgentCrea($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecFactureRelatedByIdAgentCrea relation
 * @method CommonAgentQuery rightJoinCommonExecFactureRelatedByIdAgentCrea($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecFactureRelatedByIdAgentCrea relation
 * @method CommonAgentQuery innerJoinCommonExecFactureRelatedByIdAgentCrea($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecFactureRelatedByIdAgentCrea relation
 *
 * @method CommonAgentQuery leftJoinCommonExecFactureRelatedByIdAgentModif($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecFactureRelatedByIdAgentModif relation
 * @method CommonAgentQuery rightJoinCommonExecFactureRelatedByIdAgentModif($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecFactureRelatedByIdAgentModif relation
 * @method CommonAgentQuery innerJoinCommonExecFactureRelatedByIdAgentModif($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecFactureRelatedByIdAgentModif relation
 *
 * @method CommonAgentQuery leftJoinCommonExecFactureRelatedByIdAgentRejet($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecFactureRelatedByIdAgentRejet relation
 * @method CommonAgentQuery rightJoinCommonExecFactureRelatedByIdAgentRejet($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecFactureRelatedByIdAgentRejet relation
 * @method CommonAgentQuery innerJoinCommonExecFactureRelatedByIdAgentRejet($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecFactureRelatedByIdAgentRejet relation
 *
 * @method CommonAgentQuery leftJoinCommonExecFactureRelatedByIdAgentValidation($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecFactureRelatedByIdAgentValidation relation
 * @method CommonAgentQuery rightJoinCommonExecFactureRelatedByIdAgentValidation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecFactureRelatedByIdAgentValidation relation
 * @method CommonAgentQuery innerJoinCommonExecFactureRelatedByIdAgentValidation($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecFactureRelatedByIdAgentValidation relation
 *
 * @method CommonAgentQuery leftJoinCommonExecHistoriquePrixRelatedByIdAgentCrea($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecHistoriquePrixRelatedByIdAgentCrea relation
 * @method CommonAgentQuery rightJoinCommonExecHistoriquePrixRelatedByIdAgentCrea($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecHistoriquePrixRelatedByIdAgentCrea relation
 * @method CommonAgentQuery innerJoinCommonExecHistoriquePrixRelatedByIdAgentCrea($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecHistoriquePrixRelatedByIdAgentCrea relation
 *
 * @method CommonAgentQuery leftJoinCommonExecHistoriquePrixRelatedByIdAgentModif($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecHistoriquePrixRelatedByIdAgentModif relation
 * @method CommonAgentQuery rightJoinCommonExecHistoriquePrixRelatedByIdAgentModif($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecHistoriquePrixRelatedByIdAgentModif relation
 * @method CommonAgentQuery innerJoinCommonExecHistoriquePrixRelatedByIdAgentModif($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecHistoriquePrixRelatedByIdAgentModif relation
 *
 * @method CommonAgentQuery leftJoinCommonExecLivrableContrat($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecLivrableContrat relation
 * @method CommonAgentQuery rightJoinCommonExecLivrableContrat($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecLivrableContrat relation
 * @method CommonAgentQuery innerJoinCommonExecLivrableContrat($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecLivrableContrat relation
 *
 * @method CommonAgentQuery leftJoinCommonExecPhaseRelatedByIdAgentCrea($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecPhaseRelatedByIdAgentCrea relation
 * @method CommonAgentQuery rightJoinCommonExecPhaseRelatedByIdAgentCrea($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecPhaseRelatedByIdAgentCrea relation
 * @method CommonAgentQuery innerJoinCommonExecPhaseRelatedByIdAgentCrea($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecPhaseRelatedByIdAgentCrea relation
 *
 * @method CommonAgentQuery leftJoinCommonExecPhaseRelatedByIdAgentModif($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecPhaseRelatedByIdAgentModif relation
 * @method CommonAgentQuery rightJoinCommonExecPhaseRelatedByIdAgentModif($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecPhaseRelatedByIdAgentModif relation
 * @method CommonAgentQuery innerJoinCommonExecPhaseRelatedByIdAgentModif($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecPhaseRelatedByIdAgentModif relation
 *
 * @method CommonAgentQuery leftJoinCommonExecPiece($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecPiece relation
 * @method CommonAgentQuery rightJoinCommonExecPiece($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecPiece relation
 * @method CommonAgentQuery innerJoinCommonExecPiece($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecPiece relation
 *
 * @method CommonAgentQuery leftJoinCommonExecPieceAvenant($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecPieceAvenant relation
 * @method CommonAgentQuery rightJoinCommonExecPieceAvenant($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecPieceAvenant relation
 * @method CommonAgentQuery innerJoinCommonExecPieceAvenant($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecPieceAvenant relation
 *
 * @method CommonAgentQuery leftJoinCommonExecPieceContrat($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecPieceContrat relation
 * @method CommonAgentQuery rightJoinCommonExecPieceContrat($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecPieceContrat relation
 * @method CommonAgentQuery innerJoinCommonExecPieceContrat($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecPieceContrat relation
 *
 * @method CommonAgentQuery leftJoinCommonExecPieceDossierpaiement($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecPieceDossierpaiement relation
 * @method CommonAgentQuery rightJoinCommonExecPieceDossierpaiement($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecPieceDossierpaiement relation
 * @method CommonAgentQuery innerJoinCommonExecPieceDossierpaiement($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecPieceDossierpaiement relation
 *
 * @method CommonAgentQuery leftJoinCommonExecPieceEvenement($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecPieceEvenement relation
 * @method CommonAgentQuery rightJoinCommonExecPieceEvenement($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecPieceEvenement relation
 * @method CommonAgentQuery innerJoinCommonExecPieceEvenement($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecPieceEvenement relation
 *
 * @method CommonAgentQuery leftJoinCommonExecPieceFacture($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecPieceFacture relation
 * @method CommonAgentQuery rightJoinCommonExecPieceFacture($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecPieceFacture relation
 * @method CommonAgentQuery innerJoinCommonExecPieceFacture($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecPieceFacture relation
 *
 * @method CommonAgentQuery leftJoinCommonExecPrixRelatedByIdAgentCrea($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecPrixRelatedByIdAgentCrea relation
 * @method CommonAgentQuery rightJoinCommonExecPrixRelatedByIdAgentCrea($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecPrixRelatedByIdAgentCrea relation
 * @method CommonAgentQuery innerJoinCommonExecPrixRelatedByIdAgentCrea($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecPrixRelatedByIdAgentCrea relation
 *
 * @method CommonAgentQuery leftJoinCommonExecPrixRelatedByIdAgentModif($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecPrixRelatedByIdAgentModif relation
 * @method CommonAgentQuery rightJoinCommonExecPrixRelatedByIdAgentModif($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecPrixRelatedByIdAgentModif relation
 * @method CommonAgentQuery innerJoinCommonExecPrixRelatedByIdAgentModif($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecPrixRelatedByIdAgentModif relation
 *
 * @method CommonAgentQuery leftJoinCommonExecRepartitionRelatedByIdAgentCrea($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecRepartitionRelatedByIdAgentCrea relation
 * @method CommonAgentQuery rightJoinCommonExecRepartitionRelatedByIdAgentCrea($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecRepartitionRelatedByIdAgentCrea relation
 * @method CommonAgentQuery innerJoinCommonExecRepartitionRelatedByIdAgentCrea($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecRepartitionRelatedByIdAgentCrea relation
 *
 * @method CommonAgentQuery leftJoinCommonExecRepartitionRelatedByIdAgentModif($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecRepartitionRelatedByIdAgentModif relation
 * @method CommonAgentQuery rightJoinCommonExecRepartitionRelatedByIdAgentModif($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecRepartitionRelatedByIdAgentModif relation
 * @method CommonAgentQuery innerJoinCommonExecRepartitionRelatedByIdAgentModif($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecRepartitionRelatedByIdAgentModif relation
 *
 * @method CommonAgentQuery leftJoinCommonResultatAnalyseHistorique($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonResultatAnalyseHistorique relation
 * @method CommonAgentQuery rightJoinCommonResultatAnalyseHistorique($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonResultatAnalyseHistorique relation
 * @method CommonAgentQuery innerJoinCommonResultatAnalyseHistorique($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonResultatAnalyseHistorique relation
 *
 * @method CommonAgentQuery leftJoinCommonTCAOCommissionAgent($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTCAOCommissionAgent relation
 * @method CommonAgentQuery rightJoinCommonTCAOCommissionAgent($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTCAOCommissionAgent relation
 * @method CommonAgentQuery innerJoinCommonTCAOCommissionAgent($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTCAOCommissionAgent relation
 *
 * @method CommonAgentQuery leftJoinCommonTCAOSeanceAgent($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTCAOSeanceAgent relation
 * @method CommonAgentQuery rightJoinCommonTCAOSeanceAgent($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTCAOSeanceAgent relation
 * @method CommonAgentQuery innerJoinCommonTCAOSeanceAgent($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTCAOSeanceAgent relation
 *
 * @method CommonAgentQuery leftJoinCommonTCAOSeanceInvite($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTCAOSeanceInvite relation
 * @method CommonAgentQuery rightJoinCommonTCAOSeanceInvite($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTCAOSeanceInvite relation
 * @method CommonAgentQuery innerJoinCommonTCAOSeanceInvite($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTCAOSeanceInvite relation
 *
 * @method CommonAgent findOne(PropelPDO $con = null) Return the first CommonAgent matching the query
 * @method CommonAgent findOneOrCreate(PropelPDO $con = null) Return the first CommonAgent matching the query, or a new CommonAgent object populated from the query conditions when no match is found
 *
 * @method CommonAgent findOneByLogin(string $login) Return the first CommonAgent filtered by the login column
 * @method CommonAgent findOneByEmail(string $email) Return the first CommonAgent filtered by the email column
 * @method CommonAgent findOneByMdp(string $mdp) Return the first CommonAgent filtered by the mdp column
 * @method CommonAgent findOneByCertificat(string $certificat) Return the first CommonAgent filtered by the certificat column
 * @method CommonAgent findOneByNom(string $nom) Return the first CommonAgent filtered by the nom column
 * @method CommonAgent findOneByPrenom(string $prenom) Return the first CommonAgent filtered by the prenom column
 * @method CommonAgent findOneByTentativesMdp(int $tentatives_mdp) Return the first CommonAgent filtered by the tentatives_mdp column
 * @method CommonAgent findOneByOrganisme(string $organisme) Return the first CommonAgent filtered by the organisme column
 * @method CommonAgent findOneByServiceId(int $service_id) Return the first CommonAgent filtered by the service_id column
 * @method CommonAgent findOneByRecevoirMail(string $RECEVOIR_MAIL) Return the first CommonAgent filtered by the RECEVOIR_MAIL column
 * @method CommonAgent findOneByElu(string $elu) Return the first CommonAgent filtered by the elu column
 * @method CommonAgent findOneByNomFonction(string $nom_fonction) Return the first CommonAgent filtered by the nom_fonction column
 * @method CommonAgent findOneByNumTel(string $num_tel) Return the first CommonAgent filtered by the num_tel column
 * @method CommonAgent findOneByNumFax(string $num_fax) Return the first CommonAgent filtered by the num_fax column
 * @method CommonAgent findOneByTypeComm(string $type_comm) Return the first CommonAgent filtered by the type_comm column
 * @method CommonAgent findOneByAdrPostale(string $adr_postale) Return the first CommonAgent filtered by the adr_postale column
 * @method CommonAgent findOneByCivilite(string $civilite) Return the first CommonAgent filtered by the civilite column
 * @method CommonAgent findOneByAlerteReponseElectronique(string $alerte_reponse_electronique) Return the first CommonAgent filtered by the alerte_reponse_electronique column
 * @method CommonAgent findOneByAlerteReceptionMainlevee(string $alerte_reception_mainlevee) Return the first CommonAgent filtered by the alerte_reception_mainlevee column
 * @method CommonAgent findOneByAlerteClotureConsultation(string $alerte_cloture_consultation) Return the first CommonAgent filtered by the alerte_cloture_consultation column
 * @method CommonAgent findOneByAlerteReceptionMessage(string $alerte_reception_message) Return the first CommonAgent filtered by the alerte_reception_message column
 * @method CommonAgent findOneByAlertePublicationBoamp(string $alerte_publication_boamp) Return the first CommonAgent filtered by the alerte_publication_boamp column
 * @method CommonAgent findOneByAlerteEchecPublicationBoamp(string $alerte_echec_publication_boamp) Return the first CommonAgent filtered by the alerte_echec_publication_boamp column
 * @method CommonAgent findOneByAlerteCreationModificationAgent(string $alerte_creation_modification_agent) Return the first CommonAgent filtered by the alerte_creation_modification_agent column
 * @method CommonAgent findOneByDateCreation(string $date_creation) Return the first CommonAgent filtered by the date_creation column
 * @method CommonAgent findOneByDateModification(string $date_modification) Return the first CommonAgent filtered by the date_modification column
 * @method CommonAgent findOneByIdInitial(int $id_initial) Return the first CommonAgent filtered by the id_initial column
 * @method CommonAgent findOneByIdProfilSocleExterne(int $id_profil_socle_externe) Return the first CommonAgent filtered by the id_profil_socle_externe column
 * @method CommonAgent findOneByLieuExecution(string $lieu_execution) Return the first CommonAgent filtered by the lieu_execution column
 * @method CommonAgent findOneByAlerteQuestionEntreprise(string $alerte_question_entreprise) Return the first CommonAgent filtered by the alerte_question_entreprise column
 * @method CommonAgent findOneByActif(string $actif) Return the first CommonAgent filtered by the actif column
 * @method CommonAgent findOneByCodesNuts(string $codes_nuts) Return the first CommonAgent filtered by the codes_nuts column
 * @method CommonAgent findOneByNumCertificat(string $num_certificat) Return the first CommonAgent filtered by the num_certificat column
 * @method CommonAgent findOneByAlerteValidationConsultation(string $alerte_validation_consultation) Return the first CommonAgent filtered by the alerte_validation_consultation column
 * @method CommonAgent findOneByAlerteChorus(string $alerte_chorus) Return the first CommonAgent filtered by the alerte_chorus column
 * @method CommonAgent findOneByPassword(string $password) Return the first CommonAgent filtered by the password column
 * @method CommonAgent findOneByCodeTheme(string $code_theme) Return the first CommonAgent filtered by the code_theme column
 *
 * @method array findById(int $id) Return CommonAgent objects filtered by the id column
 * @method array findByLogin(string $login) Return CommonAgent objects filtered by the login column
 * @method array findByEmail(string $email) Return CommonAgent objects filtered by the email column
 * @method array findByMdp(string $mdp) Return CommonAgent objects filtered by the mdp column
 * @method array findByCertificat(string $certificat) Return CommonAgent objects filtered by the certificat column
 * @method array findByNom(string $nom) Return CommonAgent objects filtered by the nom column
 * @method array findByPrenom(string $prenom) Return CommonAgent objects filtered by the prenom column
 * @method array findByTentativesMdp(int $tentatives_mdp) Return CommonAgent objects filtered by the tentatives_mdp column
 * @method array findByOrganisme(string $organisme) Return CommonAgent objects filtered by the organisme column
 * @method array findByServiceId(int $service_id) Return CommonAgent objects filtered by the service_id column
 * @method array findByRecevoirMail(string $RECEVOIR_MAIL) Return CommonAgent objects filtered by the RECEVOIR_MAIL column
 * @method array findByElu(string $elu) Return CommonAgent objects filtered by the elu column
 * @method array findByNomFonction(string $nom_fonction) Return CommonAgent objects filtered by the nom_fonction column
 * @method array findByNumTel(string $num_tel) Return CommonAgent objects filtered by the num_tel column
 * @method array findByNumFax(string $num_fax) Return CommonAgent objects filtered by the num_fax column
 * @method array findByTypeComm(string $type_comm) Return CommonAgent objects filtered by the type_comm column
 * @method array findByAdrPostale(string $adr_postale) Return CommonAgent objects filtered by the adr_postale column
 * @method array findByCivilite(string $civilite) Return CommonAgent objects filtered by the civilite column
 * @method array findByAlerteReponseElectronique(string $alerte_reponse_electronique) Return CommonAgent objects filtered by the alerte_reponse_electronique column
 * @method array findByAlerteReceptionMainlevee(string $alerte_reception_mainlevee) Return CommonAgent objects filtered by the alerte_reception_mainlevee column
 * @method array findByAlerteClotureConsultation(string $alerte_cloture_consultation) Return CommonAgent objects filtered by the alerte_cloture_consultation column
 * @method array findByAlerteReceptionMessage(string $alerte_reception_message) Return CommonAgent objects filtered by the alerte_reception_message column
 * @method array findByAlertePublicationBoamp(string $alerte_publication_boamp) Return CommonAgent objects filtered by the alerte_publication_boamp column
 * @method array findByAlerteEchecPublicationBoamp(string $alerte_echec_publication_boamp) Return CommonAgent objects filtered by the alerte_echec_publication_boamp column
 * @method array findByAlerteCreationModificationAgent(string $alerte_creation_modification_agent) Return CommonAgent objects filtered by the alerte_creation_modification_agent column
 * @method array findByDateCreation(string $date_creation) Return CommonAgent objects filtered by the date_creation column
 * @method array findByDateModification(string $date_modification) Return CommonAgent objects filtered by the date_modification column
 * @method array findByIdInitial(int $id_initial) Return CommonAgent objects filtered by the id_initial column
 * @method array findByIdProfilSocleExterne(int $id_profil_socle_externe) Return CommonAgent objects filtered by the id_profil_socle_externe column
 * @method array findByLieuExecution(string $lieu_execution) Return CommonAgent objects filtered by the lieu_execution column
 * @method array findByAlerteQuestionEntreprise(string $alerte_question_entreprise) Return CommonAgent objects filtered by the alerte_question_entreprise column
 * @method array findByActif(string $actif) Return CommonAgent objects filtered by the actif column
 * @method array findByCodesNuts(string $codes_nuts) Return CommonAgent objects filtered by the codes_nuts column
 * @method array findByNumCertificat(string $num_certificat) Return CommonAgent objects filtered by the num_certificat column
 * @method array findByAlerteValidationConsultation(string $alerte_validation_consultation) Return CommonAgent objects filtered by the alerte_validation_consultation column
 * @method array findByAlerteChorus(string $alerte_chorus) Return CommonAgent objects filtered by the alerte_chorus column
 * @method array findByPassword(string $password) Return CommonAgent objects filtered by the password column
 * @method array findByCodeTheme(string $code_theme) Return CommonAgent objects filtered by the code_theme column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonAgentQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonAgentQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonAgent', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonAgentQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonAgentQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonAgentQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonAgentQuery) {
            return $criteria;
        }
        $query = new CommonAgentQuery();
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
     * @return   CommonAgent|CommonAgent[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonAgentPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonAgent A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
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
     * @return                 CommonAgent A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `login`, `email`, `mdp`, `certificat`, `nom`, `prenom`, `tentatives_mdp`, `organisme`, `service_id`, `RECEVOIR_MAIL`, `elu`, `nom_fonction`, `num_tel`, `num_fax`, `type_comm`, `adr_postale`, `civilite`, `alerte_reponse_electronique`, `alerte_reception_mainlevee`, `alerte_cloture_consultation`, `alerte_reception_message`, `alerte_publication_boamp`, `alerte_echec_publication_boamp`, `alerte_creation_modification_agent`, `date_creation`, `date_modification`, `id_initial`, `id_profil_socle_externe`, `lieu_execution`, `alerte_question_entreprise`, `actif`, `codes_nuts`, `num_certificat`, `alerte_validation_consultation`, `alerte_chorus`, `password`, `code_theme` FROM `Agent` WHERE `id` = :p0';
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
            $obj = new CommonAgent();
            $obj->hydrate($row);
            CommonAgentPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonAgent|CommonAgent[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonAgent[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonAgentPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonAgentPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonAgentPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonAgentPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the login column
     *
     * Example usage:
     * <code>
     * $query->filterByLogin('fooValue');   // WHERE login = 'fooValue'
     * $query->filterByLogin('%fooValue%'); // WHERE login LIKE '%fooValue%'
     * </code>
     *
     * @param     string $login The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByLogin($login = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($login)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $login)) {
                $login = str_replace('*', '%', $login);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::LOGIN, $login, $comparison);
    }

    /**
     * Filter the query on the email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
     * $query->filterByEmail('%fooValue%'); // WHERE email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $email)) {
                $email = str_replace('*', '%', $email);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the mdp column
     *
     * Example usage:
     * <code>
     * $query->filterByMdp('fooValue');   // WHERE mdp = 'fooValue'
     * $query->filterByMdp('%fooValue%'); // WHERE mdp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mdp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByMdp($mdp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mdp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mdp)) {
                $mdp = str_replace('*', '%', $mdp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::MDP, $mdp, $comparison);
    }

    /**
     * Filter the query on the certificat column
     *
     * Example usage:
     * <code>
     * $query->filterByCertificat('fooValue');   // WHERE certificat = 'fooValue'
     * $query->filterByCertificat('%fooValue%'); // WHERE certificat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $certificat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByCertificat($certificat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($certificat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $certificat)) {
                $certificat = str_replace('*', '%', $certificat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::CERTIFICAT, $certificat, $comparison);
    }

    /**
     * Filter the query on the nom column
     *
     * Example usage:
     * <code>
     * $query->filterByNom('fooValue');   // WHERE nom = 'fooValue'
     * $query->filterByNom('%fooValue%'); // WHERE nom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByNom($nom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nom)) {
                $nom = str_replace('*', '%', $nom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::NOM, $nom, $comparison);
    }

    /**
     * Filter the query on the prenom column
     *
     * Example usage:
     * <code>
     * $query->filterByPrenom('fooValue');   // WHERE prenom = 'fooValue'
     * $query->filterByPrenom('%fooValue%'); // WHERE prenom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prenom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByPrenom($prenom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prenom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prenom)) {
                $prenom = str_replace('*', '%', $prenom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::PRENOM, $prenom, $comparison);
    }

    /**
     * Filter the query on the tentatives_mdp column
     *
     * Example usage:
     * <code>
     * $query->filterByTentativesMdp(1234); // WHERE tentatives_mdp = 1234
     * $query->filterByTentativesMdp(array(12, 34)); // WHERE tentatives_mdp IN (12, 34)
     * $query->filterByTentativesMdp(array('min' => 12)); // WHERE tentatives_mdp >= 12
     * $query->filterByTentativesMdp(array('max' => 12)); // WHERE tentatives_mdp <= 12
     * </code>
     *
     * @param     mixed $tentativesMdp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByTentativesMdp($tentativesMdp = null, $comparison = null)
    {
        if (is_array($tentativesMdp)) {
            $useMinMax = false;
            if (isset($tentativesMdp['min'])) {
                $this->addUsingAlias(CommonAgentPeer::TENTATIVES_MDP, $tentativesMdp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tentativesMdp['max'])) {
                $this->addUsingAlias(CommonAgentPeer::TENTATIVES_MDP, $tentativesMdp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::TENTATIVES_MDP, $tentativesMdp, $comparison);
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
     * @return CommonAgentQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonAgentPeer::ORGANISME, $organisme, $comparison);
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
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByServiceId($serviceId = null, $comparison = null)
    {
        if (is_array($serviceId)) {
            $useMinMax = false;
            if (isset($serviceId['min'])) {
                $this->addUsingAlias(CommonAgentPeer::SERVICE_ID, $serviceId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($serviceId['max'])) {
                $this->addUsingAlias(CommonAgentPeer::SERVICE_ID, $serviceId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::SERVICE_ID, $serviceId, $comparison);
    }

    /**
     * Filter the query on the RECEVOIR_MAIL column
     *
     * Example usage:
     * <code>
     * $query->filterByRecevoirMail('fooValue');   // WHERE RECEVOIR_MAIL = 'fooValue'
     * $query->filterByRecevoirMail('%fooValue%'); // WHERE RECEVOIR_MAIL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $recevoirMail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByRecevoirMail($recevoirMail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($recevoirMail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $recevoirMail)) {
                $recevoirMail = str_replace('*', '%', $recevoirMail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::RECEVOIR_MAIL, $recevoirMail, $comparison);
    }

    /**
     * Filter the query on the elu column
     *
     * Example usage:
     * <code>
     * $query->filterByElu('fooValue');   // WHERE elu = 'fooValue'
     * $query->filterByElu('%fooValue%'); // WHERE elu LIKE '%fooValue%'
     * </code>
     *
     * @param     string $elu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByElu($elu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($elu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $elu)) {
                $elu = str_replace('*', '%', $elu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::ELU, $elu, $comparison);
    }

    /**
     * Filter the query on the nom_fonction column
     *
     * Example usage:
     * <code>
     * $query->filterByNomFonction('fooValue');   // WHERE nom_fonction = 'fooValue'
     * $query->filterByNomFonction('%fooValue%'); // WHERE nom_fonction LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomFonction The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByNomFonction($nomFonction = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomFonction)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomFonction)) {
                $nomFonction = str_replace('*', '%', $nomFonction);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::NOM_FONCTION, $nomFonction, $comparison);
    }

    /**
     * Filter the query on the num_tel column
     *
     * Example usage:
     * <code>
     * $query->filterByNumTel('fooValue');   // WHERE num_tel = 'fooValue'
     * $query->filterByNumTel('%fooValue%'); // WHERE num_tel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numTel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByNumTel($numTel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numTel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numTel)) {
                $numTel = str_replace('*', '%', $numTel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::NUM_TEL, $numTel, $comparison);
    }

    /**
     * Filter the query on the num_fax column
     *
     * Example usage:
     * <code>
     * $query->filterByNumFax('fooValue');   // WHERE num_fax = 'fooValue'
     * $query->filterByNumFax('%fooValue%'); // WHERE num_fax LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numFax The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByNumFax($numFax = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numFax)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numFax)) {
                $numFax = str_replace('*', '%', $numFax);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::NUM_FAX, $numFax, $comparison);
    }

    /**
     * Filter the query on the type_comm column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeComm('fooValue');   // WHERE type_comm = 'fooValue'
     * $query->filterByTypeComm('%fooValue%'); // WHERE type_comm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeComm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByTypeComm($typeComm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeComm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeComm)) {
                $typeComm = str_replace('*', '%', $typeComm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::TYPE_COMM, $typeComm, $comparison);
    }

    /**
     * Filter the query on the adr_postale column
     *
     * Example usage:
     * <code>
     * $query->filterByAdrPostale('fooValue');   // WHERE adr_postale = 'fooValue'
     * $query->filterByAdrPostale('%fooValue%'); // WHERE adr_postale LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adrPostale The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByAdrPostale($adrPostale = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adrPostale)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adrPostale)) {
                $adrPostale = str_replace('*', '%', $adrPostale);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::ADR_POSTALE, $adrPostale, $comparison);
    }

    /**
     * Filter the query on the civilite column
     *
     * Example usage:
     * <code>
     * $query->filterByCivilite('fooValue');   // WHERE civilite = 'fooValue'
     * $query->filterByCivilite('%fooValue%'); // WHERE civilite LIKE '%fooValue%'
     * </code>
     *
     * @param     string $civilite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByCivilite($civilite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($civilite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $civilite)) {
                $civilite = str_replace('*', '%', $civilite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::CIVILITE, $civilite, $comparison);
    }

    /**
     * Filter the query on the alerte_reponse_electronique column
     *
     * Example usage:
     * <code>
     * $query->filterByAlerteReponseElectronique('fooValue');   // WHERE alerte_reponse_electronique = 'fooValue'
     * $query->filterByAlerteReponseElectronique('%fooValue%'); // WHERE alerte_reponse_electronique LIKE '%fooValue%'
     * </code>
     *
     * @param     string $alerteReponseElectronique The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByAlerteReponseElectronique($alerteReponseElectronique = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($alerteReponseElectronique)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $alerteReponseElectronique)) {
                $alerteReponseElectronique = str_replace('*', '%', $alerteReponseElectronique);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::ALERTE_REPONSE_ELECTRONIQUE, $alerteReponseElectronique, $comparison);
    }

    /**
     * Filter the query on the alerte_reception_mainlevee column
     *
     * Example usage:
     * <code>
     * $query->filterByAlerteReceptionMainlevee('fooValue');   // WHERE alerte_reception_mainlevee = 'fooValue'
     * $query->filterByAlerteReceptionMainlevee('%fooValue%'); // WHERE alerte_reception_mainlevee LIKE '%fooValue%'
     * </code>
     *
     * @param     string $alerteReceptionMainlevee The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByAlerteReceptionMainlevee($alerteReceptionMainlevee = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($alerteReceptionMainlevee)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $alerteReceptionMainlevee)) {
                $alerteReceptionMainlevee = str_replace('*', '%', $alerteReceptionMainlevee);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::ALERTE_RECEPTION_MAINLEVEE, $alerteReceptionMainlevee, $comparison);
    }

    /**
     * Filter the query on the alerte_cloture_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByAlerteClotureConsultation('fooValue');   // WHERE alerte_cloture_consultation = 'fooValue'
     * $query->filterByAlerteClotureConsultation('%fooValue%'); // WHERE alerte_cloture_consultation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $alerteClotureConsultation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByAlerteClotureConsultation($alerteClotureConsultation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($alerteClotureConsultation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $alerteClotureConsultation)) {
                $alerteClotureConsultation = str_replace('*', '%', $alerteClotureConsultation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::ALERTE_CLOTURE_CONSULTATION, $alerteClotureConsultation, $comparison);
    }

    /**
     * Filter the query on the alerte_reception_message column
     *
     * Example usage:
     * <code>
     * $query->filterByAlerteReceptionMessage('fooValue');   // WHERE alerte_reception_message = 'fooValue'
     * $query->filterByAlerteReceptionMessage('%fooValue%'); // WHERE alerte_reception_message LIKE '%fooValue%'
     * </code>
     *
     * @param     string $alerteReceptionMessage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByAlerteReceptionMessage($alerteReceptionMessage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($alerteReceptionMessage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $alerteReceptionMessage)) {
                $alerteReceptionMessage = str_replace('*', '%', $alerteReceptionMessage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::ALERTE_RECEPTION_MESSAGE, $alerteReceptionMessage, $comparison);
    }

    /**
     * Filter the query on the alerte_publication_boamp column
     *
     * Example usage:
     * <code>
     * $query->filterByAlertePublicationBoamp('fooValue');   // WHERE alerte_publication_boamp = 'fooValue'
     * $query->filterByAlertePublicationBoamp('%fooValue%'); // WHERE alerte_publication_boamp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $alertePublicationBoamp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByAlertePublicationBoamp($alertePublicationBoamp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($alertePublicationBoamp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $alertePublicationBoamp)) {
                $alertePublicationBoamp = str_replace('*', '%', $alertePublicationBoamp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::ALERTE_PUBLICATION_BOAMP, $alertePublicationBoamp, $comparison);
    }

    /**
     * Filter the query on the alerte_echec_publication_boamp column
     *
     * Example usage:
     * <code>
     * $query->filterByAlerteEchecPublicationBoamp('fooValue');   // WHERE alerte_echec_publication_boamp = 'fooValue'
     * $query->filterByAlerteEchecPublicationBoamp('%fooValue%'); // WHERE alerte_echec_publication_boamp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $alerteEchecPublicationBoamp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByAlerteEchecPublicationBoamp($alerteEchecPublicationBoamp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($alerteEchecPublicationBoamp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $alerteEchecPublicationBoamp)) {
                $alerteEchecPublicationBoamp = str_replace('*', '%', $alerteEchecPublicationBoamp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::ALERTE_ECHEC_PUBLICATION_BOAMP, $alerteEchecPublicationBoamp, $comparison);
    }

    /**
     * Filter the query on the alerte_creation_modification_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByAlerteCreationModificationAgent('fooValue');   // WHERE alerte_creation_modification_agent = 'fooValue'
     * $query->filterByAlerteCreationModificationAgent('%fooValue%'); // WHERE alerte_creation_modification_agent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $alerteCreationModificationAgent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByAlerteCreationModificationAgent($alerteCreationModificationAgent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($alerteCreationModificationAgent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $alerteCreationModificationAgent)) {
                $alerteCreationModificationAgent = str_replace('*', '%', $alerteCreationModificationAgent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::ALERTE_CREATION_MODIFICATION_AGENT, $alerteCreationModificationAgent, $comparison);
    }

    /**
     * Filter the query on the date_creation column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCreation('fooValue');   // WHERE date_creation = 'fooValue'
     * $query->filterByDateCreation('%fooValue%'); // WHERE date_creation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateCreation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByDateCreation($dateCreation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateCreation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateCreation)) {
                $dateCreation = str_replace('*', '%', $dateCreation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::DATE_CREATION, $dateCreation, $comparison);
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
     * @return CommonAgentQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonAgentPeer::DATE_MODIFICATION, $dateModification, $comparison);
    }

    /**
     * Filter the query on the id_initial column
     *
     * Example usage:
     * <code>
     * $query->filterByIdInitial(1234); // WHERE id_initial = 1234
     * $query->filterByIdInitial(array(12, 34)); // WHERE id_initial IN (12, 34)
     * $query->filterByIdInitial(array('min' => 12)); // WHERE id_initial >= 12
     * $query->filterByIdInitial(array('max' => 12)); // WHERE id_initial <= 12
     * </code>
     *
     * @param     mixed $idInitial The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByIdInitial($idInitial = null, $comparison = null)
    {
        if (is_array($idInitial)) {
            $useMinMax = false;
            if (isset($idInitial['min'])) {
                $this->addUsingAlias(CommonAgentPeer::ID_INITIAL, $idInitial['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idInitial['max'])) {
                $this->addUsingAlias(CommonAgentPeer::ID_INITIAL, $idInitial['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::ID_INITIAL, $idInitial, $comparison);
    }

    /**
     * Filter the query on the id_profil_socle_externe column
     *
     * Example usage:
     * <code>
     * $query->filterByIdProfilSocleExterne(1234); // WHERE id_profil_socle_externe = 1234
     * $query->filterByIdProfilSocleExterne(array(12, 34)); // WHERE id_profil_socle_externe IN (12, 34)
     * $query->filterByIdProfilSocleExterne(array('min' => 12)); // WHERE id_profil_socle_externe >= 12
     * $query->filterByIdProfilSocleExterne(array('max' => 12)); // WHERE id_profil_socle_externe <= 12
     * </code>
     *
     * @param     mixed $idProfilSocleExterne The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByIdProfilSocleExterne($idProfilSocleExterne = null, $comparison = null)
    {
        if (is_array($idProfilSocleExterne)) {
            $useMinMax = false;
            if (isset($idProfilSocleExterne['min'])) {
                $this->addUsingAlias(CommonAgentPeer::ID_PROFIL_SOCLE_EXTERNE, $idProfilSocleExterne['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idProfilSocleExterne['max'])) {
                $this->addUsingAlias(CommonAgentPeer::ID_PROFIL_SOCLE_EXTERNE, $idProfilSocleExterne['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::ID_PROFIL_SOCLE_EXTERNE, $idProfilSocleExterne, $comparison);
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
     * @return CommonAgentQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonAgentPeer::LIEU_EXECUTION, $lieuExecution, $comparison);
    }

    /**
     * Filter the query on the alerte_question_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByAlerteQuestionEntreprise('fooValue');   // WHERE alerte_question_entreprise = 'fooValue'
     * $query->filterByAlerteQuestionEntreprise('%fooValue%'); // WHERE alerte_question_entreprise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $alerteQuestionEntreprise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByAlerteQuestionEntreprise($alerteQuestionEntreprise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($alerteQuestionEntreprise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $alerteQuestionEntreprise)) {
                $alerteQuestionEntreprise = str_replace('*', '%', $alerteQuestionEntreprise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::ALERTE_QUESTION_ENTREPRISE, $alerteQuestionEntreprise, $comparison);
    }

    /**
     * Filter the query on the actif column
     *
     * Example usage:
     * <code>
     * $query->filterByActif('fooValue');   // WHERE actif = 'fooValue'
     * $query->filterByActif('%fooValue%'); // WHERE actif LIKE '%fooValue%'
     * </code>
     *
     * @param     string $actif The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByActif($actif = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($actif)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $actif)) {
                $actif = str_replace('*', '%', $actif);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::ACTIF, $actif, $comparison);
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
     * @return CommonAgentQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonAgentPeer::CODES_NUTS, $codesNuts, $comparison);
    }

    /**
     * Filter the query on the num_certificat column
     *
     * Example usage:
     * <code>
     * $query->filterByNumCertificat('fooValue');   // WHERE num_certificat = 'fooValue'
     * $query->filterByNumCertificat('%fooValue%'); // WHERE num_certificat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numCertificat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByNumCertificat($numCertificat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numCertificat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numCertificat)) {
                $numCertificat = str_replace('*', '%', $numCertificat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::NUM_CERTIFICAT, $numCertificat, $comparison);
    }

    /**
     * Filter the query on the alerte_validation_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByAlerteValidationConsultation('fooValue');   // WHERE alerte_validation_consultation = 'fooValue'
     * $query->filterByAlerteValidationConsultation('%fooValue%'); // WHERE alerte_validation_consultation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $alerteValidationConsultation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByAlerteValidationConsultation($alerteValidationConsultation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($alerteValidationConsultation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $alerteValidationConsultation)) {
                $alerteValidationConsultation = str_replace('*', '%', $alerteValidationConsultation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::ALERTE_VALIDATION_CONSULTATION, $alerteValidationConsultation, $comparison);
    }

    /**
     * Filter the query on the alerte_chorus column
     *
     * Example usage:
     * <code>
     * $query->filterByAlerteChorus('fooValue');   // WHERE alerte_chorus = 'fooValue'
     * $query->filterByAlerteChorus('%fooValue%'); // WHERE alerte_chorus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $alerteChorus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByAlerteChorus($alerteChorus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($alerteChorus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $alerteChorus)) {
                $alerteChorus = str_replace('*', '%', $alerteChorus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::ALERTE_CHORUS, $alerteChorus, $comparison);
    }

    /**
     * Filter the query on the password column
     *
     * Example usage:
     * <code>
     * $query->filterByPassword('fooValue');   // WHERE password = 'fooValue'
     * $query->filterByPassword('%fooValue%'); // WHERE password LIKE '%fooValue%'
     * </code>
     *
     * @param     string $password The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByPassword($password = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($password)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $password)) {
                $password = str_replace('*', '%', $password);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::PASSWORD, $password, $comparison);
    }

    /**
     * Filter the query on the code_theme column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeTheme('fooValue');   // WHERE code_theme = 'fooValue'
     * $query->filterByCodeTheme('%fooValue%'); // WHERE code_theme LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codeTheme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByCodeTheme($codeTheme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeTheme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codeTheme)) {
                $codeTheme = str_replace('*', '%', $codeTheme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::CODE_THEME, $codeTheme, $comparison);
    }

    /**
     * Filter the query by a related CommonOrganisme object
     *
     * @param   CommonOrganisme|PropelObjectCollection $commonOrganisme The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAgentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonOrganisme($commonOrganisme, $comparison = null)
    {
        if ($commonOrganisme instanceof CommonOrganisme) {
            return $this
                ->addUsingAlias(CommonAgentPeer::ORGANISME, $commonOrganisme->getAcronyme(), $comparison);
        } elseif ($commonOrganisme instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonAgentPeer::ORGANISME, $commonOrganisme->toKeyValue('PrimaryKey', 'Acronyme'), $comparison);
        } else {
            throw new PropelException('filterByCommonOrganisme() only accepts arguments of type CommonOrganisme or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonOrganisme relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function joinCommonOrganisme($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonOrganisme');

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
            $this->addJoinObject($join, 'CommonOrganisme');
        }

        return $this;
    }

    /**
     * Use the CommonOrganisme relation CommonOrganisme object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonOrganismeQuery A secondary query class using the current class as primary query
     */
    public function useCommonOrganismeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonOrganisme($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonOrganisme', 'CommonOrganismeQuery');
    }

    /**
     * Filter the query by a related CommonDemandeAchatParCatalogue object
     *
     * @param   CommonDemandeAchatParCatalogue|PropelObjectCollection $commonDemandeAchatParCatalogue  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAgentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonDemandeAchatParCatalogue($commonDemandeAchatParCatalogue, $comparison = null)
    {
        if ($commonDemandeAchatParCatalogue instanceof CommonDemandeAchatParCatalogue) {
            return $this
                ->addUsingAlias(CommonAgentPeer::ID, $commonDemandeAchatParCatalogue->getIdAgent(), $comparison);
        } elseif ($commonDemandeAchatParCatalogue instanceof PropelObjectCollection) {
            return $this
                ->useCommonDemandeAchatParCatalogueQuery()
                ->filterByPrimaryKeys($commonDemandeAchatParCatalogue->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonDemandeAchatParCatalogue() only accepts arguments of type CommonDemandeAchatParCatalogue or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonDemandeAchatParCatalogue relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function joinCommonDemandeAchatParCatalogue($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonDemandeAchatParCatalogue');

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
            $this->addJoinObject($join, 'CommonDemandeAchatParCatalogue');
        }

        return $this;
    }

    /**
     * Use the CommonDemandeAchatParCatalogue relation CommonDemandeAchatParCatalogue object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonDemandeAchatParCatalogueQuery A secondary query class using the current class as primary query
     */
    public function useCommonDemandeAchatParCatalogueQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonDemandeAchatParCatalogue($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonDemandeAchatParCatalogue', 'CommonDemandeAchatParCatalogueQuery');
    }

    /**
     * Filter the query by a related CommonExecAgentContrat object
     *
     * @param   CommonExecAgentContrat|PropelObjectCollection $commonExecAgentContrat  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAgentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecAgentContrat($commonExecAgentContrat, $comparison = null)
    {
        if ($commonExecAgentContrat instanceof CommonExecAgentContrat) {
            return $this
                ->addUsingAlias(CommonAgentPeer::ID, $commonExecAgentContrat->getIdAgent(), $comparison);
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
     * @return CommonAgentQuery The current query, for fluid interface
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
     * @return                 CommonAgentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecAvenantRelatedByIdAgentCrea($commonExecAvenant, $comparison = null)
    {
        if ($commonExecAvenant instanceof CommonExecAvenant) {
            return $this
                ->addUsingAlias(CommonAgentPeer::ID, $commonExecAvenant->getIdAgentCrea(), $comparison);
        } elseif ($commonExecAvenant instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecAvenantRelatedByIdAgentCreaQuery()
                ->filterByPrimaryKeys($commonExecAvenant->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecAvenantRelatedByIdAgentCrea() only accepts arguments of type CommonExecAvenant or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecAvenantRelatedByIdAgentCrea relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function joinCommonExecAvenantRelatedByIdAgentCrea($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecAvenantRelatedByIdAgentCrea');

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
            $this->addJoinObject($join, 'CommonExecAvenantRelatedByIdAgentCrea');
        }

        return $this;
    }

    /**
     * Use the CommonExecAvenantRelatedByIdAgentCrea relation CommonExecAvenant object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecAvenantQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecAvenantRelatedByIdAgentCreaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecAvenantRelatedByIdAgentCrea($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecAvenantRelatedByIdAgentCrea', 'CommonExecAvenantQuery');
    }

    /**
     * Filter the query by a related CommonExecAvenant object
     *
     * @param   CommonExecAvenant|PropelObjectCollection $commonExecAvenant  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAgentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecAvenantRelatedByIdAgentModif($commonExecAvenant, $comparison = null)
    {
        if ($commonExecAvenant instanceof CommonExecAvenant) {
            return $this
                ->addUsingAlias(CommonAgentPeer::ID, $commonExecAvenant->getIdAgentModif(), $comparison);
        } elseif ($commonExecAvenant instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecAvenantRelatedByIdAgentModifQuery()
                ->filterByPrimaryKeys($commonExecAvenant->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecAvenantRelatedByIdAgentModif() only accepts arguments of type CommonExecAvenant or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecAvenantRelatedByIdAgentModif relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function joinCommonExecAvenantRelatedByIdAgentModif($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecAvenantRelatedByIdAgentModif');

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
            $this->addJoinObject($join, 'CommonExecAvenantRelatedByIdAgentModif');
        }

        return $this;
    }

    /**
     * Use the CommonExecAvenantRelatedByIdAgentModif relation CommonExecAvenant object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecAvenantQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecAvenantRelatedByIdAgentModifQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecAvenantRelatedByIdAgentModif($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecAvenantRelatedByIdAgentModif', 'CommonExecAvenantQuery');
    }

    /**
     * Filter the query by a related CommonExecAvenant object
     *
     * @param   CommonExecAvenant|PropelObjectCollection $commonExecAvenant  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAgentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecAvenantRelatedByIdAgentRejet($commonExecAvenant, $comparison = null)
    {
        if ($commonExecAvenant instanceof CommonExecAvenant) {
            return $this
                ->addUsingAlias(CommonAgentPeer::ID, $commonExecAvenant->getIdAgentRejet(), $comparison);
        } elseif ($commonExecAvenant instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecAvenantRelatedByIdAgentRejetQuery()
                ->filterByPrimaryKeys($commonExecAvenant->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecAvenantRelatedByIdAgentRejet() only accepts arguments of type CommonExecAvenant or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecAvenantRelatedByIdAgentRejet relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function joinCommonExecAvenantRelatedByIdAgentRejet($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecAvenantRelatedByIdAgentRejet');

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
            $this->addJoinObject($join, 'CommonExecAvenantRelatedByIdAgentRejet');
        }

        return $this;
    }

    /**
     * Use the CommonExecAvenantRelatedByIdAgentRejet relation CommonExecAvenant object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecAvenantQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecAvenantRelatedByIdAgentRejetQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecAvenantRelatedByIdAgentRejet($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecAvenantRelatedByIdAgentRejet', 'CommonExecAvenantQuery');
    }

    /**
     * Filter the query by a related CommonExecAvenant object
     *
     * @param   CommonExecAvenant|PropelObjectCollection $commonExecAvenant  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAgentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecAvenantRelatedByIdAgentValidation($commonExecAvenant, $comparison = null)
    {
        if ($commonExecAvenant instanceof CommonExecAvenant) {
            return $this
                ->addUsingAlias(CommonAgentPeer::ID, $commonExecAvenant->getIdAgentValidation(), $comparison);
        } elseif ($commonExecAvenant instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecAvenantRelatedByIdAgentValidationQuery()
                ->filterByPrimaryKeys($commonExecAvenant->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecAvenantRelatedByIdAgentValidation() only accepts arguments of type CommonExecAvenant or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecAvenantRelatedByIdAgentValidation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function joinCommonExecAvenantRelatedByIdAgentValidation($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecAvenantRelatedByIdAgentValidation');

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
            $this->addJoinObject($join, 'CommonExecAvenantRelatedByIdAgentValidation');
        }

        return $this;
    }

    /**
     * Use the CommonExecAvenantRelatedByIdAgentValidation relation CommonExecAvenant object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecAvenantQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecAvenantRelatedByIdAgentValidationQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecAvenantRelatedByIdAgentValidation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecAvenantRelatedByIdAgentValidation', 'CommonExecAvenantQuery');
    }

    /**
     * Filter the query by a related CommonExecContractant object
     *
     * @param   CommonExecContractant|PropelObjectCollection $commonExecContractant  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAgentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecContractantRelatedByIdAgentCrea($commonExecContractant, $comparison = null)
    {
        if ($commonExecContractant instanceof CommonExecContractant) {
            return $this
                ->addUsingAlias(CommonAgentPeer::ID, $commonExecContractant->getIdAgentCrea(), $comparison);
        } elseif ($commonExecContractant instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecContractantRelatedByIdAgentCreaQuery()
                ->filterByPrimaryKeys($commonExecContractant->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecContractantRelatedByIdAgentCrea() only accepts arguments of type CommonExecContractant or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecContractantRelatedByIdAgentCrea relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function joinCommonExecContractantRelatedByIdAgentCrea($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecContractantRelatedByIdAgentCrea');

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
            $this->addJoinObject($join, 'CommonExecContractantRelatedByIdAgentCrea');
        }

        return $this;
    }

    /**
     * Use the CommonExecContractantRelatedByIdAgentCrea relation CommonExecContractant object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecContractantQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecContractantRelatedByIdAgentCreaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecContractantRelatedByIdAgentCrea($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecContractantRelatedByIdAgentCrea', 'CommonExecContractantQuery');
    }

    /**
     * Filter the query by a related CommonExecContractant object
     *
     * @param   CommonExecContractant|PropelObjectCollection $commonExecContractant  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAgentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecContractantRelatedByIdAgentModif($commonExecContractant, $comparison = null)
    {
        if ($commonExecContractant instanceof CommonExecContractant) {
            return $this
                ->addUsingAlias(CommonAgentPeer::ID, $commonExecContractant->getIdAgentModif(), $comparison);
        } elseif ($commonExecContractant instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecContractantRelatedByIdAgentModifQuery()
                ->filterByPrimaryKeys($commonExecContractant->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecContractantRelatedByIdAgentModif() only accepts arguments of type CommonExecContractant or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecContractantRelatedByIdAgentModif relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function joinCommonExecContractantRelatedByIdAgentModif($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecContractantRelatedByIdAgentModif');

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
            $this->addJoinObject($join, 'CommonExecContractantRelatedByIdAgentModif');
        }

        return $this;
    }

    /**
     * Use the CommonExecContractantRelatedByIdAgentModif relation CommonExecContractant object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecContractantQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecContractantRelatedByIdAgentModifQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecContractantRelatedByIdAgentModif($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecContractantRelatedByIdAgentModif', 'CommonExecContractantQuery');
    }

    /**
     * Filter the query by a related CommonExecContrat object
     *
     * @param   CommonExecContrat|PropelObjectCollection $commonExecContrat  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAgentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecContratRelatedByIdAgentCrea($commonExecContrat, $comparison = null)
    {
        if ($commonExecContrat instanceof CommonExecContrat) {
            return $this
                ->addUsingAlias(CommonAgentPeer::ID, $commonExecContrat->getIdAgentCrea(), $comparison);
        } elseif ($commonExecContrat instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecContratRelatedByIdAgentCreaQuery()
                ->filterByPrimaryKeys($commonExecContrat->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecContratRelatedByIdAgentCrea() only accepts arguments of type CommonExecContrat or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecContratRelatedByIdAgentCrea relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function joinCommonExecContratRelatedByIdAgentCrea($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecContratRelatedByIdAgentCrea');

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
            $this->addJoinObject($join, 'CommonExecContratRelatedByIdAgentCrea');
        }

        return $this;
    }

    /**
     * Use the CommonExecContratRelatedByIdAgentCrea relation CommonExecContrat object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecContratQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecContratRelatedByIdAgentCreaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecContratRelatedByIdAgentCrea($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecContratRelatedByIdAgentCrea', 'CommonExecContratQuery');
    }

    /**
     * Filter the query by a related CommonExecContrat object
     *
     * @param   CommonExecContrat|PropelObjectCollection $commonExecContrat  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAgentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecContratRelatedByIdAgentGestion($commonExecContrat, $comparison = null)
    {
        if ($commonExecContrat instanceof CommonExecContrat) {
            return $this
                ->addUsingAlias(CommonAgentPeer::ID, $commonExecContrat->getIdAgentGestion(), $comparison);
        } elseif ($commonExecContrat instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecContratRelatedByIdAgentGestionQuery()
                ->filterByPrimaryKeys($commonExecContrat->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecContratRelatedByIdAgentGestion() only accepts arguments of type CommonExecContrat or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecContratRelatedByIdAgentGestion relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function joinCommonExecContratRelatedByIdAgentGestion($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecContratRelatedByIdAgentGestion');

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
            $this->addJoinObject($join, 'CommonExecContratRelatedByIdAgentGestion');
        }

        return $this;
    }

    /**
     * Use the CommonExecContratRelatedByIdAgentGestion relation CommonExecContrat object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecContratQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecContratRelatedByIdAgentGestionQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecContratRelatedByIdAgentGestion($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecContratRelatedByIdAgentGestion', 'CommonExecContratQuery');
    }

    /**
     * Filter the query by a related CommonExecContrat object
     *
     * @param   CommonExecContrat|PropelObjectCollection $commonExecContrat  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAgentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecContratRelatedByIdAgentModif($commonExecContrat, $comparison = null)
    {
        if ($commonExecContrat instanceof CommonExecContrat) {
            return $this
                ->addUsingAlias(CommonAgentPeer::ID, $commonExecContrat->getIdAgentModif(), $comparison);
        } elseif ($commonExecContrat instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecContratRelatedByIdAgentModifQuery()
                ->filterByPrimaryKeys($commonExecContrat->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecContratRelatedByIdAgentModif() only accepts arguments of type CommonExecContrat or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecContratRelatedByIdAgentModif relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function joinCommonExecContratRelatedByIdAgentModif($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecContratRelatedByIdAgentModif');

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
            $this->addJoinObject($join, 'CommonExecContratRelatedByIdAgentModif');
        }

        return $this;
    }

    /**
     * Use the CommonExecContratRelatedByIdAgentModif relation CommonExecContrat object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecContratQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecContratRelatedByIdAgentModifQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecContratRelatedByIdAgentModif($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecContratRelatedByIdAgentModif', 'CommonExecContratQuery');
    }

    /**
     * Filter the query by a related CommonExecDossierPaiement object
     *
     * @param   CommonExecDossierPaiement|PropelObjectCollection $commonExecDossierPaiement  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAgentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecDossierPaiement($commonExecDossierPaiement, $comparison = null)
    {
        if ($commonExecDossierPaiement instanceof CommonExecDossierPaiement) {
            return $this
                ->addUsingAlias(CommonAgentPeer::ID, $commonExecDossierPaiement->getIdAgentCreat(), $comparison);
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
     * @return CommonAgentQuery The current query, for fluid interface
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
     * @return                 CommonAgentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecEvenementRelatedByIdAgentCrea($commonExecEvenement, $comparison = null)
    {
        if ($commonExecEvenement instanceof CommonExecEvenement) {
            return $this
                ->addUsingAlias(CommonAgentPeer::ID, $commonExecEvenement->getIdAgentCrea(), $comparison);
        } elseif ($commonExecEvenement instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecEvenementRelatedByIdAgentCreaQuery()
                ->filterByPrimaryKeys($commonExecEvenement->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecEvenementRelatedByIdAgentCrea() only accepts arguments of type CommonExecEvenement or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecEvenementRelatedByIdAgentCrea relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function joinCommonExecEvenementRelatedByIdAgentCrea($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecEvenementRelatedByIdAgentCrea');

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
            $this->addJoinObject($join, 'CommonExecEvenementRelatedByIdAgentCrea');
        }

        return $this;
    }

    /**
     * Use the CommonExecEvenementRelatedByIdAgentCrea relation CommonExecEvenement object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecEvenementQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecEvenementRelatedByIdAgentCreaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecEvenementRelatedByIdAgentCrea($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecEvenementRelatedByIdAgentCrea', 'CommonExecEvenementQuery');
    }

    /**
     * Filter the query by a related CommonExecEvenement object
     *
     * @param   CommonExecEvenement|PropelObjectCollection $commonExecEvenement  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAgentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecEvenementRelatedByIdAgentModif($commonExecEvenement, $comparison = null)
    {
        if ($commonExecEvenement instanceof CommonExecEvenement) {
            return $this
                ->addUsingAlias(CommonAgentPeer::ID, $commonExecEvenement->getIdAgentModif(), $comparison);
        } elseif ($commonExecEvenement instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecEvenementRelatedByIdAgentModifQuery()
                ->filterByPrimaryKeys($commonExecEvenement->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecEvenementRelatedByIdAgentModif() only accepts arguments of type CommonExecEvenement or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecEvenementRelatedByIdAgentModif relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function joinCommonExecEvenementRelatedByIdAgentModif($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecEvenementRelatedByIdAgentModif');

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
            $this->addJoinObject($join, 'CommonExecEvenementRelatedByIdAgentModif');
        }

        return $this;
    }

    /**
     * Use the CommonExecEvenementRelatedByIdAgentModif relation CommonExecEvenement object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecEvenementQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecEvenementRelatedByIdAgentModifQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecEvenementRelatedByIdAgentModif($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecEvenementRelatedByIdAgentModif', 'CommonExecEvenementQuery');
    }

    /**
     * Filter the query by a related CommonExecEvenement object
     *
     * @param   CommonExecEvenement|PropelObjectCollection $commonExecEvenement  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAgentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecEvenementRelatedByIdAgentRejet($commonExecEvenement, $comparison = null)
    {
        if ($commonExecEvenement instanceof CommonExecEvenement) {
            return $this
                ->addUsingAlias(CommonAgentPeer::ID, $commonExecEvenement->getIdAgentRejet(), $comparison);
        } elseif ($commonExecEvenement instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecEvenementRelatedByIdAgentRejetQuery()
                ->filterByPrimaryKeys($commonExecEvenement->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecEvenementRelatedByIdAgentRejet() only accepts arguments of type CommonExecEvenement or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecEvenementRelatedByIdAgentRejet relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function joinCommonExecEvenementRelatedByIdAgentRejet($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecEvenementRelatedByIdAgentRejet');

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
            $this->addJoinObject($join, 'CommonExecEvenementRelatedByIdAgentRejet');
        }

        return $this;
    }

    /**
     * Use the CommonExecEvenementRelatedByIdAgentRejet relation CommonExecEvenement object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecEvenementQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecEvenementRelatedByIdAgentRejetQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecEvenementRelatedByIdAgentRejet($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecEvenementRelatedByIdAgentRejet', 'CommonExecEvenementQuery');
    }

    /**
     * Filter the query by a related CommonExecEvenement object
     *
     * @param   CommonExecEvenement|PropelObjectCollection $commonExecEvenement  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAgentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecEvenementRelatedByIdAgentValidation($commonExecEvenement, $comparison = null)
    {
        if ($commonExecEvenement instanceof CommonExecEvenement) {
            return $this
                ->addUsingAlias(CommonAgentPeer::ID, $commonExecEvenement->getIdAgentValidation(), $comparison);
        } elseif ($commonExecEvenement instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecEvenementRelatedByIdAgentValidationQuery()
                ->filterByPrimaryKeys($commonExecEvenement->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecEvenementRelatedByIdAgentValidation() only accepts arguments of type CommonExecEvenement or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecEvenementRelatedByIdAgentValidation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function joinCommonExecEvenementRelatedByIdAgentValidation($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecEvenementRelatedByIdAgentValidation');

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
            $this->addJoinObject($join, 'CommonExecEvenementRelatedByIdAgentValidation');
        }

        return $this;
    }

    /**
     * Use the CommonExecEvenementRelatedByIdAgentValidation relation CommonExecEvenement object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecEvenementQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecEvenementRelatedByIdAgentValidationQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecEvenementRelatedByIdAgentValidation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecEvenementRelatedByIdAgentValidation', 'CommonExecEvenementQuery');
    }

    /**
     * Filter the query by a related CommonExecFacture object
     *
     * @param   CommonExecFacture|PropelObjectCollection $commonExecFacture  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAgentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecFactureRelatedByIdAgentCrea($commonExecFacture, $comparison = null)
    {
        if ($commonExecFacture instanceof CommonExecFacture) {
            return $this
                ->addUsingAlias(CommonAgentPeer::ID, $commonExecFacture->getIdAgentCrea(), $comparison);
        } elseif ($commonExecFacture instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecFactureRelatedByIdAgentCreaQuery()
                ->filterByPrimaryKeys($commonExecFacture->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecFactureRelatedByIdAgentCrea() only accepts arguments of type CommonExecFacture or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecFactureRelatedByIdAgentCrea relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function joinCommonExecFactureRelatedByIdAgentCrea($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecFactureRelatedByIdAgentCrea');

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
            $this->addJoinObject($join, 'CommonExecFactureRelatedByIdAgentCrea');
        }

        return $this;
    }

    /**
     * Use the CommonExecFactureRelatedByIdAgentCrea relation CommonExecFacture object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecFactureQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecFactureRelatedByIdAgentCreaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecFactureRelatedByIdAgentCrea($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecFactureRelatedByIdAgentCrea', 'CommonExecFactureQuery');
    }

    /**
     * Filter the query by a related CommonExecFacture object
     *
     * @param   CommonExecFacture|PropelObjectCollection $commonExecFacture  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAgentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecFactureRelatedByIdAgentModif($commonExecFacture, $comparison = null)
    {
        if ($commonExecFacture instanceof CommonExecFacture) {
            return $this
                ->addUsingAlias(CommonAgentPeer::ID, $commonExecFacture->getIdAgentModif(), $comparison);
        } elseif ($commonExecFacture instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecFactureRelatedByIdAgentModifQuery()
                ->filterByPrimaryKeys($commonExecFacture->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecFactureRelatedByIdAgentModif() only accepts arguments of type CommonExecFacture or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecFactureRelatedByIdAgentModif relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function joinCommonExecFactureRelatedByIdAgentModif($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecFactureRelatedByIdAgentModif');

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
            $this->addJoinObject($join, 'CommonExecFactureRelatedByIdAgentModif');
        }

        return $this;
    }

    /**
     * Use the CommonExecFactureRelatedByIdAgentModif relation CommonExecFacture object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecFactureQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecFactureRelatedByIdAgentModifQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecFactureRelatedByIdAgentModif($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecFactureRelatedByIdAgentModif', 'CommonExecFactureQuery');
    }

    /**
     * Filter the query by a related CommonExecFacture object
     *
     * @param   CommonExecFacture|PropelObjectCollection $commonExecFacture  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAgentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecFactureRelatedByIdAgentRejet($commonExecFacture, $comparison = null)
    {
        if ($commonExecFacture instanceof CommonExecFacture) {
            return $this
                ->addUsingAlias(CommonAgentPeer::ID, $commonExecFacture->getIdAgentRejet(), $comparison);
        } elseif ($commonExecFacture instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecFactureRelatedByIdAgentRejetQuery()
                ->filterByPrimaryKeys($commonExecFacture->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecFactureRelatedByIdAgentRejet() only accepts arguments of type CommonExecFacture or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecFactureRelatedByIdAgentRejet relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function joinCommonExecFactureRelatedByIdAgentRejet($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecFactureRelatedByIdAgentRejet');

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
            $this->addJoinObject($join, 'CommonExecFactureRelatedByIdAgentRejet');
        }

        return $this;
    }

    /**
     * Use the CommonExecFactureRelatedByIdAgentRejet relation CommonExecFacture object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecFactureQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecFactureRelatedByIdAgentRejetQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecFactureRelatedByIdAgentRejet($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecFactureRelatedByIdAgentRejet', 'CommonExecFactureQuery');
    }

    /**
     * Filter the query by a related CommonExecFacture object
     *
     * @param   CommonExecFacture|PropelObjectCollection $commonExecFacture  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAgentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecFactureRelatedByIdAgentValidation($commonExecFacture, $comparison = null)
    {
        if ($commonExecFacture instanceof CommonExecFacture) {
            return $this
                ->addUsingAlias(CommonAgentPeer::ID, $commonExecFacture->getIdAgentValidation(), $comparison);
        } elseif ($commonExecFacture instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecFactureRelatedByIdAgentValidationQuery()
                ->filterByPrimaryKeys($commonExecFacture->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecFactureRelatedByIdAgentValidation() only accepts arguments of type CommonExecFacture or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecFactureRelatedByIdAgentValidation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function joinCommonExecFactureRelatedByIdAgentValidation($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecFactureRelatedByIdAgentValidation');

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
            $this->addJoinObject($join, 'CommonExecFactureRelatedByIdAgentValidation');
        }

        return $this;
    }

    /**
     * Use the CommonExecFactureRelatedByIdAgentValidation relation CommonExecFacture object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecFactureQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecFactureRelatedByIdAgentValidationQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecFactureRelatedByIdAgentValidation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecFactureRelatedByIdAgentValidation', 'CommonExecFactureQuery');
    }

    /**
     * Filter the query by a related CommonExecHistoriquePrix object
     *
     * @param   CommonExecHistoriquePrix|PropelObjectCollection $commonExecHistoriquePrix  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAgentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecHistoriquePrixRelatedByIdAgentCrea($commonExecHistoriquePrix, $comparison = null)
    {
        if ($commonExecHistoriquePrix instanceof CommonExecHistoriquePrix) {
            return $this
                ->addUsingAlias(CommonAgentPeer::ID, $commonExecHistoriquePrix->getIdAgentCrea(), $comparison);
        } elseif ($commonExecHistoriquePrix instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecHistoriquePrixRelatedByIdAgentCreaQuery()
                ->filterByPrimaryKeys($commonExecHistoriquePrix->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecHistoriquePrixRelatedByIdAgentCrea() only accepts arguments of type CommonExecHistoriquePrix or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecHistoriquePrixRelatedByIdAgentCrea relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function joinCommonExecHistoriquePrixRelatedByIdAgentCrea($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecHistoriquePrixRelatedByIdAgentCrea');

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
            $this->addJoinObject($join, 'CommonExecHistoriquePrixRelatedByIdAgentCrea');
        }

        return $this;
    }

    /**
     * Use the CommonExecHistoriquePrixRelatedByIdAgentCrea relation CommonExecHistoriquePrix object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecHistoriquePrixQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecHistoriquePrixRelatedByIdAgentCreaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecHistoriquePrixRelatedByIdAgentCrea($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecHistoriquePrixRelatedByIdAgentCrea', 'CommonExecHistoriquePrixQuery');
    }

    /**
     * Filter the query by a related CommonExecHistoriquePrix object
     *
     * @param   CommonExecHistoriquePrix|PropelObjectCollection $commonExecHistoriquePrix  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAgentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecHistoriquePrixRelatedByIdAgentModif($commonExecHistoriquePrix, $comparison = null)
    {
        if ($commonExecHistoriquePrix instanceof CommonExecHistoriquePrix) {
            return $this
                ->addUsingAlias(CommonAgentPeer::ID, $commonExecHistoriquePrix->getIdAgentModif(), $comparison);
        } elseif ($commonExecHistoriquePrix instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecHistoriquePrixRelatedByIdAgentModifQuery()
                ->filterByPrimaryKeys($commonExecHistoriquePrix->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecHistoriquePrixRelatedByIdAgentModif() only accepts arguments of type CommonExecHistoriquePrix or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecHistoriquePrixRelatedByIdAgentModif relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function joinCommonExecHistoriquePrixRelatedByIdAgentModif($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecHistoriquePrixRelatedByIdAgentModif');

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
            $this->addJoinObject($join, 'CommonExecHistoriquePrixRelatedByIdAgentModif');
        }

        return $this;
    }

    /**
     * Use the CommonExecHistoriquePrixRelatedByIdAgentModif relation CommonExecHistoriquePrix object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecHistoriquePrixQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecHistoriquePrixRelatedByIdAgentModifQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecHistoriquePrixRelatedByIdAgentModif($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecHistoriquePrixRelatedByIdAgentModif', 'CommonExecHistoriquePrixQuery');
    }

    /**
     * Filter the query by a related CommonExecLivrableContrat object
     *
     * @param   CommonExecLivrableContrat|PropelObjectCollection $commonExecLivrableContrat  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAgentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecLivrableContrat($commonExecLivrableContrat, $comparison = null)
    {
        if ($commonExecLivrableContrat instanceof CommonExecLivrableContrat) {
            return $this
                ->addUsingAlias(CommonAgentPeer::ID, $commonExecLivrableContrat->getIdAgentCrea(), $comparison);
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
     * @return CommonAgentQuery The current query, for fluid interface
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
     * @return                 CommonAgentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecPhaseRelatedByIdAgentCrea($commonExecPhase, $comparison = null)
    {
        if ($commonExecPhase instanceof CommonExecPhase) {
            return $this
                ->addUsingAlias(CommonAgentPeer::ID, $commonExecPhase->getIdAgentCrea(), $comparison);
        } elseif ($commonExecPhase instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecPhaseRelatedByIdAgentCreaQuery()
                ->filterByPrimaryKeys($commonExecPhase->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecPhaseRelatedByIdAgentCrea() only accepts arguments of type CommonExecPhase or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecPhaseRelatedByIdAgentCrea relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function joinCommonExecPhaseRelatedByIdAgentCrea($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecPhaseRelatedByIdAgentCrea');

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
            $this->addJoinObject($join, 'CommonExecPhaseRelatedByIdAgentCrea');
        }

        return $this;
    }

    /**
     * Use the CommonExecPhaseRelatedByIdAgentCrea relation CommonExecPhase object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecPhaseQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecPhaseRelatedByIdAgentCreaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecPhaseRelatedByIdAgentCrea($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecPhaseRelatedByIdAgentCrea', 'CommonExecPhaseQuery');
    }

    /**
     * Filter the query by a related CommonExecPhase object
     *
     * @param   CommonExecPhase|PropelObjectCollection $commonExecPhase  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAgentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecPhaseRelatedByIdAgentModif($commonExecPhase, $comparison = null)
    {
        if ($commonExecPhase instanceof CommonExecPhase) {
            return $this
                ->addUsingAlias(CommonAgentPeer::ID, $commonExecPhase->getIdAgentModif(), $comparison);
        } elseif ($commonExecPhase instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecPhaseRelatedByIdAgentModifQuery()
                ->filterByPrimaryKeys($commonExecPhase->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecPhaseRelatedByIdAgentModif() only accepts arguments of type CommonExecPhase or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecPhaseRelatedByIdAgentModif relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function joinCommonExecPhaseRelatedByIdAgentModif($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecPhaseRelatedByIdAgentModif');

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
            $this->addJoinObject($join, 'CommonExecPhaseRelatedByIdAgentModif');
        }

        return $this;
    }

    /**
     * Use the CommonExecPhaseRelatedByIdAgentModif relation CommonExecPhase object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecPhaseQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecPhaseRelatedByIdAgentModifQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecPhaseRelatedByIdAgentModif($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecPhaseRelatedByIdAgentModif', 'CommonExecPhaseQuery');
    }

    /**
     * Filter the query by a related CommonExecPiece object
     *
     * @param   CommonExecPiece|PropelObjectCollection $commonExecPiece  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAgentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecPiece($commonExecPiece, $comparison = null)
    {
        if ($commonExecPiece instanceof CommonExecPiece) {
            return $this
                ->addUsingAlias(CommonAgentPeer::ID, $commonExecPiece->getIdAgentCrea(), $comparison);
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
     * @return CommonAgentQuery The current query, for fluid interface
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
     * @return                 CommonAgentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecPieceAvenant($commonExecPieceAvenant, $comparison = null)
    {
        if ($commonExecPieceAvenant instanceof CommonExecPieceAvenant) {
            return $this
                ->addUsingAlias(CommonAgentPeer::ID, $commonExecPieceAvenant->getIdAgentCrea(), $comparison);
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
     * @return CommonAgentQuery The current query, for fluid interface
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
     * @return                 CommonAgentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecPieceContrat($commonExecPieceContrat, $comparison = null)
    {
        if ($commonExecPieceContrat instanceof CommonExecPieceContrat) {
            return $this
                ->addUsingAlias(CommonAgentPeer::ID, $commonExecPieceContrat->getIdAgentCrea(), $comparison);
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
     * @return CommonAgentQuery The current query, for fluid interface
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
     * @return                 CommonAgentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecPieceDossierpaiement($commonExecPieceDossierpaiement, $comparison = null)
    {
        if ($commonExecPieceDossierpaiement instanceof CommonExecPieceDossierpaiement) {
            return $this
                ->addUsingAlias(CommonAgentPeer::ID, $commonExecPieceDossierpaiement->getIdAgentCreat(), $comparison);
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
     * @return CommonAgentQuery The current query, for fluid interface
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
     * @return                 CommonAgentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecPieceEvenement($commonExecPieceEvenement, $comparison = null)
    {
        if ($commonExecPieceEvenement instanceof CommonExecPieceEvenement) {
            return $this
                ->addUsingAlias(CommonAgentPeer::ID, $commonExecPieceEvenement->getIdAgentCrea(), $comparison);
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
     * @return CommonAgentQuery The current query, for fluid interface
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
     * @return                 CommonAgentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecPieceFacture($commonExecPieceFacture, $comparison = null)
    {
        if ($commonExecPieceFacture instanceof CommonExecPieceFacture) {
            return $this
                ->addUsingAlias(CommonAgentPeer::ID, $commonExecPieceFacture->getIdAgentCrea(), $comparison);
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
     * @return CommonAgentQuery The current query, for fluid interface
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
     * @return                 CommonAgentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecPrixRelatedByIdAgentCrea($commonExecPrix, $comparison = null)
    {
        if ($commonExecPrix instanceof CommonExecPrix) {
            return $this
                ->addUsingAlias(CommonAgentPeer::ID, $commonExecPrix->getIdAgentCrea(), $comparison);
        } elseif ($commonExecPrix instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecPrixRelatedByIdAgentCreaQuery()
                ->filterByPrimaryKeys($commonExecPrix->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecPrixRelatedByIdAgentCrea() only accepts arguments of type CommonExecPrix or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecPrixRelatedByIdAgentCrea relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function joinCommonExecPrixRelatedByIdAgentCrea($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecPrixRelatedByIdAgentCrea');

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
            $this->addJoinObject($join, 'CommonExecPrixRelatedByIdAgentCrea');
        }

        return $this;
    }

    /**
     * Use the CommonExecPrixRelatedByIdAgentCrea relation CommonExecPrix object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecPrixQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecPrixRelatedByIdAgentCreaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecPrixRelatedByIdAgentCrea($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecPrixRelatedByIdAgentCrea', 'CommonExecPrixQuery');
    }

    /**
     * Filter the query by a related CommonExecPrix object
     *
     * @param   CommonExecPrix|PropelObjectCollection $commonExecPrix  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAgentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecPrixRelatedByIdAgentModif($commonExecPrix, $comparison = null)
    {
        if ($commonExecPrix instanceof CommonExecPrix) {
            return $this
                ->addUsingAlias(CommonAgentPeer::ID, $commonExecPrix->getIdAgentModif(), $comparison);
        } elseif ($commonExecPrix instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecPrixRelatedByIdAgentModifQuery()
                ->filterByPrimaryKeys($commonExecPrix->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecPrixRelatedByIdAgentModif() only accepts arguments of type CommonExecPrix or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecPrixRelatedByIdAgentModif relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function joinCommonExecPrixRelatedByIdAgentModif($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecPrixRelatedByIdAgentModif');

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
            $this->addJoinObject($join, 'CommonExecPrixRelatedByIdAgentModif');
        }

        return $this;
    }

    /**
     * Use the CommonExecPrixRelatedByIdAgentModif relation CommonExecPrix object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecPrixQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecPrixRelatedByIdAgentModifQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecPrixRelatedByIdAgentModif($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecPrixRelatedByIdAgentModif', 'CommonExecPrixQuery');
    }

    /**
     * Filter the query by a related CommonExecRepartition object
     *
     * @param   CommonExecRepartition|PropelObjectCollection $commonExecRepartition  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAgentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecRepartitionRelatedByIdAgentCrea($commonExecRepartition, $comparison = null)
    {
        if ($commonExecRepartition instanceof CommonExecRepartition) {
            return $this
                ->addUsingAlias(CommonAgentPeer::ID, $commonExecRepartition->getIdAgentCrea(), $comparison);
        } elseif ($commonExecRepartition instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecRepartitionRelatedByIdAgentCreaQuery()
                ->filterByPrimaryKeys($commonExecRepartition->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecRepartitionRelatedByIdAgentCrea() only accepts arguments of type CommonExecRepartition or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecRepartitionRelatedByIdAgentCrea relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function joinCommonExecRepartitionRelatedByIdAgentCrea($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecRepartitionRelatedByIdAgentCrea');

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
            $this->addJoinObject($join, 'CommonExecRepartitionRelatedByIdAgentCrea');
        }

        return $this;
    }

    /**
     * Use the CommonExecRepartitionRelatedByIdAgentCrea relation CommonExecRepartition object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecRepartitionQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecRepartitionRelatedByIdAgentCreaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecRepartitionRelatedByIdAgentCrea($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecRepartitionRelatedByIdAgentCrea', 'CommonExecRepartitionQuery');
    }

    /**
     * Filter the query by a related CommonExecRepartition object
     *
     * @param   CommonExecRepartition|PropelObjectCollection $commonExecRepartition  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAgentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecRepartitionRelatedByIdAgentModif($commonExecRepartition, $comparison = null)
    {
        if ($commonExecRepartition instanceof CommonExecRepartition) {
            return $this
                ->addUsingAlias(CommonAgentPeer::ID, $commonExecRepartition->getIdAgentModif(), $comparison);
        } elseif ($commonExecRepartition instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecRepartitionRelatedByIdAgentModifQuery()
                ->filterByPrimaryKeys($commonExecRepartition->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecRepartitionRelatedByIdAgentModif() only accepts arguments of type CommonExecRepartition or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecRepartitionRelatedByIdAgentModif relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function joinCommonExecRepartitionRelatedByIdAgentModif($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecRepartitionRelatedByIdAgentModif');

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
            $this->addJoinObject($join, 'CommonExecRepartitionRelatedByIdAgentModif');
        }

        return $this;
    }

    /**
     * Use the CommonExecRepartitionRelatedByIdAgentModif relation CommonExecRepartition object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecRepartitionQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecRepartitionRelatedByIdAgentModifQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecRepartitionRelatedByIdAgentModif($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecRepartitionRelatedByIdAgentModif', 'CommonExecRepartitionQuery');
    }

    /**
     * Filter the query by a related CommonResultatAnalyseHistorique object
     *
     * @param   CommonResultatAnalyseHistorique|PropelObjectCollection $commonResultatAnalyseHistorique  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAgentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonResultatAnalyseHistorique($commonResultatAnalyseHistorique, $comparison = null)
    {
        if ($commonResultatAnalyseHistorique instanceof CommonResultatAnalyseHistorique) {
            return $this
                ->addUsingAlias(CommonAgentPeer::ID, $commonResultatAnalyseHistorique->getAgentId(), $comparison);
        } elseif ($commonResultatAnalyseHistorique instanceof PropelObjectCollection) {
            return $this
                ->useCommonResultatAnalyseHistoriqueQuery()
                ->filterByPrimaryKeys($commonResultatAnalyseHistorique->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonResultatAnalyseHistorique() only accepts arguments of type CommonResultatAnalyseHistorique or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonResultatAnalyseHistorique relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function joinCommonResultatAnalyseHistorique($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonResultatAnalyseHistorique');

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
            $this->addJoinObject($join, 'CommonResultatAnalyseHistorique');
        }

        return $this;
    }

    /**
     * Use the CommonResultatAnalyseHistorique relation CommonResultatAnalyseHistorique object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonResultatAnalyseHistoriqueQuery A secondary query class using the current class as primary query
     */
    public function useCommonResultatAnalyseHistoriqueQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonResultatAnalyseHistorique($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonResultatAnalyseHistorique', 'CommonResultatAnalyseHistoriqueQuery');
    }

    /**
     * Filter the query by a related CommonTCAOCommissionAgent object
     *
     * @param   CommonTCAOCommissionAgent|PropelObjectCollection $commonTCAOCommissionAgent  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAgentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTCAOCommissionAgent($commonTCAOCommissionAgent, $comparison = null)
    {
        if ($commonTCAOCommissionAgent instanceof CommonTCAOCommissionAgent) {
            return $this
                ->addUsingAlias(CommonAgentPeer::ID, $commonTCAOCommissionAgent->getIdAgent(), $comparison);
        } elseif ($commonTCAOCommissionAgent instanceof PropelObjectCollection) {
            return $this
                ->useCommonTCAOCommissionAgentQuery()
                ->filterByPrimaryKeys($commonTCAOCommissionAgent->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonTCAOCommissionAgent() only accepts arguments of type CommonTCAOCommissionAgent or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTCAOCommissionAgent relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function joinCommonTCAOCommissionAgent($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTCAOCommissionAgent');

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
            $this->addJoinObject($join, 'CommonTCAOCommissionAgent');
        }

        return $this;
    }

    /**
     * Use the CommonTCAOCommissionAgent relation CommonTCAOCommissionAgent object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTCAOCommissionAgentQuery A secondary query class using the current class as primary query
     */
    public function useCommonTCAOCommissionAgentQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonTCAOCommissionAgent($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTCAOCommissionAgent', 'CommonTCAOCommissionAgentQuery');
    }

    /**
     * Filter the query by a related CommonTCAOSeanceAgent object
     *
     * @param   CommonTCAOSeanceAgent|PropelObjectCollection $commonTCAOSeanceAgent  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAgentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTCAOSeanceAgent($commonTCAOSeanceAgent, $comparison = null)
    {
        if ($commonTCAOSeanceAgent instanceof CommonTCAOSeanceAgent) {
            return $this
                ->addUsingAlias(CommonAgentPeer::ID, $commonTCAOSeanceAgent->getIdAgent(), $comparison);
        } elseif ($commonTCAOSeanceAgent instanceof PropelObjectCollection) {
            return $this
                ->useCommonTCAOSeanceAgentQuery()
                ->filterByPrimaryKeys($commonTCAOSeanceAgent->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonTCAOSeanceAgent() only accepts arguments of type CommonTCAOSeanceAgent or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTCAOSeanceAgent relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function joinCommonTCAOSeanceAgent($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTCAOSeanceAgent');

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
            $this->addJoinObject($join, 'CommonTCAOSeanceAgent');
        }

        return $this;
    }

    /**
     * Use the CommonTCAOSeanceAgent relation CommonTCAOSeanceAgent object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTCAOSeanceAgentQuery A secondary query class using the current class as primary query
     */
    public function useCommonTCAOSeanceAgentQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonTCAOSeanceAgent($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTCAOSeanceAgent', 'CommonTCAOSeanceAgentQuery');
    }

    /**
     * Filter the query by a related CommonTCAOSeanceInvite object
     *
     * @param   CommonTCAOSeanceInvite|PropelObjectCollection $commonTCAOSeanceInvite  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAgentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTCAOSeanceInvite($commonTCAOSeanceInvite, $comparison = null)
    {
        if ($commonTCAOSeanceInvite instanceof CommonTCAOSeanceInvite) {
            return $this
                ->addUsingAlias(CommonAgentPeer::ID, $commonTCAOSeanceInvite->getIdAgent(), $comparison);
        } elseif ($commonTCAOSeanceInvite instanceof PropelObjectCollection) {
            return $this
                ->useCommonTCAOSeanceInviteQuery()
                ->filterByPrimaryKeys($commonTCAOSeanceInvite->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonTCAOSeanceInvite() only accepts arguments of type CommonTCAOSeanceInvite or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTCAOSeanceInvite relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function joinCommonTCAOSeanceInvite($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTCAOSeanceInvite');

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
            $this->addJoinObject($join, 'CommonTCAOSeanceInvite');
        }

        return $this;
    }

    /**
     * Use the CommonTCAOSeanceInvite relation CommonTCAOSeanceInvite object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTCAOSeanceInviteQuery A secondary query class using the current class as primary query
     */
    public function useCommonTCAOSeanceInviteQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonTCAOSeanceInvite($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTCAOSeanceInvite', 'CommonTCAOSeanceInviteQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonAgent $commonAgent Object to remove from the list of results
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function prune($commonAgent = null)
    {
        if ($commonAgent) {
            $this->addUsingAlias(CommonAgentPeer::ID, $commonAgent->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
