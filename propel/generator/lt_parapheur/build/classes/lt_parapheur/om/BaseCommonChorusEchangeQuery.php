<?php


/**
 * Base class that represents a query for the 'Chorus_echange' table.
 *
 * 
 *
 * @method CommonChorusEchangeQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonChorusEchangeQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonChorusEchangeQuery orderByIdDecision($order = Criteria::ASC) Order by the id_decision column
 * @method CommonChorusEchangeQuery orderByNumOrdre($order = Criteria::ASC) Order by the num_ordre column
 * @method CommonChorusEchangeQuery orderByNomCreateur($order = Criteria::ASC) Order by the nom_createur column
 * @method CommonChorusEchangeQuery orderByPrenomCreateur($order = Criteria::ASC) Order by the prenom_createur column
 * @method CommonChorusEchangeQuery orderByIdCreateur($order = Criteria::ASC) Order by the id_createur column
 * @method CommonChorusEchangeQuery orderByStatutechange($order = Criteria::ASC) Order by the statutEchange column
 * @method CommonChorusEchangeQuery orderByDateCreation($order = Criteria::ASC) Order by the date_creation column
 * @method CommonChorusEchangeQuery orderByDateEnvoi($order = Criteria::ASC) Order by the date_envoi column
 * @method CommonChorusEchangeQuery orderByRetourChorus($order = Criteria::ASC) Order by the retour_chorus column
 * @method CommonChorusEchangeQuery orderByIdEjAppliExt($order = Criteria::ASC) Order by the id_ej_appli_ext column
 * @method CommonChorusEchangeQuery orderByIdOa($order = Criteria::ASC) Order by the id_oa column
 * @method CommonChorusEchangeQuery orderByIdGa($order = Criteria::ASC) Order by the id_ga column
 * @method CommonChorusEchangeQuery orderByIdTypeMarche($order = Criteria::ASC) Order by the id_type_marche column
 * @method CommonChorusEchangeQuery orderByIdTypeGroupement($order = Criteria::ASC) Order by the id_type_groupement column
 * @method CommonChorusEchangeQuery orderByIdRegroupementComptable($order = Criteria::ASC) Order by the id_regroupement_comptable column
 * @method CommonChorusEchangeQuery orderByDceItems($order = Criteria::ASC) Order by the dce_items column
 * @method CommonChorusEchangeQuery orderByIdsEnvAe($order = Criteria::ASC) Order by the ids_env_ae column
 * @method CommonChorusEchangeQuery orderByIdsEnvItems($order = Criteria::ASC) Order by the ids_env_items column
 * @method CommonChorusEchangeQuery orderByIdsPiecesExternes($order = Criteria::ASC) Order by the ids_pieces_externes column
 * @method CommonChorusEchangeQuery orderByIdAgentEnvoi($order = Criteria::ASC) Order by the id_agent_envoi column
 * @method CommonChorusEchangeQuery orderByNomAgent($order = Criteria::ASC) Order by the nom_agent column
 * @method CommonChorusEchangeQuery orderByPrenomAgent($order = Criteria::ASC) Order by the prenom_agent column
 * @method CommonChorusEchangeQuery orderBySignace($order = Criteria::ASC) Order by the signACE column
 * @method CommonChorusEchangeQuery orderBySiren($order = Criteria::ASC) Order by the siren column
 * @method CommonChorusEchangeQuery orderBySiret($order = Criteria::ASC) Order by the siret column
 * @method CommonChorusEchangeQuery orderByDateNotification($order = Criteria::ASC) Order by the date_notification column
 * @method CommonChorusEchangeQuery orderByDateFinMarche($order = Criteria::ASC) Order by the date_fin_marche column
 * @method CommonChorusEchangeQuery orderByIdActeJuridique($order = Criteria::ASC) Order by the id_acte_juridique column
 * @method CommonChorusEchangeQuery orderByCpv1($order = Criteria::ASC) Order by the cpv_1 column
 * @method CommonChorusEchangeQuery orderByCpv2($order = Criteria::ASC) Order by the cpv_2 column
 * @method CommonChorusEchangeQuery orderByCpv3($order = Criteria::ASC) Order by the cpv_3 column
 * @method CommonChorusEchangeQuery orderByCpv4($order = Criteria::ASC) Order by the cpv_4 column
 * @method CommonChorusEchangeQuery orderByIdTypeProcedure($order = Criteria::ASC) Order by the id_type_procedure column
 * @method CommonChorusEchangeQuery orderByIdFormePrix($order = Criteria::ASC) Order by the id_forme_prix column
 * @method CommonChorusEchangeQuery orderByNbrEntreprisesCotraitantes($order = Criteria::ASC) Order by the Nbr_entreprises_cotraitantes column
 * @method CommonChorusEchangeQuery orderBySousTraitanceDeclaree($order = Criteria::ASC) Order by the sous_traitance_declaree column
 * @method CommonChorusEchangeQuery orderByCarteAchat($order = Criteria::ASC) Order by the carte_achat column
 * @method CommonChorusEchangeQuery orderByClauseSociale($order = Criteria::ASC) Order by the clause_sociale column
 * @method CommonChorusEchangeQuery orderByClauseEnvironnementale($order = Criteria::ASC) Order by the clause_environnementale column
 * @method CommonChorusEchangeQuery orderByNbrPropositionRecues($order = Criteria::ASC) Order by the Nbr_proposition_recues column
 * @method CommonChorusEchangeQuery orderByNbrPropositionDematerialisees($order = Criteria::ASC) Order by the Nbr_proposition_dematerialisees column
 * @method CommonChorusEchangeQuery orderByNomFichier($order = Criteria::ASC) Order by the nom_fichier column
 * @method CommonChorusEchangeQuery orderByErreurRejet($order = Criteria::ASC) Order by the erreur_rejet column
 * @method CommonChorusEchangeQuery orderByCodeCpvLibelle1($order = Criteria::ASC) Order by the code_cpv_libelle1 column
 * @method CommonChorusEchangeQuery orderByCodeCpvLibelle2($order = Criteria::ASC) Order by the code_cpv_libelle2 column
 * @method CommonChorusEchangeQuery orderByCodeCpvLibelle3($order = Criteria::ASC) Order by the code_cpv_libelle3 column
 * @method CommonChorusEchangeQuery orderByCodeCpvLibelle4($order = Criteria::ASC) Order by the code_cpv_libelle4 column
 * @method CommonChorusEchangeQuery orderByPiecesNotifItems($order = Criteria::ASC) Order by the pieces_notif_items column
 * @method CommonChorusEchangeQuery orderByIdsBlobEnv($order = Criteria::ASC) Order by the ids_blob_env column
 * @method CommonChorusEchangeQuery orderByIdsEnvSignItems($order = Criteria::ASC) Order by the ids_env_sign_items column
 * @method CommonChorusEchangeQuery orderByIdsBlobSignEnv($order = Criteria::ASC) Order by the ids_blob_sign_env column
 * @method CommonChorusEchangeQuery orderByMontantHt($order = Criteria::ASC) Order by the montant_ht column
 * @method CommonChorusEchangeQuery orderByCodePaysTitulaire($order = Criteria::ASC) Order by the code_pays_titulaire column
 * @method CommonChorusEchangeQuery orderByNumeroSiretTitulaire($order = Criteria::ASC) Order by the numero_siret_titulaire column
 * @method CommonChorusEchangeQuery orderByNumeroSirenTitulaire($order = Criteria::ASC) Order by the numero_siren_titulaire column
 * @method CommonChorusEchangeQuery orderByCodesPaysCoTitulaire($order = Criteria::ASC) Order by the Codes_pays_co_titulaire column
 * @method CommonChorusEchangeQuery orderByNumeroSiretCoTitulaire($order = Criteria::ASC) Order by the numero_siret_co_titulaire column
 * @method CommonChorusEchangeQuery orderByNumeroSirenCoTitulaire($order = Criteria::ASC) Order by the numero_siren_co_titulaire column
 * @method CommonChorusEchangeQuery orderByCcagReference($order = Criteria::ASC) Order by the CCAG_reference column
 * @method CommonChorusEchangeQuery orderByPourcentageAvance($order = Criteria::ASC) Order by the pourcentage_avance column
 * @method CommonChorusEchangeQuery orderByTypeAvance($order = Criteria::ASC) Order by the type_avance column
 * @method CommonChorusEchangeQuery orderByConditionsPaiement($order = Criteria::ASC) Order by the conditions_paiement column
 * @method CommonChorusEchangeQuery orderByIdentifiantAccordCadre($order = Criteria::ASC) Order by the identifiant_accord_cadre column
 * @method CommonChorusEchangeQuery orderByDateNotificationReelle($order = Criteria::ASC) Order by the date_notification_reelle column
 * @method CommonChorusEchangeQuery orderByDateFinMarcheReelle($order = Criteria::ASC) Order by the date_fin_marche_reelle column
 * @method CommonChorusEchangeQuery orderByIdsRapportSignature($order = Criteria::ASC) Order by the ids_rapport_signature column
 *
 * @method CommonChorusEchangeQuery groupById() Group by the id column
 * @method CommonChorusEchangeQuery groupByOrganisme() Group by the organisme column
 * @method CommonChorusEchangeQuery groupByIdDecision() Group by the id_decision column
 * @method CommonChorusEchangeQuery groupByNumOrdre() Group by the num_ordre column
 * @method CommonChorusEchangeQuery groupByNomCreateur() Group by the nom_createur column
 * @method CommonChorusEchangeQuery groupByPrenomCreateur() Group by the prenom_createur column
 * @method CommonChorusEchangeQuery groupByIdCreateur() Group by the id_createur column
 * @method CommonChorusEchangeQuery groupByStatutechange() Group by the statutEchange column
 * @method CommonChorusEchangeQuery groupByDateCreation() Group by the date_creation column
 * @method CommonChorusEchangeQuery groupByDateEnvoi() Group by the date_envoi column
 * @method CommonChorusEchangeQuery groupByRetourChorus() Group by the retour_chorus column
 * @method CommonChorusEchangeQuery groupByIdEjAppliExt() Group by the id_ej_appli_ext column
 * @method CommonChorusEchangeQuery groupByIdOa() Group by the id_oa column
 * @method CommonChorusEchangeQuery groupByIdGa() Group by the id_ga column
 * @method CommonChorusEchangeQuery groupByIdTypeMarche() Group by the id_type_marche column
 * @method CommonChorusEchangeQuery groupByIdTypeGroupement() Group by the id_type_groupement column
 * @method CommonChorusEchangeQuery groupByIdRegroupementComptable() Group by the id_regroupement_comptable column
 * @method CommonChorusEchangeQuery groupByDceItems() Group by the dce_items column
 * @method CommonChorusEchangeQuery groupByIdsEnvAe() Group by the ids_env_ae column
 * @method CommonChorusEchangeQuery groupByIdsEnvItems() Group by the ids_env_items column
 * @method CommonChorusEchangeQuery groupByIdsPiecesExternes() Group by the ids_pieces_externes column
 * @method CommonChorusEchangeQuery groupByIdAgentEnvoi() Group by the id_agent_envoi column
 * @method CommonChorusEchangeQuery groupByNomAgent() Group by the nom_agent column
 * @method CommonChorusEchangeQuery groupByPrenomAgent() Group by the prenom_agent column
 * @method CommonChorusEchangeQuery groupBySignace() Group by the signACE column
 * @method CommonChorusEchangeQuery groupBySiren() Group by the siren column
 * @method CommonChorusEchangeQuery groupBySiret() Group by the siret column
 * @method CommonChorusEchangeQuery groupByDateNotification() Group by the date_notification column
 * @method CommonChorusEchangeQuery groupByDateFinMarche() Group by the date_fin_marche column
 * @method CommonChorusEchangeQuery groupByIdActeJuridique() Group by the id_acte_juridique column
 * @method CommonChorusEchangeQuery groupByCpv1() Group by the cpv_1 column
 * @method CommonChorusEchangeQuery groupByCpv2() Group by the cpv_2 column
 * @method CommonChorusEchangeQuery groupByCpv3() Group by the cpv_3 column
 * @method CommonChorusEchangeQuery groupByCpv4() Group by the cpv_4 column
 * @method CommonChorusEchangeQuery groupByIdTypeProcedure() Group by the id_type_procedure column
 * @method CommonChorusEchangeQuery groupByIdFormePrix() Group by the id_forme_prix column
 * @method CommonChorusEchangeQuery groupByNbrEntreprisesCotraitantes() Group by the Nbr_entreprises_cotraitantes column
 * @method CommonChorusEchangeQuery groupBySousTraitanceDeclaree() Group by the sous_traitance_declaree column
 * @method CommonChorusEchangeQuery groupByCarteAchat() Group by the carte_achat column
 * @method CommonChorusEchangeQuery groupByClauseSociale() Group by the clause_sociale column
 * @method CommonChorusEchangeQuery groupByClauseEnvironnementale() Group by the clause_environnementale column
 * @method CommonChorusEchangeQuery groupByNbrPropositionRecues() Group by the Nbr_proposition_recues column
 * @method CommonChorusEchangeQuery groupByNbrPropositionDematerialisees() Group by the Nbr_proposition_dematerialisees column
 * @method CommonChorusEchangeQuery groupByNomFichier() Group by the nom_fichier column
 * @method CommonChorusEchangeQuery groupByErreurRejet() Group by the erreur_rejet column
 * @method CommonChorusEchangeQuery groupByCodeCpvLibelle1() Group by the code_cpv_libelle1 column
 * @method CommonChorusEchangeQuery groupByCodeCpvLibelle2() Group by the code_cpv_libelle2 column
 * @method CommonChorusEchangeQuery groupByCodeCpvLibelle3() Group by the code_cpv_libelle3 column
 * @method CommonChorusEchangeQuery groupByCodeCpvLibelle4() Group by the code_cpv_libelle4 column
 * @method CommonChorusEchangeQuery groupByPiecesNotifItems() Group by the pieces_notif_items column
 * @method CommonChorusEchangeQuery groupByIdsBlobEnv() Group by the ids_blob_env column
 * @method CommonChorusEchangeQuery groupByIdsEnvSignItems() Group by the ids_env_sign_items column
 * @method CommonChorusEchangeQuery groupByIdsBlobSignEnv() Group by the ids_blob_sign_env column
 * @method CommonChorusEchangeQuery groupByMontantHt() Group by the montant_ht column
 * @method CommonChorusEchangeQuery groupByCodePaysTitulaire() Group by the code_pays_titulaire column
 * @method CommonChorusEchangeQuery groupByNumeroSiretTitulaire() Group by the numero_siret_titulaire column
 * @method CommonChorusEchangeQuery groupByNumeroSirenTitulaire() Group by the numero_siren_titulaire column
 * @method CommonChorusEchangeQuery groupByCodesPaysCoTitulaire() Group by the Codes_pays_co_titulaire column
 * @method CommonChorusEchangeQuery groupByNumeroSiretCoTitulaire() Group by the numero_siret_co_titulaire column
 * @method CommonChorusEchangeQuery groupByNumeroSirenCoTitulaire() Group by the numero_siren_co_titulaire column
 * @method CommonChorusEchangeQuery groupByCcagReference() Group by the CCAG_reference column
 * @method CommonChorusEchangeQuery groupByPourcentageAvance() Group by the pourcentage_avance column
 * @method CommonChorusEchangeQuery groupByTypeAvance() Group by the type_avance column
 * @method CommonChorusEchangeQuery groupByConditionsPaiement() Group by the conditions_paiement column
 * @method CommonChorusEchangeQuery groupByIdentifiantAccordCadre() Group by the identifiant_accord_cadre column
 * @method CommonChorusEchangeQuery groupByDateNotificationReelle() Group by the date_notification_reelle column
 * @method CommonChorusEchangeQuery groupByDateFinMarcheReelle() Group by the date_fin_marche_reelle column
 * @method CommonChorusEchangeQuery groupByIdsRapportSignature() Group by the ids_rapport_signature column
 *
 * @method CommonChorusEchangeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonChorusEchangeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonChorusEchangeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonChorusEchange findOne(PropelPDO $con = null) Return the first CommonChorusEchange matching the query
 * @method CommonChorusEchange findOneOrCreate(PropelPDO $con = null) Return the first CommonChorusEchange matching the query, or a new CommonChorusEchange object populated from the query conditions when no match is found
 *
 * @method CommonChorusEchange findOneById(int $id) Return the first CommonChorusEchange filtered by the id column
 * @method CommonChorusEchange findOneByOrganisme(string $organisme) Return the first CommonChorusEchange filtered by the organisme column
 * @method CommonChorusEchange findOneByIdDecision(int $id_decision) Return the first CommonChorusEchange filtered by the id_decision column
 * @method CommonChorusEchange findOneByNumOrdre(string $num_ordre) Return the first CommonChorusEchange filtered by the num_ordre column
 * @method CommonChorusEchange findOneByNomCreateur(string $nom_createur) Return the first CommonChorusEchange filtered by the nom_createur column
 * @method CommonChorusEchange findOneByPrenomCreateur(string $prenom_createur) Return the first CommonChorusEchange filtered by the prenom_createur column
 * @method CommonChorusEchange findOneByIdCreateur(int $id_createur) Return the first CommonChorusEchange filtered by the id_createur column
 * @method CommonChorusEchange findOneByStatutechange(string $statutEchange) Return the first CommonChorusEchange filtered by the statutEchange column
 * @method CommonChorusEchange findOneByDateCreation(string $date_creation) Return the first CommonChorusEchange filtered by the date_creation column
 * @method CommonChorusEchange findOneByDateEnvoi(string $date_envoi) Return the first CommonChorusEchange filtered by the date_envoi column
 * @method CommonChorusEchange findOneByRetourChorus(string $retour_chorus) Return the first CommonChorusEchange filtered by the retour_chorus column
 * @method CommonChorusEchange findOneByIdEjAppliExt(string $id_ej_appli_ext) Return the first CommonChorusEchange filtered by the id_ej_appli_ext column
 * @method CommonChorusEchange findOneByIdOa(int $id_oa) Return the first CommonChorusEchange filtered by the id_oa column
 * @method CommonChorusEchange findOneByIdGa(int $id_ga) Return the first CommonChorusEchange filtered by the id_ga column
 * @method CommonChorusEchange findOneByIdTypeMarche(int $id_type_marche) Return the first CommonChorusEchange filtered by the id_type_marche column
 * @method CommonChorusEchange findOneByIdTypeGroupement(string $id_type_groupement) Return the first CommonChorusEchange filtered by the id_type_groupement column
 * @method CommonChorusEchange findOneByIdRegroupementComptable(string $id_regroupement_comptable) Return the first CommonChorusEchange filtered by the id_regroupement_comptable column
 * @method CommonChorusEchange findOneByDceItems(string $dce_items) Return the first CommonChorusEchange filtered by the dce_items column
 * @method CommonChorusEchange findOneByIdsEnvAe(string $ids_env_ae) Return the first CommonChorusEchange filtered by the ids_env_ae column
 * @method CommonChorusEchange findOneByIdsEnvItems(string $ids_env_items) Return the first CommonChorusEchange filtered by the ids_env_items column
 * @method CommonChorusEchange findOneByIdsPiecesExternes(string $ids_pieces_externes) Return the first CommonChorusEchange filtered by the ids_pieces_externes column
 * @method CommonChorusEchange findOneByIdAgentEnvoi(int $id_agent_envoi) Return the first CommonChorusEchange filtered by the id_agent_envoi column
 * @method CommonChorusEchange findOneByNomAgent(string $nom_agent) Return the first CommonChorusEchange filtered by the nom_agent column
 * @method CommonChorusEchange findOneByPrenomAgent(string $prenom_agent) Return the first CommonChorusEchange filtered by the prenom_agent column
 * @method CommonChorusEchange findOneBySignace(string $signACE) Return the first CommonChorusEchange filtered by the signACE column
 * @method CommonChorusEchange findOneBySiren(string $siren) Return the first CommonChorusEchange filtered by the siren column
 * @method CommonChorusEchange findOneBySiret(string $siret) Return the first CommonChorusEchange filtered by the siret column
 * @method CommonChorusEchange findOneByDateNotification(string $date_notification) Return the first CommonChorusEchange filtered by the date_notification column
 * @method CommonChorusEchange findOneByDateFinMarche(string $date_fin_marche) Return the first CommonChorusEchange filtered by the date_fin_marche column
 * @method CommonChorusEchange findOneByIdActeJuridique(string $id_acte_juridique) Return the first CommonChorusEchange filtered by the id_acte_juridique column
 * @method CommonChorusEchange findOneByCpv1(string $cpv_1) Return the first CommonChorusEchange filtered by the cpv_1 column
 * @method CommonChorusEchange findOneByCpv2(string $cpv_2) Return the first CommonChorusEchange filtered by the cpv_2 column
 * @method CommonChorusEchange findOneByCpv3(string $cpv_3) Return the first CommonChorusEchange filtered by the cpv_3 column
 * @method CommonChorusEchange findOneByCpv4(string $cpv_4) Return the first CommonChorusEchange filtered by the cpv_4 column
 * @method CommonChorusEchange findOneByIdTypeProcedure(int $id_type_procedure) Return the first CommonChorusEchange filtered by the id_type_procedure column
 * @method CommonChorusEchange findOneByIdFormePrix(string $id_forme_prix) Return the first CommonChorusEchange filtered by the id_forme_prix column
 * @method CommonChorusEchange findOneByNbrEntreprisesCotraitantes(string $Nbr_entreprises_cotraitantes) Return the first CommonChorusEchange filtered by the Nbr_entreprises_cotraitantes column
 * @method CommonChorusEchange findOneBySousTraitanceDeclaree(string $sous_traitance_declaree) Return the first CommonChorusEchange filtered by the sous_traitance_declaree column
 * @method CommonChorusEchange findOneByCarteAchat(string $carte_achat) Return the first CommonChorusEchange filtered by the carte_achat column
 * @method CommonChorusEchange findOneByClauseSociale(string $clause_sociale) Return the first CommonChorusEchange filtered by the clause_sociale column
 * @method CommonChorusEchange findOneByClauseEnvironnementale(string $clause_environnementale) Return the first CommonChorusEchange filtered by the clause_environnementale column
 * @method CommonChorusEchange findOneByNbrPropositionRecues(string $Nbr_proposition_recues) Return the first CommonChorusEchange filtered by the Nbr_proposition_recues column
 * @method CommonChorusEchange findOneByNbrPropositionDematerialisees(string $Nbr_proposition_dematerialisees) Return the first CommonChorusEchange filtered by the Nbr_proposition_dematerialisees column
 * @method CommonChorusEchange findOneByNomFichier(string $nom_fichier) Return the first CommonChorusEchange filtered by the nom_fichier column
 * @method CommonChorusEchange findOneByErreurRejet(string $erreur_rejet) Return the first CommonChorusEchange filtered by the erreur_rejet column
 * @method CommonChorusEchange findOneByCodeCpvLibelle1(string $code_cpv_libelle1) Return the first CommonChorusEchange filtered by the code_cpv_libelle1 column
 * @method CommonChorusEchange findOneByCodeCpvLibelle2(string $code_cpv_libelle2) Return the first CommonChorusEchange filtered by the code_cpv_libelle2 column
 * @method CommonChorusEchange findOneByCodeCpvLibelle3(string $code_cpv_libelle3) Return the first CommonChorusEchange filtered by the code_cpv_libelle3 column
 * @method CommonChorusEchange findOneByCodeCpvLibelle4(string $code_cpv_libelle4) Return the first CommonChorusEchange filtered by the code_cpv_libelle4 column
 * @method CommonChorusEchange findOneByPiecesNotifItems(string $pieces_notif_items) Return the first CommonChorusEchange filtered by the pieces_notif_items column
 * @method CommonChorusEchange findOneByIdsBlobEnv(string $ids_blob_env) Return the first CommonChorusEchange filtered by the ids_blob_env column
 * @method CommonChorusEchange findOneByIdsEnvSignItems(string $ids_env_sign_items) Return the first CommonChorusEchange filtered by the ids_env_sign_items column
 * @method CommonChorusEchange findOneByIdsBlobSignEnv(string $ids_blob_sign_env) Return the first CommonChorusEchange filtered by the ids_blob_sign_env column
 * @method CommonChorusEchange findOneByMontantHt(string $montant_ht) Return the first CommonChorusEchange filtered by the montant_ht column
 * @method CommonChorusEchange findOneByCodePaysTitulaire(string $code_pays_titulaire) Return the first CommonChorusEchange filtered by the code_pays_titulaire column
 * @method CommonChorusEchange findOneByNumeroSiretTitulaire(string $numero_siret_titulaire) Return the first CommonChorusEchange filtered by the numero_siret_titulaire column
 * @method CommonChorusEchange findOneByNumeroSirenTitulaire(string $numero_siren_titulaire) Return the first CommonChorusEchange filtered by the numero_siren_titulaire column
 * @method CommonChorusEchange findOneByCodesPaysCoTitulaire(string $Codes_pays_co_titulaire) Return the first CommonChorusEchange filtered by the Codes_pays_co_titulaire column
 * @method CommonChorusEchange findOneByNumeroSiretCoTitulaire(string $numero_siret_co_titulaire) Return the first CommonChorusEchange filtered by the numero_siret_co_titulaire column
 * @method CommonChorusEchange findOneByNumeroSirenCoTitulaire(string $numero_siren_co_titulaire) Return the first CommonChorusEchange filtered by the numero_siren_co_titulaire column
 * @method CommonChorusEchange findOneByCcagReference(string $CCAG_reference) Return the first CommonChorusEchange filtered by the CCAG_reference column
 * @method CommonChorusEchange findOneByPourcentageAvance(string $pourcentage_avance) Return the first CommonChorusEchange filtered by the pourcentage_avance column
 * @method CommonChorusEchange findOneByTypeAvance(string $type_avance) Return the first CommonChorusEchange filtered by the type_avance column
 * @method CommonChorusEchange findOneByConditionsPaiement(string $conditions_paiement) Return the first CommonChorusEchange filtered by the conditions_paiement column
 * @method CommonChorusEchange findOneByIdentifiantAccordCadre(string $identifiant_accord_cadre) Return the first CommonChorusEchange filtered by the identifiant_accord_cadre column
 * @method CommonChorusEchange findOneByDateNotificationReelle(string $date_notification_reelle) Return the first CommonChorusEchange filtered by the date_notification_reelle column
 * @method CommonChorusEchange findOneByDateFinMarcheReelle(string $date_fin_marche_reelle) Return the first CommonChorusEchange filtered by the date_fin_marche_reelle column
 * @method CommonChorusEchange findOneByIdsRapportSignature(string $ids_rapport_signature) Return the first CommonChorusEchange filtered by the ids_rapport_signature column
 *
 * @method array findById(int $id) Return CommonChorusEchange objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonChorusEchange objects filtered by the organisme column
 * @method array findByIdDecision(int $id_decision) Return CommonChorusEchange objects filtered by the id_decision column
 * @method array findByNumOrdre(string $num_ordre) Return CommonChorusEchange objects filtered by the num_ordre column
 * @method array findByNomCreateur(string $nom_createur) Return CommonChorusEchange objects filtered by the nom_createur column
 * @method array findByPrenomCreateur(string $prenom_createur) Return CommonChorusEchange objects filtered by the prenom_createur column
 * @method array findByIdCreateur(int $id_createur) Return CommonChorusEchange objects filtered by the id_createur column
 * @method array findByStatutechange(string $statutEchange) Return CommonChorusEchange objects filtered by the statutEchange column
 * @method array findByDateCreation(string $date_creation) Return CommonChorusEchange objects filtered by the date_creation column
 * @method array findByDateEnvoi(string $date_envoi) Return CommonChorusEchange objects filtered by the date_envoi column
 * @method array findByRetourChorus(string $retour_chorus) Return CommonChorusEchange objects filtered by the retour_chorus column
 * @method array findByIdEjAppliExt(string $id_ej_appli_ext) Return CommonChorusEchange objects filtered by the id_ej_appli_ext column
 * @method array findByIdOa(int $id_oa) Return CommonChorusEchange objects filtered by the id_oa column
 * @method array findByIdGa(int $id_ga) Return CommonChorusEchange objects filtered by the id_ga column
 * @method array findByIdTypeMarche(int $id_type_marche) Return CommonChorusEchange objects filtered by the id_type_marche column
 * @method array findByIdTypeGroupement(string $id_type_groupement) Return CommonChorusEchange objects filtered by the id_type_groupement column
 * @method array findByIdRegroupementComptable(string $id_regroupement_comptable) Return CommonChorusEchange objects filtered by the id_regroupement_comptable column
 * @method array findByDceItems(string $dce_items) Return CommonChorusEchange objects filtered by the dce_items column
 * @method array findByIdsEnvAe(string $ids_env_ae) Return CommonChorusEchange objects filtered by the ids_env_ae column
 * @method array findByIdsEnvItems(string $ids_env_items) Return CommonChorusEchange objects filtered by the ids_env_items column
 * @method array findByIdsPiecesExternes(string $ids_pieces_externes) Return CommonChorusEchange objects filtered by the ids_pieces_externes column
 * @method array findByIdAgentEnvoi(int $id_agent_envoi) Return CommonChorusEchange objects filtered by the id_agent_envoi column
 * @method array findByNomAgent(string $nom_agent) Return CommonChorusEchange objects filtered by the nom_agent column
 * @method array findByPrenomAgent(string $prenom_agent) Return CommonChorusEchange objects filtered by the prenom_agent column
 * @method array findBySignace(string $signACE) Return CommonChorusEchange objects filtered by the signACE column
 * @method array findBySiren(string $siren) Return CommonChorusEchange objects filtered by the siren column
 * @method array findBySiret(string $siret) Return CommonChorusEchange objects filtered by the siret column
 * @method array findByDateNotification(string $date_notification) Return CommonChorusEchange objects filtered by the date_notification column
 * @method array findByDateFinMarche(string $date_fin_marche) Return CommonChorusEchange objects filtered by the date_fin_marche column
 * @method array findByIdActeJuridique(string $id_acte_juridique) Return CommonChorusEchange objects filtered by the id_acte_juridique column
 * @method array findByCpv1(string $cpv_1) Return CommonChorusEchange objects filtered by the cpv_1 column
 * @method array findByCpv2(string $cpv_2) Return CommonChorusEchange objects filtered by the cpv_2 column
 * @method array findByCpv3(string $cpv_3) Return CommonChorusEchange objects filtered by the cpv_3 column
 * @method array findByCpv4(string $cpv_4) Return CommonChorusEchange objects filtered by the cpv_4 column
 * @method array findByIdTypeProcedure(int $id_type_procedure) Return CommonChorusEchange objects filtered by the id_type_procedure column
 * @method array findByIdFormePrix(string $id_forme_prix) Return CommonChorusEchange objects filtered by the id_forme_prix column
 * @method array findByNbrEntreprisesCotraitantes(string $Nbr_entreprises_cotraitantes) Return CommonChorusEchange objects filtered by the Nbr_entreprises_cotraitantes column
 * @method array findBySousTraitanceDeclaree(string $sous_traitance_declaree) Return CommonChorusEchange objects filtered by the sous_traitance_declaree column
 * @method array findByCarteAchat(string $carte_achat) Return CommonChorusEchange objects filtered by the carte_achat column
 * @method array findByClauseSociale(string $clause_sociale) Return CommonChorusEchange objects filtered by the clause_sociale column
 * @method array findByClauseEnvironnementale(string $clause_environnementale) Return CommonChorusEchange objects filtered by the clause_environnementale column
 * @method array findByNbrPropositionRecues(string $Nbr_proposition_recues) Return CommonChorusEchange objects filtered by the Nbr_proposition_recues column
 * @method array findByNbrPropositionDematerialisees(string $Nbr_proposition_dematerialisees) Return CommonChorusEchange objects filtered by the Nbr_proposition_dematerialisees column
 * @method array findByNomFichier(string $nom_fichier) Return CommonChorusEchange objects filtered by the nom_fichier column
 * @method array findByErreurRejet(string $erreur_rejet) Return CommonChorusEchange objects filtered by the erreur_rejet column
 * @method array findByCodeCpvLibelle1(string $code_cpv_libelle1) Return CommonChorusEchange objects filtered by the code_cpv_libelle1 column
 * @method array findByCodeCpvLibelle2(string $code_cpv_libelle2) Return CommonChorusEchange objects filtered by the code_cpv_libelle2 column
 * @method array findByCodeCpvLibelle3(string $code_cpv_libelle3) Return CommonChorusEchange objects filtered by the code_cpv_libelle3 column
 * @method array findByCodeCpvLibelle4(string $code_cpv_libelle4) Return CommonChorusEchange objects filtered by the code_cpv_libelle4 column
 * @method array findByPiecesNotifItems(string $pieces_notif_items) Return CommonChorusEchange objects filtered by the pieces_notif_items column
 * @method array findByIdsBlobEnv(string $ids_blob_env) Return CommonChorusEchange objects filtered by the ids_blob_env column
 * @method array findByIdsEnvSignItems(string $ids_env_sign_items) Return CommonChorusEchange objects filtered by the ids_env_sign_items column
 * @method array findByIdsBlobSignEnv(string $ids_blob_sign_env) Return CommonChorusEchange objects filtered by the ids_blob_sign_env column
 * @method array findByMontantHt(string $montant_ht) Return CommonChorusEchange objects filtered by the montant_ht column
 * @method array findByCodePaysTitulaire(string $code_pays_titulaire) Return CommonChorusEchange objects filtered by the code_pays_titulaire column
 * @method array findByNumeroSiretTitulaire(string $numero_siret_titulaire) Return CommonChorusEchange objects filtered by the numero_siret_titulaire column
 * @method array findByNumeroSirenTitulaire(string $numero_siren_titulaire) Return CommonChorusEchange objects filtered by the numero_siren_titulaire column
 * @method array findByCodesPaysCoTitulaire(string $Codes_pays_co_titulaire) Return CommonChorusEchange objects filtered by the Codes_pays_co_titulaire column
 * @method array findByNumeroSiretCoTitulaire(string $numero_siret_co_titulaire) Return CommonChorusEchange objects filtered by the numero_siret_co_titulaire column
 * @method array findByNumeroSirenCoTitulaire(string $numero_siren_co_titulaire) Return CommonChorusEchange objects filtered by the numero_siren_co_titulaire column
 * @method array findByCcagReference(string $CCAG_reference) Return CommonChorusEchange objects filtered by the CCAG_reference column
 * @method array findByPourcentageAvance(string $pourcentage_avance) Return CommonChorusEchange objects filtered by the pourcentage_avance column
 * @method array findByTypeAvance(string $type_avance) Return CommonChorusEchange objects filtered by the type_avance column
 * @method array findByConditionsPaiement(string $conditions_paiement) Return CommonChorusEchange objects filtered by the conditions_paiement column
 * @method array findByIdentifiantAccordCadre(string $identifiant_accord_cadre) Return CommonChorusEchange objects filtered by the identifiant_accord_cadre column
 * @method array findByDateNotificationReelle(string $date_notification_reelle) Return CommonChorusEchange objects filtered by the date_notification_reelle column
 * @method array findByDateFinMarcheReelle(string $date_fin_marche_reelle) Return CommonChorusEchange objects filtered by the date_fin_marche_reelle column
 * @method array findByIdsRapportSignature(string $ids_rapport_signature) Return CommonChorusEchange objects filtered by the ids_rapport_signature column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonChorusEchangeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonChorusEchangeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonChorusEchange', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonChorusEchangeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonChorusEchangeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonChorusEchangeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonChorusEchangeQuery) {
            return $criteria;
        }
        $query = new CommonChorusEchangeQuery();
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
                         A Primary key composition: [$id, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonChorusEchange|CommonChorusEchange[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonChorusEchangePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonChorusEchangePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonChorusEchange A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `id_decision`, `num_ordre`, `nom_createur`, `prenom_createur`, `id_createur`, `statutEchange`, `date_creation`, `date_envoi`, `retour_chorus`, `id_ej_appli_ext`, `id_oa`, `id_ga`, `id_type_marche`, `id_type_groupement`, `id_regroupement_comptable`, `dce_items`, `ids_env_ae`, `ids_env_items`, `ids_pieces_externes`, `id_agent_envoi`, `nom_agent`, `prenom_agent`, `signACE`, `siren`, `siret`, `date_notification`, `date_fin_marche`, `id_acte_juridique`, `cpv_1`, `cpv_2`, `cpv_3`, `cpv_4`, `id_type_procedure`, `id_forme_prix`, `Nbr_entreprises_cotraitantes`, `sous_traitance_declaree`, `carte_achat`, `clause_sociale`, `clause_environnementale`, `Nbr_proposition_recues`, `Nbr_proposition_dematerialisees`, `nom_fichier`, `erreur_rejet`, `code_cpv_libelle1`, `code_cpv_libelle2`, `code_cpv_libelle3`, `code_cpv_libelle4`, `pieces_notif_items`, `ids_blob_env`, `ids_env_sign_items`, `ids_blob_sign_env`, `montant_ht`, `code_pays_titulaire`, `numero_siret_titulaire`, `numero_siren_titulaire`, `Codes_pays_co_titulaire`, `numero_siret_co_titulaire`, `numero_siren_co_titulaire`, `CCAG_reference`, `pourcentage_avance`, `type_avance`, `conditions_paiement`, `identifiant_accord_cadre`, `date_notification_reelle`, `date_fin_marche_reelle`, `ids_rapport_signature` FROM `Chorus_echange` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonChorusEchange();
            $obj->hydrate($row);
            CommonChorusEchangePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonChorusEchange|CommonChorusEchange[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonChorusEchange[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonChorusEchangePeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonChorusEchangePeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonChorusEchangePeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonChorusEchangePeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonChorusEchangePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonChorusEchangePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::ID, $id, $comparison);
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
     * @return CommonChorusEchangeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonChorusEchangePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the id_decision column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDecision(1234); // WHERE id_decision = 1234
     * $query->filterByIdDecision(array(12, 34)); // WHERE id_decision IN (12, 34)
     * $query->filterByIdDecision(array('min' => 12)); // WHERE id_decision >= 12
     * $query->filterByIdDecision(array('max' => 12)); // WHERE id_decision <= 12
     * </code>
     *
     * @param     mixed $idDecision The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByIdDecision($idDecision = null, $comparison = null)
    {
        if (is_array($idDecision)) {
            $useMinMax = false;
            if (isset($idDecision['min'])) {
                $this->addUsingAlias(CommonChorusEchangePeer::ID_DECISION, $idDecision['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDecision['max'])) {
                $this->addUsingAlias(CommonChorusEchangePeer::ID_DECISION, $idDecision['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::ID_DECISION, $idDecision, $comparison);
    }

    /**
     * Filter the query on the num_ordre column
     *
     * Example usage:
     * <code>
     * $query->filterByNumOrdre('fooValue');   // WHERE num_ordre = 'fooValue'
     * $query->filterByNumOrdre('%fooValue%'); // WHERE num_ordre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numOrdre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByNumOrdre($numOrdre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numOrdre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numOrdre)) {
                $numOrdre = str_replace('*', '%', $numOrdre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::NUM_ORDRE, $numOrdre, $comparison);
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
     * @return CommonChorusEchangeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonChorusEchangePeer::NOM_CREATEUR, $nomCreateur, $comparison);
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
     * @return CommonChorusEchangeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonChorusEchangePeer::PRENOM_CREATEUR, $prenomCreateur, $comparison);
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
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByIdCreateur($idCreateur = null, $comparison = null)
    {
        if (is_array($idCreateur)) {
            $useMinMax = false;
            if (isset($idCreateur['min'])) {
                $this->addUsingAlias(CommonChorusEchangePeer::ID_CREATEUR, $idCreateur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCreateur['max'])) {
                $this->addUsingAlias(CommonChorusEchangePeer::ID_CREATEUR, $idCreateur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::ID_CREATEUR, $idCreateur, $comparison);
    }

    /**
     * Filter the query on the statutEchange column
     *
     * Example usage:
     * <code>
     * $query->filterByStatutechange('fooValue');   // WHERE statutEchange = 'fooValue'
     * $query->filterByStatutechange('%fooValue%'); // WHERE statutEchange LIKE '%fooValue%'
     * </code>
     *
     * @param     string $statutechange The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByStatutechange($statutechange = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($statutechange)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $statutechange)) {
                $statutechange = str_replace('*', '%', $statutechange);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::STATUTECHANGE, $statutechange, $comparison);
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
     * @return CommonChorusEchangeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonChorusEchangePeer::DATE_CREATION, $dateCreation, $comparison);
    }

    /**
     * Filter the query on the date_envoi column
     *
     * Example usage:
     * <code>
     * $query->filterByDateEnvoi('fooValue');   // WHERE date_envoi = 'fooValue'
     * $query->filterByDateEnvoi('%fooValue%'); // WHERE date_envoi LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateEnvoi The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByDateEnvoi($dateEnvoi = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateEnvoi)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateEnvoi)) {
                $dateEnvoi = str_replace('*', '%', $dateEnvoi);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::DATE_ENVOI, $dateEnvoi, $comparison);
    }

    /**
     * Filter the query on the retour_chorus column
     *
     * Example usage:
     * <code>
     * $query->filterByRetourChorus('fooValue');   // WHERE retour_chorus = 'fooValue'
     * $query->filterByRetourChorus('%fooValue%'); // WHERE retour_chorus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $retourChorus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByRetourChorus($retourChorus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($retourChorus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $retourChorus)) {
                $retourChorus = str_replace('*', '%', $retourChorus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::RETOUR_CHORUS, $retourChorus, $comparison);
    }

    /**
     * Filter the query on the id_ej_appli_ext column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEjAppliExt('fooValue');   // WHERE id_ej_appli_ext = 'fooValue'
     * $query->filterByIdEjAppliExt('%fooValue%'); // WHERE id_ej_appli_ext LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idEjAppliExt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByIdEjAppliExt($idEjAppliExt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idEjAppliExt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idEjAppliExt)) {
                $idEjAppliExt = str_replace('*', '%', $idEjAppliExt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::ID_EJ_APPLI_EXT, $idEjAppliExt, $comparison);
    }

    /**
     * Filter the query on the id_oa column
     *
     * Example usage:
     * <code>
     * $query->filterByIdOa(1234); // WHERE id_oa = 1234
     * $query->filterByIdOa(array(12, 34)); // WHERE id_oa IN (12, 34)
     * $query->filterByIdOa(array('min' => 12)); // WHERE id_oa >= 12
     * $query->filterByIdOa(array('max' => 12)); // WHERE id_oa <= 12
     * </code>
     *
     * @param     mixed $idOa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByIdOa($idOa = null, $comparison = null)
    {
        if (is_array($idOa)) {
            $useMinMax = false;
            if (isset($idOa['min'])) {
                $this->addUsingAlias(CommonChorusEchangePeer::ID_OA, $idOa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idOa['max'])) {
                $this->addUsingAlias(CommonChorusEchangePeer::ID_OA, $idOa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::ID_OA, $idOa, $comparison);
    }

    /**
     * Filter the query on the id_ga column
     *
     * Example usage:
     * <code>
     * $query->filterByIdGa(1234); // WHERE id_ga = 1234
     * $query->filterByIdGa(array(12, 34)); // WHERE id_ga IN (12, 34)
     * $query->filterByIdGa(array('min' => 12)); // WHERE id_ga >= 12
     * $query->filterByIdGa(array('max' => 12)); // WHERE id_ga <= 12
     * </code>
     *
     * @param     mixed $idGa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByIdGa($idGa = null, $comparison = null)
    {
        if (is_array($idGa)) {
            $useMinMax = false;
            if (isset($idGa['min'])) {
                $this->addUsingAlias(CommonChorusEchangePeer::ID_GA, $idGa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idGa['max'])) {
                $this->addUsingAlias(CommonChorusEchangePeer::ID_GA, $idGa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::ID_GA, $idGa, $comparison);
    }

    /**
     * Filter the query on the id_type_marche column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTypeMarche(1234); // WHERE id_type_marche = 1234
     * $query->filterByIdTypeMarche(array(12, 34)); // WHERE id_type_marche IN (12, 34)
     * $query->filterByIdTypeMarche(array('min' => 12)); // WHERE id_type_marche >= 12
     * $query->filterByIdTypeMarche(array('max' => 12)); // WHERE id_type_marche <= 12
     * </code>
     *
     * @param     mixed $idTypeMarche The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByIdTypeMarche($idTypeMarche = null, $comparison = null)
    {
        if (is_array($idTypeMarche)) {
            $useMinMax = false;
            if (isset($idTypeMarche['min'])) {
                $this->addUsingAlias(CommonChorusEchangePeer::ID_TYPE_MARCHE, $idTypeMarche['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeMarche['max'])) {
                $this->addUsingAlias(CommonChorusEchangePeer::ID_TYPE_MARCHE, $idTypeMarche['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::ID_TYPE_MARCHE, $idTypeMarche, $comparison);
    }

    /**
     * Filter the query on the id_type_groupement column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTypeGroupement('fooValue');   // WHERE id_type_groupement = 'fooValue'
     * $query->filterByIdTypeGroupement('%fooValue%'); // WHERE id_type_groupement LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idTypeGroupement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByIdTypeGroupement($idTypeGroupement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idTypeGroupement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idTypeGroupement)) {
                $idTypeGroupement = str_replace('*', '%', $idTypeGroupement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::ID_TYPE_GROUPEMENT, $idTypeGroupement, $comparison);
    }

    /**
     * Filter the query on the id_regroupement_comptable column
     *
     * Example usage:
     * <code>
     * $query->filterByIdRegroupementComptable('fooValue');   // WHERE id_regroupement_comptable = 'fooValue'
     * $query->filterByIdRegroupementComptable('%fooValue%'); // WHERE id_regroupement_comptable LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idRegroupementComptable The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByIdRegroupementComptable($idRegroupementComptable = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idRegroupementComptable)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idRegroupementComptable)) {
                $idRegroupementComptable = str_replace('*', '%', $idRegroupementComptable);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::ID_REGROUPEMENT_COMPTABLE, $idRegroupementComptable, $comparison);
    }

    /**
     * Filter the query on the dce_items column
     *
     * Example usage:
     * <code>
     * $query->filterByDceItems('fooValue');   // WHERE dce_items = 'fooValue'
     * $query->filterByDceItems('%fooValue%'); // WHERE dce_items LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dceItems The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByDceItems($dceItems = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dceItems)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dceItems)) {
                $dceItems = str_replace('*', '%', $dceItems);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::DCE_ITEMS, $dceItems, $comparison);
    }

    /**
     * Filter the query on the ids_env_ae column
     *
     * Example usage:
     * <code>
     * $query->filterByIdsEnvAe('fooValue');   // WHERE ids_env_ae = 'fooValue'
     * $query->filterByIdsEnvAe('%fooValue%'); // WHERE ids_env_ae LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idsEnvAe The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByIdsEnvAe($idsEnvAe = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idsEnvAe)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idsEnvAe)) {
                $idsEnvAe = str_replace('*', '%', $idsEnvAe);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::IDS_ENV_AE, $idsEnvAe, $comparison);
    }

    /**
     * Filter the query on the ids_env_items column
     *
     * Example usage:
     * <code>
     * $query->filterByIdsEnvItems('fooValue');   // WHERE ids_env_items = 'fooValue'
     * $query->filterByIdsEnvItems('%fooValue%'); // WHERE ids_env_items LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idsEnvItems The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByIdsEnvItems($idsEnvItems = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idsEnvItems)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idsEnvItems)) {
                $idsEnvItems = str_replace('*', '%', $idsEnvItems);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::IDS_ENV_ITEMS, $idsEnvItems, $comparison);
    }

    /**
     * Filter the query on the ids_pieces_externes column
     *
     * Example usage:
     * <code>
     * $query->filterByIdsPiecesExternes('fooValue');   // WHERE ids_pieces_externes = 'fooValue'
     * $query->filterByIdsPiecesExternes('%fooValue%'); // WHERE ids_pieces_externes LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idsPiecesExternes The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByIdsPiecesExternes($idsPiecesExternes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idsPiecesExternes)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idsPiecesExternes)) {
                $idsPiecesExternes = str_replace('*', '%', $idsPiecesExternes);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::IDS_PIECES_EXTERNES, $idsPiecesExternes, $comparison);
    }

    /**
     * Filter the query on the id_agent_envoi column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentEnvoi(1234); // WHERE id_agent_envoi = 1234
     * $query->filterByIdAgentEnvoi(array(12, 34)); // WHERE id_agent_envoi IN (12, 34)
     * $query->filterByIdAgentEnvoi(array('min' => 12)); // WHERE id_agent_envoi >= 12
     * $query->filterByIdAgentEnvoi(array('max' => 12)); // WHERE id_agent_envoi <= 12
     * </code>
     *
     * @param     mixed $idAgentEnvoi The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByIdAgentEnvoi($idAgentEnvoi = null, $comparison = null)
    {
        if (is_array($idAgentEnvoi)) {
            $useMinMax = false;
            if (isset($idAgentEnvoi['min'])) {
                $this->addUsingAlias(CommonChorusEchangePeer::ID_AGENT_ENVOI, $idAgentEnvoi['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentEnvoi['max'])) {
                $this->addUsingAlias(CommonChorusEchangePeer::ID_AGENT_ENVOI, $idAgentEnvoi['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::ID_AGENT_ENVOI, $idAgentEnvoi, $comparison);
    }

    /**
     * Filter the query on the nom_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByNomAgent('fooValue');   // WHERE nom_agent = 'fooValue'
     * $query->filterByNomAgent('%fooValue%'); // WHERE nom_agent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomAgent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByNomAgent($nomAgent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomAgent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomAgent)) {
                $nomAgent = str_replace('*', '%', $nomAgent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::NOM_AGENT, $nomAgent, $comparison);
    }

    /**
     * Filter the query on the prenom_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByPrenomAgent('fooValue');   // WHERE prenom_agent = 'fooValue'
     * $query->filterByPrenomAgent('%fooValue%'); // WHERE prenom_agent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prenomAgent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByPrenomAgent($prenomAgent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prenomAgent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prenomAgent)) {
                $prenomAgent = str_replace('*', '%', $prenomAgent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::PRENOM_AGENT, $prenomAgent, $comparison);
    }

    /**
     * Filter the query on the signACE column
     *
     * Example usage:
     * <code>
     * $query->filterBySignace('fooValue');   // WHERE signACE = 'fooValue'
     * $query->filterBySignace('%fooValue%'); // WHERE signACE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $signace The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterBySignace($signace = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($signace)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $signace)) {
                $signace = str_replace('*', '%', $signace);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::SIGNACE, $signace, $comparison);
    }

    /**
     * Filter the query on the siren column
     *
     * Example usage:
     * <code>
     * $query->filterBySiren('fooValue');   // WHERE siren = 'fooValue'
     * $query->filterBySiren('%fooValue%'); // WHERE siren LIKE '%fooValue%'
     * </code>
     *
     * @param     string $siren The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterBySiren($siren = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($siren)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $siren)) {
                $siren = str_replace('*', '%', $siren);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::SIREN, $siren, $comparison);
    }

    /**
     * Filter the query on the siret column
     *
     * Example usage:
     * <code>
     * $query->filterBySiret('fooValue');   // WHERE siret = 'fooValue'
     * $query->filterBySiret('%fooValue%'); // WHERE siret LIKE '%fooValue%'
     * </code>
     *
     * @param     string $siret The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterBySiret($siret = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($siret)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $siret)) {
                $siret = str_replace('*', '%', $siret);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::SIRET, $siret, $comparison);
    }

    /**
     * Filter the query on the date_notification column
     *
     * Example usage:
     * <code>
     * $query->filterByDateNotification('fooValue');   // WHERE date_notification = 'fooValue'
     * $query->filterByDateNotification('%fooValue%'); // WHERE date_notification LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateNotification The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByDateNotification($dateNotification = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateNotification)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateNotification)) {
                $dateNotification = str_replace('*', '%', $dateNotification);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::DATE_NOTIFICATION, $dateNotification, $comparison);
    }

    /**
     * Filter the query on the date_fin_marche column
     *
     * Example usage:
     * <code>
     * $query->filterByDateFinMarche('fooValue');   // WHERE date_fin_marche = 'fooValue'
     * $query->filterByDateFinMarche('%fooValue%'); // WHERE date_fin_marche LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateFinMarche The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByDateFinMarche($dateFinMarche = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateFinMarche)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateFinMarche)) {
                $dateFinMarche = str_replace('*', '%', $dateFinMarche);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::DATE_FIN_MARCHE, $dateFinMarche, $comparison);
    }

    /**
     * Filter the query on the id_acte_juridique column
     *
     * Example usage:
     * <code>
     * $query->filterByIdActeJuridique('fooValue');   // WHERE id_acte_juridique = 'fooValue'
     * $query->filterByIdActeJuridique('%fooValue%'); // WHERE id_acte_juridique LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idActeJuridique The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByIdActeJuridique($idActeJuridique = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idActeJuridique)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idActeJuridique)) {
                $idActeJuridique = str_replace('*', '%', $idActeJuridique);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::ID_ACTE_JURIDIQUE, $idActeJuridique, $comparison);
    }

    /**
     * Filter the query on the cpv_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByCpv1('fooValue');   // WHERE cpv_1 = 'fooValue'
     * $query->filterByCpv1('%fooValue%'); // WHERE cpv_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cpv1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByCpv1($cpv1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cpv1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cpv1)) {
                $cpv1 = str_replace('*', '%', $cpv1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::CPV_1, $cpv1, $comparison);
    }

    /**
     * Filter the query on the cpv_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByCpv2('fooValue');   // WHERE cpv_2 = 'fooValue'
     * $query->filterByCpv2('%fooValue%'); // WHERE cpv_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cpv2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByCpv2($cpv2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cpv2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cpv2)) {
                $cpv2 = str_replace('*', '%', $cpv2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::CPV_2, $cpv2, $comparison);
    }

    /**
     * Filter the query on the cpv_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByCpv3('fooValue');   // WHERE cpv_3 = 'fooValue'
     * $query->filterByCpv3('%fooValue%'); // WHERE cpv_3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cpv3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByCpv3($cpv3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cpv3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cpv3)) {
                $cpv3 = str_replace('*', '%', $cpv3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::CPV_3, $cpv3, $comparison);
    }

    /**
     * Filter the query on the cpv_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByCpv4('fooValue');   // WHERE cpv_4 = 'fooValue'
     * $query->filterByCpv4('%fooValue%'); // WHERE cpv_4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cpv4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByCpv4($cpv4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cpv4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cpv4)) {
                $cpv4 = str_replace('*', '%', $cpv4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::CPV_4, $cpv4, $comparison);
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
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByIdTypeProcedure($idTypeProcedure = null, $comparison = null)
    {
        if (is_array($idTypeProcedure)) {
            $useMinMax = false;
            if (isset($idTypeProcedure['min'])) {
                $this->addUsingAlias(CommonChorusEchangePeer::ID_TYPE_PROCEDURE, $idTypeProcedure['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeProcedure['max'])) {
                $this->addUsingAlias(CommonChorusEchangePeer::ID_TYPE_PROCEDURE, $idTypeProcedure['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::ID_TYPE_PROCEDURE, $idTypeProcedure, $comparison);
    }

    /**
     * Filter the query on the id_forme_prix column
     *
     * Example usage:
     * <code>
     * $query->filterByIdFormePrix('fooValue');   // WHERE id_forme_prix = 'fooValue'
     * $query->filterByIdFormePrix('%fooValue%'); // WHERE id_forme_prix LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idFormePrix The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByIdFormePrix($idFormePrix = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idFormePrix)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idFormePrix)) {
                $idFormePrix = str_replace('*', '%', $idFormePrix);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::ID_FORME_PRIX, $idFormePrix, $comparison);
    }

    /**
     * Filter the query on the Nbr_entreprises_cotraitantes column
     *
     * Example usage:
     * <code>
     * $query->filterByNbrEntreprisesCotraitantes('fooValue');   // WHERE Nbr_entreprises_cotraitantes = 'fooValue'
     * $query->filterByNbrEntreprisesCotraitantes('%fooValue%'); // WHERE Nbr_entreprises_cotraitantes LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nbrEntreprisesCotraitantes The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByNbrEntreprisesCotraitantes($nbrEntreprisesCotraitantes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nbrEntreprisesCotraitantes)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nbrEntreprisesCotraitantes)) {
                $nbrEntreprisesCotraitantes = str_replace('*', '%', $nbrEntreprisesCotraitantes);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::NBR_ENTREPRISES_COTRAITANTES, $nbrEntreprisesCotraitantes, $comparison);
    }

    /**
     * Filter the query on the sous_traitance_declaree column
     *
     * Example usage:
     * <code>
     * $query->filterBySousTraitanceDeclaree('fooValue');   // WHERE sous_traitance_declaree = 'fooValue'
     * $query->filterBySousTraitanceDeclaree('%fooValue%'); // WHERE sous_traitance_declaree LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sousTraitanceDeclaree The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterBySousTraitanceDeclaree($sousTraitanceDeclaree = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sousTraitanceDeclaree)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sousTraitanceDeclaree)) {
                $sousTraitanceDeclaree = str_replace('*', '%', $sousTraitanceDeclaree);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::SOUS_TRAITANCE_DECLAREE, $sousTraitanceDeclaree, $comparison);
    }

    /**
     * Filter the query on the carte_achat column
     *
     * Example usage:
     * <code>
     * $query->filterByCarteAchat('fooValue');   // WHERE carte_achat = 'fooValue'
     * $query->filterByCarteAchat('%fooValue%'); // WHERE carte_achat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $carteAchat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByCarteAchat($carteAchat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($carteAchat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $carteAchat)) {
                $carteAchat = str_replace('*', '%', $carteAchat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::CARTE_ACHAT, $carteAchat, $comparison);
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
     * @return CommonChorusEchangeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonChorusEchangePeer::CLAUSE_SOCIALE, $clauseSociale, $comparison);
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
     * @return CommonChorusEchangeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonChorusEchangePeer::CLAUSE_ENVIRONNEMENTALE, $clauseEnvironnementale, $comparison);
    }

    /**
     * Filter the query on the Nbr_proposition_recues column
     *
     * Example usage:
     * <code>
     * $query->filterByNbrPropositionRecues('fooValue');   // WHERE Nbr_proposition_recues = 'fooValue'
     * $query->filterByNbrPropositionRecues('%fooValue%'); // WHERE Nbr_proposition_recues LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nbrPropositionRecues The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByNbrPropositionRecues($nbrPropositionRecues = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nbrPropositionRecues)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nbrPropositionRecues)) {
                $nbrPropositionRecues = str_replace('*', '%', $nbrPropositionRecues);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::NBR_PROPOSITION_RECUES, $nbrPropositionRecues, $comparison);
    }

    /**
     * Filter the query on the Nbr_proposition_dematerialisees column
     *
     * Example usage:
     * <code>
     * $query->filterByNbrPropositionDematerialisees('fooValue');   // WHERE Nbr_proposition_dematerialisees = 'fooValue'
     * $query->filterByNbrPropositionDematerialisees('%fooValue%'); // WHERE Nbr_proposition_dematerialisees LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nbrPropositionDematerialisees The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByNbrPropositionDematerialisees($nbrPropositionDematerialisees = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nbrPropositionDematerialisees)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nbrPropositionDematerialisees)) {
                $nbrPropositionDematerialisees = str_replace('*', '%', $nbrPropositionDematerialisees);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::NBR_PROPOSITION_DEMATERIALISEES, $nbrPropositionDematerialisees, $comparison);
    }

    /**
     * Filter the query on the nom_fichier column
     *
     * Example usage:
     * <code>
     * $query->filterByNomFichier('fooValue');   // WHERE nom_fichier = 'fooValue'
     * $query->filterByNomFichier('%fooValue%'); // WHERE nom_fichier LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomFichier The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByNomFichier($nomFichier = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomFichier)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomFichier)) {
                $nomFichier = str_replace('*', '%', $nomFichier);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::NOM_FICHIER, $nomFichier, $comparison);
    }

    /**
     * Filter the query on the erreur_rejet column
     *
     * Example usage:
     * <code>
     * $query->filterByErreurRejet('fooValue');   // WHERE erreur_rejet = 'fooValue'
     * $query->filterByErreurRejet('%fooValue%'); // WHERE erreur_rejet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $erreurRejet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByErreurRejet($erreurRejet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($erreurRejet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $erreurRejet)) {
                $erreurRejet = str_replace('*', '%', $erreurRejet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::ERREUR_REJET, $erreurRejet, $comparison);
    }

    /**
     * Filter the query on the code_cpv_libelle1 column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeCpvLibelle1('fooValue');   // WHERE code_cpv_libelle1 = 'fooValue'
     * $query->filterByCodeCpvLibelle1('%fooValue%'); // WHERE code_cpv_libelle1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codeCpvLibelle1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByCodeCpvLibelle1($codeCpvLibelle1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeCpvLibelle1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codeCpvLibelle1)) {
                $codeCpvLibelle1 = str_replace('*', '%', $codeCpvLibelle1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::CODE_CPV_LIBELLE1, $codeCpvLibelle1, $comparison);
    }

    /**
     * Filter the query on the code_cpv_libelle2 column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeCpvLibelle2('fooValue');   // WHERE code_cpv_libelle2 = 'fooValue'
     * $query->filterByCodeCpvLibelle2('%fooValue%'); // WHERE code_cpv_libelle2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codeCpvLibelle2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByCodeCpvLibelle2($codeCpvLibelle2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeCpvLibelle2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codeCpvLibelle2)) {
                $codeCpvLibelle2 = str_replace('*', '%', $codeCpvLibelle2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::CODE_CPV_LIBELLE2, $codeCpvLibelle2, $comparison);
    }

    /**
     * Filter the query on the code_cpv_libelle3 column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeCpvLibelle3('fooValue');   // WHERE code_cpv_libelle3 = 'fooValue'
     * $query->filterByCodeCpvLibelle3('%fooValue%'); // WHERE code_cpv_libelle3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codeCpvLibelle3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByCodeCpvLibelle3($codeCpvLibelle3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeCpvLibelle3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codeCpvLibelle3)) {
                $codeCpvLibelle3 = str_replace('*', '%', $codeCpvLibelle3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::CODE_CPV_LIBELLE3, $codeCpvLibelle3, $comparison);
    }

    /**
     * Filter the query on the code_cpv_libelle4 column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeCpvLibelle4('fooValue');   // WHERE code_cpv_libelle4 = 'fooValue'
     * $query->filterByCodeCpvLibelle4('%fooValue%'); // WHERE code_cpv_libelle4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codeCpvLibelle4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByCodeCpvLibelle4($codeCpvLibelle4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeCpvLibelle4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codeCpvLibelle4)) {
                $codeCpvLibelle4 = str_replace('*', '%', $codeCpvLibelle4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::CODE_CPV_LIBELLE4, $codeCpvLibelle4, $comparison);
    }

    /**
     * Filter the query on the pieces_notif_items column
     *
     * Example usage:
     * <code>
     * $query->filterByPiecesNotifItems('fooValue');   // WHERE pieces_notif_items = 'fooValue'
     * $query->filterByPiecesNotifItems('%fooValue%'); // WHERE pieces_notif_items LIKE '%fooValue%'
     * </code>
     *
     * @param     string $piecesNotifItems The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByPiecesNotifItems($piecesNotifItems = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($piecesNotifItems)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $piecesNotifItems)) {
                $piecesNotifItems = str_replace('*', '%', $piecesNotifItems);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::PIECES_NOTIF_ITEMS, $piecesNotifItems, $comparison);
    }

    /**
     * Filter the query on the ids_blob_env column
     *
     * Example usage:
     * <code>
     * $query->filterByIdsBlobEnv('fooValue');   // WHERE ids_blob_env = 'fooValue'
     * $query->filterByIdsBlobEnv('%fooValue%'); // WHERE ids_blob_env LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idsBlobEnv The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByIdsBlobEnv($idsBlobEnv = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idsBlobEnv)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idsBlobEnv)) {
                $idsBlobEnv = str_replace('*', '%', $idsBlobEnv);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::IDS_BLOB_ENV, $idsBlobEnv, $comparison);
    }

    /**
     * Filter the query on the ids_env_sign_items column
     *
     * Example usage:
     * <code>
     * $query->filterByIdsEnvSignItems('fooValue');   // WHERE ids_env_sign_items = 'fooValue'
     * $query->filterByIdsEnvSignItems('%fooValue%'); // WHERE ids_env_sign_items LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idsEnvSignItems The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByIdsEnvSignItems($idsEnvSignItems = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idsEnvSignItems)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idsEnvSignItems)) {
                $idsEnvSignItems = str_replace('*', '%', $idsEnvSignItems);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::IDS_ENV_SIGN_ITEMS, $idsEnvSignItems, $comparison);
    }

    /**
     * Filter the query on the ids_blob_sign_env column
     *
     * Example usage:
     * <code>
     * $query->filterByIdsBlobSignEnv('fooValue');   // WHERE ids_blob_sign_env = 'fooValue'
     * $query->filterByIdsBlobSignEnv('%fooValue%'); // WHERE ids_blob_sign_env LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idsBlobSignEnv The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByIdsBlobSignEnv($idsBlobSignEnv = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idsBlobSignEnv)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idsBlobSignEnv)) {
                $idsBlobSignEnv = str_replace('*', '%', $idsBlobSignEnv);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::IDS_BLOB_SIGN_ENV, $idsBlobSignEnv, $comparison);
    }

    /**
     * Filter the query on the montant_ht column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantHt('fooValue');   // WHERE montant_ht = 'fooValue'
     * $query->filterByMontantHt('%fooValue%'); // WHERE montant_ht LIKE '%fooValue%'
     * </code>
     *
     * @param     string $montantHt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByMontantHt($montantHt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($montantHt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $montantHt)) {
                $montantHt = str_replace('*', '%', $montantHt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::MONTANT_HT, $montantHt, $comparison);
    }

    /**
     * Filter the query on the code_pays_titulaire column
     *
     * Example usage:
     * <code>
     * $query->filterByCodePaysTitulaire('fooValue');   // WHERE code_pays_titulaire = 'fooValue'
     * $query->filterByCodePaysTitulaire('%fooValue%'); // WHERE code_pays_titulaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codePaysTitulaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByCodePaysTitulaire($codePaysTitulaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codePaysTitulaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codePaysTitulaire)) {
                $codePaysTitulaire = str_replace('*', '%', $codePaysTitulaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::CODE_PAYS_TITULAIRE, $codePaysTitulaire, $comparison);
    }

    /**
     * Filter the query on the numero_siret_titulaire column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeroSiretTitulaire('fooValue');   // WHERE numero_siret_titulaire = 'fooValue'
     * $query->filterByNumeroSiretTitulaire('%fooValue%'); // WHERE numero_siret_titulaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numeroSiretTitulaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByNumeroSiretTitulaire($numeroSiretTitulaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numeroSiretTitulaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numeroSiretTitulaire)) {
                $numeroSiretTitulaire = str_replace('*', '%', $numeroSiretTitulaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::NUMERO_SIRET_TITULAIRE, $numeroSiretTitulaire, $comparison);
    }

    /**
     * Filter the query on the numero_siren_titulaire column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeroSirenTitulaire('fooValue');   // WHERE numero_siren_titulaire = 'fooValue'
     * $query->filterByNumeroSirenTitulaire('%fooValue%'); // WHERE numero_siren_titulaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numeroSirenTitulaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByNumeroSirenTitulaire($numeroSirenTitulaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numeroSirenTitulaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numeroSirenTitulaire)) {
                $numeroSirenTitulaire = str_replace('*', '%', $numeroSirenTitulaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::NUMERO_SIREN_TITULAIRE, $numeroSirenTitulaire, $comparison);
    }

    /**
     * Filter the query on the Codes_pays_co_titulaire column
     *
     * Example usage:
     * <code>
     * $query->filterByCodesPaysCoTitulaire('fooValue');   // WHERE Codes_pays_co_titulaire = 'fooValue'
     * $query->filterByCodesPaysCoTitulaire('%fooValue%'); // WHERE Codes_pays_co_titulaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codesPaysCoTitulaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByCodesPaysCoTitulaire($codesPaysCoTitulaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codesPaysCoTitulaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codesPaysCoTitulaire)) {
                $codesPaysCoTitulaire = str_replace('*', '%', $codesPaysCoTitulaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::CODES_PAYS_CO_TITULAIRE, $codesPaysCoTitulaire, $comparison);
    }

    /**
     * Filter the query on the numero_siret_co_titulaire column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeroSiretCoTitulaire('fooValue');   // WHERE numero_siret_co_titulaire = 'fooValue'
     * $query->filterByNumeroSiretCoTitulaire('%fooValue%'); // WHERE numero_siret_co_titulaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numeroSiretCoTitulaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByNumeroSiretCoTitulaire($numeroSiretCoTitulaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numeroSiretCoTitulaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numeroSiretCoTitulaire)) {
                $numeroSiretCoTitulaire = str_replace('*', '%', $numeroSiretCoTitulaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::NUMERO_SIRET_CO_TITULAIRE, $numeroSiretCoTitulaire, $comparison);
    }

    /**
     * Filter the query on the numero_siren_co_titulaire column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeroSirenCoTitulaire('fooValue');   // WHERE numero_siren_co_titulaire = 'fooValue'
     * $query->filterByNumeroSirenCoTitulaire('%fooValue%'); // WHERE numero_siren_co_titulaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numeroSirenCoTitulaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByNumeroSirenCoTitulaire($numeroSirenCoTitulaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numeroSirenCoTitulaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numeroSirenCoTitulaire)) {
                $numeroSirenCoTitulaire = str_replace('*', '%', $numeroSirenCoTitulaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::NUMERO_SIREN_CO_TITULAIRE, $numeroSirenCoTitulaire, $comparison);
    }

    /**
     * Filter the query on the CCAG_reference column
     *
     * Example usage:
     * <code>
     * $query->filterByCcagReference('fooValue');   // WHERE CCAG_reference = 'fooValue'
     * $query->filterByCcagReference('%fooValue%'); // WHERE CCAG_reference LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ccagReference The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByCcagReference($ccagReference = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ccagReference)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ccagReference)) {
                $ccagReference = str_replace('*', '%', $ccagReference);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::CCAG_REFERENCE, $ccagReference, $comparison);
    }

    /**
     * Filter the query on the pourcentage_avance column
     *
     * Example usage:
     * <code>
     * $query->filterByPourcentageAvance('fooValue');   // WHERE pourcentage_avance = 'fooValue'
     * $query->filterByPourcentageAvance('%fooValue%'); // WHERE pourcentage_avance LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pourcentageAvance The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByPourcentageAvance($pourcentageAvance = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pourcentageAvance)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pourcentageAvance)) {
                $pourcentageAvance = str_replace('*', '%', $pourcentageAvance);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::POURCENTAGE_AVANCE, $pourcentageAvance, $comparison);
    }

    /**
     * Filter the query on the type_avance column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeAvance('fooValue');   // WHERE type_avance = 'fooValue'
     * $query->filterByTypeAvance('%fooValue%'); // WHERE type_avance LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeAvance The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByTypeAvance($typeAvance = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeAvance)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeAvance)) {
                $typeAvance = str_replace('*', '%', $typeAvance);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::TYPE_AVANCE, $typeAvance, $comparison);
    }

    /**
     * Filter the query on the conditions_paiement column
     *
     * Example usage:
     * <code>
     * $query->filterByConditionsPaiement('fooValue');   // WHERE conditions_paiement = 'fooValue'
     * $query->filterByConditionsPaiement('%fooValue%'); // WHERE conditions_paiement LIKE '%fooValue%'
     * </code>
     *
     * @param     string $conditionsPaiement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByConditionsPaiement($conditionsPaiement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($conditionsPaiement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $conditionsPaiement)) {
                $conditionsPaiement = str_replace('*', '%', $conditionsPaiement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::CONDITIONS_PAIEMENT, $conditionsPaiement, $comparison);
    }

    /**
     * Filter the query on the identifiant_accord_cadre column
     *
     * Example usage:
     * <code>
     * $query->filterByIdentifiantAccordCadre('fooValue');   // WHERE identifiant_accord_cadre = 'fooValue'
     * $query->filterByIdentifiantAccordCadre('%fooValue%'); // WHERE identifiant_accord_cadre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $identifiantAccordCadre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByIdentifiantAccordCadre($identifiantAccordCadre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($identifiantAccordCadre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $identifiantAccordCadre)) {
                $identifiantAccordCadre = str_replace('*', '%', $identifiantAccordCadre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::IDENTIFIANT_ACCORD_CADRE, $identifiantAccordCadre, $comparison);
    }

    /**
     * Filter the query on the date_notification_reelle column
     *
     * Example usage:
     * <code>
     * $query->filterByDateNotificationReelle('fooValue');   // WHERE date_notification_reelle = 'fooValue'
     * $query->filterByDateNotificationReelle('%fooValue%'); // WHERE date_notification_reelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateNotificationReelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByDateNotificationReelle($dateNotificationReelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateNotificationReelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateNotificationReelle)) {
                $dateNotificationReelle = str_replace('*', '%', $dateNotificationReelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::DATE_NOTIFICATION_REELLE, $dateNotificationReelle, $comparison);
    }

    /**
     * Filter the query on the date_fin_marche_reelle column
     *
     * Example usage:
     * <code>
     * $query->filterByDateFinMarcheReelle('fooValue');   // WHERE date_fin_marche_reelle = 'fooValue'
     * $query->filterByDateFinMarcheReelle('%fooValue%'); // WHERE date_fin_marche_reelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateFinMarcheReelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByDateFinMarcheReelle($dateFinMarcheReelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateFinMarcheReelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateFinMarcheReelle)) {
                $dateFinMarcheReelle = str_replace('*', '%', $dateFinMarcheReelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::DATE_FIN_MARCHE_REELLE, $dateFinMarcheReelle, $comparison);
    }

    /**
     * Filter the query on the ids_rapport_signature column
     *
     * Example usage:
     * <code>
     * $query->filterByIdsRapportSignature('fooValue');   // WHERE ids_rapport_signature = 'fooValue'
     * $query->filterByIdsRapportSignature('%fooValue%'); // WHERE ids_rapport_signature LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idsRapportSignature The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function filterByIdsRapportSignature($idsRapportSignature = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idsRapportSignature)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idsRapportSignature)) {
                $idsRapportSignature = str_replace('*', '%', $idsRapportSignature);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusEchangePeer::IDS_RAPPORT_SIGNATURE, $idsRapportSignature, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonChorusEchange $commonChorusEchange Object to remove from the list of results
     *
     * @return CommonChorusEchangeQuery The current query, for fluid interface
     */
    public function prune($commonChorusEchange = null)
    {
        if ($commonChorusEchange) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonChorusEchangePeer::ID), $commonChorusEchange->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonChorusEchangePeer::ORGANISME), $commonChorusEchange->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
