<?php


/**
 * Base class that represents a query for the 'profil_agent' table.
 *
 * 
 *
 * @method ProfilAgentQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method ProfilAgentQuery orderByLibelleProfilAgent($order = Criteria::ASC) Order by the LIBELLE_PROFIL_AGENT column
 * @method ProfilAgentQuery orderByIdProfil($order = Criteria::ASC) Order by the ID_PROFIL column
 * @method ProfilAgentQuery orderByIdOrganisme($order = Criteria::ASC) Order by the ID_ORGANISME column
 * @method ProfilAgentQuery orderByMenuMonCompte($order = Criteria::ASC) Order by the MENU_MON_COMPTE column
 * @method ProfilAgentQuery orderByMenuDemandeNouvelles($order = Criteria::ASC) Order by the MENU_DEMANDE_NOUVELLES column
 * @method ProfilAgentQuery orderByMenuDemandeRecherche($order = Criteria::ASC) Order by the MENU_DEMANDE_RECHERCHE column
 * @method ProfilAgentQuery orderByMenuAdmin($order = Criteria::ASC) Order by the MENU_ADMIN column
 * @method ProfilAgentQuery orderByMenuAdminServices($order = Criteria::ASC) Order by the MENU_ADMIN_SERVICES column
 * @method ProfilAgentQuery orderByMenuAdminUtilisateurs($order = Criteria::ASC) Order by the MENU_ADMIN_UTILISATEURS column
 * @method ProfilAgentQuery orderByMenuRapport($order = Criteria::ASC) Order by the MENU_RAPPORT column
 * @method ProfilAgentQuery orderByMenuRapportMensuel($order = Criteria::ASC) Order by the MENU_RAPPORT_MENSUEL column
 * @method ProfilAgentQuery orderByMenuRapportGlobal($order = Criteria::ASC) Order by the MENU_RAPPORT_GLOBAL column
 * @method ProfilAgentQuery orderByMenuRapportPersonnalise($order = Criteria::ASC) Order by the MENU_RAPPORT_PERSONNALISE column
 * @method ProfilAgentQuery orderByMenuAdminEntiteDemandeur($order = Criteria::ASC) Order by the MENU_ADMIN_ENTITE_DEMANDEUR column
 * @method ProfilAgentQuery orderByMenuAdminDemandeurs($order = Criteria::ASC) Order by the MENU_ADMIN_DEMANDEURS column
 * @method ProfilAgentQuery orderByHistorique($order = Criteria::ASC) Order by the HISTORIQUE column
 * @method ProfilAgentQuery orderByMenuDemandeAffecteesEntite($order = Criteria::ASC) Order by the MENU_DEMANDE_AFFECTEES_ENTITE column
 * @method ProfilAgentQuery orderByMenuAdminEntite($order = Criteria::ASC) Order by the MENU_ADMIN_ENTITE column
 * @method ProfilAgentQuery orderByMenuAdminTheme($order = Criteria::ASC) Order by the MENU_ADMIN_THEME column
 * @method ProfilAgentQuery orderByEtatProfil($order = Criteria::ASC) Order by the ETAT_PROFIL column
 * @method ProfilAgentQuery orderByActionAffecterEntite($order = Criteria::ASC) Order by the ACTION_AFFECTER_ENTITE column
 * @method ProfilAgentQuery orderByActionAffecterAgent($order = Criteria::ASC) Order by the ACTION_AFFECTER_AGENT column
 * @method ProfilAgentQuery orderBySupprimerModifiierDemandeEntite($order = Criteria::ASC) Order by the SUPPRIMER_MODIFIIER_DEMANDE_ENTITE column
 * @method ProfilAgentQuery orderBySupprimerModifiierAllDemande($order = Criteria::ASC) Order by the SUPPRIMER_MODIFIIER_ALL_DEMANDE column
 * @method ProfilAgentQuery orderByTraiterTouteDemande($order = Criteria::ASC) Order by the TRAITER_TOUTE_DEMANDE column
 * @method ProfilAgentQuery orderByDateIndicativeReponse($order = Criteria::ASC) Order by the DATE_INDICATIVE_REPONSE column
 * @method ProfilAgentQuery orderByModifierTheme($order = Criteria::ASC) Order by the MODIFIER_THEME column
 * @method ProfilAgentQuery orderByActionRetournerPrecedent($order = Criteria::ASC) Order by the ACTION_RETOURNER_PRECEDENT column
 * @method ProfilAgentQuery orderByActionClasserErronee($order = Criteria::ASC) Order by the ACTION_CLASSER_ERRONEE column
 * @method ProfilAgentQuery orderByActionClasserHa($order = Criteria::ASC) Order by the ACTION_CLASSER_HA column
 * @method ProfilAgentQuery orderByActionSoumettreReponseCircuit($order = Criteria::ASC) Order by the ACTION_SOUMETTRE_REPONSE_CIRCUIT column
 * @method ProfilAgentQuery orderByActionTransmettreReponseReq($order = Criteria::ASC) Order by the ACTION_TRANSMETTRE_REPONSE_REQ column
 * @method ProfilAgentQuery orderByActionCloturer($order = Criteria::ASC) Order by the ACTION_CLOTURER column
 * @method ProfilAgentQuery orderBySuivreDemande($order = Criteria::ASC) Order by the SUIVRE_DEMANDE column
 * @method ProfilAgentQuery orderByMenuEnProposition($order = Criteria::ASC) Order by the MENU_EN_PROPOSITION column
 * @method ProfilAgentQuery orderByLibelleProfilAgentAr($order = Criteria::ASC) Order by the LIBELLE_PROFIL_AGENT_AR column
 * @method ProfilAgentQuery orderByActionPartagerDemande($order = Criteria::ASC) Order by the ACTION_PARTAGER_DEMANDE column
 * @method ProfilAgentQuery orderByMenuDemandePartageesEntite($order = Criteria::ASC) Order by the MENU_DEMANDE_PARTAGEES_ENTITE column
 * @method ProfilAgentQuery orderByHabilitationGestionTache($order = Criteria::ASC) Order by the HABILITATION_GESTION_TACHE column
 * @method ProfilAgentQuery orderByActionAffecterDemandeCloture($order = Criteria::ASC) Order by the ACTION_AFFECTER_DEMANDE_CLOTURE column
 * @method ProfilAgentQuery orderByVisibiliteDemandeRecu($order = Criteria::ASC) Order by the VISIBILITE_DEMANDE_RECU column
 * @method ProfilAgentQuery orderByMenuMinisteres($order = Criteria::ASC) Order by the MENU_MINISTERES column
 * @method ProfilAgentQuery orderByDemandesASuivre($order = Criteria::ASC) Order by the DEMANDES_A_SUIVRE column
 * @method ProfilAgentQuery orderByGestionInterim($order = Criteria::ASC) Order by the GESTION_INTERIM column
 * @method ProfilAgentQuery orderByAffichageSimplifie($order = Criteria::ASC) Order by the AFFICHAGE_SIMPLIFIE column
 * @method ProfilAgentQuery orderBySupprimerTous($order = Criteria::ASC) Order by the SUPPRIMER_TOUS column
 * @method ProfilAgentQuery orderByAjoutDemande($order = Criteria::ASC) Order by the AJOUT_DEMANDE column
 * @method ProfilAgentQuery orderByTypeAjoutDemande($order = Criteria::ASC) Order by the TYPE_AJOUT_DEMANDE column
 * @method ProfilAgentQuery orderByAjoutDemandeEntrante($order = Criteria::ASC) Order by the AJOUT_DEMANDE_ENTRANTE column
 * @method ProfilAgentQuery orderByAjoutDemandeSortante($order = Criteria::ASC) Order by the AJOUT_DEMANDE_SORTANTE column
 * @method ProfilAgentQuery orderByAjoutDemandeSortant($order = Criteria::ASC) Order by the AJOUT_DEMANDE_SORTANT column
 * @method ProfilAgentQuery orderByAjoutDemandeInterne($order = Criteria::ASC) Order by the AJOUT_DEMANDE_INTERNE column
 * @method ProfilAgentQuery orderByAjoutDemandeIntragroupe($order = Criteria::ASC) Order by the AJOUT_DEMANDE_INTRAGROUPE column
 * @method ProfilAgentQuery orderByModificationCircuitValidationDemande($order = Criteria::ASC) Order by the MODIFICATION_CIRCUIT_VALIDATION_DEMANDE column
 * @method ProfilAgentQuery orderByTransfertDemande($order = Criteria::ASC) Order by the TRANSFERT_DEMANDE column
 * @method ProfilAgentQuery orderByVisualiserEchange($order = Criteria::ASC) Order by the VISUALISER_ECHANGE column
 * @method ProfilAgentQuery orderByClotureTransverse($order = Criteria::ASC) Order by the CLOTURE_TRANSVERSE column
 * @method ProfilAgentQuery orderByEchangeHorsSys($order = Criteria::ASC) Order by the ECHANGE_HORS_SYS column
 * @method ProfilAgentQuery orderByEchangeRequerant($order = Criteria::ASC) Order by the ECHANGE_REQUERANT column
 * @method ProfilAgentQuery orderByAffichageReponseFinal($order = Criteria::ASC) Order by the AFFICHAGE_REPONSE_FINAL column
 * @method ProfilAgentQuery orderByRetirerAffectation($order = Criteria::ASC) Order by the RETIRER_AFFECTATION column
 * @method ProfilAgentQuery orderByAffectationExterne($order = Criteria::ASC) Order by the AFFECTATION_EXTERNE column
 * @method ProfilAgentQuery orderByComplementDemande($order = Criteria::ASC) Order by the COMPLEMENT_DEMANDE column
 * @method ProfilAgentQuery orderByEncopieDemande($order = Criteria::ASC) Order by the ENCOPIE_DEMANDE column
 * @method ProfilAgentQuery orderByModifierDemande($order = Criteria::ASC) Order by the MODIFIER_DEMANDE column
 * @method ProfilAgentQuery orderBySupprimerDemande($order = Criteria::ASC) Order by the SUPPRIMER_DEMANDE column
 * @method ProfilAgentQuery orderByVisibiliteMailTelBo($order = Criteria::ASC) Order by the VISIBILITE_MAIL_TEL_BO column
 * @method ProfilAgentQuery orderByAccesAudioCa($order = Criteria::ASC) Order by the ACCES_AUDIO_CA column
 * @method ProfilAgentQuery orderByProlongerDureeTraitement($order = Criteria::ASC) Order by the PROLONGER_DUREE_TRAITEMENT column
 * @method ProfilAgentQuery orderByModifDemandeAffecte($order = Criteria::ASC) Order by the MODIF_DEMANDE_AFFECTE column
 * @method ProfilAgentQuery orderByTableauBordSupervision($order = Criteria::ASC) Order by the TABLEAU_BORD_SUPERVISION column
 * @method ProfilAgentQuery orderByStatistiqueSupervision($order = Criteria::ASC) Order by the STATISTIQUE_SUPERVISION column
 * @method ProfilAgentQuery orderBySuiviSupervision($order = Criteria::ASC) Order by the SUIVI_SUPERVISION column
 * @method ProfilAgentQuery orderByForceCloture($order = Criteria::ASC) Order by the FORCE_CLOTURE column
 * @method ProfilAgentQuery orderByAffecterGroupe($order = Criteria::ASC) Order by the AFFECTER_GROUPE column
 * @method ProfilAgentQuery orderByHistoriqueConsultation($order = Criteria::ASC) Order by the HISTORIQUE_CONSULTATION column
 *
 * @method ProfilAgentQuery groupById() Group by the ID column
 * @method ProfilAgentQuery groupByLibelleProfilAgent() Group by the LIBELLE_PROFIL_AGENT column
 * @method ProfilAgentQuery groupByIdProfil() Group by the ID_PROFIL column
 * @method ProfilAgentQuery groupByIdOrganisme() Group by the ID_ORGANISME column
 * @method ProfilAgentQuery groupByMenuMonCompte() Group by the MENU_MON_COMPTE column
 * @method ProfilAgentQuery groupByMenuDemandeNouvelles() Group by the MENU_DEMANDE_NOUVELLES column
 * @method ProfilAgentQuery groupByMenuDemandeRecherche() Group by the MENU_DEMANDE_RECHERCHE column
 * @method ProfilAgentQuery groupByMenuAdmin() Group by the MENU_ADMIN column
 * @method ProfilAgentQuery groupByMenuAdminServices() Group by the MENU_ADMIN_SERVICES column
 * @method ProfilAgentQuery groupByMenuAdminUtilisateurs() Group by the MENU_ADMIN_UTILISATEURS column
 * @method ProfilAgentQuery groupByMenuRapport() Group by the MENU_RAPPORT column
 * @method ProfilAgentQuery groupByMenuRapportMensuel() Group by the MENU_RAPPORT_MENSUEL column
 * @method ProfilAgentQuery groupByMenuRapportGlobal() Group by the MENU_RAPPORT_GLOBAL column
 * @method ProfilAgentQuery groupByMenuRapportPersonnalise() Group by the MENU_RAPPORT_PERSONNALISE column
 * @method ProfilAgentQuery groupByMenuAdminEntiteDemandeur() Group by the MENU_ADMIN_ENTITE_DEMANDEUR column
 * @method ProfilAgentQuery groupByMenuAdminDemandeurs() Group by the MENU_ADMIN_DEMANDEURS column
 * @method ProfilAgentQuery groupByHistorique() Group by the HISTORIQUE column
 * @method ProfilAgentQuery groupByMenuDemandeAffecteesEntite() Group by the MENU_DEMANDE_AFFECTEES_ENTITE column
 * @method ProfilAgentQuery groupByMenuAdminEntite() Group by the MENU_ADMIN_ENTITE column
 * @method ProfilAgentQuery groupByMenuAdminTheme() Group by the MENU_ADMIN_THEME column
 * @method ProfilAgentQuery groupByEtatProfil() Group by the ETAT_PROFIL column
 * @method ProfilAgentQuery groupByActionAffecterEntite() Group by the ACTION_AFFECTER_ENTITE column
 * @method ProfilAgentQuery groupByActionAffecterAgent() Group by the ACTION_AFFECTER_AGENT column
 * @method ProfilAgentQuery groupBySupprimerModifiierDemandeEntite() Group by the SUPPRIMER_MODIFIIER_DEMANDE_ENTITE column
 * @method ProfilAgentQuery groupBySupprimerModifiierAllDemande() Group by the SUPPRIMER_MODIFIIER_ALL_DEMANDE column
 * @method ProfilAgentQuery groupByTraiterTouteDemande() Group by the TRAITER_TOUTE_DEMANDE column
 * @method ProfilAgentQuery groupByDateIndicativeReponse() Group by the DATE_INDICATIVE_REPONSE column
 * @method ProfilAgentQuery groupByModifierTheme() Group by the MODIFIER_THEME column
 * @method ProfilAgentQuery groupByActionRetournerPrecedent() Group by the ACTION_RETOURNER_PRECEDENT column
 * @method ProfilAgentQuery groupByActionClasserErronee() Group by the ACTION_CLASSER_ERRONEE column
 * @method ProfilAgentQuery groupByActionClasserHa() Group by the ACTION_CLASSER_HA column
 * @method ProfilAgentQuery groupByActionSoumettreReponseCircuit() Group by the ACTION_SOUMETTRE_REPONSE_CIRCUIT column
 * @method ProfilAgentQuery groupByActionTransmettreReponseReq() Group by the ACTION_TRANSMETTRE_REPONSE_REQ column
 * @method ProfilAgentQuery groupByActionCloturer() Group by the ACTION_CLOTURER column
 * @method ProfilAgentQuery groupBySuivreDemande() Group by the SUIVRE_DEMANDE column
 * @method ProfilAgentQuery groupByMenuEnProposition() Group by the MENU_EN_PROPOSITION column
 * @method ProfilAgentQuery groupByLibelleProfilAgentAr() Group by the LIBELLE_PROFIL_AGENT_AR column
 * @method ProfilAgentQuery groupByActionPartagerDemande() Group by the ACTION_PARTAGER_DEMANDE column
 * @method ProfilAgentQuery groupByMenuDemandePartageesEntite() Group by the MENU_DEMANDE_PARTAGEES_ENTITE column
 * @method ProfilAgentQuery groupByHabilitationGestionTache() Group by the HABILITATION_GESTION_TACHE column
 * @method ProfilAgentQuery groupByActionAffecterDemandeCloture() Group by the ACTION_AFFECTER_DEMANDE_CLOTURE column
 * @method ProfilAgentQuery groupByVisibiliteDemandeRecu() Group by the VISIBILITE_DEMANDE_RECU column
 * @method ProfilAgentQuery groupByMenuMinisteres() Group by the MENU_MINISTERES column
 * @method ProfilAgentQuery groupByDemandesASuivre() Group by the DEMANDES_A_SUIVRE column
 * @method ProfilAgentQuery groupByGestionInterim() Group by the GESTION_INTERIM column
 * @method ProfilAgentQuery groupByAffichageSimplifie() Group by the AFFICHAGE_SIMPLIFIE column
 * @method ProfilAgentQuery groupBySupprimerTous() Group by the SUPPRIMER_TOUS column
 * @method ProfilAgentQuery groupByAjoutDemande() Group by the AJOUT_DEMANDE column
 * @method ProfilAgentQuery groupByTypeAjoutDemande() Group by the TYPE_AJOUT_DEMANDE column
 * @method ProfilAgentQuery groupByAjoutDemandeEntrante() Group by the AJOUT_DEMANDE_ENTRANTE column
 * @method ProfilAgentQuery groupByAjoutDemandeSortante() Group by the AJOUT_DEMANDE_SORTANTE column
 * @method ProfilAgentQuery groupByAjoutDemandeSortant() Group by the AJOUT_DEMANDE_SORTANT column
 * @method ProfilAgentQuery groupByAjoutDemandeInterne() Group by the AJOUT_DEMANDE_INTERNE column
 * @method ProfilAgentQuery groupByAjoutDemandeIntragroupe() Group by the AJOUT_DEMANDE_INTRAGROUPE column
 * @method ProfilAgentQuery groupByModificationCircuitValidationDemande() Group by the MODIFICATION_CIRCUIT_VALIDATION_DEMANDE column
 * @method ProfilAgentQuery groupByTransfertDemande() Group by the TRANSFERT_DEMANDE column
 * @method ProfilAgentQuery groupByVisualiserEchange() Group by the VISUALISER_ECHANGE column
 * @method ProfilAgentQuery groupByClotureTransverse() Group by the CLOTURE_TRANSVERSE column
 * @method ProfilAgentQuery groupByEchangeHorsSys() Group by the ECHANGE_HORS_SYS column
 * @method ProfilAgentQuery groupByEchangeRequerant() Group by the ECHANGE_REQUERANT column
 * @method ProfilAgentQuery groupByAffichageReponseFinal() Group by the AFFICHAGE_REPONSE_FINAL column
 * @method ProfilAgentQuery groupByRetirerAffectation() Group by the RETIRER_AFFECTATION column
 * @method ProfilAgentQuery groupByAffectationExterne() Group by the AFFECTATION_EXTERNE column
 * @method ProfilAgentQuery groupByComplementDemande() Group by the COMPLEMENT_DEMANDE column
 * @method ProfilAgentQuery groupByEncopieDemande() Group by the ENCOPIE_DEMANDE column
 * @method ProfilAgentQuery groupByModifierDemande() Group by the MODIFIER_DEMANDE column
 * @method ProfilAgentQuery groupBySupprimerDemande() Group by the SUPPRIMER_DEMANDE column
 * @method ProfilAgentQuery groupByVisibiliteMailTelBo() Group by the VISIBILITE_MAIL_TEL_BO column
 * @method ProfilAgentQuery groupByAccesAudioCa() Group by the ACCES_AUDIO_CA column
 * @method ProfilAgentQuery groupByProlongerDureeTraitement() Group by the PROLONGER_DUREE_TRAITEMENT column
 * @method ProfilAgentQuery groupByModifDemandeAffecte() Group by the MODIF_DEMANDE_AFFECTE column
 * @method ProfilAgentQuery groupByTableauBordSupervision() Group by the TABLEAU_BORD_SUPERVISION column
 * @method ProfilAgentQuery groupByStatistiqueSupervision() Group by the STATISTIQUE_SUPERVISION column
 * @method ProfilAgentQuery groupBySuiviSupervision() Group by the SUIVI_SUPERVISION column
 * @method ProfilAgentQuery groupByForceCloture() Group by the FORCE_CLOTURE column
 * @method ProfilAgentQuery groupByAffecterGroupe() Group by the AFFECTER_GROUPE column
 * @method ProfilAgentQuery groupByHistoriqueConsultation() Group by the HISTORIQUE_CONSULTATION column
 *
 * @method ProfilAgentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ProfilAgentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ProfilAgentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ProfilAgent findOne(PropelPDO $con = null) Return the first ProfilAgent matching the query
 * @method ProfilAgent findOneOrCreate(PropelPDO $con = null) Return the first ProfilAgent matching the query, or a new ProfilAgent object populated from the query conditions when no match is found
 *
 * @method ProfilAgent findOneByLibelleProfilAgent(string $LIBELLE_PROFIL_AGENT) Return the first ProfilAgent filtered by the LIBELLE_PROFIL_AGENT column
 * @method ProfilAgent findOneByIdProfil(int $ID_PROFIL) Return the first ProfilAgent filtered by the ID_PROFIL column
 * @method ProfilAgent findOneByIdOrganisme(int $ID_ORGANISME) Return the first ProfilAgent filtered by the ID_ORGANISME column
 * @method ProfilAgent findOneByMenuMonCompte(string $MENU_MON_COMPTE) Return the first ProfilAgent filtered by the MENU_MON_COMPTE column
 * @method ProfilAgent findOneByMenuDemandeNouvelles(string $MENU_DEMANDE_NOUVELLES) Return the first ProfilAgent filtered by the MENU_DEMANDE_NOUVELLES column
 * @method ProfilAgent findOneByMenuDemandeRecherche(string $MENU_DEMANDE_RECHERCHE) Return the first ProfilAgent filtered by the MENU_DEMANDE_RECHERCHE column
 * @method ProfilAgent findOneByMenuAdmin(string $MENU_ADMIN) Return the first ProfilAgent filtered by the MENU_ADMIN column
 * @method ProfilAgent findOneByMenuAdminServices(string $MENU_ADMIN_SERVICES) Return the first ProfilAgent filtered by the MENU_ADMIN_SERVICES column
 * @method ProfilAgent findOneByMenuAdminUtilisateurs(string $MENU_ADMIN_UTILISATEURS) Return the first ProfilAgent filtered by the MENU_ADMIN_UTILISATEURS column
 * @method ProfilAgent findOneByMenuRapport(string $MENU_RAPPORT) Return the first ProfilAgent filtered by the MENU_RAPPORT column
 * @method ProfilAgent findOneByMenuRapportMensuel(string $MENU_RAPPORT_MENSUEL) Return the first ProfilAgent filtered by the MENU_RAPPORT_MENSUEL column
 * @method ProfilAgent findOneByMenuRapportGlobal(string $MENU_RAPPORT_GLOBAL) Return the first ProfilAgent filtered by the MENU_RAPPORT_GLOBAL column
 * @method ProfilAgent findOneByMenuRapportPersonnalise(string $MENU_RAPPORT_PERSONNALISE) Return the first ProfilAgent filtered by the MENU_RAPPORT_PERSONNALISE column
 * @method ProfilAgent findOneByMenuAdminEntiteDemandeur(string $MENU_ADMIN_ENTITE_DEMANDEUR) Return the first ProfilAgent filtered by the MENU_ADMIN_ENTITE_DEMANDEUR column
 * @method ProfilAgent findOneByMenuAdminDemandeurs(string $MENU_ADMIN_DEMANDEURS) Return the first ProfilAgent filtered by the MENU_ADMIN_DEMANDEURS column
 * @method ProfilAgent findOneByHistorique(string $HISTORIQUE) Return the first ProfilAgent filtered by the HISTORIQUE column
 * @method ProfilAgent findOneByMenuDemandeAffecteesEntite(string $MENU_DEMANDE_AFFECTEES_ENTITE) Return the first ProfilAgent filtered by the MENU_DEMANDE_AFFECTEES_ENTITE column
 * @method ProfilAgent findOneByMenuAdminEntite(string $MENU_ADMIN_ENTITE) Return the first ProfilAgent filtered by the MENU_ADMIN_ENTITE column
 * @method ProfilAgent findOneByMenuAdminTheme(string $MENU_ADMIN_THEME) Return the first ProfilAgent filtered by the MENU_ADMIN_THEME column
 * @method ProfilAgent findOneByEtatProfil(string $ETAT_PROFIL) Return the first ProfilAgent filtered by the ETAT_PROFIL column
 * @method ProfilAgent findOneByActionAffecterEntite(string $ACTION_AFFECTER_ENTITE) Return the first ProfilAgent filtered by the ACTION_AFFECTER_ENTITE column
 * @method ProfilAgent findOneByActionAffecterAgent(string $ACTION_AFFECTER_AGENT) Return the first ProfilAgent filtered by the ACTION_AFFECTER_AGENT column
 * @method ProfilAgent findOneBySupprimerModifiierDemandeEntite(string $SUPPRIMER_MODIFIIER_DEMANDE_ENTITE) Return the first ProfilAgent filtered by the SUPPRIMER_MODIFIIER_DEMANDE_ENTITE column
 * @method ProfilAgent findOneBySupprimerModifiierAllDemande(string $SUPPRIMER_MODIFIIER_ALL_DEMANDE) Return the first ProfilAgent filtered by the SUPPRIMER_MODIFIIER_ALL_DEMANDE column
 * @method ProfilAgent findOneByTraiterTouteDemande(string $TRAITER_TOUTE_DEMANDE) Return the first ProfilAgent filtered by the TRAITER_TOUTE_DEMANDE column
 * @method ProfilAgent findOneByDateIndicativeReponse(string $DATE_INDICATIVE_REPONSE) Return the first ProfilAgent filtered by the DATE_INDICATIVE_REPONSE column
 * @method ProfilAgent findOneByModifierTheme(string $MODIFIER_THEME) Return the first ProfilAgent filtered by the MODIFIER_THEME column
 * @method ProfilAgent findOneByActionRetournerPrecedent(string $ACTION_RETOURNER_PRECEDENT) Return the first ProfilAgent filtered by the ACTION_RETOURNER_PRECEDENT column
 * @method ProfilAgent findOneByActionClasserErronee(string $ACTION_CLASSER_ERRONEE) Return the first ProfilAgent filtered by the ACTION_CLASSER_ERRONEE column
 * @method ProfilAgent findOneByActionClasserHa(string $ACTION_CLASSER_HA) Return the first ProfilAgent filtered by the ACTION_CLASSER_HA column
 * @method ProfilAgent findOneByActionSoumettreReponseCircuit(string $ACTION_SOUMETTRE_REPONSE_CIRCUIT) Return the first ProfilAgent filtered by the ACTION_SOUMETTRE_REPONSE_CIRCUIT column
 * @method ProfilAgent findOneByActionTransmettreReponseReq(string $ACTION_TRANSMETTRE_REPONSE_REQ) Return the first ProfilAgent filtered by the ACTION_TRANSMETTRE_REPONSE_REQ column
 * @method ProfilAgent findOneByActionCloturer(string $ACTION_CLOTURER) Return the first ProfilAgent filtered by the ACTION_CLOTURER column
 * @method ProfilAgent findOneBySuivreDemande(string $SUIVRE_DEMANDE) Return the first ProfilAgent filtered by the SUIVRE_DEMANDE column
 * @method ProfilAgent findOneByMenuEnProposition(string $MENU_EN_PROPOSITION) Return the first ProfilAgent filtered by the MENU_EN_PROPOSITION column
 * @method ProfilAgent findOneByLibelleProfilAgentAr(string $LIBELLE_PROFIL_AGENT_AR) Return the first ProfilAgent filtered by the LIBELLE_PROFIL_AGENT_AR column
 * @method ProfilAgent findOneByActionPartagerDemande(string $ACTION_PARTAGER_DEMANDE) Return the first ProfilAgent filtered by the ACTION_PARTAGER_DEMANDE column
 * @method ProfilAgent findOneByMenuDemandePartageesEntite(string $MENU_DEMANDE_PARTAGEES_ENTITE) Return the first ProfilAgent filtered by the MENU_DEMANDE_PARTAGEES_ENTITE column
 * @method ProfilAgent findOneByHabilitationGestionTache(string $HABILITATION_GESTION_TACHE) Return the first ProfilAgent filtered by the HABILITATION_GESTION_TACHE column
 * @method ProfilAgent findOneByActionAffecterDemandeCloture(string $ACTION_AFFECTER_DEMANDE_CLOTURE) Return the first ProfilAgent filtered by the ACTION_AFFECTER_DEMANDE_CLOTURE column
 * @method ProfilAgent findOneByVisibiliteDemandeRecu(string $VISIBILITE_DEMANDE_RECU) Return the first ProfilAgent filtered by the VISIBILITE_DEMANDE_RECU column
 * @method ProfilAgent findOneByMenuMinisteres(string $MENU_MINISTERES) Return the first ProfilAgent filtered by the MENU_MINISTERES column
 * @method ProfilAgent findOneByDemandesASuivre(string $DEMANDES_A_SUIVRE) Return the first ProfilAgent filtered by the DEMANDES_A_SUIVRE column
 * @method ProfilAgent findOneByGestionInterim(string $GESTION_INTERIM) Return the first ProfilAgent filtered by the GESTION_INTERIM column
 * @method ProfilAgent findOneByAffichageSimplifie(string $AFFICHAGE_SIMPLIFIE) Return the first ProfilAgent filtered by the AFFICHAGE_SIMPLIFIE column
 * @method ProfilAgent findOneBySupprimerTous(string $SUPPRIMER_TOUS) Return the first ProfilAgent filtered by the SUPPRIMER_TOUS column
 * @method ProfilAgent findOneByAjoutDemande(string $AJOUT_DEMANDE) Return the first ProfilAgent filtered by the AJOUT_DEMANDE column
 * @method ProfilAgent findOneByTypeAjoutDemande(string $TYPE_AJOUT_DEMANDE) Return the first ProfilAgent filtered by the TYPE_AJOUT_DEMANDE column
 * @method ProfilAgent findOneByAjoutDemandeEntrante(string $AJOUT_DEMANDE_ENTRANTE) Return the first ProfilAgent filtered by the AJOUT_DEMANDE_ENTRANTE column
 * @method ProfilAgent findOneByAjoutDemandeSortante(string $AJOUT_DEMANDE_SORTANTE) Return the first ProfilAgent filtered by the AJOUT_DEMANDE_SORTANTE column
 * @method ProfilAgent findOneByAjoutDemandeSortant(string $AJOUT_DEMANDE_SORTANT) Return the first ProfilAgent filtered by the AJOUT_DEMANDE_SORTANT column
 * @method ProfilAgent findOneByAjoutDemandeInterne(string $AJOUT_DEMANDE_INTERNE) Return the first ProfilAgent filtered by the AJOUT_DEMANDE_INTERNE column
 * @method ProfilAgent findOneByAjoutDemandeIntragroupe(string $AJOUT_DEMANDE_INTRAGROUPE) Return the first ProfilAgent filtered by the AJOUT_DEMANDE_INTRAGROUPE column
 * @method ProfilAgent findOneByModificationCircuitValidationDemande(string $MODIFICATION_CIRCUIT_VALIDATION_DEMANDE) Return the first ProfilAgent filtered by the MODIFICATION_CIRCUIT_VALIDATION_DEMANDE column
 * @method ProfilAgent findOneByTransfertDemande(string $TRANSFERT_DEMANDE) Return the first ProfilAgent filtered by the TRANSFERT_DEMANDE column
 * @method ProfilAgent findOneByVisualiserEchange(string $VISUALISER_ECHANGE) Return the first ProfilAgent filtered by the VISUALISER_ECHANGE column
 * @method ProfilAgent findOneByClotureTransverse(string $CLOTURE_TRANSVERSE) Return the first ProfilAgent filtered by the CLOTURE_TRANSVERSE column
 * @method ProfilAgent findOneByEchangeHorsSys(string $ECHANGE_HORS_SYS) Return the first ProfilAgent filtered by the ECHANGE_HORS_SYS column
 * @method ProfilAgent findOneByEchangeRequerant(string $ECHANGE_REQUERANT) Return the first ProfilAgent filtered by the ECHANGE_REQUERANT column
 * @method ProfilAgent findOneByAffichageReponseFinal(string $AFFICHAGE_REPONSE_FINAL) Return the first ProfilAgent filtered by the AFFICHAGE_REPONSE_FINAL column
 * @method ProfilAgent findOneByRetirerAffectation(string $RETIRER_AFFECTATION) Return the first ProfilAgent filtered by the RETIRER_AFFECTATION column
 * @method ProfilAgent findOneByAffectationExterne(string $AFFECTATION_EXTERNE) Return the first ProfilAgent filtered by the AFFECTATION_EXTERNE column
 * @method ProfilAgent findOneByComplementDemande(string $COMPLEMENT_DEMANDE) Return the first ProfilAgent filtered by the COMPLEMENT_DEMANDE column
 * @method ProfilAgent findOneByEncopieDemande(string $ENCOPIE_DEMANDE) Return the first ProfilAgent filtered by the ENCOPIE_DEMANDE column
 * @method ProfilAgent findOneByModifierDemande(string $MODIFIER_DEMANDE) Return the first ProfilAgent filtered by the MODIFIER_DEMANDE column
 * @method ProfilAgent findOneBySupprimerDemande(string $SUPPRIMER_DEMANDE) Return the first ProfilAgent filtered by the SUPPRIMER_DEMANDE column
 * @method ProfilAgent findOneByVisibiliteMailTelBo(string $VISIBILITE_MAIL_TEL_BO) Return the first ProfilAgent filtered by the VISIBILITE_MAIL_TEL_BO column
 * @method ProfilAgent findOneByAccesAudioCa(string $ACCES_AUDIO_CA) Return the first ProfilAgent filtered by the ACCES_AUDIO_CA column
 * @method ProfilAgent findOneByProlongerDureeTraitement(string $PROLONGER_DUREE_TRAITEMENT) Return the first ProfilAgent filtered by the PROLONGER_DUREE_TRAITEMENT column
 * @method ProfilAgent findOneByModifDemandeAffecte(string $MODIF_DEMANDE_AFFECTE) Return the first ProfilAgent filtered by the MODIF_DEMANDE_AFFECTE column
 * @method ProfilAgent findOneByTableauBordSupervision(string $TABLEAU_BORD_SUPERVISION) Return the first ProfilAgent filtered by the TABLEAU_BORD_SUPERVISION column
 * @method ProfilAgent findOneByStatistiqueSupervision(string $STATISTIQUE_SUPERVISION) Return the first ProfilAgent filtered by the STATISTIQUE_SUPERVISION column
 * @method ProfilAgent findOneBySuiviSupervision(string $SUIVI_SUPERVISION) Return the first ProfilAgent filtered by the SUIVI_SUPERVISION column
 * @method ProfilAgent findOneByForceCloture(string $FORCE_CLOTURE) Return the first ProfilAgent filtered by the FORCE_CLOTURE column
 * @method ProfilAgent findOneByAffecterGroupe(string $AFFECTER_GROUPE) Return the first ProfilAgent filtered by the AFFECTER_GROUPE column
 * @method ProfilAgent findOneByHistoriqueConsultation(string $HISTORIQUE_CONSULTATION) Return the first ProfilAgent filtered by the HISTORIQUE_CONSULTATION column
 *
 * @method array findById(int $ID) Return ProfilAgent objects filtered by the ID column
 * @method array findByLibelleProfilAgent(string $LIBELLE_PROFIL_AGENT) Return ProfilAgent objects filtered by the LIBELLE_PROFIL_AGENT column
 * @method array findByIdProfil(int $ID_PROFIL) Return ProfilAgent objects filtered by the ID_PROFIL column
 * @method array findByIdOrganisme(int $ID_ORGANISME) Return ProfilAgent objects filtered by the ID_ORGANISME column
 * @method array findByMenuMonCompte(string $MENU_MON_COMPTE) Return ProfilAgent objects filtered by the MENU_MON_COMPTE column
 * @method array findByMenuDemandeNouvelles(string $MENU_DEMANDE_NOUVELLES) Return ProfilAgent objects filtered by the MENU_DEMANDE_NOUVELLES column
 * @method array findByMenuDemandeRecherche(string $MENU_DEMANDE_RECHERCHE) Return ProfilAgent objects filtered by the MENU_DEMANDE_RECHERCHE column
 * @method array findByMenuAdmin(string $MENU_ADMIN) Return ProfilAgent objects filtered by the MENU_ADMIN column
 * @method array findByMenuAdminServices(string $MENU_ADMIN_SERVICES) Return ProfilAgent objects filtered by the MENU_ADMIN_SERVICES column
 * @method array findByMenuAdminUtilisateurs(string $MENU_ADMIN_UTILISATEURS) Return ProfilAgent objects filtered by the MENU_ADMIN_UTILISATEURS column
 * @method array findByMenuRapport(string $MENU_RAPPORT) Return ProfilAgent objects filtered by the MENU_RAPPORT column
 * @method array findByMenuRapportMensuel(string $MENU_RAPPORT_MENSUEL) Return ProfilAgent objects filtered by the MENU_RAPPORT_MENSUEL column
 * @method array findByMenuRapportGlobal(string $MENU_RAPPORT_GLOBAL) Return ProfilAgent objects filtered by the MENU_RAPPORT_GLOBAL column
 * @method array findByMenuRapportPersonnalise(string $MENU_RAPPORT_PERSONNALISE) Return ProfilAgent objects filtered by the MENU_RAPPORT_PERSONNALISE column
 * @method array findByMenuAdminEntiteDemandeur(string $MENU_ADMIN_ENTITE_DEMANDEUR) Return ProfilAgent objects filtered by the MENU_ADMIN_ENTITE_DEMANDEUR column
 * @method array findByMenuAdminDemandeurs(string $MENU_ADMIN_DEMANDEURS) Return ProfilAgent objects filtered by the MENU_ADMIN_DEMANDEURS column
 * @method array findByHistorique(string $HISTORIQUE) Return ProfilAgent objects filtered by the HISTORIQUE column
 * @method array findByMenuDemandeAffecteesEntite(string $MENU_DEMANDE_AFFECTEES_ENTITE) Return ProfilAgent objects filtered by the MENU_DEMANDE_AFFECTEES_ENTITE column
 * @method array findByMenuAdminEntite(string $MENU_ADMIN_ENTITE) Return ProfilAgent objects filtered by the MENU_ADMIN_ENTITE column
 * @method array findByMenuAdminTheme(string $MENU_ADMIN_THEME) Return ProfilAgent objects filtered by the MENU_ADMIN_THEME column
 * @method array findByEtatProfil(string $ETAT_PROFIL) Return ProfilAgent objects filtered by the ETAT_PROFIL column
 * @method array findByActionAffecterEntite(string $ACTION_AFFECTER_ENTITE) Return ProfilAgent objects filtered by the ACTION_AFFECTER_ENTITE column
 * @method array findByActionAffecterAgent(string $ACTION_AFFECTER_AGENT) Return ProfilAgent objects filtered by the ACTION_AFFECTER_AGENT column
 * @method array findBySupprimerModifiierDemandeEntite(string $SUPPRIMER_MODIFIIER_DEMANDE_ENTITE) Return ProfilAgent objects filtered by the SUPPRIMER_MODIFIIER_DEMANDE_ENTITE column
 * @method array findBySupprimerModifiierAllDemande(string $SUPPRIMER_MODIFIIER_ALL_DEMANDE) Return ProfilAgent objects filtered by the SUPPRIMER_MODIFIIER_ALL_DEMANDE column
 * @method array findByTraiterTouteDemande(string $TRAITER_TOUTE_DEMANDE) Return ProfilAgent objects filtered by the TRAITER_TOUTE_DEMANDE column
 * @method array findByDateIndicativeReponse(string $DATE_INDICATIVE_REPONSE) Return ProfilAgent objects filtered by the DATE_INDICATIVE_REPONSE column
 * @method array findByModifierTheme(string $MODIFIER_THEME) Return ProfilAgent objects filtered by the MODIFIER_THEME column
 * @method array findByActionRetournerPrecedent(string $ACTION_RETOURNER_PRECEDENT) Return ProfilAgent objects filtered by the ACTION_RETOURNER_PRECEDENT column
 * @method array findByActionClasserErronee(string $ACTION_CLASSER_ERRONEE) Return ProfilAgent objects filtered by the ACTION_CLASSER_ERRONEE column
 * @method array findByActionClasserHa(string $ACTION_CLASSER_HA) Return ProfilAgent objects filtered by the ACTION_CLASSER_HA column
 * @method array findByActionSoumettreReponseCircuit(string $ACTION_SOUMETTRE_REPONSE_CIRCUIT) Return ProfilAgent objects filtered by the ACTION_SOUMETTRE_REPONSE_CIRCUIT column
 * @method array findByActionTransmettreReponseReq(string $ACTION_TRANSMETTRE_REPONSE_REQ) Return ProfilAgent objects filtered by the ACTION_TRANSMETTRE_REPONSE_REQ column
 * @method array findByActionCloturer(string $ACTION_CLOTURER) Return ProfilAgent objects filtered by the ACTION_CLOTURER column
 * @method array findBySuivreDemande(string $SUIVRE_DEMANDE) Return ProfilAgent objects filtered by the SUIVRE_DEMANDE column
 * @method array findByMenuEnProposition(string $MENU_EN_PROPOSITION) Return ProfilAgent objects filtered by the MENU_EN_PROPOSITION column
 * @method array findByLibelleProfilAgentAr(string $LIBELLE_PROFIL_AGENT_AR) Return ProfilAgent objects filtered by the LIBELLE_PROFIL_AGENT_AR column
 * @method array findByActionPartagerDemande(string $ACTION_PARTAGER_DEMANDE) Return ProfilAgent objects filtered by the ACTION_PARTAGER_DEMANDE column
 * @method array findByMenuDemandePartageesEntite(string $MENU_DEMANDE_PARTAGEES_ENTITE) Return ProfilAgent objects filtered by the MENU_DEMANDE_PARTAGEES_ENTITE column
 * @method array findByHabilitationGestionTache(string $HABILITATION_GESTION_TACHE) Return ProfilAgent objects filtered by the HABILITATION_GESTION_TACHE column
 * @method array findByActionAffecterDemandeCloture(string $ACTION_AFFECTER_DEMANDE_CLOTURE) Return ProfilAgent objects filtered by the ACTION_AFFECTER_DEMANDE_CLOTURE column
 * @method array findByVisibiliteDemandeRecu(string $VISIBILITE_DEMANDE_RECU) Return ProfilAgent objects filtered by the VISIBILITE_DEMANDE_RECU column
 * @method array findByMenuMinisteres(string $MENU_MINISTERES) Return ProfilAgent objects filtered by the MENU_MINISTERES column
 * @method array findByDemandesASuivre(string $DEMANDES_A_SUIVRE) Return ProfilAgent objects filtered by the DEMANDES_A_SUIVRE column
 * @method array findByGestionInterim(string $GESTION_INTERIM) Return ProfilAgent objects filtered by the GESTION_INTERIM column
 * @method array findByAffichageSimplifie(string $AFFICHAGE_SIMPLIFIE) Return ProfilAgent objects filtered by the AFFICHAGE_SIMPLIFIE column
 * @method array findBySupprimerTous(string $SUPPRIMER_TOUS) Return ProfilAgent objects filtered by the SUPPRIMER_TOUS column
 * @method array findByAjoutDemande(string $AJOUT_DEMANDE) Return ProfilAgent objects filtered by the AJOUT_DEMANDE column
 * @method array findByTypeAjoutDemande(string $TYPE_AJOUT_DEMANDE) Return ProfilAgent objects filtered by the TYPE_AJOUT_DEMANDE column
 * @method array findByAjoutDemandeEntrante(string $AJOUT_DEMANDE_ENTRANTE) Return ProfilAgent objects filtered by the AJOUT_DEMANDE_ENTRANTE column
 * @method array findByAjoutDemandeSortante(string $AJOUT_DEMANDE_SORTANTE) Return ProfilAgent objects filtered by the AJOUT_DEMANDE_SORTANTE column
 * @method array findByAjoutDemandeSortant(string $AJOUT_DEMANDE_SORTANT) Return ProfilAgent objects filtered by the AJOUT_DEMANDE_SORTANT column
 * @method array findByAjoutDemandeInterne(string $AJOUT_DEMANDE_INTERNE) Return ProfilAgent objects filtered by the AJOUT_DEMANDE_INTERNE column
 * @method array findByAjoutDemandeIntragroupe(string $AJOUT_DEMANDE_INTRAGROUPE) Return ProfilAgent objects filtered by the AJOUT_DEMANDE_INTRAGROUPE column
 * @method array findByModificationCircuitValidationDemande(string $MODIFICATION_CIRCUIT_VALIDATION_DEMANDE) Return ProfilAgent objects filtered by the MODIFICATION_CIRCUIT_VALIDATION_DEMANDE column
 * @method array findByTransfertDemande(string $TRANSFERT_DEMANDE) Return ProfilAgent objects filtered by the TRANSFERT_DEMANDE column
 * @method array findByVisualiserEchange(string $VISUALISER_ECHANGE) Return ProfilAgent objects filtered by the VISUALISER_ECHANGE column
 * @method array findByClotureTransverse(string $CLOTURE_TRANSVERSE) Return ProfilAgent objects filtered by the CLOTURE_TRANSVERSE column
 * @method array findByEchangeHorsSys(string $ECHANGE_HORS_SYS) Return ProfilAgent objects filtered by the ECHANGE_HORS_SYS column
 * @method array findByEchangeRequerant(string $ECHANGE_REQUERANT) Return ProfilAgent objects filtered by the ECHANGE_REQUERANT column
 * @method array findByAffichageReponseFinal(string $AFFICHAGE_REPONSE_FINAL) Return ProfilAgent objects filtered by the AFFICHAGE_REPONSE_FINAL column
 * @method array findByRetirerAffectation(string $RETIRER_AFFECTATION) Return ProfilAgent objects filtered by the RETIRER_AFFECTATION column
 * @method array findByAffectationExterne(string $AFFECTATION_EXTERNE) Return ProfilAgent objects filtered by the AFFECTATION_EXTERNE column
 * @method array findByComplementDemande(string $COMPLEMENT_DEMANDE) Return ProfilAgent objects filtered by the COMPLEMENT_DEMANDE column
 * @method array findByEncopieDemande(string $ENCOPIE_DEMANDE) Return ProfilAgent objects filtered by the ENCOPIE_DEMANDE column
 * @method array findByModifierDemande(string $MODIFIER_DEMANDE) Return ProfilAgent objects filtered by the MODIFIER_DEMANDE column
 * @method array findBySupprimerDemande(string $SUPPRIMER_DEMANDE) Return ProfilAgent objects filtered by the SUPPRIMER_DEMANDE column
 * @method array findByVisibiliteMailTelBo(string $VISIBILITE_MAIL_TEL_BO) Return ProfilAgent objects filtered by the VISIBILITE_MAIL_TEL_BO column
 * @method array findByAccesAudioCa(string $ACCES_AUDIO_CA) Return ProfilAgent objects filtered by the ACCES_AUDIO_CA column
 * @method array findByProlongerDureeTraitement(string $PROLONGER_DUREE_TRAITEMENT) Return ProfilAgent objects filtered by the PROLONGER_DUREE_TRAITEMENT column
 * @method array findByModifDemandeAffecte(string $MODIF_DEMANDE_AFFECTE) Return ProfilAgent objects filtered by the MODIF_DEMANDE_AFFECTE column
 * @method array findByTableauBordSupervision(string $TABLEAU_BORD_SUPERVISION) Return ProfilAgent objects filtered by the TABLEAU_BORD_SUPERVISION column
 * @method array findByStatistiqueSupervision(string $STATISTIQUE_SUPERVISION) Return ProfilAgent objects filtered by the STATISTIQUE_SUPERVISION column
 * @method array findBySuiviSupervision(string $SUIVI_SUPERVISION) Return ProfilAgent objects filtered by the SUIVI_SUPERVISION column
 * @method array findByForceCloture(string $FORCE_CLOTURE) Return ProfilAgent objects filtered by the FORCE_CLOTURE column
 * @method array findByAffecterGroupe(string $AFFECTER_GROUPE) Return ProfilAgent objects filtered by the AFFECTER_GROUPE column
 * @method array findByHistoriqueConsultation(string $HISTORIQUE_CONSULTATION) Return ProfilAgent objects filtered by the HISTORIQUE_CONSULTATION column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseProfilAgentQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseProfilAgentQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'ProfilAgent', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ProfilAgentQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ProfilAgentQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ProfilAgentQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ProfilAgentQuery) {
            return $criteria;
        }
        $query = new ProfilAgentQuery();
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
     * @return   ProfilAgent|ProfilAgent[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ProfilAgentPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ProfilAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ProfilAgent A model object, or null if the key is not found
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
     * @return                 ProfilAgent A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `LIBELLE_PROFIL_AGENT`, `ID_PROFIL`, `ID_ORGANISME`, `MENU_MON_COMPTE`, `MENU_DEMANDE_NOUVELLES`, `MENU_DEMANDE_RECHERCHE`, `MENU_ADMIN`, `MENU_ADMIN_SERVICES`, `MENU_ADMIN_UTILISATEURS`, `MENU_RAPPORT`, `MENU_RAPPORT_MENSUEL`, `MENU_RAPPORT_GLOBAL`, `MENU_RAPPORT_PERSONNALISE`, `MENU_ADMIN_ENTITE_DEMANDEUR`, `MENU_ADMIN_DEMANDEURS`, `HISTORIQUE`, `MENU_DEMANDE_AFFECTEES_ENTITE`, `MENU_ADMIN_ENTITE`, `MENU_ADMIN_THEME`, `ETAT_PROFIL`, `ACTION_AFFECTER_ENTITE`, `ACTION_AFFECTER_AGENT`, `SUPPRIMER_MODIFIIER_DEMANDE_ENTITE`, `SUPPRIMER_MODIFIIER_ALL_DEMANDE`, `TRAITER_TOUTE_DEMANDE`, `DATE_INDICATIVE_REPONSE`, `MODIFIER_THEME`, `ACTION_RETOURNER_PRECEDENT`, `ACTION_CLASSER_ERRONEE`, `ACTION_CLASSER_HA`, `ACTION_SOUMETTRE_REPONSE_CIRCUIT`, `ACTION_TRANSMETTRE_REPONSE_REQ`, `ACTION_CLOTURER`, `SUIVRE_DEMANDE`, `MENU_EN_PROPOSITION`, `LIBELLE_PROFIL_AGENT_AR`, `ACTION_PARTAGER_DEMANDE`, `MENU_DEMANDE_PARTAGEES_ENTITE`, `HABILITATION_GESTION_TACHE`, `ACTION_AFFECTER_DEMANDE_CLOTURE`, `VISIBILITE_DEMANDE_RECU`, `MENU_MINISTERES`, `DEMANDES_A_SUIVRE`, `GESTION_INTERIM`, `AFFICHAGE_SIMPLIFIE`, `SUPPRIMER_TOUS`, `AJOUT_DEMANDE`, `TYPE_AJOUT_DEMANDE`, `AJOUT_DEMANDE_ENTRANTE`, `AJOUT_DEMANDE_SORTANTE`, `AJOUT_DEMANDE_SORTANT`, `AJOUT_DEMANDE_INTERNE`, `AJOUT_DEMANDE_INTRAGROUPE`, `MODIFICATION_CIRCUIT_VALIDATION_DEMANDE`, `TRANSFERT_DEMANDE`, `VISUALISER_ECHANGE`, `CLOTURE_TRANSVERSE`, `ECHANGE_HORS_SYS`, `ECHANGE_REQUERANT`, `AFFICHAGE_REPONSE_FINAL`, `RETIRER_AFFECTATION`, `AFFECTATION_EXTERNE`, `COMPLEMENT_DEMANDE`, `ENCOPIE_DEMANDE`, `MODIFIER_DEMANDE`, `SUPPRIMER_DEMANDE`, `VISIBILITE_MAIL_TEL_BO`, `ACCES_AUDIO_CA`, `PROLONGER_DUREE_TRAITEMENT`, `MODIF_DEMANDE_AFFECTE`, `TABLEAU_BORD_SUPERVISION`, `STATISTIQUE_SUPERVISION`, `SUIVI_SUPERVISION`, `FORCE_CLOTURE`, `AFFECTER_GROUPE`, `HISTORIQUE_CONSULTATION` FROM `profil_agent` WHERE `ID` = :p0';
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
            $obj = new ProfilAgent();
            $obj->hydrate($row);
            ProfilAgentPeer::addInstanceToPool($obj, (string) $key);
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
     * @return ProfilAgent|ProfilAgent[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ProfilAgent[]|mixed the list of results, formatted by the current formatter
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
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ProfilAgentPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ProfilAgentPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE ID = 1234
     * $query->filterById(array(12, 34)); // WHERE ID IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE ID >= 12
     * $query->filterById(array('max' => 12)); // WHERE ID <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(ProfilAgentPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(ProfilAgentPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the LIBELLE_PROFIL_AGENT column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleProfilAgent('fooValue');   // WHERE LIBELLE_PROFIL_AGENT = 'fooValue'
     * $query->filterByLibelleProfilAgent('%fooValue%'); // WHERE LIBELLE_PROFIL_AGENT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleProfilAgent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByLibelleProfilAgent($libelleProfilAgent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleProfilAgent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleProfilAgent)) {
                $libelleProfilAgent = str_replace('*', '%', $libelleProfilAgent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::LIBELLE_PROFIL_AGENT, $libelleProfilAgent, $comparison);
    }

    /**
     * Filter the query on the ID_PROFIL column
     *
     * Example usage:
     * <code>
     * $query->filterByIdProfil(1234); // WHERE ID_PROFIL = 1234
     * $query->filterByIdProfil(array(12, 34)); // WHERE ID_PROFIL IN (12, 34)
     * $query->filterByIdProfil(array('min' => 12)); // WHERE ID_PROFIL >= 12
     * $query->filterByIdProfil(array('max' => 12)); // WHERE ID_PROFIL <= 12
     * </code>
     *
     * @param     mixed $idProfil The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByIdProfil($idProfil = null, $comparison = null)
    {
        if (is_array($idProfil)) {
            $useMinMax = false;
            if (isset($idProfil['min'])) {
                $this->addUsingAlias(ProfilAgentPeer::ID_PROFIL, $idProfil['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idProfil['max'])) {
                $this->addUsingAlias(ProfilAgentPeer::ID_PROFIL, $idProfil['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::ID_PROFIL, $idProfil, $comparison);
    }

    /**
     * Filter the query on the ID_ORGANISME column
     *
     * Example usage:
     * <code>
     * $query->filterByIdOrganisme(1234); // WHERE ID_ORGANISME = 1234
     * $query->filterByIdOrganisme(array(12, 34)); // WHERE ID_ORGANISME IN (12, 34)
     * $query->filterByIdOrganisme(array('min' => 12)); // WHERE ID_ORGANISME >= 12
     * $query->filterByIdOrganisme(array('max' => 12)); // WHERE ID_ORGANISME <= 12
     * </code>
     *
     * @param     mixed $idOrganisme The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByIdOrganisme($idOrganisme = null, $comparison = null)
    {
        if (is_array($idOrganisme)) {
            $useMinMax = false;
            if (isset($idOrganisme['min'])) {
                $this->addUsingAlias(ProfilAgentPeer::ID_ORGANISME, $idOrganisme['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idOrganisme['max'])) {
                $this->addUsingAlias(ProfilAgentPeer::ID_ORGANISME, $idOrganisme['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::ID_ORGANISME, $idOrganisme, $comparison);
    }

    /**
     * Filter the query on the MENU_MON_COMPTE column
     *
     * Example usage:
     * <code>
     * $query->filterByMenuMonCompte('fooValue');   // WHERE MENU_MON_COMPTE = 'fooValue'
     * $query->filterByMenuMonCompte('%fooValue%'); // WHERE MENU_MON_COMPTE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $menuMonCompte The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByMenuMonCompte($menuMonCompte = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($menuMonCompte)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $menuMonCompte)) {
                $menuMonCompte = str_replace('*', '%', $menuMonCompte);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::MENU_MON_COMPTE, $menuMonCompte, $comparison);
    }

    /**
     * Filter the query on the MENU_DEMANDE_NOUVELLES column
     *
     * Example usage:
     * <code>
     * $query->filterByMenuDemandeNouvelles('fooValue');   // WHERE MENU_DEMANDE_NOUVELLES = 'fooValue'
     * $query->filterByMenuDemandeNouvelles('%fooValue%'); // WHERE MENU_DEMANDE_NOUVELLES LIKE '%fooValue%'
     * </code>
     *
     * @param     string $menuDemandeNouvelles The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByMenuDemandeNouvelles($menuDemandeNouvelles = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($menuDemandeNouvelles)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $menuDemandeNouvelles)) {
                $menuDemandeNouvelles = str_replace('*', '%', $menuDemandeNouvelles);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::MENU_DEMANDE_NOUVELLES, $menuDemandeNouvelles, $comparison);
    }

    /**
     * Filter the query on the MENU_DEMANDE_RECHERCHE column
     *
     * Example usage:
     * <code>
     * $query->filterByMenuDemandeRecherche('fooValue');   // WHERE MENU_DEMANDE_RECHERCHE = 'fooValue'
     * $query->filterByMenuDemandeRecherche('%fooValue%'); // WHERE MENU_DEMANDE_RECHERCHE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $menuDemandeRecherche The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByMenuDemandeRecherche($menuDemandeRecherche = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($menuDemandeRecherche)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $menuDemandeRecherche)) {
                $menuDemandeRecherche = str_replace('*', '%', $menuDemandeRecherche);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::MENU_DEMANDE_RECHERCHE, $menuDemandeRecherche, $comparison);
    }

    /**
     * Filter the query on the MENU_ADMIN column
     *
     * Example usage:
     * <code>
     * $query->filterByMenuAdmin('fooValue');   // WHERE MENU_ADMIN = 'fooValue'
     * $query->filterByMenuAdmin('%fooValue%'); // WHERE MENU_ADMIN LIKE '%fooValue%'
     * </code>
     *
     * @param     string $menuAdmin The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByMenuAdmin($menuAdmin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($menuAdmin)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $menuAdmin)) {
                $menuAdmin = str_replace('*', '%', $menuAdmin);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::MENU_ADMIN, $menuAdmin, $comparison);
    }

    /**
     * Filter the query on the MENU_ADMIN_SERVICES column
     *
     * Example usage:
     * <code>
     * $query->filterByMenuAdminServices('fooValue');   // WHERE MENU_ADMIN_SERVICES = 'fooValue'
     * $query->filterByMenuAdminServices('%fooValue%'); // WHERE MENU_ADMIN_SERVICES LIKE '%fooValue%'
     * </code>
     *
     * @param     string $menuAdminServices The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByMenuAdminServices($menuAdminServices = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($menuAdminServices)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $menuAdminServices)) {
                $menuAdminServices = str_replace('*', '%', $menuAdminServices);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::MENU_ADMIN_SERVICES, $menuAdminServices, $comparison);
    }

    /**
     * Filter the query on the MENU_ADMIN_UTILISATEURS column
     *
     * Example usage:
     * <code>
     * $query->filterByMenuAdminUtilisateurs('fooValue');   // WHERE MENU_ADMIN_UTILISATEURS = 'fooValue'
     * $query->filterByMenuAdminUtilisateurs('%fooValue%'); // WHERE MENU_ADMIN_UTILISATEURS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $menuAdminUtilisateurs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByMenuAdminUtilisateurs($menuAdminUtilisateurs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($menuAdminUtilisateurs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $menuAdminUtilisateurs)) {
                $menuAdminUtilisateurs = str_replace('*', '%', $menuAdminUtilisateurs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::MENU_ADMIN_UTILISATEURS, $menuAdminUtilisateurs, $comparison);
    }

    /**
     * Filter the query on the MENU_RAPPORT column
     *
     * Example usage:
     * <code>
     * $query->filterByMenuRapport('fooValue');   // WHERE MENU_RAPPORT = 'fooValue'
     * $query->filterByMenuRapport('%fooValue%'); // WHERE MENU_RAPPORT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $menuRapport The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByMenuRapport($menuRapport = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($menuRapport)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $menuRapport)) {
                $menuRapport = str_replace('*', '%', $menuRapport);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::MENU_RAPPORT, $menuRapport, $comparison);
    }

    /**
     * Filter the query on the MENU_RAPPORT_MENSUEL column
     *
     * Example usage:
     * <code>
     * $query->filterByMenuRapportMensuel('fooValue');   // WHERE MENU_RAPPORT_MENSUEL = 'fooValue'
     * $query->filterByMenuRapportMensuel('%fooValue%'); // WHERE MENU_RAPPORT_MENSUEL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $menuRapportMensuel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByMenuRapportMensuel($menuRapportMensuel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($menuRapportMensuel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $menuRapportMensuel)) {
                $menuRapportMensuel = str_replace('*', '%', $menuRapportMensuel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::MENU_RAPPORT_MENSUEL, $menuRapportMensuel, $comparison);
    }

    /**
     * Filter the query on the MENU_RAPPORT_GLOBAL column
     *
     * Example usage:
     * <code>
     * $query->filterByMenuRapportGlobal('fooValue');   // WHERE MENU_RAPPORT_GLOBAL = 'fooValue'
     * $query->filterByMenuRapportGlobal('%fooValue%'); // WHERE MENU_RAPPORT_GLOBAL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $menuRapportGlobal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByMenuRapportGlobal($menuRapportGlobal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($menuRapportGlobal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $menuRapportGlobal)) {
                $menuRapportGlobal = str_replace('*', '%', $menuRapportGlobal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::MENU_RAPPORT_GLOBAL, $menuRapportGlobal, $comparison);
    }

    /**
     * Filter the query on the MENU_RAPPORT_PERSONNALISE column
     *
     * Example usage:
     * <code>
     * $query->filterByMenuRapportPersonnalise('fooValue');   // WHERE MENU_RAPPORT_PERSONNALISE = 'fooValue'
     * $query->filterByMenuRapportPersonnalise('%fooValue%'); // WHERE MENU_RAPPORT_PERSONNALISE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $menuRapportPersonnalise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByMenuRapportPersonnalise($menuRapportPersonnalise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($menuRapportPersonnalise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $menuRapportPersonnalise)) {
                $menuRapportPersonnalise = str_replace('*', '%', $menuRapportPersonnalise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::MENU_RAPPORT_PERSONNALISE, $menuRapportPersonnalise, $comparison);
    }

    /**
     * Filter the query on the MENU_ADMIN_ENTITE_DEMANDEUR column
     *
     * Example usage:
     * <code>
     * $query->filterByMenuAdminEntiteDemandeur('fooValue');   // WHERE MENU_ADMIN_ENTITE_DEMANDEUR = 'fooValue'
     * $query->filterByMenuAdminEntiteDemandeur('%fooValue%'); // WHERE MENU_ADMIN_ENTITE_DEMANDEUR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $menuAdminEntiteDemandeur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByMenuAdminEntiteDemandeur($menuAdminEntiteDemandeur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($menuAdminEntiteDemandeur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $menuAdminEntiteDemandeur)) {
                $menuAdminEntiteDemandeur = str_replace('*', '%', $menuAdminEntiteDemandeur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::MENU_ADMIN_ENTITE_DEMANDEUR, $menuAdminEntiteDemandeur, $comparison);
    }

    /**
     * Filter the query on the MENU_ADMIN_DEMANDEURS column
     *
     * Example usage:
     * <code>
     * $query->filterByMenuAdminDemandeurs('fooValue');   // WHERE MENU_ADMIN_DEMANDEURS = 'fooValue'
     * $query->filterByMenuAdminDemandeurs('%fooValue%'); // WHERE MENU_ADMIN_DEMANDEURS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $menuAdminDemandeurs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByMenuAdminDemandeurs($menuAdminDemandeurs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($menuAdminDemandeurs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $menuAdminDemandeurs)) {
                $menuAdminDemandeurs = str_replace('*', '%', $menuAdminDemandeurs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::MENU_ADMIN_DEMANDEURS, $menuAdminDemandeurs, $comparison);
    }

    /**
     * Filter the query on the HISTORIQUE column
     *
     * Example usage:
     * <code>
     * $query->filterByHistorique('fooValue');   // WHERE HISTORIQUE = 'fooValue'
     * $query->filterByHistorique('%fooValue%'); // WHERE HISTORIQUE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $historique The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByHistorique($historique = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($historique)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $historique)) {
                $historique = str_replace('*', '%', $historique);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::HISTORIQUE, $historique, $comparison);
    }

    /**
     * Filter the query on the MENU_DEMANDE_AFFECTEES_ENTITE column
     *
     * Example usage:
     * <code>
     * $query->filterByMenuDemandeAffecteesEntite('fooValue');   // WHERE MENU_DEMANDE_AFFECTEES_ENTITE = 'fooValue'
     * $query->filterByMenuDemandeAffecteesEntite('%fooValue%'); // WHERE MENU_DEMANDE_AFFECTEES_ENTITE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $menuDemandeAffecteesEntite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByMenuDemandeAffecteesEntite($menuDemandeAffecteesEntite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($menuDemandeAffecteesEntite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $menuDemandeAffecteesEntite)) {
                $menuDemandeAffecteesEntite = str_replace('*', '%', $menuDemandeAffecteesEntite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::MENU_DEMANDE_AFFECTEES_ENTITE, $menuDemandeAffecteesEntite, $comparison);
    }

    /**
     * Filter the query on the MENU_ADMIN_ENTITE column
     *
     * Example usage:
     * <code>
     * $query->filterByMenuAdminEntite('fooValue');   // WHERE MENU_ADMIN_ENTITE = 'fooValue'
     * $query->filterByMenuAdminEntite('%fooValue%'); // WHERE MENU_ADMIN_ENTITE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $menuAdminEntite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByMenuAdminEntite($menuAdminEntite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($menuAdminEntite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $menuAdminEntite)) {
                $menuAdminEntite = str_replace('*', '%', $menuAdminEntite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::MENU_ADMIN_ENTITE, $menuAdminEntite, $comparison);
    }

    /**
     * Filter the query on the MENU_ADMIN_THEME column
     *
     * Example usage:
     * <code>
     * $query->filterByMenuAdminTheme('fooValue');   // WHERE MENU_ADMIN_THEME = 'fooValue'
     * $query->filterByMenuAdminTheme('%fooValue%'); // WHERE MENU_ADMIN_THEME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $menuAdminTheme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByMenuAdminTheme($menuAdminTheme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($menuAdminTheme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $menuAdminTheme)) {
                $menuAdminTheme = str_replace('*', '%', $menuAdminTheme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::MENU_ADMIN_THEME, $menuAdminTheme, $comparison);
    }

    /**
     * Filter the query on the ETAT_PROFIL column
     *
     * Example usage:
     * <code>
     * $query->filterByEtatProfil('fooValue');   // WHERE ETAT_PROFIL = 'fooValue'
     * $query->filterByEtatProfil('%fooValue%'); // WHERE ETAT_PROFIL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $etatProfil The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByEtatProfil($etatProfil = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($etatProfil)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $etatProfil)) {
                $etatProfil = str_replace('*', '%', $etatProfil);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::ETAT_PROFIL, $etatProfil, $comparison);
    }

    /**
     * Filter the query on the ACTION_AFFECTER_ENTITE column
     *
     * Example usage:
     * <code>
     * $query->filterByActionAffecterEntite('fooValue');   // WHERE ACTION_AFFECTER_ENTITE = 'fooValue'
     * $query->filterByActionAffecterEntite('%fooValue%'); // WHERE ACTION_AFFECTER_ENTITE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $actionAffecterEntite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByActionAffecterEntite($actionAffecterEntite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($actionAffecterEntite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $actionAffecterEntite)) {
                $actionAffecterEntite = str_replace('*', '%', $actionAffecterEntite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::ACTION_AFFECTER_ENTITE, $actionAffecterEntite, $comparison);
    }

    /**
     * Filter the query on the ACTION_AFFECTER_AGENT column
     *
     * Example usage:
     * <code>
     * $query->filterByActionAffecterAgent('fooValue');   // WHERE ACTION_AFFECTER_AGENT = 'fooValue'
     * $query->filterByActionAffecterAgent('%fooValue%'); // WHERE ACTION_AFFECTER_AGENT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $actionAffecterAgent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByActionAffecterAgent($actionAffecterAgent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($actionAffecterAgent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $actionAffecterAgent)) {
                $actionAffecterAgent = str_replace('*', '%', $actionAffecterAgent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::ACTION_AFFECTER_AGENT, $actionAffecterAgent, $comparison);
    }

    /**
     * Filter the query on the SUPPRIMER_MODIFIIER_DEMANDE_ENTITE column
     *
     * Example usage:
     * <code>
     * $query->filterBySupprimerModifiierDemandeEntite('fooValue');   // WHERE SUPPRIMER_MODIFIIER_DEMANDE_ENTITE = 'fooValue'
     * $query->filterBySupprimerModifiierDemandeEntite('%fooValue%'); // WHERE SUPPRIMER_MODIFIIER_DEMANDE_ENTITE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $supprimerModifiierDemandeEntite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterBySupprimerModifiierDemandeEntite($supprimerModifiierDemandeEntite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($supprimerModifiierDemandeEntite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $supprimerModifiierDemandeEntite)) {
                $supprimerModifiierDemandeEntite = str_replace('*', '%', $supprimerModifiierDemandeEntite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::SUPPRIMER_MODIFIIER_DEMANDE_ENTITE, $supprimerModifiierDemandeEntite, $comparison);
    }

    /**
     * Filter the query on the SUPPRIMER_MODIFIIER_ALL_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterBySupprimerModifiierAllDemande('fooValue');   // WHERE SUPPRIMER_MODIFIIER_ALL_DEMANDE = 'fooValue'
     * $query->filterBySupprimerModifiierAllDemande('%fooValue%'); // WHERE SUPPRIMER_MODIFIIER_ALL_DEMANDE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $supprimerModifiierAllDemande The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterBySupprimerModifiierAllDemande($supprimerModifiierAllDemande = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($supprimerModifiierAllDemande)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $supprimerModifiierAllDemande)) {
                $supprimerModifiierAllDemande = str_replace('*', '%', $supprimerModifiierAllDemande);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::SUPPRIMER_MODIFIIER_ALL_DEMANDE, $supprimerModifiierAllDemande, $comparison);
    }

    /**
     * Filter the query on the TRAITER_TOUTE_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByTraiterTouteDemande('fooValue');   // WHERE TRAITER_TOUTE_DEMANDE = 'fooValue'
     * $query->filterByTraiterTouteDemande('%fooValue%'); // WHERE TRAITER_TOUTE_DEMANDE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $traiterTouteDemande The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByTraiterTouteDemande($traiterTouteDemande = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($traiterTouteDemande)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $traiterTouteDemande)) {
                $traiterTouteDemande = str_replace('*', '%', $traiterTouteDemande);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::TRAITER_TOUTE_DEMANDE, $traiterTouteDemande, $comparison);
    }

    /**
     * Filter the query on the DATE_INDICATIVE_REPONSE column
     *
     * Example usage:
     * <code>
     * $query->filterByDateIndicativeReponse('fooValue');   // WHERE DATE_INDICATIVE_REPONSE = 'fooValue'
     * $query->filterByDateIndicativeReponse('%fooValue%'); // WHERE DATE_INDICATIVE_REPONSE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateIndicativeReponse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByDateIndicativeReponse($dateIndicativeReponse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateIndicativeReponse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateIndicativeReponse)) {
                $dateIndicativeReponse = str_replace('*', '%', $dateIndicativeReponse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::DATE_INDICATIVE_REPONSE, $dateIndicativeReponse, $comparison);
    }

    /**
     * Filter the query on the MODIFIER_THEME column
     *
     * Example usage:
     * <code>
     * $query->filterByModifierTheme('fooValue');   // WHERE MODIFIER_THEME = 'fooValue'
     * $query->filterByModifierTheme('%fooValue%'); // WHERE MODIFIER_THEME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $modifierTheme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByModifierTheme($modifierTheme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifierTheme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $modifierTheme)) {
                $modifierTheme = str_replace('*', '%', $modifierTheme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::MODIFIER_THEME, $modifierTheme, $comparison);
    }

    /**
     * Filter the query on the ACTION_RETOURNER_PRECEDENT column
     *
     * Example usage:
     * <code>
     * $query->filterByActionRetournerPrecedent('fooValue');   // WHERE ACTION_RETOURNER_PRECEDENT = 'fooValue'
     * $query->filterByActionRetournerPrecedent('%fooValue%'); // WHERE ACTION_RETOURNER_PRECEDENT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $actionRetournerPrecedent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByActionRetournerPrecedent($actionRetournerPrecedent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($actionRetournerPrecedent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $actionRetournerPrecedent)) {
                $actionRetournerPrecedent = str_replace('*', '%', $actionRetournerPrecedent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::ACTION_RETOURNER_PRECEDENT, $actionRetournerPrecedent, $comparison);
    }

    /**
     * Filter the query on the ACTION_CLASSER_ERRONEE column
     *
     * Example usage:
     * <code>
     * $query->filterByActionClasserErronee('fooValue');   // WHERE ACTION_CLASSER_ERRONEE = 'fooValue'
     * $query->filterByActionClasserErronee('%fooValue%'); // WHERE ACTION_CLASSER_ERRONEE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $actionClasserErronee The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByActionClasserErronee($actionClasserErronee = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($actionClasserErronee)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $actionClasserErronee)) {
                $actionClasserErronee = str_replace('*', '%', $actionClasserErronee);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::ACTION_CLASSER_ERRONEE, $actionClasserErronee, $comparison);
    }

    /**
     * Filter the query on the ACTION_CLASSER_HA column
     *
     * Example usage:
     * <code>
     * $query->filterByActionClasserHa('fooValue');   // WHERE ACTION_CLASSER_HA = 'fooValue'
     * $query->filterByActionClasserHa('%fooValue%'); // WHERE ACTION_CLASSER_HA LIKE '%fooValue%'
     * </code>
     *
     * @param     string $actionClasserHa The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByActionClasserHa($actionClasserHa = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($actionClasserHa)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $actionClasserHa)) {
                $actionClasserHa = str_replace('*', '%', $actionClasserHa);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::ACTION_CLASSER_HA, $actionClasserHa, $comparison);
    }

    /**
     * Filter the query on the ACTION_SOUMETTRE_REPONSE_CIRCUIT column
     *
     * Example usage:
     * <code>
     * $query->filterByActionSoumettreReponseCircuit('fooValue');   // WHERE ACTION_SOUMETTRE_REPONSE_CIRCUIT = 'fooValue'
     * $query->filterByActionSoumettreReponseCircuit('%fooValue%'); // WHERE ACTION_SOUMETTRE_REPONSE_CIRCUIT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $actionSoumettreReponseCircuit The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByActionSoumettreReponseCircuit($actionSoumettreReponseCircuit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($actionSoumettreReponseCircuit)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $actionSoumettreReponseCircuit)) {
                $actionSoumettreReponseCircuit = str_replace('*', '%', $actionSoumettreReponseCircuit);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::ACTION_SOUMETTRE_REPONSE_CIRCUIT, $actionSoumettreReponseCircuit, $comparison);
    }

    /**
     * Filter the query on the ACTION_TRANSMETTRE_REPONSE_REQ column
     *
     * Example usage:
     * <code>
     * $query->filterByActionTransmettreReponseReq('fooValue');   // WHERE ACTION_TRANSMETTRE_REPONSE_REQ = 'fooValue'
     * $query->filterByActionTransmettreReponseReq('%fooValue%'); // WHERE ACTION_TRANSMETTRE_REPONSE_REQ LIKE '%fooValue%'
     * </code>
     *
     * @param     string $actionTransmettreReponseReq The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByActionTransmettreReponseReq($actionTransmettreReponseReq = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($actionTransmettreReponseReq)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $actionTransmettreReponseReq)) {
                $actionTransmettreReponseReq = str_replace('*', '%', $actionTransmettreReponseReq);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::ACTION_TRANSMETTRE_REPONSE_REQ, $actionTransmettreReponseReq, $comparison);
    }

    /**
     * Filter the query on the ACTION_CLOTURER column
     *
     * Example usage:
     * <code>
     * $query->filterByActionCloturer('fooValue');   // WHERE ACTION_CLOTURER = 'fooValue'
     * $query->filterByActionCloturer('%fooValue%'); // WHERE ACTION_CLOTURER LIKE '%fooValue%'
     * </code>
     *
     * @param     string $actionCloturer The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByActionCloturer($actionCloturer = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($actionCloturer)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $actionCloturer)) {
                $actionCloturer = str_replace('*', '%', $actionCloturer);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::ACTION_CLOTURER, $actionCloturer, $comparison);
    }

    /**
     * Filter the query on the SUIVRE_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterBySuivreDemande('fooValue');   // WHERE SUIVRE_DEMANDE = 'fooValue'
     * $query->filterBySuivreDemande('%fooValue%'); // WHERE SUIVRE_DEMANDE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $suivreDemande The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterBySuivreDemande($suivreDemande = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($suivreDemande)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $suivreDemande)) {
                $suivreDemande = str_replace('*', '%', $suivreDemande);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::SUIVRE_DEMANDE, $suivreDemande, $comparison);
    }

    /**
     * Filter the query on the MENU_EN_PROPOSITION column
     *
     * Example usage:
     * <code>
     * $query->filterByMenuEnProposition('fooValue');   // WHERE MENU_EN_PROPOSITION = 'fooValue'
     * $query->filterByMenuEnProposition('%fooValue%'); // WHERE MENU_EN_PROPOSITION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $menuEnProposition The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByMenuEnProposition($menuEnProposition = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($menuEnProposition)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $menuEnProposition)) {
                $menuEnProposition = str_replace('*', '%', $menuEnProposition);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::MENU_EN_PROPOSITION, $menuEnProposition, $comparison);
    }

    /**
     * Filter the query on the LIBELLE_PROFIL_AGENT_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleProfilAgentAr('fooValue');   // WHERE LIBELLE_PROFIL_AGENT_AR = 'fooValue'
     * $query->filterByLibelleProfilAgentAr('%fooValue%'); // WHERE LIBELLE_PROFIL_AGENT_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleProfilAgentAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByLibelleProfilAgentAr($libelleProfilAgentAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleProfilAgentAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleProfilAgentAr)) {
                $libelleProfilAgentAr = str_replace('*', '%', $libelleProfilAgentAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::LIBELLE_PROFIL_AGENT_AR, $libelleProfilAgentAr, $comparison);
    }

    /**
     * Filter the query on the ACTION_PARTAGER_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByActionPartagerDemande('fooValue');   // WHERE ACTION_PARTAGER_DEMANDE = 'fooValue'
     * $query->filterByActionPartagerDemande('%fooValue%'); // WHERE ACTION_PARTAGER_DEMANDE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $actionPartagerDemande The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByActionPartagerDemande($actionPartagerDemande = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($actionPartagerDemande)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $actionPartagerDemande)) {
                $actionPartagerDemande = str_replace('*', '%', $actionPartagerDemande);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::ACTION_PARTAGER_DEMANDE, $actionPartagerDemande, $comparison);
    }

    /**
     * Filter the query on the MENU_DEMANDE_PARTAGEES_ENTITE column
     *
     * Example usage:
     * <code>
     * $query->filterByMenuDemandePartageesEntite('fooValue');   // WHERE MENU_DEMANDE_PARTAGEES_ENTITE = 'fooValue'
     * $query->filterByMenuDemandePartageesEntite('%fooValue%'); // WHERE MENU_DEMANDE_PARTAGEES_ENTITE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $menuDemandePartageesEntite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByMenuDemandePartageesEntite($menuDemandePartageesEntite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($menuDemandePartageesEntite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $menuDemandePartageesEntite)) {
                $menuDemandePartageesEntite = str_replace('*', '%', $menuDemandePartageesEntite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::MENU_DEMANDE_PARTAGEES_ENTITE, $menuDemandePartageesEntite, $comparison);
    }

    /**
     * Filter the query on the HABILITATION_GESTION_TACHE column
     *
     * Example usage:
     * <code>
     * $query->filterByHabilitationGestionTache('fooValue');   // WHERE HABILITATION_GESTION_TACHE = 'fooValue'
     * $query->filterByHabilitationGestionTache('%fooValue%'); // WHERE HABILITATION_GESTION_TACHE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $habilitationGestionTache The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByHabilitationGestionTache($habilitationGestionTache = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($habilitationGestionTache)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $habilitationGestionTache)) {
                $habilitationGestionTache = str_replace('*', '%', $habilitationGestionTache);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::HABILITATION_GESTION_TACHE, $habilitationGestionTache, $comparison);
    }

    /**
     * Filter the query on the ACTION_AFFECTER_DEMANDE_CLOTURE column
     *
     * Example usage:
     * <code>
     * $query->filterByActionAffecterDemandeCloture('fooValue');   // WHERE ACTION_AFFECTER_DEMANDE_CLOTURE = 'fooValue'
     * $query->filterByActionAffecterDemandeCloture('%fooValue%'); // WHERE ACTION_AFFECTER_DEMANDE_CLOTURE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $actionAffecterDemandeCloture The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByActionAffecterDemandeCloture($actionAffecterDemandeCloture = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($actionAffecterDemandeCloture)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $actionAffecterDemandeCloture)) {
                $actionAffecterDemandeCloture = str_replace('*', '%', $actionAffecterDemandeCloture);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::ACTION_AFFECTER_DEMANDE_CLOTURE, $actionAffecterDemandeCloture, $comparison);
    }

    /**
     * Filter the query on the VISIBILITE_DEMANDE_RECU column
     *
     * Example usage:
     * <code>
     * $query->filterByVisibiliteDemandeRecu('fooValue');   // WHERE VISIBILITE_DEMANDE_RECU = 'fooValue'
     * $query->filterByVisibiliteDemandeRecu('%fooValue%'); // WHERE VISIBILITE_DEMANDE_RECU LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visibiliteDemandeRecu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByVisibiliteDemandeRecu($visibiliteDemandeRecu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visibiliteDemandeRecu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visibiliteDemandeRecu)) {
                $visibiliteDemandeRecu = str_replace('*', '%', $visibiliteDemandeRecu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::VISIBILITE_DEMANDE_RECU, $visibiliteDemandeRecu, $comparison);
    }

    /**
     * Filter the query on the MENU_MINISTERES column
     *
     * Example usage:
     * <code>
     * $query->filterByMenuMinisteres('fooValue');   // WHERE MENU_MINISTERES = 'fooValue'
     * $query->filterByMenuMinisteres('%fooValue%'); // WHERE MENU_MINISTERES LIKE '%fooValue%'
     * </code>
     *
     * @param     string $menuMinisteres The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByMenuMinisteres($menuMinisteres = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($menuMinisteres)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $menuMinisteres)) {
                $menuMinisteres = str_replace('*', '%', $menuMinisteres);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::MENU_MINISTERES, $menuMinisteres, $comparison);
    }

    /**
     * Filter the query on the DEMANDES_A_SUIVRE column
     *
     * Example usage:
     * <code>
     * $query->filterByDemandesASuivre('fooValue');   // WHERE DEMANDES_A_SUIVRE = 'fooValue'
     * $query->filterByDemandesASuivre('%fooValue%'); // WHERE DEMANDES_A_SUIVRE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $demandesASuivre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByDemandesASuivre($demandesASuivre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($demandesASuivre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $demandesASuivre)) {
                $demandesASuivre = str_replace('*', '%', $demandesASuivre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::DEMANDES_A_SUIVRE, $demandesASuivre, $comparison);
    }

    /**
     * Filter the query on the GESTION_INTERIM column
     *
     * Example usage:
     * <code>
     * $query->filterByGestionInterim('fooValue');   // WHERE GESTION_INTERIM = 'fooValue'
     * $query->filterByGestionInterim('%fooValue%'); // WHERE GESTION_INTERIM LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gestionInterim The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByGestionInterim($gestionInterim = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gestionInterim)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gestionInterim)) {
                $gestionInterim = str_replace('*', '%', $gestionInterim);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::GESTION_INTERIM, $gestionInterim, $comparison);
    }

    /**
     * Filter the query on the AFFICHAGE_SIMPLIFIE column
     *
     * Example usage:
     * <code>
     * $query->filterByAffichageSimplifie('fooValue');   // WHERE AFFICHAGE_SIMPLIFIE = 'fooValue'
     * $query->filterByAffichageSimplifie('%fooValue%'); // WHERE AFFICHAGE_SIMPLIFIE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $affichageSimplifie The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByAffichageSimplifie($affichageSimplifie = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($affichageSimplifie)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $affichageSimplifie)) {
                $affichageSimplifie = str_replace('*', '%', $affichageSimplifie);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::AFFICHAGE_SIMPLIFIE, $affichageSimplifie, $comparison);
    }

    /**
     * Filter the query on the SUPPRIMER_TOUS column
     *
     * Example usage:
     * <code>
     * $query->filterBySupprimerTous('fooValue');   // WHERE SUPPRIMER_TOUS = 'fooValue'
     * $query->filterBySupprimerTous('%fooValue%'); // WHERE SUPPRIMER_TOUS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $supprimerTous The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterBySupprimerTous($supprimerTous = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($supprimerTous)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $supprimerTous)) {
                $supprimerTous = str_replace('*', '%', $supprimerTous);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::SUPPRIMER_TOUS, $supprimerTous, $comparison);
    }

    /**
     * Filter the query on the AJOUT_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByAjoutDemande('fooValue');   // WHERE AJOUT_DEMANDE = 'fooValue'
     * $query->filterByAjoutDemande('%fooValue%'); // WHERE AJOUT_DEMANDE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ajoutDemande The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByAjoutDemande($ajoutDemande = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ajoutDemande)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ajoutDemande)) {
                $ajoutDemande = str_replace('*', '%', $ajoutDemande);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::AJOUT_DEMANDE, $ajoutDemande, $comparison);
    }

    /**
     * Filter the query on the TYPE_AJOUT_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeAjoutDemande('fooValue');   // WHERE TYPE_AJOUT_DEMANDE = 'fooValue'
     * $query->filterByTypeAjoutDemande('%fooValue%'); // WHERE TYPE_AJOUT_DEMANDE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeAjoutDemande The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByTypeAjoutDemande($typeAjoutDemande = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeAjoutDemande)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeAjoutDemande)) {
                $typeAjoutDemande = str_replace('*', '%', $typeAjoutDemande);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::TYPE_AJOUT_DEMANDE, $typeAjoutDemande, $comparison);
    }

    /**
     * Filter the query on the AJOUT_DEMANDE_ENTRANTE column
     *
     * Example usage:
     * <code>
     * $query->filterByAjoutDemandeEntrante('fooValue');   // WHERE AJOUT_DEMANDE_ENTRANTE = 'fooValue'
     * $query->filterByAjoutDemandeEntrante('%fooValue%'); // WHERE AJOUT_DEMANDE_ENTRANTE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ajoutDemandeEntrante The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByAjoutDemandeEntrante($ajoutDemandeEntrante = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ajoutDemandeEntrante)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ajoutDemandeEntrante)) {
                $ajoutDemandeEntrante = str_replace('*', '%', $ajoutDemandeEntrante);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::AJOUT_DEMANDE_ENTRANTE, $ajoutDemandeEntrante, $comparison);
    }

    /**
     * Filter the query on the AJOUT_DEMANDE_SORTANTE column
     *
     * Example usage:
     * <code>
     * $query->filterByAjoutDemandeSortante('fooValue');   // WHERE AJOUT_DEMANDE_SORTANTE = 'fooValue'
     * $query->filterByAjoutDemandeSortante('%fooValue%'); // WHERE AJOUT_DEMANDE_SORTANTE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ajoutDemandeSortante The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByAjoutDemandeSortante($ajoutDemandeSortante = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ajoutDemandeSortante)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ajoutDemandeSortante)) {
                $ajoutDemandeSortante = str_replace('*', '%', $ajoutDemandeSortante);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::AJOUT_DEMANDE_SORTANTE, $ajoutDemandeSortante, $comparison);
    }

    /**
     * Filter the query on the AJOUT_DEMANDE_SORTANT column
     *
     * Example usage:
     * <code>
     * $query->filterByAjoutDemandeSortant('fooValue');   // WHERE AJOUT_DEMANDE_SORTANT = 'fooValue'
     * $query->filterByAjoutDemandeSortant('%fooValue%'); // WHERE AJOUT_DEMANDE_SORTANT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ajoutDemandeSortant The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByAjoutDemandeSortant($ajoutDemandeSortant = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ajoutDemandeSortant)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ajoutDemandeSortant)) {
                $ajoutDemandeSortant = str_replace('*', '%', $ajoutDemandeSortant);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::AJOUT_DEMANDE_SORTANT, $ajoutDemandeSortant, $comparison);
    }

    /**
     * Filter the query on the AJOUT_DEMANDE_INTERNE column
     *
     * Example usage:
     * <code>
     * $query->filterByAjoutDemandeInterne('fooValue');   // WHERE AJOUT_DEMANDE_INTERNE = 'fooValue'
     * $query->filterByAjoutDemandeInterne('%fooValue%'); // WHERE AJOUT_DEMANDE_INTERNE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ajoutDemandeInterne The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByAjoutDemandeInterne($ajoutDemandeInterne = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ajoutDemandeInterne)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ajoutDemandeInterne)) {
                $ajoutDemandeInterne = str_replace('*', '%', $ajoutDemandeInterne);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::AJOUT_DEMANDE_INTERNE, $ajoutDemandeInterne, $comparison);
    }

    /**
     * Filter the query on the AJOUT_DEMANDE_INTRAGROUPE column
     *
     * Example usage:
     * <code>
     * $query->filterByAjoutDemandeIntragroupe('fooValue');   // WHERE AJOUT_DEMANDE_INTRAGROUPE = 'fooValue'
     * $query->filterByAjoutDemandeIntragroupe('%fooValue%'); // WHERE AJOUT_DEMANDE_INTRAGROUPE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ajoutDemandeIntragroupe The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByAjoutDemandeIntragroupe($ajoutDemandeIntragroupe = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ajoutDemandeIntragroupe)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ajoutDemandeIntragroupe)) {
                $ajoutDemandeIntragroupe = str_replace('*', '%', $ajoutDemandeIntragroupe);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::AJOUT_DEMANDE_INTRAGROUPE, $ajoutDemandeIntragroupe, $comparison);
    }

    /**
     * Filter the query on the MODIFICATION_CIRCUIT_VALIDATION_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByModificationCircuitValidationDemande('fooValue');   // WHERE MODIFICATION_CIRCUIT_VALIDATION_DEMANDE = 'fooValue'
     * $query->filterByModificationCircuitValidationDemande('%fooValue%'); // WHERE MODIFICATION_CIRCUIT_VALIDATION_DEMANDE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $modificationCircuitValidationDemande The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByModificationCircuitValidationDemande($modificationCircuitValidationDemande = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modificationCircuitValidationDemande)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $modificationCircuitValidationDemande)) {
                $modificationCircuitValidationDemande = str_replace('*', '%', $modificationCircuitValidationDemande);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::MODIFICATION_CIRCUIT_VALIDATION_DEMANDE, $modificationCircuitValidationDemande, $comparison);
    }

    /**
     * Filter the query on the TRANSFERT_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByTransfertDemande('fooValue');   // WHERE TRANSFERT_DEMANDE = 'fooValue'
     * $query->filterByTransfertDemande('%fooValue%'); // WHERE TRANSFERT_DEMANDE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $transfertDemande The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByTransfertDemande($transfertDemande = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($transfertDemande)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $transfertDemande)) {
                $transfertDemande = str_replace('*', '%', $transfertDemande);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::TRANSFERT_DEMANDE, $transfertDemande, $comparison);
    }

    /**
     * Filter the query on the VISUALISER_ECHANGE column
     *
     * Example usage:
     * <code>
     * $query->filterByVisualiserEchange('fooValue');   // WHERE VISUALISER_ECHANGE = 'fooValue'
     * $query->filterByVisualiserEchange('%fooValue%'); // WHERE VISUALISER_ECHANGE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visualiserEchange The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByVisualiserEchange($visualiserEchange = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visualiserEchange)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visualiserEchange)) {
                $visualiserEchange = str_replace('*', '%', $visualiserEchange);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::VISUALISER_ECHANGE, $visualiserEchange, $comparison);
    }

    /**
     * Filter the query on the CLOTURE_TRANSVERSE column
     *
     * Example usage:
     * <code>
     * $query->filterByClotureTransverse('fooValue');   // WHERE CLOTURE_TRANSVERSE = 'fooValue'
     * $query->filterByClotureTransverse('%fooValue%'); // WHERE CLOTURE_TRANSVERSE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clotureTransverse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByClotureTransverse($clotureTransverse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clotureTransverse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clotureTransverse)) {
                $clotureTransverse = str_replace('*', '%', $clotureTransverse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::CLOTURE_TRANSVERSE, $clotureTransverse, $comparison);
    }

    /**
     * Filter the query on the ECHANGE_HORS_SYS column
     *
     * Example usage:
     * <code>
     * $query->filterByEchangeHorsSys('fooValue');   // WHERE ECHANGE_HORS_SYS = 'fooValue'
     * $query->filterByEchangeHorsSys('%fooValue%'); // WHERE ECHANGE_HORS_SYS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $echangeHorsSys The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByEchangeHorsSys($echangeHorsSys = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($echangeHorsSys)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $echangeHorsSys)) {
                $echangeHorsSys = str_replace('*', '%', $echangeHorsSys);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::ECHANGE_HORS_SYS, $echangeHorsSys, $comparison);
    }

    /**
     * Filter the query on the ECHANGE_REQUERANT column
     *
     * Example usage:
     * <code>
     * $query->filterByEchangeRequerant('fooValue');   // WHERE ECHANGE_REQUERANT = 'fooValue'
     * $query->filterByEchangeRequerant('%fooValue%'); // WHERE ECHANGE_REQUERANT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $echangeRequerant The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByEchangeRequerant($echangeRequerant = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($echangeRequerant)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $echangeRequerant)) {
                $echangeRequerant = str_replace('*', '%', $echangeRequerant);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::ECHANGE_REQUERANT, $echangeRequerant, $comparison);
    }

    /**
     * Filter the query on the AFFICHAGE_REPONSE_FINAL column
     *
     * Example usage:
     * <code>
     * $query->filterByAffichageReponseFinal('fooValue');   // WHERE AFFICHAGE_REPONSE_FINAL = 'fooValue'
     * $query->filterByAffichageReponseFinal('%fooValue%'); // WHERE AFFICHAGE_REPONSE_FINAL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $affichageReponseFinal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByAffichageReponseFinal($affichageReponseFinal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($affichageReponseFinal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $affichageReponseFinal)) {
                $affichageReponseFinal = str_replace('*', '%', $affichageReponseFinal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::AFFICHAGE_REPONSE_FINAL, $affichageReponseFinal, $comparison);
    }

    /**
     * Filter the query on the RETIRER_AFFECTATION column
     *
     * Example usage:
     * <code>
     * $query->filterByRetirerAffectation('fooValue');   // WHERE RETIRER_AFFECTATION = 'fooValue'
     * $query->filterByRetirerAffectation('%fooValue%'); // WHERE RETIRER_AFFECTATION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $retirerAffectation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByRetirerAffectation($retirerAffectation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($retirerAffectation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $retirerAffectation)) {
                $retirerAffectation = str_replace('*', '%', $retirerAffectation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::RETIRER_AFFECTATION, $retirerAffectation, $comparison);
    }

    /**
     * Filter the query on the AFFECTATION_EXTERNE column
     *
     * Example usage:
     * <code>
     * $query->filterByAffectationExterne('fooValue');   // WHERE AFFECTATION_EXTERNE = 'fooValue'
     * $query->filterByAffectationExterne('%fooValue%'); // WHERE AFFECTATION_EXTERNE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $affectationExterne The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByAffectationExterne($affectationExterne = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($affectationExterne)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $affectationExterne)) {
                $affectationExterne = str_replace('*', '%', $affectationExterne);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::AFFECTATION_EXTERNE, $affectationExterne, $comparison);
    }

    /**
     * Filter the query on the COMPLEMENT_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByComplementDemande('fooValue');   // WHERE COMPLEMENT_DEMANDE = 'fooValue'
     * $query->filterByComplementDemande('%fooValue%'); // WHERE COMPLEMENT_DEMANDE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $complementDemande The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByComplementDemande($complementDemande = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($complementDemande)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $complementDemande)) {
                $complementDemande = str_replace('*', '%', $complementDemande);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::COMPLEMENT_DEMANDE, $complementDemande, $comparison);
    }

    /**
     * Filter the query on the ENCOPIE_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByEncopieDemande('fooValue');   // WHERE ENCOPIE_DEMANDE = 'fooValue'
     * $query->filterByEncopieDemande('%fooValue%'); // WHERE ENCOPIE_DEMANDE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $encopieDemande The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByEncopieDemande($encopieDemande = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($encopieDemande)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $encopieDemande)) {
                $encopieDemande = str_replace('*', '%', $encopieDemande);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::ENCOPIE_DEMANDE, $encopieDemande, $comparison);
    }

    /**
     * Filter the query on the MODIFIER_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByModifierDemande('fooValue');   // WHERE MODIFIER_DEMANDE = 'fooValue'
     * $query->filterByModifierDemande('%fooValue%'); // WHERE MODIFIER_DEMANDE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $modifierDemande The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByModifierDemande($modifierDemande = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifierDemande)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $modifierDemande)) {
                $modifierDemande = str_replace('*', '%', $modifierDemande);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::MODIFIER_DEMANDE, $modifierDemande, $comparison);
    }

    /**
     * Filter the query on the SUPPRIMER_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterBySupprimerDemande('fooValue');   // WHERE SUPPRIMER_DEMANDE = 'fooValue'
     * $query->filterBySupprimerDemande('%fooValue%'); // WHERE SUPPRIMER_DEMANDE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $supprimerDemande The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterBySupprimerDemande($supprimerDemande = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($supprimerDemande)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $supprimerDemande)) {
                $supprimerDemande = str_replace('*', '%', $supprimerDemande);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::SUPPRIMER_DEMANDE, $supprimerDemande, $comparison);
    }

    /**
     * Filter the query on the VISIBILITE_MAIL_TEL_BO column
     *
     * Example usage:
     * <code>
     * $query->filterByVisibiliteMailTelBo('fooValue');   // WHERE VISIBILITE_MAIL_TEL_BO = 'fooValue'
     * $query->filterByVisibiliteMailTelBo('%fooValue%'); // WHERE VISIBILITE_MAIL_TEL_BO LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visibiliteMailTelBo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByVisibiliteMailTelBo($visibiliteMailTelBo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visibiliteMailTelBo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visibiliteMailTelBo)) {
                $visibiliteMailTelBo = str_replace('*', '%', $visibiliteMailTelBo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::VISIBILITE_MAIL_TEL_BO, $visibiliteMailTelBo, $comparison);
    }

    /**
     * Filter the query on the ACCES_AUDIO_CA column
     *
     * Example usage:
     * <code>
     * $query->filterByAccesAudioCa('fooValue');   // WHERE ACCES_AUDIO_CA = 'fooValue'
     * $query->filterByAccesAudioCa('%fooValue%'); // WHERE ACCES_AUDIO_CA LIKE '%fooValue%'
     * </code>
     *
     * @param     string $accesAudioCa The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByAccesAudioCa($accesAudioCa = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($accesAudioCa)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $accesAudioCa)) {
                $accesAudioCa = str_replace('*', '%', $accesAudioCa);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::ACCES_AUDIO_CA, $accesAudioCa, $comparison);
    }

    /**
     * Filter the query on the PROLONGER_DUREE_TRAITEMENT column
     *
     * Example usage:
     * <code>
     * $query->filterByProlongerDureeTraitement('fooValue');   // WHERE PROLONGER_DUREE_TRAITEMENT = 'fooValue'
     * $query->filterByProlongerDureeTraitement('%fooValue%'); // WHERE PROLONGER_DUREE_TRAITEMENT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prolongerDureeTraitement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByProlongerDureeTraitement($prolongerDureeTraitement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prolongerDureeTraitement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prolongerDureeTraitement)) {
                $prolongerDureeTraitement = str_replace('*', '%', $prolongerDureeTraitement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::PROLONGER_DUREE_TRAITEMENT, $prolongerDureeTraitement, $comparison);
    }

    /**
     * Filter the query on the MODIF_DEMANDE_AFFECTE column
     *
     * Example usage:
     * <code>
     * $query->filterByModifDemandeAffecte('fooValue');   // WHERE MODIF_DEMANDE_AFFECTE = 'fooValue'
     * $query->filterByModifDemandeAffecte('%fooValue%'); // WHERE MODIF_DEMANDE_AFFECTE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $modifDemandeAffecte The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByModifDemandeAffecte($modifDemandeAffecte = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifDemandeAffecte)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $modifDemandeAffecte)) {
                $modifDemandeAffecte = str_replace('*', '%', $modifDemandeAffecte);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::MODIF_DEMANDE_AFFECTE, $modifDemandeAffecte, $comparison);
    }

    /**
     * Filter the query on the TABLEAU_BORD_SUPERVISION column
     *
     * Example usage:
     * <code>
     * $query->filterByTableauBordSupervision('fooValue');   // WHERE TABLEAU_BORD_SUPERVISION = 'fooValue'
     * $query->filterByTableauBordSupervision('%fooValue%'); // WHERE TABLEAU_BORD_SUPERVISION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tableauBordSupervision The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByTableauBordSupervision($tableauBordSupervision = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tableauBordSupervision)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tableauBordSupervision)) {
                $tableauBordSupervision = str_replace('*', '%', $tableauBordSupervision);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::TABLEAU_BORD_SUPERVISION, $tableauBordSupervision, $comparison);
    }

    /**
     * Filter the query on the STATISTIQUE_SUPERVISION column
     *
     * Example usage:
     * <code>
     * $query->filterByStatistiqueSupervision('fooValue');   // WHERE STATISTIQUE_SUPERVISION = 'fooValue'
     * $query->filterByStatistiqueSupervision('%fooValue%'); // WHERE STATISTIQUE_SUPERVISION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $statistiqueSupervision The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByStatistiqueSupervision($statistiqueSupervision = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($statistiqueSupervision)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $statistiqueSupervision)) {
                $statistiqueSupervision = str_replace('*', '%', $statistiqueSupervision);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::STATISTIQUE_SUPERVISION, $statistiqueSupervision, $comparison);
    }

    /**
     * Filter the query on the SUIVI_SUPERVISION column
     *
     * Example usage:
     * <code>
     * $query->filterBySuiviSupervision('fooValue');   // WHERE SUIVI_SUPERVISION = 'fooValue'
     * $query->filterBySuiviSupervision('%fooValue%'); // WHERE SUIVI_SUPERVISION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $suiviSupervision The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterBySuiviSupervision($suiviSupervision = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($suiviSupervision)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $suiviSupervision)) {
                $suiviSupervision = str_replace('*', '%', $suiviSupervision);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::SUIVI_SUPERVISION, $suiviSupervision, $comparison);
    }

    /**
     * Filter the query on the FORCE_CLOTURE column
     *
     * Example usage:
     * <code>
     * $query->filterByForceCloture('fooValue');   // WHERE FORCE_CLOTURE = 'fooValue'
     * $query->filterByForceCloture('%fooValue%'); // WHERE FORCE_CLOTURE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $forceCloture The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByForceCloture($forceCloture = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($forceCloture)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $forceCloture)) {
                $forceCloture = str_replace('*', '%', $forceCloture);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::FORCE_CLOTURE, $forceCloture, $comparison);
    }

    /**
     * Filter the query on the AFFECTER_GROUPE column
     *
     * Example usage:
     * <code>
     * $query->filterByAffecterGroupe('fooValue');   // WHERE AFFECTER_GROUPE = 'fooValue'
     * $query->filterByAffecterGroupe('%fooValue%'); // WHERE AFFECTER_GROUPE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $affecterGroupe The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByAffecterGroupe($affecterGroupe = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($affecterGroupe)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $affecterGroupe)) {
                $affecterGroupe = str_replace('*', '%', $affecterGroupe);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::AFFECTER_GROUPE, $affecterGroupe, $comparison);
    }

    /**
     * Filter the query on the HISTORIQUE_CONSULTATION column
     *
     * Example usage:
     * <code>
     * $query->filterByHistoriqueConsultation('fooValue');   // WHERE HISTORIQUE_CONSULTATION = 'fooValue'
     * $query->filterByHistoriqueConsultation('%fooValue%'); // WHERE HISTORIQUE_CONSULTATION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $historiqueConsultation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function filterByHistoriqueConsultation($historiqueConsultation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($historiqueConsultation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $historiqueConsultation)) {
                $historiqueConsultation = str_replace('*', '%', $historiqueConsultation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfilAgentPeer::HISTORIQUE_CONSULTATION, $historiqueConsultation, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ProfilAgent $profilAgent Object to remove from the list of results
     *
     * @return ProfilAgentQuery The current query, for fluid interface
     */
    public function prune($profilAgent = null)
    {
        if ($profilAgent) {
            $this->addUsingAlias(ProfilAgentPeer::ID, $profilAgent->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
