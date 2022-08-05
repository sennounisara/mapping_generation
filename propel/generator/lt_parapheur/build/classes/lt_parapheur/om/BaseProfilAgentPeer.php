<?php


/**
 * Base static class for performing query and update operations on the 'profil_agent' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseProfilAgentPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'lt_parapheur';

    /** the table name for this class */
    const TABLE_NAME = 'profil_agent';

    /** the related Propel class for this table */
    const OM_CLASS = 'ProfilAgent';

    /** the related TableMap class for this table */
    const TM_CLASS = 'ProfilAgentTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 77;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 77;

    /** the column name for the ID field */
    const ID = 'profil_agent.ID';

    /** the column name for the LIBELLE_PROFIL_AGENT field */
    const LIBELLE_PROFIL_AGENT = 'profil_agent.LIBELLE_PROFIL_AGENT';

    /** the column name for the ID_PROFIL field */
    const ID_PROFIL = 'profil_agent.ID_PROFIL';

    /** the column name for the ID_ORGANISME field */
    const ID_ORGANISME = 'profil_agent.ID_ORGANISME';

    /** the column name for the MENU_MON_COMPTE field */
    const MENU_MON_COMPTE = 'profil_agent.MENU_MON_COMPTE';

    /** the column name for the MENU_DEMANDE_NOUVELLES field */
    const MENU_DEMANDE_NOUVELLES = 'profil_agent.MENU_DEMANDE_NOUVELLES';

    /** the column name for the MENU_DEMANDE_RECHERCHE field */
    const MENU_DEMANDE_RECHERCHE = 'profil_agent.MENU_DEMANDE_RECHERCHE';

    /** the column name for the MENU_ADMIN field */
    const MENU_ADMIN = 'profil_agent.MENU_ADMIN';

    /** the column name for the MENU_ADMIN_SERVICES field */
    const MENU_ADMIN_SERVICES = 'profil_agent.MENU_ADMIN_SERVICES';

    /** the column name for the MENU_ADMIN_UTILISATEURS field */
    const MENU_ADMIN_UTILISATEURS = 'profil_agent.MENU_ADMIN_UTILISATEURS';

    /** the column name for the MENU_RAPPORT field */
    const MENU_RAPPORT = 'profil_agent.MENU_RAPPORT';

    /** the column name for the MENU_RAPPORT_MENSUEL field */
    const MENU_RAPPORT_MENSUEL = 'profil_agent.MENU_RAPPORT_MENSUEL';

    /** the column name for the MENU_RAPPORT_GLOBAL field */
    const MENU_RAPPORT_GLOBAL = 'profil_agent.MENU_RAPPORT_GLOBAL';

    /** the column name for the MENU_RAPPORT_PERSONNALISE field */
    const MENU_RAPPORT_PERSONNALISE = 'profil_agent.MENU_RAPPORT_PERSONNALISE';

    /** the column name for the MENU_ADMIN_ENTITE_DEMANDEUR field */
    const MENU_ADMIN_ENTITE_DEMANDEUR = 'profil_agent.MENU_ADMIN_ENTITE_DEMANDEUR';

    /** the column name for the MENU_ADMIN_DEMANDEURS field */
    const MENU_ADMIN_DEMANDEURS = 'profil_agent.MENU_ADMIN_DEMANDEURS';

    /** the column name for the HISTORIQUE field */
    const HISTORIQUE = 'profil_agent.HISTORIQUE';

    /** the column name for the MENU_DEMANDE_AFFECTEES_ENTITE field */
    const MENU_DEMANDE_AFFECTEES_ENTITE = 'profil_agent.MENU_DEMANDE_AFFECTEES_ENTITE';

    /** the column name for the MENU_ADMIN_ENTITE field */
    const MENU_ADMIN_ENTITE = 'profil_agent.MENU_ADMIN_ENTITE';

    /** the column name for the MENU_ADMIN_THEME field */
    const MENU_ADMIN_THEME = 'profil_agent.MENU_ADMIN_THEME';

    /** the column name for the ETAT_PROFIL field */
    const ETAT_PROFIL = 'profil_agent.ETAT_PROFIL';

    /** the column name for the ACTION_AFFECTER_ENTITE field */
    const ACTION_AFFECTER_ENTITE = 'profil_agent.ACTION_AFFECTER_ENTITE';

    /** the column name for the ACTION_AFFECTER_AGENT field */
    const ACTION_AFFECTER_AGENT = 'profil_agent.ACTION_AFFECTER_AGENT';

    /** the column name for the SUPPRIMER_MODIFIIER_DEMANDE_ENTITE field */
    const SUPPRIMER_MODIFIIER_DEMANDE_ENTITE = 'profil_agent.SUPPRIMER_MODIFIIER_DEMANDE_ENTITE';

    /** the column name for the SUPPRIMER_MODIFIIER_ALL_DEMANDE field */
    const SUPPRIMER_MODIFIIER_ALL_DEMANDE = 'profil_agent.SUPPRIMER_MODIFIIER_ALL_DEMANDE';

    /** the column name for the TRAITER_TOUTE_DEMANDE field */
    const TRAITER_TOUTE_DEMANDE = 'profil_agent.TRAITER_TOUTE_DEMANDE';

    /** the column name for the DATE_INDICATIVE_REPONSE field */
    const DATE_INDICATIVE_REPONSE = 'profil_agent.DATE_INDICATIVE_REPONSE';

    /** the column name for the MODIFIER_THEME field */
    const MODIFIER_THEME = 'profil_agent.MODIFIER_THEME';

    /** the column name for the ACTION_RETOURNER_PRECEDENT field */
    const ACTION_RETOURNER_PRECEDENT = 'profil_agent.ACTION_RETOURNER_PRECEDENT';

    /** the column name for the ACTION_CLASSER_ERRONEE field */
    const ACTION_CLASSER_ERRONEE = 'profil_agent.ACTION_CLASSER_ERRONEE';

    /** the column name for the ACTION_CLASSER_HA field */
    const ACTION_CLASSER_HA = 'profil_agent.ACTION_CLASSER_HA';

    /** the column name for the ACTION_SOUMETTRE_REPONSE_CIRCUIT field */
    const ACTION_SOUMETTRE_REPONSE_CIRCUIT = 'profil_agent.ACTION_SOUMETTRE_REPONSE_CIRCUIT';

    /** the column name for the ACTION_TRANSMETTRE_REPONSE_REQ field */
    const ACTION_TRANSMETTRE_REPONSE_REQ = 'profil_agent.ACTION_TRANSMETTRE_REPONSE_REQ';

    /** the column name for the ACTION_CLOTURER field */
    const ACTION_CLOTURER = 'profil_agent.ACTION_CLOTURER';

    /** the column name for the SUIVRE_DEMANDE field */
    const SUIVRE_DEMANDE = 'profil_agent.SUIVRE_DEMANDE';

    /** the column name for the MENU_EN_PROPOSITION field */
    const MENU_EN_PROPOSITION = 'profil_agent.MENU_EN_PROPOSITION';

    /** the column name for the LIBELLE_PROFIL_AGENT_AR field */
    const LIBELLE_PROFIL_AGENT_AR = 'profil_agent.LIBELLE_PROFIL_AGENT_AR';

    /** the column name for the ACTION_PARTAGER_DEMANDE field */
    const ACTION_PARTAGER_DEMANDE = 'profil_agent.ACTION_PARTAGER_DEMANDE';

    /** the column name for the MENU_DEMANDE_PARTAGEES_ENTITE field */
    const MENU_DEMANDE_PARTAGEES_ENTITE = 'profil_agent.MENU_DEMANDE_PARTAGEES_ENTITE';

    /** the column name for the HABILITATION_GESTION_TACHE field */
    const HABILITATION_GESTION_TACHE = 'profil_agent.HABILITATION_GESTION_TACHE';

    /** the column name for the ACTION_AFFECTER_DEMANDE_CLOTURE field */
    const ACTION_AFFECTER_DEMANDE_CLOTURE = 'profil_agent.ACTION_AFFECTER_DEMANDE_CLOTURE';

    /** the column name for the VISIBILITE_DEMANDE_RECU field */
    const VISIBILITE_DEMANDE_RECU = 'profil_agent.VISIBILITE_DEMANDE_RECU';

    /** the column name for the MENU_MINISTERES field */
    const MENU_MINISTERES = 'profil_agent.MENU_MINISTERES';

    /** the column name for the DEMANDES_A_SUIVRE field */
    const DEMANDES_A_SUIVRE = 'profil_agent.DEMANDES_A_SUIVRE';

    /** the column name for the GESTION_INTERIM field */
    const GESTION_INTERIM = 'profil_agent.GESTION_INTERIM';

    /** the column name for the AFFICHAGE_SIMPLIFIE field */
    const AFFICHAGE_SIMPLIFIE = 'profil_agent.AFFICHAGE_SIMPLIFIE';

    /** the column name for the SUPPRIMER_TOUS field */
    const SUPPRIMER_TOUS = 'profil_agent.SUPPRIMER_TOUS';

    /** the column name for the AJOUT_DEMANDE field */
    const AJOUT_DEMANDE = 'profil_agent.AJOUT_DEMANDE';

    /** the column name for the TYPE_AJOUT_DEMANDE field */
    const TYPE_AJOUT_DEMANDE = 'profil_agent.TYPE_AJOUT_DEMANDE';

    /** the column name for the AJOUT_DEMANDE_ENTRANTE field */
    const AJOUT_DEMANDE_ENTRANTE = 'profil_agent.AJOUT_DEMANDE_ENTRANTE';

    /** the column name for the AJOUT_DEMANDE_SORTANTE field */
    const AJOUT_DEMANDE_SORTANTE = 'profil_agent.AJOUT_DEMANDE_SORTANTE';

    /** the column name for the AJOUT_DEMANDE_SORTANT field */
    const AJOUT_DEMANDE_SORTANT = 'profil_agent.AJOUT_DEMANDE_SORTANT';

    /** the column name for the AJOUT_DEMANDE_INTERNE field */
    const AJOUT_DEMANDE_INTERNE = 'profil_agent.AJOUT_DEMANDE_INTERNE';

    /** the column name for the AJOUT_DEMANDE_INTRAGROUPE field */
    const AJOUT_DEMANDE_INTRAGROUPE = 'profil_agent.AJOUT_DEMANDE_INTRAGROUPE';

    /** the column name for the MODIFICATION_CIRCUIT_VALIDATION_DEMANDE field */
    const MODIFICATION_CIRCUIT_VALIDATION_DEMANDE = 'profil_agent.MODIFICATION_CIRCUIT_VALIDATION_DEMANDE';

    /** the column name for the TRANSFERT_DEMANDE field */
    const TRANSFERT_DEMANDE = 'profil_agent.TRANSFERT_DEMANDE';

    /** the column name for the VISUALISER_ECHANGE field */
    const VISUALISER_ECHANGE = 'profil_agent.VISUALISER_ECHANGE';

    /** the column name for the CLOTURE_TRANSVERSE field */
    const CLOTURE_TRANSVERSE = 'profil_agent.CLOTURE_TRANSVERSE';

    /** the column name for the ECHANGE_HORS_SYS field */
    const ECHANGE_HORS_SYS = 'profil_agent.ECHANGE_HORS_SYS';

    /** the column name for the ECHANGE_REQUERANT field */
    const ECHANGE_REQUERANT = 'profil_agent.ECHANGE_REQUERANT';

    /** the column name for the AFFICHAGE_REPONSE_FINAL field */
    const AFFICHAGE_REPONSE_FINAL = 'profil_agent.AFFICHAGE_REPONSE_FINAL';

    /** the column name for the RETIRER_AFFECTATION field */
    const RETIRER_AFFECTATION = 'profil_agent.RETIRER_AFFECTATION';

    /** the column name for the AFFECTATION_EXTERNE field */
    const AFFECTATION_EXTERNE = 'profil_agent.AFFECTATION_EXTERNE';

    /** the column name for the COMPLEMENT_DEMANDE field */
    const COMPLEMENT_DEMANDE = 'profil_agent.COMPLEMENT_DEMANDE';

    /** the column name for the ENCOPIE_DEMANDE field */
    const ENCOPIE_DEMANDE = 'profil_agent.ENCOPIE_DEMANDE';

    /** the column name for the MODIFIER_DEMANDE field */
    const MODIFIER_DEMANDE = 'profil_agent.MODIFIER_DEMANDE';

    /** the column name for the SUPPRIMER_DEMANDE field */
    const SUPPRIMER_DEMANDE = 'profil_agent.SUPPRIMER_DEMANDE';

    /** the column name for the VISIBILITE_MAIL_TEL_BO field */
    const VISIBILITE_MAIL_TEL_BO = 'profil_agent.VISIBILITE_MAIL_TEL_BO';

    /** the column name for the ACCES_AUDIO_CA field */
    const ACCES_AUDIO_CA = 'profil_agent.ACCES_AUDIO_CA';

    /** the column name for the PROLONGER_DUREE_TRAITEMENT field */
    const PROLONGER_DUREE_TRAITEMENT = 'profil_agent.PROLONGER_DUREE_TRAITEMENT';

    /** the column name for the MODIF_DEMANDE_AFFECTE field */
    const MODIF_DEMANDE_AFFECTE = 'profil_agent.MODIF_DEMANDE_AFFECTE';

    /** the column name for the TABLEAU_BORD_SUPERVISION field */
    const TABLEAU_BORD_SUPERVISION = 'profil_agent.TABLEAU_BORD_SUPERVISION';

    /** the column name for the STATISTIQUE_SUPERVISION field */
    const STATISTIQUE_SUPERVISION = 'profil_agent.STATISTIQUE_SUPERVISION';

    /** the column name for the SUIVI_SUPERVISION field */
    const SUIVI_SUPERVISION = 'profil_agent.SUIVI_SUPERVISION';

    /** the column name for the FORCE_CLOTURE field */
    const FORCE_CLOTURE = 'profil_agent.FORCE_CLOTURE';

    /** the column name for the AFFECTER_GROUPE field */
    const AFFECTER_GROUPE = 'profil_agent.AFFECTER_GROUPE';

    /** the column name for the HISTORIQUE_CONSULTATION field */
    const HISTORIQUE_CONSULTATION = 'profil_agent.HISTORIQUE_CONSULTATION';

    /** The enumerated values for the MENU_MON_COMPTE field */
    const MENU_MON_COMPTE_0 = '0';
    const MENU_MON_COMPTE_1 = '1';

    /** The enumerated values for the MENU_DEMANDE_NOUVELLES field */
    const MENU_DEMANDE_NOUVELLES_0 = '0';
    const MENU_DEMANDE_NOUVELLES_1 = '1';

    /** The enumerated values for the MENU_DEMANDE_RECHERCHE field */
    const MENU_DEMANDE_RECHERCHE_0 = '0';
    const MENU_DEMANDE_RECHERCHE_1 = '1';

    /** The enumerated values for the MENU_ADMIN field */
    const MENU_ADMIN_0 = '0';
    const MENU_ADMIN_1 = '1';

    /** The enumerated values for the MENU_ADMIN_SERVICES field */
    const MENU_ADMIN_SERVICES_0 = '0';
    const MENU_ADMIN_SERVICES_1 = '1';

    /** The enumerated values for the MENU_ADMIN_UTILISATEURS field */
    const MENU_ADMIN_UTILISATEURS_0 = '0';
    const MENU_ADMIN_UTILISATEURS_1 = '1';

    /** The enumerated values for the MENU_RAPPORT field */
    const MENU_RAPPORT_0 = '0';
    const MENU_RAPPORT_1 = '1';

    /** The enumerated values for the MENU_RAPPORT_MENSUEL field */
    const MENU_RAPPORT_MENSUEL_0 = '0';
    const MENU_RAPPORT_MENSUEL_1 = '1';

    /** The enumerated values for the MENU_RAPPORT_GLOBAL field */
    const MENU_RAPPORT_GLOBAL_0 = '0';
    const MENU_RAPPORT_GLOBAL_1 = '1';

    /** The enumerated values for the MENU_RAPPORT_PERSONNALISE field */
    const MENU_RAPPORT_PERSONNALISE_0 = '0';
    const MENU_RAPPORT_PERSONNALISE_1 = '1';

    /** The enumerated values for the MENU_ADMIN_ENTITE_DEMANDEUR field */
    const MENU_ADMIN_ENTITE_DEMANDEUR_0 = '0';
    const MENU_ADMIN_ENTITE_DEMANDEUR_1 = '1';

    /** The enumerated values for the MENU_ADMIN_DEMANDEURS field */
    const MENU_ADMIN_DEMANDEURS_0 = '0';
    const MENU_ADMIN_DEMANDEURS_1 = '1';

    /** The enumerated values for the HISTORIQUE field */
    const HISTORIQUE_0 = '0';
    const HISTORIQUE_1 = '1';

    /** The enumerated values for the MENU_DEMANDE_AFFECTEES_ENTITE field */
    const MENU_DEMANDE_AFFECTEES_ENTITE_0 = '0';
    const MENU_DEMANDE_AFFECTEES_ENTITE_1 = '1';

    /** The enumerated values for the MENU_ADMIN_ENTITE field */
    const MENU_ADMIN_ENTITE_0 = '0';
    const MENU_ADMIN_ENTITE_1 = '1';

    /** The enumerated values for the MENU_ADMIN_THEME field */
    const MENU_ADMIN_THEME_0 = '0';
    const MENU_ADMIN_THEME_1 = '1';

    /** The enumerated values for the ETAT_PROFIL field */
    const ETAT_PROFIL_0 = '0';
    const ETAT_PROFIL_1 = '1';

    /** The enumerated values for the ACTION_AFFECTER_ENTITE field */
    const ACTION_AFFECTER_ENTITE_0 = '0';
    const ACTION_AFFECTER_ENTITE_1 = '1';

    /** The enumerated values for the ACTION_AFFECTER_AGENT field */
    const ACTION_AFFECTER_AGENT_0 = '0';
    const ACTION_AFFECTER_AGENT_1 = '1';

    /** The enumerated values for the SUPPRIMER_MODIFIIER_DEMANDE_ENTITE field */
    const SUPPRIMER_MODIFIIER_DEMANDE_ENTITE_0 = '0';
    const SUPPRIMER_MODIFIIER_DEMANDE_ENTITE_1 = '1';

    /** The enumerated values for the SUPPRIMER_MODIFIIER_ALL_DEMANDE field */
    const SUPPRIMER_MODIFIIER_ALL_DEMANDE_0 = '0';
    const SUPPRIMER_MODIFIIER_ALL_DEMANDE_1 = '1';

    /** The enumerated values for the TRAITER_TOUTE_DEMANDE field */
    const TRAITER_TOUTE_DEMANDE_0 = '0';
    const TRAITER_TOUTE_DEMANDE_1 = '1';

    /** The enumerated values for the DATE_INDICATIVE_REPONSE field */
    const DATE_INDICATIVE_REPONSE_0 = '0';
    const DATE_INDICATIVE_REPONSE_1 = '1';

    /** The enumerated values for the MODIFIER_THEME field */
    const MODIFIER_THEME_0 = '0';
    const MODIFIER_THEME_1 = '1';

    /** The enumerated values for the ACTION_RETOURNER_PRECEDENT field */
    const ACTION_RETOURNER_PRECEDENT_0 = '0';
    const ACTION_RETOURNER_PRECEDENT_1 = '1';

    /** The enumerated values for the ACTION_CLASSER_ERRONEE field */
    const ACTION_CLASSER_ERRONEE_0 = '0';
    const ACTION_CLASSER_ERRONEE_1 = '1';

    /** The enumerated values for the ACTION_CLASSER_HA field */
    const ACTION_CLASSER_HA_0 = '0';
    const ACTION_CLASSER_HA_1 = '1';

    /** The enumerated values for the ACTION_SOUMETTRE_REPONSE_CIRCUIT field */
    const ACTION_SOUMETTRE_REPONSE_CIRCUIT_0 = '0';
    const ACTION_SOUMETTRE_REPONSE_CIRCUIT_1 = '1';

    /** The enumerated values for the ACTION_TRANSMETTRE_REPONSE_REQ field */
    const ACTION_TRANSMETTRE_REPONSE_REQ_0 = '0';
    const ACTION_TRANSMETTRE_REPONSE_REQ_1 = '1';

    /** The enumerated values for the ACTION_CLOTURER field */
    const ACTION_CLOTURER_0 = '0';
    const ACTION_CLOTURER_1 = '1';

    /** The enumerated values for the SUIVRE_DEMANDE field */
    const SUIVRE_DEMANDE_0 = '0';
    const SUIVRE_DEMANDE_1 = '1';

    /** The enumerated values for the MENU_EN_PROPOSITION field */
    const MENU_EN_PROPOSITION_0 = '0';
    const MENU_EN_PROPOSITION_1 = '1';

    /** The enumerated values for the ACTION_PARTAGER_DEMANDE field */
    const ACTION_PARTAGER_DEMANDE_0 = '0';
    const ACTION_PARTAGER_DEMANDE_1 = '1';

    /** The enumerated values for the MENU_DEMANDE_PARTAGEES_ENTITE field */
    const MENU_DEMANDE_PARTAGEES_ENTITE_0 = '0';
    const MENU_DEMANDE_PARTAGEES_ENTITE_1 = '1';

    /** The enumerated values for the HABILITATION_GESTION_TACHE field */
    const HABILITATION_GESTION_TACHE_0 = '0';
    const HABILITATION_GESTION_TACHE_1 = '1';

    /** The enumerated values for the ACTION_AFFECTER_DEMANDE_CLOTURE field */
    const ACTION_AFFECTER_DEMANDE_CLOTURE_0 = '0';
    const ACTION_AFFECTER_DEMANDE_CLOTURE_1 = '1';

    /** The enumerated values for the VISIBILITE_DEMANDE_RECU field */
    const VISIBILITE_DEMANDE_RECU_0 = '0';
    const VISIBILITE_DEMANDE_RECU_1 = '1';

    /** The enumerated values for the MENU_MINISTERES field */
    const MENU_MINISTERES_0 = '0';
    const MENU_MINISTERES_1 = '1';

    /** The enumerated values for the DEMANDES_A_SUIVRE field */
    const DEMANDES_A_SUIVRE_0 = '0';
    const DEMANDES_A_SUIVRE_1 = '1';

    /** The enumerated values for the GESTION_INTERIM field */
    const GESTION_INTERIM_0 = '0';
    const GESTION_INTERIM_1 = '1';

    /** The enumerated values for the AFFICHAGE_SIMPLIFIE field */
    const AFFICHAGE_SIMPLIFIE_0 = '0';
    const AFFICHAGE_SIMPLIFIE_1 = '1';

    /** The enumerated values for the SUPPRIMER_TOUS field */
    const SUPPRIMER_TOUS_0 = '0';
    const SUPPRIMER_TOUS_1 = '1';

    /** The enumerated values for the AJOUT_DEMANDE field */
    const AJOUT_DEMANDE_0 = '0';
    const AJOUT_DEMANDE_1 = '1';

    /** The enumerated values for the AJOUT_DEMANDE_ENTRANTE field */
    const AJOUT_DEMANDE_ENTRANTE_0 = '0';
    const AJOUT_DEMANDE_ENTRANTE_1 = '1';

    /** The enumerated values for the AJOUT_DEMANDE_SORTANTE field */
    const AJOUT_DEMANDE_SORTANTE_0 = '0';
    const AJOUT_DEMANDE_SORTANTE_1 = '1';

    /** The enumerated values for the AJOUT_DEMANDE_SORTANT field */
    const AJOUT_DEMANDE_SORTANT_0 = '0';
    const AJOUT_DEMANDE_SORTANT_1 = '1';

    /** The enumerated values for the AJOUT_DEMANDE_INTERNE field */
    const AJOUT_DEMANDE_INTERNE_0 = '0';
    const AJOUT_DEMANDE_INTERNE_1 = '1';

    /** The enumerated values for the AJOUT_DEMANDE_INTRAGROUPE field */
    const AJOUT_DEMANDE_INTRAGROUPE_0 = '0';
    const AJOUT_DEMANDE_INTRAGROUPE_1 = '1';

    /** The enumerated values for the MODIFICATION_CIRCUIT_VALIDATION_DEMANDE field */
    const MODIFICATION_CIRCUIT_VALIDATION_DEMANDE_0 = '0';
    const MODIFICATION_CIRCUIT_VALIDATION_DEMANDE_1 = '1';

    /** The enumerated values for the TRANSFERT_DEMANDE field */
    const TRANSFERT_DEMANDE_0 = '0';
    const TRANSFERT_DEMANDE_1 = '1';

    /** The enumerated values for the VISUALISER_ECHANGE field */
    const VISUALISER_ECHANGE_0 = '0';
    const VISUALISER_ECHANGE_1 = '1';

    /** The enumerated values for the CLOTURE_TRANSVERSE field */
    const CLOTURE_TRANSVERSE_0 = '0';
    const CLOTURE_TRANSVERSE_1 = '1';

    /** The enumerated values for the ECHANGE_HORS_SYS field */
    const ECHANGE_HORS_SYS_0 = '0';
    const ECHANGE_HORS_SYS_1 = '1';

    /** The enumerated values for the ECHANGE_REQUERANT field */
    const ECHANGE_REQUERANT_0 = '0';
    const ECHANGE_REQUERANT_1 = '1';

    /** The enumerated values for the AFFICHAGE_REPONSE_FINAL field */
    const AFFICHAGE_REPONSE_FINAL_0 = '0';
    const AFFICHAGE_REPONSE_FINAL_1 = '1';

    /** The enumerated values for the RETIRER_AFFECTATION field */
    const RETIRER_AFFECTATION_0 = '0';
    const RETIRER_AFFECTATION_1 = '1';

    /** The enumerated values for the AFFECTATION_EXTERNE field */
    const AFFECTATION_EXTERNE_0 = '0';
    const AFFECTATION_EXTERNE_1 = '1';

    /** The enumerated values for the COMPLEMENT_DEMANDE field */
    const COMPLEMENT_DEMANDE_0 = '0';
    const COMPLEMENT_DEMANDE_1 = '1';

    /** The enumerated values for the ENCOPIE_DEMANDE field */
    const ENCOPIE_DEMANDE_0 = '0';
    const ENCOPIE_DEMANDE_1 = '1';

    /** The enumerated values for the MODIFIER_DEMANDE field */
    const MODIFIER_DEMANDE_0 = '0';
    const MODIFIER_DEMANDE_1 = '1';

    /** The enumerated values for the SUPPRIMER_DEMANDE field */
    const SUPPRIMER_DEMANDE_0 = '0';
    const SUPPRIMER_DEMANDE_1 = '1';

    /** The enumerated values for the VISIBILITE_MAIL_TEL_BO field */
    const VISIBILITE_MAIL_TEL_BO_0 = '0';
    const VISIBILITE_MAIL_TEL_BO_1 = '1';

    /** The enumerated values for the ACCES_AUDIO_CA field */
    const ACCES_AUDIO_CA_0 = '0';
    const ACCES_AUDIO_CA_1 = '1';

    /** The enumerated values for the PROLONGER_DUREE_TRAITEMENT field */
    const PROLONGER_DUREE_TRAITEMENT_0 = '0';
    const PROLONGER_DUREE_TRAITEMENT_1 = '1';

    /** The enumerated values for the MODIF_DEMANDE_AFFECTE field */
    const MODIF_DEMANDE_AFFECTE_0 = '0';
    const MODIF_DEMANDE_AFFECTE_1 = '1';

    /** The enumerated values for the TABLEAU_BORD_SUPERVISION field */
    const TABLEAU_BORD_SUPERVISION_0 = '0';
    const TABLEAU_BORD_SUPERVISION_1 = '1';

    /** The enumerated values for the STATISTIQUE_SUPERVISION field */
    const STATISTIQUE_SUPERVISION_0 = '0';
    const STATISTIQUE_SUPERVISION_1 = '1';

    /** The enumerated values for the SUIVI_SUPERVISION field */
    const SUIVI_SUPERVISION_0 = '0';
    const SUIVI_SUPERVISION_1 = '1';

    /** The enumerated values for the FORCE_CLOTURE field */
    const FORCE_CLOTURE_0 = '0';
    const FORCE_CLOTURE_1 = '1';

    /** The enumerated values for the AFFECTER_GROUPE field */
    const AFFECTER_GROUPE_0 = '0';
    const AFFECTER_GROUPE_1 = '1';

    /** The enumerated values for the HISTORIQUE_CONSULTATION field */
    const HISTORIQUE_CONSULTATION_0 = '0';
    const HISTORIQUE_CONSULTATION_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of ProfilAgent objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array ProfilAgent[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. ProfilAgentPeer::$fieldNames[ProfilAgentPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'LibelleProfilAgent', 'IdProfil', 'IdOrganisme', 'MenuMonCompte', 'MenuDemandeNouvelles', 'MenuDemandeRecherche', 'MenuAdmin', 'MenuAdminServices', 'MenuAdminUtilisateurs', 'MenuRapport', 'MenuRapportMensuel', 'MenuRapportGlobal', 'MenuRapportPersonnalise', 'MenuAdminEntiteDemandeur', 'MenuAdminDemandeurs', 'Historique', 'MenuDemandeAffecteesEntite', 'MenuAdminEntite', 'MenuAdminTheme', 'EtatProfil', 'ActionAffecterEntite', 'ActionAffecterAgent', 'SupprimerModifiierDemandeEntite', 'SupprimerModifiierAllDemande', 'TraiterTouteDemande', 'DateIndicativeReponse', 'ModifierTheme', 'ActionRetournerPrecedent', 'ActionClasserErronee', 'ActionClasserHa', 'ActionSoumettreReponseCircuit', 'ActionTransmettreReponseReq', 'ActionCloturer', 'SuivreDemande', 'MenuEnProposition', 'LibelleProfilAgentAr', 'ActionPartagerDemande', 'MenuDemandePartageesEntite', 'HabilitationGestionTache', 'ActionAffecterDemandeCloture', 'VisibiliteDemandeRecu', 'MenuMinisteres', 'DemandesASuivre', 'GestionInterim', 'AffichageSimplifie', 'SupprimerTous', 'AjoutDemande', 'TypeAjoutDemande', 'AjoutDemandeEntrante', 'AjoutDemandeSortante', 'AjoutDemandeSortant', 'AjoutDemandeInterne', 'AjoutDemandeIntragroupe', 'ModificationCircuitValidationDemande', 'TransfertDemande', 'VisualiserEchange', 'ClotureTransverse', 'EchangeHorsSys', 'EchangeRequerant', 'AffichageReponseFinal', 'RetirerAffectation', 'AffectationExterne', 'ComplementDemande', 'EncopieDemande', 'ModifierDemande', 'SupprimerDemande', 'VisibiliteMailTelBo', 'AccesAudioCa', 'ProlongerDureeTraitement', 'ModifDemandeAffecte', 'TableauBordSupervision', 'StatistiqueSupervision', 'SuiviSupervision', 'ForceCloture', 'AffecterGroupe', 'HistoriqueConsultation', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'libelleProfilAgent', 'idProfil', 'idOrganisme', 'menuMonCompte', 'menuDemandeNouvelles', 'menuDemandeRecherche', 'menuAdmin', 'menuAdminServices', 'menuAdminUtilisateurs', 'menuRapport', 'menuRapportMensuel', 'menuRapportGlobal', 'menuRapportPersonnalise', 'menuAdminEntiteDemandeur', 'menuAdminDemandeurs', 'historique', 'menuDemandeAffecteesEntite', 'menuAdminEntite', 'menuAdminTheme', 'etatProfil', 'actionAffecterEntite', 'actionAffecterAgent', 'supprimerModifiierDemandeEntite', 'supprimerModifiierAllDemande', 'traiterTouteDemande', 'dateIndicativeReponse', 'modifierTheme', 'actionRetournerPrecedent', 'actionClasserErronee', 'actionClasserHa', 'actionSoumettreReponseCircuit', 'actionTransmettreReponseReq', 'actionCloturer', 'suivreDemande', 'menuEnProposition', 'libelleProfilAgentAr', 'actionPartagerDemande', 'menuDemandePartageesEntite', 'habilitationGestionTache', 'actionAffecterDemandeCloture', 'visibiliteDemandeRecu', 'menuMinisteres', 'demandesASuivre', 'gestionInterim', 'affichageSimplifie', 'supprimerTous', 'ajoutDemande', 'typeAjoutDemande', 'ajoutDemandeEntrante', 'ajoutDemandeSortante', 'ajoutDemandeSortant', 'ajoutDemandeInterne', 'ajoutDemandeIntragroupe', 'modificationCircuitValidationDemande', 'transfertDemande', 'visualiserEchange', 'clotureTransverse', 'echangeHorsSys', 'echangeRequerant', 'affichageReponseFinal', 'retirerAffectation', 'affectationExterne', 'complementDemande', 'encopieDemande', 'modifierDemande', 'supprimerDemande', 'visibiliteMailTelBo', 'accesAudioCa', 'prolongerDureeTraitement', 'modifDemandeAffecte', 'tableauBordSupervision', 'statistiqueSupervision', 'suiviSupervision', 'forceCloture', 'affecterGroupe', 'historiqueConsultation', ),
        BasePeer::TYPE_COLNAME => array (ProfilAgentPeer::ID, ProfilAgentPeer::LIBELLE_PROFIL_AGENT, ProfilAgentPeer::ID_PROFIL, ProfilAgentPeer::ID_ORGANISME, ProfilAgentPeer::MENU_MON_COMPTE, ProfilAgentPeer::MENU_DEMANDE_NOUVELLES, ProfilAgentPeer::MENU_DEMANDE_RECHERCHE, ProfilAgentPeer::MENU_ADMIN, ProfilAgentPeer::MENU_ADMIN_SERVICES, ProfilAgentPeer::MENU_ADMIN_UTILISATEURS, ProfilAgentPeer::MENU_RAPPORT, ProfilAgentPeer::MENU_RAPPORT_MENSUEL, ProfilAgentPeer::MENU_RAPPORT_GLOBAL, ProfilAgentPeer::MENU_RAPPORT_PERSONNALISE, ProfilAgentPeer::MENU_ADMIN_ENTITE_DEMANDEUR, ProfilAgentPeer::MENU_ADMIN_DEMANDEURS, ProfilAgentPeer::HISTORIQUE, ProfilAgentPeer::MENU_DEMANDE_AFFECTEES_ENTITE, ProfilAgentPeer::MENU_ADMIN_ENTITE, ProfilAgentPeer::MENU_ADMIN_THEME, ProfilAgentPeer::ETAT_PROFIL, ProfilAgentPeer::ACTION_AFFECTER_ENTITE, ProfilAgentPeer::ACTION_AFFECTER_AGENT, ProfilAgentPeer::SUPPRIMER_MODIFIIER_DEMANDE_ENTITE, ProfilAgentPeer::SUPPRIMER_MODIFIIER_ALL_DEMANDE, ProfilAgentPeer::TRAITER_TOUTE_DEMANDE, ProfilAgentPeer::DATE_INDICATIVE_REPONSE, ProfilAgentPeer::MODIFIER_THEME, ProfilAgentPeer::ACTION_RETOURNER_PRECEDENT, ProfilAgentPeer::ACTION_CLASSER_ERRONEE, ProfilAgentPeer::ACTION_CLASSER_HA, ProfilAgentPeer::ACTION_SOUMETTRE_REPONSE_CIRCUIT, ProfilAgentPeer::ACTION_TRANSMETTRE_REPONSE_REQ, ProfilAgentPeer::ACTION_CLOTURER, ProfilAgentPeer::SUIVRE_DEMANDE, ProfilAgentPeer::MENU_EN_PROPOSITION, ProfilAgentPeer::LIBELLE_PROFIL_AGENT_AR, ProfilAgentPeer::ACTION_PARTAGER_DEMANDE, ProfilAgentPeer::MENU_DEMANDE_PARTAGEES_ENTITE, ProfilAgentPeer::HABILITATION_GESTION_TACHE, ProfilAgentPeer::ACTION_AFFECTER_DEMANDE_CLOTURE, ProfilAgentPeer::VISIBILITE_DEMANDE_RECU, ProfilAgentPeer::MENU_MINISTERES, ProfilAgentPeer::DEMANDES_A_SUIVRE, ProfilAgentPeer::GESTION_INTERIM, ProfilAgentPeer::AFFICHAGE_SIMPLIFIE, ProfilAgentPeer::SUPPRIMER_TOUS, ProfilAgentPeer::AJOUT_DEMANDE, ProfilAgentPeer::TYPE_AJOUT_DEMANDE, ProfilAgentPeer::AJOUT_DEMANDE_ENTRANTE, ProfilAgentPeer::AJOUT_DEMANDE_SORTANTE, ProfilAgentPeer::AJOUT_DEMANDE_SORTANT, ProfilAgentPeer::AJOUT_DEMANDE_INTERNE, ProfilAgentPeer::AJOUT_DEMANDE_INTRAGROUPE, ProfilAgentPeer::MODIFICATION_CIRCUIT_VALIDATION_DEMANDE, ProfilAgentPeer::TRANSFERT_DEMANDE, ProfilAgentPeer::VISUALISER_ECHANGE, ProfilAgentPeer::CLOTURE_TRANSVERSE, ProfilAgentPeer::ECHANGE_HORS_SYS, ProfilAgentPeer::ECHANGE_REQUERANT, ProfilAgentPeer::AFFICHAGE_REPONSE_FINAL, ProfilAgentPeer::RETIRER_AFFECTATION, ProfilAgentPeer::AFFECTATION_EXTERNE, ProfilAgentPeer::COMPLEMENT_DEMANDE, ProfilAgentPeer::ENCOPIE_DEMANDE, ProfilAgentPeer::MODIFIER_DEMANDE, ProfilAgentPeer::SUPPRIMER_DEMANDE, ProfilAgentPeer::VISIBILITE_MAIL_TEL_BO, ProfilAgentPeer::ACCES_AUDIO_CA, ProfilAgentPeer::PROLONGER_DUREE_TRAITEMENT, ProfilAgentPeer::MODIF_DEMANDE_AFFECTE, ProfilAgentPeer::TABLEAU_BORD_SUPERVISION, ProfilAgentPeer::STATISTIQUE_SUPERVISION, ProfilAgentPeer::SUIVI_SUPERVISION, ProfilAgentPeer::FORCE_CLOTURE, ProfilAgentPeer::AFFECTER_GROUPE, ProfilAgentPeer::HISTORIQUE_CONSULTATION, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'LIBELLE_PROFIL_AGENT', 'ID_PROFIL', 'ID_ORGANISME', 'MENU_MON_COMPTE', 'MENU_DEMANDE_NOUVELLES', 'MENU_DEMANDE_RECHERCHE', 'MENU_ADMIN', 'MENU_ADMIN_SERVICES', 'MENU_ADMIN_UTILISATEURS', 'MENU_RAPPORT', 'MENU_RAPPORT_MENSUEL', 'MENU_RAPPORT_GLOBAL', 'MENU_RAPPORT_PERSONNALISE', 'MENU_ADMIN_ENTITE_DEMANDEUR', 'MENU_ADMIN_DEMANDEURS', 'HISTORIQUE', 'MENU_DEMANDE_AFFECTEES_ENTITE', 'MENU_ADMIN_ENTITE', 'MENU_ADMIN_THEME', 'ETAT_PROFIL', 'ACTION_AFFECTER_ENTITE', 'ACTION_AFFECTER_AGENT', 'SUPPRIMER_MODIFIIER_DEMANDE_ENTITE', 'SUPPRIMER_MODIFIIER_ALL_DEMANDE', 'TRAITER_TOUTE_DEMANDE', 'DATE_INDICATIVE_REPONSE', 'MODIFIER_THEME', 'ACTION_RETOURNER_PRECEDENT', 'ACTION_CLASSER_ERRONEE', 'ACTION_CLASSER_HA', 'ACTION_SOUMETTRE_REPONSE_CIRCUIT', 'ACTION_TRANSMETTRE_REPONSE_REQ', 'ACTION_CLOTURER', 'SUIVRE_DEMANDE', 'MENU_EN_PROPOSITION', 'LIBELLE_PROFIL_AGENT_AR', 'ACTION_PARTAGER_DEMANDE', 'MENU_DEMANDE_PARTAGEES_ENTITE', 'HABILITATION_GESTION_TACHE', 'ACTION_AFFECTER_DEMANDE_CLOTURE', 'VISIBILITE_DEMANDE_RECU', 'MENU_MINISTERES', 'DEMANDES_A_SUIVRE', 'GESTION_INTERIM', 'AFFICHAGE_SIMPLIFIE', 'SUPPRIMER_TOUS', 'AJOUT_DEMANDE', 'TYPE_AJOUT_DEMANDE', 'AJOUT_DEMANDE_ENTRANTE', 'AJOUT_DEMANDE_SORTANTE', 'AJOUT_DEMANDE_SORTANT', 'AJOUT_DEMANDE_INTERNE', 'AJOUT_DEMANDE_INTRAGROUPE', 'MODIFICATION_CIRCUIT_VALIDATION_DEMANDE', 'TRANSFERT_DEMANDE', 'VISUALISER_ECHANGE', 'CLOTURE_TRANSVERSE', 'ECHANGE_HORS_SYS', 'ECHANGE_REQUERANT', 'AFFICHAGE_REPONSE_FINAL', 'RETIRER_AFFECTATION', 'AFFECTATION_EXTERNE', 'COMPLEMENT_DEMANDE', 'ENCOPIE_DEMANDE', 'MODIFIER_DEMANDE', 'SUPPRIMER_DEMANDE', 'VISIBILITE_MAIL_TEL_BO', 'ACCES_AUDIO_CA', 'PROLONGER_DUREE_TRAITEMENT', 'MODIF_DEMANDE_AFFECTE', 'TABLEAU_BORD_SUPERVISION', 'STATISTIQUE_SUPERVISION', 'SUIVI_SUPERVISION', 'FORCE_CLOTURE', 'AFFECTER_GROUPE', 'HISTORIQUE_CONSULTATION', ),
        BasePeer::TYPE_FIELDNAME => array ('ID', 'LIBELLE_PROFIL_AGENT', 'ID_PROFIL', 'ID_ORGANISME', 'MENU_MON_COMPTE', 'MENU_DEMANDE_NOUVELLES', 'MENU_DEMANDE_RECHERCHE', 'MENU_ADMIN', 'MENU_ADMIN_SERVICES', 'MENU_ADMIN_UTILISATEURS', 'MENU_RAPPORT', 'MENU_RAPPORT_MENSUEL', 'MENU_RAPPORT_GLOBAL', 'MENU_RAPPORT_PERSONNALISE', 'MENU_ADMIN_ENTITE_DEMANDEUR', 'MENU_ADMIN_DEMANDEURS', 'HISTORIQUE', 'MENU_DEMANDE_AFFECTEES_ENTITE', 'MENU_ADMIN_ENTITE', 'MENU_ADMIN_THEME', 'ETAT_PROFIL', 'ACTION_AFFECTER_ENTITE', 'ACTION_AFFECTER_AGENT', 'SUPPRIMER_MODIFIIER_DEMANDE_ENTITE', 'SUPPRIMER_MODIFIIER_ALL_DEMANDE', 'TRAITER_TOUTE_DEMANDE', 'DATE_INDICATIVE_REPONSE', 'MODIFIER_THEME', 'ACTION_RETOURNER_PRECEDENT', 'ACTION_CLASSER_ERRONEE', 'ACTION_CLASSER_HA', 'ACTION_SOUMETTRE_REPONSE_CIRCUIT', 'ACTION_TRANSMETTRE_REPONSE_REQ', 'ACTION_CLOTURER', 'SUIVRE_DEMANDE', 'MENU_EN_PROPOSITION', 'LIBELLE_PROFIL_AGENT_AR', 'ACTION_PARTAGER_DEMANDE', 'MENU_DEMANDE_PARTAGEES_ENTITE', 'HABILITATION_GESTION_TACHE', 'ACTION_AFFECTER_DEMANDE_CLOTURE', 'VISIBILITE_DEMANDE_RECU', 'MENU_MINISTERES', 'DEMANDES_A_SUIVRE', 'GESTION_INTERIM', 'AFFICHAGE_SIMPLIFIE', 'SUPPRIMER_TOUS', 'AJOUT_DEMANDE', 'TYPE_AJOUT_DEMANDE', 'AJOUT_DEMANDE_ENTRANTE', 'AJOUT_DEMANDE_SORTANTE', 'AJOUT_DEMANDE_SORTANT', 'AJOUT_DEMANDE_INTERNE', 'AJOUT_DEMANDE_INTRAGROUPE', 'MODIFICATION_CIRCUIT_VALIDATION_DEMANDE', 'TRANSFERT_DEMANDE', 'VISUALISER_ECHANGE', 'CLOTURE_TRANSVERSE', 'ECHANGE_HORS_SYS', 'ECHANGE_REQUERANT', 'AFFICHAGE_REPONSE_FINAL', 'RETIRER_AFFECTATION', 'AFFECTATION_EXTERNE', 'COMPLEMENT_DEMANDE', 'ENCOPIE_DEMANDE', 'MODIFIER_DEMANDE', 'SUPPRIMER_DEMANDE', 'VISIBILITE_MAIL_TEL_BO', 'ACCES_AUDIO_CA', 'PROLONGER_DUREE_TRAITEMENT', 'MODIF_DEMANDE_AFFECTE', 'TABLEAU_BORD_SUPERVISION', 'STATISTIQUE_SUPERVISION', 'SUIVI_SUPERVISION', 'FORCE_CLOTURE', 'AFFECTER_GROUPE', 'HISTORIQUE_CONSULTATION', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. ProfilAgentPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'LibelleProfilAgent' => 1, 'IdProfil' => 2, 'IdOrganisme' => 3, 'MenuMonCompte' => 4, 'MenuDemandeNouvelles' => 5, 'MenuDemandeRecherche' => 6, 'MenuAdmin' => 7, 'MenuAdminServices' => 8, 'MenuAdminUtilisateurs' => 9, 'MenuRapport' => 10, 'MenuRapportMensuel' => 11, 'MenuRapportGlobal' => 12, 'MenuRapportPersonnalise' => 13, 'MenuAdminEntiteDemandeur' => 14, 'MenuAdminDemandeurs' => 15, 'Historique' => 16, 'MenuDemandeAffecteesEntite' => 17, 'MenuAdminEntite' => 18, 'MenuAdminTheme' => 19, 'EtatProfil' => 20, 'ActionAffecterEntite' => 21, 'ActionAffecterAgent' => 22, 'SupprimerModifiierDemandeEntite' => 23, 'SupprimerModifiierAllDemande' => 24, 'TraiterTouteDemande' => 25, 'DateIndicativeReponse' => 26, 'ModifierTheme' => 27, 'ActionRetournerPrecedent' => 28, 'ActionClasserErronee' => 29, 'ActionClasserHa' => 30, 'ActionSoumettreReponseCircuit' => 31, 'ActionTransmettreReponseReq' => 32, 'ActionCloturer' => 33, 'SuivreDemande' => 34, 'MenuEnProposition' => 35, 'LibelleProfilAgentAr' => 36, 'ActionPartagerDemande' => 37, 'MenuDemandePartageesEntite' => 38, 'HabilitationGestionTache' => 39, 'ActionAffecterDemandeCloture' => 40, 'VisibiliteDemandeRecu' => 41, 'MenuMinisteres' => 42, 'DemandesASuivre' => 43, 'GestionInterim' => 44, 'AffichageSimplifie' => 45, 'SupprimerTous' => 46, 'AjoutDemande' => 47, 'TypeAjoutDemande' => 48, 'AjoutDemandeEntrante' => 49, 'AjoutDemandeSortante' => 50, 'AjoutDemandeSortant' => 51, 'AjoutDemandeInterne' => 52, 'AjoutDemandeIntragroupe' => 53, 'ModificationCircuitValidationDemande' => 54, 'TransfertDemande' => 55, 'VisualiserEchange' => 56, 'ClotureTransverse' => 57, 'EchangeHorsSys' => 58, 'EchangeRequerant' => 59, 'AffichageReponseFinal' => 60, 'RetirerAffectation' => 61, 'AffectationExterne' => 62, 'ComplementDemande' => 63, 'EncopieDemande' => 64, 'ModifierDemande' => 65, 'SupprimerDemande' => 66, 'VisibiliteMailTelBo' => 67, 'AccesAudioCa' => 68, 'ProlongerDureeTraitement' => 69, 'ModifDemandeAffecte' => 70, 'TableauBordSupervision' => 71, 'StatistiqueSupervision' => 72, 'SuiviSupervision' => 73, 'ForceCloture' => 74, 'AffecterGroupe' => 75, 'HistoriqueConsultation' => 76, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'libelleProfilAgent' => 1, 'idProfil' => 2, 'idOrganisme' => 3, 'menuMonCompte' => 4, 'menuDemandeNouvelles' => 5, 'menuDemandeRecherche' => 6, 'menuAdmin' => 7, 'menuAdminServices' => 8, 'menuAdminUtilisateurs' => 9, 'menuRapport' => 10, 'menuRapportMensuel' => 11, 'menuRapportGlobal' => 12, 'menuRapportPersonnalise' => 13, 'menuAdminEntiteDemandeur' => 14, 'menuAdminDemandeurs' => 15, 'historique' => 16, 'menuDemandeAffecteesEntite' => 17, 'menuAdminEntite' => 18, 'menuAdminTheme' => 19, 'etatProfil' => 20, 'actionAffecterEntite' => 21, 'actionAffecterAgent' => 22, 'supprimerModifiierDemandeEntite' => 23, 'supprimerModifiierAllDemande' => 24, 'traiterTouteDemande' => 25, 'dateIndicativeReponse' => 26, 'modifierTheme' => 27, 'actionRetournerPrecedent' => 28, 'actionClasserErronee' => 29, 'actionClasserHa' => 30, 'actionSoumettreReponseCircuit' => 31, 'actionTransmettreReponseReq' => 32, 'actionCloturer' => 33, 'suivreDemande' => 34, 'menuEnProposition' => 35, 'libelleProfilAgentAr' => 36, 'actionPartagerDemande' => 37, 'menuDemandePartageesEntite' => 38, 'habilitationGestionTache' => 39, 'actionAffecterDemandeCloture' => 40, 'visibiliteDemandeRecu' => 41, 'menuMinisteres' => 42, 'demandesASuivre' => 43, 'gestionInterim' => 44, 'affichageSimplifie' => 45, 'supprimerTous' => 46, 'ajoutDemande' => 47, 'typeAjoutDemande' => 48, 'ajoutDemandeEntrante' => 49, 'ajoutDemandeSortante' => 50, 'ajoutDemandeSortant' => 51, 'ajoutDemandeInterne' => 52, 'ajoutDemandeIntragroupe' => 53, 'modificationCircuitValidationDemande' => 54, 'transfertDemande' => 55, 'visualiserEchange' => 56, 'clotureTransverse' => 57, 'echangeHorsSys' => 58, 'echangeRequerant' => 59, 'affichageReponseFinal' => 60, 'retirerAffectation' => 61, 'affectationExterne' => 62, 'complementDemande' => 63, 'encopieDemande' => 64, 'modifierDemande' => 65, 'supprimerDemande' => 66, 'visibiliteMailTelBo' => 67, 'accesAudioCa' => 68, 'prolongerDureeTraitement' => 69, 'modifDemandeAffecte' => 70, 'tableauBordSupervision' => 71, 'statistiqueSupervision' => 72, 'suiviSupervision' => 73, 'forceCloture' => 74, 'affecterGroupe' => 75, 'historiqueConsultation' => 76, ),
        BasePeer::TYPE_COLNAME => array (ProfilAgentPeer::ID => 0, ProfilAgentPeer::LIBELLE_PROFIL_AGENT => 1, ProfilAgentPeer::ID_PROFIL => 2, ProfilAgentPeer::ID_ORGANISME => 3, ProfilAgentPeer::MENU_MON_COMPTE => 4, ProfilAgentPeer::MENU_DEMANDE_NOUVELLES => 5, ProfilAgentPeer::MENU_DEMANDE_RECHERCHE => 6, ProfilAgentPeer::MENU_ADMIN => 7, ProfilAgentPeer::MENU_ADMIN_SERVICES => 8, ProfilAgentPeer::MENU_ADMIN_UTILISATEURS => 9, ProfilAgentPeer::MENU_RAPPORT => 10, ProfilAgentPeer::MENU_RAPPORT_MENSUEL => 11, ProfilAgentPeer::MENU_RAPPORT_GLOBAL => 12, ProfilAgentPeer::MENU_RAPPORT_PERSONNALISE => 13, ProfilAgentPeer::MENU_ADMIN_ENTITE_DEMANDEUR => 14, ProfilAgentPeer::MENU_ADMIN_DEMANDEURS => 15, ProfilAgentPeer::HISTORIQUE => 16, ProfilAgentPeer::MENU_DEMANDE_AFFECTEES_ENTITE => 17, ProfilAgentPeer::MENU_ADMIN_ENTITE => 18, ProfilAgentPeer::MENU_ADMIN_THEME => 19, ProfilAgentPeer::ETAT_PROFIL => 20, ProfilAgentPeer::ACTION_AFFECTER_ENTITE => 21, ProfilAgentPeer::ACTION_AFFECTER_AGENT => 22, ProfilAgentPeer::SUPPRIMER_MODIFIIER_DEMANDE_ENTITE => 23, ProfilAgentPeer::SUPPRIMER_MODIFIIER_ALL_DEMANDE => 24, ProfilAgentPeer::TRAITER_TOUTE_DEMANDE => 25, ProfilAgentPeer::DATE_INDICATIVE_REPONSE => 26, ProfilAgentPeer::MODIFIER_THEME => 27, ProfilAgentPeer::ACTION_RETOURNER_PRECEDENT => 28, ProfilAgentPeer::ACTION_CLASSER_ERRONEE => 29, ProfilAgentPeer::ACTION_CLASSER_HA => 30, ProfilAgentPeer::ACTION_SOUMETTRE_REPONSE_CIRCUIT => 31, ProfilAgentPeer::ACTION_TRANSMETTRE_REPONSE_REQ => 32, ProfilAgentPeer::ACTION_CLOTURER => 33, ProfilAgentPeer::SUIVRE_DEMANDE => 34, ProfilAgentPeer::MENU_EN_PROPOSITION => 35, ProfilAgentPeer::LIBELLE_PROFIL_AGENT_AR => 36, ProfilAgentPeer::ACTION_PARTAGER_DEMANDE => 37, ProfilAgentPeer::MENU_DEMANDE_PARTAGEES_ENTITE => 38, ProfilAgentPeer::HABILITATION_GESTION_TACHE => 39, ProfilAgentPeer::ACTION_AFFECTER_DEMANDE_CLOTURE => 40, ProfilAgentPeer::VISIBILITE_DEMANDE_RECU => 41, ProfilAgentPeer::MENU_MINISTERES => 42, ProfilAgentPeer::DEMANDES_A_SUIVRE => 43, ProfilAgentPeer::GESTION_INTERIM => 44, ProfilAgentPeer::AFFICHAGE_SIMPLIFIE => 45, ProfilAgentPeer::SUPPRIMER_TOUS => 46, ProfilAgentPeer::AJOUT_DEMANDE => 47, ProfilAgentPeer::TYPE_AJOUT_DEMANDE => 48, ProfilAgentPeer::AJOUT_DEMANDE_ENTRANTE => 49, ProfilAgentPeer::AJOUT_DEMANDE_SORTANTE => 50, ProfilAgentPeer::AJOUT_DEMANDE_SORTANT => 51, ProfilAgentPeer::AJOUT_DEMANDE_INTERNE => 52, ProfilAgentPeer::AJOUT_DEMANDE_INTRAGROUPE => 53, ProfilAgentPeer::MODIFICATION_CIRCUIT_VALIDATION_DEMANDE => 54, ProfilAgentPeer::TRANSFERT_DEMANDE => 55, ProfilAgentPeer::VISUALISER_ECHANGE => 56, ProfilAgentPeer::CLOTURE_TRANSVERSE => 57, ProfilAgentPeer::ECHANGE_HORS_SYS => 58, ProfilAgentPeer::ECHANGE_REQUERANT => 59, ProfilAgentPeer::AFFICHAGE_REPONSE_FINAL => 60, ProfilAgentPeer::RETIRER_AFFECTATION => 61, ProfilAgentPeer::AFFECTATION_EXTERNE => 62, ProfilAgentPeer::COMPLEMENT_DEMANDE => 63, ProfilAgentPeer::ENCOPIE_DEMANDE => 64, ProfilAgentPeer::MODIFIER_DEMANDE => 65, ProfilAgentPeer::SUPPRIMER_DEMANDE => 66, ProfilAgentPeer::VISIBILITE_MAIL_TEL_BO => 67, ProfilAgentPeer::ACCES_AUDIO_CA => 68, ProfilAgentPeer::PROLONGER_DUREE_TRAITEMENT => 69, ProfilAgentPeer::MODIF_DEMANDE_AFFECTE => 70, ProfilAgentPeer::TABLEAU_BORD_SUPERVISION => 71, ProfilAgentPeer::STATISTIQUE_SUPERVISION => 72, ProfilAgentPeer::SUIVI_SUPERVISION => 73, ProfilAgentPeer::FORCE_CLOTURE => 74, ProfilAgentPeer::AFFECTER_GROUPE => 75, ProfilAgentPeer::HISTORIQUE_CONSULTATION => 76, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'LIBELLE_PROFIL_AGENT' => 1, 'ID_PROFIL' => 2, 'ID_ORGANISME' => 3, 'MENU_MON_COMPTE' => 4, 'MENU_DEMANDE_NOUVELLES' => 5, 'MENU_DEMANDE_RECHERCHE' => 6, 'MENU_ADMIN' => 7, 'MENU_ADMIN_SERVICES' => 8, 'MENU_ADMIN_UTILISATEURS' => 9, 'MENU_RAPPORT' => 10, 'MENU_RAPPORT_MENSUEL' => 11, 'MENU_RAPPORT_GLOBAL' => 12, 'MENU_RAPPORT_PERSONNALISE' => 13, 'MENU_ADMIN_ENTITE_DEMANDEUR' => 14, 'MENU_ADMIN_DEMANDEURS' => 15, 'HISTORIQUE' => 16, 'MENU_DEMANDE_AFFECTEES_ENTITE' => 17, 'MENU_ADMIN_ENTITE' => 18, 'MENU_ADMIN_THEME' => 19, 'ETAT_PROFIL' => 20, 'ACTION_AFFECTER_ENTITE' => 21, 'ACTION_AFFECTER_AGENT' => 22, 'SUPPRIMER_MODIFIIER_DEMANDE_ENTITE' => 23, 'SUPPRIMER_MODIFIIER_ALL_DEMANDE' => 24, 'TRAITER_TOUTE_DEMANDE' => 25, 'DATE_INDICATIVE_REPONSE' => 26, 'MODIFIER_THEME' => 27, 'ACTION_RETOURNER_PRECEDENT' => 28, 'ACTION_CLASSER_ERRONEE' => 29, 'ACTION_CLASSER_HA' => 30, 'ACTION_SOUMETTRE_REPONSE_CIRCUIT' => 31, 'ACTION_TRANSMETTRE_REPONSE_REQ' => 32, 'ACTION_CLOTURER' => 33, 'SUIVRE_DEMANDE' => 34, 'MENU_EN_PROPOSITION' => 35, 'LIBELLE_PROFIL_AGENT_AR' => 36, 'ACTION_PARTAGER_DEMANDE' => 37, 'MENU_DEMANDE_PARTAGEES_ENTITE' => 38, 'HABILITATION_GESTION_TACHE' => 39, 'ACTION_AFFECTER_DEMANDE_CLOTURE' => 40, 'VISIBILITE_DEMANDE_RECU' => 41, 'MENU_MINISTERES' => 42, 'DEMANDES_A_SUIVRE' => 43, 'GESTION_INTERIM' => 44, 'AFFICHAGE_SIMPLIFIE' => 45, 'SUPPRIMER_TOUS' => 46, 'AJOUT_DEMANDE' => 47, 'TYPE_AJOUT_DEMANDE' => 48, 'AJOUT_DEMANDE_ENTRANTE' => 49, 'AJOUT_DEMANDE_SORTANTE' => 50, 'AJOUT_DEMANDE_SORTANT' => 51, 'AJOUT_DEMANDE_INTERNE' => 52, 'AJOUT_DEMANDE_INTRAGROUPE' => 53, 'MODIFICATION_CIRCUIT_VALIDATION_DEMANDE' => 54, 'TRANSFERT_DEMANDE' => 55, 'VISUALISER_ECHANGE' => 56, 'CLOTURE_TRANSVERSE' => 57, 'ECHANGE_HORS_SYS' => 58, 'ECHANGE_REQUERANT' => 59, 'AFFICHAGE_REPONSE_FINAL' => 60, 'RETIRER_AFFECTATION' => 61, 'AFFECTATION_EXTERNE' => 62, 'COMPLEMENT_DEMANDE' => 63, 'ENCOPIE_DEMANDE' => 64, 'MODIFIER_DEMANDE' => 65, 'SUPPRIMER_DEMANDE' => 66, 'VISIBILITE_MAIL_TEL_BO' => 67, 'ACCES_AUDIO_CA' => 68, 'PROLONGER_DUREE_TRAITEMENT' => 69, 'MODIF_DEMANDE_AFFECTE' => 70, 'TABLEAU_BORD_SUPERVISION' => 71, 'STATISTIQUE_SUPERVISION' => 72, 'SUIVI_SUPERVISION' => 73, 'FORCE_CLOTURE' => 74, 'AFFECTER_GROUPE' => 75, 'HISTORIQUE_CONSULTATION' => 76, ),
        BasePeer::TYPE_FIELDNAME => array ('ID' => 0, 'LIBELLE_PROFIL_AGENT' => 1, 'ID_PROFIL' => 2, 'ID_ORGANISME' => 3, 'MENU_MON_COMPTE' => 4, 'MENU_DEMANDE_NOUVELLES' => 5, 'MENU_DEMANDE_RECHERCHE' => 6, 'MENU_ADMIN' => 7, 'MENU_ADMIN_SERVICES' => 8, 'MENU_ADMIN_UTILISATEURS' => 9, 'MENU_RAPPORT' => 10, 'MENU_RAPPORT_MENSUEL' => 11, 'MENU_RAPPORT_GLOBAL' => 12, 'MENU_RAPPORT_PERSONNALISE' => 13, 'MENU_ADMIN_ENTITE_DEMANDEUR' => 14, 'MENU_ADMIN_DEMANDEURS' => 15, 'HISTORIQUE' => 16, 'MENU_DEMANDE_AFFECTEES_ENTITE' => 17, 'MENU_ADMIN_ENTITE' => 18, 'MENU_ADMIN_THEME' => 19, 'ETAT_PROFIL' => 20, 'ACTION_AFFECTER_ENTITE' => 21, 'ACTION_AFFECTER_AGENT' => 22, 'SUPPRIMER_MODIFIIER_DEMANDE_ENTITE' => 23, 'SUPPRIMER_MODIFIIER_ALL_DEMANDE' => 24, 'TRAITER_TOUTE_DEMANDE' => 25, 'DATE_INDICATIVE_REPONSE' => 26, 'MODIFIER_THEME' => 27, 'ACTION_RETOURNER_PRECEDENT' => 28, 'ACTION_CLASSER_ERRONEE' => 29, 'ACTION_CLASSER_HA' => 30, 'ACTION_SOUMETTRE_REPONSE_CIRCUIT' => 31, 'ACTION_TRANSMETTRE_REPONSE_REQ' => 32, 'ACTION_CLOTURER' => 33, 'SUIVRE_DEMANDE' => 34, 'MENU_EN_PROPOSITION' => 35, 'LIBELLE_PROFIL_AGENT_AR' => 36, 'ACTION_PARTAGER_DEMANDE' => 37, 'MENU_DEMANDE_PARTAGEES_ENTITE' => 38, 'HABILITATION_GESTION_TACHE' => 39, 'ACTION_AFFECTER_DEMANDE_CLOTURE' => 40, 'VISIBILITE_DEMANDE_RECU' => 41, 'MENU_MINISTERES' => 42, 'DEMANDES_A_SUIVRE' => 43, 'GESTION_INTERIM' => 44, 'AFFICHAGE_SIMPLIFIE' => 45, 'SUPPRIMER_TOUS' => 46, 'AJOUT_DEMANDE' => 47, 'TYPE_AJOUT_DEMANDE' => 48, 'AJOUT_DEMANDE_ENTRANTE' => 49, 'AJOUT_DEMANDE_SORTANTE' => 50, 'AJOUT_DEMANDE_SORTANT' => 51, 'AJOUT_DEMANDE_INTERNE' => 52, 'AJOUT_DEMANDE_INTRAGROUPE' => 53, 'MODIFICATION_CIRCUIT_VALIDATION_DEMANDE' => 54, 'TRANSFERT_DEMANDE' => 55, 'VISUALISER_ECHANGE' => 56, 'CLOTURE_TRANSVERSE' => 57, 'ECHANGE_HORS_SYS' => 58, 'ECHANGE_REQUERANT' => 59, 'AFFICHAGE_REPONSE_FINAL' => 60, 'RETIRER_AFFECTATION' => 61, 'AFFECTATION_EXTERNE' => 62, 'COMPLEMENT_DEMANDE' => 63, 'ENCOPIE_DEMANDE' => 64, 'MODIFIER_DEMANDE' => 65, 'SUPPRIMER_DEMANDE' => 66, 'VISIBILITE_MAIL_TEL_BO' => 67, 'ACCES_AUDIO_CA' => 68, 'PROLONGER_DUREE_TRAITEMENT' => 69, 'MODIF_DEMANDE_AFFECTE' => 70, 'TABLEAU_BORD_SUPERVISION' => 71, 'STATISTIQUE_SUPERVISION' => 72, 'SUIVI_SUPERVISION' => 73, 'FORCE_CLOTURE' => 74, 'AFFECTER_GROUPE' => 75, 'HISTORIQUE_CONSULTATION' => 76, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        ProfilAgentPeer::MENU_MON_COMPTE => array(
            ProfilAgentPeer::MENU_MON_COMPTE_0,
            ProfilAgentPeer::MENU_MON_COMPTE_1,
        ),
        ProfilAgentPeer::MENU_DEMANDE_NOUVELLES => array(
            ProfilAgentPeer::MENU_DEMANDE_NOUVELLES_0,
            ProfilAgentPeer::MENU_DEMANDE_NOUVELLES_1,
        ),
        ProfilAgentPeer::MENU_DEMANDE_RECHERCHE => array(
            ProfilAgentPeer::MENU_DEMANDE_RECHERCHE_0,
            ProfilAgentPeer::MENU_DEMANDE_RECHERCHE_1,
        ),
        ProfilAgentPeer::MENU_ADMIN => array(
            ProfilAgentPeer::MENU_ADMIN_0,
            ProfilAgentPeer::MENU_ADMIN_1,
        ),
        ProfilAgentPeer::MENU_ADMIN_SERVICES => array(
            ProfilAgentPeer::MENU_ADMIN_SERVICES_0,
            ProfilAgentPeer::MENU_ADMIN_SERVICES_1,
        ),
        ProfilAgentPeer::MENU_ADMIN_UTILISATEURS => array(
            ProfilAgentPeer::MENU_ADMIN_UTILISATEURS_0,
            ProfilAgentPeer::MENU_ADMIN_UTILISATEURS_1,
        ),
        ProfilAgentPeer::MENU_RAPPORT => array(
            ProfilAgentPeer::MENU_RAPPORT_0,
            ProfilAgentPeer::MENU_RAPPORT_1,
        ),
        ProfilAgentPeer::MENU_RAPPORT_MENSUEL => array(
            ProfilAgentPeer::MENU_RAPPORT_MENSUEL_0,
            ProfilAgentPeer::MENU_RAPPORT_MENSUEL_1,
        ),
        ProfilAgentPeer::MENU_RAPPORT_GLOBAL => array(
            ProfilAgentPeer::MENU_RAPPORT_GLOBAL_0,
            ProfilAgentPeer::MENU_RAPPORT_GLOBAL_1,
        ),
        ProfilAgentPeer::MENU_RAPPORT_PERSONNALISE => array(
            ProfilAgentPeer::MENU_RAPPORT_PERSONNALISE_0,
            ProfilAgentPeer::MENU_RAPPORT_PERSONNALISE_1,
        ),
        ProfilAgentPeer::MENU_ADMIN_ENTITE_DEMANDEUR => array(
            ProfilAgentPeer::MENU_ADMIN_ENTITE_DEMANDEUR_0,
            ProfilAgentPeer::MENU_ADMIN_ENTITE_DEMANDEUR_1,
        ),
        ProfilAgentPeer::MENU_ADMIN_DEMANDEURS => array(
            ProfilAgentPeer::MENU_ADMIN_DEMANDEURS_0,
            ProfilAgentPeer::MENU_ADMIN_DEMANDEURS_1,
        ),
        ProfilAgentPeer::HISTORIQUE => array(
            ProfilAgentPeer::HISTORIQUE_0,
            ProfilAgentPeer::HISTORIQUE_1,
        ),
        ProfilAgentPeer::MENU_DEMANDE_AFFECTEES_ENTITE => array(
            ProfilAgentPeer::MENU_DEMANDE_AFFECTEES_ENTITE_0,
            ProfilAgentPeer::MENU_DEMANDE_AFFECTEES_ENTITE_1,
        ),
        ProfilAgentPeer::MENU_ADMIN_ENTITE => array(
            ProfilAgentPeer::MENU_ADMIN_ENTITE_0,
            ProfilAgentPeer::MENU_ADMIN_ENTITE_1,
        ),
        ProfilAgentPeer::MENU_ADMIN_THEME => array(
            ProfilAgentPeer::MENU_ADMIN_THEME_0,
            ProfilAgentPeer::MENU_ADMIN_THEME_1,
        ),
        ProfilAgentPeer::ETAT_PROFIL => array(
            ProfilAgentPeer::ETAT_PROFIL_0,
            ProfilAgentPeer::ETAT_PROFIL_1,
        ),
        ProfilAgentPeer::ACTION_AFFECTER_ENTITE => array(
            ProfilAgentPeer::ACTION_AFFECTER_ENTITE_0,
            ProfilAgentPeer::ACTION_AFFECTER_ENTITE_1,
        ),
        ProfilAgentPeer::ACTION_AFFECTER_AGENT => array(
            ProfilAgentPeer::ACTION_AFFECTER_AGENT_0,
            ProfilAgentPeer::ACTION_AFFECTER_AGENT_1,
        ),
        ProfilAgentPeer::SUPPRIMER_MODIFIIER_DEMANDE_ENTITE => array(
            ProfilAgentPeer::SUPPRIMER_MODIFIIER_DEMANDE_ENTITE_0,
            ProfilAgentPeer::SUPPRIMER_MODIFIIER_DEMANDE_ENTITE_1,
        ),
        ProfilAgentPeer::SUPPRIMER_MODIFIIER_ALL_DEMANDE => array(
            ProfilAgentPeer::SUPPRIMER_MODIFIIER_ALL_DEMANDE_0,
            ProfilAgentPeer::SUPPRIMER_MODIFIIER_ALL_DEMANDE_1,
        ),
        ProfilAgentPeer::TRAITER_TOUTE_DEMANDE => array(
            ProfilAgentPeer::TRAITER_TOUTE_DEMANDE_0,
            ProfilAgentPeer::TRAITER_TOUTE_DEMANDE_1,
        ),
        ProfilAgentPeer::DATE_INDICATIVE_REPONSE => array(
            ProfilAgentPeer::DATE_INDICATIVE_REPONSE_0,
            ProfilAgentPeer::DATE_INDICATIVE_REPONSE_1,
        ),
        ProfilAgentPeer::MODIFIER_THEME => array(
            ProfilAgentPeer::MODIFIER_THEME_0,
            ProfilAgentPeer::MODIFIER_THEME_1,
        ),
        ProfilAgentPeer::ACTION_RETOURNER_PRECEDENT => array(
            ProfilAgentPeer::ACTION_RETOURNER_PRECEDENT_0,
            ProfilAgentPeer::ACTION_RETOURNER_PRECEDENT_1,
        ),
        ProfilAgentPeer::ACTION_CLASSER_ERRONEE => array(
            ProfilAgentPeer::ACTION_CLASSER_ERRONEE_0,
            ProfilAgentPeer::ACTION_CLASSER_ERRONEE_1,
        ),
        ProfilAgentPeer::ACTION_CLASSER_HA => array(
            ProfilAgentPeer::ACTION_CLASSER_HA_0,
            ProfilAgentPeer::ACTION_CLASSER_HA_1,
        ),
        ProfilAgentPeer::ACTION_SOUMETTRE_REPONSE_CIRCUIT => array(
            ProfilAgentPeer::ACTION_SOUMETTRE_REPONSE_CIRCUIT_0,
            ProfilAgentPeer::ACTION_SOUMETTRE_REPONSE_CIRCUIT_1,
        ),
        ProfilAgentPeer::ACTION_TRANSMETTRE_REPONSE_REQ => array(
            ProfilAgentPeer::ACTION_TRANSMETTRE_REPONSE_REQ_0,
            ProfilAgentPeer::ACTION_TRANSMETTRE_REPONSE_REQ_1,
        ),
        ProfilAgentPeer::ACTION_CLOTURER => array(
            ProfilAgentPeer::ACTION_CLOTURER_0,
            ProfilAgentPeer::ACTION_CLOTURER_1,
        ),
        ProfilAgentPeer::SUIVRE_DEMANDE => array(
            ProfilAgentPeer::SUIVRE_DEMANDE_0,
            ProfilAgentPeer::SUIVRE_DEMANDE_1,
        ),
        ProfilAgentPeer::MENU_EN_PROPOSITION => array(
            ProfilAgentPeer::MENU_EN_PROPOSITION_0,
            ProfilAgentPeer::MENU_EN_PROPOSITION_1,
        ),
        ProfilAgentPeer::ACTION_PARTAGER_DEMANDE => array(
            ProfilAgentPeer::ACTION_PARTAGER_DEMANDE_0,
            ProfilAgentPeer::ACTION_PARTAGER_DEMANDE_1,
        ),
        ProfilAgentPeer::MENU_DEMANDE_PARTAGEES_ENTITE => array(
            ProfilAgentPeer::MENU_DEMANDE_PARTAGEES_ENTITE_0,
            ProfilAgentPeer::MENU_DEMANDE_PARTAGEES_ENTITE_1,
        ),
        ProfilAgentPeer::HABILITATION_GESTION_TACHE => array(
            ProfilAgentPeer::HABILITATION_GESTION_TACHE_0,
            ProfilAgentPeer::HABILITATION_GESTION_TACHE_1,
        ),
        ProfilAgentPeer::ACTION_AFFECTER_DEMANDE_CLOTURE => array(
            ProfilAgentPeer::ACTION_AFFECTER_DEMANDE_CLOTURE_0,
            ProfilAgentPeer::ACTION_AFFECTER_DEMANDE_CLOTURE_1,
        ),
        ProfilAgentPeer::VISIBILITE_DEMANDE_RECU => array(
            ProfilAgentPeer::VISIBILITE_DEMANDE_RECU_0,
            ProfilAgentPeer::VISIBILITE_DEMANDE_RECU_1,
        ),
        ProfilAgentPeer::MENU_MINISTERES => array(
            ProfilAgentPeer::MENU_MINISTERES_0,
            ProfilAgentPeer::MENU_MINISTERES_1,
        ),
        ProfilAgentPeer::DEMANDES_A_SUIVRE => array(
            ProfilAgentPeer::DEMANDES_A_SUIVRE_0,
            ProfilAgentPeer::DEMANDES_A_SUIVRE_1,
        ),
        ProfilAgentPeer::GESTION_INTERIM => array(
            ProfilAgentPeer::GESTION_INTERIM_0,
            ProfilAgentPeer::GESTION_INTERIM_1,
        ),
        ProfilAgentPeer::AFFICHAGE_SIMPLIFIE => array(
            ProfilAgentPeer::AFFICHAGE_SIMPLIFIE_0,
            ProfilAgentPeer::AFFICHAGE_SIMPLIFIE_1,
        ),
        ProfilAgentPeer::SUPPRIMER_TOUS => array(
            ProfilAgentPeer::SUPPRIMER_TOUS_0,
            ProfilAgentPeer::SUPPRIMER_TOUS_1,
        ),
        ProfilAgentPeer::AJOUT_DEMANDE => array(
            ProfilAgentPeer::AJOUT_DEMANDE_0,
            ProfilAgentPeer::AJOUT_DEMANDE_1,
        ),
        ProfilAgentPeer::AJOUT_DEMANDE_ENTRANTE => array(
            ProfilAgentPeer::AJOUT_DEMANDE_ENTRANTE_0,
            ProfilAgentPeer::AJOUT_DEMANDE_ENTRANTE_1,
        ),
        ProfilAgentPeer::AJOUT_DEMANDE_SORTANTE => array(
            ProfilAgentPeer::AJOUT_DEMANDE_SORTANTE_0,
            ProfilAgentPeer::AJOUT_DEMANDE_SORTANTE_1,
        ),
        ProfilAgentPeer::AJOUT_DEMANDE_SORTANT => array(
            ProfilAgentPeer::AJOUT_DEMANDE_SORTANT_0,
            ProfilAgentPeer::AJOUT_DEMANDE_SORTANT_1,
        ),
        ProfilAgentPeer::AJOUT_DEMANDE_INTERNE => array(
            ProfilAgentPeer::AJOUT_DEMANDE_INTERNE_0,
            ProfilAgentPeer::AJOUT_DEMANDE_INTERNE_1,
        ),
        ProfilAgentPeer::AJOUT_DEMANDE_INTRAGROUPE => array(
            ProfilAgentPeer::AJOUT_DEMANDE_INTRAGROUPE_0,
            ProfilAgentPeer::AJOUT_DEMANDE_INTRAGROUPE_1,
        ),
        ProfilAgentPeer::MODIFICATION_CIRCUIT_VALIDATION_DEMANDE => array(
            ProfilAgentPeer::MODIFICATION_CIRCUIT_VALIDATION_DEMANDE_0,
            ProfilAgentPeer::MODIFICATION_CIRCUIT_VALIDATION_DEMANDE_1,
        ),
        ProfilAgentPeer::TRANSFERT_DEMANDE => array(
            ProfilAgentPeer::TRANSFERT_DEMANDE_0,
            ProfilAgentPeer::TRANSFERT_DEMANDE_1,
        ),
        ProfilAgentPeer::VISUALISER_ECHANGE => array(
            ProfilAgentPeer::VISUALISER_ECHANGE_0,
            ProfilAgentPeer::VISUALISER_ECHANGE_1,
        ),
        ProfilAgentPeer::CLOTURE_TRANSVERSE => array(
            ProfilAgentPeer::CLOTURE_TRANSVERSE_0,
            ProfilAgentPeer::CLOTURE_TRANSVERSE_1,
        ),
        ProfilAgentPeer::ECHANGE_HORS_SYS => array(
            ProfilAgentPeer::ECHANGE_HORS_SYS_0,
            ProfilAgentPeer::ECHANGE_HORS_SYS_1,
        ),
        ProfilAgentPeer::ECHANGE_REQUERANT => array(
            ProfilAgentPeer::ECHANGE_REQUERANT_0,
            ProfilAgentPeer::ECHANGE_REQUERANT_1,
        ),
        ProfilAgentPeer::AFFICHAGE_REPONSE_FINAL => array(
            ProfilAgentPeer::AFFICHAGE_REPONSE_FINAL_0,
            ProfilAgentPeer::AFFICHAGE_REPONSE_FINAL_1,
        ),
        ProfilAgentPeer::RETIRER_AFFECTATION => array(
            ProfilAgentPeer::RETIRER_AFFECTATION_0,
            ProfilAgentPeer::RETIRER_AFFECTATION_1,
        ),
        ProfilAgentPeer::AFFECTATION_EXTERNE => array(
            ProfilAgentPeer::AFFECTATION_EXTERNE_0,
            ProfilAgentPeer::AFFECTATION_EXTERNE_1,
        ),
        ProfilAgentPeer::COMPLEMENT_DEMANDE => array(
            ProfilAgentPeer::COMPLEMENT_DEMANDE_0,
            ProfilAgentPeer::COMPLEMENT_DEMANDE_1,
        ),
        ProfilAgentPeer::ENCOPIE_DEMANDE => array(
            ProfilAgentPeer::ENCOPIE_DEMANDE_0,
            ProfilAgentPeer::ENCOPIE_DEMANDE_1,
        ),
        ProfilAgentPeer::MODIFIER_DEMANDE => array(
            ProfilAgentPeer::MODIFIER_DEMANDE_0,
            ProfilAgentPeer::MODIFIER_DEMANDE_1,
        ),
        ProfilAgentPeer::SUPPRIMER_DEMANDE => array(
            ProfilAgentPeer::SUPPRIMER_DEMANDE_0,
            ProfilAgentPeer::SUPPRIMER_DEMANDE_1,
        ),
        ProfilAgentPeer::VISIBILITE_MAIL_TEL_BO => array(
            ProfilAgentPeer::VISIBILITE_MAIL_TEL_BO_0,
            ProfilAgentPeer::VISIBILITE_MAIL_TEL_BO_1,
        ),
        ProfilAgentPeer::ACCES_AUDIO_CA => array(
            ProfilAgentPeer::ACCES_AUDIO_CA_0,
            ProfilAgentPeer::ACCES_AUDIO_CA_1,
        ),
        ProfilAgentPeer::PROLONGER_DUREE_TRAITEMENT => array(
            ProfilAgentPeer::PROLONGER_DUREE_TRAITEMENT_0,
            ProfilAgentPeer::PROLONGER_DUREE_TRAITEMENT_1,
        ),
        ProfilAgentPeer::MODIF_DEMANDE_AFFECTE => array(
            ProfilAgentPeer::MODIF_DEMANDE_AFFECTE_0,
            ProfilAgentPeer::MODIF_DEMANDE_AFFECTE_1,
        ),
        ProfilAgentPeer::TABLEAU_BORD_SUPERVISION => array(
            ProfilAgentPeer::TABLEAU_BORD_SUPERVISION_0,
            ProfilAgentPeer::TABLEAU_BORD_SUPERVISION_1,
        ),
        ProfilAgentPeer::STATISTIQUE_SUPERVISION => array(
            ProfilAgentPeer::STATISTIQUE_SUPERVISION_0,
            ProfilAgentPeer::STATISTIQUE_SUPERVISION_1,
        ),
        ProfilAgentPeer::SUIVI_SUPERVISION => array(
            ProfilAgentPeer::SUIVI_SUPERVISION_0,
            ProfilAgentPeer::SUIVI_SUPERVISION_1,
        ),
        ProfilAgentPeer::FORCE_CLOTURE => array(
            ProfilAgentPeer::FORCE_CLOTURE_0,
            ProfilAgentPeer::FORCE_CLOTURE_1,
        ),
        ProfilAgentPeer::AFFECTER_GROUPE => array(
            ProfilAgentPeer::AFFECTER_GROUPE_0,
            ProfilAgentPeer::AFFECTER_GROUPE_1,
        ),
        ProfilAgentPeer::HISTORIQUE_CONSULTATION => array(
            ProfilAgentPeer::HISTORIQUE_CONSULTATION_0,
            ProfilAgentPeer::HISTORIQUE_CONSULTATION_1,
        ),
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = ProfilAgentPeer::getFieldNames($toType);
        $key = isset(ProfilAgentPeer::$fieldKeys[$fromType][$name]) ? ProfilAgentPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(ProfilAgentPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, ProfilAgentPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return ProfilAgentPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return ProfilAgentPeer::$enumValueSets;
    }

    /**
     * Gets the list of values for an ENUM column
     *
     * @param string $colname The ENUM column name.
     *
     * @return array list of possible values for the column
     */
    public static function getValueSet($colname)
    {
        $valueSets = ProfilAgentPeer::getValueSets();

        if (!isset($valueSets[$colname])) {
            throw new PropelException(sprintf('Column "%s" has no ValueSet.', $colname));
        }

        return $valueSets[$colname];
    }

    /**
     * Gets the SQL value for the ENUM column value
     *
     * @param string $colname ENUM column name.
     * @param string $enumVal ENUM value.
     *
     * @return int SQL value
     */
    public static function getSqlValueForEnum($colname, $enumVal)
    {
        $values = ProfilAgentPeer::getValueSet($colname);
        if (!in_array($enumVal, $values)) {
            throw new PropelException(sprintf('Value "%s" is not accepted in this enumerated column', $colname));
        }

        return array_search($enumVal, $values);
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. ProfilAgentPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ProfilAgentPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(ProfilAgentPeer::ID);
            $criteria->addSelectColumn(ProfilAgentPeer::LIBELLE_PROFIL_AGENT);
            $criteria->addSelectColumn(ProfilAgentPeer::ID_PROFIL);
            $criteria->addSelectColumn(ProfilAgentPeer::ID_ORGANISME);
            $criteria->addSelectColumn(ProfilAgentPeer::MENU_MON_COMPTE);
            $criteria->addSelectColumn(ProfilAgentPeer::MENU_DEMANDE_NOUVELLES);
            $criteria->addSelectColumn(ProfilAgentPeer::MENU_DEMANDE_RECHERCHE);
            $criteria->addSelectColumn(ProfilAgentPeer::MENU_ADMIN);
            $criteria->addSelectColumn(ProfilAgentPeer::MENU_ADMIN_SERVICES);
            $criteria->addSelectColumn(ProfilAgentPeer::MENU_ADMIN_UTILISATEURS);
            $criteria->addSelectColumn(ProfilAgentPeer::MENU_RAPPORT);
            $criteria->addSelectColumn(ProfilAgentPeer::MENU_RAPPORT_MENSUEL);
            $criteria->addSelectColumn(ProfilAgentPeer::MENU_RAPPORT_GLOBAL);
            $criteria->addSelectColumn(ProfilAgentPeer::MENU_RAPPORT_PERSONNALISE);
            $criteria->addSelectColumn(ProfilAgentPeer::MENU_ADMIN_ENTITE_DEMANDEUR);
            $criteria->addSelectColumn(ProfilAgentPeer::MENU_ADMIN_DEMANDEURS);
            $criteria->addSelectColumn(ProfilAgentPeer::HISTORIQUE);
            $criteria->addSelectColumn(ProfilAgentPeer::MENU_DEMANDE_AFFECTEES_ENTITE);
            $criteria->addSelectColumn(ProfilAgentPeer::MENU_ADMIN_ENTITE);
            $criteria->addSelectColumn(ProfilAgentPeer::MENU_ADMIN_THEME);
            $criteria->addSelectColumn(ProfilAgentPeer::ETAT_PROFIL);
            $criteria->addSelectColumn(ProfilAgentPeer::ACTION_AFFECTER_ENTITE);
            $criteria->addSelectColumn(ProfilAgentPeer::ACTION_AFFECTER_AGENT);
            $criteria->addSelectColumn(ProfilAgentPeer::SUPPRIMER_MODIFIIER_DEMANDE_ENTITE);
            $criteria->addSelectColumn(ProfilAgentPeer::SUPPRIMER_MODIFIIER_ALL_DEMANDE);
            $criteria->addSelectColumn(ProfilAgentPeer::TRAITER_TOUTE_DEMANDE);
            $criteria->addSelectColumn(ProfilAgentPeer::DATE_INDICATIVE_REPONSE);
            $criteria->addSelectColumn(ProfilAgentPeer::MODIFIER_THEME);
            $criteria->addSelectColumn(ProfilAgentPeer::ACTION_RETOURNER_PRECEDENT);
            $criteria->addSelectColumn(ProfilAgentPeer::ACTION_CLASSER_ERRONEE);
            $criteria->addSelectColumn(ProfilAgentPeer::ACTION_CLASSER_HA);
            $criteria->addSelectColumn(ProfilAgentPeer::ACTION_SOUMETTRE_REPONSE_CIRCUIT);
            $criteria->addSelectColumn(ProfilAgentPeer::ACTION_TRANSMETTRE_REPONSE_REQ);
            $criteria->addSelectColumn(ProfilAgentPeer::ACTION_CLOTURER);
            $criteria->addSelectColumn(ProfilAgentPeer::SUIVRE_DEMANDE);
            $criteria->addSelectColumn(ProfilAgentPeer::MENU_EN_PROPOSITION);
            $criteria->addSelectColumn(ProfilAgentPeer::LIBELLE_PROFIL_AGENT_AR);
            $criteria->addSelectColumn(ProfilAgentPeer::ACTION_PARTAGER_DEMANDE);
            $criteria->addSelectColumn(ProfilAgentPeer::MENU_DEMANDE_PARTAGEES_ENTITE);
            $criteria->addSelectColumn(ProfilAgentPeer::HABILITATION_GESTION_TACHE);
            $criteria->addSelectColumn(ProfilAgentPeer::ACTION_AFFECTER_DEMANDE_CLOTURE);
            $criteria->addSelectColumn(ProfilAgentPeer::VISIBILITE_DEMANDE_RECU);
            $criteria->addSelectColumn(ProfilAgentPeer::MENU_MINISTERES);
            $criteria->addSelectColumn(ProfilAgentPeer::DEMANDES_A_SUIVRE);
            $criteria->addSelectColumn(ProfilAgentPeer::GESTION_INTERIM);
            $criteria->addSelectColumn(ProfilAgentPeer::AFFICHAGE_SIMPLIFIE);
            $criteria->addSelectColumn(ProfilAgentPeer::SUPPRIMER_TOUS);
            $criteria->addSelectColumn(ProfilAgentPeer::AJOUT_DEMANDE);
            $criteria->addSelectColumn(ProfilAgentPeer::TYPE_AJOUT_DEMANDE);
            $criteria->addSelectColumn(ProfilAgentPeer::AJOUT_DEMANDE_ENTRANTE);
            $criteria->addSelectColumn(ProfilAgentPeer::AJOUT_DEMANDE_SORTANTE);
            $criteria->addSelectColumn(ProfilAgentPeer::AJOUT_DEMANDE_SORTANT);
            $criteria->addSelectColumn(ProfilAgentPeer::AJOUT_DEMANDE_INTERNE);
            $criteria->addSelectColumn(ProfilAgentPeer::AJOUT_DEMANDE_INTRAGROUPE);
            $criteria->addSelectColumn(ProfilAgentPeer::MODIFICATION_CIRCUIT_VALIDATION_DEMANDE);
            $criteria->addSelectColumn(ProfilAgentPeer::TRANSFERT_DEMANDE);
            $criteria->addSelectColumn(ProfilAgentPeer::VISUALISER_ECHANGE);
            $criteria->addSelectColumn(ProfilAgentPeer::CLOTURE_TRANSVERSE);
            $criteria->addSelectColumn(ProfilAgentPeer::ECHANGE_HORS_SYS);
            $criteria->addSelectColumn(ProfilAgentPeer::ECHANGE_REQUERANT);
            $criteria->addSelectColumn(ProfilAgentPeer::AFFICHAGE_REPONSE_FINAL);
            $criteria->addSelectColumn(ProfilAgentPeer::RETIRER_AFFECTATION);
            $criteria->addSelectColumn(ProfilAgentPeer::AFFECTATION_EXTERNE);
            $criteria->addSelectColumn(ProfilAgentPeer::COMPLEMENT_DEMANDE);
            $criteria->addSelectColumn(ProfilAgentPeer::ENCOPIE_DEMANDE);
            $criteria->addSelectColumn(ProfilAgentPeer::MODIFIER_DEMANDE);
            $criteria->addSelectColumn(ProfilAgentPeer::SUPPRIMER_DEMANDE);
            $criteria->addSelectColumn(ProfilAgentPeer::VISIBILITE_MAIL_TEL_BO);
            $criteria->addSelectColumn(ProfilAgentPeer::ACCES_AUDIO_CA);
            $criteria->addSelectColumn(ProfilAgentPeer::PROLONGER_DUREE_TRAITEMENT);
            $criteria->addSelectColumn(ProfilAgentPeer::MODIF_DEMANDE_AFFECTE);
            $criteria->addSelectColumn(ProfilAgentPeer::TABLEAU_BORD_SUPERVISION);
            $criteria->addSelectColumn(ProfilAgentPeer::STATISTIQUE_SUPERVISION);
            $criteria->addSelectColumn(ProfilAgentPeer::SUIVI_SUPERVISION);
            $criteria->addSelectColumn(ProfilAgentPeer::FORCE_CLOTURE);
            $criteria->addSelectColumn(ProfilAgentPeer::AFFECTER_GROUPE);
            $criteria->addSelectColumn(ProfilAgentPeer::HISTORIQUE_CONSULTATION);
        } else {
            $criteria->addSelectColumn($alias . '.ID');
            $criteria->addSelectColumn($alias . '.LIBELLE_PROFIL_AGENT');
            $criteria->addSelectColumn($alias . '.ID_PROFIL');
            $criteria->addSelectColumn($alias . '.ID_ORGANISME');
            $criteria->addSelectColumn($alias . '.MENU_MON_COMPTE');
            $criteria->addSelectColumn($alias . '.MENU_DEMANDE_NOUVELLES');
            $criteria->addSelectColumn($alias . '.MENU_DEMANDE_RECHERCHE');
            $criteria->addSelectColumn($alias . '.MENU_ADMIN');
            $criteria->addSelectColumn($alias . '.MENU_ADMIN_SERVICES');
            $criteria->addSelectColumn($alias . '.MENU_ADMIN_UTILISATEURS');
            $criteria->addSelectColumn($alias . '.MENU_RAPPORT');
            $criteria->addSelectColumn($alias . '.MENU_RAPPORT_MENSUEL');
            $criteria->addSelectColumn($alias . '.MENU_RAPPORT_GLOBAL');
            $criteria->addSelectColumn($alias . '.MENU_RAPPORT_PERSONNALISE');
            $criteria->addSelectColumn($alias . '.MENU_ADMIN_ENTITE_DEMANDEUR');
            $criteria->addSelectColumn($alias . '.MENU_ADMIN_DEMANDEURS');
            $criteria->addSelectColumn($alias . '.HISTORIQUE');
            $criteria->addSelectColumn($alias . '.MENU_DEMANDE_AFFECTEES_ENTITE');
            $criteria->addSelectColumn($alias . '.MENU_ADMIN_ENTITE');
            $criteria->addSelectColumn($alias . '.MENU_ADMIN_THEME');
            $criteria->addSelectColumn($alias . '.ETAT_PROFIL');
            $criteria->addSelectColumn($alias . '.ACTION_AFFECTER_ENTITE');
            $criteria->addSelectColumn($alias . '.ACTION_AFFECTER_AGENT');
            $criteria->addSelectColumn($alias . '.SUPPRIMER_MODIFIIER_DEMANDE_ENTITE');
            $criteria->addSelectColumn($alias . '.SUPPRIMER_MODIFIIER_ALL_DEMANDE');
            $criteria->addSelectColumn($alias . '.TRAITER_TOUTE_DEMANDE');
            $criteria->addSelectColumn($alias . '.DATE_INDICATIVE_REPONSE');
            $criteria->addSelectColumn($alias . '.MODIFIER_THEME');
            $criteria->addSelectColumn($alias . '.ACTION_RETOURNER_PRECEDENT');
            $criteria->addSelectColumn($alias . '.ACTION_CLASSER_ERRONEE');
            $criteria->addSelectColumn($alias . '.ACTION_CLASSER_HA');
            $criteria->addSelectColumn($alias . '.ACTION_SOUMETTRE_REPONSE_CIRCUIT');
            $criteria->addSelectColumn($alias . '.ACTION_TRANSMETTRE_REPONSE_REQ');
            $criteria->addSelectColumn($alias . '.ACTION_CLOTURER');
            $criteria->addSelectColumn($alias . '.SUIVRE_DEMANDE');
            $criteria->addSelectColumn($alias . '.MENU_EN_PROPOSITION');
            $criteria->addSelectColumn($alias . '.LIBELLE_PROFIL_AGENT_AR');
            $criteria->addSelectColumn($alias . '.ACTION_PARTAGER_DEMANDE');
            $criteria->addSelectColumn($alias . '.MENU_DEMANDE_PARTAGEES_ENTITE');
            $criteria->addSelectColumn($alias . '.HABILITATION_GESTION_TACHE');
            $criteria->addSelectColumn($alias . '.ACTION_AFFECTER_DEMANDE_CLOTURE');
            $criteria->addSelectColumn($alias . '.VISIBILITE_DEMANDE_RECU');
            $criteria->addSelectColumn($alias . '.MENU_MINISTERES');
            $criteria->addSelectColumn($alias . '.DEMANDES_A_SUIVRE');
            $criteria->addSelectColumn($alias . '.GESTION_INTERIM');
            $criteria->addSelectColumn($alias . '.AFFICHAGE_SIMPLIFIE');
            $criteria->addSelectColumn($alias . '.SUPPRIMER_TOUS');
            $criteria->addSelectColumn($alias . '.AJOUT_DEMANDE');
            $criteria->addSelectColumn($alias . '.TYPE_AJOUT_DEMANDE');
            $criteria->addSelectColumn($alias . '.AJOUT_DEMANDE_ENTRANTE');
            $criteria->addSelectColumn($alias . '.AJOUT_DEMANDE_SORTANTE');
            $criteria->addSelectColumn($alias . '.AJOUT_DEMANDE_SORTANT');
            $criteria->addSelectColumn($alias . '.AJOUT_DEMANDE_INTERNE');
            $criteria->addSelectColumn($alias . '.AJOUT_DEMANDE_INTRAGROUPE');
            $criteria->addSelectColumn($alias . '.MODIFICATION_CIRCUIT_VALIDATION_DEMANDE');
            $criteria->addSelectColumn($alias . '.TRANSFERT_DEMANDE');
            $criteria->addSelectColumn($alias . '.VISUALISER_ECHANGE');
            $criteria->addSelectColumn($alias . '.CLOTURE_TRANSVERSE');
            $criteria->addSelectColumn($alias . '.ECHANGE_HORS_SYS');
            $criteria->addSelectColumn($alias . '.ECHANGE_REQUERANT');
            $criteria->addSelectColumn($alias . '.AFFICHAGE_REPONSE_FINAL');
            $criteria->addSelectColumn($alias . '.RETIRER_AFFECTATION');
            $criteria->addSelectColumn($alias . '.AFFECTATION_EXTERNE');
            $criteria->addSelectColumn($alias . '.COMPLEMENT_DEMANDE');
            $criteria->addSelectColumn($alias . '.ENCOPIE_DEMANDE');
            $criteria->addSelectColumn($alias . '.MODIFIER_DEMANDE');
            $criteria->addSelectColumn($alias . '.SUPPRIMER_DEMANDE');
            $criteria->addSelectColumn($alias . '.VISIBILITE_MAIL_TEL_BO');
            $criteria->addSelectColumn($alias . '.ACCES_AUDIO_CA');
            $criteria->addSelectColumn($alias . '.PROLONGER_DUREE_TRAITEMENT');
            $criteria->addSelectColumn($alias . '.MODIF_DEMANDE_AFFECTE');
            $criteria->addSelectColumn($alias . '.TABLEAU_BORD_SUPERVISION');
            $criteria->addSelectColumn($alias . '.STATISTIQUE_SUPERVISION');
            $criteria->addSelectColumn($alias . '.SUIVI_SUPERVISION');
            $criteria->addSelectColumn($alias . '.FORCE_CLOTURE');
            $criteria->addSelectColumn($alias . '.AFFECTER_GROUPE');
            $criteria->addSelectColumn($alias . '.HISTORIQUE_CONSULTATION');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ProfilAgentPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProfilAgentPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(ProfilAgentPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(ProfilAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return                 ProfilAgent
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ProfilAgentPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return ProfilAgentPeer::populateObjects(ProfilAgentPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProfilAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            ProfilAgentPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(ProfilAgentPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param      ProfilAgent $obj A ProfilAgent object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            ProfilAgentPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A ProfilAgent object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof ProfilAgent) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or ProfilAgent object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(ProfilAgentPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   ProfilAgent Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(ProfilAgentPeer::$instances[$key])) {
                return ProfilAgentPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }
    
    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (ProfilAgentPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        ProfilAgentPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to profil_agent
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }
    
    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();
    
        // set the class once to avoid overhead in the loop
        $cls = ProfilAgentPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = ProfilAgentPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = ProfilAgentPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ProfilAgentPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (ProfilAgent object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = ProfilAgentPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = ProfilAgentPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + ProfilAgentPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ProfilAgentPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            ProfilAgentPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(ProfilAgentPeer::DATABASE_NAME)->getTable(ProfilAgentPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseProfilAgentPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseProfilAgentPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new ProfilAgentTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return ProfilAgentPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a ProfilAgent or Criteria object.
     *
     * @param      mixed $values Criteria or ProfilAgent object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProfilAgentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from ProfilAgent object
        }

        if ($criteria->containsKey(ProfilAgentPeer::ID) && $criteria->keyContainsValue(ProfilAgentPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ProfilAgentPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(ProfilAgentPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a ProfilAgent or Criteria object.
     *
     * @param      mixed $values Criteria or ProfilAgent object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProfilAgentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(ProfilAgentPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ProfilAgentPeer::ID);
            $value = $criteria->remove(ProfilAgentPeer::ID);
            if ($value) {
                $selectCriteria->add(ProfilAgentPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ProfilAgentPeer::TABLE_NAME);
            }

        } else { // $values is ProfilAgent object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(ProfilAgentPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the profil_agent table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProfilAgentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(ProfilAgentPeer::TABLE_NAME, $con, ProfilAgentPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ProfilAgentPeer::clearInstancePool();
            ProfilAgentPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a ProfilAgent or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or ProfilAgent object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(ProfilAgentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            ProfilAgentPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof ProfilAgent) { // it's a model object
            // invalidate the cache for this single object
            ProfilAgentPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ProfilAgentPeer::DATABASE_NAME);
            $criteria->add(ProfilAgentPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                ProfilAgentPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(ProfilAgentPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            ProfilAgentPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given ProfilAgent object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      ProfilAgent $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ProfilAgentPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ProfilAgentPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(ProfilAgentPeer::DATABASE_NAME, ProfilAgentPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return ProfilAgent
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = ProfilAgentPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(ProfilAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(ProfilAgentPeer::DATABASE_NAME);
        $criteria->add(ProfilAgentPeer::ID, $pk);

        $v = ProfilAgentPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return ProfilAgent[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProfilAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(ProfilAgentPeer::DATABASE_NAME);
            $criteria->add(ProfilAgentPeer::ID, $pks, Criteria::IN);
            $objs = ProfilAgentPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseProfilAgentPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseProfilAgentPeer::buildTableMap();

